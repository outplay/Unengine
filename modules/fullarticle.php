<?php   if ($_GET['id']) {              $id = (int)$_GET['id'];        $result = mysql_query("SELECT * FROM `content` WHERE `id` = '$id' LIMIT 1");        $row = mysql_fetch_assoc($result);        $title_result=$row['title'];        $id=$row['id'];		$uid=$id;		$full=$row['full_article'];		if ( $_SESSION['username']==NULL ){ 		$loginin = "<div class='warning'><div class='logintext'>Please <a href ='user/login' class='loginlink'>login</a> or <a href ='user/registration' class='loginlink'>register</a> to post comments</div></div>";		};        //content start		echo "<article><img class=\"sep\" src=\"../template/default/img/sep.png\"><p class=\"title\">" . $title_result . "</p>";		echo "<p class=\"text\">" . $row['full_article'] . "</p>";		echo "<div id=\"comment\"><div class=\"comment_logo\"></div>";		$res = mysql_query ("SELECT * FROM ".$tbl." WHERE `uid` = '$id' ORDER BY id DESC",$link);		$rw =  mysql_fetch_array ($res);		if (mysql_num_rows($res) > 0) {		do {printf ("		<div class='comment_area'>		<div class='top'>Added: <strong>%s</strong> (%s) at %s</div>		<div class='text'>%s $loginin</div>				</div>				",$rw["name"],$rw["email"],$rw["date"],$rw["text"]);}		while($rw =  mysql_fetch_array ($res));		}		}		$userlogin=$_SESSION['username'];		$permission="SELECT `perm` FROM users WHERE username='".$_SESSION['username']."'";		if ( mysql_num_rows($result = mysql_query($permission)) ) {		  $check = mysql_fetch_array($result);		  if ($check['perm']>="0"){				echo "				<div class=\"comment_form\"><table><form name=\"comment_f\" class=\"comment-form\" method=\"post\" action=\"data/submit.php\">				<input name=\"uid\" type=\"hidden\" value=\"$uid\"/>				<input name=\"name\" type=\"hidden\"/ value=\"$userlogin\">				<tr><td>Email:</td><td><input name=\"email\" type=\"text\"/></td></tr>				<tr><td>Comment:</td><td><textarea name=\"text\" rows=\"5\" cols=\"30\"></textarea></td></tr>				<tr><td><input class=\"button\" name=\"button\" type=\"submit\" value=\"Submit\"/></td></tr>				</form></table></div>				";		   }		}		echo "</div>";mysql_close($link);?>