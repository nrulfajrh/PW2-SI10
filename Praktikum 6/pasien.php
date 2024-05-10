<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM pasien";
$pasiens = $dbh->query($query)
?>

<head>

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="Template/css/styles.css" rel="stylesheet" />

</head>

<style>
    h3{
        font-family: poppins, sans-serif;
        font-weight: 700;
        text-align: center;
    }
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container-fluid px-4">

        <div class= "d-flex mt-4">
        <a href="dashboard.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left" style="color: #ffffff;"></i><strong></strong></a> 
        <a href="pasien_create.php" class="btn btn-primary ms-auto "><strong>+Tambah Pasien</strong></a>
        </div>


<main>
    <div class="container-fluid px-4"><br>
        <h3>Daftar Pasien</h3>
        

<table class="table mt-5">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>JK</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Opsi</th>
    </tr>

    <?php 
    $no = 0;
    foreach ($pasiens as $pasien): 
    ?>


    <tr>

        <td><?php echo $no = $no + 1; ?></td>
        <td><?= $pasien['nama']?></td>
        <td><?= $pasien['tmp_lahir']?></td>
        <td><?= $pasien['tgl_lahir']?></td>
        <td><?= $pasien['gender']?></td>
        <td><?= $pasien['alamat']?></td>
        <td><?= $pasien['email']?></td>
       

        <td>
            <a href="pasien_edit.php?id=<?= $pasien['id']?>" class="btn btn-primary">
            <i  class="fas fa-edit"></i>
            </a>
            <a href="pasien_delete.php?id=<?= $pasien['id']?>" class="btn btn-danger">
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