<?php
session_start();

$error = '';

if (isset($_POST['submit']))
{
	if (empty($_POST['code']))
	{
		$error = "Username or Password is Empty";
		$_SESSION['ERR'] = $error;

?> <script> location.replace("index.php"); </script><?php
	}
	else
	{
		$code = $_POST['code'];
		$selected_problem = $_POST['Problem'];
		$selected_lang = $_POST['Language'];

		$name = $_SESSION['userName'];

		date_default_timezone_set("Asia/Dhaka");
		include("connectdb.php");
		$Problem = 'Problem '. $selected_problem;
		$time = date("Y-m-d H:i:s");

		$query = "INSERT INTO `submitteddata`( `submitTime`, `userName`, `Problem`, `Lang`, `Verdict`) VALUES ('$time','$name','$Problem','$selected_lang','Judging')";
		$result = mysql_query($query, $link) or die("Cannot Retrive From Table");

		$query = "select max(ID) from submitteddata";
		$result = mysql_query($query, $link) or die("Cannot Retrive From Table");
		$row = mysql_fetch_row($result);
		$id = $row['0'];



		if ($selected_problem == 'A' || $selected_problem == 'B' || $selected_problem == 'C')
		{
			if ($selected_lang == 'C')
			{
				if ($handle = opendir('../Judge1/Submitted_C'))
				{
					while (false !== ($entry = readdir($handle)))
					{
						$str = $entry;
					}

					closedir($handle);
				}

				if (strlen($str) >= 6)
				{
					$token = strtok($str, ".");
					$d = strlen($token);
					if ($d == 4) $str = $token . "1.c";
					else
					{
						$c = substr($str, 4, $d);
						echo "c: " . $c . "<br>";
						$v = (int)$c;
						echo "v: ". $v . "<br>";
						$v = $v + 1;
						echo $v . "<br>";
						$c = (string)$v;
						$str = "code" . $c . ".c";
					}
				}
				else $str = "code.c";

				$query = "INSERT INTO `judgetable`(`ID`, `judgeNo`, `Lang`, `FileName`) VALUES ($id,1,'$selected_lang','$str')";
	            $result = mysql_query($query, $link) or die("Cannot Retrive From Table");

				$str = "../Judge1/Submitted_C/" . $str;
				$myfile = fopen($str, "w+") or die("Unable to open file!");
				fwrite($myfile, $code);
				fclose($myfile);
			}

			if ($selected_lang == 'C++')
			{
				if ($handle = opendir('../Judge1/Submitted_C++'))
				{
					while (false !== ($entry = readdir($handle)))
					{
						$str = $entry;
					}

					closedir($handle);
				}

				if (strlen($str) >= 6)
				{
					$token = strtok($str, ".");
					$d = strlen($token);
					if ($d == 4) $str = $token . "1.cpp";
					else
					{
						$c = substr($str, 4, $d);
						$v = (int)$c;
						$v = $v + 1;
						$c = (string)$v;
						$str = "code" . $c . ".cpp";
					}
				}
				else $str = "code.cpp";

				$query = "INSERT INTO `judgetable`(`ID`, `judgeNo`, `Lang`, `FileName`) VALUES ($id,1,'$selected_lang','$str')";
	            $result = mysql_query($query, $link) or die("Cannot Retrive From Table");

				$str = "../Judge1/Submitted_C++/" . $str;
				$myfile = fopen($str, "w+") or die("Unable to open file!");
				fwrite($myfile, $code);
				fclose($myfile);
			}

			/*if ($selected_lang == 'Java')
			{
				if ($handle = opendir('../Judge1/Submitted_Java'))
				{
					while (false !== ($entry = readdir($handle)))
					{
						$str = $entry;
					}

					closedir($handle);
				}

				if (strlen($str) >= 6)
				{
					$token = strtok($str, ".");
					$d = strlen($token);
					if ($d == 4) $str = $token . "1.java";
					else
					{
						$c = substr($str, 4, $d);
						$v = (int)$c;
						$v = $v + 1;
						$c = (string)$v;
						$str = "code" . $c . ".java";
					}
				}
				else $str = "code.java";


				$query = "INSERT INTO `judgetable`(`ID`, `judgeNo`, `Lang`, `FileName`) VALUES ($id,1,'$selected_lang','$str')";
	            $result = mysql_query($query, $link) or die("Cannot Retrive From Table");

				$str = "../Judge1/Submitted_Java/" . $str;
				$myfile = fopen($str, "w+") or die("Unable to open file!");
				fwrite($myfile, $code);
				fclose($myfile);
			}*/
		}

		else
		if ($selected_problem == 'D' || $selected_problem == 'E' || $selected_problem == 'F')
		{
			if ($selected_lang == 'C')
			{

				if ($handle = opendir('../Judge2/Submitted_C'))
				{
					while (false !== ($entry = readdir($handle)))
					{
						$str = $entry;
					}

					closedir($handle);
				}

				if (strlen($str) >= 6)
				{
					$token = strtok($str, ".");
					$d = strlen($token);
					if ($d == 4) $str = $token . "1.c";
					else
					{
						$c = substr($str, 4, $d);
						$v = (int)$c;
						$v = $v + 1;
						$c = (string)$v;
						$str = "code" . $c . ".c";
					}
				}
				else $str = "code.c";

				$query = "INSERT INTO `judgetable`(`ID`, `judgeNo`, `Lang`, `FileName`) VALUES ($id,2,'$selected_lang','$str')";
	            $result = mysql_query($query, $link) or die("Cannot Retrive From Table");

				$str = "../Judge2/Submitted_C/" . $str;
				$myfile = fopen($str, "w+") or die("Unable to open file!");
				fwrite($myfile, $code);
				fclose($myfile);
			}

			if ($selected_lang == 'C++')
			{
				if ($handle = opendir('../Judge2/Submitted_C++'))
				{
					while (false !== ($entry = readdir($handle)))
					{
						$str = $entry;
					}

					closedir($handle);
				}

				if (strlen($str) >= 6)
				{
					$token = strtok($str, ".");
					$d = strlen($token);
					if ($d == 4) $str = $token . "1.cpp";
					else
					{
						$c = substr($str, 4, $d);
						$v = (int)$c;
						$v = $v + 1;
						$c = (string)$v;
						$str = "code" . $c . ".cpp";
					}
				}
				else $str = "code.cpp";

				$query = "INSERT INTO `judgetable`(`ID`, `judgeNo`, `Lang`, `FileName`) VALUES ($id,2,'$selected_lang','$str')";
	            $result = mysql_query($query, $link) or die("Cannot Retrive From Table");

				$str = "../Judge2/Submitted_C++/" . $str;
				$myfile = fopen($str, "w+") or die("Unable to open file!");
				fwrite($myfile, $code);
				fclose($myfile);
			}

			/*if ($selected_lang == 'Java')
			{
				if ($handle = opendir('../Judge2/Submitted_Java'))
				{
					while (false !== ($entry = readdir($handle)))
					{
						$str = $entry;
					}

					closedir($handle);
				}

				if (strlen($str) >= 6)
				{
					$token = strtok($str, ".");
					$d = strlen($token);
					if ($d == 4) $str = $token . "1.java";
					else
					{
						$c = substr($str, 4, $d);
						$v = (int)$c;
						$v = $v + 1;
						$c = (string)$v;
						$str = "code" . $c . ".java";
					}
				}
				else $str = "code.java";

				$query = "INSERT INTO `judgetable`(`ID`, `judgeNo`, `Lang`, `FileName`) VALUES ($id,2,'$selected_lang','$str')";
	            $result = mysql_query($query, $link) or die("Cannot Retrive From Table");

				$str = "../Judge2/Submitted_Java/" . $str;
				$myfile = fopen($str, "w+") or die("Unable to open file!");
				fwrite($myfile, $code);
				fclose($myfile);
			}*/
		}
		mysql_close();
	}
}

echo "<center>Successfully submitted your code... thank you<br/>";
echo "<script> location.replace('../database/submissions.php'); </script>";
echo "<a href='index.php'> Back </a></center>";
?>
<center>
<a href  = "../login/logout.php"> Logout </a>
</center>