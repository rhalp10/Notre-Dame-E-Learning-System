-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2019 at 09:39 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notre_elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `ledger`
--

CREATE TABLE `ledger` (
  `ledger_ID` int(11) UNSIGNED NOT NULL,
  `rtd_ID` int(11) UNSIGNED DEFAULT NULL,
  `ledger_Name` varchar(85) DEFAULT NULL,
  `ledger_Amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ledger`
--

INSERT INTO `ledger` (`ledger_ID`, `rtd_ID`, `ledger_Name`, `ledger_Amount`) VALUES
(1, NULL, 'general ledger', 900),
(2, NULL, 'general ledger', 100),
(4, NULL, 'newww', 600);

-- --------------------------------------------------------

--
-- Table structure for table `ledger_entry`
--

CREATE TABLE `ledger_entry` (
  `entry_ID` int(11) UNSIGNED NOT NULL,
  `ledger_ID` int(11) UNSIGNED DEFAULT NULL,
  `entry_Name` varchar(85) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ledger_entry`
--

INSERT INTO `ledger_entry` (`entry_ID`, `ledger_ID`, `entry_Name`) VALUES
(1, NULL, 'Entry 1'),
(2, NULL, 'Entry 2');

-- --------------------------------------------------------

--
-- Table structure for table `record_student_details`
--

CREATE TABLE `record_student_details` (
  `rsd_ID` int(11) UNSIGNED NOT NULL,
  `user_ID` int(11) UNSIGNED DEFAULT NULL,
  `rsd_StudNum` varchar(25) NOT NULL,
  `rsd_FName` varchar(85) NOT NULL,
  `rsd_MName` varchar(85) NOT NULL,
  `rsd_LName` varchar(85) NOT NULL,
  `suffix_ID` int(11) UNSIGNED DEFAULT NULL,
  `sex_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record_student_details`
--

INSERT INTO `record_student_details` (`rsd_ID`, `user_ID`, `rsd_StudNum`, `rsd_FName`, `rsd_MName`, `rsd_LName`, `suffix_ID`, `sex_ID`) VALUES
(1, 2, '201310656', 'Rhalp Darren', 'Resuena', 'Cabrera', NULL, 1),
(2, 3, '201310657', 'Franzmarc', 'Resuena', 'Cabrera', NULL, 1),
(4, NULL, '685187', 'yeh', 'yeh', 'yeh', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `record_teacher_detail`
--

CREATE TABLE `record_teacher_detail` (
  `rtd_ID` int(11) UNSIGNED NOT NULL,
  `rtd_EmpID` varchar(25) NOT NULL,
  `rtd_FName` varchar(85) NOT NULL,
  `rtd_MName` varchar(85) NOT NULL,
  `rtd_LName` varchar(85) NOT NULL,
  `suffix_ID` int(11) UNSIGNED DEFAULT NULL,
  `sex_ID` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record_teacher_detail`
--

INSERT INTO `record_teacher_detail` (`rtd_ID`, `rtd_EmpID`, `rtd_FName`, `rtd_MName`, `rtd_LName`, `suffix_ID`, `sex_ID`) VALUES
(1, '65897', 'asd', 'fds', 'fds', NULL, 1),
(2, '98789', 'asd', 'asd', 'sd', NULL, 2),
(4, '99999', 'asd', 'asd', 'asd', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ref_section`
--

CREATE TABLE `ref_section` (
  `section_ID` int(11) UNSIGNED NOT NULL,
  `section_Name` varchar(85) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_section`
--

INSERT INTO `ref_section` (`section_ID`, `section_Name`) VALUES
(1, 'section 1'),
(2, 'section 2'),
(3, 'section 3'),
(4, 'section 4'),
(5, 'section 5'),
(7, 'section6'),
(8, 'section7'),
(9, NULL),
(10, NULL),
(11, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ref_sex`
--

CREATE TABLE `ref_sex` (
  `sex_ID` int(11) UNSIGNED NOT NULL COMMENT 'Primary Key',
  `sex_Name` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_sex`
--

INSERT INTO `ref_sex` (`sex_ID`, `sex_Name`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `ref_suffixname`
--

CREATE TABLE `ref_suffixname` (
  `suffix_ID` int(11) UNSIGNED NOT NULL COMMENT 'Primary Key',
  `suffix` varchar(10) DEFAULT NULL COMMENT 'suffix name position on the last name ',
  `suffix_Name` varchar(50) DEFAULT NULL COMMENT 'suffix description'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_suffixname`
--

INSERT INTO `ref_suffixname` (`suffix_ID`, `suffix`, `suffix_Name`) VALUES
(1, 'N/A', 'Not Applicable'),
(2, 'CFRE', 'Certified Fund Raising Executive'),
(3, 'CLU', 'Chartered Life Underwriter'),
(4, 'CPA', 'Certified Public Accountant'),
(5, 'C.S.C.', 'Congregation of Holy Cross'),
(6, 'C.S.J.', 'Sisters of St. Joseph'),
(7, 'D.C.', 'Doctor of Chiropractic'),
(8, 'D.D.', 'Doctor of Divinity'),
(9, 'D.D.S.', 'Doctor of Dental Surgery'),
(10, 'D.M.D.', 'Doctor of Dental Medicine'),
(11, 'D.O.', 'Doctor of Osteopathy'),
(12, 'D.V.M.', 'Doctor of Veterinary Medicine'),
(13, 'Ed.D.', 'Doctor of Education'),
(14, 'Esq.', 'Esquire'),
(15, 'II', 'The Second'),
(16, 'III', 'The Third'),
(17, 'IV', 'The Fourth'),
(18, 'Inc.', 'Incorporated'),
(19, 'J.D.', 'Juris Doctor'),
(20, 'Jr.', 'Junior'),
(21, 'LL.D.', 'Doctor of Laws'),
(22, 'Ltd.', 'Limited'),
(23, 'M.D.', 'Doctor of Medicine'),
(24, 'O.D.', 'Doctor of Optometry'),
(25, 'O.S.B.', 'Order of St Benedict'),
(26, 'P.C.', 'Past Commander, Police Constable, Post Commander'),
(27, 'P.E.', 'Protestant Episcopal'),
(28, 'Ph.D.', 'Doctor of Philosophy'),
(29, 'Ret.', 'Retired'),
(30, 'R.G.S', 'Sisters of Our Lady of Charity of the Good Shepher'),
(31, 'R.N.', 'Registered Nurse'),
(32, 'R.N.C.', 'Registered Nurse Clinician'),
(33, 'S.H.C.J.', 'Society of Holy Child Jesus'),
(34, 'S.J.', 'Society of Jesus'),
(35, 'S.N.J.M.', 'Sisters of Holy Names of Jesus & Mary'),
(36, 'Sr.', 'Senior'),
(37, 'S.S.M.O.', 'Sister of Saint Mary Order'),
(38, 'USA', 'United States Army'),
(39, 'USAF', 'United States Air Force'),
(40, 'USAFR', 'United States Air Force Reserve'),
(41, 'USAR', 'United States Army Reserve'),
(42, 'USCG', 'United States Coast Guard'),
(43, 'USMC', 'United States Marine Corps'),
(44, 'USMCR', 'United States Marine Corps Reserve'),
(45, 'USN', 'United States Navy'),
(46, 'USNR', 'United States Navy Reserve');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `sem_ID` int(11) UNSIGNED NOT NULL,
  `sem_Start` date DEFAULT NULL,
  `sem_End` date DEFAULT NULL,
  `status_ID` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`sem_ID`, `sem_Start`, `sem_End`, `status_ID`) VALUES
(1, '2018-00-00', '2019-00-00', NULL),
(2, '2019-00-00', '2020-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `user_ID` int(11) UNSIGNED NOT NULL,
  `level_ID` tinyint(11) UNSIGNED DEFAULT NULL COMMENT 'user level',
  `user_Name` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_Pass` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_Email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_Registered` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`user_ID`, `level_ID`, `user_Name`, `user_Pass`, `user_Email`, `user_Registered`, `user_status`) VALUES
(1, 3, 'rhalp10', '$P$BCAA1YEnm0BZ.DJ2X/cXEil0XJcfVM0', 'email@gmail.com', '2018-10-20 00:58:10', 1),
(2, 2, '19874546', 'XnCOFXzvzFGHXS/GZ5kVEZ9PAE2N+oCeqydK87yGuwo=', 'email@gmail.com', '2019-02-19 17:13:44', 0),
(3, 2, '19874548', 'Yl1K09d95jpJ1DheIeAi/61UUccd9tATJ9GKkAXiAX8=', 'email@gmail.com', '2019-02-19 17:21:46', 0),
(4, 3, 'admin', 'QrUgcNdRjaE74hfEIeThKa/RaqA9N/KpBI+X7VeiyfE=', 'email@gmail.com', '2019-02-28 16:37:27', 1),
(6, 2, 'instructor', 'Pds40EmB+V/6xvKy2SFGjkoVLTwzmjfbRI2QGpPmGz0=', 'email@gmail.com', '2019-03-10 18:08:27', 0),
(7, 1, '201310656', 'M8+Cpt+zltZs3QpomFLRjEFCGvI0VGC+jjJzXH32Mtw=', 'email@gmail.com', '2019-03-10 18:26:16', 0),
(13, 3, 'raizen21', 'QrUgcNdRjaE74hfEIeThKa/RaqA9N/KpBI+X7VeiyfE=', 'email@gmail.com', '2019-03-12 14:46:04', 1),
(18, 1, 'xzc798z7xc97z89x7c897', '3ak+1iRRUC0atJloR35fTrcGweXqfPaO8BcTXXOWw7g=', 'email@gmail.com', '2019-03-19 16:52:01', 1),
(19, 1, 'newuser31', '3ak+1iRRUC0atJloR35fTrcGweXqfPaO8BcTXXOWw7g=', 'email@gmail.com', '2019-03-19 17:35:53', 1),
(29, 1, 'asda78sd89789', 'PVKibfXGxoOxc+WlrZLFCQXErLOsHLCB8F9DsNFD+4s=', 'rhalpdarrencabrera@gmail.com', '2019-03-23 07:19:09', 1),
(30, 1, 'yyyyyyyyyyyyyyyyyyyyyyyy', 'PVKibfXGxoOxc+WlrZLFCQXErLOsHLCB8F9DsNFD+4s=', 'rhalpdarrencabrera@gmail.com', '2019-03-23 07:55:56', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `level_ID` tinyint(11) UNSIGNED NOT NULL,
  `level_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`level_ID`, `level_name`) VALUES
(1, 'student'),
(2, 'teacher'),
(3, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ledger`
--
ALTER TABLE `ledger`
  ADD PRIMARY KEY (`ledger_ID`);

--
-- Indexes for table `ledger_entry`
--
ALTER TABLE `ledger_entry`
  ADD PRIMARY KEY (`entry_ID`);

--
-- Indexes for table `record_student_details`
--
ALTER TABLE `record_student_details`
  ADD PRIMARY KEY (`rsd_ID`),
  ADD UNIQUE KEY `rsd_LRN` (`rsd_StudNum`),
  ADD KEY `suffix_ID` (`suffix_ID`);

--
-- Indexes for table `record_teacher_detail`
--
ALTER TABLE `record_teacher_detail`
  ADD PRIMARY KEY (`rtd_ID`),
  ADD UNIQUE KEY `rtd_EmpID` (`rtd_EmpID`);

--
-- Indexes for table `ref_section`
--
ALTER TABLE `ref_section`
  ADD PRIMARY KEY (`section_ID`);

--
-- Indexes for table `ref_sex`
--
ALTER TABLE `ref_sex`
  ADD PRIMARY KEY (`sex_ID`);

--
-- Indexes for table `ref_suffixname`
--
ALTER TABLE `ref_suffixname`
  ADD PRIMARY KEY (`suffix_ID`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`sem_ID`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`user_ID`),
  ADD KEY `user_login_key` (`user_Name`),
  ADD KEY `user_email` (`user_Email`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`level_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ledger`
--
ALTER TABLE `ledger`
  MODIFY `ledger_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ledger_entry`
--
ALTER TABLE `ledger_entry`
  MODIFY `entry_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `record_student_details`
--
ALTER TABLE `record_student_details`
  MODIFY `rsd_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `record_teacher_detail`
--
ALTER TABLE `record_teacher_detail`
  MODIFY `rtd_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ref_section`
--
ALTER TABLE `ref_section`
  MODIFY `section_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `ref_suffixname`
--
ALTER TABLE `ref_suffixname`
  MODIFY `suffix_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `sem_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `user_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `level_ID` tinyint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
