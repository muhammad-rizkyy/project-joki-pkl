-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Feb 2024 pada 04.16
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ekomandan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_permohonan`
--

CREATE TABLE `data_permohonan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `rencana` varchar(20) NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `alamat_pembangunan` varchar(50) NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL,
  `usaha` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_permohonan`
--

INSERT INTO `data_permohonan` (`id`, `tanggal`, `jenis`, `rencana`, `nama_lengkap`, `alamat`, `alamat_pembangunan`, `nomor_telepon`, `usaha`, `status`) VALUES
(2, '2024-01-11', '4', 'k', 'alif fadhillah', 'Komp. BPI Jln. Bukit Raya Blok CD No.04', 'Komp. BPI Jln. Bukit Raya Blok CD No.04', '089692001360', 'apdla', '5'),
(3, '2024-01-05', '1', 'a', 'amat', 'a yani', 'binuang', '09237492041', 'seafood', '5'),
(4, '2024-01-24', '1', 'a', 'udin', 'bjm', 'tanjung', '0893749821', 'kolam', '2'),
(5, '2024-01-18', '3', 'p', 'budi', 'bjb', 'pelaihari', '082364725739', 'perumahan', '2'),
(6, '2024-01-08', '1', 'b', 'ariel', 'mtp', 'mataraman', '084286523134', 'event', '1'),
(7, '2024-01-23', '3', 'i', 'agus', 'barabai', 'pagat', '086512458764', 'tol barabai', '4'),
(8, '2024-01-05', '4', 'n', 'adit', 'rantau', 'margasari', '082367458976', 'parkiran', '3'),
(9, '2024-02-10', '1', 'a', 'rizky', 'tapin', 'margasari', '082367549876', 'pasar', '1'),
(10, '2024-01-27', '3', 'f', 'arifin', 'kota rantau', 'bypass', '0854123470', 'terminal', '3'),
(11, '2024-01-26', '3', 'o', 'syamsul', 'a yani', 'pasar rantau', '0865431267', 'parkiran', '4'),
(12, '2024-02-26', '1', 'j', 'Syarif', 'Banjarmasin', 'Kotabaru', '088989898989', 'Dermaga', '5'),
(13, '2024-02-26', '1', 'j', 'Riko', 'Bandung', 'Banjarmasin', '088888888888', 'Dermaga', '5'),
(14, '2024-02-26', '1', 'r', 'Riko', 'Surabaya', 'Banjarmasin', '087777777777', 'Hotel', '5'),
(15, '2024-02-26', '3', 'k', 'Dadang', 'Banjarbaru', 'Kotabaru', '087777777777', 'Hotel', '4'),
(16, '2024-02-26', '3', 'i', 'Riko', 'Banjarmasin', 'Banjarmasin', '088888888888', 'Jalan Tol', '4'),
(17, '2024-02-26', '3', 'f', 'Syarif', 'Surabaya', 'Banjarmasin', '088989898989', 'Rumah sakit', '4'),
(18, '2024-02-26', '3', 'm', 'Riko', 'Surabaya', 'Banjarmasin', '087777777777', 'Terminal', '4'),
(19, '2024-02-26', '1', 'o', 'Amat', 'Bandung', 'Banjarmasin', '089999999999', 'Tempat Parkir', '3'),
(20, '2024-02-26', '1', 'd', 'Dadang', 'Jakarta', 'Kotabaru', '089999999999', 'Hotel', '3'),
(21, '2024-02-26', '3', 'r', 'Dani', 'Bandung', 'Banjarmasin', '087777777777', 'Hotel', '3'),
(22, '2024-02-26', '3', 'j', 'Dani', 'Jakarta', 'Kotabaru', '089999999999', 'Dermaga', '3'),
(23, '2024-02-26', '2', 'o', 'Riko', 'Martapura', 'Banjarmasin', '088888888888', 'Restaurant', '5'),
(24, '2024-02-26', '1', 'c', 'Alif', 'Banjarbaru', 'Banjarmasin', '088989898989', 'gudang', '2'),
(25, '2024-02-26', '3', 'r', 'Irfan', 'Kotabaru', 'Kotabaru', '088989898989', 'Hotel', '2'),
(26, '2024-02-26', '3', 'e', 'Muhammad Rizky', 'Kotabaru', 'Kotabaru', '089999999999', 'Gedung Sekolah', '2'),
(27, '2024-02-26', '2', 'h', 'Dadang', 'Jakarta', 'Kotabaru', '088888888888', 'Perumahan', '2'),
(28, '2024-02-26', '1', 'a', 'Syarif', 'Surabaya', 'Banjarmasin', '088888888888', 'Minimarket', '1'),
(29, '2024-02-26', '1', 'c', 'Muhammad Rizky', 'Bandung', 'Kotabaru', '084444444444', 'Ruko', '1'),
(30, '2024-02-26', '3', 'p', 'Alif', 'Jakarta', 'Bandung', '085656565656', 'SPBU', '1'),
(31, '2024-02-26', '1', 'd', 'Muhammad Rizky', 'Kotabaru', 'Kotabaru', '084444444444', 'Hotel', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_rencana`
--

