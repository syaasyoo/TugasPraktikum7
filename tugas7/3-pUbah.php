<?php
require '3-function.php';
$department = query("SELECT * FROM department");
$job = query("SELECT * FROM jobs");

$id = $_GET["id_employee"];
$ganti  = query("SELECT * FROM employee WHERE id_employee = $id")[0];
$ganti2  = query("SELECT employee.id_department, employee.id_job, department_name, job_title FROM employee
              JOIN department ON employee.id_department = department.id_department
              JOIN jobs ON employee.id_job = jobs.id_job WHERE id_employee = $id")[0];


if ( isset($_POST["submit"])){
  if (ubahemployee($_POST) > 0){
    echo "
      <script>
        alert('Data Successfully Updated!');
        document.location.href = '3-CRUDemployee.php';
      </script>
    ";
  }else {
    echo "
      <script>
        alert('Data Gagal Diubah!');
        document.location.href = '3-CRUDemployee.php';
      </script>
    ";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ubah employee</title>
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>

  <body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #393646">
      <div class="container">
        <a class="navbar-brand" href="3-CRUDemployee.php" style="color: white; font-weight: 700">myEmployee</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- Akhir NavBar -->

    <!-- Keterangan -->
    <div class="container pt-2 pb-2">
      <div class="d-flex justify-content-start">
        <a href="3-CRUDemployee.php"><button type="button" class="btn btn-light"><i class="bi bi-x-square-fill"></i> Batal</button></a>
      </div>
      <div class="d-flex justify-content-center pt-3 pb-3">
        <h1 class="fw-bolder">Edit Employee Data</h1>
      </div>
    <!-- Akhir Keterangan --> 
    
    <!-- Formulir -->
      <form action="" method ="post" enctype="multipart/form-data" class="row g-3">
        <input type="hidden" name="id_employee" value="<?= $ganti["id_employee"]?>">
        <div class="mb-2">
          <label for="id_department" class="form-label">department</label>
          <select class="form-select" name="id_department" id="id_department" required>
            <option selected value="<?= $ganti2["id_department"]?>"><?= $ganti2["department_name"]?></option>
          <?php foreach ($department as $deptname) : ?>
            <option value="<?=$deptname['id_department']?>"><?=$deptname['department_name']?></option>
          <?php endforeach?>
          </select>
        </div>
        <div class="mb-2">
          <label for="id_job" class="form-label">job</label>
          <select class="form-select" name="id_job" id="id_job" required>
            <option selected value="<?= $ganti2["id_job"]?>"><?= $ganti2["job_title"]?></option>
          <?php foreach ($job as $jt) : ?>
            <option value="<?=$jt['id_job']?>"><?=$jt['job_title']?></option>
          <?php endforeach?>
          </select>
        </div>
        <div class="mb-2">
          <label for="nama" class="form-label">Nama</label>
          <input class="form-control" type="text" name="nama" id="nama" required value = "<?= $ganti["nama"]?>" autocomplete ="off">  
        </div>
        <div class="mb-2">
          <label for="email" class="form-label">Email</label>
          <input class="form-control" type="email" name="email" id="email" required value = "<?= $ganti["email"]?>" autocomplete ="off">  
        </div>
        <div class="mb-2">
          <label for="no_hp" class="form-label">Nomor Telepon</label>
          <input class="form-control" type="text" name="no_hp" id="no_hp" required value = "<?= $ganti["no_hp"]?>" autocomplete ="off">  
        </div>
        <div class="mb-2">
          <label for="hire_date" class="form-label">Tanggal Masuk</label>
          <input class="form-control" type="date" name="hire_date" id="hire_date" required value = "<?= $ganti["hire_date"]?>" autocomplete ="off">  
        </div>
        <div class="d-flex justify-content-center mb-3">
          <button type="submit" name="submit" class="btn btn-secondary" style="background-color: #393646">Simpan Perubahan</button>
        </div>
      </form>
    <!-- Akhir Formulir -->
    </div>
  </body>
</html>