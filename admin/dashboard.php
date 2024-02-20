<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">PENDATAAN PERMOHONAN PEMBANGUNAN</h1>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            DATA PERMOHONAN</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php
                            include '../connection.php';
                            $count = "SELECT * from data_permohonan";

                            if ($result = mysqli_query($con, $count)) {
                                $rowcount = mysqli_num_rows($result);
                                echo $rowcount;
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-motorcycle   fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                            BELUM DITANGGAPI</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php
                            include '../connection.php';
                            $count = "SELECT * FROM data_permohonan WHERE status = 1;";

                            if ($result = mysqli_query($con, $count)) {
                                $rowcount = mysqli_num_rows($result);
                                echo $rowcount;
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-times fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            SELESAI</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php
                            include '../connection.php';
                            $count = "SELECT * FROM data_permohonan WHERE status = 5;";

                            if ($result = mysqli_query($con, $count)) {
                                $rowcount = mysqli_num_rows($result);
                                echo $rowcount;
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-check fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="col-xl-2 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            USER
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php
                            include '../connection.php';
                            $count = "SELECT * from user";

                            if ($result = mysqli_query($con, $count)) {
                                $rowcount = mysqli_num_rows($result);
                                echo $rowcount;
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Prototype Aplikasi Pendataan Kendaraan Bermotor</h6>

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Fitur </h2>
                        <ul>
                            <li>Menggunakan admin template (sbadmin2)</li>
                            <li>Membuat aplikasi create, read, update, delete, print dengan bahasa pemrograman (PHP)
                            </li>
                            <li>Menggunakan Datatables untuk menampilkan data</li>
                            <li>Menggunakan select2 untuk menampilkan daftar select/list</li>
                            <li>Membuat fungsi print menggunakan library FPDF dan windows.print</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h2>Ruang Lingkup Aplikasi</h2>
                        <ul>
                            <li>Login
                                <ul>
                                    <li>level : admin</li>
                                    <li>level : operator</li>
                                </ul>
                            </li>
                            <li>Menampilkan data dengan datatables</li>
                            <li>Fungsi simpan Data</li>
                            <li>Fungsi edit Data</li>
                            <li>Fungsi hapus berdasarkan baris data</li>
                            <li>Fungsi cetak (semua data)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-6 mb-4">








    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->