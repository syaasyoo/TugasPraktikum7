<?php
require '3-function.php';
$department = query("SELECT * FROM department");
$job = query("SELECT * FROM jobs");

if ( isset($_POST["submit"])){
  if (tambahemployee($_POST) > 0){
    echo "
      <script>
        alert('Data Succesfully Added!');
        document.location.href = '3-CRUDemployee.php';
      </script>
    ";
  }else {
    echo "
      <script>
        alert('Cannot Add Data!');
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
    <title>Tambah employeme</title>
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
        <h1 class="fw-bolder">Formulir Penambahan employee</h1>
      </div>
    <!-- Akhir Keterangan --> 
    
    <!-- Formulir -->
      <form action="" method ="post" enctype="multipart/form-data" class="row g-3">
        <div class="mb-2">
          <label for="id_department" class="form-label">department</label>
          <select class="form-select" name="id_department" id="id_department" required>
            <option selected></option>
          <?php foreach ($department as $deptname) : ?>
            <option value="<?=$deptname['id_department']?>"><?=$deptname['department_name']?></option>
          <?php endforeach?>
          </select>
        </div>
        <div class="mb-2">
          <label for="id_job" class="form-label">job</label>
          <select class="form-select" name="id_job" id="id_job" required>
            <option selected></option>
          <?php foreach ($job as $jt) : ?>
            <option value="<?=$jt['id_job']?>"><?=$jt['job_title']?></option>
          <?php endforeach?>
          </select>
        </div>
        <div class="mb-2">
          <label for="nama" class="form-label">Employee Name</label>
          <input class="form-control" type="text" name="nama" id="nama" required autocomplete ="off">  
        </div>
        <div class="mb-2">
          <label for="email" class="form-label">Email</label>
          <input class="form-control" type="email" name="email" id="email" required autocomplete ="off">  
        </div>
        <div class="mb-2">
          <label for="no_hp" class="form-label">Phone Number</label>
          <input class="form-control" type="text" name="no_hp" id="no_hp" required autocomplete ="off">  
        </div>
        <div class="mb-2">
          <label for="hire_date" class="form-label">Hire Date</label>
          <input class="form-control" type="date" name="hire_date" id="hire_date" required autocomplete ="off">  
        </div>
        <div class="d-flex justify-content-center mb-3">
          <button type="submit" name="submit" class="btn btn-secondary" style="background-color: #393646">Tambahkan</button>
        </div>
      </form>
    <!-- Akhir Formulir -->
    </div>
  </body>
</html>