<?
$cg = new ComicGrabber('Penny Arcade');
$cg->verbosity(2);
$cg->start('http://www.penny-arcade.com/comic/');
$cg->match('date', '<h4><a href="http://www.penny-arcade.com/news/post/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/.*" title=".*?">Read News Post</a></h4>', '$m_1-$m_2-$m_3');
$cg->match('image', '<div id="comicFrame"><a href=".*?" title="Next"><img src="(.+?)".*?/>');
$cg->match('previous', '<li><a class="btn btnPrev" href="(.+?)" title="Previous">Previous</a></li>');
$cg->grab();
