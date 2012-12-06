<?php 
$theme = "template/default";
include 'data/conf.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="keywords" content="<?=$keywords ?>">
<meta name="description" content="<?=$description ?>">
<title><?=$title ?></title>
<link rel="stylesheet" href="<?= $theme ?>/css/style.css" type="text/css" media="screen" />
</head>
<body>
<?php include ('template/default/header.php'); ?>
<div id="top"><img src="<?= $theme ?>/img/image_top.png" /></div>
<div id="content">
<?php include ('modules/article.php'); ?>
</div>
<?php include ('template/default/footer.php'); ?>
</body>
</html>