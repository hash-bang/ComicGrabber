<?
$cg = new ComicGrabber('Penny Arcade');
$cg->verbosity(2);
$cg->start('http://www.penny-arcade.com/comic/');
$cg->match('date', '<li><a class="btnNews btn" href="http://www.penny-arcade.com/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})" title="News">News</a></li>', '$m_1-$m_2-$m_3');
$cg->match('image', '<div class="post comic">.*?<img src="(.+?)" alt=".*?"\s*/>.*?</div>');
$cg->match('previous', '<li><a class="btnPrev btn" href="(.+?)" title="Previous">Previous</a></li>');
$cg->grab();
