<?php
	error_reporting(0);
	include ("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Halaman Siswa
	</title>
	<link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
	<div class="nav">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
		</ul>
	</div>
	<center>
	<h2>Data Siswa</h2>
	<br>
	<form action="" method="POST">
		<input type="text" name="query" placeholder="Cari Siswa" / >
		<input type="submit" name="cari" value="Cari" style="background-color: black; color: white;" / >
	</form><br>


	<table border="1" cellspacing="1" width="500px">
		<tr style="font-weight: bold; background: black; color: white; text-align:center; height: 40px; ">
			<td>NO</td>
			<td>NIS</td>
			<td>Nama</td>
			<td>Tempat Lahir</td>
		</tr>
		<?php
		$no = 1;

		$query = $_POST['query'];
		if ($query != '') {
			$select = mysqli_query($conn, "SELECT * FROM tb_siswa WHERE nis LIKE'%".$query."%' OR nama LIKE'%".$query."%' OR
			 t_lahir LIKE'%".$query."%'");

		}else{
			$select = mysqli_query($conn, "SELECT * FROM tb_siswa" );
		}
		if(mysqli_num_rows($select)){

		while($baris = mysqli_fetch_array($select)){

		?>

		<tr style="height: 30px;">
			<td><?php echo $no++ ?></td>
			<td><?php echo $baris['nis']?></td>
			<td><?php echo $baris['nama']?></td>
			<td><?php echo $baris['t_lahir']?></td>
		</tr>
		<?php } } else {
			echo '<tr><td colspan ="4">Tidak ada siswa</td><tr>';
		} ?>
	</table>
</center>
</body>
</html>