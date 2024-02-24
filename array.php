<?php
// bikin array mahasiswa
$Mahasiswa = ["adel", "wahyu", "anggun" ];

// tampilin data pertama adel
echo $Mahasiswa[0];
echo "<br>";

// tampilin semua data array
foreach ($Mahasiswa as $Mhs) {
    echo $Mhs . "<br>";
}
