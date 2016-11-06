-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 02. April 2011 jam 00:42
-- Versi Server: 5.1.33
-- Versi PHP: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`adminid`, `name`, `branch`, `password`, `email`, `level`, `id_session`) VALUES
(1, 'admin', 'Yogyakarta', 'dd79aa3aa1673a859i0e34305abe1cf32800nma434a', 'admin@yahoo.com', 'superadmin', '9e96d798debb5e7e4dd2b56a3377900c'),
(2, 'user', 'Yogyakarta', 's39aa01f0e62c009drce7c124539683e9aa2e63d2u', 'user@user.com', 'admin', '30979387e7ded172351e8c2751408a3e'),
(3, 'jayapura', 'Jayapura', 'a5b2125ed5273bda6a43bd5541b6u6e17b735py74e6jra', 'jayapura@smart17tour.com', 'operator', 'a5b2125ed5273bda6a43bd5541b6u6e17b735py74e6jra'),
(4, 'operator', 'Yogyakarta', 'p3fe92899b465d163r07c18ebc16t9de6d329aed796oor', 'operator@operator.com', 'operator', '5f92bc8dc4cfd7084fc83456b756d2fe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_access`
--

CREATE TABLE IF NOT EXISTS `admin_access` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `adminid` int(10) NOT NULL DEFAULT '0',
  `admin_name` varchar(30) NOT NULL,
  `ipaddr` varchar(50) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT '0000-00-00',
  `timein` time NOT NULL DEFAULT '00:00:00',
  `url_viewed` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `admin_access`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `rek_bandung`
--

CREATE TABLE IF NOT EXISTS `rek_bandung` (
  `id_rek_bdg` int(11) NOT NULL AUTO_INCREMENT,
  `no_rek_bdg` int(5) NOT NULL,
  `rek_bdg` varchar(35) NOT NULL,
  `dk_bdg` varchar(1) NOT NULL,
  PRIMARY KEY (`id_rek_bdg`),
  UNIQUE KEY `no_rek_jog` (`no_rek_bdg`,`rek_bdg`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data untuk tabel `rek_bandung`
--

INSERT INTO `rek_bandung` (`id_rek_bdg`, `no_rek_bdg`, `rek_bdg`, `dk_bdg`) VALUES
(1, 10200, 'Kas Bandung', 'D'),
(2, 10111, 'Bank Mandiri Center', 'D'),
(3, 10112, 'Bank BNI Center', 'D'),
(4, 10113, 'Bank BCA Center', 'D'),
(5, 10114, 'Bank BRI Center', 'D'),
(6, 10115, 'Bank NIAGA Center', 'D'),
(7, 10121, 'Deposit Citos', 'D'),
(8, 10122, 'Deposit Batavia', 'D'),
(9, 10123, 'Deposit Lion', 'D'),
(10, 10230, 'Piutang Bandung', 'D'),
(11, 10240, 'Perlengkapan Bandung', 'D'),
(12, 10250, 'Peralatan Bandung', 'D'),
(13, 10251, 'Penyusutan Perlengkapan Bandung', 'D'),
(14, 10270, 'Kendaraan Bandung', 'D'),
(15, 10271, 'Penyusutan Kendaraan Bandung', 'D'),
(16, 10280, 'Gedung Bandung', 'D'),
(17, 10281, 'Penyusutan Gedung Bandung', 'D'),
(18, 10290, 'Tanah bandung', 'D'),
(19, 20200, 'Utang Usaha Bandung', 'K'),
(20, 20210, 'Utang Transportasi Bandung', 'K'),
(21, 20220, 'Utang Hotel Bandung', 'K'),
(22, 20230, 'Utang Restoran Bandung', 'K'),
(23, 20240, 'Utang Pajak Bandung', 'K'),
(24, 30201, 'Prive Bandung', 'D'),
(25, 40200, 'Pendapatan Tiket', 'K'),
(26, 40201, 'Pendapatan Wisata', 'K'),
(27, 40202, 'Pendapatan Voucher Hotel', 'K'),
(28, 40203, 'Pendapatan Sewa Bus & Mobil', 'K'),
(29, 40204, 'Pendapatan E-Voucher', 'K'),
(30, 40205, 'Pendapatan Haji Umroh', 'K'),
(31, 50200, 'Biaya Gaji', 'D'),
(32, 50201, 'Biaya Transpor', 'D'),
(33, 50202, 'Biaya Hotel', 'D'),
(34, 50203, 'Biaya Restoran', 'D'),
(35, 50204, 'Biaya Pemandu dan Kru', 'D'),
(36, 50205, 'Biaya Admisi', 'D'),
(37, 50206, 'Biaya Sewa', 'D'),
(38, 50207, 'Biaya Perlengkapan', 'D'),
(39, 50208, 'Biaya Penyusutan Gedung', 'D'),
(40, 50209, 'Biaya Penyusutan Kendaraan', 'D'),
(41, 50210, 'Biaya Penyusutan Perlengkapan', 'D'),
(42, 50211, 'Biaya Iklan', 'D'),
(43, 50212, 'Biaya Listrik, telp, air', 'D'),
(44, 50213, 'Biaya Lain-lain', 'D'),
(45, 60100, 'Pendapatan Non Operasional', 'K'),
(46, 70100, 'Biaya Non Operasional', 'D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rek_jayapura`
--

CREATE TABLE IF NOT EXISTS `rek_jayapura` (
  `id_rek_djj` int(11) NOT NULL AUTO_INCREMENT,
  `no_rek_djj` int(5) NOT NULL,
  `rek_djj` varchar(35) NOT NULL,
  `dk_djj` varchar(1) NOT NULL,
  PRIMARY KEY (`id_rek_djj`),
  UNIQUE KEY `no_rek_jog` (`no_rek_djj`,`rek_djj`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data untuk tabel `rek_jayapura`
--

INSERT INTO `rek_jayapura` (`id_rek_djj`, `no_rek_djj`, `rek_djj`, `dk_djj`) VALUES
(1, 10300, 'Kas Jayapura', 'D'),
(2, 10311, 'Bank xxx Jayapura', 'D'),
(3, 10312, 'Bank yyy Jayapura', 'D'),
(4, 10313, 'Bank zzz Jayapura', 'D'),
(5, 10321, 'Deposit Travast Jayapura', 'D'),
(6, 10330, 'Piutang Jayapura', 'D'),
(7, 10340, 'Perlengkapan Jayapura', 'D'),
(8, 10351, 'Peralatan Jayapura', 'D'),
(9, 10351, 'Penyusutan Perlengkapan Jayapura', 'D'),
(10, 10370, 'Kendaraan Jayapura', 'D'),
(11, 10371, 'Penyusutan Kendaraan Jayapura', 'D'),
(12, 10380, 'Gedung Jayapura', 'D'),
(13, 10381, 'Penyusutan Gedung Jayapura', 'D'),
(14, 10390, 'Tanah Jayapura', 'D'),
(15, 20300, 'Utang Usaha Jayapura', 'K'),
(16, 20310, 'Utang Transportasi Jayapura', 'K'),
(17, 20320, 'Utang Hotel Jayapura', 'K'),
(18, 20330, 'Utang Restoran Jayapura', 'K'),
(19, 20340, 'Utang Pajak Jayapura', 'K'),
(20, 20350, 'Utang refund', 'K'),
(21, 30300, 'Modal Jayapura', 'K'),
(22, 30301, 'Prive Jayapura', 'D'),
(23, 30302, 'Laba Ditahan Jayapura', 'K'),
(24, 40300, 'Pendapatan Tiket', 'K'),
(25, 40301, 'Pendapatan Wisata', 'K'),
(26, 40302, 'Pendapatan Voucher Hotel', 'K'),
(27, 40303, 'Pendapatan Sewa Bus & Mobil', 'K'),
(28, 40304, 'Pendapatan E-Voucher', 'K'),
(29, 50300, 'Biaya Gaji', 'D'),
(30, 50301, 'Biaya Transpor', 'D'),
(31, 50302, 'Biaya Hotel', 'D'),
(32, 50303, 'Biaya Restoran', 'D'),
(33, 50304, 'Biaya Pemandu dan Kru', 'D'),
(34, 50305, 'Biaya Admisi', 'D'),
(35, 50306, 'Biaya Sewa', 'D'),
(36, 50307, 'Biaya Perlengkapan', 'D'),
(37, 50308, 'Biaya Penyusutan Gedung', 'D'),
(38, 50309, 'Biaya Penyusutan Kendaraan', 'D'),
(39, 50310, 'Biaya Penyusutan Perlengkapan', 'D'),
(40, 50311, 'Biaya Iklan', 'D'),
(41, 50312, 'Biaya Listrik, telp, air', 'D'),
(42, 50313, 'Biaya lain-lain', 'D'),
(43, 60100, 'Pendapatan Non Operasional', 'K'),
(44, 70100, 'Biaya Non Operasional', 'D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rek_jogja`
--

CREATE TABLE IF NOT EXISTS `rek_jogja` (
  `id_rek_jog` int(11) NOT NULL AUTO_INCREMENT,
  `no_rek_jog` int(5) NOT NULL,
  `rek_jog` varchar(35) NOT NULL,
  `dk_jog` varchar(1) NOT NULL,
  PRIMARY KEY (`id_rek_jog`),
  UNIQUE KEY `no_rek_jog` (`no_rek_jog`,`rek_jog`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data untuk tabel `rek_jogja`
--

INSERT INTO `rek_jogja` (`id_rek_jog`, `no_rek_jog`, `rek_jog`, `dk_jog`) VALUES
(1, 10100, 'Kas Yogyakarta', 'D'),
(2, 10111, 'Bank Mandiri Center', 'D'),
(3, 10112, 'Bank BNI Center', 'D'),
(4, 10113, 'Bank BCA Center', 'D'),
(5, 10114, 'Bank BRI Center', 'D'),
(6, 10115, 'Bank NIAGA Center', 'D'),
(7, 10121, 'Deposit Citos', 'D'),
(8, 10122, 'Deposit Batavia', 'D'),
(9, 10123, 'Deposit Lion', 'D'),
(10, 10130, 'Piutang Yogya', 'D'),
(11, 10140, 'Perlengkapan', 'D'),
(12, 10150, 'Peralatan Yogyakarta', 'D'),
(13, 10151, 'Penyusutan Perlengkapan Yogyakarta', 'D'),
(14, 10170, 'Kendaraan Yogyakarta', 'D'),
(15, 10171, 'Penyusutan Kendaraan Yogyakarta', 'D'),
(16, 10180, 'Gedung Yogyakarta', 'D'),
(17, 10181, 'Penyusutan Gedung Yogyakarta', 'D'),
(18, 10190, 'Tanah Yogyakarta', 'D'),
(19, 20100, 'Utang Usaha Yogyakarta', 'K'),
(20, 20110, 'Utang Transportasi', 'K'),
(21, 20120, 'Utang Hotel', 'K'),
(22, 20130, 'Utang Restoran', 'K'),
(23, 20140, 'Utang Pajak', 'K'),
(24, 20150, 'Utang Refund', 'K'),
(25, 20160, 'Utang Deposit Travast', 'K'),
(26, 30100, 'Modal', 'K'),
(27, 30101, 'Prive Yogyakarta', 'D'),
(28, 30102, 'Laba Ditahan Smart', 'K'),
(29, 40100, 'Pendapatan Tiket', 'K'),
(30, 40101, 'Pendapatan Wisata', 'K'),
(31, 40102, 'Pendapatan Voucher Hotel', 'K'),
(32, 40103, 'Pendapatan Sewa Bus & Mobil', 'K'),
(33, 40104, 'Pendapatan E-Voucher', 'K'),
(34, 40105, 'Pendapatan Haji Umroh', 'K'),
(35, 40106, 'Pendapatan IT Division', 'K'),
(36, 50100, 'Biaya Gaji', 'D'),
(37, 50101, 'Biaya Transpor', 'D'),
(38, 50102, 'Biaya Hotel', 'D'),
(39, 50103, 'Biaya Restoran', 'D'),
(40, 50104, 'Biaya Pemandu dan Kru', 'D'),
(41, 50105, 'Biaya Admisi', 'D'),
(42, 50106, 'Biaya Sewa', 'D'),
(43, 50107, 'Biaya Perlengkapan', 'D'),
(44, 50108, 'Biaya Penyusutan Gedung', 'D'),
(45, 50109, 'Biaya Penyusutan Kendaraan', 'D'),
(46, 50110, 'Biaya Penyusutan Perlengkapan', 'D'),
(47, 50111, 'Biaya Iklan', 'D'),
(48, 50112, 'Biaya Listrik, telp, air', 'D'),
(49, 50113, 'Biaya lain-lain', 'D'),
(50, 60100, 'Pendapatan Non Operasional', 'K'),
(51, 70100, 'Biaya Non Operasional', 'D');

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
  `code_tkt` varchar(10) NOT NULL,
  `code_tur` varchar(10) NOT NULL,
  `notrans_bdg` varchar(15) NOT NULL,
  `tgltrans_bdg` date NOT NULL,
  `jamtrans_bdg` time NOT NULL,
  `ket_bdg` text NOT NULL,
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
  `operator_bdg` varchar(17) NOT NULL,
  PRIMARY KEY (`id_bdg`),
  UNIQUE KEY `notrans_jog` (`notrans_bdg`),
  UNIQUE KEY `code_tur` (`code_tur`),
  UNIQUE KEY `code_tkt` (`code_tkt`)
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
  `code_tkt` varchar(10) NOT NULL,
  `code_tur` varchar(10) NOT NULL,
  `notrans_djj` varchar(15) NOT NULL,
  `tgltrans_djj` date NOT NULL,
  `jamtrans_djj` time NOT NULL,
  `ket_djj` text NOT NULL,
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
  `operator_djj` varchar(17) NOT NULL,
  PRIMARY KEY (`id_djj`),
  UNIQUE KEY `notrans_jog` (`notrans_djj`),
  UNIQUE KEY `code_tkt` (`code_tkt`),
  UNIQUE KEY `code_tur` (`code_tur`)
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
  `code_tkt` varchar(10) NOT NULL,
  `code_tur` varchar(10) NOT NULL,
  `notrans_jog` varchar(15) NOT NULL,
  `tgltrans_jog` date NOT NULL,
  `jamtrans_jog` time NOT NULL,
  `ket_jog` text NOT NULL,
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
  `operator_jog` varchar(17) NOT NULL,
  PRIMARY KEY (`id_jog`),
  UNIQUE KEY `notrans_jog` (`notrans_jog`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `trans_jogja`
--

INSERT INTO `trans_jogja` (`id_jog`, `client_jog`, `hp_jog`, `code_tkt`, `code_tur`, `notrans_jog`, `tgltrans_jog`, `jamtrans_jog`, `ket_jog`, `deb_ref_jog`, `deb_ref2_jog`, `deb_ref3_jog`, `deb_ref4_jog`, `deb_jml_jog`, `deb_jml2_jog`, `deb_jml3_jog`, `deb_jml4_jog`, `kre_ref_jog`, `kre_ref2_jog`, `kre_ref3_jog`, `kre_ref4_jog`, `kre_jml_jog`, `kre_jml2_jog`, `kre_jml3_jog`, `kre_jml4_jog`, `operator_jog`) VALUES
(2, 'AMYDIN SYAHIRA', '089671384574', '', '0001', '1103300002', '2011-03-30', '22:53:34', 'LIBURAN BALI 3 BUS', '40101', '', '', '', 253000000, 0, 0, 0, '', '10111', '', '', 0, 253000000, 0, 0, '1'),
(3, 'AMYDIN SYAHIRA', '089671384574', '0002', '', '1103310001', '2011-03-31', '18:50:08', 'BATAVIA AIR "GTEYEI"', '40100', '', '', '', 2500000, 0, 0, 0, '', '10122', '', '', 0, 2500000, 0, 0, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trans_tiket`
--

CREATE TABLE IF NOT EXISTS `trans_tiket` (
  `id_tkt` int(11) NOT NULL AUTO_INCREMENT,
  `client_tkt` varchar(20) NOT NULL,
  `hp_tkt` varchar(20) NOT NULL,
  `code_tkt` varchar(10) NOT NULL,
  `notrans_tkt` varchar(15) NOT NULL,
  `tgltrans_tkt` date NOT NULL,
  `jamtrans_tkt` time NOT NULL,
  `ket_tkt` text NOT NULL,
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
  `operator_tkt` varchar(17) NOT NULL,
  PRIMARY KEY (`id_tkt`),
  UNIQUE KEY `notrans_jog` (`notrans_tkt`),
  UNIQUE KEY `nocode` (`code_tkt`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `trans_tiket`
--

INSERT INTO `trans_tiket` (`id_tkt`, `client_tkt`, `hp_tkt`, `code_tkt`, `notrans_tkt`, `tgltrans_tkt`, `jamtrans_tkt`, `ket_tkt`, `deb_ref_tkt`, `deb_ref2_tkt`, `deb_ref3_tkt`, `deb_ref4_tkt`, `deb_jml_tkt`, `deb_jml2_tkt`, `deb_jml3_tkt`, `deb_jml4_tkt`, `kre_ref_tkt`, `kre_ref2_tkt`, `kre_ref3_tkt`, `kre_ref4_tkt`, `kre_jml_tkt`, `kre_jml2_tkt`, `kre_jml3_tkt`, `kre_jml4_tkt`, `profit_tkt`, `branch_tkt`, `operator_tkt`) VALUES
(2, 'AMYDIN SYAHIRA', '089671384574', '0002', '1103310001', '2011-03-31', '18:50:08', 'BATAVIA AIR "GTEYEI"', 'C', '', '', '', 2500000, 0, 0, 0, '', '', '', '', 0, 2500000, 0, 0, 15000, 'Yogyakarta', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trans_tour`
--

CREATE TABLE IF NOT EXISTS `trans_tour` (
  `id_tur` int(11) NOT NULL AUTO_INCREMENT,
  `client_tur` varchar(20) NOT NULL,
  `hp_tur` varchar(20) NOT NULL,
  `code_tur` varchar(10) NOT NULL,
  `notrans_tur` varchar(15) NOT NULL,
  `tgltrans_tur` date NOT NULL,
  `jamtrans_tur` time NOT NULL,
  `ket_tur` text NOT NULL,
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
  `operator_tur` varchar(17) NOT NULL,
  PRIMARY KEY (`id_tur`),
  UNIQUE KEY `notrans_jog` (`notrans_tur`),
  UNIQUE KEY `code_tur` (`code_tur`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `trans_tour`
--

INSERT INTO `trans_tour` (`id_tur`, `client_tur`, `hp_tur`, `code_tur`, `notrans_tur`, `tgltrans_tur`, `jamtrans_tur`, `ket_tur`, `deb_ref_tur`, `deb_ref2_tur`, `deb_ref3_tur`, `deb_ref4_tur`, `deb_jml_tur`, `deb_jml2_tur`, `deb_jml3_tur`, `deb_jml4_tur`, `kre_ref_tur`, `kre_ref2_tur`, `kre_ref3_tur`, `kre_ref4_tur`, `kre_jml_tur`, `kre_jml2_tur`, `kre_jml3_tur`, `kre_jml4_tur`, `profit_tur`, `branch_tur`, `operator_tur`) VALUES
(1, 'AMYDIN SYAHIRA', '089671384574', '0001', '1103300001', '2011-03-30', '22:53:34', 'LIBURAN BALI 3 BUS', 'A', '', '', '', 253000000, 0, 0, 0, '', '', '', '', 0, 253000000, 0, 0, 15000000, 'Yogyakarta', '1');
