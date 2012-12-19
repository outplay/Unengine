<?php
global $base_url;
$theme = $base_url ."/template/default";
include_once("data/conf.php");
include("data/header.php");
include ($theme.'/header.php'); 
include ($theme.'/content.php');
include ($theme.'/footer.php');
mysql_close($link);
?>