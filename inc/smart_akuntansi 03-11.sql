-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 11. Maret 2011 jam 10:24
-- Versi Server: 5.1.33
-- Versi PHP: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `akuntansi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `adminid` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(17) NOT NULL,
  `branch` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `id_session` varchar(100) NOT NULL,
  PRIMARY KEY (`adminid`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`adminid`, `name`, `branch`, `password`, `email`, `level`, `id_session`) VALUES
(1, 'admin', 'Yogyakarta', 'dd79aa3aa1673a859i0e34305abe1cf32800nma434a', 'admin@yahoo.com', 'superadmin', '208eff871664e0a5ffbfc4b82d754446'),
(2, 'user', 'Yogyakarta', 's39aa01f0e62c009drce7c124539683e9aa2e63d2u', 'user@user.com', 'admin', 's39aa01f0e62c009drce7c124539683e9aa2e63d2u'),
(3, 'jayapura', 'Jayapura', 'a5b2125ed5273bda6a43bd5541b6u6e17b735py74e6jra', 'jayapura@smart17tour.com', 'operator', 'a5b2125ed5273bda6a43bd5541b6u6e17b735py74e6jra');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rek_bandung`
--

CREATE TABLE IF NOT EXISTS `rek_bandung` (
  `id_rek_bdg` int(11) NOT NULL AUTO_INCREMENT,
  `no_rek_bdg` int(5) NOT NULL,
  `rek_bdg` varchar(35) NOT NULL,
  PRIMARY KEY (`id_rek_bdg`),
  UNIQUE KEY `no_rek_jog` (`no_rek_bdg`,`rek_bdg`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data untuk tabel `rek_bandung`
--

INSERT INTO `rek_bandung` (`id_rek_bdg`, `no_rek_bdg`, `rek_bdg`) VALUES
(1, 10200, 'Kas Bandung'),
(2, 10111, 'Bank Mandiri Center'),
(3, 10112, 'Bank BNI Center'),
(4, 10113, 'Bank BCA Center'),
(5, 10114, 'Bank BRI Center'),
(6, 10115, 'Bank NIAGA Center'),
(7, 10121, 'Deposit Citos'),
(8, 10122, 'Deposit Batavia'),
(9, 10123, 'Deposit Lion'),
(10, 10230, 'Piutang Bandung'),
(11, 10240, 'Perlengkapan Bandung'),
(12, 10250, 'Peralatan Bandung'),
(13, 10251, 'Penyusutan Perlengkapan Bandung'),
(14, 10270, 'Kendaraan Bandung'),
(15, 10271, 'Penyusutan Kendaraan Bandung'),
(16, 10280, 'Gedung Bandung'),
(17, 10281, 'Penyusutan Gedung Bandung'),
(18, 10290, 'Tanah bandung'),
(19, 20200, 'Utang Usaha Bandung'),
(20, 20210, 'Utang Transportasi Bandung'),
(21, 20220, 'Utang Hotel Bandung'),
(22, 20230, 'Utang Restoran Bandung'),
(23, 20240, 'Utang Pajak Bandung'),
(24, 30201, 'Prive Bandung'),
(25, 40201, 'Pendapatan Wisata'),
(26, 40202, 'Pendapatan Voucher Hotel'),
(27, 40203, 'Pendapatan Sewa Bus & Mobil'),
(28, 40204, 'Pendapatan E-Voucher'),
(29, 40205, 'Pendapatan Haji Umroh'),
(30, 50200, 'Biaya Gaji'),
(31, 50201, 'Biaya Transpor'),
(32, 50202, 'Biaya Hotel'),
(33, 50203, 'Biaya Restoran'),
(34, 50204, 'Biaya Pemandu dan Kru'),
(35, 50205, 'Biaya Admisi'),
(36, 50206, 'Biaya Sewa'),
(37, 50207, 'Biaya Perlengkapan'),
(38, 50208, 'Biaya Penyusutan Gedung'),
(39, 50209, 'Biaya Penyusutan Kendaraan'),
(40, 50210, 'Biaya Penyusutan Perlengkapan'),
(41, 50211, 'Biaya Iklan'),
(42, 50212, 'Biaya Listrik, telp, air'),
(43, 50213, 'Biaya Lain-lain'),
(44, 60100, 'Pendapatan Non Operasional'),
(45, 70100, 'Biaya Non Operasional');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rek_jayapura`
--

CREATE TABLE IF NOT EXISTS `rek_jayapura` (
  `id_rek_djj` int(11) NOT NULL AUTO_INCREMENT,
  `no_rek_djj` int(5) NOT NULL,
  `rek_djj` varchar(35) NOT NULL,
  PRIMARY KEY (`id_rek_djj`),
  UNIQUE KEY `no_rek_jog` (`no_rek_djj`,`rek_djj`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data untuk tabel `rek_jayapura`
--

INSERT INTO `rek_jayapura` (`id_rek_djj`, `no_rek_djj`, `rek_djj`) VALUES
(1, 10300, 'Kas Jayapura'),
(2, 10311, 'Bank xxx Jayapura'),
(3, 10312, 'Bank yyy Jayapura'),
(4, 10313, 'Bank zzz Jayapura'),
(5, 10321, 'Deposit Travast Jayapura'),
(6, 10330, 'Piutang Jayapura'),
(7, 10340, 'Perlengkapan Jayapura'),
(8, 10351, 'Peralatan Jayapura'),
(9, 10351, 'Penyusutan Perlengkapan Jayapura'),
(10, 10370, 'Kendaraan Jayapura'),
(11, 10371, 'Penyusutan Kendaraan Jayapura'),
(12, 10380, 'Gedung Jayapura'),
(13, 10381, 'Penyusutan Gedung Jayapura'),
(14, 10390, 'Tanah Jayapura'),
(15, 20300, 'Utang Usaha Jayapura'),
(16, 20310, 'Utang Transportasi Jayapura'),
(17, 20320, 'Utang Hotel Jayapura'),
(18, 20330, 'Utang Restoran Jayapura'),
(19, 20340, 'Utang Pajak Jayapura'),
(20, 20350, 'Utang refund'),
(21, 30300, 'Modal Jayapura'),
(22, 30301, 'Prive Jayapura'),
(23, 30302, 'Laba Ditahan Jayapura'),
(24, 40300, 'Pendapatan Tiket'),
(25, 40301, 'Pendapatan Wisata'),
(26, 40302, 'Pendapatan Voucher Hotel'),
(27, 40303, 'Pendapatan Sewa Bus & Mobil'),
(28, 40304, 'Pendapatan E-Voucher'),
(29, 50300, 'Biaya Gaji'),
(30, 50301, 'Biaya Transpor'),
(31, 50302, 'Biaya Hotel'),
(32, 50303, 'Biaya Restoran'),
(33, 50304, 'Biaya Pemandu dan Kru'),
(34, 50305, 'Biaya Admisi'),
(35, 50306, 'Biaya Sewa'),
(36, 50307, 'Biaya Perlengkapan'),
(37, 50308, 'Biaya Penyusutan Gedung'),
(38, 50309, 'Biaya Penyusutan Kendaraan'),
(39, 50310, 'Biaya Penyusutan Perlengkapan'),
(40, 50311, 'Biaya Iklan'),
(41, 50312, 'Biaya Listrik, telp, air'),
(42, 50313, 'Biaya lain-lain'),
(43, 60100, 'Pendapatan Non Operasional'),
(44, 70100, 'Biaya Non Operasional');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rek_jogja`
--

CREATE TABLE IF NOT EXISTS `rek_jogja` (
  `id_rek_jog` int(11) NOT NULL AUTO_INCREMENT,
  `no_rek_jog` int(5) NOT NULL,
  `rek_jog` varchar(35) NOT NULL,
  PRIMARY KEY (`id_rek_jog`),
  UNIQUE KEY `no_rek_jog` (`no_rek_jog`,`rek_jog`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data untuk tabel `rek_jogja`
--

INSERT INTO `rek_jogja` (`id_rek_jog`, `no_rek_jog`, `rek_jog`) VALUES
(1, 10100, 'Kas Yogyakarta'),
(2, 10111, 'Bank Mandiri Center'),
(3, 10112, 'Bank BNI Center'),
(4, 10113, 'Bank BCA Center'),
(5, 10114, 'Bank BRI Center'),
(6, 10115, 'Bank NIAGA Center'),
(7, 10121, 'Deposit Citos'),
(8, 10122, 'Deposit Batavia'),
(9, 10123, 'Deposit Lion'),
(10, 10130, 'Piutang Yogya'),
(11, 10140, 'Perlengkapan'),
(12, 10150, 'Peralatan Yogyakarta'),
(13, 10151, 'Penyusutan Perlengkapan Yogyakarta'),
(14, 10170, 'Kendaraan Yogyakarta'),
(15, 10171, 'Penyusutan Kendaraan Yogyakarta'),
(16, 10180, 'Gedung Yogyakarta'),
(17, 10181, 'Penyusutan Gedung Yogyakarta'),
(18, 10190, 'Tanah Yogyakarta'),
(19, 20100, 'Utang Usaha Yogyakarta'),
(20, 20110, 'Utang Transportasi'),
(21, 20120, 'Utang Hotel'),
(22, 20130, 'Utang Restoran'),
(23, 20140, 'Utang Pajak'),
(24, 20150, 'Utang Refund'),
(25, 20160, 'Utang Deposit Travast'),
(26, 30100, 'Modal'),
(27, 30101, 'Prive Yogyakarta'),
(28, 30102, 'Laba Ditahan Smart'),
(29, 40100, 'Pendapatan Tiket'),
(30, 40101, 'Pendapatan Wisata'),
(31, 40102, 'Pendapatan Voucher Hotel'),
(32, 40103, 'Pendapatan Sewa Bus & Mobil'),
(33, 40104, 'Pendapatan E-Voucher'),
(34, 40105, 'Pendapatan Haji Umroh'),
(35, 40106, 'Pendapatan IT Division'),
(36, 50100, 'Biaya Gaji'),
(37, 50101, 'Biaya Transpor'),
(38, 50102, 'Biaya Hotel'),
(39, 50103, 'Biaya Restoran'),
(40, 50104, 'Biaya Pemandu dan Kru'),
(41, 50105, 'Biaya Admisi'),
(42, 50106, 'Biaya Sewa'),
(43, 50107, 'Biaya Perlengkapan'),
(44, 50108, 'Biaya Penyusutan Gedung'),
(45, 50109, 'Biaya Penyusutan Kendaraan'),
(46, 50110, 'Biaya Penyusutan Perlengkapan'),
(47, 50111, 'Biaya Iklan'),
(48, 50112, 'Biaya Listrik, telp, air'),
(49, 50113, 'Biaya lain-lain'),
(50, 60100, 'Pendapatan Non Operasional'),
(51, 70100, 'Biaya Non Operasional');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rek_tiket`
--

CREATE TABLE IF NOT EXISTS `rek_tiket` (
  `id_rek_tkt` int(11) NOT NULL AUTO_INCREMENT,
  `no_rek_tkt` varchar(2) NOT NULL,
  `rek_tkt` varchar(30) NOT NULL,
  PRIMARY KEY (`id_rek_tkt`),
  UNIQUE KEY `no_rek_jog` (`no_rek_tkt`,`rek_tkt`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `rek_tiket`
--

INSERT INTO `rek_tiket` (`id_rek_tkt`, `no_rek_tkt`, `rek_tkt`) VALUES
(1, 'A', 'Tiket Lion'),
(2, 'B', 'Tiket Garuda'),
(3, 'C', 'Tiket Batavia'),
(4, 'D', 'Tiket Sriwijaya'),
(5, 'E', 'Tiket Merpati'),
(6, 'F', 'Tiket Airasia'),
(7, 'G', 'Tiket Mandala'),
(8, 'H', 'Tiket Citilink'),
(9, 'I', 'Tiket Kereta Api'),
(10, 'J', 'Tiket Kapal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rek_tour`
--

CREATE TABLE IF NOT EXISTS `rek_tour` (
  `id_rek_tur` int(11) NOT NULL AUTO_INCREMENT,
  `no_rek_tur` varchar(2) NOT NULL,
  `rek_tur` varchar(30) NOT NULL,
  PRIMARY KEY (`id_rek_tur`),
  UNIQUE KEY `no_rek_jog` (`no_rek_tur`,`rek_tur`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `rek_tour`
--

INSERT INTO `rek_tour` (`id_rek_tur`, `no_rek_tur`, `rek_tur`) VALUES
(1, 'A', 'Domestik'),
(2, 'B', 'Internasional');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trans_bandung`
--

CREATE TABLE IF NOT EXISTS `trans_bandung` (
  `id_bdg` int(11) NOT NULL AUTO_INCREMENT,
  `client_bdg` varchar(20) NOT NULL,
  `hp_bdg` varchar(20) NOT NULL,
  `notrans_bdg` varchar(10) NOT NULL,
  `tgltrans_bdg` date NOT NULL,
  `jamtrans_bdg` time NOT NULL,
  `ket_bdg` text NOT NULL,
  `ttl_rek_bdg` int(1) NOT NULL,
  `deb_ref_bdg` varchar(5) NOT NULL,
  `deb_ref2_bdg` varchar(5) NOT NULL,
  `deb_ref3_bdg` varchar(5) NOT NULL,
  `deb_ref4_bdg` varchar(5) NOT NULL,
  `deb_jml_bdg` int(11) NOT NULL,
  `deb_jml2_bdg` int(11) NOT NULL,
  `deb_jml3_bdg` int(11) NOT NULL,
  `deb_jml4_bdg` int(11) NOT NULL,
  `kre_ref_bdg` varchar(5) NOT NULL,
  `kre_ref2_bdg` varchar(5) NOT NULL,
  `kre_ref3_bdg` varchar(5) NOT NULL,
  `kre_ref4_bdg` varchar(5) NOT NULL,
  `kre_jml_bdg` int(11) NOT NULL,
  `kre_jml2_bdg` int(11) NOT NULL,
  `kre_jml3_bdg` int(11) NOT NULL,
  `kre_jml4_bdg` int(11) NOT NULL,
  `operator_bdg` text NOT NULL,
  PRIMARY KEY (`id_bdg`),
  UNIQUE KEY `notrans_jog` (`notrans_bdg`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `trans_bandung`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `trans_jayapura`
--

CREATE TABLE IF NOT EXISTS `trans_jayapura` (
  `id_djj` int(11) NOT NULL AUTO_INCREMENT,
  `client_djj` varchar(20) NOT NULL,
  `hp_djj` varchar(20) NOT NULL,
  `notrans_djj` varchar(10) NOT NULL,
  `tgltrans_djj` date NOT NULL,
  `jamtrans_djj` time NOT NULL,
  `ket_djj` text NOT NULL,
  `ttl_rek_djj` int(1) NOT NULL,
  `deb_ref_djj` varchar(5) NOT NULL,
  `deb_ref2_djj` varchar(5) NOT NULL,
  `deb_ref3_djj` varchar(5) NOT NULL,
  `deb_ref4_djj` varchar(5) NOT NULL,
  `deb_jml_djj` int(11) NOT NULL,
  `deb_jml2_djj` int(11) NOT NULL,
  `deb_jml3_djj` int(11) NOT NULL,
  `deb_jml4_djj` int(11) NOT NULL,
  `kre_ref_djj` varchar(5) NOT NULL,
  `kre_ref2_djj` varchar(5) NOT NULL,
  `kre_ref3_djj` varchar(5) NOT NULL,
  `kre_ref4_djj` varchar(5) NOT NULL,
  `kre_jml_djj` int(11) NOT NULL,
  `kre_jml2_djj` int(11) NOT NULL,
  `kre_jml3_djj` int(11) NOT NULL,
  `kre_jml4_djj` int(11) NOT NULL,
  `operator_djj` text NOT NULL,
  PRIMARY KEY (`id_djj`),
  UNIQUE KEY `notrans_jog` (`notrans_djj`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `trans_jayapura`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `trans_jogja`
--

CREATE TABLE IF NOT EXISTS `trans_jogja` (
  `id_jog` int(11) NOT NULL AUTO_INCREMENT,
  `client_jog` varchar(20) NOT NULL,
  `hp_jog` varchar(20) NOT NULL,
  `notrans_jog` varchar(10) NOT NULL,
  `tgltrans_jog` date NOT NULL,
  `jamtrans_jog` time NOT NULL,
  `ket_jog` text NOT NULL,
  `ttl_rek_jog` int(1) NOT NULL,
  `deb_ref_jog` varchar(5) NOT NULL,
  `deb_ref2_jog` varchar(5) NOT NULL,
  `deb_ref3_jog` varchar(5) NOT NULL,
  `deb_ref4_jog` varchar(5) NOT NULL,
  `deb_jml_jog` int(11) NOT NULL,
  `deb_jml2_jog` int(11) NOT NULL,
  `deb_jml3_jog` int(11) NOT NULL,
  `deb_jml4_jog` int(11) NOT NULL,
  `kre_ref_jog` varchar(5) NOT NULL,
  `kre_ref2_jog` varchar(5) NOT NULL,
  `kre_ref3_jog` varchar(5) NOT NULL,
  `kre_ref4_jog` varchar(5) NOT NULL,
  `kre_jml_jog` int(11) NOT NULL,
  `kre_jml2_jog` int(11) NOT NULL,
  `kre_jml3_jog` int(11) NOT NULL,
  `kre_jml4_jog` int(11) NOT NULL,
  `operator_jog` text NOT NULL,
  PRIMARY KEY (`id_jog`),
  UNIQUE KEY `notrans_jog` (`notrans_jog`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `trans_jogja`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `trans_tiket`
--

CREATE TABLE IF NOT EXISTS `trans_tiket` (
  `id_tkt` int(11) NOT NULL AUTO_INCREMENT,
  `client_tkt` varchar(20) NOT NULL,
  `hp_tkt` varchar(20) NOT NULL,
  `notrans_tkt` varchar(10) NOT NULL,
  `tgltrans_tkt` date NOT NULL,
  `jamtrans_tkt` time NOT NULL,
  `ket_tkt` text NOT NULL,
  `ttl_rek_tkt` int(1) NOT NULL,
  `deb_ref_tkt` varchar(5) NOT NULL,
  `deb_ref2_tkt` varchar(5) NOT NULL,
  `deb_ref3_tkt` varchar(5) NOT NULL,
  `deb_ref4_tkt` varchar(5) NOT NULL,
  `deb_jml_tkt` int(11) NOT NULL,
  `deb_jml2_tkt` int(11) NOT NULL,
  `deb_jml3_tkt` int(11) NOT NULL,
  `deb_jml4_tkt` int(11) NOT NULL,
  `kre_ref_tkt` varchar(5) NOT NULL,
  `kre_ref2_tkt` varchar(5) NOT NULL,
  `kre_ref3_tkt` varchar(5) NOT NULL,
  `kre_ref4_tkt` varchar(5) NOT NULL,
  `kre_jml_tkt` int(11) NOT NULL,
  `kre_jml2_tkt` int(11) NOT NULL,
  `kre_jml3_tkt` int(11) NOT NULL,
  `kre_jml4_tkt` int(11) NOT NULL,
  `profit_tkt` int(11) NOT NULL,
  `branch_tkt` varchar(15) NOT NULL,
  `operator_tkt` text NOT NULL,
  PRIMARY KEY (`id_tkt`),
  UNIQUE KEY `notrans_jog` (`notrans_tkt`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `trans_tiket`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `trans_tour`
--

CREATE TABLE IF NOT EXISTS `trans_tour` (
  `id_tur` int(11) NOT NULL AUTO_INCREMENT,
  `client_tur` varchar(20) NOT NULL,
  `hp_tur` varchar(20) NOT NULL,
  `notrans_tur` varchar(10) NOT NULL,
  `tgltrans_tur` date NOT NULL,
  `jamtrans_tur` time NOT NULL,
  `ket_tur` text NOT NULL,
  `ttl_rek_tur` int(1) NOT NULL,
  `deb_ref_tur` varchar(5) NOT NULL,
  `deb_ref2_tur` varchar(5) NOT NULL,
  `deb_ref3_tur` varchar(5) NOT NULL,
  `deb_ref4_tur` varchar(5) NOT NULL,
  `deb_jml_tur` int(11) NOT NULL,
  `deb_jml2_tur` int(11) NOT NULL,
  `deb_jml3_tur` int(11) NOT NULL,
  `deb_jml4_tur` int(11) NOT NULL,
  `kre_ref_tur` varchar(5) NOT NULL,
  `kre_ref2_tur` varchar(5) NOT NULL,
  `kre_ref3_tur` varchar(5) NOT NULL,
  `kre_ref4_tur` varchar(5) NOT NULL,
  `kre_jml_tur` int(11) NOT NULL,
  `kre_jml2_tur` int(11) NOT NULL,
  `kre_jml3_tur` int(11) NOT NULL,
  `kre_jml4_tur` int(11) NOT NULL,
  `profit_tur` int(11) NOT NULL,
  `branch_tur` varchar(15) NOT NULL,
  `operator_tur` text NOT NULL,
  PRIMARY KEY (`id_tur`),
  UNIQUE KEY `notrans_jog` (`notrans_tur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `trans_tour`
--

