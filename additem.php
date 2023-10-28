<!DOCTYPE html>
<html>
<head>
<title> Add Item</title>
</head>
<body>


<?php
// Include the database configuration file
include '001linkbakery_db2.php';
$statusMsg = '';

	$item_id = $_POST['item_id'];
	$category_id = $_POST['category_id'];	
	$item_name = $_POST["item_name"];
	$item_price = $_POST["item_price"];
	$item_details = $_POST["item_details"];

// File upload path
$targetDir = "uploaded_photo/";
$fileName = basename($_FILES["item_pic"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
global $db;


if(isset($_POST["submit"]) && !empty($_FILES["item_pic"]["name"])){
	
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["item_pic"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $query = "INSERT into item (item_id, category_id, item_name, item_price, item_details, item_pic) VALUES ('$item_id','$category_id','$item_name','$item_price','$item_details','".$fileName."')";
			
            if (mysqli_query($conn, $query)) {
	   
				header("location: itemdata.php");
				} else {
				echo "Error: " . $query . "<br>" . mysqli_error($conn);
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;


?>




</body>
</html>