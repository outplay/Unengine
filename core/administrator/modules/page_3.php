<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
include('../../data/conf.php');
$title = $row['title'];
$keywords = $row['keywords'];
$description = $row['description'];
echo $title;
?>