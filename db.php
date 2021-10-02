<?php
// $host="localhost";
// $user="root";
// $password='';
// $db_name="internship";
// $conn = mysqli_connect($host,$user,$password,$db_name);
$conn = new mysqli("localhost","root","","internship");
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
else{
    echo "database connected";
}
// $conn->close();


?>