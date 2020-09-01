<?php session_start();
    if($_SESSION['userName'] != 'Judge1' && $_SESSION['userName'] != 'Judge2' &&  $_SESSION['userName'] != 'admin')
	   echo "<center><a href='../user/index.php'>Submit Code </a></center>";?>

<center>
<a href  = "../login/logout.php">Logout </a>
</center>
<?php
		echo "<h2>ID";
		echo str_repeat('&nbsp;', 10);
		echo "When";
		echo  str_repeat('&nbsp;', 12);
		echo "Who";
		echo  str_repeat('&nbsp;', 10);
		echo "Problem";
		echo  str_repeat('&nbsp;', 10);
		echo "Language";
		echo  str_repeat('&nbsp;', 10);        
		echo "Verdict <br></h2>";

		include('connectdb.php');
		$query = "select * from submitteddata where 1 order by ID desc";
		$result = mysql_query($query, $link) or die("Cannot Retrive From Table");

		$num_rows = mysql_num_rows($result);

		while ($num_rows >0) {
			$row = mysql_fetch_row($result);
			echo "<h4>";
			echo $row['0'];
			echo str_repeat('&nbsp;', 10);
			echo $row['1'];
			echo str_repeat('&nbsp;', 10);
			echo $row['2'];
			echo str_repeat('&nbsp;', 15);
			echo $row['3'];
			echo str_repeat('&nbsp;', 20);
			echo $row['4'];
			echo str_repeat('&nbsp;', 40);
			echo $row['5']."<br>";
			echo "</h4>";
			$num_rows--;
		}
		mysql_close();
?>

