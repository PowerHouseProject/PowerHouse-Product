-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2021 at 09:20 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `power_house`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant`
--

CREATE TABLE `accountant` (
  `accountant_id` int(4) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `admin_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `admin_id`) VALUES
('admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(10) NOT NULL,
  `trainer_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `injuries` varchar(255) NOT NULL,
  `assign_trainer` int(1) NOT NULL,
  `joined_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `username`, `f_name`, `l_name`, `address`, `phone_no`, `dob`, `gender`, `injuries`, `assign_trainer`, `joined_date`, `image`) VALUES
(1, 'hiran', 'Hiran ', 'Gamage', ' 7 B Tower Bldg 25 Station Road, 04 , Mirigama', 785619959, '1999-05-01', 'male', '', 1, '2021-09-27 12:22:43', 'hiran.jpg'),
(2, 'duminda', 'Duminda ', 'Jayasinghe', '27, Holy Emmanuel Church Road , Mirigama', 785619959, '1990-01-12', 'male', '', 1, '2021-09-27 12:22:43', 'duminda.jpg'),
(3, 'herath', 'Herath', 'Withanage ', ' 8 B Tower Bldg 25 Station Road, 04 , Mirigama', 785619959, '1999-05-01', 'male', '', 0, '2021-09-27 12:22:43', 'herath.jpg'),
(4, 'udaya', 'Udaya ', 'Wickrema', '27, Holy Emmanuel Church Road , Mirigama', 785619959, '1994-01-12', 'male', '', 1, '2021-09-27 12:22:43', 'udaya.jpg'),
(5, 'umashi', 'Umashi ', 'Gamage', ' 8 B Tower Bldg 25 Station Road, 04 , Mirigama', 785619959, '1999-05-01', 'female', '', 1, '2021-09-27 12:22:43', 'umashi.jpg'),
(6, 'hiranya', 'Hiranya ', 'Iriyagolla', '27, Holy Emmanuel Church Road , Mirigama', 785619959, '1998-01-12', 'female', '', 1, '2021-09-27 12:22:43', 'hiranya.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `membership_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `membership_type` int(10) NOT NULL,
  `joined_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`membership_id`, `member_id`, `membership_type`, `joined_date`) VALUES
(1, 3, 3, '2021-10-09'),
(2, 1, 1, '2021-10-09');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `payment_date` date NOT NULL DEFAULT current_timestamp(),
  `payment_amount` int(10) NOT NULL,
  `trainer_id` int(10) NOT NULL,
  `payment_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `member_id`, `payment_date`, `payment_amount`, `trainer_id`, `payment_type`) VALUES
(1, 3, '2021-10-09', 7500, 1, 'online'),
(2, 1, '2021-10-09', 13500, 2, 'online');

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetId` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pwdreset`
--

INSERT INTO `pwdreset` (`pwdResetId`, `pwdResetEmail`, `pwdResetSelector`, `pwdResetToken`, `pwdResetExpires`) VALUES
(2, '', '11dac8fa713f0c58', '$2y$10$VaqJi.rZzjnzd1j5aTmriuAJFS27Lu7MtdncTL9HG2Z4PrAr6MEDC', '1632926287'),
(4, 'thedigiru@gmail.com', '0a0c63483066bf31', '$2y$10$hPQvdOawIrDf3Aaswa0iceRTfUNyurU9EKRPNnmG9eMo8poCTEWDm', '1632935149'),
(10, 'kulasekarakmbs@gmail.com', 'e810d131b01b1746', '$2y$10$lyb4Thu1CpurRq3.SYwKi.nImF0oSRSshNXHbjfF1HDJLJ3ssWihC', '1633610019');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `trainer_id` int(10) NOT NULL,
  `review` varchar(1024) NOT NULL,
  `date` date NOT NULL,
  `stars` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `member_id`, `trainer_id`, `review`, `date`, `stars`, `status`) VALUES
