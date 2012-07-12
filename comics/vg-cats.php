<?
$cg = new ComicGrabber('VG Cats');
$cg->verbosity(2);
$cg->filename('[filename].[ext]');
$cg->nodate();
$cg->ignore();
$cg->start('http://www.vgcats.com/comics/');
$cg->match('image', '</table>\s*?<br>\s*?<img src="(images/[0-9]+.jpg)" width="[0-9]+" height="[0-9]+"">\s*?<br>\s*?<br>\s*?');
$cg->match('previous', '<a href="(\?strip_id=[0-9]+)"><img src="back.gif" border="0"></a>');
$cg->grab();
