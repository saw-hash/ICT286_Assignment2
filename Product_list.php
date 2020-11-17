
      

      <!--SQL query table start-->

      
    <?php include('config.php');   ?>
      
      
      <?php 
    

      
      $sql = "SELECT * FROM product";

$result = $conn->query($sql);
//$result = mysqli_query($conn, $sql);
      
if ($result->num_rows > 0) {
  // output data of each row
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

} //else {
 // echo "0 results";
}
    
$conn->close();
      
      ?>
      
      

