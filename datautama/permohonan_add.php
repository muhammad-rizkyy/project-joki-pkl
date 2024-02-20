<?php
if (isset($_POST['submit'])) {
	$tanggal = $_POST['tanggal'];
	$jenis = $_POST['jenis'];
  $rencana = $_POST['rencana'];
  $nama_lengkap = $_POST['nama_lengkap'];
  $alamat = $_POST['alamat'];
  $alamat_pembangunan = $_POST['alamat_pembangunan'];
  $nomor_telepon = $_POST['nomor_telepon'];
  $usaha = $_POST['usaha'];
  $status = $_POST['status'];

	
	$insert = mysqli_query($con, "INSERT INTO data_permohonan(tanggal,jenis,rencana,nama_lengkap,alamat,alamat_pembangunan,nomor_telepon,usaha,status) 
  VALUES('$tanggal','$jenis','$rencana','$nama_lengkap','$alamat','$alamat_pembangunan','$nomor_telepon','$usaha','$status')");

	if ($insert) {
		echo "<script>window.location.href = '?page=permohonan-show';</script>";
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
        <h6 class="m-0 font-weight-bold text-primary">Tambahkan Data Permohonan</h6>

      </div>
      <div class="card-body">
        <form method="POST">
            <div class="row mb-3">
            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
              <input name="tanggal" type="date" class="form-control" id="tanggal" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
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

          <div class="row mb-3">
            <label for="rencana" class="col-sm-2 col-form-label">Rencana</label>
            <div class="col-sm-10">
              <select  id="rencana" class="form-control" name="rencana" required>
              <option value="" selected>- Pilih -</option>
                <?php
                 $sql="select * from rencana_pembangunan";
                 include '../connection.php';
                 $hasil=mysqli_query($con,$sql);
                 $no=0;
                 while ($data = mysqli_fetch_array($hasil)) {
                 $no++;
                ?>
                 <option value="<?php echo $data['kd_rencana'];?>"><?php echo $data['keterangan'];?></option>
                 <?php
                 }
                ?>
              </select>
            </div>
          </div> 

        <form method="POST">
            <div class="row mb-3">
            <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
              <input name="nama_lengkap" type="text" class="form-control" id="nama_lengkap" required>
            </div>
          </div>

        <form method="POST">
            <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input name="alamat" type="text" class="form-control" id="alamat" required>
            </div>
          </div>

          <form method="POST">
            <div class="row mb-3">
            <label for="alamat_pembangunan" class="col-sm-2 col-form-label">Alamat Pembangunan</label>
            <div class="col-sm-10">
              <input name="alamat_pembangunan" type="text" class="form-control" id="alamat_pembangunan" required>
            </div>
          </div>

          <form method="POST">
            <div class="row mb-3">
            <label for="nomor_telepon" class="col-sm-2 col-form-label">Telepon</label>
            <div class="col-sm-10">
              <input name="nomor_telepon" type="text" class="form-control" id="nomor_telepon" required>
            </div>
          </div>

          <form method="POST">
            <div class="row mb-3">
            <label for="usaha" class="col-sm-2 col-form-label">Usaha</label>
            <div class="col-sm-10">
              <input name="usaha" type="text" class="form-control" id="usaha" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="status" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
              <select  id="status" class="form-control" name="status" required>
              <option value="" selected>- Pilih -</option>
                <?php
                 $sql="select * from status";
                 include '../connection.php';
                 $hasil=mysqli_query($con,$sql);
                 $no=0;
                 while ($data = mysqli_fetch_array($hasil)) {
                 $no++;
                ?>
                 <option value="<?php echo $data['kd_status'];?>"><?php echo $data['keterangan'];?></option>
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
              <a href="?page=permohonan-show" class="btn btn-sm btn-danger"><i
              class="fas fa-chevron-left"></i>
              Kembali</a>
            </div> 

        </form>
      </div>
    </div>
  </div>
</div>