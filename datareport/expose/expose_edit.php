<?php
$id = $_GET['id'];
$result=mysqli_query($con, "SELECT * FROM data_permohonan WHERE id=$id");

while ($data = mysqli_fetch_array($result)) {
  $tanggal = $data['tanggal'];
	$jenis = $data['jenis'];
  $rencana = $data['rencana'];
  $nama_lengkap = $data['nama_lengkap'];
  $alamat = $data['alamat'];
  $alamat_pembangunan = $data['alamat_pembangunan'];
  $nomor_telepon = $data['nomor_telepon'];
  $usaha = $data['usaha'];
  $status = $data['status'];
 
}

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


	$update = mysqli_query($con, "UPDATE data_permohonan SET tanggal='$tanggal',jenis='$jenis',rencana='$rencana',
  nama_lengkap='$nama_lengkap',alamat='$alamat',alamat_pembangunan='$alamat_pembangunan',nomor_telepon='$nomor_telepon',
  usaha='$usaha',status='$status' WHERE id=$id");


if ($update) {
  echo "<script>window.location.href = '?page=expose-show';</script>";
} else echo 'gagal';
// echo "<script>win
}
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
</div>
<div class="row">
  <div class="col">
    <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Expose</h6>

      </div>
      <div class="card-body">
        <form method="POST">
          <div class="row mb-3">
            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
              <input name="tanggal" type="text" class="form-control" id="tanggal"
              value="<?php echo $tanggal; ?>" required>
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
              $no=03;
              while ($row = mysqli_fetch_assoc ($hasil)) { ?> <?php
                if ($jenis == $row['kd_jenis']) {
                ?>
                <option value="<?php echo $row["kd_jenis"] ?>" selected> <?php echo $row["keterangan"] ?> </option>
            <?php
                } else {
                  ?>
                <option value="<?php echo $row["kd_jenis"] ?>"> <?php echo $row["keterangan"] ?> </option>
                <?php
                }
                }?>
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
              $no=03;
              while ($row = mysqli_fetch_assoc ($hasil)) { ?> <?php
                if ($rencana == $row['kd_rencana']) {
                ?>
                <option value="<?php echo $row["kd_rencana"] ?>" selected> <?php echo $row["keterangan"] ?> </option>
            <?php
                } else {
                  ?>
                <option value="<?php echo $row["kd_rencana"] ?>"> <?php echo $row["keterangan"] ?> </option>
                <?php
                }
                }?>
              </select>
            </div>
          </div>

          <div class="row mb-3">
            <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
              value="<?php echo $nama_lengkap; ?>" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="alamat" name="alamat"
              value="<?php echo $alamat; ?>" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="alamat_pembangunan" class="col-sm-2 col-form-label">Alamat Pembangunan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="alamat_pembangunan" name="alamat_pembangunan"
              value="<?php echo $alamat_pembangunan; ?>" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="nomor_telepon" class="col-sm-2 col-form-label">Telepon</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon"
              value="<?php echo $nomor_telepon; ?>" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="usaha" class="col-sm-2 col-form-label">Usaha</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="usaha" name="usaha"
              value="<?php echo $usaha; ?>" required>
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
              $no=03;
              while ($row = mysqli_fetch_assoc ($hasil)) { ?> <?php
                if ($status == $row['kd_status']) {
                ?>
                <option value="<?php echo $row["kd_status"] ?>" selected> <?php echo $row["keterangan"] ?> </option>
            <?php
                } else {
                  ?>
                <option value="<?php echo $row["kd_status"] ?>"> <?php echo $row["keterangan"] ?> </option>
                <?php
                }
                }?>
              </select>
            </div>
          </div>

          <hr>
          <div class="row">
            <div class="offset-sm-2">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?> ">
              <button type="submit" class="btn btn-sm btn-primary" name="submit"><i class="fas fa-save"></i>
                Ubah</button>
              <a href="?page=expose-show" class="btn btn-sm btn-danger"><i
              class="fas fa-chevron-left"></i>
              Kembali</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>