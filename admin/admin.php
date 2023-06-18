<?php

include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM data_kecelakaan	 ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<head>	
	<title>SISKA | Admin</title>
</head>

<body>
	<div class="container m-5">
		<div style="text-align: left;">
			<a href="add.html"><button type="button" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i>   Tambah Data</button></a><br/><br/>
		</div>
		<h5 class="fw-bold mt-3 mb-3"># Data Jumlah Korban Kecelakaan Lalu Lintas di Wilayah Polda Jawa Tengah Tahun (Jiwa), 2018-2020</h5>	 
		<table class="table table-info table-bordered">
			<thead>
				<tr>
					<th scope="col">Tahun</th>
					<th scope="col">Korban Meninggal Dunia</th>
					<th scope="col">Korban Luka Berat</th>
					<th scope="col">Korban Luka Ringan</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					while($res = mysqli_fetch_array($result)) { 		
						echo "<tr>";
						echo "<td>".$res['tahun']."</td>";
						echo "<td>".$res['meninggal']." orang"."</td>";
						echo "<td>".$res['luka_berat']." orang"."</td>";
						echo "<td>".$res['luka_ringan']." orang"."</td>";
						echo "<td><a href=\"edit.php?id=$res[id]\"><i class=\"fa fa-pencil\" aria-hidden=\"true\" alt=\"Edit\"></i></a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Ups, Yakin Data Mau dihapus?')\"><i class=\"fa fa-trash\" aria-hidden=\"true\" alt=\"Delete\"></i></a></td>";		
						echo "<tr>";
					}
				?>
			</tbody>
		</table>
		<div style="text-align: right;">
			<a href="../index.php"><button type="button" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i>   Keluar</button></a><br/><br/>
		</div>
	</div>
</body>
</html>
