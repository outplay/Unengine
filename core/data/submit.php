<?php
include_once "conf.php";
$name = trim ($_POST["name"]);
$name = htmlspecialchars ($name);
$email = trim ($_POST["email"]);
$email = htmlspecialchars ($email);
$text = trim ($_POST["text"]);
$text = htmlspecialchars ($text);
$date = date("d M  Y G:i:s");
$rule = $_POST["rule"];
if (!isset($email) or empty ($email)) {echo "<meta http-equiv='refresh' content='3;URL=$_SERVER[HTTP_REFERER]'>";exit ("<div align='center'><div class='alert'>Please enter email!</div></div>");}
if (!isset($text) or empty ($text)) {echo "<meta http-equiv='refresh' content='3;URL=$_SERVER[HTTP_REFERER]'>";exit ("<div align='center'><div class='alert'>Please enter comment text!</div></div>");}
$insert = mysql_query ("INSERT INTO ".$tbl." (rule,name,date,email,text) VALUES ('$rule','$name','$date','$email','$text')",$link);
if($insert == "true") {echo "<meta http-equiv='refresh' content='3;URL=$_SERVER[HTTP_REFERER]'>";echo "<div align='center'><div class='alert'>Success!</div></div>";}
else {echo "<meta http-equiv='refresh' content='3;URL=$_SERVER[HTTP_REFERER]'>";echo "<div align='center'><div class='alert'>Error!</div></div>";}
?>