<?php
		include '../lib/libr.php';

		$id_kelas = $_GET['id_kelas'];

		if (empty($id_kelas)) header('location: ../index.php#datakelas');

			$sql = "SELECT * FROM tb_kelas WHERE id_kelas = '$id_kelas' ";
			$query = $mysqli->query($sql);
			$kelas = $query->fetch_array();

		if (empty($kelas)) header('location: ../index.php#datakelas');

		$form = 'Edit';
		$action ='editKelas.php';

		include 'views/v_tambahKelas.php';

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id_kelas				= @$_POST['id_kelas'];
		    $nama_kelas	        	= @$_POST['nama_kelas'];
		    $kmp_keahlian		    = @$_POST['kmp_keahlian'];

			$sql = "UPDATE tb_kelas SET id_kelas = '$id_kelas',
						nama_kelas = '$nama_kelas',
						kmp_keahlian = '$kmp_keahlian' WHERE id_kelas = '$id_kelas' ";

			$mysqli->query($sql) or die ($mysqli->error);

			header('location: ../index.php#datakelas');
		}

?>