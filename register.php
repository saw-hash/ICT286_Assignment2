<?php
// Include config file

require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                //store result 
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 5){
        $password_err = "Password must have at least 5 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
   if(empty(trim($_POST["confirmpassword"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirmpassword = trim($_POST["confirmpassword"]);
        if(empty($password_err) && ($password != $confirmpassword)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="css/Style.css">
    <!-- for the search bar button -->
    
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    
<!---->
          <!--jquery validate plugin-->
        
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
        
        <script type="text/javascript" src="js/login_reg.js"> </script>
    
   
</head>
<body>
  
    <div class="header">
        <div class="container">
            <div class="navbar">
            <div class="logo"> 
            <img src="images/Logo.png" width="125px">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="">Account</a></li>
                    <li><div class="search-container">
                        <form action="/action_page.php">
                          <input type="text" placeholder="Search.." name="search">
                          <button type="submit"><i class="fa fa-search"></i>
                            </button>
                        </form>
                      </div>
                    </li>
                </ul>
            </nav>
                 <img src="images/cart.png" width="30px" height="30px">
                <img src="images/icons8-menu-30.png" class="menu-icon" onclick="menutoggle()"> 
            </div>
        </div>
    </div>
    <div class="container2">
      <div style="text-align:center">
        <h2>Create Account</h2>
       
      </div>
      <div class="row2">
        <div class="column2">
          <img src="images/Sgmap.png" style="width:100%">
        </div>
        <div class="column2">


    <form id="myform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        
        <div class=" <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
<label>Username</label>
            <input type="text" id="fname" name="username" placeholder="Your name.." value="<?php echo $username; ?>"> 
            
             <span class="error"><?php echo $username_err; ?></span>
        </div>
              
              
            <!--<div> 
            <label>Email</label>
            <input type="email" id="email" name="email" placeholder="email address.."> 
              </div>-->
             <div class=" <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
              
             <label>Password</label>
            <input type="password" 
                   id="password" 
                   name="password" placeholder="password.." value="<?php echo $password; ?>">
                 
                 <span class="error"><?php echo $password_err; ?></span>
                
            </div>
            <br>
              <div class=" <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">     
            <label>ConfirmPassword</label>
            <input type="password"  id="confirmpassword"    name="confirmpassword" placeholder="Confirm password.." value="<?php echo $confirm_password; ?>">
                  
                <span class="error"><?php echo $confirm_password_err; ?></span>
            </div>
            <br>
              <div>
            <input name="login_user" type="submit" value="CREATE" id='but_submit' class='input_field'>
    
            
              
      <span>Forgot <a href="#"> Username / Password ?</a></span>
            
            
                  <div> <a href="Product_list.php" class="guest"> Login as Guest</a> </div>
                <div> Already a member? <a href="login.php" class="guest"> Login </a></div>
            <div id='create_account'><br>
                <a href="register.php" class="guest">Create your account &#x27A1; </a>
            </div>
              </div>
          </form>
        </div>
      </div>
    </div>
    
      

    
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download our App</h3>
                    <p>Download App for android and ios mobile phone</p>
                    <div class="app-logo">
                        <img src="images/google-play-badge.png">
                        <img src="images/App_Store_Badge.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/Logo.png">
                    <p>Our Purpose is to sustainably make the pleasure and usefulness of home appliances to the many</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020 - SEA Store</p>
        </div>
    </div>
    <!-------Js for toggle menu-------->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        
        MenuItems.style.maxHeight = "0px";
        
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px"
            }
            else
            {
                MenuItems.style.maxHeight = "0px"
            }
        }
        
    </script>
        
        
        
        
  

</body>
</html>
