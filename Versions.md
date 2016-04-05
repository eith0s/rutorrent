
---

## Version history ##

---


  * #### Version 3.6 (16.10.2013 [r2450](https://code.google.com/p/rutorrent/source/detail?r=2450)) ####
    1. Added plugins [LookAt](PluginLookAt.md) and [\_noty](Plugin_noty.md).
    1. Fixed a lot of bugs.
    1. The code of the majority of plugis is changed.


---


  * #### Version 3.5 (07.12.2012 [r2254](https://code.google.com/p/rutorrent/source/detail?r=2254)) ####
    1. Added support for new rTorrent versions (0.9.2)
    1. Added plugin [filedrop](PluginFileDrop.md).
    1. Added possibility for addition of several torrent files (for last versions of FF, Chrome and Opera only).
    1. Fixed a lot of bugs.
    1. The code of the majority of plugis is changed.


---


  * #### Version 3.4 (29.02.2012 [r2014](https://code.google.com/p/rutorrent/source/detail?r=2014)) ####
    1. Added support for new rTorrent versions (0.9.0)
    1. Added plugins [screenshots](PluginScreenshots.md), [rutracker\_check](PluginRutracker_check.md), [history](PluginHistory.md), [extratio](PluginExtRatio.md), [check\_port](PluginCheckPort.md) and [\_task](Plugin_task.md).
    1. Possibility to control of plugins loading is added.
    1. Possibility to second sort of UI tabales is added (shift+LMB on the header of the corresponding column).
    1. The kind of some the interface elements is changed.
    1. Fixed a lot of bugs.
    1. The code of the majority of plugis is changed.


