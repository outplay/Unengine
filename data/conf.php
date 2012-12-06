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
// Query string
$str_sql_query = "SELECT * FROM content";
// query Execution
if (!$result = mysql_query($str_sql_query, $link))
{
    echo "<br>Не могу выполнить запрос<br>";
    exit();
}
// Write pool result
while ($mas = mysql_fetch_row($result))
{
    foreach ($mas as $field)
    {
        echo $field . " ";
    }
    echo "<br>";
}
// close MYSQL connect
mysql_close($link);
// Site Config
$config = array (
'title' => 'Blog Php Solutions',
'file' => '/home/directory/',
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