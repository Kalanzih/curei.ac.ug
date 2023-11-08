-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 01:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curei`
--

-- --------------------------------------------------------

--
-- Table structure for table `bachelors`
--

CREATE TABLE `bachelors` (
  `bach_id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `durration` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `requirments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bachelors`
--

INSERT INTO `bachelors` (`bach_id`, `img`, `course_name`, `department`, `durration`, `description`, `requirments`) VALUES
(1, 'http://localhost/curei.ac.ug/uploads/6454118756346.jpg', 'Bachelor of Medicine In Radiology (M.Med.Rad)', 'Medical Imaging', '4 Years', 'bachelorbachelorbachelorbachelorbachelorbachelor', 'bachelorbachelorbachelorbachelorbachelor');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `bl_id` int(11) NOT NULL,
  `header` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`bl_id`, `header`, `img`, `body`) VALUES
(2, 'We offers accredited programs in Medical Imaging, Biomedical Engineering and other health', 'http://localhost/curei.ac.ug/uploads/6414227805399.jpg', 'We offers accredited programs in Medical Imaging, Biomedical Engineering and other health related courses. These programs are designed to prepare students for successful careers in the healthcare field.\r\nWe offers accredited programs in Medical Imaging, Biomedical Engineering and other health related courses. These programs are designed to prepare students for successful careers in the healthcare field.\r\nWe offers accredited programs in Medical Imaging, Biomedical Engineering and other health related courses. These programs are designed to prepare students for successful careers in the healthcare field.'),
(3, 'Our 4th Graduation', 'http://localhost/curei.ac.ug/uploads/7207952423154.jpg', 'We offers accredited programs in Medical Imaging, Biomedical Engineering and other health related courses. These programs are designed to prepare students for successful careers in the healthcare field. We offers accredited programs in Medical Imaging, Biomedical Engineering and other health related courses. These programs are designed to prepare students for successful careers in the healthcare field. We offers accredited programs in Medical Imaging');

-- --------------------------------------------------------

--
-- Table structure for table `boardmember`
--

