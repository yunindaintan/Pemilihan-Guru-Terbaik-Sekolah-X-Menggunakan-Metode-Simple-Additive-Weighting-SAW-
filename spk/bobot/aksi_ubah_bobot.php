<?php
$w1=$_POST['w1'];
$w2=$_POST['w2'];
$w3=$_POST['w3'];
$w4=$_POST['w4'];
$sql="update tbl_bobot set w1='$w1',w2='$w2',w3='$w3',w4='$w4'";
include "../koneksi.php";
mysqli_query($koneksi,$sql);
header("location:../index.php?halaman=bobot&pesan=1");
?>