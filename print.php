<!DOCTYPE html>
<html>
<head>
<title> Print Receipt</title>
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
.button {
  background-color: #594A47;
  border: none;
  color: white;
  padding: 8px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2 {border-radius: 12px;}

</style>
</head>
<body>

</br>
</br>

<?PHP
 //include('../menu/main_menu.php'); 
include ('001linkbakery_db2.php');
$order_id=$_GET['order_id'];
$sql="SELECT * from cart,item,v_cart where order_id='$order_id' ";
$result = mysqli_query($conn,$sql) or die(mysql_error());

if($result->num_rows > 0){
    while($row = $result->fetch_array()){
		$item_id =$row["item_id"] ;
        $imageURL = 'uploaded_photo/'.$row["item_pic"];
		
?>

<div class="container" action >
 <div class="row">
   <div class="column-33">
    <img src="<?php echo $imageURL; ?>" alt="" width="200" height="200" />
	
	</div>

		<div class="column-66">
	<h2><b><?php echo $row["item_name"]; ?></b></h2>
	<h2><b>RM<?php echo $row["item_price"]; ?></b></h2>
	<br>
	<h2><b>Quantity:<?php echo $row["cart_quantity"]; ?></b></h2>
	<h2><b>Total Price:<?php echo $row["total_price"]; ?></b></h2>

	</div>
	</div>
	<a target="_blank" href="orderview_user.php?item_id=<?php echo $item_id; ?>">
		<center><button  name="SUBMIT" type="SUBMIT" class="button button2">Print Receipt</button><center>
		</a>
	</div>
	
	
<?php }
}

else{ ?>
    <p>No image(s) found...</p>
<?php } ?>




</body>


</html>
