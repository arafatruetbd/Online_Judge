<?php 
//session_start();
//if(isset($_SESSION['userName'])){ 
 // header("location: success.php");
//}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
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
			
				<h1>Online &laquo; <strong>Compile and Execute</strong> &laquo; Program </h1>

				<nav class="codrops-demos">
					<a class="current-demo" href="../index.php">Home</a>
				</nav>
				
				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
			<section class="main">
			    <?php
				  
                  if(isset($_SESSION['ERR'])){ 
							   echo "<center class='error'>".$_SESSION['ERR']."</center>";
							   unset($_SESSION['ERR']);
                  }
				?>
				<form class="form-1" name="loginform" action="processindex.php" method="post">
					<p class="field">
						<input type="text" name="userName" placeholder="Username or email">
						<i class="icon-user icon-large"></i>
					</p>
						<p class="field">
							<input type="password" name="Password" placeholder="Password">
							<i class="icon-lock icon-large"></i>
					</p>
					<p class="submit">
						<button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
					</p>
				</form>
			</section>
        </div>
    </body>
</html>