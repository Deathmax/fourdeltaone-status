<?php

error_reporting(E_ERROR | E_WARNING);

if(empty($_GET["page"]) || !file_exists("pages/".$_GET["page"].".php"))
{
	header("location: status");
	exit;
}

define("ROOT", dirname(__FILE__));

require_once("includes/html_api.php");
require_once("menu.cfg");

function gen_leds($titles)
{
?>
	<table style="width: 100%">
		<? foreach($titles as $id=>$title) { ?>
		<tr>
			<td class="status-led led-td-<?=$id ?>"><img id="led-<?=$id ?>" width="64" height="64" title="<?=$title ?>" alt="<?=$title ?>" src="http://cdn1.iconfinder.com/data/icons/softwaredemo/PNG/64x64/Box_Grey.png" /></td>
			<td class="status-text text-<?=$id ?>" style="font-size: 16px; text-align: left"><?=htmlentities($title) ?></td>
		</tr>
		<? } ?>
	</table>
<? }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? include("templates/meta.html"); ?>
<title>fourdeltaone.<?=$_GET["page"] ?></title>
<? include("templates/fonts.html"); ?>
<? include("templates/styles.html"); ?>
<? include("templates/scripts.html"); ?>
<script type="text/javascript" src="http://loktar00.github.com/JQuery-Snowfall/snowfall.jquery.js"></script>
<link href='http://fonts.googleapis.com/css?family=Zeyada' rel='stylesheet' type='text/css'>
<script type="text/javascript">
$(document).ready(function(){
	$(document).snowfall({round : true, minSize: 5, maxSize:8});
});
</script>
</head>

<body class="gradient">
	<div class="headbar gradient">
		<div class="headlogo">
			<span id="fdocol">fourdeltaone</span>.<?=$_GET["page"] ?>
		</div>
		<span style="font-size: 11px" id="fdoss"><!-- --></span>
		<?php menu(); ?>
	</div>

	<? require("pages/".$_GET["page"].".php"); ?>
	<div style="text-align: center; font-size: 50px; padding-top: 50px; color: #fea; font-family: Zeyada, cursive;">
		<p>Merry Christmas Guys!</p>
	</div>
	<div style="text-align: center; font-size: 8px; padding-top: 50px; color: #444">
		<p>This status page is being maintained by Icedream, not by the 4D1 staff. &copy; 2012 Icedream. Hosted by <a href ="http://fourdeltaone.net/forum/memberlist.php?mode=viewprofile&u=8206"> MAGIC</a>.</p>
	</div>

	<iframe style="width: 1px; height: 1px; position: absolute; left: -100px; top: -100px" src="http://178.33.27.16/4d1/ircmon.php?referer=<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
	</iframe>
    </body>
</html>