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

$kategori = $_POST['kategori'];
$deskripsi_request = $_POST['deskripsi_request'];
$tgl_pembuatan = date("Y-m-d");
$username = $_SESSION['username'];

  
    $query = mysqli_query($koneksi, "INSERT INTO request_dokumen (kategori, deskripsi_request,  tgl_pembuatan, username)
    VALUES('$kategori', '$deskripsi_request','$tgl_pembuatan','$username' )");

    if($query)
    {
        ?>
            <script language="javascript">
              alert("Request baru berhasil disimpan!");
              document.location.href="req_dokumen.php";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">
              alert("Request baru gagal disimpan!");
              document.location.href="add_req_dokumen.php";
            </script>
        <?php
    }
}

?>