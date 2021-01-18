-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 01:14 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_perpuspro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`user_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `fullname`, `gambar`) VALUES
(1, 'operator', 'operator', 'Sarjana Komedi', 'gambar_admin/avatar5.png'),
(2, 'admin', 'admin', 'ADMINISTRATOR', 'gambar_admin/4.jpg'),
(3, 'agung123', 'agung123', 'Agung Santoso', 'gambar_admin/Koala.jpg'),
(4, 'latifah92', 'latifah92', 'Lathifah', 'gambar_admin/prk1.jpg'),
(5, 'ahmad009', 'ahmad09', 'AHMAD MUCHTADIN', 'gambar_admin/Koala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_anggota`
--

CREATE TABLE IF NOT EXISTS `data_anggota` (
`id` int(11) NOT NULL,
  `no_induk` varchar(5) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `foto` varchar(75) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_anggota`
--

INSERT INTO `data_anggota` (`id`, `no_induk`, `nama`, `jk`, `kelas`, `ttl`, `alamat`, `foto`) VALUES
(1, '15901', 'AGUNG SANTOSO', 'L', '9a', 'Cikarang, 4 Agustus 1997', 'Kp. Wangkal, Cikarang Barat', 'gambar_anggota/26115.jpg'),
(2, '15902', 'AHMAD MUCHTADIN', 'L', '9c', 'Bekasi, 27 Januari 1998', 'Cabang Lio, Cikarang Utara', 'gambar_anggota/Assy enggine.jpg'),
(3, '15903', 'HAMRI AJAH', 'L', '9b', 'Cikarang, 30 Januari 1997', 'Rawa Bangkong, Cikarang Timur', 'gambar_anggota/009.jpg'),
(4, '15904', 'ANI ANILAH', 'P', '9b', 'Cikarang, 20 Januari 1992', 'Sasak Bali, Sukatani', 'gambar_anggota/c.jpg'),
(5, '15905', 'RYAN SUPRIATNA', 'L', '9b', 'Cikarang, 9 Agustus 1995', 'Sukatani, Cikarang', 'gambar_anggota/ko caci.jpg'),
(6, '15906', 'LATHIFAH', 'P', '9c', 'Bekasi, 26 Juli 1997', 'Cikarang Baru', 'gambar_anggota/1098.jpg'),
(7, '15907', 'CANTIKA PUJIASTUTI', 'P', '9a', 'Karawang, 11 April 1998', 'Tambelang, Bekasi', 'gambar_anggota/user.jpg'),
(8, '15908', 'SEBASTIAN HADI PRASETYO', 'L', '9a', 'Bekasi, 17 Agustus 1990', 'Tambelang, Bekasi', 'gambar_anggota/26115.jpg'),
(9, '15909', 'RAMA AGUS SUPRIYADI', 'L', '9b', 'Bogor, 29 Juli 1994', 'Cikarang, Bekasi', 'gambar_anggota/l.jpg'),
(10, '15911', 'Sarjana Komedi', 'L', '9a', 'Bekasi, 27 September 1990', 'Bekasi, Jawa Barat, Indonesia', 'gambar_anggota/Image0205.jpg'),
(11, '20150', 'ANTON SUGIANTO', 'L', '9b', 'Indramayu, 28 Oktober 1988', 'cikarang barat bekasi', 'gambar_anggota/2.jpg'),
(12, '20150', 'DEDE RIZKI RAMADHAN', 'L', '9c', 'Bekasi, 30 November 1991', 'Pilar Barat, Cikarang, Bekasi', 'gambar_anggota/5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE IF NOT EXISTS `data_buku` (
`id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `pengarang` varchar(250) NOT NULL,
  `th_terbit` varchar(4) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `kode_klas` varchar(20) NOT NULL,
  `jumlah_buku` int(2) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `jum_temp` int(4) NOT NULL,
  `tgl_input` varchar(75) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`id`, `judul`, `pengarang`, `th_terbit`, `penerbit`, `isbn`, `kategori`, `kode_klas`, `jumlah_buku`, `lokasi`, `asal`, `jum_temp`, `tgl_input`, `gambar`) VALUES
