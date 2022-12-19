<div class="container my-4">
 <h1>Tambah Alternatif</h1>
 <div class="my-4">
  <form action="alternatif/aksi_tambah_alternatif.php" method="POST">
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <input type="text"  class="form-control" name="nama">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label">Jabatan</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="jabatan">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label">NIP</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="nip">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
        <input type="submit" class="btn btn-success" value="Simpan">
        <a href="index.php?halaman=data">
          <input type="" class="btn btn-primary" value="Kembali">
        </a>  
      </div>
    </div>
  </form>
 </div>
</div>