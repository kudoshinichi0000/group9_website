-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 11:10 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userid`, `username`, `password`) VALUES
(1, 402051288, 'feed', '$2y$10$xG9TaMIBGt9qSFSberxhvulaHj0t76q4sg2hISX.2dRrBH7Ly8MBS'),
(2, 777749662, 'mod', '$2y$10$AJmKwN2uNJb2uCc2sj/yjOJf6Jm6/2BfMUOJkLIH4.L8H42Q31lkm'),
(3, 2122926540, 'sandwich', '$2y$10$22knTsnAc0NnvQNHjQT8V.Cwv1x3pH8Su/o4ui7n8lxsByQLDFxOW'),
(4, 805559450, 'yuu', '$2y$10$1knuRAZ93tanOpOFeDBasO2Omz.NesuND4sHu4SRw9B2WSUvA8miW');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(10) NOT NULL,
  `adminid` int(10) NOT NULL,
  `content` text NOT NULL,
  `anndate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `adminid`, `content`, `anndate`) VALUES
(4, 402051288, 'yuhuh\r\n', '2021-06-23 07:26:13'),
(5, 777749662, 'ayoko magayos ng css because i suck at it, princess i rely on you  :>', '2021-06-23 17:51:38');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `quiz_code` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `score` varchar(225) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `quiz_code`, `username`, `email`, `score`, `date`) VALUES
(1, '911518400', 'jez', 'agapitojezreel25@gmail.com', '2159804959', '2021-06-29 02:27:39'),
(2, '311970060', 'jez', 'agapitojezreel25@gmail.com', '120', '2021-06-29 19:47:24'),
(4, '172613090', 'jez', 'agapitojezreel25@gmail.com', '20', '2021-06-29 20:22:30'),
(5, '172613090', 'yuu', 'agapitojezreel25@gmail.com', '100', '2021-06-29 20:27:42'),
(6, '516049785', 'jez', 'agapitojezreel25@gmail.com', '100', '2021-06-29 20:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `option`
--

CREATE TABLE `option` (
  `id` int(11) NOT NULL,
  `quiz_code` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `questionPoints` int(11) NOT NULL,
  `answer` varchar(225) NOT NULL,
  `options` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `option`
--

INSERT INTO `option` (`id`, `quiz_code`, `question_number`, `questionPoints`, `answer`, `options`) VALUES
(1, 911518400, 1, 12321312, '1', 'No'),
(2, 911518400, 1, 12321312, '0', 'Yes'),
(3, 911518400, 1, 12321312, '0', 'Maybe'),
(4, 911518400, 1, 12321312, '0', 'Kinda'),
(5, 911518400, 2, 2147483647, '1', 'True'),
(6, 911518400, 2, 2147483647, '0', 'False'),
(7, 1292886324, 1, 999999, '1', 'True'),
(8, 1292886324, 1, 999999, '0', 'False'),
(9, 1868402826, 1, 232132, '1', 'True'),
(10, 1868402826, 1, 232132, '0', 'False'),
(11, 1868402826, 2, 231123, '1', '1893'),
(12, 1868402826, 2, 231123, '0', '1898'),
(13, 1868402826, 2, 231123, '0', '1961'),
(14, 1868402826, 2, 231123, '0', '1969'),
(15, 325976179, 1, 312, '0', 'drown'),
(16, 325976179, 1, 312, '1', 'survive'),
(17, 325976179, 1, 312, '0', 'die'),
(18, 325976179, 1, 312, '0', 'swim'),
(19, 325976179, 2, 111, '1', 'medkit'),
(20, 325976179, 3, 123123, '1', 'True'),
(21, 325976179, 3, 123123, '0', 'False'),
(22, 588231519, 1, 231, '0', 'Yeah you know me'),
(23, 588231519, 1, 231, '1', 'God'),
(24, 588231519, 1, 231, '0', 'Kratos'),
(25, 588231519, 1, 231, '0', 'Pepsi'),
(26, 588231519, 2, 312312, '1', 'True'),
(27, 588231519, 2, 312312, '0', 'False'),
(28, 588231519, 3, 3123123, '1', 'JCole'),
(29, 1044340486, 1, 3, '0', 'A.	Respiratory System\r\n\r\n'),
(30, 1044340486, 1, 3, '0', 'B.	Digestive System\r\n'),
(31, 1044340486, 1, 3, '0', 'C.	Nervous System\r\n'),
(32, 1044340486, 1, 3, '1', 'D.	Endocrine System'),
(33, 1044340486, 2, 3, '0', 'A.	Hypothalamus'),
(34, 1044340486, 2, 3, '0', ' B.	Pineal Glands'),
(35, 1044340486, 2, 3, '1', ' C.	Pituitary Glands '),
(36, 1044340486, 2, 3, '0', 'D.	Thymus'),
(37, 1044340486, 3, 3, '1', ' A.	Hypothalamus '),
(38, 1044340486, 3, 3, '0', 'B.Pineal Glands '),
(39, 1044340486, 3, 3, '0', 'C.	Pituitary Glands'),
(40, 1044340486, 3, 3, '0', ' D.	Thymus'),
(41, 1044340486, 4, 3, '0', 'A.	Pineal Glands'),
(42, 1044340486, 4, 3, '1', ' B.	Pituitary Glands'),
(43, 1044340486, 4, 3, '0', ' C.	Thymus '),
(44, 1044340486, 4, 3, '0', 'D.	Parathyroid'),
(45, 1044340486, 5, 3, '1', 'A.	Pancreas '),
(46, 1044340486, 5, 3, '0', 'B.	Gonads '),
(47, 1044340486, 5, 3, '0', 'C.	Adrenal Glands '),
(48, 1044340486, 5, 3, '0', 'D.	Thymus'),
(49, 1044340486, 6, 3, '0', 'A.	Pancreas'),
(50, 1044340486, 6, 3, '0', ' B.	Gonads '),
(51, 1044340486, 6, 3, '0', 'C.	Adrenal Glands '),
(52, 1044340486, 6, 3, '1', 'D.	Thymus'),
(53, 1044340486, 7, 3, '0', 'Follicle stimulating hormone (FSH)'),
(54, 1044340486, 7, 3, '0', 'Human growth hormone (hGH)'),
(55, 1044340486, 7, 3, '0', 'Thyroid stimulating hormone (TSH)'),
(56, 1044340486, 7, 3, '1', 'Adrenocorticotropic hormone (ACTH)'),
(57, 1044340486, 8, 3, '0', 'Insulin\r\n\r\n'),
(58, 1044340486, 8, 3, '0', 'Glucagon\r\n\r\n'),
(59, 1044340486, 8, 3, '1', 'Prolactin\r\n\r\n'),
(60, 1044340486, 8, 3, '0', 'Epinephrine\r\n'),
(61, 1044340486, 9, 3, '1', ' Melatonin  '),
(62, 1044340486, 9, 3, '0', 'Adrenocorticotropic hormone  '),
(63, 1044340486, 9, 3, '0', 'Growth hormone  '),
(64, 1044340486, 9, 3, '0', 'Follicle-stimulating hormone'),
(65, 1044340486, 10, 5, '1', 'OXYTOCIN'),
(66, 1044340486, 11, 3, '1', 'True'),
(67, 1044340486, 11, 3, '0', 'False'),
(68, 1768799120, 1, 3, '0', 'A.	It is the solid outer layer of the earth.'),
(69, 1768799120, 1, 3, '0', ' B.	Responsible for earthquakes and geological process.'),
(70, 1768799120, 1, 3, '0', ' C.	It is solid in plastic manner. '),
(71, 1768799120, 1, 3, '1', 'D.	It is primarily solid but behaves as a viscous liquid.'),
(72, 1768799120, 2, 3, '1', 'CRUST'),
(73, 1768799120, 3, 3, '1', 'CORE'),
(74, 1768799120, 4, 3, '1', 'OUTER CORE AND INNER CORE'),
(75, 1768799120, 5, 3, '1', 'LITHOSPHERE'),
(76, 1768799120, 6, 3, '0', 'A.	It is the solid outer layer of the earth.'),
(77, 1768799120, 6, 3, '0', ' B.	Responsible for earthquakes and geological process. '),
(78, 1768799120, 6, 3, '0', 'C.	It is solid in plastic manner.'),
(79, 1768799120, 6, 3, '1', ' D.	It is primarily solid but behaves as a viscous liquid.'),
(80, 47460316, 1, 3, '1', 'SKELETAL MUSCLE'),
(81, 47460316, 2, 3, '0', 'Smooth muscle\r\n\r\n'),
(82, 47460316, 2, 3, '0', 'Cardiac muscle\r\n'),
(83, 47460316, 2, 3, '1', 'Skeletal muscle\r\n'),
(84, 47460316, 2, 3, '0', 'None of the above'),
(85, 47460316, 3, 2, '1', ' RUNNING'),
(86, 47460316, 4, 3, '1', 'True'),
(87, 47460316, 4, 3, '0', 'False'),
(88, 47460316, 5, 3, '1', 'SMOOTH MUSCLE'),
(89, 47460316, 6, 3, '1', 'SMOOTH MUSCLE'),
(90, 47460316, 7, 3, '0', 'SMOOTH MUSCLE '),
(91, 47460316, 7, 3, '1', 'CARDIAC MUSCLE'),
(92, 47460316, 7, 3, '0', ' SKELETAL MUSCLE'),
(93, 47460316, 7, 3, '0', 'NONE OF THE ABOVE'),
(94, 491562809, 1, 3, '1', 'True'),
(95, 491562809, 1, 3, '0', 'False'),
(96, 491562809, 2, 3, '1', 'True'),
(97, 491562809, 2, 3, '0', 'False'),
(98, 491562809, 3, 3, '0', 'True'),
(99, 491562809, 3, 3, '1', 'False'),
(100, 491562809, 4, 3, '0', 'True'),
(101, 491562809, 4, 3, '1', 'False'),
(102, 491562809, 5, 3, '0', 'True'),
(103, 491562809, 5, 3, '1', 'False'),
(104, 491562809, 6, 3, '1', 'True'),
(105, 491562809, 6, 3, '0', 'False'),
(106, 491562809, 7, 3, '1', 'True'),
(107, 491562809, 7, 3, '0', 'False'),
(108, 491562809, 8, 3, '0', 'True'),
(109, 491562809, 8, 3, '1', 'False'),
(110, 491562809, 9, 3, '1', 'True'),
(111, 491562809, 9, 3, '0', 'False'),
(112, 491562809, 10, 3, '1', 'True'),
(113, 491562809, 10, 3, '0', 'False'),
(114, 491562809, 11, 3, '1', 'True'),
(115, 491562809, 11, 3, '0', 'False'),
(116, 491562809, 12, 3, '0', 'True'),
(117, 491562809, 12, 3, '1', 'False'),
(118, 491562809, 13, 3, '1', 'True'),
(119, 491562809, 13, 3, '0', 'False'),
(120, 2128630171, 1, 3, '1', 'EXTINCTION'),
(121, 2128630171, 2, 3, '1', 'GENOTYPE'),
(122, 2128630171, 3, 3, '1', 'HOMOZYGOUS'),
(123, 2128630171, 4, 3, '1', 'PHENOTYPE'),
(124, 2128630171, 5, 3, '1', 'GREGOR MENDEL'),
(125, 2128630171, 6, 3, '1', 'HETEROZYGOUS'),
(126, 2128630171, 7, 3, '1', 'DNA'),
(127, 2128630171, 8, 3, '0', 'True'),
(128, 2128630171, 8, 3, '1', 'False'),
(129, 2128630171, 9, 3, '1', 'True'),
(130, 2128630171, 9, 3, '0', 'False'),
(131, 606018136, 1, 10, '1', '1955'),
(132, 606018136, 2, 10, '1', '12'),
(133, 606018136, 3, 10, '1', 'NO WORRIES'),
(134, 606018136, 4, 30, '1', '10,000 Years'),
(135, 606018136, 4, 30, '0', '100,000 Years'),
(136, 606018136, 4, 30, '0', '1,000,000 Years'),
(137, 606018136, 4, 30, '0', '10,000,000 Years'),
(138, 606018136, 5, 30, '0', 'Wukong'),
(139, 606018136, 5, 30, '0', 'Maleficent'),
(140, 606018136, 5, 30, '1', 'Zazu'),
(141, 606018136, 5, 30, '0', 'Zozu'),
(142, 606018136, 6, 10, '1', 'True'),
(143, 606018136, 6, 10, '0', 'False'),
(144, 311970060, 1, 10, '1', 'RAPUNZEL'),
(145, 311970060, 2, 10, '1', 'MAURICE'),
(146, 311970060, 3, 10, '1', 'MAX'),
(147, 311970060, 4, 30, '0', 'Prince Hanz'),
(148, 311970060, 4, 30, '0', 'Prince Aaron'),
(149, 311970060, 4, 30, '1', 'Prince Phillip'),
(150, 311970060, 4, 30, '0', 'Prince albert'),
(151, 311970060, 5, 30, '0', 'Chef king'),
(152, 311970060, 5, 30, '1', 'Chef Auguste Gusteau'),
(153, 311970060, 5, 30, '0', 'Chef Maurice'),
(154, 311970060, 5, 30, '0', 'Chef Dianna'),
(155, 311970060, 6, 30, '0', 'True'),
(156, 311970060, 6, 30, '1', 'False'),
(164, 674347246, 1, 20, '1', 'TURTLE'),
(165, 674347246, 2, 20, '1', 'COCONUT'),
(166, 674347246, 3, 20, '1', 'PUA'),
(167, 674347246, 4, 20, '1', 'Sven'),
(168, 674347246, 4, 20, '0', 'Olaf'),
(169, 674347246, 4, 20, '0', 'Kristoff'),
(170, 674347246, 4, 20, '0', 'Anna'),
(171, 674347246, 5, 20, '1', 'True'),
(172, 674347246, 5, 20, '0', 'False'),
(173, 172613090, 1, 20, '1', 'SHIPWRECK'),
(174, 172613090, 2, 20, '1', '21'),
(175, 172613090, 3, 20, '1', 'ARENDELLE'),
(176, 172613090, 4, 20, '0', 'His Mother'),
(177, 172613090, 4, 20, '0', 'Olaf'),
(178, 172613090, 4, 20, '1', 'Trolls'),
(179, 172613090, 4, 20, '0', 'King Phillip'),
(180, 172613090, 5, 20, '1', 'Oaken'),
(181, 172613090, 5, 20, '0', 'Olaf'),
(182, 172613090, 5, 20, '0', 'King Phillip'),
(183, 172613090, 5, 20, '0', 'Queen Elsa'),
(184, 460762334, 1, 20, '1', 'NANA'),
(185, 516049785, 1, 20, '0', 'True'),
(186, 516049785, 1, 20, '1', 'False'),
(187, 516049785, 2, 20, '0', 'True'),
(188, 516049785, 2, 20, '1', 'False'),
(189, 516049785, 3, 20, '1', 'True'),
(190, 516049785, 3, 20, '0', 'False'),
(191, 516049785, 4, 20, '1', 'ONE THOUSAND'),
(192, 516049785, 5, 20, '1', 'PRINCE HANZ');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `quiz_code` varchar(225) NOT NULL,
  `question_number` varchar(225) NOT NULL,
  `questionPoints` int(11) NOT NULL,
  `question` varchar(225) NOT NULL,
  `typeOfQuiz` varchar(225) NOT NULL,
  `answer` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `quiz_code`, `question_number`, `questionPoints`, `question`, `typeOfQuiz`, `answer`) VALUES
(1, '911518400', '1', 12321312, 'Is jungkook straight?', 'Multiple Questions', '1'),
(2, '911518400', '2', 2147483647, 'Is Jungkook the youngest member of the group?', 'True or False', 'True'),
(3, '1292886324', '1', 999999, 'Is paolo hot?', 'True or False', 'True'),
(4, '1868402826', '1', 232132, 'is pepsi sweet?', 'True or False', 'True'),
(5, '1868402826', '2', 231123, 'when was pepsi made?', 'Multiple Questions', '1'),
(6, '325976179', '1', 312, 'If you are stranded in the ocean with nothing but a raft, what are you gonna do', 'Multiple Questions', '2'),
(7, '325976179', '2', 111, 'What is the kit that you need to be medically prepared', 'Identification', 'medkit'),
(8, '325976179', '3', 123123, 'You have to trust no one when you are alone', 'True or False', 'True'),
(9, '588231519', '1', 231, 'Who is the real God', 'Multiple Questions', '2'),
(10, '588231519', '2', 312312, 'Is God omnipotent?', 'True or False', 'True'),
(11, '588231519', '3', 3123123, 'What is the full name of JC', 'Identification', 'JCole'),
(12, '1044340486', '1', 3, 'What system is made of different glands that produces and secrete hormones and chemical substances. ', 'Multiple Questions', '4'),
(13, '1044340486', '2', 3, 'Parts of the endocrine system that is responsible for producing melatonin which affects reproductive functions. ', 'Multiple Questions', '3'),
(14, '1044340486', '3', 3, 'It secretes hormones involved with fluid balanced and smooth muscle contraction.', 'Multiple Questions', '1'),
(15, '1044340486', '4', 3, 'It secretes multiple hormones that regulates the endocrine activities of adrenal cortex. ', 'Multiple Questions', '2'),
(16, '1044340486', '5', 3, 'It secretes hormones regulating the rate of glucose intake, uptake, and utilization of body tissue. ', 'Multiple Questions', '1'),
(17, '1044340486', '6', 3, 'It secretes hormones involved in the stimulation and coordination of the immune response. ', 'Multiple Questions', '4'),
(18, '1044340486', '7', 3, 'Which of these hormones stimulates secretion of cortisol?', 'Multiple Questions', '4'),
(19, '1044340486', '8', 3, 'Which of the following hormones is released from the anterior pituitary?', 'Multiple Questions', '3'),
(20, '1044340486', '9', 3, 'Which of the following hormones is not secreted by the pituitary gland? ', 'Multiple Questions', '1'),
(21, '1044340486', '10', 5, 'Which of the following is a hormone secreted by the posterior pituitary?', 'Identification', 'OXYTOCIN'),
(22, '1044340486', '11', 3, 'Hypothalamus is the place in the body where core temperature regulated?', 'True or False', 'True'),
(23, '1768799120', '1', 3, 'Which of the following is the correct statement about the mantle? ', 'Multiple Questions', '4'),
(24, '1768799120', '2', 3, 'It is the solid outer layer of the Earth ', 'Identification', 'CRUST'),
(25, '1768799120', '3', 3, 'It is hotter than the mantle. ', 'Identification', 'CORE'),
(26, '1768799120', '4', 3, 'What are the two parts of the core? ', 'Identification', 'OUTER CORE AND INNER CORE'),
(27, '1768799120', '5', 3, 'It is located between the crust and the upper mantle. Also describe as rigid brittle rock. ', 'Identification', 'LITHOSPHERE'),
(28, '1768799120', '6', 3, 'Which of the following is the correct statement about the mantle? ', 'Multiple Questions', '4'),
(29, '47460316', '1', 3, 'It is the only muscles that can be consciously controlled. ', 'Identification', 'SKELETAL MUSCLE'),
(30, '47460316', '2', 3, 'They are attached to bones, and contracting the muscles causes movement of those bones.', 'Multiple Questions', '3'),
(31, '47460316', '3', 2, 'Example of action that a person consciously undertakes involves the use of skeletal muscles. ', 'Identification', ' RUNNING'),
(32, '47460316', '4', 3, 'Smooth muscle lines the inside of blood vessels and organs, such as the stomach, and is also known as visceral muscle.', 'True or False', 'True'),
(33, '47460316', '5', 3, 'It is the weakest type of muscle but has an essential role in moving food along the digestive tract and maintaining blood circulation through the blood vessels.', 'Identification', 'SMOOTH MUSCLE'),
(34, '47460316', '6', 3, 'It acts involuntarily and cannot be consciously controlled. ', 'Identification', 'SMOOTH MUSCLE'),
(35, '47460316', '7', 3, 'It stimulates its own contractions that form our heartbeat. Signals from the nervous system control the rate of contraction.  ', 'Multiple Questions', '2'),
(36, '491562809', '1', 3, 'Skull is composed of eight cranial bones named after the lobes of the brain ', 'True or False', 'True'),
(37, '491562809', '2', 3, 'There are around 206 bones in the adult human body. ', 'True or False', 'True'),
(38, '491562809', '3', 3, 'Capillary is a vessel carries blood back to the heart.', 'True or False', 'False'),
(39, '491562809', '4', 3, 'Vein is a blood vessel carries oxygen-rich blood away from the heart. ', 'True or False', 'False'),
(40, '491562809', '5', 3, 'Trachea is also known as the throat. ', 'True or False', 'False'),
(41, '491562809', '6', 3, ' Bronchus is the extension of the trachea that divides to the left and right lungs. ', 'True or False', 'True'),
(42, '491562809', '7', 3, 'Myocarditis is the inflammation of the heart muscles.', 'True or False', 'True'),
(43, '491562809', '8', 3, 'Urethra is the organ that temporarily stores the filtered waste. ', 'True or False', 'False'),
(44, '491562809', '9', 3, 'The waste product of the urinary system is urine. ', 'True or False', 'True'),
(45, '491562809', '10', 3, 'Urinary system removes wastes products from the body. ', 'True or False', 'True'),
(46, '491562809', '11', 3, 'Trachea is also known as windpipe ', 'True or False', 'True'),
(47, '491562809', '12', 3, ' Myocarditis is the inflammation of the skeletal muscle', 'True or False', 'False'),
(48, '491562809', '13', 3, 'Organism has  capability to produce their own food are called producer', 'True or False', 'True'),
(49, '2128630171', '1', 3, 'It is the end of the species existences. ', 'Identification', 'EXTINCTION'),
(50, '2128630171', '2', 3, 'Refers to the genetics make up of an organism. ', 'Identification', 'GENOTYPE'),
(51, '2128630171', '3', 3, 'When the organism has the same alleles.', 'Identification', 'HOMOZYGOUS'),
(52, '2128630171', '4', 3, 'Refers to the observable traits of an organism.', 'Identification', 'PHENOTYPE'),
(53, '2128630171', '5', 3, 'The father of Genetics. ', 'Identification', 'GREGOR MENDEL'),
(54, '2128630171', '6', 3, 'When an organism has two different alleles for a gene(E)', 'Identification', 'HETEROZYGOUS'),
(55, '2128630171', '7', 3, 'The blue print of an organism. ', 'Identification', 'DNA'),
(56, '2128630171', '8', 3, 'Gene is the study of heredity. ', 'True or False', 'False'),
(57, '2128630171', '9', 3, 'Genetics is the study of heredity.', 'True or False', 'True'),
(58, '606018136', '1', 10, 'What year did Disneyland open?', 'Identification', '1955'),
(59, '606018136', '2', 10, 'How many brothers does Prince Hans of the Southern Isles have in Frozen?', 'Identification', '12'),
(60, '606018136', '3', 10, 'What does Hakuna Matata mean?', 'Identification', 'NO WORRIES'),
(61, '606018136', '4', 30, 'Genie was stuck in the lamp for how many years before Aladdin found him?', 'Multiple Questions', '1'),
(62, '606018136', '5', 30, 'Who is Mufasa’s trusted advisor in The Lion King?', 'Multiple Questions', '3'),
(63, '606018136', '6', 10, 'Edna Mode is the fashion designer in The Incredibles', 'True or False', 'True'),
(64, '311970060', '1', 10, 'Which Disney Princess attended Elsa’s coronation day in Arendelle?', 'Identification', 'RAPUNZEL'),
(65, '311970060', '2', 10, 'What is the name of Belle’s father in Beauty and the Beast?', 'Identification', 'MAURICE'),
(66, '311970060', '3', 10, 'Who is Goofy’s son?', 'Identification', 'MAX'),
(67, '311970060', '4', 30, 'What is the name of Sleeping Beauty’s Prince?', 'Multiple Questions', '3'),
(68, '311970060', '5', 30, 'Who is Remy’s culinary hero in Ratatouille?', 'Multiple Questions', '2'),
(69, '311970060', '6', 30, 'Kalo is Tarzan’s adopted mother?', 'True or False', 'False'),
(75, '674347246', '1', 20, 'What baby animal does Moana rescue as a child?', 'Identification', 'TURTLE'),
(76, '674347246', '2', 20, 'What do the Kakamora wear as armor?', 'Identification', 'COCONUT'),
(77, '674347246', '3', 20, 'What is the name of Moana’s pet pig?', 'Identification', 'PUA'),
(78, '674347246', '4', 20, 'Which character from Frozen does Maui shape-shift into?', 'Multiple Questions', '1'),
(79, '674347246', '5', 20, '2016 is year was Moana released', 'True or False', 'True'),
(80, '172613090', '1', 20, 'How did the parents of Elsa and Anna die?', 'Identification', 'SHIPWRECK'),
(81, '172613090', '2', 20, 'How old is Elsa on her Coronation Day?', 'Identification', '21'),
(82, '172613090', '3', 20, 'What is the name of the kingdom that Anna and Elsa are the princesses of?', 'Identification', 'ARENDELLE'),
(83, '172613090', '4', 20, 'Who raised Kristoff?', 'Multiple Questions', '3'),
(84, '172613090', '5', 20, 'Who runs a trading post and sauna up in the mountains?', 'Multiple Questions', '1'),
(85, '460762334', '1', 20, 'What is the name of Wendy’s dog in Peter Pan?', 'Identification', 'NANA'),
(86, '516049785', '1', 20, 'Hans loved Anna.', 'True or False', 'False'),
(87, '516049785', '2', 20, 'The Earth Giants are friendly creatures', 'True or False', 'False'),
(88, '516049785', '3', 20, 'Elsa crosses the Dark Sea on her journey.', 'True or False', 'True'),
(89, '516049785', '4', 20, 'How many salad plates do Elsa and Anna own?', 'Identification', 'ONE THOUSAND'),
(90, '516049785', '5', 20, 'Who does Anna fall in love with at first sight?', 'Identification', 'PRINCE HANZ');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_feedback`
--

CREATE TABLE `quiz_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `feedback` varchar(225) NOT NULL,
  `quiz_code` varchar(225) NOT NULL,
  `score` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_feedback`
--

INSERT INTO `quiz_feedback` (`id`, `name`, `email`, `feedback`, `quiz_code`, `score`) VALUES
(1, 'jez', 'agapitojezreel25@gmail.com', 'wadawdwadawdawd', '911518400', '2159804959'),
(2, 'jez', 'agapitojezreel25@gmail.com', 'Basic', '311970060', '120'),
(4, 'jez', 'agapitojezreel25@gmail.com', 'testt', '172613090', '20'),
(5, 'yuu', 'agapitojezreel25@gmail.com', 'testttt', '172613090', '100'),
(6, 'jez', 'agapitojezreel25@gmail.com', 'test', '516049785', '100');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_list`
--

CREATE TABLE `quiz_list` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `quiz_code` int(11) NOT NULL,
  `categories` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `items` int(11) NOT NULL,
  `OverallScores` int(11) NOT NULL,
  `picture` varchar(225) NOT NULL,
  `publish` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_list`
--

INSERT INTO `quiz_list` (`id`, `title`, `admin_id`, `quiz_code`, `categories`, `description`, `items`, `OverallScores`, `picture`, `publish`) VALUES
(1, 'Are you an ARMY?', 402051288, 911518400, 'Entertainment', 'How army can you get', 2, 2147483647, '911518400_2n6w21w91j761.jpg', '2021-06-24 01:31:56'),
(2, 'Paolo Avelino', 402051288, 1292886324, 'Entertainment', 'How much do you know Paolo Avelino', 1, 999999, '1292886324_paolo ass.png', '2021-06-24 01:36:25'),
(3, 'Can you think straight?', 402051288, 1868402826, 'Entertainment', 'test of how straight you are', 2, 463255, '1868402826_duck.png', '2021-06-24 01:42:19'),
(4, 'Survival Quiz', 402051288, 325976179, 'Entertainment', 'SURVIVE', 3, 123546, '325976179_cute girl forget her name doe.png', '2021-06-24 01:46:20'),
(5, 'Are you faithful?', 777749662, 588231519, 'Entertainment', 'Do you even worship a God?', 3, 3435666, '588231519_75226332_507947026719851_3497441591969185792_n.jpg', '2021-06-24 01:49:13'),
(8, 'Parts of Body System', 402051288, 729047875, 'Educational', 'Goodluck Guys! It will test your knowledge about parts of the body.', 0, 0, '729047875_bodysys1.jpg', '2021-06-28 01:10:01'),
(9, 'Endocrine System', 402051288, 1044340486, 'Educational', 'Goodluck Guys!', 8, 26, '1044340486_Hero_EndocrineSystem1.jpg', '2021-06-28 01:16:55'),
(11, 'Layers of the Earth', 402051288, 1768799120, 'Educational', 'Goodluck!', 6, 18, '1768799120_layersofdearth.jpg', '2021-06-29 08:24:12'),
(12, 'MUSCULAR SYSTEM', 402051288, 47460316, 'Educational', 'It will test your knowledge about muscular system. Goodluck!', 7, 20, '47460316_Muscular-System-Muscular-System.jpg', '2021-06-29 08:30:40'),
(13, 'Genetics And Heredity', 402051288, 2128630171, 'Educational', 'Goodluck!', 14, 42, '2128630171_maxresdefault.jpg', '2021-06-29 08:44:31'),
(14, 'Muscular and Skeletal System', 402051288, 491562809, 'Educational', 'Goddluck!', 13, 39, '491562809_skeandmus.jpg', '2021-06-29 08:46:56'),
(15, 'Disney Trivia', 805559450, 606018136, 'Mix', 'Disney Trivia Questions', 6, 100, '606018136_Disney.jpg', '2021-06-30 03:16:07'),
(16, 'Disney Trivia II', 805559450, 311970060, 'Mix', 'Another Disney Trivia!!', 6, 120, '311970060_images.jfif', '2021-06-30 03:26:31'),
(25, 'Moana Trivia', 805559450, 674347246, 'Mix', 'Trivia and facts about moana', 5, 100, '674347246_571cf1542f95f3cf909f69a936.jpg', '2021-06-30 04:17:32'),
(26, 'Frozen', 805559450, 172613090, 'Mix', 'Trivia and Facts', 5, 100, '172613090_Frozen.jpg', '2021-06-30 04:20:39'),
(27, 'Peter pan ', 805559450, 460762334, 'Mix', 'Facts And Trivia', 1, 20, '460762334_Peter.jpg', '2021-06-30 04:29:47'),
(28, 'Frozen 2', 805559450, 516049785, 'Mix', 'Another frozen quizess', 5, 100, '516049785_enhanced-buzz-28690-1506467170-0.jpg', '2021-06-30 04:38:30');

-- --------------------------------------------------------

--
-- Table structure for table `website_feedback`
--

CREATE TABLE `website_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `feedback` varchar(225) NOT NULL,
  `datesubmitted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `option`
--
ALTER TABLE `option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_feedback`
--
ALTER TABLE `quiz_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_list`
--
ALTER TABLE `quiz_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_feedback`
--
ALTER TABLE `website_feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `option`
--
ALTER TABLE `option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `quiz_feedback`
--
ALTER TABLE `quiz_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quiz_list`
--
ALTER TABLE `quiz_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `website_feedback`
--
ALTER TABLE `website_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
