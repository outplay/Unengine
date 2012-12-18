<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
include('../../data/conf.php');

 $title = $_POST['title'];
 $short = $_POST['short'];
 $full = $_POST['full'];
 $data = date('d M H:m:s');
 
 if (isset($_POST['post']))
{
 $result = mysql_query("INSERT INTO `content` (`title`, `short_article`, `full_article`, `data`) VALUES ('$title','$short','$full', '$data')"); 
 if($result == TRUE){
                         echo "<script>parent.document.getElementById('write').innerHTML+='Success!<br>Article added!'; </script> <br />";
						 echo "<a href=\"javascript:history.go(-1)\"> Back!</a> <br />";
                                  }
                         else
                                {
                              echo "<script>parent.document.getElementById('write').innerHTML+='Error!<br>Article not add!<br />';</script> ";
							  echo "<a href=\"javascript:history.go(-1)\"> Back!</a> <br />";
                                }
     
}
 
mysql_close();
?>