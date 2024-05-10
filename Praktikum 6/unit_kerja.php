<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM unit_kerja";
$unit_kerjas = $dbh->query($query)
?>

<head>

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="Template/css/styles.css" rel="stylesheet" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
   h3{
        font-family: poppins, sans-serif;
        font-weight: 700;
        text-align: center;
    }
</style>

<div class="container-fluid px-4">

        <div class= "d-flex mt-4">
        <a href="dashboard.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left" style="color: #ffffff;"></i></a> 
        <a href="create_kerja.php" class="btn btn-primary ms-auto "><strong>+Tambah Layanan</strong></a>
        </div>


<main>
    <div class="container-fluid px-4"><br>

        <h3>Jadwal Pelayanan</h3>
        
        </div>

<table class="table mt-5">
    <tr>
        
        <th>No</th>
        <th>Layanan</th>
        <th>Jam operasional</th>
        <th>Opsi</th>
       
    </tr>

    <?php 
    $no = 0;
    foreach ($unit_kerjas as $unit_kerja): 
    ?>


    <tr>

        <td><?php echo $no = $no + 1; ?></td>
        <td><?= $unit_kerja['unit_ruangan']?></td>
        <td><?= $unit_kerja['jam_operasional']?></td>
        
        <td>
            <a href="Kerja_edit.php?id=<?= $unit_kerja['id']?>" class="btn btn-primary">
            <i  class="fas fa-edit"></i>
            </a>
            <a href="kerja_delete.php?id=<?= $unit_kerja['id']?>" class="btn btn-danger">
            <i  class="fas fa-trash"></i>
            </a>
        </td>
       


    </tr>



    <?php endforeach; ?>
</table>




    </div>
</main> 



<?php
include_once('bottom.php');
?>