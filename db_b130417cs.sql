-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2017 at 05:43 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1-log
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_b130417cs`
--

-- --------------------------------------------------------

--
-- Table structure for table `aoi`
--

CREATE TABLE IF NOT EXISTS `aoi` (
  `uname` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  PRIMARY KEY (`uname`,`area`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aoi`
--

INSERT INTO `aoi` (`uname`, `area`) VALUES
('billa4', 'Data Structures'),
('billa4', 'php'),
('billa4', 'WEB PROGRAMMING'),
('kranthi108', 'css'),
('kranthi108', 'DBMS'),
('kranthi108', 'php'),
('kranthi108', 'web development'),
('Premnitw09', 'JAVA'),
('Premnitw09', 'networks'),
('surendar4', 'css'),
('surendar4', 'Data Structures'),
('surendar4', 'DBMS'),
('surendar4', 'JAVA'),
('surendar4', 'networks'),
('surendar4', 'operating systems'),
('surendar4', 'php'),
('vimal108', 'Data Structures'),
('vimal108', 'JAVA'),
('vimal108', 'WEB PROGRAMMING'),
('vimalks', 'DBMS'),
('vimalks', 'operating systems'),
('vivek@gmail.com', 'Data Structures'),
('vivek@gmail.com', 'JAVA');

-- --------------------------------------------------------

--
-- Table structure for table `areaofinterest`
--

