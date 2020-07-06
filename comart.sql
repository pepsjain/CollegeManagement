-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2018 at 04:04 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `comart`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mno` varchar(100) NOT NULL,
  `mailid` varchar(100) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `uname`, `lname`, `password`, `mno`, `mailid`, `status`) VALUES
(2, 'rameshk', 'nk', 'miit', 'sfsdfsd', 'sdfsdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `mno` varchar(100) NOT NULL,
  `mailid` varchar(100) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `mno`, `mailid`, `feedback`) VALUES
(1, '', '12346', 'nknaagar', 'fjdslfk'),
(2, 'amit', '12346', 'nknaagar', 'fsdfsdf'),
(3, 'dfdsf', 'hkjh', 'kjhkj', 'kjh'),
(4, 'ramesh', 'hkjh', 'nknaagar', 'fsdfs');

-- --------------------------------------------------------

--
-- Table structure for table `gals`
--

CREATE TABLE IF NOT EXISTS `gals` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `iname` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `gals`
--

INSERT INTO `gals` (`id`, `title`, `iname`) VALUES
(22, 'Director''s Message', 'gal5.jpeg'),
(19, 'Faculty Members', 'gal4.jpeg'),
(20, 'PHP Development', 'library.jpg'),
(18, 'Home', 'gal2.jpeg'),
(17, 'Home', 'education.jpg'),
(25, 'Events', 'ccink_facebook.png'),
(16, 'Events', '123.jpg'),
(23, 'Faculty Members', 'gal6.jpeg'),
(24, 'Home', 'science_lab.jpeg'),
(26, 'Director''s Message', 'button.png'),
(27, 'ffff', 'f.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `utype` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `uname`, `password`, `utype`) VALUES
(1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `rno` int(10) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `s1` int(10) NOT NULL,
  `s2` int(10) NOT NULL,
  `s3` int(10) NOT NULL,
  `s4` int(10) NOT NULL,
  `s5` int(10) NOT NULL,
  `s6` int(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `totalm` int(10) NOT NULL,
  `pert` float NOT NULL,
  `divp` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `rno`, `sname`, `fname`, `mname`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `semester`, `year`, `totalm`, `pert`, `divp`) VALUES
(3, 102, 'Ashk', 'kishan', 'ramya', 89, 89, 89, 89, 89, 89, 'V', '2015', 534, 89, 'First'),
(2, 101, 'ramesh', 'amit', 'suva', 23, 89, 89, 89, 89, 89, 'III', '2016', 468, 78, 'First');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `news` text NOT NULL,
  `providedby` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `news`, `providedby`) VALUES
(4, 'Exams', '<p>sdfjsl dkfjsd lfksdjflksdj flkd</p>\r\n', 'nk naagar'),
(6, 'examination', '<p><span style="font-size:14px"><span style="color:#B22222"><strong>this is my news&nbsp;</strong></span></span></p>\r\n', 'asif');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `sem` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `filename`, `sem`) VALUES
(6, 'Why commercial arts?', '6_index new copy.jpg', 'VIII'),
(5, 'Director''s Message', '5_NDW Website feedback.docx', 'VII');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` longtext NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `description`) VALUES
(4, 'Faculty Members', '<p>&nbsp;</p>\r\n\r\n<div style="font-family: ''Times New Roman''; background-color: rgb(202, 186, 159); margin-left: 20px; font-size: 14px; color: rgb(57, 56, 54); text-align: justify; margin-top: -30px; padding: 5px; line-height: 18px; z-index: 1;">\r\n<table border="1" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="3" style="text-align:center"><span style="font-size:24px"><span style="font-family:comic sans ms,cursive"><u><em><span style="color:rgb(51, 51, 51)"><strong>MANAGEMENT COMMITTEE</strong></span></em></u></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style="color:rgb(153, 51, 0)"><strong>Name of Staff</strong></span></td>\r\n			<td><span style="color:rgb(153, 51, 0)"><strong>Designation</strong></span></td>\r\n			<td><span style="color:rgb(153, 51, 0)"><strong>Qualification</strong></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mr. Dilip Adhikari</td>\r\n			<td>Founder cum Director</td>\r\n			<td>B.A., B.Ed.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mr. Tulshi Pd. Acharya</td>\r\n			<td>Principal</td>\r\n			<td>M.A.(English)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mr. Karma Dukpa</td>\r\n			<td>Co-ordinator</td>\r\n			<td>B.A.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mrs. Sharmila Limbu</td>\r\n			<td>Vice Principal</td>\r\n			<td>B.A.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mrs. Padma Ghimire</td>\r\n			<td>Accountant</td>\r\n			<td>B.A.</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="3" style="text-align:center"><span style="color:rgb(51, 51, 51)"><strong>FIRST YEAR</strong></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style="color:rgb(153, 51, 0)"><strong>Name of Staff</strong></span></td>\r\n			<td><span style="color:rgb(153, 51, 0)"><strong>Designation</strong></span></td>\r\n			<td><span style="color:rgb(153, 51, 0)"><strong>Qualification</strong></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mr. Om Karki</td>\r\n			<td>Director, Teacher (H.M.)</td>\r\n			<td>M.H.M.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mr. Tulshi Pd. Acharya</td>\r\n			<td>Principal, Teacher (English)</td>\r\n			<td>M.A.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mr. Sailendra Giri</td>\r\n			<td>Assintance Teacher(Account)</td>\r\n			<td>M.B.S.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mr. Bishnu Gautam</td>\r\n			<td>Assintance Teacher(Economics)</td>\r\n			<td>M.A., B.ED.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mr. Lomash Dahal</td>\r\n			<td>Assintance Teacher(Computer Science)</td>\r\n			<td>M.C.A.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mr. Santosh Siwakoti</td>\r\n			<td>Assintance Teacher(Mathemetics)</td>\r\n			<td>M.B.S.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mr. Purusottam Baral</td>\r\n			<td>Assintance Teacher(Nepali)</td>\r\n			<td>M.A.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mr. Nawaraj Karki</td>\r\n			<td>Assintance Teacher(Business Studies)</td>\r\n			<td>M.B.A.</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="3" style="text-align:center"><span style="color:rgb(51, 51, 51)"><strong>SECOND YEAR</strong></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style="color:rgb(153, 51, 0)"><strong>Name of Staff</strong></span></td>\r\n			<td><span style="color:rgb(153, 51, 0)"><strong>Designation</strong></span></td>\r\n			<td><span style="color:rgb(153, 51, 0)"><strong>Qualification</strong></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mr. Pritha Sharma</td>\r\n			<td>Assistance Teacher</td>\r\n			<td>B.A.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mr. Devananda Adhikari</td>\r\n			<td>Assistance Teacher</td>\r\n			<td>B.A.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mr. Santosh Siwakoti</td>\r\n			<td>Assistance Teacher</td>\r\n			<td>M.B.S.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mr. Purusottam Baral</td>\r\n			<td>Assistance Teacher</td>\r\n			<td>M.A.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mr. Lomash Dahal</td>\r\n			<td>Assistance Teacher</td>\r\n			<td>M.C.A.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mr. Tarjan Limbu</td>\r\n			<td>Assistance Teacher</td>\r\n			<td>B.SC.</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="3" style="text-align:center"><span style="color:rgb(51, 51, 51)"><strong>THIRD YEAR</strong></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style="color:rgb(153, 51, 0)"><strong>Name of Staff</strong></span></td>\r\n			<td><span style="color:rgb(153, 51, 0)"><strong>Designation</strong></span></td>\r\n			<td><span style="color:rgb(153, 51, 0)"><strong>Qualification</strong></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mrs. Mamta Manandhar</td>\r\n			<td>Assistance Teacher</td>\r\n			<td>I.COM.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mrs. Sumitra Bastola</td>\r\n			<td>Assistance Teacher</td>\r\n			<td>M.B.S.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mr. Parsuram Baral</td>\r\n			<td>Assistance Teacher</td>\r\n			<td>B.B.S.</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="3" style="text-align:center"><span style="color:rgb(51, 51, 51)"><strong>FOURTH YEAR</strong></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style="color:rgb(153, 51, 0)"><strong>Name of Staff</strong></span></td>\r\n			<td><span style="color:rgb(153, 51, 0)"><strong>Designation</strong></span></td>\r\n			<td><span style="color:rgb(153, 51, 0)"><strong>Qualification</strong></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mrs. Laxmi Sharma</td>\r\n			<td>Assistance Teacher</td>\r\n			<td>I.A.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mrs. Anamika Adhikari</td>\r\n			<td>Assistance Teacher</td>\r\n			<td>I.A.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mrs. Swastika Gusai</td>\r\n			<td>Assistance Teacher</td>\r\n			<td>B.B.S.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mrs. Sandhya Angdembey</td>\r\n			<td>Assistance Teacher</td>\r\n			<td>B.B.S.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mrs. Kalpana Ghimire</td>\r\n			<td>Assistance Teacher</td>\r\n			<td>B.B.S.</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="3" style="text-align:center"><strong>CLERICAL STAFF</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style="color:rgb(153, 51, 0)"><strong>Name of Staff</strong></span></td>\r\n			<td><span style="color:rgb(153, 51, 0)"><strong>Designation</strong></span></td>\r\n			<td><span style="color:rgb(153, 51, 0)"><strong>Qualification</strong></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mrs. Munnu Shrestha</td>\r\n			<td>Assistance Teacher</td>\r\n			<td>I.A.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mrs. Nisha Subedi</td>\r\n			<td>Assistance Teacher</td>\r\n			<td>I.A.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mrs. Sita Acharya</td>\r\n			<td>Assistance Teacher</td>\r\n			<td>I.A.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mrs. Devika Poudel</td>\r\n			<td>Assistance Teacher</td>\r\n			<td>B.B.S.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mrs. Kokila Adhikari</td>\r\n			<td>Assistance Teacher</td>\r\n			<td>B.B.S.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mrs. Sangita Bhattacharya</td>\r\n			<td>Assistance Teacher</td>\r\n			<td>B.A.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n'),
(2, 'From Principal''s Desk', '<p><span style="font-size:22px"><span style="font-family:comic sans ms,cursive"><em><span style="background-color:rgb(202, 186, 159); color:rgb(57, 56, 54)">To change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.</span></em></span></span></p>\r\n'),
(3, 'Director''s Message', '<p style="text-align:justify"><strong>On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.</strong></p>\r\n\r\n<p style="text-align:justify"><strong>2017 New Year Happy&nbsp;</strong></p>\r\n'),
(5, 'Our Services', '<p>&#65279;<span style="background-color:rgb(202, 186, 159); color:rgb(57, 56, 54); font-family:times new roman; font-size:14px">To change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.</span></p>\r\n'),
(6, 'Facalities', '<p><span style="background-color:rgb(202, 186, 159); color:rgb(57, 56, 54); font-family:times new roman; font-size:14px">To change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.</span></p>\r\n'),
(7, 'Workshop', '<p>sad sdas das d</p>\r\n'),
(8, 'Seminars', '<p>sdf dfsdf sdf</p>\r\n'),
(9, 'Notes ', '<p>Notes &nbsp;Notes &nbsp;Notes &nbsp;Notes &nbsp;Notes &nbsp;Notes &nbsp;Notes &nbsp;Notes &nbsp;Notes &nbsp;Notes &nbsp;Notes &nbsp;Notes &nbsp;</p>\r\n'),
(13, 'Scholarship scheme', '<p><span style="background-color:rgb(202, 186, 159); color:rgb(57, 56, 54); font-family:times new roman; font-size:36px">Scholarship scheme&nbsp;</span></p>\r\n'),
(14, 'Rules and regulations', '<p><span style="font-size:11px"><span style="background-color:rgb(202, 186, 159); color:rgb(57, 56, 54); font-family:times new roman">Rules and regulations</span></span></p>\r\n'),
(10, 'Welcome Commercial Arts   ', '<p style="text-align:justify">On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.</p>\r\n\r\n<p style="text-align:justify">You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.</p>\r\n'),
(11, 'Why commercial arts?', '<p style="text-align:justify">On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mno` varchar(100) NOT NULL,
  `mailid` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `uname`, `lname`, `password`, `mno`, `mailid`, `sem`, `status`) VALUES
(1, 'ramesh', 'djkfdslk', 'dsadsad', 'ddsfsdf', 'sdfsdf', '3', 0),
(2, 'next', 'nk', 'nikki', 'nk', 'nknaagar@gmail.com', '5', 1),
(3, 'ram', 'singh', '123', '123', 'ram@gmail.com', '2', 0),
(4, 'suresh', 'kumar', 'sm', '123456789', 's@gmail.com', '2', 0),
(5, 'asif', 'khan', '123', '1234567890', 'asif@gmail.com', '8', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
