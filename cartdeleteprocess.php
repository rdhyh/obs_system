<?PHP
$cart_id = $_GET['cart_id'];
include ('001linkbakery_db2.php'); 
$query = "delete from v_cart where cart_id = '$cart_id'";
$result = mysqli_query($conn,$query);

if ($result==TRUE)
{	echo "record successfully Deleted";
    header("location:edit_cart.php");
 }
if ($result==FALSE) 
{echo "record unsuccessfully Deleted";
  header("location:edit_cart.php");}
mysqli_close($conn);
?>