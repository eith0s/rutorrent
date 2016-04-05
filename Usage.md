
---

# How to use rutorrent #

---




&lt;wiki:TOC /&gt;



## Introduction ##

This page will serve as a general "how to" for the basic day to day use or rutorrent.

## Menu Bars ##

The following is a list of each menu item.

### Top Menu Bar ![http://rutorrent.googlecode.com/svn/wiki/images/menubar.png](http://rutorrent.googlecode.com/svn/wiki/images/menubar.png) ###

The top Menu Bar has some quick action buttons.
These include:
  * ![http://rutorrent.googlecode.com/svn/wiki/images/icon01start.png](http://rutorrent.googlecode.com/svn/wiki/images/icon01start.png) Add a torrent
  * ![http://rutorrent.googlecode.com/svn/wiki/images/icon02remove.png](http://rutorrent.googlecode.com/svn/wiki/images/icon02remove.png) Remove
  * ![http://rutorrent.googlecode.com/svn/wiki/images/icon03play.png](http://rutorrent.googlecode.com/svn/wiki/images/icon03play.png) Start
  * ![http://rutorrent.googlecode.com/svn/wiki/images/icon04pause.png](http://rutorrent.googlecode.com/svn/wiki/images/icon04pause.png) Pause
  * ![http://rutorrent.googlecode.com/svn/wiki/images/icon05stop.png](http://rutorrent.googlecode.com/svn/wiki/images/icon05stop.png) Stop
  * ![http://rutorrent.googlecode.com/svn/wiki/images/icon06settings.png](http://rutorrent.googlecode.com/svn/wiki/images/icon06settings.png) Settings
  * ![http://rutorrent.googlecode.com/svn/wiki/images/icon07about.png](http://rutorrent.googlecode.com/svn/wiki/images/icon07about.png) About
  * ![http://rutorrent.googlecode.com/svn/wiki/images/icon08create.png](http://rutorrent.googlecode.com/svn/wiki/images/icon08create.png) Create (requires the [Create](PluginCreate.md) plugin)
  * ![http://rutorrent.googlecode.com/svn/wiki/images/icon09rss.png](http://rutorrent.googlecode.com/svn/wiki/images/icon09rss.png) RSS (requires the [RSS](PluginRSS.md) plugin)

### Left Side Menu ###

<img src='http://rutorrent.googlecode.com/svn/wiki/images/leftside.png' align='left'>
<ul><li><b>State: </b>Sorts torrents by category<br>
<br>
<BR CLEAR="all"><br>
<br>
<br>
<b>All: </b>All torrents, running, stopped, seeding, finished.<br>
<br>
<BR CLEAR="all"><br>
<br>
<br>
<b>Download: </b>Torrents which are downloading (stopped, but incomplete torrents will show here).<br>
<br>
<BR CLEAR="all"><br>
<br>
<br>
<b>Finished: </b>Finished torrents, (seeding or complete).<br>
<br>
<BR CLEAR="all"><br>
<br>
<br>
<b>Active: </b>Torrents which are currently uploading or downloading data.<br>
<br>
<BR CLEAR="all"><br>
<br>
<br>
<b>Inactive: </b>Torrents which are not currently uploading or downloading data.<br>
<br>
<BR CLEAR="all"><br>
<br>
<br>
<b>Error: </b>Torrents which have received an error notification from the tracker.<br>
<br>
<BR CLEAR="all"><br>
<br>
<br>
</li><li><b>Labels: </b>Lets you sort by label.<br>
<br>
<BR><br>
<br>
<br>
<br>
<BR CLEAR="all"><br>
<br>
<br>
<br>
<br>
<BR><br>
<br>
<br>
<br>
<BR><br>
<br>
<br>
<br>
<BR><br>
<br>
<br>
</li><li><b>Tracker: </b>Lets you sort by Tracker (Requires the <a href='PluginTracklabels.md'>TrackLabels</a> Plugin)<br>
<br>
<BR><br>
<br>
<br>
<br>
<BR CLEAR="all"><br>
<br>
<br>
<br>
<br>
<BR><br>
<br>
<br>
<br>
<BR><br>
<br>
<br>
<br>
<BR><br>
<br>
<br>
<br>
<BR><br>
<br>
<br>
<br>
<BR><br>
<br>
<br>
<br>
<BR><br>
<br>
<br>
</li><li><b>Search: </b>Lets you sort by local Search Query.<br>
<br>
<BR CLEAR="all"><br>
<br>
<br>
</li><li><b>Feeds: </b>Lets you view rss items (requires the <a href='PluginRSS.md'>RSS</a> plugin).<br>
<br>
<BR><br>
<br>
<br>
<br>
<BR CLEAR="all"><br>
<br>
<br>
<br>
<br>
<BR><br>
<br>
<br>
<br>
<BR><br>
<br>
<br>
<br>
<BR><br>
<br>
<br>
<br>
<BR><br>
<br>
<br>
<br>
<br>
<BR CLEAR="all"><br>
<br>
</li></ul>


<h3>Tabs <img src='http://rutorrent.googlecode.com/svn/wiki/images/tabs2.png' /></h3>

The Tabs on the lower half of the screen allow access to various types of information.  Some of these items are only available by plugin.<br>
The tabs are:<br>
<ul><li><b>General</b> : This tab is exactly what it sounds like, general information for whatever torrent you have selected.  You can also find remaining disk space here.<br>
</li><li><b>Files</b> : This tab shows all files or parts for the current torrent selected, and download status of each.  You can use this tab to set per-file download priority. (Can also be used to download via http if you have <a href='PluginData.md'>Data</a> plugin installed).<br>
</li><li><b>Trackers</b> : This tab shows the tracker(s) for the current torrent selected.<br>
</li><li><b>Peers</b> : This tab displays peer information for the current torrent. (Will also show country flag for each peer if <a href='PluginGeoIP.md'>GeoIP</a> is installed).<br>
</li><li><b>Speed</b> : This tab shows a graph of upload and download speed over the last few minutes.<br>
</li><li><b>Plugins</b> : This tab shows installed and active plugins.<br>
</li><li><b>Trafic</b> : This tab shows per tracker, and overal Traffic statistics in a variety of time intervals. (Requires <a href='PluginTrafic.md'>Traffic Plugin</a>.<br>
</li><li><b>Chunks</b> : This tab shows which pieces of a torrent have downloaded (Requires <a href='PluginChunks.md'>Chunks</a> Plugin).<br>
</li><li><b>Logger</b> : This tab shows error messages, and other system events.</li></ul>

<h3>Bottom Menu Bar <img src='http://rutorrent.googlecode.com/svn/wiki/images/bottomrg.png' /></h3>

The Bottom menu bar was added in ruTorrent 3.0.  It shows general "total" speed information, and can be used to set the server Throttle level. Also shows remaining space if you have <a href='PluginDiskspace.md'>Diskspace</a> installed.<br>
<br>
<h2>General Use</h2>

Now that you know where the buttons are, this section is designed to explain how to use them.<br>
<br>
<h3>Adding Torrents</h3>
To begin adding torrents, click the "add a torrent" menu button (<img src='http://rutorrent.googlecode.com/svn/wiki/images/icon01start.png' />)<br>
<br>
This should open the following menu:<br>
<br>
<img src='http://rutorrent.googlecode.com/svn/wiki/images/addmi.png' />

This gives you 2 options for adding torrents<br>
<br>
<h4>Add torrent via url</h4>

If you know the url for the torrent you wish to download, you can just add it like shown in the following screenshot <i><b>(note: you can leave the directory space blank if you like, doing so will download to the base download directory set in your .rtorrent.rc)</b></i>

<img src='http://rutorrent.googlecode.com/svn/wiki/images/addurlc.png' />

<h4>Add torrent via direct upload of .torrent file</h4>

You might find it more convenient to download the .torrent file, and uploaded to the webui.  To do this, click the "Choose file" button, this should open a window like this:<br>
<br>
<img src='http://rutorrent.googlecode.com/svn/wiki/images/addtorrent1.png' />

simply browse to the .torrent file you wish to add, and click "open" <i><b>(or "ok" on some browsers)</b></i>   This should add the .torrent file to the location where "Choose file" was previously.<br>
<br>
<img src='http://rutorrent.googlecode.com/svn/wiki/images/addtorrent2.png' />

Now, simply click "Add File"<br>
<br>
<h3>Stop, Pause, Remove</h3>

There are 2 methods to stop, pause or remove torrents.<br>
<br>
<br>
<h4>Using the Menu Bar buttons</h4>

This is really almost self explanatory...but you can use the top menu buttons to stop pause and remove torrents.  To do so, simply select a torrent you wish to control:<br>
<br>
<img src='http://rutorrent.googlecode.com/svn/wiki/images/controls.png' />

and click the option on the top bar you wish to use.<br>
<br>
<ul><li>to stop click <img src='http://rutorrent.googlecode.com/svn/wiki/images/icon05stop.png' />
</li><li>to pause click <img src='http://rutorrent.googlecode.com/svn/wiki/images/icon04pause.png' />
</li><li>to remove click <img src='http://rutorrent.googlecode.com/svn/wiki/images/icon02remove.png' /></li></ul>


<h4>Using the right click menu</h4>

You can also right click a torrent from the list, bringing up a menu with different options.<br>
<br>
<i><b>(note: some of the options in the screenshot below are only available by plugin.  See <a href='Plugins.md'>Plugins</a> for more details)</b></i>

<img src='http://rutorrent.googlecode.com/svn/wiki/images/rightclick.png' />

<h3>Local Search</h3>

A new "local search" has been included with the base since 3.0.  This is infact the default option in 3.0:<br>
<br>
<img src='http://rutorrent.googlecode.com/svn/wiki/images/localsearch.png' />

The local search option allows you to search the current list of running torrents.  It also adds a new menu category for each search on the left hand of the screen which will stay open until you close the webui or manually remove it.<br>
<br>
<img src='http://rutorrent.googlecode.com/svn/wiki/images/localsearchubuntu1.png' />

<img src='http://rutorrent.googlecode.com/svn/wiki/images/localsearchubuntu2.png' />

<img src='http://rutorrent.googlecode.com/svn/wiki/images/localsearchubuntu3.png' />