<!DOCTYPE html>
<html>
<head> 
<title> Product</title> 
    
    <script>
function table() {
    
  var x = document.getElementById("myTable");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
   x.style.display = "none";
  }
}
</script>
  </head>

<body>
  
    <h1> Product </h1>
  
<?php include('config.php'); ?>
 

  <?php
    // validate input
/*//validate FirstName
if ((isset($_REQUEST['fname'])) && (empty($_REQUEST['fname'])))
{  die("Please type firstname");   }

//validate Lastname
if ((isset($_REQUEST['lname'])) && (empty($_REQUEST['lname'])))
{  die("Please type Lastname");  }    

//validate Unit1
if ((isset($_REQUEST['Unit1'])) && (empty($_REQUEST['Unit1'])))
{  die("Please type Unit1");   }

//Validate Uni2
if ((isset($_REQUEST['Unit2'])) && (empty($_REQUEST['Unit2'])))
{  die("Please type Unit2");   }

//Validate Unit3
if ((isset($_REQUEST['Unit3'])) && (empty($_REQUEST['Unit3'])))
{  die("Please type Unit3");   }

//Validate Unit4
if ((isset($_REQUEST['Unit4'])) && (empty($_REQUEST['Unit4'])))
{  die("Please type Unit4");   }   
 */   
    
    
//user inputs 
/*
$FirstName = mysqli_real_escape_string($conn,$_REQUEST['fname']);
    
$LastName = mysqli_real_escape_string($conn,$_REQUEST['lname']);
  
$Unit1 = mysqli_real_escape_string($conn,$_REQUEST['Unit1']);
$Unit2 = mysqli_real_escape_string($conn,$_REQUEST['Unit2']);
$Unit3 = mysqli_real_escape_string($conn,$_REQUEST['Unit3']);
$Unit4 = mysqli_real_escape_string($conn,$_REQUEST['Unit4']);

$sql_insert = "INSERT INTO Student (FirstName, LastName, Unit1, Unit2, Unit3, Unit4) 
VALUES ('$FirstName', '$LastName', '$Unit1', '$Unit2', '$Unit3', '$Unit4')";
    
if(mysqli_query($conn, $sql_insert)){
    echo "Records added successfully.";
} else {
    echo "ERROR: could not be able to execute $sql_insert. " . mysqli_error($conn);
}
  
  */   ?>
    
  <?php
 
echo "<hr>"."<h2> Product Table </h2>";
 ?>   
    
  <!--search within the same page-->  
    <div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="search_input" id="search_input">
<input type="submit" name="search" id="search" value="Search"/>
     </form>   </div> 
    
    
<!-- search field -->
    
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
    
    
    
   echo "<table id='search' border='0'>
    
    <tr>
    <th>ProductID</th>
    <th>ProductName</th>
    <th>ProductType</th>
    <th>ProductBrand</th>
    <th>ProductDescription</th>
    <th>ProductImage</th>
    <th>ProductPrice</th>
    </tr>";
          
  while($row = $query_run->fetch_assoc()) {
 //  while($row = mysqli_fetch_array($query_run))  {
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
    // close connection
   mysqli_close($conn);
    ?>

   
</body>
</html>

