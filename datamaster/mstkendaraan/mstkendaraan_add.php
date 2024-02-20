<?php
if (isset($_POST['submit'])) {
	$nopol = $_POST['nopol'];
	$nopol_eks = $_POST['nopol_eks'];
  $nama = $_POST['nama'];
  $ktp = $_POST['ktp'];
  $alamat = $_POST['alamat'];
  $kabupaten = $_POST['kabupaten'];
  $kecamatan = $_POST['kecamatan'];
  $kelurahan = $_POST['kelurahan'];
  $milik_ke = $_POST['milik_ke'];
  $kdjenis = $_POST['kdjenis'];
  $kdmerk = $_POST['kdmerk'];
  $rangka = $_POST['rangka'];
  $mesin = $_POST['mesin'];
  $warna = $_POST['kdwarna'];
  $sdnotice = $_POST['sd_notice'];
  $uptd = $_POST['kduptd'];
  $kondisi = $_POST['kondisi'];
  
	
	$insert = mysqli_query($con, "INSERT INTO mst_kendaraan(nopol,nopol_eks,nama,ktp,alamat,kabupaten,kecamatan,
  kelurahan,milik_ke,kdjenis,kdmerk,rangka,mesin,kdwarna,sd_notice,kduptd,kondisi) 
  VALUES('$nopol','$nopol_eks','$nama','$ktp','$alamat','$kabupaten','$kecamatan','$kelurahan','$milik_ke','$kdjenis','$kdmerk','$rangka','$mesin','$warna','$sdnotice','$uptd','$kondisi')");

	if ($insert) {
		echo "<script>window.location.href = '?page=kendaraan-show';</script>";
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
        <h6 class="m-0 font-weight-bold text-primary">Kendaraan</h6>

      </div>
      <div class="card-body">
        <form method="POST">
            <div class="row mb-3">
            <label for="nopol" class="col-sm-2 col-form-label">Nopol</label>
            <div class="col-sm-10">
              <input name="nopol" type="text" class="form-control" id="nopol" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="nopol_eks" class="col-sm-2 col-form-label">Nopol Eks</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nopol_eks" name="nopol_eks" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="ktp" class="col-sm-2 col-form-label">KTP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="ktp" name="ktp" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="kabupaten" class="col-sm-2 col-form-label">Kabupaten/Kota</label>
            <div class="col-sm-10">
              <select  id="kabupaten" class="form-control" name="kabupaten" required>
              <option value="" selected>- Pilih -</option>
                <?php
                 $sql="select * from mst_kabupaten";
                 include '../connection.php';
                 $hasil=mysqli_query($con,$sql);
                 $no=0;
                 while ($data = mysqli_fetch_array($hasil)) {
                 $no++;
                ?>
                 <option value="<?php echo $data['kode'];?>"><?php echo $data['keterangan'];?></option>
                 <?php
                 }
                ?>
              </select>
            </div>
          </div>  
          
          <div class="row mb-3">
            <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
            <div class="col-sm-10">
              <select  id="kecamatan" class="form-control" name="kecamatan" required>
              <option value="" selected>- Pilih -</option>
                <?php
                 $sql="select * from mst_kecamatan";
                 include '../connection.php';
                 $hasil=mysqli_query($con,$sql);
                 $no=0;
                 while ($data = mysqli_fetch_array($hasil)) {
                 $no++;
                ?>
                 <option value="<?php echo $data['kode'];?>"><?php echo $data['keterangan'];?></option>
                 <?php
                 }
                ?>
              </select>
            </div>
          </div>
          
          
          <div class="row mb-3">
            <label for="kelurahan" class="col-sm-2 col-form-label">Kelurahan</label>
            <div class="col-sm-10">
              <select  id="kelurahan" class="form-control" name="kelurahan" required>
              <option value="" selected>- Pilih -</option>
                <?php
                 $sql="select * from mst_kelurahan";
                 include '../connection.php';
                 $hasil=mysqli_query($con,$sql);
                 $no=0;
                 while ($data = mysqli_fetch_array($hasil)) {
                 $no++;
                ?>
                 <option value="<?php echo $data['kode'];?>"><?php echo $data['keterangan'];?></option>
                 <?php
                 }
                ?>
              </select>
            </div>
          </div>   
                   
          <div class="row mb-3">
            <label for="milik_ke" class="col-sm-2 col-form-label">Milik Ke</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="milik_ke" name="milik_ke" required>
            </div>
          </div>
           
          <div class="row mb-3">
            <label for="kdjenis" class="col-sm-2 col-form-label">Jenis</label>
            <div class="col-sm-10">
              <select  id="kdjenis" class="form-control" name="kdjenis" required>
              <option value="" selected>- Pilih -</option>
                <?php
                 $sql="select * from mst_jenis";
                 include '../connection.php';
                 $hasil=mysqli_query($con,$sql);
                 $no=0;
                 while ($data = mysqli_fetch_array($hasil)) {
                 $no++;
                ?>
                 <option value="<?php echo $data['kode'];?>"><?php echo $data['keterangan'];?></option>
                 <?php
                 }
                ?>
              </select>
            </div>
          </div>
          
          <div class="row mb-3">
            <label for="kdmerk" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
              <select  id="kdmerk" class="form-control" name="kdmerk" required>
              <option value="" selected>- Pilih -</option>
                <?php
                 $sql="select * from mst_merk";
                 include '../connection.php';
                 $hasil=mysqli_query($con,$sql);
                 $no=0;
                 while ($data = mysqli_fetch_array($hasil)) {
                 $no++;
                ?>
                 <option value="<?php echo $data['kode'];?>"><?php echo $data['keterangan'];?></option>
                 <?php
                 }
                ?>
              </select>
            </div>
          </div>  

          <div class="row mb-3">
            <label for="rangka" class="col-sm-2 col-form-label">Rangka</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="rangka" name="rangka" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="mesin" class="col-sm-2 col-form-label">Mesin</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="mesin" name="mesin" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="kdwarna" class="col-sm-2 col-form-label">Warna Plat</label>
            <div class="col-sm-10">
              <select  id="kdarna" class="form-control" name="kdwarna" required>
              <option value="" selected>- Pilih -</option>
                <?php
                 $sql="select * from mst_warna";
                 include '../connection.php';
                 $hasil=mysqli_query($con,$sql);
                 $no=0;
                 while ($data = mysqli_fetch_array($hasil)) {
                 $no++;
                ?>
                 <option value="<?php echo $data['kode'];?>"><?php echo $data['keterangan'];?></option>
                 <?php
                 }
                ?>
              </select>
            </div>
          </div> 
          
          <div class="row mb-3">
            <label for="sd_notice" class="col-sm-2 col-form-label">SD Notice</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="sd_notice" name="sd_notice" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="kduptd" class="col-sm-2 col-form-label">UPTD</label>
            <div class="col-sm-10">
              <select  id="kduptd" class="form-control" name="kduptd" required>
              <option value="" selected>- Pilih -</option>
                <?php
                 $sql="select * from mst_uptd";
                 include '../connection.php';
                 $hasil=mysqli_query($con,$sql);
                 $no=0;
                 while ($data = mysqli_fetch_array($hasil)) {
                 $no++;
                ?>
                 <option value="<?php echo $data['kode'];?>"><?php echo $data['keterangan'];?></option>
                 <?php
                 }
                ?>
              </select>
            </div>
          </div>   

          <div class="row mb-3">
            <label for="kondisi" class="col-sm-2 col-form-label">Kondisi</label>
            <div class="col-sm-10">
              <select  id="kondisi" class="form-control" name="kondisi" required>
              <option value="" selected>- Pilih -</option>
                <?php
                 $sql="select * from mst_kondisi";
                 include '../connection.php';
                 $hasil=mysqli_query($con,$sql);
                 $no=0;
                 while ($data = mysqli_fetch_array($hasil)) {
                 $no++;
                ?>
                 <option value="<?php echo $data['kode'];?>"><?php echo $data['keterangan'];?></option>
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
              <a href="?page=mstkendaraan-show" class="btn btn-sm btn-danger"><i
              class="fas fa-chevron-left"></i>
              Kembali</a>
            </div> 

        </form>
      </div>
    </div>
  </div>
</div>