---


  * #### Version 3.3 (30.07.2011 [r1731](https://code.google.com/p/rutorrent/source/detail?r=1731)) ####
    1. Added support for new rTorrent versions (0.8.8, 0.8.9)
    1. Added support for new versions of browsers (IE 9.0, Opera 11.0, Firefox 5.0, etc).
    1. Added some new UI options (time format etc).
    1. Added some new commands from new versions of rTorrent (add peer, manual trackers update, files download strategy).
    1. The kind of some the interface elements (tracker's list, speed graph, plugins list) is changed.
    1. Added plugin `iPad` for support the device with some name. (Now plugin has experimental status).
    1. Possibility to take out storage of profiles of users in any place on a server disk (and not just in an installation directory ruTorrent, as earlier) is added.
    1. Performance of the interface object 'table' is increased.
    1. The state of panels (collapsed\expanded) in the list of categories remains now on a server's.
    1. Diagnostic system is improved.
    1. Fixed a lot of bugs.
    1. The code of the majority of plugis is changed.


---


  * #### Version 3.2 (16.11.2010 [r1552](https://code.google.com/p/rutorrent/source/detail?r=1552)) ####
    1. Added plugins [Theme](PluginTheme.md), [RSSURLRewrite](PluginRSSURLRewrite.md), [LoginMgr](PluginLoginMgr.md), [Feeds](PluginFeeds.md), [ExtSearch](PluginExtsearch.md).
    1. Added support for rtorrent svn [r1189](http://libtorrent.rakshasa.no/browser?rev=1189) (Attention! Not for unstable version 0.8.7)
    1. API rewritten to support plugins.
    1. Fixed a lot of errors.
    1. Removed depreciated plugins Darkpal and Search _([Theme](PluginTheme.md) and [ExtSearch](PluginExtsearch.md) replace these )_


---


  * #### Version 3.1 (25.05.2010 [r1167](https://code.google.com/p/rutorrent/source/detail?r=1167)) ####
    1. Added a directive to force single user mode  ($ forbidUserSettings).
    1. Added support for compressed php pages via an external program (gzip).
    1. Added support for browser's resource caching.
    1. Added plugins [cpuload](PluginCpuload.md), [HTTPRPC](PluginHTTPRPC.md).
    1. Added support for magnet-links (for svn rtorrent 0.8.6 `r1144` and above).
    1. Added support for svn rtorrent `r1148`.
    1. Added support for Opera browser, version 10.5x.
    1. New option "If rtorrent is not available try again after".
    1. Changed the setup of paths to external programs. (example: php, curl)
    1. Optimized downloadable graphic resources.
    1. Error with URL, containing a slash symbol in query is corrected.
    1. Error with support cookies in https feeds is corrected.
    1. The algorithm of descovering of the version of the peer's client is corrected.
    1. Fixed error with adding torrents in IE7.
    1. Fixed an error which makes it impossible to change to a new positions in torrent properties.
    1. Fixed diagnostic resource availability for the rtorrent user.
    1. Fixed a bug which resulted in a memory leak due to "Speed" tab being open.
    1. Fixed a bug which allowed a User to add torrents outside of $topDirectory.


---


  * #### Version 3.0 (March 10th 2010 [r844](https://code.google.com/p/rutorrent/source/detail?r=844)) ####
    1. Virtually all of the code rewritten from scratch in order to increase productivity.
    1. Added support for multiple users (each user must meet one instance of rtorrent).
    1. Added elements of different levels of access for users.
    1. Added ability to search through the list of local torrents.
    1. Added the "Quick Start" add torrent dialog (for the torrents, for which data already exists on disk).
    1. Added several plug-ins.
    1. Change the appearance of a number of UI elements.
    1. Fixed several bugs.


---


  * #### Version 2.9 (March 10th 2010 [r844](https://code.google.com/p/rutorrent/source/detail?r=844)) ####
    1. Fixed several minor bugs of version 2.8. In fact, this release is made for the sole purpose - to say goodbye to the 2.x branch and forget it as a nightmare.


---


  * #### Version 2.8 (27 Nov 2009 [r536](https://code.google.com/p/rutorrent/source/detail?r=536)) ####
    1. Fixed a bug with columns width change in some cases.
    1. Fixed incorrect program behavior when the name of a label on the category panel contains HTML-tags.
    1. Fixed some localization flaws.
    1. Fixed a bug that leads to the assignment of incorrect values to rTorrent parameters of hashing in case of change of these parameters via Settings dialog.
    1. Fixed a bug that caused incorrect work of the program, if the option magic\_quotes\_gpc is enabled on the server.
    1. Changed Category panel appearance.


---


  * #### Version 2.7 (30 Sep 2009 [r420](https://code.google.com/p/rutorrent/source/detail?r=420)) ####
    1. Added diagnostics on torrent addition.
    1. Added category "Error" on the Category panel.
    1. Added Serbian localization (partly, some resources are still in English).
    1. Added checking of PHP module PCRE presence (for FreeBSD only).
    1. Added plug-ins [geoip](PluginGeoIP.md), [ratio](PluginRatio.md), [show\_peers\_like\_wtorrent](PluginShow_peers_like_wtorrent.md), [seedingtime](PluginSeedingtime.md).
    1. Revised interface of column width change.
    1. Changed the project logo in accordance with the claim of the company BitTorrent Inc. representative (See  [Issue64](https://code.google.com/p/rutorrent/issues/detail?id=64)).
    1. Fixed a bug which sends plenty of requests to rTorrent during loading the interface that caused rTorrent crash in some cases.
    1. Fixed handling of torrent files that contain incorrect data (partly).
    1. Fixed handling HTTPS resouces (heretofore torrent-files from https-trackers might be loaded incorrectly in some cases).


---


  * #### Version 2.6 (11 Aug 2009 [r268](https://code.google.com/p/rutorrent/source/detail?r=268)) ####
    1. Added checking of xmlrpc-c library version correctness.
    1. Added output of global speed limits in the status bar or in the window title. If they exist.
    1. Added plug-in [tracklabels](PluginTracklabels.md).
    1. Area of categories has been extended because of some plug-ins that actively use it have been issued. ([RSS](PluginRSS.md),[tracklabels](PluginTracklabels.md)).
    1. Fixed incorrect displaying of the scroll-bar at lists of torrents, files, trackers etc.
    1. Fixed incorrect behavior ruTorrent at attempt to add a torrent-file with incorrect content (refers mainly to automatic downloads via plug-in [RSS](PluginRSS.md)).
    1. Fixed incorrect method of determination of the web-server's user ID. Before this it was assumed as owner of the script file. Refers to the diagnostics sub-system's work.
    1. Fixed incorrect method of determination of the rTorrent user ID. Before this it could not be determined if user had no access to the file rtorrent.lock. Refers to the diagnostics sub-system's work.
    1. Fixed opacity during moving of columns in the list of torrents (in some browsers).
    1. Fixed incorrect displaying of the time when a torrent has been added on the tab "General" - now the difference between time on the server and time on the local computer is being taken into account.
    1. Fixed mess of paths in plug-ins which could cause "redundant" folders creation and incorrect work of some plug-ins.