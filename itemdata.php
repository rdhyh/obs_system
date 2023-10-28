<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Edit Category</title>
<style>

body {
  background-image: url('bg pink dark.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  font: 14px sans-serif;
}

</style>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body style="background-color:powderblue;">
<?PHP
 //include('../menu/main_menu.php'); 
include ('001linkbakery_db2.php');
$sql="SELECT * from item ORDER BY item_id ASC";
$result = mysqli_query($conn,$sql) or die(mysql_error());
?>
<div class="container">
<P><strong><center> Item List</strong></center> <br>
<table class="table table-hover" border="2px" width="849" align="center" cellspacing="2" cellpadding="2" style="background-color:pink;">
  <thead>
<tr>
<td align="center" bgcolor="#e9637b"><strong>Item ID</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Category ID</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Item Name</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Item Price</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Item Description</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Item Picture</strong></td>
</tr>
  </thead>
  
<?PHP
while ($row=mysqli_fetch_array($result))
{
echo "<tr>";
$item_id=$row["item_id"];
echo "<td>" .$row["item_id"]. "</td>";
echo "<td>" .$row["category_id"]. "</td>";
echo "<td>" .$row["item_name"]. "</td>";
echo "<td>" .$row["item_price"]. "</td>";
echo "<td>" .$row["item_details"]. "</td>";
echo "<td>" .$row["item_pic"]. "</td>";


}
echo "</table>";
echo "<center>";
echo "<br>";
echo "</div>";
?>
</body>
</html>