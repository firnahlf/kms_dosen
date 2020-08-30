<?php
date_default_timezone_set('Asia/Jakarta');

include_once "koneksi.php";

$koneksi = mysqli_connect($koneksi['host'], $koneksi['user'], $koneksi['pass'], $koneksi['db']);
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
}
function base_url($url = null){
    $base_url = "http://localhost/skripsyit";
    if($url != null){
        return $base_url."/".$url;
    } else{
        return $base_url;
    }
}
?>
