<?PHP include ('001linkbakery_db2.php'); 
$ud_category_id=$_POST['ud_category_id'];
$ud_category_name=$_POST['ud_category_name'];

$query="UPDATE category SET category_name='$ud_category_name' 
WHERE category_id='$ud_category_id'";

mysqli_query($conn,$query);
header("location:editcategory.php");
mysqli_close($conn);
?>