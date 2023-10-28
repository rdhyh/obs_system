<?PHP include ('001linkbakery_db2.php'); 

$cart_id=$show['cart_id'];
$item_pic=$show['item_pic'];
$item_name=$show['item_name'];
$item_price=$show['item_price'];
$cart_quantity=$show['cart_quantity'];
$total_price=$show['total_price'];

$query="UPDATE v_cart SET item_pic='$ud_item_pic', item_name='$ud_item_name', item_price='$ud_item_price', cart_quantity='$ud_cart_quantity', total_price='$ud_tota_price' 
WHERE cart_id='$ud_cart_id'";

mysqli_query($conn,$query);
header("location:edit_cart.php");
mysqli_close($conn);
?>