<?php
// membuat tabel buku_tamu

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//create connection 
$conn = mysqli_connect($servername,$username,$password,$dbname);
//check connection 
if(!$conn){
    die("connection failed : ". mysqli_connect_error());
}

$sql = "CREATE TABLE buku_tamu (
    id_bt INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(200) NOT NULL,
    email VARCHAR(50) NOT NULL,
    isi text)";

if(mysqli_query($conn, $sql)){
    echo "Table Created successfully";
} else{
    echo "Error creating Table : ". mysqli_error($conn);
}

mysqli_close($conn);
?>