CREATE TABLE `boardmember` (
  `bd_id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `possition` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boardmember`
--

INSERT INTO `boardmember` (`bd_id`, `img`, `name`, `possition`) VALUES
(1, 'http://localhost/curei.ac.ug/uploads/5105544486572.jpg', 'DR. JENNIFER NABAWESI', 'Radiologist');

-- --------------------------------------------------------

--
-- Table structure for table `bridge`
--

CREATE TABLE `bridge` (
  `br_id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `durration` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `requirments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bridge`
--

INSERT INTO `bridge` (`br_id`, `img`, `course_name`, `department`, `durration`, `description`, `requirments`) VALUES
(1, 'http://localhost/curei.ac.ug/uploads/8439826031516.jpg', 'Certificate in Imaging', 'Medical Imaging', '2 Years', 'bridgebridgebridgebridgebridgebridgebridgebridge', 'bridgebridgebridgebridgebridgebridgebridge'),
(2, 'http://localhost/curei.ac.ug/uploads/5441568685073.jpg', 'Certificate in Engneering', 'Medical Imaging', '2 Years', 'DescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescription', 'DescriptionDescriptionDescriptionDescriptionDescriptionDescription');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `cor_id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `durration` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `requirments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cor_id`, `img`, `course_name`, `department`, `durration`, `description`, `requirments`) VALUES
(1, 'http://localhost/curei.ac.ug/uploads/6078943998620.jpg', 'Masters of Medicine In Radiology (M.Med.Rad)', 'Medical Imaging', '4 Years', 'This growth is not only in the application of latest Information Communication Technologies (ICT), but also in the range of procedures and diagnostic applications imaging is capable of. Medicine is increasingly relying on medical imaging in the diagnosis of disease. As such Radiologists are highly skilled medical doctors with ability to perform specialized medical imaging procedures, interpret images and integrate the results with other diagnostic modalities for quality management of various pathologies.\r\n\r\nECUREI  owns most of the sophisticated imaging equipment which include Computed Tomography (CT), Magnetic Resonance Imaging (MRI) Digital X-ray Systems and Medium to high range Ultrasound equipment. As such the graduates from this program will be able to handle the rapidly changing radiological imaging and interventional procedures in order to better health care and meet the overwhelming need for specialist Radiologists in the Ugandan and other country’s health care systems.', 'At least a Degree in medicine');

-- --------------------------------------------------------

--
-- Table structure for table `diploma`
--

CREATE TABLE `diploma` (
  `dip_id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `durration` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `requirments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diploma`
--

INSERT INTO `diploma` (`dip_id`, `img`, `course_name`, `department`, `durration`, `description`, `requirments`) VALUES
(1, 'http://localhost/curei.ac.ug/uploads/3678393732812.jpg', 'Diploma in Radiology', 'Medical Imaging', '2 Years', 'diplomadiplomadiplomadiplomadiplomadiplomadiploma', 'diplomadiplomadiplomadiplomadiplomadiploma');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ev_id` int(11) NOT NULL,
  `evname` varchar(250) NOT NULL,
  `evdate` varchar(250) NOT NULL,
  `evtime` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ev_id`, `evname`, `evdate`, `evtime`, `img`, `description`) VALUES
(1, 'Medical Camp', '12-17.11.2023', 'From 9am to 7pm', 'http://localhost/curei.ac.ug/uploads/9490664791626.jpg', 'A medical consultant helps doctors and clinical healthcare facilities improve their business or management practices. Their responsibilities include examining business practices and making recommendations as to how to increase revenue, efficiency, and patient satisfaction.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gal_id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `event` varchar(250) NOT NULL,
  `breif` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gal_id`, `img`, `event`, `breif`) VALUES
(1, 'http://localhost/curei.ac.ug/uploads/2883542196167.jpg', 'Ecurei facility', 'Our main building in Mengo'),
(2, 'http://localhost/curei.ac.ug/uploads/5565121917101.jpg', 'Graduation', 'Our school administrators'),
(3, 'http://localhost/curei.ac.ug/uploads/1149584477220.jpg', 'Graduation', 'Our students enjoy their day with the principal '),
(4, 'http://localhost/curei.ac.ug/uploads/7167313238315.jpg', 'Graduation', 'Our students enjoy their day with the principal '),
(5, 'http://localhost/curei.ac.ug/uploads/4540651590357.jpg', 'Graduation', 'Our  principal ');

-- --------------------------------------------------------

--
-- Table structure for table `governance`
--

CREATE TABLE `governance` (
  `gv_id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `possition` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `governance`
--

INSERT INTO `governance` (`gv_id`, `img`, `name`, `possition`) VALUES
(1, 'http://localhost/curei.ac.ug/uploads/4481423462073.png', 'Prof. Henry Stuart Kasozi', 'Principal  ECUREI'),
(2, 'http://localhost/curei.ac.ug/uploads/4974514547710.jpg', 'Prof. Michael Kawooya', 'Deputy Principal ECUREI');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `jname` varchar(250) NOT NULL,
  `detail` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `img`, `jname`, `detail`, `location`) VALUES
(1, 'http://localhost/curei.ac.ug/uploads/8446121932404.jpg', 'Medical Consults', 'A medical consultant helps doctors and clinical healthcare facilities improve their business or management practices. Their responsibilities include examining business practices and making recommendations as to how to increase revenue, efficiency, an', 'Kampala');

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `mg_id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `possition` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`mg_id`, `img`, `name`, `possition`) VALUES
(1, 'http://localhost/curei.ac.ug/uploads/8110446377729.png', 'Prof. Henry Stuart Kasozi', 'Principal ');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `pt_id` int(11) NOT NULL,
  `header` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`pt_id`, `header`, `img`) VALUES
