<?php
if (isset($_POST['simpan'])) {
 include "../koneksi.php";
 $jumlah=$_POST['jumlah'];
 for ($i=0; $i <$jumlah ; $i++) { 
  $temp_id_alternatif="id_alternatif".$i;
  $temp_id_nilai="id_nilai".$i;
  $temp_c1="c1".$i;
  $temp_c2="c2".$i;
  $temp_c3="c3".$i;
  $temp_c4="c4".$i;

  $fix_id_alternatif= $_POST[$temp_id_alternatif];
  $fix_id_nilai= $_POST[$temp_id_nilai];
  $fix_c1= $_POST[$temp_c1];
  $fix_c2= $_POST[$temp_c2];
  $fix_c3= $_POST[$temp_c3];
  $fix_c4= $_POST[$temp_c4];

  $sql="select * from tbl_nilai where id_nilai='$fix_id_nilai'";
  //echo "$sql";
  $hasil=mysqli_query($koneksi,$sql);
  if (mysqli_num_rows($hasil)<=0) {
   $sql="insert into tbl_nilai(id_alternatif,c1,c2,c3,c4) values('$fix_id_alternatif','$fix_c1','$fix_c2','$fix_c3','$fix_c4')";
   mysqli_query($koneksi,$sql);
   //echo "$sql";
  }else{
   $sql="update tbl_nilai set c1='$fix_c1', c2='$fix_c2', c3='$fix_c3', c4='$fix_c4' where id_nilai='$fix_id_nilai'";
   //echo "$sql";
   mysqli_query($koneksi,$sql);
  }
 }
 
}
header("location:../index.php?halaman=penilaian&pesan=1");
?>