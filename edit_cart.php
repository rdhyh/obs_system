<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CART LIST</title>
<style>

body {
  background-image: url('bg pink dark.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  font: 14px sans-serif;
}
h4 {
	color:#594A47;
}
td {
	color:#594A47;
}

</style>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body style="background-color:powderblue;">
<?PHP
 //include('../menu/main_menu.php'); 
include ('001linkbakery_db2.php');
$sql="SELECT * from v_cart ORDER BY cart_id ASC";
$result = mysqli_query($conn,$sql) or die(mysql_error());
?>
<div class="container">
<h4><strong><center>CART LIST</strong></center></h4>
<table class="table table-hover" border="2px" width="849" align="center" cellspacing="2" cellpadding="2" style="background-color:pink;">
  <thead>
<tr>
<td align="center" bgcolor="#e9637b"><strong>Cart ID</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Item Picture</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Item Name</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Item Price</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Cart Quantity</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Total Price</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Edit</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Delete</strong></td>
</tr>
  </thead>
  
<?PHP
while ($row=mysqli_fetch_array($result))
{
echo "<tr>";
$cart_id=$row["cart_id"];
echo "<td>" .$row["cart_id"]. "</td>";
echo "<td>" .$row["item_pic"]. "</td>";
echo "<td>" .$row["item_name"]. "</td>";
echo "<td>" .$row["item_price"]. "</td>";
echo "<td>" .$row["cart_quantity"]. "</td>";
echo "<td>" .$row["total_price"]. "</td>";
echo "<td>","<a href=\"update_cart.php?cart_id=$cart_id\">Edit</a>";
echo "<td>","<a href=\"cartdeleteprocess.php?cart_id=$cart_id\">Delete</a>";

}
echo "</table>";
echo "<center>";
echo "<br>";
echo "</div>";
?>
</body>
</html>