-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Sep 2021 pada 18.25
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technical_test`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `foto`) VALUES
(1, 'ghozyan', '50661b963b7c3913b3f02d6c9e876c5b', 'Ghozyan', 'profil2.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa_pasien`
--

CREATE TABLE `diagnosa_pasien` (
  `diagnosapasien_id` int(11) NOT NULL,
  `kunjungan_id` int(11) DEFAULT NULL,
  `m_dokter_id` int(255) DEFAULT NULL,
  `m_diagnosa_id` int(11) DEFAULT NULL,
  `diagnosapasien_jenis` varchar(255) DEFAULT NULL COMMENT 'UTAMA , SEKUNDER',
  `diagnosapasien_kasus` varchar(255) DEFAULT NULL COMMENT 'LAMA ,BARU'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `diagnosa_pasien`
--

INSERT INTO `diagnosa_pasien` (`diagnosapasien_id`, `kunjungan_id`, `m_dokter_id`, `m_diagnosa_id`, `diagnosapasien_jenis`, `diagnosapasien_kasus`) VALUES
(1, 1, 4, 2, 'UTAMA', 'LAMA'),
(2, 1, 1, 1, 'SEKUNDER', 'BARU'),
(3, 2, 2, 1, 'UTAMA', 'BARU'),
(4, 3, 3, 1, 'UTAMA', 'BARU'),
(5, 4, 4, 4, 'UTAMA', 'BARU'),
(6, 5, 3, 1, 'UTAMA', 'BARU'),
(7, 5, 1, 6, 'SEKUNDER', 'BARU'),
(8, 7, 2, 7, 'UTAMA', 'LAMA'),
(9, 8, 3, 1, 'UTAMA', 'BARU'),
(10, 10, 1, 2, 'UTAMA', 'BARU'),
(11, 11, 2, 3, 'UTAMA', 'BARU'),
(12, 11, 3, 2, 'SEKUNDER', 'BARU'),
(13, 13, 4, 1, 'UTAMA', 'BARU'),
(14, 14, 2, 2, 'UTAMA', 'BARU'),
(15, 15, 4, 10, 'UTAMA', 'LAMA'),
(16, 16, 4, 4, 'UTAMA', 'BARU'),
(17, 17, 1, 9, 'UTAMA', 'BARU'),
(18, 18, 2, 1, 'UTAMA', 'BARU'),
(19, 19, 3, 2, 'UTAMA', 'LAMA'),
(20, 20, 4, 3, 'UTAMA', 'BARU'),
(21, 21, 5, 9, 'UTAMA', 'BARU'),
(22, 22, 1, 9, 'UTAMA', 'LAMA'),
(23, 23, 2, 1, 'UTAMA', 'BARU'),
(24, 24, 3, 9, 'UTAMA', 'BARU'),
(25, 24, 1, 6, 'UTAMA', 'BARU'),
(26, 26, 2, 6, 'UTAMA', 'LAMA'),
(27, 27, 3, 7, 'UTAMA', 'BARU'),
(28, 28, 4, 3, 'UTAMA', 'BARU'),
(29, 29, 5, 5, 'UTAMA', 'BARU'),
(30, 29, 1, 1, 'SEKUNDER', 'BARU'),
(31, 31, 1, 7, 'UTAMA', 'BARU'),
(32, 32, 2, 2, 'UTAMA', 'LAMA'),
(33, 33, 3, 1, 'UTAMA', 'BARU'),
(34, 34, 4, 1, 'UTAMA', 'BARU'),
(35, 35, 5, 1, 'UTAMA', 'BARU'),
(36, 36, 1, 2, 'UTAMA', 'BARU'),
(37, 37, 2, 1, 'UTAMA', 'BARU'),
(38, 38, 3, 1, 'UTAMA', 'BARU'),
(39, 39, 1, 5, 'UTAMA', 'BARU'),
(40, 40, 2, 5, 'UTAMA', 'BARU'),
(41, 41, 3, 1, 'UTAMA', 'BARU'),
(42, 42, 4, 1, 'UTAMA', 'BARU'),
(43, 43, 5, 1, 'UTAMA', 'LAMA'),
(44, 44, 4, 7, 'UTAMA', 'BARU'),
(45, 45, 5, 1, 'UTAMA', 'BARU'),
(46, 46, 1, 2, 'UTAMA', 'BARU'),
(47, 47, 1, 2, 'UTAMA', 'BARU'),
(48, 48, 2, 2, 'UTAMA', 'BARU'),
(49, 49, 3, 1, 'UTAMA', 'BARU'),
(50, 50, 4, 7, 'UTAMA', 'BARU'),
(51, 51, 5, 1, 'UTAMA', 'BARU'),
(52, 52, 1, 7, 'UTAMA', 'BARU'),
(53, 53, 2, 5, 'UTAMA', 'BARU'),
(54, 54, 3, 1, 'UTAMA', 'BARU'),
(55, 55, 1, 8, 'UTAMA', 'BARU'),
(56, 56, 2, 1, 'UTAMA', 'BARU'),
(57, 57, 3, 1, 'UTAMA', 'BARU'),
(58, 58, 4, 3, 'UTAMA', 'BARU'),
(59, 59, 5, 1, 'UTAMA', 'BARU'),
(60, 60, 4, 1, 'UTAMA', 'BARU'),
(61, 61, 5, 1, 'UTAMA', 'LAMA'),
(62, 62, 1, 2, 'UTAMA', 'BARU'),
(63, 63, 2, 1, 'UTAMA', 'BARU'),
(64, 64, 3, 7, 'UTAMA', 'BARU'),
(65, 65, 4, 1, 'UTAMA', 'BARU'),
(66, 66, 5, 2, 'UTAMA', 'BARU'),
(67, 67, 1, 9, 'UTAMA', 'BARU'),
(68, 68, 2, 2, 'UTAMA', 'LAMA'),
(69, 69, 3, 5, 'UTAMA', 'BARU'),
(70, 70, 1, 2, 'UTAMA', 'BARU'),
(71, 71, 2, 9, 'UTAMA', 'LAMA'),
(72, 72, 3, 1, 'UTAMA', 'BARU'),
(73, 73, 4, 1, 'UTAMA', 'BARU'),
(74, 74, 5, 7, 'UTAMA', 'BARU'),
(75, 75, 1, 2, 'UTAMA', 'BARU'),
(76, 75, 2, 1, 'UTAMA', 'BARU'),
(77, 77, 3, 9, 'UTAMA', 'BARU'),
(78, 78, 4, 3, 'UTAMA', 'LAMA'),
(79, 79, 5, 1, 'UTAMA', 'BARU'),
(80, 80, 1, 2, 'UTAMA', 'BARU'),
(81, 81, 2, 1, 'UTAMA', 'BARU'),
(82, 82, 3, 6, 'UTAMA', 'BARU'),
(83, 83, 1, 1, 'UTAMA', 'BARU'),
(84, 84, 2, 3, 'UTAMA', 'BARU'),
(85, 85, 3, 6, 'UTAMA', 'LAMA'),
(86, 85, 4, 2, 'SEKUNDER', 'BARU'),
(87, 87, 5, 1, 'UTAMA', 'BARU'),
(88, 88, 1, 7, 'UTAMA', 'BARU'),
(89, 89, 1, 6, 'UTAMA', 'BARU'),
(90, 90, 2, 8, 'UTAMA', 'BARU'),
(91, 90, 3, 1, 'SEKUNDER', 'BARU'),
(92, 92, 4, 9, 'UTAMA', 'BARU'),
(93, 93, 5, 1, 'UTAMA', 'LAMA'),
(94, 94, 1, 3, 'UTAMA', 'LAMA'),
(95, 95, 2, 8, 'UTAMA', 'BARU'),
(96, 96, 3, 1, 'UTAMA', 'BARU'),
(97, 97, 1, 2, 'UTAMA', 'BARU'),
(98, 98, 2, 2, 'UTAMA', 'BARU'),
(99, 99, 3, 1, 'UTAMA', 'LAMA'),
(100, 100, 4, 7, 'UTAMA', 'LAMA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hari`
--

CREATE TABLE `hari` (
  `hari_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hari`
--

INSERT INTO `hari` (`hari_id`, `nama`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jum\'at'),
(6, 'Sabtu'),
(7, 'Minggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jam`
--

CREATE TABLE `jam` (
  `jam_id` int(11) NOT NULL,
  `jam` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jam`
--

INSERT INTO `jam` (`jam_id`, `jam`) VALUES
(1, '00:00'),
(2, '01:00'),
(3, '02:00'),
(4, '03:00'),
(5, '04:00'),
(6, '05:00'),
(7, '06:00'),
(8, '07:00'),
(9, '08:00'),
(10, '09:00'),
(11, '10:00'),
(12, '11:00'),
(13, '12:00'),
(14, '13:00'),
(15, '14:00'),
(16, '15:00'),
(17, '16:00'),
(18, '17:00'),
(19, '18:00'),
(20, '19:00'),
(21, '20:00'),
(22, '21:00'),
(23, '22:00'),
(24, '23:00'),
(25, '23:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelamin`
--

CREATE TABLE `kelamin` (
  `id` int(11) NOT NULL,
  `kode` varchar(1) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelamin`
--

INSERT INTO `kelamin` (`id`, `kode`, `nama`) VALUES
(1, 'L', 'Laki laki'),
(2, 'P', 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id`, `nama`) VALUES
(1, 'Blitar'),
(2, 'Tulungagung'),
(3, 'Jakarta'),
(4, 'Surabaya'),
(5, 'Paris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunjungan_pasien`
--

CREATE TABLE `kunjungan_pasien` (
  `pendaftaran_id` int(11) NOT NULL,
  `pendaftran_no` varchar(50) DEFAULT NULL,
  `m_pasien_id` int(11) DEFAULT NULL,
  `m_unit_id` int(11) DEFAULT NULL,
  `m_bayar_id` int(11) DEFAULT NULL,
  `daftar_tanggal` timestamp(6) NULL DEFAULT NULL,
  `pulang_tanggal` timestamp(6) NULL DEFAULT NULL,
  `m_dokter_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kunjungan_pasien`
--

INSERT INTO `kunjungan_pasien` (`pendaftaran_id`, `pendaftran_no`, `m_pasien_id`, `m_unit_id`, `m_bayar_id`, `daftar_tanggal`, `pulang_tanggal`, `m_dokter_id`) VALUES
(1, 'RJ000001', 4, 1, 1, '2021-08-02 07:08:41.000000', NULL, 3),
(2, 'RJ000002', 2, 1, 1, '2021-07-30 08:03:36.000000', '2021-07-30 08:03:36.000000', 4),
(3, 'RJ000003', 4, 2, 2, '2021-07-30 07:54:03.000000', NULL, 3),
(4, 'RJ000004', 4, 3, 3, '2021-07-30 03:49:59.000000', '2021-07-30 03:52:07.000000', 4),
(5, 'RJ000005', 1, 4, 4, '2021-07-29 08:53:58.000000', '2021-07-29 08:53:58.000000', 3),
(6, 'RJ000006', 2, 5, 3, '2021-07-29 08:23:11.000000', '2021-07-29 08:24:05.000000', 1),
(7, 'RJ000007', 3, 1, 1, '2021-07-29 04:39:15.000000', NULL, 2),
(8, 'RJ000008', 4, 2, 2, '2021-07-29 04:37:44.000000', '2021-07-29 05:37:32.000000', 3),
(9, 'RJ000009', 3, 3, 3, '2021-07-28 07:11:56.000000', '2021-07-28 07:18:31.000000', 4),
(10, 'RJ000010', 1, 1, 1, '2021-07-28 01:10:45.000000', NULL, 3),
(11, 'RJ000011', 2, 2, 2, '2021-07-28 01:04:09.000000', '2021-07-28 01:04:09.000000', 1),
(12, 'RJ000012', 3, 3, 3, '2021-07-28 00:51:30.000000', '2021-07-28 00:51:30.000000', 2),
(13, 'RJ000013', 1, 4, 4, '2021-07-27 11:19:30.000000', '2021-07-27 11:19:30.000000', 3),
(14, 'RJ000014', 2, 5, 2, '2021-07-27 11:14:22.000000', '2021-07-27 11:14:22.000000', 1),
(15, 'RJ000015', 3, 4, 4, '2021-07-27 11:02:00.000000', '2021-07-27 11:02:00.000000', 2),
(16, 'RJ000016', 4, 5, 4, '2021-07-27 04:31:18.000000', '2021-07-27 04:35:37.000000', 3),
(17, 'RJ000017', 1, 1, 1, '2021-07-27 03:13:20.000000', '2021-07-27 03:17:07.000000', 4),
(18, 'RJ000018', 2, 2, 2, '2021-07-27 01:12:41.000000', '2021-07-27 01:12:41.000000', 3),
(19, 'RJ000019', 3, 3, 3, '2021-07-26 07:40:22.000000', '2021-07-26 07:50:15.000000', 1),
(20, 'RJ000020', 4, 4, 4, '2021-07-26 07:33:09.000000', NULL, 2),
(21, 'RJ000021', 3, 5, 3, '2021-07-26 03:29:10.000000', '2021-07-26 03:38:06.000000', 3),
(22, 'RJ000022', 1, 1, 1, '2021-07-26 02:25:00.000000', '2021-07-26 07:41:30.000000', 4),
(23, 'RJ000023', 2, 2, 2, '2021-07-25 16:10:30.000000', '2021-07-25 16:12:56.000000', 3),
(24, 'RJ000024', 3, 3, 3, '2021-07-25 15:50:07.000000', '2021-07-25 15:52:44.000000', 3),
(25, 'RJ000025', 1, 1, 1, '2021-07-25 06:35:53.000000', '2021-07-25 06:37:29.000000', 1),
(26, 'RJ000026', 2, 2, 2, '2021-07-24 05:23:58.000000', '2021-07-24 05:23:58.000000', 2),
(27, 'RJ000027', 3, 3, 3, '2021-07-23 12:40:32.000000', '2021-07-23 12:44:28.000000', 3),
(28, 'RJ000028', 4, 4, 4, '2021-07-23 08:26:33.000000', NULL, 4),
(29, 'RJ000029', 3, 5, 3, '2021-07-23 08:19:55.000000', NULL, 5),
(30, 'RJ000030', 1, 1, 1, '2021-07-23 08:18:00.000000', NULL, 1),
(31, 'RJ000031', 1, 1, 1, '2021-07-23 06:18:16.000000', '2021-07-23 06:20:16.000000', 1),
(32, 'RJ000032', 2, 2, 2, '2021-07-23 03:31:25.000000', '2021-07-23 03:31:25.000000', 2),
(33, 'RJ000033', 3, 3, 3, '2021-07-23 02:58:38.000000', '2021-07-23 02:58:38.000000', 3),
(34, 'RJ000034', 4, 4, 4, '2021-07-23 02:28:45.000000', '2021-07-23 02:28:45.000000', 4),
(35, 'RJ000035', 3, 5, 3, '2021-07-22 09:05:33.000000', '2021-07-22 09:11:23.000000', 5),
(36, 'RJ000036', 1, 1, 1, '2021-07-22 06:37:16.000000', '2021-07-22 06:40:34.000000', 1),
(37, 'RJ000037', 2, 2, 2, '2021-07-21 04:20:29.000000', '2021-07-21 04:20:29.000000', 2),
(38, 'RJ000038', 3, 3, 3, '2021-07-22 04:18:12.000000', '2021-07-22 04:18:12.000000', 3),
(39, 'RJ000039', 1, 1, 1, '2021-07-22 04:17:53.000000', '2021-07-22 04:17:53.000000', 1),
(40, 'RJ000040', 2, 2, 2, '2021-07-22 04:17:38.000000', '2021-07-22 04:17:38.000000', 2),
(41, 'RJ000041', 3, 3, 3, '2021-07-21 04:15:58.000000', '2021-07-21 04:15:58.000000', 3),
(42, 'RJ000042', 4, 4, 4, '2021-07-22 03:44:58.000000', '2021-07-22 03:45:54.000000', 4),
(43, 'RJ000043', 3, 5, 3, '2021-07-21 14:48:43.000000', '2021-07-21 14:48:43.000000', 5),
(44, 'RJ000044', 4, 4, 4, '2021-07-21 04:26:10.000000', NULL, 4),
(45, 'RJ000045', 3, 5, 3, '2021-07-21 03:32:25.000000', '2021-07-21 03:32:25.000000', 5),
(46, 'RJ000046', 1, 1, 1, '2021-07-20 05:40:09.000000', '2021-07-20 05:40:09.000000', 1),
(47, 'RJ000047', 1, 1, 1, '2021-07-19 03:22:54.000000', '2021-07-19 03:22:54.000000', 1),
(48, 'RJ000048', 2, 2, 2, '2021-07-19 03:22:03.000000', '2021-07-19 03:22:03.000000', 2),
(49, 'RJ000049', 3, 3, 3, '2021-07-19 03:16:34.000000', '2021-07-19 03:28:03.000000', 3),
(50, 'RJ000050', 4, 4, 4, '2021-07-19 03:15:45.000000', '2021-07-19 03:15:45.000000', 4),
(51, 'RJ000051', 3, 5, 3, '2021-07-19 02:42:30.000000', '2021-07-19 02:47:20.000000', 5),
(52, 'RJ000052', 1, 1, 1, '2021-07-17 12:03:48.000000', '2021-07-17 12:03:48.000000', 1),
(53, 'RJ000053', 2, 2, 2, '2021-07-17 12:02:31.000000', '2021-07-17 12:02:31.000000', 2),
(54, 'RJ000054', 3, 3, 3, '2021-07-16 12:30:57.000000', '2021-07-16 12:30:57.000000', 3),
(55, 'RJ000055', 1, 1, 1, '2021-07-16 12:16:20.000000', '2021-07-16 12:16:20.000000', 1),
(56, 'RJ000056', 2, 2, 2, '2021-07-16 12:05:09.000000', '2021-07-16 12:05:09.000000', 2),
(57, 'RJ000057', 3, 3, 3, '2021-07-16 11:57:52.000000', '2021-07-16 11:57:52.000000', 3),
(58, 'RJ000058', 4, 4, 4, '2021-07-16 11:41:35.000000', '2021-07-16 11:41:35.000000', 4),
(59, 'RJ000059', 3, 5, 3, '2021-07-16 11:31:25.000000', '2021-07-16 11:31:25.000000', 5),
(60, 'RJ000060', 4, 4, 4, '2021-07-16 06:53:34.000000', '2021-07-16 06:57:52.000000', 4),
(61, 'RJ000061', 3, 5, 3, '2021-07-16 03:01:36.000000', '2021-07-16 03:02:46.000000', 5),
(62, 'RJ000062', 1, 1, 1, '2021-07-15 08:13:19.000000', '2021-07-15 08:13:19.000000', 1),
(63, 'RJ000063', 2, 2, 2, '2021-07-15 07:33:47.000000', '2021-07-15 07:36:35.000000', 2),
(64, 'RJ000064', 3, 3, 3, '2021-07-14 03:54:07.000000', '2021-07-14 04:09:29.000000', 3),
(65, 'RJ000065', 4, 4, 4, '2021-07-14 03:37:57.000000', NULL, 4),
(66, 'RJ000066', 3, 5, 3, '2021-07-14 03:34:12.000000', '2021-07-14 03:34:12.000000', 5),
(67, 'RJ000067', 1, 1, 1, '2021-07-14 02:54:00.000000', '2021-07-14 09:55:13.000000', 1),
(68, 'RJ000068', 2, 2, 2, '2021-07-13 10:26:43.000000', NULL, 2),
(69, 'RJ000069', 3, 3, 3, '2021-07-13 10:26:36.000000', NULL, 3),
(70, 'RJ000070', 1, 1, 1, '2021-07-13 09:03:45.000000', '2021-07-13 09:04:39.000000', 1),
(71, 'RJ000071', 2, 2, 2, '2021-07-13 04:10:12.000000', '2021-07-13 04:10:12.000000', 2),
(72, 'RJ000072', 3, 3, 3, '2021-07-13 03:32:49.000000', '2021-07-13 03:34:18.000000', 3),
(73, 'RJ000073', 4, 4, 4, '2021-07-13 03:13:51.000000', '2021-07-13 03:24:53.000000', 4),
(74, 'RJ000074', 3, 5, 3, '2021-07-12 06:41:45.000000', '2021-07-12 06:41:45.000000', 5),
(75, 'RJ000075', 1, 1, 1, '2021-07-12 06:26:39.000000', '2021-07-12 10:58:07.000000', 1),
(76, 'RJ000076', 2, 2, 2, '2021-07-09 08:38:09.000000', '2021-07-09 08:38:09.000000', 2),
(77, 'RJ000077', 3, 3, 3, '2021-07-09 03:08:35.000000', '2021-07-09 03:15:52.000000', 3),
(78, 'RJ000078', 4, 4, 4, '2021-07-09 02:32:44.000000', '2021-07-09 02:32:44.000000', 4),
(79, 'RJ000079', 3, 5, 3, '2021-07-08 06:00:35.000000', NULL, 5),
(80, 'RJ000080', 1, 1, 1, '2021-07-08 04:36:14.000000', '2021-07-08 04:36:14.000000', 1),
(81, 'RJ000081', 2, 2, 2, '2021-07-08 04:18:42.000000', '2021-07-08 04:18:42.000000', 2),
(82, 'RJ000082', 3, 3, 3, '2021-07-08 02:29:45.000000', '2021-07-08 02:29:45.000000', 3),
(83, 'RJ000083', 1, 1, 1, '2021-07-08 02:29:15.000000', '2021-07-08 02:29:15.000000', 1),
(84, 'RJ000084', 2, 2, 2, '2021-07-07 08:40:06.000000', '2021-07-07 08:40:06.000000', 2),
(85, 'RJ000085', 3, 3, 3, '2021-07-07 08:21:37.000000', '2021-07-07 08:24:05.000000', 3),
(86, 'RJ000086', 4, 4, 4, '2021-07-07 03:35:05.000000', '2021-07-07 03:38:19.000000', 4),
(87, 'RJ000087', 3, 5, 3, '2021-07-06 09:10:42.000000', '2021-07-06 09:10:42.000000', 5),
(88, 'RJ000088', 1, 1, 1, '2021-07-06 06:58:50.000000', '2021-07-06 06:58:50.000000', 1),
(89, 'RJ000089', 1, 1, 1, '2021-07-06 06:40:20.000000', NULL, 1),
(90, 'RJ000090', 2, 2, 2, '2021-07-06 06:38:47.000000', '2021-07-06 06:38:47.000000', 2),
(91, 'RJ000091', 3, 3, 3, '2021-07-06 04:43:38.000000', '2021-07-06 04:43:38.000000', 3),
(92, 'RJ000092', 4, 4, 4, '2021-07-06 04:33:03.000000', '2021-07-06 04:34:48.000000', 4),
(93, 'RJ000093', 3, 5, 3, '2021-07-06 04:10:55.000000', '2021-07-06 04:16:50.000000', 5),
(94, 'RJ000094', 1, 1, 1, '2021-07-06 03:49:06.000000', '2021-07-06 03:49:06.000000', 1),
(95, 'RJ000095', 2, 2, 2, '2021-07-06 02:22:53.000000', '2021-07-06 02:22:53.000000', 2),
(96, 'RJ000096', 3, 3, 3, '2021-07-05 08:52:04.000000', '2021-07-05 08:52:04.000000', 3),
(97, 'RJ000097', 1, 1, 1, '2021-07-05 07:52:05.000000', '2021-07-05 07:52:05.000000', 1),
(98, 'RJ000098', 2, 2, 2, '2021-07-05 06:14:57.000000', NULL, 2),
(99, 'RJ000099', 3, 3, 3, '2021-07-05 04:36:06.000000', '2021-07-05 04:36:06.000000', 3),
(100, 'RJ000100', 4, 4, 4, '2021-07-05 04:26:45.000000', '2021-07-05 04:26:45.000000', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_diagnosa`
--

CREATE TABLE `master_diagnosa` (
  `diagnosa_id` int(11) NOT NULL,
  `diagnosa_kode` varchar(255) DEFAULT NULL,
  `diagnosa_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_diagnosa`
--

INSERT INTO `master_diagnosa` (`diagnosa_id`, `diagnosa_kode`, `diagnosa_name`) VALUES
(1, 'K63', 'Other diseases of intestine'),
(2, 'K04.7', 'Periapical abscess without sinus'),
(3, 'O03.9', 'Spontaneous abortion, complete or unspecified, without complication'),
(4, 'O02', 'Other abnormal products of conception'),
(5, 'O20.0', 'Threatened abortion'),
(6, 'O03.4', 'Spontaneous abortion, incomplete, without complication'),
(7, 'N75.1', 'Abscess of Bartholin\'s gland'),
(8, 'O03.0', 'Spontaneous abortion, incomplete, complicated by genital tract and pelvic infection'),
(9, 'O07.0', 'Failed medical abortion, complicated by genital tract and pelvic infection'),
(10, 'J36', 'Peritonsillar abscess');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_dokter`
--

CREATE TABLE `master_dokter` (
  `pegawai_id` int(11) NOT NULL,
  `pegawai_nomor` varchar(255) DEFAULT NULL,
  `pegawai_nama` varchar(255) DEFAULT NULL,
  `pegawai_jenis_kelamin` char(255) DEFAULT NULL COMMENT 'L=laki-laki , P=perempuan',
  `pegawai_sip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_dokter`
--

INSERT INTO `master_dokter` (`pegawai_id`, `pegawai_nomor`, `pegawai_nama`, `pegawai_jenis_kelamin`, `pegawai_sip`) VALUES
(1, '0001', 'Dr Nagita silvana', 'P', '12345678912345'),
(2, '0002', 'Dr Tiger Wang', 'L', '98765432199999'),
(3, '0003', 'Dr Muslim Irham', 'L', '43214321678967'),
(4, '0004', 'Dr Coki Hotaliha', 'L', '65489032155590'),
(5, '0005', 'Dr Luna Miya', 'P', '43522004213455');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_jadwal`
--

CREATE TABLE `master_jadwal` (
  `jadwal_id` int(11) NOT NULL,
  `pegawai_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `hari_id` int(11) NOT NULL,
  `jam_mulai` varchar(255) NOT NULL,
  `jam_selesai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_jadwal`
--

INSERT INTO `master_jadwal` (`jadwal_id`, `pegawai_id`, `unit_id`, `hari_id`, `jam_mulai`, `jam_selesai`) VALUES
(1, 4, 1, 3, '02:00', '10:00'),
(2, 2, 1, 3, '18:00', '20:00'),
(3, 1, 1, 3, '09:00', '12:00'),
(4, 1, 1, 1, '05:00', '17:00'),
(5, 1, 1, 1, '00:00', '00:00'),
(6, 1, 1, 1, '00:00', '00:00'),
(7, 1, 1, 1, '02:00', '12:00'),
(8, 1, 1, 1, '02:00', '14:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_pasien`
--

CREATE TABLE `master_pasien` (
  `pasien_id` int(11) NOT NULL,
  `pasien_norm` varchar(10) DEFAULT NULL,
  `pasien_nik` varchar(20) DEFAULT NULL,
  `pasien_nama` varchar(255) DEFAULT NULL,
  `pasien_kelamin` char(255) DEFAULT NULL COMMENT 'L = laki-laki , P= Perempuan',
  `pasien_alamat` text DEFAULT NULL,
  `pasien_kota` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_pasien`
--

INSERT INTO `master_pasien` (`pasien_id`, `pasien_norm`, `pasien_nik`, `pasien_nama`, `pasien_kelamin`, `pasien_alamat`, `pasien_kota`) VALUES
(1, 'PAS-004253', '123456789', 'Nurul Harta', 'P', 'Medokan', '1'),
(2, 'PAS-004823', '123456790', 'Hotman Wakwaw', 'L', 'Mulyorejo', '1'),
(3, 'PAS-045352', '659288219', 'Farhad Abis', 'L', 'Rungkut', '2'),
(4, 'PAS-453595', '783278378', 'Adi Fahriuz', 'L', 'Pondok Jati', '2'),
(5, 'PAS-000423', '45235421', 'Halimah', 'P', 'Wage', '3'),
(6, 'PAS-390390', '34534543', 'Galuh Gusti', 'P', 'Pabean', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_pembayaran`
--

CREATE TABLE `master_pembayaran` (
  `bayar_id` int(11) NOT NULL,
  `bayar_kode` varchar(255) DEFAULT NULL,
  `bayar_nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_pembayaran`
--

INSERT INTO `master_pembayaran` (`bayar_id`, `bayar_kode`, `bayar_nama`) VALUES
(1, 'UM', 'UMUM'),
(2, 'ASR', 'ASURANSI'),
(3, 'BPJS', 'BPJS'),
(4, 'PER', 'PERUSAHAAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_unit`
--

CREATE TABLE `master_unit` (
  `unit_id` int(11) NOT NULL,
  `unit_kode` varchar(255) DEFAULT NULL,
  `unit_nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_unit`
--

INSERT INTO `master_unit` (`unit_id`, `unit_kode`, `unit_nama`) VALUES
(1, 'MAT', 'POLI MATA'),
(2, 'JTG', 'POLI JANTUNG'),
(3, 'GJL', 'POLI GINJAL'),
(4, 'GIGI', 'POLI GIGI'),
(5, 'KAND', 'POLI KANDUNGAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `id_kota` int(11) DEFAULT NULL,
  `id_kelamin` int(1) DEFAULT NULL,
  `id_posisi` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `telp`, `id_kota`, `id_kelamin`, `id_posisi`, `status`) VALUES
('10', 'Antony Febriansyah Hartono', '082199568540', 1, 1, 1, 1),
('11', 'Hafizh Asrofil Al Banna', '087859615271', 1, 1, 1, 1),
('12', 'Faiq Fajrullah', '085736333728', 1, 1, 2, 1),
('3', 'Mustofa Halim', '081330493322', 1, 1, 3, 1),
('4', 'Dody Ahmad Kusuma Jaya', '083854520015', 1, 1, 2, 1),
('5', 'Mokhammad Choirul Ikhsan', '085749535400', 3, 1, 2, 1),
('7', 'Achmad Chadil Auwfar', '08984119934', 2, 1, 1, 1),
('8', 'Rizal Ferdian', '087777284179', 1, 1, 3, 1),
('1', 'Tolkha Hasan', '081233072122', 1, 1, 4, 1),
('2', 'Wawan Dwi Prasetyo', '085745966707', 4, 1, 4, 1),
('ec61414cfa8aed30c8478dc682e80c1f', 'sahada', '081273338544', 3, 1, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `posisi`
--

CREATE TABLE `posisi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `diagnosa_pasien`
--
ALTER TABLE `diagnosa_pasien`
  ADD PRIMARY KEY (`diagnosapasien_id`),
  ADD KEY `diagnosa_kunjungan_id` (`kunjungan_id`),
  ADD KEY `m_diagnosa_id` (`m_diagnosa_id`),
  ADD KEY `dokter` (`m_dokter_id`);

--
-- Indeks untuk tabel `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`hari_id`);

--
-- Indeks untuk tabel `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`jam_id`);

--
-- Indeks untuk tabel `kelamin`
--
ALTER TABLE `kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kunjungan_pasien`
--
ALTER TABLE `kunjungan_pasien`
  ADD PRIMARY KEY (`pendaftaran_id`),
  ADD KEY `pasien_id` (`m_pasien_id`),
  ADD KEY `bayar_id` (`m_bayar_id`),
  ADD KEY `unit_id` (`m_unit_id`),
  ADD KEY `dokter_id` (`m_dokter_id`);

--
-- Indeks untuk tabel `master_diagnosa`
--
ALTER TABLE `master_diagnosa`
  ADD PRIMARY KEY (`diagnosa_id`) USING BTREE;

--
-- Indeks untuk tabel `master_dokter`
--
ALTER TABLE `master_dokter`
  ADD PRIMARY KEY (`pegawai_id`);

--
-- Indeks untuk tabel `master_jadwal`
--
ALTER TABLE `master_jadwal`
  ADD PRIMARY KEY (`jadwal_id`);

--
-- Indeks untuk tabel `master_pasien`
--
ALTER TABLE `master_pasien`
  ADD PRIMARY KEY (`pasien_id`);

--
-- Indeks untuk tabel `master_pembayaran`
--
ALTER TABLE `master_pembayaran`
  ADD PRIMARY KEY (`bayar_id`);

--
-- Indeks untuk tabel `master_unit`
--
ALTER TABLE `master_unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indeks untuk tabel `posisi`
--
ALTER TABLE `posisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `hari`
--
ALTER TABLE `hari`
  MODIFY `hari_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `jam`
--
ALTER TABLE `jam`
  MODIFY `jam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `master_jadwal`
--
ALTER TABLE `master_jadwal`
  MODIFY `jadwal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `posisi`
--
ALTER TABLE `posisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `diagnosa_pasien`
--
ALTER TABLE `diagnosa_pasien`
  ADD CONSTRAINT `diagnosa_kunjungan_id` FOREIGN KEY (`kunjungan_id`) REFERENCES `kunjungan_pasien` (`pendaftaran_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dokter` FOREIGN KEY (`m_dokter_id`) REFERENCES `master_dokter` (`pegawai_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `m_diagnosa_id` FOREIGN KEY (`m_diagnosa_id`) REFERENCES `master_diagnosa` (`diagnosa_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kunjungan_pasien`
--
ALTER TABLE `kunjungan_pasien`
  ADD CONSTRAINT `bayar_id` FOREIGN KEY (`m_bayar_id`) REFERENCES `master_pembayaran` (`bayar_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dokter_id` FOREIGN KEY (`m_dokter_id`) REFERENCES `master_dokter` (`pegawai_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pasien_id` FOREIGN KEY (`m_pasien_id`) REFERENCES `master_pasien` (`pasien_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `unit_id` FOREIGN KEY (`m_unit_id`) REFERENCES `master_unit` (`unit_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
