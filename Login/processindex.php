<?php
session_start();
$error = '';

if (isset($_POST['submit']))
{
	if (empty($_POST['userName']) || empty($_POST['Password']))
	{
		$error = "Username or Password is Empty";
		$_SESSION['ERR'] = $error;
?> <script> location.replace("index.php"); </script><?php
	}
	else
	{
		$userName = $_POST['userName'];
		$Password = $_POST['Password'];
		include ("connectdb.php");
		//SQL injection
		$userName = stripslashes($userName);
		$Password = stripslashes($Password);
		$userName = mysql_real_escape_string($userName);
		$Password = mysql_real_escape_string($Password);
		//Checking in user table for userName and Password
		$querynm = "select * from user where userName='$userName' AND Password='$Password'";
		$result = mysql_query($querynm, $link) or die("Cannot Retrive From Table");
		$row = mysql_fetch_row($result);
		$num_rows = mysql_num_rows($result);
		mysql_close();
		
		
		if ($result)
		{
			if ($num_rows > 0)
			{
				if (($row['1'] == $_POST['userName']) && ($row['2'] == $_POST['Password']))
				{
					$_SESSION['userName'] = $userName;
					$_SESSION['Password'] = $Password;
					
					if ($row['3']==1)
					{
						if($userName == "Judge1")
						echo "<script> location.replace('../Judge1/index.php'); </script>";
						else if($userName == "Judge2")
						echo "<script> location.replace('../Judge2/index.php'); </script>";
					}
					else if($row['3']==2)
						echo "<script> location.replace('../admin/index.php'); </script>";
					else echo "<script> location.replace('../user/index.php'); </script>";
				}

				else
				{
					$error = "Authentication Failed";
					$_SESSION['ERR'] = $error;
?> <script> location.replace("index.php"); </script><?php
				}
			}
			else
			{
				$error = "Authentication Failed";
				$_SESSION['ERR'] = $error;
?> <script> location.replace("index.php"); </script><?php
			}
		}
		else
		{
			$error = "Query Failed";
			$_SESSION['ERR'] = $error;
?> <script> location.replace("index.php"); </script><?php
		}
	}
}

?>