<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon ">
            <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3">EKOMANDAN</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="?page=dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Input Data Master
    </div>

    <!-- Nav Item - Pages Collapse Menu -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#datamaster" aria-expanded="true" aria-controls="datamaster">
            <i class="fas fa-database fa-cog"></i>
            <span>Input Data Master</span>
        </a>
        <div id="datamaster" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="?page=jenis-show">Data Jenis Rencana</a>
                <a class="collapse-item" href="?page=rencana-show">Data Rencana </a>
                <a class="collapse-item" href="?page=status-show">Data Status </a>
            </div>
        </div>
    </li>

    <div class="sidebar-heading">
        Data Permohonan
    </div>

    <?php
    if ($_SESSION['level'] == 'administrator') {
        echo '
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-database fa-cog"></i>
        <span>Input Data Permohonan</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="?page=permohonan-show">Data Permohonan</a>
        </div>
    </div>
</li>
    ';
    }
    ?>

    <!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-database fa-cog"></i>
        <span>Data Master</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="?page=mstkendaraan-show">Pendataan Kendaraan</a>
        </div>
    </div>
</li> -->

    <!-- Heading -->
    <div class="sidebar-heading">
        Status Data Permohonan
    </div>


    <li class="nav-item ">
        <a class="nav-link" href="?page=blmditanggapi-show">
            <i class="fas fa-fw fa-file"></i>
            <span>Data Belum ditanggapi</span></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="?page=survei-show">
            <i class="fas fa-fw fa-file"></i>
            <span>Data Survei</span></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="?page=expose-show">
            <i class="fas fa-fw fa-file"></i>
            <span>Data Expose</span></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="?page=revisi-show">
            <i class="fas fa-fw fa-file"></i>
            <span>Data Revisi</span></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="?page=selesai-show">
            <i class="fas fa-fw fa-file"></i>
            <span>Data Selesai</span></a>
    </li>

    <?php
    if ($_SESSION['level'] == 'administrator') {
        echo '
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#user" aria-expanded="true"
        aria-controls="user">
        <i class="fas fa-user fa-cog"></i>
        <span>User</span>
      </a>
      <div id="user" class="collapse" aria-labelledby="user" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="?page=user-show">Data User</a>
          <a class="collapse-item" href="?page=user-add">Input User</a>
        </div>
      </div>
    </li>
    ';
    }
    ?>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>