<?php
		include '../lib/libr.php';

		$nisn = $_GET['nisn'];
		if (!empty($nisn)) {
			$sql = "DELETE FROM tb_siswa WHERE nisn = '$nisn.'";
			$mysqli -> query($sql) or die ($mysqli -> error);
			if($mysqli->query($sql)) {
				echo 1;
			} else {
				echo 0;
			}
		}
?>