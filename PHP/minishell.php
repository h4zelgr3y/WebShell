<?php
$root = __DIR__;
$style1='color:#000;';
$style2='color:#00a;font-weight:bold;';

function updir($ADir){
	$ADir = substr($ADir, 0, strlen($ADir)-1);
	$ADir = substr($ADir, 0, strrpos($ADir, '/'));
	return $ADir;
}

if (isset($_GET['file'])) { 

	if (isset($_GET['del'])){
		unlink($_GET['file']);
		die;
	}

	if (is_file($_GET['file'])) {
		header("Content-type: text/plain");
		readfile($_GET['file']);
		return;
	}

	$path = $_GET['file'].'/';

} else $path = $root.'/';

echo($root.'<br>');
echo($path.'<hr>');
echo '<a href="?file='.updir($path).'">..</a><br />';
$p = $path.'*';
foreach (glob($p) as $file) {
	echo '<span style="font-size:11px;color:#777;">'.substr(sprintf('%o',fileperms($file)),-4).'</span> <a style="'.(is_file($file)?$style1:$style2).'" href="?file='.$file.'">'.basename($file).'</a> - <span style="font-size:11px;color:#777;">'.filesize($file).' - '.date("F d Y H:i:s", filemtime($file)).'</span><br />';
}
echo('<hr>');
