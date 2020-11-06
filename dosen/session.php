<?php
	session_start();

	include '../include/config.php';
	
	if (!isset($_SESSION['id_user']) ||(trim ($_SESSION['id_user']) == '')) {
	header('location:../');
    exit();
	}
	
	$sq=mysqli_query($koneksi,"select * from `user` where id_user='".$_SESSION['id_user']."'");
	$srow=mysqli_fetch_array($sq);
    
	
	$user=$srow['username'];
?>