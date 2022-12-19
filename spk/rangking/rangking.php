<div class="container my-4">
<h1>Ranking Dari Tiap Alternatif</h1>
<?php
include "koneksi.php";
$sql="select * from tbl_nilai where skor IS NULL";
$hasil=mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
if (!$hasil || mysqli_num_rows($hasil)>0) {
?>
 <div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>Pesan : </strong> Rangking Perlu diperbarui.
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>
 <a href="rangking/aksi_rangking.php"><input style="margin-bottom:5px " class="btn btn-primary" type="button" name="" value="Mulai"></a>
<?php
}else{
 ?>
 <a href="rangking/aksi_rangking.php"><input style="margin-bottom:5px " class="btn btn-primary" type="button" name="" value="Perbarui"></a>
<?php
}
$sql="select `db_spk`.`tbl_alternatif`.`id_alternatif` AS `id_alternatif`,`db_spk`.`tbl_alternatif`.`nama` AS `nama`,`db_spk`.`tbl_nilai`.`id_nilai` AS `id_nilai`,`db_spk`.`tbl_nilai`.`skor` AS `skor` from (`db_spk`.`tbl_alternatif` left join `db_spk`.`tbl_nilai` on((`db_spk`.`tbl_alternatif`.`id_alternatif` = `db_spk`.`tbl_nilai`.`id_alternatif`))) order by skor desc";
$hasil=mysqli_query($koneksi,$sql);
?>
 <table class="table table-bordered">
  <thead>   
   <tr style="font-weight: bold">
    <td width="5%">No.</td>
    <td width="45%">Nama</td>
    <td width="50%">Skor</td>
    
   </tr>
  </thead>
  <tbody>
   <?php
   $no=1;
   $i=0;
   while ($row=mysqli_fetch_array($hasil)) { 
   ?>
   <tr>
    <td><?php echo $no++?></td>
    <td><?php echo $row['nama']?></td>
    <form action="rangking/aksi_rangking.php" method="POST">
    <td>
     <?php echo $row['skor']?>
    </td>
   </tr>
   <?php
   $i++;
   }
   ?>
   
   </form>
  </tbody>
 </table>
</div>