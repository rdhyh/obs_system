<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginbakery.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Online Bakery Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
  body {
  background-image: url('bg pink.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  font: 14px sans-serif;
}
h1 {
colour: #594A47;
}
.button {
  background-color: #594A47;
  border: none;
  color: white;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2 {border-radius: 12px;}

    </style>
</head>
<body>
<div class="w3-container w3-center">
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Online Bakery Shop!</h1>
    <img src="Online Bakery Shop Logo.png" alt="Online Bakery Shop Logo" style="width:80%;max-width:200px">
	</br>
	<p>
        <a href="reset-passwordbakery.php" class="button button2">Reset Your Password</a>
		<a href="logoutbakery.php" class="button button2">Log Out</a>
		<a href="framesetbakery_user.html" class="button button2">User System</a>
        <a href="framesetbakery_admin.html" class="button button2">Admin System</a>
    </p>
	</div>
</body>
</html>