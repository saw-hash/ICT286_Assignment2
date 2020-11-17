<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>SEA Store || Ecommerce Website</title>
    <link rel="stylesheet" href="css/Style.css">
    <!-- for the search bar button -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    
    
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
        <h2>Contact Us</h2>
        <p>Swing by for a cup of coffee, or leave us a message:</p>
      </div>
      <div class="row2">
        <div class="column2">
          <img src="images/Sgmap.png" style="width:100%">
        </div>
        <div class="column2">
   
            
            
          <form id="myform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"method="post">
            <label for="custname">UserName</label>
            <input type="text" id="custname" name="custname" placeholder="Your name..">
              
              <br><br>
            <label for="lname">Last Name (optional)</label>         
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
              
              <br> <br>
            <label for="phone">Phone</label>
            <input type="number" id="phone" name="phone" placeholder="your phone number..">
             
            <br> <br>
            <label for="phone">Email</label>
            <input type="email" id="email" name="email" placeholder="your address..">
              
              <br><br>
            <label for="country">Country</label>
            <select id="country" name="country">
              <option value="australia">Singapore</option>
              <option value="canada">Malaysia</option>
              <option value="usa">Indonesia</option>
            </select>
              
              
            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
              <br><br>
            <input name="contact_us" type="submit" value="Submit">
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