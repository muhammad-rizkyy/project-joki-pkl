<?php
$id = $_GET['id'];
$result=mysqli_query($con, "SELECT * FROM status WHERE id=$id");

while ($data = mysqli_fetch_array($result)) {
    $kd_status = $data['kd_status'];
    $keterangan = $data['keterangan'];
 
}

if (isset($_POST['submit'])) {
	$kd_status = $_POST['kd_status'];
	$keterangan = $_POST['keterangan'];


	$update = mysqli_query($con, "UPDATE status SET kd_status='$kd_status',keterangan='$keterangan' WHERE id=$id");


	 echo "<script>window.location.href = '?page=status-show';</script>";
}
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
</div>
<div class="row">
  <div class="col">
    <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Status</h6>

      </div>
      <div class="card-body">
        <form method="POST">
          <div class="row mb-3">
            <label for="kd_status" class="col-sm-2 col-form-label">Kode Status</label>
            <div class="col-sm-10">
              <input name="kd_status" type="text" class="form-control" id="kd_status"
              value="<?php echo $kd_status; ?>" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="keterangan" name="keterangan"
              value="<?php echo $keterangan; ?>" required>
            </div>
          </div>

          <hr>
          <div class="row">
            <div class="offset-sm-2">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?> ">
              <button type="submit" class="btn btn-sm btn-primary" name="submit"><i class="fas fa-save"></i>
                Ubah</button>
              <a href="?page=status-show" class="btn btn-sm btn-danger"><i
              class="fas fa-chevron-left"></i>
              Kembali</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>