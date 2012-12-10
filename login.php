<?php
include_once("data/conf.php");

checkLoggedIn("no");

if(isset($_POST["submit"])) {
  field_validator("username", $_POST["username"], "alphanumeric", 4, 15);
  field_validator("password", $_POST["password"], "string", 4, 15);
  if($messages){
    doIndex();
    exit;
  }

    if( !($row = checkPass($_POST["username"], $_POST["password"])) ) {
        $messages[]="Incorrect login/password, try again";
    }

  if($messages){
    doIndex();
    exit;
  }

  cleanMemberSession($row["username"], $row["password"]);

  header("Location: index.php");
} else {
  doIndex();
}

function doIndex() {
  global $messages;
  global $title;

global $base_url;
$theme = $base_url ."/template/default";
include_once("data/conf.php");
include("data/header.php");
include ($theme.'/header.php');
?>
<div id="content">
<p>LOGIN IN</p>
<?php
if($messages) { displayErrors($messages); }
?>
<form action="<?php print $_SERVER["PHP_SELF"]; ?>" method="POST">
<table>
<tr><td>LOGIN:</td><td><input type="text" name="username"
value="<?php print isset($_POST["username"]) ? $_POST["username"] : "" ; ?>"
maxlength="15"></td></tr>
<tr><td>PASSWORD:</td><td><input type="password" name="password" value="" maxlength="15"></td></tr>
<tr><td>&nbsp;</td><td><input name="submit" type="submit" value="Submit"></td></tr>
</table>
</form>
</div>
<?php
include ($theme.'/footer.php');
}
?>