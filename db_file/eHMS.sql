-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 03, 2022 at 08:47 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eHMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant`
--

CREATE TABLE `accountant` (
  `accountant_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` int(11) NOT NULL,
  `place_of_birth` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_card` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mother_tongue` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `qualification` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nationality` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `biography` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `facebook` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `twitter` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `google_plus` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accountant`
--

INSERT INTO `accountant` (`accountant_id`, `name`, `gender`, `date_of_birth`, `place_of_birth`, `id_card`, `mother_tongue`, `marital_status`, `religion`, `blood_group`, `qualification`, `nationality`, `biography`, `phone`, `mobile_no`, `email`, `password`, `address`, `state`, `city`, `facebook`, `twitter`, `google_plus`, `linkedin`, `file_name`, `department_id`) VALUES
(1, 'Jibri-Inu Precious', 'Female', 1124042400, 'Edo', 'National ID', 'Edo', 'Single', 'Christian', 'B', 'PhD', 'Nigerian', 'A chartered accountant', '07036855056', '07036855056', 'jibriinuprecious@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'Park Community opposite Government School gate', 'Rivers', 'Bonny Island', 'jibriinu_precious', 'jibriinu_precious', 'jibriinu_precious', 'jibriinu_precious', 'National ID 2.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `phone`, `address`, `password`, `status`) VALUES
(1, 'De_Jagaban', 'delightenyinnaya1@gmail.com', '+2348159712756', 'Pelgreb Street, Bonny Island', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `appointment_code` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `patient_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `diagnose` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_created` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `appointment_code`, `patient_id`, `department_id`, `doctor_id`, `schedule_id`, `diagnose`, `date_created`, `status`) VALUES
(3, '', 6, 1, 5, 8, '&lt;ul&gt;\r\n&lt;li&gt;High fever&lt;/li&gt;\r\n&lt;li&gt;Loss of Appetite&lt;/li&gt;\r\n&lt;li&gt;Vomiting&lt;/li&gt;\r\n&lt;li&gt;Cough and Catarrh&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 1655316000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `assign_bed`
--

CREATE TABLE `assign_bed` (
  `assign_bed_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `bed_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `assign_date` int(11) NOT NULL,
  `discharge_date` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_bed`
--

INSERT INTO `assign_bed` (`assign_bed_id`, `patient_id`, `bed_id`, `department_id`, `assign_date`, `discharge_date`, `status`, `description`) VALUES
(5, 0, 10, 1, 1655488800, 1656093600, 2, 'Situation normalized and Stable');

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

CREATE TABLE `bed` (
  `bed_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bed_size` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bed_price` int(11) NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bed_ward_id` int(11) NOT NULL,
  `department_id` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`bed_id`, `name`, `bed_size`, `bed_price`, `description`, `bed_ward_id`, `department_id`, `status`) VALUES
