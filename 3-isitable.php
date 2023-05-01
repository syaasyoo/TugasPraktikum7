<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

// create table
$sql = "CREATE TABLE liga (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    kode VARCHAR(3) NOT NULL,
    negara VARCHAR(30) NOT NULL,
    champion int(3)
)";

// create database
if(mysqli_query($conn, $sql)){
    echo "Database created succesfully";
}else{
    echo "Error creating database: " . mysqli_error($conn);
}

$sql = "INSERT INTO liga (kode, negara, champion) 
    VALUES ('Jer', 'Jerman', '4'), ('Spa', 'Spanyol', '3'), ('Eng', 'English', '3')";

if(mysqli_query($conn, $sql)){
    echo "New record created succesfully";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>