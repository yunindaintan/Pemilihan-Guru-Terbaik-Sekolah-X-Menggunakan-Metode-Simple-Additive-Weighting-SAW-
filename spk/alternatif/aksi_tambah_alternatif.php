<?php
$nama =$_POST['nama'];
$kelas =$_POST['jabatan'];
$nis =$_POST['nip'];
include "../koneksi.php";
$sql="insert into tbl_alternatif (nama, jabatan, nip) 
values ('$nama','$jabatan','$nip')";
$hasil=mysqli_query($koneksi,$sql);
//echo "$sql";
if ($hasil) {
 header("location:../index.php?halaman=data&pesan=tambah_sukses");
}else
{
 header("location:../index.php?halaman=data&pesan=tambah_gagal");
}
?>