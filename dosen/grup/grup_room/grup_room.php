<?php


if(!session_id()){
	session_start();
}

if (isset($_POST['id_grup'])){
    $id_grup=$_POST['id_grup'];
    
    $query=mysqli_query($koneksi,"select * from anggota where grup_riset='$id_grup' and id_user='".$_SESSION['id_user']."'");
    if (mysqli_num_rows($query)<1){
        mysqli_query($koneksi,"insert into anggota_grup (id_grup, id_user) values ('$id_grup', '".$_SESSION['id_user']."')");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('../header.php') ?>

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
        <?php include('../../topbar.php') ?>
        
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Grup Riset</h6>
            </div>
            <div class="card-body">
            <?php
                include "../../../include/config.php";
	            $id_grup=$_REQUEST['id_grup'];
	
	            $grup=mysqli_query($koneksi,"select * from grup_riset where id_grup='$id_grup'");
	            $row=mysqli_fetch_array($grup);
	
	            $cmem=mysqli_query($koneksi,"select * from anggota where id_grup='$id_grup'");
            ?>
              
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

  
  <?php include('../footer.php') ?>


</body>

</html>
