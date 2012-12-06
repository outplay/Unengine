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
// Site config
$strSET = "SELECT * FROM settings ORDER BY id DESC";
$rs = mysql_query($strSET);
$row = mysql_fetch_array($rs);
$title = $row['title'];
$keywords = $row['keywords'];
$description = $row['description'];
//Article config
$strSQL = "SELECT * FROM content ORDER BY id DESC";
$rs = mysql_query($strSQL);

// close MYSQL connect
mysql_close($link);

$admins = array (
'admin' => 'admin',
);
 ?>