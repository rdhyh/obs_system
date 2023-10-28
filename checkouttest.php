<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MY CART</title>
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
<?php
// Include config file
include "001linkbakery_db2.php";
$item_id=$_GET['item_id'];
$sql="SELECT * from item WHERE item_id='$item_id'" ;

$result = mysqli_query($conn,$sql) or die(mysql_error());

?>

<div class="container">
<h4><strong><center>My Shopping Cart</strong></center></h4>
<table class="table table-hover" border="2px" width="849" align="center" cellspacing="2" cellpadding="2" style="background-color:pink;">
  <thead>
	<tbody>
		<tr>
			<th>Item Picture</th>
			<th>Name</th>
			<th>Unit Price</th>
			<th>Quantity</th>
			<th>Total Price</th>
			
		</tr>   
<?php
while ($row=mysqli_fetch_array($result)) 
{
    echo "<tr>" ;
	$item_id =$row["item_id"] ;
	$item_price =$row["item_price"];
	$imageURL = 'uploaded_photo/'.$row["item_pic"];
	
	?>
	<td><img src="<?php echo $imageURL; ?>" alt="" width="80" height="80" /></td>
	<?php
	echo "<td>" .$row["item_name"]. "</td>";
	echo "<td>" .$row["item_price"]. "</td>";
	
	?>
	<td> <form action="addcartprocess.php?item_id=<?php echo $item_id; ?>" method="POST" enctype="multipart/form-data">
	<input type="hidden" class="form-control" name="item_id" id="item_id" value="<?php echo $item_id; ?>" />
	<input type="hidden" class="form-control" name="item_price" id="item_id" value="<?php echo $item_price; ?>" />
	<input type="number" id="cart_quantity" name="cart_quantity" min="1" max="5">
	<input type="submit" name="submit" value="Add">
	</form>
	</td> 
	
	<?php
	  
	echo "<td>" ?> Undefined <?php  "</td>";
    }

   echo "</tbody>" ;
   echo "</table>" ;
   echo "</div>" ;

?>
</body>
</html>