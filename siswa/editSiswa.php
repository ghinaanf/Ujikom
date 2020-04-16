<?php
		include '../lib/libr.php';

		$nisn = $_GET['nisn'];

		if (empty($nisn)) header('location: ../index.php');

			$sql = "SELECT * FROM tb_siswa WHERE nisn = '$nisn' ";
			$query = $mysqli->query($sql);
			$siswa = $query->fetch_array();

		if (empty($siswa)) header('location: ../index.php');

		$form = 'Edit';
		$action ='editSiswa.php';

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nisn				= @$_POST['nisn'];
		    $nis	        	= @$_POST['nis'];
		    $nama		        = @$_POST['nama'];
		    $id_kelas			= @$_POST['id_kelas'];
		    $alamat			    = @$_POST['alamat'];
		    $no_telp			= @$_POST['no_telp'];
		    $id_spp		        = @$_POST['id_spp'];

			$sql = "UPDATE tb_siswa SET nisn = '$nisn',
						nis = '$nis',
						nama = '$nama',
						id_kelas = '$id_kelas',
						alamat = '$alamat',
						no_telp = '$no_telp',
						id_spp = '$id_spp' WHERE nisn = '$nisn' ";

			$mysqli->query($sql) or die ($mysqli->error);

			header('location: ../index.php');
		}
	
	$sql = "SELECT * FROM tb_kelas";
	$listKelas = $mysqli->query($sql) or die ($mysqli->error);
	
	include 'views/v_tambahSiswa.php';

?>