-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2024 at 07:18 AM
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
-- Database: `projects_collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `project_link` varchar(255) NOT NULL,
  `github_link` varchar(255) NOT NULL,
  `work_details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `image`, `description`, `project_link`, `github_link`, `work_details`) VALUES
(1, 'Technical Resume', 'img/technical-resume.png', 'This is my technical resume of the skills I have learned and feel confident with to display in a work field', '', 'https://github.com/Baballapa', 'This is my most recent resume, displaying all the talents and skills that I have developed over my time  at Clark College.'),
(2, 'Pest Control History', 'img/pest-control-image.png', 'This is an about page for the company and the history behind them. Showing how important their heritage is to them', '', 'https://github.com/Baballapa/pest-control-history', 'Use of HTML and CSS to make a simple layout fro their display of history and love for who they are as a company'),
(3, 'Personal Blog', 'img/blog-project.png', 'A blog to display most of my thoughts both random and important but mainly random. I hope you find some humor while checking them out.', '', 'https://github.com/Baballapa/personal-blog', 'Input into the database to create new posts and edit already existing ones'),
(4, 'Vanguard Remodeling', 'img/vanguard-demo.png', 'The simple base for a site that will display van remodeling jobs for a small start-up client', '', 'https://github.com/Baballapa/vanguard-remodeling', 'Simple layout that have preset image areas and plenty of work room for the addition of pages and animations'),
(6, 'Login Page', 'img/user-auth-login.png', 'A login page is used for the user to store information in the database. There is also a register page for new users. has error handling for both pages if the user inputs the wrong information.', '', 'https://github.com/Baballapa/login-page', 'The pages have error handling for both pages if the user inputs the wrong information. There is also logic in inputting a security word for users to rest their passwords.');

-- --------------------------------------------------------

--
-- Table structure for table `project_technologies`
--

CREATE TABLE `project_technologies` (
  `project_id` int(11) NOT NULL,
  `technology_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_technologies`
--

INSERT INTO `project_technologies` (`project_id`, `technology_id`) VALUES
(2, 1),
(2, 2),
(2, 10),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 8),
(3, 10),
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 5),
(4, 8),
(4, 10),
(6, 1),
(6, 2),
(6, 4),
(6, 5),
(6, 8),
(6, 10);

-- --------------------------------------------------------

--
-- Table structure for table `technologies`
--

CREATE TABLE `technologies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `technologies`
--

INSERT INTO `technologies` (`id`, `name`) VALUES
(1, 'HTML'),
(2, 'CSS'),
(3, 'JavaScript'),
(4, 'Bootstrap'),
(5, 'PHP'),
(6, 'C#'),
(7, 'Python'),
(8, 'SQL'),
(9, 'WordPress'),
(10, 'Visual Studio Code'),
(11, 'Visual Studio 2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_technologies`
--
ALTER TABLE `project_technologies`
  ADD PRIMARY KEY (`project_id`,`technology_id`),
  ADD KEY `technology_id` (`technology_id`);

--
-- Indexes for table `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `technologies`
--
ALTER TABLE `technologies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project_technologies`
--
ALTER TABLE `project_technologies`
  ADD CONSTRAINT `project_technologies_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `project_technologies_ibfk_2` FOREIGN KEY (`technology_id`) REFERENCES `technologies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
