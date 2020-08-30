<?php
       
    
include '../include/config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"SELECT * from users where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0){
	$data = mysqli_fetch_assoc($login);

	

	if($data['level_user']=="Dosen"){
		session_start(); 
		$_SESSION['username'] = $username;
		$_SESSION['level_user'] = "Dosen";
		
		header("location:../dosen/dashboard.php");

	}
	else if($data['level_user']=="admin"){
		session_start(); 
		$_SESSION['username'] = $username;
		$_SESSION['level_user'] = "admin";
		?><script language="javascript">
				alert("Selamat Datang di Knowledge Management System Dosen Prodi SI!");
				document.location.href="../admin/dashboard.php";
		</script>

		<?php
	}
	else if($data['level_user']=="Kaprodi"){
		session_start(); 
		$_SESSION['username'] = $username;
		$_SESSION['level_user'] = "Kaprodi";
		?><script language="javascript">
				alert("Selamat Datang di Knowledge Management System Dosen Prodi SI!");
				document.location.href="../kaprodi/dashboard.php";
		</script>
		<?php
	}
	
		?>
		<script language="javascript">
				alert("Selamat Datang di Knowledge Management System Dosen Prodi SI!");
				document.location.href="../dosen/dashboard.php";
		</script>

		<?php
		}
		else
		{
		?>
		<script language="javascript">
				alert("Username atau Password Anda salah!");
				document.location.href="../index.php";
		</script>

		<?php
		}
		?>