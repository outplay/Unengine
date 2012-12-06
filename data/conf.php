<?php
$host = "host";
$username = "username";
$password = "password";
$db = "dbname";
// DB connect
if (!$link = mysql_connect($host,$username,$password))
 {
    echo "<br>Connect FAIL!<br>";
    exit();
 }
// Select DB
if (!mysql_select_db($db, $link))
{
    echo "<br>DB is WRONG!<br>";
    exit();
}
// Select content table
$str_sql_query = "SELECT * FROM content";
// Start pool
if (!$result = mysql_query($str_sql_query, $link))
{
    echo "<br>Connect error<br>";
    exit();
}
// Write Result pool
while ($mas = mysql_fetch_row($result))
{
    foreach ($mas as $field)
    {
        echo $field . " ";
    }
    echo "<br>";
}
// Close DB Connect
mysql_close($link);

// Config Site
$config = array (
'title' => 'Blog Php Solutions',
'file' => '/home/homework/',
'panel' => 'http://homework/',
'demail' => 'no mail',
'deip' => 'ip',
'newloginlen' => '13',
'newpasslen' => '19',
'newmaillen' => '19',
'nn' => '',
'nnsum' => '',
'nnu' => '',
'nne' => '',
'type' => '',
);
$admins = array (
'admin' => 'admin',
);
 ?>