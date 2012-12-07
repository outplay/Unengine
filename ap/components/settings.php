<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
include('../../data/conf.php');

 $title = $_POST['title'];
 $keywords = $_POST['keywords'];
 $description = $_POST['description'];
 $admin = $_POST['admin'];
 $id = $_POST['id'];
 
 
 if (isset($_POST['post']))
{
 
 
 
 $result = mysql_query("UPDATE `settings` SET title='$title', keywords='$keywords', description='$description', owner='$admin' WHERE id='$id'") or die (mysql_error());
 if($result == TRUE){
                         echo "<script>parent.document.getElementById('write').innerHTML+='Success!<br>Settings UPDATED!<br />'; </script> <br />";
						 echo "<a href=\"javascript:history.go(-1)\"> Back!</a> ";
                                  }
                         else
                                {
                              echo "<script>parent.document.getElementById('write').innerHTML+='Error!<br>No Permission or DB connect error!<br />';</script> ";
                                }
     
}
 
mysql_close();
?>