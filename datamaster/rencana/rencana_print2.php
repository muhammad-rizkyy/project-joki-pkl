<!-- <link rel="stylesheet" href="../css/sb-admin-2.min.css"> -->
<?php
function tanggal_indonesia() {
  $hari = date('l'); // Mengambil nama hari dalam bahasa Inggris
  $tanggal = date('j'); // Mengambil tanggal dalam format numerik
  $bulan = date('n'); // Mengambil bulan dalam format numerik
  $tahun = date('Y'); // Mengambil tahun dalam format empat digit

  // Array untuk mengonversi nama bulan dalam bahasa Indonesia
  $bulan_array = array(
      1 => 'Januari',
      2 => 'Februari',
      3 => 'Maret',
      4 => 'April',
      5 => 'Mei',
      6 => 'Juni',
      7 => 'Juli',
      8 => 'Agustus',
      9 => 'September',
      10 => 'Oktober',
      11 => 'November',
      12 => 'Desember'
  );

  // Array untuk mengonversi nama hari dalam bahasa Indonesia
  $hari_array = array(
      'Sunday' => 'Minggu',
      'Monday' => 'Senin',
      'Tuesday' => 'Selasa',
      'Wednesday' => 'Rabu',
      'Thursday' => 'Kamis',
      'Friday' => 'Jumat',
      'Saturday' => 'Sabtu'
  );

  // Mengonversi nama hari dan bulan ke dalam bahasa Indonesia
  $hari_indonesia = $hari_array[$hari];
  $bulan_indonesia = $bulan_array[$bulan];

  // Menggabungkan semua informasi untuk tanggal dalam bahasa Indonesia
  $tanggal_indonesia = $tanggal . ' ' . $bulan_indonesia . ' ' . $tahun;

  return $tanggal_indonesia;
}  ?>

<style>
* {
  font-family: Arial, Helvetica, sans-serif;
}

table {
  border-collapse: collapse;
  border-color: black;
  font-size: 10;
}
#kop {
  display: flex;
  padding-left: 30px;
  padding-right: 30px;
  margin-top: 30px;
  align-items: center;
  border-bottom: 5px solid black;
}

#gambar{
  margin-right: 10px;
  width: 10%;
  text-align: center;
}

#header{
  text-align: center;
  line-height: 1;
  width: 80%;
}
#header h5{
  margin-bottom: -10px;
  font-weight: bold;
}

.line-heigh {
  /* font-weight: bold; */
  margin-bottom: -10px;
}

.bold {
  font-weight: bold;
}

.leter{
  letter-spacing: 10px;
}

#ttd{
  padding-left: 30px;
  padding-right: 30px;
  margin-top: 30px;
  text-align: center;
  width: 30%;
}

.items{
  display: flex;
  justify-content: end;
}


</style>
<div id="kop">
  <div class="gambar" id="gambar">
    <img src="../../img/dishub.png" alt="" width="200px">
  </div>
  <div class="header" id="header">
    <p class="line-heigh">PEMERINTAH PROVINSI KALIMANTAN SELATAN</p>
    <p class="line-heigh bold" style="font-size: 30px;">DINAS PERHUBUNGAN</p>
    <p class="line-heigh">Jl. Raya Dharma Praja Kawasan Perkantoran Pemprov. Kalsel</p>
    <p class="leter">BANJARBARU</p>
  </div>
</div>
</style>
<h2 align="center">Laporan Data Rencana Pembangunan</h2>
<div class="table-responsive mt-3">
  <table border="1" width="100%" align="center" cellpadding="8">
    <thead>
      <tr>
        <th width="5%">Kode Rencana</th>
        <th width="5%">Keterangan</th>
        <th width="5%">Jenis</th>
      </tr>
    </thead>

    <tbody>
    <?php
      include '../../connection.php';
      $query = mysqli_query($con, 'SELECT rencana_pembangunan.*,
      jenis_rencana.keterangan as jenis
      FROM rencana_pembangunan
      INNER JOIN jenis_rencana
      ON rencana_pembangunan.jenis = jenis_rencana.kd_jenis');
      while ($data = mysqli_fetch_array($query)) { ?>

      <tr>
        <td align="center"><?php echo $data['kd_rencana']; ?></td>
        <td align="center"><?php echo $data['keterangan']; ?></td>
        <td align="center"><?php echo $data['jenis']; ?></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>

<div class="items">
  <div id="ttd">
    <p>Banjarbaru, <?= tanggal_indonesia(); ?> </p>
    <p>Mengetahui</p>
    <br>
    <br>
    <br>
    <p>Kepala Sub Bagian</p>
  </div>
</div>

<script>
window.print();
</script>