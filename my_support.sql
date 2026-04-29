-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Oct 16, 2025 at 04:45 AM
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
-- Database: `my_support`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_list`
--

CREATE TABLE `category_list` (
  `id` int NOT NULL,
  `title` varchar(250) NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category_list`
--

INSERT INTO `category_list` (`id`, `title`, `status`, `created_at`) VALUES
(2, 'Basic Usage', 0, '2025-10-02 15:58:47'),
(3, 'Troubleshooting & Solutions', 0, '2025-10-02 15:59:01'),
(4, 'Technical Support', 1, '2025-10-02 15:59:22'),
(5, 'Account Management', 1, '2025-10-02 15:59:35'),
(7, 'Ticket Management', 1, '2025-10-02 15:59:46'),
(8, 'Customization & Branding', 1, '2025-10-02 15:59:57'),
(9, 'Installation', 1, '2025-10-02 16:00:11'),
(10, 'Site Installation', 1, '2025-10-02 16:00:23');

-- --------------------------------------------------------

--
-- Table structure for table `chat_list`
--

CREATE TABLE `chat_list` (
  `id` int NOT NULL,
  `ticket_id` varchar(255) NOT NULL,
  `send_id` int NOT NULL,
  `receive_id` int NOT NULL,
  `message` longtext NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'unseen',
  `role` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chat_list`
--

INSERT INTO `chat_list` (`id`, `ticket_id`, `send_id`, `receive_id`, `message`, `status`, `role`, `created_at`) VALUES
(1, '68df21ecbe711', 5, 1, 'dfg', 'seen', 'admin', '2025-10-12 17:36:39'),
(2, '68df21ecbe711', 5, 1, 'f', 'seen', 'admin', '2025-10-12 17:37:36'),
(3, '68df21ecbe711', 5, 1, 'dfg', 'seen', 'admin', '2025-10-12 17:39:47'),
(4, '68df21ecbe711', 5, 1, 'hk', 'seen', 'admin', '2025-10-12 18:09:07'),
(5, '68df21ecbe711', 5, 1, 'hj', 'seen', 'admin', '2025-10-12 18:09:44'),
(6, '68df21ecbe711', 5, 1, 'sdf', 'seen', 'admin', '2025-10-12 18:13:47'),
(7, '68df21ecbe711', 1, 5, 'How can i help you..?', 'seen', 'user', '2025-10-12 18:15:52'),
(8, '68df21ecbe711', 5, 1, 'gh', 'seen', 'admin', '2025-10-12 18:16:58'),
(9, '68df21ecbe711', 5, 1, 'sdfdf', 'seen', 'admin', '2025-10-12 18:17:39'),
(10, '68df21ecbe711', 5, 1, 'sdfds', 'seen', 'admin', '2025-10-12 18:26:09'),
(11, '68df21ecbe711', 5, 1, 'sdf', 'seen', 'admin', '2025-10-12 18:29:14'),
(12, '68df21ecbe711', 5, 1, 'dg', 'seen', 'admin', '2025-10-12 18:31:20'),
(13, '68df21ecbe711', 5, 1, 'fd', 'seen', 'admin', '2025-10-12 18:35:58'),
(14, '68df21ecbe711', 5, 1, 'fg', 'seen', 'admin', '2025-10-13 06:06:59'),
(15, '68df21ecbe711', 5, 1, 'df', 'seen', 'admin', '2025-10-13 09:59:35'),
(16, '68df21ecbe711', 5, 1, 'rtet', 'seen', 'admin', '2025-10-13 10:17:02'),
(17, '68df295991667', 5, 4, 'sddsf', 'unseen', 'admin', '2025-10-13 10:27:00'),
(18, '68df21ecbe711', 5, 1, 'hi', 'seen', 'admin', '2025-10-13 10:45:30'),
(19, '68df21ecbe711', 1, 5, 'fd', 'seen', 'user', '2025-10-13 11:14:54'),
(20, '68df21ecbe711', 1, 5, 'hello', 'seen', 'user', '2025-10-13 11:15:30'),
(21, '68df21ecbe711', 5, 1, 'how can i help you..??????', 'seen', 'admin', '2025-10-13 11:16:00'),
(22, '68df21ecbe711', 1, 5, 'dfg', 'seen', 'user', '2025-10-13 11:51:44'),
(23, '68df21ecbe711', 5, 1, 'dfg', 'seen', 'admin', '2025-10-13 11:52:10'),
(24, '68df21ecbe711', 5, 1, 'fg', 'seen', 'admin', '2025-10-13 12:10:36'),
(25, '68df21ecbe711', 5, 1, 'fd', 'seen', 'admin', '2025-10-13 12:17:06'),
(26, '68df21ecbe711', 5, 1, 'rt', 'seen', 'admin', '2025-10-13 12:17:51'),
(27, '68df21ecbe711', 5, 1, 'sd', 'seen', 'admin', '2025-10-13 12:18:13'),
(28, '68df21ecbe711', 5, 1, 'ew', 'seen', 'admin', '2025-10-13 12:19:31'),
(29, '68df21ecbe711', 5, 1, 'dfg', 'seen', 'admin', '2025-10-13 12:21:46'),
(30, '68df21ecbe711', 5, 1, 'gu', 'seen', 'admin', '2025-10-13 12:26:35'),
(31, '68df21ecbe711', 5, 1, 'heello', 'seen', 'admin', '2025-10-13 12:28:43'),
(32, '68df21ecbe711', 1, 5, 'hi', 'seen', 'user', '2025-10-13 12:29:07'),
(33, '68df21ecbe711', 5, 1, 'how can i help you...??', 'seen', 'admin', '2025-10-13 12:29:32'),
(34, '68df21ecbe711', 1, 5, 'i need some solution', 'seen', 'user', '2025-10-13 12:31:44'),
(35, '68df21ecbe711', 5, 1, 'ok', 'seen', 'admin', '2025-10-13 12:34:00'),
(36, '68df21ecbe711', 1, 5, 'so', 'seen', 'user', '2025-10-13 12:35:03'),
(37, '68df21ecbe711', 5, 1, 'what\'s your problems..??', 'seen', 'admin', '2025-10-13 12:38:28'),
(38, '68df21ecbe711', 5, 1, 'hi', 'seen', 'admin', '2025-10-13 12:39:18'),
(39, '68df21ecbe711', 5, 1, 'h', 'seen', 'admin', '2025-10-13 12:41:31'),
(40, '68df2250a06b8', 5, 1, 'hi', 'seen', 'admin', '2025-10-13 12:42:44'),
(41, '68df2250a06b8', 1, 5, 'hello', 'seen', 'user', '2025-10-13 12:43:03'),
(42, '68df2250a06b8', 5, 1, 'fi', 'seen', 'admin', '2025-10-13 12:44:41'),
(43, '68df2250a06b8', 5, 1, 'hi', 'seen', 'admin', '2025-10-13 12:45:20'),
(44, '68df2250a06b8', 5, 1, 'hi', 'seen', 'admin', '2025-10-13 12:45:55'),
(45, '68df2250a06b8', 1, 5, 'hu', 'seen', 'user', '2025-10-13 12:47:06'),
(46, '68df2250a06b8', 1, 5, 'hu', 'seen', 'user', '2025-10-13 12:47:26'),
(47, '68df2250a06b8', 1, 5, 'hi', 'seen', 'user', '2025-10-13 12:47:33'),
(48, '68df2250a06b8', 5, 1, 'hello', 'seen', 'admin', '2025-10-13 12:47:51'),
(49, '68dfc979ac465', 13, 5, 'hi', 'seen', 'user', '2025-10-13 12:50:23'),
(50, '68dfc979ac465', 5, 13, 'hello', 'unseen', 'admin', '2025-10-13 12:50:39'),
(51, '68df21ecbe711', 5, 1, 'hello', 'seen', 'admin', '2025-10-13 15:06:19'),
(52, '68df21ecbe711', 1, 5, 'hi', 'seen', 'user', '2025-10-13 15:07:04'),
(53, '68df21ecbe711', 1, 5, 'laptop', 'seen', 'user', '2025-10-13 15:07:11'),
(54, '68df21ecbe711', 5, 1, 'hi', 'seen', 'admin', '2025-10-14 15:26:14'),
(55, '68df21ecbe711', 1, 5, 'hello', 'seen', 'user', '2025-10-14 15:27:09'),
(56, '68df21ecbe711', 1, 5, 'hrr', 'seen', 'user', '2025-10-14 15:45:16'),
(57, '68df2250a06b8', 1, 5, 'hi', 'seen', 'user', '2025-10-14 15:45:28'),
(58, '68c423751836f', 1, 5, 'hello', 'seen', 'user', '2025-10-14 15:57:35'),
(59, '68c423751836f', 5, 1, 'hi', 'seen', 'admin', '2025-10-14 15:58:51'),
(60, '68c423751836f', 1, 5, 'hi', 'seen', 'user', '2025-10-14 16:11:03'),
(61, '68c423751836f', 5, 1, 'hello', 'seen', 'admin', '2025-10-14 16:11:40'),
(62, '68e668120326c', 5, 15, 'hello', 'seen', 'admin', '2025-10-14 16:51:52'),
(63, '68e668120326c', 15, 5, 'i need help', 'seen', 'user', '2025-10-14 16:52:41'),
(64, '68e668120326c', 5, 15, 'how can i help you', 'seen', 'admin', '2025-10-14 16:52:55'),
(65, '68e668120326c', 15, 5, 'hi', 'seen', 'user', '2025-10-14 16:53:21'),
(66, '68dfc979ac465', 5, 13, 'hello', 'unseen', 'admin', '2025-10-14 16:56:05'),
(67, '68c423751836f', 1, 5, 'hi', 'seen', 'user', '2025-10-15 06:05:26'),
(68, '68c423751836f', 5, 1, 'hi', 'seen', 'admin', '2025-10-15 06:06:00'),
(69, '68c423751836f', 5, 1, 'hi', 'seen', 'admin', '2025-10-15 06:06:08'),
(70, '68c423751836f', 1, 5, 'hello', 'seen', 'user', '2025-10-15 06:06:23'),
(71, '68eeec36bfcfd', 5, 15, 'hello', 'seen', 'admin', '2025-10-15 06:59:08'),
(72, '68df21ecbe711', 5, 1, 'hello', 'seen', 'admin', '2025-10-15 07:15:34'),
(73, '68df21ecbe711', 1, 5, 'hi', 'seen', 'user', '2025-10-15 07:24:27'),
(74, '68eef88b9efd2', 5, 15, 'hi', 'seen', 'admin', '2025-10-15 07:28:24'),
(75, '68eef88b9efd2', 5, 15, 'hello', 'seen', 'admin', '2025-10-15 10:05:01'),
(76, '68eef88b9efd2', 15, 5, 'i need help', 'seen', 'user', '2025-10-15 10:05:52'),
(77, '68eef88b9efd2', 5, 15, 'ff', 'seen', 'admin', '2025-10-15 10:49:46'),
(78, '68eef88b9efd2', 5, 15, 'hrr', 'seen', 'admin', '2025-10-15 10:58:53'),
(79, '68eef88b9efd2', 5, 15, 'g', 'seen', 'admin', '2025-10-15 11:00:51'),
(80, '68eef88b9efd2', 5, 15, 're', 'seen', 'admin', '2025-10-15 11:04:08'),
(81, '68eef88b9efd2', 5, 15, 'f', 'seen', 'admin', '2025-10-15 11:05:08'),
(82, '68eef88b9efd2', 5, 15, 'f', 'seen', 'admin', '2025-10-15 11:12:20'),
(83, '68eef88b9efd2', 5, 15, 'ff', 'seen', 'admin', '2025-10-15 11:16:05'),
(84, '68eef88b9efd2', 5, 15, 'hg', 'seen', 'admin', '2025-10-15 11:20:08'),
(85, '68eeec36bfcfd', 5, 15, 'hi', 'seen', 'admin', '2025-10-15 11:20:58'),
(86, '68eef88b9efd2', 15, 5, 'hi', 'seen', 'user', '2025-10-15 11:21:17'),
(87, '68eef88b9efd2', 5, 15, 'hi', 'seen', 'admin', '2025-10-15 11:22:35'),
(88, '68eef88b9efd2', 15, 5, 'i need help', 'seen', 'user', '2025-10-15 11:23:18'),
(89, '68df21ecbe711', 5, 1, 'hi', 'seen', 'admin', '2025-10-15 11:29:12'),
(90, '68df21ecbe711', 1, 5, 'hello', 'seen', 'user', '2025-10-15 11:29:44'),
(91, '68df21ecbe711', 5, 1, 'hi', 'seen', 'admin', '2025-10-15 11:32:15'),
(92, '68df21ecbe711', 5, 1, 'hello', 'seen', 'admin', '2025-10-15 11:32:47'),
(93, '68eef88b9efd2', 5, 15, 'hi', 'seen', 'admin', '2025-10-15 11:33:46'),
(94, '68eeec36bfcfd', 15, 5, 'hi', 'seen', 'user', '2025-10-15 11:35:18'),
(95, '68eeec36bfcfd', 15, 5, 'hr', 'seen', 'user', '2025-10-15 11:35:37'),
(96, '68eeec36bfcfd', 5, 15, 'fi', 'seen', 'admin', '2025-10-15 11:35:46'),
(97, '68df21ecbe711', 1, 5, 'hi', 'seen', 'user', '2025-10-15 11:37:06'),
(98, '68df21ecbe711', 5, 1, 'hello', 'seen', 'admin', '2025-10-15 11:37:20'),
(99, '68df21ecbe711', 1, 5, 'ji', 'seen', 'user', '2025-10-15 11:38:03'),
(100, '68df21ecbe711', 5, 1, 'hi', 'seen', 'admin', '2025-10-15 11:38:12'),
(101, '68df21ecbe711', 5, 1, 'hi', 'seen', 'admin', '2025-10-15 11:43:35'),
(102, '68df21ecbe711', 1, 5, 'h', 'seen', 'user', '2025-10-15 11:44:14'),
(103, '68df21ecbe711', 5, 1, 'hi', 'seen', 'admin', '2025-10-15 11:44:23'),
(104, '68df21ecbe711', 5, 1, 'hello', 'seen', 'admin', '2025-10-15 11:45:10'),
(105, '68df21ecbe711', 1, 5, 'hi', 'seen', 'user', '2025-10-15 11:46:02'),
(106, '68df21ecbe711', 1, 5, 'hi', 'seen', 'user', '2025-10-15 11:46:35'),
(107, '68df21ecbe711', 5, 1, 'hii', 'seen', 'admin', '2025-10-15 11:46:52'),
(108, '68df21ecbe711', 5, 1, 'ht', 'seen', 'admin', '2025-10-15 11:46:57'),
(109, '68df21ecbe711', 5, 1, 'hi', 'seen', 'admin', '2025-10-15 11:47:48'),
(110, '68df21ecbe711', 1, 5, 'heelo', 'seen', 'user', '2025-10-15 11:47:59'),
(111, '68eef88b9efd2', 5, 15, 'hi', 'seen', 'admin', '2025-10-15 11:58:56'),
(112, '68eef88b9efd2', 5, 15, 'hi', 'seen', 'admin', '2025-10-15 11:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `title`, `description`, `status`, `created_at`) VALUES
(2, 'How do I create a support ticket?', '<p><span xss=removed>To create a support ticket, navigate to the designated support ticket system or platform and provide essential details such as your name, contact information, a deion of the issue, and any relevant attachments or screenshots.</span></p>', 1, '2025-10-02 06:28:38'),
(3, 'What information should I include in my support ticket?', '<ol xss=removed><li><span xss=\"removed\" xss=removed>Definite articles (</span><i xss=\"removed\">the</i><span xss=\"removed\" xss=removed>) are used to identify a specific noun or group of nouns, while indefinite articles (</span><i xss=\"removed\">a, an</i><span xss=\"removed\" xss=removed>) are used to identify a general noun or a noun whose identity is unknown. For example, “I want the apple” has a different meaning than “I want an apple.”</span></li><li aria-level=\"1\" xss=\"removed\">Use <i>a</i> when the noun or adjective that comes next begins with a consonant sound. Use <i>an</i> when the noun or adjective that comes next begins with a vowel sound.</li></ol>', 1, '2025-10-02 06:37:53'),
(4, 'What is TicketGo..?', '<ol><li><span xss=\"removed\" xss=removed>Articles in English grammar are tiny words that do a lot of work in sentences. Articles are how we understand whether somebody is talking about a specific noun or just any old noun. Sound confusin</span></li></ol>', 1, '2025-10-02 06:37:37'),
(5, 'What information should I include in my support ticket?', '<p><i xss=\"removed\" xss=removed>The</i><span xss=\"removed\" xss=removed> is a definite article, which means that it designates the long day as a specific long day and the cup of tea as a specific cup of tea. In contrast, </span><i xss=\"removed\" xss=removed>a</i><span xss=\"removed\" xss=removed> is an indefinite article, which does not specify the nouns it’s placed before.</span></p>', 1, '2025-10-02 06:32:55');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge`
--

CREATE TABLE `knowledge` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` longtext NOT NULL,
  `cat_id` int NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `knowledge`
--

INSERT INTO `knowledge` (`id`, `title`, `details`, `cat_id`, `status`, `created_at`) VALUES
(1, 'Change the ticket Status', '<span xss=\"removed\">Because of their genetic similarity to humans,</span><span xss=\"removed\"> mice have been used to pioneer genetic manipulation technologies, such as gene overexpression and gene knockout and knockdown models at the whole-organism level or in specific tissues. These technological breakthroughs in genetics research have fueled several decades of rapid discovery and knowledge expansion in many biomedical fields. </span><em xss=\"removed\">The ability to manipulate both genetic and environmental variables with relative ease has made mice one of the most widely used in vivo models in biomedical research today.</em>', 7, 1, '2025-10-02 16:07:28'),
(3, 'Subdomain Option to Organize Website', '<span xss=removed>Support hub offers a powerful subdomain option, allowing users to easily navigate and find relevant information. Each subdomain can represent a specific topic, product, or area of support, creating a cohesive and user-friendly experience.</span>', 9, 1, '2025-10-02 16:07:13'),
(4, 'installation Guide', '<p xss=\"removed\" xss=removed>We are providing detailed documentation on how to set up this on both a server and a local environment.</p><p xss=\"removed\" xss=removed>Here is the <span xss=\"removed\" xss=removed>documentation link -- </span>https://workdo.io/documents/documentation-for-set-up</p><ul><li>                                                    </li></ul>', 4, 1, '2025-10-02 16:08:16'),
(5, 'Create Custom Field', '<ul class=\"hul-u hul-u0 ca_b daccord_b lm-0\" xss=\"removed\" xss=removed><li class=\"eg dexamp hax\" xss=\"removed\">The article <a class=\"query\" href=\"https://dictionary.cambridge.org/dictionary/english/appear\" title=\"appeared\" rel=\"\" xss=removed>appeared</a> on the <a class=\"query\" href=\"https://dictionary.cambridge.org/dictionary/english/front\" title=\"front\" rel=\"\" xss=removed>front</a> <a class=\"query\" href=\"https://dictionary.cambridge.org/dictionary/english/page\" title=\"page\" rel=\"\" xss=removed>page</a> of the Guardian.</li><li class=\"eg dexamp hax\" xss=\"removed\">If you <a class=\"query\" href=\"https://dictionary.cambridge.org/dictionary/english/spot\" title=\"spot\" rel=\"\" xss=removed>spot</a> any <a class=\"query\" href=\"https://dictionary.cambridge.org/dictionary/english/mistake\" title=\"mistakes\" rel=\"\" xss=removed>mistakes</a> in the article just <a class=\"query\" href=\"https://dictionary.cambridge.org/dictionary/english/mark\" title=\"mark\" rel=\"\" xss=removed>mark</a> them with a <a class=\"query\" href=\"https://dictionary.cambridge.org/dictionary/english/pencil\" title=\"pencil\" rel=\"\" xss=removed>pencil</a>.</li><li class=\"eg dexamp hax\" xss=\"removed\">Her article on <a class=\"query\" href=\"https://dictionary.cambridge.org/dictionary/english/diet\" title=\"diet\" rel=\"\" xss=removed>diet</a> <a class=\"query\" href=\"https://dictionary.cambridge.org/dictionary/english/startled\" title=\"startled\" rel=\"\" xss=removed>startled</a> many <a class=\"query\" href=\"https://dictionary.cambridge.org/dictionary/english/people\" title=\"people\" rel=\"\" xss=removed>people</a> into <a class=\"query\" href=\"https://dictionary.cambridge.org/dictionary/english/changing\" title=\"changing\" rel=\"\" xss=removed>changing</a> <a class=\"query\" href=\"https://dictionary.cambridge.org/dictionary/english/their\" title=\"their\" rel=\"\" xss=removed>their</a> <a class=\"query\" href=\"https://dictionary.cambridge.org/dictionary/english/eat\" title=\"eating\" rel=\"\" xss=removed>eating</a> <a class=\"query\" href=\"https://dictionary.cambridge.org/dictionary/english/habit\" title=\"habits\" rel=\"\" xss=removed>habits</a>.</li><li class=\"eg dexamp hax\" xss=\"removed\">The <a class=\"query\" href=\"https://dictionary.cambridge.org/dictionary/english/newspaper\" title=\"newspaper\" rel=\"\" xss=removed>newspaper</a> <a class=\"query\" href=\"https://dictionary.cambridge.org/dictionary/english/publish\" title=\"published\" rel=\"\" xss=removed>published</a> a <a class=\"query\" href=\"https://dictionary.cambridge.org/dictionary/english/toughly\" title=\"toughly\" rel=\"\" xss=removed>toughly</a> <a class=\"query\" href=\"https://dictionary.cambridge.org/dictionary/english/word\" title=\"worded\" rel=\"\" xss=removed>worded</a> article about <a class=\"query\" href=\"https://dictionary.cambridge.org/dictionary/english/racist\" title=\"racist\" rel=\"\" xss=removed>racist</a> <a class=\"query\" href=\"https://dictionary.cambridge.org/dictionary/english/behaviour\" title=\"behaviour\" rel=\"\" xss=removed>behaviour</a>.</li><li class=\"eg dexamp hax\" xss=\"removed\">She has written articles for several women\'s <a class=\"query\" href=\"https://dictionary.cambridge.org/dictionary/english/magazine\" title=\"magazines\" rel=\"\" xss=removed>magazines</a>.</li></ul>', 4, 1, '2025-10-02 16:08:48'),
(6, 'How to Reset Your Password', '<span xss=\"removed\" xss=removed>A </span><span xss=\"removed\" xss=removed>proper</span><span xss=\"removed\" xss=removed> article indicates that its </span><a href=\"https://en.wikipedia.org/wiki/Proper_noun\" title=\"Proper noun\" xss=\"removed\" xss=removed>noun is proper</a><span xss=\"removed\" xss=removed>, and refers to a unique entity. It may be the name of a person, the name of a place, the name of a planet, etc. The </span><a href=\"https://en.wikipedia.org/wiki/Māori_language\" title=\"Māori language\" xss=\"removed\" xss=removed>Māori language</a><span xss=\"removed\" xss=removed> has the proper article </span><span title=\"Māori-language text\" xss=\"removed\" xss=removed><i lang=\"mi\">a</i></span><span xss=\"removed\" xss=removed>, which is used for personal nouns; so, \"</span><span title=\"Māori-language text\" xss=\"removed\" xss=removed><i lang=\"mi\">a Pita</i></span><span xss=\"removed\" xss=removed>\" means \"Peter\". In Māori, when the personal nouns have the definite or indefinite article as an important part of it, both articles are present; for example, the phrase \"</span><span title=\"Māori-language text\" xss=\"removed\" xss=removed><i lang=\"mi\">a Te Rauparaha</i></span><span xss=\"removed\" xss=removed>\", which contains both the proper article </span><span title=\"Māori-language text\" xss=\"removed\" xss=removed><i lang=\"mi\">a</i></span><span xss=\"removed\" xss=removed> and the definite article </span><span title=\"Māori-language text\" xss=\"removed\" xss=removed><i lang=\"mi\">Te</i></span><span xss=\"removed\" xss=removed> refers to the person name </span><a href=\"https://en.wikipedia.org/wiki/Te_Rauparaha\" title=\"Te Rauparaha\" xss=\"removed\" xss=removed>Te Rauparaha</a><span xss=\"removed\" xss=removed>.</span>', 10, 1, '2025-10-02 16:09:22'),
(7, 'Notification Templates', '<span xss=\"removed\" xss=removed>The definite article is sometimes also used with proper names, which are already specified by definition (there </span><i xss=\"removed\" xss=removed>is</i><span xss=\"removed\" xss=removed> just one of them). For example: </span><i xss=\"removed\" xss=removed>the Amazon, the Hebrides</i><span xss=\"removed\" xss=removed>. In these cases, the definite article may be considered superfluous. Its presence can be accounted for by the assumption that they are shorthand for a longer phrase in which the name is a specifier, i.e. </span><i xss=\"removed\" xss=removed>the Amazon River</i><span xss=\"removed\" xss=removed>, </span><i xss=\"removed\" xss=removed>the Hebridean Islands</i><span xss=\"removed\" xss=removed>.</span><sup class=\"noprint Inline-Template Template-Fact\" xss=\"removed\" xss=removed>[<i><a href=\"https://en.wikipedia.org/wiki/Wikipedia:Citation_needed\" title=\"Wikipedia:Citation needed\" xss=removed><span title=\"This claim needs references to reliable sources. (February 2020)\" xss=removed>citation needed</span></a></i>]</sup><span xss=\"removed\" xss=removed> Where the nouns in such longer phrases cannot be omitted, the definite article is universally kept: </span><i xss=\"removed\" xss=removed>the United States</i><span xss=\"removed\" xss=removed>, </span><i xss=\"removed\" xss=removed>the People\'s Republic of China</i><span xss=\"removed\" xss=removed>.</span><ol><li>                                                    </li></ol>', 2, 1, '2025-10-02 16:10:03'),
(8, 'Search tickets by a unique number', '<i xss=\"removed\" xss=removed>he</i><span xss=\"removed\" xss=removed> is the definite article in English. When </span><i xss=\"removed\" xss=removed>the</i><span xss=\"removed\" xss=removed> is used before a noun, it communicates that the noun is a specific noun. Keep in mind that doesn’t mean it’s a singular noun—</span><i xss=\"removed\" xss=removed>the </i><span xss=\"removed\" xss=removed>is used for both singular and </span><a href=\"https://www.grammarly.com/blog/parts-of-speech/articles-with-plural-nouns/\" xss=removed>plural nouns</a><span xss=\"removed\" xss=removed>. It’s also used with uncountable nouns like </span><i xss=\"removed\" xss=removed>money</i><span xss=\"removed\" xss=removed> and </span><i xss=\"removed\" xss=removed>food.</i>', 8, 1, '2025-10-02 16:10:28'),
(9, 'How to add rating', '<span xss=\"removed\" xss=removed>Use </span><i xss=\"removed\" xss=removed>a</i><span xss=\"removed\" xss=removed> before words that start with a consonant sound and </span><i xss=\"removed\" xss=removed>an</i><span xss=\"removed\" xss=removed> before words that begin with a vowel sound. We mentioned that this rule applies to words that start with vowels that sound like consonants. It also applies to words that start with consonants that sound like vowels (or that are not pronounced at all), like </span><i xss=\"removed\" xss=removed>honor</i><span xss=\"removed\" xss=removed>:</span>', 9, 1, '2025-10-02 16:11:07'),
(10, 'Create Custom Field', '<p xss=\"removed\" xss=removed>A compound subject is two or more nouns, pronouns, or noun phrases acting together as the subject of a clause or sentence. Usually, they are connected by a <a href=\"https://www.grammarly.com/blog/parts-of-speech/coordinating-conjunctions/\" xss=\"removed\" xss=removed>coordinating conjunction</a>. Here are some examples of sentences with compound subjects:</p><ul xss=\"removed\" xss=removed><li xss=\"removed\"><span xss=\"removed\" xss=removed><i>Jack and Jill </i></span><i>went up the hill.</i></li><li xss=\"removed\"><span xss=\"removed\" xss=removed><i>Neither Mia nor Ben</i></span><i> wanted to go to the library to study.</i></li><li xss=\"removed\"><i>Every day this week, </i><span xss=\"removed\" xss=removed><i>the weather or my work </i></span><i>has kept me from going for a run outside.</i></li></ul><p xss=\"removed\" xss=removed>Note that the <a href=\"https://www.grammarly.com/blog/sentences/simple-subject/\" xss=\"removed\" xss=removed>simple subjects</a> of the sentences above are just the two nouns, without the conjunctions or any extra words like articles or adjectives. So <i>Jack </i>and <i>Jill</i> are the simple subjects of the first sentence; <i>Mia</i> and <i>Ben</i> are the simple subjects of the second; and <i>weather </i>and <i>work </i>are the simple subjects of the third.</p>', 9, 1, '2025-10-02 16:11:31'),
(11, 'Unable to Upload Attachments to Tickets', '<p xss=\"removed\" xss=removed>Compound subjects are useful when you want to relate that multiple nouns are performing a single action or when you want to describe multiple nouns that are closely related. They can be found in <span xss=\"removed\" xss=removed>simple</span>,<span xss=\"removed\" xss=removed> compound</span>,<span xss=\"removed\" xss=removed> complex</span>, and<span xss=\"removed\" xss=removed> compound-complex </span><a href=\"https://www.grammarly.com/blog/sentences/sentence-structure/\" xss=\"removed\" xss=removed>sentence structures</a>:</p><ul xss=\"removed\" xss=removed><li xss=\"removed\"><i>Both </i><span xss=\"removed\" xss=removed><i>canoes and kayaks</i></span><i> are available there.</i></li><li xss=\"removed\"><i>You can rent canoes and kayaks there, but </i><span xss=\"removed\" xss=removed><i>the shuttle and the campsite</i></span><i> have to be booked separately.</i></li><li xss=\"removed\"><span xss=\"removed\" xss=removed><i>The canoes and kayaks</i></span><i> that are available there are usually in good condition.</i></li><li xss=\"removed\"><i>The first outfitter that we visited was closed, but after we left there </i><span xss=\"removed\" xss=removed><i>Mick and Bohai</i></span><i> told us about another one.</i></li></ul>', 7, 1, '2025-10-02 16:11:52'),
(12, 'Why Can’t I Log In to My Account?', '<p xss=\"removed\" xss=removed>When the elements of a compound subject are connected with the coordinating conjunction <i>and</i>, that subject is nearly always plural and requires a plural verb:</p><ul xss=\"removed\" xss=removed><li aria-level=\"1\" xss=\"removed\"><i><span xss=\"removed\" xss=removed>The guitar and the piano</span> both need tuning.</i></li><li aria-level=\"1\" xss=\"removed\"><em><span xss=\"removed\" xss=removed>Books and papers</span> were piled on the desk.</em></li><li aria-level=\"1\" xss=\"removed\"><em><span xss=\"removed\" xss=removed>A yo-yo and some puzzles</span> keep my eight-year-old occupied.</em></li></ul>', 10, 1, '2025-10-02 16:12:20'),
(13, 'Search tickets Unique number', '<i xss=\"removed\" xss=removed>The</i><span xss=\"removed\" xss=removed> is the definite article in English. When </span><i xss=\"removed\" xss=removed>the</i><span xss=\"removed\" xss=removed> is used before a noun, it communicates that the noun is a specific noun. Keep in mind that doesn’t mean it’s a singular noun—</span><i xss=\"removed\" xss=removed>the </i><span xss=\"removed\" xss=removed>is used for both singular.</span>', 2, 1, '2025-10-02 18:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `tickets_list`
--

CREATE TABLE `tickets_list` (
  `id` int NOT NULL,
  `ticket_id` varchar(255) DEFAULT NULL,
  `user_id` int NOT NULL,
  `subject` varchar(255) NOT NULL,
  `cat_id` int NOT NULL,
  `priority` enum('low','medium','high','very urgent') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'low',
  `ticket_type` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `status` enum('new','open','inprogress','close') NOT NULL DEFAULT 'new',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tickets_list`
--

INSERT INTO `tickets_list` (`id`, `ticket_id`, `user_id`, `subject`, `cat_id`, `priority`, `ticket_type`, `images`, `thumb`, `description`, `status`, `created_at`) VALUES
(1, '68df21ecbe711', 1, 'Reprehenderit est illo vero', 7, 'very urgent', 'public', 'uploads/images/c5a5f26af46934adfb87437ad2ebbc02.jpeg', 'uploads/thumb/c5a5f26af46934adfb87437ad2ebbc02.jpeg', 'Distinctio, minus, assumenda? Tempora saepe laudantium adipisci maxime incidunt doloribus voluptatum corrupti quod commodi dolore placeat itaque a eos error rerum molestiae, nostrum qui et sequi earum dolores. Totam adipisci debitis reiciendis itaque veritatis, dicta molestias iure sint illum dolor consectetur exercitationem rem porro impedit distinctio est nemo assumenda vel nisi soluta magni. Neque dolorum consectetur asperiores soluta omnis facere. Labore quidem vero dignissimos fugiat eligendi, eum minima aliquam iste rem magni voluptatum delectus repudiandae praesentium reiciendis, nesciunt ad cupiditate accusantium, aspernatur. Veritatis dolor molestias nulla illo quasi excepturi esse sit, est assumenda quas quisquam, explicabo consequuntur fugiat unde sed, soluta necessitatibus perferendis facilis! Ducimus maxime quo esse doloremque placeat ipsa, natus, exercitationem repellat neque eaque unde quidem quasi similique, magni dolores qui quibusdam, quaerat quis.', 'close', '2025-10-03 07:07:56'),
(2, '68c423751836f', 1, 'iure nemo quas vero, id perspiciatis commodi', 9, 'low', 'privet', NULL, NULL, 'Explicabo ipsam molestias magni porro. Est ratione, sed consequuntur, iusto assumenda maxime fugit, cum molestias veritatis provident mollitia corrupti enim voluptas sapiente unde? Laborum voluptas animi, a reiciendis minima ab dolorum officia, ratione in! Harum dolores ea iste minima. Sit at laborum explicabo, id quo! Quia ad adipisci sapiente totam labore similique temporibus delectus saepe in officia voluptatem, pariatur. Tempore vero blanditiis saepe explicabo, rerum dolor laboriosam placeat similique alias minus ad vel reprehenderit. Ad voluptatum explicabo cum maxime debitis minus sapiente voluptatibus soluta molestias nulla autem illum non aut ducimus&nbsp;', 'inprogress', '2025-10-03 04:45:22'),
(4, '68df2250a06b8', 1, 'Reprehenderit east illo vero', 4, 'high', 'public', 'uploads/images/7aeec1069526aeb13797f91abf559b0d.jpeg', 'uploads/thumb/7aeec1069526aeb13797f91abf559b0d.jpeg', 'Explicabo ipsam molestias magni porro. Est ratione, sed consequuntur, iusto assumenda maxime fugit, cum molestias veritatis provident mollitia corrupti enim voluptas sapiente unde? Laborum voluptas animi, a reiciendis minima ab dolorum officia, ratione in! Harum dolores ea iste minima. Sit at laborum explicabo, id quo! Quia ad adipisci sapiente totam labore similique temporibus delectus saepe in officia voluptatem, pariatur. Tempore vero blanditiis saepe explicabo, rerum dolor laboriosam placeat similique alias minus ad vel reprehenderit. Ad voluptatum explicabo cum maxime debitis minus sapiente voluptatibus soluta molestias nulla autem illum non aut ducimus&nbsp;', 'inprogress', '2025-10-03 07:09:36'),
(5, '68df295991667', 4, 'App freezes when opening settings', 3, 'medium', 'privet', NULL, NULL, 'Explicabo ipsam molestias magni porro. Est ratione, sed consequuntur, iusto assumenda maxime fugit, cum molestias veritatis provident mollitia corrupti enim voluptas sapiente unde? Laborum voluptas animi, a reiciendis minima ab dolorum officia, ratione in! Harum dolores ea iste minima. Sit at laborum explicabo, id quo! Quia ad adipisci sapiente totam labore similique temporibus delectus saepe in officia voluptatem, pariatur. Tempore vero blanditiis saepe explicabo, rerum dolor laboriosam placeat similique alias minus ad vel reprehenderit. Ad voluptatum explicabo cum maxime debitis minus sapiente voluptatibus soluta molestias nulla autem illum non aut ducimus&nbsp;', 'open', '2025-10-03 07:39:37'),
(6, '68dfc979ac465', 13, 'App freezes when opening settings', 2, 'low', 'public', NULL, NULL, 'Explicabo ipsam molestias magni porro. Est ratione, sed consequuntur, iusto assumenda maxime fugit, cum molestias veritatis provident mollitia corrupti enim voluptas sapiente unde? Laborum voluptas animi, a reiciendis minima ab dolorum officia, ratione in! Harum dolores ea iste minima. Sit at laborum explicabo, id quo! Quia ad adipisci sapiente totam labore similique temporibus delectus saepe in officia voluptatem, pariatur. Tempore vero blanditiis saepe explicabo, rerum dolor laboriosam placeat similique alias minus ad vel reprehenderit. Ad voluptatum explicabo cum maxime debitis minus sapiente voluptatibus soluta molestias nulla autem illum non aut ducimus&nbsp;', 'inprogress', '2025-10-03 19:02:49'),
(7, '68e04d2d8ab00', 4, 'Mobile App Crashing on Launch', 4, 'medium', 'privet', NULL, NULL, 'A quia laborum facere cumque obcaecati, laboriosam inventore deserunt nam ea eaque, autem placeat, sunt suscipit, sapiente at voluptates ullam officiis voluptatibus minima? Illo, dolor deleniti itaque nulla quos neque iure odit, officia necessitatibus nihil vel cupiditate accusantium atque adipisci veritatis esse magnam repellat quae odio deserunt, id vitae sint. Distinctio, minus, assumenda? Tempora saepe laudantium adipisci maxime incidunt doloribus voluptatum corrupti quod commodi dolore placeat itaque a eos error rerum molestiae, nostrum qui et sequi earum dolores. Totam adipisci debitis reiciendis itaque veritatis, dicta molestias iure sint illum dolor consectetur exercitationem rem porro impedit distinctio est nemo assumenda vel nisi soluta magni. Neque dolorum consectetur asperiores soluta omnis facere.', 'inprogress', '2025-10-04 04:24:45'),
(8, '68e668120326c', 15, 'iure nemo quas vero, id perspiciatis commodi', 3, 'medium', 'public', 'uploads/images/9aad3f453a6b3514c540290f8adbae75.png', 'uploads/thumb/9aad3f453a6b3514c540290f8adbae75.png', '<div><br></div><div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem possimus quis harum, soluta aut voluptate dicta dolores quibusdam beatae doloribus.</div>', 'open', '2025-10-08 19:33:06'),
(9, '68eeec36bfcfd', 15, 'Voluptatem commodo', 7, 'medium', 'public', 'uploads/images/6c20fc165f6a6e71fbb42d45212a09fb.png', 'uploads/thumb/6c20fc165f6a6e71fbb42d45212a09fb.png', '<div xss=removed>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, nesciunt cum ipsum eaque suscipit minima culpa possimus illo. Laboriosam numquam reiciendis ullam rerum nemo. Autem provident illum nulla debitis dolor?</div>', 'inprogress', '2025-10-15 06:35:02'),
(10, '68eef88b9efd2', 15, 'Reprehenderit est illo vero', 7, 'very urgent', 'public', NULL, NULL, 'Explicabo ipsam molestias magni porro. Est ratione, sed consequuntur, iusto assumenda maxime fugit, cum molestias veritatis provident mollitia corrupti enim voluptas sapiente unde? Laborum voluptas animi, a reiciendis minima ab dolorum officia, ratione in! Harum dolores ea iste minima. Sit at laborum explicabo, id quo! Quia ad adipisci sapiente totam labore similique temporibus delectus saepe in officia voluptatem, pariatur. Tempore vero blanditiis saepe explicabo, rerum dolor laboriosam placeat similique alias minus ad vel reprehenderit. Ad voluptatum explicabo cum maxime debitis minus sapiente voluptatibus soluta molestias nulla autem illum non aut ducimus&nbsp;', 'open', '2025-10-15 07:27:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` varchar(100) NOT NULL DEFAULT 'customer',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `phone`, `images`, `thumb`, `password`, `user_role`, `created_at`) VALUES
(1, 'Emran khan', 'emran@gmail.com', 'emran', '01632', 'uploads/images/f5694c94c77b6f8b2e6da7f9d00e9942.jpeg', 'uploads/thumb/f5694c94c77b6f8b2e6da7f9d00e9942.jpeg', '$2y$10$6MiCEUSZCl.xj3EgiMxEBuVuQFAfkHScEfaP0.UPkx870CJkIvsjq', 'customer', '2025-09-30 09:32:49'),
(4, 'Sohag', 'sohag@gmail.com', 'emran60', '', NULL, NULL, '$2y$10$t5A5wcsFnHKIul2zbG3euuYvT7.IHRO06syaj2F1QUZj.RTDL3wPa', 'customer', '2025-10-01 18:36:52'),
(5, 'Admin', 'admin@gmail.com', 'admin', '018245364', 'uploads/images/f31e023dc92494326ad1f955e18b06e7.jpeg', 'uploads/thumb/f31e023dc92494326ad1f955e18b06e7.jpeg', '$2y$10$o4MWg6dz1rkpNJEmrsHXh.68ctaAWslesbXwm9oGdlfAGuNoD1J6C', 'admin', '2025-09-30 09:41:50'),
(13, 'kajol', 'kajol@gmail.com', NULL, '', NULL, NULL, '$2y$10$2okt5AJStWjxwrUPkZ/vFO6D8/Sii6tD2.XEOo/YujeSie6wOscei', 'customer', '2025-10-01 16:04:52'),
(14, 'Soha moni', 'soha@gmail.com', NULL, '0182453456', NULL, NULL, '$2y$10$/bff.wuTdKohxnczhcBxwuZcoYt.yf8mlR5y4M1iMh.k7gPm/E4Oq', 'customer', '2025-10-01 16:09:11'),
(15, 'Md Sumon', 'sumon@gmail.com', 'sumon', '', 'uploads/images/97ff921b8fb28aeaffb6394edbae6a5f.jpeg', 'uploads/thumb/97ff921b8fb28aeaffb6394edbae6a5f.jpeg', '$2y$10$5i6AJal0ES5tBC36lliu1uPRzTD25Q28Gm/UWVkBszQpxfBgi9mr6', 'customer', '2025-10-01 17:14:16'),
(16, 'Sadia', 'sadia@gmail.com', NULL, '0182453456', NULL, NULL, '$2y$10$fH14kh8XpSYneTyG5FXYDOxsm.qv9VxQTaaTcoxY0lggH8wfvj01a', 'customer', '2025-10-01 18:33:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_list`
--
ALTER TABLE `category_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_list`
--
ALTER TABLE `chat_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `knowledge`
--
ALTER TABLE `knowledge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets_list`
--
ALTER TABLE `tickets_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_list`
--
ALTER TABLE `category_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `chat_list`
--
ALTER TABLE `chat_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `knowledge`
--
ALTER TABLE `knowledge`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tickets_list`
--
ALTER TABLE `tickets_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
