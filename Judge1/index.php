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
			<form action="exec_prog.php" method="post">
				<h1>Online <strong>Compile and Execute</strong> Program </h1>
				<nav class="codrops-demos">
					<a class="current-demo" href="index.php">Home</a>
					<a href="../Login/logout.php">Logout</a>
					</br>
					<Input type = 'Radio' Name ='Language' value= 'C'>C
        			<Input type = 'Radio' Name ='Language' value= 'C++'>C++
					<!--<Input type = 'Radio' Name ='Language' value= 'Java'>Java </br>-->
					<div><input type="submit" name="submit" value="Execute a Program"></div>				   
				</nav>
				<a href = "../database/Submissions.php"><button type="button"><h3>Submissions<h3></button></a>
				<br><br>
				<a href = "../database/ranking.php"><button type="button"><h3>Standings<h3></button></a>
			
			</header>
			
			<section class="main">
				<center><h1> Welcome to Judge!</h1></center>
				<center>Welcome to Judge Page <br/>You can do your work cause you are authentic person</center> 
				</center>
			</section>
        </div>
    </body>
</html>