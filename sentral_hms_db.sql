-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2018 pada 04.18
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel_acc_name`
--

CREATE TABLE `hotel_acc_name` (
  `id_acc_name` int(11) NOT NULL,
  `acc_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel_agent_guest`
--

CREATE TABLE `hotel_agent_guest` (
  `id_agent` int(11) NOT NULL,
  `name_agent` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel_agent_guest`
--

INSERT INTO `hotel_agent_guest` (`id_agent`, `name_agent`) VALUES
(1, 'Agoda'),
(2, 'Traveloka'),
(3, 'Trivago'),
(4, 'Airy'),
(5, 'Pegipegi'),
(6, 'Mister Aladin'),
(7, 'Booking.com'),
(8, 'TripAdvisor'),
(9, 'Hotels.com'),
(10, 'Airbnb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel_city`
--

CREATE TABLE `hotel_city` (
  `id_city` int(11) NOT NULL,
  `id_city_province` int(11) NOT NULL,
  `name_city` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel_city`
--

INSERT INTO `hotel_city` (`id_city`, `id_city_province`, `name_city`) VALUES
(206, 3, 'Magelang'),
(207, 3, 'Pekalongan'),
(209, 3, 'Purwokerto'),
(210, 3, 'Salatiga'),
(211, 3, 'Semarang'),
(212, 3, 'Surakarta'),
(213, 3, 'Tegal'),
(214, 4, 'Bukittinggi'),
(215, 4, 'Padang'),
(216, 4, 'Padangpanjang'),
(217, 4, 'Pariaman'),
(218, 4, 'Payakumbuh'),
(219, 4, 'Sawahlunto'),
(220, 4, 'Solok'),
(224, 5, 'Bandung'),
(225, 5, 'Bekasi'),
(226, 5, 'Bogor'),
(227, 5, 'Cimahi'),
(228, 5, 'Cirebon'),
(229, 5, 'Depok'),
(230, 5, 'Sukabumi'),
(231, 5, 'Tasikmalaya'),
(232, 5, 'Banjar'),
(233, 6, 'Batu'),
(234, 6, 'Blitar'),
(235, 6, 'Kediri'),
(236, 6, 'Madiun'),
(237, 6, 'Malang'),
(238, 6, 'Mojokerto'),
(239, 6, 'Pasuruan'),
(240, 6, 'Probolinggo'),
(241, 6, 'Surabaya'),
(242, 9, 'Kota Adm. Jakarta Barat'),
(243, 9, 'Kota Adm. Jakarta Timur'),
(244, 9, 'Kota Adm. Jakarta Selatan'),
(245, 9, 'Kota Adm. Jakarta Utara'),
(246, 9, 'Kota Adm. Jakarta Pusat'),
(247, 10, 'Cilegon'),
(248, 10, 'Tangerang'),
(249, 10, 'Tangerang Selatan'),
(250, 10, 'Serang'),
(251, 11, 'Banda Aceh'),
(252, 11, 'Langsa'),
(253, 11, 'Lhokseumawe'),
(254, 11, 'Meulaboh'),
(255, 11, 'Sabang'),
(256, 11, 'Subulussalam'),
(257, 12, 'Binjai'),
(258, 12, 'Medan'),
(259, 12, 'Padang Sidempuan'),
(260, 12, 'Pematangsiantar'),
(261, 12, 'Sibolga'),
(262, 12, 'Tanjungbalai'),
(263, 12, 'Tebingtinggi'),
(264, 13, 'Dumai'),
(265, 13, 'Pekanbaru'),
(266, 14, 'Sungai Penuh'),
(267, 14, 'Jambi'),
(268, 15, 'Lubuklinggau'),
(269, 15, 'Pagaralam'),
(270, 15, 'Palembang'),
(271, 15, 'Prabumulih'),
(272, 16, 'Bengkulu'),
(273, 17, 'Pangkalpinang'),
(274, 18, 'Bandar Lampung'),
(275, 18, 'Metro'),
(276, 19, 'Batam'),
(277, 19, 'Tanjungpinang'),
(278, 20, 'Yogyakarta'),
(280, 21, 'Denpasar'),
(281, 22, 'Bima'),
(282, 22, 'Mataram'),
(283, 23, 'Kupang'),
(284, 24, 'Pontianak'),
(285, 24, 'Singkawang'),
(286, 25, 'Palangkaraya'),
(287, 26, 'Banjarbaru'),
(288, 26, 'Banjarmasin'),
(289, 27, 'Balikpapan'),
(290, 27, 'Bontang'),
(291, 27, 'Samarinda'),
(292, 28, 'Tarakan'),
(293, 29, 'Bitung'),
(294, 29, 'Kotamobagu'),
(295, 29, 'Manado'),
(296, 29, 'Tomohon'),
(297, 30, 'Palu'),
(298, 31, 'Bau - bau'),
(299, 31, 'Kendari'),
(300, 32, 'Makassar'),
(301, 32, 'Palopo'),
(302, 32, 'Pare - Pare'),
(303, 33, 'Gorontalo'),
(304, 34, 'Kab. Majene'),
(305, 34, 'Kab. Mamasa'),
(306, 34, 'Kab. Mamuju'),
(307, 34, 'Kab. Mamuju Tengah'),
(308, 34, 'Kab. Pasangkayu'),
(309, 34, 'Kab. Polewali Mandar'),
(310, 35, 'Ambon'),
(311, 35, 'Tual'),
(312, 36, 'Ternate'),
(313, 36, 'Tidore Kepulauan'),
(314, 37, 'Jayapura'),
(315, 38, 'Sorong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel_country`
--

CREATE TABLE `hotel_country` (
  `id_country` int(11) NOT NULL,
  `name_country` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel_country`
--

INSERT INTO `hotel_country` (`id_country`, `name_country`) VALUES
(3, 'Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel_currency_guest`
--

CREATE TABLE `hotel_currency_guest` (
  `id_currency` int(11) NOT NULL,
  `name_currency` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel_currency_guest`
--

INSERT INTO `hotel_currency_guest` (`id_currency`, `name_currency`) VALUES
(1, 'Rupiah'),
(2, 'Dollar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel_detail_guest_type`
--

CREATE TABLE `hotel_detail_guest_type` (
  `id_detail_guest_type` int(11) NOT NULL,
  `detail_type_guest` varchar(100) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `id_join_guest_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel_detail_guest_type`
--

INSERT INTO `hotel_detail_guest_type` (`id_detail_guest_type`, `detail_type_guest`, `detail`, `id_join_guest_type`) VALUES
(10, 'GOVERNMENT', 'BUMN', 3),
(12, 'GOVERNMENT', 'TELKOM', 3),
(13, 'COMPANY', 'PT BUMI PARAMA WISESA', 2),
(14, 'GOVERNMENT', 'KEMENTRIAN DALAM NEGERI', 3),
(15, 'COMPANY', 'PT BUMI PARAMA WISESA', 2),
(17, 'ONLINE TRAVEL AGENT', 'TRAVELOKA', 4),
(18, 'ONLINE TRAVEL AGENT', 'AGODA.COM', 4),
(19, 'ONLINE TRAVEL AGENT', 'PEGIPEGI.COM', 4),
(21, 'COMPANY', 'PT. SENTRAL MITRA INFORMATIKA', 2),
(22, 'WALK IN', 'WALK IN', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel_grup_guest`
--

CREATE TABLE `hotel_grup_guest` (
  `id_group` int(11) NOT NULL,
  `name_group` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel_grup_guest`
--

INSERT INTO `hotel_grup_guest` (`id_group`, `name_group`) VALUES
(1, 'PT. SMI'),
(5, 'PT. Sentral Mitra Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel_guest_type`
--

CREATE TABLE `hotel_guest_type` (
  `id_guest_type` int(11) NOT NULL,
  `guest_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel_guest_type`
--

INSERT INTO `hotel_guest_type` (`id_guest_type`, `guest_type`) VALUES
(2, 'COMPANY'),
(3, 'GOVERNMENT'),
(4, 'ONLINE TRAVEL AGENT'),
(5, 'TOUR AGENT'),
(7, 'WHOLESALER'),
(8, 'WALK IN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel_identity_tipe`
--

CREATE TABLE `hotel_identity_tipe` (
  `id_identity_tipe` int(11) NOT NULL,
  `name_identity` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel_identity_tipe`
--

INSERT INTO `hotel_identity_tipe` (`id_identity_tipe`, `name_identity`) VALUES
(2, 'PASSPORT'),
(3, 'ID CARD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel_information`
--

CREATE TABLE `hotel_information` (
  `id_hotel` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `fax` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `province` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel_information`
--

INSERT INTO `hotel_information` (`id_hotel`, `company_name`, `email`, `website`, `phone`, `fax`, `address`, `city`, `zip_code`, `province`, `country`) VALUES
(45, 'Hotel Super Quality Indonesia', 'HSQI@HSQI.co.id', 'HSQI.co.id', '02174975894', '02173898471', 'Jl. Cirebon Raya Besar', '286', 28740, '25', '3'),
(46, 'Hotel Super Quality Indonesia Cabang 1', 'HSQI1@HSQI.co.id', 'HSQI.co.id', '083789288398', '02173898471', 'Jl. Banjarmasij Raya', '', 12312, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel_payment_detail`
--

CREATE TABLE `hotel_payment_detail` (
  `id_pay_detail` int(11) NOT NULL,
  `id_reservation` int(11) NOT NULL,
  `total` varchar(200) NOT NULL,
  `id_acc_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel_promo`
--

CREATE TABLE `hotel_promo` (
  `id_promo` int(11) NOT NULL,
  `name_promo` varchar(200) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `status_promo` varchar(200) NOT NULL,
  `code_promo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel_promo`
--

INSERT INTO `hotel_promo` (`id_promo`, `name_promo`, `start_date`, `end_date`, `status_promo`, `code_promo`) VALUES
(1, 'Birthday Hotel Prasanthi', '2018-11-09 00:01:00', '2018-11-09 23:59:00', 'INACTIVE', 'Birthday20Prasanthi (Expired)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel_province`
--

CREATE TABLE `hotel_province` (
  `id_province` int(11) NOT NULL,
  `id_province_country` int(11) NOT NULL,
  `name_province` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel_province`
--

INSERT INTO `hotel_province` (`id_province`, `id_province_country`, `name_province`) VALUES
(3, 3, 'Jawa Tengah'),
(4, 3, 'Sumatera Barat'),
(5, 3, 'Jawa Barat'),
(6, 3, 'Jawa Timur'),
(9, 3, 'DKI Jakarta'),
(10, 3, 'Banten'),
(11, 3, 'Aceh'),
(12, 3, 'Sumatera Utara'),
(13, 3, 'Riau'),
(14, 3, 'Jambi'),
(15, 3, 'Sumatera Selatan'),
(16, 3, 'Bengkulu'),
(17, 3, 'Kepulauan Bangka Belitung'),
(18, 3, 'Lampung'),
(19, 3, 'Kepulauan Riau'),
(20, 3, 'DI Yogyakarta'),
(21, 3, 'Bali'),
(22, 3, 'Nusa Tenggara Barat'),
(23, 3, 'Nusa Tenggara Timur'),
(24, 3, 'Kalimantan Barat'),
(25, 3, 'Kalimantan Tengah'),
(26, 3, 'Kalimantan Selatan'),
(27, 3, 'Kalimantan Timur'),
(28, 3, 'Kalimantan Utara'),
(29, 3, 'Sulawesi Utara'),
(30, 3, 'Sulawesi Tengah'),
(31, 3, 'Sulawesi Tenggara'),
(32, 3, 'Sulawesi Selatan'),
(33, 3, 'Gorontalo'),
(34, 3, 'Sulawesi Barat'),
(35, 3, 'Maluku'),
(36, 3, 'Maluku Utara'),
(37, 3, 'Papua'),
(38, 3, 'Papua Barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel_region`
--

CREATE TABLE `hotel_region` (
  `id_region` int(11) NOT NULL,
  `name_region` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel_region`
--

INSERT INTO `hotel_region` (`id_region`, `name_region`) VALUES
(1, 'Asia'),
(2, 'Europe'),
(3, 'North America'),
(4, 'South America'),
(5, 'Australia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel_registration`
--

CREATE TABLE `hotel_registration` (
  `id_regist` int(11) NOT NULL,
  `segmentation` int(11) NOT NULL,
  `guest_type` int(11) NOT NULL,
  `detail_guest_type` int(11) NOT NULL,
  `tittle` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `middle_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `identity_foto` varchar(200) NOT NULL,
  `identity_tipe` int(11) NOT NULL,
  `identity_number` int(20) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `regist_country` int(11) NOT NULL,
  `regist_province` int(11) NOT NULL,
  `regist_city` int(11) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `adf_date` datetime NOT NULL,
  `adt_date` datetime NOT NULL,
  `total_pax` int(11) NOT NULL,
  `guest_room_type` int(11) NOT NULL,
  `price_regist` double NOT NULL,
  `no_of_room` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `pay_method` varchar(200) NOT NULL,
  `stat_payment` varchar(200) NOT NULL,
  `tot_bill` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel_registration`
--

INSERT INTO `hotel_registration` (`id_regist`, `segmentation`, `guest_type`, `detail_guest_type`, `tittle`, `first_name`, `middle_name`, `last_name`, `identity_foto`, `identity_tipe`, `identity_number`, `gender`, `email`, `phone`, `regist_country`, `regist_province`, `regist_city`, `zip_code`, `address`, `adf_date`, `adt_date`, `total_pax`, `guest_room_type`, `price_regist`, `no_of_room`, `status`, `remarks`, `pay_method`, `stat_payment`, `tot_bill`) VALUES
(14, 9, 4, 17, 'Mr', 'Rofid', 'Oke', 'Aljabar', 'PTSMI.jpg', 3, 1234567890, 'Male', 'rofid@sentral.id', '901236123812', 3, 9, 244, 12345, 'Jl. Raya 123', '2018-11-11 12:30:00', '2018-11-11 03:49:00', 3, 70, 750000, 172, '2', 'Extra', 'DEBIT', 'incomplete', '30.000.000'),
(15, 9, 4, 19, 'Mr', 'Prakoso', 'Three', 'Yanto', 'BSP.jpg', 3, 2147483647, 'Male', 'prakoso@gmail.com', '087839827898', 3, 38, 315, 12670, 'Testing Jalanan 321', '2018-11-08 12:03:00', '2018-11-10 12:03:00', 3, 70, 750000, 172, '1', 'Testing Remarks', 'CREDIT', 'incomplete', '123.123.123.123'),
(16, 6, 4, 18, 'Mr', 'Test depan', 'tengah', 'belakang', 'BDGULUNGDURIAN.jpg', 2, 2147483647, 'Female', 'c@c.g', '987654', 3, 6, 240, 9876, 'Jl. Yuk', '2018-11-15 12:03:00', '2018-11-16 12:03:00', 1, 70, 750000, 167, '2', 'Karang', 'CREDIT', 'complete', '123.456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel_reservation`
--

CREATE TABLE `hotel_reservation` (
  `id_reservation` int(11) NOT NULL,
  `segmentation` int(11) NOT NULL,
  `guest_type` int(11) NOT NULL,
  `detail_guest_type` int(11) NOT NULL,
  `tittle` varchar(100) NOT NULL,
  `first_name` varchar(99) NOT NULL,
  `middle_name` varchar(200) NOT NULL,
  `last_name` varchar(99) NOT NULL,
  `identity_foto` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `regist_country` int(11) NOT NULL,
  `regist_province` int(11) NOT NULL,
  `regist_city` int(11) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `arrival_date` datetime NOT NULL,
  `depart_date` datetime NOT NULL,
  `room_type` varchar(99) NOT NULL,
  `no_of_room` varchar(99) NOT NULL,
  `room_rate` varchar(200) NOT NULL,
  `total_pax` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `phone_number` varchar(99) NOT NULL,
  `identity_tipe` varchar(99) NOT NULL,
  `identity_number` varchar(99) NOT NULL,
  `address` varchar(99) NOT NULL,
  `pay_method` varchar(55) NOT NULL,
  `status` int(11) NOT NULL,
  `val_code` varchar(55) NOT NULL,
  `remarks` varchar(99) NOT NULL,
  `stat_payment` varchar(200) NOT NULL,
  `tot_tagihan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel_reservation`
--

INSERT INTO `hotel_reservation` (`id_reservation`, `segmentation`, `guest_type`, `detail_guest_type`, `tittle`, `first_name`, `middle_name`, `last_name`, `identity_foto`, `gender`, `regist_country`, `regist_province`, `regist_city`, `zip_code`, `arrival_date`, `depart_date`, `room_type`, `no_of_room`, `room_rate`, `total_pax`, `email`, `phone_number`, `identity_tipe`, `identity_number`, `address`, `pay_method`, `status`, `val_code`, `remarks`, `stat_payment`, `tot_tagihan`) VALUES
(42, 9, 4, 19, 'Mr', 'Rio', 'Three', 'Laksono', 'Just_Logo1.PNG', 'Male', 3, 6, 237, 12345, '2018-11-08 12:03:00', '2018-11-10 12:03:00', '70', '167', '750000', '1', 'rio@gmail.com', '0783 - 9829 - 8833', '3', '12345667890', 'Jl. Malang Raya No. 1', 'DEBIT', 2, '', 'Extra 1 big pillow', '2', '2.500.000'),
(43, 9, 4, 19, 'Mr', 'Prakoso', 'Three', 'Yanto', 'kabel_usb_2_02.jpg', 'Male', 3, 10, 249, 12345, '2018-11-08 12:03:00', '2018-11-10 12:03:00', '70', '169', '750000', '2', 'prakoso@gmail.com', '0876 - 6324 - 8234', '3', '123123123123', 'Jl. Tangerang Selatan Raya No. 1', 'CASH', 1, '', 'Added 1 Pillow', '1', '2.783.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel_role`
--

CREATE TABLE `hotel_role` (
  `id_role` int(11) NOT NULL,
  `name_role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel_role`
--

INSERT INTO `hotel_role` (`id_role`, `name_role`) VALUES
(9, 'Manager'),
(10, 'Receptionist'),
(11, 'Staff'),
(14, 'Direktur Utama'),
(78, 'Kasir'),
(80, 'Admin'),
(81, 'Default');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel_segmentation`
--

CREATE TABLE `hotel_segmentation` (
  `id_segment` int(11) NOT NULL,
  `segment` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel_segmentation`
--

INSERT INTO `hotel_segmentation` (`id_segment`, `segment`) VALUES
(6, 'BUSINESS GROUP'),
(7, 'BUSINESS INDIVIDUAL'),
(8, 'LEISURE GROUP'),
(9, 'LEISURE INDIVIDUAL'),
(10, 'OTHER COMPLIMENTARY');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel_status_guest`
--

CREATE TABLE `hotel_status_guest` (
  `id_status` int(11) NOT NULL,
  `nama_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel_status_guest`
--

INSERT INTO `hotel_status_guest` (`id_status`, `nama_status`) VALUES
(1, 'CONFIRM'),
(2, 'TENTATIVE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel_stat_payment`
--

CREATE TABLE `hotel_stat_payment` (
  `id_stat_payment` int(11) NOT NULL,
  `status_payment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel_stat_payment`
--

INSERT INTO `hotel_stat_payment` (`id_stat_payment`, `status_payment`) VALUES
(1, 'Complete'),
(2, 'Incomplete');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel_user`
--

CREATE TABLE `hotel_user` (
  `id_user` int(11) NOT NULL,
  `role` varchar(200) NOT NULL,
  `user_photo` varchar(200) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile_phone` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `re_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel_user`
--

INSERT INTO `hotel_user` (`id_user`, `role`, `user_photo`, `full_name`, `email`, `mobile_phone`, `password`, `re_password`) VALUES
(56, 'Admin', 'AD2.jpg', 'Administrator', 'admin@hms.co.id', '0878889827837', '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3'),
(63, 'Admin', 'huhue2.PNG', 'Test', 'test@gmail.com', '23123', '1b5ecfa895cde93abc0a9bf6fa71d18c', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel_vp`
--

CREATE TABLE `hotel_vp` (
  `id_hotel_vp` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `nickname` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `province` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `role_vp` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_detail_fasilitas`
--

CREATE TABLE `master_detail_fasilitas` (
  `id_detail` int(11) NOT NULL,
  `id_fasilitas` int(11) NOT NULL,
  `dsc_detail` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `brand` varchar(55) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_detail_fasilitas`
--

INSERT INTO `master_detail_fasilitas` (`id_detail`, `id_fasilitas`, `dsc_detail`, `qty`, `brand`, `note`) VALUES
(70, 45, 'kasur panjang', 1, '', 'OK'),
(71, 45, 'Guling', 2, '', 'OK'),
(72, 45, 'Bantall', 2, '', 'OKK'),
(73, 45, 'Kapuk', 2, '', 'OK'),
(90, 19, 'HOTEL TOWELS', 2, '', ''),
(91, 19, 'HAIR DRYERS', 1, 'PHILIPS', ''),
(92, 19, 'HOTEL TOILETS', 1, '', ''),
(93, 20, 'HOTEL BEDSPREADS', 1, '', ''),
(94, 20, 'HOTEL PILLOW AND COVERS', 2, '', ''),
(95, 20, 'PHONE', 1, '', ''),
(96, 20, 'CLOCK ', 1, '', ''),
(97, 20, 'AIR CONDITIONER + A/C REMOTE', 1, '', ''),
(98, 20, 'TELEVISION', 1, '', ''),
(99, 46, 'CHAIR', 2, '', ''),
(100, 46, 'TABLE', 1, '', ''),
(102, 47, 'SOFA BIG', 1, '', ''),
(103, 47, 'SOFA SMALL', 2, '', ''),
(104, 47, 'ROUND TABLE ', 1, '', ''),
(105, 19, '', 0, '', ''),
(108, 20, 'TABLE', 1, 'Informa', 'Meja yang bagus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_fasilitas`
--

CREATE TABLE `master_fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `dsc_fasilitas` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_fasilitas`
--

INSERT INTO `master_fasilitas` (`id_fasilitas`, `dsc_fasilitas`) VALUES
(19, 'BATH ROOM'),
(20, 'BED ROOM'),
(46, 'BALCONY'),
(47, 'LIVING ROOM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_room`
--

CREATE TABLE `master_room` (
  `id_room` int(11) NOT NULL,
  `name_room` varchar(40) NOT NULL,
  `type_room` varchar(40) NOT NULL,
  `no_of_room` int(11) NOT NULL,
  `price_room` double NOT NULL,
  `max_person_room` int(11) NOT NULL,
  `fasilitas` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_room`
--

INSERT INTO `master_room` (`id_room`, `name_room`, `type_room`, `no_of_room`, `price_room`, `max_person_room`, `fasilitas`, `status`) VALUES
(167, 'President Suite 1', 'President Suite', 1, 0, 1, '', 5),
(168, 'President Suite 2', 'President Suite', 2, 0, 1, '', 5),
(169, 'President Suite 3', 'President Suite', 3, 0, 1, '', 5),
(171, 'President Suite 4', 'President Suite', 4, 0, 1, '', 5),
(172, 'President Suite 5', 'President Suite', 5, 0, 1, '', 5),
(173, 'President Suite 6', 'President Suite', 6, 0, 1, '', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_room_fasilitas`
--

CREATE TABLE `master_room_fasilitas` (
  `id_master_room_fasilitas` int(11) NOT NULL,
  `id_room` int(11) NOT NULL,
  `id_detail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_room_fasilitas`
--

INSERT INTO `master_room_fasilitas` (`id_master_room_fasilitas`, `id_room`, `id_detail`) VALUES
(14, 4, 60),
(15, 4, 62),
(16, 162, 60),
(17, 162, 62),
(18, 9, 59),
(19, 9, 65),
(20, 50, 60),
(21, 50, 65),
(22, 51, 63),
(23, 51, 65),
(24, 9, 60),
(25, 9, 62),
(26, 126, 60),
(27, 126, 62),
(28, 126, 65),
(29, 122, 62),
(30, 122, 63),
(31, 122, 65),
(32, 122, 68),
(33, 122, 69),
(34, 118, 60),
(35, 118, 69),
(36, 118, 71),
(37, 118, 72),
(38, 9, 70),
(39, 4, 60),
(40, 163, 59),
(41, 163, 60),
(42, 163, 62),
(43, 120, 59),
(44, 120, 68),
(45, 120, 73),
(46, 116, 63),
(47, 116, 68),
(48, 116, 69),
(49, 4, 60),
(50, 4, 62),
(51, 4, 63),
(52, 4, 69),
(53, 127, 76),
(54, 127, 69),
(55, 127, 72),
(56, 124, 60),
(57, 124, 69),
(58, 124, 70),
(64, 164, 62),
(65, 164, 76),
(66, 164, 86),
(67, 164, 72),
(148, 169, 91),
(149, 169, 97),
(150, 169, 102),
(151, 168, 99),
(152, 168, 97),
(153, 168, 104),
(157, 167, 99),
(158, 167, 90),
(159, 167, 97),
(160, 167, 102);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_status`
--

CREATE TABLE `master_status` (
  `id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_status`
--

INSERT INTO `master_status` (`id`, `status`) VALUES
(1, 'Reserved'),
(2, 'Day Use'),
(3, 'Staying Guest'),
(4, 'Checkout'),
(5, 'Available'),
(6, 'OOS/OOO'),
(7, 'Old Room'),
(8, 'No Show');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_tax`
--

CREATE TABLE `master_tax` (
  `id` int(11) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `nominal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_tax`
--

INSERT INTO `master_tax` (`id`, `nama`, `nominal`) VALUES
(1, 'tax', 0.11),
(2, 'servicewqe', 123);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_tipe`
--

CREATE TABLE `master_tipe` (
  `id_tipe` int(11) NOT NULL,
  `dsc_tipe` varchar(50) NOT NULL,
  `price` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_tipe`
--

INSERT INTO `master_tipe` (`id_tipe`, `dsc_tipe`, `price`) VALUES
(70, 'President Suite', 750000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment_method`
--

CREATE TABLE `payment_method` (
  `id_pay_method` int(11) NOT NULL,
  `payment_method` varchar(200) NOT NULL,
  `status_pay_method` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `payment_method`
--

INSERT INTO `payment_method` (`id_pay_method`, `payment_method`, `status_pay_method`) VALUES
(1, 'DEBIT', 0),
(2, 'CREDIT', 0),
(3, 'CASH', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hotel_acc_name`
--
ALTER TABLE `hotel_acc_name`
  ADD PRIMARY KEY (`id_acc_name`);

--
-- Indeks untuk tabel `hotel_agent_guest`
--
ALTER TABLE `hotel_agent_guest`
  ADD PRIMARY KEY (`id_agent`);

--
-- Indeks untuk tabel `hotel_city`
--
ALTER TABLE `hotel_city`
  ADD PRIMARY KEY (`id_city`),
  ADD KEY `id_city_province` (`id_city_province`);

--
-- Indeks untuk tabel `hotel_country`
--
ALTER TABLE `hotel_country`
  ADD PRIMARY KEY (`id_country`);

--
-- Indeks untuk tabel `hotel_currency_guest`
--
ALTER TABLE `hotel_currency_guest`
  ADD PRIMARY KEY (`id_currency`);

--
-- Indeks untuk tabel `hotel_detail_guest_type`
--
ALTER TABLE `hotel_detail_guest_type`
  ADD PRIMARY KEY (`id_detail_guest_type`);

--
-- Indeks untuk tabel `hotel_grup_guest`
--
ALTER TABLE `hotel_grup_guest`
  ADD PRIMARY KEY (`id_group`);

--
-- Indeks untuk tabel `hotel_guest_type`
--
ALTER TABLE `hotel_guest_type`
  ADD PRIMARY KEY (`id_guest_type`);

--
-- Indeks untuk tabel `hotel_identity_tipe`
--
ALTER TABLE `hotel_identity_tipe`
  ADD PRIMARY KEY (`id_identity_tipe`);

--
-- Indeks untuk tabel `hotel_information`
--
ALTER TABLE `hotel_information`
  ADD PRIMARY KEY (`id_hotel`),
  ADD KEY `id_information_country` (`country`),
  ADD KEY `id_information_province` (`province`),
  ADD KEY `id_information_city` (`city`);

--
-- Indeks untuk tabel `hotel_payment_detail`
--
ALTER TABLE `hotel_payment_detail`
  ADD PRIMARY KEY (`id_pay_detail`);

--
-- Indeks untuk tabel `hotel_promo`
--
ALTER TABLE `hotel_promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indeks untuk tabel `hotel_province`
--
ALTER TABLE `hotel_province`
  ADD PRIMARY KEY (`id_province`),
  ADD KEY `id_province_country` (`id_province_country`),
  ADD KEY `id_province_country_2` (`id_province_country`);

--
-- Indeks untuk tabel `hotel_region`
--
ALTER TABLE `hotel_region`
  ADD PRIMARY KEY (`id_region`);

--
-- Indeks untuk tabel `hotel_registration`
--
ALTER TABLE `hotel_registration`
  ADD PRIMARY KEY (`id_regist`);

--
-- Indeks untuk tabel `hotel_reservation`
--
ALTER TABLE `hotel_reservation`
  ADD PRIMARY KEY (`id_reservation`);

--
-- Indeks untuk tabel `hotel_role`
--
ALTER TABLE `hotel_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `hotel_segmentation`
--
ALTER TABLE `hotel_segmentation`
  ADD PRIMARY KEY (`id_segment`);

--
-- Indeks untuk tabel `hotel_status_guest`
--
ALTER TABLE `hotel_status_guest`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `hotel_stat_payment`
--
ALTER TABLE `hotel_stat_payment`
  ADD PRIMARY KEY (`id_stat_payment`);

--
-- Indeks untuk tabel `hotel_user`
--
ALTER TABLE `hotel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `hotel_vp`
--
ALTER TABLE `hotel_vp`
  ADD PRIMARY KEY (`id_hotel_vp`);

--
-- Indeks untuk tabel `master_detail_fasilitas`
--
ALTER TABLE `master_detail_fasilitas`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `master_fasilitas`
--
ALTER TABLE `master_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `master_room`
--
ALTER TABLE `master_room`
  ADD PRIMARY KEY (`id_room`);

--
-- Indeks untuk tabel `master_room_fasilitas`
--
ALTER TABLE `master_room_fasilitas`
  ADD PRIMARY KEY (`id_master_room_fasilitas`);

--
-- Indeks untuk tabel `master_status`
--
ALTER TABLE `master_status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_tax`
--
ALTER TABLE `master_tax`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_tipe`
--
ALTER TABLE `master_tipe`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indeks untuk tabel `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id_pay_method`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hotel_acc_name`
--
ALTER TABLE `hotel_acc_name`
  MODIFY `id_acc_name` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hotel_agent_guest`
--
ALTER TABLE `hotel_agent_guest`
  MODIFY `id_agent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `hotel_city`
--
ALTER TABLE `hotel_city`
  MODIFY `id_city` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

--
-- AUTO_INCREMENT untuk tabel `hotel_country`
--
ALTER TABLE `hotel_country`
  MODIFY `id_country` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `hotel_currency_guest`
--
ALTER TABLE `hotel_currency_guest`
  MODIFY `id_currency` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `hotel_detail_guest_type`
--
ALTER TABLE `hotel_detail_guest_type`
  MODIFY `id_detail_guest_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `hotel_grup_guest`
--
ALTER TABLE `hotel_grup_guest`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `hotel_guest_type`
--
ALTER TABLE `hotel_guest_type`
  MODIFY `id_guest_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `hotel_identity_tipe`
--
ALTER TABLE `hotel_identity_tipe`
  MODIFY `id_identity_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `hotel_information`
--
ALTER TABLE `hotel_information`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `hotel_payment_detail`
--
ALTER TABLE `hotel_payment_detail`
  MODIFY `id_pay_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hotel_promo`
--
ALTER TABLE `hotel_promo`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `hotel_province`
--
ALTER TABLE `hotel_province`
  MODIFY `id_province` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `hotel_region`
--
ALTER TABLE `hotel_region`
  MODIFY `id_region` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `hotel_registration`
--
ALTER TABLE `hotel_registration`
  MODIFY `id_regist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `hotel_reservation`
--
ALTER TABLE `hotel_reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `hotel_role`
--
ALTER TABLE `hotel_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `hotel_segmentation`
--
ALTER TABLE `hotel_segmentation`
  MODIFY `id_segment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `hotel_status_guest`
--
ALTER TABLE `hotel_status_guest`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `hotel_stat_payment`
--
ALTER TABLE `hotel_stat_payment`
  MODIFY `id_stat_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `hotel_user`
--
ALTER TABLE `hotel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `hotel_vp`
--
ALTER TABLE `hotel_vp`
  MODIFY `id_hotel_vp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `master_detail_fasilitas`
--
ALTER TABLE `master_detail_fasilitas`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT untuk tabel `master_fasilitas`
--
ALTER TABLE `master_fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `master_room`
--
ALTER TABLE `master_room`
  MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT untuk tabel `master_room_fasilitas`
--
ALTER TABLE `master_room_fasilitas`
  MODIFY `id_master_room_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT untuk tabel `master_status`
--
ALTER TABLE `master_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `master_tax`
--
ALTER TABLE `master_tax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `master_tipe`
--
ALTER TABLE `master_tipe`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT untuk tabel `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id_pay_method` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
