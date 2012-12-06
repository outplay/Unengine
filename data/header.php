<?php
switch($_REQUEST['do']) {
default:$header = ''; $inc = 'modules/article.php';break;
case '':$header = ''; $inc = 'modules/article.php';break;
case 'register': $header = 'Registration'; $inc = 'modules/register.php';break;
case 'test': $header = ''; $inc = 'modules/news/module_name..php';break;
}
?>