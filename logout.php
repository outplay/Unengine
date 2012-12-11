<?php
include_once("data/conf.php");
checkLoggedIn("yes");
flushMemberSession();
header("Location: index.php");
mysql_close($link);
?>