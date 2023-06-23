<?php
	//including the database connection file
	include_once '../database/config.php';


    $array = ["Kesalahan pengemudi","Gangguan dalam kendaraan","Kondisi jalan yang buruk","Cuaca ekstream"];
	if(isset($_POST['send'])) {	
        $penyebab = mysqli_real_escape_string($mysqli, $array[$_POST['penyebab'] - 1]);
        $tanggal = mysqli_real_escape_string($mysqli, $_POST['tanggal']);
        $jumlah = mysqli_real_escape_string($mysqli, $_POST['jumlah']);

        echo '<script>alert("Laporan berhasil dikirim!");</script>';
        // var_dump($judul, $kategori, $tanggal, $pesan);
        $result = mysqli_query($mysqli, "INSERT INTO data_kecelakaan(penyebab, tanggal, jumlah) VALUES('$penyebab',	'$tanggal', '$jumlah')");
        header("Location: olah_data.php");
        exit;
	}
?>
