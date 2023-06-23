<?php

$databaseHost = 'localhost';
$databaseName = 'kecelakaan_database';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
$datas = mysqli_query($mysqli, "SELECT * FROM data_kecelakaan"); 
$groups = mysqli_query($mysqli, "SELECT penyebab, SUM(jumlah) AS jumlah, tanggal FROM data_kecelakaan GROUP BY penyebab DESC;"); 

 
?>
