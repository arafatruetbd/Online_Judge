<?php session_start();?>
<html>
<center><h1><strong>My Submissions</strong></h1></center>
<center><a href="index.php"><b><h2>Home</h2></a></b></center>
<?php
     $name = $_SESSION['userName'];
     include('connectdb.php');

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

		$query = "select * from submitteddata where userName = '$name' order by ID desc";
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
</html>