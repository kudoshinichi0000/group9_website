-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 02:18 AM
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
(1, 2087244396, 'feed', '$2y$10$VBUJLr9knBQKMV/9Ca4YYuqHn9ZKbszmbLZS0cOCnTItXwiiMBc5y'),
(2, 874407303, 'admin', '$2y$10$FpqbHFyJfsFy7dT/1gjNIOjOh.3rTOmCgOpcvovuiXsJQYZ2RmbBm');

-- --------------------------------------------------------

--
-- Table structure for table `identification`
--

CREATE TABLE `identification` (
  `id` int(11) NOT NULL,
  `quiz_code` int(11) NOT NULL,
  `question` varchar(225) NOT NULL,
  `answer` varchar(225) NOT NULL,
  `points` int(11) NOT NULL,
  `typeOfQuiz` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identification`
--

INSERT INTO `identification` (`id`, `quiz_code`, `question`, `answer`, `points`, `typeOfQuiz`) VALUES
(2, 1246031910, 'Ano kabaliktaran ng boat?', 'taob', 12, 'Identification'),
(3, 1246031910, 'Alam ko ano nasa isip mo ngayon', 'Adonis', 21, 'Identification'),
(4, 634149305, 'Do u like behind the scenes?', 'no', 1000, 'Identification'),
(5, 1447591385, 'Sasagutin mo ba ako', 'hindi', 1000, 'Identification'),
(6, 1249895079, 'What is the kit that you need to be medically prepared', 'medkit', 12, 'Identification'),
(7, 1773514397, 'The motion of this movable joint is gliding.', 'Plane Joints', 5, 'Identification');

-- --------------------------------------------------------

--
-- Table structure for table `multiple_questions`
--

CREATE TABLE `multiple_questions` (
  `id` int(11) NOT NULL,
  `quiz_code` int(11) NOT NULL,
  `question` varchar(225) NOT NULL,
  `questionPoints` int(25) NOT NULL,
  `answer` varchar(225) NOT NULL,
  `option1` varchar(225) NOT NULL,
  `option2` varchar(225) NOT NULL,
  `option3` varchar(225) NOT NULL,
  `option4` varchar(225) NOT NULL,
  `typeOfQuiz` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `multiple_questions`
--

INSERT INTO `multiple_questions` (`id`, `quiz_code`, `question`, `questionPoints`, `answer`, `option1`, `option2`, `option3`, `option4`, `typeOfQuiz`) VALUES
(2, 1575564437, 'Kaya mo ba to?', 100, 'C', 'hindi', 'hindi', 'hindi', 'OO', 'Multiple Questions'),
(3, 603339118, 'Which is the odd one out?', 1, 'A', 'Watermelon', 'Jackfruit', 'Canteloupes ', 'Honeydew Melon', 'Multiple Questions'),
(4, 603339118, 'Which is the odd one out?', 1, 'A', 'Potatoes', 'Carrots', 'Green Beans', 'Beets', 'Multiple Questions'),
(5, 603339118, 'Which is the odd one out?', 1, 'A', 'Bell Peppers', 'Zucchini', 'Cucumbers', 'Onions', 'Multiple Questions'),
(6, 603339118, 'Which is the odd one out?', 1, 'A', 'Avocados', 'Cherries', 'Plums', 'Kiwis', 'Multiple Questions'),
(7, 603339118, 'Which is the odd one out?', 1, 'A', 'Grapefruit', 'Oranges', 'Lemons', 'Peaches', 'Multiple Questions'),
(8, 1395815813, 'Why did God created the WORLD?', 1000, 'D', 'For fun', 'God is lonely', 'God is incapable of love', 'God is so full of all that is good, that it overflows and spills out of him.', 'Multiple Questions'),
(9, 1282115112, '3 + 1', 1, 'A', '4', '5', '2', '3', 'Multiple Questions'),
(10, 1282115112, '11-4', 1, 'A', '7', '8', '9', '12', 'Multiple Questions'),
(11, 1282115112, 'Asan nakatingin ang araw', 2, 'A', 'Sa mata mo', 'Talking to the mooooooooon', 'Malay ko', 'Sa south', 'Multiple Questions'),
(12, 1282115112, 'Nakailang araw si Jesus sa kweba', 3, 'A', '3', '4', '5', '6', 'Multiple Questions'),
(13, 1282115112, 'Ilang bato ang binato ng mga tao kay hesus', 5, 'A', '5', '55', '45', '99', 'Multiple Questions'),
(14, 1246031910, 'OK ka lang ba?', 123, 'A', 'OPO UWU', 'hindi', 'lul', 'yes', 'Multiple Questions'),
(15, 634149305, 'How many members are in an army', 100, 'A', '50', '7', '100', '1000', 'Multiple Questions'),
(16, 1447591385, 'How would you like to answer God', 1000, 'A', 'Amen', 'I love you', 'Di ako pumasa sa Adonis', 'Hi God', 'Multiple Questions'),
(17, 1249895079, 'If you are stranded in the ocean with nothing but a raft, what are you gonna do', 12, 'A', 'maintain calm, and start hunting for islands or boats', 'Dance the night away', 'Watch floyd mayweather vs logan paul', 'Swim at the bottom of the ocean', 'Multiple Questions'),
(18, 198460025, 'What system is made of different glands that produces and secrete hormones and chemical substances.', 3, 'D', 'Respiratory System', 'Digestive System', 'Nervous System\r\n', 'Endocrine System', 'Multiple Questions'),
(19, 198460025, 'Parts of the endocrine system that is responsible for producing melatonin which affects reproductive functions.', 3, 'B', 'Hypothalamus', 'Pineal Glands', 'Pituitary Glands', 'Thymus Glands', 'Multiple Questions'),
(20, 198460025, 'It secretes hormones involved with fluid balanced and smooth muscle contraction.', 5, 'A', 'A.	Hypothalamus', 'B.	Pineal Glands', 'C.	Pituitary Glands', 'D.	Thymus', 'Multiple Questions'),
(21, 198460025, 'It secretes multiple hormones that regulates the endocrine activities of adrenal cortex', 5, 'B', 'A.	Pineal Glands', 'B.	Pituitary Glands', 'C.	Thymus', 'D.	Parathyroid', 'Multiple Questions'),
(22, 198460025, 'It secretes hormones affecting growth, sexual activities, and metabolism. Also responsible for producing testosterone and estrogen', 5, 'B', 'A.	Pancreas', 'B.	Gonads', 'C.	Adrenal Glands', 'D.	Thymus', 'Multiple Questions'),
(23, 198460025, 'It secretes hormones involved with mineral balance, metabolic control and resistance to stress.', 5, 'C', 'A.	Pancreas', 'B.	Gonads', 'C.	Adrenal Glands', 'D.	Thymus', 'Multiple Questions'),
(24, 198460025, 'It secretes hormones regulating the rate of glucose intake, uptake, and utilization of body tissue.', 5, 'A', 'A.	Pancreas', 'B.	Gonads', 'C.	Adrenal Glands', 'D.	Thymus', 'Multiple Questions'),
(25, 198460025, 'It secretes hormones involved in the stimulation and coordination of the immune response.', 5, 'D', 'A.	Pancreas', 'B.	Gonads', 'C.	Adrenal Glands', 'D.	Thymus', 'Multiple Questions'),
(26, 1112383241, 'These involuntary muscles that line the inside of the organs such as the stomach, esophagus, and small intestine.', 3, 'c', 'A.	Skeletal muscles', 'B.	Cardiac muscles', 'C.	Visceral Muscles', 'D.	Tendons', 'Multiple Questions'),
(27, 1112383241, 'There are voluntary muscles and can be controlled consciously.', 2, 'A', 'A.	Skeletal muscles', 'B.	Cardiac muscles', 'C.	Visceral Muscles', 'D.	Tendons', 'Multiple Questions'),
(28, 1112383241, 'There are also involuntary muscles found only in the heart.', 3, 'B', 'A.	Skeletal muscles', 'B.	Cardiac muscles', 'C.	Visceral Muscles', 'D.	Tendons', 'Multiple Questions'),
(29, 1112383241, 'It connects the muscles to a bone', 3, 'D', 'A.	Skeletal muscles', 'B.	Cardiac muscles', 'C.	Visceral Muscles', 'D.	Tendons', 'Multiple Questions'),
(30, 1773514397, 'The motion of this movable joint is universal. ', 3, 'D', 'A.	Pivot Joints', 'B.	Plane Joints', 'C.	Hinge Joints', 'D.	Appendicular Joints', 'Multiple Questions'),
(31, 1773514397, 'The motion of this movable joint is rotating.', 3, 'A', 'A.	Pivot Joints', 'B.	Plane Joints', 'C.	Hinge Joints', 'D.	Appendicular Joints', 'Multiple Questions'),
(32, 1773514397, 'The motion of this movable joint is bending.', 3, 'C', 'A.	Pivot Joints', 'B.	Plane Joints', 'C.	Hinge Joints', 'D.	Appendicular Joints', 'Multiple Questions'),
(33, 1773514397, 'The location of .this muscle seen in the forehead.', 2, 'A', 'A.	Frontal muscle', 'B.	Temporal muscle', 'C.	Pectorals', 'D.	Biceps', 'Multiple Questions'),
(34, 1773514397, 'The location of this muscle seen in the arms and thighs.', 2, 'D', 'A.	Frontal muscle', 'B.	Temporal muscle', 'C.	Pectorals', 'D.	Biceps', 'Multiple Questions'),
(35, 1773514397, 'The location of this muscle seen on the side of the skull. (B)', 2, 'B', 'A.	Frontal muscle', 'B.	Temporal muscle', 'C.	Pectorals', 'D.	Biceps', 'Multiple Questions'),
(36, 1251040833, 'Which of the following is the correct statement about the mantle?', 4, 'D', 'A.	It is the solid outer layer of the earth.', 'B.	Responsible for earthquakes and geological process.', 'C.	It is solid in plastic manner.', 'D.	It is primarily solid but behaves as a viscous liquid.', 'Multiple Questions'),
(37, 617741012, 'Huge ball of gases that emit their own light and provide heat to the universe.', 5, 'A', 'A.	Stars	 	', 'B. Nebulae	', 'C. Black Body		', 'D. Sun', 'Multiple Questions'),
(38, 617741012, 'Made up of dust and gases.', 2, 'B', 'A.	Stars	 ', 'B. Nebulae		', 'C. Black Body		', 'D. Sun', 'Multiple Questions'),
(39, 617741012, 'The largest Star', 2, 'D', 'A.	Stars	 	', 'B. Nebulae		', 'C. Black Body		', 'D. Sun', 'Multiple Questions'),
(40, 617741012, 'Tell how much energy a star carries.', 2, 'B', 'A.	Magnitude	', 'B. Amplitude		', 'C. Black dwarf		', 'D. Black Hole', 'Multiple Questions'),
(41, 617741012, 'Tell how bright a star is a perceived on Earth.', 2, 'A', 'A.	Magnitude	', 'B. Amplitude		', 'C. Black dwarf		', 'D. Black Hole', 'Multiple Questions');

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
(2, 'Mahina ka', 2087244396, 1575564437, 'Entertainment', 'Di mo to kaya', 1, 100, '1575564437_0a47c7.jpeg', '2021-06-07 23:19:27'),
(3, 'Odd One Out', 2087244396, 603339118, 'Entertainment', 'Pick what is the odd one', 5, 5, '603339118_whatsgoinon.jpg', '2021-06-07 23:23:42'),
(4, 'One-Question Quiz', 2087244396, 1395815813, 'Entertainment', 'Not A Single Person Has Been Able To Get This One-Question Quiz Right — Can You?', 1, 1000, '1395815813_yeahidk.jpeg', '2021-06-07 23:34:15'),
(5, 'Math Test', 2087244396, 1282115112, 'Entertainment', 'Can You Pass This Progressively Harder Elementary Math Test?', 5, 12, '1282115112_cute girl forget her name doe.png', '2021-06-07 23:39:59'),
(6, 'Para Sayo to', 2087244396, 1246031910, 'Entertainment', 'ugh ugh', 4, 368, '1246031910_IMG_20191219_1227302.jpg', '2021-06-07 23:46:59'),
(7, 'Are you an ARMY?', 2087244396, 634149305, 'Entertainment', 'ARMY TEST', 3, 2100, '634149305_2n6w21w91j761.jpg', '2021-06-07 23:51:47'),
(8, 'Are you faithful?', 2087244396, 1447591385, 'Entertainment', 'How faithful can you be?', 3, 2001, '1447591385_b18ad7.jpeg', '2021-06-07 23:57:31'),
(9, 'Survival Quiz', 2087244396, 1249895079, 'Entertainment', 'Test of Survival skills', 3, 36, '1249895079_slideaaronwow.jpeg', '2021-06-08 00:01:37'),
(10, 'hellooo', 874407303, 1673202252, 'Educational', 'okay nabaaa', 0, 0, '1673202252_bodysys.jpg', '2021-06-08 14:41:41'),
(11, 'helloooo', 2087244396, 72811123, 'Educational', 'asdfghjkl', 0, 0, '72811123_bodysys.jpg', '2021-06-08 14:44:48'),
(12, ' PARTS OF BODY SYSTEMS', 2087244396, 1501615996, 'Educational', ' A body system are group of organ parts and tissues to be able to work together for common purpose of survival, growth, and reproduction. Each  part of body  system perform specific  task and depends on the other parts of the', 0, 0, '1501615996_bodysys.jpg', '2021-06-08 15:28:28'),
(13, 'MUSCULAR SYSTEM', 2087244396, 1374997288, 'Educational', 'This quiz will help you to know more things about the muscular system. Human body has many muscles.', 0, 0, '1374997288_Muscular-System-Muscular-System.jpg', '2021-06-08 18:47:38'),
(14, 'Endocrine System', 2087244396, 198460025, 'Educational', 'This quiz will test your knowledge and understanding about endocrine system and function of each part.', 10, 40, '198460025_Hero_EndocrineSystem1.jpg', '2021-06-08 18:52:53'),
(15, 'THE MUSCULAR AND SKELETAL SYSTEMS', 2087244396, 1112383241, 'Educational', 'In this quiz, it test what you have learned on your high school life lessons in Science. Goodluck!', 17, 41, '1112383241_skeandmus.jpg', '2021-06-08 19:35:11'),
(16, 'Joints and Muscles', 2087244396, 1773514397, 'Educational', 'You will learn the location of the muscles on your body. And also the different joints.', 7, 20, '1773514397_skeletalmuscle.jpg', '2021-06-08 20:13:48'),
(17, 'Layers of the Earth', 2087244396, 1251040833, 'Educational', 'In this quiz, you will learn so much about the different layers of the earth and their respective characteristics.', 1, 4, '1251040833_layersofdearth.jpg', '2021-06-08 20:31:12'),
(18, 'Stars and their Characteristics ', 2087244396, 617741012, 'Educational', 'You will learn a lot if things after you take this quiz. Or you can test your understanding about the stars and their characteristics ', 5, 13, '617741012_stars.jpg', '2021-06-08 20:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `trueorfalse`
--

CREATE TABLE `trueorfalse` (
  `id` int(11) NOT NULL,
  `quiz_code` int(11) NOT NULL,
  `question` varchar(225) NOT NULL,
  `answer` varchar(225) NOT NULL,
  `points` int(11) NOT NULL,
  `typeOfQuiz` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trueorfalse`
--

INSERT INTO `trueorfalse` (`id`, `quiz_code`, `question`, `answer`, `points`, `typeOfQuiz`) VALUES
(2, 1246031910, 'Tama ba', 'True', 212, 'True or False'),
(3, 634149305, 'Are you an army?', 'False', 1000, 'True or False'),
(4, 1447591385, 'How many stars are there', 'True', 1, 'True or False'),
(5, 1249895079, 'You have to trust no one when you are alone', 'True', 12, 'True or False'),
(6, 198460025, 'Fluid balance and urine production is one of the functions of hormones', 'True', 2, 'True or False'),
(7, 198460025, 'Sexual reproduction is not a function of hormones', 'False', 2, 'True or False'),
(8, 1112383241, 'Skull is composed of eight cranial bones (named after the lobes of the brain', 'True', 3, 'True or False'),
(9, 1112383241, 'There are around 206 bones in the adult human body.', 'True', 2, 'True or False'),
(10, 1112383241, 'Capillary is a vessel carries blood back to the heart.', 'False', 3, 'True or False'),
(11, 1112383241, 'Vein is a blood vessel carries oxygen-rich blood away from the heart.', 'False', 2, 'True or False'),
(12, 1112383241, 'Trachea is also known as the throat.', 'False', 2, 'True or False'),
(13, 1112383241, 'Bronchus is the extension of the trachea that divides to the left and right lungs', 'True', 3, 'True or False'),
(14, 1112383241, 'Myocarditis is the inflammation of the heart muscles.', 'True', 2, 'True or False'),
(15, 1112383241, 'Urethra is the organ that temporarily stores the filtered waste.', 'False', 2, 'True or False'),
(16, 1112383241, 'The waste product of the urinary system is urine.', 'True', 2, 'True or False'),
(17, 1112383241, 'Urinary system removes wastes products from the body.', 'Choose...', 2, 'True or False'),
(18, 1112383241, 'Trachea is also known as windpipe', 'True', 3, 'True or False'),
(19, 1112383241, 'Myocarditis is the inflammation of the skeletal muscle', 'False', 2, 'True or False'),
(20, 1112383241, 'Organism has  capability to produce their own food are called producer', 'True', 2, 'True or False');

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
-- Indexes for table `identification`
--
ALTER TABLE `identification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multiple_questions`
--
ALTER TABLE `multiple_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_list`
--
ALTER TABLE `quiz_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trueorfalse`
--
ALTER TABLE `trueorfalse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `identification`
--
ALTER TABLE `identification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `multiple_questions`
--
ALTER TABLE `multiple_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `quiz_list`
--
ALTER TABLE `quiz_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `trueorfalse`
--
ALTER TABLE `trueorfalse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
