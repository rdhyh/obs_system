<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Update Customer</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<head>
<style>
body {
  background-image: url('bg pink dark.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  font: 14px sans-serif;
}
div.desc {
  padding: 5px;
  text-align: center;
  color:#594A47
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 10px 5px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

h2 {
color:#594A47;
}
label {
color:#594A47;
}
p {
color:#594A47;
}
div { 
  padding: 25px 50px 25px 50px;
  background-color: #FCBACB;
}

#content{
    width: 60%;
    margin: 20px auto;
    border: 4px solid #594A47;
}
form{
    width: 60%;
    margin: 20px auto;
}
form div{
    margin-top: 5px;
}
#img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
}
#img_div:after{
    content: "";
    display: block;
    clear: both;
}

img{
    float: left;
    margin: 5px;
    width: 300px;
    height: 140px;
}
.button {
  background-color: #594A47;
  border: none;
  color: white;
  padding: 8px 30px;
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
<?PHP
include ('001linkbakery_db2.php'); 
$cust_id=$_GET['cust_id'];
$query="SELECT * FROM customer WHERE cust_id='$cust_id'";
$result=mysqli_query($conn,$query);
$num= mysqli_num_rows($result);

$i=0;
while ($i < $num) {
$show=mysqli_fetch_assoc($result);
$cust_id=$show['cust_id'];
$cust_name=$show['cust_name'];
$cust_address=$show['cust_address'];
$cust_email=$show['cust_email'];

?>
<div id="content">
<div class="container">
<center><h2><i> Update Customer </i></h2></center>

<center><form action="011pros_updateaccbakery.php" method="post"></center>
  <div class="form-group">
    <label for="cust_id"><b>Customer ID:</b></label>
    <input type="text" class="form-control" name="ud_id" id="ud_id" readonly="readonly" value="<?php echo $cust_id; ?>" />
  </div>
  <br>
  <div class="form-group">
    <label for="cust_name"><b>Name:</b></label>
    <input type="text" class="form-control" name="ud_name" id="ud_name"  value="<?php echo $cust_name; ?>" />
  </div>
  <br>
  <div class="form-group">
    <label for="cust_address"><b>Address:</b></label>
    <input type="text" class="form-control" name="ud_address" id="ud_address"  value="<?php echo $cust_address; ?>" />
  </div>
  <br>
  <div class="form-group">
    <label for="cust_email"><b>Email:</b></label>
    <input type="text" class="form-control" name="ud_email" id="ud_email"  value="<?php echo $cust_email; ?>" />
  </div>
  <br>
  <center><button  name="SUBMIT" type="SUBMIT" class="button button2">SUBMIT</button></center>
  <br></br>
</form>

<?PHP
++$i;
}
?>
</body>
</html>