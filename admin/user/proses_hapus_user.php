<?php
include "../../include/config.php";
$id_user =$_GET['id_user'];

$query ="SELECT * FROM users where id_user ='$id_user'";
$hasil =mysqli_query($koneksi, $query);

if (mysqli_num_rows($hasil) > 0 )
{
    $data =mysqli_fetch_array($hasil);

    //delete data di database
    $query = mysqli_query($koneksi, "DELETE FROM users where id_user='$id_user'");

    if ($query)
    {
        ?>
            <script language="javascript">
                alert("Data User berhasil dihapus!");
                document.location.href="user.php";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">
                alert("Data User gagal dihapus!");
                document.location.href="user.php";
            </script>
        <?php
    }
}
?>
