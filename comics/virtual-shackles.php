<?
$cg = new ComicGrabber('Virtual Shackles');
$cg->verbosity(2);
$cg->filename('[filename].[ext]');
$cg->nodate();
$cg->start('http://www.virtualshackles.com/');
$cg->match('image', '<meta name="og:image" content="(.*?)" />');
$cg->match('previous', '<a href ="(/[0-9]+)" title="Previous">');
$cg->grab();
