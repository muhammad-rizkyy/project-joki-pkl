<!-- <link rel="stylesheet" href="../css/sb-admin-2.min.css"> -->
<style>
* {
  font-family: Arial, Helvetica, sans-serif;
}

table {
  border-collapse: collapse;
  border-color: black;
  font-size: 10;
}
</style>
<h2 align="center">Laporan Data Utama Kendaraan</h2>
<div class="table-responsive mt-3">
  <table border="1" width="100%" align="center" cellpadding="8">
    <thead>
      <tr>
        <th width="10%">Nopol</th>
        <th width="10%">Nopol Eks</th>
        <th width="25%">Nama</th>
        <th width="10%">KTP</th>
        <th width="35%">Alamat</th>
        <th width="10%">Kabupaten</th>
        <th width="10%">Kecamatan</th>
        <th width="10%">Kelurahan</th>
        <th width="10%">Milik Ke</th>
        <th width="10%">Jenis</th>
        <th width="10%">Merk</th>
        <th width="10%">Rangka</th>
        <th width="10%">Mesin</th>
        <th width="10%">Warna Plat</th>
        <th width="10%">SD Notice</th>
        <th width="10%">UPTD</th>
        <th width="10%">Kondisi</th>
      </tr>
    </thead>

    <tbody>
    <?php
      include '../../connection.php';
      $query = mysqli_query($con, 'SELECT mst_kendaraan.*,
      mst_kabupaten.keterangan as kab,
      mst_kecamatan.keterangan as kec,
      mst_kelurahan.keterangan as kel,
      mst_jenis.keterangan as jenis,
      mst_merk.keterangan as merk,
      mst_warna.keterangan as plat,
      mst_uptd.keterangan as uptd,
      mst_kondisi.keterangan as kondisi
      FROM mst_kendaraan 
      INNER JOIN mst_kabupaten
      ON mst_kendaraan.kabupaten = mst_kabupaten.kode
      INNER JOIN mst_kecamatan
      ON mst_kendaraan.kecamatan = mst_kecamatan.kode
      INNER JOIN mst_kelurahan
      ON mst_kendaraan.kelurahan = mst_kelurahan.kode
      INNER JOIN mst_jenis
      ON mst_kendaraan.kdjenis = mst_jenis.kode
      INNER JOIN mst_merk
      ON mst_kendaraan.kdmerk = mst_merk.kode
      INNER JOIN mst_warna
      ON mst_kendaraan.kdwarna = mst_warna.kode
      INNER JOIN mst_uptd
      ON mst_kendaraan.kduptd = mst_uptd.kode
      INNER JOIN mst_kondisi
      ON mst_kendaraan.kondisi = mst_kondisi.kode
      ');
      while ($data = mysqli_fetch_array($query)) { ?>

      <tr>
        <td align="center"><?php echo $data['nopol']; ?></td>
        <td><?php echo $data['nopol_eks']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td align="center"><?php echo $data['ktp']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td align="center"><?php echo $data['kab']; ?></td>
        <td><?php echo $data['kec']; ?></td>
        <td><?php echo $data['kel']; ?></td>
        <td><?php echo $data['milik_ke']; ?></td>
        <td><?php echo $data['jenis']; ?></td>
        <td><?php echo $data['merk']; ?></td>
        <td><?php echo $data['rangka']; ?></td>
        <td><?php echo $data['mesin']; ?></td>
        <td><?php echo $data['plat']; ?></td>
        <td><?php echo $data['sd_notice']; ?></td>
        <td><?php echo $data['uptd']; ?></td>
        <td><?php echo $data['kondisi']; ?></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>

<script>
window.print();
</script>