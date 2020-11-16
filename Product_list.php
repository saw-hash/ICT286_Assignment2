<!DOCTYPE html>
<html>
<head><title> table</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="style_product.css">
    <link rel="stylesheet" href="css/Style.css">
    
    
    
    <!-------Js for toggle menu-------->
  <!--  <script>
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
        
    </script>-->
     
</head>

  <body>  
      <table class='table'> 
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
                        <!--<form action="/action_page.php">
                          <input type="text" placeholder="Search.." name="search">
                          <button type="submit"><i class="fa fa-search"></i>
                            </button>
                        </form>-->
                      </div>
                    </li>
                </ul>
            </nav>
                 <img src="images/cart.png" width="30px" height="30px">
                <img src="images/icons8-menu-30.png" class="menu-icon" onclick="menutoggle()"> 
            </div>
        </div>
    </div>
      
      </table>

      
      
    <?php include('config.php'); ?>
      
  <!--<table class='table' border='0'>
    
    <thead>
        <tr>
    <th>ProductID</th>
    <th>ProductName</th>
    <th>ProductType</th>
    <th>ProductBrand</th>
    <th>ProductDescription</th>
    <th>ProductImage</th>
    <th>ProductPrice</th>
        </tr>
    </thead>-->
           

      
    <!-- search field -->
   
      <!--search within the same page-->  
    <div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
    <input type="text" name="search_input" id="search_input">
<input type="submit" name="search" id="search" value="Search"/>
     </form>   </div> 
      <br>
      
      
    <table class='table' id='search' border='0'>
    
    <thead>
    <th>ProductID</th>
    <th>ProductName</th>
    <th>ProductType</th>
    <th>ProductBrand</th>
    <th>ProductDescription</th>
    <th>ProductImage</th>
    <th>ProductPrice</th>
    </thead> 
      
<?php
 /*   if(isset($_POST['search'])) {
     
     $search_input = $_POST['search_input'];
    $query = "SELECT * FROM product where 
     (ProductID = '$search_input') 
     OR (ProductName = '$search_input') 
     OR (ProductType = '$search_input')
     OR (ProductBrand = '$search_input')
     OR (ProductDescription = '$search_input')
     OR (ProductPrice = '$search_input')";
     
     $query_run = mysqli_query($conn, $query);
    
    if ($query_run->num_rows >0){*/
        
     if(isset($_POST['search'])) {
          $search_input = $_POST['search_input'];   
      
  /*       "SELECT * FROM employees
    WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'");*/
         
    $sql = "SELECT * FROM product where 
    ProductID LIKE '%{'$search_input}%' ";
     /*(ProductID = '$search_input') 
     OR (ProductName = '$search_input') 
     OR (ProductType = '$search_input')
     OR (ProductBrand = '$search_input')
     OR (ProductDescription = '$search_input')
     OR (ProductPrice = '$search_input')";*/
         
    $result = $conn->query($sql);
    $row_cnt = mysqli_num_rows($result);
    if ($result->num_rows > 0) {
  

     

    while($row = $result->fetch_assoc()) {
 //  while($row = mysqli_fetch_array($query_run))  {     
  echo "<tbody>";
      echo "<tr>";
      echo "<td data-label='ProductID'>" . $row['ProductID'] . "</td>";
      echo "<td data-label='ProductName'>" . $row['ProductName'] . "</td>";
      echo "<td data-label='ProductType'>" . $row['ProductType'] . "</td>";
      echo "<td data-label='ProductBrand'>" . $row['ProductBrand'] . "</td>";
      echo "<td data-label='ProductDescription'>" . $row['ProductDescription'] . "</td>";
      echo "<td data-label='ProductImage'>" . $row['ProductImage'] . "</td>";
      echo "<td data-label='ProductPrice'>" . "$" . $row['ProductPrice'] . "</td>";
    echo "</tr>";
      
    echo "</tbody>";
  }
    
}   } else {
  echo "0 results";
} 
    // close connection
   mysqli_close($conn);
    ?>
     
?>
    
 
      
      
      
      
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
       
</body>
</html>

