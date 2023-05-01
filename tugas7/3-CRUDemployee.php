<?php
require '3-function.php';
$employee  = query("SELECT * FROM employee ORDER BY id_employee");
$department  = query("SELECT * FROM department ORDER BY id_department");
$jobs  = query("SELECT * FROM jobs ORDER BY id_job");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>myEmployee</title>
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>

  <body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #393646">
      <div class="container">
        <a class="navbar-brand" href="" style="color: white; font-weight: 700">myEmployee</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- Akhir NavBar -->

    <!-- Tabel employee -->
    <div class="container pt-2 pb-2">
      <div class="d-flex justify-content-center pt-3 pb-1">
        <h1 class="fw-bolder">Employee</h1>
      </div>
      <!-- Tabel dan Kontrol-->
      <div class="col-md-auto ps-3 me-0">
        <a href="3-pTambah.php"><button type="button" class="btn btn-secondary"style="background-color: #393646"><i class="bi bi-plus-lg"></i> Add Employee</button></a>
      </div>
      <div class="pt-2 pb-2 table-responsive">
        <table class="table table-striped table-bordered align-middle">
          <tr class="text-center">
            <th>No.</th>
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Hire Date</th>
            <th>Job ID</th>
            <th>Department ID</th>
            <th>Action</th>
          </tr>
          <?php $i = 1 ?>
          <?php foreach ($employee as $row) : ?>
          <tr>
            <td><?= $i ?></td>
            <td><?= $row["id_employee"]?></td>
            <td><?= $row["nama"]?></td>
            <td><?= $row["email"]?></td>
            <td ><?= $row["no_hp"]?></td>
            <td ><?= $row["hire_date"]?></td>
            <td ><?= $row["id_job"]?></td>
            <td ><?= $row["id_department"]?></td>
            <td class="text-center">
            <a href="3-pHapus.php?id_employee=<?= $row["id_employee"];?>" onclick="return confirm('Are You Sure?');"><button type="button" class="btn btn-secondary btn-sm pb-1"><i class="bi bi-trash"></i></button></a>
            <a href="3-pUbah.php?id_employee=<?= $row["id_employee"];?>"><button type="button" class="btn btn-secondary btn-sm pb-1"><i class="bi bi-pencil-square"></i></button></a>
            </td>
          </tr>
          <?php $i++ ?>
          <?php endforeach ?>
        </table>
      </div>
    <!-- Akhir Tabel dan Kontrol -->
    <!-- Akhir Tabel employee -->
    </div>

    <!-- Tabel department -->
    <div class="container pt-2 pb-2">
      <div class="d-flex justify-content-center pt-3 pb-1">
        <h1 class="fw-bolder">Department</h1>
      </div>
      <!-- Tabel dan Kontrol-->
      <div class="col-md-auto ps-3 me-0">
        <a href="3-dTambah.php"><button type="button" class="btn btn-secondary"style="background-color: #393646"><i class="bi bi-plus-lg"></i> Add Department</button></a>
      </div>
      <div class="pt-2 pb-2 table-responsive">
        <table class="table table-striped table-bordered align-middle">
          <tr class="text-center">
            <th>No.</th>
            <th>Department ID</th>
            <th>Department Name</th>
            <th>Department Location</th>
            <th>Action</th>
          </tr>
          <?php $i = 1 ?>
          <?php foreach ($department as $row) : ?>
          <tr>
            <td><?= $i ?></td>
            <td><?= $row["id_department"]?></td>
            <td><?= $row["department_name"]?></td>
            <td><?= $row["department_loc"]?></td>
            <td class="text-center">
            <a href="3-dHapus.php?id_department=<?= $row["id_department"];?>" onclick="return confirm('Are You Sure?');"><button type="button" class="btn btn-secondary btn-sm pb-1"><i class="bi bi-trash"></i></button></a>
            <a href="3-dUbah.php?id_department=<?= $row["id_department"];?>"><button type="button" class="btn btn-secondary btn-sm pb-1"><i class="bi bi-pencil-square"></i></button></a>
            </td>
          </tr>
          <?php $i++ ?>
          <?php endforeach ?>
        </table>
      </div>
    <!-- Akhir Tabel dan Kontrol -->
    <!-- Akhir Tabel department -->
    </div>

    <!-- Tabel Jobs -->
    <div class="container pt-2 pb-2">
      <div class="d-flex justify-content-center pt-3 pb-1">
        <h1 class="fw-bolder">Job</h1>
      </div>
      <!-- Tabel dan Kontrol-->
      <div class="col-md-auto ps-3 me-0">
        <a href="3-jTambah.php"><button type="button" class="btn btn-secondary"style="background-color: #393646"><i class="bi bi-plus-lg"></i> Add Job</button></a>
      </div>
      <div class="pt-2 pb-2 table-responsive">
        <table class="table table-striped table-bordered align-middle">
          <tr class="text-center">
            <th>No.</th>
            <th>Job ID</th>
            <th>Job Name</th>
            <th>Action</th>
          </tr>
          <?php $i = 1 ?>
          <?php foreach ($jobs as $row) : ?>
          <tr>
            <td><?= $i ?></td>
            <td><?= $row["id_job"]?></td>
            <td><?= $row["job_title"]?></td>
            <td class="text-center">
            <a href="3-jHapus.php?id_job=<?= $row["id_job"];?>" onclick="return confirm('Are You Sure?');"><button type="button" class="btn btn-secondary btn-sm pb-1"><i class="bi bi-trash"></i></button></a>
            <a href="3-jUbah.php?id_job=<?= $row["id_job"];?>"><button type="button" class="btn btn-secondary btn-sm pb-1"><i class="bi bi-pencil-square "></i></button></a>
            </td>
          </tr>
          <?php $i++ ?>
          <?php endforeach ?>
        </table>
      </div>
    <!-- Akhir Tabel dan Kontrol -->
    <!-- Akhir Tabel Jobs -->
    </div>
  </body>
</html>