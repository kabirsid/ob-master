-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 06:54 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `offersbull`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
`id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `lastlogin` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `useragent` varchar(255) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `automobile`
--

CREATE TABLE IF NOT EXISTS `automobile` (
`autoid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `address` text,
  `description` text,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `offerend` datetime DEFAULT NULL,
  `category` tinyint(4) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `visits` int(11) DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `automobile`
--

INSERT INTO `automobile` (`autoid`, `name`, `title`, `type`, `address`, `description`, `mobile`, `email`, `city`, `area`, `date`, `offerend`, `category`, `userid`, `visits`) VALUES
(8, 'Sanjay Divedi', 'National Auto Care', 'Service center', 'S no. 173,\r\nBehind aditi Samruddi,\r\nBaner Gaon,\r\nPune 411045 ', 'We provide world class service for all type of car', '9850119878', 'info@offersbull.com', 'Pune', 'Baner', '2017-01-25 09:53:27', '0000-00-00 00:00:00', 4, 0, 63),
(9, 'Sani', 'Sani Car Garege', 'Service center', 'Ved Bhavan,\r\nLeft Bhusari  Colony ,\r\nNH 4,\r\nPune 38', 'Service station for all types of cars', '8483827878', 'info@offersbull.com', 'Pune', 'Kothrud', '2017-01-23 12:55:33', '0000-00-00 00:00:00', 4, 0, 47),
(7, 'Vaibhav', 'City Motors', 'Showroom', 'City Motors, Gala No - 1, Shanti Compound, On East West Flyover Road, Next To Durian Estate, Near Pravasi Ind Estate, Itbhatti, Goregaon E Mumbai - 400063.', 'Use Car Dealership', '8355910284', 'ketsd555@yahoo.co.in', 'Mumbai', 'goregaon e ', '2017-01-20 16:07:26', '2017-12-31 00:00:00', 4, 189, 120);

-- --------------------------------------------------------

--
-- Table structure for table `automobile_img`
--

