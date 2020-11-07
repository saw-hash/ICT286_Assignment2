<?php
/* Database credentials */
    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbase = "X33577055";
    error_log("test error");
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect($host,$dbuser,$dbpass,$dbase);

 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>