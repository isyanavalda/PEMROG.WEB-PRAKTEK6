<!DOCTYPE html>
<html>
    <head>
        <title> Konversi Tipe </title>
    </head>
    <body>
        <?php 
        $a = 300.4; // Deklarasi variabel a
        echo $a; // Menampilkan teks 300.4
        echo "<br>"; // Ganti baris
        echo "tipe Double: ", doubleval($a), "<br>"; // Menampilkan teks tipe Double: 300.4
        echo "tipe Integer: ", intval($a), "<br>"; // Menampilkan teks tipe Integer: 300
        echo "tipe String: ", strval($a); // Menampilkan teks tipe String: 300.4
        ?>
    </body>
</html>
