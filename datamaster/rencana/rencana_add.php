<?php
if (isset($_POST['submit'])) {
	$kd_rencana = $_POST['kd_rencana'];
	$keterangan = $_POST['keterangan'];
  $jenis = $_POST['jenis'];

	
	$insert = mysqli_query($con, "INSERT INTO rencana_pembangunan(kd_rencana,keterangan,jenis) VALUES('$kd_rencana','$keterangan','$jenis')");

	if ($insert) {
		echo "<script>window.location.href = '?page=rencana-show';</script>";
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
        <h6 class="m-0 font-weight-bold text-primary">Tambahkan Rencana Pembangunan</h6>

      </div>
      <div class="card-body">
        <form method="POST">
            <div class="row mb-3">
            <label for="kd_rencana" class="col-sm-2 col-form-label">Kode Jenis</label>
            <div class="col-sm-10">
              <input name="kd_rencana" type="text" class="form-control" id="kd_rencana" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="keterangan" name="keterangan" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="jenis" class="col-sm-2 col-form-label">jenis</label>
            <div class="col-sm-10">
              <select  id="jenis" class="form-control" name="jenis" required>
              <option value="" selected>- Pilih -</option>
                <?php
                 $sql="select * from jenis_rencana";
                 include '../connection.php';
                 $hasil=mysqli_query($con,$sql);
                 $no=0;
                 while ($data = mysqli_fetch_array($hasil)) {
                 $no++;
                ?>
                 <option value="<?php echo $data['kd_jenis'];?>"><?php echo $data['keterangan'];?></option>
                 <?php
                 }
                ?>
              </select>
            </div>
          </div>   

         
          <hr>
          <div class="row">
            <div class="offset-sm-2">
              <button type="submit" class="btn btn-sm btn-primary" name="submit"><i class="fas fa-save"></i>
                Simpan</button>
              <a href="?page=rencana-show" class="btn btn-sm btn-danger"><i
              class="fas fa-chevron-left"></i>
              Kembali</a>
            </div> 

        </form>
      </div>
    </div>
  </div>
</div>