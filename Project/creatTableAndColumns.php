<?php
$servername = "localhost";
$username = "root";
$password= "";
$dbname = "registration";// including database name as a connection variable
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
//below is query string
$qry = "CREATE TABLE Users(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
uname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
upassword VARCHAR(50) NOT NULL,
cupassword VARCHAR(50) NOT NULL,
gender VARCHAR(50) NOT NULL,
dateofbirth DATE(10) NOT NULL,

)";
$res = $conn->query($qry); //execute query
if($res)
{
echo "table created successfully";
}
else
{
echo "error occurred";
}
$conn->close();
?>