(1, 6, 3, 'Our trainer, Dinuka, is fantastic.\r\nWe really enjoy your service and working out with Dinuka has done wonders for us!! Thanks so much!\"', '2021-08-16', 4, 1),
(2, 6, 4, 'I also want to note that Hasitha is a fabulous trainer, just the right combination of push and encouragement. And very adaptive to the materials and space at hand, as well as our individual needs.', '2021-07-13', 5, 1),
(3, 4, 4, 'Good trainer, but communication was not that good.', '2021-07-05', 2, 1),
(4, 6, 5, 'Over the years, I have joined numerous gyms but nothing took.  So when my children recently decided I needed a fitness program, I opted for a personal trainer. Gia assessed me and set up a personal program based on my age and my abilities. I quickly discovered that I was unlikely to follow it because I travel so frequently - so Erin modified the program.\r\nI have been very impressed by her adaptability and knowledgeability. I don\'t have a cookie cutter routine; I have a personal one. Gia is also encouraging, always smiling and always ready to make useful suggestions and modifications. I would recommend this type of program to anyone looking for a personalized and flexible fitness regime.', '2021-07-12', 5, 1),
(5, 1, 1, 'Thusitha is wonderful- I can\'t say enough good things about him. I am so pleased with my personal training with him and with the results that I am achieving.', '2021-06-07', 5, 1),
(6, 2, 1, 'I am 66 years old with no medical conditions that would prevent me from participating in a physical fitness program. Thusitha was my personal trainer meeting at the gym. He created interesting workouts that allowed me to improve my upper body strength, flexibility and balance. Thusitha was always pleasant while reminding me to maintain correct body position. I would recommend anyone who would like to improve their fitness to work with Thusitha.', '2021-08-02', 5, 1),
(7, 3, 1, 'I would like to thank Bill for his hard work, to raise my limits and keep challenging me.\r\nWell done, Thusi.', '2021-08-31', 5, 1),
(8, 4, 2, 'One month ago I started exercising with Isuru as my trainer.\r\nNot having exercised for a long time I was apprehensive but when I met and got to know Isuru. I knew that he was the perfect coach for me.\r\nHe is professional yet kind, patient and understanding.\r\nHis encouragement has given me the confidence that I needed to start this program.\r\nAfter one short month I am pleased with my progress and feel assured that with her continued training and encouragement I would continue getting good results and attain my goal.', '2021-08-23', 5, 1),
(9, 5, 6, 'I am enjoying my sessions very much, my balance is slowly improving. Last Monday, we did exercises in the pool, that I enjoyed very much. Nipuni is very nice and easy to work with.', '2021-07-08', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `trainer_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualifications` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `rate` int(5) NOT NULL,
  `assigned_members` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `joined_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`trainer_id`, `f_name`, `l_name`, `address`, `phone_no`, `dob`, `gender`, `qualifications`, `about`, `rate`, `assigned_members`, `username`, `image`, `joined_date`) VALUES
(1, 'Thusitha', 'Kakulawala', 'No.118, Walwwaththa, Mirigama', 785619959, '1990-03-07', 'male', 'NCSF-Accredited personal trainer , \r\n\r\nAdditional expertise in youth athletic conditioning, with focuses on strength training , \r\n\r\nStrong interpersonal communication skills , \r\n\r\nExcellent leadership skills\r\n', '10+ years of experience as a Personal Trainer. I am enthusiastic about instructing groups and individuals on exercise activities and the fundamentals of sports by demonstrating proper techniques and methods of participation. I enjoy teaching group fitness classes to people of all ages and encouraging safe use of exercise equipment to promote individual fitness goals.', 5000, 5, 'thusitha', 'thusitha.jpg', '2018-09-23 10:32:33'),
(2, 'Isuru', 'Fonseka', 'No. 44, Mirigama', 785619959, '1995-03-13', 'male', '2004-2005 ACE Certified Group Fitness , Instructor 2000-2004 Manhattan College, B.S. in Nutrition and Food Science NY,\r\nExcellent Teaching Skills ,\r\nKnowledge of Nutrition and Food Science', '5+ years of experience as a Personal Trainer. I have a diverse history in customer service ranging all the way from retail to personal training. My capabilities to build strong interpersonal relationships with various clients makes me an ideal candidate in the workforce. My biggest motivator is my passion for helping others and I believe strongly that small acts of kindness can make a big difference.', 4500, 2, 'isuru', 'isuru.jpg', '2019-09-23 12:32:33'),
(3, 'Dinuka', 'Perera', 'No. 1/12, Giriulla', 785619959, '2021-08-17', 'male', 'CrossFit L2 Head Coach, Programmer & Co-Owner , \r\n\r\nNCCA Accredited Programs: Certified Personal\r\nTrainer (CPT) , \r\n\r\nPatience , \r\n\r\nAbility to measure training effects over time , \r\n\r\nAbility to monitor progress toward goals\r\nand adapt/adjust program\r\n', '7+ years of experience as a Personal Trainer. Looking to obtain a lifelong career with a major Directional drilling company. I look forward to becoming a great career employee, as well as a team leader. Promoting the benefits of a good team, hard work, and working in a safe environment.', 7500, 2, 'dinuka', 'dinuka.jpg', '2019-09-23 12:32:33'),
(4, 'Hasitha', 'Raymond', 'No. 112, Pasyala ,Mirigama', 785619959, '1995-04-24', 'male', 'NCCA Accredited Programs: Certified Personal\r\nTrainer (CPT) , \r\n\r\nPassion and determination , \r\n\r\nKnowledge of the industry , \r\n\r\nFriendly personality , \r\n\r\nOpen minded\r\n', 'Articulate Personal Trainer with 10+ years of experience and Spin certified driven to succeed. Strategic planning and client relationship expert. Seeking to obtain a challenging and rewarding position utilizing my talents and abilities.', 6000, 2, 'hasitha', 'hasitha.jpg', '2020-09-23 12:32:33'),
(5, 'Gia', 'Kodithuwakku', 'No.77, Vijayarajadahana, Mirigama', 785619959, '1995-03-07', 'female', 'NCSF-Accredited personal trainer , \r\n\r\nAdditional expertise in youth athletic conditioning, with focuses on strength training , \r\n\r\nStrong interpersonal communication skills', 'One year of experience as a Personal Trainer. Creative, resourceful and flexible, able to adapt to changing priorities and maintain a positive attitude and strong work ethic strong meeting planning and facilitation skills.', 5000, 5, 'gia', 'gia.jpg', '2020-09-23 12:32:33'),
(6, 'Nipuni', 'Perera', 'No.78, Mirigama', 785619959, '1993-08-01', 'female', '2004-2005 ACE Certified Group Fitness , Instructor 2000-2004 Manhattan College, B.S. in Nutrition and Food Science NY,\r\nExcellent Teaching Skills', '6 years of experience as a Personal Trainer. Dependable, determined and motivated to achieve. I am very much looking to secure a position within your company. I will be an asset in numerous ways with my strong communication skills, efficient learning capabilities and the strong goal to grow and succeed within the firm. I live with the personal objective to improve myself and to do the tasks or jobs that I encounter to the best of my ability.', 4500, 2, 'nipuni', 'nipuni.jpg', '2021-02-08 12:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_type` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`password`, `username`, `email`, `user_type`) VALUES
('1234', 'accountant', 'bkdeveloping@gmail.com', 'accountant'),
('$2y$10$ueeDenX/CCK2jI8IgyfHRuADBU2M2ElaqX8MT/PNynmsb0L/bjJCy', 'admin', 'kulasekarakmbs@gmail.com', 'admin'),
('1234', 'dinuka', 'dinuka@gmail.com', 'trainer'),
('1234', 'duminda', 'duminda@gmail.com', 'member'),
('1234', 'gia', 'gia@gmail.com', 'trainer'),
('1234', 'hasitha', 'hasitha@gmail.com', 'trainer'),
('1234', 'herath', 'herath@gmail.com', 'member'),
('1234', 'hiran', 'hiran@gmail.com', 'member'),
('1234', 'hiranya', 'hiranya@gmail.com', 'memebr'),
('1234', 'isuru', 'isuru@gmail.com', 'trainer'),
('1234', 'nipuni', 'nipuni@gmail.com', 'trainer'),
('1234', 'thusitha', 'thusitha@gmail.com', 'trainer'),
('1234', 'udaya', 'udaya@gmail.com', 'member'),
('1234', 'umashi', 'umashi@gmail.com', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountant`
--
ALTER TABLE `accountant`
  ADD PRIMARY KEY (`accountant_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `trainer_id` (`trainer_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`membership_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `membership_id` (`member_id`),
  ADD KEY `payment_ibfk_2` (`trainer_id`);

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetId`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `trainer_id` (`trainer_id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainer_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountant`
--
ALTER TABLE `accountant`
  MODIFY `accountant_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `membership_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `trainer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accountant`
--
ALTER TABLE `accountant`
  ADD CONSTRAINT `accountant_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`trainer_id`) REFERENCES `trainer` (`trainer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `membership`
--
ALTER TABLE `membership`
  ADD CONSTRAINT `membership_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`trainer_id`) REFERENCES `trainer` (`trainer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`trainer_id`) REFERENCES `trainer` (`trainer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trainer`
--
ALTER TABLE `trainer`
  ADD CONSTRAINT `trainer_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
