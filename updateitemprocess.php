<?PHP include ('001linkbakery_db2.php'); 

$ud_item_id=$_POST['ud_item_id'];
$ud_category_id=$_POST['ud_category_id'];
$ud_item_name=$_POST['ud_item_name'];
$ud_item_price=$_POST['ud_item_price'];
$ud_item_details=$_POST['ud_item_details'];
$ud_item_pic=$_POST['ud_item_pic'];

$query="UPDATE item SET category_id='$ud_category_id', item_name='$ud_item_name', item_price='$ud_item_price', item_details='$ud_item_details', item_pic='$ud_item_pic' 
WHERE item_id='$ud_item_id'";

mysqli_query($conn,$query);
header("location:edit_item.php");
mysqli_close($conn);
?>