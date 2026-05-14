-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2026 at 07:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movies`
--

CREATE TABLE `tbl_movies` (
  `movie_id` int(5) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `quality` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `duration` int(3) NOT NULL,
  `image` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL,
  `rating` varchar(15) NOT NULL,
  `cat_id` int(2) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_movies`
--

INSERT INTO `tbl_movies` (`movie_id`, `title`, `description`, `quality`, `date`, `duration`, `image`, `url`, `rating`, `cat_id`, `created`) VALUES
(8, 'Theatre Dead', 'Theatre-Dead', '', '2025-08-23', 125, 'theatre-dead.jpg', 'https://www.youtube.com/watch?v=l7rUbFnEwd8', '7.5', 1, '2025-08-17 09:24:26'),
(9, 'Blood Shot', 'Blood_Shot', '', '2025-08-17', 125, 'blood-shot.jpg', '', '7.5', 1, '2025-08-17 09:25:44'),
(10, 'Bat Man', 'Bat Man', '', '2025-08-17', 125, 'bat-man.jpg', 'https://www.youtube.com/watch?v=mqqft2x_Aa4', '8.8', 3, '2025-08-17 09:26:49'),
(11, 'Coco', 'Coco', '', '2025-08-17', 125, 'coco.jpg', 'https://www.youtube.com/watch?v=xlnPHQ3TLX8', '8.8', 1, '2025-08-17 09:28:18'),
(12, 'Mandalorian', 'Mandalorian', '', '2025-08-17', 125, 'mandalorian.jpg', 'https://www.youtube.com/watch?v=aOC8E8z_ifw', '8.9', 2, '2025-08-17 09:29:29'),
(13, 'Love Roise', 'Love Roise', '', '2025-08-17', 125, 'love-roise.jpg', 'https://www.youtube.com/watch?v=5zL3YJKygd4', '8.9', 3, '2025-08-17 10:07:11'),
(14, 'Hunter Killer', 'Hunter Killer', 'HD 16+', '2025-08-17', 125, 'hunter-killer.jpg', 'https://www.youtube.com/watch?v=mnP_z3qXDCQ', '9.9', 3, '2025-08-17 11:13:08'),
(15, 'Transformer', 'Transformer', 'HD 16+', '2025-08-17', 125, 'transformer.jpg', 'https://www.youtube.com/watch?v=CPkAm0troww', '9.9', 3, '2025-08-17 11:14:13'),
(17, 'Avenger', 'Avenger', 'HD 16+', '2025-08-17', 125, 'end-game.jpg', 'https://www.youtube.com/watch?v=TcMBFSGVi1c', '9.9', 3, '2025-08-17 11:16:01'),
(18, 'Croods', 'croods', 'HD 16+', '2025-08-21', 125, 'croods.jpg', 'https://www.youtube.com/watch?v=4fVCKy69zUY', '7.5', 1, '2025-08-21 11:17:23'),
(19, 'Demon-Slayer', 'demon-slayer', 'HD 16+', '2025-08-21', 125, 'demon-slayer.jpg', 'https://www.youtube.com/watch?v=x7uLutVRBfI', '9.9', 1, '2025-08-21 11:18:12'),
(20, 'Dragon Ball', 'Dragon Ball', 'HD 16+', '2025-08-21', 125, 'dragon.jpg', 'https://www.youtube.com/watch?v=FHgm89hKpXU', '8.8', 1, '2025-08-21 11:19:13'),
(21, 'Your-Name', 'your-name', 'HD 16+', '2025-08-21', 125, 'your-name.jpg', 'https://www.youtube.com/watch?v=xU47nhruN-Q', '8.8', 1, '2025-08-21 11:20:58'),
(22, 'Over-the-Moon', 'over-the-moon', 'HD 16+', '2025-08-21', 125, 'over-the-moon.jpg', 'https://www.youtube.com/watch?v=26DIABx44Tw', '8.8', 1, '2025-08-21 11:22:56'),
(23, 'Weathering', 'weathering', 'HD 16+', '2025-08-21', 125, 'weathering.jpg', 'https://www.youtube.com/watch?v=Q6iK6DjV_iE', '8.9', 1, '2025-08-21 11:24:40'),
(24, 'Penthouses', 'penthouses', 'HD 16+', '2025-09-30', 125, 'penthouses.jpg', 'https://www.youtube.com/watch?v=NgD7nVVHAaQ', '7.5', 2, '2025-09-30 11:06:13'),
(25, 'Star-Trek', 'star-trek', 'HD 16+', '2025-09-30', 125, 'star-trek.jpg', 'https://www.youtube.com/watch?v=pKFUZ10Wmbw', '7.5', 2, '2025-09-30 11:07:37'),
(26, 'Stranger Thing', 'stranger-thing', 'HD 16+', '2025-09-30', 125, 'stranger-thing.jpg', 'https://www.youtube.com/watch?v=b9EkMc79ZSU', '8.8', 2, '2025-09-30 11:08:48'),
(27, 'Super Girl', 'supergirl', 'HD 16+', '2025-10-01', 130, 'supergirl.jpg', 'https://www.youtube.com/watch?v=O1Do0ZaIZGI', '8.8', 2, '2025-09-30 11:15:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movietypes`
--

CREATE TABLE `tbl_movietypes` (
  `type_id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_movietypes`
--

INSERT INTO `tbl_movietypes` (`type_id`, `name`) VALUES
(1, 'CARTOON'),
(2, 'SERIES'),
(3, 'MOVIE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slide`
--

CREATE TABLE `tbl_slide` (
  `id` int(2) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `duration` int(3) NOT NULL,
  `rating` varchar(15) NOT NULL,
  `quality` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_slide`
--

INSERT INTO `tbl_slide` (`id`, `title`, `description`, `duration`, `rating`, `quality`, `image`) VALUES
(7, 'John Wick', 'John Wick', 125, '9.9', 'HD 16+', 'John wick.jpg'),
(8, 'GOTG Vol 3', 'GOTG Vol 3', 125, '9.9', 'HD 16+', 'GATG vol3.jpeg'),
(10, 'Black Panter', 'Black Panter', 125, '9.9', 'HD 16+', 'black-banner.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(2) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'Test', 'tun', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `tbl_movietypes`
--
ALTER TABLE `tbl_movietypes`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  MODIFY `movie_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_movietypes`
--
ALTER TABLE `tbl_movietypes`
  MODIFY `type_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
