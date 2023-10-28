<?PHP
$item_id = $_GET['item_id'];
include ('001linkbakery_db2.php'); 
$query = "delete from item where item_id = '$item_id'";
$result = mysqli_query($conn,$query);

if ($result==TRUE)
{	echo "record successfully Deleted";
    header("location:edit_item.php");
 }
if ($result==FALSE) 
{echo "record unsuccessfully Deleted";
  header("location:edit_item.php");}
mysqli_close($conn);
?>