-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 15, 2019 at 05:06 PM
-- Server version: 5.7.26
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dekom`
--

-- --------------------------------------------------------

--
-- Table structure for table `ang_plth`
--

DROP TABLE IF EXISTS `ang_plth`;
CREATE TABLE IF NOT EXISTS `ang_plth` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `period_id` int(10) UNSIGNED NOT NULL,
  `kegiatan_id` int(10) UNSIGNED NOT NULL,
  `biaya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ang_plth_period_id_foreign` (`period_id`),
  KEY `ang_plth_kegiatan_id_foreign` (`kegiatan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ang_spd`
--

DROP TABLE IF EXISTS `ang_spd`;
CREATE TABLE IF NOT EXISTS `ang_spd` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `period_id` int(10) UNSIGNED NOT NULL,
  `kegiatan_id` int(10) UNSIGNED NOT NULL,
  `biaya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ang_spd_period_id_foreign` (`period_id`),
  KEY `ang_spd_kegiatan_id_foreign` (`kegiatan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_hadir`
--

DROP TABLE IF EXISTS `daftar_hadir`;
CREATE TABLE IF NOT EXISTS `daftar_hadir` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keluar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `daftar_hadir_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `j_kegiatan`
--

DROP TABLE IF EXISTS `j_kegiatan`;
CREATE TABLE IF NOT EXISTS `j_kegiatan` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `jenis_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `j_kegiatan`
--

INSERT INTO `j_kegiatan` (`id`, `jenis_kegiatan`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Pemberian Persetujuan atas Rencana Jangka Panjang (Corporate Plan), Rencana Bisnis Bank (RBB)', 'Paling lambat pada akhir bulan November sebelum tahun Rencana Bisnis dimulai', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(2, 'Melakukan fungsi pengawasan Rencana Bisnis Bank (RBB)', 'Setiap semester (Q1 & Q2) paling lambat 2 (dua) bulan setelah semester dimaksud berakhir', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(3, 'Melakukan evaluasi terhadap Kinerja Usaha dan Keuangan Konsolidasi Bank Jatim secara berkala', 'Setiap 2 Bulan / isidentil. Di bahas di rapat Dekom Direksi', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(4, 'Penelaahan Laporan Keuangan yang akan di publikasikan', 'sesuai publikasi laporan keuangan (triwulan)', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(5, 'Pengawasan terhadap Satuan Kerja Audit Intern (SKAI)', 'Isidentil / sesuai kebutuhan', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(6, 'Melakukan Seleksi dan Penunjukan Kantor Akuntan Publik (KAP)', 'Awal semester 2 tahun berjalan', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(7, 'Review dan Evaluasi Pelaksanaan Audit oleh Kantor Akuntan Publik (KAP)', 'Paling lambat 6 (enam) bulan setelah tahun buku berakhir', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(8, 'Pemantauan Tindak Lanjut Temuan Audit Eksternal / internal', 'Periodik / isidenstil sesuai kebutuhan / temuan', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(9, 'Melakukan pengawasan, pemantauan serta evaluasi terhadap Tingkat Kesehatan Bank', 'Setiap semester', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(10, 'Melakukan fungsi pengawasan terhadap Manajemen Risiko dan Manajemen Risiko Terintegrasi', 'Setiap semester', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(11, 'Melakukan pengawasan terhadap fungsi kepatuhan serta melakukan  review atas Laporan pelaksanaan fungsi Kepatuhan dan pelaksanaan tugas Direktur Kepatuhan', 'Setiap semester', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(12, 'Review  Pelaksanaan Good Corporate Governance (GCG) / Tata Kelola ', 'Setiap semester', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(13, 'Penyusunan laporan pelaksanaan tata kelola', 'Setiap akhir tahun buku, paling lambat 4 (empat) bulan setelah tahun buku berakhir', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(14, 'Memantau dan mengevaluasi kebijakan Direksi', 'isidentil', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(15, 'Persetujuan atas Pemberian Kredit Kepada Pihak Terkait', 'isidentil / sesuai kebutuhan', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(16, 'Memantau serta mengevaluasi perkembangan pengembangan serta pengelolaan Sumber Daya Manusia (SDM)', 'Periodik / isidentil', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(17, 'Memberikan persetujuan terhadap hal-hal yang wajib mendapat persetujuan Dewan Komisaris berdasarkan peraturan perundang-undangan yang berlaku dan Anggaran Dasar Perseroan', 'Periodik / isidentil', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(18, 'Melaksanakan Proses Nominasi calon Direksi / Komisaris', 'isidentil / sesuai kebutuhan', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(19, 'Melakukan review remunerasi Direksi dan Dewan Komisaris serta melakukan pemantauan terhadap sistem remunerasi pegawai', 'Periodik / isidentil', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(20, 'Rapat Internal Dewan Komisaris ', 'Rapat Internal Dekom 1 bulan 1 kali', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(21, 'Rapat Dewan Komisaris & Direksi', 'Rapat Dekom dan Direksi 2 bulan 1 kali', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(22, 'Mengikuti kegiatan evaluasi kinerja cabang dan unit kerja', 'Setiap 4 bulan', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(23, 'Kunjungan ke Cabang dalam rangka melaksanakan fungsi pengawasan', 'Minimal 4 kali dalam 1 tahun', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(24, 'Program peningkatan kompetensi: Pendidikan, training, seminar, conference dalam / luar negeri;', 'Setiap anggota Dewan Komisaris wajib mengikuti program pengembangan kompetensi minimal 2 x dalam 1 tahun', '2019-05-12 17:00:00', '2019-05-12 17:00:00'),
(25, 'Sertifikasi dan refreshment manajemen risiko', 'Setiap anggota Dewan Komisaris harus mengikuti sertifikasi BSMR (minimal level 2), serta wajib mengikuti program refreshment BSMR Maksimal sekali dalam 2 tahun ', '2019-05-12 17:00:00', '2019-05-12 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `j_proker`
--

DROP TABLE IF EXISTS `j_proker`;
CREATE TABLE IF NOT EXISTS `j_proker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proker` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `j_proker`
--

INSERT INTO `j_proker` (`id`, `proker`, `keterangan`) VALUES
(1, 'Pemberian Persetujuan atas Rencana Jangka Panjang (Corporate Plan), Rencana Bisnis Bank (RBB) \r\n', 'Paling lambat pada akhir bulan November sebelum tahun Rencana Bisnis dimulai\r\n'),
(2, 'Melakukan fungsi pengawasan Rencana Bisnis Bank (RBB)\r\n', 'Setiap semester (Q1 & Q2) paling lambat 2 (dua) bulan setelah semester dimaksud berakhir\r\n'),
(3, 'Melakukan evaluasi terhadap Kinerja Usaha dan Keuangan Konsolidasi Bank Jatim secara berkala\r\n', 'Setiap 2 Bulan / isidentil. Di bahas di rapat Dekom Direksi.\r\n'),
(4, 'Penelaahan Laporan Keuangan yang akan di publikasikan\r\n', 'sesuai publikasi laporan keuangan (triwulan)\r\n'),
(5, 'Pengawasan terhadap Satuan Kerja Audit Intern (SKAI)\r\n', 'Isidentil / sesuai kebutuhan\r\n'),
(6, 'Melakukan Seleksi dan Penunjukan Kantor Akuntan Publik (KAP)\r\n', 'Awal semester 2 tahun berjalan\r\n'),
(7, 'Review dan Evaluasi Pelaksanaan Audit oleh Kantor Akuntan Publik (KAP)\r\n', 'Paling lambat 6 (enam) bulan setelah tahun buku berakhir\r\n'),
(8, 'Pemantauan Tindak Lanjut Temuan Audit Eksternal / internal\r\n', 'Periodik / isidenstil sesuai kebutuhan / temuan\r\n'),
(9, 'Melakukan pengawasan, pemantauan serta evaluasi terhadap Tingkat Kesehatan Bank\r\n', 'Setiap semester\r\n'),
(10, 'Melakukan fungsi pengawasan terhadap Manajemen Risiko dan Manajemen Risiko Terintegrasi\r\n', 'Setiap semester\r\n'),
(11, 'Melakukan pengawasan terhadap fungsi kepatuhan serta melakukan  review atas Laporan pelaksanaan fungsi Kepatuhan dan pelaksanaan tugas Direktur Kepatuhan\r\n', 'Setiap semester\r\n'),
(12, 'Review  Pelaksanaan Good Corporate Governance (GCG) / Tata Kelola \r\n', 'Setiap semester\r\n'),
(13, 'Penyusunan laporan pelaksanaan tata kelola\r\n', 'Setiap akhir tahun buku, paling lambat 4 (empat) bulan setelah tahun buku berakhir.\r\n'),
(14, 'Memantau dan mengevaluasi kebijakan Direksi\r\n', 'isidentil\r\n'),
(15, 'Persetujuan atas Pemberian Kredit Kepada Pihak Terkait\r\n', 'isidentil / sesuai kebutuhan\r\n'),
(16, 'Memantau serta mengevaluasi perkembangan pengembangan serta pengelolaan Sumber Daya Manusia (SDM)\r\n', 'Periodik / isidentil\r\n'),
(17, 'Memberikan persetujuan terhadap hal-hal yang wajib mendapat persetujuan Dewan Komisaris berdasarkan peraturan perundang-undangan yang berlaku dan Anggaran Dasar Perseroan\r\n', 'Periodik / isidentil\r\n'),
(18, 'Melaksanakan Proses Nominasi calon Direksi / Komisaris\r\n', 'isidentil / sesuai kebutuhan\r\n'),
(19, 'Melakukan review remunerasi Direksi dan Dewan Komisaris serta melakukan pemantauan terhadap sistem remunerasi pegawai\r\n', 'Periodik / isidentil\r\n'),
(20, 'Menyampaikan laporan pelaksanaan dan pokok-pokok hasil audit intern kepada OJK', 'Setiap Semester\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

DROP TABLE IF EXISTS `kegiatan`;
CREATE TABLE IF NOT EXISTS `kegiatan` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `jenis_id` int(10) UNSIGNED NOT NULL,
  `nama_keg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyelengara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dihadiri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_mulai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_akhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kegiatan_jenis_id_foreign` (`jenis_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `jenis_id`, `nama_keg`, `tempat`, `penyelengara`, `dihadiri`, `tgl_mulai`, `tgl_akhir`, `keterangan`, `check`, `created_at`, `updated_at`) VALUES
