<!DOCTYPE html>
<html>
<head>
<title> View Item </title>
<style>

* {
  box-sizing:border-box;
}

div {
  padding: 25px 50px 25px 50px;
  background-color: #FCBACB;
  
}
body {
  background-image: url('bg pink dark.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  font: 14px sans-serif;
}
h2 {
color:#594A47;

}

h3 {
color:#594A47;
}

.container {
  padding: 64px;
}

.row:after {
  content: "";
  display: table;
  clear: both
}

.column-66 {
  float: left;
  width: 66.66666%;
  padding: 20px;
}

.column-33 {
  float: left;
  width: 33.33333%;
  padding: 20px;
}

.large-font {
  font-size: 32px;
}

p{
color:#594A47;
}


</style>
</head>
<body>

</br>
</br>

<?PHP
 //include('../menu/main_menu.php'); 
include ('001linkbakery_db2.php');
$item_id=$_GET['item_id'];
$sql="SELECT * from item,category where item_id='$item_id' AND category.category_id=item.category_id";
$result = mysqli_query($conn,$sql) or die(mysql_error());

if($result->num_rows > 0){
    while($row = $result->fetch_array()){
		$item_id =$row["item_id"] ;
        $imageURL = 'uploaded_photo/'.$row["item_pic"];
		
?>

<div class="container" action >
 <div class="row">
   <div class="column-33">
    <img src="<?php echo $imageURL; ?>" alt="" width="350" height="350" />
	
	<br><center><h2 class="large-font"><b>RM<?php echo $row["item_price"]; ?></b></h2><center>
	
	</div>

		<div class="column-66">
	<h1><b><?php echo $row["item_name"]; ?></b></h1>
	<h2><b>Category/<?php echo $row["category_name"]; ?></b></h2>
	<p><b><span style="font-size:24px"><?php echo $row["item_details"]; ?></b></p>
	</div>
	</div>
	<a target="_blank" href="checkouttest.php?item_id=<?php echo $item_id; ?>">
		<center><img src="button.png" alt="button" width="100" height="50"><center>
		</a>
	</div>
	

	
	
<?php }
}

else{ ?>
    <p>No image(s) found...</p>
<?php } ?>




</body>


</html>


