<?php
	$db_host = "localhost";
	$db_user = "id17468113_tabel_siswa1";
	$db_pass = "Tabel_siswa1190";
	$db_name = "id17468113_db_siswa";

	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	if (!$conn) {
		echo 'Not Connected' .mysqli_connect_error();
	}
?>