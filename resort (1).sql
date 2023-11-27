-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 07:27 AM
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
-- Database: `resort`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Admin', 'Admin@121');

-- --------------------------------------------------------

--
-- Table structure for table `communication_management`
--

CREATE TABLE `communication_management` (
  `id` int(11) NOT NULL,
  `whatsapp_no` varchar(15) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `sms_no` varchar(15) NOT NULL,
  `imail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `communication_management`
--

INSERT INTO `communication_management` (`id`, `whatsapp_no`, `mobile_no`, `sms_no`, `imail`) VALUES
(1, '9415681415', '7844256630', '8797897895', 'shivamrajpandita233226@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `corporate`
--

CREATE TABLE `corporate` (
  `td_id` int(11) NOT NULL,
  `Mitting` text NOT NULL,
  `Incentives` text NOT NULL,
  `Conferences` text NOT NULL,
  `Exhibitions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `corporate`
--

INSERT INTO `corporate` (`td_id`, `Mitting`, `Incentives`, `Conferences`, `Exhibitions`) VALUES
(7, 'We endeavour to ensure that minute attention to detail is paid when planning meetings of all sizes & complexities.', 'We value the concept of incentive tours and go that extra mile to create new, innovative experiences just for you.', 'We have the expertise and experience to arrange & manage conferences for all industries.', 'From arranging transfers to accommodations, we expertly take care of all your travel needs.');

-- --------------------------------------------------------

--
-- Table structure for table `corporate_td`
--

CREATE TABLE `corporate_td` (
  `id` int(11) NOT NULL,
  `td_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `corporate_td`
--

INSERT INTO `corporate_td` (`id`, `td_id`, `type`, `title`, `des`) VALUES
(15, 7, 'services', ' Material', 'We truly understand that amidst the crucial decision makings and brainstorming sessions, a light moment comes as an asset. Therefore, we consider entertainment an important pillar supporting a successful corporate event. We dedicate ourselves to chalk out a perfect entertainment bit that goes perfectly well with the tone and mood of your event.'),
(16, 7, 'services', ' Material', 'We truly understand that amidst the crucial decision makings and brainstorming sessions, a light moment comes as an asset. Therefore, we consider entertainment an important pillar supporting a successful corporate event. We dedicate ourselves to chalk out a perfect entertainment bit that goes perfectly well with the tone and mood of your event.'),
(17, 7, 'services', ' Material', 'We truly understand that amidst the crucial decision makings and brainstorming sessions, a light moment comes as an asset. Therefore, we consider entertainment an important pillar supporting a successful corporate event. We dedicate ourselves to chalk out a perfect entertainment bit that goes perfectly well with the tone and mood of your event.'),
(18, 7, 'management', 'Tours Management', 'We truly understand that amidst the crucial decision makings and brainstorming sessions, a light moment comes as an asset. Therefore, we consider entertainment an important pillar supporting a successful corporate event. We dedicate ourselves to chalk out a perfect entertainment bit that goes perfectly well with the tone and mood of your event.'),
(19, 7, 'management', 'Exhibition and Displays', 'We truly understand that amidst the crucial decision makings and brainstorming sessions, a light moment comes as an asset. Therefore, we consider entertainment an important pillar supporting a successful corporate event. We dedicate ourselves to chalk out a perfect entertainment bit that goes perfectly well with the tone and mood of your event.'),
(20, 7, 'management', 'Food and Beverage', 'We truly understand that amidst the crucial decision makings and brainstorming sessions, a light moment comes as an asset. Therefore, we consider entertainment an important pillar supporting a successful corporate event. We dedicate ourselves to chalk out a perfect entertainment bit that goes perfectly well with the tone and mood of your event.'),
(21, 7, 'management', 'Airport and Transport Coordination', 'We truly understand that amidst the crucial decision makings and brainstorming sessions, a light moment comes as an asset. Therefore, we consider entertainment an important pillar supporting a successful corporate event. We dedicate ourselves to chalk out a perfect entertainment bit that goes perfectly well with the tone and mood of your event.');

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE `day` (
  `id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `tour_type` varchar(255) NOT NULL,
  `td_day` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`id`, `tour_id`, `tour_type`, `td_day`, `title`, `description`) VALUES
(386, 87, ' place_based', 1, 'ASD', 'AS'),
(390, 91, 'populer_resor', 1, 'A', 'dsf'),
(419, 97, ' populer_resort', 1, 'dsfg', 'dsf'),
(437, 105, 'domestic_holyday', 1, 'dfsh', 'sdfh'),
(438, 105, 'domestic_holyday', 2, 'dsfh', 'dsfh'),
(439, 77, 'domestic_holyday', 1, 'dsagadsgasdg', 'sadgasgsadgsadgsdagdsg'),
(440, 77, 'domestic_holyday', 2, 'asgasdgsadg', 'asdgadsgdsagsdagsagsg'),
(442, 79, 'domestic_holyday', 1, 'dsfa', 'fdsa'),
(443, 79, 'domestic_holyday', 2, 'dsf', 'dsf'),
(444, 80, 'domestic_holyday', 1, 'sg', 'asdg'),
(445, 80, 'domestic_holyday', 2, 'sadg', 'sadg'),
(457, 70, 'other', 1, 'dsfg', 'dsf'),
(458, 70, 'other', 2, 'sdf', 'sd'),
(487, 93, 'top_sliding', 1, 'Cochin', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(488, 93, 'top_sliding', 2, 'Cochin-munar', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(489, 96, 'top_sliding', 1, 'Tajmhal', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(490, 96, 'top_sliding', 2, 'Agra fort', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(525, 94, 'top_sliding', 1, 'mumbai', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(526, 94, 'top_sliding', 2, 'mumbai', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(527, 94, 'top_sliding', 3, 'mumbai', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(550, 84, 'event_based', 1, 'Delhi', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(551, 84, 'event_based', 2, 'Delhi-Manali', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(552, 82, 'event_based', 1, 'Hydrabad', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(553, 82, 'event_based', 2, 'Hydrabad', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(554, 81, 'event_based', 1, 'Hydrabad', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(555, 81, 'event_based', 2, 'Hydrabad', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(556, 85, 'place_based', 1, 'Mumbai', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(557, 85, 'place_based', 2, 'Mumbai', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(558, 86, 'place_based', 1, 'Indore', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(559, 86, 'place_based', 2, 'Indore', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(560, 89, 'place_based', 1, 'Hydrabad', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(561, 89, 'place_based', 2, 'Hydrabad', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(562, 88, 'populer_resort', 1, 'Mumbai', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(563, 88, 'populer_resort', 2, 'Mumbai', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(564, 90, 'populer_resort', 1, 'Goa', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(565, 90, 'populer_resort', 2, 'Goa', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(566, 90, 'populer_resort', 3, 'Goa', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(571, 92, 'populer_resort', 1, 'Delhi', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(572, 92, 'populer_resort', 2, 'Delhi', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(573, 92, 'populer_resort', 3, 'Delhi', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(574, 92, 'populer_resort', 4, 'Delhi', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(575, 68, 'other', 1, 'Gorakhpur', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(576, 68, 'other', 2, 'Gorakhpur', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(579, 71, 'other', 1, 'Agra', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(580, 71, 'other', 2, 'Agra', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(581, 72, 'other', 1, 'Rajsthan', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(582, 72, 'other', 2, 'Rajsthan', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(583, 72, 'other', 3, 'Rajsthan', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(584, 69, 'other', 1, 'Goa', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(585, 69, 'other', 2, 'Goa', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(586, 64, 'populer', 1, 'Agra', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(587, 64, 'populer', 2, 'Agra', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(588, 65, 'populer', 1, 'varanasi', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(589, 65, 'populer', 2, 'varanasi', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(590, 67, 'populer', 1, 'Rajsthan', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(591, 67, 'populer', 2, 'Rajsthan', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(592, 67, 'populer', 3, 'Rajsthan', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(593, 95, 'top_sliding', 1, 'Delhi', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(594, 95, 'top_sliding', 2, 'Delhi', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(595, 95, 'top_sliding', 3, 'Delhi-Manali', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(596, 83, 'event_based', 1, 'Bengaluru', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis'),
(597, 83, 'event_based', 2, 'Bengaluru', 'Arrival at Cochin International Airport, you will be met by our representative who will facilitate your ride to the Hotel. Check in to the hotel. Sightseeing includes Fort Cochin, which is famous for different styles of the building of European and Britis');

-- --------------------------------------------------------

--
-- Table structure for table `other_tour`
--

CREATE TABLE `other_tour` (
  `id` int(11) NOT NULL,
  `type_tour` varchar(100) NOT NULL,
  `place` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `day` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `package` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `other_tour`
--

INSERT INTO `other_tour` (`id`, `type_tour`, `place`, `title`, `description`, `day`, `price`, `discount`, `package`) VALUES
(64, 'populer', 'Agra', 'Agra', 'Hotels,meals,Sightseeing', 2, 60000, 3222, '<p>-Welcome&nbsp; Drink On twin at Hotel</p>\r\n\r\n<p>-Daily Breakfast</p>\r\n\r\n<p>-Hotel Accommodation on twin/duble sharing basis.</p>\r\n\r\n<p>-Travel throughout the entire journey in an air condition car.</p>\r\n'),
(65, 'populer', 'Varanasi', 'Varanasi', 'Hotels,meals,Sightseeing', 2, 11000, 1111, '<p>- Welcome drink on arrival<br />\r\n- Accommodation in Double sharing basis all the above Mentioned Hotels.<br />\r\n- Daily Breakfast.<br />\r\n- All Meals included in Houseboat. - Pickup from Cochin Airport/Railway Station<br />\r\n- All applicable taxes &amp; service charges</p>\r\n'),
(67, 'populer', 'Rajsthan', 'Rajsthan', 'Hotels,meals,Sightseeing', 3, 13000, 2222, '<p>- Welcome drink on arrival<br />\r\n- Accommodation in Double sharing basis all the above Mentioned Hotels.<br />\r\n- Daily Breakfast.<br />\r\n- All Meals included in Houseboat. - Pickup from Cochin Airport/Railway Station<br />\r\n- All applicable taxes &amp; service charges</p>\r\n'),
(68, 'other', 'Gorakhpur', 'Gorakhpur', 'Hotels,meals,Sightseeing', 2, 5000, 1200, '<p>-Welcome&nbsp; Drink On twin at Hotel</p>\r\n\r\n<p>-Daily Breakfast</p>\r\n\r\n<p>-Hotel Accommodation on twin/duble sharing basis.</p>\r\n\r\n<p>-Travel throughout the entire journey in an air condition car.</p>\r\n'),
(69, 'other', 'Goa', 'Goa', 'Hotels,meals,Sightseeing', 2, 15000, 123, '<p>- Welcome drink on arrival<br />\r\n- Accommodation in Double sharing basis all the above Mentioned Hotels.<br />\r\n- Daily Breakfast.<br />\r\n- All Meals included in Houseboat. - Pickup from Cochin Airport/Railway Station<br />\r\n- All applicable taxes &amp; service charges</p>\r\n'),
(70, 'other', 'Jaipur', 'Jaipur', 'Hotels,meals,Sightseeing', 2, 11000, 1233, '<p>dfsgdsfgd</p>\r\n'),
(71, 'other', 'Agra', 'Agra', 'Hotels,meals,Sightseeing', 2, 2000, 233, '<p>- Welcome drink on arrival<br />\r\n- Accommodation in Double sharing basis all the above Mentioned Hotels.<br />\r\n- Daily Breakfast.<br />\r\n- All Meals included in Houseboat. - Pickup from Cochin Airport/Railway Station<br />\r\n- All applicable taxes &amp; service charges</p>\r\n'),
(72, 'other', 'Rajsthan', 'Rajsthan', 'Hotels,meals,Sightseeing', 3, 2000, 233, '<p>- Welcome drink on arrival<br />\r\n- Accommodation in Double sharing basis all the above Mentioned Hotels.<br />\r\n- Daily Breakfast.<br />\r\n- All Meals included in Houseboat. - Pickup from Cochin Airport/Railway Station<br />\r\n- All applicable taxes &amp; service charges</p>\r\n'),
(77, 'domestic_holyday', 'Goa', 'Goa', 'Hotels,meals,Sightseeing', 2, 10000, 1220, '<p>ZFdsgds</p>\r\n'),
(79, 'domestic_holyday', 'Mumbai', 'Mumbai', 'Hotels,meals,Sightseeing', 2, 15000, 1000, '<p>asghjkl;&#39;etryuiop[bnm,./xbhjklm;dsaubfdskvbiudsnfbdsuhfkl;asjdo;ashfno;fuinasfchnzohncnasofhio</p>\r\n'),
(80, 'domestic_holyday', 'Mumbai', 'Mumbai', 'Hotels,meals,Sightseeing', 2, 13300, 1000, '<p>dsagads</p>\r\n'),
(81, 'event_based', 'Mumbai', 'Mumbai', 'Hotels,meals,Sightseeing', 2, 10000, 5222, '<p>- Welcome drink on arrival<br />\r\n- Accommodation in Double sharing basis all the above Mentioned Hotels.<br />\r\n- Daily Breakfast.<br />\r\n- All Meals included in Houseboat. - Pickup from Cochin Airport/Railway Station<br />\r\n- All applicable taxes &amp; service charges</p>\r\n'),
(82, 'event_based', 'Hydrabad', 'Hydrabad', 'Hotels,meals,Sightseeing', 2, 10000, 123, '<p>- Welcome drink on arrival<br />\r\n- Accommodation in Double sharing basis all the above Mentioned Hotels.<br />\r\n- Daily Breakfast.<br />\r\n- All Meals included in Houseboat. - Pickup from Cochin Airport/Railway Station<br />\r\n- All applicable taxes &amp; service charges</p>\r\n'),
(83, 'event_based', 'Bengaluru', 'Bengaluru', 'Hotels,meals,Sightseeing', 2, 12000, 123, '<p>- Welcome drink on arrival<br />\r\n- Accommodation in Double sharing basis all the above Mentioned Hotels.<br />\r\n- Daily Breakfast.<br />\r\n- All Meals included in Houseboat. - Pickup from Cochin Airport/Railway Station<br />\r\n- All applicable taxes &amp; service charges</p>\r\n'),
(84, 'event_based', 'Delhi', 'Delhi', 'Hotels,meals,Sightseeing', 2, 20000, 252, '<p>- Welcome drink on arrival<br />\r\n- Accommodation in Double sharing basis all the above Mentioned Hotels.<br />\r\n- Daily Breakfast.<br />\r\n- All Meals included in Houseboat. - Pickup from Cochin Airport/Railway Station<br />\r\n- All applicable taxes &amp; service charges</p>\r\n'),
(85, 'place_based', 'Mumbai', 'Mumbai', 'Hotels,meals,Sightseeing', 2, 10000, 2000, '<p>- Welcome drink on arrival<br />\r\n- Accommodation in Double sharing basis all the above Mentioned Hotels.<br />\r\n- Daily Breakfast.<br />\r\n- All Meals included in Houseboat. - Pickup from Cochin Airport/Railway Station<br />\r\n- All applicable taxes &amp; service charges</p>\r\n'),
(86, 'place_based', 'Indore', 'Indore', 'Hotels,meals,Sightseeing', 2, 25000, 3000, '<p>- Welcome drink on arrival<br />\r\n- Accommodation in Double sharing basis all the above Mentioned Hotels.<br />\r\n- Daily Breakfast.<br />\r\n- All Meals included in Houseboat. - Pickup from Cochin Airport/Railway Station<br />\r\n- All applicable taxes &amp; service charges</p>\r\n'),
(88, 'populer_resort', 'Mumbai', 'Mumbai', 'Hotels,meals,Sightseeing', 2, 6000, 1111, '<p>- Welcome drink on arrival<br />\r\n- Accommodation in Double sharing basis all the above Mentioned Hotels.<br />\r\n- Daily Breakfast.<br />\r\n- All Meals included in Houseboat. - Pickup from Cochin Airport/Railway Station<br />\r\n- All applicable taxes &amp; service charge</p>\r\n'),
(89, 'place_based', 'Hydrabad', 'Hydrabad', 'Hotels,meals,Sightseeing', 2, 2000, 100, '<p>- Welcome drink on arrival<br />\r\n- Accommodation in Double sharing basis all the above Mentioned Hotels.<br />\r\n- Daily Breakfast.<br />\r\n- All Meals included in Houseboat. - Pickup from Cochin Airport/Railway Station<br />\r\n- All applicable taxes &amp; service charges</p>\r\n'),
(90, 'populer_resort', 'Goa', 'Goa', 'Hotels,meals,Sightseeing', 3, 2000, 500, '<p>- Welcome drink on arrival<br />\r\n- Accommodation in Double sharing basis all the above Mentioned Hotels.<br />\r\n- Daily Breakfast.<br />\r\n- All Meals included in Houseboat. - Pickup from Cochin Airport/Railway Station<br />\r\n- All applicable taxes &amp; service charges</p>\r\n'),
(92, 'populer_resort', 'Delhi', 'Delhi', 'Hotels,meals,Sightseeing', 4, 2000, 450, '<p>- Welcome drink on arrival<br />\r\n- Accommodation in Double sharing basis all the above Mentioned Hotels.<br />\r\n- Daily Breakfast.<br />\r\n- All Meals included in Houseboat. - Pickup from Cochin Airport/Railway Station<br />\r\n- All applicable taxes &amp; service charges</p>\r\n'),
(93, 'top_sliding', 'Goa', 'Goa', 'Hotels,meals,Sightseeing', 2, 20000, 1000, '<p>- Welcome drink on arrival<br />\r\n- Accommodation in Double sharing basis all the above Mentioned Hotels.<br />\r\n- Daily Breakfast.<br />\r\n- All Meals included in Houseboat. - Pickup from Cochin Airport/Railway Station<br />\r\n- All applicable taxes &amp; service charges</p>\r\n'),
(94, 'top_sliding', 'Mumbai', 'Mumbai', 'Hotels,meals,Sightseeing', 3, 2000, 1200, '<p>- Welcome drink on arrival<br />\r\n- Accommodation in Double sharing basis all the above Mentioned Hotels.<br />\r\n- Daily Breakfast.<br />\r\n- All Meals included in Houseboat. - Pickup from Cochin Airport/Railway Station<br />\r\n- All applicable taxes &amp; service charges</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(95, 'top_sliding', 'Delhi', 'Delhi', 'Hotels,meals,Sightseeing', 3, 2000, 10, '<p>- Welcome drink on arrival<br />\r\n- Accommodation in Double sharing basis all the above Mentioned Hotels.<br />\r\n- Daily Breakfast.<br />\r\n- All Meals included in Houseboat. - Pickup from Cochin Airport/Railway Station<br />\r\n- All applicable taxes &amp; service charges</p>\r\n'),
(96, 'top_sliding', 'Agra', 'agra', 'Hotels,meals,Sightseeing', 2, 2000, 500, '<p>- Welcome drink on arrival<br />\r\n- Accommodation in Double sharing basis all the above Mentioned Hotels.<br />\r\n- Daily Breakfast.<br />\r\n- All Meals included in Houseboat. - Pickup from Cochin Airport/Railway Station<br />\r\n- All applicable taxes &amp; service charges</p>\r\n'),
(103, '<br />\r\n<b>Warning</b>:  Undefined variable $tour in <b>C:xampphtdocsfinal	ravelzadminadd_tour.php</', 'aara', '', '', 2, 2000, 0, '<p>sdafdsfdsgd</p>\r\n'),
(104, '<br />\r\n<b>Warning</b>:  Undefined variable $tour in <b>C:xampphtdocsfinal	ravelzadminadd_tour.php</', 'asfd', '', '', 1, 2000, 0, '<p>earfewrw</p>\r\n'),
(105, 'domestic_holyday', 'agra', 'dfgfdhdfhhf', 'Hotels,meals,Sightseeing', 2, 2000, 1222, '<p>aESRGDSFGDFGFG</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `pay_id` varchar(255) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `palce` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `username`, `pay_id`, `type`, `palce`, `duration`, `mobile`, `email`, `amount`) VALUES
(74, 'Shivam Rajbhar', 'pay_K3ppF3p4fgZPih', 'event_based  ', 'Hydrabad', '1 Nights/ 1 Days', '08173828421', 'shivamrajpandita233226@gmail.com', '4'),
(75, 'Ajay Kumar', 'pay_K3qr1h5HyO6Ego', 'event_based  ', 'Hydrabad', '1 Nights/ 1 Days', '08173828421', 'shivamrajpandita233226@gmail.com', '255'),
(76, 'anuj kumar', 'pay_K3qt5JJWUew3gR', 'event_based  ', 'Hydrabad', '1 Nights/ 1 Days', '08173828421', 'shivamrajpandita233226@gmail.com', '5000'),
(77, 'shivansh', 'pay_K3quNbdgKgGbrm', 'event_based  ', 'Hydrabad', '1 Nights/ 1 Days', '08173828421', 'shivamrajpandita233226@gmail.com', '252'),
(78, 'Abhay Bhardwaj', 'pay_K3qwNYIncWGV6b', 'event_based  ', 'Hydrabad', '1 Nights/ 1 Days', '08173828421', 'shivamrajpandita233226@gmail.com', '50000'),
(79, 'Abhay Bhardwaj', 'pay_K3qzsRgC695laT', 'event_based  ', 'Hydrabad', '1 Nights/ 1 Days', '08173828421', 'shivamrajpandita233226@gmail.com', '50000'),
(80, 'Akash Singh', 'pay_K3r5r1BPaK8bsG', 'populer  ', 'Varanasi', '1 Nights/ 2 Days', '08173828421', 'shivamrajpandita233226@gmail.com', '23000'),
(81, 'Shivam Rajbhar', 'pay_K3tBsywXLHooTY', 'top_sliding  ', 'Goa', '1 Nights/ 2 Days', '08173828421', 'shivamrajpandita233226@gmail.com', '1223'),
(82, 'Shivam Rajbhar', 'pay_K51M7TDtrDT8M4', 'place_based  ', 'Hydrabad', '1 Nights/ 1 Days', '08173828421', 'shivamrajpandita233226@gmail.com', '4'),
(83, 'Shivam Rajbhar', 'pay_K70VloxSqHkjYt', 'populer  ', 'Agra', '1 Nights/ 1 Days', '08173828421', 'shivamrajpandita233226@gmail.com', '1'),
(84, 'Shivam Rajbhar', 'pay_K91HpR3VzWoZ3g', 'top_sliding  ', 'Agra', '1 Nights/ 2 Days', '08173828421', 'shivamrajpandita233226@gmail.com', '2'),
(85, 'Shivam Rajbhar', 'pay_K9nDEOKu1AWwYS', 'domestic_holyday  ', 'Goa', '2 Nights/ Hotels,meals,Sightseeing Days', '08173828421', 'shivamrajpandita233226@gmail.com', '10000'),
(86, 'Shivam Rajbhar', 'pay_K9oAEItEfpb2uW', 'domestic_holyday', 'Goa', '2 Nights/ Hotels,meals,Sightseeing Days', '08173828421', 'shivamrajpandita233226@gmail.com', '8780'),
(87, 'Shivam Rajbhar', 'pay_KAe5SYyedKqoQv', 'event_based', 'Delhi', '2 Nights/ Hotels,meals,Sightseeing Days', '08173828421', 'shivamrajpandita233226@gmail.com', '19748');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `tour_type` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `tour_id`, `tour_type`, `photo`) VALUES
(155, 64, 'populer', 'agra.jpg'),
(156, 65, 'populer', 'kashi-bccl.jpg'),
(158, 67, 'populer', 'rajasthan.jpg'),
(159, 68, 'other', 'gorakhpur-4fcd3fcde44d78692f22ed11.jpg'),
(160, 69, 'other', 'goa.jpg'),
(161, 70, 'other', 'jaipur.jpg'),
(162, 71, 'other', 'agra.jpg'),
(163, 72, 'other', 'rajasthan.jpg'),
(168, 77, 'domestic_holyday', 'goa1.jpg'),
(170, 79, 'domestic_holyday', 'mumbai1.jpg'),
(171, 80, 'domestic_holyday', 'mumbai2.jpg'),
(172, 81, 'event_based', 'mumbai5.jpg'),
(173, 82, 'event_based', 'hydrabad5.jpg'),
(174, 83, 'event_based', 'bengaluru.jpg'),
(175, 84, 'event_based', 'delhi.jpg'),
(176, 85, 'place_based', 'mumbai6.jpg'),
(177, 86, 'place_based', 'indore.jpg'),
(179, 88, 'populer_resort', 'mumbai8.jpg'),
(180, 89, 'place_based', 'hydrabad7.jpg'),
(181, 90, 'populer_resort', 'goa8.jpg'),
(183, 92, 'populer_resort', 'delhi8.jpg'),
(186, 94, 'top_sliding', 'mumbai.jpg'),
(188, 96, 'top_sliding', 'agra.jpg'),
(189, 93, 'top_sliding', 'goa1.jpg'),
(190, 79, 'domestic_holyday', 'm1.jpg'),
(191, 79, 'domestic_holyday', 'm2.jpg'),
(192, 79, 'domestic_holyday', 'm3.jpg'),
(193, 79, 'domestic_holyday', 'm4.jpg'),
(194, 93, 'top_sliding', 'house-landscape-pool-relaxation-garden_1203-4900.jpg'),
(195, 95, 'top_sliding', 'winter-camping-concept-with-tent_23-2149212359.webp'),
(196, 97, ' populer_resort', 'm1.jpg'),
(201, 103, '<br />\r\n<b>Warning</b>:  Undefined variable $tour in <b>C:xampphtdocsfinal	ravelzadminadd_tour.php</b> on line <b>260</b><br />\r\n', 'WhatsApp Image 2022-08-09 at 3.40.09 PM (1).jpeg'),
(202, 104, '<br />\r\n<b>Warning</b>:  Undefined variable $tour in <b>C:xampphtdocsfinal	ravelzadminadd_tour.php</b> on line <b>260</b><br />\r\n', 'WhatsApp Image 2022-08-09 at 3.40.09 PM (1).jpeg'),
(203, 105, 'domestic_holyday', 'house-landscape-pool-relaxation-garden_1203-4900.jpg'),
(209, 7, 'corporate', 'house-landscape-pool-relaxation-garden_1203-4900.jpg'),
(210, 7, 'corporate', 'house-landscape-pool-relaxation-garden_1203-4900.jpg'),
(211, 7, 'corporate', 'house-landscape-pool-relaxation-garden_1203-4900.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `mobile`, `user_id`, `password`) VALUES
(1, 'Shivam Rajbhar', '9838548714', 'shivamraj122@gmail.com', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `communication_management`
--
ALTER TABLE `communication_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate`
--
ALTER TABLE `corporate`
  ADD PRIMARY KEY (`td_id`);

--
-- Indexes for table `corporate_td`
--
ALTER TABLE `corporate_td`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day`
--
ALTER TABLE `day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_tour`
--
ALTER TABLE `other_tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `communication_management`
--
ALTER TABLE `communication_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `corporate`
--
ALTER TABLE `corporate`
  MODIFY `td_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `corporate_td`
--
ALTER TABLE `corporate_td`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `day`
--
ALTER TABLE `day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=598;

--
-- AUTO_INCREMENT for table `other_tour`
--
ALTER TABLE `other_tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
