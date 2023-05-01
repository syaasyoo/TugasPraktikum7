<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myEmployee";

//Create Connection
$conn = mysqli_connect($servername,$username,$password, $dbname);

//Check Connection
if (!$conn) {
    die ("Connection failed: " . myslqi_connect_error());
}

//Create Table Department
$sql = "CREATE TABLE department (
    id_department INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    department_name VARCHAR(30) NOT NULL,
    department_loc VARCHAR(30) NOT NULL
    )";
if (mysqli_query($conn, $sql)){
    echo "Table Department Created successfully <br>";
} else {
    echo "Error creating Table: " . mysqli_error($conn);
}

//Create Table Jobs
$sql = "CREATE TABLE jobs (
    id_job INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    job_title VARCHAR(200) NOT NULL
    )";
if (mysqli_query($conn, $sql)){
    echo "Table Jobs Created successfully <br>";
} else {
    echo "Error creating Table: " . mysqli_error($conn);
}

//Create Table Employee
$sql = "CREATE TABLE employee (
    id_employee INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(200) NOT NULL,
    email VARCHAR(50) NOT NULL,
    no_hp VARCHAR(20) NOT NULL,
    hire_date DATE NOT NULL,
    id_department INT(10) UNSIGNED NOT NULL,
    CONSTRAINT `fk_dept` FOREIGN KEY (id_department) REFERENCES department(id_department),
    id_job INT(10) UNSIGNED NOT NULL,
    CONSTRAINT `fk_job` FOREIGN KEY (id_job) REFERENCES jobs(id_job)
    )";
if (mysqli_query($conn, $sql)){
    echo "Table Employee Created successfully";
} else {
    echo "Error creating Table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>