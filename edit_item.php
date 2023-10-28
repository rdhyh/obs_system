<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ITEM LIST</title>
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
    width: 80%;
    margin: 20px auto;
    border: 4px solid #594A47;
}
form{
    width: 80%;
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
    width: 300px;
    height: 140px;
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

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body style="background-color:powderblue;">
<?PHP
 //include('../menu/main_menu.php'); 
include ('001linkbakery_db2.php');
$sql="SELECT * from item ORDER BY item_id ASC";
$result = mysqli_query($conn,$sql) or die(mysql_error());
?>

<div id="content">
<div class="container">
<h4><strong><center>Item List</strong></center></h4>
<table class="table table-hover" border="1px" width="600" align="center" cellspacing="1" cellpadding="10">
  <thead>
<tr>
<td align="center" bgcolor="#e9637b"><strong>Item ID</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Category ID</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Item Name</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Item Price</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Item Description</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Item Picture</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Edit</strong></td>
<td align="center" bgcolor="#e9637b"><strong>Delete</strong></td>
</tr>
  </thead>
  
<?PHP
while ($row=mysqli_fetch_array($result))
{
echo "<tr>";
$item_id=$row["item_id"];
echo "<td>" .$row["item_id"]. "</td>";
echo "<td>" .$row["category_id"]. "</td>";
echo "<td>" .$row["item_name"]. "</td>";
echo "<td>" .$row["item_price"]. "</td>";
echo "<td>" .$row["item_details"]. "</td>";
echo "<td>" .$row["item_pic"]. "</td>";
echo "<td>","<a href=\"update_item.php?item_id=$item_id\">Edit</a>";
echo "<td>","<a href=\"itemdeleteprocess.php?item_id=$item_id\">Delete</a>";

}
echo "</table>";
echo "<center>";
echo "<br>";
echo "</div>";
?>
</body>
</html>