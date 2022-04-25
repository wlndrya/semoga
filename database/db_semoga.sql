-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 06:51 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_semoga`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_applicant`
--

CREATE TABLE `tb_applicant` (
  `id_applicant` int(11) NOT NULL,
  `id_offer` int(11) NOT NULL,
  `id_internship` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `nim` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `status_applicant` enum('YES','NO','PENDING') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_applicant`
--

INSERT INTO `tb_applicant` (`id_applicant`, `id_offer`, `id_internship`, `id_company`, `nim`, `status_applicant`) VALUES
(98, 4, 48, 1, '4311901038', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `tb_attendance`
--

CREATE TABLE `tb_attendance` (
  `id_attendance` int(11) NOT NULL,
  `id_internship` int(11) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `type_attendance` enum('Present','Paid Leave','Unpaid Leave') NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `week` varchar(10) NOT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime NOT NULL,
  `approval_spv` enum('Yes','No','Pending') NOT NULL,
  `approval_dpm` enum('Yes','No','Pending') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_attendance`
--

INSERT INTO `tb_attendance` (`id_attendance`, `id_internship`, `nim`, `type_attendance`, `description`, `date`, `week`, `check_in`, `check_out`, `approval_spv`, `approval_dpm`) VALUES
(13, 48, '4311901038', 'Present', '', '2022-01-01', '1', '2022-04-11 05:36:11', '2022-04-11 05:36:11', 'Yes', 'Pending'),
(14, 48, '4311901038', 'Paid Leave', 'cuti', '2022-01-02', '1', '2022-04-11 05:38:15', '2022-04-11 05:38:15', 'Yes', 'Pending'),
(15, 48, '4311901038', 'Unpaid Leave', 'sakit', '2022-01-09', '2', '2022-04-11 05:39:04', '2022-04-11 05:39:04', 'Yes', 'Pending'),
(16, 47, '3311901044', 'Paid Leave', 'cuti', '2022-03-01', '1', '2022-04-11 05:40:10', '2022-04-11 05:40:10', 'Yes', 'Pending'),
(17, 47, '3311901044', 'Present', '', '2022-01-14', '1', '2022-04-11 05:41:14', '2022-04-11 05:41:14', 'Yes', 'Pending'),
(18, 47, '3311901044', 'Unpaid Leave', 'sakit', '2022-03-19', '2', '2022-04-11 05:41:40', '2022-04-11 05:41:40', 'Yes', 'Pending'),
(19, 47, '3311901044', 'Unpaid Leave', 'sakit', '2022-01-14', '2', '2022-04-11 05:42:31', '2022-04-11 05:42:31', 'Yes', 'Pending'),
(20, 47, '3311901044', 'Present', '', '2022-01-13', '1', '2022-04-11 05:43:11', '2022-04-11 05:43:11', 'Yes', 'Pending'),
(21, 48, '4311901038', 'Present', '', '2022-01-13', '1', '2022-04-11 07:13:54', '2022-04-11 07:13:54', 'Yes', 'Pending'),
(22, 49, '3311901088', 'Paid Leave', 'cuti', '2022-01-13', '1', '2022-04-11 08:59:54', '2022-04-11 08:59:54', 'Yes', 'Pending'),
(23, 49, '3311901088', 'Present', '', '2022-01-13', '2', '2022-04-11 09:04:54', '2022-04-11 09:04:54', 'Yes', 'Pending'),
(24, 49, '3311901088', 'Present', '', '2022-03-01', '2', '2022-04-11 09:05:16', '2022-04-11 09:05:16', 'Yes', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ceklis_jobdesc_intern`
--

CREATE TABLE `tb_ceklis_jobdesc_intern` (
  `id_ceklis` int(11) NOT NULL,
  `id_detail` int(11) NOT NULL,
  `id_jobdesc_intern` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ceklis_jobdesc_intern`
--

INSERT INTO `tb_ceklis_jobdesc_intern` (`id_ceklis`, `id_detail`, `id_jobdesc_intern`, `date_start`, `date_end`) VALUES
(121, 1, 115, '2022-04-22', '2022-04-28'),
(122, 2, 115, '2022-04-22', '2022-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_comment_discussion`
--

CREATE TABLE `tb_comment_discussion` (
  `id_comment` int(11) NOT NULL,
  `id_discuss` int(11) NOT NULL,
  `replied_by` varchar(25) NOT NULL,
  `comment` text NOT NULL,
  `replied_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_comment_discussion`
--

INSERT INTO `tb_comment_discussion` (`id_comment`, `id_discuss`, `replied_by`, `comment`, `replied_at`) VALUES
(1, 15, 'Kim Seungmina', 'sadasd', '2022-03-23 10:28:37'),
(2, 15, 'Kim Seungmina', 'sadsadasd', '2022-03-23 10:33:47'),
(3, 15, 'Kim Seungmina', 'asdsadsaxc', '2022-03-23 10:35:04'),
(4, 15, 'Kim Seungmina', 'sadasd', '2022-03-23 10:36:33'),
(5, 16, 'Kim Seungmina', 'Kamu bohong !', '2022-03-23 10:38:13'),
(6, 16, 'Kim Seungmina', 'Kamu yang bohong !', '2022-03-23 10:38:24'),
(7, 16, 'Anjay', 'Kamu yang paling bohong !', '2022-03-23 10:38:44'),
(8, 15, 'Kim Seungmina', 'Testing kirim komentar', '2022-04-07 08:59:33'),
(9, 20, 'Lee Min Ho', 'oh iya juga ya', '2022-04-13 07:33:13'),
(10, 22, 'Lee Min Ho', 'Sok hebat kali mahasiswanya', '2022-04-22 09:58:36');

-- --------------------------------------------------------

--
-- Table structure for table `tb_company`
--

CREATE TABLE `tb_company` (
  `id_company` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `type` enum('agency','design','education','engineering','finance','government','health','it','logistics','marketing','media','others') NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `header` text NOT NULL,
  `address` text NOT NULL,
  `province` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `status` enum('PENDING','VERIFIED','NOT_VERIFIED') NOT NULL,
  `access_type` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_company`
--

INSERT INTO `tb_company` (`id_company`, `company_name`, `type`, `phone`, `email`, `website`, `facebook`, `twitter`, `instagram`, `header`, `address`, `province`, `city`, `description`, `status`, `access_type`) VALUES
(1, 'Stark Industries', 'engineering', '0778-1256-7890', 'starkindustries@stark.company', 'psteam.ac.id', 'polibatam software team', '@polibatamsoftwareteam', '@PSTEAM.id', 'I\'m Iron Man !', 'Rumah Adam', 'USA', 'Manhattan City', 'What is Lorem Ipsum?^^\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. \r\nThe point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. ', 'VERIFIED', ''),
(3, 'Sumitomo', '', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Hello, this is sumitomo description', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_jobdesc`
--

CREATE TABLE `tb_detail_jobdesc` (
  `id_detail` int(11) NOT NULL,
  `id_jobdesc` int(11) NOT NULL,
  `job_type` text NOT NULL,
  `job_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail_jobdesc`
--

INSERT INTO `tb_detail_jobdesc` (`id_detail`, `id_jobdesc`, `job_type`, `job_description`) VALUES
(1, 2, 'Coding', 'Membuat program '),
(2, 2, 'Multimedia', 'Mengedit gambar dan video'),
(3, 5, 'Disassamble the machine', 'Bongkar mesin lalu dirangkai kembali'),
(4, 5, 'Set up machine', 'polopolo'),
(5, 6, 'Desain poster', 'Mendesain suatu poster'),
(6, 6, 'Edit Video', 'Editing video'),
(7, 6, 'IoT', 'membuat program android');

-- --------------------------------------------------------

--
-- Table structure for table `tb_discussion`
--

CREATE TABLE `tb_discussion` (
  `id_discuss` int(11) NOT NULL,
  `started_by` varchar(55) NOT NULL,
  `date_posted` datetime NOT NULL,
  `who_can_see` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `discuss` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_discussion`
--

INSERT INTO `tb_discussion` (`id_discuss`, `started_by`, `date_posted`, `who_can_see`, `title`, `discuss`) VALUES
(15, 'Kim Seungmina', '2022-03-23 14:43:49', '[\"44\",\"7\",\"117175\",\"45\",\"117175\"]', 'asddddddddddddddddd', 'asdddddddddddddddsadsa'),
(16, 'Kim Seungmina', '2022-03-23 16:37:07', '[\"44\",\"7\",\"117175\",\"45\",\"117175\"]', 'Anjay', 'Kamu yang anjay !'),
(18, 'Seo Changbin', '2022-03-23 16:56:07', '[\"44\",\"6\",\"117175\"]', 'Logbook', 'Berikut adalah aturan pengisian logbook :\r\n1. Datang\r\n2. Kerjakan\r\n3. Pulang\r\n4. Makan\r\n5. Tidur\r\n6. Nonton Drama Business Proposal dan Twenty Five Twenty One'),
(19, 'Lee Min Ho', '2022-04-11 12:22:57', '[\"48\",\"8\",null]', 'Logbook and Attendance', 'Perihal logbook dan absensi jangan lupa untuk dikirimkan pada saya setiap minggu. Jika ada kendala dalam pengumpulannya hubungi saya, Terima kasih'),
(20, 'Lee Min Ho', '2022-04-13 12:32:28', '[\"48\",\"8\",null,\"49\",null]', 'Logbook', 'kenapa logbook blabla'),
(21, 'Christoper', '2022-04-20 13:45:39', 'null', 'Attendance', 'Dimana upload file absensi ya? saya mau cek\r\n'),
(22, 'Lee Min Ho', '2022-04-22 14:57:56', '[\"47\",\"8\",null,\"48\",null,\"49\",null]', 'Netflix Clone', 'Mahasiswa gabisa bikin sesuai yang diharapkan. Disuruh bikin Netflix, malah beli perusahaannya langsung.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_document`
--

CREATE TABLE `tb_document` (
  `id` int(11) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_industry_feedback`
--

CREATE TABLE `tb_industry_feedback` (
  `id_industry_feedback` int(11) NOT NULL,
  `id_internship` int(11) NOT NULL,
  `catatan_utk_mahasiswa` text NOT NULL,
  `catatan_utk_poltek` text NOT NULL,
  `layak_diterima` text NOT NULL,
  `langsung_diterima` text NOT NULL,
  `nilai_akhir` varchar(100) NOT NULL,
  `etika` int(4) NOT NULL,
  `keahlian_kompetensi` int(4) NOT NULL,
  `keahlian_bahasa` int(4) NOT NULL,
  `penggunaan_ti` int(4) NOT NULL,
  `komunikasi` int(4) NOT NULL,
  `kerjasama` int(4) NOT NULL,
  `pengembangan_diri` int(4) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_industry_feedback`
--

INSERT INTO `tb_industry_feedback` (`id_industry_feedback`, `id_internship`, `catatan_utk_mahasiswa`, `catatan_utk_poltek`, `layak_diterima`, `langsung_diterima`, `nilai_akhir`, `etika`, `keahlian_kompetensi`, `keahlian_bahasa`, `penggunaan_ti`, `komunikasi`, `kerjasama`, `pengembangan_diri`, `date`) VALUES
(49, 47, 'asasas', 'asas', 'asasa', 'sasasa', '100', 4, 3, 3, 3, 4, 4, 4, '2022-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_internship`
--

CREATE TABLE `tb_internship` (
  `id_internship` int(11) NOT NULL,
  `nim` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `id_company` int(11) NOT NULL,
  `id_user_company` int(11) DEFAULT NULL,
  `nik` int(11) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `apply_date` date NOT NULL,
  `status_intern` enum('YES','NO','PENDING') NOT NULL,
  `file1` varchar(100) NOT NULL,
  `file2` varchar(100) NOT NULL,
  `file3` varchar(100) NOT NULL,
  `file4` varchar(100) NOT NULL,
  `date_finalreport` date DEFAULT NULL,
  `final_report` varchar(100) DEFAULT NULL,
  `internship_period` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_internship`
--

INSERT INTO `tb_internship` (`id_internship`, `nim`, `id_company`, `id_user_company`, `nik`, `start_date`, `end_date`, `apply_date`, `status_intern`, `file1`, `file2`, `file3`, `file4`, `date_finalreport`, `final_report`, `internship_period`) VALUES
(47, '3311901044', 1, 8, NULL, '2022-04-01', '2023-06-10', '2022-03-21', 'YES', 'CV - 3311901044 - Yulia Wulandari.pdf', 'TRANSKRIP - 3311901044 - Yulia Wulandari.pdf', 'KTM - 3311901044- Yulia Wulandari.pdf', 'KTP.pdf', NULL, 'CyntyaMaharani_Borang PBM - Pendaftaran Magang.pdf', '8'),
(48, '4311901038', 1, 8, NULL, '2022-04-11', '2023-04-11', '2022-03-22', 'NO', 'CV - 3311801031 - Yudhi Arma Mustika.pdf', 'CV-3311901053-Silvi Salputri.pdf', 'scan transkrip ulan gabungan.pdf', 'CV - 3311801042 - Andre Tamini Putra.pdf', NULL, 'All Chapter New 28 april.pdf', '8'),
(49, '3311901088', 1, 9, NULL, '2022-04-15', '2022-04-29', '2022-03-21', 'YES', '', '', '', '', NULL, NULL, '8');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jobdesc`
--

CREATE TABLE `tb_jobdesc` (
  `id_jobdesc` int(11) NOT NULL,
  `prodi_name` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `question_1` text NOT NULL,
  `question_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jobdesc`
--

INSERT INTO `tb_jobdesc` (`id_jobdesc`, `prodi_name`, `nik`, `question_1`, `question_2`) VALUES
(2, 'Informatika', 117175, 'Apa yang dimaksud hujan petir?', 'Kenapa hujan turun air bukan turun batu? jelaskan!'),
(4, 'Mesin', 117176, 'Apa itu mesin?', 'Apa itu apa?'),
(5, 'Logistik', 117175, 'Apa itu Logistik?', 'Kenapa hari ini sangat mengantuk?'),
(6, 'Multimedia', 117175, 'Apa yang dipelajari selain opsi?', 'Desain/Video?');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jobdesc_intern`
--

CREATE TABLE `tb_jobdesc_intern` (
  `id_jobdesc_intern` int(11) NOT NULL,
  `id_jobdesc` int(11) NOT NULL,
  `id_internship` int(11) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `timestamp_approval` datetime NOT NULL,
  `answer_1` text NOT NULL,
  `answer_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jobdesc_intern`
--

INSERT INTO `tb_jobdesc_intern` (`id_jobdesc_intern`, `id_jobdesc`, `id_internship`, `nim`, `timestamp_approval`, `answer_1`, `answer_2`) VALUES
(115, 2, 47, '3311901044', '2022-04-22 14:45:36', 'AKWOKAKWAOKOWKAOKWOK', 'AOWKOAOWKOAKWOKAOWKOAWKO');

-- --------------------------------------------------------

--
-- Table structure for table `tb_job_description`
--

CREATE TABLE `tb_job_description` (
  `id_jobdesc` int(11) NOT NULL,
  `id_internship` int(11) NOT NULL,
  `description_jobdesc` varchar(1000) NOT NULL,
  `another_jobdesc` varchar(1000) NOT NULL,
  `expected_goal` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_lecturer`
--

CREATE TABLE `tb_lecturer` (
  `nik` int(11) NOT NULL,
  `name_lecturer` varchar(100) NOT NULL,
  `program_study` varchar(100) NOT NULL,
  `email_polibatam` varchar(100) NOT NULL,
  `other_email` varchar(100) NOT NULL,
  `lecturer_phone` varchar(15) NOT NULL,
  `user_type` enum('koordinator','pembimbing') NOT NULL,
  `status` enum('active','not_active') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_lecturer`
--

INSERT INTO `tb_lecturer` (`nik`, `name_lecturer`, `program_study`, `email_polibatam`, `other_email`, `lecturer_phone`, `user_type`, `status`) VALUES
(117175, 'Hamdani Arif', 'Informatika', 'hamdani@polibatam.ac.id', 'hamdani@gmail.com', '082172452323', 'pembimbing', 'active'),
(117176, 'Supardianto', 'Mesin', 'supardianto@gmail.com', 'supardianto@polibatam.id', '082189765423', 'koordinator', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_logbook`
--

CREATE TABLE `tb_logbook` (
  `id_logbook` int(11) NOT NULL,
  `id_internship` int(11) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `documentation` varchar(100) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `week_num` varchar(10) NOT NULL,
  `approval_spv` enum('Pending','Yes','No') NOT NULL,
  `approval_dpm` enum('Pending','Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_logbook`
--

INSERT INTO `tb_logbook` (`id_logbook`, `id_internship`, `nim`, `description`, `documentation`, `startdate`, `enddate`, `week_num`, `approval_spv`, `approval_dpm`) VALUES
(18, 47, '3311901044', 'Selasa, 01 Maret 2022 \r\n 1. Memperbaiki tampilan pada Job Description\r\n 2. Memperbaiki tampilan pada modal registration file\r\nRabu, 02 Maret 2022\r\n1. Mengerjakan function deselect\r\n2. Mengerjakan PHPMail\r\nKamis, 03 Maret 2022\r\nHari Raya Nyepi\r\nJumat, 04 Maret 2022\r\n1. Mengerjakan PHPMail\r\n', 'YULIA WULANDARI.pdf', '2022-02-02', '2022-02-06', '1', 'Yes', 'Pending'),
(19, 47, '3311901044', 'Selasa, 01 Maret 2022 \r\n 1. Memperbaiki tampilan pada Job Description\r\n 2. Memperbaiki tampilan pada modal registration file\r\n', 'M2-Logbook-Yulia Wulandari.pdf', '2022-02-09', '2022-02-13', '2', 'Yes', 'Pending'),
(20, 48, '4311901038', 'SAFDHFGJYGKII', 'Januari -3311901044-Yulia Wulandari.pdf', '2022-02-02', '2022-02-06', '1', 'Yes', 'Pending'),
(21, 48, '4311901038', 'HEY TAYO', 'M6-Logbook-Yulia Wulandari.pdf', '2022-02-02', '2022-02-06', '2', 'Yes', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tb_offer`
--

CREATE TABLE `tb_offer` (
  `id_offer` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `requirement` varchar(100) NOT NULL,
  `employer_type` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `job_type` varchar(100) NOT NULL,
  `salary_range` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `offer_type` enum('full_employment','part_time','internship') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_offer`
--

INSERT INTO `tb_offer` (`id_offer`, `id_company`, `position`, `description`, `requirement`, `employer_type`, `city`, `job_type`, `salary_range`, `start_date`, `end_date`, `offer_type`) VALUES
(4, 1, 'Programmer IT', 'Nothing To Do', '-', '-', 'Batam', '-', '-', '2022-01-04', '2022-01-14', 'internship');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profile_detail_comp`
--

CREATE TABLE `tb_profile_detail_comp` (
  `id_detail_profile` int(11) NOT NULL,
  `id_profile_jobdesc` int(11) NOT NULL,
  `unit_kompetensi` varchar(100) NOT NULL,
  `kode_matkul` varchar(10) NOT NULL,
  `matkul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profile_detail_comp`
--

INSERT INTO `tb_profile_detail_comp` (`id_detail_profile`, `id_profile_jobdesc`, `unit_kompetensi`, `kode_matkul`, `matkul`) VALUES
(1, 1, 'Manage the delivery of goods/loads/cargo', 'a', 'Distribution and Transportation'),
(2, 1, 'Use the system to manage stock', 'b', 'Warehousing and Inventory'),
(3, 1, 'Monitor storage facilities', 'b', 'Warehousing and Inventory'),
(4, 1, 'Follow security procedures when handling goods/loads/cargo', 'a', 'Distribution and Transportation'),
(5, 1, 'Consolidate Shipments', 'b', 'Warehousing and Inventory'),
(6, 1, 'Assess and Confirm Customers Transportation Needs', 'a', 'Distribution and Transportation'),
(7, 2, 'Complete and Check Import/Export Documents', 'c', 'Freight Forwarding');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profile_detail_unit`
--

CREATE TABLE `tb_profile_detail_unit` (
  `id_detail_unit` int(11) NOT NULL,
  `id_detail_profile` int(11) NOT NULL,
  `detail_unit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profile_detail_unit`
--

INSERT INTO `tb_profile_detail_unit` (`id_detail_unit`, `id_detail_profile`, `detail_unit`) VALUES
(1, 1, 'Plan the delivery of goods/loads/cargo'),
(2, 1, 'Organize, store, and deliver goods/loads/cargo'),
(3, 1, 'Complete documentation'),
(4, 2, 'Identity stock control systems used in the workplace'),
(5, 2, 'Use the reorder procedure to maintain stock'),
(6, 2, 'Manage regular stock counts and report discrepancies or discrepancies'),
(7, 2, 'Make reports on the function of storage records and stock functions'),
(8, 3, 'Define workplace functions and operations'),
(9, 3, 'Monitor storage activities');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profile_jobdesc`
--

CREATE TABLE `tb_profile_jobdesc` (
  `id_profile_jobdesc` int(11) NOT NULL,
  `kode_prodi` varchar(10) NOT NULL,
  `nama_profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profile_jobdesc`
--

INSERT INTO `tb_profile_jobdesc` (`id_profile_jobdesc`, `kode_prodi`, `nama_profile`) VALUES
(1, 'Logistik', 'WAREHOUSE SUPERVISOR'),
(2, 'Logistik', 'FREIGHT FORWARDER/FREIGHT EXPERTS'),
(3, 'Logistik', 'SUPPLY CHAIN STAFF/SUPERVISOR'),
(4, 'Logistik', 'ENTREPRENEURS'),
(5, 'Logistik', 'EXPORT/IMPORT STAFF'),
(6, 'Logistik', 'EXPORT/IMPORT SUPERVISOR'),
(7, 'Logistik', 'PROCUREMENT SUPERVISOR/STAFF'),
(8, 'Logistik', 'PPIC-PRODUCTION PLANNING AND INVENTORY CONTROL STAFF');

-- --------------------------------------------------------

--
-- Table structure for table `tb_student_detail_profile`
--

CREATE TABLE `tb_student_detail_profile` (
  `id_student_detail_profile` int(11) NOT NULL,
  `id_profile_jobdesc` int(11) NOT NULL,
  `id_detail_profile` int(11) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `nilai` varchar(5) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_student_detail_profile`
--

INSERT INTO `tb_student_detail_profile` (`id_student_detail_profile`, `id_profile_jobdesc`, `id_detail_profile`, `nim`, `nilai`, `tgl_mulai`, `tgl_selesai`) VALUES
(23, 1, 1, '3311901088', '2', '2022-04-07', '2022-04-23'),
(24, 1, 2, '3311901088', '3', '2022-04-07', '2022-04-23'),
(25, 1, 3, '3311901088', '1', '2022-04-07', '2022-04-23'),
(26, 1, 1, '3311901088', '4', '2022-04-16', '2022-04-29'),
(27, 1, 2, '3311901088', '3', '2022-04-16', '2022-04-29'),
(28, 1, 3, '3311901088', '4', '2022-04-16', '2022-04-29'),
(29, 1, 4, '3311901088', '2', '2022-04-16', '2022-04-29'),
(30, 1, 1, '3311901088', '2', '2022-04-22', '2022-04-30'),
(31, 1, 2, '3311901088', '4', '2022-04-22', '2022-04-30'),
(32, 1, 3, '3311901088', '2', '2022-04-22', '2022-04-30'),
(33, 1, 4, '3311901088', '3', '2022-04-22', '2022-04-30'),
(34, 1, 5, '3311901088', '3', '2022-04-22', '2022-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_student_feedback`
--

CREATE TABLE `tb_student_feedback` (
  `id_student_feedback` int(11) NOT NULL,
  `id_internship` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `posisi` int(4) NOT NULL,
  `ilmu_dari_poltek` int(4) NOT NULL,
  `ilmu_baru` int(4) NOT NULL,
  `data_magang` int(4) NOT NULL,
  `kesan` text NOT NULL,
  `kendala` text NOT NULL,
  `masukan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_student_internship`
--

CREATE TABLE `tb_student_internship` (
  `nim` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `study_program` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `other_email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_student_internship`
--

INSERT INTO `tb_student_internship` (`nim`, `name`, `study_program`, `email`, `other_email`, `phone`) VALUES
('3311901044', 'Yulia Wulandari', 'Informatika', 'yulia@gmail.com', 'googlingmyname@gmail.com', '0878812674'),
('3311901088', 'Cyntya Maharani', 'Logistik', 'cyntyamaharani@gmail.com', 'cyncyn@gmail.com', '0878812674'),
('4311901038', 'Adam Firdaus', 'Multimedia', 'adamfrdsid@gmail.com', 'googlingmyname@gmail.com', '0878812674');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_company`
--

CREATE TABLE `tb_user_company` (
  `id_user_company` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `user_fullname` varchar(100) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` enum('HRD','supervisor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user_company`
--

INSERT INTO `tb_user_company` (`id_user_company`, `id_company`, `user_fullname`, `user_phone`, `user_email`, `username`, `password`, `user_type`) VALUES
(1, 1, 'Christoper Columbus', '081267053138', 'bangchrist@gmail.com', 'HRD.PSTEAM', '$2y$10$V71GlEXMDG.c8EiJKL8SC.9071yvkoef1jrsOma.QvBopDXnKC89K', 'HRD'),
(7, 1, 'Kim Seungmin', '0865423157', 'kimseung@gmail.php', 'SUPERVISOR1', '$2y$10$LRUYL8gahOoxofcW34P/v.eYIPh6jc93graSSab0QbPtTMMDh4UYi', 'supervisor'),
(8, 1, 'Lee Min Ho', '085156430801', 'leeminhoactor@gmail.com', 'SUPERVISOR2', '$2y$10$xCXnC9xlkoOFMLfpaZfWUuFesVCdKKdSW3i.6oyIuY0L7HZO1DtTK', 'supervisor'),
(9, 1, 'Adam Firdaus', '085156430801', 'adamhehe@gmail.com', 'ADAM.EW', '$2y$10$6E0jYemUoG033/3.MIW5P.qkfhqsSJzvolVRNNy6k7iZEVl6U.Xxm', 'supervisor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_applicant`
--
ALTER TABLE `tb_applicant`
  ADD PRIMARY KEY (`id_applicant`),
  ADD UNIQUE KEY `nim_2` (`nim`),
  ADD KEY `id_offer` (`id_offer`),
  ADD KEY `nim` (`nim`),
  ADD KEY `tb_applicant_ibfk_2` (`id_internship`),
  ADD KEY `tb_applicant_ibfk_3` (`id_company`);

--
-- Indexes for table `tb_attendance`
--
ALTER TABLE `tb_attendance`
  ADD PRIMARY KEY (`id_attendance`),
  ADD KEY `id_internship` (`id_internship`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `tb_ceklis_jobdesc_intern`
--
ALTER TABLE `tb_ceklis_jobdesc_intern`
  ADD PRIMARY KEY (`id_ceklis`),
  ADD KEY `id_detail` (`id_detail`),
  ADD KEY `id_jobdesc_intern` (`id_jobdesc_intern`);

--
-- Indexes for table `tb_comment_discussion`
--
ALTER TABLE `tb_comment_discussion`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_discuss` (`id_discuss`);

--
-- Indexes for table `tb_company`
--
ALTER TABLE `tb_company`
  ADD PRIMARY KEY (`id_company`);

--
-- Indexes for table `tb_detail_jobdesc`
--
ALTER TABLE `tb_detail_jobdesc`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_jobdesc` (`id_jobdesc`);

--
-- Indexes for table `tb_discussion`
--
ALTER TABLE `tb_discussion`
  ADD PRIMARY KEY (`id_discuss`);

--
-- Indexes for table `tb_document`
--
ALTER TABLE `tb_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_industry_feedback`
--
ALTER TABLE `tb_industry_feedback`
  ADD PRIMARY KEY (`id_industry_feedback`),
  ADD KEY `id_internship` (`id_internship`);

--
-- Indexes for table `tb_internship`
--
ALTER TABLE `tb_internship`
  ADD PRIMARY KEY (`id_internship`),
  ADD KEY `id_company` (`id_company`),
  ADD KEY `nik` (`nik`),
  ADD KEY `id_user_company` (`id_user_company`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `tb_jobdesc`
--
ALTER TABLE `tb_jobdesc`
  ADD PRIMARY KEY (`id_jobdesc`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_jobdesc_intern`
--
ALTER TABLE `tb_jobdesc_intern`
  ADD PRIMARY KEY (`id_jobdesc_intern`),
  ADD KEY `id_jobdesc` (`id_jobdesc`),
  ADD KEY `id_internship` (`id_internship`);

--
-- Indexes for table `tb_job_description`
--
ALTER TABLE `tb_job_description`
  ADD PRIMARY KEY (`id_jobdesc`),
  ADD KEY `id_internship` (`id_internship`);

--
-- Indexes for table `tb_lecturer`
--
ALTER TABLE `tb_lecturer`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tb_logbook`
--
ALTER TABLE `tb_logbook`
  ADD PRIMARY KEY (`id_logbook`),
  ADD KEY `id_internship` (`id_internship`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `tb_offer`
--
ALTER TABLE `tb_offer`
  ADD PRIMARY KEY (`id_offer`),
  ADD KEY `id_company` (`id_company`);

--
-- Indexes for table `tb_profile_detail_comp`
--
ALTER TABLE `tb_profile_detail_comp`
  ADD PRIMARY KEY (`id_detail_profile`),
  ADD KEY `id_profile_jobdesc` (`id_profile_jobdesc`);

--
-- Indexes for table `tb_profile_detail_unit`
--
ALTER TABLE `tb_profile_detail_unit`
  ADD PRIMARY KEY (`id_detail_unit`),
  ADD KEY `id_detail_profile` (`id_detail_profile`);

--
-- Indexes for table `tb_profile_jobdesc`
--
ALTER TABLE `tb_profile_jobdesc`
  ADD PRIMARY KEY (`id_profile_jobdesc`);

--
-- Indexes for table `tb_student_detail_profile`
--
ALTER TABLE `tb_student_detail_profile`
  ADD PRIMARY KEY (`id_student_detail_profile`),
  ADD KEY `id_profile_jobdesc` (`id_profile_jobdesc`),
  ADD KEY `id_detail_profile` (`id_detail_profile`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `tb_student_feedback`
--
ALTER TABLE `tb_student_feedback`
  ADD PRIMARY KEY (`id_student_feedback`),
  ADD KEY `id_internship` (`id_internship`);

--
-- Indexes for table `tb_student_internship`
--
ALTER TABLE `tb_student_internship`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_user_company`
--
ALTER TABLE `tb_user_company`
  ADD PRIMARY KEY (`id_user_company`),
  ADD KEY `id_company` (`id_company`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_applicant`
--
ALTER TABLE `tb_applicant`
  MODIFY `id_applicant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `tb_attendance`
--
ALTER TABLE `tb_attendance`
  MODIFY `id_attendance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_ceklis_jobdesc_intern`
--
ALTER TABLE `tb_ceklis_jobdesc_intern`
  MODIFY `id_ceklis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `tb_comment_discussion`
--
ALTER TABLE `tb_comment_discussion`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_company`
--
ALTER TABLE `tb_company`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_detail_jobdesc`
--
ALTER TABLE `tb_detail_jobdesc`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_discussion`
--
ALTER TABLE `tb_discussion`
  MODIFY `id_discuss` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_document`
--
ALTER TABLE `tb_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_industry_feedback`
--
ALTER TABLE `tb_industry_feedback`
  MODIFY `id_industry_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tb_internship`
--
ALTER TABLE `tb_internship`
  MODIFY `id_internship` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tb_jobdesc`
--
ALTER TABLE `tb_jobdesc`
  MODIFY `id_jobdesc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_jobdesc_intern`
--
ALTER TABLE `tb_jobdesc_intern`
  MODIFY `id_jobdesc_intern` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `tb_job_description`
--
ALTER TABLE `tb_job_description`
  MODIFY `id_jobdesc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tb_lecturer`
--
ALTER TABLE `tb_lecturer`
  MODIFY `nik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117177;

--
-- AUTO_INCREMENT for table `tb_logbook`
--
ALTER TABLE `tb_logbook`
  MODIFY `id_logbook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_offer`
--
ALTER TABLE `tb_offer`
  MODIFY `id_offer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_profile_detail_comp`
--
ALTER TABLE `tb_profile_detail_comp`
  MODIFY `id_detail_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_profile_detail_unit`
--
ALTER TABLE `tb_profile_detail_unit`
  MODIFY `id_detail_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_profile_jobdesc`
--
ALTER TABLE `tb_profile_jobdesc`
  MODIFY `id_profile_jobdesc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_student_detail_profile`
--
ALTER TABLE `tb_student_detail_profile`
  MODIFY `id_student_detail_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_student_feedback`
--
ALTER TABLE `tb_student_feedback`
  MODIFY `id_student_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user_company`
--
ALTER TABLE `tb_user_company`
  MODIFY `id_user_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_applicant`
--
ALTER TABLE `tb_applicant`
  ADD CONSTRAINT `tb_applicant_ibfk_1` FOREIGN KEY (`id_offer`) REFERENCES `tb_offer` (`id_offer`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_applicant_ibfk_2` FOREIGN KEY (`id_internship`) REFERENCES `tb_internship` (`id_internship`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_applicant_ibfk_3` FOREIGN KEY (`id_company`) REFERENCES `tb_company` (`id_company`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_applicant_ibfk_4` FOREIGN KEY (`nim`) REFERENCES `tb_student_internship` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_attendance`
--
ALTER TABLE `tb_attendance`
  ADD CONSTRAINT `tb_attendance_ibfk_2` FOREIGN KEY (`id_internship`) REFERENCES `tb_internship` (`id_internship`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_attendance_ibfk_3` FOREIGN KEY (`nim`) REFERENCES `tb_student_internship` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_ceklis_jobdesc_intern`
--
ALTER TABLE `tb_ceklis_jobdesc_intern`
  ADD CONSTRAINT `tb_ceklis_jobdesc_intern_ibfk_1` FOREIGN KEY (`id_jobdesc_intern`) REFERENCES `tb_jobdesc_intern` (`id_jobdesc_intern`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_ceklis_jobdesc_intern_ibfk_2` FOREIGN KEY (`id_detail`) REFERENCES `tb_detail_jobdesc` (`id_detail`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_comment_discussion`
--
ALTER TABLE `tb_comment_discussion`
  ADD CONSTRAINT `tb_comment_discussion_ibfk_2` FOREIGN KEY (`id_discuss`) REFERENCES `tb_discussion` (`id_discuss`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_detail_jobdesc`
--
ALTER TABLE `tb_detail_jobdesc`
  ADD CONSTRAINT `tb_detail_jobdesc_ibfk_1` FOREIGN KEY (`id_jobdesc`) REFERENCES `tb_jobdesc` (`id_jobdesc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_industry_feedback`
--
ALTER TABLE `tb_industry_feedback`
  ADD CONSTRAINT `tb_industry_feedback_ibfk_1` FOREIGN KEY (`id_internship`) REFERENCES `tb_internship` (`id_internship`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_internship`
--
ALTER TABLE `tb_internship`
  ADD CONSTRAINT `tb_internship_ibfk_2` FOREIGN KEY (`id_company`) REFERENCES `tb_company` (`id_company`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_internship_ibfk_5` FOREIGN KEY (`nim`) REFERENCES `tb_student_internship` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_internship_ibfk_6` FOREIGN KEY (`id_user_company`) REFERENCES `tb_user_company` (`id_user_company`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_internship_ibfk_7` FOREIGN KEY (`nik`) REFERENCES `tb_lecturer` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_jobdesc`
--
ALTER TABLE `tb_jobdesc`
  ADD CONSTRAINT `tb_jobdesc_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_lecturer` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_jobdesc_intern`
--
ALTER TABLE `tb_jobdesc_intern`
  ADD CONSTRAINT `tb_jobdesc_intern_ibfk_1` FOREIGN KEY (`id_jobdesc`) REFERENCES `tb_jobdesc` (`id_jobdesc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_jobdesc_intern_ibfk_2` FOREIGN KEY (`id_internship`) REFERENCES `tb_internship` (`id_internship`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_job_description`
--
ALTER TABLE `tb_job_description`
  ADD CONSTRAINT `tb_job_description_ibfk_1` FOREIGN KEY (`id_internship`) REFERENCES `tb_internship` (`id_internship`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_logbook`
--
ALTER TABLE `tb_logbook`
  ADD CONSTRAINT `tb_logbook_ibfk_1` FOREIGN KEY (`id_internship`) REFERENCES `tb_internship` (`id_internship`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_logbook_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `tb_student_internship` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_offer`
--
ALTER TABLE `tb_offer`
  ADD CONSTRAINT `tb_offer_ibfk_1` FOREIGN KEY (`id_company`) REFERENCES `tb_company` (`id_company`);

--
-- Constraints for table `tb_profile_detail_comp`
--
ALTER TABLE `tb_profile_detail_comp`
  ADD CONSTRAINT `tb_profile_detail_comp_ibfk_1` FOREIGN KEY (`id_profile_jobdesc`) REFERENCES `tb_profile_jobdesc` (`id_profile_jobdesc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_profile_detail_unit`
--
ALTER TABLE `tb_profile_detail_unit`
  ADD CONSTRAINT `tb_profile_detail_unit_ibfk_1` FOREIGN KEY (`id_detail_profile`) REFERENCES `tb_profile_detail_comp` (`id_detail_profile`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_student_detail_profile`
--
ALTER TABLE `tb_student_detail_profile`
  ADD CONSTRAINT `tb_student_detail_profile_ibfk_1` FOREIGN KEY (`id_profile_jobdesc`) REFERENCES `tb_profile_jobdesc` (`id_profile_jobdesc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_student_detail_profile_ibfk_2` FOREIGN KEY (`id_detail_profile`) REFERENCES `tb_profile_detail_comp` (`id_detail_profile`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_student_detail_profile_ibfk_3` FOREIGN KEY (`nim`) REFERENCES `tb_student_internship` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_student_feedback`
--
ALTER TABLE `tb_student_feedback`
  ADD CONSTRAINT `tb_student_feedback_ibfk_1` FOREIGN KEY (`id_internship`) REFERENCES `tb_internship` (`id_internship`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_user_company`
--
ALTER TABLE `tb_user_company`
  ADD CONSTRAINT `tb_user_company_ibfk_1` FOREIGN KEY (`id_company`) REFERENCES `tb_company` (`id_company`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
