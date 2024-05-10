<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM paramedik";
$paramediks = $dbh->query($query)
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
        <a href="create._paramedik.php" class="btn btn-primary ms-auto "><strong>+Tambah Paramedik</strong></a>
        </div>


<main>
    <div class="container-fluid px-4"><br>

        <h3>Data Paramedik</h3>
        
        </div>

<table class="table mt-5">
    <tr>

        <th>No</th>
        <th>Nama</th>
        <th>JK</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Kategori</th>
        <th>No. Telp</th>
        <th>Alamat</th>
        <th>Opsi</th>
        
    </tr>

    <?php 
    $no = 0;
    foreach ($paramediks as $paramedik): 
    ?>


    <tr>

        <td><?php echo $no = $no + 1; ?></td>
        <td><?= $paramedik['nama']?></td>
        <td><?= $paramedik['gender']?></td>
        <td><?= $paramedik['tmp_lahir']?></td>
        <td><?= $paramedik['tgl_lahir']?></td>
        <td><?= $paramedik['kategori']?></td>
        <td><?= $paramedik['telpon']?></td>
        <td><?= $paramedik['alamat']?></td>
        
      
        <td>
            <a href="paramedik_edit.php?id=<?= $paramedik['id']?>" class="btn btn-primary">
            <i  class="fas fa-edit"></i>
            </a>
            <a href="paramedik_delete.php?id=<?= $paramedik['id']?>" class="btn btn-danger">
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