<?php
	include '../lib/libr.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$id_petugas				= @$_POST['id_petugas'];
		$nip		        	= @$_POST['nip'];
		$nama_petugas		    = @$_POST['nama_petugas'];
		$status 				= @$_POST['status'];

		if (empty($id_petugas)) {
			flash('error', 'Mohon masukan Id Kelas dengan benar');
		} else if (empty($nip)) {
			flash('error', 'Mohon masukan NIP dengan benar');
		} else if (empty($nama_petugas)){
            flash('error', 'Mohon masukan Nama Petugas dengan benar');
        } else if (empty($status)){
			flash('error', 'Mohon masukan Status dengan benar');
		}

		$sql = "INSERT INTO tb_petugas (id_petugas, nip, nama_petugas, status) VALUES ('$id_petugas', '$nip', '$nama_petugas', '$status')";

		$mysqli->query($sql) or die ($mysqli->error);

		header('location: ../index.php#datapetugas');
	}

	$success = flash('success');
	$error = flash('error');

	$form = 'Tambah';
	$action = 'tambahKelas.php';
	include 'views/v_tambahPetugas.php';

?>