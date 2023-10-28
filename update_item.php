<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Update Category</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<?PHP
include ('001linkbakery_db2.php'); 
$item_id=$_GET['item_id'];
$query="SELECT * FROM item WHERE item_id='$item_id'";
$result=mysqli_query($conn,$query);
$num= mysqli_num_rows($result);

$i=0;
while ($i < $num) {
$show=mysqli_fetch_assoc($result);
$item_id=$show['item_id'];
$category_id=$show['category_id'];
$item_name=$show['item_name'];
$item_price=$show['item_price'];
$item_details=$show['item_details'];
$item_pic=$show['item_pic'];

?>
<div class="container">
<form action="updateitemprocess.php" method="post">
  <div class="form-group">
    <label for="item_id">Item ID :</label>
    <input type="text" class="form-control" name="ud_item_id" id="ud_item_id" readonly="readonly" value="<?php echo $item_id; ?>" />
  </div>
  <div class="form-group">
    <label for="category_id">Category ID :</label>
    <input type="text" class="form-control" name="ud_category_id" id="ud_category_id"  value="<?php echo $category_id; ?>" />
  </div>
    <div class="form-group">
    <label for="item_name">Item Name :</label>
    <input type="text" class="form-control" name="ud_item_name" id="ud_item_name" value="<?php echo $item_name; ?>" />
  </div>
  <div class="form-group">
    <label for="item_price">Item Price :</label>
    <input type="text" class="form-control" name="ud_item_price" id="ud_item_price"  value="<?php echo $item_price; ?>" />
  </div>
  <div class="form-group">
    <label for="item_details">Item Descriptions :</label>
    <input type="text" class="form-control" name="ud_item_details" id="ud_item_details"  value="<?php echo $item_details; ?>" />
  </div>
  <div class="form-group">
    <label for="item_pic">Item Picture:</label>
    <input type="file" class="form-control" name="ud_item_pic" id="ud_item_pic"  value="<?php echo $item_pic; ?>" />
  </div>
  
  
  <button  name="SUBMIT" type="SUBMIT" class="btn btn-default">SUBMIT</button>
</form>

<?PHP
++$i;
}
?>
</body>
</html>