CREATE TABLE IF NOT EXISTS `areaofinterest` (
  `aoi_id` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(400) NOT NULL,
  PRIMARY KEY (`aoi_id`),
  UNIQUE KEY `area` (`area`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `areaofinterest`
--

INSERT INTO `areaofinterest` (`aoi_id`, `area`) VALUES
(1, 'Css'),
(2, 'Data Structures'),
(3, 'DBMS'),
(4, 'JAVA'),
(5, 'Networks'),
(6, 'Operating systems'),
(7, 'php'),
(8, 'WEB PROGRAMMING');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `chat_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `sent_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `user_id`, `message`, `sent_on`) VALUES
('', '0', 'hi', '2017-04-06 05:34:28'),
('', '0', 'hiii', '2017-04-06 05:34:32'),
('', '0', 'hhi', '2017-04-06 05:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `mid` int(10) NOT NULL AUTO_INCREMENT,
  `sendid` varchar(50) NOT NULL,
  `recid` varchar(50) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=180 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mid`, `sendid`, `recid`, `message`, `date`) VALUES
(117, 'surendar4', 'surendar1006', 'hii', '2017-04-22 06:26:50'),
(118, 'surendar4', 'surendar1006', 'hello', '2017-04-22 14:52:02'),
(123, 'surendar4', 'surendar1006', 'cheppu', '2017-04-23 10:18:23'),
(124, 'kranthi108', 'surendar4', 'hi', '2017-04-23 10:18:46'),
(126, 'kranthi108', '9jafar', 'hi', '2017-04-23 10:19:29'),
(128, 'kranthi108', '9jafar', 'ra', '2017-04-23 11:01:58'),
(129, 'kranthi108', '9jafar', 'hu', '2017-04-23 11:02:05'),
(130, 'kranthi108', '9jafar', 'em chestunnav?', '2017-04-23 11:41:29'),
(131, 'surendar4', 'surendar4', 'hii', '2017-04-23 13:03:19'),
(132, 'surendar4', 'vimal108', 'hi', '2017-04-23 13:05:24'),
(133, 'vimalks', '9jafar', 'hi', '2017-04-23 13:09:40'),
(134, 'vimalks', '9jafar', 'ra', '2017-04-23 13:10:13'),
(135, 'vimalks', '9jafar', 'raaa', '2017-04-23 13:10:30'),
(136, 'vimalks', '9jafar', 'em', '2017-04-23 13:10:37'),
(138, 'vimalks', '9jafar', 'c', '2017-04-23 13:10:43'),
(139, 'vimalks', '9jafar', 'h', '2017-04-23 13:10:47'),
(141, 'vimalks', '9jafar', 'e', '2017-04-23 13:10:51'),
(143, 'vimalks', '9jafar', 's', '2017-04-23 13:10:56'),
(145, 'vimalks', '9jafar', 't', '2017-04-23 13:11:05'),
(146, 'vimalks', 'kranthi108', 'hi', '2017-04-23 13:11:37'),
(147, 'surendar4', 'surendar4', 'xcx', '2017-04-23 13:34:28'),
(149, 'kranthi108', 'vimalks', 'hi ra macha', '2017-04-23 18:27:43'),
(151, 'surendar4', 'surendar4', 'hii', '2017-04-24 06:07:01'),
(153, 'admin', 'surendar4', 'hi', '2017-04-25 05:42:43'),
(154, 'surendar4', 'kranthi108', 'hello', '2017-04-25 05:45:02'),
(155, 'kranthi108', 'surendar4', 'can you propose a project on angular js? ', '2017-04-25 05:45:41'),
(156, 'surendar4', 'kranthi108', 'what are the web programming languages you know?', '2017-04-25 05:46:50'),
(157, 'kranthi108', 'surendar4', 'which can use php mysql database as backend server', '2017-04-25 05:46:50'),
(158, 'admin', 'parugula', 'HI', '2017-04-25 05:54:39'),
(159, 'admin', 'vimal108', 'HI', '2017-04-25 05:54:55'),
(160, 'admin', 'surendar4', ' i have doubt regarding the tomcat server used in ajs module. can you please help me?', '2017-04-25 05:56:36'),
(161, 'kranthi108', 'parugula', 'hi', '2017-04-25 05:59:50'),
(162, 'kranthi108', 'vimal108', 'hi', '2017-04-25 06:00:02'),
(163, 'surendar4', 'premnitw09', 'HII', '2017-04-26 06:10:11'),
(164, 'admin', 'premnitw09', 'Hi Prem Chand,Welcome to NITC EDUCENTER\n', '2017-04-26 06:10:26'),
(165, 'kranthi108', 'surendar4', 'do ', '2017-04-26 07:53:40'),
(166, 'kranthi108', 'kranthi108', 'hi', '2017-04-26 08:28:28'),
(167, 'admin', 'kranthi108', 'Your request to the project Forensic Analysis of Social Networking Application has been accepted by the author', '2017-04-26 08:55:21'),
(168, 'admin', 'surendar4', 'Your request to the project How to Implement Multi-Master Replication in Polyh has been accepted by the author', '2017-04-26 09:01:35'),
(169, 'admin', 'surendar4', 'Your request to the project  has been Rejected by the author', '2017-04-26 09:07:06'),
(170, 'admin', 'kranthi108', 'Your request to the project  has been Rejected by the author', '2017-04-26 09:09:39'),
(171, 'admin', 'surendar4', 'Your request to the project JClone: Syntax tree based clone detection for Java has been accepted by the author', '2017-04-26 09:30:59'),
(172, 'admin', 'kranthi108', 'Your request to the project Forensic Analysis of Social Networking Application has been Rejected by the author', '2017-04-26 09:31:11'),
(173, 'kranthi108', 'surendar4', 'hie', '2017-04-26 09:31:32'),
(174, 'admin', 'kranthi108', 'Your request to the project JClone: Syntax tree based clone detection for Java has been Rejected by the author', '2017-04-26 09:32:37'),
(175, 'admin', 'kranthi108', 'Your request to the project How to Implement Multi-Master Replication in Polyh has been Rejected by the author', '2017-04-26 09:37:47'),
(176, 'admin', 'kranthi108', 'Your request to the project Towards a Classification of Design Patterns for We has been accepted by the author', '2017-04-26 09:43:13'),
(177, 'admin', 'daya', 'Hi DAYAKAR D,Welcome to NITC EDUCENTER', '2017-04-26 09:57:55'),
(178, 'surendar4', 'admin', 'thank you', '2017-04-26 10:05:51'),
(179, 'surendar4', 'premnitw09', 'hello', '2017-04-26 10:23:15');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `pid` varchar(50) NOT NULL DEFAULT 'p0000',
  `uname` varchar(50) NOT NULL,
  `sdate` date NOT NULL,
  `comment` varchar(250) DEFAULT NULL,
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`pid`,`uname`),
  UNIQUE KEY `sno` (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pid`, `uname`, `sdate`, `comment`, `sno`) VALUES
('P100015', 'surendar4', '2017-02-03', NULL, 15),
('P100016', 'surendar4', '2017-02-14', NULL, 16),
('P100017', 'kranthi108', '2017-02-12', NULL, 17),
('P100018', 'kranthi108', '0000-00-00', NULL, 44),
('P100018', 'surendar4', '2017-02-13', NULL, 18),
('P100019', 'surendar4', '2017-02-20', NULL, 19),
('P100024', 'kranthi108', '2016-01-13', NULL, 24),
('P100025', 'vimal108', '2016-06-14', NULL, 25),
('P100026', 'vimal108', '2015-11-09', NULL, 26),
('P100033', 'kranthi108', '2016-12-05', NULL, 33),
('P100033', 'surendar4', '0000-00-00', NULL, 46),
('P100034', 'kranthi108', '2017-04-03', NULL, 34),
('P100034', 'surendar4', '0000-00-00', NULL, 45),
('P100037', 'kranthi108', '0000-00-00', NULL, 51),
('P100037', 'surendar4', '2017-04-11', NULL, 37),
('P100052', 'sameerthahir', '2017-10-10', NULL, 52);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `rid` int(10) NOT NULL AUTO_INCREMENT,
  `pid` varchar(50) NOT NULL,
  `runame` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`rid`),
  UNIQUE KEY `pid` (`pid`,`runame`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`rid`, `pid`, `runame`, `status`, `date`) VALUES
