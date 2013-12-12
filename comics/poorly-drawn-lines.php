<?
$cg = new ComicGrabber('Poorly Drawn Lines');
$cg->verbosity(2);
$cg->filename('[filename].[ext]');
$cg->nodate();
$cg->start('http://poorlydrawnlines.com');
$cg->match('image', '<div id="post">.*?<img class=".*?align.*? src="(.*?)"');
$cg->match('previous', '<li class="previous"><a href="(.*?)"');
$cg->grab();
