<?php
include_once("../data/conf.php");
checkLoggedIn("yes");
$panel = "<!DOCTYPE HTML>
<html>
<head>
<title>ADMNPNL</title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='screen' />
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>
<script type='text/javascript' src='script.js'></script>
<body>
	<div id='page'>
	<img src='img/vs.png' />
		<table class='menu'>
			<tr>
				<td class='menuitem'>
				<img class='menupic' src='img/menu_hover.png' /><div class='menuword'><a href='/ap'>HOME</a></div>
				</td>
				<td class='content' rowspan='4'>
				<div class='clear'></div>
				<div id='pageContent' ><img id='loading' src='img/ajax_load.gif' alt='loading' /></div>
				<div class='clear'></div>
				</td>
			</tr>
			
			<tr>
				<td class='menuitem'>
				<img class='menupic' src='img/menu_hover.png' /><div class='menuword'><a href='#module2'>ADD ARTICLE</a></div>
				</td>
			</tr>
			
			<tr>
				<td class='menuitem'>
				<img class='menupic' src='img/menu_hover.png' /><div class='menuword'><a href='/ap'>ADD USER</a></div>
				</td>
			</tr>
			
			<tr>
				<td class='menuitem'>
				<img class='menupic' src='img/menu_hover.png' /><div class='menuword'><a href='#module1'>SETTINGS</a></div>
				</td>
			</tr>
			
			<tr>
				<td class='menuitem'>
				<img class='menupic' src='img/menu_hover.png' /><div class='menuword'><a href='logout.php'>LOGOUT</a></div>
				</td>
			</tr>
			
		</table>
	</div>
</body>
</html>";
$permission="SELECT `permission` FROM users WHERE username='".$_SESSION['username']."'";
if ( mysql_num_rows($result = mysql_query($permission)) ) {
  $check = mysql_fetch_array($result);
  if ($check['permission']=="3" or $check['permission']=="2"){
    echo $panel;
    }else{echo"No Permissions!";}
}
?>