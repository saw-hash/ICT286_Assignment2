<!DOCTYPE html>
<html>
<head> 
<title> Product Search </title> 
    
    <script>
function table() {
    
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
   x.style.display = "none";
  }
}
</script>
  </head>

<body>
  
    <h1> Product Search Result</h1>
    
  <?php include('config.php'); ?>

<?php

    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbase = "X33577055";
    error_log("test error");
   $conn = new mysqli($host,$dbuser,$dbpass,$dbase);


     // Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    
    

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
    
    
 ?>   
<table id='search' border='0' style="color: blue" >
   <?php echo "
    
    <tr>
    <th>ProductID</th>
    <th>ProductName</th>
    <th>ProductType</th>
    <th>ProductBrand</th>
    <th>ProductDescription</th>
    <th>ProductImage</th>
    <th>ProductPrice</th>
    </tr>";
          
  //while($row = $result->fetch_assoc()) {
   while($row = mysqli_fetch_array($query_run))  {
         
      echo "<tr>";
      echo "<td>" . $row['ProductID'] . "</td>";
      echo "<td>" . $row['ProductName'] . "</td>";
      echo "<td>" . $row['ProductType'] . "</td>";
      echo "<td>" . $row['ProductBrand'] . "</td>";
      echo "<td>" . $row['ProductDescription'] . "</td>";
      echo "<td>" . $row['ProductImage'] . "</td>";
      echo "<td>" . "$" . $row['ProductPrice'] . "</td>";
    echo "</tr>"; 
  }
    
} else {
  echo "0 results";
} 
    ?>
    </table>
    
</body>
</html>

