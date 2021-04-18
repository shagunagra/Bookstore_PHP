<?php
$host = "localhost";
$user = "root";
$pass = "";
$conn = mysqli_connect($host, $user, $pass);

$sql = 'CREATE database BookStore';
if(mysqli_query($conn, $sql))
{
    echo "Database created successfully!";
}
else{
    echo "database creation failed " . mysqli_error($conn);
}
mysqli_close($conn);
?>