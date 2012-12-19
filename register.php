<?php
include_once("data/conf.php");

checkLoggedIn("no");

$title="Reg";

if(isset($_POST["submit"])){
  field_validator("username", $_POST["username"], "alphanumeric", 4, 15);
  field_validator("password", $_POST["password"], "string", 4, 15);
  field_validator("confirmation password", $_POST["password2"], "string", 4, 15);

  if(strcmp($_POST["password"], $_POST["password2"])) {

    $messages[]="Passwords do not match!";
  }
  
  $query="SELECT username FROM users WHERE username='".$_POST["username"]."'";

  $result=mysql_query($query, $link) or die("MySQL query $query failed.  Error if any: ".mysql_error());

  if( ($row=mysql_fetch_array($result)) ){
    $messages[]="Username \"".$_POST["username"]."\" already taken, try another.";
  }

  if(empty($messages)) {
    newUser($_POST["username"], $_POST["password"]);

    createMemberSession($_POST["username"], $_POST["password"]);

    header("Location: members.php");

  }
}
global $base_url;
$theme = $base_url ."/template/default";
include ($theme.'/header.php');
?>

<div id="content">
<?php
if(!empty($messages)){
  displayErrors($messages);
}
?>
<p class="text">REGISTRATION <br /></p>
<form action="<?php print $_SERVER["PHP_SELF"]; ?>" method="POST">
<table>
<tr><td>USERNAME:</td><td><input type="text" placeholder="USERNAME HERE.." name="username"
value="<?php print isset($_POST["username"]) ? $_POST["username"] : "" ; ?>"
maxlength="15"></td></tr>
<tr><td>PASSWORD:</td><td><input type="password" placeholder="PASSWORD HERE..." name="password" value="" maxlength="15"></td></tr>
<tr><td>RE-PASSWORD:</td><td><input type="password" name="password2" value="" maxlength="15"></td></tr>
<tr><td>&nbsp;</td><td><input name="submit" type="submit" class="reg" value="Submit"></td></tr>
</table>
</form>
</div>
<?php include ($theme.'/footer.php');
mysql_close($link);
?>