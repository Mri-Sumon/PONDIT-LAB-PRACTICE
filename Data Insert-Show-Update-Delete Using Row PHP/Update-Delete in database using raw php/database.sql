-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 26, 2023 at 07:23 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Holly Stewart', 'Officia molestias ve', '2023-02-19 19:46:32', '2023-02-19 19:46:32'),
(2, 'Phoebe Macias', 'Repudiandae non cupi', '2023-02-19 19:46:40', '2023-02-19 19:46:40'),
(3, 'Lucy Willis', 'Aliqua Quo consequa', '2023-02-19 19:47:58', '2023-02-19 19:47:58'),
(4, 'Lucy Willis', 'Aliqua Quo consequa', '2023-02-19 20:00:48', '2023-02-19 20:00:48'),
(5, 'Bruno Perez', 'Porro sunt ut minim ', '2023-02-19 20:00:59', '2023-02-19 20:00:59'),
(6, 'Virginia Hendricks', 'Nemo nisi esse mini', '2023-02-19 20:42:24', '2023-02-19 20:42:24'),
(7, 'Carissa Quinn', 'Esse pariatur Null', '2023-02-19 20:48:14', '2023-02-19 20:48:14'),
(8, 'Sydnee Barnett', 'Quia dolor in labore', '2023-02-19 20:50:31', '2023-02-19 20:50:31'),
(9, 'Elaine Harding', 'Vitae et et ullam nu', '2023-02-19 20:54:27', '2023-02-19 20:54:27'),
(10, '', '', '2023-02-19 21:04:37', '2023-02-19 21:04:37'),
(11, '', '', '2023-02-19 21:04:45', '2023-02-19 21:04:45'),
(12, 'Bruce Butler', 'Ut aut quam autem su', '2023-02-19 21:10:02', '2023-02-19 21:10:02'),
(13, 'Malachi Osborn', 'Voluptate quia rerum', '2023-02-19 21:11:26', '2023-02-19 21:11:26'),
(14, '', '', '2023-02-19 21:11:48', '2023-02-19 21:11:48'),
(15, 'Stewart Chang', 'Quia nihil odit dele', '2023-02-19 21:12:05', '2023-02-19 21:12:05'),
(16, 'Kylee Pearson', 'Earum nulla cillum u', '2023-02-19 21:13:01', '2023-02-19 21:13:01'),
(17, 'Lyle Christian', 'Est pariatur Rerum', '2023-02-19 21:13:47', '2023-02-19 21:13:47'),
(18, 'Nadine Stevenson', 'Tempor aut ullamco f', '2023-02-19 21:14:38', '2023-02-19 21:14:38'),
(19, 'Plato Gonzales', 'Ex quas anim eveniet', '2023-02-19 21:15:01', '2023-02-19 21:15:01'),
(20, 'Remedios Mcneil', 'Consequuntur dolorum', '2023-02-19 21:15:28', '2023-02-19 21:15:28'),
(21, 'Indira Hawkins', 'Magna voluptatem Si', '2023-02-19 21:16:10', '2023-02-19 21:16:10'),
(22, 'Kirby Herman', 'Repellendus Aliquip', '2023-02-19 21:19:06', '2023-02-19 21:19:06'),
(23, 'Evangeline Mcdaniel', 'Officia distinctio ', '2023-02-19 21:19:37', '2023-02-19 21:19:37'),
(24, 'Evangeline Mcdaniel', 'Officia distinctio ', '2023-02-19 21:24:53', '2023-02-19 21:24:53'),
(25, 'Winifred Rodriguez', 'Maiores earum ab ali', '2023-02-19 21:27:28', '2023-02-19 21:27:28'),
(26, 'Yvonne Robertson', 'Animi nobis volupta', '2023-02-19 21:28:25', '2023-02-19 21:28:25'),
(27, 'Lara Patel', 'Tempore dolores imp', '2023-02-19 21:45:24', '2023-02-19 21:45:24'),
(28, 'Lara Patel', 'Tempore dolores imp', '2023-02-19 21:46:08', '2023-02-19 21:46:08'),
(29, 'Cecilia Odonnell', 'Iste officia earum d', '2023-02-19 21:48:05', '2023-02-19 21:48:05'),
(30, 'Isaiah Santos', 'Eligendi labore rati', '2023-02-19 21:50:03', '2023-02-19 21:50:03'),
(31, 'Madison Gillespie', 'Minim et nulla excep', '2023-02-19 22:12:29', '2023-02-19 22:12:29'),
(32, 'Vivian Lara', 'Laboris lorem optio', '2023-02-19 22:16:47', '2023-02-19 22:16:47'),
(33, 'Wayne Marshall', 'Facere non praesenti', '2023-02-19 23:28:55', '2023-02-19 23:28:55'),
(34, 'Jelani Langley', 'Itaque voluptatum ul', '2023-02-19 23:34:49', '2023-02-19 23:34:49'),
(35, 'Candice Townsend', 'Do impedit rerum au', '2023-02-19 23:56:15', '2023-02-19 23:56:15'),
(36, 'Curran Buckner', 'Earum quam cum commo', '2023-02-19 23:58:52', '2023-02-19 23:58:52'),
(37, 'TaShya Stuart', 'Dolor aliquam except', '2023-02-20 00:06:39', '2023-02-20 00:06:39'),
(38, '', '', '2023-02-20 00:49:37', '2023-02-20 00:49:37'),
(39, '', '', '2023-02-20 00:49:44', '2023-02-20 00:49:44'),
(40, 'Tamekah Kramer', 'Culpa pariatur Odi', '2023-02-20 00:49:46', '2023-02-20 00:49:46'),
(41, 'Tamekah Kramer', 'Culpa pariatur Odi', '2023-02-20 00:49:50', '2023-02-20 00:49:50'),
(42, 'Tamekah Kramer', 'Culpa pariatur Odi', '2023-02-20 00:51:38', '2023-02-20 00:51:38'),
(43, 'Alisa Michael', 'Tempora in dicta nob', '2023-02-20 00:51:41', '2023-02-20 00:51:41'),
(44, NULL, NULL, '2023-02-20 01:17:44', '2023-02-20 01:17:44'),
(45, 'Dylan Blankenship', 'Voluptate rerum labo', '2023-02-20 01:17:53', '2023-02-20 01:17:53'),
(46, 'Dylan Blankenship', 'Voluptate rerum labo', '2023-02-20 01:17:56', '2023-02-20 01:17:56'),
(47, 'Dylan Blankenship', 'Voluptate rerum labo', '2023-02-20 01:21:26', '2023-02-20 01:21:26'),
(48, 'Dylan Blankenship', 'Voluptate rerum labo', '2023-02-20 01:21:40', '2023-02-20 01:21:40'),
(49, NULL, NULL, '2023-02-20 01:21:55', '2023-02-20 01:21:55'),
(50, 'Kenneth Wilkins', 'Dolor deserunt velit', '2023-02-20 01:22:02', '2023-02-20 01:22:02'),
(51, NULL, NULL, '2023-02-20 01:22:27', '2023-02-20 01:22:27'),
(52, NULL, NULL, '2023-02-20 01:22:42', '2023-02-20 01:22:42'),
(53, NULL, NULL, '2023-02-20 01:22:45', '2023-02-20 01:22:45'),
(54, NULL, NULL, '2023-02-20 01:22:49', '2023-02-20 01:22:49'),
(55, NULL, NULL, '2023-02-20 01:22:55', '2023-02-20 01:22:55'),
(56, NULL, NULL, '2023-02-20 01:23:14', '2023-02-20 01:23:14'),
(57, NULL, NULL, '2023-02-20 01:23:16', '2023-02-20 01:23:16'),
(58, NULL, NULL, '2023-02-20 01:23:19', '2023-02-20 01:23:19'),
(59, NULL, NULL, '2023-02-20 01:29:11', '2023-02-20 01:29:11'),
(60, '', '', '2023-02-20 01:29:13', '2023-02-20 01:29:13'),
(61, 'Sopoline Fischer', 'Error sint numquam v', '2023-02-20 01:29:15', '2023-02-20 01:29:15'),
(62, 'Sopoline Fischer', 'Error sint numquam v', '2023-02-20 01:29:58', '2023-02-20 01:29:58'),
(63, 'Amity Colon', 'Qui excepteur dolore', '2023-02-20 01:30:04', '2023-02-20 01:30:04'),
(64, 'Amity Colon', 'Qui excepteur dolore', '2023-02-20 01:30:09', '2023-02-20 01:30:09'),
(65, 'Amity Colon', 'Qui excepteur dolore', '2023-02-20 01:31:13', '2023-02-20 01:31:13'),
(66, NULL, NULL, '2023-02-20 01:31:16', '2023-02-20 01:31:16'),
(67, NULL, NULL, '2023-02-20 01:35:13', '2023-02-20 01:35:13'),
(68, 'Justine Estes', 'Nihil in aliquam lab', '2023-02-20 01:35:18', '2023-02-20 01:35:18'),
(69, 'Justine Estes', 'Nihil in aliquam lab', '2023-02-20 01:45:31', '2023-02-20 01:45:31'),
(70, 'Justine Estes', 'Nihil in aliquam lab', '2023-02-20 01:47:56', '2023-02-20 01:47:56'),
(71, 'Hope Knox', 'Tenetur nulla est n', '2023-02-20 01:48:00', '2023-02-20 01:48:00'),
(72, 'Hope Knox', 'Tenetur nulla est n', '2023-02-20 01:48:23', '2023-02-20 01:48:23'),
(73, 'Hope Knox', 'Tenetur nulla est n', '2023-02-20 01:53:37', '2023-02-20 01:53:37'),
(74, 'Hope Knox', 'Tenetur nulla est n', '2023-02-20 01:54:09', '2023-02-20 01:54:09'),
(75, 'Hope Knox', 'Tenetur nulla est n', '2023-02-20 01:54:36', '2023-02-20 01:54:36'),
(76, 'Hope Knox', 'Tenetur nulla est n', '2023-02-20 01:55:14', '2023-02-20 01:55:14'),
(77, NULL, NULL, '2023-02-20 01:55:17', '2023-02-20 01:55:17'),
(78, NULL, NULL, '2023-02-20 01:55:23', '2023-02-20 01:55:23'),
(79, NULL, NULL, '2023-02-20 01:55:30', '2023-02-20 01:55:30'),
(80, NULL, NULL, '2023-02-20 01:58:15', '2023-02-20 01:58:15'),
(81, 'Felicia Jacobs', 'Adipisci necessitati', '2023-02-20 01:58:20', '2023-02-20 01:58:20'),
(82, 'Felicia Jacobs', 'Adipisci necessitati', '2023-02-20 01:58:26', '2023-02-20 01:58:26'),
(83, NULL, NULL, '2023-02-20 01:59:19', '2023-02-20 01:59:19'),
(84, NULL, NULL, '2023-02-20 01:59:52', '2023-02-20 01:59:52'),
(85, 'Cole Carver', 'Qui odio sunt sunt ', '2023-02-20 01:59:56', '2023-02-20 01:59:56'),
(86, NULL, NULL, '2023-02-20 02:00:06', '2023-02-20 02:00:06'),
(87, NULL, NULL, '2023-02-20 02:02:28', '2023-02-20 02:02:28'),
(88, NULL, NULL, '2023-02-20 02:02:46', '2023-02-20 02:02:46'),
(89, NULL, NULL, '2023-02-20 02:03:30', '2023-02-20 02:03:30'),
(90, NULL, NULL, '2023-02-20 02:03:35', '2023-02-20 02:03:35'),
(92, 'Medge Pena', 'Ut nobis sunt ut lab', '2023-02-20 02:03:45', '2023-02-20 02:03:45'),
(93, 'Medge Pena', 'Ut nobis sunt ut lab', '2023-02-20 02:04:37', '2023-02-20 02:04:37'),
(94, 'Medge Pena', 'Ut nobis sunt ut lab', '2023-02-20 11:11:44', '2023-02-20 11:11:44'),
(98, 'Britanni Howell', 'Rerum totam officiis', '2023-02-20 13:58:53', '2023-02-20 13:58:53'),
(101, 'Sophia Salazar', 'Laboris ab exercitat', '2023-02-20 13:59:10', '2023-02-20 13:59:10'),
(102, NULL, NULL, '2023-02-20 14:00:16', '2023-02-20 14:00:16'),
(120, 'Hilary Walker', 'Laborum Est cupidit', '2023-02-20 14:56:26', '2023-02-20 14:56:26'),
(121, 'Jael Gates', 'Aliquip quos quaerat', '2023-02-20 15:01:37', '2023-02-20 15:01:37'),
(122, 'Nicholas Burton', 'Sunt dolores officia', '2023-02-20 15:03:16', '2023-02-20 15:03:16'),
(123, 'Herrod Hutchinson', 'Itaque consequuntur ', '2023-02-20 15:27:18', '2023-02-20 15:27:18'),
(124, 'Howard Cruz', 'Sit tempore laborio', '2023-02-20 15:27:26', '2023-02-20 15:27:26'),
(125, 'Nelle Conley', 'Voluptate facere est', '2023-02-20 15:36:08', '2023-02-20 15:36:08'),
(126, 'Louis Macdonald', 'Veniam iusto quo oc', '2023-02-20 15:36:50', '2023-02-20 15:36:50'),
(127, 'Kathleen Hanson', 'In nulla corrupti m', '2023-02-20 15:37:42', '2023-02-20 15:37:42'),
(128, 'Kendall Carey', 'Explicabo Et amet ', '2023-02-20 15:37:45', '2023-02-20 15:37:45'),
(129, 'Merrill Sheppard', 'Odio corrupti et sa', '2023-02-20 15:38:10', '2023-02-20 15:38:10'),
(130, 'Blair Haynes', 'Et et nemo quia cumq', '2023-02-20 15:39:33', '2023-02-20 15:39:33'),
(131, 'Ria Slater', 'Voluptas quo dolore ', '2023-02-20 15:39:45', '2023-02-20 15:39:45'),
(132, 'Katelyn Jackson', 'Omnis et aliqua Per', '2023-02-20 15:41:09', '2023-02-20 15:41:09'),
(133, 'Ainsley Rojas', 'Sapiente voluptatum ', '2023-02-20 15:45:42', '2023-02-20 15:45:42'),
(134, 'Vanna Elliott', 'Perspiciatis earum ', '2023-02-20 15:49:07', '2023-02-20 15:49:07'),
(135, 'Daphne Clayton', 'Dolore qui qui ut au', '2023-02-20 15:51:10', '2023-02-20 15:51:10'),
(136, 'Aiko Butler', 'Corrupti tempor rer', '2023-02-20 15:55:28', '2023-02-20 15:55:28'),
(137, 'Sawyer Nieves', 'Necessitatibus omnis', '2023-02-20 15:57:43', '2023-02-20 15:57:43'),
(138, 'Mariko Wagner', 'Vero id et et dolor ', '2023-02-20 15:58:41', '2023-02-20 15:58:41'),
(139, 'Zenaida Mcdaniel', 'Mollitia sunt quia m', '2023-02-20 15:59:27', '2023-02-20 15:59:27'),
(140, 'Lewis Myers', 'Ea odio provident a', '2023-02-20 16:01:30', '2023-02-20 16:01:30'),
(141, 'Hilda Parsons', 'Et temporibus veniam', '2023-02-20 16:03:35', '2023-02-20 16:03:35'),
(142, 'Melyssa Carson', 'Qui odio ipsum repre', '2023-02-20 16:03:57', '2023-02-20 16:03:57'),
(143, 'Nehru Hobbs', 'Exercitationem nostr', '2023-02-20 16:04:11', '2023-02-20 16:04:11'),
(144, 'Jesse Buckley', 'Sunt sint aliquid ', '2023-02-20 17:15:25', '2023-02-20 17:15:25'),
(145, 'Clementine Cotton', 'Omnis est aut sequi', '2023-02-20 17:31:53', '2023-02-20 17:31:53'),
(146, 'Emmanuel Albert', 'Amet similique veli', '2023-02-20 20:34:54', '2023-02-20 20:34:54'),
(147, 'Dean Norris', 'A ad explicabo Numq', '2023-02-20 21:08:10', '2023-02-20 21:08:10'),
(148, 'Dean Norris', 'A ad explicabo Numq', '2023-02-20 21:28:06', '2023-02-20 21:28:06'),
(149, 'Dean Norris', 'A ad explicabo Numq', '2023-02-20 21:28:59', '2023-02-20 21:28:59'),
(150, 'Dean Norris', 'A ad explicabo Numq', '2023-02-20 21:32:15', '2023-02-20 21:32:15'),
(151, 'Md. Rafiqul Islam Sumon', 'A ad explicabo Numq', '2023-02-20 21:33:32', '2023-02-20 21:33:32'),
(152, 'Dean Norris', 'A ad explicabo Numq', '2023-02-20 21:33:54', '2023-02-20 21:33:54'),
(153, 'Dean Norris', 'A ad explicabo Numq', '2023-02-20 21:34:40', '2023-02-20 21:34:40'),
(154, 'Md. Rafiqul Islam Sumon', 'A ad explicabo Numq', '2023-02-20 21:35:26', '2023-02-20 21:35:26'),
(155, 'Md. Rafiqul Islam Sumon', 'Web Developer', '2023-02-20 21:36:49', '2023-02-20 21:36:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
