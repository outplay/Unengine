<?php
include_once("data/conf.php");
checkLoggedIn("yes");
closeMemberSession();
header("Location: index.php");
mysql_close($link);
?>