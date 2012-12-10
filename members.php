<?php
include_once("data/conf.php");
checkLoggedIn("yes");
global $base_url;
$theme = $base_url ."/template/default";
include_once("data/conf.php");
include("data/header.php");
include ($theme.'/header.php');
?>
<div id="content">
<p><b><?=$_SESSION["username"] ?>!</b> Welcome</p>
<p>Your password: <b><?=$_SESSION["password"] ?></b><br /></p>
<a href="logout.php">Exit</a>
</div>
<?php include ($theme.'/footer.php'); ?>