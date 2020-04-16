-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 13.31
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pembayaranspp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(15) NOT NULL,
  `kmp_keahlian` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`, `kmp_keahlian`) VALUES
(110, 'XII RPL 2', 'Rekayasa Perangkat Lunak'),
(111, 'XII RPL 1', 'Rekayasa Perangkat Lunak'),
(112, 'XII RPL 3', 'Rekayasa Perangkat Lunak'),
(114, 'XII TKJ', 'Teknik jaringan Komputer'),
(115, 'XII MM', 'Multimedia'),
(116, 'XII AVI 1', 'Teknik Elektronika Audio Video'),
(117, 'XII AVI 2', 'Teknik Elektronika Audio Video'),
(118, 'XII AVI 3', 'Teknik Elektronika Audio Video');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `level` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`username`, `password`, `status`, `level`) VALUES
('admin', '123', 'admin', 1),
('petugas', '55555', 'petugas', 2),
('siswa', 'bisa', 'siswa', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaranspp`
--

CREATE TABLE `tb_pembayaranspp` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(10) NOT NULL,
  `nisn` int(10) NOT NULL,
  `tgl_bayar` varchar(15) NOT NULL,
  `bulan_dibayar` varchar(15) NOT NULL,
  `tahun_dibayar` varchar(5) NOT NULL,
  `id_spp` int(10) NOT NULL,
  `jumlah_bayar` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pembayaranspp`
--

INSERT INTO `tb_pembayaranspp` (`id_pembayaran`, `id_petugas`, `nisn`, `tgl_bayar`, `bulan_dibayar`, `tahun_dibayar`, `id_spp`, `jumlah_bayar`) VALUES
(1009282, 100011, 238268, '2019-06-16', 'Juni', '2019', 1082736, 300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `nip` int(18) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `nip`, `nama_petugas`, `status`) VALUES
(100011, 1108287878, 'Victorique', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nisn` int(10) NOT NULL,
  `nis` int(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `no_telp` char(13) NOT NULL,
  `id_spp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`nisn`, `nis`, `nama`, `id_kelas`, `alamat`, `no_telp`, `id_spp`) VALUES
(238268, 1718117161, 'Ghina Aulia Nur Fadhila', 110, 'Komplek. GBA 2 Blok G1 No.10', '085703232072', 1082736),
(238275, 1718117171, 'Nassya Putri Riyani', 110, 'Jl. Parakan Elok', '081234675778', 1129273);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_spp`
--

CREATE TABLE `tb_spp` (
  `id_spp` int(10) NOT NULL,
  `tahun` int(5) NOT NULL,
  `nominal` int(25) NOT NULL,
  `sisa` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_spp`
--

INSERT INTO `tb_spp` (`id_spp`, `tahun`, `nominal`, `sisa`) VALUES
(1082736, 2019, 3600000, NULL),
(1129273, 2019, 3600000, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `tb_pembayaranspp`
--
ALTER TABLE `tb_pembayaranspp`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_spp` (`id_spp`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `nisn` (`nisn`);

--
-- Indeks untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_spp` (`id_spp`);

--
-- Indeks untuk tabel `tb_spp`
--
ALTER TABLE `tb_spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_pembayaranspp`
--
ALTER TABLE `tb_pembayaranspp`
  ADD CONSTRAINT `tb_pembayaranspp_ibfk_1` FOREIGN KEY (`id_spp`) REFERENCES `tb_spp` (`id_spp`),
  ADD CONSTRAINT `tb_pembayaranspp_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`),
  ADD CONSTRAINT `tb_pembayaranspp_ibfk_3` FOREIGN KEY (`nisn`) REFERENCES `tb_siswa` (`nisn`);

--
-- Ketidakleluasaan untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `tb_siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`),
  ADD CONSTRAINT `tb_siswa_ibfk_2` FOREIGN KEY (`id_spp`) REFERENCES `tb_spp` (`id_spp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
