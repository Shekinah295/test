-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 01:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fixmystreet`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `d_id` int(255) NOT NULL,
  `p_id` int(25) NOT NULL,
  `d_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`d_id`, `p_id`, `d_name`) VALUES
(1, 1, 'Chibombo'),
(2, 1, 'Chisamba'),
(3, 1, 'Chitambo'),
(4, 1, 'Kabwe'),
(5, 1, 'Kapiri Mposhi'),
(6, 1, 'Luano'),
(7, 1, 'Mkushi'),
(8, 1, 'Mumbwa'),
(9, 1, 'Ngabwe'),
(10, 1, 'Serenje'),
(11, 1, 'Shibuyunji'),
(12, 2, 'Chililabombwe'),
(13, 2, 'Chingola'),
(14, 2, 'Kalulushi'),
(15, 2, 'Kitwe'),
(16, 2, 'Luanshya'),
(17, 2, 'Lufwanyama'),
(18, 2, 'Masaiti'),
(19, 2, 'Mpongwe'),
(20, 2, 'Mufulira'),
(21, 2, 'Ndola'),
(22, 3, 'Chadiza'),
(23, 3, 'Chama'),
(24, 3, 'Chasefu'),
(25, 3, 'Chipangali'),
(26, 3, 'Chipata'),
(27, 3, 'Kasenengwa'),
(28, 3, 'Katete'),
(29, 3, 'Lumezi'),
(30, 3, 'Lundazi'),
(31, 3, 'Lusangazi'),
(32, 3, 'Mambwe'),
(33, 3, 'Nyimba'),
(34, 3, 'Petauke'),
(35, 3, 'Sinda'),
(36, 3, 'Vubwi'),
(37, 4, 'Chembe'),
(38, 4, 'Chienge'),
(39, 4, 'Chifunabuli'),
(40, 4, 'Chipili'),
(41, 4, 'Kawambwa'),
(42, 4, 'Lunga'),
(43, 4, 'Mansa'),
(44, 4, 'Milenge'),
(45, 4, 'Mwasabombwe'),
(46, 4, 'Mwense'),
(47, 4, 'Nchelenge'),
(48, 4, 'Samfya'),
(49, 5, 'Chilanga'),
(50, 5, 'Chongwe'),
(51, 5, 'Kafue'),
(52, 5, 'Luangwa'),
(53, 5, 'Lusaka'),
(54, 5, 'Rufunsa'),
(55, 6, 'Chinsali'),
(56, 6, 'Isoka'),
(57, 6, 'Kanchibiya'),
(58, 6, 'Lavushimanda'),
(59, 6, 'Mafinga'),
(60, 6, 'Mpika'),
(61, 6, 'Nakonde'),
(62, 6, 'Shiwangandu'),
(63, 7, 'Chilubi'),
(64, 7, 'Kaputa'),
(65, 7, 'Kasama'),
(66, 7, 'Lunte'),
(67, 7, 'Lupososhi'),
(68, 7, 'Luwingu'),
(69, 7, 'Mbala'),
(70, 7, 'Mporokoso'),
(71, 7, 'Mpulungu'),
(72, 7, 'Mungwi'),
(73, 7, 'Nsama'),
(74, 7, 'Senga'),
(75, 8, 'Chavuma'),
(76, 8, 'Ikelenge'),
(77, 8, 'Kabompo'),
(78, 8, 'Kasempa'),
(79, 8, 'Kalumbila'),
(80, 8, 'Manyinga'),
(81, 8, 'Mufumbwe'),
(82, 8, 'Mushindamo'),
(83, 8, 'Mwinilunga'),
(84, 8, 'Solwezi'),
(85, 8, 'Zambezi'),
(86, 9, 'Chikankata'),
(87, 9, 'Chirundu'),
(88, 9, 'Choma'),
(89, 9, 'Gwembe'),
(90, 9, 'Itezhi-Tezhi'),
(91, 9, 'Kalomo'),
(92, 9, 'Kazungula'),
(93, 9, 'Livingstone'),
(94, 9, 'Mazabuka'),
(95, 9, 'Monze'),
(96, 9, 'Namwala'),
(97, 9, 'Pemba'),
(98, 9, 'Siavonga'),
(99, 9, 'Sinazongwe'),
(100, 9, 'Zimba'),
(101, 10, 'Kalabo'),
(102, 10, 'Kaoma'),
(103, 10, 'Limulunga'),
(104, 10, 'Luampa'),
(105, 10, 'Lukulu'),
(106, 10, 'Mitete'),
(107, 10, 'Mongu'),
(108, 10, 'Mulobezi'),
(109, 10, 'Mwandi'),
(110, 10, 'Nalolo'),
(111, 10, 'Nkeyema'),
(112, 10, 'Senaga'),
(113, 10, 'Sesheke'),
(114, 10, 'Shangombo'),
(115, 10, 'Sikongo'),
(116, 10, 'Sioma');

-- --------------------------------------------------------

--
-- Table structure for table `problem_category`
--

CREATE TABLE `problem_category` (
  `pro_id` int(11) NOT NULL,
  `problem_name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problem_category`
--

INSERT INTO `problem_category` (`pro_id`, `problem_name`) VALUES
(1, 'Abandoned vehicles'),
(2, 'Bus stops'),
(3, 'Dog fouling'),
(4, 'Flyposting'),
(5, 'Flytipping'),
(6, 'Graffiti'),
(7, 'Parks/landscapes'),
(8, 'Pavement/footpaths'),
(9, 'Potholes'),
(10, 'Public toilets'),
(11, 'Roads/highways'),
(12, 'Road traffic signs'),
(13, 'Rubbish (refuse and recycling)'),
(14, 'Street cleaning');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`p_id`, `p_name`) VALUES
(1, 'Central'),
(2, 'Copperbelt'),
(3, 'Eastern'),
(4, 'Luapula'),
(5, 'Lusaka'),
(6, 'Muchinga'),
(7, 'Northern'),
(8, 'North_Western'),
(9, 'Southern'),
(10, 'Western');

-- --------------------------------------------------------

--
-- Table structure for table `report_problem`
--

CREATE TABLE `report_problem` (
  `rp_id` int(11) NOT NULL,
  `pro_id` int(25) NOT NULL,
  `problem_description` text NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `status` enum('no','yes') NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(45) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `wardname` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `w_id` int(255) NOT NULL,
  `w_name` varchar(45) NOT NULL,
  `d_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `problem_category`
--
ALTER TABLE `problem_category`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `report_problem`
--
ALTER TABLE `report_problem`
  ADD PRIMARY KEY (`rp_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`w_id`),
  ADD KEY `d_id` (`d_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `d_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `problem_category`
--
ALTER TABLE `problem_category`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `report_problem`
--
ALTER TABLE `report_problem`
  MODIFY `rp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ward`
--
ALTER TABLE `ward`
  MODIFY `w_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `district_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `province` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `report_problem`
--
ALTER TABLE `report_problem`
  ADD CONSTRAINT `report_problem_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `problem_category` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ward`
--
ALTER TABLE `ward`
  ADD CONSTRAINT `ward_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `district` (`d_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
