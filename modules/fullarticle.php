<?php   if ($_GET['id']) {              $id = (int)$_GET['id'];        $result = mysql_query("SELECT * FROM `content` WHERE `id` = '$id' LIMIT 1");        $row = mysql_fetch_assoc($result);        $title_result=$row['title'];        $id=$row['id'];		$full=$row['full_article'];        //content start		echo "<article><img class=\"sep\" src=\"../template/default/img/sep.png\"><p class=\"title\">" . $title_result . "</p>";		echo "<p class=\"text\">" . $row['full_article'] . "</p>";		$permission="SELECT `perm` FROM users WHERE username='".$_SESSION['username']."'";}$permission="SELECT `perm` FROM users WHERE username='".$_SESSION['username']."'";if ( mysql_num_rows($result = mysql_query($permission)) ) {  $check = mysql_fetch_array($result);  if ($check['perm']>="0"){		echo "<div class\"comment\"><form>				<table><tr><td>NAME: </td><td><input type=\"text\" name=\"name\" placeholder=\"Your name here\"></td></tr><tr><td>COMMENT:</td><td><textarea cols=\"40\" rows=\"5\" name=\"comments\" placeholder=\" Comment text here\"></textarea></td></tr></table><input type=\"submit\" name=\"post\" value=\"Add\">		</form></div>";   }else{echo"Please auth!";}}mysql_close($link);?>