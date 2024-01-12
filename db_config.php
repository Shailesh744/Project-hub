<?php
$hostname = "localhost"; //local host in case of offline hosting remeber it shailesh
$username = "root"; // default naem of xampp server
$password = ""; // no password by default 
$database = "hubdata"; // this is database name not tablename 

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