CREATE TABLE IF NOT EXISTS `automobile_img` (
`id` int(11) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `autoid` int(11) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `automobile_img`
--

INSERT INTO `automobile_img` (`id`, `path`, `autoid`) VALUES
(11, 'uploads/automobile/0/2017-01-23_12-55-33_0.jpg', 9),
(10, 'uploads/automobile/0/2017-01-23_12-42-39_0.jpg', 8),
(9, 'uploads/automobile/189/2017-01-20_16-07-26_0.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `message` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
(16, NULL, 'abhijitkumbhar31@gmail.com', 'Nice new look of website loved it...'),
(15, 'Deepak Chandrakant Parte', 'deepakparte13@gmail.com', 'Hii\r\nI want to change title as my travels name kuldaivat tours & travels'),
(14, 'Renold', 'renoldd@gmail.com', 'kay kay'),
(13, 'Sandeep Kanwar', 'sanrin281@yahoo.com', 'I want to post free add in real estate category for industrial sheds on lease'),
(12, 'Pradip moraskar', 'pradipmoraskar@gmail.com', 'Good job Rahul☺');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
`hotelid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `address` text,
  `price` varchar(255) DEFAULT NULL,
  `description` text,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `amenities` text,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `services` varchar(1000) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `offersmenu` varchar(50) DEFAULT NULL,
  `offersdiscount` int(3) NOT NULL,
  `offerend` datetime DEFAULT NULL,
  `category` tinyint(4) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `visits` int(11) DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotelid`, `name`, `title`, `type`, `address`, `price`, `description`, `mobile`, `email`, `amenities`, `city`, `area`, `services`, `date`, `offersmenu`, `offersdiscount`, `offerend`, `category`, `userid`, `visits`) VALUES
(9, 'Rajendra Aware', 'Aware''s', 'Hotel', '536,\r\nSadashiv Peth,\r\nJondhale Chowk,\r\nKumthekar Road,\r\nPune.', '', '11:30 am to 3:30 pm,\r\n7:30 pm to 11:00 pm', '9422363161', 'rraware@gmail.com', 'Veg - Non veg Khanawal,\r\nAdvance Table booking,\r\nParcel facility.', 'Pune', 'Sadashiv Peth', '', '2017-01-23 12:19:53', '', 0, '0000-00-00 00:00:00', 2, 0, 510),
(7, 'Rajesh', 'BETEL LEAF', 'Sell', 'Shop no 8, Minal arcade, bldg no C, Near Samudra hotel, Nal stop, Karve road\r\nPune 411004', '', 'Good For Groups,\r\nGood For Kids,\r\nOutdoor Seating,\r\nTake Out,\r\nWalk-Ins Welcome\r\ncard', '97663 36299', 'arashishpatil@gmail.com', 'Parcel', 'Pune', 'karve nagar', '', '2017-01-12 21:00:26', '', 0, '0000-00-00 00:00:00', 2, 0, 324),
(30, 'll', 'Vaibhav Hotel', 'Hotel', ' Hno 513, Near Highway West Side, NH 4, Gokul Shirgaon MIDC, Kolhapur - 416234, Opp. Gokul Dairy (Map)', '', 'Featuring free WiFi, Vaibhav Hotel and Lodging Kaneriwadi offers accommodation in Unchagao. Guests can enjoy the on-site restaurant. Free private parking is available on site. Rooms are equipped with a flat-screen TV with cable channels. Some rooms include a seating area where you can relax. Rooms come with a private bathroom equipped with a bath. There is a 24-hour front desk at the property.', '1234567890', 'll@gmail.com', '•	Breakfast in room •	Restaurant •	Restaurant (a la carte) •	24hr reception •	ATM on-site •	Internet connection •	LAN Wi-Fi •	Free parking •	Parking •	Family rooms •	Room service •	Bath •	Bathroom •	Shower •	Extra long beds (> 2 metres) •	Lounge •	Tiled/marble •	Air conditioning •	Ironing facilities •	Television •	Cable channels •	Flat screen TV', 'Kaneriwadi', 'Gokulshirgaon MIDC', '5 star,Bakery,Bar,Breakfast Buffet,Branch,Buffet,Cafe,Cafeteria,Hookah,Live Music,Lounge,private dining available,Rsto Bar', '2017-10-13 01:07:45', 'Vaibhav specail Thali', 0, '2017-10-19 00:00:00', 2, 234, 285),
(31, 'dvm', ' DM hotel', 'Hotel', 'kagal', '22', 'good', '1234567890', 'dvm@gmail.com', 'parcel', 'kagl', 'kagal', '5 star,Bar,Cafe,Food court,Hot Offer,Kids Friendly,Nightlife,Pitcher perfect ,pub', '2017-10-27 18:14:58', 'DM specail Thali', 13, '2017-10-12 00:00:00', 2, 251, 32);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_img`
--

CREATE TABLE IF NOT EXISTS `hotel_img` (
`id` int(11) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `offersmenuimage` varchar(255) NOT NULL,
  `hotelid` int(11) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `hotel_img`
--

INSERT INTO `hotel_img` (`id`, `path`, `offersmenuimage`, `hotelid`) VALUES
(14, 'uploads/hotel/0/2017-01-23_12-19-24_0.jpg', '', 9),
(9, 'uploads/hotel/0/2017-01-12_20-54-56_1.jpg', '', 7),
(8, 'uploads/hotel/0/2017-01-12_20-54-56_0.jpg', '', 7),
(40, 'uploads/hotel/234/2017-10-13_01-07-46_2.jpg', '', 30),
(39, 'uploads/hotel/234/2017-10-13_01-07-45_1.jpg', '', 30),
(38, 'uploads/hotel/234/2017-10-13_01-07-45_0.jpg', '', 30),
(37, 'uploads/hotel/234/2017-10-04_16-51-57_0.jpg', '', 29),
(36, 'uploads/hotel/234/2017-10-04_16-59-43_0.jpg', '', 28),
(35, 'uploads/hotel/234/2017-10-04_17-45-49_0.jpg', '', 27),
(34, 'uploads/hotel/234/2017-10-04_17-43-57_0.jpg', '', 26),
(33, 'uploads/hotel/234/2017-10-04_17-34-49_0.jpg', '', 25),
(32, 'uploads/hotel/234/2017-10-04_17-30-52_0.jpg', '', 24),
(31, 'uploads/hotel/234/2017-10-04_16-53-19_0.jpg', '', 22),
(30, 'uploads/hotel/234/2017-10-04_17-49-19_0.jpg', '', 22),
(29, 'uploads/hotel/234/2017-10-04_17-22-01_0.jpg', '', 21),
(28, 'uploads/hotel/234/2017-10-04_17-15-12_0.jpg', '', 19),
(41, 'uploads/hotel/234/2017-10-13_01-07-46_3.jpg', '', 30),
(42, 'uploads/hotel/234/2017-10-13_01-07-46_4.jpg', '', 30),
(43, 'uploads/hotel/234/2017-10-13_01-07-46_5.jpg', '', 30),
(44, 'uploads/hotel/234/2017-10-13_01-07-47_6.jpg', '', 30),
(45, 'uploads/hotel/234/2017-10-13_01-07-47_7.jpg', '', 30),
(46, 'uploads/hotel/234/2017-10-13_01-07-47_8.jpg', '', 30),
(47, 'uploads/hotel/234/2017-10-13_01-07-47_9.jpg', '', 30),
(48, 'uploads/hotel/234/2017-10-13_01-07-47_10.jpg', 'uploads/hotel/234/2017-10-13_01-07-47_8.jpg', 30),
(49, 'uploads/hotel/251/2017-10-27_18-14-58_0.jpg', '', 31),
(50, 'uploads/hotel/251/2017-10-27_18-14-58_1.jpg', '', 31),
(51, 'uploads/hotel/251/2017-10-27_18-14-58_2.jpg', '', 31),
(52, 'uploads/hotel/251/2017-10-27_18-14-58_3.jpg', '', 31),
(53, 'uploads/hotel/251/2017-10-27_18-14-58_4.jpg', '', 31),
(54, 'uploads/hotel/251/2017-10-27_18-14-58_5.jpg', '', 31);

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE IF NOT EXISTS `other` (
`otherid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `address` longtext,
  `description` longtext,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` longtext,
  `area` longtext,
  `offerend` datetime DEFAULT NULL,
  `category` tinyint(4) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `visits` int(11) DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `other`
--

INSERT INTO `other` (`otherid`, `name`, `title`, `address`, `description`, `mobile`, `email`, `city`, `area`, `offerend`, `category`, `userid`, `date`, `visits`) VALUES
(11, 'Pravin Yenpure', 'Ganesh Enterprise', 'Flat no. 1,\r\nSidharth Park,\r\nC Wing,\r\nNear Vedbhavan,\r\nBhusari Colony,\r\nPaud Road,\r\nKothrud,\r\nPune 38\r\n', 'Earth movers & machinery Hire (Specialist in BOBCAT loaders & Mini Pock-land available on hire),\r\nBuilding material suppliers,\r\nBuilding material Transports.', '8087009192', 'shree.enterprises9192@gmail.com', 'Pune', 'Kotharud', '0000-00-00 00:00:00', 5, 0, '2017-01-25 09:32:22', 54),
(9, 'Love Kumar', 'Flower Nursery', 'Sihangad Road, Near Ranka jewelers, Hingne Khurd. ', 'All types of flower plants and pots are available in affordable price ', '9852799540', 'info@offersbull.com', 'Pune', 'Kothrud', '0000-00-00 00:00:00', 5, 0, '2017-01-19 10:11:50', 57),
(7, 'Chandresh Padiya', 'C.R.Dehy Foods', 'Survey No.117-P,\r\nSuvarkundala Road,\r\nNear Village Bhadra,\r\nMahua.', 'Manufacturer & Exporter of dehydrated vegitables ', '9879030081', 'crccrd@gmail.com', 'Bhavnanagar', 'Mahuva', '0000-00-00 00:00:00', 5, 0, '2017-01-12 20:29:38', 78),
(12, 'Pavan Jadhav', 'Kanhaiya cashew industry', 'Nesari,\r\nTal- Gadhinglaj,\r\nDist- Kolhapur,\r\n416505', 'We have A1 quality cashew, As per order we will deliver any quantity.', '8862001603', 'pawanjadhav2172@gmail.com', 'Kolhapur', 'Nesari', '0000-00-00 00:00:00', 5, 0, '2017-01-26 18:54:16', 62),
(13, 'Pavan Jadhav', 'Kanhaiya cashew industry', 'Nesari,\r\nTal- Gadhinglaj,\r\nDist- Kolhapur,\r\n416505', 'We provide Cashew and Beetroots, Spices(Masala)', '8862001603', 'pawanjadhav2172@gmail.com', 'Kolhapur', 'Nesari', '0000-00-00 00:00:00', 5, 0, '2017-01-26 21:27:16', 50),
(14, 'Vrushali D B', 'Samarth Events & Production(N24entertainments)', 'Shivajinagar;Pune', 'We do ..\r\n-Celebrity Management\r\n-Birthday Events\r\n-Launching \r\n-Wedding\r\n-Election work\r\n-Add making\r\n-Movie-Serial production\r\nEtc...', '9175393506', 'vrushali.hande07@gmail.com', 'Pune', 'Shivajinagar', '0000-00-00 00:00:00', 5, 223, '2017-03-29 19:11:18', 59),
(15, 'Vrushali D B', 'N24Food World(Shubhra Foods)', 'Shivajinagar pune', 'People love kokan..for its beautiful nature and specially for sea and Sea food..I have some unique Kokani food..every sea food lover must try this yummy mouth watering food..\r\nI have pickle...Chatani...Papad but made of fish..\r\n- Kolambi Pickle(150gm)-Rs.180/-\r\n-Shimpli Pickle(150gm)-Rs.180/-\r\n-Kalave Pickle(150gm)-Rs.135/-\r\n-Bombil Pickle(150gm)-Rs.165/-\r\n-Surmai/Bangda Pickle(150gm)-Rs.130/-\r\n-Kaad/Kardhi/Aabed Pickle(150gm)-Rs.115/-\r\n-Bombil Chatani(100gm)-Rs.65/-\r\n-Jawla Chatani(100gm)-Rs.50/-\r\n-Fish Papad(100gm)-Rs.85/-', '9175393506', 'vrushali.hande07@gmail.com', 'Pune', 'Shivajinagar', '0000-00-00 00:00:00', 5, 223, '2017-03-29 19:24:24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `other_img`
--

CREATE TABLE IF NOT EXISTS `other_img` (
`id` int(11) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `otherid` int(11) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `other_img`
--

INSERT INTO `other_img` (`id`, `path`, `otherid`) VALUES
(13, 'uploads/other/0/2017-01-26_18-54-18_2.jpg', 12),
(12, 'uploads/other/0/2017-01-26_18-54-17_1.jpg', 12),
(11, 'uploads/other/0/2017-01-26_18-54-16_0.jpg', 12),
(10, 'uploads/other/0/2017-01-25_09-32-22_0.jpg', 11),
(9, 'uploads/other/0/2017-01-19_10-11-50_0.jpg', 9),
(8, 'uploads/other/0/2017-01-12_20-29-26_0.jpg', 7),
(14, 'uploads/other/0/2017-01-26_21-27-16_0.jpg', 13),
(15, 'uploads/other/0/2017-01-26_21-27-16_1.jpg', 13),
(16, 'uploads/other/223/2017-03-29_19-11-18_0.jpg', 14);

-- --------------------------------------------------------

--
-- Table structure for table `pramotion`
--

CREATE TABLE IF NOT EXISTS `pramotion` (
`id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `sub_days` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `dateadded` date DEFAULT NULL,
  `daysleft` date DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `realestate`
--

CREATE TABLE IF NOT EXISTS `realestate` (
`realid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `address` text,
  `builtup` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `description` text,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `amenities` text,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `offerend` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `category` tinyint(4) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `visits` int(11) DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `realestate`
--

INSERT INTO `realestate` (`realid`, `name`, `title`, `type`, `address`, `builtup`, `price`, `description`, `mobile`, `email`, `amenities`, `city`, `area`, `date`, `offerend`, `category`, `userid`, `visits`) VALUES
(24, 'Jaidev Dembra', '"Ganesh Vihar" FOR SALE - AFFORDABLE FLATS (Vishrantwadi - Alandi Road)', 'Sell', '"Ganesh Vihar"\r\nColony No.3, Near SBI ATM, Ganeshnagar, Bopkhel-Near VSNL, PUNE. (Vishrantwadi - Alandi Road)', '3200', '2585000', 'Flats Ready Possession:\r\nOnly @3200/- per Sq.Ft.\r\n\r\nGround floor:\r\n1. G-03: 2BHK - 800 SqFt - 25.85 lakh\r\n\r\nThird floor:\r\n1. 301: 2BHK - 720 SqFt - 23.29 lakh \r\n2. 304: 1BHK - 635 - SqFt(SOLD OUT)\r\n\r\nFourth floor:\r\n1. 401: 1BHK - 705 SqFt - 22.81 lakh\r\n2. 402: 1BHK - 520 SqFt - 16.89 lakh\r\n3. 403: 1BHK - 540 SqFt - 17.53 lakh\r\n4. 404: 1BHK - 635 SqFt - 20.57 lakh\r\n5. 405: 1BHK - 665 SqFt - 21.53 lakh\r\n\r\nRegistration, Stamp Duty & Legal Charges Extra.\r\nNo VAT No SERVICE TAX.\r\nTotal Cost Is Negotiable.', '9270994994', 'offersbulhelp@gmail.com', '', 'pune', 'Vishrantwadi', '2017-01-18 12:45:44', '2017-07-11 06:05:52', 0, 0, 59),
(43, 'greensmangalore', '3 bhk flat for sale in Bolar', 'Sell', 'Green Aviation', '1770', '5664000', 'Ready to move In flats on 1770 sq ft ,3bhk flat which includes all modern amenities newly constructed flat 3200/sq ft near Shadi Mahal ,Bolar', '9902795787', 'noushidabanu462@gmail.com', 'modern amenities,car parking', 'Mangalore', 'Bolar', '2017-03-08 15:50:35', '2017-11-02 11:19:39', 0, 193, 93),
(27, 'packy1127@hotmail.com', '3 bhk flat for sale in Mangalore', 'Sell', 'green aviation', '1975', '8495200', '3 BHK FLAT FOR SALE IN PUMPWELL (MAK MARK)\r\nPumpwell is set to change the landmark of Mangalore city.Mak Mark  is a combination of commercial outlets and Residential  apartments closer to Pumpwell circle and serves as a fine link connecting Thokkottu, Deralakatte, Ullal   towards south east and Nanthoor .Amenities of Flat like lift ,car parking,gym,water tank ,childrens play area ,interlock  etc..3 bhk flat measuring with 1975 per sq ft 4300.\r\n\r\n', '9880963075', 'packy1127@hotmail.com', 'car parking,fitness center,lift,generator,children play area', 'Mangalore', 'Pumpwell', '2017-01-19 16:41:04', '2017-09-19 10:48:11', 0, 187, 57),
(30, 'greensmangalore', '3 bhk flat for sale in Mangalore', 'Sell', 'Green Aviation', '1765', '7589500', '3 BHK FLAT FOR SALE IN PUMPWELL (MAK MARK)\r\nPumpwell is set to change the landmark of Mangalore city.Mak Mark  is a combination of commercial outlets and Residential  apartments closer to Pumpwell circle and serves as a fine link connecting Thokkottu, Deralakatte, Ullal   towards south east and Nanthoor .Amenities of Flat like lift ,car parking,gym,water tank ,childrens play area ,interlock  etc..3 bhk flat measuring with 1765 per sq ft 4300\r\n', '9902795787', 'noushidabanu462@gmail.com', 'car parking ,lift,children play area', 'Mangalore', 'Pumpwell', '2017-01-21 11:08:18', '2017-10-12 19:29:10', 0, 193, 72),
(31, 'greensmangalore', '2 bhk flat for sale in Attavar', 'Sell', 'GREEN AVIATION', '1220', '4200000', 'FLAT FOR SAL IN ATTAVAR (MATHIAS ROAD)\r\n1220 Sq ft flat available for sale in Mathias Road ,Attavar  .10 year old flat with the good amenities like back up lift,car parking, children play area ,generator etc..ready to move only for 4200000(negotiable)\r\n', '9902795787', 'noushidabanu462@gmail.com', 'CAR  PARKING,CHILDREN PLAY ', 'Mangalore', 'ATTAVAR', '2017-01-23 10:50:22', '2017-09-19 11:11:57', 0, 193, 54),
(32, 'Dodke', 'Shobhan', 'Sell', 'S no. 106/1/3,\r\nNear Sihangad Institute,\r\nNH4,\r\nWarje,\r\nPune', '1000', '6500000', '2 BHK Flats', '9850607081', 'info@offersbull.com', 'All facilities', 'Pune', 'Warje', '2017-01-23 12:33:49', '2017-07-11 14:44:28', 0, 0, 52),
(34, 'Raju Patil', 'Jai Ganesh Real Estate Agency', 'Sell', 'S. No.45,\r\nNear Alok Nagari,\r\nJaydeep Chawk,\r\n Warje Malwadi,\r\npune - 58.', '500', '', '1 bhk,\r\n2bhk,\r\n3bhk,\r\n', '9860561119', 'patil.jaiganesh09@gmail.com', 'plots Redevelopments,\r\nRental & Sales,\r\nAll plumbing works.', 'Pune', 'Warje', '2017-01-25 09:42:41', '2017-10-04 11:28:59', 0, 0, 66),
(35, 'greensmangalore', 'COMMERCIAL SPACE FOR SALI IN HAMPANKATTA', 'Sell', 'GREEN AVIATION ,REGAL PLAZA , MANGALORE', '2135', '26000', 'COMMERCIAL  SPACE  FOR  SALE  IN  HAMPANKATTA\r\nHere we have a  commercial space for sale in Hampankatta ,Mangalore it is an under construction space measuring 2135/26000 14 ft hight ,road facing building \r\n', '9902795787', 'noushidabanu462@gmail.com', 'car parking', 'Mangalore', 'Hampankatta', '2017-01-27 12:35:36', '2017-07-06 07:36:40', 0, 193, 44),
(36, 'greensmangalore', '2 bhk flat for sale in Udupi', 'Sell', 'green aviation', '1196', '4856076', '2 BHK FLAT FOR SALE AVAILABLE IN UDUPI\r\nNewly constructed 3BHK Flat for sale available in Udupi from “KHAIN PROPERTIES” where you can enjoy the beauty of nature a great connectivity total 3 floors this in ground floor with a 3bedrooms ,2 balconies ,2 attached and 1 common toilet , kitchen ward roofs ,car parking, lift etc…1196sq ft area 3600 /sq ft. total rate for the property 4856076\r\n\r\n', '9902795787', 'noushidabanu462@gmail.com', 'maintance ,car parking', 'udupi', 'udupi', '2017-01-28 11:56:07', '2017-07-06 07:36:41', 0, 193, 49),
(37, 'greensmangalore', '3 bhk flat for sale in Udupi', 'Sell', 'GREEN AVIATION', '1377', '5573062', '3 BHK FLAT FOR SALE AVAILABLE IN UDUPI\r\nNewly constructed 3BHK Flat for sale available in Udupi from “KHAIN PROPERTIES” where you can enjoy the beauty of nature a great connectivity total 3 floors this in ground floor with a 3bedrooms ,2 balconies ,2 attached and 1 common toilet , kitchen ward roofs ,car parking, lift etc…1387 sq ft area 3600 /sq ft. total rate for the property 5573062\r\n', '9902795787', 'noushidabanu462@gmail.com', 'MODERN AMENITIES', 'udupi', 'ADI UDUPI', '2017-01-30 11:55:45', '2017-07-06 07:36:39', 0, 193, 45),
(39, 'greensmangalore', '3 bhk flat for sale in Udupi', 'Sell', 'GREEN AVIATION ,REGAL PLAZA ,MISSION STREET ,BUNDER ,MANGALORE', '1587', '3600', '3 BHK FLAT FOR SALE AVAILABLE IN UDUPI\r\nNewly constructed 3BHK Flat for sale available in Udupi from “KHAIN PROPERTIES” where you can enjoy the beauty of nature a great connectivity total 3 floors this in ground floor with a 3bedrooms ,2 balconies ,2 attached and 1 common toilet , kitchen ward roofs ,car parking, lift etc…1587 sq ft area 3600 /sq ft. total rate for the property 6393322\r\n', '9902795787', 'noushidabanu462@gmail.com', 'CAR PARKING,HEALTH CENTER ,GYM', 'udupi', 'udupi', '2017-02-03 11:04:53', '2017-07-06 07:36:41', 0, 193, 46),
(41, 'greensmangalore', '3 bhk flat for rent in emmekere,Mangalore', 'Rent', 'GREEN AVIATION ,REGAL PLAZA', '2400', '17000', '3 BHK  INDEPENDENT HOUSE FOR RENT IN EMMEKERE\r\nHere we have 3 bhk independent house for rent in Emmekere its measuring 2400 sq ft with the modern amenities rent per month 17000 for more  detail contact 9880963075\r\n', '9902795787', 'noushidabanu462@gmail.com', 'CAR PARKING,SWIMMING FOOL', 'Mangalore', 'Emmekere', '2017-02-06 11:40:51', '2017-09-19 10:33:58', 0, 193, 76),
(42, 'greensmangalore', '1 bhk flat for sale in Udupi', 'Sell', 'green aviation\r\n', '727 sq ft', '3600', '1 BHK FLAT FOR SALE AVAILABLE IN UDUPI\r\nNewly constructed 3BHK Flat for sale available in Udupi from “KHAIN PROPERTIES” where you can enjoy the beauty of nature a great connectivity total 3 floors this in ground floor with a 1bedrooms ,1 balconies ,1 attached and 1 common toilet , kitchen ward roofs ,car parking, lift etc…727 sq ft area 3600 /sq ft. total rate for the property 3014162\r\n', '9902795787', 'noushidabanu462@gmail.com', 'car parking ,modern amenities ', 'udupi', 'udupi', '2017-02-11 11:23:08', '2017-07-06 07:36:39', 0, 193, 86);

-- --------------------------------------------------------

--
-- Table structure for table `real_img`
--

CREATE TABLE IF NOT EXISTS `real_img` (
`id` int(11) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `realid` int(11) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `real_img`
--

INSERT INTO `real_img` (`id`, `path`, `realid`) VALUES
(40, 'uploads/real/193/2017-01-27_12-35-36_0.jpg', 35),
(39, 'uploads/real/0/2017-01-25_09-42-41_0.jpg', 34),
(38, 'uploads/real/186/2017-01-24_15-17-54_0.jpg', 33),
(37, 'uploads/real/0/2017-01-23_12-33-41_0.jpg', 32),
(36, 'uploads/real/193/2017-01-23_10-50-22_0.jpg', 31),
(35, 'uploads/real/193/2017-01-21_11-08-18_0.jpg', 30),
(34, 'uploads/real/172/2017-01-20_12-28-02_0.jpg', 29),
(33, 'uploads/real/172/2017-01-20_12-25-44_0.jpg', 28),
(32, 'uploads/real/187/2017-01-19_16-41-04_0.jpg', 27),
(31, 'uploads/real/186/2017-01-18_17-29-33_0.jpg', 26),
(29, 'uploads/real/0/2017-01-18_12-43-06_0.jpg', 24),
(30, 'uploads/real/186/2017-01-18_17-26-20_0.jpg', 25),
(28, 'uploads/real/0/2017-01-18_12-16-13_0.jpg', 23),
(41, 'uploads/real/193/2017-01-28_11-56-07_0.jpg', 36),
(42, 'uploads/real/193/2017-01-30_11-55-45_0.jpg', 37),
(43, 'uploads/real/193/2017-02-03_11-04-53_0.jpg', 39),
(44, 'uploads/real/193/2017-02-06_11-40-51_0.jpg', 41),
(45, 'uploads/real/193/2017-02-11_11-23-08_0.jpg', 42),
(46, 'uploads/real/193/2017-03-08_15-50-35_0.jpg', 43),
(47, 'uploads/real/172/2017-03-14_13-57-23_0.jpg', 44),
(48, 'uploads/real/172/2017-04-10_13-05-04_0.jpg', 45);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
`reg_id` int(11) NOT NULL,
  `username` longtext CHARACTER SET utf8,
  `mobile` longtext CHARACTER SET utf8,
  `email` longtext CHARACTER SET utf8,
  `password` longtext CHARACTER SET utf8,
  `otp` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `city` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `regdate` datetime NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=256 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_id`, `username`, `mobile`, `email`, `password`, `otp`, `status`, `address`, `city`, `regdate`) VALUES
(0, 'rahul', NULL, 'info@offersbull.com', '1a24676ac47e0a2b4866bce928de760b9f4f4e28', NULL, 0, NULL, NULL, '0000-00-00 00:00:00'),
(166, 'Shweta patil', '8796776709', 'patilsb3313@gmail.com', 'bcbd5f4c8a02f95d0b5784ffe913cbb662b549ef', NULL, 1, 'A/p-Chipri,Dist-kolhapur,Tal-shirol', 'jaysingpur', '0000-00-00 00:00:00'),
(165, 'PRITAM G', '9870443610', 'pritam.gilbile13@gmail.com', 'c728e3e57008cf569b9468121ae796771460bbbe', NULL, 1, NULL, NULL, '0000-00-00 00:00:00'),
(164, 'abhijit', '9168277713', 'abhijitkumbhar001@gmail.com', '33a485cb146e1153c69b588c671ab474f2e5b800', NULL, 1, NULL, NULL, '0000-00-00 00:00:00'),
(167, 'Rahul', '9689027676', 'grahul909@gmail.com', 'b89f6d73b29b55fded7c9eccde94dcdae5642dfa', NULL, 1, NULL, NULL, '0000-00-00 00:00:00'),
(168, 'sid', '8149077676', 'kabirsid143@gmail.com', 'b89f6d73b29b55fded7c9eccde94dcdae5642dfa', NULL, 1, NULL, NULL, '0000-00-00 00:00:00'),
(172, 'abhijit', '9168277713', 'abhijitkumbhar31@gmail.com', '33a485cb146e1153c69b588c671ab474f2e5b800', NULL, 1, 'Karad', 'karad', '2017-01-10 20:52:11'),
(173, 'vaibhav2125', '9975975111', 'vpisal7@gmail.com', '6bf200e0538945147acfeca237c178a1016411fc', '906658', 0, 'Rk Nagar, Kolhapur', 'Kolhapur', '2017-01-11 09:43:42'),
(174, 'Ronson Lobo', '8087801080', 'ronson.p.lobo1080@gmail.com', '3b6509985dd334df06d89d5fd38f9bafda3e1685', '122935', 0, NULL, NULL, '2017-01-12 16:14:34'),
(175, 'Prathamesh4u', '8857935193', 'developer.prathm@gmail.com', 'a0a962e978f5b4d4d6e593a8a55d8d845a5dc461', '461308', 0, NULL, NULL, '2017-01-12 16:19:23'),
(176, 'mandharemadhavi9@gmail.com', '9967869994', 'mandharemadhavi9@gmail.com', 'af2889f228eb28b84bcf4b3b77c0ae66ca2e6448', NULL, 1, 'Kartik Darshan,202 Pandurangwadi,Dombivli (E)', 'Dombivli ', '2017-01-12 16:26:18'),
(177, 'ankush', '9970931044', 'ankushraykar@gmail.com', '818693f20daf0992825d0c1e2d38f7a60fc97c12', NULL, 1, NULL, NULL, '2017-01-12 17:54:14'),
(178, 'Devendra  pilankar', '7887333885', 'devendra7887333885@gmail.com', '98328d4a786532b21b3c9634b5c252f89ab5b353', '684048', 0, NULL, NULL, '2017-01-13 08:01:57'),
(179, 'Must9781', '8866299317', 'cmm8182@gmail.com', '0cc28957d1afb85dc66dec08e0afa125778ceec3', '696459', 0, NULL, NULL, '2017-01-13 09:49:14'),
(180, 'imran ali', '9148594152', 'Ik211355@gmail.com', '472997e36f27b06667f99b8fe9b90a6b07b59945', NULL, 1, 'No.757 first floor 4th main  konena agrahara', 'bangalore', '2017-01-13 10:46:37'),
(181, 'CalendarGinyes', '8411061209', 'ginyescalendar@gmail.com', '11ccfbb911776a8238538a2743e5812176af313a', NULL, 1, 'Bazarpeth Nesari', 'Nesari', '2017-01-13 13:35:58'),
(182, 'nachideodhar@gmail.com', '8149214110', 'bhagyashreeservices19@gmail.com', '69b6d18ec50d2f0b150c05b9e872f75ae78e0748', NULL, 1, 'Savedi, Ahmednagar', 'Ahmednagar', '2017-01-13 15:46:54'),
(183, 'rutuyash17', '9404887777', 'rutuyash17@gmail.com', 'fd141af4a5876b5f37f6be611e1b15ef9cb88417', '696682', 0, NULL, NULL, '2017-01-15 12:46:06'),
(184, 'qwqw', '9765648872', 'kd@mail.com', 'db25f2fc14cd2d2b1e7af307241f548fb03c312a', '887539', 0, NULL, NULL, '2017-01-17 13:58:34'),
(185, 'qwqw', '9503115596', 'dalavisudip@gmail.com', '19485e369c691fa8ece1fabc8a6ceabfb5666b79', '358601', 0, NULL, NULL, '2017-01-17 13:59:38'),
(186, 'reachus@piiconsultants.com', '9811873109', 'reachus@piiconsultants.com', '628912ee5037df8c3d225aa62ba223c6988f7f4f', NULL, 1, 'Sector 44', 'Noida', '2017-01-18 16:54:13'),
(187, 'packy1127@hotmail.com', '9880963075', 'packy1127@hotmail.com', '2cc9cfe449a9d44b3e6a4ec0fc0b4a8a15f362ff', '608761', 0, 'Regal Plaza Mangalore', 'Magalore', '2017-01-19 16:29:00'),
(188, 'Prasad', '9699935757', 'prasadsc46@gmail.com', '6a66fec2e175092d920f06efbd00ce142bd5ffd9', '507126', 0, NULL, NULL, '2017-01-19 17:03:08'),
(189, 'Vaibhav', '8355910284', 'ketsd555@yahoo.co.in', '21f4e3a911d2160e4ae5c9427914403ef4bc4e1c', NULL, 1, 'City Motors, Gala No - 1, Shanti Compound, On East West Flyover Road, Next To Durian Estate, Near Pravasi Ind Estate, Itbhatti, Goregaon E Mumbai - 400063.', 'mumbai', '2017-01-20 15:49:14'),
(190, 'imran ali', '8618081672', 'alimran78660@yahoo.com', '472997e36f27b06667f99b8fe9b90a6b07b59945', NULL, 1, 'No.757, First Floor, 4th Main, SYNDICATE Bank Lane, Konena Agrahara, Old Air Port Road  Bangalore-560017  Karanataka,India', 'bangalore', '2017-01-20 16:09:09'),
(191, 'greensmangalore@gmail.com', '9902795787', 'noushinoushida03@gmail.com', '5cb377134d203559e7b7429b6e0d5818b30242f1', '466495', 0, NULL, NULL, '2017-01-20 16:41:42'),
(192, 'AMCHARSH', '8080198218', 'amktcon@gmail.com', '2e4bfc5ddd663d8bb6efdce9bb6f9db35ae7cb6a', NULL, 1, 'sec20, kharghar', 'Navi Mumbai', '2017-01-20 19:56:57'),
(193, 'greensmangalore', '9902795787', 'noushidabanu462@gmail.com', '5cb377134d203559e7b7429b6e0d5818b30242f1', NULL, 1, 'green aviation,Regal plaza', 'Mangalore', '2017-01-21 10:59:05'),
(194, 'Milind Bhanushali', '9821212620', 'compuguide1997@gmail.com', 'bd19541ef8dc46e238f4be7e429e7b18b0fb4a2e', '896430', 0, NULL, NULL, '2017-01-21 11:42:43'),
(195, 'manjay', '9820403802', 'manjay.bhosle@gmail.com', 'b3f2984d3c16c3dbb1735cec1ffd0229819e805f', '604164', 0, NULL, NULL, '2017-01-21 13:40:15'),
(196, 'Rahulg', '8097275136', 'rpgoswami2016@gmail.com', 'adc18a7276657b8e017e259c104d8558e02534a1', '140937', 0, NULL, NULL, '2017-01-22 09:55:17'),
(197, 'Sandesh Raul', '9987517224', 'sandesh_raul05@yahoo.co.in', '4d2f3131d54c4fe80678790ad113f6ca9e0683f8', '993221', 0, NULL, NULL, '2017-01-23 00:04:28'),
(198, 'Bhausaheb Shinde', '8805195471', 'shindesir07@gmail.com', '506cf3bb9a949c0796c6c17451c1733700022d03', '231125', 0, NULL, NULL, '2017-01-23 15:12:21'),
(199, 'ARUN Seshadri', '9677197490', 'arun138india@gmail.com', 'b5c317f63ff67e95192ebb4f4de4f758438129d0', NULL, 1, '35/35A Ganga Cauvery Apts 14th Street Thirumal Nagar, Surapet main road, vinayagapuram Chennai - 99', 'Chennai', '2017-01-24 22:33:16'),
(200, 'Paraggurav', '8108386333', 'Paraggurav1982@gmail.com', 'bdff81a13d4ce16ef881fe85b67926a3b84abf12', '626662', 0, NULL, NULL, '2017-01-26 16:00:34'),
(201, 'Aditi', '9953787203', 'sharmaaditi8924@gmail.com', 'd814d71c8a05cc6bfd1199f1393722aa75321ca3', NULL, 1, '', '', '2017-01-26 17:04:20'),
(202, 'Prasad A Nagpur', '7418322379', 'prasadnagpur@outlook.com', 'bb826a295ca1e35cba208964c2370849924f9b58', '628808', 0, NULL, NULL, '2017-01-26 22:16:14'),
(203, 'Nikhil Avhad', '9765533581', 'nvavhad@gmail.com', '8a29db3c75c2a31c551166b24cd3c60c39ff6b6c', NULL, 1, 'Pathardi phata, Nashik, Maharashtra, India.', 'Nashik', '2017-01-26 22:32:59'),
(204, 'Akshay', '8806159699', 'akshay.matkar007@gmail.com', 'bfb6601d8957e613d0fbe3ec9ba0bdc3c66bb2ac', '646358', 0, NULL, NULL, '2017-01-27 10:48:23'),
(205, 'Asher C M', '9823294302', 'cmasher6@gmail.com', '6becb630ddaa3e21f2afe754dac06ccabe113e2b', '251336', 0, NULL, NULL, '2017-01-27 11:31:59'),
(206, 'Argelecgroup22', '+228970512', 'info.argelecgrouptg@gmail.com', '1c12a079028201c7d57bfc3a52ef02b4bcd49977', '584332', 0, NULL, NULL, '2017-01-27 18:51:59'),
(207, 'Adesh sonawane', '9850926656', 'adeshsonawane111@gmail.com', 'f4644f3aaa54178d7f38620f1c249939e1b6392d', '738915', 0, NULL, NULL, '2017-01-27 19:11:46'),
(208, 'Manasya Health', '9820161747', 'manasyahealth@gmail.com', '0d167f3f571625a20e4f4173344f24ecc7288c2a', '423905', 0, NULL, NULL, '2017-01-28 09:28:33'),
(209, 'Umesh Vaidya', '9769147333', 'umeshvaidya21@gmail.com', '4bd4ef62643edad53208096b7a4aee8f8aeeb530', NULL, 1, 'ghodbunder road\r\n185', 'thane', '2017-01-28 09:53:18'),
(210, 'desaiashsish212', '9421355900', 'desaiashish212@gmail.com', 'c7dee53ea455c7ce18812395180b01fae0cff6ef', NULL, 1, '', 'Miraj', '2017-01-28 11:29:33'),
(211, 'Deepak Chandrakant Parte', '8976712876', 'deepakparte13@gmail.com', 'a75f8a966b81df7f30c794a91ca09e685792cbf7', NULL, 1, 'Shanti Enclave, Apeksha chs Ltd,\r\nNear shanti shopping center,\r\nMira Road (East)', 'Mumbai', '2017-01-29 12:22:26'),
(212, 'Sumit suranee', '7350331770', 'sumitsuranee27@gmail.com', 'e14bee5243a26f14547dab001972d42f1258d431', '170619', 0, NULL, NULL, '2017-01-29 19:36:10'),
(213, 'freebird2105', '8281603030', 'freebird2105@gmail.com', '95da367d5c2769487e538c14c45ade9bcff0febd', NULL, 1, 'Bejai, mangalore', 'Mangalore', '2017-01-30 17:23:48'),
(214, 'Rohan', '8380801133', 'roma1995@gmail.com', '20239b0a224d300d504af25181ff4b296ce50764', '405721', 0, NULL, NULL, '2017-01-30 21:36:13'),
(215, 'Rohan', '8380801133', 'rohanmane100@yahoo.com', '20239b0a224d300d504af25181ff4b296ce50764', NULL, 1, '....', 'Kolhapur', '2017-01-30 21:37:24'),
(216, 'pundlik fadake', '7709513904', 'pundlik.fadake29@gmail.com', '54eb0381f9f3a86c8ed4613b18bad097ef9a83f9', '190534', 0, NULL, NULL, '2017-02-01 10:06:30'),
(217, 'mahesh', '9833633004', 'mahendra.mk100@gmail.com', '7ae68e53cdb37560ad911e27680c6b39ac03528e', NULL, 1, '1/3 annat vadi kalba devi road bhuleshwar ', 'mumbai', '2017-02-02 09:58:32'),
(218, 'Narendra Pednekar', '9029912076', 'ibas.narendra@rediffmail.com', 'dc10bee44efb8903e760803ec8f2e217511bd384', NULL, 1, '37 3/4, shankar Nagar, Mahul Road, R.C.Marg, Chembur, Mumbai 400074', 'Mumbai', '2017-02-02 14:07:27'),
(219, 'narendra rajguru', '9225879095', 'narendra.rajguru@gmail.com', 'd0969d2464a2df3d8729780540a1c7b5124a632b', '140157', 0, NULL, NULL, '2017-02-02 15:29:22'),
(220, 'vikramgawade', '7507181955', 'vikram.gawade4@gmail.com', 'b2df6d130e867e4738862ea657c7f084d3913095', '378157', 0, NULL, NULL, '2017-03-02 16:37:53'),
(221, 'asdf', 'asdsaasasa', 'a@b.com', 'a642a77abd7d4f51bf9226ceaf891fcbb5b299b8', '921180', 0, NULL, NULL, '2017-03-02 16:45:10'),
(222, 'Sachin', '9970074744', 'sachu6633@gmail.com', 'f52c4919257b03527fc6c75110bda0d7d4261a67', NULL, 1, 'Near bus stand main market mahabaleshwar', 'Mahabaleshwar ', '2017-03-28 22:11:02'),
(223, 'Vrushali D B', '9175393506', 'vrushali.hande07@gmail.com', 'f69df6538d75692f6b1b784d3ad5d84ffc9afdf4', NULL, 1, 'Shivajinagar', 'Pune', '2017-03-29 18:36:40'),
(224, 'Deep kansara', '9969712757', 'deepkansara65@yahoo.in', '2b7d8cbcebbc3477ea8d1f52b30126e26ae4a009', '878385', 0, NULL, NULL, '2017-06-07 15:19:19'),
(225, 'nilkal', '8779870282', 'nileshkalekar@gmail.com', '6218be0fb85b63217c59d227efff058784f8b70c', '725149', 0, NULL, NULL, '2017-06-09 00:19:34'),
(226, 'harshad', '8698913584', 'harsh.patil@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '769070', 0, NULL, NULL, '2017-09-19 15:50:07'),
(227, 'aa', '1234567890', 'aa@gmail.com', '2882f38e575101ba615f725af5e59bf2333a9a68', NULL, 1, 'bnm,vvvjhhh', 'aaa', '2017-09-19 15:58:42'),
(229, 'ddd', '1234567888', 'dm@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '663248', 0, NULL, NULL, '2017-09-27 11:12:28'),
(230, 'aaa', '1234567890', 'aaa@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', NULL, 1, NULL, NULL, '2017-09-27 11:26:58'),
(231, 'aaa', '1234567890', 'aaa1@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', NULL, 1, NULL, NULL, '2017-09-27 10:46:17'),
(232, 'rrrrr', '1234567890', 'qq@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '328640', 0, NULL, NULL, '2017-10-04 17:15:22'),
(233, 'rrrrr', '1234567890', 'rrr@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '813422', 0, NULL, NULL, '2017-10-04 17:17:06'),
(234, 'll', '1234567890', 'll@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', NULL, 1, 'kolhapur', 'kolhapur kolhapur', '2017-10-04 17:10:14'),
(235, 'vinayak done', '9049969700', 'vinayakdone09@gmail.com', 'a41a6172b163324f5fc44f7e4241a492eaba4cc9', NULL, 1, 'shivaji chowk', 'kagal', '2017-10-04 17:25:13'),
(236, 'Shivaji', '9896325689', 'shivaji@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', NULL, 1, NULL, NULL, '2017-10-27 12:46:03'),
(239, 'vinayak', '9809090765', 'vinayak@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '963514', 0, NULL, NULL, '2017-10-27 20:56:01'),
(240, 'mahesh', '9876543218', 'mahesh@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '910644', 0, NULL, NULL, '2017-10-27 20:57:47'),
(243, 'vishwas', '9809876543', 'vishal@gmail.com', 'bfe54caa6d483cc3887dce9d1b8eb91408f1ea7a', NULL, 1, NULL, NULL, '2017-10-27 20:22:18'),
(248, 'sandy', '1234567892', 'sandy@gmail.com', '4b4b04529d87b5c318702bc1d7689f70b15ef4fc', '754882', 0, NULL, NULL, '2017-10-27 20:40:58'),
(250, 'swarup', '8888910497', 'swarup.yadav1687@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', '117106', 0, NULL, NULL, '2017-10-27 20:17:43'),
(251, 'dvm', '1234567890', 'dvm@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', NULL, 1, NULL, NULL, '2017-10-27 18:20:09'),
(252, 'vijay', '9809876543', 'vijay@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', NULL, 1, NULL, NULL, '2017-10-27 18:21:09'),
(253, 'sandipkumbhar', '9089898989', 'sandip_kmbhr@rediff.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '893961', 0, NULL, NULL, '2017-11-02 16:30:36'),
(254, 'vaibhavk', '8888258636', 'vaibhavkats@gmail.com', 'bfe54caa6d483cc3887dce9d1b8eb91408f1ea7a', NULL, 1, NULL, NULL, '2017-11-02 16:41:30'),
(255, 'sam', '9876543212', 'sam@gmail.com', 'a4599d284c1e031db3565ff54bdeb17554e49fb3', NULL, 1, NULL, NULL, '2017-11-03 15:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `travelling`
--

CREATE TABLE IF NOT EXISTS `travelling` (
`travelid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `address` text,
  `price` varchar(255) DEFAULT NULL,
  `description` text,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `offerend` datetime DEFAULT NULL,
  `category` tinyint(4) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `visits` int(11) DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `travelling`
--

INSERT INTO `travelling` (`travelid`, `name`, `title`, `address`, `price`, `description`, `mobile`, `email`, `city`, `area`, `date`, `offerend`, `category`, `userid`, `visits`) VALUES
(8, 'nachideodhar@gmail.com', 'Travel & Tourism', 'Savedi, Ahmednagar', '', 'Holiday packages ( Domestic & International ), Flight Booking, Rail Booking, Bus Booking, Passport Assistance', '8149214110', 'bhagyashreeservices19@gmail.com', 'Ahmednagar', 'Savedi', '2017-01-20 11:21:46', '0000-00-00 00:00:00', 3, 182, 74);

-- --------------------------------------------------------

--
-- Table structure for table `travelling_img`
--

CREATE TABLE IF NOT EXISTS `travelling_img` (
`id` int(11) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `travelid` int(11) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `travelling_img`
--

INSERT INTO `travelling_img` (`id`, `path`, `travelid`) VALUES
(7, 'uploads/travelling/182/2017-01-20_11-21-46_0.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tution`
--

CREATE TABLE IF NOT EXISTS `tution` (
`tutid` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `address` text,
  `description` text,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `offerend` datetime DEFAULT NULL,
  `category` tinyint(4) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `visits` int(11) DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tution`
--

INSERT INTO `tution` (`tutid`, `name`, `title`, `address`, `description`, `mobile`, `email`, `city`, `area`, `date`, `offerend`, `category`, `userid`, `visits`) VALUES
(11, 'Aditi', 'Tutton for clas 4 - 10 for all boards ', 'Shastri Nagar, Ghaziabad', 'Tuition for the classes from 4-10 for both ICSE and CBSE board as well as for open school students', '9953787203', 'sharmaaditi8924@gmail.com', 'Ghaziabad', 'Shastri Nagar', '2017-01-26 17:16:54', '0000-00-00 00:00:00', 1, 201, 86),
(10, 'nachideodhar@gmail.com', 'Private Tutions', 'Savedi, Ahmednagar', 'Private (Home Based) classed for 11th, 12th & B.Com students.', '8149214110', 'bhagyashreeservices19@gmail.com', 'Ahmednagar', 'Savedi', '2017-01-20 11:25:03', '0000-00-00 00:00:00', 1, 182, 72);

-- --------------------------------------------------------

--
-- Table structure for table `tut_img`
--

CREATE TABLE IF NOT EXISTS `tut_img` (
`id` int(11) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `tutid` int(11) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tut_img`
--

INSERT INTO `tut_img` (`id`, `path`, `tutid`) VALUES
(15, 'uploads/tution/172/2017-03-14_13-50-11_0.jpg', 12),
(14, 'uploads/tution/201/2017-01-26_17-16-54_0.jpg', 11),
(13, 'uploads/tution/182/2017-01-20_11-25-03_0.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `usercount`
--

CREATE TABLE IF NOT EXISTS `usercount` (
  `count` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usercount`
--

INSERT INTO `usercount` (`count`) VALUES
(4261),
(4286);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
`id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `phoneno` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `emailid`, `phoneno`) VALUES
(2, 'bb', 'aaa@gmail.com', 2147483647),
(3, 'dd', 'aaa@gmail.com', 2147483647),
(4, 'ee', 'aaa@gmail.com', 2147483647),
(5, 'ff', 'aaa@gmail.com', 2147483647),
(6, 'gg', 'aaa@gmail.com', 2147483647),
(11, 'ss', 'ss@gmail.com', 12345678),
(12, 'nn', 'nn@gmail.com', 1234566),
(13, 'bbb', 'fff@gmail.com', 1234567890),
(14, 'ww', 'ww@gmail.com', 123456789),
(15, 'vv', 'vv@gmail.com', 12345667),
(16, 'vv', 'vv@gmail.com', 12345667),
(17, 'vv', 'vv@gmail.com', 12345667),
(18, 'vv', 'vv@gmail.com', 12345667),
(19, 'vv', 'vv@gmail.com', 12345667),
(20, 'vv', 'vv@gmail.com', 12345667),
(21, 'vv', 'vv@gmail.com', 12345667),
(22, 'vv', 'vv@gmail.com', 12345667),
(23, 'jj', 'jj@gmail.com', 1234),
(24, 'kk', 'kk@gmail.com', 123454),
(25, 'kk', 'kk@gmail.com', 123454),
(26, 'kk', 'kk@gmail.com', 123454),
(27, 'dd', 'dd@gmail.com', 1232132),
(28, 'dd', 'dd@gmail.com', 1232132),
(29, 'hh', 'hh@gmail.com', 12344554);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `automobile`
--
ALTER TABLE `automobile`
 ADD PRIMARY KEY (`autoid`);

--
-- Indexes for table `automobile_img`
--
ALTER TABLE `automobile_img`
 ADD PRIMARY KEY (`id`), ADD KEY `autoid` (`autoid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
 ADD PRIMARY KEY (`hotelid`);

--
-- Indexes for table `hotel_img`
--
ALTER TABLE `hotel_img`
 ADD PRIMARY KEY (`id`), ADD KEY `hotelid` (`hotelid`);

--
-- Indexes for table `other`
--
ALTER TABLE `other`
 ADD PRIMARY KEY (`otherid`);

--
-- Indexes for table `other_img`
--
ALTER TABLE `other_img`
 ADD PRIMARY KEY (`id`), ADD KEY `tutid` (`otherid`);

--
-- Indexes for table `pramotion`
--
ALTER TABLE `pramotion`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `realestate`
--
ALTER TABLE `realestate`
 ADD PRIMARY KEY (`realid`);

--
-- Indexes for table `real_img`
--
ALTER TABLE `real_img`
 ADD PRIMARY KEY (`id`), ADD KEY `real_id` (`realid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `travelling`
--
ALTER TABLE `travelling`
 ADD PRIMARY KEY (`travelid`);

--
-- Indexes for table `travelling_img`
--
ALTER TABLE `travelling_img`
 ADD PRIMARY KEY (`id`), ADD KEY `travelid` (`travelid`);

--
-- Indexes for table `tution`
--
ALTER TABLE `tution`
 ADD PRIMARY KEY (`tutid`);

--
-- Indexes for table `tut_img`
--
ALTER TABLE `tut_img`
 ADD PRIMARY KEY (`id`), ADD KEY `tutid` (`tutid`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `automobile`
--
ALTER TABLE `automobile`
MODIFY `autoid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `automobile_img`
--
ALTER TABLE `automobile_img`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
MODIFY `hotelid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `hotel_img`
--
ALTER TABLE `hotel_img`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
MODIFY `otherid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `other_img`
--
ALTER TABLE `other_img`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `pramotion`
--
ALTER TABLE `pramotion`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `realestate`
--
ALTER TABLE `realestate`
MODIFY `realid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `real_img`
--
ALTER TABLE `real_img`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=256;
--
-- AUTO_INCREMENT for table `travelling`
--
ALTER TABLE `travelling`
MODIFY `travelid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `travelling_img`
--
ALTER TABLE `travelling_img`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tution`
--
ALTER TABLE `tution`
MODIFY `tutid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tut_img`
--
ALTER TABLE `tut_img`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
