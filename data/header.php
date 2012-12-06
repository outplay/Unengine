<?php
switch($_REQUEST['do']) {
default:$header = ''; $inc = 'modules/module_default_name.php';break;
case '':$header = ''; $inc = 'modules/module_default_name.php';break;
case 'setings': $header = 'title name'; $inc = 'modules/module_name.php';break;
case 'password': $header = ''; $inc = 'modules/module_name.php';break;
}
?>