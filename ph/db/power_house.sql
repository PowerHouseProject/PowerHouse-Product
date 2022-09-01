-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 04:27 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

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
-- Table structure for table `1m_package_progress`
--

CREATE TABLE `1m_package_progress` (
  `package_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `attendance` varchar(255) NOT NULL DEFAULT '[[null,null,null,null,null]]',
  `bmi_values` varchar(255) NOT NULL DEFAULT '[null,null,null,null]',
  `bf_values` varchar(255) NOT NULL DEFAULT '[null,null,null,null]'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `1m_package_progress`
--

INSERT INTO `1m_package_progress` (`package_id`, `member_id`, `attendance`, `bmi_values`, `bf_values`) VALUES
(1, 49, '[[null,null,null,null,null]]', '[null,null,null,null]', '[null,null,null,null]'),
(2, 1, '[[null,null,null,null,null]]', '[null,null,null,null]', '[null,null,null,null]'),
(3, 5, '[[null,null,null,null,null]]', '[null,null,null,null]', '[null,null,null,null]'),
(4, 6, '[[null,null,null,null,null]]', '[null,null,null,null]', '[null,null,null,null]');

-- --------------------------------------------------------

--
-- Table structure for table `3m_package_progress`
--

CREATE TABLE `3m_package_progress` (
  `package_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `attendance` varchar(255) NOT NULL DEFAULT '[[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null]]',
  `bmi_values` varchar(255) NOT NULL DEFAULT '[null,null,null,null,null,null]',
  `bf_values` varchar(255) NOT NULL DEFAULT '[null,null,null,null,null,null]'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `3m_package_progress`
--

INSERT INTO `3m_package_progress` (`package_id`, `member_id`, `attendance`, `bmi_values`, `bf_values`) VALUES
(1, 48, '[[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null]]', '[null,null,null,null,null,null,null,null,null,null,null,null]', '[null,null,null,null,null,null,null,null,null,null,null,null]'),
(2, 3, '[[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null]]', '[null,null,null,null,null,null]', '[null,null,null,null,null,null]');

-- --------------------------------------------------------

--
-- Table structure for table `6m_package_progress`
--

CREATE TABLE `6m_package_progress` (
  `package_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `attendance` varchar(800) NOT NULL DEFAULT '[[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null]]',
  `bmi_values` varchar(255) NOT NULL DEFAULT '[null,null,null,null,null,null]',
  `bf_values` varchar(255) NOT NULL DEFAULT '[null,null,null,null,null,null]'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `6m_package_progress`
--

INSERT INTO `6m_package_progress` (`package_id`, `member_id`, `attendance`, `bmi_values`, `bf_values`) VALUES
(1, 2, '[[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null]]', '[25,24.4,24.3,null,null,null]', '[null,null,null,null,null,null]'),
(2, 55, '[[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null]]', '[null,null,null,null,null,null]', '[null,null,null,null,null,null]');

-- --------------------------------------------------------

--
-- Table structure for table `12m_package_progress`
--

CREATE TABLE `12m_package_progress` (
  `package_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `attendance` varchar(800) NOT NULL DEFAULT '[[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null]]',
  `bmi_values` varchar(255) NOT NULL DEFAULT '[null,null,null,null,null,null,null,null,null,null,null,null]',
  `bf_values` varchar(255) NOT NULL DEFAULT '[null,null,null,null,null,null,null,null,null,null,null,null]'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `12m_package_progress`
--

INSERT INTO `12m_package_progress` (`package_id`, `member_id`, `attendance`, `bmi_values`, `bf_values`) VALUES
(1, 36, '[[100,100,100,100,100],[60,60,60,60,60],[null,null,null,null,null],[null,null,null,null,null],[66.66666666666667,66.66666666666667,null,null,null],[null,null,null,null,null],[66.66666666666667,66.66666666666667,null,null,null],[66.66666666666667,66.66666666666667,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null]]', '[\"30\",\"29\",\"26\",\"27\",\"24\",\"25\",\"26\"]', '[\"20\",\"21\",\"18\",\"19\",\"18\",\"17\",\"17.5\"]'),
(2, 12, '[[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null]]', '[null,null,null,null,null,null,null,null,null,null,null,null]', '[null,null,null,null,null,null,null,null,null,null,null,null]'),
(3, 52, '[[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null]]', '[null,null,null,null,null,null,null,null,null,null,null,null]', '[null,null,null,null,null,null,null,null,null,null,null,null]'),
(4, 53, '[[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null]]', '[null,null,null,null,null,null,null,null,null,null,null,null]', '[null,null,null,null,null,null,null,null,null,null,null,null]'),
(5, 1, '[[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null]]', '[null,null,null,null,null,null,null,null,null,null,null,null]', '[null,null,null,null,null,null,null,null,null,null,null,null]'),
(6, 54, '[[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null]]', '[null,null,null,null,null,null,null,null,null,null,null,null]', '[null,null,null,null,null,null,null,null,null,null,null,null]'),
(7, 58, '[[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null]]', '[null,null,null,null,null,null,null,null,null,null,null,null]', '[null,null,null,null,null,null,null,null,null,null,null,null]'),
(8, 60, '[[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null]]', '[null,null,null,null,null,null,null,null,null,null,null,null]', '[null,null,null,null,null,null,null,null,null,null,null,null]'),
(9, 61, '[[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null]]', '[null,null,null,null,null,null,null,null,null,null,null,null]', '[null,null,null,null,null,null,null,null,null,null,null,null]'),
(11, 63, '[[33.333333333333336,null,null,100,null],[25,null,null,100,100],[33.333333333333336,33.333333333333336,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null],[null,null,null,null,null]]', '[\"68.03\",\"22.33\"]', '[\"56\",\"36\"]');

-- --------------------------------------------------------

--
-- Table structure for table `accountant`
--

CREATE TABLE `accountant` (
  `accountant_id` int(4) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` text NOT NULL DEFAULT 'default.jpg',
  `cover_image` text NOT NULL DEFAULT 'default_cover.jpg',
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `date_joined` date NOT NULL DEFAULT current_timestamp(),
  `gender` varchar(10) NOT NULL,
  `address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accountant`
--

INSERT INTO `accountant` (`accountant_id`, `username`, `image`, `cover_image`, `f_name`, `l_name`, `phone_no`, `date_joined`, `gender`, `address`) VALUES
(1, 'accountant1', 'default.jpg', 'default_cover.jpg', 'Sethmi ', 'Botheju', '0785619958', '2022-03-21', 'male', 'No. 118, MirigamaA');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `admin_id` int(5) NOT NULL,
  `image` text NOT NULL DEFAULT 'default.jpg',
  `cover_image` text NOT NULL DEFAULT 'default_cover.jpg',
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `joined_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `admin_id`, `image`, `cover_image`, `f_name`, `l_name`, `address`, `phone_no`, `gender`, `joined_date`) VALUES
('admin', 0, 'thusitha.jpg', 'default_cover.jpg', 'Thusithaaa', 'Herath', 'No', '0785617787', 'male', '2022-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignment_id` int(11) NOT NULL,
  `member_id` int(4) NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `member_id`, `trainer_id`, `start_date`, `end_date`) VALUES
(1, 1, 1, '2022-03-20', '2022-04-20'),
(5, 47, 2, '2022-03-25', '2022-04-24'),
(6, 48, 2, '2022-03-25', '2022-04-24'),
(7, 49, 6, '2022-03-26', '2022-04-25'),
(8, 4, 1, '2022-03-26', '2022-04-25'),
(9, 36, 2, '2022-06-09', '2022-07-09'),
(10, 2, 1, '2022-03-01', '2022-03-30'),
(11, 5, 1, '2022-03-01', '2022-03-30'),
(12, 2, 1, '2022-03-01', '2022-03-30'),
(13, 54, 6, '2022-03-28', '2022-04-27'),
(14, 55, 4, '2022-03-28', '2022-04-27'),
(15, 55, 4, '2022-03-28', '2022-04-27'),
(16, 58, 3, '2022-03-28', '2022-04-27'),
(17, 60, 4, '2022-03-28', '2022-04-27'),
(18, 61, 3, '2022-03-28', '2022-04-27'),
(19, 61, 3, '2022-03-28', '2022-04-27'),
(20, 63, 6, '2022-03-28', '2022-04-27'),
(21, 63, 6, '2022-03-28', '2022-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `time_id` int(11) NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_slot` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`time_id`, `trainer_id`, `date`, `time_slot`) VALUES
(14, 5, '2022-03-27', 'All day'),
(18, 1, '2022-03-29', 'Morning'),
(19, 1, '2022-03-28', 'All day'),
(20, 1, '2022-03-30', 'All day'),
(21, 1, '2022-03-31', 'Evening'),
(22, 2, '2022-06-28', 'All day'),
(27, 2, '2022-06-26', 'Morning');

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

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `trainer_id`, `member_id`, `date`, `time`) VALUES
(45, 1, 1, '2022-03-29', '06:00:00'),
(46, 1, 1, '2022-03-28', '20:00:00'),
(47, 1, 1, '2022-04-01', '14:00:00'),
(48, 1, 2, '2022-03-28', '08:00:00'),
(49, 1, 2, '2022-03-31', '18:00:00'),
(53, 2, 36, '2022-06-26', '12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `spec_id` int(10) NOT NULL,
  `muscle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`spec_id`, `muscle`) VALUES
(2, 'bulking'),
(1, 'cardio'),
(3, 'weight_loss');

-- --------------------------------------------------------

--
-- Table structure for table `close_times`
--

CREATE TABLE `close_times` (
  `close_time_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `time_slot` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `close_times`
--

INSERT INTO `close_times` (`close_time_id`, `date`, `time_slot`) VALUES
(14, '2022-06-29', 'Evening'),
(16, '2022-07-27', 'Full'),
(17, '2022-06-26', 'Evening'),
(18, '2022-06-28', 'Full');

-- --------------------------------------------------------

--
-- Table structure for table `extend_membership`
--

CREATE TABLE `extend_membership` (
  `extdpk_id` int(11) NOT NULL,
  `member_id` int(10) NOT NULL,
  `membership_type` int(10) NOT NULL,
  `activated_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `extend_membership`
--

INSERT INTO `extend_membership` (`extdpk_id`, `member_id`, `membership_type`, `activated_date`) VALUES
(1, 48, 3, '2022-03-27 03:37:45');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventory_id`, `name`, `image`, `quantity`) VALUES
(3, 'Dumbbell (12.5kg)', 'dumbbell.png', 25),
(4, 'Dumbbell (15kg)', 'dumbbell.png', 11),
(5, 'Dumbbell (20kg)', 'dumbbell.png', 6),
(6, 'Dumbbell (30kg)', 'dumbbell.png', 8),
(7, 'Steel Barbell', 'barbell.png', 27),
(8, 'Bench', 'bench.png', 11),
(9, 'Dumbbell Rack', 'dumbbell-rack.png', 4),
(10, 'Treadmill', 'treadmill.png', 7),
(11, 'Triceps Rope', 'rope.png', 4),
(12, 'Running Machine', 'running-machine.png', 8),
(13, 'Pull Down Machine', 'pull-down.png', 4),
(14, 'Chest Machine ', 'chest-machine.png', 2),
(15, 'Gym Mat', 'mats.png', 7),
(16, 'Weight Plate (5KG)', 'plate.png', 12),
(17, 'Weight Plate (7.5KG)', 'plate.png', 12),
(18, 'Weight Plate (10KG)', 'plate.png', 13),
(19, 'Weight Plate (12.5KG)', 'plate.png', 10),
(20, 'Weight Plate (12.5KG)', 'plate.png', 10),
(21, 'Weight Plate (15KG)', 'plate.png', 12),
(22, 'Weight Plate (20KG)', 'plate.png', 6),
(23, 'Weight Plate (35KG)', 'plate.png', 4),
(30, 'Dumbbell (5kg)', 'dumbbell.png', 10),
(31, 'Dumbbell (10kg)', 'dumbbell.png', 23);

-- --------------------------------------------------------

--
-- Table structure for table `meal_plan`
--

CREATE TABLE `meal_plan` (
  `mp_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `trainer_id` int(11) NOT NULL DEFAULT 0,
  `monday_bkft` varchar(255) DEFAULT 'Scrambled eggs with mushrooms and oatmeal',
  `tuseday_bkft` varchar(255) DEFAULT 'Protein pancakes with light-syrup, peanut butter and raspberries.',
  `wednesday_bkft` varchar(255) DEFAULT 'Chicken sausage with egg and roasted potatoes.',
  `thursday_bkft` varchar(255) DEFAULT 'Ground turkey, egg, cheese and salsa in a whole-grain tortilla.',
  `friday_bkft` varchar(255) DEFAULT 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.',
  `saturday_bkft` varchar(255) DEFAULT 'Ground turkey and egg with corn, bell peppers, cheese and salsa.',
  `sunday_bkft` varchar(255) DEFAULT 'Eggs sunny-side up and avocado toast Low-fat cottage cheese with blueberries',
  `monday_msnk` varchar(255) DEFAULT 'Hard-boiled eggs and an apple.',
  `tuseday_msnk` varchar(255) DEFAULT 'Greek yogurt and almonds.',
  `wednesday_msnk` varchar(255) DEFAULT 'Yogurt with granola.',
  `thursday_msnk` varchar(255) DEFAULT 'Jerky and mixed nuts.',
  `friday_msnk` varchar(255) DEFAULT 'Can of tuna with crackers.',
  `saturday_msnk` varchar(255) DEFAULT 'Protein balls and almond butter.',
  `sunday_msnk` varchar(255) DEFAULT 'Venison burger, white rice and broccoli.',
  `monday_lunch` varchar(255) DEFAULT 'Sirloin steak, sweet potato and spinach salad with vinaigrette.',
  `tuseday_lunch` varchar(255) DEFAULT 'Turkey breast, basmati rice and mushrooms.',
  `wednesday_lunch` varchar(255) DEFAULT 'Chicken breast, baked potato, sour cream and broccoli.',
  `thursday_lunch` varchar(255) DEFAULT 'Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.',
  `friday_lunch` varchar(255) DEFAULT 'Tilapia fillet, potato wedges and bell peppers.',
  `saturday_lunch` varchar(255) DEFAULT 'Pork tenderloin slices with roasted garlic potatoes and green beans.',
  `sunday_lunch` varchar(255) DEFAULT 'Chicken breast, baked potato, sour cream and broccoli.',
  `monday_esnk` varchar(255) DEFAULT 'Protein shake and a banana.',
  `tuseday_esnk` varchar(255) DEFAULT 'Protein shake and walnuts.',
  `wednesday_esnk` varchar(255) DEFAULT 'Protein shake and grapes.',
  `thursday_esnk` varchar(255) DEFAULT 'Protein shake and mixed berries.',
  `friday_esnk` varchar(255) DEFAULT 'Protein shake and watermelon.',
  `saturday_esnk` varchar(255) DEFAULT 'Protein shake and pear.',
  `sunday_esnk` varchar(255) DEFAULT 'Protein shake and strawberries.',
  `monday_din` varchar(255) DEFAULT 'Salmon, quinoa and asparagus.',
  `tuseday_din` varchar(255) DEFAULT 'Ground turkey and marinara sauce over pasta.',
  `wednesday_din` varchar(255) DEFAULT 'Mackerel, brown rice and salad leaves with vinaigrette.',
  `thursday_din` varchar(255) DEFAULT 'Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.',
  `friday_din` varchar(255) DEFAULT 'Ground beef with corn, brown rice, green peas and green beans.',
  `saturday_din` varchar(255) DEFAULT 'Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.',
  `sunday_din` varchar(255) DEFAULT 'Turkey meatballs, marinara sauce and parmesan cheese over pasta.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meal_plan`
--

INSERT INTO `meal_plan` (`mp_id`, `member_id`, `trainer_id`, `monday_bkft`, `tuseday_bkft`, `wednesday_bkft`, `thursday_bkft`, `friday_bkft`, `saturday_bkft`, `sunday_bkft`, `monday_msnk`, `tuseday_msnk`, `wednesday_msnk`, `thursday_msnk`, `friday_msnk`, `saturday_msnk`, `sunday_msnk`, `monday_lunch`, `tuseday_lunch`, `wednesday_lunch`, `thursday_lunch`, `friday_lunch`, `saturday_lunch`, `sunday_lunch`, `monday_esnk`, `tuseday_esnk`, `wednesday_esnk`, `thursday_esnk`, `friday_esnk`, `saturday_esnk`, `sunday_esnk`, `monday_din`, `tuseday_din`, `wednesday_din`, `thursday_din`, `friday_din`, `saturday_din`, `sunday_din`) VALUES
(1, 36, 1, 'Scrambled eggs with mushrooms and oatmeal   ', 'Protein pancakes with light-syrup, peanut butter and raspberries.                ', 'Chicken sausage with egg and roasted potatoes.                ', 'Ground turkey, egg, cheese and salsa in a whole-grain tortilla.                ', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.                ', 'Ground turkey and egg with corn, bell peppers, cheese and salsa.                ', 'Eggs sunny-side up and avocado toast                ', 'Low-fat cottage cheese with blueberries', 'Hard-boiled eggs and an apple.', 'Greek yogurt and almonds.', 'Yogurt with granola.', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.               ', 'Can of tuna with crackers.', 'Protein balls and almond butter.', 'Sirloin steak, sweet potato and spinach salad with vinaigrette.', 'Turkey breast, basmati rice and mushrooms.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.', 'Tilapia fillet, potato wedges and bell peppers.', 'Pork tenderloin slices with roasted garlic potatoes and green beans.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Protein shake and a banana.', 'Protein shake and walnuts.', 'Protein shake and grapes.', 'Protein shake and mixed berries.', 'Protein shake and watermelon.', 'Protein shake and pear.', 'Protein shake and strawberries.', 'Salmon, quinoa and asparagus.', 'Ground turkey and marinara sauce over pasta.', 'Mackerel, brown rice and salad leaves with vinaigrette.', 'Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.', 'Ground beef with corn, brown rice, green peas and green beans.', 'Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.', 'Turkey meatballs, marinara sauce and parmesan cheese over pasta.'),
(7, 48, 2, 'Scrambled eggs with mushrooms and oatmeal', 'Protein pancakes with light-syrup, peanut butter and raspberries.', 'Chicken sausage with egg and roasted potatoes.', 'Ground turkey, egg, cheese and salsa in a whole-grain tortilla.', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.', 'Ground turkey and egg with corn, bell peppers, cheese and salsa.', 'Eggs sunny-side up and avocado toast Low-fat cottage cheese with blueberries', 'Hard-boiled eggs and an apple.', 'Greek yogurt and almonds.', 'Yogurt with granola.', 'Jerky and mixed nuts.', 'Can of tuna with crackers.', 'Protein balls and almond butter.', 'Venison burger, white rice and broccoli.', 'Sirloin steak, sweet potato and spinach salad with vinaigrette.', 'Turkey breast, basmati rice and mushrooms.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.', 'Tilapia fillet, potato wedges and bell peppers.', 'Pork tenderloin slices with roasted garlic potatoes and green beans.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Protein shake and a banana.', 'Protein shake and walnuts.', 'Protein shake and grapes.', 'Protein shake and mixed berries.', 'Protein shake and watermelon.', 'Protein shake and pear.', 'Protein shake and strawberries.', 'Salmon, quinoa and asparagus.', 'Ground turkey and marinara sauce over pasta.', 'Mackerel, brown rice and salad leaves with vinaigrette.', 'Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.', 'Ground beef with corn, brown rice, green peas and green beans.', 'Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.', 'Turkey meatballs, marinara sauce and parmesan cheese over pasta.'),
(8, 49, 6, 'Scrambled eggs with mushrooms and oatmeal ', 'Protein pancakes with light-syrup, peanut butter and raspberries. ', 'Chicken sausage with egg and roasted potatoes. ', 'Ground turkey, egg, cheese and salsa in a whole-grain tortilla. ', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats. ', 'Ground turkey and egg with corn, bell peppers, cheese and salsa. ', 'Eggs sunny-side up and avocado toast Low-fat cottage cheese with blueberries ', 'Hard-boiled eggs and an apple.', 'Greek yogurt and almonds.', 'Yogurt with granola.', 'Jerky and mixed nuuts.', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.', 'Protein balls and almond butter.', 'Venison burger, white rice and broccoli.', 'Sirloin steak, sweet potato and spinach salad with vinaigrette.', 'Turkey breast, basmati rice and mushrooms.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.', 'Tilapia fillet, potato wedges and bell peppers.', 'Pork tenderloin slices with roasted garlic potatoes and green beans.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Protein shake and a banana.', 'Protein shake and walnuts.', 'Protein shake and grapes.', 'Protein shake and mixed berries.', 'Protein shake and watermelon.', 'Protein shake and pear.', 'Protein shake and strawberries.', 'Salmon, quinoa and asparagus.', 'Ground turkey and marinara sauce over pasta.', 'Mackerel, brown rice and salad leaves with vinaigrette.', 'Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.', 'Ground beef with corn, brown rice, green peas and green beans.', 'Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.', 'Turkey meatballs, marinara sauce and parmesan cheese over pasta.'),
(9, 1, 0, 'Scrambled eggs with mushrooms and oatmeal', 'Protein pancakes with light-syrup, peanut butter and raspberries.', 'Chicken sausage with egg and roasted potatoes.', 'Ground turkey, egg, cheese and salsa in a whole-grain tortilla.', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.', 'Ground turkey and egg with corn, bell peppers, cheese and salsa.', 'Eggs sunny-side up and avocado toast Low-fat cottage cheese with blueberries', 'Hard-boiled eggs and an apple.', 'Greek yogurt and almonds.', 'Yogurt with granola.', 'Jerky and mixed nuts.', 'Can of tuna with crackers.', 'Protein balls and almond butter.', 'Venison burger, white rice and broccoli.', 'Sirloin steak, sweet potato and spinach salad with vinaigrette.', 'Turkey breast, basmati rice and mushrooms.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.', 'Tilapia fillet, potato wedges and bell peppers.', 'Pork tenderloin slices with roasted garlic potatoes and green beans.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Protein shake and a banana.', 'Protein shake and walnuts.', 'Protein shake and grapes.', 'Protein shake and mixed berries.', 'Protein shake and watermelon.', 'Protein shake and pear.', 'Protein shake and strawberries.', 'Salmon, quinoa and asparagus.', 'Ground turkey and marinara sauce over pasta.', 'Mackerel, brown rice and salad leaves with vinaigrette.', 'Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.', 'Ground beef with corn, brown rice, green peas and green beans.', 'Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.', 'Turkey meatballs, marinara sauce and parmesan cheese over pasta.'),
(10, 2, 0, 'Scrambled eggs with mushrooms and oatmeal', 'Protein pancakes with light-syrup, peanut butter and raspberries.', 'Chicken sausage with egg and roasted potatoes.', 'Ground turkey, egg, cheese and salsa in a whole-grain tortilla.', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.', 'Ground turkey and egg with corn, bell peppers, cheese and salsa.', 'Eggs sunny-side up and avocado toast Low-fat cottage cheese with blueberries', 'Hard-boiled eggs and an apple.', 'Greek yogurt and almonds.', 'Yogurt with granola.', 'Jerky and mixed nuts.', 'Can of tuna with crackers.', 'Protein balls and almond butter.', 'Venison burger, white rice and broccoli.', 'Sirloin steak, sweet potato and spinach salad with vinaigrette.', 'Turkey breast, basmati rice and mushrooms.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.', 'Tilapia fillet, potato wedges and bell peppers.', 'Pork tenderloin slices with roasted garlic potatoes and green beans.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Protein shake and a banana.', 'Protein shake and walnuts.', 'Protein shake and grapes.', 'Protein shake and mixed berries.', 'Protein shake and watermelon.', 'Protein shake and pear.', 'Protein shake and strawberries.', 'Salmon, quinoa and asparagus.', 'Ground turkey and marinara sauce over pasta.', 'Mackerel, brown rice and salad leaves with vinaigrette.', 'Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.', 'Ground beef with corn, brown rice, green peas and green beans.', 'Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.', 'Turkey meatballs, marinara sauce and parmesan cheese over pasta.'),
(11, 3, 0, 'Scrambled eggs with mushrooms and oatmeal', 'Protein pancakes with light-syrup, peanut butter and raspberries.', 'Chicken sausage with egg and roasted potatoes.', 'Ground turkey, egg, cheese and salsa in a whole-grain tortilla.', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.', 'Ground turkey and egg with corn, bell peppers, cheese and salsa.', 'Eggs sunny-side up and avocado toast Low-fat cottage cheese with blueberries', 'Hard-boiled eggs and an apple.', 'Greek yogurt and almonds.', 'Yogurt with granola.', 'Jerky and mixed nuts.', 'Can of tuna with crackers.', 'Protein balls and almond butter.', 'Venison burger, white rice and broccoli.', 'Sirloin steak, sweet potato and spinach salad with vinaigrette.', 'Turkey breast, basmati rice and mushrooms.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.', 'Tilapia fillet, potato wedges and bell peppers.', 'Pork tenderloin slices with roasted garlic potatoes and green beans.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Protein shake and a banana.', 'Protein shake and walnuts.', 'Protein shake and grapes.', 'Protein shake and mixed berries.', 'Protein shake and watermelon.', 'Protein shake and pear.', 'Protein shake and strawberries.', 'Salmon, quinoa and asparagus.', 'Ground turkey and marinara sauce over pasta.', 'Mackerel, brown rice and salad leaves with vinaigrette.', 'Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.', 'Ground beef with corn, brown rice, green peas and green beans.', 'Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.', 'Turkey meatballs, marinara sauce and parmesan cheese over pasta.'),
(12, 4, 0, 'Scrambled eggs with mushrooms and oatmeal', 'Protein pancakes with light-syrup, peanut butter and raspberries.', 'Chicken sausage with egg and roasted potatoes.', 'Ground turkey, egg, cheese and salsa in a whole-grain tortilla.', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.', 'Ground turkey and egg with corn, bell peppers, cheese and salsa.', 'Eggs sunny-side up and avocado toast Low-fat cottage cheese with blueberries', 'Hard-boiled eggs and an apple.', 'Greek yogurt and almonds.', 'Yogurt with granola.', 'Jerky and mixed nuts.', 'Can of tuna with crackers.', 'Protein balls and almond butter.', 'Venison burger, white rice and broccoli.', 'Sirloin steak, sweet potato and spinach salad with vinaigrette.', 'Turkey breast, basmati rice and mushrooms.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.', 'Tilapia fillet, potato wedges and bell peppers.', 'Pork tenderloin slices with roasted garlic potatoes and green beans.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Protein shake and a banana.', 'Protein shake and walnuts.', 'Protein shake and grapes.', 'Protein shake and mixed berries.', 'Protein shake and watermelon.', 'Protein shake and pear.', 'Protein shake and strawberries.', 'Salmon, quinoa and asparagus.', 'Ground turkey and marinara sauce over pasta.', 'Mackerel, brown rice and salad leaves with vinaigrette.', 'Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.', 'Ground beef with corn, brown rice, green peas and green beans.', 'Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.', 'Turkey meatballs, marinara sauce and parmesan cheese over pasta.'),
(13, 5, 0, 'Scrambled eggs with mushrooms and oatmeal', 'Protein pancakes with light-syrup, peanut butter and raspberries.', 'Chicken sausage with egg and roasted potatoes.', 'Ground turkey, egg, cheese and salsa in a whole-grain tortilla.', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.', 'Ground turkey and egg with corn, bell peppers, cheese and salsa.', 'Eggs sunny-side up and avocado toast Low-fat cottage cheese with blueberries', 'Hard-boiled eggs and an apple.', 'Greek yogurt and almonds.', 'Yogurt with granola.', 'Jerky and mixed nuts.', 'Can of tuna with crackers.', 'Protein balls and almond butter.', 'Venison burger, white rice and broccoli.', 'Sirloin steak, sweet potato and spinach salad with vinaigrette.', 'Turkey breast, basmati rice and mushrooms.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.', 'Tilapia fillet, potato wedges and bell peppers.', 'Pork tenderloin slices with roasted garlic potatoes and green beans.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Protein shake and a banana.', 'Protein shake and walnuts.', 'Protein shake and grapes.', 'Protein shake and mixed berries.', 'Protein shake and watermelon.', 'Protein shake and pear.', 'Protein shake and strawberries.', 'Salmon, quinoa and asparagus.', 'Ground turkey and marinara sauce over pasta.', 'Mackerel, brown rice and salad leaves with vinaigrette.', 'Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.', 'Ground beef with corn, brown rice, green peas and green beans.', 'Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.', 'Turkey meatballs, marinara sauce and parmesan cheese over pasta.'),
(14, 6, 0, 'Scrambled eggs with mushrooms and oatmeal', 'Protein pancakes with light-syrup, peanut butter and raspberries.', 'Chicken sausage with egg and roasted potatoes.', 'Ground turkey, egg, cheese and salsa in a whole-grain tortilla.', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.', 'Ground turkey and egg with corn, bell peppers, cheese and salsa.', 'Eggs sunny-side up and avocado toast Low-fat cottage cheese with blueberries', 'Hard-boiled eggs and an apple.', 'Greek yogurt and almonds.', 'Yogurt with granola.', 'Jerky and mixed nuts.', 'Can of tuna with crackers.', 'Protein balls and almond butter.', 'Venison burger, white rice and broccoli.', 'Sirloin steak, sweet potato and spinach salad with vinaigrette.', 'Turkey breast, basmati rice and mushrooms.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.', 'Tilapia fillet, potato wedges and bell peppers.', 'Pork tenderloin slices with roasted garlic potatoes and green beans.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Protein shake and a banana.', 'Protein shake and walnuts.', 'Protein shake and grapes.', 'Protein shake and mixed berries.', 'Protein shake and watermelon.', 'Protein shake and pear.', 'Protein shake and strawberries.', 'Salmon, quinoa and asparagus.', 'Ground turkey and marinara sauce over pasta.', 'Mackerel, brown rice and salad leaves with vinaigrette.', 'Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.', 'Ground beef with corn, brown rice, green peas and green beans.', 'Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.', 'Turkey meatballs, marinara sauce and parmesan cheese over pasta.'),
(15, 52, 0, 'Scrambled eggs with mushrooms and oatmeal', 'Protein pancakes with light-syrup, peanut butter and raspberries.', 'Chicken sausage with egg and roasted potatoes.', 'Ground turkey, egg, cheese and salsa in a whole-grain tortilla.', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.', 'Ground turkey and egg with corn, bell peppers, cheese and salsa.', 'Eggs sunny-side up and avocado toast Low-fat cottage cheese with blueberries', 'Hard-boiled eggs and an apple.', 'Greek yogurt and almonds.', 'Yogurt with granola.', 'Jerky and mixed nuts.', 'Can of tuna with crackers.', 'Protein balls and almond butter.', 'Venison burger, white rice and broccoli.', 'Sirloin steak, sweet potato and spinach salad with vinaigrette.', 'Turkey breast, basmati rice and mushrooms.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.', 'Tilapia fillet, potato wedges and bell peppers.', 'Pork tenderloin slices with roasted garlic potatoes and green beans.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Protein shake and a banana.', 'Protein shake and walnuts.', 'Protein shake and grapes.', 'Protein shake and mixed berries.', 'Protein shake and watermelon.', 'Protein shake and pear.', 'Protein shake and strawberries.', 'Salmon, quinoa and asparagus.', 'Ground turkey and marinara sauce over pasta.', 'Mackerel, brown rice and salad leaves with vinaigrette.', 'Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.', 'Ground beef with corn, brown rice, green peas and green beans.', 'Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.', 'Turkey meatballs, marinara sauce and parmesan cheese over pasta.'),
(16, 53, 0, 'Scrambled eggs with mushrooms and oatmeal', 'Protein pancakes with light-syrup, peanut butter and raspberries.', 'Chicken sausage with egg and roasted potatoes.', 'Ground turkey, egg, cheese and salsa in a whole-grain tortilla.', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.', 'Ground turkey and egg with corn, bell peppers, cheese and salsa.', 'Eggs sunny-side up and avocado toast Low-fat cottage cheese with blueberries', 'Hard-boiled eggs and an apple.', 'Greek yogurt and almonds.', 'Yogurt with granola.', 'Jerky and mixed nuts.', 'Can of tuna with crackers.', 'Protein balls and almond butter.', 'Venison burger, white rice and broccoli.', 'Sirloin steak, sweet potato and spinach salad with vinaigrette.', 'Turkey breast, basmati rice and mushrooms.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.', 'Tilapia fillet, potato wedges and bell peppers.', 'Pork tenderloin slices with roasted garlic potatoes and green beans.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Protein shake and a banana.', 'Protein shake and walnuts.', 'Protein shake and grapes.', 'Protein shake and mixed berries.', 'Protein shake and watermelon.', 'Protein shake and pear.', 'Protein shake and strawberries.', 'Salmon, quinoa and asparagus.', 'Ground turkey and marinara sauce over pasta.', 'Mackerel, brown rice and salad leaves with vinaigrette.', 'Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.', 'Ground beef with corn, brown rice, green peas and green beans.', 'Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.', 'Turkey meatballs, marinara sauce and parmesan cheese over pasta.'),
(17, 54, 6, 'Scrambled eggs with mushrooms and oatmeal', 'Protein pancakes with light-syrup, peanut butter and raspberries.', 'Chicken sausage with egg and roasted potatoes.', 'Ground turkey, egg, cheese and salsa in a whole-grain tortilla.', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.', 'Ground turkey and egg with corn, bell peppers, cheese and salsa.', 'Eggs sunny-side up and avocado toast Low-fat cottage cheese with blueberries', 'Hard-boiled eggs and an apple.', 'Greek yogurt and almonds.', 'Yogurt with granola.', 'Jerky and mixed nuts.', 'Can of tuna with crackers.', 'Protein balls and almond butter.', 'Venison burger, white rice and broccoli.', 'Sirloin steak, sweet potato and spinach salad with vinaigrette.', 'Turkey breast, basmati rice and mushrooms.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.', 'Tilapia fillet, potato wedges and bell peppers.', 'Pork tenderloin slices with roasted garlic potatoes and green beans.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Protein shake and a banana.', 'Protein shake and walnuts.', 'Protein shake and grapes.', 'Protein shake and mixed berries.', 'Protein shake and watermelon.', 'Protein shake and pear.', 'Protein shake and strawberries.', 'Salmon, quinoa and asparagus.', 'Ground turkey and marinara sauce over pasta.', 'Mackerel, brown rice and salad leaves with vinaigrette.', 'Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.', 'Ground beef with corn, brown rice, green peas and green beans.', 'Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.', 'Turkey meatballs, marinara sauce and parmesan cheese over pasta.'),
(18, 55, 4, 'Scrambled eggs with mushrooms and oatmeal', 'Protein pancakes with light-syrup, peanut butter and raspberries.', 'Chicken sausage with egg and roasted potatoes.', 'Ground turkey, egg, cheese and salsa in a whole-grain tortilla.', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.', 'Ground turkey and egg with corn, bell peppers, cheese and salsa.', 'Eggs sunny-side up and avocado toast Low-fat cottage cheese with blueberries', 'Hard-boiled eggs and an apple.', 'Greek yogurt and almonds.', 'Yogurt with granola.', 'Jerky and mixed nuts.', 'Can of tuna with crackers.', 'Protein balls and almond butter.', 'Venison burger, white rice and broccoli.', 'Sirloin steak, sweet potato and spinach salad with vinaigrette.', 'Turkey breast, basmati rice and mushrooms.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.', 'Tilapia fillet, potato wedges and bell peppers.', 'Pork tenderloin slices with roasted garlic potatoes and green beans.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Protein shake and a banana.', 'Protein shake and walnuts.', 'Protein shake and grapes.', 'Protein shake and mixed berries.', 'Protein shake and watermelon.', 'Protein shake and pear.', 'Protein shake and strawberries.', 'Salmon, quinoa and asparagus.', 'Ground turkey and marinara sauce over pasta.', 'Mackerel, brown rice and salad leaves with vinaigrette.', 'Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.', 'Ground beef with corn, brown rice, green peas and green beans.', 'Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.', 'Turkey meatballs, marinara sauce and parmesan cheese over pasta.'),
(19, 55, 4, 'Scrambled eggs with mushrooms and oatmeal', 'Protein pancakes with light-syrup, peanut butter and raspberries.', 'Chicken sausage with egg and roasted potatoes.', 'Ground turkey, egg, cheese and salsa in a whole-grain tortilla.', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.', 'Ground turkey and egg with corn, bell peppers, cheese and salsa.', 'Eggs sunny-side up and avocado toast Low-fat cottage cheese with blueberries', 'Hard-boiled eggs and an apple.', 'Greek yogurt and almonds.', 'Yogurt with granola.', 'Jerky and mixed nuts.', 'Can of tuna with crackers.', 'Protein balls and almond butter.', 'Venison burger, white rice and broccoli.', 'Sirloin steak, sweet potato and spinach salad with vinaigrette.', 'Turkey breast, basmati rice and mushrooms.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.', 'Tilapia fillet, potato wedges and bell peppers.', 'Pork tenderloin slices with roasted garlic potatoes and green beans.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Protein shake and a banana.', 'Protein shake and walnuts.', 'Protein shake and grapes.', 'Protein shake and mixed berries.', 'Protein shake and watermelon.', 'Protein shake and pear.', 'Protein shake and strawberries.', 'Salmon, quinoa and asparagus.', 'Ground turkey and marinara sauce over pasta.', 'Mackerel, brown rice and salad leaves with vinaigrette.', 'Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.', 'Ground beef with corn, brown rice, green peas and green beans.', 'Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.', 'Turkey meatballs, marinara sauce and parmesan cheese over pasta.'),
(20, 57, 0, 'Scrambled eggs with mushrooms and oatmeal', 'Protein pancakes with light-syrup, peanut butter and raspberries.', 'Chicken sausage with egg and roasted potatoes.', 'Ground turkey, egg, cheese and salsa in a whole-grain tortilla.', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.', 'Ground turkey and egg with corn, bell peppers, cheese and salsa.', 'Eggs sunny-side up and avocado toast Low-fat cottage cheese with blueberries', 'Hard-boiled eggs and an apple.', 'Greek yogurt and almonds.', 'Yogurt with granola.', 'Jerky and mixed nuts.', 'Can of tuna with crackers.', 'Protein balls and almond butter.', 'Venison burger, white rice and broccoli.', 'Sirloin steak, sweet potato and spinach salad with vinaigrette.', 'Turkey breast, basmati rice and mushrooms.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.', 'Tilapia fillet, potato wedges and bell peppers.', 'Pork tenderloin slices with roasted garlic potatoes and green beans.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Protein shake and a banana.', 'Protein shake and walnuts.', 'Protein shake and grapes.', 'Protein shake and mixed berries.', 'Protein shake and watermelon.', 'Protein shake and pear.', 'Protein shake and strawberries.', 'Salmon, quinoa and asparagus.', 'Ground turkey and marinara sauce over pasta.', 'Mackerel, brown rice and salad leaves with vinaigrette.', 'Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.', 'Ground beef with corn, brown rice, green peas and green beans.', 'Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.', 'Turkey meatballs, marinara sauce and parmesan cheese over pasta.'),
(21, 58, 3, 'Scrambled eggs with mushrooms and oatmeal', 'Protein pancakes with light-syrup, peanut butter and raspberries.', 'Chicken sausage with egg and roasted potatoes.', 'Ground turkey, egg, cheese and salsa in a whole-grain tortilla.', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.', 'Ground turkey and egg with corn, bell peppers, cheese and salsa.', 'Eggs sunny-side up and avocado toast Low-fat cottage cheese with blueberries', 'Hard-boiled eggs and an apple.', 'Greek yogurt and almonds.', 'Yogurt with granola.', 'Jerky and mixed nuts.', 'Can of tuna with crackers.', 'Protein balls and almond butter.', 'Venison burger, white rice and broccoli.', 'Sirloin steak, sweet potato and spinach salad with vinaigrette.', 'Turkey breast, basmati rice and mushrooms.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.', 'Tilapia fillet, potato wedges and bell peppers.', 'Pork tenderloin slices with roasted garlic potatoes and green beans.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Protein shake and a banana.', 'Protein shake and walnuts.', 'Protein shake and grapes.', 'Protein shake and mixed berries.', 'Protein shake and watermelon.', 'Protein shake and pear.', 'Protein shake and strawberries.', 'Salmon, quinoa and asparagus.', 'Ground turkey and marinara sauce over pasta.', 'Mackerel, brown rice and salad leaves with vinaigrette.', 'Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.', 'Ground beef with corn, brown rice, green peas and green beans.', 'Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.', 'Turkey meatballs, marinara sauce and parmesan cheese over pasta.'),
(22, 57, 0, 'Scrambled eggs with mushrooms and oatmeal', 'Protein pancakes with light-syrup, peanut butter and raspberries.', 'Chicken sausage with egg and roasted potatoes.', 'Ground turkey, egg, cheese and salsa in a whole-grain tortilla.', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.', 'Ground turkey and egg with corn, bell peppers, cheese and salsa.', 'Eggs sunny-side up and avocado toast Low-fat cottage cheese with blueberries', 'Hard-boiled eggs and an apple.', 'Greek yogurt and almonds.', 'Yogurt with granola.', 'Jerky and mixed nuts.', 'Can of tuna with crackers.', 'Protein balls and almond butter.', 'Venison burger, white rice and broccoli.', 'Sirloin steak, sweet potato and spinach salad with vinaigrette.', 'Turkey breast, basmati rice and mushrooms.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.', 'Tilapia fillet, potato wedges and bell peppers.', 'Pork tenderloin slices with roasted garlic potatoes and green beans.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Protein shake and a banana.', 'Protein shake and walnuts.', 'Protein shake and grapes.', 'Protein shake and mixed berries.', 'Protein shake and watermelon.', 'Protein shake and pear.', 'Protein shake and strawberries.', 'Salmon, quinoa and asparagus.', 'Ground turkey and marinara sauce over pasta.', 'Mackerel, brown rice and salad leaves with vinaigrette.', 'Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.', 'Ground beef with corn, brown rice, green peas and green beans.', 'Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.', 'Turkey meatballs, marinara sauce and parmesan cheese over pasta.'),
(23, 60, 4, 'Scrambled eggs with mushrooms and oatmeal', 'Protein pancakes with light-syrup, peanut butter and raspberries.', 'Chicken sausage with egg and roasted potatoes.', 'Ground turkey, egg, cheese and salsa in a whole-grain tortilla.', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.', 'Ground turkey and egg with corn, bell peppers, cheese and salsa.', 'Eggs sunny-side up and avocado toast Low-fat cottage cheese with blueberries', 'Hard-boiled eggs and an apple.', 'Greek yogurt and almonds.', 'Yogurt with granola.', 'Jerky and mixed nuts.', 'Can of tuna with crackers.', 'Protein balls and almond butter.', 'Venison burger, white rice and broccoli.', 'Sirloin steak, sweet potato and spinach salad with vinaigrette.', 'Turkey breast, basmati rice and mushrooms.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.', 'Tilapia fillet, potato wedges and bell peppers.', 'Pork tenderloin slices with roasted garlic potatoes and green beans.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Protein shake and a banana.', 'Protein shake and walnuts.', 'Protein shake and grapes.', 'Protein shake and mixed berries.', 'Protein shake and watermelon.', 'Protein shake and pear.', 'Protein shake and strawberries.', 'Salmon, quinoa and asparagus.', 'Ground turkey and marinara sauce over pasta.', 'Mackerel, brown rice and salad leaves with vinaigrette.', 'Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.', 'Ground beef with corn, brown rice, green peas and green beans.', 'Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.', 'Turkey meatballs, marinara sauce and parmesan cheese over pasta.'),
(24, 61, 3, 'Scrambled eggs with mushrooms and oatmeal', 'Protein pancakes with light-syrup, peanut butter and raspberries.', 'Chicken sausage with egg and roasted potatoes.', 'Ground turkey, egg, cheese and salsa in a whole-grain tortilla.', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.', 'Ground turkey and egg with corn, bell peppers, cheese and salsa.', 'Eggs sunny-side up and avocado toast Low-fat cottage cheese with blueberries', 'Hard-boiled eggs and an apple.', 'Greek yogurt and almonds.', 'Yogurt with granola.', 'Jerky and mixed nuts.', 'Can of tuna with crackers.', 'Protein balls and almond butter.', 'Venison burger, white rice and broccoli.', 'Sirloin steak, sweet potato and spinach salad with vinaigrette.', 'Turkey breast, basmati rice and mushrooms.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.', 'Tilapia fillet, potato wedges and bell peppers.', 'Pork tenderloin slices with roasted garlic potatoes and green beans.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Protein shake and a banana.', 'Protein shake and walnuts.', 'Protein shake and grapes.', 'Protein shake and mixed berries.', 'Protein shake and watermelon.', 'Protein shake and pear.', 'Protein shake and strawberries.', 'Salmon, quinoa and asparagus.', 'Ground turkey and marinara sauce over pasta.', 'Mackerel, brown rice and salad leaves with vinaigrette.', 'Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.', 'Ground beef with corn, brown rice, green peas and green beans.', 'Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.', 'Turkey meatballs, marinara sauce and parmesan cheese over pasta.'),
(25, 61, 3, 'Scrambled eggs with mushrooms and oatmeal', 'Protein pancakes with light-syrup, peanut butter and raspberries.', 'Chicken sausage with egg and roasted potatoes.', 'Ground turkey, egg, cheese and salsa in a whole-grain tortilla.', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.', 'Ground turkey and egg with corn, bell peppers, cheese and salsa.', 'Eggs sunny-side up and avocado toast Low-fat cottage cheese with blueberries', 'Hard-boiled eggs and an apple.', 'Greek yogurt and almonds.', 'Yogurt with granola.', 'Jerky and mixed nuts.', 'Can of tuna with crackers.', 'Protein balls and almond butter.', 'Venison burger, white rice and broccoli.', 'Sirloin steak, sweet potato and spinach salad with vinaigrette.', 'Turkey breast, basmati rice and mushrooms.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.', 'Tilapia fillet, potato wedges and bell peppers.', 'Pork tenderloin slices with roasted garlic potatoes and green beans.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Protein shake and a banana.', 'Protein shake and walnuts.', 'Protein shake and grapes.', 'Protein shake and mixed berries.', 'Protein shake and watermelon.', 'Protein shake and pear.', 'Protein shake and strawberries.', 'Salmon, quinoa and asparagus.', 'Ground turkey and marinara sauce over pasta.', 'Mackerel, brown rice and salad leaves with vinaigrette.', 'Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.', 'Ground beef with corn, brown rice, green peas and green beans.', 'Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.', 'Turkey meatballs, marinara sauce and parmesan cheese over pasta.'),
(26, 63, 6, 'Scrambled eggs with mushrooms and oatmeal   ', 'Protein pancakes with light-syrup, peanut butter and raspberries.     ', 'Chicken sausage with egg and roasted potatoes.     ', 'Ground turkey, egg, cheese and salsa in a whole-grain tortilla.     ', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.     ', 'Ground turkey and egg with corn, bell peppers, cheese and salsa.     ', 'Eggs sunny-side up and avocado toast Low-fat cottage cheese with blueberries     ', 'Hard-boiled eggs and an apple.', 'Greek yogurt and almonds.', 'Yogurt with granola.', 'Jerky and mixed nuts.', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.    ', 'Protein balls and almond butter.', 'Venison burger, white rice and broccoli.', 'Sirloin steak, sweet potato and spinach salad with vinaigrette.', 'Turkey breast, basmati rice and mushrooms.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.', 'Tilapia fillet, potato wedges and bell peppers.', 'Pork tenderloin slices with roasted garlic potatoes and green beans.', '', 'Protein shake and a banana.', 'Protein shake and walnuts.', 'Protein shake and grapes.', 'Protein shake and mixed berries.', 'Protein shake and watermelon.', 'Protein shake and pear.', 'Protein shake and strawberries.', 'Salmon, quinoa and asparagus.', 'Ground turkey and marinara sauce over pasta.', 'Mackerel, brown rice and salad leaves with vinaigrette.', 'Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.', 'Ground beef with corn, brown rice, green peas and green beans.', 'Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.', 'Turkey meatballs, marinara sauce and parmesan cheese over pasta.'),
(27, 63, 6, 'Scrambled eggs with mushrooms and oatmeal   ', 'Protein pancakes with light-syrup, peanut butter and raspberries.     ', 'Chicken sausage with egg and roasted potatoes.     ', 'Ground turkey, egg, cheese and salsa in a whole-grain tortilla.     ', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.     ', 'Ground turkey and egg with corn, bell peppers, cheese and salsa.     ', 'Eggs sunny-side up and avocado toast Low-fat cottage cheese with blueberries     ', 'Hard-boiled eggs and an apple.', 'Greek yogurt and almonds.', 'Yogurt with granola.', 'Jerky and mixed nuts.', 'Blueberries, strawberries and vanilla Greek yogurt on overnight oats.    ', 'Protein balls and almond butter.', 'Venison burger, white rice and broccoli.', 'Sirloin steak, sweet potato and spinach salad with vinaigrette.', 'Turkey breast, basmati rice and mushrooms.', 'Chicken breast, baked potato, sour cream and broccoli.', 'Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.', 'Tilapia fillet, potato wedges and bell peppers.', 'Pork tenderloin slices with roasted garlic potatoes and green beans.', '', 'Protein shake and a banana.', 'Protein shake and walnuts.', 'Protein shake and grapes.', 'Protein shake and mixed berries.', 'Protein shake and watermelon.', 'Protein shake and pear.', 'Protein shake and strawberries.', 'Salmon, quinoa and asparagus.', 'Ground turkey and marinara sauce over pasta.', 'Mackerel, brown rice and salad leaves with vinaigrette.', 'Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.', 'Ground beef with corn, brown rice, green peas and green beans.', 'Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.', 'Turkey meatballs, marinara sauce and parmesan cheese over pasta.');

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
  `image` text NOT NULL DEFAULT 'default.jpg',
  `cover_image` text NOT NULL DEFAULT 'default_cover.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `username`, `f_name`, `l_name`, `address`, `phone_no`, `dob`, `gender`, `injuries`, `assign_trainer`, `joined_date`, `image`, `cover_image`) VALUES
(1, 'hiran', 'Hiran', 'Gamage', 'No 25 Station Road, 04 , Mirigama', 795619912, '1999-05-01', 'male', '', 1, '2021-09-27 12:22:43', 'hiran.jpg', 'default_cover.jpg'),
(2, 'duminda', 'Duminda ', 'Jayasinghe', '27, Holy Emmanuel Church Road , Mirigama', 794573324, '1990-01-12', 'male', '', 1, '2021-09-27 12:22:43', 'duminda.jpg', 'default_cover.jpg'),
(3, 'herath', 'Herath', 'Withanage ', 'No 118, Vijayarajadahana, Mirigama', 798942276, '1996-03-12', 'male', '', 0, '2021-09-27 12:22:43', 'herath.jpg', 'default_cover.jpg'),
(4, 'udaya', 'UdayaA', 'Wickrema', 'No 22/A, Alapiliyawa, Mirigama', 795418873, '1994-01-12', 'male', '', 1, '2021-09-27 12:22:43', 'udaya.jpg', 'default_cover.jpg'),
(5, 'umashi', 'Umashi ', 'Gamage', 'No 22, Nawam Mawatha, Ambepussa', 785619959, '1999-10-15', 'female', '', 1, '2021-09-27 12:22:43', 'umashi.jpg', 'default_cover.jpg'),
(6, 'hiranya', 'Nipuni', 'Iriyagolla', 'No 45, Pohonnaruwa, Mirigama', 784400855, '1998-01-12', 'female', '', 1, '2021-09-27 12:22:43', 'hiranya.jpg', 'default_cover.jpg'),
(36, 'pamodha98', 'Pamodha', 'Mahagamage', 'Mirigam', 750000001, '1998-11-23', 'male', '', 2, '2021-11-10 12:47:31', 'default.jpg', 'default_cover.jpg'),
(47, 'sdfdsfgdg', 'Bimsaraa', 'Kulasekara', 'gfhgfhhg', 1234567891, '2000-10-20', 'female', '', 2, '2022-03-25 09:36:14', 'default.jpg', 'default_cover.jpg'),
(48, 'Nuwan123', 'Nuwan', 'Nin', 'No 78', 789589984, '2000-10-20', 'male', '', 2, '2022-03-25 15:32:55', 'default.jpg', 'default_cover.jpg'),
(49, 'amila123', 'Pamoda', 'Amila', 'No 113, Mirigama', 745769983, '2000-10-20', 'male', '', 6, '2022-03-26 11:02:59', 'default.jpg', 'default_cover.jpg'),
(52, 'heshan20', 'Heshan', 'Hettiarachchi', 'Mirigama,Gampaha', 758327316, '2000-05-01', 'male', '', 0, '2022-03-27 03:58:43', 'default.jpg', 'default_cover.jpg'),
(53, 'heshan21', 'Heshan', 'Hettigamage', 'Mirigama,Gampaha', 758327316, '2000-08-08', 'male', '', 0, '2022-03-27 04:02:49', 'default.jpg', 'default_cover.jpg'),
(54, 'pamodhaDD', 'Pamodha', 'sdvdv', 'Mirigama', 756868921, '2000-10-20', 'male', '', 6, '2022-03-28 08:26:35', 'default.jpg', 'default_cover.jpg'),
(55, 'pamodhaDD2', 'Pamodha', 'cvcv', 'Mirigama', 1234567891, '2000-10-20', 'male', '', 4, '2022-03-28 08:32:03', 'default.jpg', 'default_cover.jpg'),
(56, 'pamodhaDD2', 'Pamodha', 'cvcv', 'Mirigama', 1234567891, '2000-10-20', 'male', '', 4, '2022-03-28 08:33:19', 'default.jpg', 'default_cover.jpg'),
(57, '', '', '', '', 0, '0000-00-00', '', '', 0, '2022-03-28 08:35:03', 'default.jpg', 'default_cover.jpg'),
(58, 'pamodhaDD34', 'Pamodha', 'dsvsfv ', 'Mirigama', 1234567897, '2000-10-20', 'male', '', 3, '2022-03-28 08:38:05', 'default.jpg', 'default_cover.jpg'),
(59, '', '', '', '', 0, '0000-00-00', '', '', 0, '2022-03-28 08:50:03', 'default.jpg', 'default_cover.jpg'),
(60, 'pamodhak', 'Pamodha', 'Mahagamagesd', 'Mirigama', 1234567891, '2000-10-20', 'male', '', 4, '2022-03-28 08:52:08', 'default.jpg', 'default_cover.jpg'),
(61, 'pamodhas', 'Pamodha', 'dfgfgf', 'Mirigama', 1234567891, '2000-10-20', 'male', '', 3, '2022-03-28 08:54:58', 'default.jpg', 'default_cover.jpg'),
(62, 'pamodhas', 'Pamodha', 'dfgfgf', 'Mirigama', 1234567891, '2000-10-20', 'male', '', 3, '2022-03-28 08:56:07', 'default.jpg', 'default_cover.jpg'),
(63, 'pamodhass', 'Pamodha', 'Mahagamage', 'Mirigama', 1234567891, '2000-10-20', 'male', '', 0, '2022-03-28 09:01:39', 'default.jpg', 'default_cover.jpg'),
(64, 'pamodhass', 'Pamodha', 'Mahagamage', 'Mirigama', 1234567891, '2000-10-20', 'male', '', 6, '2022-03-28 09:02:05', 'default.jpg', 'default_cover.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `membership_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `membership_type` int(10) NOT NULL,
  `joined_date` date NOT NULL DEFAULT current_timestamp(),
  `assignment_status` int(1) NOT NULL DEFAULT 0,
  `extend_package_status` int(1) NOT NULL DEFAULT 0,
  `status` varchar(255) NOT NULL DEFAULT 'valid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`membership_id`, `member_id`, `membership_type`, `joined_date`, `assignment_status`, `extend_package_status`, `status`) VALUES
(1, 3, 3, '2022-02-01', 0, 0, 'valid'),
(2, 1, 6, '2022-03-27', 0, 0, 'valid'),
(25, 2, 6, '2022-01-25', 0, 0, 'valid'),
(26, 4, 3, '2022-03-26', 0, 0, 'valid'),
(27, 5, 0, '2022-01-18', 0, 0, 'invalid'),
(28, 6, 1, '2022-01-02', 0, 0, 'valid'),
(41, 47, 12, '2022-03-25', 0, 0, 'valid'),
(42, 48, 3, '2022-03-25', 0, 0, 'valid'),
(43, 49, 1, '2022-03-26', 0, 0, 'valid'),
(46, 36, 12, '2021-11-22', 0, 0, 'valid'),
(47, 52, 12, '2022-03-27', 0, 0, 'valid'),
(48, 53, 12, '2022-03-27', 0, 0, 'valid'),
(49, 54, 12, '2022-03-28', 0, 0, 'valid'),
(50, 55, 6, '2022-03-28', 0, 0, 'valid'),
(51, 55, 6, '2022-03-28', 0, 0, 'valid'),
(52, 57, 0, '2022-03-28', 0, 0, 'valid'),
(53, 58, 12, '2022-03-28', 0, 0, 'valid'),
(54, 57, 0, '2022-03-28', 0, 0, 'valid'),
(55, 60, 12, '2022-03-28', 0, 0, 'valid'),
(56, 61, 12, '2022-03-28', 0, 0, 'valid'),
(57, 61, 12, '2022-03-28', 0, 0, 'valid'),
(58, 63, 12, '2022-03-28', 0, 0, 'valid'),
(59, 63, 12, '2022-03-28', 0, 0, 'valid');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `payment_date` date NOT NULL DEFAULT current_timestamp(),
  `description` varchar(255) NOT NULL,
  `payment_amount` int(10) NOT NULL,
  `trainer_id` int(10) NOT NULL DEFAULT 0,
  `payment_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `member_id`, `payment_date`, `description`, `payment_amount`, `trainer_id`, `payment_type`) VALUES
(1, 3, '2022-03-24', 'New Membership', 11500, 0, 'online'),
(2, 1, '2022-03-25', 'New Membership(with trainer)', 7500, 1, 'online'),
(3, 2, '2022-03-25', 'New Membership(with trainer)', 7000, 2, 'online'),
(4, 5, '2022-03-25', 'New Membership(with trainer)', 11500, 2, 'online'),
(5, 6, '2022-03-25', 'New Membership(with trainer)', 24500, 2, 'online'),
(6, 6, '2022-03-25', 'New Membership(with trainer)', 11500, 2, 'online'),
(7, 49, '2022-03-26', 'New Membership(with trainer)', 7000, 6, 'online'),
(8, 4, '2022-03-26', 'Trainer Assignment', 5000, 1, 'Online'),
(9, 4, '2022-03-26', 'Renew Membership', 7000, 1, 'Online'),
(10, 4, '2022-03-26', 'Renew Membership', 7000, 1, 'Online'),
(11, 36, '2021-11-22', 'Renew Membership', 25000, 1, 'online'),
(12, 36, '2021-12-11', 'Renew Membership', 2500, 1, 'Online'),
(13, 36, '2021-12-19', 'Renew Membership', 2500, 1, 'Online'),
(14, 36, '2021-12-19', 'Trainer Assignment', 5000, 1, 'Online'),
(15, 36, '2022-03-18', 'Trainer Assignment', 5000, 1, 'Online'),
(16, 36, '2022-06-09', 'Trainer Assignment', 5000, 2, 'Online'),
(20, 48, '2022-03-27', 'Renew Membership', 7000, 2, 'Online'),
(21, 52, '2022-03-27', 'New Membership', 20000, 0, 'online'),
(22, 53, '2022-03-27', 'New Membership', 20000, 0, 'online'),
(23, 1, '2022-03-27', 'Trainer Assignment & Renew Membership', 18500, 1, 'cash'),
(24, 54, '2022-03-28', 'New Membership(with trainer)', 24500, 6, 'online'),
(25, 55, '2022-03-28', 'New Membership(with trainer)', 19500, 4, 'online'),
(26, 55, '2022-03-28', 'New Membership(with trainer)', 19500, 4, 'online'),
(27, 57, '2022-03-28', 'New Membership', 20000, 0, 'online'),
(28, 58, '2022-03-28', 'New Membership(with trainer)', 27500, 3, 'online'),
(29, 57, '2022-03-28', 'New Membership', 27500, 0, 'online'),
(30, 60, '2022-03-28', 'New Membership(with trainer)', 26000, 4, 'online'),
(31, 61, '2022-03-28', 'New Membership(with trainer)', 27500, 3, 'online'),
(32, 61, '2022-03-28', 'New Membership(with trainer)', 27500, 3, 'online'),
(33, 63, '2022-03-28', 'New Membership(with trainer)', 24500, 6, 'online'),
(34, 63, '2022-03-28', 'New Membership(with trainer)', 24500, 6, 'online');

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
(14, 'dduminda@gmail.com', '2f49a00f09bc361f', '$2y$10$sEEd.uUP4cF6lw9LIzTxWOh0dHMFTBIj7D3uqo7mudUbusxSED6Fm', '1641547253'),
(64, 'bkdeveloping@gmail.com', '026e7e19aac90eae', '$2y$10$DsiN65pbHB0./aRTUa8E.Outk3c/m1Fux94V83FDjDpjH2icJ0qUa', '1648115692'),
(65, 'kulasekarakmbs@gmail.com', '6b20bb64354fa7d4', '$2y$10$r7PyGYPaJJ5ayC/.OcIJz.5OOFLe6qO5dIIVkG7/Gpz3I/IQGWnkm', '1648193169'),
(70, 'pamodhamahagamage98@gmail.com', '5125f1964215f2e1', '$2y$10$z0PuJ.GI.Qf.7j1ouq4/Yut0VJhhjiOCuo.gUmFXEK7bwtobcKtwK', '1653978369');

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
(6, 2, 1, 'I have no medical conditions that would prevent me from participating in a physical fitness program. Thusitha was my personal trainer meeting at the gym. He created interesting workouts that allowed me to improve my upper body strength, flexibility and balance. Thusitha was always pleasant while reminding me to maintain correct body position. I would recommend anyone who would like to improve their fitness to work with Thusitha.', '2021-08-02', 5, 1),
(7, 3, 1, 'I would like to thank Bill for his hard work, to raise my limits and keep challenging me.\r\nWell done, Thusi.', '2021-08-31', 5, 1),
(8, 4, 2, 'One month ago I started exercising with Isuru as my trainer.\r\nNot having exercised for a long time I was apprehensive but when I met and got to know Isuru. I knew that he was the perfect coach for me.\r\nHe is professional yet kind, patient and understanding.\r\nHis encouragement has given me the confidence that I needed to start this program.\r\nAfter one short month I am pleased with my progress and feel assured that with her continued training and encouragement I would continue getting good results and attain my goal.', '2021-08-23', 5, 1),
(9, 5, 6, 'I am enjoying my sessions very much, my balance is slowly improving. Last Monday, we did exercises in the pool, that I enjoyed very much. Nipuni is very nice and easy to work with.', '2021-07-08', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `sch_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `day1_ex1` varchar(255) NOT NULL DEFAULT 'YToxOntpOjA7czoxOiIwIjt9',
  `day2_ex1` varchar(255) DEFAULT 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czoxOToiYmFyYmVsbCBiYWNrIHNxdWF0cyI7aToyO3M6MToiNSI7aTozO3M6MToiNSI7fQ==',
  `day3_ex1` varchar(255) DEFAULT 'YToxOntpOjA7czoxOiIwIjt9',
  `day4_ex1` varchar(255) DEFAULT 'YTo0OntpOjA7czoxNToiQmFjay9oYW1zdHJpbmdzIjtpOjE7czoyOToiYmFyYmVsbCBvciB0cmFwIGJhciBkZWFkbGlmdHMiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=',
  `day5_ex1` varchar(255) DEFAULT 'YToxOntpOjA7czoxOiIwIjt9',
  `day6_ex1` varchar(255) DEFAULT 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czo5OiJsZWcgcHJlc3MiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=',
  `day7_ex1` varchar(255) DEFAULT 'YToxOntpOjA7czoxOiIwIjt9',
  `day1_ex2` varchar(255) DEFAULT 'YToxOntpOjA7czoxOiIwIjt9',
  `day2_ex2` varchar(255) DEFAULT 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MjQ6ImZsYXQgYmFyYmVsbCBiZW5jaCBwcmVzcyI7aToyO3M6MDoiIjtpOjM7czowOiIiO30=',
  `day3_ex2` varchar(255) DEFAULT 'YToxOntpOjA7czoxOiIwIjt9',
  `day4_ex2` varchar(255) DEFAULT 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoyNDoicHVsbHVwcyBvciBsYXQgcHVsbGRvd25zIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9',
  `day5_ex2` varchar(255) DEFAULT 'YToxOntpOjA7czoxOiIwIjt9',
  `day6_ex2` varchar(255) DEFAULT 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxMDoiVC1iYXIgcm93cyI7aToyO3M6MToiMyI7aTozO3M6MToiOCI7fQ==',
  `day7_ex2` varchar(255) DEFAULT 'YToxOntpOjA7czoxOiIwIjt9',
  `day1_ex3` varchar(255) DEFAULT 'YToxOntpOjA7czoxOiIwIjt9',
  `day2_ex3` varchar(255) DEFAULT 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxNzoic2VhdGVkIGNhYmxlIHJvd3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9',
  `day3_ex3` varchar(255) DEFAULT 'YToxOntpOjA7czoxOiIwIjt9',
  `day4_ex3` varchar(255) DEFAULT 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MzM6ImJhcmJlbGwgb3IgZHVtYmJlbGwgaW5jbGluZSBwcmVzcyI7aToyO3M6MToiNCI7aTozO3M6MToiOCI7fQ==',
  `day5_ex3` varchar(255) DEFAULT 'YToxOntpOjA7czoxOiIwIjt9',
  `day6_ex3` varchar(255) DEFAULT 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6Mjk6Im1hY2hpbmUgb3IgZHVtYmJlbGwgY2hlc3QgZmx5IjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9',
  `day7_ex3` varchar(255) DEFAULT 'YToxOntpOjA7czoxOiIwIjt9',
  `day1_ex4` varchar(255) DEFAULT 'YToxOntpOjA7czoxOiIwIjt9',
  `day2_ex4` varchar(255) DEFAULT 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMwOiJzZWF0ZWQgZHVtYmJlbGwgc2hvdWxkZXIgcHJlc3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9',
  `day3_ex4` varchar(255) DEFAULT 'YToxOntpOjA7czoxOiIwIjt9',
  `day4_ex4` varchar(255) DEFAULT 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjIyOiJtYWNoaW5lIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9',
  `day5_ex4` varchar(255) DEFAULT 'YToxOntpOjA7czoxOiIwIjt9',
  `day6_ex4` varchar(255) DEFAULT 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMxOiJvbmUtYXJtIGR1bWJiZWxsIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9',
  `day7_ex4` varchar(255) DEFAULT 'YToxOntpOjA7czoxOiIwIjt9',
  `day1_ex5` varchar(255) DEFAULT 'YToxOntpOjA7czoxOiIwIjt9',
  `day2_ex5` varchar(255) DEFAULT 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czoyNzoiY2FibGUgcm9wZSB0cmljZXAgcHVzaGRvd25zIjtpOjI7czowOiIiO2k6MztzOjA6IiI7fQ==',
  `day3_ex5` varchar(255) DEFAULT 'YToxOntpOjA7czoxOiIwIjt9',
  `day4_ex5` varchar(255) DEFAULT 'YTo0OntpOjA7czo2OiJCaWNlcHMiO2k6MTtzOjMxOiJiYXJiZWxsIG9yIGR1bWJiZWxsIGJpY2VwIGN1cmxzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMCI7fQ==',
  `day5_ex5` varchar(255) DEFAULT 'YToxOntpOjA7czoxOiIwIjt9',
  `day6_ex5` varchar(255) DEFAULT 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czozNzoiZHVtYmJlbGwgb3IgbWFjaGluZSB0cmljZXAgZXh0ZW5zaW9ucyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=',
  `day7_ex5` varchar(255) DEFAULT 'YToxOntpOjA7czoxOiIwIjt9',
  `day1_ex6` varchar(255) DEFAULT 'YToxOntpOjA7czoxOiIwIjt9',
  `day2_ex6` varchar(255) DEFAULT 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjE0OiJsYXRlcmFsIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTIiO30=',
  `day3_ex6` varchar(255) DEFAULT 'YToxOntpOjA7czoxOiIwIjt9',
  `day4_ex6` varchar(255) DEFAULT 'YTo0OntpOjA7czo2OiJDYWx2ZXMiO2k6MTtzOjIwOiJzdGFuZGluZyBjYWxmIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=',
  `day5_ex6` varchar(255) DEFAULT 'YToxOntpOjA7czoxOiIwIjt9',
  `day6_ex6` varchar(255) DEFAULT 'YTo0OntpOjA7czozOiJBYnMiO2k6MTtzOjE2OiJkZWNsaW5lIGNydW5jaGVzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMiI7fQ==',
  `day7_ex6` varchar(255) DEFAULT 'YToxOntpOjA7czoxOiIwIjt9'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`sch_id`, `member_id`, `day1_ex1`, `day2_ex1`, `day3_ex1`, `day4_ex1`, `day5_ex1`, `day6_ex1`, `day7_ex1`, `day1_ex2`, `day2_ex2`, `day3_ex2`, `day4_ex2`, `day5_ex2`, `day6_ex2`, `day7_ex2`, `day1_ex3`, `day2_ex3`, `day3_ex3`, `day4_ex3`, `day5_ex3`, `day6_ex3`, `day7_ex3`, `day1_ex4`, `day2_ex4`, `day3_ex4`, `day4_ex4`, `day5_ex4`, `day6_ex4`, `day7_ex4`, `day1_ex5`, `day2_ex5`, `day3_ex5`, `day4_ex5`, `day5_ex5`, `day6_ex5`, `day7_ex5`, `day1_ex6`, `day2_ex6`, `day3_ex6`, `day4_ex6`, `day5_ex6`, `day6_ex6`, `day7_ex6`) VALUES
(1, 36, 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czoxOToiYmFyYmVsbCBiYWNrIHNxdWF0cyI7aToyO3M6MToiNSI7aTozO3M6MToiNiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJoYW1zdHJpbmciO2k6MTtzOjI5OiJiYXJiZWxsIG9yIHRyYXAgYmFyIGRlYWRsaWZ0cyI7aToyO3M6MToiNSI7aTozO3M6MToiNSI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czo5OiJsZWcgcHJlc3MiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MjQ6ImZsYXQgYmFyYmVsbCBiZW5jaCBwcmVzcyI7aToyO3M6MToiNSI7aTozO3M6MToiNiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoyNDoicHVsbHVwcyBvciBsYXQgcHVsbGRvd25zIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxMDoiVC1iYXIgcm93cyI7aToyO3M6MToiMyI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxNzoic2VhdGVkIGNhYmxlIHJvd3MiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjgiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MzM6ImJhcmJlbGwgb3IgZHVtYmJlbGwgaW5jbGluZSBwcmVzcyI7aToyO3M6MToiNCI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6Mjk6Im1hY2hpbmUgb3IgZHVtYmJlbGwgY2hlc3QgZmx5IjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMwOiJzZWF0ZWQgZHVtYmJlbGwgc2hvdWxkZXIgcHJlc3MiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjgiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjIyOiJtYWNoaW5lIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMxOiJvbmUtYXJtIGR1bWJiZWxsIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czoyNzoiY2FibGUgcm9wZSB0cmljZXAgcHVzaGRvd25zIjtpOjI7czoxOiI1IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJCaWNlcHMiO2k6MTtzOjMxOiJiYXJiZWxsIG9yIGR1bWJiZWxsIGJpY2VwIGN1cmxzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czozNzoiZHVtYmJlbGwgb3IgbWFjaGluZSB0cmljZXAgZXh0ZW5zaW9ucyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjE0OiJsYXRlcmFsIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJDYWx2ZXMiO2k6MTtzOjIwOiJzdGFuZGluZyBjYWxmIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czozOiJBYnMiO2k6MTtzOjE2OiJkZWNsaW5lIGNydW5jaGVzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9'),
(6, 48, 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czoxOToiYmFyYmVsbCBiYWNrIHNxdWF0cyI7aToyO3M6MToiNSI7aTozO3M6MToiNSI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czoxNToiQmFjay9oYW1zdHJpbmdzIjtpOjE7czoyOToiYmFyYmVsbCBvciB0cmFwIGJhciBkZWFkbGlmdHMiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czo5OiJsZWcgcHJlc3MiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MjQ6ImZsYXQgYmFyYmVsbCBiZW5jaCBwcmVzcyI7aToyO3M6MDoiIjtpOjM7czowOiIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoyNDoicHVsbHVwcyBvciBsYXQgcHVsbGRvd25zIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxMDoiVC1iYXIgcm93cyI7aToyO3M6MToiMyI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxNzoic2VhdGVkIGNhYmxlIHJvd3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MzM6ImJhcmJlbGwgb3IgZHVtYmJlbGwgaW5jbGluZSBwcmVzcyI7aToyO3M6MToiNCI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6Mjk6Im1hY2hpbmUgb3IgZHVtYmJlbGwgY2hlc3QgZmx5IjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMwOiJzZWF0ZWQgZHVtYmJlbGwgc2hvdWxkZXIgcHJlc3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjIyOiJtYWNoaW5lIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMxOiJvbmUtYXJtIGR1bWJiZWxsIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czoyNzoiY2FibGUgcm9wZSB0cmljZXAgcHVzaGRvd25zIjtpOjI7czowOiIiO2k6MztzOjA6IiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJCaWNlcHMiO2k6MTtzOjMxOiJiYXJiZWxsIG9yIGR1bWJiZWxsIGJpY2VwIGN1cmxzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czozNzoiZHVtYmJlbGwgb3IgbWFjaGluZSB0cmljZXAgZXh0ZW5zaW9ucyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjE0OiJsYXRlcmFsIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJDYWx2ZXMiO2k6MTtzOjIwOiJzdGFuZGluZyBjYWxmIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czozOiJBYnMiO2k6MTtzOjE2OiJkZWNsaW5lIGNydW5jaGVzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9'),
(7, 49, 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czoxOToiYmFyYmVsbCBiYWNrIHNxdWF0cyI7aToyO3M6MToiNSI7aTozO3M6MToiNSI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czoxNToiQmFjay9oYW1zdHJpbmdzIjtpOjE7czoyOToiYmFyYmVsbCBvciB0cmFwIGJhciBkZWFkbGlmdHMiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czo5OiJsZWcgcHJlc3MiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MjQ6ImZsYXQgYmFyYmVsbCBiZW5jaCBwcmVzcyI7aToyO3M6MDoiIjtpOjM7czowOiIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoyNDoicHVsbHVwcyBvciBsYXQgcHVsbGRvd25zIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxMDoiVC1iYXIgcm93cyI7aToyO3M6MToiMyI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxNzoic2VhdGVkIGNhYmxlIHJvd3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MzM6ImJhcmJlbGwgb3IgZHVtYmJlbGwgaW5jbGluZSBwcmVzcyI7aToyO3M6MToiNCI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6Mjk6Im1hY2hpbmUgb3IgZHVtYmJlbGwgY2hlc3QgZmx5IjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMwOiJzZWF0ZWQgZHVtYmJlbGwgc2hvdWxkZXIgcHJlc3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjIyOiJtYWNoaW5lIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMxOiJvbmUtYXJtIGR1bWJiZWxsIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czoyNzoiY2FibGUgcm9wZSB0cmljZXAgcHVzaGRvd25zIjtpOjI7czowOiIiO2k6MztzOjA6IiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJCaWNlcHMiO2k6MTtzOjMxOiJiYXJiZWxsIG9yIGR1bWJiZWxsIGJpY2VwIGN1cmxzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czozNzoiZHVtYmJlbGwgb3IgbWFjaGluZSB0cmljZXAgZXh0ZW5zaW9ucyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjE0OiJsYXRlcmFsIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJDYWx2ZXMiO2k6MTtzOjIwOiJzdGFuZGluZyBjYWxmIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czozOiJBYnMiO2k6MTtzOjE2OiJkZWNsaW5lIGNydW5jaGVzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9'),
(8, 1, 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czoxOToiYmFyYmVsbCBiYWNrIHNxdWF0cyI7aToyO3M6MToiNSI7aTozO3M6MToiNSI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czoxNToiQmFjay9oYW1zdHJpbmdzIjtpOjE7czoyOToiYmFyYmVsbCBvciB0cmFwIGJhciBkZWFkbGlmdHMiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czo5OiJsZWcgcHJlc3MiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MjQ6ImZsYXQgYmFyYmVsbCBiZW5jaCBwcmVzcyI7aToyO3M6MDoiIjtpOjM7czowOiIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoyNDoicHVsbHVwcyBvciBsYXQgcHVsbGRvd25zIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxMDoiVC1iYXIgcm93cyI7aToyO3M6MToiMyI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxNzoic2VhdGVkIGNhYmxlIHJvd3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MzM6ImJhcmJlbGwgb3IgZHVtYmJlbGwgaW5jbGluZSBwcmVzcyI7aToyO3M6MToiNCI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6Mjk6Im1hY2hpbmUgb3IgZHVtYmJlbGwgY2hlc3QgZmx5IjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMwOiJzZWF0ZWQgZHVtYmJlbGwgc2hvdWxkZXIgcHJlc3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjIyOiJtYWNoaW5lIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMxOiJvbmUtYXJtIGR1bWJiZWxsIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czoyNzoiY2FibGUgcm9wZSB0cmljZXAgcHVzaGRvd25zIjtpOjI7czowOiIiO2k6MztzOjA6IiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJCaWNlcHMiO2k6MTtzOjMxOiJiYXJiZWxsIG9yIGR1bWJiZWxsIGJpY2VwIGN1cmxzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czozNzoiZHVtYmJlbGwgb3IgbWFjaGluZSB0cmljZXAgZXh0ZW5zaW9ucyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjE0OiJsYXRlcmFsIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJDYWx2ZXMiO2k6MTtzOjIwOiJzdGFuZGluZyBjYWxmIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czozOiJBYnMiO2k6MTtzOjE2OiJkZWNsaW5lIGNydW5jaGVzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9'),
(9, 2, 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czoxOToiYmFyYmVsbCBiYWNrIHNxdWF0cyI7aToyO3M6MToiNSI7aTozO3M6MToiNSI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czoxNToiQmFjay9oYW1zdHJpbmdzIjtpOjE7czoyOToiYmFyYmVsbCBvciB0cmFwIGJhciBkZWFkbGlmdHMiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czo5OiJsZWcgcHJlc3MiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MjQ6ImZsYXQgYmFyYmVsbCBiZW5jaCBwcmVzcyI7aToyO3M6MDoiIjtpOjM7czowOiIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoyNDoicHVsbHVwcyBvciBsYXQgcHVsbGRvd25zIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxMDoiVC1iYXIgcm93cyI7aToyO3M6MToiMyI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxNzoic2VhdGVkIGNhYmxlIHJvd3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MzM6ImJhcmJlbGwgb3IgZHVtYmJlbGwgaW5jbGluZSBwcmVzcyI7aToyO3M6MToiNCI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6Mjk6Im1hY2hpbmUgb3IgZHVtYmJlbGwgY2hlc3QgZmx5IjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMwOiJzZWF0ZWQgZHVtYmJlbGwgc2hvdWxkZXIgcHJlc3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjIyOiJtYWNoaW5lIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMxOiJvbmUtYXJtIGR1bWJiZWxsIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czoyNzoiY2FibGUgcm9wZSB0cmljZXAgcHVzaGRvd25zIjtpOjI7czowOiIiO2k6MztzOjA6IiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJCaWNlcHMiO2k6MTtzOjMxOiJiYXJiZWxsIG9yIGR1bWJiZWxsIGJpY2VwIGN1cmxzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czozNzoiZHVtYmJlbGwgb3IgbWFjaGluZSB0cmljZXAgZXh0ZW5zaW9ucyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjE0OiJsYXRlcmFsIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJDYWx2ZXMiO2k6MTtzOjIwOiJzdGFuZGluZyBjYWxmIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czozOiJBYnMiO2k6MTtzOjE2OiJkZWNsaW5lIGNydW5jaGVzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9'),
(10, 3, 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czoxOToiYmFyYmVsbCBiYWNrIHNxdWF0cyI7aToyO3M6MToiNSI7aTozO3M6MToiNSI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czoxNToiQmFjay9oYW1zdHJpbmdzIjtpOjE7czoyOToiYmFyYmVsbCBvciB0cmFwIGJhciBkZWFkbGlmdHMiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czo5OiJsZWcgcHJlc3MiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MjQ6ImZsYXQgYmFyYmVsbCBiZW5jaCBwcmVzcyI7aToyO3M6MDoiIjtpOjM7czowOiIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoyNDoicHVsbHVwcyBvciBsYXQgcHVsbGRvd25zIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxMDoiVC1iYXIgcm93cyI7aToyO3M6MToiMyI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxNzoic2VhdGVkIGNhYmxlIHJvd3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MzM6ImJhcmJlbGwgb3IgZHVtYmJlbGwgaW5jbGluZSBwcmVzcyI7aToyO3M6MToiNCI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6Mjk6Im1hY2hpbmUgb3IgZHVtYmJlbGwgY2hlc3QgZmx5IjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMwOiJzZWF0ZWQgZHVtYmJlbGwgc2hvdWxkZXIgcHJlc3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjIyOiJtYWNoaW5lIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMxOiJvbmUtYXJtIGR1bWJiZWxsIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czoyNzoiY2FibGUgcm9wZSB0cmljZXAgcHVzaGRvd25zIjtpOjI7czowOiIiO2k6MztzOjA6IiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJCaWNlcHMiO2k6MTtzOjMxOiJiYXJiZWxsIG9yIGR1bWJiZWxsIGJpY2VwIGN1cmxzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czozNzoiZHVtYmJlbGwgb3IgbWFjaGluZSB0cmljZXAgZXh0ZW5zaW9ucyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjE0OiJsYXRlcmFsIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJDYWx2ZXMiO2k6MTtzOjIwOiJzdGFuZGluZyBjYWxmIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czozOiJBYnMiO2k6MTtzOjE2OiJkZWNsaW5lIGNydW5jaGVzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9'),
(11, 4, 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czoxOToiYmFyYmVsbCBiYWNrIHNxdWF0cyI7aToyO3M6MToiNSI7aTozO3M6MToiNSI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czoxNToiQmFjay9oYW1zdHJpbmdzIjtpOjE7czoyOToiYmFyYmVsbCBvciB0cmFwIGJhciBkZWFkbGlmdHMiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czo5OiJsZWcgcHJlc3MiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MjQ6ImZsYXQgYmFyYmVsbCBiZW5jaCBwcmVzcyI7aToyO3M6MDoiIjtpOjM7czowOiIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoyNDoicHVsbHVwcyBvciBsYXQgcHVsbGRvd25zIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxMDoiVC1iYXIgcm93cyI7aToyO3M6MToiMyI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxNzoic2VhdGVkIGNhYmxlIHJvd3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MzM6ImJhcmJlbGwgb3IgZHVtYmJlbGwgaW5jbGluZSBwcmVzcyI7aToyO3M6MToiNCI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6Mjk6Im1hY2hpbmUgb3IgZHVtYmJlbGwgY2hlc3QgZmx5IjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMwOiJzZWF0ZWQgZHVtYmJlbGwgc2hvdWxkZXIgcHJlc3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjIyOiJtYWNoaW5lIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMxOiJvbmUtYXJtIGR1bWJiZWxsIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czoyNzoiY2FibGUgcm9wZSB0cmljZXAgcHVzaGRvd25zIjtpOjI7czowOiIiO2k6MztzOjA6IiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJCaWNlcHMiO2k6MTtzOjMxOiJiYXJiZWxsIG9yIGR1bWJiZWxsIGJpY2VwIGN1cmxzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czozNzoiZHVtYmJlbGwgb3IgbWFjaGluZSB0cmljZXAgZXh0ZW5zaW9ucyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjE0OiJsYXRlcmFsIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJDYWx2ZXMiO2k6MTtzOjIwOiJzdGFuZGluZyBjYWxmIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czozOiJBYnMiO2k6MTtzOjE2OiJkZWNsaW5lIGNydW5jaGVzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9'),
(12, 5, 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czoxOToiYmFyYmVsbCBiYWNrIHNxdWF0cyI7aToyO3M6MToiNSI7aTozO3M6MToiNSI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czoxNToiQmFjay9oYW1zdHJpbmdzIjtpOjE7czoyOToiYmFyYmVsbCBvciB0cmFwIGJhciBkZWFkbGlmdHMiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czo5OiJsZWcgcHJlc3MiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MjQ6ImZsYXQgYmFyYmVsbCBiZW5jaCBwcmVzcyI7aToyO3M6MDoiIjtpOjM7czowOiIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoyNDoicHVsbHVwcyBvciBsYXQgcHVsbGRvd25zIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxMDoiVC1iYXIgcm93cyI7aToyO3M6MToiMyI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxNzoic2VhdGVkIGNhYmxlIHJvd3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MzM6ImJhcmJlbGwgb3IgZHVtYmJlbGwgaW5jbGluZSBwcmVzcyI7aToyO3M6MToiNCI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6Mjk6Im1hY2hpbmUgb3IgZHVtYmJlbGwgY2hlc3QgZmx5IjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMwOiJzZWF0ZWQgZHVtYmJlbGwgc2hvdWxkZXIgcHJlc3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjIyOiJtYWNoaW5lIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMxOiJvbmUtYXJtIGR1bWJiZWxsIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czoyNzoiY2FibGUgcm9wZSB0cmljZXAgcHVzaGRvd25zIjtpOjI7czowOiIiO2k6MztzOjA6IiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJCaWNlcHMiO2k6MTtzOjMxOiJiYXJiZWxsIG9yIGR1bWJiZWxsIGJpY2VwIGN1cmxzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czozNzoiZHVtYmJlbGwgb3IgbWFjaGluZSB0cmljZXAgZXh0ZW5zaW9ucyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjE0OiJsYXRlcmFsIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJDYWx2ZXMiO2k6MTtzOjIwOiJzdGFuZGluZyBjYWxmIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czozOiJBYnMiO2k6MTtzOjE2OiJkZWNsaW5lIGNydW5jaGVzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9'),
(13, 6, 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czoxOToiYmFyYmVsbCBiYWNrIHNxdWF0cyI7aToyO3M6MToiNSI7aTozO3M6MToiNSI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czoxNToiQmFjay9oYW1zdHJpbmdzIjtpOjE7czoyOToiYmFyYmVsbCBvciB0cmFwIGJhciBkZWFkbGlmdHMiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czo5OiJsZWcgcHJlc3MiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MjQ6ImZsYXQgYmFyYmVsbCBiZW5jaCBwcmVzcyI7aToyO3M6MDoiIjtpOjM7czowOiIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoyNDoicHVsbHVwcyBvciBsYXQgcHVsbGRvd25zIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxMDoiVC1iYXIgcm93cyI7aToyO3M6MToiMyI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxNzoic2VhdGVkIGNhYmxlIHJvd3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MzM6ImJhcmJlbGwgb3IgZHVtYmJlbGwgaW5jbGluZSBwcmVzcyI7aToyO3M6MToiNCI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6Mjk6Im1hY2hpbmUgb3IgZHVtYmJlbGwgY2hlc3QgZmx5IjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMwOiJzZWF0ZWQgZHVtYmJlbGwgc2hvdWxkZXIgcHJlc3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjIyOiJtYWNoaW5lIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMxOiJvbmUtYXJtIGR1bWJiZWxsIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czoyNzoiY2FibGUgcm9wZSB0cmljZXAgcHVzaGRvd25zIjtpOjI7czowOiIiO2k6MztzOjA6IiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJCaWNlcHMiO2k6MTtzOjMxOiJiYXJiZWxsIG9yIGR1bWJiZWxsIGJpY2VwIGN1cmxzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czozNzoiZHVtYmJlbGwgb3IgbWFjaGluZSB0cmljZXAgZXh0ZW5zaW9ucyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjE0OiJsYXRlcmFsIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJDYWx2ZXMiO2k6MTtzOjIwOiJzdGFuZGluZyBjYWxmIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czozOiJBYnMiO2k6MTtzOjE2OiJkZWNsaW5lIGNydW5jaGVzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9'),
(14, 52, 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czoxOToiYmFyYmVsbCBiYWNrIHNxdWF0cyI7aToyO3M6MjoiMTAiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czoxNToiQmFjay9oYW1zdHJpbmdzIjtpOjE7czoyOToiYmFyYmVsbCBvciB0cmFwIGJhciBkZWFkbGlmdHMiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', NULL, 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czo5OiJsZWcgcHJlc3MiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MjQ6ImZsYXQgYmFyYmVsbCBiZW5jaCBwcmVzcyI7aToyO3M6MDoiIjtpOjM7czowOiIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoyNDoicHVsbHVwcyBvciBsYXQgcHVsbGRvd25zIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', NULL, 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxMDoiVC1iYXIgcm93cyI7aToyO3M6MToiMyI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxNzoic2VhdGVkIGNhYmxlIHJvd3MiO2k6MjtzOjE6IjMiO2k6MztzOjE6IjQiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MzM6ImJhcmJlbGwgb3IgZHVtYmJlbGwgaW5jbGluZSBwcmVzcyI7aToyO3M6MToiNCI7aTozO3M6MToiOCI7fQ==', NULL, 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6Mjk6Im1hY2hpbmUgb3IgZHVtYmJlbGwgY2hlc3QgZmx5IjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMwOiJzZWF0ZWQgZHVtYmJlbGwgc2hvdWxkZXIgcHJlc3MiO2k6MjtzOjE6IjMiO2k6MztzOjE6IjciO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjIyOiJtYWNoaW5lIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', NULL, 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMxOiJvbmUtYXJtIGR1bWJiZWxsIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czoyNzoiY2FibGUgcm9wZSB0cmljZXAgcHVzaGRvd25zIjtpOjI7czoxOiI1IjtpOjM7czoxOiI2Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJCaWNlcHMiO2k6MTtzOjMxOiJiYXJiZWxsIG9yIGR1bWJiZWxsIGJpY2VwIGN1cmxzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMCI7fQ==', NULL, 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czozNzoiZHVtYmJlbGwgb3IgbWFjaGluZSB0cmljZXAgZXh0ZW5zaW9ucyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjE0OiJsYXRlcmFsIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJDYWx2ZXMiO2k6MTtzOjIwOiJzdGFuZGluZyBjYWxmIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', NULL, 'YTo0OntpOjA7czozOiJBYnMiO2k6MTtzOjE2OiJkZWNsaW5lIGNydW5jaGVzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9'),
(15, 53, 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czoxOToiYmFyYmVsbCBiYWNrIHNxdWF0cyI7aToyO3M6MToiNSI7aTozO3M6MToiNSI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czoxNToiQmFjay9oYW1zdHJpbmdzIjtpOjE7czoyOToiYmFyYmVsbCBvciB0cmFwIGJhciBkZWFkbGlmdHMiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czo5OiJsZWcgcHJlc3MiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MjQ6ImZsYXQgYmFyYmVsbCBiZW5jaCBwcmVzcyI7aToyO3M6MDoiIjtpOjM7czowOiIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoyNDoicHVsbHVwcyBvciBsYXQgcHVsbGRvd25zIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxMDoiVC1iYXIgcm93cyI7aToyO3M6MToiMyI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxNzoic2VhdGVkIGNhYmxlIHJvd3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MzM6ImJhcmJlbGwgb3IgZHVtYmJlbGwgaW5jbGluZSBwcmVzcyI7aToyO3M6MToiNCI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6Mjk6Im1hY2hpbmUgb3IgZHVtYmJlbGwgY2hlc3QgZmx5IjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMwOiJzZWF0ZWQgZHVtYmJlbGwgc2hvdWxkZXIgcHJlc3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjIyOiJtYWNoaW5lIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMxOiJvbmUtYXJtIGR1bWJiZWxsIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czoyNzoiY2FibGUgcm9wZSB0cmljZXAgcHVzaGRvd25zIjtpOjI7czowOiIiO2k6MztzOjA6IiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJCaWNlcHMiO2k6MTtzOjMxOiJiYXJiZWxsIG9yIGR1bWJiZWxsIGJpY2VwIGN1cmxzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czozNzoiZHVtYmJlbGwgb3IgbWFjaGluZSB0cmljZXAgZXh0ZW5zaW9ucyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjE0OiJsYXRlcmFsIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJDYWx2ZXMiO2k6MTtzOjIwOiJzdGFuZGluZyBjYWxmIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czozOiJBYnMiO2k6MTtzOjE2OiJkZWNsaW5lIGNydW5jaGVzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9'),
(16, 54, 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czoxOToiYmFyYmVsbCBiYWNrIHNxdWF0cyI7aToyO3M6MToiNSI7aTozO3M6MToiNSI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czoxNToiQmFjay9oYW1zdHJpbmdzIjtpOjE7czoyOToiYmFyYmVsbCBvciB0cmFwIGJhciBkZWFkbGlmdHMiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czo5OiJsZWcgcHJlc3MiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MjQ6ImZsYXQgYmFyYmVsbCBiZW5jaCBwcmVzcyI7aToyO3M6MDoiIjtpOjM7czowOiIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoyNDoicHVsbHVwcyBvciBsYXQgcHVsbGRvd25zIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxMDoiVC1iYXIgcm93cyI7aToyO3M6MToiMyI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxNzoic2VhdGVkIGNhYmxlIHJvd3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MzM6ImJhcmJlbGwgb3IgZHVtYmJlbGwgaW5jbGluZSBwcmVzcyI7aToyO3M6MToiNCI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6Mjk6Im1hY2hpbmUgb3IgZHVtYmJlbGwgY2hlc3QgZmx5IjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMwOiJzZWF0ZWQgZHVtYmJlbGwgc2hvdWxkZXIgcHJlc3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjIyOiJtYWNoaW5lIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMxOiJvbmUtYXJtIGR1bWJiZWxsIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czoyNzoiY2FibGUgcm9wZSB0cmljZXAgcHVzaGRvd25zIjtpOjI7czowOiIiO2k6MztzOjA6IiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJCaWNlcHMiO2k6MTtzOjMxOiJiYXJiZWxsIG9yIGR1bWJiZWxsIGJpY2VwIGN1cmxzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czozNzoiZHVtYmJlbGwgb3IgbWFjaGluZSB0cmljZXAgZXh0ZW5zaW9ucyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjE0OiJsYXRlcmFsIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJDYWx2ZXMiO2k6MTtzOjIwOiJzdGFuZGluZyBjYWxmIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czozOiJBYnMiO2k6MTtzOjE2OiJkZWNsaW5lIGNydW5jaGVzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9'),
(17, 55, 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czoxOToiYmFyYmVsbCBiYWNrIHNxdWF0cyI7aToyO3M6MToiNSI7aTozO3M6MToiNSI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czoxNToiQmFjay9oYW1zdHJpbmdzIjtpOjE7czoyOToiYmFyYmVsbCBvciB0cmFwIGJhciBkZWFkbGlmdHMiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czo5OiJsZWcgcHJlc3MiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MjQ6ImZsYXQgYmFyYmVsbCBiZW5jaCBwcmVzcyI7aToyO3M6MDoiIjtpOjM7czowOiIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoyNDoicHVsbHVwcyBvciBsYXQgcHVsbGRvd25zIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxMDoiVC1iYXIgcm93cyI7aToyO3M6MToiMyI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxNzoic2VhdGVkIGNhYmxlIHJvd3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MzM6ImJhcmJlbGwgb3IgZHVtYmJlbGwgaW5jbGluZSBwcmVzcyI7aToyO3M6MToiNCI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6Mjk6Im1hY2hpbmUgb3IgZHVtYmJlbGwgY2hlc3QgZmx5IjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMwOiJzZWF0ZWQgZHVtYmJlbGwgc2hvdWxkZXIgcHJlc3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjIyOiJtYWNoaW5lIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMxOiJvbmUtYXJtIGR1bWJiZWxsIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czoyNzoiY2FibGUgcm9wZSB0cmljZXAgcHVzaGRvd25zIjtpOjI7czowOiIiO2k6MztzOjA6IiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJCaWNlcHMiO2k6MTtzOjMxOiJiYXJiZWxsIG9yIGR1bWJiZWxsIGJpY2VwIGN1cmxzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czozNzoiZHVtYmJlbGwgb3IgbWFjaGluZSB0cmljZXAgZXh0ZW5zaW9ucyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjE0OiJsYXRlcmFsIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJDYWx2ZXMiO2k6MTtzOjIwOiJzdGFuZGluZyBjYWxmIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czozOiJBYnMiO2k6MTtzOjE2OiJkZWNsaW5lIGNydW5jaGVzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9'),
(19, 57, 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czoxOToiYmFyYmVsbCBiYWNrIHNxdWF0cyI7aToyO3M6MToiNSI7aTozO3M6MToiNSI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czoxNToiQmFjay9oYW1zdHJpbmdzIjtpOjE7czoyOToiYmFyYmVsbCBvciB0cmFwIGJhciBkZWFkbGlmdHMiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czo5OiJsZWcgcHJlc3MiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MjQ6ImZsYXQgYmFyYmVsbCBiZW5jaCBwcmVzcyI7aToyO3M6MDoiIjtpOjM7czowOiIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoyNDoicHVsbHVwcyBvciBsYXQgcHVsbGRvd25zIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxMDoiVC1iYXIgcm93cyI7aToyO3M6MToiMyI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxNzoic2VhdGVkIGNhYmxlIHJvd3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MzM6ImJhcmJlbGwgb3IgZHVtYmJlbGwgaW5jbGluZSBwcmVzcyI7aToyO3M6MToiNCI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6Mjk6Im1hY2hpbmUgb3IgZHVtYmJlbGwgY2hlc3QgZmx5IjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMwOiJzZWF0ZWQgZHVtYmJlbGwgc2hvdWxkZXIgcHJlc3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjIyOiJtYWNoaW5lIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMxOiJvbmUtYXJtIGR1bWJiZWxsIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czoyNzoiY2FibGUgcm9wZSB0cmljZXAgcHVzaGRvd25zIjtpOjI7czowOiIiO2k6MztzOjA6IiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJCaWNlcHMiO2k6MTtzOjMxOiJiYXJiZWxsIG9yIGR1bWJiZWxsIGJpY2VwIGN1cmxzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czozNzoiZHVtYmJlbGwgb3IgbWFjaGluZSB0cmljZXAgZXh0ZW5zaW9ucyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjE0OiJsYXRlcmFsIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJDYWx2ZXMiO2k6MTtzOjIwOiJzdGFuZGluZyBjYWxmIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czozOiJBYnMiO2k6MTtzOjE2OiJkZWNsaW5lIGNydW5jaGVzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9'),
(20, 58, 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czoxOToiYmFyYmVsbCBiYWNrIHNxdWF0cyI7aToyO3M6MToiNSI7aTozO3M6MToiNSI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czoxNToiQmFjay9oYW1zdHJpbmdzIjtpOjE7czoyOToiYmFyYmVsbCBvciB0cmFwIGJhciBkZWFkbGlmdHMiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czo5OiJsZWcgcHJlc3MiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MjQ6ImZsYXQgYmFyYmVsbCBiZW5jaCBwcmVzcyI7aToyO3M6MDoiIjtpOjM7czowOiIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoyNDoicHVsbHVwcyBvciBsYXQgcHVsbGRvd25zIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxMDoiVC1iYXIgcm93cyI7aToyO3M6MToiMyI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxNzoic2VhdGVkIGNhYmxlIHJvd3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MzM6ImJhcmJlbGwgb3IgZHVtYmJlbGwgaW5jbGluZSBwcmVzcyI7aToyO3M6MToiNCI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6Mjk6Im1hY2hpbmUgb3IgZHVtYmJlbGwgY2hlc3QgZmx5IjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMwOiJzZWF0ZWQgZHVtYmJlbGwgc2hvdWxkZXIgcHJlc3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjIyOiJtYWNoaW5lIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMxOiJvbmUtYXJtIGR1bWJiZWxsIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czoyNzoiY2FibGUgcm9wZSB0cmljZXAgcHVzaGRvd25zIjtpOjI7czowOiIiO2k6MztzOjA6IiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJCaWNlcHMiO2k6MTtzOjMxOiJiYXJiZWxsIG9yIGR1bWJiZWxsIGJpY2VwIGN1cmxzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czozNzoiZHVtYmJlbGwgb3IgbWFjaGluZSB0cmljZXAgZXh0ZW5zaW9ucyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjE0OiJsYXRlcmFsIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJDYWx2ZXMiO2k6MTtzOjIwOiJzdGFuZGluZyBjYWxmIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czozOiJBYnMiO2k6MTtzOjE2OiJkZWNsaW5lIGNydW5jaGVzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9'),
(22, 60, 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czoxOToiYmFyYmVsbCBiYWNrIHNxdWF0cyI7aToyO3M6MToiNSI7aTozO3M6MToiNSI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czoxNToiQmFjay9oYW1zdHJpbmdzIjtpOjE7czoyOToiYmFyYmVsbCBvciB0cmFwIGJhciBkZWFkbGlmdHMiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czo5OiJsZWcgcHJlc3MiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MjQ6ImZsYXQgYmFyYmVsbCBiZW5jaCBwcmVzcyI7aToyO3M6MDoiIjtpOjM7czowOiIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoyNDoicHVsbHVwcyBvciBsYXQgcHVsbGRvd25zIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxMDoiVC1iYXIgcm93cyI7aToyO3M6MToiMyI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxNzoic2VhdGVkIGNhYmxlIHJvd3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MzM6ImJhcmJlbGwgb3IgZHVtYmJlbGwgaW5jbGluZSBwcmVzcyI7aToyO3M6MToiNCI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6Mjk6Im1hY2hpbmUgb3IgZHVtYmJlbGwgY2hlc3QgZmx5IjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMwOiJzZWF0ZWQgZHVtYmJlbGwgc2hvdWxkZXIgcHJlc3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjIyOiJtYWNoaW5lIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMxOiJvbmUtYXJtIGR1bWJiZWxsIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czoyNzoiY2FibGUgcm9wZSB0cmljZXAgcHVzaGRvd25zIjtpOjI7czowOiIiO2k6MztzOjA6IiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJCaWNlcHMiO2k6MTtzOjMxOiJiYXJiZWxsIG9yIGR1bWJiZWxsIGJpY2VwIGN1cmxzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czozNzoiZHVtYmJlbGwgb3IgbWFjaGluZSB0cmljZXAgZXh0ZW5zaW9ucyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjE0OiJsYXRlcmFsIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJDYWx2ZXMiO2k6MTtzOjIwOiJzdGFuZGluZyBjYWxmIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czozOiJBYnMiO2k6MTtzOjE2OiJkZWNsaW5lIGNydW5jaGVzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9'),
(23, 61, 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czoxOToiYmFyYmVsbCBiYWNrIHNxdWF0cyI7aToyO3M6MToiNSI7aTozO3M6MToiNSI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czoxNToiQmFjay9oYW1zdHJpbmdzIjtpOjE7czoyOToiYmFyYmVsbCBvciB0cmFwIGJhciBkZWFkbGlmdHMiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czo5OiJsZWcgcHJlc3MiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MjQ6ImZsYXQgYmFyYmVsbCBiZW5jaCBwcmVzcyI7aToyO3M6MDoiIjtpOjM7czowOiIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoyNDoicHVsbHVwcyBvciBsYXQgcHVsbGRvd25zIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxMDoiVC1iYXIgcm93cyI7aToyO3M6MToiMyI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxNzoic2VhdGVkIGNhYmxlIHJvd3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MzM6ImJhcmJlbGwgb3IgZHVtYmJlbGwgaW5jbGluZSBwcmVzcyI7aToyO3M6MToiNCI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6Mjk6Im1hY2hpbmUgb3IgZHVtYmJlbGwgY2hlc3QgZmx5IjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMwOiJzZWF0ZWQgZHVtYmJlbGwgc2hvdWxkZXIgcHJlc3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjIyOiJtYWNoaW5lIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMxOiJvbmUtYXJtIGR1bWJiZWxsIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czoyNzoiY2FibGUgcm9wZSB0cmljZXAgcHVzaGRvd25zIjtpOjI7czowOiIiO2k6MztzOjA6IiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJCaWNlcHMiO2k6MTtzOjMxOiJiYXJiZWxsIG9yIGR1bWJiZWxsIGJpY2VwIGN1cmxzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czozNzoiZHVtYmJlbGwgb3IgbWFjaGluZSB0cmljZXAgZXh0ZW5zaW9ucyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjE0OiJsYXRlcmFsIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTIiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo2OiJDYWx2ZXMiO2k6MTtzOjIwOiJzdGFuZGluZyBjYWxmIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czozOiJBYnMiO2k6MTtzOjE2OiJkZWNsaW5lIGNydW5jaGVzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9'),
(25, 63, 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czoxOToiYmFyYmVsbCBiYWNrIHNxdWF0cyI7aToyO3M6MToiNSI7aTozO3M6MToiNSI7fQ==', NULL, 'YTo0OntpOjA7czoxNToiQmFjay9oYW1zdHJpbmdzIjtpOjE7czoyOToiYmFyYmVsbCBvciB0cmFwIGJhciBkZWFkbGlmdHMiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJMZWdzIjtpOjE7czo5OiJsZWcgcHJlc3MiO2k6MjtzOjE6IjUiO2k6MztzOjE6IjUiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MjQ6ImZsYXQgYmFyYmVsbCBiZW5jaCBwcmVzcyI7aToyO3M6MDoiIjtpOjM7czowOiIiO30=', NULL, 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoyNDoicHVsbHVwcyBvciBsYXQgcHVsbGRvd25zIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxMDoiVC1iYXIgcm93cyI7aToyO3M6MToiMyI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo0OiJCYWNrIjtpOjE7czoxNzoic2VhdGVkIGNhYmxlIHJvd3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', NULL, 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6MzM6ImJhcmJlbGwgb3IgZHVtYmJlbGwgaW5jbGluZSBwcmVzcyI7aToyO3M6MToiNCI7aTozO3M6MToiOCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo1OiJDaGVzdCI7aToxO3M6Mjk6Im1hY2hpbmUgb3IgZHVtYmJlbGwgY2hlc3QgZmx5IjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMwOiJzZWF0ZWQgZHVtYmJlbGwgc2hvdWxkZXIgcHJlc3MiO2k6MjtzOjA6IiI7aTozO3M6MDoiIjt9', NULL, 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjIyOiJtYWNoaW5lIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiI0IjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjMxOiJvbmUtYXJtIGR1bWJiZWxsIHNob3VsZGVyIHByZXNzIjtpOjI7czoxOiIzIjtpOjM7czoxOiI4Ijt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czoyNzoiY2FibGUgcm9wZSB0cmljZXAgcHVzaGRvd25zIjtpOjI7czowOiIiO2k6MztzOjA6IiI7fQ==', NULL, 'YTo0OntpOjA7czo2OiJCaWNlcHMiO2k6MTtzOjMxOiJiYXJiZWxsIG9yIGR1bWJiZWxsIGJpY2VwIGN1cmxzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMCI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo3OiJUcmljZXBzIjtpOjE7czozNzoiZHVtYmJlbGwgb3IgbWFjaGluZSB0cmljZXAgZXh0ZW5zaW9ucyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czo5OiJTaG91bGRlcnMiO2k6MTtzOjE0OiJsYXRlcmFsIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTIiO30=', NULL, 'YTo0OntpOjA7czo2OiJDYWx2ZXMiO2k6MTtzOjIwOiJzdGFuZGluZyBjYWxmIHJhaXNlcyI7aToyO3M6MToiMyI7aTozO3M6MjoiMTAiO30=', 'YToxOntpOjA7czoxOiIwIjt9', 'YTo0OntpOjA7czozOiJBYnMiO2k6MTtzOjE2OiJkZWNsaW5lIGNydW5jaGVzIjtpOjI7czoxOiIzIjtpOjM7czoyOiIxMiI7fQ==', 'YToxOntpOjA7czoxOiIwIjt9');

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
  `image` text NOT NULL DEFAULT 'default.jpg',
  `cover_image` text NOT NULL DEFAULT 'default_cover.jpg',
  `joined_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`trainer_id`, `f_name`, `l_name`, `address`, `phone_no`, `dob`, `gender`, `qualifications`, `about`, `rate`, `assigned_members`, `username`, `image`, `cover_image`, `joined_date`) VALUES
(1, 'Thusitha', 'Kakulawala', 'No.118, Walwwaththa, Mirigama', 798541132, '1990-03-07', 'male', 'NCSF-Accredited personal trainer , \r\n\r\nAdditional expertise in youth athletic conditioning, with focuses on strength training , \r\n\r\nStrong interpersonal communication skills , \r\n\r\nExcellent leadership skills\r\n', '10+ years of experience as a Personal Trainer. I am enthusiastic about instructing groups and individuals on exercise activities and the fundamentals of sports by demonstrating proper techniques and methods of participation. I enjoy teaching group fitness classes to people of all ages and encouraging safe use of exercise equipment to promote individual fitness goals.', 5000, 4, 'thusitha', 'thusitha.jpg', 'default_cover.jpg', '2018-09-23 10:32:33'),
(2, 'Isuru', 'Fonseka', 'No.44, Raja Mawatha, Mirigama', 795471422, '1995-03-13', 'male', '2004-2005 ACE Certified Group Fitness , Instructor 2000-2004 Manhattan College, B.S. in Nutrition and Food Science NY,\r\nExcellent Teaching Skills ,\r\nKnowledge of Nutrition and Food Science', '5+ years of experience as a Personal Trainer. I have a diverse history in customer service ranging all the way from retail to personal training. My capabilities to build strong interpersonal relationships with various clients makes me an ideal candidate in the workforce. My biggest motivator is my passion for helping others and I believe strongly that small acts of kindness can make a big difference.', 4500, -2, 'isuru', 'isuru.jpg', 'default_cover.jpg', '2019-09-23 12:32:33'),
(3, 'Dinuka', 'Perera', 'No. 1/12, Helay Road, Giriulla', 795964477, '2021-08-17', 'male', 'CrossFit L2 Head Coach, Programmer & Co-Owner , \r\n\r\nNCCA Accredited Programs: Certified Personal\r\nTrainer (CPT) , \r\n\r\nPatience , \r\n\r\nAbility to measure training effects over time , \r\n\r\nAbility to monitor progress toward goals\r\nand adapt/adjust program\r\n', '7+ years of experience as a Personal Trainer. Looking to obtain a lifelong career with a major Directional drilling company. I look forward to becoming a great career employee, as well as a team leader. Promoting the benefits of a good team, hard work, and working in a safe environment.', 7500, 5, 'dinuka', 'dinuka.jpg', 'default_cover.jpg', '2019-09-23 12:32:33'),
(4, 'Hasitha', 'Raymond', 'No. 112, Pasyala ,Mirigama', 794589913, '1995-04-24', 'male', 'NCCA Accredited Programs: Certified Personal\r\nTrainer (CPT) , \r\n\r\nPassion and determination , \r\n\r\nKnowledge of the industry , \r\n\r\nFriendly personality , \r\n\r\nOpen minded\r\n', 'Articulate Personal Trainer with 10+ years of experience and Spin certified driven to succeed. Strategic planning and client relationship expert. Seeking to obtain a challenging and rewarding position utilizing my talents and abilities.', 6000, 5, 'hasitha', 'hasitha.jpg', 'default_cover.jpg', '2020-09-23 12:32:33'),
(5, 'Gia', 'Kodithuwakku', 'No.77, Vijayarajadahana, Mirigama', 799562243, '1995-03-07', 'female', 'NCSF-Accredited personal trainer , \r\n\r\nAdditional expertise in youth athletic conditioning, with focuses on strength training , \r\n\r\nStrong interpersonal communication skills', 'One year of experience as a Personal Trainer. Creative, resourceful and flexible, able to adapt to changing priorities and maintain a positive attitude and strong work ethic strong meeting planning and facilitation skills.', 5000, 19, 'gia', 'gia.jpg', 'default_cover.jpg', '2020-09-23 12:32:33'),
(6, 'Nipuni', 'Perera', 'No.78, Godakawela, Mirigama', 795395546, '1993-08-01', 'female', '2004-2005 ACE Certified Group Fitness , Instructor 2000-2004 Manhattan College, B.S. in Nutrition and Food Science NY,\r\nExcellent Teaching Skills', '6 years of experience as a Personal Trainer. Dependable, determined and motivated to achieve. I am very much looking to secure a position within your company. I will be an asset in numerous ways with my strong communication skills, efficient learning capabilities and the strong goal to grow and succeed within the firm. I live with the personal objective to improve myself and to do the tasks or jobs that I encounter to the best of my ability.', 4500, 5, 'nipuni', 'nipuni.jpg', 'default_cover.jpg', '2021-02-08 12:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `trainer_payables`
--

CREATE TABLE `trainer_payables` (
  `tr_pay_id` int(10) NOT NULL,
  `trainer_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trainer_receviables`
--

CREATE TABLE `trainer_receviables` (
  `tr_rece_id` int(10) NOT NULL,
  `trainer_id` int(10) NOT NULL,
  `assignment_count` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer_receviables`
--

INSERT INTO `trainer_receviables` (`tr_rece_id`, `trainer_id`, `assignment_count`) VALUES
(1, 1, 3),
(3, 2, 3),
(4, 3, 3),
(5, 4, 3),
(6, 5, 3),
(7, 6, 3);

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
('$2y$10$W/.toeeLO6CwoRr9vDtej.rT//dEQoKIzv0Xh81xj0GezdqEFlFBS', '', '', 'member'),
('$2y$10$hgQWK9O3UcwlVt8QX67nVezADoC3rAy7NE29PyC7H2SuPKpyH3KV2', 'accountant1', 'duminda1995@gmail.com', 'accountant'),
('$2y$10$hgQWK9O3UcwlVt8QX67nVezADoC3rAy7NE29PyC7H2SuPKpyH3KV2', 'admin', 'bkdeveloping@gmail.com', 'admin'),
('$2y$10$jIFrltKMELsEcotj/NGBruNGeEW218vy37mwCRiTZ63vFC.WJopP6', 'amila123', 'kulasekarakmbs@gmail.com', 'member'),
('$2y$10$hgQWK9O3UcwlVt8QX67nVezADoC3rAy7NE29PyC7H2SuPKpyH3KV2', 'dinuka', 'dinukahello12@gmail.com', 'trainer'),
('$2y$10$o4cqIOzqg.SACRVRl3ZaOeajV0PHVsLN6rMbfN1POr3oj71x1kQ0C', 'duminda', 'dkemail@gmail.com', 'member'),
('$2y$10$Or/NRTB9lDYHnieIEmIJ7O.rqc7/Mz/b.VozFIDTrWvT5a.rGCwNG', 'fbfdhh', 'kulasekarakmbs@gmail.com', 'member'),
('$2y$10$7rXCsKJMsKUnF6fb1zBjwu29GLrqy/LvaCjAnYwMcv00vcePuF4N.', 'fdbfdg', 'bkdeveloping@gmail.com', 'member'),
('$2y$10$DYUziFlf.U3xxrnDktRjbOjQef45SeAgvtTkeseXmi.K7Mjnup3Fq', 'gia', 'iamgia99@gmail.com', 'trainer'),
('$2y$10$X3G0YLBOiND6YmoyIY0OaOekscb0xKNuQ2kQ6ORYmxX/SA2/SQisy', 'hasitha', 'callmehastiha@gmail.com', 'trainer'),
('$2y$10$Mbeg.AXePE1fyJFzSf6lPea7HeLNmW698ZgZUi5/8uc2Kx5yc8jXG', 'herath', 'herath1998@gmail.com', 'member'),
('$2y$10$Y/4mPOiM0kBq4FF.ENRqRuRPu5JvpSDYKb.RSR4O.O9SXMSLQ2e9a', 'heshan20', 'pamodhamahagamage@gmail.com', 'member'),
('$2y$10$dDtYsQcHK8tORw9mw0yH4eSgyuhGqmthIIXRFnCcF28K3usXyIYAO', 'heshan21', 'pamodhamahagamage@gmail.com', 'member'),
('$2y$10$aRWjtaOcCjx5fKJdbZao2Oewz03DWsmzOliJHJrZkkM0NrclkSOB.', 'hiran', 'hkran34@gmail.com', 'member'),
('$2y$10$lwSP/rBUDcFXPwq2xF8vKeG9eFVvfrEC3bnxWnsjJMTY23ItYr3wS', 'hiranya', 'iamhiranya156@gmail.com', 'memebr'),
('$2y$10$hgQWK9O3UcwlVt8QX67nVezADoC3rAy7NE29PyC7H2SuPKpyH3KV2', 'isuru', 'isuru66@gmail.com', 'trainer'),
('$2y$10$2C74ztHo6IyQlNtKavgC5u0.ZgQaTkQvF5Ilya61xSdql9IFSvttu', 'nipuni', 'nipugirl@gmail.com', 'trainer'),
('$2y$10$u21QDrYN29wmWouNJ5uUD.yOi29kRuS3RPorQ66MXBve2kQIcK/32', 'Nuwan123', 'kulasekarakmbs@gmail.com', 'member'),
('$2y$10$hgQWK9O3UcwlVt8QX67nVezADoC3rAy7NE29PyC7H2SuPKpyH3KV2', 'pamodha98', 'pamodhamahagamage98@gmail.com', 'member'),
('$2y$10$T.icwJ7z1j5bdZiUbJRZHOj564c4ZKbiKeDPDO6zr6V/AvLScrUc.', 'pamodhaDD', 'pamodhamahagamage98@gmail.com', 'member'),
('$2y$10$sIeEHiBGUXUwIljj.7nliuJhB2m.o54DjiRcBC/p39lsCLFtO.sLi', 'pamodhaDD2', 'pamodhamahagamage98@gmail.com', 'member'),
('$2y$10$lRzQPLU/MM09PTIkFUBRZO94RnHSInetT2GZphTrSudZ7LyeyCk.C', 'pamodhaDD34', 'pamodhamahagamage98@gmail.com', 'member'),
('$2y$10$HENY3lVfPp7Gnsf1hZlSFu83gDZ1eZPxZAeAnLEUFLoc0kl.fzd0W', 'pamodhak', 'pamodhamahagamage98@gmail.com', 'member'),
('$2y$10$VnjQnRk0329JydF9oIrokOK63Uy7Uufjcs.f2ItASL7S/IWSGz33u', 'pamodhas', 'pamodhamahagamage98@gmail.com', 'member'),
('$2y$10$PPsIUMyHVCO1uvBwHoFy1uGtLVd7XIjx3tJhdyjPkAxFdRf4j6qV2', 'pamodhass', 'pamodhamahagamage98@gmail.com', 'member'),
('$2y$10$hnBgdUx1ZAFGTpMCQydyrOtzL6GC5PEoHVNhvkgOUFfYNw5WfEsvu', 'sdfdsfgdg', 'kulasekarakmbs@gmail.com', 'member'),
('$2y$10$Y/4mPOiM0kBq4FF.ENRqRuRPu5JvpSDYKb.RSR4O.O9SXMSLQ2e9a', 'thusitha', 'thusitha@gmail.com', 'trainer'),
('$2y$10$BOM2w1m6TYjRk3hHA4wpUOLyGP9U3UNUaVgv/lbLNQUBJd6GWlLq6', 'udaya', 'udaya678@gmail.com', 'member'),
('$2y$10$L5BhcTOjPknn9xsE6D8Pf.aGRrNfXj5i7yK/5uvcp/gZa0SWdzqYO', 'umashi', 'uma@gmail.com', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1m_package_progress`
--
ALTER TABLE `1m_package_progress`
  ADD PRIMARY KEY (`package_id`),
  ADD UNIQUE KEY `member_id` (`member_id`);

--
-- Indexes for table `3m_package_progress`
--
ALTER TABLE `3m_package_progress`
  ADD PRIMARY KEY (`package_id`),
  ADD UNIQUE KEY `member_id` (`member_id`);

--
-- Indexes for table `6m_package_progress`
--
ALTER TABLE `6m_package_progress`
  ADD PRIMARY KEY (`package_id`),
  ADD UNIQUE KEY `member_id` (`member_id`);

--
-- Indexes for table `12m_package_progress`
--
ALTER TABLE `12m_package_progress`
  ADD PRIMARY KEY (`package_id`),
  ADD UNIQUE KEY `member_id` (`member_id`);

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
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assignment_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `trainer_id` (`trainer_id`);

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `trainer_id` (`trainer_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`spec_id`),
  ADD UNIQUE KEY `muscle` (`muscle`);

--
-- Indexes for table `close_times`
--
ALTER TABLE `close_times`
  ADD PRIMARY KEY (`close_time_id`);

--
-- Indexes for table `extend_membership`
--
ALTER TABLE `extend_membership`
  ADD PRIMARY KEY (`extdpk_id`),
  ADD UNIQUE KEY `member_id` (`member_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`);

--
-- Indexes for table `meal_plan`
--
ALTER TABLE `meal_plan`
  ADD PRIMARY KEY (`mp_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `trainer_id` (`trainer_id`);

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
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sch_id`),
  ADD UNIQUE KEY `member_id` (`member_id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainer_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `trainer_payables`
--
ALTER TABLE `trainer_payables`
  ADD PRIMARY KEY (`tr_pay_id`);

--
-- Indexes for table `trainer_receviables`
--
ALTER TABLE `trainer_receviables`
  ADD PRIMARY KEY (`tr_rece_id`),
  ADD KEY `trainer_id` (`trainer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1m_package_progress`
--
ALTER TABLE `1m_package_progress`
  MODIFY `package_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `3m_package_progress`
--
ALTER TABLE `3m_package_progress`
  MODIFY `package_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `6m_package_progress`
--
ALTER TABLE `6m_package_progress`
  MODIFY `package_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `12m_package_progress`
--
ALTER TABLE `12m_package_progress`
  MODIFY `package_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `accountant`
--
ALTER TABLE `accountant`
  MODIFY `accountant_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `spec_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `close_times`
--
ALTER TABLE `close_times`
  MODIFY `close_time_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `extend_membership`
--
ALTER TABLE `extend_membership`
  MODIFY `extdpk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `meal_plan`
--
ALTER TABLE `meal_plan`
  MODIFY `mp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `membership_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `sch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `trainer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `trainer_payables`
--
ALTER TABLE `trainer_payables`
  MODIFY `tr_pay_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainer_receviables`
--
ALTER TABLE `trainer_receviables`
  MODIFY `tr_rece_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`);

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

--
-- Constraints for table `trainer_receviables`
--
ALTER TABLE `trainer_receviables`
  ADD CONSTRAINT `trainer_receviables_ibfk_1` FOREIGN KEY (`trainer_id`) REFERENCES `trainer` (`trainer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
