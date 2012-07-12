<?
$cg = new ComicGrabber('UserFriendly');
$cg->verbosity(2);
$cg->ignore();
$cg->filename('[filename].[ext]');
$cg->start('http://ars.userfriendly.org/cartoons/');
$cg->match('date', '<B>Cartoon for .+?</b><BR>.*?<a href="/cartoons/\?id=([0-9]{4})([0-9]{2})([0-9]{2})">', '$m_1-$m_2-$m_3');
$cg->match('image', '<a href="/cartoons/\?id=[0-9]+"><img border="0" src="(http://www.userfriendly.org/cartoons/archives/.+?)" width=[0-9"]+ height=[0-9"]+ ');
$cg->match('previous', '<area shape="rect" href="(.+?)" coords=".+?" alt="Previous Cartoon">');
$cg->grab();
