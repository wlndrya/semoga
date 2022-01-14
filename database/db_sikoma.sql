-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 03:54 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sikoma`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbm_study_program`
--

CREATE TABLE `tbm_study_program` (
  `id_program` int(11) NOT NULL,
  `name_study_program` int(11) NOT NULL,
  `profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_job_experience`
--

CREATE TABLE `tb_job_experience` (
  `id_experience` int(11) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `title` varchar(25) NOT NULL,
  `company` varchar(100) NOT NULL,
  `location` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `employment_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_reference`
--

CREATE TABLE `tb_reference` (
  `id_reference` int(11) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(25) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_student_bahasa`
--

CREATE TABLE `tb_student_bahasa` (
  `id_bahasa` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `bahasa` varchar(150) NOT NULL,
  `skill` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_student_education`
--

CREATE TABLE `tb_student_education` (
  `id_education` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `year` int(4) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `name_school` varchar(250) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_student_prodi`
--

CREATE TABLE `tb_student_prodi` (
  `nim` varchar(20) NOT NULL,
  `id_program` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_student_product`
--

CREATE TABLE `tb_student_product` (
  `id_product` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `thumbnail_img` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_student_social`
--

CREATE TABLE `tb_student_social` (
  `nim` varchar(20) NOT NULL,
  `profile` text NOT NULL,
  `gpa` varchar(10) NOT NULL,
  `personal_email` varchar(250) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `nik` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`nik`, `nama`, `email`, `jabatan`) VALUES
(113105, 'Supardianto', 'supardianto@polibatam.ac.id', 'PKPK');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_mhs`
--

CREATE TABLE `tb_user_mhs` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbm_study_program`
--
ALTER TABLE `tbm_study_program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indexes for table `tb_job_experience`
--
ALTER TABLE `tb_job_experience`
  ADD PRIMARY KEY (`id_experience`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `tb_reference`
--
ALTER TABLE `tb_reference`
  ADD PRIMARY KEY (`id_reference`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `tb_student_bahasa`
--
ALTER TABLE `tb_student_bahasa`
  ADD PRIMARY KEY (`id_bahasa`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `tb_student_education`
--
ALTER TABLE `tb_student_education`
  ADD PRIMARY KEY (`id_education`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `tb_student_prodi`
--
ALTER TABLE `tb_student_prodi`
  ADD KEY `id_program` (`id_program`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `tb_student_product`
--
ALTER TABLE `tb_student_product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `tb_student_social`
--
ALTER TABLE `tb_student_social`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tb_user_mhs`
--
ALTER TABLE `tb_user_mhs`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbm_study_program`
--
ALTER TABLE `tbm_study_program`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_job_experience`
--
ALTER TABLE `tb_job_experience`
  MODIFY `id_experience` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_reference`
--
ALTER TABLE `tb_reference`
  MODIFY `id_reference` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_student_bahasa`
--
ALTER TABLE `tb_student_bahasa`
  MODIFY `id_bahasa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_student_education`
--
ALTER TABLE `tb_student_education`
  MODIFY `id_education` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_student_product`
--
ALTER TABLE `tb_student_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_job_experience`
--
ALTER TABLE `tb_job_experience`
  ADD CONSTRAINT `tb_job_experience_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `tb_user_mhs` (`nim`);

--
-- Constraints for table `tb_reference`
--
ALTER TABLE `tb_reference`
  ADD CONSTRAINT `tb_reference_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `tb_user_mhs` (`nim`);

--
-- Constraints for table `tb_student_bahasa`
--
ALTER TABLE `tb_student_bahasa`
  ADD CONSTRAINT `tb_student_bahasa_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `tb_user_mhs` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_student_education`
--
ALTER TABLE `tb_student_education`
  ADD CONSTRAINT `tb_student_education_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `tb_user_mhs` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_student_prodi`
--
ALTER TABLE `tb_student_prodi`
  ADD CONSTRAINT `tb_student_prodi_ibfk_2` FOREIGN KEY (`id_program`) REFERENCES `tbm_study_program` (`id_program`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_student_prodi_ibfk_3` FOREIGN KEY (`nim`) REFERENCES `tb_user_mhs` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_student_product`
--
ALTER TABLE `tb_student_product`
  ADD CONSTRAINT `tb_student_product_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `tb_user_mhs` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_student_social`
--
ALTER TABLE `tb_student_social`
  ADD CONSTRAINT `tb_student_social_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `tb_user_mhs` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
