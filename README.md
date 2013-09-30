ComicGrabber
============
A simple modular comic grabber for internet comics.

The operation of this script is pretty simple. It works by running RegExps on the page continuously to match the image and the next page link which it follows until it hits an existing file.

This is a simple website scraper, all copyright is owned by the original authors.

Because this is a scraper there is no guarantee that the RegExps used to scrape are valid. I will try to update these as they change but there are no guarantees on anything working.


Setup
=====
Edit the settings.php file and fill in your own paths.


Usage
=====
Either just run the script standalone:

	./comicgrabber

Which should grab everything in the `comics/*.php` directory (not the `.disabled` files though - see below) OR

	./comicgrabber ilk pa

Run with specific plugins just to grab those.


Supported sites
===============

**LAST TESTED 2013-09-30**

Supported comics:
* [Dilbert](http://dilbert.com)
* [Penny Arcade](http://www.penny-arcade.com)
* [Something of That Ilk](http://www.somethingofthatilk.com/)
* [Surviving the World](http://survivingtheworld.net)
* [UserFriendly](http://www.userfriendly.org)
* [VG Cats](http://www.vgcats.com)
* [Virtual Shackles](http://www.virtualshackles.com/)

Currently not working for various reasons:
* [Dueling Analogs](http://www.duelinganalogs.com) - Site doesn't have a start page - uses DB design. Can't be bothered to recode main class to cope just yet.
* [I can't draw feet](http://www.icantdrawfeet.com/) - Site is displaying Joomla setup page


Bugs
====
Quite probably as the various sites change their designs.

Please report to the author when found.
