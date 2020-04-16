<?php
		include '../lib/libr.php';

		$id_spp = $_GET['id_spp'];

		if (empty($id_spp)) header('location: ../index.php#dataspp');

			$sql = "SELECT * FROM tb_spp WHERE id_spp = '$id_spp' ";
			$query = $mysqli->query($sql);
			$spp = $query->fetch_array();

		if (empty($spp)) header('location: ../index.php#dataspp');

		$form = 'Edit';
		$action ='editSPP.php';

		include 'views/v_tambahSPP.php';

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id_spp				= @$_POST['id_spp'];
		    $tahun	        	= @$_POST['tahun'];
		    $nominal		    = @$_POST['nominal'];

			$sql = "UPDATE tb_spp SET id_spp = '$id_spp',
						tahun = '$tahun',
						nominal = '$nominal' WHERE id_spp = '$id_spp' ";

			$mysqli->query($sql) or die ($mysqli->error);

			header('location: ../index.php#dataspp');
		}

?>