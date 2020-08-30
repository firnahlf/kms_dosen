<?php
include "../../include/config.php";
$id_dokumen =$_GET['id_dokumen'];

$query ="SELECT * FROM dokumen_penelitian where id_dokumen ='$id_dokumen'";
$hasil =mysqli_query($koneksi, $query);

if (mysqli_num_rows($hasil) > 0 )
{
    $data =mysqli_fetch_array($hasil);

    //delete data di database
    $query = mysqli_query($koneksi, "DELETE FROM dokumen_penelitian where id_dokumen='$id_dokumen'");

    if ($query)
    {
        ?>
            <script language="javascript">
                alert("Data Dokumen berhasil dihapus!");
                document.location.href="dokumen.php";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">
                alert("Data Dokumen gagal dihapus!");
                document.location.href="dokumen.php";
            </script>
        <?php
    }
}
?>
