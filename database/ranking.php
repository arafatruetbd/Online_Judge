<center>
	<strong><h1>Standings<br></h1></strong>
<?php
 	session_start();
 	echo "<h2>User Name".str_repeat('&nbsp;', 15)."Total Solved<br></h2>";
	include('connectdb.php');
		$query = "SELECT userName,  COUNT(DISTINCT Problem)  FROM `submitteddata`WHERE Verdict='Accepted' GROUP BY userName ORDER BY COUNT(DISTINCT Problem) DESC";
		$result = mysql_query($query, $link) or die("Cannot Retrive From Table");

		$num_rows = mysql_num_rows($result);

		while ($num_rows >0) {
			$row = mysql_fetch_row($result);
			echo "<h3>";
			echo $row['0'];
			echo str_repeat('&nbsp;',30);
			echo $row['1']."<br>";
			echo "</h3>";
			$num_rows--;
		}
		mysql_close();
?>
</center>