<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "home";
// MYSQL Connect
if (!$link = mysql_connect($host,$username,$password))
 {
    echo "<br>Connect to MYSQL FAIL!<br>";
    exit();
 }
// Select DB
if (!mysql_select_db($db, $link))
{
    echo "<br>Error. No database!<br>";
    exit();
}
?>