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


                  <form enctype="multipart/form-data" action="proses_edit_user.php" method="post" >
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
                      <label for="recipient-name" class="col-form-label">Program Studi</label><br>
                       <select class="form-control" name="program_studi" id="program_studi" required>
                        <option>Program Studi</option>
                        <option>Pendidikan Agama Islam</option>
                        <option>Pendidikan Bahasa Arab  </option>
                        <option>Pendidikan Bahasa dan Sastra Indonesia  </option>
                        <option>Pendidikan Bahasa Inggris </option>
                        <option>Pendidikan Ilmu Pengetahuan Sosial  </option>
                        <option>Pendidikan Matematika </option>
                        <option>Pendidikan Biologi  </option>
                        <option>Pendidikan Kimia  </option>
                        <option>Pendidikan Fisika </option>
                        <option>Manajemen Pendidikan  </option>
                        <option>Pendidikan Guru MI (PGMI) </option>
                        <option>Pendidikan Guru MI (PGMI) </option>
                        <option>Bahasa dan Sastra Arab  </option>
                        <option>Sejarah dan Peradaban Islam </option>
                        <option>Tarjamah (Bahasa Arab)  </option>
                        <option>Sastra Inggris  </option>
                        <option>Ilmu Perpustakaan </option>
                        <option>Studi Agama-Agama </option>
                        <option>Aqidah dan Filsafat Islam </option>
                        <option>Ilmu Al-Qur’an dan Tafsir </option>
                        <option>Ilmu Hadis  </option>
                        <option>Ilmu Tasawuf  </option>
                        <option>Perbandingan Madzhab  </option>
                        <option>Hukum Keluarga (Akhwal Syakhshiyah) </option>
                        <option>Ilmu Hukum  </option>
                        <option>Hukum Ekonomi Syariah (Muamalat)  </option>
                        <option>Hukum Pidana Islam (Jinayah)  </option>
                        <option>Hukum Tata Negara (Siyasah) </option>
                        <option>Komunikasi dan Penyiaran Islam  </option>
                        <option>Bimbingan Penyuluhan Islam  </option>
                        <option>Manajemen Dakwah  </option>
                        <option>Pengembangan Masyarakat Islam </option>
                        <option>Kesejahteraan Sosial  </option>
                        <option>Jurnalistik</option>
                        <option>Dirasat Islamiyah </option>
                        <option>Psikologi </option>
                        <option>Manajemen</option>
                        <option>Akuntansi</option>
                        <option>Ekonomi Pembangunan </option>
                        <option>Ekonomi Syariah </option>
                        <option>Perbankan Syariah </option>
                        <option>Agribisnis  </option>
                        <option>Teknik Informatika  </option>
                        <option>Sistem Informasi  </option>
                        <option>Matematika  </option>
                        <option>Biologi</option>
                        <option>Kimia </option>
                        <option>Fisika  </option>
                        <option>Teknik Pertambangan </option>
                        <option>Kesehatan Masyarakat  </option>
                        <option>Farmasi </option>
                        <option>Ilmu Keperawatan  </option>
                        <option>Sosiologis</option>
                        <option>Ilmu Politik  </option>
                        <option>Hubungan Internasional  </option>
                        <option>Kedokteran  </option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Fakultas</label><br>
                       <select class="form-control" name="fakultas" id="Fakultas" required>
                        <option>Fakultas</option>
                        <option>Fakultas Ilmu Tarbiyah dan Keguruan (FITK)</option>
                        <option>Fakultas Adab dan Humaniora (FAH)</option>
                        <option>Fakultas Ushuluddin (FU)</option>
                        <option>Fakultas Syariah dan Hukum (FSH) </option>
                        <option>Fakultas Dakwah dan Ilmu Komunikasi (FDIK) </option>
                        <option>Fakultas Dirasat Islamiyah (FDI)</option>
                        <option>Fakultas Psikologi (FPsi) </option>
                        <option>Fakultas Ekonomi dan Bisnis (FEB)</option>
                        <option>Fakultas Sains dan Teknologi (FST) </option>
                        <option>Fakultas Ilmu Kesehatan (FIKES)</option>
                        <option>Fakultas Ilmu Sosial dan Ilmu Politik (FISIP)</option>
                        <option>Fakultas Kedokteran (FK)</option>
                      </select>
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
                        <option>Kaprodi</option>
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
