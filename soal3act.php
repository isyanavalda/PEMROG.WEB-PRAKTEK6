<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
        if (empty($_POST['namalengkap'])) { // Melakukan seleksi looping
            header("Location: soal3kosong.php"); // Jika nama lengkap tidak diisi, maka akan menuju form soal3kosong.php
        } else if (empty($_POST['npm'])) { // Melakukan seleksi looping
            header("Location: soal3kosong.php"); // Jika NPM tidak diisi, maka akan menuju form soal3kosong.php
        } else if (empty($_POST['ttl'])) { // Melakukan seleksi looping
            header("Location: soal3kosong.php"); // Jika Tempat, Tanggal Lahir tidak diisi, maka akan menuju form soal3kosong.php
        } else if (empty($_POST['alamat'])) { // Melakukan seleksi looping
            header("Location: soal3kosong.php"); // Jika alamat tidak diisi, maka akan menuju form soal3kosong.php
        } else if (empty($_POST['hobi'])) { // Melakukan seleksi looping
            header("Location: soal3kosong.php"); // Jika hobi tidak diisi, maka akan menuju form soal3kosong.php
        } else if (empty($_POST['email'])) { // Melakukan seleksi looping
            header("Location: soal3kosong.php"); // Jika email tidak diisi, maka akan menuju form soal3kosong.php
        } else { // Melakukan seleksi looping
            echo "<center> Nama Lengkap: ".$_POST['namalengkap']."</center><br>"; // Menampilkan teks nama lengkap di tengah halaman
            echo "<center> NPM : ".$_POST['npm']."</center><br>"; // Menampilkan teks NPM di tengah halaman
            echo "<center> Tempat, Tanggal Lahir : ".$_POST['ttl']."</center><br>"; // Menampilkan teks Tempat, Tanggal Lahir di tengah halaman
            echo "<center> Alamat : ".$_POST['alamat']."</center><br>"; // Menampilkan teks alamat di tengah halaman
            echo "<center> Hobi : ".$_POST['hobi']."</center><br>"; // Menampilkan teks hobi di tengah halaman
            echo "<center> Email : ".$_POST['email']."</center><br>"; // Menampilkan teks email di tengah halaman
            date_default_timezone_set("Asia/Jakarta"); // Setting zona waktu Asia/Jakarta
            echo "<center> Login pada ".date("D. d F Y G:i:s"."</center"); // Menampilkan teks Login pada waktu saat melakukan 
        }
        ?>
    </body>
</html>
