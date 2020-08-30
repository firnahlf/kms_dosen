<?php
include "../../include/config.php";

session_start();

//ini?
if(empty($_SESSION['username'])){
    header("location:../index.php?pesan=gagal");
  }

?>

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
              Pesan
            </div>
            <div class="card-body">
             
              <a href=tambah_pesan.php class="btn btn-primary" role="button" data-toggle="modal" >
                    <span class="icon text-white-50">
                    </span>
                    <span class="text">Tambah Pesan</span>
                  </a>
                  
                  <br>
                  <br>
                  <!doctype html>
                  <table cellpadding='3' cellspacing='3' class='tab_main'>
      <!--Logo-->
      
      
      <tr>
        <td> <hr> </td> 
        <td> <hr> </td> 
        <td> <hr> </td> 
        <td> <hr> </td> 
        <td> <hr> </td> 
      </tr>
      
      <?php
      
      //Session_start();
      if(IsSet($_SESSION["username"])) {

        $id=$_SESSION["username"];

        $query= MySQLi_Query ($koneksi, "SELECT * from pesan where penerima=".$id." order by id desc");

        
        if(MySQLi_Connect_Errno()) {
          echo "<tr align='center'> <td colspan='5'> Failed to connect to MySQL </td> </tr>";
        }
        else {
      
        $data=MySQLi_Fetch_Row($query);

        if($data) {
        $query="SELECT username,email from users where id=".$data[1]."";
        $sender=MySQLi_Query($koneksi,$query);
        $sender=MySQLi_Fetch_Row($sender);
        //if($data) {
         
        echo "<tr align='center'> <td colspan='5'> <table cellpadding='4' cellspacing='5' width='100%' style='table-layout:fixed'> <col width='100%'> ";
        echo "<td>From:- <font color='blue'>".$sender[0]." </font> [".$sender[1]."] </td> </tr>";
        echo "<tr> <td style='word-wrap:break-word'>Message:-".$data[3]."</td> </tr>";
        echo "</table> </td> </tr>";
        
      }
        else {
        echo "<tr align='center'> <td colspan='5'> <font color='lightblue'> No Messages! </font> </td> </tr>";
        }
        
        }
      }
      
      else {
        echo "<tr align='center'> <td colspan='5'> <font color='red'> Sorry, You not Logged in! </font> Login again:- <a href='login.php'>Login</a> </td> </tr>";

      }
      
      ?>
    </table>

                  


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

