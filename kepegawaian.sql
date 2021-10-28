-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Okt 2021 pada 06.51
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kepegawaian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bank_files`
--

CREATE TABLE `bank_files` (
  `file_id` int(11) NOT NULL,
  `pegawai_id` int(3) NOT NULL,
  `judul` varchar(100) CHARACTER SET latin1 NOT NULL,
  `file` varchar(128) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bank_files`
--

INSERT INTO `bank_files` (`file_id`, `pegawai_id`, `judul`, `file`) VALUES
(25, 6, 'STR', 'STR_pdf.pdf'),
(26, 6, 'SIP', 'sip_pdf.pdf'),
(27, 6, 'SK CPNS', 'SK_Pdf.pdf'),
(29, 13, 'Ijazah', 'ijazahdrg.pdf'),
(30, 13, 'STR', 'strdrg.pdf'),
(31, 13, 'SIP', 'sipdrg.pdf'),
(32, 13, 'SK CPNS', 'skcpns.pdf'),
(33, 13, 'KTP', 'ktp.pdf'),
(34, 13, 'BPJS', 'bpjs.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guest`
--

CREATE TABLE `guest` (
  `id` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `pangkat` int(11) NOT NULL,
  `jeniskelamin` int(11) NOT NULL,
  `jabatan` int(11) NOT NULL,
  `unitkerja` int(11) NOT NULL,
  `pendidikan` int(11) NOT NULL,
  `lahir` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `nokk` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `alamat` int(11) NOT NULL,
  `npwp` int(11) NOT NULL,
  `bpjs` int(11) NOT NULL,
  `kontak` int(11) NOT NULL,
  `bank` int(11) NOT NULL,
  `str` int(11) NOT NULL,
  `sip` int(11) NOT NULL,
  `pelatihan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guest`
--

INSERT INTO `guest` (`id`, `nip`, `pangkat`, `jeniskelamin`, `jabatan`, `unitkerja`, `pendidikan`, `lahir`, `nik`, `nokk`, `status`, `alamat`, `npwp`, `bpjs`, `kontak`, `bank`, `str`, `sip`, `pelatihan`) VALUES
(1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `date_created` int(11) NOT NULL,
  `date_edited` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `title`, `content`, `date_created`, `date_edited`) VALUES
(1, 'Covid-19', '3M :\r\nMemakai masker, Menjaga jarak, Menghindari keramaian', 1586964078, 1587096958);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(2) NOT NULL,
  `nourut` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(25) DEFAULT NULL,
  `golongan` varchar(30) DEFAULT NULL,
  `tmtgolongan` date DEFAULT NULL,
  `jeniskelamin` varchar(15) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `statuskepegawaian` varchar(20) DEFAULT NULL,
  `tmtjabatan` date DEFAULT NULL,
  `unitkerja` varchar(50) DEFAULT NULL,
  `universitas` varchar(100) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `tahunlulus` varchar(4) DEFAULT NULL,
  `tempatlahir` varchar(50) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nokk` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `desa` varchar(30) DEFAULT NULL,
  `kecamatan` varchar(30) DEFAULT NULL,
  `kabupaten` varchar(20) DEFAULT NULL,
  `provinsi` varchar(40) DEFAULT NULL,
  `rt` varchar(3) DEFAULT NULL,
  `rw` varchar(3) DEFAULT NULL,
  `npwp` varchar(20) DEFAULT NULL,
  `bpjskesehatan` varchar(20) DEFAULT NULL,
  `bpjsketenagakerjaan` varchar(20) DEFAULT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `namabank` varchar(20) DEFAULT NULL,
  `norek` varchar(20) DEFAULT NULL,
  `terbitstr` date DEFAULT NULL,
  `str` varchar(20) DEFAULT NULL,
  `berlakustr` date DEFAULT NULL,
  `terbitsip` date DEFAULT NULL,
  `sip` varchar(20) DEFAULT NULL,
  `berlakusip` date DEFAULT NULL,
  `pelatihan` varchar(1000) DEFAULT NULL,
  `image` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(128) NOT NULL,
  `position` varchar(25) NOT NULL,
  `portal` int(11) DEFAULT NULL,
  `guest` int(11) DEFAULT NULL,
  `expired` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nourut`, `nama`, `nip`, `golongan`, `tmtgolongan`, `jeniskelamin`, `jabatan`, `statuskepegawaian`, `tmtjabatan`, `unitkerja`, `universitas`, `jurusan`, `tahunlulus`, `tempatlahir`, `tanggallahir`, `nik`, `nokk`, `status`, `alamat`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `rt`, `rw`, `npwp`, `bpjskesehatan`, `bpjsketenagakerjaan`, `phonenumber`, `email`, `namabank`, `norek`, `terbitstr`, `str`, `berlakustr`, `terbitsip`, `sip`, `berlakusip`, `pelatihan`, `image`, `username`, `password`, `position`, `portal`, `guest`, `expired`) VALUES
(1, 0, 'Admin', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', 'admin', '$2y$10$EuGbwwYrQvpRcoAcBNbjGupvTgvHQjTKKgHHuSn2EZQlrnD1DQL9.', 'admin', NULL, 0, NULL),
(2, 0, 'Guest', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg', 'guest', '$2y$10$EuGbwwYrQvpRcoAcBNbjGupvTgvHQjTKKgHHuSn2EZQlrnD1DQL9.', 'guest', NULL, 0, '2021-12-31'),
(10, 1, 'dr. Ameri Yahya', '19840914 201403 1 002', 'Penata / IIIc', '2017-04-01', 'Laki-laki', 'Dokter Muda ( Kepala Puskesmas )', 'PNS', '2016-01-01', 'Puskesmas Kelarik ( KAPUS )', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0821', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Foto_Abu_abu.JPG', 'ameriyahya', '$2y$10$EuGbwwYrQvpRcoAcBNbjGupvTgvHQjTKKgHHuSn2EZQlrnD1DQL9.', 'pegawai', 0, 1, NULL),
(13, 5, 'drg. Teuku Agus Surya', '19860826 201903 1 002', 'Penata Muda Tingkat I / IIIb', '2019-03-01', 'Laki-laki', 'Dokter Gigi Ahli Pertama', 'CPNS', '2019-03-01', 'Puskesmas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0852', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'about.jpg', 'agussurya', '$2y$10$EuGbwwYrQvpRcoAcBNbjGupvTgvHQjTKKgHHuSn2EZQlrnD1DQL9.', 'pegawai', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subjek` varchar(50) DEFAULT NULL,
  `saran` varchar(1000) DEFAULT NULL,
  `tanggal_saran` int(11) DEFAULT NULL,
  `respon` varchar(1000) DEFAULT NULL,
  `tanggal_respon` int(11) DEFAULT NULL,
  `tampil` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `image` varchar(100) NOT NULL,
  `position` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `image`, `position`) VALUES
(1, 'Kepala Puskesmas', 'ameriyahya', '$2y$10$fwYbuolpoFHQRq7sn5Z2/uPhPekgKNOhQDGJPkDzPB7VUQpK3/sWS', '', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bank_files`
--
ALTER TABLE `bank_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indeks untuk tabel `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bank_files`
--
ALTER TABLE `bank_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
