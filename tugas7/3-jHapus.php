<?php
require '3-function.php';

$id = $_GET["id_job"];

if ( hapusjob($id)){
    echo "
      <script>
        alert('Data Successfully Deleted!');
        document.location.href = '3-CRUDemployee.php';
      </script>
    ";
  }else {
    echo "
      <script>
        alert('Data Gagal Dihapus!');
        document.location.href = '3-CRUDemployee.php';
      </script>
    ";
  }
?>