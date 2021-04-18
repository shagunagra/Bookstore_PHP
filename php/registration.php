<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "bookstore";
$conn = mysqli_connect($host, $user, $pass, $dbname);
$sql = "CREATE TABLE users (
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    password varchar(100) NOT NULL
)";
if(mysqli_query($conn, $sql))
{
    echo "Table created successfully!";
}
else{
    echo "table creation failed " . mysqli_error($conn);
}
mysqli_close($conn);
?>