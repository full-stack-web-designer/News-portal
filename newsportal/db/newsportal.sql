-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 06:32 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uname` varchar(50) NOT NULL,
  `upass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `upass`) VALUES
('9516161756', '123456'),
('9415591689', '123456'),
('9721257585', '123456'),
('9516161756', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `fname` varchar(50) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`fname`, `mob`, `email`, `pass`) VALUES
('Shiv Sahu', '9415591689', 'rajaji@gmail.com', '123456'),
('Sandeep Patel', '9516161756', 'sandeeppatel245570@gmail.com', '123456'),
('Zeshant', '9721257585', 'Zeshant@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `AdminUserName` varchar(255) NOT NULL,
  `AdminPassword` varchar(255) NOT NULL,
  `AdminEmailId` varchar(255) NOT NULL,
  `Is_Active` int(11) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `AdminUserName`, `AdminPassword`, `AdminEmailId`, `Is_Active`, `CreationDate`, `UpdationDate`) VALUES
(1, 'sandeep', '$2y$12$dD.qaJVyZ841vgjlwXhvP.D9WUPpthOrwzYAADe1WT7rmt559lCEC', 'sandeeppatel245570@gmail.com', 1, '2019-09-07 11:00:00', '2019-09-07 14:17:01'),
(2, 'shiv', '$2y$12$.6KlEni9Mk3Fcmke1oHWUOH7xmMjN3y4JRcJ5JO0e54UKWif4IuqW', 'rajaji941559@gmail.com', 1, '2019-09-07 12:02:41', '2019-09-07 12:08:42'),
(3, 'asif', '$2y$12$KW.TVV0JuMBCMCpd/uyFVOTU7WPmy7umpIOlo3S080Xq/w05SGJVG', 'ashifansari704@gmail.com', 1, '2019-09-07 12:11:56', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(200) DEFAULT NULL,
  `Description` mediumtext,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `CategoryName`, `Description`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(8, 'Education', 'Related to Education', '2019-09-07 14:07:44', '2019-12-22 07:32:05', 1),
(9, 'Bollywood', 'News of Bollywood', '2019-09-07 14:09:14', '0000-00-00 00:00:00', 1),
(10, 'Sports', 'Sport News', '2019-09-07 14:10:26', '0000-00-00 00:00:00', 1),
(11, 'Entertainment', 'Entertainment Related News', '2019-09-07 14:12:08', '0000-00-00 00:00:00', 1),
(12, 'Politics', 'Politics News', '2019-09-07 14:13:11', '0000-00-00 00:00:00', 1),
(13, 'Business', 'News of Business', '2019-09-07 14:14:27', '0000-00-00 00:00:00', 1),
(14, 'Festival', 'Festival News', '2019-09-07 14:51:48', '0000-00-00 00:00:00', 1),
(18, 'Hollywood', 'New of Hollywood', '2019-10-12 11:07:32', '2019-10-13 21:03:44', 0),
(19, 'football', 'game of footballs', '2020-02-17 16:22:06', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblcomments`
--

CREATE TABLE `tblcomments` (
  `id` int(11) NOT NULL,
  `postId` char(11) DEFAULT NULL,
  `name` varchar(120) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `comment` mediumtext,
  `postingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcomments`
--

INSERT INTO `tblcomments` (`id`, `postId`, `name`, `email`, `comment`, `postingDate`, `status`) VALUES
(1, '12', 'Durgesh Patel', 'durgeshpatel@gmail.com', 'very nice', '2019-09-08 05:19:26', 0),
(2, '9', 'Zeeshant Ali', 'zeshantali@gmil.com', 'Hum honge kamiyab', '2019-09-08 05:22:06', 1),
(3, '11', 'Shahjez Alam', 'shahjezalam@gmail.com', 'Bahut mahgai hai yrr', '2019-09-08 05:24:17', 1),
(4, '10', 'Javed Qureshi', 'javedqureshi@gmail.com', 'Bahut jaruri hai ', '2019-09-08 05:25:54', 1),
(5, '8', 'Umesh Sahu', 'Umeshsahu@gmail.com', 'PM Narendra Modi ji is great person ', '2019-09-08 05:28:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblposts`
--

CREATE TABLE `tblposts` (
  `id` int(11) NOT NULL,
  `PostTitle` longtext,
  `CategoryId` int(11) DEFAULT NULL,
  `SubCategoryId` int(11) DEFAULT NULL,
  `PostDetails` longtext CHARACTER SET utf8,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Is_Active` int(1) DEFAULT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblposts`
--

INSERT INTO `tblposts` (`id`, `PostTitle`, `CategoryId`, `SubCategoryId`, `PostDetails`, `PostingDate`, `UpdationDate`, `Is_Active`, `image`) VALUES
(1, 'CBSE Class 10 results declared; 13 students share top rank', 8, 10, '<p style=\"-webkit-font-smoothing: antialiased; font-family: TundraWeb, serif; margin-right: 30px; margin-bottom: 10px; margin-left: 30px; padding: 5px 0px 10px; font-size: 18px; line-height: 26px; color: rgb(40, 40, 40); width: 600px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;\">The 17.6 lakh students who appeared in the Central Board of Secondary Educationâ€™s (CBSE) Class 10 examinations, 91.1% have passed. This is 4.4 percentage points higher than last yearâ€™s pass percentage of 86.7%.</p><p style=\"-webkit-font-smoothing: antialiased; font-family: TundraWeb, serif; margin-right: 30px; margin-bottom: 10px; margin-left: 30px; padding: 5px 0px 10px; font-size: 18px; line-height: 26px; color: rgb(40, 40, 40); width: 600px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;\">There were 13 students sharing the first rank, all scoring 499 marks out of 500, with eight of them from Uttar Pradesh schools.</p><p style=\"-webkit-font-smoothing: antialiased; font-family: TundraWeb, serif; margin-right: 30px; margin-bottom: 10px; margin-left: 30px; padding: 5px 0px 10px; font-size: 18px; line-height: 26px; color: rgb(40, 40, 40); width: 600px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;\">Students can check their results at cbseresults.nic.in or simply use Google search.</p>', '2019-09-08 03:14:56', '2019-10-12 05:54:48', 1, ''),
(2, 'CBSE class 12 results 2019:', 8, 10, '<p style=\"-webkit-font-smoothing: antialiased; font-family: TundraWeb, serif; margin-right: 30px; margin-bottom: 10px; margin-left: 30px; padding: 5px 0px 10px; font-size: 18px; line-height: 26px; color: rgb(40, 40, 40); width: 600px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;\">The Central Board of Secondary Education (CBSE) has declared results for its Class 12 examination held in February to March 2019. Of the 12.87 lakh students who attempted the examination, 83.4% have passed.</p><p style=\"-webkit-font-smoothing: antialiased; font-family: TundraWeb, serif; margin-right: 30px; margin-bottom: 10px; margin-left: 30px; padding: 5px 0px 10px; font-size: 18px; line-height: 26px; color: rgb(40, 40, 40); width: 600px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;\">Two girls, Hansika Shukla and Karishma Arora, both from Uttar Pradesh, topped the examination, scoring 499 out of 500. The second rank was also grabbed by three girls, who scored 498.</p>', '2019-09-08 03:18:58', NULL, 1, ''),
(3, '24 students achieve perfect 100 scores in JEE Main; cut-off at 89.75', 8, 11, '<p><span style=\"color: rgb(40, 40, 40); font-family: TundraWeb, serif; font-size: 18px; background-color: rgb(245, 245, 245);\">The wait is over for more than 11.4 lakh students who attempted the JEE Main this year. The National Testing Agency has released the results for the April edition of the examination, and declared a common rank list cut-off of 89.75 percentile for eligibility for the JEE Advanced 2019 examination.</span><br></p>', '2019-09-08 03:30:04', NULL, 1, ''),
(4, 'NCTE to shut down bad colleges, start new courses for teachers, principals', 8, 11, '<p style=\"-webkit-font-smoothing: antialiased; font-family: TundraWeb, serif; margin-right: 30px; margin-bottom: 10px; margin-left: 30px; padding: 5px 0px 10px; font-size: 18px; line-height: 26px; color: rgb(40, 40, 40); width: 600px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;\">To weed out and shut down poor quality teacher education institutions â€” which have six times more capacity than needed â€” the National Council for Teacher Education is conducting the first-ever performance appraisals of the 19,000 institutions it oversees.</p><p style=\"-webkit-font-smoothing: antialiased; font-family: TundraWeb, serif; margin-right: 30px; margin-bottom: 10px; margin-left: 30px; padding: 5px 0px 10px; font-size: 18px; line-height: 26px; color: rgb(40, 40, 40); width: 600px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;\">â€œThe B.Ed has become a degree for marriage, not teaching. That must change...Our agenda is to close down the bad colleges,â€&nbsp;</p>', '2019-09-08 03:37:52', NULL, 1, ''),
(5, 'â€˜Chhichhoreâ€™ review: Noble thoughts, trite humour', 11, 18, '<p><span style=\"color: rgb(40, 40, 40); font-family: TundraWeb, serif; font-size: 18px; background-color: rgb(245, 245, 245);\">&nbsp;Nitesh Tiwariâ€™s&nbsp;</span><em style=\"-webkit-font-smoothing: antialiased; color: rgb(40, 40, 40); font-family: TundraWeb, serif; font-size: 18px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;\">Chhichhore&nbsp;</em><span style=\"color: rgb(40, 40, 40); font-family: TundraWeb, serif; font-size: 18px; background-color: rgb(245, 245, 245);\">has Arijit Singhâ€™s â€˜</span><em style=\"-webkit-font-smoothing: antialiased; color: rgb(40, 40, 40); font-family: TundraWeb, serif; font-size: 18px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;\">Woh Din</em><span style=\"color: rgb(40, 40, 40); font-family: TundraWeb, serif; font-size: 18px; background-color: rgb(245, 245, 245);\">â€™, where the filmmaker uses the same style to evoke nostalgia and capture the â€˜good old daysâ€™. From Karan Joharâ€™s campus sagas (</span><em style=\"-webkit-font-smoothing: antialiased; color: rgb(40, 40, 40); font-family: TundraWeb, serif; font-size: 18px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;\">Kuch Kuch Hota Hai&nbsp;</em><span style=\"color: rgb(40, 40, 40); font-family: TundraWeb, serif; font-size: 18px; background-color: rgb(245, 245, 245);\">and&nbsp;</span><em style=\"-webkit-font-smoothing: antialiased; color: rgb(40, 40, 40); font-family: TundraWeb, serif; font-size: 18px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;\">Student of the Year</em><span style=\"color: rgb(40, 40, 40); font-family: TundraWeb, serif; font-size: 18px; background-color: rgb(245, 245, 245);\">&nbsp;franchise) to Rajkumar Hiraniâ€™s&nbsp;</span><em style=\"-webkit-font-smoothing: antialiased; color: rgb(40, 40, 40); font-family: TundraWeb, serif; font-size: 18px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;\">3 Idiots</em><span style=\"color: rgb(40, 40, 40); font-family: TundraWeb, serif; font-size: 18px; background-color: rgb(245, 245, 245);\">, contemporary Hindi films have also looked at college days in hindsight, when one has aged (not necessarily matured) and settled into their professional and family lives</span><br></p>', '2019-09-08 03:54:18', NULL, 1, ''),
(6, 'KGF review: The pageant is beautiful but meaningless', 9, 12, '<p><span style=\"color: rgb(40, 40, 40); font-family: TundraWeb, serif; font-size: 18px; background-color: rgb(245, 245, 245);\">Ambitious aspiration, humongous scope and big ticket budgeting â€”&nbsp;</span><em style=\"-webkit-font-smoothing: antialiased; color: rgb(40, 40, 40); font-family: TundraWeb, serif; font-size: 18px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;\">K.G.F. Chapter I</em><span style=\"color: rgb(40, 40, 40); font-family: TundraWeb, serif; font-size: 18px; background-color: rgb(245, 245, 245);\">&nbsp;has it all. Actor Yash has sought to shed his romantic hero image for a heavy-duty action hero avatar. However, all the pluses do not translate to an enjoyable experience. Director Prashanth Neelâ€™s hope of pouring money on the screen in the hope of things falling in place is exceedingly optimistic.</span><br></p>', '2019-09-08 04:05:59', NULL, 1, ''),
(7, 'In picture: reliving Indiaâ€™s memorable moments in Tests in England', 10, 14, '<p><span style=\"color: rgb(40, 40, 40); font-family: TundraWeb, serif; font-size: 18px; background-color: rgb(245, 245, 245);\">Since 1932, India has won three Test series in England -- in 1971, 1986 and 2007. Hereâ€™s a look at the iconic moments and individual performances.</span><br></p>', '2019-09-08 04:26:05', NULL, 1, ''),
(8, 'Centre committed to provide LPG connection to all families, says PM', 12, 20, '<p><span style=\"color: rgb(40, 40, 40); font-family: TundraWeb, serif; font-size: 18px; background-color: rgb(245, 245, 245);\">Reiterating that it was his governmentâ€™s aim to ensure that every family was provided with an LPG connection, Prime Minister Narendra Modi on Saturday said that the Centre had fulfilled its promise of providing eight crore free gas connections to women from economically weaker sections under the Pradhan Mantri Ujjwala Yojana (PMUY) well ahead of the projected deadline. He was addressing a State-level Empowered Womenâ€™s Meet of Self Help Groups (SHG) organised by the Maharashtra State Rural Livelihood Mission (UMED) in Aurangabad.</span><br></p>', '2019-09-08 04:30:05', NULL, 1, ''),
(9, 'Modi gives a tight hug to an emotional ISRO chief', 12, 20, '<h2 class=\"intro\" style=\"font-weight: 600; -webkit-font-smoothing: antialiased; margin-top: 18px; margin-right: 30px; margin-left: 30px; padding: 0px; font-family: &quot;Fira Sans&quot;, sans-serif; font-size: 18px; line-height: 25px; border-bottom: 0px; color: rgb(19, 59, 90); width: 600px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;\">The Prime Minister, who was on his way to get into his car, gave him a â€œreassuringâ€ and tight hug, lending his shoulder to a teary-eyed Sivan.</h2><div id=\"content-body-14269002-29359899\" class=\"_yeti_done\" style=\"-webkit-font-smoothing: antialiased; color: rgb(80, 80, 80); font-family: &quot;Fira Sans&quot;, sans-serif; font-size: 12px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;\"><p style=\"-webkit-font-smoothing: antialiased; font-family: TundraWeb, serif; margin-right: 30px; margin-bottom: 10px; margin-left: 30px; padding: 5px 0px 10px; font-size: 18px; line-height: 26px; color: rgb(40, 40, 40); width: 600px; outline-style: initial !important; outline-width: 0px !important;\">After a pep talk to scientists, Prime Minister Narendra Modi on Saturday gave a long and tight hug to an emotional ISRO chief K Sivan, who was in tears, unable to come to terms over lander Vikramâ€™s unsuccessful bid to soft-land on the moon.</p></div>', '2019-09-08 04:48:13', NULL, 1, ''),
(10, 'Merged PSBs must cut stake in insurers', 13, 22, '<h2 class=\"intro\" style=\"font-weight: 600; -webkit-font-smoothing: antialiased; margin-top: 18px; margin-right: 30px; margin-left: 30px; padding: 0px; font-family: &quot;Fira Sans&quot;, sans-serif; font-size: 18px; line-height: 25px; border-bottom: 0px; color: rgb(19, 59, 90); width: 600px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;\">However, public sector lenders may wait for initial share offerings to get better valuation</h2><div id=\"content-body-14269002-29363424\" class=\"_yeti_done\" style=\"-webkit-font-smoothing: antialiased; color: rgb(80, 80, 80); font-family: &quot;Fira Sans&quot;, sans-serif; font-size: 12px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;\"><p style=\"-webkit-font-smoothing: antialiased; font-family: TundraWeb, serif; margin-right: 30px; margin-bottom: 10px; margin-left: 30px; padding: 5px 0px 10px; font-size: 18px; line-height: 26px; color: rgb(40, 40, 40); width: 600px; outline-style: initial !important; outline-width: 0px !important;\">After the merger of 10 public sector banks (PSBs) into four, two of them will hold over 15% stake in two different insurance companies, individually.</p><p style=\"-webkit-font-smoothing: antialiased; font-family: TundraWeb, serif; margin-right: 30px; margin-bottom: 10px; margin-left: 30px; padding: 5px 0px 10px; font-size: 18px; line-height: 26px; color: rgb(40, 40, 40); width: 600px; outline-style: initial !important; outline-width: 0px !important;\">According to insurance regulations, a bank cannot hold more than 15% stake in more than one insurance company.</p></div>', '2019-09-08 04:53:15', NULL, 1, ''),
(11, 'Rupee rebounds 27 paise to 72.12 against U.S. dollar', 13, 23, '<p style=\"-webkit-font-smoothing: antialiased; font-family: TundraWeb, serif; margin-right: 30px; margin-bottom: 10px; margin-left: 30px; padding: 5px 0px 10px; font-size: 18px; line-height: 26px; color: rgb(40, 40, 40); width: 600px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;\">The Indian rupee clawed back some lost ground on Wednesday, gaining 27 paise to settle at 72.12 against the U.S. dollar in line with a recovery in domestic equities.</p><p style=\"-webkit-font-smoothing: antialiased; font-family: TundraWeb, serif; margin-right: 30px; margin-bottom: 10px; margin-left: 30px; padding: 5px 0px 10px; font-size: 18px; line-height: 26px; color: rgb(40, 40, 40); width: 600px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;\">At the interbank&nbsp;<a href=\"https://www.thehindu.com/tag/850-833-684/foreign-exchange-market/?utm=bodytag\" target=\"_blank\" style=\"font-weight: 600; -webkit-font-smoothing: antialiased; outline-style: initial; outline-width: 0px; color: rgb(59, 89, 153); transition: color 450ms ease-in-out 0s, background-color 450ms ease-in-out 0s; cursor: pointer;\">foreign exchange market,&nbsp;</a>the rupee opened at 72.20 a dollar and advanced to a high of 71.96 during the day. It finally settled at 72.12, up 27 paise over its previous close of 72.39.</p>', '2019-09-08 04:56:44', NULL, 1, ''),
(12, 'Modi seeks Bappaâ€™s blessings at Tilak Mandir', 14, 24, '<p style=\"-webkit-font-smoothing: antialiased; font-family: TundraWeb, serif; margin-right: 30px; margin-bottom: 10px; margin-left: 30px; padding: 5px 0px 10px; font-size: 18px; line-height: 26px; color: rgb(40, 40, 40); width: 600px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;\">Prime Minister Narendra Modi on Saturday began his one-day tour of the State by offering prayers to Lord Ganesh at Lokmanya Seva Sangh Tilak Mandir in Vile Parle, which was set up around 100 years ago.</p><p style=\"-webkit-font-smoothing: antialiased; font-family: TundraWeb, serif; margin-right: 30px; margin-bottom: 10px; margin-left: 30px; padding: 5px 0px 10px; font-size: 18px; line-height: 26px; color: rgb(40, 40, 40); width: 600px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;\">Mr. Modi urged Mumbaikars to perform Ganesh visarjan without polluting water bodies. He said a lot of plastic waste ends up in the sea during the festival and all citizens must resolve to prevent water pollution for the sake of the country and work hard to fulfil it. The Prime Minister exhorted people to make the Mithi river and other water bodies plastic-free and set an example to the rest of the country.</p>', '2019-09-08 05:14:40', '2019-10-14 06:02:31', 1, ''),
(15, 'sandeep patel', 17, 31, 'Introduction of sandeep patel', '2019-10-10 11:46:56', '2019-10-10 11:47:32', 1, 0x696d6167652f);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubcategory`
--

CREATE TABLE `tblsubcategory` (
  `SubCategoryId` int(11) NOT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `Subcategory` varchar(255) DEFAULT NULL,
  `SubCatDescription` mediumtext,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubcategory`
--

INSERT INTO `tblsubcategory` (`SubCategoryId`, `CategoryId`, `Subcategory`, `SubCatDescription`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(10, 8, 'Schools ', 'School News', '2019-09-07 14:19:10', '0000-00-00 00:00:00', 1),
(11, 8, 'Colleges', 'Colleges News', '2019-09-07 14:19:51', '0000-00-00 00:00:00', 1),
(12, 9, 'Movies', 'Bollywood Movies', '2019-09-07 14:24:27', '0000-00-00 00:00:00', 1),
(13, 9, 'Music', 'Music News', '2019-09-07 14:26:55', '0000-00-00 00:00:00', 1),
(14, 10, 'Cricket', 'Cricket News', '2019-09-07 14:28:31', '0000-00-00 00:00:00', 1),
(15, 10, 'Football', 'Football News', '2019-09-07 14:30:25', '0000-00-00 00:00:00', 1),
(16, 10, 'Hockey', 'Hockey News', '2019-09-07 14:30:47', '0000-00-00 00:00:00', 1),
(17, 11, 'Dance', 'Dance News', '2019-09-07 14:31:44', '0000-00-00 00:00:00', 1),
(18, 11, 'Movies', 'Movies News', '2019-09-07 14:32:23', '0000-00-00 00:00:00', 1),
(19, 11, 'Social Media', 'News of Social Media', '2019-09-07 14:33:45', '0000-00-00 00:00:00', 1),
(20, 12, 'BJP', 'News BJP', '2019-09-07 14:38:26', '0000-00-00 00:00:00', 1),
(21, 12, 'Congress', 'News of Congress', '2019-09-07 14:39:04', '0000-00-00 00:00:00', 1),
(22, 13, 'Industry', 'News of Industry', '2019-09-07 14:40:45', '0000-00-00 00:00:00', 1),
(23, 13, 'Markets', 'News of Markets', '2019-09-07 14:41:49', '0000-00-00 00:00:00', 1),
(24, 14, 'Ganesh Chathurti', 'Festival News', '2019-09-07 14:54:21', '0000-00-00 00:00:00', 1),
(25, 14, 'Ramjaan', 'Festival News', '2019-09-07 14:56:19', '0000-00-00 00:00:00', 1),
(26, 14, 'Novdurga', 'Festival News', '2019-09-07 14:58:02', '0000-00-00 00:00:00', 1),
(27, 14, 'Mohramm', 'Festival News', '2019-09-07 14:59:07', '0000-00-00 00:00:00', 1),
(28, 14, 'Dipawali', 'Festival News', '2019-09-07 15:00:04', '0000-00-00 00:00:00', 1),
(29, 14, 'Krishamas', 'Festival News', '2019-09-07 15:01:18', '0000-00-00 00:00:00', 1),
(30, 14, 'Holi', 'Festival News', '2019-09-07 15:01:52', '0000-00-00 00:00:00', 1),
(31, 17, 'Sandeep patel', 'patel of group', '2019-10-10 09:53:08', '2019-10-10 09:54:26', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`mob`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcomments`
--
ALTER TABLE `tblcomments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblposts`
--
ALTER TABLE `tblposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD PRIMARY KEY (`SubCategoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblcomments`
--
ALTER TABLE `tblcomments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblposts`
--
ALTER TABLE `tblposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  MODIFY `SubCategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
