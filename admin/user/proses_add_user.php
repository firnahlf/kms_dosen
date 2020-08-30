<?php
include "../../include/config.php";


if (isset($_POST['submit'])) {
    # code...

//tampung data

$nama_lengkap = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jabatan = $_POST['jabatan'];
$program_studi = $_POST['program_studi'];
$fakultas = $_POST['fakultas'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$level_user = $_POST['level_user'];

if($username =="" or $password =="")
{
  ?>
  <script language="javascript">
      alert("Masih ada form yang kosong!");
      document.location.href="add_user.php";
  </script>
<?php

}

else {

  
    $query = mysqli_query($koneksi, "INSERT INTO users (nama_lengkap, jenis_kelamin, jabatan,  program_studi,  fakultas, alamat,no_hp,email,username,password,level_user)
    VALUES('$nama_lengkap', '$jenis_kelamin', '$jabatan', '$program_studi', '$fakultas','$alamat','$no_hp','$email','$username','$password','$level_user')");

    if($query)
    {
        ?>
            <script language="javascript">
              alert("User baru berhasil disimpan!");
              document.location.href="user.php";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">
              alert("user baru gagal disimpan!");
              document.location.href="add_user.php";
            </script>
        <?php
    }
}
}
?>