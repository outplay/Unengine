<?php
include ('db.php');
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

//Admin area
$admins = array (
'admin' => 'admin',
);
 ?>