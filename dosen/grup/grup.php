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
                          <a name="join_grup" id="join_grup" href="grup_room/grup_room.php?id_grup=<?php echo $tampil['id_grup']; ?>" class="btn btn-facebook"><span class="fa fa-group"> Join </span></a>&nbsp;
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
      <?php include('footer.php') ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  
 
</body>

</html>

