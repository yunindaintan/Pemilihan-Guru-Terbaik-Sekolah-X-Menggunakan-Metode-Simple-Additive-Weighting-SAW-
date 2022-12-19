<?php
include "koneksi.php";
$slq="select `db_spk`.`tbl_alternatif`.`id_alternatif` AS `id_alternatif`,`db_spk`.`tbl_alternatif`.`nama` AS `nama`,`db_spk`.`tbl_nilai`.`c1` AS `c1`,`db_spk`.`tbl_nilai`.`c2` AS `c2`,`db_spk`.`tbl_nilai`.`c3` AS `c3`,`db_spk`.`tbl_nilai`.`c4` AS `c4`,`db_spk`.`tbl_nilai`.`id_nilai` AS `id_nilai` from (`db_spk`.`tbl_alternatif` left join `db_spk`.`tbl_nilai` on((`db_spk`.`tbl_alternatif`.`id_alternatif` = `db_spk`.`tbl_nilai`.`id_alternatif`)))";
$hasil=mysqli_query($koneksi,$slq);
?>
<div class="container my-4">
 <?php
 if (isset($_GET['pesan'])) {
 ?>
 <div class="alert alert-info alert-dismissible fade show" role="alert">
   <strong>Pesan : </strong> Nilai berhasil diperbarui.
   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 </div> 
 <?php
 }
 ?>
 <h1>Tabel Penilaian Alternatif</h1>
 <table class="table table-bordered my-4">
  <thead>   
   <tr style="font-weight: bold">
    <td width="5%">No.</td>
    <td width="18%">Nama</td>
    <td width="13%">C1 (Kedisiplinan)</td>
    <td width="13%">C2 (Prestasi)</td>
    <td width="13%">C3 (Absensi)</td>
    <td width="13%">C4 (Tanggung Jawab)</td>
    
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
    <form action="penilaian/aksi_penilaian.php" method="POST">
    <td>
     <input type="hidden" value="<?php echo $row['id_alternatif'] ?>" name="id_alternatif<?php echo $i;?>">
     <input type="hidden" value="<?php echo $row['id_nilai'] ?>" name="id_nilai<?php echo $i;?>">
     <input required="" class="form-control" type="text" value="<?php echo $row['c1']?>" name="c1<?php echo $i;?>">
    </td>
    <td><input required="" class="form-control" type="text" value="<?php echo $row['c2']?>" name="c2<?php echo $i;?>"></td>
    <td><input required="" class="form-control" type="text" value="<?php echo $row['c3']?>" name="c3<?php echo $i;?>"></td>
    <td><input required="" class="form-control" type="text" value="<?php echo $row['c4']?>" name="c4<?php echo $i;?>"></td>    
   </tr>
   <?php
   $i++;
   }
   ?>
   <tr>
    <td colspan="6">
     <input type="hidden" name="jumlah" value="<?php echo $i?>">
     <input type="submit" value="simpan" class="btn btn-success" name="simpan">
    </td>
   </tr>
   </form>
  </tbody>
 </table>
 <h3>Keterangan :</h3>
 <p>1. Kedisiplinan ( <b>Sangat baik</b> : 
80.50-99,90; <b>Baik</b> : 70,50-80,49; 
<b>Cukup</b> : 60,50-70,49; <b>Kurang</b> : 
rata-rata kurang dari 60,50)</p>
<p>2. Prestasi ( <b>Sangat baik</b> : 4; <b>Baik</b> : 3; 
<b>Cukup</b> : 2; <b>Kurang</b> : 1)</p>
<p>3. Absensi ( <b>Sangat baik</b> : tidak ada 
alfa/sakit/izin dengan nilai 4; <b>Baik</b> : sakit/izin 1 kali dengan nilai 3; 
<b>Cukup</b> : sakit/izin 2-3 kali dengan nilai 2; <b>Kurang</b> : 
alfa 1 kali/lebih dengan nilai 1)</p>
<p>4. Tanggung Jawab ( <b>Sangat baik</b> : 3; <b>Baik</b> : 2; <b>Cukup</b> : 1)</p>
</div>
