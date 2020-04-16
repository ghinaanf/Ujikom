<?php
	include '../lib/libr.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nisn				= @$_POST['nisn'];
		$nis	        	= @$_POST['nis'];
		$nama		        = @$_POST['nama'];
		$id_kelas			= @$_POST['id_kelas'];
		$alamat			    = @$_POST['alamat'];
		$no_telp			= @$_POST['no_telp'];
		$id_spp		        = @$_POST['id_spp'];

		if (empty($nisn)) {
			flash('error', 'Mohon masukan NISN dengan benar');
		} else if (empty($nis)) {
			flash('error', 'Mohon masukan NIS dengan benar');
		} else if (empty($nama)){
            flash('error', 'Mohon masukan Nama Lengkap dengan benar');
        } else if (empty($id_kelas)){
            flash('error', 'Mohon masukan Kelas dengan benar');
        } else if (empty($alamat)){
            flash('error', 'Mohon masukan Alamat dengan benar');
        } else if (empty($no_telp)){
            flash('error', 'Mohon masukan No Telepon dengan benar');
        } else if (empty($id_spp)){
            flash('error', 'Mohon masukan Id Spp dengan benar');
        }

		$sql = "INSERT INTO tb_siswa (nisn, nis, nama, id_kelas, alamat, no_telp, id_spp) VALUES ('$nisn', '$nis', '$nama', '$id_kelas', '$alamat', '$no_telp', '$id_spp')";

		$mysqli->query($sql) or die ($mysqli->error);

		header('location: ../index.php');
	}

	$success = flash('success');
	$error = flash('error');
	
	$sql = "SELECT * FROM tb_kelas";
	$listKelas = $mysqli->query($sql) or die ($mysqli->error);

	$form = 'Tambah';
	$action = 'tambahSiswa.php';
	include 'views/v_tambahSiswa.php';

?>