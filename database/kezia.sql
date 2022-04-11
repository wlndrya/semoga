-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 05:09 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

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
  `status` enum('YES','NO','PENDING') NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_attendance`
--

CREATE TABLE `tb_attendance` (
  `id_attendance` int(11) NOT NULL,
  `id_internship` int(11) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `type_attendance` enum('Present','Paid Leave','Unpaid Leave','Absent') NOT NULL,
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
(103, 1, '3311901045', 'Present', 'dsdede', '2022-03-29', '1', '2022-03-31 08:58:54', '2022-03-31 08:58:54', 'Yes', 'Yes'),
(104, 2, '3311901044', 'Paid Leave', 'izin', '2022-02-25', '2', '2022-03-31 10:04:10', '2022-03-31 10:04:10', 'Yes', 'Pending'),
(105, 2, '3311901044', 'Present', 'hadir', '2022-02-25', '1', '2022-03-31 10:05:03', '2022-03-31 10:05:03', 'Pending', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tb_company`
--

CREATE TABLE `tb_company` (
  `id_company` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `type` enum('Agency','Design','Education','Engineering','Finance','Government','Health','IT','Logistics','Marketing','Media','Others') NOT NULL,
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
  `status` enum('PENDING','VERIFIED','NOT VERIFIED') NOT NULL,
  `access_type` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_company`
--

INSERT INTO `tb_company` (`id_company`, `company_name`, `type`, `phone`, `email`, `website`, `facebook`, `twitter`, `instagram`, `header`, `address`, `province`, `city`, `description`, `status`, `access_type`) VALUES
(1, 'Polibatam Software Team', 'Finance', '077812567890', 'psteampolibatam@ac.id', 'psteam.ac.id', 'polibatam software team', '@polibatamsoftwareteam', '@PSTEAM.id', 'Hi, This is PSTEAM Header', 'Gedung TA lt.11, Politeknik Negeri Batam', 'Kepulauan Riau', 'Batam', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. ILY', 'VERIFIED', ''),
(3, 'Sumitomo', 'Engineering', '081278910298', 'sumitomo@gmail.com', 'www.sumitomobatam.com', '-', '-', '-', '-', '-', '-', '-', 'Hello, this is sumitomo description', 'VERIFIED', '1'),
(10, 'PT Samyung Presission Batam', 'Engineering', '087856271891', 'info@gmail.com', 'www.samyung.com', '-', '-', '-', '-', '-', '-', '-', '-', 'VERIFIED', ''),
(12, 'PT Flextronic Technology Indonesia', 'IT', '087850782910', 'info@gmail.com', 'tes@gmail.com', '', '', '', '', 'Batamindo Industry', 'Kepulauan Riau', 'Batam', '', 'VERIFIED', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_jobdesc`
--

CREATE TABLE `tb_detail_jobdesc` (
  `id_detail` int(11) NOT NULL,
  `id_jobdesc` int(11) DEFAULT NULL,
  `job_type` text NOT NULL,
  `job_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail_jobdesc`
--

INSERT INTO `tb_detail_jobdesc` (`id_detail`, `id_jobdesc`, `job_type`, `job_description`) VALUES
(64, 26, 'php', 'Merancang Alur Website, Memastikan Client dan Server Terhubung dengan Baik.,Mengelola Database\r\nBerlatih Membuat Website, Menulis Kode dengan RapiLakukan Validasi Data Pengguna, Berkontribusi Pada Projek Open Source');

-- --------------------------------------------------------

--
-- Table structure for table `tb_discussion`
--

CREATE TABLE `tb_discussion` (
  `id_discuss` int(11) NOT NULL,
  `id_internship` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_comment` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `nim` varchar(25) NOT NULL,
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

INSERT INTO `tb_industry_feedback` (`id_industry_feedback`, `id_internship`, `nim`, `catatan_utk_mahasiswa`, `catatan_utk_poltek`, `layak_diterima`, `langsung_diterima`, `nilai_akhir`, `etika`, `keahlian_kompetensi`, `keahlian_bahasa`, `penggunaan_ti`, `komunikasi`, `kerjasama`, `pengembangan_diri`, `date`) VALUES
(1, 1, '3311901045', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'ya', 'ya', '89', 89, 89, 89, 89, 89, 89, 89, '2022-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `tb_internship`
--

CREATE TABLE `tb_internship` (
  `id_internship` int(11) NOT NULL,
  `nim` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `id_company` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `id_user_company` int(11) DEFAULT NULL,
  `nik` int(11) DEFAULT NULL,
  `status` enum('YES','NO','PENDING','OKE') NOT NULL,
  `file1` varchar(100) NOT NULL,
  `file2` varchar(100) NOT NULL,
  `file3` varchar(100) NOT NULL,
  `file4` varchar(100) NOT NULL,
  `file5` varchar(100) NOT NULL,
  `date_finalreport` date DEFAULT NULL,
  `final_report` varchar(100) NOT NULL,
  `internship_period` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_internship`
--

INSERT INTO `tb_internship` (`id_internship`, `nim`, `id_company`, `start_date`, `end_date`, `id_user_company`, `nik`, `status`, `file1`, `file2`, `file3`, `file4`, `file5`, `date_finalreport`, `final_report`, `internship_period`) VALUES
(1, '3311901045', 1, '2022-01-12', '2022-01-28', 26, 117175, 'YES', 'CV_dan_Portofolio_Kezia Angelina Sinaga_3311901045.pdf', 'Transkip Nilai_Kezia Angelina Sinaga_3311901045.pdf', 'Kezia Angelina Sinaga - Borang PBM - Pendaftaran Magang.pdf', '', '', '2022-04-05', 'Surat Pernyataan.pdf', ''),
(2, '3311901044', 10, '2022-01-12', '2022-01-28', 32, 12345, 'YES', '', '', '', '', '', NULL, '', ''),
(4, '3311901015', 10, '2022-01-12', '2022-01-29', 32, 117173, 'YES', '', '', '', '', '', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jobdesc`
--

CREATE TABLE `tb_jobdesc` (
  `id_jobdesc` int(11) NOT NULL,
  `study_name` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `pertanyaan_1` text NOT NULL,
  `pertanyaan_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jobdesc`
--

INSERT INTO `tb_jobdesc` (`id_jobdesc`, `study_name`, `nik`, `pertanyaan_1`, `pertanyaan_2`) VALUES
(26, 'Cyber Security Engineering', 117175, 'apa yang kamu lakukan??\r\n', 'bahasa pemograman yang kamu kuasai???');

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
  `user_phone` varchar(15) NOT NULL,
  `user_type` enum('Coordinator','Supervisor') NOT NULL,
  `status` enum('Active','Passive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_lecturer`
--

INSERT INTO `tb_lecturer` (`nik`, `name_lecturer`, `program_study`, `email_polibatam`, `other_email`, `user_phone`, `user_type`, `status`) VALUES
(12345, 'Kezia Angelina Sinagaaaa', 'Multimedia and Network Engineering', 'sinagaketrin14@gmail.com', 'sinagaketrin14@gmail.com', '0899976', 'Supervisor', 'Passive'),
(112087, 'Nur Zahrati Janah, S.KOM, M.SC.', 'Multimedia and Network Engineering', 'nur.zahrati@polibatam.ac.id', 'nur.zahrati@polibatam.ac.id', '081287902345', 'Supervisor', 'Active'),
(117173, 'Muchamad Fajri Amirul Nasrullah, S.ST., M.Sc', 'Informatic Engineering', 'fajri@polibatam.ac.id', 'fajri@polibatam.ac.id', '081978238910', 'Supervisor', 'Active'),
(117175, 'Hamdani Arif, S.Pd., M.Sc', 'Cyber Security Engineering', 'hamdaniarif@polibatam.co.id', 'hamdaniarif@polibatam.co.id', '0812989012852', 'Coordinator', 'Active'),
(4311111, 'Fadli Suandi, S.T., M.Kom.', 'Informatic Engineering', 'fadli.suandi@polibatam.ac.id', 'fadli.suandi@polibatam.ac.id', '5676534', 'Supervisor', 'Active');

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
(1, 2, '3311901044', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nWhere can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '', '2022-02-01', '2022-02-28', '1', 'Yes', 'Yes'),
(3, 1, '3311901045', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\nWhy do we use it?\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\n\n\nWhere does it come from?\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\n\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\n\nWhere can I get some?\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '', '2022-02-01', '2022-02-28', '1', 'Yes', 'Yes'),
(5, 4, '3311901015', 'Selasa, 01 Maret 2022 \n 1. Memperbaiki tampilan modal pada registration file\n 2. Memperbaiki tampilan pada modal final report\nRabu, 02 Maret 2022\n1. Mengerjakan function deselect\n2. Mengerjakan PHPMail\nKamis, 03 Maret 2022\nHari Raya Nyepi\nJumat, 04 Maret 2022\n1.	1. Mengerjakan PHPMail\n', '', '2022-02-01', '2022-05-13', '1', 'Yes', 'Yes');

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
(1, 1, 'Programmer ', '-', '-', '-', 'Batam', '-', '-', '2022-01-04', '2022-01-28', ''),
(2, 1, 'Kasir', '-', '-', '-', '-', '-', '-', '2022-01-05', '2022-01-14', 'internship'),
(3, 3, 'Chef', '-', '-', '-', '-', '-', '-', '0000-00-00', '0000-00-00', 'internship');

-- --------------------------------------------------------

--
-- Table structure for table `tb_student_feedback`
--

CREATE TABLE `tb_student_feedback` (
  `id_student_feedback` int(11) NOT NULL,
  `id_internship` int(11) NOT NULL,
  `nim` varchar(25) NOT NULL,
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
  `phone_number` varchar(15) NOT NULL,
  `no_whatsapp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_student_internship`
--

INSERT INTO `tb_student_internship` (`nim`, `name`, `study_program`, `email`, `other_email`, `phone_number`, `no_whatsapp`) VALUES
('3311901009', 'Rachel Pratama', 'Cyber Security Engineering', 'rachel@gmail.com', 'rachel@gmail.com', '081612789012', ''),
('3311901015', 'Rokki Samuel Tarihoran', 'Cyber Security Engineering', 'rokki@gmail.com', 'rokki@gmail.com', '08138912783456', ''),
('3311901044', 'Yulia  Wulandari', 'Geomatic Engineering', 'yulia@gmail.com', 'yul@gmail.com', '081234567819', ''),
('3311901045', 'Kezia Angelina Sinaga', 'Multimedia and Network Engineering', 'sinagaketrin14@gmail.comm', 'sinagaketrin14@gmail.com', '08999', '');

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
  `user_type` enum('HRD','Supervisor','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user_company`
--

INSERT INTO `tb_user_company` (`id_user_company`, `id_company`, `user_fullname`, `user_phone`, `user_email`, `username`, `password`, `user_type`) VALUES
(24, 1, 'Yulia Wulandari', '085156430801', 'pinkmylovely@gmail.com', 'YULIA.3311901044', '$2y$10$FA/9tkaHovTEh/AtfW/ZL.xi9qcoIiYiHALPuZrFUG6RA2LlTZ1.q', 'Supervisor'),
(26, 12, 'Christoper Bangchan', '081267053132', 'jype.bangchanchris@gmail.com', 'BANGCHAN.001', '$2y$10$QfP9oHbH8j4j9EthxfYw1e76zcdMyOtACviVNm0xMckHdTrhrX8be', 'Supervisor'),
(27, 3, 'Hwang Hyunjin', '085743218976', 'jype.hwang@gmail.com', 'HWANG.002', '$2y$10$B3liWnsLkgtFKFUvMAzZweY2Fm9yZ0R1oDjnI6lcNnqlzJLiagrcK', 'Supervisor'),
(32, 10, 'Seo Changbin', '085156430801', 'adsad@gmal.co', 'KEZIA.3311901045', '$2y$10$J2IyGCN1C0KKjpYCccrGJ.fg5EAW77hlYXoEn749k8QmUwlVPP.I6', 'Supervisor'),
(33, 1, 'Kezia Angelina Sinaga', '081267053132', 'cyntyamaharani@gmail.com', 'cyntya.3311901040', '$2y$10$1JMlvC0z71wANUkkIjuJgevUtrn54KZuQMJLUQBl.8F/GbVsoqh9S', 'Supervisor');

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
  ADD KEY `id_internship` (`id_internship`),
  ADD KEY `id_company` (`id_company`),
  ADD KEY `nim` (`nim`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `tb_attendance`
--
ALTER TABLE `tb_attendance`
  ADD PRIMARY KEY (`id_attendance`),
  ADD KEY `id_internship` (`id_internship`),
  ADD KEY `nim` (`nim`);

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
  ADD PRIMARY KEY (`id_discuss`),
  ADD KEY `id_internship` (`id_internship`);

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
  ADD KEY `id_internship` (`id_internship`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `tb_internship`
--
ALTER TABLE `tb_internship`
  ADD PRIMARY KEY (`id_internship`),
  ADD UNIQUE KEY `nim_2` (`nim`),
  ADD KEY `id_user_company` (`id_user_company`),
  ADD KEY `id_company` (`id_company`),
  ADD KEY `status` (`status`),
  ADD KEY `nim` (`nim`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_jobdesc`
--
ALTER TABLE `tb_jobdesc`
  ADD PRIMARY KEY (`id_jobdesc`);

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
  ADD KEY `nim` (`nim`),
  ADD KEY `id_internship` (`id_internship`);

--
-- Indexes for table `tb_offer`
--
ALTER TABLE `tb_offer`
  ADD PRIMARY KEY (`id_offer`),
  ADD KEY `id_company` (`id_company`);

--
-- Indexes for table `tb_student_feedback`
--
ALTER TABLE `tb_student_feedback`
  ADD PRIMARY KEY (`id_student_feedback`),
  ADD KEY `id_internship` (`id_internship`),
  ADD KEY `nim` (`nim`);

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
  MODIFY `id_applicant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `tb_attendance`
--
ALTER TABLE `tb_attendance`
  MODIFY `id_attendance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `tb_company`
--
ALTER TABLE `tb_company`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_detail_jobdesc`
--
ALTER TABLE `tb_detail_jobdesc`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tb_discussion`
--
ALTER TABLE `tb_discussion`
  MODIFY `id_discuss` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_document`
--
ALTER TABLE `tb_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_industry_feedback`
--
ALTER TABLE `tb_industry_feedback`
  MODIFY `id_industry_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_internship`
--
ALTER TABLE `tb_internship`
  MODIFY `id_internship` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_jobdesc`
--
ALTER TABLE `tb_jobdesc`
  MODIFY `id_jobdesc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_lecturer`
--
ALTER TABLE `tb_lecturer`
  MODIFY `nik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `tb_logbook`
--
ALTER TABLE `tb_logbook`
  MODIFY `id_logbook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_offer`
--
ALTER TABLE `tb_offer`
  MODIFY `id_offer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_student_feedback`
--
ALTER TABLE `tb_student_feedback`
  MODIFY `id_student_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user_company`
--
ALTER TABLE `tb_user_company`
  MODIFY `id_user_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_applicant`
--
ALTER TABLE `tb_applicant`
  ADD CONSTRAINT `tb_applicant_ibfk_1` FOREIGN KEY (`id_offer`) REFERENCES `tb_offer` (`id_offer`),
  ADD CONSTRAINT `tb_applicant_ibfk_2` FOREIGN KEY (`id_internship`) REFERENCES `tb_internship` (`id_internship`),
  ADD CONSTRAINT `tb_applicant_ibfk_3` FOREIGN KEY (`id_company`) REFERENCES `tb_company` (`id_company`),
  ADD CONSTRAINT `tb_applicant_ibfk_4` FOREIGN KEY (`nim`) REFERENCES `tb_student_internship` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_attendance`
--
ALTER TABLE `tb_attendance`
  ADD CONSTRAINT `tb_attendance_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `tb_student_internship` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_attendance_ibfk_2` FOREIGN KEY (`id_internship`) REFERENCES `tb_internship` (`id_internship`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_detail_jobdesc`
--
ALTER TABLE `tb_detail_jobdesc`
  ADD CONSTRAINT `tb_detail_jobdesc_ibfk_1` FOREIGN KEY (`id_jobdesc`) REFERENCES `tb_jobdesc` (`id_jobdesc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_industry_feedback`
--
ALTER TABLE `tb_industry_feedback`
  ADD CONSTRAINT `tb_industry_feedback_ibfk_1` FOREIGN KEY (`id_internship`) REFERENCES `tb_internship` (`id_internship`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_industry_feedback_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `tb_student_internship` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_internship`
--
ALTER TABLE `tb_internship`
  ADD CONSTRAINT `tb_internship_ibfk_2` FOREIGN KEY (`id_company`) REFERENCES `tb_company` (`id_company`),
  ADD CONSTRAINT `tb_internship_ibfk_3` FOREIGN KEY (`id_user_company`) REFERENCES `tb_user_company` (`id_user_company`),
  ADD CONSTRAINT `tb_internship_ibfk_4` FOREIGN KEY (`nik`) REFERENCES `tb_lecturer` (`nik`),
  ADD CONSTRAINT `tb_internship_ibfk_5` FOREIGN KEY (`nim`) REFERENCES `tb_student_internship` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_logbook`
--
ALTER TABLE `tb_logbook`
  ADD CONSTRAINT `tb_logbook_ibfk_1` FOREIGN KEY (`id_internship`) REFERENCES `tb_internship` (`id_internship`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_logbook_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `tb_student_internship` (`nim`);

--
-- Constraints for table `tb_offer`
--
ALTER TABLE `tb_offer`
  ADD CONSTRAINT `tb_offer_ibfk_1` FOREIGN KEY (`id_company`) REFERENCES `tb_company` (`id_company`);

--
-- Constraints for table `tb_student_feedback`
--
ALTER TABLE `tb_student_feedback`
  ADD CONSTRAINT `tb_student_feedback_ibfk_1` FOREIGN KEY (`id_internship`) REFERENCES `tb_internship` (`id_internship`),
  ADD CONSTRAINT `tb_student_feedback_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `tb_student_internship` (`nim`);

--
-- Constraints for table `tb_user_company`
--
ALTER TABLE `tb_user_company`
  ADD CONSTRAINT `tb_user_company_ibfk_1` FOREIGN KEY (`id_company`) REFERENCES `tb_company` (`id_company`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
