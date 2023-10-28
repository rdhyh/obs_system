<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>UPDATE CATEGORY</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

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
    width: 60%;
    margin: 20px auto;
    border: 4px solid #594A47;
}
form{
    width: 60%;
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
</head>

<body>
<?PHP
include ('001linkbakery_db2.php'); 
$category_id=$_GET['category_id'];
$query="SELECT * FROM category WHERE category_id='$category_id'";
$result=mysqli_query($conn,$query);
$num= mysqli_num_rows($result);

$i=0;
while ($i < $num) {
$show=mysqli_fetch_assoc($result);
$category_id=$show['category_id'];
$category_name=$show['category_name'];
?>
<div id="content">
<div class="container">
<center><h2><i> Edit Category </i></h2></center>

<center><form action="categoryprocessupdate.php" method="post"></center>
  <div class="form-group">
    <label for="category_id"><b>ID Category:</label>
    <input type="text" class="form-control" name="ud_category_id" id="ud_category_id" readonly="readonly" value="<?php echo $category_id; ?>" />
  </div>
  <div class="form-group">
    <label for="category_name">Category Name:</b></label>
    <input type="text" class="form-control" name="ud_category_name" id="ud_category_name"  value="<?php echo $category_name; ?>" />
  </div>
  
  <center><button  name="SUBMIT" type="SUBMIT" class="button button2">SUBMIT</button></center>
</form>

<?PHP
++$i;
}
?>
</body>
</html>
