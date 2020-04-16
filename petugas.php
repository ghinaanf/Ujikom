<?php
    include 'lib/library.php';

    cekLogin();

    $sql4 = 'SELECT * FROM tb_spp';
    $listSPP = $mysqli->query($sql4);

    $sql5 = "SELECT tb_siswa.id_spp, tb_siswa.nisn, tb_siswa.nama, tb_kelas.nama_kelas, tb_spp.tahun, tb_spp.nominal, tb_spp.sisa
             FROM tb_siswa, tb_kelas, tb_spp
             WHERE tb_siswa.id_kelas = tb_kelas.id_kelas AND tb_siswa.id_spp = tb_spp.id_spp";

    $listData = $mysqli->query($sql5);

    $sql6 = 'SELECT tb_pembayaranspp.id_pembayaran, tb_petugas.nama_petugas, tb_siswa.nama, tb_pembayaranspp.tgl_bayar, tb_pembayaranspp.bulan_dibayar, tb_pembayaranspp.tahun_dibayar, tb_siswa.id_spp, tb_pembayaranspp.jumlah_bayar
             FROM tb_pembayaranspp, tb_siswa, tb_petugas
             WHERE tb_pembayaranspp.nisn = tb_siswa.nisn AND tb_pembayaranspp.id_petugas = tb_petugas.id_petugas';
    $listRiwayat = $mysqli->query($sql6);

    include 'views/v_petugas.php';

    ?>