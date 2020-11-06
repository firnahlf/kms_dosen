<?php
  session_start();
  
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Knowledge Management System</title>

  <!-- Custom fonts for this template-->
  <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Custom styles for this template-->
  <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
     <?php include('sidebar.php')?>
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

          <!-- Page Heading -->
          
          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-md-10">
              <div class="modal-dialog modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="myLargeModalLabel">Tambah User</h5>
                </div>
                <div class="modal-body" >


                  <form enctype="multipart/form-data" action="proses_add_user.php" method="post" >
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                    </div>
                    
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Jenis Kelamin</label><br>
                       <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                        <option>Jenis Kelamin</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                                
                    </select>
                    </div>
                     <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Jabatan</label>
                      <input type="text" class="form-control" id="jabatan" name="jabatan">
                    </div>

                    <div class="form-group">
                              <label for="id_prodi" class="col-sm-2 control-label">Program Studi</label>
                              <div class="col-sm-10">
                             <select name="id_prodi" id="id_prodi" onchange="changeValue(this.value)" >
                                <option value=0></option>
                                  <?php
                                  include "../include/config.php";
                                  $result = mysqli_query($koneksi, "SELECT * FROM program_studi");

                                  while ($row = mysqli_fetch_array($result)) {
                                    echo '<option value="' . $row['id_prodi'] . '">' . $row['nama_prodi'] . '</option>';

                                    }
                                    ?>
                                  </select>
                                </div>
                              </div>

                    <div class="form-group">
                              <label for="id_fakultas" class="col-sm-2 control-label">Fakultas</label>
                              <div class="col-sm-10">
                             <select name="id_fakultas" id="id_fakultas" onchange="changeValue(this.value)" >
                                <option value=0></option>
                                  <?php
                                  include "../include/config.php";
                                  $result = mysqli_query($koneksi, "SELECT * FROM fakultas");

                                  while ($row = mysqli_fetch_array($result)) {
                                    echo '<option value="' . $row['id_fakultas'] . '">' . $row['nama_fakultas'] . '</option>';

                                    }
                                    ?>
                                  </select>
                                </div>
                              </div>
                    
                     <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Alamat</label>
                      <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    
                     <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Nomor Handphone</label>
                      <input type="number" class="form-control" id="no_hp" name="no_hp">
                    </div>
                    
                     <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Email</label>
                      <input type="text" class="form-control" id="email" name="email">
                    </div>
                    
                     <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Username</label>
                      <input type="text" class="form-control" id="username" name="username">
                    </div>
                    
                     <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Password</label>
                      <input type="text" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Level User</label><br>
                       <select class="form-control" name="level_user" id="level_user" required>
                        <option>Level User</option>
                        <option>Dosen</option>
                        <option>admin</option>
                        <option>wadek</option>
                      </select>
                    </div>
                     
                <div class="modal-footer">
                  <input type="submit" class="btn btn-primary" name="submit" id="submit" onclick="return confirm('Apakah Anda Yakin?')" value="Simpan">
                  <input class="btn btn-secondary" type="reset" value="Cancel" data-dismiss="modal">
                </div>
              </form>
                </div>
              </div>
              </div>
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
            <span>Copyright &copy; Your Website 2019</span>
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
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../../assets/vendor/jquery/jquery.min.js"></script>
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

</body>

</html>
