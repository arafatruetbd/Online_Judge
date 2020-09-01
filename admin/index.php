<?php 
 if(!isset($_SESSION))
     session_start();
  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Online Project</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
    </head>
    <body>
        <div class="container">
		
			<!-- Codrops top bar -->
            <div class="codrops-top">
                <strong>&laquo; share Via: </strong>
				<a href="http://fb.com/">facebook</a>
                
				<span class="right">
                    <a href="#">
                        <strong>Just a Simple Project...</strong>
                    </a>
                </span>
            </div><!--/ Codrops top bar -->
			
			<header>
				<h1>Online <strong>Compile and Execute</strong> Program </h1>
				<nav class="codrops-demos">
					<a class="current-demo" href="index.php">Home</a>
					<a href="../Login/logout.php">Logout</a>
					</br>
				</nav>
				<h1><b>You are inside your system now.....</b></h1>
				<br>

				<?php
				include ("connectdb.php");
				$querynm = "select * from user where 1";
				$result = mysql_query($querynm, $link) or die("Cannot Retrive From Table");
				$num_rows = mysql_num_rows($result);
				echo "<h3>Name".str_repeat('&nbsp;', 6)."Password<br></h3>";
				$i = $num_rows;
				while ($i >= 0) {
					$row = mysql_fetch_row($result);
				echo $row['1'].str_repeat('&nbsp;', 10).$row['2'];
				echo "<br>";
				$i--;
				}

				mysql_close();
				?>

				<a href = "../database/submissions.php"><button type="button"><h3>Submissions</h3></button></a>
				<br><br>
				<a href = "../database/ranking.php"><button type="button"><h3>Standings</h3></button></a>

			</header>
			
			<section class="main">
				<center><h1> Welcome to Admin!</h1></center>
				<center>Welcome to Admin Page <br/>You can do your work cause you are authentic person</center> 
				</center>
			</section>
        </div>
    </body>
</html>