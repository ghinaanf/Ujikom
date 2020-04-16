<?php
		include '../lib/libr.php';

		$id_petugas = $_GET['id_petugas'];

		if (empty($id_petugas)) header('location: ../index.php#datapetugas');

			$sql = "SELECT * FROM tb_petugas WHERE id_petugas = '$id_petugas' ";
			$query = $mysqli->query($sql);
			$petugas = $query->fetch_array();

		if (empty($petugas)) header('location: ../index.php#datapetugas');

		$form = 'Edit';
		$action ='editPetugas.php';

		include 'views/v_tambahPetugas.php';

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id_petugas				= @$_POST['id_petugas'];
		    $nip	            	= @$_POST['nip'];
            $nama_petugas		    = @$_POST['nama_petugas'];
            $status	            	= @$_POST['status'];

			$sql = "UPDATE tb_petugas SET id_petugas = '$id_petugas',
						nip = '$nip',
                        nama_petugas = '$nama_petugas',
						status = '$status' WHERE id_petugas = '$id_petugas' ";

			$mysqli->query($sql) or die ($mysqli->error);

			header('location: ../index.php#datapetugas');
		}

?>