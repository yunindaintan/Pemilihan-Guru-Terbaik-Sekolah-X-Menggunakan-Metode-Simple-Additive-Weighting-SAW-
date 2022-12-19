<?php
$koneksi=mysqli_connect("localhost","root","","db_spk");
mysqli_select_db($koneksi,"db_spk") or die("Gagal Terhubung ke database!");
?>