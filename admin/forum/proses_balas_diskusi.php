<?php
include "../../include/config.php";

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
    # code...

//tampung data
$id_forum = $_GET['id'];
$isi_komentar = $_POST['isi_komentar'];
$tgl_pembuatan = date("Y-m-d");
$user = $_SESSION['username'];
  
    $query = mysqli_query($koneksi, "INSERT INTO komentar_diskusi (id_forum, isi_komentar, tgl_pembuatan, user)
    VALUES('$id_forum',$isi_komentar', '$tgl_pembuatan', '$user')");

    if($query)
    {
        ?>
            <script language="javascript">
              alert("Komentar baru berhasil disimpan!");
              document.location.href="forum_diskusi.php";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">
              alert("Diskusi baru gagal disimpan!");
              document.location.href="forum_diskusi.php";
            </script>
        <?php
    }
}

?>