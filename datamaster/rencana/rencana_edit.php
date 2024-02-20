<?php
$id = $_GET['id'];
$result=mysqli_query($con, "SELECT * FROM rencana_pembangunan WHERE id=$id");

while ($data = mysqli_fetch_array($result)) {
    $kd_rencana = $data['kd_rencana'];
    $keterangan = $data['keterangan'];
    $jenis = $data['jenis'];
 
}

if (isset($_POST['submit'])) {
	$kd_rencana = $_POST['kd_rencana'];
	$keterangan = $_POST['keterangan'];
  $jenis = $_POST ['jenis'];


	$update = mysqli_query($con, "UPDATE rencana_pembangunan SET kd_rencana='$kd_rencana',keterangan='$keterangan',jenis='$jenis' WHERE id=$id");


	 echo "<script>window.location.href = '?page=rencana-show';</script>";
}
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
</div>
<div class="row">
  <div class="col">
    <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Rencana Pembangunan</h6>

      </div>
      <div class="card-body">
        <form method="POST">
          <div class="row mb-3">
            <label for="kd_rencana" class="col-sm-2 col-form-label">Kode Rencana</label>
            <div class="col-sm-10">
              <input name="kd_rencana" type="text" class="form-control" id="kd_rencana"
              value="<?php echo $kd_rencana; ?>" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="keterangan" name="keterangan"
              value="<?php echo $keterangan; ?>" required>
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

          

          <hr>
          <div class="row">
            <div class="offset-sm-2">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?> ">
              <button type="submit" class="btn btn-sm btn-primary" name="submit"><i class="fas fa-save"></i>
                Ubah</button>
              <a href="?page=rencana-show" class="btn btn-sm btn-danger"><i
              class="fas fa-chevron-left"></i>
              Kembali</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>