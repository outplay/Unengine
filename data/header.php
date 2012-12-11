<?php
Error_Reporting(E_ALL & ~E_NOTICE);
switch($_REQUEST['do']) {
default:$header = ''; $inc = 'modules/article.php';break;
case '':$header = ''; $inc = 'modules/article.php';break;
case 'full': $header = 'Registration'; $inc = 'modules/fullarticle.php';break;
case 'login': $header = ''; $inc = 'modules/login.php';break;
case 'logout': $header = ''; $inc = 'modules/logout.php';break;
}
?>