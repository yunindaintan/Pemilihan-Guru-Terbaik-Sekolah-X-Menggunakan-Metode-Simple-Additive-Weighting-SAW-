<?php
include "../koneksi.php";
$sql="delete from tbl_alternatif where id_alternatif='$_GET[id_alternatif]'";
mysqli_query($koneksi,$sql);
//echo "$sql";
header("location:../index.php?halaman=data");
?>