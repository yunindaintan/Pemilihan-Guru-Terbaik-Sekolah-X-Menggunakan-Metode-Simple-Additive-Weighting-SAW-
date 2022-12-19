<?php
$id_alternatif=$_POST['id_alternatif'];
$nama =$_POST['nama'];
$jabatan =$_POST['jabatan'];
$nip =$_POST['nip'];
include "../koneksi.php";
$sql="update tbl_alternatif set nama= '$nama',
 jabatan='$jabatan',
 nip='$nip' where id_alternatif='$id_alternatif'";
$hasil=mysqli_query($koneksi,$sql);
//echo "$sql";
if ($hasil) {
 header("location:../index.php?halaman=data&pesan=edit_sukses");
}else
{
 header("location:../index.php?halaman=data&pesan=edit_gagal");
}
?>