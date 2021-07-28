-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2020 at 02:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tuongee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(20) NOT NULL,
  `therapy_id` int(20) NOT NULL,
  `therapy_time` time NOT NULL,
  `therapy_date` date NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Username` varchar(30) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `CID` int(5) NOT NULL,
  `DID` int(5) NOT NULL,
  `DOV` date NOT NULL,
  `Timestamp` datetime NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Username`, `Fname`, `Gender`, `CID`, `DID`, `DOV`, `Timestamp`, `Status`) VALUES
('user', 'patient', 'male', 1, 1, '2017-11-08', '2017-11-05 16:43:48', 'Booking Registered.Wait for the update');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(3) NOT NULL,
  `firstname` varchar(70) NOT NULL,
  `lastname` varchar(70) NOT NULL,
  `gender` varchar(70) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `firstname`, `lastname`, `gender`, `contact_no`, `Email_id`, `password`) VALUES
(47, 'John', 'Doe', 'male', '0703959145', 'johndoe@gmail.com', 'ce26601dac0dea138b7295f02b7620a7');

-- --------------------------------------------------------

--
-- Table structure for table `counselor`
--

CREATE TABLE `counselor` (
  `did` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `experience` int(11) NOT NULL,
  `specialization` varchar(30) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counselor`
--

INSERT INTO `counselor` (`did`, `name`, `gender`, `dob`, `experience`, `specialization`, `contact`, `address`, `username`, `password`, `region`) VALUES
(1, 'doctor', 'male', '1980-01-01', 10, 'Orthodontist', 9999999999, 'XYZ tower, CST', 'doctor', 'doctor', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `counselor_availability`
--

CREATE TABLE `counselor_availability` (
  `cid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counselor_availability`
--

INSERT INTO `counselor_availability` (`cid`, `did`, `day`, `starttime`, `endtime`) VALUES
(1, 1, 'Friday', '14:00:00', '18:00:00'),
(1, 1, 'Monday', '14:00:00', '18:00:00'),
(1, 1, 'Thursday', '14:00:00', '18:00:00'),
(1, 1, 'Tuesday', '14:00:00', '18:00:00'),
(1, 1, 'Wednesday', '14:00:00', '18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `mid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`mid`, `name`, `gender`, `dob`, `contact`, `address`, `username`, `password`, `region`) VALUES
(1, 'Manager', 'male', '1990-01-01', 8888899999, 'XYZ complex CST', 'manager', 'manager', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `ID` int(11) NOT NULL,
  `topic` varchar(25) NOT NULL,
  `body` varchar(255) NOT NULL,
  `body_detail` longtext NOT NULL,
  `image` text NOT NULL,
  `author` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`ID`, `topic`, `body`, `body_detail`, `image`, `author`) VALUES
(2, 'depression', 'A mental health disorder characterized by persistently depressed mood or loss of interest in activities, causing significant impairment in daily life.', 'Possible causes include a combination of biological, psychological and social sources of distress. Increasingly, research suggests that these factors may cause changes in brain function, including altered activity of certain neural circuits in the brain.The persistent feeling of sadness or loss of interest that characterizes major depression can lead to a range of behavioral and physical symptoms. These may include changes in sleep, appetite, energy level, concentration, daily behavior or self-esteem. Depression can also be associated with thoughts of suicide.The mainstay of treatment is usually medication, talk therapy or a combination of the two. Increasingly, research suggests that these treatments may normalize brain changes associated with depression.', '', 'DW'),
(3, 'Bipolar', 'Bipolar disorder, formerly called manic depression, is a mental health condition that causes extreme mood swings that include emotional highs (mania or hypomania) and lows (depression)\r\n', 'When you become depressed, you may feel sad or hopeless and lose interest or pleasure in most activities.Jan 31, 2018\r\nSymptoms: Mood swing; Suicidal ideation\r\nManic episodes may include symptoms such as high energy, reduced need for sleep and loss of touch with reality. Depressive episodes may include symptoms such as low energy, low motivation and loss of interest in daily activities. Mood episodes last days to months at a time and may also be associated with suicidal thoughts.\r\nTreatment is usually lifelong and often involves a combination of medications and psychotherapy.', 'bipolar1.jpg', 'DW'),
(4, 'Selfcare', 'Self-care is all about showing yourself some TLC and this, in turn, can help boost your mental health and keep anxiety and depression at bay.\r\n', 'Self-care for mental health means that individuals should develop a healthier lifestyle by paying careful attention to their diet, exercise, and sleeping habits. A person’s lifestyle can have a significant impact on how their mind and body respond to a mental health treatment plan.\r\nMANAGING STRESS\r\nStress can be defined as the brain’s response to any demand. Many situations can trigger this reaction, including change.\r\nEXERCISE\r\nExercise is one of the most efficient ways to improve a person’s mental health. Studies show that exercise can treat mild to moderate depression as effectively as antidepressant medication\r\nNUTRITION\r\nEating high-quality foods that contain lots of vitamins, minerals, and antioxidants nourishes the brain and protects it from oxidative stress — the “waste” (free radicals) produced when the body uses oxygen, which can damage cells.', '4.jpg', 'DW'),
(11, 'Anxiety', 'Anxiety disorders are a group of mental disorders characterized by significant feelings of anxiety and fear. ', 'Anxiety is a worry about future events, and fear is a reaction to current events. These feelings may cause physical symptoms, such as a fast heart rate and shakiness.\r\nIncludes diseases: Generalized anxiety disorder\r\nParent disease: Mental disorder\r\nA mental health disorder characterised by feelings of worry, anxiety or fear that are strong enough to interfere with one\'s daily activities.\r\nTreatable by a medical professional\r\nUsually self-diagnosable\r\nLab tests or imaging not required\r\nExamples of anxiety disorders include panic attacks, obsessive-compulsive disorder and post-traumatic stress disorder.\r\nSymptoms include stress that\'s out of proportion to the impact of the event, inability to set aside a worry and restlessness.\r\nTreatment includes counselling or medication, including antidepressants.', 'anxiety3.jpg', 'DW');

-- --------------------------------------------------------

--
-- Table structure for table `therapy`
--

CREATE TABLE `therapy` (
  `ID` int(11) NOT NULL,
  `therapy_name` varchar(30) NOT NULL,
  `cost` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `therapy`
--

INSERT INTO `therapy` (`ID`, `therapy_name`, `cost`) VALUES
(1, 'Anger management', 950),
(4, 'Depression therapy', 500),
(5, 'Couple therapy', 1500),
(6, 'Marriage therapy', 2200),
(7, 'Personal therapy', 500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `role`) VALUES
(1, 'admin@gmail.com', 'admin@123', 'counselor manager'),
(2, 'user@gmail.com', 'user@123', 'client'),
(3, 'counselor@gmail.com', 'counselor@123', 'counselor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Username`,`Fname`,`DOV`,`Timestamp`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `counselor`
--
ALTER TABLE `counselor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `therapy`
--
ALTER TABLE `therapy`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `therapy`
--
ALTER TABLE `therapy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
