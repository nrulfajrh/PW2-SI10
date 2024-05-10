<?php
include_once('koneksi.php');
$paramedik= $dbh->query('SELECT * FROM paramedik');
$id = $_GET['id'];
$paramediks = $dbh->query("SELECT * FROM paramedik WHERE id = $id")->fetch();

include_once('top.php');
include_once('menu.php');
?>
<head>

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="Template/css/styles.css" rel="stylesheet" />

</head>
<style>
    h3{
        font-family: poppins, sans-serif;
        font-weight: 700;
    }
</style>
<div class="container-fluid px-4">

        <div class= "d-flex mt-4">
        <a href="paramedik.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left" style="color: #ffffff;"></i></a> 
        </div>
<body>
<main>
    <div class="container-fluid px-4">
        <h3 class="mt-4">Edit Paramedik</h3><br>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="paramedik_update.php" method="post">
  <input type="hidden" name="id" value="<?= $paramediks['id']?>">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" required="required" value="<?= $paramediks['nama']?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Jenis Kelamin</label> 
    <div class="col-8">
      <input id="gender" name="gender" type="text" class="form-control" required="required" value="<?= $paramediks['gender']?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Tempat lahir</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" required="required" value="<?= $paramediks['tmp_lahir'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tanggal lahir</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="tgl_lahir" type="date"  class="form-control" required="required" value="<?= $paramediks['tgl_lahir'] ?>">
    </div>
  </div>
  <div class="form-group row">
  <label for="keterangan" class="col-4 col-form-label">Kategori</label> 
    <div class="col-8">
      <select id="kategori" name="kategori" class="custom-select" required="required">
        <option value="umum">Umum</option>
        <option value="gigi">Spesialis Gigi</option>
        <option value="anak">Spesialis Anak</option>
        <option value="kandungan">Spesialis Kandungan</option>
        <option value="kulit">Spesialis Kulit</option>
        <option value="mata">Spesialis Mata</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">No telepon</label> 
    <div class="col-8">
      <input id="telpon" name="telpon" type="text" class="form-control" required="required" value="<?= $paramediks['telpon'] ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <textarea id="alamat" name="alamat" type="text" class="form-control" required="required" value="<?= $paramediks['alamat'] ?>"></textarea>
    </div>
  </div>

  

  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form> 
       
    </div>
</main>
</body>


<?php
include_once('bottom.php');
?>