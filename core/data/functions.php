<?php
function newUser($username, $password) {
  $query="INSERT INTO users (username, password, permission) VALUES('$username', '$password', '0')";
  $result=mysql_query($query, $link) or die("Died inserting login info into db.  Error returned if any: ".mysql_error());

  return true;
} 

function displayErrors($messages) {
  print("<b>Errors details:</b>\n<ul>\n");

  foreach($messages as $msg){
    print("<li>$msg</li>\n");
  }
  print("</ul>\n");
} 

function checkLoggedIn($status){
  switch($status){
    case "yes":
      if(!isset($_SESSION["loggedIn"])){
          header("Location: login.php");
        exit;
      }
      break;
    case "no":
      if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true ){
        header("Location: ../../index.php");
      }
      break;
  }
  return true;
} 

function checkPass($username, $password) {
  global $link;

  $query="SELECT username, password FROM users WHERE username='$username' and password='$password'";
  $result=mysql_query($query, $link)
    or die("checkPass fatal error: ".mysql_error());

  if(mysql_num_rows($result)==1) {
    $row=mysql_fetch_array($result);
    return $row;
  }
  return false;
} 


function createMemberSession($username, $password) {
  $_SESSION["username"]=$username;
  $_SESSION["password"]=$password;
  $_SESSION["loggedIn"]=true;
} 

function closeMemberSession() {
  unset($_SESSION["username"]);
  unset($_SESSION["password"]);
  unset($_SESSION["loggedIn"]);
  session_destroy();
  return true;
} 

function field_validator($field_descr, $field_data, $field_type, $min_length="", $max_length="", $field_required=1) {

  global $messages;

  if(!$field_data && !$field_required){ return; }

  $field_ok=false;
  $data_types=array(
    "digit"=>"/^[0-9]$/",
    "number"=>"/^[0-9]+$/",
    "alpha"=>"/^[a-zA-Z]+$/",
    "alpha_space"=>"/^[a-zA-Z ]+$/",
    "alphanumeric"=>"/^[a-zA-Z0-9]+$/",
    "alphanumeric_space"=>"/^[a-zA-Z0-9 ]+$/",
    "string"=>""
  );

  if ($field_required && empty($field_data)) {
    $messages[] = "Field $field_descr  is required!";
    return;
  }

  if ($field_type == "string") {
    $field_ok = true;
  } else {
    $field_ok = preg_match($data_types[$field_type], $field_data);
  }

  if (!$field_ok) {
    $messages[] = "Please enter valid $field_descr.";
    return;
  }

  if ($field_ok && ($min_length > 0)) {
    if (strlen($field_data) < $min_length) {
      $messages[] = "$field_descr min length $min_length symbols";
      return;
    }
  }

  if ($field_ok && ($max_length > 0)) {
    if (strlen($field_data) > $max_length) {
      $messages[] = "$field_descr max length $max_length symbols.";
      return;
    }
  }
}
?>