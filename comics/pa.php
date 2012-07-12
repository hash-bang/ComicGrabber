<?
$cg = new ComicGrabber('Penny Arcade');
$cg->verbosity(2);
$cg->start('http://www.penny-arcade.com/comic/');
$cg->match('date', '<li class="float_left news"><a href="/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/">News</a></li>', '$m_1-$m_2-$m_3');
$cg->match('image', '<div class="body">.*?<img src="(.+?)" alt=".*?"\s*/>');
$cg->match('previous', '<li class="float_left back"><a href="(.+?)">Back</a></li>');
$cg->grab();
