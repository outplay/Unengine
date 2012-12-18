<!DOCTYPE HTML>
<html>
<head>
<meta name="keywords" content="<?=$keywords ?>">
<meta name="description" content="<?=$description ?>">
<title><?=$title ?></title>
<link rel="stylesheet" href="<?=$theme ?>/css/style.css" type="text/css" media="screen" />
</head>
<body>
	<header>
		<div id="head">
		<img src="<?=$theme ?>/img/logo.png" style="float:left;" />
		<table>
			<tr>
<?php
$permission="SELECT `perm` FROM users WHERE username='".$_SESSION['username']."'";
$name = $_SESSION['username'];
if ( mysql_num_rows($result = mysql_query($permission)) ) {
  $check = mysql_fetch_array($result);
  if ($check['perm']>="0"){
		echo "<td>Action:  $name  </td>
			  <td><a href=\"logout.php\" />Logout</a></td>";
   }elseif (checkLoggedIn("no")){
   echo $name;
   }
}
?>
			</tr>
			<!--<tr>
				<td>Hello</td>
				<td>Logout</td>
			</tr>
			<tr>
				<td>Hello</td>
				<td>Logout</td>
			</tr>
			<tr>
				<td>Hello</td>
				<td>Logout</td>
			</tr>-->
		</table>
		<div>
			<table>
			<tr>
				<td class="brd"><a href="/" class="headtdnk">HOME</a></td>
				<td class="brd"><a href="user/registration/" class="headtdnk">REGISTER</a></td>
				<td class="brd"><a href="#" class="headtdnk">CONTACTS</a></td>
				<td class="brd"><a href="#" class="headtdnk">ABOUT</a></td>
				<td class="login">

				</td>
			</tr>
			</table>
		</div>
		</div>
	</header>
