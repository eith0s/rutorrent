
---

# HTTPRPC Plugin #

---




&lt;wiki:TOC /&gt;



## Description ##

This plugin is designed as a easy to use replacement for the mod\_scgi (or similar) webserver module, with emphasis on extremely low bandwidth use. If you install this plugin, you do not need to use mod\_scgi or [the RPC Plugin](PluginRPC.md). _Note: This plugin requires a faster server, and is not recommended for embedded systems, like a router or slow computer._

It simplifies system setup and adds a layer of security. (There is no /RPC2 mount point exposed with this plugins. _**This does not mean you can remove the "$XMLRPCMountPoint" entry from your rutorrent/conf/config.php file**._)

On the otherhand, because this plugin implements the scgi function in php, it does add additional load (in comparison to mod\_scgi)

This plugin was sponsored by [Alexander](http://forums.rutorrent.org/index.php?action=profile;u=213) from the [rutorrent forums](http://forums.rutorrent.org), and is the direct result of a bounty.

Use of this plugin reduces bandwidth 10 fold.


_**This plugin requires php 5.2.x or higher and the json php module**_