<?php
		include '../lib/libr.php';

		$id_spp = $_GET['id_spp'];
		if (!empty($id_spp)) {
			$sql = "DELETE FROM tb_spp WHERE id_spp = '$id_spp.'";
			$mysqli -> query($sql) or die ($mysqli -> error);
			if($mysqli->query($sql)) {
				echo 1;
			} else {
				echo 0;
			}
		}
?>