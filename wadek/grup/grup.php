<!DOCTYPE html>
<html lang="en">
<head>
  
  <?php include('header.php')?>

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
          <div class="container-fluid">
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4" data-aos="zoom-in" data-aos-duration="1500">
            <div class="card-header py-3 text-primary font-weight-bold">
              Grup Riset
            </div>
            <div class="card-body">
             
              <a href=create_grup.php class="btn btn-primary" role="button" data-toggle="modal" >
                    <span class="icon text-white-50">
                    </span>
                    <span class="text">Tambah Grup Riset</span>
                  </a>
                  
                  <br>
                  <br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Grup Riset</th>
                      <th>Deskripsi Grup</th>
                      <th>Tahun Grup</th>
                      <th>SK Grup</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      include "../../include/config.php";
                      $baca = mysqli_query($koneksi, "SELECT * FROM grup_riset");
                      while( $tampil = mysqli_fetch_array($baca))
                      {
                     ?>
                    <tr>
                      <td><?php echo $tampil['id_grup'] ; ?></td>
                      <td><?php echo $tampil['nama_grup'] ; ?></td>
                      <td><?php echo $tampil['deskripsi_grup'] ; ?></td>
                      <td><?php echo $tampil['tahun_grup'] ; ?></td>
                      <td><?php echo $tampil['sk_grup'] ; ?></td>
                     
                      <td>
                          
                          <a class="btn btn-danger btn-sm" ><i class="fa fa-download"> View</i></a>
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
     <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; KMS DOSEN 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah Anda yakin keluar dari sistem?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Klik Logout untuk Keluar dari Sistem</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../../auth/logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

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