(64, 'P100026', 'surendar4', 'requested', '2017-04-26 06:45:22'),
(76, 'P100032', 'surendar4', 'requested', '2017-04-26 09:03:48'),
(79, 'P100026', 'kranthi108', 'requested', '2017-04-26 09:09:13'),
(91, 'P100037', 'kranthi108', 'requested', '2017-04-26 10:07:32');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `pid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `field` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `pdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(25) NOT NULL,
  `file` varchar(38) DEFAULT NULL,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `pid` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`pid`, `name`, `field`, `description`, `pdate`, `status`, `file`) VALUES
('P100015', 'NITC Educenter', 'web-development', 'The idea is to develop an online portal for the students to interact with seniors and faculty for project works. This project deals with developing a web based application in order to facilitate students discuss project related ideas and works. The system is capable of maintaining various details of projects works (completed, ongoing or new projects), handling users, updating the store and provides interaction between students and other users (students, faculty and seniors). The system maintains databases of users and projects. The user interface is created using Ruby on Rails. Flexibility is maintained to make any changes during implementation.			Mainly useful for the students to constructively use their time by involving in some projects according to their areas of interests. It also helps students to know the hot domain works done by the people in the institution. It also provides a scope to develop applications for the institution with the help of faculties.', '2017-02-21 18:56:02', 'InProgress', 'projects/P100015.pdf'),
('P100016', 'Big Data for Development', 'COMPUTER SCIENCE', 'Innovations in technology and greater affordability of digital devices have presided over todayâ€™s Age of Big Data, an umbrella term for the explosion in the quantity and diversity of high frequency digital data.These data hold the potential as yet largely untapped to allow decision makers to track development progress, improve social protection, and understand where existing policies and programmes require adjustment.Turning BigData call logs, mobile banking transactions, online user generated content such as blog posts and Tweets, online searches, satellite images, etc. into actionable information requires using computational techniques to unveil trends and patterns within and between these extremely large socioeconomic datasets.With the promise come questions about the analytical value and thus policy relevance of this data including concerns over the relevance of the data in developing country contexts, its representativeness, its reliability as well as the over arching privacy issues of utilising personal data.', '2017-02-21 18:59:22', 'InProgress', 'projects/P100016.pdf'),
('P100018', 'Forensic Analysis of Social Networking Application', 'cse', '', '2017-02-21 19:48:11', 'inprogress', 'projects/P100018.pptx'),
('P100019', 'A Real Time Indoor Navigation and Monitoring Syste', 'cse', 'Firefighting is a dangerous job to perform as there can be several unexpected hazards while rescuing victims. Since the firefighters do not have any knowledge about the internal structure of the fire ridden building, they will not be able to find the location of the EXIT door, a fact that can prove to be fatal.  We introduce an indoor location tracking and navigation system (FIREGUIDE) using RFID technology integrated with augmented reality. FIREGUIDE assists the firefighters to find the nearest exit location by providing the navigation instructions to the exits as well as an Augmented Reality view of the location and direction of the exits.  The system also presents the Incident Commander the current firefighterâ€™s location superimposed on a map of the building floor. We envision that the FIREGUIDE system will save a significant number of firefighters and victimsâ€™ lives.', '0000-00-00 00:00:00', 'inprogress', 'projects/P100019.pdf'),
('P100024', 'Towards a Classification of Design Patterns for We', 'PHP ', '', '2017-02-22 06:57:03', 'InProgress', 'projects/P100024.pdf'),
('P100025', 'Fingerprint Verification based on Fusion of Minuti', 'Image processing', 'With the increasing emphasis on the automatic personal identification applications, biometrics especially fingerprint identification is the most reliable and widely accepted technique. In this paper Fingerprint Verification based on fusion of Minutiae and Ridges using Strength Factors (FVMRSF) is presented.  In the preprocessing stage the Fingerprint is Binarised and Thinned. The Minutiae Matching Score is determined using Block Filter and Ridge matching score is estimated using Hough Transform.  The strength factors Alpha (Î±) and Beta (Î²) are used to generate Hybrid matching score for matching of fingerprints. The proposed algorithm has better matching percentage for different fingerprints compared to the existing algorithms.', '2017-02-22 10:57:24', 'Completed', NULL),
('P100026', 'Data Leakage Detection â€“ 2', 'Data Mining', 'This paper contains the results of implementation of Data Leakage Detection Model. Currently watermarking technology is being used for the data protection. But this technology doesnâ€™t provide the complete security against date leakage.  This paper includes the difference between the watermarking & data leakage detection modelâ€™s technology. This paper leads for the new technique of research for secured data transmission & detection, if it gets leaked.  Introduction: Data leakage is the big challenge in front of the industries & different institutes. Though there are number of systems designed for the data security by using different encryption algorithms, there is a big issue of the integrity of the users of those systems. It is very hard for any system administrator to trace out the data leaker among the system users. It creates a lot many ethical issues in the working environment of the office.  The data leakage detection industry is very heterogeneous as it evolved out of ripe product lines of leading IT security vendors. A broad arsenal of enabling technologies such as firewalls, encryption, access control, identity management, machine learning content/context based detectors and others have already been incorporated to offer protection against various facets of the data leakage threat.', '2017-02-22 10:58:26', 'Completed', NULL),
('P100032', 'Research Ontology Data Models for Data and Metadat', 'Data Mining', 'For researches in the field of the data mining and machine learning the necessary condition is an availability of various input data set. Now researchers create the databases of such sets. Examples of the following systems are: The UCI Machine Learning Repository, Data Envelopment Analysis Dataset Repository, XMLData Repository, Frequent Itemset Mining Dataset Repository.  Along with above specified statistical repositories, the whole pleiad from simple filestores to specialized repositories can be used by researchers during solution of applied tasks, researches of own algorithms and scientific problems. It would seem, a single complexity for the user will be search and direct understanding of structure of so separated storages of the information.  However detailed research of such repositories leads us to comprehension of deeper problems existing in usage of data. In particular a complete mismatch and rigidity of data files structure with SDMX â€“ Statistical Data and Metadata Exchange â€“ standard and structure used by many European organizations, impossibility of preliminary data origination to the concrete applied task, lack of data usage history for those or other scientific and applied tasks.  Now there are lots of methods of data miming, as well as quantities of data stored in various repositories. In repositories there are no methods of DM (data miming) and moreover, methods are not linked to application areas.  An essential problem is subject domain link (problem domain), methods of DM and datasets for an appropriate method. Therefore in this work we consider the building problem of ontological models of DM methods, interaction description of methods of data corresponding to them from repositories and intelligent agents allowing the statistical repository user to choose the appropriate method and data corresponding to the solved task.  In this work the system structure is offered, the intelligent search agent on ontological model of DM methods considering the personal inquiries of the user is realized.', '2017-04-09 10:16:46', 'InProgress', ''),
('P100033', 'JClone: Syntax tree based clone detection for Java', 'JAVA', 'An unavoidable amount of money is spent on maintaining existing software systems today. Software maintenance cost generally higher than development cost of the system therefore lowering maintenance cost is highly appreciated in software industry.  A significant part of maintenance activities is related to repeating the investigation of problems and applying repeated solutions several times. A software system may contain a common bug in several different places and it might take extra effort and time to fix all existences of this bug. This operation commonly increases the cost of Software Maintenance Activities.  Detecting duplicate code fragments can significantly decrease the time and effort therefore the maintenance cost. Clone code detection can be achieved via analyzing the source code of given software system. An abstract syntax tree based clone detector for java systems is designed and implemented through this study.  This study examines a software engineering process to create an abstract syntax tree based clone detector for the projects implemented in Java programming language.', '2017-04-09 10:45:35', 'InProgress', ''),
('P100034', 'How to Implement Multi-Master Replication in Polyh', 'DBMS', 'A distributed, real-time database could be used to implement a shared whiteboard architecture used for communication between mobile nodes, in an ad-hoc network. This kind of application implies specific requirements on how the database handles replication and consistency between replicas (global consistency).  Since mobile nodes are likely to disconnect from the network and connect again at unpredictable times, and since a node may be disconnected an arbitrary amount of time, this needs to be treated as normal operation, and not as failures.  The replication scheme used in the DeeDS architecture, and the PRiDe replication protocol are both suitable for a shared whiteboard architecture as described above. Since the mobile nodes are likely to be some kind of hand-held device (e.g., used by rescue personnel to exchange information), the database system should be suitable for use in embedded systems.  The Polyhedra Real-Time Relational Database (RTRDB) and the TimesTen database are two such systems. A problem is that neither of these two database systems have a replication scheme suitable for use in the previously described type of architecture.  This dissertation presents two design proposals for how to extend the Polyhedra RTRDB with support for multi-master replication of data using full replication and eventual consistency. One design proposal is based on the DeeDS architecture and the other is based on the PRiDe replication protocol.  The proposal based on DeeDS puts a number of requirements on the underlying database and is not easy to port to another DBMS since it makes use of Polyhedra specific APIâ€™s. The proposal based on PRiDe on the other hand requires no instrumentation of the underlying database and is thus easier to port to other database systems.', '2017-04-09 11:36:11', 'InProgress', ''),
('P100037', 'Towards a Classification of Design Patterns for We', 'Data Mining', 'Firefighting is a dangerous job to perform as there can be several unexpected hazards while rescuing victims. Since the firefighters do not have any knowledge about the internal structure of the fire ridden building, they will not be able to find the location of the EXIT door, a fact that can prove to be fatal.  We introduce an indoor location tracking and navigation system (FIREGUIDE) using RFID technology integrated with augmented reality. FIREGUIDE assists the firefighters to find the nearest exit location by providing the navigation instructions to the exits as well as an Augmented Reality view of the location and direction of the exits.  The system also presents the Incident Commander the current firefighterâ€™s location superimposed on a map of the building floor. We envision that the FIREGUIDE system will save a significant number of firefighters and victimsâ€™ lives.', '2017-04-22 12:48:38', 'Completed', 'projects/P100037.pdf'),
('P100052', 'Test project', 'graph theory', 'testing', '2017-04-26 11:19:20', 'InProgress', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `dept` varchar(25) NOT NULL,
  `img` varchar(40) DEFAULT 'uploads/dummy.jpeg',
  PRIMARY KEY (`uname`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `uname` (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uname`, `password`, `fname`, `lname`, `email`, `dob`, `dept`, `img`) VALUES
('admin', 'admin', 'admin', 'NITC EC', 'admin@admin.com', '2016-12-30', 'computer science', 'uploads/admin.png'),
('daya', '123456', 'DAYAKAR', 'D', 'dayakar@gmail.com', '1998-02-13', 'computer science', 'uploads/daya.jpg'),
('kranthi108', 'aaaaaaaa', 'kranthi', 'kiran', 'kranthiramireddy@gmail.com', '1995-04-12', 'cse', 'uploads/kranthi108.jpg'),
('parugula', '123456', 'PRAVEEN', 'JAKKULA', 'praveen_jakkula@gmail.com', '2017-04-01', 'computer science', 'uploads/parugula.jpg'),
('premnitw09', 'premnitw09', 'prem', 'chand', 'premnitw09@gmail.com', '1991-10-25', 'Production', 'uploads/dummy.jpeg'),
('sameerthahir', 'gnulinux', 'Sameer', 'Thahir', 'sameerm@nitc.ac.in', '1982-03-03', 'computer science', 'uploads/sameerthahir.jpg'),
('sanjana', 'sunny', 'PREMA LATHA', 'KODAVATH', 'kodavathpremalatha@gmail.com', '1998-10-28', 'computer science', 'uploads/sanjana.jpeg'),
('surendar4', '123456', 'surendar', 'dharavath', 'surendar1006@gmail.com', '1995-06-10', 'computer science', 'uploads/surendar4.jpg'),
('vimal108', 'aaaaaaaa', 'vimal', 'krishnan', 'vimalkrishnans@gmail.com', '1995-01-08', 'cse', 'uploads/dummy.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(255) NOT NULL,
  `email` varchar(2555) NOT NULL,
  `id` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `id`) VALUES
('John', 'john@demo.fr', '1'),
('sabrina', 'Sabrina@demo.Fr', '2'),
('surendar4', 'surendra@gmail.com', 'surendar4');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `uname` varchar(50) NOT NULL,
  `pid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`uname`, `pid`) VALUES
('kranthi108', 'P100037'),
('kranthi108', 'P100033'),
('kranthi108', ''),
('kranthi108', ''),
('surendar4', ''),
('surendar4', ''),
('', ''),
('kranthi108', ''),
('kranthi108', ''),
('kranthi108', ''),
('', 'P100037'),
('kranthi108', ''),
('kranthi108', ''),
('kranthi108', ''),
('kranthi108', 'P100037'),
('kranthi108', ''),
('kranthi108', 'P100033'),
('kranthi108', 'P100026'),
('kranthi108', ''),
('kranthi108', ''),
('kranthi108', 'P100037'),
('kranthi108', 'P100037'),
('kranthi108', ''),
('admin', ''),
('kranthi108', ''),
('kranthi108', ''),
('kranthi108', ''),
('kranthi108', 'P100032'),
('kranthi108', ''),
('surendar4', ''),
('surendar4', ''),
('kranthi108', ''),
('kranthi108', ''),
('kranthi108', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
