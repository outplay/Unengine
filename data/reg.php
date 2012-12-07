<?php
include('db.php');

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

 if (isset($_POST['post']))
{

 $result = mysql_query("INSERT INTO `users` (`username`, `password`, `email`, `perm`) VALUES ('$username', '".md5($password)."','$email', 'member')"); 
 if($result == TRUE){
                         echo "<script>parent.document.getElementById('write').innerHTML+='Success!<br>Registration complete!'; </script> <br />";
						 echo "<a href=\"javascript:history.go(-1)\"> Back!</a> ";
                                  }
                         else
                                {
                              echo "<script>parent.document.getElementById('write').innerHTML+='Error!<br>Repeat please!<br />';</script> ";
                                }
     
}
mysql_close();
?>