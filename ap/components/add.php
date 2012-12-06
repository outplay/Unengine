<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

$db = mysql_connect("localhost","username","password");
 mysql_select_db("dbname",$db);
 
 $id = $_POST['id'];
 $title = $_POST['title'];
 $text = $_POST['text'];
 $data = date('d M H:m:s');
 
 
 if (isset($_POST['post']))
{
 
 
 
 $result = mysql_query("INSERT INTO `content` (`id`, `title`, `text`, `data`) VALUES ('$id', '$title','$text', '$data')"); 
 if($result == TRUE){
                         echo "Success!";
						 echo "<a href=\"javascript:history.go(-1)\"> Back!</a> ";
                                  }
                         else
                                {
                              echo "Error!";
							  echo "<a href=\"javascript:history.go(-1)\"> Back!</a> ";
                                }
     
}
 
mysql_close();
?>