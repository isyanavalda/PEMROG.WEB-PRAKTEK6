<!DOCTYPE html>
<html>
    <head>
        <title> Tanggalan </title>
    </head>
    <body>
        <?php 
        date_default_timezone_set('Asia/Jakarta'); // Set zona waktu Asia/Jakarta

        // Menampilkan tanggal dan waktu pada server
        echo date("m-F-Y, g:i:s a"); ?>
    </body>
</html>
