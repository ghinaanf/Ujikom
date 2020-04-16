<?php
		include '../lib/libr.php';

		$id_petugas = $_GET['id_petugas'];
		if (!empty($id_petugas)) {
			$sql = "DELETE FROM tb_petugas WHERE id_petugas = '$id_petugas.'";
			$mysqli -> query($sql) or die ($mysqli -> error);
			if($mysqli->query($sql)) {
				echo 1;
			} else {
				echo 0;
			}
		}


?>