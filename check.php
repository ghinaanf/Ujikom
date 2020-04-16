<?php

include 'lib/library.php';

cekLogin();

$nisn= $_POST['nisn']; //get the nama value from form
$q = "SELECT tb_pembayaranspp.id_pembayaran, tb_petugas.nama_petugas, tb_pembayaranspp.tgl_bayar, tb_pembayaranspp.bulan_dibayar, tb_pembayaranspp.tahun_dibayar, tb_siswa.id_spp, tb_pembayaranspp.jumlah_bayar
FROM tb_pembayaranspp, tb_siswa, tb_petugas
WHERE tb_pembayaranspp.nisn = tb_siswa.nisn AND tb_pembayaranspp.id_petugas = tb_petugas.id_petugas AND tb_siswa.nisn like '%$nisn%' "; //query to get the search result
$listRiwayat =  $mysqli->query($q); //execute the query $q

$r = "SELECT * FROM tb_siswa where nisn like '%$nisn%' ";
$listSiswa = $mysqli->query($r);

include 'views/v_siswa.php';
?>