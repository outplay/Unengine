<?php
$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$db = "home";
$tbl = "comment";
// MYSQL Connect
if (!$link = mysql_connect($dbhost,$dbusername,$dbpassword))
 {
    echo "Connect to MYSQL FAIL!";
    exit();
 }
// Select DB
if (!mysql_select_db($db, $link))
{
    echo "Error. No database!";
    exit();
}
?>