<?
$cg = new ComicGrabber('Ilk');
$cg->verbosity(2);
$cg->filename('[filename].[ext]');
$cg->nodate();
$cg->start('http://www.somethingofthatilk.com');
$cg->match('image', '<div class="comic">.*?<img src="(.*?)"');
$cg->match('previous', '<li><a class="prev" href="(index.php\?id=[0-9]+)">');
$cg->grab();
