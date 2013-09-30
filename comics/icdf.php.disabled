<?
$cg = new ComicGrabber('ICDF');
$cg->verbosity(2);
$cg->start('http://icantdrawfeet.com/');
$cg->match('date', '<div id="comic">.*?<img height="[0-9]+px" width="[0-9]+px" src="http://icantdrawfeet.com/comics/([0-9]{4}-[0-9]{2}-[0-9]{2})-.*?.(?:png|jpg|gif)" alt=".*?" border="0" title=".*?"\s*/>');
$cg->match('image', '<div id="comic">.*?<img height="[0-9]+px" width="[0-9]+px" src="(http://.*?.(?:png|jpg|gif))" alt=".*?" border="0" title=".*?"\s*/>');
$cg->match('previous', '<a href="(http://icantdrawfeet.com/[^"<>]*?)"><img src="http://icantdrawfeet.com/pageimages/prevb.png" alt=".*?"\s*/></a>');
$cg->grab();
