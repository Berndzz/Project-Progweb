-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 05:32 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujian`
--

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(11) NOT NULL,
  `label` varchar(25) NOT NULL,
  `title` varchar(25) NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL,
  `brief` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `label`, `title`, `start`, `end`, `brief`) VALUES
(1, 'Top 10 Web Developer', 'Cambridge University', 2014, 2015, 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.'),
(2, 'Top 5 LeaderShip Exellenc', 'Cambridge University', 2014, 2016, 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.'),
(3, 'Top 4 Web Tester', 'Cambridge University', 2015, 2016, 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.'),
(4, 'Art & Creative Director', 'Cambridge University', 2016, 0, 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `About Me` text NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `project_complate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `About Me`, `Name`, `Date_of_birth`, `address`, `zip_code`, `email`, `phone`, `project_complate`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum delectus tempore perferendis asperiores eaque officia veniam placeat numquam laborum. Odio, repellat nulla. Quibusdam facilis modi quaerat quam impedit! Ad, dolorum..</p>', 'Edon', '2020-06-10', 'Jalan Panglima Batur ', 73711, 'columbanus.dian@ti.ukdw.ac.id', 856741324, 220),
(2, ' <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>', 'Rinto', '2019-12-17', 'Jln.Sorogenen', 55281, 'yohanes.tennary@ti.udkw.ac.id', 832123242, 200),
(3, ' <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>', 'Hardus', '2020-06-01', 'Jln.Dr Wahidin Sudirohusodo', 55223, 'bernardus.maria@ti.ukdw.ac.id', 832154565, 210);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `label` varchar(50) NOT NULL,
  `month` varchar(20) NOT NULL,
  `date` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `image` varchar(20) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `label`, `month`, `date`, `year`, `name`, `image`, `content`) VALUES
(1, 'Welcome Back Gais', 'Jan', 12, 2020, 'Rinto', '1.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum laborum fugit praesentium alias dicta quaerat obcaecati fuga, voluptas minus in dolores debitis aut consequuntur cumque totam omnis modi corrupti ratione.'),
(2, 'A Team !!!', 'Feb', 27, 2020, 'Hardus', '2.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum laborum fugit praesentium alias dicta quaerat obcaecati fuga, voluptas minus in dolores debitis aut consequuntur cumque totam omnis modi corrupti ratione.'),
(3, 'Why Lead Generation is Key for Business Growth', 'Nov', 15, 2019, 'Edon', '3.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum laborum fugit praesentium alias dicta quaerat obcaecati fuga, voluptas minus in dolores debitis aut consequuntur cumque totam omnis modi corrupti ratione.');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email_address`, `subject`, `message`) VALUES
(10, 'ab', 'tukanbernad@gmail.com', 'asada', 'asda'),
(11, 'ab', 'tukanbernad@gmail.com', 'asada', 'asda'),
(12, 'ab', 'tukanbernad@gmail.com', 'asada', 'asda');

-- --------------------------------------------------------

--
-- Table structure for table `contact_me`
--

CREATE TABLE `contact_me` (
  `id` int(11) NOT NULL,
  `label` varchar(25) NOT NULL,
  `icon` varchar(20) NOT NULL,
  `link` varchar(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_me`
--

