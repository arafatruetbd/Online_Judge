<?php

/**********connect db server****/
$dbname="OnlineProject";
$link = mysql_connect('localhost','root') or die("Couldn't connect to the server");  //server conn.

/********select db**********/
mysql_select_db($dbname) or die("\n#Cannot select database.");
?>
