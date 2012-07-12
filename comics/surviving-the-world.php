<?
$cg = new ComicGrabber('Surviving the World');
$cg->verbosity(2);
$cg->start('http://survivingtheworld.net');
$cg->filename('[filename].[ext]');
$cg->nodate();
$cg->match('image', '<tr>\s*<td colspan="4" rowspan="[0-9]+" align="right" valign="top"><img src="(.*?)"');
$cg->match('previous', '<td width="120" valign="top"><a href="([a-zA-Z0-9\.]+?)" onmouseout="MM_swapImgRestore\(\)" onmouseover="MM_swapImage\(\'Previous\'');
$cg->grab();
