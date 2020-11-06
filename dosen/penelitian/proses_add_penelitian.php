<?php
include "../../include/config.php";

session_start();
$username=$_SESSION['username'];
$sql=mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username' ") or die(mysqli_error());

$row = mysqli_fetch_array($sql);
  
if (mysqli_num_rows($sql) > 0)
{
  $_SESSION['username'] = $row['username'];
 
}


?>

<?php 


if (isset($_POST['submit'])) {
    # code...

//tampung data

$nama_dokumen = $_POST['nama_dokumen'];
$kategori = $_POST['kategori'];
$deskripsi_dokumen = $_POST['deskripsi_dokumen'];
$lokasi_file = $_FILES['file']['tmp_name'];
$file   = $_FILES['file']['name'];
$tmp = $_FILES ['file']['tmp_name'];
$filebaru = date('dmYHis').$file;
$path = "file_request/".$filebaru;
$tgl_pembuatan = date("Y-m-d");
$username = $_SESSION['username'];

    if(move_uploaded_file($tmp, $path)){

  
    $query = mysqli_query($koneksi, "INSERT INTO dokumen_penelitian (nama_dokumen, kategori, deskripsi_dokumen,  file,  tgl_pembuatan, username)
    VALUES('$nama_dokumen', '$kategori', '$deskripsi_dokumen', '$file', '$tgl_pembuatan','$username')");

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