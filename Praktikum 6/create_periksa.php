<?php
include_once('koneksi.php');
$pasien = $dbh->query('SELECT * FROM pasien');

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
        <a href="periksa.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left" style="color: #ffffff;"></i></a> 
        </div>

<main>
    <div class="container-fluid px-4">
        <h3 class="mt-4">Tambahkan hasil periksa</h3>
        <br><br>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="periksa_store.php" method="post">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal" type="date" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="berat" class="col-4 col-form-label">Berat</label> 
    <div class="col-8">
      <input id="berat" name="berat" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-4 col-form-label">Tinggi</label> 
    <div class="col-8">
      <input id="tinggi" name="tinggi" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="tensi" class="col-4 col-form-label">Tensi</label> 
    <div class="col-8">
      <input id="tensi" name="tensi" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="keterangan" class="col-4 col-form-label">Keterangan</label> 
    <div class="col-8">
      <input id="keterangan" name="keterangan" type="text" class="form-control" required="required">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form> 
       
    </div>
</main><br><br>


<?php
include_once('bottom.php');
?>