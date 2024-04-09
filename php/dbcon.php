<?php
$server = "localhost:3306";
$username = "root";
$password = "root";
$database = "result";

//create connection
$dbcon = mysqli_connect($server, $username, $password, $database);

//connection checking
if (!$dbcon)
{
  die("Connection failed". mysqli_connect_error());
}

?>
