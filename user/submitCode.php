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
        <meta name="description" content="Online Project" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="rizoan toufiq" />
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
			
				<h1>Online <strong>Compile and Execute</strong>Program </h1>
				<nav class="codrops-demos">
					<a class="current-demo" href="index.php">Home</a>
					<a href="../Login/logout.php">Logout</a>
				</nav>
				
			</header>
			
			<section class="main">
			   <?php
				  
                  if(isset($_SESSION ['ERR'])){ 
							   echo "<center class='error'>".$_SESSION['ERR']."</center>";
							   unset($_SESSION['ERR']);
                  }
				?>
				<center><h1> Welcome to User!</h1></center>
				<br>
				<div id="comment_form">

				<center>
				<form action="processindex.php" method="post">

				<p>Select Porblem:</p>
				<select name="Problem">
					<option value="A">Problem A</option>
					<option value="B">Problem B</option>
					<option value="C">Problem C</option>
					<option value="D">Problem D</option>
					<option value="E">Problem E</option>
					<option value="F">Problem F</option>
				</select>

				<br><p>Select Language:</p>
				<select name="Language">
					<option value="C">C</option>
					<option value="C++">C++</option>
					<!--<option value="Java">Java</option>-->
				</select>

	            <div><textarea rows="25" cols="200" name="code" id="code" placeholder="Your code...."></textarea></div>
	            <div><input type="submit" name="submit" value="Submit"></div>
				</form>
				</center>

	            </div>
			</section>
        </div>
    </body>
</html>
