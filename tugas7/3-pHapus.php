<?php
require '3-function.php';

$id = $_GET["id_employee"];

if ( hapusemployee($id)){
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