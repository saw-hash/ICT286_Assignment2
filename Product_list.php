<!DOCTYPE html>
<html>
<head><title> table</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="style_product.css">
     
</head>


    
    <script>
    
        $(document).ready(function () {           
    $("#btnSubmit").click(function (e) { 
      e.preventDefault();
        
      var username = $("#username").val();
  
      // check if the input is valid using a 'valid' property
      if (username.length===0)
      { $("#error").text("Please entry name");
          }
      else
        { $("#error").text("");
             $.ajax({
                type: 'POST',
                url: 'l10_e3.php',
                data:{ username: username } ,
                success: function (response) {
                  $('#display').html(response);
                },
              });
        }
 
        });     
         
            ///qty
        $('#qty').keypress(function(){
            console.log("hi");
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if(keycode == '13'){

                var qty = $(this).val();

                var price =  $(this).closest('td').text();
                console.log(qty);
                console.log(price);
                //var fee =  $(this).closest('td').next('td').next('td');
            }

       });
        }); 
  </script> 
    
    
    
  <body>  
    <?php include('config.php'); ?>

      
      
      <!-- search field -->
   
      <!--search within the same page-->  
    <div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="search_input" id="search_input">
<input type="submit" name="search" id="search" value="Search"/>
     </form>   </div> 
      <br>
      
<?php
    if(isset($_POST['search'])) {
     
     $search_input = $_POST['search_input'];
     //$lname = $_POST['lname'];
     $query = "SELECT * FROM Product where 
     (ProductID = '$search_input') 
     OR (ProductName = '$search_input') 
     OR (ProductType = '$search_input')
     OR (ProductBrand = '$search_input')
     OR (ProductDescription = '$search_input')
     OR (ProductPrice = '$search_input')";
     
     $query_run = mysqli_query($conn, $query);
    
    
    
   echo "<table class='table' id='search' border='0'>
    
    <thead>
    <th>ProductID</th>
    <th>ProductName</th>
    <th>ProductType</th>
    <th>ProductBrand</th>
    <th>ProductDescription</th>
    <th>ProductImage</th>
    <th>ProductPrice</th>
    </thead> ";
          
  while($row = $query_run->fetch_assoc()) {
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
    
} else {
  echo "0 results";
} 
    // close connection
   mysqli_close($conn);
    ?>
    
      
       
</body>
</html>

