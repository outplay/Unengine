<?php
switch($_REQUEST['do']) {
default:$header = ''; $inc = 'modules/default_module_name..php';break;
case '':$header = ''; $inc = 'modules/default_module_name..php';break;
case 'setings': $header = 'title'; $inc = 'modules/module_name.php';break;
case 'news': $header = ''; $inc = 'modules/news/module_name..php';break;
}
?>