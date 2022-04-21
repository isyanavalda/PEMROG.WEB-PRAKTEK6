<?php
include "inc.php";
echo $angka;
echo "<br>";
if ($angka==100){ // Melakukan seleksi looping
    echo "Memuaskan"; // Menampilkan teks Memuaskan jika nilai 100
} elseif ($angka<100&&$angka>=85){ // Melakukan seleksi looping
    echo "Sangat Baik"; // Menampilkan teks Memuaskan jika nilai <100 && nilai >=85
} elseif ($angka<85&&$angka>=70){ // Melakukan seleksi looping
    echo "Baik"; // Menampilkan teks Memuaskan jika nilai <85 && nilai >=70
} elseif ($angka<70&&$angka>=55){ // Melakukan seleksi looping
    echo "Cukup"; // Menampilkan teks Memuaskan jika nilai <70 && nilai >=55
} elseif ($angka<55&&$angka>=0){ // Melakukan seleksi looping
    echo "Kurang"; // Menampilkan teks Memuaskan jika nilai <55 && nilai >=0
}
?>
