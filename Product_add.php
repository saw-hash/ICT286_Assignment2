<!DOCTYPE html>
<html>
<head><title> Product Add</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="style_product.css">
     
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
        <input type="text" name="ProductName"> </td>
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
     </form>   </div> 
      <br>
      
<?php include ('server.php');
    
    
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
    echo "Records added successfully.";
} else {
    echo "ERROR: could not be able to execute $query_add. "  . mysqli_error($db);
      
}
        
        
        //displaying data
        
    $query_display = "SELECT * FROM product";
$result = $db->query($query_display);
   $row_cnt = mysqli_num_rows($result);
        
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
    }     
}   
    else {
  echo "0 results";
} 
    // close connection
   mysqli_close($db);
    ?>
    
</body>
</html>