INSERT INTO `contact_me` (`id`, `label`, `icon`, `link`, `content`) VALUES
(1, 'Address', 'icon-map-signs', '#', '198 West 21th Street, Suite 721 New York NY 10016'),
(2, 'Contact Number', 'icon-phone2', 'tel://1234567920', '+ 1235 2355 98'),
(3, 'Email Address', 'icon-paper-plane', 'mailto:info@yoursite.com', 'info@yoursite.com'),
(4, 'Website', 'icon-globe', '#', 'yoursite.com');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL,
  `school` varchar(20) NOT NULL,
  `edu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `title`, `start`, `end`, `school`, `edu`) VALUES
(1, 'Multimedia', 2016, 2018, 'BOPKRI 1 Vocational ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dapibus ultrices in iaculis nunc sed augue lacus. Quam nulla porttitor massa id neque aliquam. Ultrices mi tempus imperdiet nulla malesuada. Eros in cursus turpis massa tincidunt dui ut ornare lectus. Egestas sed sed risus pretium. Lorem dolor sed viverra ipsum.'),
(2, 'Informatic', 2018, 0, 'Duta Wacana Christia', 'Informatics applies the principles of information science to solve problems using data. It involves the practice of information processing and the engineering of information systems. The field considers the interaction between humans and information alongside the construction of interfaces, organisations, technologies and systems. As such, informatics encompasses many academic disciplines, including computer science, information systems, information technology and statistics. Since the advent of computers, individuals and organizations increasingly process information digitally. This has led to the study of informatics with computational, mathematical, biological, cognitive and social aspects, including study of the social impact of information technologies.'),
(3, 'Computer Processing Systems/Computer Software', 2014, 2015, 'Cambridge University', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dapibus ultrices in iaculis nunc sed augue lacus. Quam nulla porttitor massa id neque aliquam. Ultrices mi tempus imperdiet nulla malesuada. Eros in cursus turpis massa tincidunt dui ut ornare lectus. Egestas sed sed risus pretium. Lorem dolor sed viverra ipsum. Gravida rutrum quisque non tellus. Rutrum tellus pellentesque eu tincidunt tortor. Sed blandit libero volutpat sed cras ornare.'),
(4, 'Diploma in Computer', 2014, 2015, 'Cambridge University', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `label` varchar(25) NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL,
  `content` text NOT NULL,
  `school` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `label`, `start`, `end`, `content`, `school`) VALUES
(1, 'Software Developer', 2014, 2015, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum laborum fugit praesentium alias dicta quaerat obcaecati fuga, voluptas minus in dolores debitis aut consequuntur cumque totam omnis modi corrupti ratione.', 'Duta Wacana'),
(2, 'Web Designer', 2015, 2017, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum laborum fugit praesentium alias dicta quaerat obcaecati fuga, voluptas minus in dolores debitis aut consequuntur cumque totam omnis modi corrupti ratione.', 'Duta Wacana'),
(3, 'Web Marketing', 2016, 2018, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum laborum fugit praesentium alias dicta quaerat obcaecati fuga, voluptas minus in dolores debitis aut consequuntur cumque totam omnis modi corrupti ratione.', 'Duta Wacana');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `label` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `space` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `label`, `date`, `space`) VALUES
(1, 'microsoft', '2020-06-13', 1),
(2, 'android', '2020-06-13', 1),
(3, 'java', '2020-06-13', 1),
(4, 'google', '2020-06-13', 1),
(5, 'php', '2020-06-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_project`
--

CREATE TABLE `gallery_project` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `sub_title` varchar(25) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_project`
--

INSERT INTO `gallery_project` (`id`, `title`, `sub_title`, `image`) VALUES
(1, 'Branding & Illustration Design', 'Web Design', '1.jpg'),
(2, 'Creative Contents Crew', 'Photography', '2.jpg'),
(3, 'Director of Photograpy', 'Videography', '3.jpg'),
(4, 'Java Coding Team', 'Java', '4.jpg'),
(5, 'C++ Coding Team', 'C++', '5.jpg'),
(6, 'Video Cinematic', 'Cinematic', '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `main_skills`
--

CREATE TABLE `main_skills` (
  `id` int(11) NOT NULL,
  `label` varchar(25) NOT NULL,
  `percentage` int(11) NOT NULL,
  `last_week` int(11) NOT NULL,
  `last_mounth` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_skills`
--

INSERT INTO `main_skills` (`id`, `label`, `percentage`, `last_week`, `last_mounth`) VALUES
(1, 'CSS', 90, 28, 29),
(2, 'HTML', 95, 28, 20),
(3, 'JAVA', 80, 30, 28);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icon` varchar(25) NOT NULL,
  `label` varchar(25) NOT NULL,
  `brief` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `label`, `brief`) VALUES
(1, 'flaticon-analysis', 'Web Design', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.'),
(2, 'flaticon-flasks', 'Phtography', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.'),
(3, 'flaticon-ideas', 'Web Developer', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.'),
(4, 'flaticon-innovation', 'App Developing', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.'),
(5, 'flaticon-ux-design', 'Branding', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.'),
(6, 'flaticon-idea', 'Product Strategy', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `label` varchar(25) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `label`, `percentage`) VALUES
(1, 'PhotoShop', 75),
(2, 'PHP', 85),
(3, 'HTML5', 90),
(4, 'CSS3', 85),
(5, 'WordPress', 75),
(6, 'JavaScript', 90);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `icon` varchar(25) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `icon`, `link`) VALUES
(1, 'icon-twitter', 'https://twitter.com'),
(2, 'icon-facebook', 'https://www.instagram.com/'),
(3, 'icon-instagram', 'https://www.facebook.com/');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `label` varchar(20) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`id`, `label`, `total`) VALUES
(1, 'Awards', 250),
(2, 'Complete Projects', 1500),
(3, 'Happy Customers', 1200),
(4, 'Cups of coffee', 500);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access_group` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_me`
--
ALTER TABLE `contact_me`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_project`
--
ALTER TABLE `gallery_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_skills`
--
ALTER TABLE `main_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact_me`
--
ALTER TABLE `contact_me`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery_project`
--
ALTER TABLE `gallery_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `main_skills`
--
ALTER TABLE `main_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
