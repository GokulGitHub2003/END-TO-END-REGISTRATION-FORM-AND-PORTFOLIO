<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
  .content{
    

    /*text-align: center;*/

    padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 80px;

    line-height: 200%;
    text-align: justify;
  }
  .out{
    text-align: right;
    color: black;
    line-height: 200%;
  }
  
</style>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
    
    
    <!-- logged in user information -->
    <div class="out">

    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>WELCOME<strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;"><i class="fa-solid fa-arrow-right-from-bracket">LOGOUT FROM THE SESSION</i></a> </p>
    <?php endif ?>
	 
</body>
</html>
