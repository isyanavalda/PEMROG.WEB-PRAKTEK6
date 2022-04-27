<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
        if(empty($_POST['nama'])) { // Melakukan seleksi looping
            header("Location: soal1kosong.php"); // Jika tidak ada nama yang diinputkan maka akan menuju form soal1kosong.php
        } else if (empty($_POST['email'])) { // Melakukan seleksi looping
            header("Location: soal1kosong.php"); // Jika tidak ada email yang diinputkan maka akan menuju form soal1kosong.php
        } else { // Melakukan seleksi looping
            echo "<center> Nama: ".$_POST['nama']."</center><br>"; // Menampilkan teks nama yang telah diinputkan pada tengah halaman
            echo "<center> Email: ".$_POST['email']."</center><br>"; // Menampilkan teks email yang telah diinputkan pada tengah halaman
            date_default_timezone_set("Asia/Jakarta"); // Setting zona waktu Asia/Jakarta
            echo "<center>".date("d F Y"."</center><br>"); // Menampilkan waktu tanggal, bulan, tahun
            echo "<center>".date("g:i:s a"."</center><br>"); // Menampilkan waktu jam, menit, detik
        }
        ?>
    </body>
</html>
