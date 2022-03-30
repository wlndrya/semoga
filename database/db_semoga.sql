-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2022 at 05:40 AM
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
(97, 4, 45, 1, '3311901044', 'YES');

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
(9, 44, '4311901038', 'Paid Leave', '', '2022-01-13', '1', '2022-03-22 04:54:06', '2022-03-22 04:54:06', 'Pending', 'Pending'),
(10, 44, '4311901038', 'Present', '', '2022-01-14', '2', '2022-03-22 04:54:51', '2022-03-22 04:54:51', 'Pending', 'Pending'),
(11, 45, '3311901044', 'Present', '', '2022-01-12', '1', '2022-03-22 04:54:51', '2022-03-22 04:54:51', 'Pending', 'Pending'),
(12, 45, '3311901044', 'Paid Leave', 'Sick', '2022-03-01', '2', '2022-03-24 05:25:30', '2022-03-24 05:25:30', 'Pending', 'Pending');

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
(7, 16, 'Anjay', 'Kamu yang paling bohong !', '2022-03-23 10:38:44');

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
(1, 'PSteam', 'it', '077812567890', 'psteampolibatam@ac.id', 'psteam.ac.id', 'polibatam software team', '@polibatamsoftwareteam', '@PSTEAM.id', 'Hi, This is PSTEAM Header!', 'Gedung TA lt.11, Politeknik Negeri Batam', 'Kepulauan Riau', 'Batam', 'What is Lorem Ipsum?^^\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum YEAY', 'VERIFIED', ''),
(3, 'Sumitomo', '', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Hello, this is sumitomo description', '', '1');

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
(18, 'Seo Changbin', '2022-03-23 16:56:07', '[\"44\",\"6\",\"117175\"]', 'Logbook', 'Berikut adalah aturan pengisian logbook :\r\n1. Datang\r\n2. Kerjakan\r\n3. Pulang\r\n4. Makan\r\n5. Tidur\r\n6. Nonton Drama Business Proposal dan Twenty Five Twenty One');

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
(43, 44, 'This student very good and kind', 'Overall its oke', 'I think its yes', 'Yes or Yes', '85', 3, 3, 4, 3, 4, 3, 3, '2022-03-21'),
(44, 45, 'This student very attractive and active', 'We have been working together for a long time. I hope to be able to cooperate longer', 'Yes yes, i very tired to answer this question', 'Yes, can we stopped in here?', '80', 3, 3, 3, 3, 4, 3, 4, '2022-03-22');

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
  `status` enum('YES','NO','PENDING') NOT NULL,
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

INSERT INTO `tb_internship` (`id_internship`, `nim`, `id_company`, `id_user_company`, `nik`, `start_date`, `end_date`, `apply_date`, `status`, `file1`, `file2`, `file3`, `file4`, `date_finalreport`, `final_report`, `internship_period`) VALUES
(44, '4311901038', 1, 6, 117175, '2022-04-01', '2022-05-07', '2022-03-21', 'YES', 'CV - 3311901044 - Yulia Wulandari.pdf', '', '', '', NULL, NULL, '8'),
(45, '3311901044', 1, 7, 117175, '2022-01-04', '2022-01-19', '2022-03-21', 'YES', 'CV - 3311801031 - Yudhi Arma Mustika.pdf', 'KTM - 3311901044- Yulia Wulandari.pdf', '', '', NULL, NULL, '7');

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

--
-- Dumping data for table `tb_job_description`
--

INSERT INTO `tb_job_description` (`id_jobdesc`, `id_internship`, `description_jobdesc`, `another_jobdesc`, `expected_goal`) VALUES
(50, 44, '[\"Database\",\"Use of Framework\",\"Hardware\"]', 'Desain UI-UX, Front End Developer, Back End Developer', 'Yeah Yeah');

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
(117175, 'Hamdani Arif', 'Informatika', 'hamdani@polibatam.ac.id', 'hamdani@gmail.com', '082172452323', 'pembimbing', 'active');

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
(16, 45, '3311901044', 'Senin, 7 Maret 2022\r\n1. Melakukan CRUD\r\nSelasa, 8 Maret 2022\r\n1. Membuat tampilan program\r\nRabu, 9 Maret 2022\r\n1. Melakukan CRUD\r\nKamis, 10 Maret 2022\r\n1. Melakukan CRUD\r\nJumat, 11 Maret 2022\r\n1. Melakukan CRUD\r\n\r\n\r\n', 'Jadwal Sidang November v1.pdf', '2022-03-07', '2022-03-11', '1', 'Yes', 'Pending'),
(17, 45, '3311901044', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', '2022-03-14', '2022-03-18', '2', 'Yes', 'Pending');

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
  `study_program` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `other_email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_student_internship`
--

INSERT INTO `tb_student_internship` (`nim`, `name`, `study_program`, `email`, `other_email`, `phone`) VALUES
('3311901044', 'Yulia Wulandari', 'Informatika', 'yulia@gmail.com', 'googlingmyname@gmail.com', '0878812674'),
('4311901038', 'Adam Firdaus', 'Multimedia dan Jaringan', 'adamfrdsid@gmail.com', 'googlingmyname@gmail.com', '0878812674');

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
(1, 1, 'Christoper Bangchan', '081267053138', 'christbang@gmail.com', 'HRD', '$2y$10$V71GlEXMDG.c8EiJKL8SC.9071yvkoef1jrsOma.QvBopDXnKC89K', 'HRD'),
(6, 1, 'Seo Changbin', '081267053132', 'seochangbinhey@gmail.com', 'SUPERVISOR1', '$2y$10$GkUSYGgKO8FBLSogu8aT4e1Ta80MCbc.VqmO9WCa1LLrhwf1lZ/cK', 'supervisor'),
(7, 1, 'Kim Seungmina', '085156430802', 'kimseung@gmail.php', 'SUPERVISOR2', '$2y$10$EnlPcDDbC/FNWXNMbOwx0uEyMl3ARN2P.CrmEl4diLuTR6Ff5k3Dm', 'supervisor');

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
  MODIFY `id_applicant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `tb_attendance`
--
ALTER TABLE `tb_attendance`
  MODIFY `id_attendance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_comment_discussion`
--
ALTER TABLE `tb_comment_discussion`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_company`
--
ALTER TABLE `tb_company`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_discussion`
--
ALTER TABLE `tb_discussion`
  MODIFY `id_discuss` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_document`
--
ALTER TABLE `tb_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_industry_feedback`
--
ALTER TABLE `tb_industry_feedback`
  MODIFY `id_industry_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tb_internship`
--
ALTER TABLE `tb_internship`
  MODIFY `id_internship` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tb_job_description`
--
ALTER TABLE `tb_job_description`
  MODIFY `id_jobdesc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tb_lecturer`
--
ALTER TABLE `tb_lecturer`
  MODIFY `nik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117176;

--
-- AUTO_INCREMENT for table `tb_logbook`
--
ALTER TABLE `tb_logbook`
  MODIFY `id_logbook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_offer`
--
ALTER TABLE `tb_offer`
  MODIFY `id_offer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_student_feedback`
--
ALTER TABLE `tb_student_feedback`
  MODIFY `id_student_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user_company`
--
ALTER TABLE `tb_user_company`
  MODIFY `id_user_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- Constraints for table `tb_comment_discussion`
--
ALTER TABLE `tb_comment_discussion`
  ADD CONSTRAINT `tb_comment_discussion_ibfk_2` FOREIGN KEY (`id_discuss`) REFERENCES `tb_discussion` (`id_discuss`) ON DELETE CASCADE ON UPDATE CASCADE;

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
