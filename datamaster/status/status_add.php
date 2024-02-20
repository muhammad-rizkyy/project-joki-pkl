<?php
if (isset($_POST['submit'])) {
	$kd_status = $_POST['kd_status'];
	$keterangan = $_POST['keterangan'];

	
	$insert = mysqli_query($con, "INSERT INTO status(kd_status,keterangan) VALUES('$kd_status','$keterangan')");

	if ($insert) {
		echo "<script>window.location.href = '?page=status-show';</script>";
	} else echo 'gagal';
	// echo "<script>window.location.href = '?page=mahasiswa-show';</script>";
}
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
</div>
<div class="row">
  <div class="col">
    <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Tambahkan Status Permohonan</h6>

      </div>
      <div class="card-body">
        <form method="POST">
            <div class="row mb-3">
            <label for="kd_status" class="col-sm-2 col-form-label">Kode Status</label>
            <div class="col-sm-10">
              <input name="kd_status" type="text" class="form-control" id="kd_status" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="keterangan" name="keterangan" required>
            </div>
          </div>

         
          <hr>
          <div class="row">
            <div class="offset-sm-2">
              <button type="submit" class="btn btn-sm btn-primary" name="submit"><i class="fas fa-save"></i>
                Simpan</button>
              <a href="?page=jenis-show" class="btn btn-sm btn-danger"><i
              class="fas fa-chevron-left"></i>
              Kembali</a>
            </div> 

        </form>
      </div>
    </div>
  </div>
</div>