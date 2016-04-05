
---

# rTorrent install #

---




## Introduction ##

Most distros do not come with [rtorrent](http://libtorrent.rakshasa.no/) compiled with [xmlrpc-c](http://xmlrpc-c.sourceforge.net/)  Rutorrent _**REQUIRES**_ [rtorrent](http://libtorrent.rakshasa.no/) to be compiled with [xmlrpc-c](http://xmlrpc-c.sourceforge.net/)

## Dependencies: ##
  * [gcc](http://gcc.gnu.org/)
  * [ncurses](http://www.gnu.org/software/ncurses/)
  * [libsigc++-2.0](http://libsigc.sourceforge.net/)
  * [libssl](http://www.openssl.org/)
  * [xmlrpc-c](http://xmlrpc-c.sourceforge.net/)
  * _recommended_ [subversion](http://subversion.apache.org/) (for downloading latest xmlrpc-c version)

## Installing xmlrpc-c ##
It's recommended that you use a newer version of [xmlrpc-c](http://xmlrpc-c.sourceforge.net/)

For example, the svn version.

```
svn co http://svn.code.sf.net/p/xmlrpc-c/code/advanced xmlrpc-c
cd xmlrpc-c
./configure
make
make install
```

This installed xmlrpc-c-config to /usr/local/bin/xmlrpc-c-config
## fetch and install rtorrent ##
now, provided you have the other dependencies for rtorrent installed, you can install libtorrent and rtorrent as follows (note: _currently, the svn version of rtorrent has some changes in the xmlrpc-c api, please use the lates **STABLE** version of rtorrent, 0.8.6_

```
wget http://libtorrent.rakshasa.no/downloads/libtorrent-0.12.6.tar.gz
wget http://libtorrent.rakshasa.no/downloads/rtorrent-0.8.6.tar.gz
tar xzfv libtorrent-0.12.6.tar.gz
tar xzfv rtorrent-0.8.6.tar.gz
cd libtorrent-0.12.6
./configure
make
make install
cd ../rtorrent-0.8.6/
./configure --with-xmlrpc-c=/usr/local/bin/xmlrpc-c-config
make
make install
```


(_note:  on a [FreeBSD](http://www.freebsd.org/) system with [Ports](http://www.freebsd.org/ports/) installed, all of the above can be done with a single line of code]_


```
cd /usr/ports/net-p2p/rtorrent/ && make install clean
```

# Rtorrent Setup and Configuration #

Rtorrent can be run as any user (or multiple users).  Generally, it's a bad idea to run rtorrent as the root user, so create a unique user, and make sure to add a [.rtorrent.rc](http://libtorrent.rakshasa.no/browser/trunk/rtorrent/doc/rtorrent.rc?rev=latest)

make sure to enable scgi port with something like this:

```

scgi_port = 127.0.0.1:5001
```