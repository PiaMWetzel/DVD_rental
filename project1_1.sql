-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2020 at 12:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `m_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `movie_title` varchar(255) NOT NULL,
  `movie_thumb` varchar(255) NOT NULL,
  `description` varchar(4096) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_title`, `movie_thumb`, `description`) VALUES
(1, 'The Dark Knight', 'https://m.media-amazon.com/images/I/91zBlQ1iqoL._AC_UY327_FMwebp_QL65_.jpg', 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.'),
(3, 'Dr. Dolittle', 'https://m.media-amazon.com/images/I/81O6NhiG28L._AC_UY327_QL65_ML3_.jpg', 'A doctor discovers that he can communicate with animals.'),
(4, 'Dr. Dolittle 2', 'https://m.media-amazon.com/images/I/51C5quOVxAL._AC_UY327_QL65_ML3_.jpg', 'Dolittle must save a forest and a bear\'s life.'),
(5, '2012', 'https://m.media-amazon.com/images/I/91eCNA6J4IL._AC_UY327_QL65_ML3_.jpg', 'A frustrated writer struggles to keep his family alive when a series of global catastrophes threatens to annihilate mankind.'),
(2, 'The Avengers', 'https://m.media-amazon.com/images/I/61SvC7lyKgL._AC_UY327_QL65_ML3_.jpg', 'Earth\'s mightiest heroes must come together and learn to fight as a team if they are going to stop the mischievous Loki and his alien army from enslaving humanity.'),
(6, 'I, Tonya', 'https://m.media-amazon.com/images/I/91GqGjOKu-L._AC_UY327_FMwebp_QL65_.jpg', 'Competitive ice skater Tonya Harding rises amongst the ranks at the U.S. Figure Skating Championships, but her future in the activity is thrown into doubt when her ex-husband intervenes.'),
(7, 'Knives out', 'https://m.media-amazon.com/images/I/91LGobciylL._AC_UY327_FMwebp_QL65_.jpg', 'A detective investigates the death of a patriarch of an eccentric, combative family.'),
(8, 'Hell or High Water', 'https://m.media-amazon.com/images/I/91hCeEKUhXL._AC_UY327_FMwebp_QL65_.jpg', 'A divorced father and his ex-con older brother resort to a desperate scheme in order to save their family\'s ranch in West Texas.'),
(9, 'The Secret Life of Pets', 'https://m.media-amazon.com/images/I/81MeHrRG8XL._AC_UY327_FMwebp_QL65_.jpg', 'The quiet life of a terrier named Max is upended when his owner takes in Duke, a stray whom Max instantly dislikes.'),
(10, 'The Chorus', 'https://m.media-amazon.com/images/I/81Ao5mGq2wL._AC_UY327_FMwebp_QL65_.jpg', 'The new teacher at a severely administered boys\' boarding school works to positively affect the students\' lives through music.'),
(11, 'The Silence of the Lambs', 'https://m.media-amazon.com/images/I/81aGIc9Bh-L._AC_UY327_FMwebp_QL65_.jpg', 'A young F.B.I. cadet must receive the help of an incarcerated and manipulative cannibal killer to help catch another serial killer, a madman who skins his victims.');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `rental_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `rental_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`rental_id`, `m_id`, `u_id`, `rental_date`) VALUES
(16, 3, 1, '2020-03-23 23:20:04'),
(15, 4, 1, '2020-03-23 23:15:35'),
(14, 3, 1, '2020-03-23 22:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `rating` tinyint(4) NOT NULL,
  `comment` varchar(1024) NOT NULL,
  `u_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `m_id`, `rating`, `comment`, `u_id`) VALUES
(1, 1, 5, 'Christopher Nolan\'s second bundle of joy \"The Dark Knight\" EXCEEDED all of my expectations!!!', 1),
(2, 3, 4, 'A classic', 1),
(32, 7, 1, 'It\'s incredibly boring', 26),
(30, 7, 3, 'I have seen better', 24),
(29, 4, 4, 'I liked it!', 22),
(28, 3, 3, 'Decent entertainment', 22),
(27, 1, 5, 'Best movie ever!', 22),
(26, 7, 4, 'Solid movie - would watch again!', 22);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`) VALUES
(1, 'test', 'test'),
(26, 'Simon', 'Password'),
(24, 'Jim', '123'),
(23, 'Jim13', '123'),
(22, 'Pia', 'Password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`rental_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `rental_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
