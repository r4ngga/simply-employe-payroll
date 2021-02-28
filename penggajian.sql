-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Feb 2021 pada 15.29
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penggajian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji`
--

CREATE TABLE `gaji` (
  `kd_gaji` varchar(50) NOT NULL,
  `kd_guru` varchar(50) NOT NULL,
  `banyak_pertemuan` int(20) NOT NULL,
  `gaji_utama` decimal(10,0) NOT NULL,
  `pt` int(20) NOT NULL,
  `bonus_pt` double NOT NULL,
  `wn` int(20) NOT NULL,
  `bonus_wn` double NOT NULL,
  `totalbonus` double NOT NULL,
  `total_gajilembur` double NOT NULL,
  `total_gaji` int(11) NOT NULL,
  `tgl_terima` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gaji`
--

INSERT INTO `gaji` (`kd_gaji`, `kd_guru`, `banyak_pertemuan`, `gaji_utama`, `pt`, `bonus_pt`, `wn`, `bonus_wn`, `totalbonus`, `total_gajilembur`, `total_gaji`, `tgl_terima`) VALUES
('ACr3WJ', 'EHK6ufjF', 48, '20000', 0, 0, 0, 0, 0, 960000, 960000, '2020-12-16'),
('FQxeRi', 'EHK6ufjF', 51, '20000', 0, 0, 1, 50000, 50000, 1070000, 1020000, '2020-11-20'),
('R21d7T', 'L2Za9OgK', 67, '25000', 1, 50000, 1, 50000, 100000, 1775000, 1675000, '2020-11-18'),
('uyx9m5', 'PMWZCDr3', 50, '30000', 1, 50000, 1, 50000, 100000, 1600000, 1500000, '2020-11-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `kd_guru` varchar(50) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `pasword` varchar(225) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_rek` varchar(50) NOT NULL,
  `gaji_utama` decimal(10,0) NOT NULL,
  `role` varchar(20) NOT NULL,
  `sub_role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`kd_guru`, `nama_guru`, `pasword`, `email`, `no_tlp`, `alamat`, `no_rek`, `gaji_utama`, `role`, `sub_role`) VALUES
('1eGZLg84', 'Haryadi', '$2y$10$WEjeb4tNyuOBTXJyAIb8W.qXELAyCqdcboDVs//seYYne9BwZaqae', 'har4ydi@gmail.com', '087463735111', 'Jl Magelang Km 7', '802673059316850', '70000', 'karyawan', 'karyawan biasa'),
('alXc2u7V', 'Rangga Wisnu Aji M', '$2y$10$iLCgPzZNqcROBLv3bH3Tyuv/qrD1fNuAWsTodQiLBUmexIR0T.vnm', 'ranggajack78@gmail.com', '087213039022', 'Jl Kaliurang Km 8.6', '80263117479185', '0', 'admin', 'ditentukan oleh atasn'),
('EHK6ufjF', 'Marzuki Harhan', '$2y$10$F.3Hxi7IjdH7MU6hLUD5Neu5FiDTYX/6AtrnntymT2dIorQi0rFP2', 'mar4zk1@ymail.com', '08924138527', 'Jl Ketintang 2 Gang 6 Samping Musholla', '802943573265523', '20000', 'guru', 'kelas C'),
('L2Za9OgK', 'Fricha Yurianti', '$2y$10$oFwHICr9xLtusk6LYcqXde.6Wkh.T73DD0GRikZuacpMutOCGu0l.', 'fr1chz90@gmail.com', '086213944213', 'Jl Merpati No 9 Gang 3', '812930573267184', '25000', 'guru', 'kelas B'),
('PMWZCDr3', 'Putra Haryanto', '$2y$10$Ig.302Sblw3u2irFCTRtR.3oOyxS/nQmpF3F7gSOE1x8bYPt7hTAO', 'putr44@yahoo.com', '085547078193', 'Jl Ahmad Yani No 5', '87231463357290', '30000', 'guru', 'kelas A'),
('Wn7OHB3P', 'Adit Setyawan', '$2y$10$hEfDCAdZtq0zHjbjDXLxYeicwfEm0d8YzqnPdFlgI33j0K3GQM.t2', 'ad1tset4@yahoo.com', '084582170496', 'Jl Kaliurang Km 7', '867673039226974', '50000', 'leader camp', 'karyawan biasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru_detail`
--

CREATE TABLE `guru_detail` (
  `guru_det` varchar(50) NOT NULL,
  `kd_guru` varchar(50) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `background` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru_detail`
--

INSERT INTO `guru_detail` (`guru_det`, `kd_guru`, `mapel`, `background`) VALUES
('aKewJv', 'EHK6ufjF', 'Vocabulary', 'Born in Malang, May 29, 1994. \r\nhe was studied from Institute Artistan Indonesian, and graduated 2015\r\nhe has wife, and 1 children'),
('id6KNj', 'PMWZCDr3', 'Reading', 'He was born in Surabaya, August 07, 1997. he was studied from Surabayan Academy, and graduated 2019 he still single.'),
('iE57Bs', 'L2Za9OgK', 'Writing', 'Born in Yogyakarta, March 22, 1996.\r\nshe was studied from Yogyakarta State University');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `kd_konfirmasi` int(11) NOT NULL,
  `kd_gaji` varchar(50) NOT NULL,
  `kd_guru` varchar(50) NOT NULL,
  `status_konfirmasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfirmasi`
--

INSERT INTO `konfirmasi` (`kd_konfirmasi`, `kd_gaji`, `kd_guru`, `status_konfirmasi`) VALUES
(1, 'R21d7T', 'L2Za9OgK', 'belum diterima'),
(2, 'FQxeRi', 'EHK6ufjF', 'sudah diterima'),
(3, 'uyx9m5', 'PMWZCDr3', 'belum diterima'),
(4, 'ACr3WJ', 'EHK6ufjF', 'belum diterima');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`kd_gaji`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`kd_guru`);

--
-- Indeks untuk tabel `guru_detail`
--
ALTER TABLE `guru_detail`
  ADD PRIMARY KEY (`guru_det`);

--
-- Indeks untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`kd_konfirmasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `kd_konfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
