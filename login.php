<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>LOGIN AND SIGN UP REGISTRATION</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
  h1 {
    text-align: center;
    font-family: Roboto;
    color: red;

  }
</style>
<body>
  <h1>PORTFOLIO MANAGEMENT SYSTEM</h1>
  <br><br>
  <div class="header">
  	<h2>LOGIN</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>USERNAME</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>PASSWORD</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">LOGIN</button>
  	</div>
  	<p>
  		YOU ARE NOT A MEMBER START TO SIGN UP <a href="register.php">SIGN UP</a>
  	</p>
  </form>
</body>
</html>

