-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2017 at 08:07 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `affinity_doorstepbiblio`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads_master`
--

CREATE TABLE `ads_master` (
  `sno` int(11) NOT NULL,
  `ad_id` int(5) NOT NULL,
  `ad_title` varchar(50) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `img_id` int(5) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `ph` int(13) DEFAULT NULL,
  `sysdate` date DEFAULT NULL,
  `uid` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads_master`
--

INSERT INTO `ads_master` (`sno`, `ad_id`, `ad_title`, `book_id`, `img_id`, `name`, `email`, `ph`, `sysdate`, `uid`) VALUES
(1, 1, 'Bangla For Sale', 1, 1, NULL, NULL, NULL, '2017-12-14', 1006),
(2, 2, 'House 120 Sq Yrds', 2, 2, NULL, NULL, NULL, '2017-12-14', 1006),
(3, 3, 'House 250 Sq Yrds', 3, 3, NULL, NULL, NULL, '2017-12-14', 1006),
(4, 4, 'Luxury Banglows 1000 Sq Yrds', 4, 4, NULL, NULL, NULL, '2017-12-14', 1006),
(5, 5, 'Luxury Home 1000 Sq Yrds', 5, 5, NULL, NULL, NULL, '2017-12-14', 1006);

-- --------------------------------------------------------

--
-- Table structure for table `book_upload`
--

CREATE TABLE `book_upload` (
  `sno` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `isbn` varchar(20) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `subtitle` varchar(50) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `lang` varchar(10) DEFAULT NULL,
  `rel_date` date DEFAULT NULL,
  `pages` int(5) DEFAULT NULL,
  `book_cond` varchar(50) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `cat_id` int(3) DEFAULT NULL,
  `descp` text,
  `price` decimal(7,2) DEFAULT NULL,
  `publisher` varchar(50) DEFAULT NULL,
  `img_id` int(5) DEFAULT NULL,
  `uid` int(5) DEFAULT NULL,
  `sysdate` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_upload`
--

INSERT INTO `book_upload` (`sno`, `book_id`, `isbn`, `title`, `subtitle`, `author`, `lang`, `rel_date`, `pages`, `book_cond`, `type`, `cat_id`, `descp`, `price`, `publisher`, `img_id`, `uid`, `sysdate`) VALUES
(1, 1, 'KDA Society', 'Bangla at Gulshan Iqbal', 'House', 'Karachi', 'Gulshan', '2020-12-17', 2, '2', '2', 0, 'The housing project is located in Scheme 45, Northern Bypass, and is near schools, restaurants, hospitals, public transportation facilities, and shopping malls. ', '99999.99', '02', 1, 1006, '2017-12-14'),
(2, 2, '', 'Bangla at Tariq Road', 'House', 'Karachi', 'eng', '2020-12-17', 56, 'new', 'new', 0, 'ok', '99999.99', 'ok', 2, 1006, '2017-12-14'),
(3, 3, '', 'Bangla at Nazimabad', 'Bangla at Nazimabad', 'Karachi', 'eng', '2020-12-17', 56, 'new', 'new', 0, 'ok', '99999.99', 'ok', 3, 1006, '2017-12-14'),
(4, 4, '', 'Bangla at Nazimabad', 'Bangla at Nazimabad', 'Karachi', 'eng', '2020-12-17', 56, 'new', 'new', 0, 'ok', '99999.99', 'ok', 4, 1006, '2017-12-14'),
(5, 5, '', 'Bangla at Defence', 'Bangla at Defence', 'Karachi', 'eng', '2020-12-17', 56, 'new', 'new', 0, 'sds', '99999.99', 'ok', 5, 1006, '2017-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `cat_id` int(3) NOT NULL,
  `cat_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`cat_id`, `cat_name`) VALUES
