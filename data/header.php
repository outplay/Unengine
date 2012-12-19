<?php
Error_Reporting(E_ALL & ~E_NOTICE);
switch($_REQUEST['do']) {
default: $content = 'modules/article.php';break;
case '': $content = 'modules/article.php';break;
case 'full': $content = 'modules/fullarticle.php';break;
}
?>