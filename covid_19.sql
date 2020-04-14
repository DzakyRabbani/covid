-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Apr 2020 pada 20.23
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid_19`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_background`
--

CREATE TABLE `tbl_background` (
  `background_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `update` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_background`
--

INSERT INTO `tbl_background` (`background_id`, `name`, `update`, `status`, `created_at`, `modified_at`) VALUES
(446, 'Saya pergi keluar rumah.', 1, 1, '2020-04-12 16:15:06', '2020-04-12 16:15:06'),
(447, 'Saya menggunakan transportasi umum : online, angkot, bus, taksi, kereta api.', 1, 1, '2020-04-12 16:16:08', '2020-04-12 16:16:08'),
(448, 'Saya tidak memakai masker pada saat berkumpul dengan orang lain.', 1, 1, '2020-04-12 16:16:46', '2020-04-12 16:16:46'),
(449, 'Saya berjabat tangan dengan orang lain.', 1, 1, '2020-04-12 16:17:41', '2020-04-12 16:17:41'),
(450, 'Saya tidak membersihkan tangan dengan hand sanitizer / tissue basah sebelum pegang kemudi mobil / motor.', 1, 1, '2020-04-12 16:18:17', '2020-04-12 16:18:17'),
(451, 'Saya menyentuh benda / uang yang juga disentuh orang lain.', 1, 1, '2020-04-12 16:20:40', '2020-04-12 16:20:40'),
(452, 'Saya tidak menjaga jarak 1,5 meter dengan orang lain,ketika : belanja, bekerja, belajar, ibadah.', 1, 1, '2020-04-12 16:21:33', '2020-04-12 16:21:33'),
(453, 'Saya makan diluar rumah (warung / restaurant).', 1, 0, '2020-04-12 16:22:02', '2020-04-12 16:22:02'),
(454, 'Saya tidak minum hangat & cuci tangan dengan sabun setelah tiba ditujuan.', 1, 1, '2020-04-12 16:22:38', '2020-04-12 16:22:38'),
(455, 'Saya berada di wilayah kelurahan tempat pasien tertular.', 1, 0, '2020-04-12 16:23:10', '2020-04-12 16:23:10'),
(456, 'Saya tidak pasang hand sanitizer di depan pintu masuk, untuk bersihkan tangan sebelum pegang gagang (handle) pintu masuk rumah.', 1, 0, '2020-04-12 16:24:25', '2020-04-12 16:24:25'),
(457, 'Saya tidak mencuci tangan dengan sabun setelah tiba di rumah.', 1, 0, '2020-04-12 16:25:25', '2020-04-12 16:25:25'),
(458, 'Saya tidak menyediakan : tissue basah / antiseptic, masker, sabun antiseptic bagi keluarga di rumah.', 1, 0, '2020-04-12 16:26:19', '2020-04-12 16:26:19'),
(459, 'Saya tidak segera merendam baju & celana bekas pakai di luar rumah kedalam air panas / sabun.', 1, 0, '2020-04-12 16:27:08', '2020-04-12 16:27:08'),
(460, 'Saya tidak segera mandi keramas setelah saya tiba di rumah.', 1, 0, '2020-04-12 16:27:37', '2020-04-12 16:27:37'),
(461, 'Saya tidak mensosialisasikan check list penilaian resiko pribadi ini kepada keluarga di rumah.', 1, 0, '2020-04-12 16:28:30', '2020-04-12 16:28:30'),
(462, 'Saya dalam sehari tidak kena cahaya matahari minimal 15 menit.', 1, 1, '2020-04-12 16:30:41', '2020-04-12 16:30:41'),
(463, 'Saya tidak jalan kaki / berolahraga minimal 30 menit setiap hari.', 1, 0, '2020-04-12 16:31:11', '2020-04-12 16:31:11'),
(464, 'Saya jarang minum vitamin C & E, dan kurang tidur.', 1, 0, '2020-04-12 16:31:35', '2020-04-12 16:31:35'),
(465, 'Usia saya diatas 60 tahun.', 1, 0, '2020-04-12 16:31:53', '2020-04-12 16:31:53'),
(466, 'Saya mempunyai penyakit : jantung / diabetes / gangguan pernafasan kronik.', 1, 0, '2020-04-12 16:32:37', '2020-04-12 16:32:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_akses` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `name`, `username`, `password`, `hak_akses`) VALUES
(1, 'Admin Covid 19', 'admincovid19', 'YWRtaW5jb3ZpZDE5', 'Admin'),
(4, 'Dzaky Rabbani', 'drabbani28@gmail.com', 'YW5ha3dpa3JhbWFoaXRz', 'Operator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_background`
--
ALTER TABLE `tbl_background`
  ADD PRIMARY KEY (`background_id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_background`
--
ALTER TABLE `tbl_background`
  MODIFY `background_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=467;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
