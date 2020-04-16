<?php
	include '../lib/libr.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$id_spp				= @$_POST['id_spp'];
		$tahun	        	= @$_POST['tahun'];
		$nominal		    = @$_POST['nominal'];

		if (empty($id_spp)) {
			flash('error', 'Mohon masukan Id Kelas dengan benar');
		} else if (empty($tahun)) {
			flash('error', 'Mohon masukan Nama Kelas dengan benar');
		} else if (empty($nominal)){
            flash('error', 'Mohon masukan Kompetensi Keahlian dengan benar');
        } 

		$sql = "INSERT INTO tb_spp (id_spp, tahun, nominal) VALUES ('$id_spp', '$tahun', '$nominal')";

		$mysqli->query($sql) or die ($mysqli->error);

		header('location: ../index.php#dataspp');
	}

	$success = flash('success');
	$error = flash('error');

	$form = 'Tambah';
	$action = 'tambahSPP.php';
	include 'views/v_tambahSPP.php';

?>