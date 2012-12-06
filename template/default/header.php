<!DOCTYPE HTML>
<html>
<head>
<meta name="keywords" content="<?=$keywords ?>">
<meta name="description" content="<?=$description ?>">
<title><?=$title ?></title>
<link rel="stylesheet" href="<?= $theme ?>/css/style.css" type="text/css" media="screen" />
</head>
<body>
	<header>
		<div id="head">
		<img src="<?= $theme ?>/img/logo.png" />
			<table>
			<tr>
				<td class="brd"><a href="#" class="headtdnk">HOME</a></td>
				<td class="brd"><a href="#" class="headtdnk">REGISTER</a></td>
				<td class="brd"><a href="#" class="headtdnk">CONTACTS</a></td>
				<td class="brd"><a href="#" class="headtdnk">ABOUT</a></td>
				<td class="login">						
				        <form method="POST">
						<input name="login" placeholder="USERNAME" type="text">
						<input name="password" placeholder="PASSWORD" type="password">
						<input type="checkbox" name="not_attach_ip">
						<input name="submit" class="log" type="submit" value="">
						</form>
				</td>
			</tr>
			</table>
		</div>
	</header>
