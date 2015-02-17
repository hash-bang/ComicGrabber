<?
$cg = new ComicGrabber('Dilbert');
$cg->verbosity(2);
$cg->filename('[year][month][day].gif');
$cg->start('http://dilbert.com/strip/' . date('Y-m-d')); // Have to request todays date explicitly
$cg->match('date', '<div class="STR_Content">.+?<div class="STR_Image">.+?<a href="/strips/comic/([0-9]{4}-[0-9]{2}-[0-9]{2})/">');
$cg->match('date', '<div class="comic-item-container js_comic_container_([0-9]{4}-[0-9]{2}-[0-9]{2})"');
$cg->match('image', '<img alt=".*?" class="img-responsive img-comic".*?src="(http://assets.amuniversal.com/.*?)".*?/>');
$cg->match('previous', '<div class="nav-comic nav-left">.*?<a href="(/strip/.*?)" alt="Older Strip">');
$cg->grab();
