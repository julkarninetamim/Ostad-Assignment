-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 04:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ostad_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`) VALUES
(1, 'tecnology'),
(2, 'internation'),
(3, 'sport'),
(4, 'entertainment');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `cat` int(255) NOT NULL,
  `title` varchar(5000) NOT NULL,
  `body` varchar(5000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `author` varchar(1000) NOT NULL,
  `tag` varchar(1000) NOT NULL,
  `date` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `cat`, `title`, `body`, `image`, `author`, `tag`, `date`) VALUES
(1, 1, 'What is Lorem Ipsum?\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', 'images/img-training-guides.jpg', 'nazrul rafi', 'fashion,stylish,', '2023-04-04 13:35:39'),
(2, 2, 'Where can I get some?\r\n', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.\r\n\r\n', 'images/post-2.jpg', 'nazrul rafi', 'fashion,sport', '2023-04-04 14:35:39'),
(3, 3, 'Ut id aliquet risus. Aenean laoreet elit lorem', 'Phasellus aliquet, tortor nec viverra luctus, eros tellus faucibus dolor, ut cursus urna metus non lorem. Morbi a consequat lorem, sit amet egestas turpis. Nulla turpis mi, ultrices finibus neque eget, porttitor laoreet eros. Maecenas non turpis ex. Aenean finibus mollis ornare. In facilisis vel purus eget consequat. Donec condimentum erat at ultricies lobortis. Curabitur rhoncus pretium neque id gravida. Phasellus ac metus ac ex dictum blandit eu in orci. Suspendisse ac odio ac turpis ultrices consectetur. Nam ac dui mollis, sagittis odio sed, rhoncus odio. Donec in viverra diam. Donec sagittis, massa nec placerat sagittis, orci mi suscipit urna, sed porta felis quam ac mi. Vivamus vestibulum euismod odio. Ut id aliquet risus. Aenean laoreet elit lorem, ac vulputate quam tincidunt vel.\r\n\r\n', 'images/post-3.jpg', 'nazrul rafi', 'sport,Foreign', '2023-04-04 14:45:50'),
(4, 1, 'Nunc ut enim eget enim euismod vulputate', 'Nam aliquam eget elit at euismod. Proin sed dolor in mi tincidunt feugiat vel ac tortor. Duis porta arcu a tempor egestas. Proin at turpis tristique, sagittis enim sed, semper leo. Nullam eu ex consequat, finibus eros ut, pharetra lorem. Nunc nec odio ac nisi bibendum volutpat. Cras at turpis odio. Vestibulum lectus erat, congue a lectus convallis, sollicitudin efficitur leo. Vestibulum ac erat diam. Cras tristique rutrum est, vel semper dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc viverra erat in lectus eleifend rhoncus. Cras pulvinar sed tellus sit amet rhoncus. Integer vel purus nec odio ultrices blandit in in dui. Suspendisse in tellus mattis, molestie ipsum quis, eleifend libero.\r\n\r\nDuis eget efficitur velit. Nunc ut enim eget enim euismod vulputate. Vestibulum et sapien magna. Donec accumsan id felis eget feugiat. Ut maximus porta nisi ac lacinia. Curabitur ac justo eget libero placerat dignissim quis id velit. Proin id ligula sit amet turpis bibendum sagittis non fermentum augue. Fusce scelerisque gravida libero et pharetra. Sed cursus varius enim, dictum finibus mauris placerat at. Duis volutpat molestie lorem, id vestibulum neque. Ut a dolor mollis, gravida ante et, iaculis augue. Nam elementum sagittis augue, eget tempus purus laoreet quis. Integer iaculis neque erat, non dictum nunc gravida quis. Nulla mattis eget lectus nec viverra. Donec tincidunt orci lacus, eu lacinia enim pellentesque vitae. Vestibulum vel porttitor diam, in vulputate dolor.', 'images/img-training-guides.jpg', 'nazrul rafi', 'sport,Foreign', '2023-04-04 14:45:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
