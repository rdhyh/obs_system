<!DOCTYPE html>
<html>
<head>
<style>
div.gallery {
  border: 1px solid #FCBACB;
}

div.gallery:hover {
  border: 3px solid #594A47;
}

div.gallery img {
  width: 100%;
  height: auto;
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

.clearfix:after {
  content: "";
  display: table;
  clear: both;
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
h4 {
color:#594A47;
}
p {
color:#594A47;
}
div { 
  padding: 25px 50px 25px 50px;
  background-color: #FCBACB;
}

.pagination {
  display: inline-block;
}

.pagination a {
  color: #594A47;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

.pagination a.active {
  background-color: #594A47;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #FC94AF;}

.center {
  text-align: right;
}

</style>
</head>
<body>

</br>
</br>

<div>
<h2>CATEGORY >> ALL PRODUCTS</h2>

<?PHP
 //include('../menu/main_menu.php'); 
include ('001linkbakery_db2.php');
$sql="SELECT * from item ";
$result = mysqli_query($conn,$sql) or die(mysql_error());

if($result->num_rows > 0){
    while($row = $result->fetch_array()){
		$item_id =$row["item_id"] ;
        $imageURL = 'uploaded_photo/'.$row["item_pic"];
		
?>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="viewitem.php?item_id=<?php echo $item_id; ?>">
      <img src="<?php echo $imageURL; ?>" alt="<?php echo $row["item_name"]?>.png" width="400" height="400">
    </a>
    <div class="desc"><b><?php echo $row["item_name"]; ?></b><br></br><b>[RM<?php echo $row["item_price"]; ?>]</b></div>
  </div>
</div>

<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>



<div class="clearfix"></div>

<div class = "center">
<div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#" class="active">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>
</div>

</div>

</body>
</html>


