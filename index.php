<?php 
$theme = "template/default";
include 'data/conf.php';
include 'data/header.php';
session_start();

include ($theme.'/header.php'); 
include ($theme.'/content.php');
include ($theme.'/footer.php');
?>