(1, 'Bahasa Indonesia X', 'Kementrian Pendidikan dan Budaya', '2015', 'Kementrian Pendidikan dan Budaya', '9848573937402', 'umum', 'X', 10, 'RK01A', 'Pembelian', 8, '2020/12/14', 'gambar_buku/bahasa_indo.png'),
(2, 'Sejarah Indonesia X', 'Kementrian Pendidikan dan Kebudayaan', '2015', 'Kementrian Pendidikan dan Kebudayaan', '92829384749382', 'umum', 'XI', 10, 'RK01B', 'Pembelian', 9, '2020/12/14', 'gambar_buku/download.jpg'),
(3, 'Matematika XI', 'Kementrian Pendidikan dan Budaya', '2015', 'Kementrian Pendidikan dan Budaya', '957693746521', 'Umum', 'XI', 15, 'RK02A', 'Pembelian', 14, '2020/12/15', 'gambar_buku/buku_briliant.jpg'),
(4, 'English Course', 'tes', '2016', 'tes', '98192837450', 'umum', 'XII', 10, 'RK02B', 'Pembelian', 9, '2020/12/18', 'gambar_buku/perahu_kertas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE IF NOT EXISTS `pengunjung` (
`id` int(6) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `kelas` varchar(17) NOT NULL,
  `perlu1` varchar(15) NOT NULL,
  `cari` varchar(255) NOT NULL,
  `saran` varchar(255) NOT NULL,
  `tgl_kunjung` date NOT NULL,
  `jam_kunjung` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `nama`, `jk`, `kelas`, `perlu1`, `cari`, `saran`, `tgl_kunjung`, `jam_kunjung`) VALUES
(1, 'Sebastian Hadi Prasetyo', 'L', '9a', 'Membaca', 'Antropologi', 'Pelayanan di tingkatkan lagi', '2020-11-10', '07:23:40'),
(2, 'Sarjana Komedi', 'L', 'XII4', 'Membaca', 'Buku Pemrograman', 'Perbanyak Buku Pemrograman', '2020-12-01', '04:21:50'),
(3, 'Niqo Bio Haqqul Yaqin', 'L', 'X2', 'Membaca', 'Buku Pemrograman', 'Tingkatkan Pelayanan', '2015-10-18', '04:23:04'),
(4, 'Ujang Syamsuddin', 'L', 'XII5', 'Membaca', 'Buku Paket', 'Tingkatkan Pelayanan', '2015-10-19', '19:40:59'),
(5, 'Sugiarto Cokro', 'L', 'XI5', 'Pinjam Buku', 'Biologi', 'Kalo telat jangan di denda dong.', '2015-10-19', '19:42:22'),
(6, 'Agung Purnomo', 'L', 'XI2', 'Membaca', 'Teknik Informatika', 'Lebih ditingkatkan lagi', '2017-04-26', '03:54:30'),
(7, 'Danu Budi Kuncoro', 'L', 'XII1', 'Membaca', 'Ilmu Komputer', 'Fasilitas meja untuk para pembaca kurang', '2017-04-26', '03:56:11'),
(8, 'Syafira Mutia Syahida', 'P', 'XI2', 'Pinjam Buku', 'Indahnya Membangun', 'No comment', '2017-04-26', '03:57:13'),
(9, 'Monika Widya Katerine', 'P', 'XII5', 'Membaca', 'Harap bersama Kekasih', 'Ruang perpustakaan mungkin lebih baik sering dibersihkan', '2017-04-26', '03:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `trans_pinjam`
--

CREATE TABLE IF NOT EXISTS `trans_pinjam` (
`id` int(11) NOT NULL,
  `judul_buku` varchar(250) NOT NULL,
  `id_peminjam` int(4) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `tgl_pinjam` varchar(15) NOT NULL,
  `tgl_kembali` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_pinjam`
--

INSERT INTO `trans_pinjam` (`id`, `judul_buku`, `id_peminjam`, `nama_peminjam`, `tgl_pinjam`, `tgl_kembali`, `status`, `ket`) VALUES
(1, 'Sejarah', 2, 'AGUNG', '15-12-2020', '18-12-2020', 'kembali', 'pinjam'),
(2, 'Sejarah', 2, 'AGUNG', '15-12-2020', '18-12-2020', 'pinjam', 'pinjam'),
(3, 'Bahasa', 1, 'AGUNG', '18-12-2020', '21-12-2020', 'pinjam', 'pinjam'),
(4, 'English', 4, 'CANTIKA', '18-12-2020', '21-12-2020', 'pinjam', 'pinjam'),
(5, 'Matematika', 3, 'RAMA', '18-12-2020', '21-12-2020', 'pinjam', 'pinjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `data_anggota`
--
ALTER TABLE `data_anggota`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trans_pinjam`
--
ALTER TABLE `trans_pinjam`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `data_anggota`
--
ALTER TABLE `data_anggota`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `data_buku`
--
ALTER TABLE `data_buku`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `trans_pinjam`
--
ALTER TABLE `trans_pinjam`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
