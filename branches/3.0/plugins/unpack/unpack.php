<?php
require_once( dirname(__FILE__)."/../../php/xmlrpc.php" );
require_once( dirname(__FILE__)."/../../php/lfs.php" );
require_once( dirname(__FILE__)."/../../php/cache.php");
eval( getPluginConf( 'unpack' ) );

class rUnpack
{
	public $hash = "unpack.dat";
	public $enabled = 0;
	public $path = "";
	public $addLabel = 0;
	public $addName = 0;

	static public function load()
	{
		$cache = new rCache();
		$up = new rUnpack();
		$cache->get( $up );
		return($up);
	}
	public function store()
	{
		$cache = new rCache();
		return($cache->set( $this ));
	}
	public function set()
	{
		if( !isset( $HTTP_RAW_POST_DATA ) )
			$HTTP_RAW_POST_DATA = file_get_contents( "php://input" );
		if( isset( $HTTP_RAW_POST_DATA ) )
		{
			$vars = split( '&', $HTTP_RAW_POST_DATA );
			$this->enabled = 0;
			$this->path_to_finished = "";
			foreach( $vars as $var )
			{
				$parts = split( "=", $var );
				if( $parts[0] == "unpack_enabled" )
					$this->enabled = $parts[1];
				else
				if( $parts[0] == "unpack_label" )
					$this->addLabel = $parts[1];
				else
				if( $parts[0] == "unpack_name" )
					$this->addName = $parts[1];
				else
				if( $parts[0] == "unpack_path" )
					$this->path = rawurldecode($parts[1]);
			}
		}
		$this->store();
	}
	public function get()
	{
		return("theWebUI.unpackData = { enabled: ".$this->enabled.", path : '".addslashes( $this->path ).
			"', addLabel: ".$this->addLabel.", addName: ".$this->addName." };\n");
	}
	public function startSilentTask($basename,$label,$name)
	{
		global $rootPath;
		global $pathToUnrar;
		global $pathToUnzip;
		if(empty($pathToUnrar))
			$pathToUnrar = "unrar";
		if(empty($pathToUnzip))
			$pathToUnzip = "unzip";
		$outPath = $this->path;
		if(is_dir($basename))
		{
			$postfix = "_dir";
			if(empty($outPath))
				$outPath = $basename;
			$basename = addslash($basename);
		}
		else
		{
			$postfix = "_file";
			if(empty($outPath))
				$outPath = dirname($basename);
		}
		$outPath = addslash($outPath);
        	if($this->addLabel && ($label!=''))
        		$outPath.=addslash($label);
        	if($this->addName && ($name!=''))
			$outPath.=addslash($name);
		exec( escapeshellarg($rootPath.'/plugins/unpack/unall'.$postfix.'.sh')." ".
			escapeshellarg($pathToUnrar)." ".
			escapeshellarg($basename)." ".
			escapeshellarg($outPath)." ".
			"/dev/null ".
			"/dev/null ".
			escapeshellarg($pathToUnzip) );

	}
	public function startTask( $hash, $outPath, $mode = null, $fileno = null, $all = false )
	{
		global $rootPath;
		global $pathToUnrar;
		global $pathToUnzip;

		$ret = false;
		if(!is_null($fileno) && !is_null($mode))
	        {
			$req = new rXMLRPCRequest( 
				new rXMLRPCCommand( "f.get_frozen_path", array($hash,intval($fileno)) ));
			if($req->success())
			{
				$filename = $req->val[0];
				if($filename=='')
				{
					$req = new rXMLRPCRequest( array(
						new rXMLRPCCommand( "d.open", $hash ),
						new rXMLRPCCommand( "f.get_frozen_path", array($hash,intval($fileno)) ),
						new rXMLRPCCommand( "d.close", $hash ) ) );
					if($req->success())
						$filename = $req->val[1];
				}
				if(empty($outPath))
					$outPath = dirname($filename);
				if(LFS::is_file($filename) && !empty($outPath))
				{
				        $taskNo = time();
					$logPath = '/tmp/rutorrent-task-log.'.$taskNo;
					$statusPath = '/tmp/rutorrent-task-status.'.$taskNo;
					if(empty($pathToUnrar))
						$pathToUnrar = "unrar";
					if(empty($pathToUnzip))
						$pathToUnzip = "unzip";
					$arh = (($mode == "zip") ? $pathToUnzip : $pathToUnrar);
					$c = new rXMLRPCCommand( "execute", array(
				                "sh", "-c",
					        escapeshellarg($rootPath.'/plugins/unpack/un'.$mode.'_file.sh')." ".
						escapeshellarg($arh)." ".
						escapeshellarg($filename)." ".
						escapeshellarg(addslash($outPath))." ".
						escapeshellarg($logPath)." ".
						escapeshellarg($statusPath)." &"));
					if($all)
						$c->addParameter("-v");
					$req = new rXMLRPCRequest( $c );
					if($req->success())
						$ret = array( "no"=>$taskNo, "name"=>$filename, "out"=>$outPath );
				}
			}
		}
		else
		{
			$req = new rXMLRPCRequest( array(
				new rXMLRPCCommand( "d.get_base_path", $hash ),
				new rXMLRPCCommand( "d.get_custom1", $hash ),
				new rXMLRPCCommand( "d.get_name", $hash ) )
				);
			if($req->success())
			{
				$basename = $req->val[0];
				$label = rawurldecode($req->val[1]);
				$tname = $req->val[2];
toLog($tname);
				if($basename=='')
				{
					$req = new rXMLRPCRequest( array(
						new rXMLRPCCommand( "d.open", $hash ),
						new rXMLRPCCommand( "d.get_base_path", $hash ),
						new rXMLRPCCommand( "d.close", $hash ) ) );
					if($req->success())
						$basename = $req->val[1];
				}
				$req = new rXMLRPCRequest( 
					new rXMLRPCCommand( "f.multicall", array($hash,"","f.get_path=") ));
				if($req->success())
				{
				        $rarPresent = false;
				        $zipPresent = false;
					foreach($req->val as $no=>$name)
					{
						if(USE_UNRAR && (preg_match("'.*\.(rar|r\d\d|\d\d\d)$'si", $name)==1))
							$rarPresent = true;
						else
						if(USE_UNZIP && (preg_match("'.*\.zip$'si", $name)==1))
							$zipPresent = true;
					}
					$mode = ($rarPresent && $zipPresent) ? 'all' : ($rarPresent ? 'rar' : ($zipPresent ? 'zip' : null));
					if($mode)
					{
					        $taskNo = time();
						$logPath = '/tmp/rutorrent-task-log.'.$taskNo;
						$statusPath = '/tmp/rutorrent-task-status.'.$taskNo;
						if(empty($pathToUnrar))
							$pathToUnrar = "unrar";
						if(empty($pathToUnzip))
							$pathToUnzip = "unzip";
						$arh = (($mode == "zip") ? $pathToUnzip : $pathToUnrar);
						if(is_dir($basename))
						{
							$postfix = "_dir";
							if(empty($outPath))
								$outPath = $basename;
							$basename = addslash($basename);
						}
						else
						{
							$postfix = "_file";
							if(empty($outPath))
								$outPath = dirname($basename);
						}
						$outPath = addslash($outPath);
				        	if($this->addLabel && ($label!=''))
				        		$outPath.=addslash($label);
				        	if($this->addName && ($tname!=''))
				        		$outPath.=addslash($tname);
						$req = new rXMLRPCRequest(new rXMLRPCCommand( "execute", array(
					                "sh", "-c",
						        escapeshellarg($rootPath.'/plugins/unpack/un'.$mode.$postfix.'.sh')." ".
							escapeshellarg($arh)." ".
							escapeshellarg($basename)." ".
							escapeshellarg($outPath)." ".
							escapeshellarg($logPath)." ".
							escapeshellarg($statusPath)." ".
							escapeshellarg($pathToUnzip)." &")));
						if($req->success())
							$ret = array( "no"=>$taskNo, "name"=>$basename, "out"=>$outPath );
					}
				}
			}
		}
		return($ret);
	}
	static public function checkTask( $taskNo )
	{
		$ret = false;
		$logPath = '/tmp/rutorrent-task-log.'.$taskNo;
		$statusPath = '/tmp/rutorrent-task-status.'.$taskNo;
		if(is_file($statusPath) && is_readable($statusPath))
		{
			$status = @file_get_contents($statusPath);
			if($status===false)
				$status = -1;
			else
				$status = trim($status);
			if(preg_match( '/^\d*$/',trim($status)) != 1)
				$status = -1;
			$errors = false;
			if(($status!=0) || SHOW_LOG_ON_SUCCESS)
				$errors = @file($logPath);
			if($errors===false)
				$errors=array();
			$errors = array_map('trim', $errors);
			$ret = array( "no"=>$taskNo, "status"=>$status, "errors"=>$errors );
			$req = new rXMLRPCRequest( array(
				new rXMLRPCCommand( "execute", array("rm",$statusPath) ),
				new rXMLRPCCommand( "execute", array("rm",$logPath) ) ));
			$req->run();
		}
		return($ret);
	}
}

?>