(9, 'Executive emergency bed', '4x4', 5000, 'Executive Emergency bed with massage features', 0, '8', 1),
(10, 'Maternity bed', '2x2', 2000, 'For nursing mothers with attached baby bed', 4, '11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bed_ward`
--

CREATE TABLE `bed_ward` (
  `bed_ward_id` int(11) NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bed_ward`
--

INSERT INTO `bed_ward` (`bed_ward_id`, `name`, `description`, `department_id`) VALUES
(4, 'Ward five', 'For nursing women and infants', 11),
(7, 'Executive Massage bed', 'Emergency bed with massage', 8),
(8, 'Maternity bed', 'Single maternity bed', 8);

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `blood_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`blood_id`, `name`, `quantity`, `status`) VALUES
(1, 'AA', 100, 'Available'),
(2, 'AB', 15, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('555fb98df8b27e2a84a1e8e7806bf0b939da9ac8', '::1', 1659509257, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635393530363338313b6c6f67696e5f747970657c733a373a2270617469656e74223b70617469656e745f6c6f67696e7c733a313a2231223b70617469656e745f69647c733a313a2238223b6c6f67696e5f757365725f69647c733a313a2238223b6e616d657c733a31333a224f74756f20486f737068696e65223b),
('92f68413e7ffdfd14363979677606a49e26dd0ad', '::1', 1659506380, 0x5f5f63695f6c6173745f726567656e65726174657c693a313635393530363338303b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31303a2244655f4a61676162616e223b);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `name`, `description`) VALUES
(1, 'Physiotherapy ', 'This is the department for patients with physio-therapeutic needs.'),
(3, 'Gynaecology', 'This department is for the pregnant women'),
(4, 'Accounts and Records', 'This is the financial and accounting department.'),
(5, 'Pharmaceuticals', 'This is the depart in charge of all pharmaceutical duties.'),
(6, 'Front Desk', 'This is the customer relation and patients&#039; first point of contact.'),
(7, 'General Services Department', 'This is the department responsible for the security, laundry, CCTV, and cleaners.'),
(8, 'Accident and Emergency', 'This is the unit/department responsible for all emergencies and accident cases.'),
(9, 'Cardiology', 'Responsible for heart and heart-related issues.'),
(10, 'Haematology', 'This department is responsible for blood-related diseases and malignancies.'),
(11, 'Maternity', 'This is the ante-natal, childbirth, and post-natal.'),
(12, 'Neurology', 'This is the department responsible for the nervous system, and brain-related issues.'),
(13, 'Ophthalmology', 'This department is responsible for eye, hair, and visual-related issues.');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` int(11) NOT NULL,
  `place_of_birth` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_card` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mother_tongue` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `qualification` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nationality` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `biography` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `facebook` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `twitter` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `google_plus` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `name`, `gender`, `date_of_birth`, `place_of_birth`, `id_card`, `mother_tongue`, `marital_status`, `religion`, `blood_group`, `qualification`, `nationality`, `biography`, `phone`, `mobile_no`, `email`, `password`, `address`, `state`, `city`, `facebook`, `twitter`, `google_plus`, `linkedin`, `file_name`, `department_id`) VALUES
