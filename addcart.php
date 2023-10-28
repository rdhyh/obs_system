<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>CART LIST</title>
<style>
body {
  background-image: url('bg pink dark.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  font: 14px sans-serif;
}
div.desc {
  padding: 5px;
  text-align: center;
  color:#594A47
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 10px 5px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

h2 {
color:#594A47;
}
label {
color:#594A47;
}
p {
color:#594A47;
}
div { 
  padding: 25px 50px 25px 50px;
  background-color: #FCBACB;
}

#content{
    width: 100%;
    margin: 20px auto;
    border: 4px solid #594A47;
}
form{
    width: 100%;
    margin: 20px auto;
}
form div{
    margin-top: 5px;
}
#img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
}
#img_div:after{
    content: "";
    display: block;
    clear: both;
}

img{
    float: left;
    margin: 5px;
    width: 100px;
    height: 100px;
}
.button {
  background-color: #594A47;
  border: none;
  color: white;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 1px;
  cursor: pointer;
}
.button2 {border-radius: 12px;}
</style>
</head>

<body style="background-color:powderblue;">
<?PHP
 //include('../menu/main_menu.php'); 
include ('001linkbakery_db2.php');
$sql="SELECT * from item, cart where cart.item_id=item.item_id";
$result = mysqli_query($conn,$sql) or die(mysql_error());
?>

<div id="content">
<div class="container">
<h2><strong><center>CART LIST</strong></center></h2>
<table class="table table-hover" border="0px" width="1000" align="center" cellspacing="5" cellpadding="5">
  <thead>
<tr>
<td align="center" bgcolor="#e9637b"><strong>Item Picture</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Item Name</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Item Price</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Cart Quantity</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Total Price</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Action</strong></td>
</div>
</tr>
  </thead>

  
<?PHP
while ($row=mysqli_fetch_array($result))
{
echo "<tr>";
$cart_id=$row["cart_id"];
$item_id=$row["item_id"] ;
$imageURL = 'uploaded_photo/'.$row["item_pic"];
?>
	<td><center><img src="<?php echo $imageURL; ?>" alt="" width="80" height="80" /></center></td>
	
	<?php
echo "<td>" .$row["item_name"]. "</td>";
echo "<td>" .$row["item_price"]. "</td>";
echo "<td>" .$row["cart_quantity"]. "</td>";
echo "<td>" .$row["cart_price"]. "</td>";
?> 	
    <td><form action="floodvictim3.php?item_id=<?php echo $item_id; ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" class="form-control" name="item_id" id="item_id" value="<?php echo $item_id; ?>" />
    <input type="hidden" class="form-control" name="item_price" id="item_id" value="<?php echo $item_price; ?>" />
	<center><input type="submit" name="submit" class = "button button2" value="CHECKOUT"></center>
	</form></td>
	
	<?php
	
}
echo "</table>";
echo "<center>";
echo "<br>";
echo "</div>";
?>
</body>