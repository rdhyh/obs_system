<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>COMPLETED ORDER</title>
<style type="text/css">
<!--
.style1 {font-size: 18px}
-->
</style>

<link rel="stylesheet" type="text/css" href="../menu/pro_dropdown_3/pro_dropdown_3.css" />

<script src="../menu/pro_dropdown_3/stuHover.js" type="text/javascript"></script>
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

h4 {
color:#594A47;
}
label {
color:#594A47;
}
h2 {
color:#594A47;
}
div { 
  padding: 25px 50px 25px 50px;
  background-color: #FCBACB;
}

#content{
    width: 80%;
    margin: 20px auto;
    border: 4px solid #594A47;
}
form{
    width: 80%;
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

<?PHP
 //include('../menu/main_menu.php'); 
include ('001linkbakery_db2.php');
$sql="SELECT * from v_order ORDER BY order_id ASC";
$result = mysqli_query($conn,$sql) or die(mysql_error());
?>

<div id="content">
<div class="container">
<h2><b><center>Completed Order List</b></center></h2>
<h4><center><i>Completed past order can be seen here:</i></center></h4>

<table class="table table-hover" border="0px" width="600" align="center" cellspacing="5" cellpadding="5">
  <thead>
<tr>
<td align="center" bgcolor="#e9637b"><strong>Order ID</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Order Date</strong></td> 
<td align="center" bgcolor="#e9637b"><strong>Payment (RM)</strong></td>

</tr>
  </thead>
<?PHP
while ($row=mysqli_fetch_array($result))
{
echo "<tr>";
$order_id=$row["order_id"];
 echo "<td><center>" .$row["order_id"]. "</center></td>";
 echo "<td><center>" .$row["order_date"]."</center></td>";
 echo "<td><center>" .$row["order_price"]."</center></td>";
 
}
echo "</table>";
echo "<center>";
echo "<br>";
echo "</div>";
?>
</body>
</html>