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
<h2 align="center">Laporan Detail Permohonan</h2>
<div class="table-responsive mt-3">
  <table border="1" width="70%" align="center" cellpadding="8">
    <tbody>
      <?php
      $id = $_GET['id'];
      // $id = 11;
      include '../connection.php';
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
      WHERE 'id' = $id ");
      while ($data = mysqli_fetch_array($query)) { ?>
      <tr>
        <td width=25%>Tanggal</td>
        <td width=75%><?php echo $data['tanggal'] ?></td>
      </tr>
      <tr>
        <td>Jenis</td>
        <td><?php echo $data['jenis'] ?></td>
      </tr>
      <tr>
        <td>Rencana</td>
        <td><?php echo $data['rencana'] ?></td>
      </tr>
      <tr>
        <td>Nama Lengkap</td>
        <td><?php echo $data['nama_lengkap'] ?></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><?php echo $data['alamat'] ?></td>
      </tr>
      <tr>
        <td>Alamat Pembangunan</td>
        <td><?php echo $data['alamat_pembangunan'] ?></td>
      </tr>
      <tr>
        <td>Telepon</td>
        <td><?php echo $data['nomor_telepon'] ?></td>
      </tr>
      <tr>
        <td>Usaha</td>
        <td><?php echo $data['usaha'] ?></td>
      </tr>
      <tr>
        <td>Status</td>
        <td><?php echo $data['status'] ?></td>
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