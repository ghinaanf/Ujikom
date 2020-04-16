<?php
		include '../lib/libr.php';

		$id_kelas = $_GET['id_kelas'];
		if (!empty($id_kelas)) {
			$sql = "DELETE FROM tb_kelas WHERE id_kelas = '$id_kelas.'";
			$mysqli -> query($sql) or die ($mysqli -> error);
			if($mysqli->query($sql)) {
				echo 1;
			} else {
				echo 0;
			}
		}
?>