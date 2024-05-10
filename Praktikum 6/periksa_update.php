<?php
include_once('koneksi.php');

//tangkap data

$id = $_POST['id']; 
$nama = $_POST['nama'];                                                     
$tanggal = $_POST['tanggal'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$tensi = $_POST['tensi'];
$keterangan = $_POST['keterangan'];




//queryinsert
$query = "UPDATE periksa SET nama='$nama', tanggal='$tanggal', berat='$berat', tinggi='$tinggi', tensi='$tensi', keterangan='$keterangan' WHERE id_data='$id'";


//eksekusi query
if ($dbh->query($query)){
    header('location: periksa.php');
} else {
    echo "Gagal menyimpan data";
}











?> 