<?php
session_start();
error_reporting(E_ALL);
include ('db.php');
include_once('functions.php');
// Site config
$strSET = "SELECT * FROM settings ORDER BY id DESC";
$rs = mysql_query($strSET);
$row = mysql_fetch_array($rs);
$keywords = $row['keywords'];
$description = $row['description'];
$title = $row['title'];
//Article config
$strSQL = "SELECT * FROM content ORDER BY id DESC";
$rs = mysql_query($strSQL);
?>