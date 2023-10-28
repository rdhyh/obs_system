<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MY ORDER</title>
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
h3 {
	color:#594A47;
	}
h2 {
	color:#594A47;
	}
td {
	color:#594A47;
}
</style>
</head>

<?PHP
 //include('../menu/main_menu.php'); 
include ('001linkbakery_db2.php');
$sql="SELECT * from v_order ORDER BY order_id ASC";
$result = mysqli_query($conn,$sql) or die(mysql_error());
?>
<div class="container">
<h2><b><center>My Order</b></center></h2>
<h3><center><i>Your current order:</i></center></h3>

<br>
<table class="table table-hover" border="2px" width="849" align="center" cellspacing="2" cellpadding="2" style="background-color:pink;">
  <thead>
<tr>
<td align="center" bgcolor="#e9637b"><strong>Order ID</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Order Date</strong></td> 
<td align="center" bgcolor="#e9637b"><strong>Payment (RM)</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Status</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Receipt</strong></td>

</tr>
  </thead>
<?PHP
while ($row=mysqli_fetch_array($result))
{
echo "<tr>";
$order_id=$row["order_id"];
 echo "<td><center>" .$row["order_id"]."</center></td>";
 echo "<td><center>" .$row["order_date"]."</center></td>";
 echo "<td><center>" .$row["order_price"]."</center></td>";
 echo "<td><center>" .$row["order_status"]."</center></td>";
 echo "<td><center>","<a href=\"printreceipt.php?\">View/Print</a>";
 
}
echo "</table>";
echo "<center>";
echo "<br>";
echo "</div>";
?>
</body>
</html>