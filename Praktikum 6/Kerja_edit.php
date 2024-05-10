<?php
include_once('koneksi.php');
$unit_kerja= $dbh->query('SELECT * FROM paramedik');
$id = $_GET['id'];
$unit_kerjas = $dbh->query("SELECT * FROM unit_kerja WHERE id = $id")->fetch();

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
        <a href="unit_kerja.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left" style="color: #ffffff;"></i></a> 
        </div>
<body>
<main>
    <div class="container-fluid px-4">
        <h3 class="mt-4">Edit Jadwal Layanan Puskesmas</h3><br><br>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="kerja_update.php" method="post">
  <input type="hidden" name="id" value="<?= $unit_kerjas['id']?>">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Unit Ruangan</label> 
    <div class="col-8">
      <input id="unit_ruangan" name="unit_ruangan" type="text" class="form-control" required="required" value="<?= $unit_kerjas['unit_ruangan']?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Jam Operasional</label> 
    <div class="col-8">
      <input id="jam_operasional" name="jam_operasional" type="text" class="form-control" required="required" value="<?= $unit_kerjas['jam_operasional']?>">
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
<br><br><br><br><br><br><br><br><br>


<?php
include_once('bottom.php');
?>