(1, 'UPDF', 'http://localhost/curei.ac.ug/uploads/9974021459320.jpg'),
(2, 'Mengo Hospital', 'http://localhost/curei.ac.ug/uploads/2342941696595.jpg'),
(3, 'Mindray', 'http://localhost/curei.ac.ug/uploads/8480375986270.jpg'),
(4, 'Renu', 'http://localhost/curei.ac.ug/uploads/4654725145377.jpg'),
(6, 'Pacific', 'http://localhost/curei.ac.ug/uploads/3343587688823.jpg'),
(7, 'Medequip', 'http://localhost/curei.ac.ug/uploads/1546716887820.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `res_id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `project` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`res_id`, `img`, `project`, `description`) VALUES
(1, 'http://localhost/curei.ac.ug/uploads/2172126448485.jpg', 'Covid19', '444444444444444ggggggggggggggghhhhhhhhhhhhhhhhhhhhhh');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `sl_id` int(11) NOT NULL,
  `heading` varchar(250) NOT NULL,
  `statement` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sl_id`, `heading`, `statement`, `img`) VALUES
(1, 'Welcome o ECUREI', 'The leading Imaging Institute in Africa ', 'http://localhost/curei.ac.ug/uploads/4031854606902.jpg'),
(2, 'Admission is open for 2024 Academic year ', 'The leading Imaging Institute in Africa ', 'http://localhost/curei.ac.ug/uploads/1207598410713.jpg'),
(3, 'Healthy Education is the way to go', 'ECUEI the leading Imaging Institute in Africa ', 'http://localhost/curei.ac.ug/uploads/7684292064893.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bachelors`
--
ALTER TABLE `bachelors`
  ADD PRIMARY KEY (`bach_id`),
  ADD KEY `bach_id` (`bach_id`,`img`,`course_name`,`department`),
  ADD KEY `description` (`description`(768)),
  ADD KEY `durration` (`durration`),
  ADD KEY `requirments` (`requirments`(768));

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`bl_id`),
  ADD KEY `bl_id` (`bl_id`,`header`),
  ADD KEY `img` (`img`),
  ADD KEY `body` (`body`(768));

--
-- Indexes for table `boardmember`
--
ALTER TABLE `boardmember`
  ADD PRIMARY KEY (`bd_id`),
  ADD KEY `bd_id` (`bd_id`,`img`,`name`,`possition`);

--
-- Indexes for table `bridge`
--
ALTER TABLE `bridge`
  ADD PRIMARY KEY (`br_id`),
  ADD KEY `br_id` (`br_id`,`img`,`course_name`),
  ADD KEY `department` (`department`,`durration`),
  ADD KEY `description` (`description`),
  ADD KEY `requirments` (`requirments`(768));

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`cor_id`),
  ADD KEY `cor_id` (`cor_id`,`img`,`course_name`),
  ADD KEY `department` (`department`,`durration`),
  ADD KEY `description` (`description`(768)),
  ADD KEY `requirments` (`requirments`(768));

--
-- Indexes for table `diploma`
--
ALTER TABLE `diploma`
  ADD PRIMARY KEY (`dip_id`),
  ADD KEY `dip_id` (`dip_id`,`img`,`course_name`,`department`),
  ADD KEY `durration` (`durration`),
  ADD KEY `description` (`description`(768)),
  ADD KEY `requirments` (`requirments`(768));

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ev_id`),
  ADD KEY `ev_id` (`ev_id`,`evname`),
  ADD KEY `evdate` (`evdate`,`evtime`),
  ADD KEY `description` (`description`(768)),
  ADD KEY `img` (`img`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gal_id`),
  ADD KEY `gal_id` (`gal_id`,`img`),
  ADD KEY `event` (`event`),
  ADD KEY `breif` (`breif`(768));

--
-- Indexes for table `governance`
--
ALTER TABLE `governance`
  ADD PRIMARY KEY (`gv_id`),
  ADD KEY `gv_id` (`gv_id`,`img`,`name`,`possition`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `job_id` (`job_id`,`jname`,`detail`,`location`),
  ADD KEY `img` (`img`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`mg_id`),
  ADD KEY `mg_id` (`mg_id`,`img`,`name`,`possition`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`pt_id`),
  ADD KEY `pt_id` (`pt_id`,`header`,`img`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `res_id` (`res_id`,`img`),
  ADD KEY `project` (`project`(768)),
  ADD KEY `description` (`description`(768));

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sl_id`),
  ADD KEY `sl_id` (`sl_id`,`heading`,`statement`,`img`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bachelors`
--
ALTER TABLE `bachelors`
  MODIFY `bach_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `bl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `boardmember`
--
ALTER TABLE `boardmember`
  MODIFY `bd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bridge`
--
ALTER TABLE `bridge`
  MODIFY `br_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `cor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `diploma`
--
ALTER TABLE `diploma`
  MODIFY `dip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `governance`
--
ALTER TABLE `governance`
  MODIFY `gv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `mg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `pt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `sl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
