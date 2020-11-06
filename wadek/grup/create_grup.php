
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

          <!-- Page Heading -->
          
          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-md-10">
              <div class="modal-dialog modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="myLargeModalLabel">Tambah Grup Riset</h5>
                </div>
                <div class="modal-body" >


                  <form enctype="multipart/form-data" action="proses_create_grup.php" method="post" >
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Nama Grup Riset</label>
                      <input type="text" class="form-control" id="nama_grup" name="nama_grup">
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
                              <label for="id_bk" class="col-sm-2 control-label">Bidang Keilmuan</label>
                              <div class="col-sm-10">
                             <select name="id_bk" id="id_bk" onchange="changeValue(this.value)" >
                                <option value=0></option>
                                  <?php
                                  include "../include/config.php";
                                  $result = mysqli_query($koneksi, "SELECT * FROM bidang_keilmuan");

                                  while ($row = mysqli_fetch_array($result)) {
                                    echo '<option value="' . $row['id_bk'] . '">' . $row['nama_bk'] . '</option>';

                                    }
                                    ?>
                                  </select>
                                </div>
                              </div>
            
                     <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Deskripsi Grup</label>
                    <textarea type="text" class="form-control" id="deskripsi_grup" name="deskripsi_grup"></textarea>
                    </div>

                    <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Tahun Grup</label>
                    <input type="text" class="form-control" id="tahun_grup" name="tahun_grup">
                    </div>

                    <div class="form-group">
                    <label for="recipient-name" class="col-form-label">SK Grup</label>
                    <input type="text" class="form-control" id="tahun_grup" name="sk_grup">
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
            <span>Copyright &copy; KMS 2020</span>
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
