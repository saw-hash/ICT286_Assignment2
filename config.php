
<?php
// Database credentials 
    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbase = "X33577055";
    error_log("error");
 
// database connection 
$conn = mysqli_connect($host,$dbuser,$dbpass,$dbase);

 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
?>


<?php

/*
//Database credentials. Assuming you are running MySQL
//server with default setting (user 'root' with no password) 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'X33577055');
 
// Attempt to connect to MySQL database 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());  */

?>