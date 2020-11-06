<?php
    include_once "include/config.php";
    if(isset($_SESSION['saya_admin'])){
        echo "<script>window.location='".base_url('admin/dashboard/')."';</script>";
    }
    else{
        echo "<script>window.location='".base_url('auth/login.php')."';</script>";
    }
?>