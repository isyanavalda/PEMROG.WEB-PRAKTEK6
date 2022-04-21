<!DOCTYPE html>
<html>
<head>
    <title> Pemrograman PHP dengan Array </title>
</head>
<body>
    <?php
    // Penulisan array dapat dibuat seperti berikut:
    $nama[] = "Choirila Vernanda";
    $nama[] = "Isyana";
    $nama[] = "Valda";
    echo $nama[1] . $nama[2] . $nama[0]; // Menampilkan teks "Isyana Valda Choirila Vernanda"
    echo "<br>"; // Ganti baris
    // Menghitung jumlah elemen array
    $jum_array = count($nama);
    echo "jumlah elemen array = ". $jum_array; // Menampilkan teks "jumlah elemen array = 3"
    ?>
</body>
</html>
