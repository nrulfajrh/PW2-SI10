<?php
include_once('koneksi.php');
$paramedik = $dbh->query('SELECT * FROM paramedik');

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
        <h3 class="mt-4 mb-5">Tambahkan data paramedik</h3>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="paramedik_store.php" method="post">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="berat" class="col-4 col-form-label">Jenis Kelamin</label> 
    <div class="col-8">
      <input id="gender" name="gender" type="text" class="form-control" required="required">
    </div>
  </div>

  <div class="form-group row">
    <label for="tinggi" class="col-4 col-form-label">Tempat lahir</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" required="required">
    </div>
  </div>

  <div class="form-group row">
    <label for="tensi" class="col-4 col-form-label">Tanggal lahir</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="tgl_lahir" type="date" required="required" class="form-control">
    </div>
  </div>

  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->


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
    <label for="keterangan" class="col-4 col-form-label">No. Telepon</label> 
    <div class="col-8">
      <input id="telpon" name="telpon" type="text" class="form-control" required="required">
    </div>
  </div>

  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <textarea id="alamat" name="alamat" type="text" class="form-control" required="required"></textarea>
    </div>
  </div>

  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button><br><br>
    </div>
  </div>
</form> 
       
    </div>
</main>
</body>


<?php
include_once('bottom.php');
?>