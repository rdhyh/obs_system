<!DOCTYPE html>
<html>
<head>
<title>Configuration</title>
</head>
<body>
<?php
$hostname = 'localhost';
$username = 'root';
$password = 'password';
$database = 'obs_system';

$conn = mysqli_connect($hostname,  $username,  $password, $database) or die('Connecting to MySQL failed');

echo 'database connected';
?>
</body>
</html>