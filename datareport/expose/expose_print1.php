<!-- <link rel="stylesheet" href="../css/sb-admin-2.min.css"> -->
<?php
function tanggal_indonesia()
{
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

    #gambar {
        margin-right: 10px;
        width: 10%;
        text-align: center;
    }

    #header {
        text-align: center;
        line-height: 1;
        width: 80%;
    }

    #header h5 {
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

    .leter {
        letter-spacing: 10px;
    }

    #ttd {
        padding-left: 30px;
        padding-right: 30px;
        margin-top: 30px;
        text-align: center;
        width: 30%;
    }

    #kepada {
        padding-left: 30px;
        padding-right: 30px;
        margin-top: 30px;
        text-align: left;
        width: 30%;
    }

    .items {
        display: flex;
        justify-content: end;
    }

    .bold {
        font-weight: bold;
    }

    .padding {
        margin-left: 100px;
    }
</style>
<?php
$id = $_GET["jenis"];
include '../../connection.php';
$query = mysqli_query($con, "SELECT * FROM jenis_rencana WHERE kd_jenis = $id");
while ($data = mysqli_fetch_array($query)) {
    $jenis                = $data['keterangan'];
}
?>
<div id="kop">
    <div class="gambar" id="gambar">
        <img src="../../img/logotapin.jpg" alt="" width="100px">
    </div>
    <div class="header" id="header">
        <p class="line-heigh bold">PEMERINTAH KABUPATEN TAPIN</p>
        <p class="line-heigh bold" style="font-size: 30px;">DINAS PERHUBUNGAN</p>
        <p class="line-heigh">Jl. Penghulu No.2 Rantau Kode Post 71114</p>
        <p class="leter bold">TAPIN</p>
          
    </div>
</div>
</style>
<h2 align="center">Laporan Data Expose <?= $jenis; ?></h2>
<div class="items">
    <div id="kepada">
        <p>Kepada,</p>
        <p>Kepala Dinas Dinas Perhubungan Kabupaten Tapin</p>
    </div>
</div>
<br>
<div class="padding">
    <p>Dengan Hormat,</p>
    <p>...
</div>
</p>
<br>
<div class="table-responsive mt-3">
    <?php
    include '../../connection.php';
    $query = mysqli_query($con, "SELECT data_permohonan.*,
      jenis_rencana.keterangan as jenis,
      rencana_pembangunan.keterangan as rencana,
      status.keterangan as status
      FROM data_permohonan
      INNER JOIN jenis_rencana
      ON data_permohonan.jenis = jenis_rencana.kd_jenis
      INNER JOIN rencana_pembangunan
      ON data_permohonan.rencana = rencana_pembangunan.kd_rencana
      INNER JOIN status
      ON data_permohonan.status = status.kd_status
      WHERE status = 3 AND data_permohonan.jenis = $id");
    while ($data = mysqli_fetch_array($query)) { ?>
        <table border="1" width="75%" align="center" cellpadding="8">
            <tbody>

                <tr>
                    <td class="bold" width="25%">Tanggal</td>
                    <td align="center" width="75%"><?php echo $data['tanggal']; ?></td>
                </tr>
                <tr>
                    <td class="bold">Jenis</td>
                    <td align="center"><?php echo $data['jenis']; ?></td>
                </tr>
                <tr>
                    <td class="bold">Rencana</td>
                    <td align="center"><?php echo $data['rencana']; ?></td>
                </tr>
                <tr>
                    <td class="bold">Nama Lengkap</td>
                    <td align="center"><?php echo $data['nama_lengkap']; ?></td>
                </tr>
                <tr>
                    <td class="bold">Alamat</td>
                    <td align="center"><?php echo $data['alamat']; ?></td>
                </tr>
                <tr>
                    <td class="bold">Alamat Pembangunan</td>
                    <td align="center"><?php echo $data['alamat_pembangunan']; ?></td>
                </tr>
                <tr>
                    <td class="bold">Telepon</td>
                    <td align="center"><?php echo $data['nomor_telepon']; ?></td>
                </tr>
                <tr>
                    <td class="bold">Usaha</td>
                    <td align="center"><?php echo $data['usaha']; ?></td>
                </tr>
                <tr>
                    <td class="bold">Status</td>
                    <td align="center"><?php echo $data['status']; ?></td>
                </tr>

            </tbody>
        </table>
        <br>
    <?php
    }
    ?>
</div>

<div class="items">
    <div id="ttd">
        <p>Rantau, <?= tanggal_indonesia(); ?> </p>
        <p>Mengetahui</p>
        <br>
        <br>
        <br>
        <p>Kepala,</p>
          
    </div>
</div>

<script>
    window.print();
</script>