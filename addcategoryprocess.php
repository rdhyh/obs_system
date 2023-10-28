<!DOCTYPE html>
<html>
<head>
<title>Add Category</title>
</head>
<body>
<?php 
include ('001linkbakery_db2.php'); 
$id_category = $_POST['id_category'];
$category_name = $_POST['category_name'];
$query ="insert into category  values ('$id_category','$category_name')";
if (mysqli_query($conn, $query)) {

  echo "ID Category :".$id_category."<br>";
  echo "Nama :".$category_name."<br>";
  
    echo "New record created successfully";
	//echo "<a href=\"datadonator.php\">  list</a>"; 
	//header("location: datadonator.php");
	header("location: editcategory.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?> 
</body>
</html>