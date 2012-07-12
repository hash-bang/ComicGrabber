<?
$cg = new ComicGrabber('Ilk');
$cg->verbosity(2);
$cg->filename('[filename].[ext]');
$cg->nodate();
$cg->start('http://www.somethingofthatilk.com');
$cg->match('image', "<img style='.*?' src='.(.*?)'");
$cg->match('previous', "<li class='bar'><a href=\"(index.php\?id=[0-9]+)\#comic\" onmouseover=\"document.prev");
$cg->grab();
