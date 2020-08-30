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
$pengirim = $_SESSION['username'];
$penerima = $_POST['penerima'];
$isi_pesan = $_POST['isi_pesan'];
$tgl_pembuatan = date("Y-m-d");


  
    $query = mysqli_query($koneksi, "INSERT INTO pesan (pengirim, penerima, isi_pesan, tgl_pembuatan)
    VALUES('$pengirim','$penerima', '$isi_pesan', '$tgl_pembuatan')");

    if($query)
    {
        ?>
            <script language="javascript">
              alert("Pesan berhasil dikirim!");
              document.location.href="pesan.php";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">
              alert("Pesan gagal dikirim!");
              document.location.href="tambah_pesan.php";
            </script>
        <?php
    }
}

?>