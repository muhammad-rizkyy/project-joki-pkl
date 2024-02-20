<!-- <link rel="stylesheet" href="../css/sb-admin-2.min.css"> -->
<style>
* {
  font-family: Arial, Helvetica, sans-serif;
}

table {
  border-collapse: collapse;
  border-color: black;
}
</style>
<h2 align="center">Laporan Detail Kendaraan</h2>
<div class="table-responsive mt-3">
  <table border="1" width="70%" align="center" cellpadding="8">
    <tbody>
      <?php
      $nopol = $_GET['nopol'];
      // $id = 11;
      include '../../connection.php';
      $result = mysqli_query($con, "SELECT mst_kendaraan.*,
      mst_kabupaten.keterangan as kab,
      mst_kecamatan.keterangan as kec,
      mst_kelurahan.keterangan as kel 
      FROM mst_kendaraan 
      INNER JOIN mst_kabupaten
      ON mst_kendaraan.kabupaten = mst_kabupaten.kode
      INNER JOIN mst_kecamatan
      ON mst_kendaraan.kecamatan = mst_kecamatan.kode
      INNER JOIN mst_kelurahan
      ON mst_kendaraan.kelurahan = mst_kelurahan.kode
      ");
      while ($data = mysqli_fetch_array($result)) { ?>
      <tr>
        <td width=25%>Nopol</td>
        <td width=75%><?php echo $data['nopol'] ?></td>
      </tr>

      <tr>
        <td>Nopol Eks</td>
        <td><?php echo $data['nopol_eks'] ?></td>
      </tr>

      <tr>
        <td>Nama Lengkap</td>
        <td><?php echo $data['nama'] ?></td>
      </tr>
      
      <tr>
        <td>KTP</td>
        <td><?php echo $data['ktp'] ?></td>
      </tr>

      <tr>
        <td>Alamat</td>
        <td><?php echo $data['alamat'] ?></td>
      </tr>

      <tr>
        <td>Kabupaten</td>
        <td><?php echo $data['kab'] ?></td>
      </tr>

      <tr>
        <td>Kecamatan</td>
        <td><?php echo $data['kec'] ?></td>
      </tr>

      <tr>
        <td>Kelurahan</td>
        <td><?php echo $data['kel'] ?></td>
      </tr>

      <tr>
        <td>Milik ke</td>
        <td><?php echo $data['milik_ke'] ?></td>
      </tr>

      
     

     



      <!-- <tr>

        <td align="center"><?php echo $data['nim']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td align="center"><?php echo $data['jurusan']; ?></td>
        <td align="center"><?php echo $data['jenis_kelamin']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td align="center"><?php echo $data['telepon']; ?></td>
        <td><?php echo $data['email']; ?></td>
      </tr> -->
      <?php
      }
      ?>
    </tbody>
  </table>
</div>

<script>
window.print();
</script>