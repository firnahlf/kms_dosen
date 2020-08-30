<?php
include "../../include/config.php";

$id_dokumen = $_GET['id_dokumen'];
$query = mysqli_query($koneksi, "SELECT * FROM dokumen_penelitian WHERE id_dokumen ='$id_dokumen'");
while($tampil = mysqli_fetch_array($query)){
  
                            
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
  

  <!-- Custom styles for this template-->
  <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">

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
                  <h5 class="modal-title" id="myLargeModalLabel">Tambah Dokumen</h5>
                </div>
                <div class="modal-body" >


                  <form enctype="multipart/form-data" action="proses_edit_dokumen.php" method="post" >
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Id Dokumen</label>
                      <input type="number" class="form-control" id="id_dokumen" name="id_dokumen" value="<?php echo $tampil['id_dokumen'] ;?>">
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Nama Dokumen</label>
                      <input type="text" class="form-control" id="nama_dokumen" name="nama_dokumen" value="<?php echo $tampil['nama_dokumen'] ;?>" required>
                    </div>
                    
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Kategori</label><br>
                       <select class="form-control" name="kategori" id="kategori" required>
                        <option value=""> --> Pilih Kategori <-- </option>
                       <?php
                       include "../../include/config.php";
                        $sql_kategori = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY nama_kategori ASC") or die(mysqli_error($koneksi));
                        while($data_kategori = mysqli_fetch_array($sql_kategori)){
                            echo '<option value="'.$data_kategori['nama_kategori'].'"> '.$data_kategori['nama_kategori'].' </option>';
                        }
                        ?>
                    </select>
                    </div>
                   
                     <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Deskripsi Dokumen</label>
                    <textarea type="text" class="form-control" id="deskripsi_dokumen" name="deskripsi_dokumen" value="<?php echo $tampil['deskripsi_dokumen'] ;?>" required></textarea>
                    </div>

                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Upload File</label><br>
                      <input type="file" name="file" id="file">
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
  <?php 
}
?>

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
