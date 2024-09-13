-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2024 at 07:46 AM
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
-- Database: `complaints`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `problem_id` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `problem_id`, `reason`) VALUES
(1, 50, ''),
(2, 43, 'need cost'),
(3, 49, 'need more cost');

-- --------------------------------------------------------

--
-- Table structure for table `complaints_detail`
--

CREATE TABLE `complaints_detail` (
  `id` int(11) NOT NULL,
  `faculty_id` int(10) NOT NULL,
  `faculty_name` varchar(100) NOT NULL,
  `department` varchar(10) NOT NULL,
  `faculty_contact` varchar(20) NOT NULL,
  `faculty_mail` varchar(50) NOT NULL,
  `block_venue` varchar(15) NOT NULL,
  `venue_name` varchar(30) NOT NULL,
  `type_of_problem` varchar(50) NOT NULL,
  `problem_description` varchar(400) NOT NULL,
  `images` varchar(255) NOT NULL,
  `date_of_reg` date NOT NULL,
  `days_to_complete` date NOT NULL,
  `status` varchar(200) NOT NULL,
  `feedback` varchar(250) NOT NULL,
  `task_completion` varchar(250) NOT NULL,
  `date_of_completion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaints_detail`
--

INSERT INTO `complaints_detail` (`id`, `faculty_id`, `faculty_name`, `department`, `faculty_contact`, `faculty_mail`, `block_venue`, `venue_name`, `type_of_problem`, `problem_description`, `images`, `date_of_reg`, `days_to_complete`, `status`, `feedback`, `task_completion`, `date_of_completion`) VALUES
(43, 11111111, 'nalin kumar', 'EEE', '8883711939', 'nalinkumar@gmail.com', 'APJ-106', 'class', 'Electrical Work', 'fan not working', '1.jpg', '2024-08-27', '0000-00-00', '14', 'sdfds', '0', '0000-00-00'),
(44, 11111111, 'nalin kumar', 'EEE', '8883711939', 'nalinkumar@gmail.com', 'APJ-106', 'class', 'Electrical Work', 'fan not working', '2.jpg', '2024-08-27', '0000-00-00', '4', '', '0', '0000-00-00'),
(45, 11111111, 'hariharan', 'cse', '56789', 'nalinkumar@gmail.com', 'APJ-106', 'department', 'Electrical Work', 'fan not working', '3.jpg', '2024-08-27', '2024-09-06', '9', '', '0', '0000-00-00'),
(46, 11111111, 'hariharan', 'cse', '56789', 'nalinkumar@gmail.com', 'APJ-106', 'department', 'Electrical Work', 'fan not working', '4.jpg', '2024-08-27', '0000-00-00', '7', '', '0', '0000-00-00'),
(47, 11111111, 'hariharan', 'cse', '56789', 'nalinkumar@gmail.com', 'APJ-106', 'department', 'Electrical Work', 'fan not working', '5.jpeg', '2024-08-27', '0000-00-00', '7', '', '0', '0000-00-00'),
(48, 0, 'Rabin', 'cse', '9003581769', 's', 's', 'class', 'Carpenter Work', 'er', '1.jpg', '2024-08-27', '0000-00-00', '4', '', '0', '0000-00-00'),
(49, 0, 'nalin', 'EEE', '9003581769', 'd', 'RK-206', 'class', 'Electrical Work', 'er', '2.jpg', '2024-08-27', '0000-00-00', '6', '', '0', '0000-00-00'),
(50, 0, 'hariharan', 'EEE', '8883711939', 'nalinkumar@gmail.com', 'APJ-106', 'class', 'Electrical Work', 'fan not working', '1.jpg', '2024-08-27', '0000-00-00', '1', '', '0', '0000-00-00'),
(51, 0, 'Rabin', 'cse', '9003581769', 's', 's', 'lab', 'Electrical Work', 's', '4.jpg', '2024-08-27', '0000-00-00', '10', 'Now fan is working properly', 'fully completed', '2024-03-18'),
(52, 0, 'hariharan', 'EEE', '9003581769', 'nalinkumar@gmail.com', 's', 'class', 'Carpenter Work', 's', '1.jpg', '2024-08-27', '0000-00-00', '10', 'wifi working properly', 'partilly completed', '2023-12-27'),
(53, 0, 'saran', 'cse', '56789', 'kknN@', 'rg-45', 'lab', 'Electrical Work', 's', '1.jpg', '2024-08-27', '0000-00-00', '15', '', '0', '0000-00-00'),
(54, 0, 'hariharan', 'cse', '9003581769', 'rabinsmithsakthivel@gmail.com', 'RK-206', 'department', 'Carpenter Work', 's', '3.jpg', '2024-08-27', '0000-00-00', '9', 'not good', '0', '0000-00-00'),
(55, 0, 'Rabin', 'cse', '9003581769', 'kknN@', 'RK-206', 'class', 'Civil Work', 'er', '2.jpg', '2024-08-27', '0000-00-00', '16', 'not satisfied', '0', '0000-00-00'),
(56, 234, 'Rabin', 's', '9003581769', 'rabinsmithsakthivel@gmail.com', 's', 'department', 'Electrical Work', 'er', '1.jpg', '2024-08-27', '0000-00-00', '13', '', '0', '0000-00-00'),
(57, 109, 'ugfds', 'fds', '34534564', 'xddsg@gmail.com', 'sdfds', 'sfds', 'cdvds', 'sdfdsv', '1.jpg', '2024-08-14', '0000-00-00', '8', 'jhju', 'hjgh', '2024-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_login`
--

CREATE TABLE `faculty_login` (
  `faculty_id` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_login`
--

INSERT INTO `faculty_login` (`faculty_id`, `password`) VALUES
('11111111', '1234'),
('22222222', '1234'),
('33333333', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `task_id` int(11) NOT NULL,
  `problem_id` int(11) NOT NULL,
  `worker_id` varchar(25) NOT NULL,
  `priority` varchar(25) NOT NULL,
  `comment_query` varchar(250) NOT NULL,
  `comment_reply` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`task_id`, `problem_id`, `worker_id`, `priority`, `comment_query`, `comment_reply`) VALUES
(1, 48, 'ELECTRICAL', 'HIGH', '', ''),
(2, 49, 'ELECTRICAL', 'LOW', '', ''),
(3, 50, 'ELECTRICAL', 'MEDIUM', '', ''),
(4, 51, 'ELECTRICAL', 'LOW', 'sdf', 'sdf'),
(5, 52, 'CIVIL', 'LOW', 'ght', 'thg'),
(6, 53, 'CIVIL', 'LOW', 'ewfr', ''),
(7, 54, 'CIVIL', 'HIGH', '', ''),
(8, 55, 'CIVIL', 'MEDIUM', '', ''),
(9, 43, 'CARPENTRY', 'High', '', ''),
(10, 56, 'PARTITION', 'High', '', ''),
(11, 44, 'ELECTRICAL', 'Low', '', ''),
(12, 45, 'PLUMBING', 'Medium', 'efre', 'sef'),
(13, 46, 'PLUMBING', 'Medium', '', ''),
(14, 47, 'IT INFRA', 'High', '', ''),
(15, 50, 'PARTITION', 'High', '', ''),
(16, 43, 'CARPENTRY', 'High', '', ''),
(17, 49, 'IT INFRA', 'High', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `worker_details`
--

CREATE TABLE `worker_details` (
  `id` int(11) NOT NULL,
  `worker_id` varchar(100) NOT NULL,
  `worker_first_name` varchar(100) NOT NULL,
  `worker_last_name` varchar(100) NOT NULL,
  `worker_gender` varchar(100) NOT NULL,
  `worker_dept` varchar(100) NOT NULL,
  `worker_mobile` varchar(10) NOT NULL,
  `worker_mail` varchar(100) NOT NULL,
  `worker_emp_type` varchar(100) NOT NULL,
  `worker_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `worker_details`
--

INSERT INTO `worker_details` (`id`, `worker_id`, `worker_first_name`, `worker_last_name`, `worker_gender`, `worker_dept`, `worker_mobile`, `worker_mail`, `worker_emp_type`, `worker_photo`) VALUES
(32, 'ELE01', 'Nivetha(HEAD_1)', 'K', 'Female', 'ELECTRICAL', '9952625820', 'nivethak.vlsi@mkce.ac.in', ' Full-time', ''),
(33, 'CAR01', 'HEAD_NAME2', '', 'Male', 'CARPENTRY', '9940911511', 'mukeshp.civil@mkce.ac.in', 'Full-time', ''),
(34, 'CIVIL01', 'HEAD_NAME3', '', 'Male', 'CIVIL', '9159594640', 'karthickr.mech@mkce.ac.in ', 'Full-time', ''),
(35, 'PAR01', 'HEAD_NAME', '', 'Male', 'PARTITION', '9159594640', 'manirajp.eee@mkce.ac.in', 'Full-time', ''),
(36, 'PLU01', 'HEAD_NAME04', '', 'Male', 'PLUMBING', '8220638519', 'ranganathanr.maths@mkce.ac.in', 'Full-time', ''),
(37, 'INFRA01', 'HEAD_NAME05', '', 'Female', 'IT INFRA', '6380153269', 'sathiyanathans.it@mkce.ac.in', 'Part-time', '');

-- --------------------------------------------------------

--
-- Table structure for table `worker_taskdet`
--

CREATE TABLE `worker_taskdet` (
  `id` int(255) NOT NULL,
  `task_id` int(11) NOT NULL,
  `after_photo` mediumblob NOT NULL,
  `task_completion` varchar(100) NOT NULL,
  `work_completion_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `worker_taskdet`
--

INSERT INTO `worker_taskdet` (`id`, `task_id`, `after_photo`, `task_completion`, `work_completion_date`) VALUES
(1, 1, 0x75706c6f6164732f31336165303131322d626466652d343831622d396533612d6132346261363330643037372e6a706567, 'Fully Completed', '2024-08-25'),
(3, 2, 0x75706c6f6164732f3638373437343730373333613266326637373737373732653639366537333730363937323635363436323735373336393665363537333733366436353634363936313265363336663664326637373730326436333666366537343635366537343266373537303663366636313634373332663332333033323330326633303339326635343737363936633639366632653661373036372e6a706567, 'Partially Completed', '2024-08-25'),
(4, 3, 0x6c6f63616c686f73742f75706c6f6164732f323132353231383132362e6a7067, 'Fully Completed', '2024-08-25'),
(5, 4, 0x6c6f63616c686f73742f75706c6f6164732f31336165303131322d626466652d343831622d396533612d6132346261363330643037372e6a706567, 'Fully Completed', '2024-08-26'),
(6, 5, 0x6c6f63616c686f73742f75706c6f6164732f31336165303131322d626466652d343831622d396533612d6132346261363330643037372e6a706567, 'Fully Completed', '2024-08-27'),
(7, 6, 0x6c6f63616c686f73742f75706c6f6164732f31336165303131322d626466652d343831622d396533612d6132346261363330643037372e6a706567, 'Partially Completed', '2024-08-27'),
(8, 7, 0x6c6f63616c686f73742f75706c6f6164732f323132353231383132362e6a7067, 'Partially Completed', '2024-08-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `problem_id` (`problem_id`);

--
-- Indexes for table `complaints_detail`
--
ALTER TABLE `complaints_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `problem_id` (`problem_id`),
  ADD KEY `problem_id_2` (`problem_id`);

--
-- Indexes for table `worker_details`
--
ALTER TABLE `worker_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worker_taskdet`
--
ALTER TABLE `worker_taskdet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_id` (`task_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `complaints_detail`
--
ALTER TABLE `complaints_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `worker_details`
--
ALTER TABLE `worker_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `worker_taskdet`
--
ALTER TABLE `worker_taskdet`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`problem_id`) REFERENCES `complaints_detail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `problem_id` FOREIGN KEY (`problem_id`) REFERENCES `complaints_detail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `worker_taskdet`
--
ALTER TABLE `worker_taskdet`
  ADD CONSTRAINT `task_id` FOREIGN KEY (`task_id`) REFERENCES `manager` (`task_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
