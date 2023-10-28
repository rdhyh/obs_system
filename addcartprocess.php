<!DOCTYPE html>
<html>
<head>
<title>Add to cart</title>
</head>
<body>

<?php 
include ('001linkbakery_db2.php'); 

$item_id = $_POST['item_id'];
$item_price = $_POST['item_price'];
$cart_quantity = $_POST['cart_quantity'];

$cart_price = $item_price * $cart_quantity;

$query ="insert into cart (item_id,cart_quantity, cart_price)
values('$item_id','$cart_quantity','$cart_price')";

if (mysqli_query($conn, $query)) {
	   
	header("location: addcart.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?> 
</body>
</html>