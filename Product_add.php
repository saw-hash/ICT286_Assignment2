
 <?php  header("Access-Control-Allow-Origin: *"); 
//Handle AJAX request 
    /*if(isset($POST['ajax']) && isset($_POST['name']){
        echo $POST['name'];
        exit;
    }*/
?>
<!DOCTYPE html>
<html>
<head><title> Product Add</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="style1.css">
    
    <script> 
    
    $(document).ready(function(){
        $('#ProductName').keyup(function(){
            var name = $(this).val();
            
            //Ajax request
            $.ajax({
                type: 'post',
                data: {ajax: 1, ProductName: ProductName},
                success: function(response){
                    $('#response').text('ProductName : '+ response);        
                    }
            })
        }
    )};
    
    </script>
     
</head>

<body>
     <!-- Add field -->
   
      <!--add within the same page-->  
    <div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

   <table class="table">
     <thead>
     	 <th>ProductName</th>
     	 <th>ProductType</th>
     	 <th>ProductBrand</th>
     	 <th>ProductDescription</th>
         <th>ProductImage</th>
     	 <th>ProductPrice</th>
     </thead>
     <tbody>
     	  <tr>
    <td data-label="ProductName">
        <input type="text" name="ProductName" id="ProductName"> </td>
   <td data-label="ProductType">
        <input type="text" name="ProductType"></td>
    <td data-label="ProductBrand">
        <input type="text" name="ProductBrand"></td>
    <td data-label="ProductDescription">
        <input type="text" name="ProductDescription"></td>
    <td data-label="ProductImage">
        <input type="text" name="ProductImage"></td>
    <td data-label="ProductPrice">
        <input type="text" name="ProductPrice"></td>
     	  </tr>

     	  
     </tbody>
   </table>
    
    
    
<input type="submit" name="add" id="add" value="Add"/>
<input type="reset" name="reset" id="reset" value="reset"/>
     </form>   </div> 
      <br>
      
<?php   
     include ('server.php'); //DB connection

    // validate input
    if ((isset($_REQUEST['ProductName'])) &&(empty($_REQUEST['ProductName'])))
            {  die("Please type ProductName");   }
    
    if ((isset($_REQUEST['ProductType'])) &&        (empty($_REQUEST['ProductType'])))
            {  die("Please type ProductType");   }
    
    if ((isset($_REQUEST['ProductBrand'])) && (empty($_REQUEST['ProductBrand'])))
        { die("Please type ProductBrand");   }
    
   if ((isset($_REQUEST['ProductDescription'])) && (empty($_REQUEST['ProductDescription'])))
        { die("Please type ProductDescription");   }
    
   if ((isset($_REQUEST['ProductImage'])) && (empty($_REQUEST['ProductImage'])))
        { die("Please type ProductImage");   }
    
   if ((isset($_REQUEST['ProductPrice'])) && (empty($_REQUEST['ProductDescription'])))
        { die("Please type ProductDescription");   }
    //---//    
    
    
    //when the add button is click 
    if(isset($_POST['add'])) {
            
    // $add_input = $_POST['add'];
     //$lname = $_POST['lname'];
        
//input user 
    $ProductName = mysqli_real_escape_string($db, $_POST['ProductName']);
        
   $ProductType = mysqli_real_escape_string($db, $_POST['ProductType']);   
    
   $ProductBrand = mysqli_real_escape_string($db, $_POST['ProductBrand']); 
        
   $ProductDescription = mysqli_real_escape_string($db, $_POST['ProductDescription']);   
        
   $ProductImage = mysqli_real_escape_string($db, $_POST['ProductImage']);
        
   $ProductPrice = mysqli_real_escape_string($db, $_POST['ProductPrice']);
        
$query_add = "INSERT INTO Product 
                            (ProductName, 
                            ProductType, 
                            ProductBrand, 
                            ProductDescription, 
                            ProductImage, 
                            ProductPrice) 

                            VALUES (
                            '$ProductName', 
                            '$ProductType', 
                            '$ProductBrand', 
                            '$ProductDescription', 
                            '$ProductImage', 
                            '$ProductPrice')";
    
mysqli_query($db, $query_add);

      
if(mysqli_query($db, $query_add)){
    echo "Data has been added successfully.";
} else {
    echo "ERROR: could not be able to execute $query_add. "  . mysqli_error($db);
      
}
    }
        
    echo "<hr>";    
        //displaying data
        
    
    //include ('server.php');
    $query_display = "SELECT * FROM product ORDER BY ProductID";
$result = $db->query($query_display);
   $row_cnt = mysqli_num_rows($result);
      printf("Result &#x27A1; %d rows.\n", $row_cnt); 
    
    echo "<br>";
    if ($result->num_rows > 0) {     

    //output data of each row
    
        echo "<table class='table' id='search' border='0'>
  
     <thead>
    <th>ProductID</th>
    <th>ProductName</th>
    <th>ProductType</th>
    <th>ProductBrand</th>
    <th>ProductDescription</th>
    <th>ProductImage</th>
    <th>ProductPrice</th>
     </thead>
     <tbody>";
     

          
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
    } //END display data
  
    else {
  echo "0 results";
} 
    // close connection
   mysqli_close($db);
    ?>
    
</body>
</html>

