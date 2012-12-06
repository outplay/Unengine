<?php

if(!$_POST['module']) die("0");

$page = (int)$_POST['module'];

if(file_exists('modules/page_'.$page.'.php'))
echo file_get_contents('modules/page_'.$page.'.php');

else echo 'There is no such page!';
?>
