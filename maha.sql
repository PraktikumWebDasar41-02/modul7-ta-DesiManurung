-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2018 pada 05.04
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `maha`
--

CREATE TABLE `maha` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `programstudi` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `asal` varchar(30) NOT NULL,
  `moto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `maha`
--

INSERT INTO `maha` (`id`, `nama`, `nim`, `tgl_lahir`, `jenis`, `programstudi`, `fakultas`, `asal`, `moto`) VALUES
(2, '', '', '0000-00-00', '', '', '', '', ''),
(3, 'DESI', '6701174141', '2018-10-16', 'WANITA', 'teknik informatika', 'FAKULTAS ILMU TERAPAN', 'MEDAN', 'JATUH ITU PROSES'),
(4, 'CINTA', '6701174129', '2018-10-04', 'WANITA', 'teknik informatika', 'FAKULTAS ILMU TERAPAN', 'MEDAN', 'BELAJAR BUAT MASA DEPAN'),
(5, 'CINTA', '6701174129', '2018-10-04', 'WANITA', 'teknik informatika', 'FAKULTAS ILMU TERAPAN', 'MEDAN', 'BELAJAR BUAT MASA DEPAN'),
(6, 'ifa', '6701175432', '2018-10-01', 'WANITA', 'teknik informatika', 'FAKULTAS INDUSTRI KREATIF', 'padang', 'belajar dengan giat'),
(10, 'DESI', '6701174141', '2018-10-01', 'WANITA', '====PILIH PROGRAM STUDI=====', 'FAKULTAS ILMU TERAPAN', 'MEDAN', 'JATUH ITU PROSES'),
(12, 'DESI', '6701174141', '2018-10-01', 'WANITA', '====PILIH PROGRAM STUDI=====', 'FAKULTAS ILMU TERAPAN', 'MEDAN', 'JATUH ITU PROSES'),
(13, 'DESI', '6701174141', '2018-10-01', 'WANITA', '====PILIH PROGRAM STUDI=====', 'FAKULTAS ILMU TERAPAN', 'MEDAN', 'JATUH ITU PROSES'),
(14, 'DESI', '6701174141', '2018-10-01', 'WANITA', 'sistem informasi', 'FAKULTAS ILMU TERAPAN', 'MEDAN', 'belajar dengan giat'),
(17, 'jou', '6701176354', '2018-10-04', 'WANITA', 'teknik elektro', 'FAKULTAS TEKNIK ELEKTRO', 'bandung', 'pasti bisa'),
(18, 'DESI', '6701174141', '2018-10-03', '====PILIH JENIS KELA', 'teknik informatika', 'FAKULTAS TEKNIK ELEKTRO', 'MEDAN', 'JATUH ITU PROSES'),
(19, 'DESI', '6701174141', '2018-10-03', '====PILIH JENIS KELA', 'teknik informatika', 'FAKULTAS TEKNIK ELEKTRO', 'MEDAN', 'JATUH ITU PROSES'),
(20, 'ifa', '6701175432', '2018-10-01', 'PRIA', 'teknik informatika', 'FAKULTAS INDUSTRI KREATIF', 'padang', 'belajar dengan giat'),
(21, 'ifa', '6701175432', '2018-10-01', 'PRIA', 'teknik informatika', 'FAKULTAS INDUSTRI KREATIF', 'padang', 'belajar dengan giat');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `maha`
--
ALTER TABLE `maha`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `maha`
--
ALTER TABLE `maha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
