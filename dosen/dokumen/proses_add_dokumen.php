<?php
session_start();
include "../../include/config.php";

if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
  header('location:dokumen.php');
  exit();
}
$sql=mysqli_query($koneksi,"select * from user where id_user='".$_SESSION['id']."'");

$row = mysqli_fetch_array($sql);
  
if (mysqli_num_rows($sql) > 0)
{
  $_SESSION['id'] = $row['username'];
 
}


?>

<?php 


if (isset($_POST['submit'])) {
    # code...

//tampung data
$id_user = $_SESSION['id'];
$judul_dokumen = $_POST['judul_dokumen'];
$deskripsi_dokumen = $_POST['deskripsi_dokumen'];
$lokasi_file = $_FILES['file']['tmp_name'];
$file   = $_FILES['file']['name'];
$tmp = $_FILES ['file']['tmp_name'];
$filebaru = date('dmYHis').$file;
$path = "file_request/".$filebaru;
$tgl_pembuatan = date("Y-m-d");


    if(move_uploaded_file($tmp, $path)){

  
    $query = mysqli_query($koneksi, "INSERT INTO dokumen ( id_user, judul_dokumen, deskripsi_dokumen,  file,  tgl_pembuatan,)
    VALUES('$id_user','$judul_dokumen', '$deskripsi_dokumen', '$file', '$tgl_pembuatan')");

    if($query)
    {
        ?>
            <script language="javascript">
              alert("Dokumen baru berhasil disimpan!");
              document.location.href="dokumen.php";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">
              alert("dokumen baru gagal disimpan!");
              document.location.href="add_dokumen.php";
            </script>
        <?php
    }
}
}
?>