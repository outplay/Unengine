<?php	include 'data/conf.php';	while($row = mysql_fetch_array($rs)) {	   echo "<article><img class=\"sep\" src=\"../template/default/img/sep.png\"><p class=\"title\">" . $row['title'] . "</p>";	   echo "<p class=\"data\">" . $row['data'] . "</p>";	   echo "<p class=\"text\">" . $row['text'] . "</p></article>";	  }	?>