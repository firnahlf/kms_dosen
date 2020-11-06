<?php
include "../../include/config.php";

if (isset($_POST['submit'])) {
    # code...

//tampung data

$id_fakultas = $_POST['id_fakultas'];
$id_prodi = $_POST['id_prodi'];
$id_bk = $_POST['id_bk'];
$nama_grup = $_POST['nama_grup'];
$deskripsi_grup = $_POST['deskripsi_grup'];
$tahun_grup = $_POST['tahun_grup'];
$sk_grup = $_POST['sk_grup'];


    $query = mysqli_query($koneksi, "INSERT INTO grup_riset (id_fakultas, id_prodi, id_bk,  nama_grup,  deskripsi_grup, tahun_grup, sk_grup)
    VALUES('$id_fakultas', '$id_prodi', '$id_bk', '$nama_grup', '$deskripsi_grup', '$tahun_grup','$sk_grup')");

    if($query)
    {
        ?>
            <script language="javascript">
              alert("Grup Riset baru berhasil disimpan!");
              document.location.href="grup.php";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">
              alert("Grup Riset baru gagal disimpan!");
              document.location.href="create_grup.php";
            </script>
        <?php
    }
}

?>