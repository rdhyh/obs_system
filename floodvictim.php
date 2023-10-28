<?php
// Initialize the session
session_start();
 
// Check if the user flood victim, if yes then redirect them to proceed page
if(isset($_SESSION["victim"]) === true){
    header("location: floodvictim2.php");
	//header("location: frameset.html");
    exit;
}
 
// Include config file
require_once "001linkbakery_db2.php";
 
// Define variables and initialize with empty values
$vic_id= "";
$vic_id_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate credentials
    if(empty($vic_id_err)){
        // Prepare a select statement
        $sql = "SELECT vic_id FROM floodvictim WHERE vic_id = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $vic_id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if id exists, if yes then verify 
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $vic_id);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($vic_id)){
                            // id is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["victim"] = true;
                            $_SESSION["vic_id"] = $vic_id;                            
                            
                            // Redirect user to proceed page
                            header("location: floodvictim2.php");
                        } else{
                            // Password is not valid, redirect to proceed
                            header("location: floodvictim1.php");
                        }
                    }
                } 
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
 
<!DOCTYPE html>
<html>
<br></br>
<br></br>
<title>FLOOD VICTIM VERIFICATION </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
  <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
		.button {
  background-color: #594A47;
  border: none;
  color: white;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2 {border-radius: 12px;}
		body {
  background-image: url('bg pink.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
h3 {
    color:#594A47;
}
h4 {
    color:#594A47;
}

label {
	color:#594A47;
}

p {
	color:#594A47;
}
    </style>
</head>

<body>
  <div class="w3-container w3-center">
  
        <h3><b><center>VERIFICATION FOR FLOOD VICTIM</center></b></h3><br>
		<h4><center>#To get the 20% discount, you need to enter your I/C number.</center></h4>
		<h4><center>Your I/C number is needed for verification of flood victim.</center></h4><br>
		
        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label><b>I/C Number: </b></label><br></br>
                <input type="text" name="vic_id" class="form-control <?php echo (!empty($vic_id_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $vic_id; ?>">
                <span class="invalid-feedback"><?php echo $vic_id_err; ?></span>
            </div>   
			<br>
            <div class="form-group">
                <input type="submit" class="button button2" value="Verify">
            </div>
            <p><b>Not a flood victim?      <a href="https://www.bankislam.biz/">Proceed</a></b></p>
        </form>
    </div>
</body>
</html>