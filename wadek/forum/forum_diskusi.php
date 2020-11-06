<?php
  session_start();
  if (isset($_SESSION['username'])&&$_SESSION['username']!=""){
  }
  else
  {
    header("Location:../../index.php");
  }
$uname=$_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('header.php') ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
   <?php include('sidebar.php') ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include('../topbar.php') ?>
        
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Dokumen</h6>
            </div>
            <div class="card-body">
              <a href=add_forum_diskusi.php class="btn btn-primary" role="button" data-toggle="modal" >
                    <span class="icon text-white-50">
                    </span>
                    <span class="text">Tambah Forum Diskusi</span>
                  </a>
                  
                  <br>
                  <br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul Diskusi</th>
                      <th>Isi Diskusi</th>
                      <th>User</th>
                      <th>Tanggal Pembuatan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      include "../../include/config.php";
                      $baca = mysqli_query($koneksi, "SELECT * FROM forum_diskusi");
                      while( $tampil = mysqli_fetch_array($baca))
                      {
                     ?>
                    <tr>
                      <td><?php echo $tampil['id_forum'] ; ?></td>
                      <td><?php echo $tampil['judul_diskusi'] ; ?></td>
                      <td><?php echo $tampil['isi_diskusi'] ; ?></td>
                      <td><?php echo $tampil['user'] ; ?></td>
                      <td><?php echo $tampil['tgl_pembuatan'] ; ?></td>
                      <td>
                          <a class="btn btn-primary btn-sm" href="edit_dokumen.php?id_dokumen=<?php echo $tampil['id_dokumen']; ?>"><i class="fa fa-edit"> Edit</i></a>
                          <a class="btn btn-success btn-sm" href="hapus_dokumen.php?id_dokumen=<?php echo $tampil['id_dokumen']; ?>"><i class="fa fa-trash"> Delete</i></a>
                        </div>
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
          <!-- Content Row -->
         


          
      <!-- End of Main Content -->

      <!-- Footer -->
      
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  
  <!-- Bootstrap core JavaScript-->
   <script src="../../assets//jquery/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../../assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
   <script src="../../assets/js/demo/chart-area-demo.js"></script>
  <script src="../../assets/js/demo/chart-pie-demo.js"></script>
  <script src="../../assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/jquery.dataTables.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../../assets/js/demo/datatables-demo.js"></script>
</body>

</html>