CREATE TABLE `jenis_rencana` (
  `id` int(11) NOT NULL,
  `kd_jenis` char(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_rencana`
--

INSERT INTO `jenis_rencana` (`id`, `kd_jenis`, `keterangan`) VALUES
(5, '1', 'Pusat Kegiatan'),
(6, '2', 'Perumahan dan Permukiman'),
(7, '3', 'Infrastruktur'),
(8, '4', 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rencana_pembangunan`
--

CREATE TABLE `rencana_pembangunan` (
  `id` int(11) NOT NULL,
  `kd_rencana` char(50) NOT NULL DEFAULT '',
  `keterangan` varchar(50) NOT NULL,
  `jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rencana_pembangunan`
--

INSERT INTO `rencana_pembangunan` (`id`, `kd_rencana`, `keterangan`, `jenis`) VALUES
(1, 'a', 'kegiatan perdagangan dan perbelanjaan', 1),
(2, 'b', 'kegiatan perkantoran', 1),
(3, 'c', 'kegiatan industri dan pergudangan', 1),
(4, 'd', 'kegiatan pariwisata', 1),
(5, 'e', 'fasilitas pendidikan', 1),
(6, 'f', 'fasilitas pelayanan umum', 1),
(7, 'g', 'perumahan dan permukiman', 2),
(8, 'h', 'rumah susun dan apartemen', 2),
(9, 'i', 'akses ke dan dari jalan tol', 3),
(10, 'j', 'pelabuhan', 3),
(11, 'k', 'bandar udara', 3),
(12, 'l', 'terminal', 3),
(13, 'm', 'stasiun kereta', 3),
(14, 'n', 'pool kendaraan', 3),
(15, 'o', 'fasilitas parkir untuk umum', 3),
(16, 'p', 'stasiun pengisian bahan bakar (SPBU)', 4),
(17, 'q', 'hotel', 4),
(18, 'r', 'gedung pertemuan', 4),
(19, 's', 'restaurant', 4),
(20, 't', 'fasilitas olahraga (indoor atau outdoor)', 4),
(21, 'u', 'kawasan TOD (transit oriented development)', 4),
(22, 'v', 'asrama', 4),
(23, 'w', 'ruko', 4),
(24, 'x', 'jalan layang (flyover)', 4),
(25, 'y', 'lintas bawah (underpass)', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `kd_status` char(50) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id`, `kd_status`, `keterangan`) VALUES
(6, '1', 'Belum ditanggapi'),
(7, '2', 'Survei'),
(8, '3', 'Expose'),
(9, '4', 'Revisi'),
(10, '5', 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator'),
(6, 'operator', '4b583376b2767b923c3e1da60d10de59', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_permohonan`
--
ALTER TABLE `data_permohonan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_rencana`
--
ALTER TABLE `jenis_rencana`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rencana_pembangunan`
--
ALTER TABLE `rencana_pembangunan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_permohonan`
--
ALTER TABLE `data_permohonan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `jenis_rencana`
--
ALTER TABLE `jenis_rencana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `rencana_pembangunan`
--
ALTER TABLE `rencana_pembangunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
