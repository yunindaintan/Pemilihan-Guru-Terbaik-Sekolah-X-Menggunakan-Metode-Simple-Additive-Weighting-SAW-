<?php
if (isset($_GET['halaman'])) {
 if ($_GET['halaman']=='home') {
  include "home.php";
 }
 elseif ($_GET['halaman']=='data') {
  include "alternatif/alternatif.php";
 }
 elseif ($_GET['halaman']=='tambah_data') {
  include "alternatif/tambah_alternatif.php";
 }
 elseif ($_GET['halaman']=='edit_data') {
  include "alternatif/edit_alternatif.php";
 }
 elseif ($_GET['halaman']=='penilaian') {
  include "penilaian/penilaian.php";
 }
 elseif ($_GET['halaman']=='tambah_penilaian') {
  include "penilaian/tambah_penilaian.php";
 }
 elseif ($_GET['halaman']=='bobot') {
  include "bobot/bobot.php";
 }
 elseif ($_GET['halaman']=='rangking') {
  include "rangking/rangking.php";
 }
 else{
  echo "Halaman tidak ditemukan!";
 }
}else{
 include "home.php";
}
?>