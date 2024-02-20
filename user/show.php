<?php session_start(); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
</div>

<div class="row">
  <div class=" col-md-4">
    <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Informasi</h6>
      </div>
      <div class="card-body">
        <ul>
          <li>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, voluptate.</p>
          </li>
          <li>
            <p>Lorem ipsum dolor sit.</p>
          </li>
          <li>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-md-8">
    <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">User</h6>

      </div>
      <div class="card-body">
        <a href="?page=user-add" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
        <hr>
        <div class="table-responsive mt-3">
          <table class="table table-bordered table-hover display" id="viewUser" style="width: 100%">
            <thead>
              <tr>
                <th>username</th>
                <th>level</th>
                <th>Aksi</th>
              </tr>
            </thead>

            <tbody>
              <?php
              include '../connection.php';
              $query = mysqli_query($con, 'SELECT * FROM user');
              while ($data = mysqli_fetch_array($query)) { ?>

              <tr>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['level']; ?></td>
                <?php
                  $user = $data['username'];
                  $useraktif = $_SESSION['username'];
                  ?>
                <td>
                  <a class="btn text-primary" href="?page=user-edit&id=<?php echo $data['id']; ?>">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a class="btn text-danger <?php if ($user == $useraktif) echo 'disabled'; ?>"
                    href="?page=user-delete&id=<?php echo $data['id']; ?>"
                    onclick="return confirm('Anda yakin mau menghapus item ini ?')">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>