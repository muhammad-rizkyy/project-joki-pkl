<?php
include "../connection.php";
$nopol = $_GET['nopol'];
$result = mysqli_query($con, "DELETE FROM mst_kendaraan WHERE nopol='$nopol'");
// header("Location:../admin/?page=mahasiswa-show");
echo "<meta http-equiv='refresh' content='0; url=?page=kendaraan-show'>";