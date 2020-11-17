<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="css/Style.css">
      <link rel="stylesheet" href="style_product.css">
    <!-- for the search bar button -->
    
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    
  <link type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
 
</head>
<body>
    
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
        <h2> Item list</h2>
       
      </div>
        
   <table>     
    <?php include 'Product_list.php'?>
        </table> 
     <!-- <div class="row2">
        
          
        <div class="column2">
          <img src="images/Sgmap.png" style="width:100%">
        </div>
        <div class="column2">


    <form id="myform" action="">
<label>Username</label>
            <input type="text" id="fname" name="username" placeholder="Your name.."> 
              
              <br>
              
            <div> 
            <label>Email</label>
            <input type="email" id="email" name="email" placeholder="email address.."> 
              </div>
              <div>
              <br>
             <label>Password</label>
            <input type="password" 
                   id="password" 
                   name="password" placeholder="password..">
            </div>
            <br>
              <div>      
            <label>ConfirmPassword</label>
            <input type="password"  id="confirmpassword"    name="confirmpassword" placeholder="Confirm password..">
            </div>
            <br>
              <div>
            <input name="login_user" type="submit" value="Login" id='but_submit' class='input_field'>
    
            
              
      <span>Forgot <a href="#"> Username / Password ?</a></span>
            
            
                  <div> <a href="Product_list.php" class="guest"> Login as Guest</a> </div>
            <div id='create_account'><br>
                <a href="register.php" class="guest">Create your account &#x27A1; </a>
            </div>
              </div>
          </form>
        </div>
      </div>-->
        
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

</body>
</html>
