<?php
include "../../include/config.php";



    # code...

//tampung data
$id_user = $_POST['id_user'];
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

  
    $query = mysqli_query($koneksi, "UPDATE users SET 
     nama_lengkap ='$nama_lengkap', 
     jenis_kelamin = '$jenis_kelamin',
      jabatan = '$jabatan',
       program_studi ='$program_studi',
        fakultas= '$fakultas',
         alamat = '$alamat' ,
         no_hp ='$no_hp',
         email = '$email',
          username = '$username',
          password = '$password',
           level_user = '$level_user' WHERE id_user ='$id_user'");
    

    if($query)
    {
        ?>
            <script language="javascript">
              alert("Update user berhasil disimpan!");
              document.location.href="user.php";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">
              alert("update user gagal disimpan!");
              document.location.href="edit_user.php";
            </script>
        <?php
    }
}

?>
