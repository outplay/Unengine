<?php
Error_Reporting(E_ALL & ~E_NOTICE);
switch($_REQUEST['do']) {
default:$header = ''; $inc = 'modules/article.php';break;
case '':$header = ''; $inc = 'modules/article.php';break;
case 'full': $header = ''; $inc = 'modules/fullarticle.php';break;
}
?>