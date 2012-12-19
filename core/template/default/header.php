<!DOCTYPE HTML>
<?php
Error_Reporting(E_ALL & ~E_NOTICE);
$strSET = "SELECT * FROM settings ORDER BY id DESC";
$rs = mysql_query($strSET);
$row = mysql_fetch_array($rs);
$keywords = $row['keywords'];
$description = $row['description'];
$title = $row['title'];
?>
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
$permission="SELECT `permission` FROM users WHERE username='".$_SESSION['username']."'";
$name = $_SESSION['username'];
if ( mysql_num_rows($result = mysql_query($permission)) ) {
  $check = mysql_fetch_array($result);
  if ($check['permission']>="0"){
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
