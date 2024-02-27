<?php
// membuat variabel
$mahasiswa1 = ['Nurul', 'Sistem Informasi', 001, [3.5, 4, 3.6]];

//panggil variabel
echo 'Nama : '. $mahasiswa1[0] . "<br>"; //concatenation
echo "Jurusan : $mahasiswa1[1] <br>"; //string interpolation
echo "IPS Semester 1 : " . $mahasiswa1[3][0];


