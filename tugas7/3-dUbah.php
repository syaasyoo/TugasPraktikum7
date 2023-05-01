<?php
require '3-function.php';

$id = $_GET["id_department"];
$ganti  = query("SELECT * FROM department WHERE id_department = $id")[0];


if ( isset($_POST["submit"])){
  if (ubahdepartment($_POST) > 0){
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
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ubah department</title>
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>

  <body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #393646">
      <div class="container">
        <a class="navbar-brand" href="3-CRUDemployee.php" style="color: white; font-weight: 700">myEmployee
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
        <h1 class="fw-bolder">Edit Department Data</h1>
      </div>
    <!-- Akhir Keterangan --> 
    
    <!-- Formulir -->
      <form action="" method ="post" enctype="multipart/form-data" class="row g-3">
        <input type="hidden" name="id_department" value="<?= $ganti["id_department"]?>">
        <div class="mb-2">
          <label for="department_name" class="form-label">Department Name</label>
          <input class="form-control" type="text" name="department_name" id="department_name" required value = "<?= $ganti["department_name"]?>" autocomplete ="off">  
        </div>
        <div class="mb-2">
          <label for="department_loc" class="form-label">Department Location</label>
          <input class="form-control" type="text" name="department_loc" id="department_loc" required value = "<?= $ganti["department_loc"]?>" autocomplete ="off">  
        </div>
        <div class="d-flex justify-content-center mb-3">
          <button type="submit" name="submit" class="btn btn-secondary" style="background-color: #393646">Simpan Perubahan</button>
        </div>
      </form>
    <!-- Akhir Formulir -->
    </div>
  </body>
</html>