(1, 'House'),
(2, 'Plot');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `sno` int(11) NOT NULL,
  `don_in` int(5) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `ph` varchar(20) DEFAULT NULL,
  `no_don` int(5) DEFAULT NULL,
  `sysdate` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`sno`, `don_in`, `name`, `email`, `address`, `ph`, `no_don`, `sysdate`) VALUES
(1, 1, 'ARshad Mahmood', 'mlis_2000@hotmail.com', 'Block 16, Gulistan e Johar', '03335321480', 1, '2015-11-07'),
(2, 2, '', '', '', '', 0, '2015-11-07'),
(3, 3, '', '', '', '', 0, '2015-11-07'),
(4, 4, 'asma', 'asma.anil@yahoo.com', 'g11a', '03332626', 20, '2015-11-29'),
(5, 5, 'Muzaffar', 'muzaffargenius.85@gmail.com', '', '345', 10, '2015-11-29'),
(6, 6, 'Elric', '8ty4ul57g5@outlook.com', 'An inngtlieelt point of view, well expressed! Thanks!', 'tmYmTv6re', 0, '2017-01-15'),
(7, 7, 'article on health tips', 'kkwfczh@gmail.com', 'always i used to read smaller articles or reviews that  as well clear their motive, and that is also', 'article on health ti', 0, '2017-03-23'),
(8, 8, 'national health advice', 'zavfmhfmb@gmail.com', 'Heya terrific blog! Does running a blog similar to this require a large amount of work? I have no kn', 'national health advi', 0, '2017-03-23'),
(9, 9, 'health insurance', 'mowdmxbnf@gmail.com', 'Hello there, simply was aware of your weblog via Google, and found that it is really informative. I ', 'health insurance', 0, '2017-03-24'),
(10, 10, 'online education', 'logfyeqrgdk@gmail.com', 'This piece of writing provides clear idea in favor of the new viewers of blogging, that actually how', 'online education', 0, '2017-03-24'),
(11, 11, 'best online education', 'kvtxedmau@gmail.com', 'This info is invaluable. How can I find out more?|\r\nbest online education http://educationclue.eu/', 'best online educatio', 0, '2017-03-25'),
(12, 12, 'masters in education', 'pexuszvo@gmail.com', 'Good respond in return of this difficulty with genuine arguments and telling everything on the topic', 'masters in education', 0, '2017-03-26'),
(13, 13, 'online school tips', 'obubqp@gmail.com', 'What a material of un-ambiguity and preserveness of precious familiarity on the topic of unpredicted', 'online school tips', 0, '2017-03-27'),
(14, 14, 'money investment advice', 'szcvmnvukp@gmail.com', 'Way cool! Some extremely valid points! I appreciate you writing this article and also the rest of th', 'money investment adv', 0, '2017-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `img_upload`
--

CREATE TABLE `img_upload` (
  `img_id` int(5) NOT NULL,
  `img_path_1` varchar(200) DEFAULT NULL,
  `img_path_2` varchar(200) DEFAULT NULL,
  `img_path_3` varchar(200) DEFAULT NULL,
  `uid` int(5) DEFAULT NULL,
  `sysdate` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_upload`
--

INSERT INTO `img_upload` (`img_id`, `img_path_1`, `img_path_2`, `img_path_3`, `uid`, `sysdate`) VALUES
(1, 'uploads/1.jpg', 'uploads/1.jpg', 'uploads/1.jpg', 1006, '2017-12-14'),
(2, 'uploads/2.jpg', 'uploads/2.jpg', 'uploads/2.jpg', 1006, '2017-12-14'),
(3, 'uploads/3.jpg', 'uploads/3.jpg', 'uploads/3.jpg', 1006, '2017-12-14'),
(4, 'uploads/9.jpg', 'uploads/9.jpg', 'uploads/9.jpg', 1006, '2017-12-14'),
(5, 'uploads/4.jpg', 'uploads/4.jpg', 'uploads/4.jpg', 1006, '2017-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `sno` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `add1` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `img_path` varchar(200) DEFAULT NULL,
  `pwd` varchar(10) DEFAULT NULL,
  `ph` varchar(20) DEFAULT NULL,
  `st_id` int(1) DEFAULT NULL,
  `sysdate` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`sno`, `uid`, `fname`, `lname`, `city`, `add1`, `email`, `img_path`, `pwd`, `ph`, `st_id`, `sysdate`) VALUES
(1, 1001, 'Muzaffar', 'Zaheer', 'Karachi', 'A-204, Haroon View', 'muzaffargenius_85@hotmail.com', 'uploads/PLC new Logo.jpeg', '123456789', '03473824037', 2, '2017-10-29'),
(8, 1007, 'asma', 'anil', 'karachi', 'UPS', 'asma.anil@yahoo.com', 'uploads/Food.png', '123', '333314', 2, '2017-06-29'),
(7, 1006, 'anil', 'zafar', 'karachi', 'gg', 'anil82.zafar@gmail.com', 'uploads/img.jpg', '12345', '9999', 2, '2017-10-06'),
(6, 1005, 'Muzaffar', '', '', '', 'muzaffargenius.85@gmail.com', NULL, 'shinobi', '345', 2, '2015-11-28'),
(9, 1008, 'Arshad', 'Mahmood', 'Karachi', 'Gulistan e Johar', 'arshad.sbp@gmail.com', 'uploads/PLC Logo.jpg', '12345678', '03335321480', 2, '2015-11-29'),
(10, 1009, 'Muhammad kabir', 'Khan', 'lahore', 'Gulberg III Lahore', 'kabirali@fccollege.edu.pk', 'uploads/2013-12-15 20.06.03-1.jpg', 'anisa66', '03445524424', 2, '2015-12-08'),
(11, 1010, 'Adnan', '', '', '', 'shaikh109@gmail.com', 'uploads/AdnanShaikh.jpg', 'ali_123', '03213828055', 2, '2015-12-22'),
(12, 1011, 'rizwan', 'durrani', 'Quetta', 'Durrani Villas, Ahmedzai colony No.1, Awan-e-kalat', 'rizwan_durrani88@yahoo.com', NULL, 'akaila11', '+923337800045', 2, '2016-01-02'),
(13, 1012, 'Asim', 'Javed', 'Peshawar', '', 'asim_badboy@yahoo.com', NULL, 'asim123jav', '03139963047', 1, '2016-01-02'),
(14, 1013, 'Asim', 'Javed', 'Peshawar', 'Peshawar', 'javed_dashing@yahoo.com', NULL, 'asimjavedj', '03139963047', 1, '2016-01-02'),
(15, 1014, 'babsabtabkap', 'babsabtabkap', 'New York', 'Xh2CwF http://brothosonkonlonwon.ru', 'dsggsdrggss@gmail.com', NULL, 'Ahl3T33E', 'lqsqTJeVaKqQxwKc', 1, '2016-01-14'),
(16, 1015, 'babsabtabkapvbdrgsdg', 'babsabtabkapvbdrgsdg', 'New York', 'FSeIau http://brothosonkonlonwon.ru', 'fa32gsg3rgsdf@gmail.com', NULL, 'ytwFC9Z4', 'kGVZTIDrcqYgpdnfGGT', 1, '2016-02-08'),
(17, 1016, 'khurram', 'anwar', 'lahore', 'gulburg 3', 'khurramanwar0306@gmail.com', NULL, 'marruhk129', '03069323492', 1, '2016-05-17'),
(18, 1017, 'aimen', 'batool', 'lahore', '', 'aimenbatool31@yahoo.com', NULL, '12341234', '042311111111', 1, '2016-05-25'),
(19, 1018, 'nike air pas cher', 'nike air pas cher', 'nike air pas cher', 'panty line. Likewise, thong swimsuits have gotten ', 'erbmogkd@gmail.com', NULL, '123456', 'nike air pas cher', 1, '2016-05-31'),
(20, 1019, 'nike air pas cher', 'nike air pas cher', 'nike air pas cher', 'recently worked becoming a nurse in Nunavut.\r\nnike', 'loyloijuf@gmail.com', NULL, '123456', 'nike air pas cher', 1, '2016-06-06'),
(21, 1020, 'nike blazer', 'nike blazer', 'nike blazer', 'Watching people the clip along with the saw a cont', 'avglmq@gmail.com', NULL, '123456', 'nike blazer', 1, '2016-06-12'),
(22, 1021, 'Nike Air Max Pas Che', 'Nike Air Max Pas Che', 'Nike Air Max Pas Che', 'pouch or purse. Leather pouches are fun and easy t', 'sxwgpltlt@gmail.com', NULL, '123456', 'Nike Air Max Pas Che', 1, '2016-06-21'),
(23, 1022, 'nike blazer pas cher', 'nike blazer pas cher', 'nike blazer pas cher', 'Jumaat Jantan, Moudourou Moise, Hamqammal Shah, Mu', 'rckycgkjj@gmail.com', NULL, '123456', 'nike blazer pas cher', 1, '2016-06-26'),
(24, 1023, 'usama ', 'waleed', 'lhr', '8/1', 'checkpost82@gmail.com', NULL, 'test123', '03347584599', 1, '2016-07-22'),
(25, 1024, 'anil', 'zafar', 'lahore', 'aaa', 'anilzafar@fccollege.edu.pk', 'uploads/Winter.jpg', 'goldantown', '933333148097', 1, '2016-07-25'),
(26, 1025, 'è²¡ç¥žå¨›æ¨‚åŸŽ', 'è²¡ç¥žå¨›æ¨‚åŸŽ', 'è²¡ç¥žå¨›æ¨‚åŸŽ', 'I believe this is among the most important info fo', 'ggwqsieq@gmail.com', NULL, '123456', 'è²¡ç¥žå¨›æ¨‚åŸŽ', 1, '2016-07-26'),
(27, 1026, 'JimmiXS', 'JimmiXS', 'New York', '5tVyuq http://www.FyLitCl7Pf7kjQdDUOLQOuaxTXbj5iNG', 'jimos4581rt@hotmail.com', NULL, 'rnVSfAem', 'UsCDrftapqvEKivOfnd', 1, '2016-08-12'),
(28, 1027, 'nike free sverige', 'nike free sverige', 'nike free sverige', 'Itè—s really a great and useful piece of info. I ', 'jhbesruy@gmail.com', NULL, '123456', 'nike free sverige', 1, '2016-10-05'),
(29, 1028, 'ãƒ­ãƒ¬ãƒƒã‚¯ã‚¹ ãƒ‡ã', 'ãƒ­ãƒ¬ãƒƒã‚¯ã‚¹ ãƒ‡ã', 'ãƒ­ãƒ¬ãƒƒã‚¯ã‚¹ ãƒ‡ã', 'ã‚¹ãƒ¼ãƒ‘ãƒ¼ã‚³ãƒ”ãƒ¼ æ™‚è¨ˆ - ã‚¹ãƒ¼ãƒ‘ãƒ¼ã‚³ãƒ”ã', 'gkzenaxk@gmail.com', NULL, '123456', 'ãƒ­ãƒ¬ãƒƒã‚¯ã‚¹ ãƒ‡ã', 1, '2016-10-08'),
(30, 1029, 'Zain', 'Zaki', 'LAhore', '214 block a tajpura scheme lahore', 'zainzaki519@gmail.com', NULL, 'zainpucit1', '03234120062', 1, '2016-12-28'),
(31, 1030, 'Cheap Jerseys Free S', 'Cheap Jerseys Free S', 'Cheap Jerseys Free S', '95 regular for endless people and purchasers moreo', 'oihifp@gmail.com', NULL, '123456', 'Cheap Jerseys Free S', 1, '2017-01-16'),
(32, 1031, 'Cheap Jerseys China ', 'Cheap Jerseys China ', 'Cheap Jerseys China ', 'Louis Cardinals catcher was not in the starting li', 'rnzgqtvwt@gmail.com', NULL, '123456', 'Cheap Jerseys China ', 1, '2017-03-18'),
(33, 1032, 'Barnypok', 'Barnypok', 'New York', 'gPfR63 http://www.LnAJ7K8QSpkiStk3sLL0hQP6MO2wQ8gO', 'jimos4581rt1@hotmail.com', NULL, '5PKaAjz6', 'bkBoxMfbHPr', 1, '2017-04-01'),
(34, 1033, 'Muhammad ', 'adeel', 'Karachi', 'F B AREA Karachi', 'adeel_90@hotmail.co.uk', NULL, 'adeel123', '03422705606', 1, '2017-05-06'),
(35, 1034, 'Muh', 'adeel', 'karachi', 'gulshan', 'adeel_eddy@live.com', 'uploads/man-people-space-desk.jpg', '123456789', '03331234567', 1, '2017-06-05'),
(36, 1035, 'm', 'adel', 'karachi', 'gulshan', 'adeel@live.com', 'uploads/toys.png', '123456789', '03422705606', 1, '2017-06-28'),
(37, 1036, 'daniyal', 'ahmed', 'karachi', 'nazimabad', 'daniyal@gmail.com', 'uploads/img.jpg', '123456', '03451234567', 1, '2017-10-05'),
(38, 1037, 'Muhammad', 'Adeel', 'Karachi', 'FB AREA', 'adeel@nextech.com.pk', 'uploads/img.jpg', '12345678', '03451234567', 1, '2017-10-05'),
(40, 1038, 'nafil', 'ahmed', 'karachi', 'gulshan', 'nafilahmed8@gmail.com', 'uploads/macbook_1-600x800.jpg', '123456789', '03473424037', 1, '2017-10-11'),
(41, 1039, 'Muhammad ', 'Adeel ', 'karachi', 'Gulshan', 'rasimizharali94@gmail.com', 'uploads/PLC new Logo.jpeg', '1234567891', '03473824037', 1, '2017-10-28'),
(42, 1040, 'adeel', 'hf', 'karachi', 'tt', 'ttyt', 'uploads/10252084_1405053583106801_8671613783882338327_n.jpg', 'ytyt', 'tyty', 1, '2017-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `tblreg`
--

CREATE TABLE `tblreg` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblreg`
--

INSERT INTO `tblreg` (`id`, `uname`, `email`, `pwd`) VALUES
(1, 'Admin', 'yaseen@bytes4sale.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads_master`
--
ALTER TABLE `ads_master`
  ADD PRIMARY KEY (`ad_id`),
  ADD UNIQUE KEY `sno` (`sno`),
  ADD KEY `ads_master_book_id_fk` (`book_id`),
  ADD KEY `ads_master_img_id_fk` (`img_id`),
  ADD KEY `ads_master_uid_fk` (`uid`);

--
-- Indexes for table `book_upload`
--
ALTER TABLE `book_upload`
  ADD PRIMARY KEY (`book_id`),
  ADD UNIQUE KEY `sno` (`sno`),
  ADD KEY `book_upload_uid_fk` (`uid`),
  ADD KEY `book_upload_img_id_fk` (`img_id`),
  ADD KEY `book_upload_cat_id_fk` (`cat_id`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`don_in`),
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `img_upload`
--
ALTER TABLE `img_upload`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `img_upload_uid_fk` (`uid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `tblreg`
--
ALTER TABLE `tblreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads_master`
--
ALTER TABLE `ads_master`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `book_upload`
--
ALTER TABLE `book_upload`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `img_upload`
--
ALTER TABLE `img_upload`
  MODIFY `img_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tblreg`
--
ALTER TABLE `tblreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