(1, 25, 'a', 'ALHAMRA', 'ASBANDA', 'Rudi Purwono', '06/12/2019', '06/12/2019', 'aa', 'no', '2019-06-09 22:09:37', '2019-06-09 22:09:37'),
(2, 25, 'PERSETUJUAN', 'DEKOM', 'DEKOM', 'Akhmad Sukardi', '06/12/2019', '06/12/2019', 'aa', 'no', '2019-06-09 22:12:06', '2019-06-09 22:12:06'),
(3, 20, 'RAPAT INTERNAL DEKOM', 'SURABAYA', 'DEKOM', 'Candra Fajri Ananda', '06/30/2019', '06/30/2019', 'Q', 'no', '2019-06-10 00:37:25', '2019-06-10 00:37:25'),
(4, 8, 'PEMANTAUAN BULANAN', 'KAWI', 'DEKOM', 'Akhmad Sukardi,Budi Setiawan,Rudi Purwono,Candra Fajri Ananda', '06/30/2019', '06/30/2019', 'A', 'no', '2019-06-10 00:55:50', '2019-06-10 00:55:50'),
(5, 1, 'CORPORATE CULTURE', 'KAWI', 'DEKOM', 'Akhmad Sukardi, Budi Setiawan, Rudi Purwono', '06/30/2019', '06/30/2019', 'A', 'no', '2019-06-10 00:56:34', '2019-06-10 00:56:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_04_15_01_create_users_table', 1),
(2, '2019_04_15_02_create_period_table', 1),
(3, '2019_04_15_04_create_jenis_kegiatan_table', 1),
(4, '2019_04_15_05_create_kegiatan_table', 1),
(5, '2019_04_15_06_create_ang_spd_table', 1),
(6, '2019_04_15_07_create_ang_plth_table', 1),
(7, '2019_04_15_08_create_notulen_rapat_table', 1),
(8, '2019_04_15_09_create_sisa_ang_table', 1),
(9, '2019_04_15_10_create_daftar_hadir_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notulen_rapat`
--

DROP TABLE IF EXISTS `notulen_rapat`;
CREATE TABLE IF NOT EXISTS `notulen_rapat` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `kegiatan_id` int(10) UNSIGNED NOT NULL,
  `scan_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notulen_rapat_kegiatan_id_foreign` (`kegiatan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `period`
--

DROP TABLE IF EXISTS `period`;
CREATE TABLE IF NOT EXISTS `period` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `period`
--

INSERT INTO `period` (`id`, `semester`, `tahun`) VALUES
(1, '1', '2019'),
(2, '2', '2019'),
(3, '1', '2020'),
(4, '2', '2020'),
(5, '1', '2021'),
(6, '2', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `sisa_ang`
--

DROP TABLE IF EXISTS `sisa_ang`;
CREATE TABLE IF NOT EXISTS `sisa_ang` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `angplth_id` int(10) UNSIGNED NOT NULL,
  `angspd_id` int(10) UNSIGNED NOT NULL,
  `period_id` int(10) UNSIGNED NOT NULL,
  `sisa_ang` int(11) NOT NULL,
  `jml_ang_now` int(11) NOT NULL,
  `check` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sisa_ang_angplth_id_foreign` (`angplth_id`),
  KEY `sisa_ang_angspd_id_foreign` (`angspd_id`),
  KEY `sisa_ang_period_id_foreign` (`period_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `no_tlf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `NIP`, `email`, `password`, `alamat`, `level`, `no_tlf`, `jabatan`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Dimas Eko W', '112233445566', 'Dimas@Eko.com', '$2y$10$0ZbSNa0lnZW2y2sUXq5OWeHUB3oyAOl4lAYo0xpRwEWZx92zsh9dm', 'Surabaya', 1, '089736473827', 'Direktur Amiinn', 'zwprXsccvwMo85zBRA1gBhObGVPmR2z5ZB2CwT8ICCbW50uCd5l6aR20D8xi', '2019-06-15 09:37:47', '2019-06-15 09:37:47');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ang_plth`
--
ALTER TABLE `ang_plth`
  ADD CONSTRAINT `ang_plth_kegiatan_id_foreign` FOREIGN KEY (`kegiatan_id`) REFERENCES `kegiatan` (`id`),
  ADD CONSTRAINT `ang_plth_period_id_foreign` FOREIGN KEY (`period_id`) REFERENCES `period` (`id`);

--
-- Constraints for table `ang_spd`
--
ALTER TABLE `ang_spd`
  ADD CONSTRAINT `ang_spd_kegiatan_id_foreign` FOREIGN KEY (`kegiatan_id`) REFERENCES `kegiatan` (`id`),
  ADD CONSTRAINT `ang_spd_period_id_foreign` FOREIGN KEY (`period_id`) REFERENCES `period` (`id`);

--
-- Constraints for table `daftar_hadir`
--
ALTER TABLE `daftar_hadir`
  ADD CONSTRAINT `daftar_hadir_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_jenis_id_foreign` FOREIGN KEY (`jenis_id`) REFERENCES `j_kegiatan` (`id`);

--
-- Constraints for table `notulen_rapat`
--
ALTER TABLE `notulen_rapat`
  ADD CONSTRAINT `notulen_rapat_kegiatan_id_foreign` FOREIGN KEY (`kegiatan_id`) REFERENCES `kegiatan` (`id`);

--
-- Constraints for table `sisa_ang`
--
ALTER TABLE `sisa_ang`
  ADD CONSTRAINT `sisa_ang_angplth_id_foreign` FOREIGN KEY (`angplth_id`) REFERENCES `ang_plth` (`id`),
  ADD CONSTRAINT `sisa_ang_angspd_id_foreign` FOREIGN KEY (`angspd_id`) REFERENCES `ang_spd` (`id`),
  ADD CONSTRAINT `sisa_ang_period_id_foreign` FOREIGN KEY (`period_id`) REFERENCES `period` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
