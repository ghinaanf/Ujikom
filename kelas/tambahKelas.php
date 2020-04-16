<?php
	include '../lib/libr.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$id_kelas				= @$_POST['id_kelas'];
		$nama_kelas	        	= @$_POST['nama_kelas'];
		$kmp_keahlian		    = @$_POST['kmp_keahlian'];

		if (empty($id_kelas)) {
			flash('error', 'Mohon masukan Id Kelas dengan benar');
		} else if (empty($nama_kelas)) {
			flash('error', 'Mohon masukan Nama Kelas dengan benar');
		} else if (empty($kmp_keahlian)){
            flash('error', 'Mohon masukan Kompetensi Keahlian dengan benar');
        } 

		$sql = "INSERT INTO tb_kelas (id_kelas, nama_kelas, kmp_keahlian) VALUES ('$id_kelas', '$nama_kelas', '$kmp_keahlian')";

		$mysqli->query($sql) or die ($mysqli->error);

		header('location: ../index.php#datakelas');
	}

	$success = flash('success');
	$error = flash('error');

	$form = 'Tambah';
	$action = 'tambahKelas.php';
	include 'views/v_tambahKelas.php';

?>