<?php
	include '../lib/libr.php';

	$nisn = $_GET['nisn'];

		if (empty($nisn)) header('location: ../index.php#datapetugas');

			$sql = "SELECT * FROM tb_siswa WHERE nisn = '$nisn' ";
			$query = $mysqli->query($sql);
			$pembayaran = $query->fetch_array();

		if (empty($pembayaran)) header('location: ../index.php#datapetugas');

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$id_pembayaran				= @$_POST['id_pembayaran'];
		$id_petugas	        	    = @$_POST['id_petugas'];
		$nisn		                = @$_POST['nisn'];
		$tgl_bayar			        = @$_POST['tgl_bayar'];
		$bulan_dibayar			    = @$_POST['bulan_dibayar'];
		$tahun_dibayar			    = @$_POST['tahun_dibayar'];
        $id_spp		                = @$_POST['id_spp'];
        $jumlah_bayar		        = @$_POST['jumlah_bayar'];

		if (empty($id_pembayaran)) {
			flash('error', 'Mohon masukan Id Pembayaran dengan benar');
		} else if (empty($id_petugas)) {
			flash('error', 'Mohon masukan Id Petugas dengan benar');
		} else if (empty($nisn)){
            flash('error', 'Mohon masukan NISN dengan benar');
        } else if (empty($tgl_bayar)){
            flash('error', 'Mohon masukan Tanggal Bayar dengan benar');
        } else if (empty($bulan_dibayar)){
            flash('error', 'Mohon masukan Bulan dibayar dengan benar');
        } else if (empty($tahun_dibayar)){
            flash('error', 'Mohon masukan Tahun dibayar dengan benar');
        } else if (empty($id_spp)){
            flash('error', 'Mohon masukan Id Spp dengan benar');
        } else if (empty($jumlah_dibayar)){
            flash('error', 'Mohon masukan Jumlah dibayar dengan benar');
        }

		$sql = "INSERT INTO tb_pembayaranspp (id_pembayaran, id_petugas, nisn, tgl_bayar, bulan_dibayar, tahun_dibayar, id_spp, jumlah_bayar) VALUES ('$id_pembayaran', '$id_petugas', '$nisn', '$tgl_bayar', '$bulan_dibayar', '$tahun_dibayar', '$id_spp', '$jumlah_bayar')";

		$mysqli->query($sql) or die ($mysqli->error);

		header('location: ../index.php#riwayat');
	}

	$success = flash('success');
	$error = flash('error');
		
	$sql = "SELECT * FROM tb_petugas";
	$listPetugas = $mysqli->query($sql) or die ($mysqli->error);

	$form = 'Tambah';
	$action = 'tambahPembayaran.php';
	include 'views/v_pembayaranspp.php';

?>