<?php
//koneksi ke database ============================================================================
$conn = mysqli_connect("localhost","root","","myEmployee");
//umum ===========================================================================================
function query ($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    } return $rows;
}
//employee =========================================================================================
function tambahemployee ($data) {
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $hire_date = htmlspecialchars($data["hire_date"]);
    $id_department = htmlspecialchars($data["id_department"]);
    $id_job = htmlspecialchars($data["id_job"]);
    $query = "INSERT INTO employee VALUES ('','$nama','$email','$no_hp','$hire_date','$id_department','$id_job')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function hapusemployee ($id){
    global $conn;
    $query = "DELETE FROM employee WHERE idemployeee = $id";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function ubahemployee($data){
    global $conn;
    $id_employee = htmlspecialchars($data["idemployeee"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $hire_date = htmlspecialchars($data["hire_date"]);
    $id_department = htmlspecialchars($data["id_department"]);
    $id_job = htmlspecialchars($data["id_job"]);
    $query = "UPDATE employee SET nama = '$nama', email ='$email', no_hp = '$no_hp', hire_date = '$hire_date',
                id_department = '$id_department', id_job = '$id_job' WHERE id_employee = $idemployeee";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
//department =========================================================================================
function tambahdepartment ($data) {
    global $conn;
    $department_name = htmlspecialchars($data["department_name"]);
    $query = "INSERT INTO department VALUES ('','$department_name')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function ubahdepartment($data){
    global $conn;
    $id_department = htmlspecialchars($data["id_department"]);
    $department_name = htmlspecialchars($data["department_name"]);
    $query = "UPDATE department SET department_name = '$department_name' WHERE id_department = $id_department";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function hapusdepartment ($id){
    global $conn;
    $query = "DELETE FROM department WHERE id_department = $id";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
//jobs =========================================================================================
function tambahjob ($data) {
    global $conn;
    $job_title = htmlspecialchars($data["job_title"]);
    $query = "INSERT INTO jobs VALUES ('','$job_title')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function hapusjob ($id){
    global $conn;
    $query = "DELETE FROM jobs WHERE id_job = $id";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function ubahjob($data){
    global $conn;
    $id_job = htmlspecialchars($data["id_job"]);
    $job_title = htmlspecialchars($data["job_title"]);
    $query = "UPDATE jobs SET job_title = '$job_title' WHERE id_job = $id_job";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
?>