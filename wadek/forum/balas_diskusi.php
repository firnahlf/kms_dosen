<?php


if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   

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
           <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Forum Diskusi</h6>
            </div>
            <div class="card-body">
              <?php
                  include "../../include/config.php";
                $id_forum = $_GET['id_forum'];

                $data = mysqli_query($koneksi,"select * from forum_diskusi where id_forum='$id_forum'");

                while($tampil = mysqli_fetch_array($data)){
  
                            ?>

                <div class= "card-body">
                  <h3><?php echo $tampil['judul_diskusi'] ; ?></<h3><br>
                  <p class="mb-0" style="font-size: 10px;"><?php echo $tampil['tgl_pembuatan'] ; ?> <?php echo $tampil['user'] ; ?></p><br>
                  <p style="font-size: 20px;"><?php echo $tampil['isi_diskusi'] ; ?></p>
                  
                  <hr>
                  <?php
                  if (isset($_GET['submit']))
                  {
                  // membaca data komentar dari form
                    $username = $_SESSION['username'];
                    $isi_komentar = $_POST['isi_komentar'];
                    $id_forum = $_POST['id_forum'];
                    $tgl_pembuatan = date("Y-m-d");
                    // proses insert komentar ke database
                    $query = "INSERT INTO komentar_diskusi (id_forum, isi_komentar, username, tgl_pembuatan)
                    VALUES ('$id_forum', '$isi_komentar', '$username', '$tgl_pembuatan')";
                    $hasil = mysqli_query($koneksi,$query);
                  }
                  // proses menampilkan komentar berdasarkan id artikelnya
                  echo "<h4>Komentar</h4>";
                  $query = "SELECT * FROM komentar_diskusi WHERE id_forum = '$id_forum'";
                  $hasil = mysqli_query($koneksi,$query);
                  if (mysqli_num_rows($hasil) > 0)
                  {
                  // jika ada komentar (jumlah data hasil query > 0), maka tampilkan komentarnya
                    while ($data = mysqli_fetch_array($hasil))
                    {
                      echo "<p><small>Dikirim oleh: ".$data['username']." Tanggal: ".$data['tgl_pembuatan']."</small></p>";
                      echo "<p>".$data['isi_komentar']."</p><hr>";
                    }
                  }
// jika tidak ada komentar (jumlah data hasil query = 0), tampilkan keterangan belum ada komentar
                  else if (mysqli_num_rows($hasil) == 0) echo "<p>Belum ada komentar.</p>";
                  
                  // menampilkan form pengisian komentar

                  echo "<h4>Kirim Komentar</h4>";
                  echo "<form method='post' action='".$_SERVER['PHP_SELF']."?id_forum=".$id_forum."&submit=submit'>";
                  
                  echo "<textarea class='form-control' name='isi_komentar'></textarea><br>";
                  echo "<input type='submit' name='submit' value='Beri Komentar'><input type='hidden' name='id_forum' value='".$id_forum."'>";
                 
                  echo "</form>";
                  ?>
                 
              
                </div>
               
              </div>
                    
                    </tr>
                  </thead>
                  <tbody>
                   
                  </tbody>    
                </table>
              </div>
            </div>
          </div>

        </div>

          <!-- Page Heading -->

              <!-- Approach -->
              

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
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
