<?php
if (isset($_SESSION['level']) != '') {
  include('../logincheck.php');
}
session_start();
include '../template/header.php';
?>

<body id="page-top">

  
  <div id="wrapper">
    <?php include 'sidebar.php'; ?>


    <div id="content-wrapper" class="d-flex flex-column">


      <div id="content">


        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>

            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  <strong>Halo, </strong>
                  <?php if (isset($_SESSION['username']) != ''):
                    echo $_SESSION['username'];
                  endif; ?>
                </span>
                <img class="img-profile rounded-circle" src="../img/undraw_profile.svg" />
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>

        <div class="container-fluid">


          <?php
          include '../connection.php';
          error_reporting(0);
          switch ($_GET['page']) {
            case 'dashboard':
              $title = 'Dashboard';
              include 'dashboard.php';
              break;
                //datamaster
            case 'jenis-show':
              $title = 'Data Master Jenis Rencana';
              include '../datamaster/jenisrencana/jenisrencana_show.php';
              break;
            case 'jenis-add':
              $title = 'Input Data Jenis Rencana';
              include '../datamaster/jenisrencana/jenisrencana_add.php';
              break; 
            case 'jenis-delete':
              include '../datamaster/jenisrencana/jenisrencana_delete.php';
              break; 
            case 'jenis-edit':
              $title = 'Edit Data Jenis Rencana';
              include '../datamaster/jenisrencana/jenisrencana_edit.php';
              break; 
            case 'jenis-print2':
              include '../datamaster/jenisrencana/jenisrencana_print2.php';
              break; 

            case 'rencana-show':
              $title = 'Data Master Rencana Pembangunan ';
              include '../datamaster/rencana/rencana_show.php';
              break;
            case 'rencana-add':
              $title = 'Input Data Rencana Pembangunan';
              include '../datamaster/rencana/rencana_add.php';
              break; 
            case 'rencana-delete':
              include '../datamaster/rencana/rencana_delete.php';
              break; 
            case 'rencana-edit':
              $title = 'Edit Data Rencana Pembangunan';
              include '../datamaster/rencana/rencana_edit.php';
              break; 
            case 'rencana-print2':
              include '../datamaster/rencana/rencana_print2.php';
              break; 

            case 'status-show':
              $title = 'Data Master Status';
              include '../datamaster/status/status_show.php';
              break;
            case 'status-add':
              $title = 'Input Data Status';
              include '../datamaster/status/status_add.php';
              break; 
            case 'status-delete':
              include '../datamaster/status/status_delete.php';
              break; 
            case 'status-edit':
              $title = 'Edit Data Status';
              include '../datamaster/status/status_edit.php';
              break; 
            case 'status-print2':
              include '../datamaster/status/status_print2.php';
              break; 

              //datautama
             case 'permohonan-show':
              $title = 'Data Master Permohonan';
              include '../datautama/permohonan_show.php';
              break;
            case 'permohonan-add':
              $title = 'Input Data Permohonan';
              include '../datautama/permohonan_add.php';
              break; 
            case 'permohonan-delete':
              include '../datautama/permohonan_delete.php';
              break; 
            case 'permohonan-edit':
              $title = 'Edit Data Permohonan';
              include '../datautama/permohonan_edit.php';
              break; 
            case 'permohonan-print2':
              include '../datautama/permohonan_print2.php';
              break;
            case 'permohonan-print3':
              include '../datautama/permohonan_print3.php';
              break; 
   


              //report
              
            case 'blmditanggapi-show':
              $title = 'Data Report';
              include '../datareport/blmditanggapi/blmditanggapi_show.php';
              break;
            case 'blmditanggapi-add':
              $title = 'Input Data blmditanggapi';
              include '../datareport/blmditanggapi/blmditanggapi_add.php';
              break; 
            case 'blmditanggapi-delete':
              include '../datareport/blmditanggapi/blmditanggapi_delete.php';
              break; 
            case 'blmditanggapi-edit':
              $title = 'Edit Data Status Permohonan';
              include '../datareport/blmditanggapi/blmditanggapi_edit.php';
              break; 
            case 'blmditanggapi-print2':
              include '../datareport/blmditanggapi/blmditanggapi_print2.php';
              break; 
            case 'blmditanggapi-print3':
              include '../datareport/blmditanggapi/blmditanggapi_print3.php';
              break;

            case 'survei-show':
              $title = 'Data Report';
              include '../datareport/survei/survei_show.php';
              break;
            case 'survei-add':
              $title = 'Input Data Belum Bayar';
              include '../datareport/survei/survei_add.php';
              break; 
            case 'survei-delete':
              include '../datareport/survei/survei_delete.php';
              break; 
            case 'survei-edit':
              $title = 'Edit Data Survei Permohonan';
              include '../datareport/survei/survei_edit.php';
              break; 
            case 'survei-print2':
              include '../datareport/survei/survei_print2.php';
              break; 
            case 'survei-print3':
              include '../datareport/survei/survei_print3.php';
              break;

            case 'survei-show':
              $title = 'Data Report';
              include '../datareport/survei/survei_show.php';
              break;
            case 'survei-add':
              $title = 'Input Data Sudah Bayar';
              include '../datareport/survei/survei_add.php';
              break; 
            case 'survei-delete':
              include '../datareport/survei/survei_delete.php';
              break; 
            case 'survei-edit':
              $title = 'Edit Data Status Permohonan';
              include '../datareport/survei/survei_edit.php';
              break; 
            case 'survei-print2':
              include '../datareport/survei/survei_print2.php';
              break; 
            case 'survei-print3':
              include '../datareport/survei/survei_print3.php';
              break;

            case 'expose-show':
              $title = 'Data Report';
              include '../datareport/expose/expose_show.php';
              break;
            case 'expose-delete':
              include '../datareport/expose/expose_delete.php';
              break; 
            case 'expose-edit':
              $title = 'Edit Data Status Permohonan';
              include '../datareport/expose/expose_edit.php';
              break; 
            case 'expose-print2':
              include '../datareport/expose/expose_print2.php';
              break; 
            case 'expose-print3':
              include '../datareport/expose/expose_print3.php';
              break;

            case 'revisi-show':
              $title = 'Data Report';
              include '../datareport/revisi/revisi_show.php';
              break;
            case 'revisi-delete':
              include '../datareport/revisi/revisi_delete.php';
              break; 
            case 'revisi-edit':
              $title = 'Edit Data Status Permohonan';
              include '../datareport/revisi/revisi_edit.php';
              break;
            case 'revisi-print2':
              include '../datareport/revisi/revisi_print2.php';
              break; 
              case 'revisi-print3':
              include '../datareport/revisi/revisi_print3.php';
              break;

            case 'selesai-show':
              $title = 'Data Report';
              include '../datareport/selesai/selesai_show.php';
              break;
            case 'selesai-delete':
              include '../datareport/selesai/selesai_delete.php';
              break; 
            case 'selesai-edit':
              $title = 'Edit Data Status Permohonan';
              include '../datareport/selesai/selesai_edit.php';
              break;
            case 'selesai-print2':
              include '../datareport/selesai/selesai_print2.php';
              break; 
            case 'selesai-print3':
              include '../datareport/selesai/selesai_print3.php';
              break;


            case 'user-show':
              $title = 'Data User';
              include '../user/show.php';
              break;

            case 'user-add':
              $title = 'Input Data User';
              include '../user/add.php';
              break;
            case 'user-edit':
              $title = 'Edit Data User';
              include '../user/edit.php';
              break;

            case 'user-delete':
              include '../user/delete.php';
              break;

            case 'admin-logout':
              include 'logout.php';
              break;
            default:
              $title = 'Dashboard';
              include 'dashboard.php';
              break;
          }
          ?>


          <?php include '../template/footer.php'; ?>



</body>

</html>