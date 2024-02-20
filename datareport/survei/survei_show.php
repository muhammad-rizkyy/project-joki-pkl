<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
</div>

<div class="row">
  <div class="col">
    <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Data Permohonan Survei</h6>

      </div>
      <div class="card-body">
        <div class="row d-flex justify-content-between align-items-center">
          <div class="col">
            <a href="../datareport/survei/survei_print2.php" class="btn btn-sm btn-warning" target="_blank"><i class="fas fa-print"></i>
              Cetak
              Data</a>
          </div>
          <div class="col">
            <form action="../datareport/survei/survei_print1.php" method="get" target="_blank">
              <div class="row">
                <div class="col">
                  <select name="jenis" id="jenis" class="form-control" required>
                    <option value="" selected>- Pilih -</option>
                    <?php
                    include '../connection.php';
                    $query = mysqli_query($con, 'SELECT * FROM jenis_rencana');
                    $i = 1;

                    while ($data = mysqli_fetch_array($query)) { ?>
                      <option value="<?= $data['kd_jenis']; ?>"><?= $data['keterangan']; ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="col">
                  <button type="submit" class="btn btn-primary" name="submit">
                    Cetak</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <hr>
        <div class="table-responsive mt-3">
          <table class="table table-bordered table-hover" id="viewData" style="width: 100%">
            <thead>
              <tr>
                <th>Tanggal</th>
                <th>Jenis Rencana</th>
                <th>Rencana Pembangunan</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Alamat Pembangunan</th>
                <th>Telepon</th>
                <th>Usaha</th>
                <th>Status</th>
                <th>Aksi</th>

              </tr>
            </thead>

            <tbody>
              <?php
              include '../connection.php';
              $query = mysqli_query($con, 'SELECT * FROM data_permohonan WHERE status = 2; ');
              while ($data = mysqli_fetch_array($query)) { ?>

                <tr>
                  <td><?php echo $data['tanggal']; ?></td>
                  <td class="text-nowrap"><?php echo $data['jenis']; ?></td>
                  <td><?php echo $data['rencana']; ?></td>
                  <td><?php echo $data['nama_lengkap']; ?></td>
                  <td><?php echo $data['alamat']; ?></td>
                  <td><?php echo $data['alamat_pembangunan']; ?></td>
                  <td><?php echo $data['nomor_telepon']; ?></td>
                  <td><?php echo $data['usaha']; ?></td>
                  <td><?php echo $data['status']; ?></td>
                  <td>
                    <a class="btn btn-sm btn-primary my-1" href="?page=survei-edit&id=<?php echo $data['id']; ?>"><i class="fas fa-edit"></i></a>
                    <a class="btn btn-sm btn-danger my-1" href="?page=survei-delete&id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i class="fas fa-trash"></i>
                    </a>
                    <!-- <a class="btn text-success" href="../datareport/kendaraan/kendaraan_print3.php?id=<?php echo $data['kd_jenis']; ?>"
                    target="_blank"><i class="fas fa-print"></i>
                  </a> -->
                  </td>
                </tr>

              <?php $no++;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>