(3, 'Doctor Obinna', 'Male', 1656352800, 'Abia', 'National ID', 'Igbo', 'Engaged', 'Christian', 'O+', 'PhD', 'American', 'He is a professional and specialist, who studied at Cambridge, Yale, and Oxford Universities.', '08159712756', '08108761445', 'delightsomelandagro@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Pelgreb Street', 'Rivers', 'Bonny Island', 'enyinnaya_delight', 'enyinnaya_delight', 'delightenyinnaya', 'enyinnaya_delight', 'National ID 2.jpg', 1),
(4, 'JUMAI YAKUBU', 'Female', 816458400, 'ABUJA', 'National ID', 'Yoruba', 'Single', 'Christian', 'O+', 'PhD', 'Nigerian', '&lt;div id=&quot;collapseExample&quot; class=&quot;m-t-15 collapse show&quot;&gt;\r\n&lt;div class=&quot;well&quot;&gt;\r\n&lt;p class=&quot;m-t-30&quot;&gt;&lt;strong&gt;MY PROFILE&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p class=&quot;m-t-30&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\nI LOVE PEOPLE AND I HATE BLOOD\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Education&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;M.B.B.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.B.B.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.D from AIIMS&lt;/li&gt;\r\n&lt;li&gt;D.N.B AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;D.N.B from AIIMS&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Experience&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Accomplishments&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Skill Set&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;h5&gt;Wordpress &lt;span class=&quot;pull-right&quot;&gt;80%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;HTML 5 &lt;span class=&quot;pull-right&quot;&gt;90%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;jQuery &lt;span class=&quot;pull-right&quot;&gt;50%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;Photoshop &lt;span class=&quot;pull-right&quot;&gt;70%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;', '08131092203', '08131092203', 'loveyakubu9@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Pelgreb Street', 'Rivers', 'Bonny Island', 'jjojoj', 'iiyu9u8', '', '', 'ENYINNAYA OBINNA DELIGHT.pdf', 12),
(5, 'Goodness Johnson Ekene', 'Female', 739648800, 'Aba', 'National ID', 'Igbo', 'Engaged', 'Christian', 'O+', 'BSc', 'Nigerian', '&lt;div id=&quot;collapseExample&quot; class=&quot;m-t-15 collapse show&quot;&gt;\r\n&lt;div class=&quot;well&quot;&gt;\r\n&lt;p class=&quot;m-t-30&quot;&gt;&lt;strong&gt;MY PROFILE&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p class=&quot;m-t-30&quot;&gt;Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.&lt;/p&gt;\r\n&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries&lt;/p&gt;\r\n&lt;p&gt;It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Education&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;M.B.B.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.B.B.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.D from AIIMS&lt;/li&gt;\r\n&lt;li&gt;D.N.B AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;D.N.B from AIIMS&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Experience&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Accomplishments&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Skill Set&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;h5&gt;Wordpress &lt;span class=&quot;pull-right&quot;&gt;80%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;HTML 5 &lt;span class=&quot;pull-right&quot;&gt;90%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;jQuery &lt;span class=&quot;pull-right&quot;&gt;50%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;Photoshop &lt;span class=&quot;pull-right&quot;&gt;70%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;', '07064205738', '07064205738', 'goodnessekene@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Imo state', 'Imo State', 'Owerri', 'goodness_ekene', 'goodness_ekene', 'goodness_ekene', 'goodness_ekene', 'National ID 2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donor_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sex` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `age` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_donation` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `name`, `sex`, `age`, `email`, `phone`, `address`, `blood_group`, `last_donation`) VALUES
(1, 'Emeka Donor', 'Female', '32', 'emeka@gmail.com', '07056434720', 'Ukpo avenues, Bonny Island', 'B+', '2022-02-10'),
(2, 'Jude doe', 'Male', '28', 'judedoe@gmail.com', '01-9934553', 'NLNG RA (Asaba)', 'O+', '2022-04-09'),
(3, 'Ruth Akpabio', 'Female', '30', 'ruth2@gmail.com', '08037645762', 'Workers Camp', 'B', '2022-02-09');

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE `dummy` (
  `id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `surname` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dummy`
--

INSERT INTO `dummy` (`id`, `name`, `surname`, `age`) VALUES
(1, 'Delight', 'Enyinnaya', 29),
(2, 'ThankGod', 'Ndu', 21);

-- --------------------------------------------------------

--
-- Table structure for table `expense_category`
--

CREATE TABLE `expense_category` (
  `expense_category_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense_category`
--

INSERT INTO `expense_category` (`expense_category_id`, `name`) VALUES
(4, 'Logistics'),
(5, 'Surgical Equipments'),
(6, 'Office Stationary Purchase');

-- --------------------------------------------------------

--
-- Table structure for table `generalService`
--

CREATE TABLE `generalService` (
  `generalService_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` int(11) NOT NULL,
  `place_of_birth` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_card` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mother_tongue` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `qualification` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nationality` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `biography` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `facebook` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `twitter` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `google_plus` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `generalService`
--

INSERT INTO `generalService` (`generalService_id`, `name`, `gender`, `date_of_birth`, `place_of_birth`, `id_card`, `mother_tongue`, `marital_status`, `religion`, `blood_group`, `qualification`, `nationality`, `biography`, `phone`, `mobile_no`, `email`, `password`, `address`, `state`, `city`, `facebook`, `twitter`, `google_plus`, `linkedin`, `file_name`, `department_id`) VALUES
(1, 'Akpan Okon', 'Male', -2147483648, 'Akwa-Ibom', 'National ID', 'Efik', 'Married', 'Christian', 'O+', 'O&#039;Level', 'Nigerian', 'Chief Security Officer (CSO)', '07036855056', '07036855056', 'akpan@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'New Layout District', 'Rivers', 'Bonny Island', 'akpan_1', 'akpan_1', 'akpan_1', 'akpan_1', 'Birth certificate.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `general_message`
--

CREATE TABLE `general_message` (
  `general_message_id` int(11) NOT NULL,
  `message` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_message`
--

INSERT INTO `general_message` (`general_message_id`, `message`, `user_id`) VALUES
(2, 'Hello Admin', 'pharmacist-1'),
(1, 'Hello! Welcome! This is the System Chat.', 'admin-1'),
(3, 'I need a translation', 'pharmacist-1');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `invoice_number` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `invoice_entries` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_created` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `due_date` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `vat_percentage` int(11) NOT NULL,
  `discount` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `invoice_number`, `title`, `department_id`, `patient_id`, `invoice_entries`, `date_created`, `due_date`, `status`, `vat_percentage`, `discount`) VALUES
(2, 'K5FGQZM6WZ', 'Neurological Care fee', 12, 8, '[{\"title\":\"Health Care\",\"amount\":\"15000\"},{\"title\":\"Bed Space\",\"amount\":\"20000\"}]', '1655920800', '1656439200', 1, 5, '2000'),
(4, 'TLS6ULEVU4', 'Therapy Charge', 12, 8, '[{\"title\":\"Therapy and Checkup\",\"amount\":\"20000\"}]', '1656957600', '1657389600', 1, 0, ''),
(5, '23ET5SQ0H0', 'Health Checkup', 1, 5, '[{\"title\":\"Check Up fee\",\"amount\":\"15000\"}]', '1657735200', '1658685600', 1, 0, ''),
(6, 'E828F4J0PL', 'Website Development Service', 1, 9, '[{\"title\":\"Hosting And Domain Registration\",\"amount\":\"134.88\"},{\"title\":\"Design and Build Charges\",\"amount\":\"400\"}]', '1657821600', '1658426400', 1, 0, '20'),
(7, '9XCO87GQS4', 'Social Media Marketing', 1, 9, '[{\"title\":\"SMM Charge (3 Platforms X $120)\",\"amount\":\"360\"}]', '1657821600', '1658426400', 1, 0, '60'),
(8, 'A45K902DS2', 'Web Development Service(BRIS) Initial Instalment', 1, 9, '[{\"title\":\"Initial Instalment(for Web Development Service)\",\"amount\":\"450.88\"}]', '1658253600', '1658426400', 2, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `laboratorist`
--

CREATE TABLE `laboratorist` (
  `laboratorist_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` int(11) NOT NULL,
  `place_of_birth` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_card` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mother_tongue` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `qualification` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nationality` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `biography` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `facebook` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `twitter` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `google_plus` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laboratorist`
--

INSERT INTO `laboratorist` (`laboratorist_id`, `name`, `gender`, `date_of_birth`, `place_of_birth`, `id_card`, `mother_tongue`, `marital_status`, `religion`, `blood_group`, `qualification`, `nationality`, `biography`, `phone`, `mobile_no`, `email`, `password`, `address`, `state`, `city`, `facebook`, `twitter`, `google_plus`, `linkedin`, `file_name`, `department_id`) VALUES
(1, 'Abubakar Sodiq', 'Male', 613850400, 'Ogun', 'National ID', 'Yoruba', 'Married', 'Muslim', 'O+', 'MSc', 'Nigerian', 'He is a professional lab technician', '07036855056', '07036855056', 'sodiq@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'New Road, Bonny', 'Rivers', 'Bonny Island', 'emma_lab', 'emma_lab', 'emma_lab', 'emma_lab', 'Favour-NIN.png', 10);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `phrase_id` int(11) NOT NULL,
  `phrase` longtext COLLATE utf8_unicode_ci NOT NULL,
  `english` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `arabic` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `french` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `chinese` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `german` longtext COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `arabic`, `french`, `chinese`, `german`) VALUES
(1, 'dashboard', 'Dashboard', 'لوحة القيادة', 'tableau de bord', NULL, NULL),
(2, 'manage department', NULL, 'إدارة القسم', NULL, NULL, NULL),
(3, 'department', NULL, 'قسم، أقسام', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `language_list`
--

CREATE TABLE `language_list` (
  `id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language_list`
--

INSERT INTO `language_list` (`id`, `name`) VALUES
(11, 'german'),
(5, 'english'),
(6, 'arabic'),
(10, 'french'),
(9, 'chinese');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `med_category_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `company` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_added` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_id`, `name`, `med_category_id`, `price`, `quantity`, `company`, `status`, `description`, `date_added`) VALUES
(5, 'Longrich Omega-5 ', 6, 3000, 150, 'Longrich Pharmaceuticals', 1, 'This is a food supplement drug.', 1656352800),
(4, 'Lonart Anti malaria', 3, 350, 500, 'Lonart Pharmaceuticals', 2, 'Lonart is for treating acute malaria', 1656352800);

-- --------------------------------------------------------

--
-- Table structure for table `med_category`
--

CREATE TABLE `med_category` (
  `med_category_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `med_category`
--

INSERT INTO `med_category` (`med_category_id`, `name`, `description`) VALUES
(3, 'Anti-Malaria Drugs', 'For anti-malaria medicines'),
(5, 'Pain killer', 'Medicines that help with pain'),
(6, 'Supplements', 'These are drug supplements for patients');

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE `noticeboard` (
  `noticeboard_id` int(11) NOT NULL,
  `title` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `start_date` int(11) NOT NULL,
  `end_date` int(11) NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `location` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`noticeboard_id`, `title`, `start_date`, `end_date`, `description`, `location`) VALUES
(3, 'General Doctors Meeting', 1656180000, 1656180000, 'Meeting for all medical doctors in the Hospital from all departments.\r\nDoctors are to come with their Bi-Monthly reports', 'Conference Hall');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `nurse_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` int(11) NOT NULL,
  `place_of_birth` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_card` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mother_tongue` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `qualification` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nationality` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `biography` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `facebook` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `twitter` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `google_plus` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`nurse_id`, `name`, `gender`, `date_of_birth`, `place_of_birth`, `id_card`, `mother_tongue`, `marital_status`, `religion`, `blood_group`, `qualification`, `nationality`, `biography`, `phone`, `mobile_no`, `email`, `password`, `address`, `state`, `city`, `facebook`, `twitter`, `google_plus`, `linkedin`, `file_name`, `department_id`) VALUES
(4, 'Goodness Ekene', 'Female', 739648800, 'Abia', 'National ID', 'Igbo', 'Engaged', 'Christian', 'O+', 'PhD', 'Nigerian', 'She is intelligent, smart, and highly productive.', '07064205738', '07064205738', 'goodness@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Owerri, Imo state', 'Imo', 'Owerri', 'goodness_ekene', 'goodness_ekene', 'goodness_ekene', 'goodness_ekene', 'National ID 2.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `pid` longtext COLLATE utf8_unicode_ci NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `id_card` longtext COLLATE utf8_unicode_ci NOT NULL,
  `issue_at` longtext COLLATE utf8_unicode_ci NOT NULL,
  `issue_on` longtext COLLATE utf8_unicode_ci NOT NULL,
  `occupation` longtext COLLATE utf8_unicode_ci NOT NULL,
  `mother_tongue` longtext COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` longtext COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `city` longtext COLLATE utf8_unicode_ci NOT NULL,
  `state` longtext COLLATE utf8_unicode_ci NOT NULL,
  `nationality` longtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sex` longtext COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` longtext COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `place_of_birth` longtext COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date_of_last_admission` longtext COLLATE utf8_unicode_ci NOT NULL,
  `diagnose` longtext COLLATE utf8_unicode_ci NOT NULL,
  `file_name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `discharge_condition` longtext COLLATE utf8_unicode_ci NOT NULL,
  `account_opening_timestamp` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `pid`, `name`, `email`, `id_card`, `issue_at`, `issue_on`, `occupation`, `mother_tongue`, `marital_status`, `religion`, `password`, `address`, `city`, `state`, `nationality`, `phone`, `mobile_no`, `sex`, `birth_date`, `age`, `place_of_birth`, `blood_group`, `date_of_last_admission`, `diagnose`, `file_name`, `department_id`, `discharge_condition`, `account_opening_timestamp`) VALUES
(5, 'SV472UB345', 'Jumbo Blessing', 'jumbo@gmail.com', 'National ID', 'Bonny', '2020-05-12', 'Banker', 'Ibani', 'Single', 'Christianity', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Macaulay Street, Bonny Island', 'Bonny Island', 'Rivers', 'Bonny Island', '07056434720', '07036855056', 'Female', '1994-01-12', 28, 'Bonny', 'A+', '2022-01-12', 'Fever', '', 1, '&lt;p&gt;Not fit for discharge&lt;/p&gt;', 0),
(6, 'AOD758HMNW', 'Udophia Akpan', 'akpanudo@gmail.com', 'National ID', 'Uyo', '2010-05-26', 'Trader', 'Efik', 'Married', 'Christianity', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'New Layout road, by New Road Junction', 'Bonny Island', 'Rivers', 'Nigerian', '07056434720', '08131092203', 'Male', '170272800', 45, 'Akwa-Ibom', 'A+', '2021-05-26', 'High fever\r\nBody Pains\r\nLoss of taste', 'National ID 2.jpg', 1, '&lt;p&gt;Not fully recovered but will be discharged under supervision.&lt;/p&gt;', 0),
(7, '06VFDOOJA9', 'Felicia Ojo', 'ojo@gmail.com', 'National ID', 'Ota', '2005-05-26', 'Lawyer', 'Yoruba', 'Married', 'Christianity', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Macauley Street', 'Bonny Island', 'Rivers', 'Nigerian', '08131092203', '07036855056', 'Female', '1990-04-26', 32, 'Ogun', 'O+', '2022-01-26', 'Loss of smell\r\nLoss of taste\r\n', 'National ID 2.jpg', 1, '&lt;p&gt;Quarantined for test of Covid-19&lt;/p&gt;', 0),
(8, '2RJ47WF51A', 'Otuo Hosphine', 'otuo@gmail.com', 'National ID', 'Bonny', '2018-06-23', 'Musician', 'Swahili', 'Single', 'Christianity', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'King Jaja Street', 'Bonny Island', 'Rivers', 'Nigerian', '08131092203', '08131092203', 'Male', '2000-06-23', 22, 'Bonny Island', 'B+', '2022-04-23', 'Amnesia', 'PVC.jpg', 12, '&lt;p&gt;Not fit&lt;/p&gt;', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `expense_category_id` int(11) NOT NULL,
  `payment_method` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `timestamp` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `invoice_id`, `title`, `payment_type`, `expense_category_id`, `payment_method`, `amount`, `description`, `timestamp`) VALUES
(6, 0, 'Delivery Transportation', 'expense', 4, 1, 25000, 'Drugs<br>Confectioneries for Pharmacy<br>Surgical Material', 1656093600),
(7, 0, 'Purchase of Surgical materials', 'income', 5, 2, 50000, 'Gloves<br>Surgical Knives<br>Anesthesia<br><br>', 1656180000);

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `pharmacist_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` int(11) NOT NULL,
  `place_of_birth` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_card` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mother_tongue` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `qualification` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nationality` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `biography` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `facebook` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `twitter` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `google_plus` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`pharmacist_id`, `name`, `gender`, `date_of_birth`, `place_of_birth`, `id_card`, `mother_tongue`, `marital_status`, `religion`, `blood_group`, `qualification`, `nationality`, `biography`, `phone`, `mobile_no`, `email`, `password`, `address`, `state`, `city`, `facebook`, `twitter`, `google_plus`, `linkedin`, `file_name`, `department_id`) VALUES
(1, 'Jibri-inu Favor', 'Female', 1181844000, 'Edo', 'National ID', 'Edo', 'Single', 'Christian', 'B', 'PhD', 'Nigerian', 'Drug dispenser and pharmacist', '07036855056', '07064205738', 'jibriinufavour@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Park Community, opposite Government School, Bonny Island', 'Rivers', 'Bonny Island', 'jibriinu_favor', 'jibriinu_favor', 'jibriinu_favor', 'jibriinu_favor', 'Favour-NIN.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `prescription_id` int(11) NOT NULL,
  `prescription_code` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `weight` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_pressure` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `height` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prescription_type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `visiting_fee` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `case_history` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prescription_entries` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`prescription_id`, `prescription_code`, `name`, `department_id`, `doctor_id`, `patient_id`, `weight`, `blood_pressure`, `height`, `prescription_type`, `visiting_fee`, `case_history`, `prescription_entries`, `date_created`) VALUES
(15, 'H2RWZZIKYT', 'Supplemental Prescription', 1, 3, 7, '100', '120', '6 ft', '1', '1000', '<p>Needs food supplements to increase blood level</p>\r\n<p>These prescriptions serve as augment drugs.</p>', '[{\"diagnose\":\"Low blood level\",\"medicine_name\":\"Orheptal \",\"medicine_type\":\"Blood Toic\",\"usage_prescription\":\"3 Spoonful- 3X daily\",\"usage_days\":\"7\"}]', 1656352800),
(13, 'VDJIGSS7KD', 'Blood Regaining Therapy Prescription', 1, 5, 5, '85', '140', '5.7', '1', '2000', '<p>Low blood level</p>\r\n<p>Loss of balance</p>', '[{\"diagnose\":\"Low blood level\",\"medicine_name\":\"Orheptal \",\"medicine_type\":\"Blood Type\",\"usage_prescription\":\"3 Spoonful- 3X daily\",\"usage_days\":\"7\"}]', 1655920800),
(14, 'K8C511DX0L', 'Encyphlograph', 12, 4, 8, '95', '120', '7ft', '1', '3500', '<p>Amnesia</p>', '[{\"diagnose\":\"Loss of Memory\",\"medicine_name\":\"OtibuMen\",\"medicine_type\":\"Antidepressant\",\"usage_prescription\":\"Once daily\",\"usage_days\":\"21\"}]', 1655920800);

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `receptionist_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` int(11) NOT NULL,
  `place_of_birth` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_card` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mother_tongue` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `qualification` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nationality` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `biography` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `facebook` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `twitter` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `google_plus` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`receptionist_id`, `name`, `gender`, `date_of_birth`, `place_of_birth`, `id_card`, `mother_tongue`, `marital_status`, `religion`, `blood_group`, `qualification`, `nationality`, `biography`, `phone`, `mobile_no`, `email`, `password`, `address`, `state`, `city`, `facebook`, `twitter`, `google_plus`, `linkedin`, `file_name`, `department_id`) VALUES
(1, 'Dappa Jumbo', 'Female', 893268000, 'Bonny Island', 'National ID', 'Ibani', 'Single', 'Christian', 'B', 'PhD', 'Nigerian', '&lt;div id=&quot;collapseExample&quot; class=&quot;m-t-15 collapse show&quot;&gt;\r\n&lt;div class=&quot;well&quot;&gt;\r\n&lt;p class=&quot;m-t-30&quot;&gt;&lt;strong&gt;MY PROFILE&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p class=&quot;m-t-30&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\nSmart, beautiful, and have good relational qualities.\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Education&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;M.B.B.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.B.B.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.D from AIIMS&lt;/li&gt;\r\n&lt;li&gt;D.N.B AIIMS&lt;/li&gt;\r\n&lt;li&gt;M.S from AIIMS&lt;/li&gt;\r\n&lt;li&gt;D.N.B from AIIMS&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Experience&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Accomplishments&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;li&gt;Excepteur sint occaecat cupidatat non proident.&lt;/li&gt;\r\n&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h4 class=&quot;m-t-30&quot;&gt;Skill Set&lt;/h4&gt;\r\n&lt;hr /&gt;\r\n&lt;h5&gt;Wordpress &lt;span class=&quot;pull-right&quot;&gt;80%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;HTML 5 &lt;span class=&quot;pull-right&quot;&gt;90%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;jQuery &lt;span class=&quot;pull-right&quot;&gt;50%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;h5&gt;Photoshop &lt;span class=&quot;pull-right&quot;&gt;70%&lt;/span&gt;&lt;/h5&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;', '07036855056', '07036855056', 'dappajumbo@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'King Jaja Avenue', 'Rivers', 'Bonny Island', 'dappa_jumbo', 'dappa_jumbo', 'dappa_jumbo', 'dappa_jumbo', 'Favour-NIN.png', 6);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `avail_day` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `start_time` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `end_time` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `per_patient_time` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `status` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `doctor_id`, `avail_day`, `start_time`, `end_time`, `per_patient_time`, `department_id`, `status`) VALUES
(8, 5, '1655229600', '02:00', '02:30', '00:10', 1, '1'),
(9, 3, '1655402400', '04:30', '05:00', '00:10', 1, '1'),
(10, 3, '1656352800', '01:00', '02:30', '00:10', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES
(1, 'system_name', 'Witty General Hospital, Bonny Island'),
(2, 'system_title', 'Witty General Hospital, Bonny Island'),
(3, 'address', 'Pelgreb Street, Wilbros Road, Bonny Island'),
(4, 'phone', '+2348159712756'),
(6, 'currency', 'NGN'),
(7, 'system_email', 'wittyinventions20@gmail.com'),
(11, 'language', 'english'),
(12, 'text_align', 'left-to-right'),
(16, 'skin_colour', 'default'),
(21, 'session', '2022-2023'),
(22, 'footer', 'General Hospital, Bonny | Powered by Witty Inventions Digital Agency. All Right Reserved (2022)'),
(116, 'paypal_email', 'wittyinventions20@gmail.com'),
(117, 'abbr', 'General Hospital'),
(118, 'test_secret_key', 'sk_test_050c0217409daaf2a7a855352d7a2a2a5ff2ff6b'),
(119, 'test_public_key', 'pk_test_4deae68df266dd118734a577431e91e1196d9135'),
(120, 'live_secret_key', 'sk_live_eeb18219d021e80a5941ffde9e3428042bbd7482'),
(121, 'live_public_key', 'pk_live_3a7b96bb5dd30f73e864f52df9a8cbe7b74014c6'),
(122, 'api_mode', 'TEST'),
(123, 'paystack_email', 'wittyinventions20@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` int(11) NOT NULL,
  `place_of_birth` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_card` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mother_tongue` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `qualification` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nationality` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `biography` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `facebook` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `twitter` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `google_plus` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `staff_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `test_code` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `weight` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_pressure` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `height` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `test_type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `age` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `case_history` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `test_entries` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_code`, `name`, `department_id`, `doctor_id`, `patient_id`, `weight`, `blood_pressure`, `height`, `test_type`, `age`, `case_history`, `test_entries`, `date_created`) VALUES
(0, 'I1QWG4NAAZ', 'Blood Test', 1, 5, 7, '100', '120', '6 ft', '1', '28', '<p>Test Conduction</p>', '[{\"diagnose\":\"Blood\",\"medicine_name\":\"RBC\",\"medicine_type\":\"NEUT (20-45)\",\"usage_test\":\"PTT\",\"usage_days\":\"RVS-Negative\"}]', 1659463200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountant`
--
ALTER TABLE `accountant`
  ADD PRIMARY KEY (`accountant_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `assign_bed`
--
ALTER TABLE `assign_bed`
  ADD PRIMARY KEY (`assign_bed_id`);

--
-- Indexes for table `bed`
--
ALTER TABLE `bed`
  ADD PRIMARY KEY (`bed_id`);

--
-- Indexes for table `bed_ward`
--
ALTER TABLE `bed_ward`
  ADD PRIMARY KEY (`bed_ward_id`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`blood_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `dummy`
--
ALTER TABLE `dummy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_category`
--
ALTER TABLE `expense_category`
  ADD PRIMARY KEY (`expense_category_id`);

--
-- Indexes for table `generalService`
--
ALTER TABLE `generalService`
  ADD PRIMARY KEY (`generalService_id`);

--
-- Indexes for table `general_message`
--
ALTER TABLE `general_message`
  ADD PRIMARY KEY (`general_message_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `laboratorist`
--
ALTER TABLE `laboratorist`
  ADD PRIMARY KEY (`laboratorist_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`phrase_id`);

--
-- Indexes for table `language_list`
--
ALTER TABLE `language_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `med_category`
--
ALTER TABLE `med_category`
  ADD PRIMARY KEY (`med_category_id`);

--
-- Indexes for table `noticeboard`
--
ALTER TABLE `noticeboard`
  ADD PRIMARY KEY (`noticeboard_id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`nurse_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`pharmacist_id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`prescription_id`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`receptionist_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountant`
--
ALTER TABLE `accountant`
  MODIFY `accountant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assign_bed`
--
ALTER TABLE `assign_bed`
  MODIFY `assign_bed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bed`
--
ALTER TABLE `bed`
  MODIFY `bed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bed_ward`
--
ALTER TABLE `bed_ward`
  MODIFY `bed_ward_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `blood_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dummy`
--
ALTER TABLE `dummy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expense_category`
--
ALTER TABLE `expense_category`
  MODIFY `expense_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `generalService`
--
ALTER TABLE `generalService`
  MODIFY `generalService_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general_message`
--
ALTER TABLE `general_message`
  MODIFY `general_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `laboratorist`
--
ALTER TABLE `laboratorist`
  MODIFY `laboratorist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `phrase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `language_list`
--
ALTER TABLE `language_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `med_category`
--
ALTER TABLE `med_category`
  MODIFY `med_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `noticeboard`
--
ALTER TABLE `noticeboard`
  MODIFY `noticeboard_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `nurse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pharmacist`
--
ALTER TABLE `pharmacist`
  MODIFY `pharmacist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `prescription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `receptionist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
