<?php
session_start();
if (!isset($_SESSION['id_admin'])) {
 header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Sistem Pendukung Keputusan</title>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
  <div class="row">
   <div class="col-12">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background-color: gold">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#" style="color: white; font-weight: bold">SPK</a>
        <a class="navbar-brand" style="color: white; font-weight: bold">|</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="index.php?halaman=home" style="font-weight: bold">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?halaman=data" style="font-weight: bold">Data Alternatif</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?halaman=penilaian" style="font-weight: bold">Penilaian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?halaman=rangking" style="font-weight: bold">Rangking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?halaman=bobot" style="font-weight: bold">Bobot</a>
          </li>
          <!--li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li-->
        </ul> 
        <a href="logout.php" class="btn btn-danger">Log out</a>
      </div>
    </nav>  
   </div>
  </div>
  <?php
  include "konten.php";
  ?>
  </div>

</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript">
 $('.carousel').carousel({
  interval: 2000
})
</script>
</html>