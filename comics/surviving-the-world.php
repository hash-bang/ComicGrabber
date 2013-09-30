<?
$cg = new ComicGrabber('Surviving the World');
$cg->verbosity(2);
$cg->start('http://survivingtheworld.net');
$cg->filename('[filename].[ext]');
$cg->nodate();
$cg->match('image', '<div class="img">.*?<img src="(.*?)".*?/>.*?</div>');
$cg->match('previous', '<li class="previous">.*?<a href="(.*?)">.*?</a>.*?</li>');
$cg->grab();
