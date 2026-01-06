-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2026 at 10:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `ID` int(11) NOT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) DEFAULT NULL,
  `Gender` varchar(30) DEFAULT NULL,
  `Parents_Name` varchar(100) DEFAULT NULL,
  `Class` varchar(30) DEFAULT NULL,
  `Religion` varchar(100) DEFAULT NULL,
  `Section` text DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Date_Of_Birth` date DEFAULT NULL,
  `Mobile` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`ID`, `Photo`, `First_Name`, `Last_Name`, `Gender`, `Parents_Name`, `Class`, `Religion`, `Section`, `Address`, `Date_Of_Birth`, `Mobile`, `Email`) VALUES
(1, '00', 'Savan', 'vanvan', 'Male', 'Vanvan', '00A', 'Khmer', 'A', 'Phnom Penh', '2026-01-08', '0987654321', 'test124@gmail.con'),
(2, '02.jpg', 'Sokha', 'Pen', 'Female', 'Sovan', '10A', 'Khmer', 'A', 'Phnom Penh', '2008-05-12', '0123456781', 'sokha.test@gmail.com'),
(3, '03.jpg', 'Vannak', 'Sy', 'Male', 'Mony', '10B', 'Khmer', 'B', 'Siem Reap', '2008-11-20', '0123456782', 'vannak.v@gmail.com'),
(4, '04.jpg', 'Bopha', 'Roth', 'Female', 'Dara', '11A', 'Khmer', 'A', 'Battambang', '2007-03-15', '0123456783', 'bopha.p@gmail.com'),
(5, '05.jpg', 'Rithy', 'Nou', 'Male', 'Narith', '12C', 'Khmer', 'C', 'Kampot', '2006-09-10', '0123456784', 'rithy.r@gmail.com'),
(6, '06.jpg', 'Chavy', 'Um', 'Female', 'Phon', '09A', 'Khmer', 'A', 'Phnom Penh', '2009-01-25', '0123456785', 'chavy.c@gmail.com'),
(7, '07.jpg', 'Dara', 'Ek', 'Male', 'Sok', '10A', 'Khmer', 'A', 'Kandal', '2008-07-04', '0123456786', 'dara.s@gmail.com'),
(8, '08.jpg', 'Sreyneang', 'Chhuon', 'Female', 'Vibol', '11B', 'Khmer', 'B', 'Takeo', '2007-12-30', '0123456787', 'srey.n@gmail.com'),
(9, '09.jpg', 'Pharith', 'Seng', 'Male', 'Bunly', '12A', 'Khmer', 'A', 'Phnom Penh', '2006-02-14', '0123456788', 'pharith.p@gmail.com'),
(10, '10.jpg', 'Kunthea', 'Lim', 'Female', 'Sothy', '10C', 'Khmer', 'C', 'Kep', '2008-04-22', '0123456789', 'kunthea.k@gmail.com'),
(11, '11.jpg', 'Samnang', 'Prum', 'Male', 'Heng', '09B', 'Khmer', 'B', 'Phnom Penh', '2009-08-08', '0981234561', 'samnang.h@gmail.com'),
(12, '12.jpg', 'Leakena', 'Ouk', 'Female', 'Chea', '11A', 'Khmer', 'A', 'Sihanoukville', '2007-10-10', '0981234562', 'leakena.c@gmail.com'),
(13, '13.jpg', 'Visal', 'Men', 'Male', 'Thy', '12B', 'Khmer', 'B', 'Kampong Cham', '2006-05-05', '0981234563', 'visal.t@gmail.com'),
(14, '14.jpg', 'Sovannary', 'Chuop', 'Female', 'Rith', '10A', 'Khmer', 'A', 'Phnom Penh', '2008-03-18', '0981234564', 'nary.r@gmail.com'),
(15, '15.jpg', 'Narith', 'In', 'Male', 'Kosal', '11C', 'Khmer', 'C', 'Kampong Speu', '2007-07-07', '0981234565', 'narith.k@gmail.com'),
(16, '16.jpg', 'Pisey', 'Ly', 'Female', 'Sambath', '09C', 'Khmer', 'C', 'Phnom Penh', '2009-12-12', '0981234566', 'pisey.s@gmail.com'),
(17, '17.jpg', 'Seyha', 'Koy', 'Male', 'Chan', '10B', 'Khmer', 'B', 'Prey Veng', '2008-09-09', '0981234567', 'seyha.c@gmail.com'),
(18, '18.jpg', 'Neary', 'Chay', 'Female', 'Sarin', '12A', 'Khmer', 'A', 'Phnom Penh', '2006-01-01', '0981234568', 'neary.s@gmail.com'),
(19, '19.jpg', 'Channarong', 'Ros', 'Male', 'Borin', '11B', 'Khmer', 'B', 'Siem Reap', '2007-11-11', '0981234569', 'rong.b@gmail.com'),
(20, '20.jpg', 'Devi', 'Hun', 'Female', 'Lina', '10A', 'Khmer', 'A', 'Phnom Penh', '2008-06-20', '0871122331', 'devi.l@gmail.com'),
(21, '21.jpg', 'Kosal', 'Sao', 'Male', 'Yorn', '09A', 'Khmer', 'A', 'Pursat', '2009-04-04', '0871122332', 'kosal.y@gmail.com'),
(22, '22.jpg', 'Malis', 'Keo', 'Female', 'Sokun', '11C', 'Khmer', 'C', 'Battambang', '2007-08-15', '0871122333', 'malis.s@gmail.com'),
(23, '23.jpg', 'Vibol', 'Mean', 'Male', 'Thon', '12B', 'Khmer', 'B', 'Phnom Penh', '2006-10-30', '0871122334', 'vibol.t@gmail.com'),
(24, '24.jpg', 'Sreypich', 'Long', 'Female', 'Pech', '10B', 'Khmer', 'B', 'Kampong Chhnang', '2008-02-28', '0871122335', 'pich.p@gmail.com'),
(25, '25.jpg', 'Tola', 'Khat', 'Male', 'Nou', '09B', 'Khmer', 'B', 'Phnom Penh', '2009-05-19', '0871122336', 'phal.n@gmail.com'),
(26, '26.jpg', 'Phirun', 'Som', 'Female', 'Kimsan', '11A', 'Khmer', 'A', 'Siem Reap', '2007-01-20', '0871122337', 'kalli.k@gmail.com'),
(27, '27.jpg', 'Sitha', 'Yin', 'Male', 'Sun', '12C', 'Khmer', 'C', 'Phnom Penh', '2006-07-12', '0871122338', 'ratanak.s@gmail.com'),
(28, '28.jpg', 'Makara', 'Heng', 'Male', 'Meas', '10C', 'Khmer', 'C', 'Kampong Thom', '2008-10-10', '0871122339', 'tola.m@gmail.com'),
(29, '29.jpg', 'Arun', 'Tes', 'Female', 'Serey', '09C', 'Khmer', 'C', 'Phnom Penh', '2009-03-03', '0159988771', 'kanha.s@gmail.com'),
(30, '30.jpg', 'Chantrea', 'Roeun', 'Male', 'Savy', '11B', 'Khmer', 'B', 'Preah Vihear', '2007-06-25', '0159988772', 'vutha.s@gmail.com'),
(31, '31.jpg', 'Botum', 'Chey', 'Female', 'Leng', '10A', 'Khmer', 'A', 'Phnom Penh', '2008-08-14', '0159988773', 'lin.l@gmail.com'),
(32, '32.jpg', 'Chann', 'Mok', 'Male', 'Hout', '12A', 'Khmer', 'A', 'Takeo', '2006-12-05', '0159988774', 'bunna.h@gmail.com'),
(33, '33.jpg', 'Davi', 'Phal', 'Female', 'Van', '09A', 'Khmer', 'A', 'Banteay Meanchey', '2009-11-18', '0159988775', 'dany.v@gmail.com'),
(34, '34.jpg', 'Jendha', 'Mao', 'Male', 'Long', '10B', 'Khmer', 'B', 'Phnom Penh', '2008-09-27', '0159988776', 'heng.l@gmail.com'),
(35, '35.jpg', 'Kanha', 'Tep', 'Female', 'Ouk', '11C', 'Khmer', 'C', 'Svay Rieng', '2007-04-12', '0159988777', 'thyda.o@gmail.com'),
(36, '36.jpg', 'Leak', 'Sim', 'Male', 'Sith', '12B', 'Khmer', 'B', 'Phnom Penh', '2006-08-08', '0159988778', 'vireak.s@gmail.com'),
(37, '37.jpg', 'Mesa', 'Duong', 'Female', 'Makara', '09B', 'Khmer', 'B', 'Mondulkiri', '2009-07-07', '0159988779', 'lina.m@gmail.com'),
(38, '38.jpg', 'Narin', 'Bun', 'Male', 'Sokunth', '10A', 'Khmer', 'A', 'Phnom Penh', '2008-01-30', '0112223334', 'panha.s@gmail.com'),
(39, '39.jpg', 'Oudom', 'Nguon', 'Male', 'Phorn', '11A', 'Khmer', 'A', 'Stung Treng', '2007-02-22', '0112223335', 'borey.p@gmail.com'),
(40, '40.jpg', 'Panha', 'San', 'Female', 'Chum', '12C', 'Khmer', 'C', 'Phnom Penh', '2006-11-11', '0112223336', 'mom.c@gmail.com'),
(41, '41.jpg', 'Rathana', 'Kim', 'Male', 'Nary', '09C', 'Khmer', 'C', 'Kratie', '2009-10-05', '0112223337', 'sovann.n@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
