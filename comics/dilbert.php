<?
$cg = new ComicGrabber('Dilbert');
$cg->verbosity(2);
$cg->start('http://dilbert.com');
$cg->match('date', '<div class="STR_Content">.+?<div class="STR_Image">.+?<a href="/strips/comic/([0-9]{4}-[0-9]{2}-[0-9]{2})/">');
$cg->match('image', '<div class="STR_Content">.+?<div class="STR_Image">.+?<a href="/strips/comic/[0-9]{4}-[0-9]{2}-[0-9]{2}/"><img .*? src="(.+?)"');
$cg->match('previous', '<a href="(/[0-9]{4}-[0-9]{2}-[0-9]{2}/)" class="STR_Prev.*?"><span>Previous</span></a>');
$cg->grab();
