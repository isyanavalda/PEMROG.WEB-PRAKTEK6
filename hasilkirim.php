<?php
if (empty($_POST ['nama'])) {
    header("Location:kosong.php"); // Jika nama tidak diinputkan, maka akan menuju form kosong.php
} else {
    echo "<center> Nama: ".$_POST ['nama']."</center><br>"; 
    // Menampilkan nama yang telah diinputkan pada form input.php dengan tulisan rata tengah
}
?>
