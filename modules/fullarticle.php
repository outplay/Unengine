<?php   if ($_GET['id']) {              $id = (int)$_GET['id'];        $result = mysql_query("SELECT * FROM `content` WHERE `id` = '$id' LIMIT 1");        $row = mysql_fetch_assoc($result);        $title_result=$row['title'];        $id=$row['id'];		$full=$row['full_article'];        //content start		echo "<article><img class=\"sep\" src=\"../template/default/img/sep.png\"><p class=\"title\">" . $title_result . "</p>";		echo "<p class=\"text\">" . $row['full_article'] . "</p>";   }mysql_close($link);?>