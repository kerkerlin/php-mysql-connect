<?php
// Return current date from the remote server
$today = date("d/m/Y H:i;s");
echo $today;
echo "<br>";

/* Attempt MySQL server connection.*/
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "1111";
$dbname = "demo";
$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. <br>" . mysqli_connect_error());
}
echo "Database connect successfully. <br>";
?>