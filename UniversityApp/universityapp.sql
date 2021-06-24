-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 08:36 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universityapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `firstName`, `lastName`, `userName`, `email`, `email_verified_at`, `password`, `is_super`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'mohamed', 'karabawy', 'mohamed', 'mohamedkarabawy@hotmail.com', NULL, '$2y$10$AjI0X6B.44.2AoFWAUIZEuefgyCSTKOvp5QPJwZnj0efxp.eHgif.', 0, 'ngU9TaGslpbgjJ7SFsRIXGIZ5ZdmZFMpMiha1Nr0B6gB51l57mzjgauS5Wjz', '2020-03-18 18:40:16', '2020-03-18 18:40:16');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `cover_image`, `created_at`, `updated_at`) VALUES
(1, 'Article 1', '<p style=\"text-align: center;\"><span style=\"font-size:22px\"><strong>Article 1</strong></span></p>', 'cover-top-10-mistakes-that-python-programmers-make-09b983479d8ad3850582627f73ca3c57_1595711918.png', '2020-07-25 19:18:38', '2020-07-25 19:18:38'),
(2, 'Article 2', '<p style=\"text-align: center;\"><span style=\"font-size:22px\">Article 2</span></p>', 'code-1839406_1920_1595712082.jpg', '2020-07-25 19:21:22', '2020-07-25 19:21:22');

-- --------------------------------------------------------

--
-- Table structure for table `briefs`
--

CREATE TABLE `briefs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `briefs`
--

INSERT INTO `briefs` (`id`, `title`, `content`, `language`, `created_at`, `updated_at`) VALUES
(3, 'مرحبا بكم فى معهد تكنولوجيا المعلومات', 'ننتهز فرصـة بداية العـام الدراسى 2019-2020 لنهنئ كل طلاب وطـالبات المعهد القدامى والجـدد بالعام الدراسـي الجديد ولابنائنا الطـلاب الجدد يسعدنا أن نهنئكم بصفة خـاصة بالعام الجامعى الأول فى حياتكم كما أنثنى على اختياركم لمعهد الوادى العالى لتكونوا سفراء لنا فى كل مكان وتتحملون مسئولية النهوض بالوطن فانتم أحفاد بناة الاهرام وحضارات عظيمة، و انتم مطالبون بالسير على الدرب لتصلوا بمصرنا الحبيبة إلى الصدارة بين أمم الحضارات الحديثة أبنائنا وبناتنا أدعو الله أن يكلل جهد الجميع بالنجاح وأن تكون دراستكم بالمعهد مثمرة وناجحة وذاخرة بالذكريات السعيدة.', 'ar', '2020-07-28 04:42:38', '2021-06-23 16:29:59'),
(4, 'Welcome to High Institutes.', 'We take advantage of the opportunity of the beginning of the academic year 2019-2020 to congratulate all the students of the old and new institutes for the new academic year and for our new students. We are pleased to congratulate you specifically for the first university year in your life. The builders of the pyramids and great civilizations. You are required to follow the path to reach our beloved Egypt to the fore among the nations of modern civilizations, our sons and daughters. I pray to God that everyone\'s effort be successful and that your studies in the institute be fruitful, successful and full of happy memories.', 'en', '2020-07-28 05:06:29', '2021-06-23 16:29:30');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `college_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `levels` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `college_name`, `levels`, `created_at`, `updated_at`) VALUES
(1, 'Engineering', 5, '2020-03-18 19:08:25', '2020-03-18 19:08:25'),
(2, 'Management Information Systems', 4, '2020-03-18 19:08:45', '2020-03-18 19:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `college__briefs`
--

CREATE TABLE `college__briefs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `course_group` bigint(20) UNSIGNED DEFAULT NULL,
  `course_order` bigint(20) UNSIGNED DEFAULT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_number` bigint(20) NOT NULL,
  `hours` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `department_id`, `course_group`, `course_order`, `course_name`, `course_number`, `hours`, `created_at`, `updated_at`) VALUES
(26, 3, 20, 37, 'Accounting 1', 2001, 3, '2020-03-23 03:07:12', '2020-03-23 03:07:12'),
(27, 3, 20, 38, 'Accounting 2', 2002, 3, '2020-03-23 03:07:12', '2020-03-23 03:07:12'),
(28, 3, 20, 39, 'Accounting 3', 2001, 3, '2020-03-23 03:07:13', '2020-03-23 03:07:13'),
(29, 2, 21, 40, 'Programming 1', 1001, 3, '2020-03-23 03:07:49', '2020-03-23 03:07:49'),
(30, 2, 21, 41, 'Programming 2', 1002, 3, '2020-03-23 03:07:49', '2020-03-23 03:07:49'),
(31, 2, 21, 42, 'Programming 3', 1003, 3, '2020-03-23 03:07:49', '2020-04-06 21:23:54'),
(32, 2, 22, 43, 'Database 1', 2001, 3, '2020-03-28 18:40:40', '2020-03-28 18:40:40'),
(33, 2, 22, 44, 'Database 2', 2002, 3, '2020-03-28 18:40:40', '2020-03-28 18:40:40'),
(34, 2, 23, 45, 'Accounting 1', 3001, 3, '2020-04-03 17:06:11', '2020-04-03 17:06:11'),
(35, 2, 23, 46, 'Accounting 2', 3002, 3, '2020-04-03 17:06:11', '2020-04-03 17:06:11'),
(36, 2, 23, 47, 'Accounting 3', 3003, 3, '2020-04-03 17:06:11', '2020-04-03 17:46:48');

-- --------------------------------------------------------

--
-- Table structure for table `course_groups`
--

CREATE TABLE `course_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `range` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_groups`
--

INSERT INTO `course_groups` (`id`, `name`, `range`, `created_at`, `updated_at`) VALUES
(20, 'Accounting', 3, '2020-03-23 03:07:12', '2020-03-23 03:07:12'),
(21, 'Programming', 3, '2020-03-23 03:07:49', '2020-03-23 03:07:49'),
(22, 'Database', 2, '2020-03-28 18:40:40', '2020-03-28 18:40:40'),
(23, 'Accounting', 3, '2020-04-03 17:06:11', '2020-04-03 17:06:11');

-- --------------------------------------------------------

--
-- Table structure for table `course_orders`
--

CREATE TABLE `course_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_orders`
--

INSERT INTO `course_orders` (`id`, `order`, `created_at`, `updated_at`) VALUES
(37, 1, '2020-03-23 03:07:12', '2020-03-23 03:07:12'),
(38, 2, '2020-03-23 03:07:12', '2020-03-23 03:07:12'),
(39, 3, '2020-03-23 03:07:13', '2020-03-23 03:07:13'),
(40, 1, '2020-03-23 03:07:49', '2020-03-23 03:07:49'),
(41, 2, '2020-03-23 03:07:49', '2020-03-23 03:07:49'),
(42, 3, '2020-03-23 03:07:49', '2020-03-23 03:07:49'),
(43, 1, '2020-03-28 18:40:40', '2020-03-28 18:40:40'),
(44, 2, '2020-03-28 18:40:40', '2020-03-28 18:40:40'),
(45, 1, '2020-04-03 17:06:11', '2020-04-03 17:06:11'),
(46, 2, '2020-04-03 17:06:11', '2020-04-03 17:06:11'),
(47, 3, '2020-04-03 17:06:11', '2020-04-03 17:06:11');

-- --------------------------------------------------------

--
-- Table structure for table `dean__shes`
--

CREATE TABLE `dean__shes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dean__shes`
--

INSERT INTO `dean__shes` (`id`, `title`, `content`, `language`, `created_at`, `updated_at`) VALUES
(3, 'كلمة العميد ...', 'أبنائي الطلاب\r\nمرحبا بكم فى معهد تكنولوجيا المعلومات\r\n\r\nيحرص المعهد على لعب دور رائد في خدمة الطلاب وكذلك في خدمة المجتمع الخارجي     \r\nفيما يتعلق بالطلاب ، يقدم المعهد برامج مختلفة لطلاب المرحلة الجامعية وكذلك فرص تدريب متميزة بالشراكة مع كبرى الشركات في مجالات تكنولوجيا المعلومات     \r\nكما يشجع المعهد العديد من الأنشطة الطلابية العلمية والثقافية والفنية والرياضية من خلال مبادرات اتحاد الطلاب وعائلاتهم ، كما يوفر المعهد سياسة الباب المفتوح في التعامل مع شكاوى الطلاب ومقترحاتهم وطلاب طلابنا. أتمنى أن تستفيد إلى أقصى حد من فترة الدراسة في ضوء القدرات المادية والبشرية للمعهد المتميز وأنك تخرج سفراء متميزين لمعهدكم.', 'ar', '2020-07-28 04:50:12', '2021-06-23 16:30:35'),
(4, 'Dean\'s speech', 'My children are students\r\n\r\nWelcome to the High Institute\r\n\r\nThe institute is keen to play a leading role in serving students as well as in serving the external community. Regarding students, the institute offers various programs for undergraduate students as well as distinguished training opportunities in partnership with major companies in the fields of information technology. The Institute also encourages various student scientific, cultural, artistic and sports activities through the Students Union Families and student initiatives The institute also provides an open door policy in dealing with students \'complaints and proposals, our students\' students  I hope that you will make the most of the study period in light of the material and human capabilities of the distinguished institute and that you graduate distinguished ambassadors for your institute.', 'en', '2020-07-28 05:07:18', '2021-06-23 16:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `college_id` bigint(20) UNSIGNED NOT NULL,
  `department_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `college_id`, `department_name`, `created_at`, `updated_at`) VALUES
(2, 2, 'Information Systems', '2020-03-18 19:10:59', '2020-03-18 19:10:59'),
(3, 2, 'Accounting', '2020-03-18 19:11:15', '2020-03-18 19:11:15'),
(4, 2, 'Business Management', '2020-03-18 19:11:44', '2020-03-18 19:11:44'),
(5, 1, 'Civil', '2020-03-18 19:12:40', '2020-03-18 19:12:40'),
(6, 1, 'Computer', '2020-03-18 19:13:08', '2020-03-18 19:13:08'),
(7, 1, 'Electronic', '2020-03-18 19:13:27', '2020-03-18 19:13:27'),
(8, 1, 'Electrical', '2020-03-18 19:14:49', '2020-03-25 18:32:01');

-- --------------------------------------------------------

--
-- Table structure for table `exams_schedules`
--

CREATE TABLE `exams_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester_no` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams_schedules`
--

INSERT INTO `exams_schedules` (`id`, `semester_no`, `created_at`, `updated_at`) VALUES
(2, 2, '2020-07-24 15:12:45', '2020-07-24 15:12:45');

-- --------------------------------------------------------

--
-- Table structure for table `exam_schedule`
--

CREATE TABLE `exam_schedule` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exams_schedules_id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_schedule`
--

INSERT INTO `exam_schedule` (`id`, `course_name`, `exams_schedules_id`, `day`, `time_from`, `time_to`, `created_at`, `updated_at`) VALUES
(1, 'Programming 1', 2, 'Saturday', '10:00', '12:00', '2020-07-24 15:12:45', '2020-07-24 15:12:45'),
(2, 'Programming 2', 2, 'Saturday', '1:00', '3:00', '2020-07-24 15:12:45', '2020-07-24 15:12:45'),
(3, 'Programming 3', 2, 'Monday', '1:00', '3:00', '2020-07-24 15:12:45', '2020-07-24 15:12:45'),
(4, 'Accounting 1', 2, 'Tuesday', '10:00', '12:00', '2020-07-24 15:12:45', '2020-07-24 15:12:45'),
(5, 'Accounting 2', 2, 'Wednesday', '1:00', '3:00', '2020-07-24 15:12:45', '2020-07-24 15:12:45'),
(6, 'Database 1', 2, 'Thursday', '1:00', '3:00', '2020-07-24 15:12:45', '2020-07-24 15:12:45'),
(7, 'Database 2', 2, 'Sunday', '10:00', '12:00', '2020-07-24 15:12:45', '2020-07-24 15:12:45');

-- --------------------------------------------------------

--
-- Table structure for table `future__visions`
--

CREATE TABLE `future__visions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `future__visions`
--

INSERT INTO `future__visions` (`id`, `content`, `language`, `created_at`, `updated_at`) VALUES
(5, 'الريادة في مختلف المجالات على الصعيدين المحلي والإقليمي', 'ar', '2020-07-28 04:55:40', '2020-07-28 04:55:40'),
(6, '- Pioneering in various fields at the local and regional levels.', 'en', '2020-07-28 05:08:31', '2020-07-28 05:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`id`, `content`, `language`, `created_at`, `updated_at`) VALUES
(6, '- تدريب الطالب على العمل الجماعي والابتكار.\r\n- إعداد الطالب لسوق العمل.', 'ar', '2020-07-28 04:53:27', '2020-07-28 04:53:27'),
(7, '- Preparing a qualified student.\r\n- Training the student on teamwork and innovation.', 'en', '2020-07-28 05:07:55', '2020-07-28 05:07:55');

-- --------------------------------------------------------

--
-- Table structure for table `ip_addresses`
--

CREATE TABLE `ip_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ip_addresses`
--

INSERT INTO `ip_addresses` (`id`, `ip_address`, `created_at`, `updated_at`) VALUES
(6, '127.0.0.1', NULL, NULL),
(7, '127.0.0.1', NULL, NULL),
(8, '127.0.0.1', NULL, NULL),
(9, '127.0.0.1', NULL, NULL),
(10, '127.0.0.1', NULL, NULL),
(11, '127.0.0.1', NULL, NULL),
(12, '127.0.0.1', NULL, NULL),
(13, '127.0.0.1', NULL, NULL),
(14, '127.0.0.1', NULL, NULL),
(15, '127.0.0.1', NULL, NULL),
(16, '127.0.0.1', NULL, NULL),
(17, '127.0.0.1', NULL, NULL),
(18, '127.0.0.1', NULL, NULL),
(19, '127.0.0.1', NULL, NULL),
(20, '127.0.0.1', NULL, NULL),
(21, '127.0.0.1', NULL, NULL),
(22, '127.0.0.1', NULL, NULL),
(23, '127.0.0.1', NULL, NULL),
(24, '127.0.0.1', NULL, NULL),
(25, '127.0.0.1', NULL, NULL),
(26, '127.0.0.1', NULL, NULL),
(27, '127.0.0.1', NULL, NULL),
(28, '127.0.0.1', NULL, NULL),
(29, '127.0.0.1', NULL, NULL),
(30, '127.0.0.1', NULL, NULL),
(31, '127.0.0.1', NULL, NULL),
(32, '127.0.0.1', NULL, NULL),
(33, '127.0.0.1', NULL, NULL),
(34, '127.0.0.1', NULL, NULL),
(35, '127.0.0.1', NULL, NULL),
(36, '127.0.0.1', NULL, NULL),
(37, '127.0.0.1', NULL, NULL),
(38, '127.0.0.1', NULL, NULL),
(39, '127.0.0.1', NULL, NULL),
(40, '127.0.0.1', NULL, NULL),
(41, '127.0.0.1', NULL, NULL),
(42, '127.0.0.1', NULL, NULL),
(43, '127.0.0.1', NULL, NULL),
(44, '127.0.0.1', NULL, NULL),
(45, '127.0.0.1', NULL, NULL),
(46, '127.0.0.1', NULL, NULL),
(47, '127.0.0.1', NULL, NULL),
(48, '127.0.0.1', NULL, NULL),
(49, '127.0.0.1', NULL, NULL),
(50, '127.0.0.1', NULL, NULL),
(51, '127.0.0.1', NULL, NULL),
(52, '127.0.0.1', NULL, NULL),
(53, '127.0.0.1', NULL, NULL),
(54, '127.0.0.1', NULL, NULL),
(55, '127.0.0.1', NULL, NULL),
(56, '127.0.0.1', NULL, NULL),
(57, '127.0.0.1', NULL, NULL),
(58, '127.0.0.1', NULL, NULL),
(59, '127.0.0.1', NULL, NULL),
(60, '127.0.0.1', NULL, NULL),
(61, '127.0.0.1', NULL, NULL),
(62, '127.0.0.1', NULL, NULL),
(63, '127.0.0.1', NULL, NULL),
(64, '127.0.0.1', NULL, NULL),
(65, '127.0.0.1', NULL, NULL),
(66, '127.0.0.1', NULL, NULL),
(67, '127.0.0.1', NULL, NULL),
(68, '127.0.0.1', NULL, NULL),
(69, '127.0.0.1', NULL, NULL),
(70, '127.0.0.1', NULL, NULL),
(71, '127.0.0.1', NULL, NULL),
(72, '127.0.0.1', NULL, NULL),
(73, '127.0.0.1', NULL, NULL),
(74, '127.0.0.1', NULL, NULL),
(75, '127.0.0.1', NULL, NULL),
(76, '127.0.0.1', NULL, NULL),
(77, '127.0.0.1', NULL, NULL),
(78, '127.0.0.1', NULL, NULL),
(79, '127.0.0.1', NULL, NULL),
(80, '127.0.0.1', NULL, NULL),
(81, '127.0.0.1', NULL, NULL),
(82, '127.0.0.1', NULL, NULL),
(83, '127.0.0.1', NULL, NULL),
(84, '127.0.0.1', NULL, NULL),
(85, '127.0.0.1', NULL, NULL),
(86, '127.0.0.1', NULL, NULL),
(87, '127.0.0.1', NULL, NULL),
(88, '127.0.0.1', NULL, NULL),
(89, '127.0.0.1', NULL, NULL),
(90, '127.0.0.1', NULL, NULL),
(91, '127.0.0.1', NULL, NULL),
(92, '127.0.0.1', NULL, NULL),
(93, '127.0.0.1', NULL, NULL),
(94, '127.0.0.1', NULL, NULL),
(95, '127.0.0.1', NULL, NULL),
(96, '127.0.0.1', NULL, NULL),
(97, '127.0.0.1', NULL, NULL),
(98, '127.0.0.1', NULL, NULL),
(99, '127.0.0.1', NULL, NULL),
(100, '127.0.0.1', NULL, NULL),
(101, '127.0.0.1', NULL, NULL),
(102, '127.0.0.1', NULL, NULL),
(103, '127.0.0.1', NULL, NULL),
(104, '127.0.0.1', NULL, NULL),
(105, '127.0.0.1', NULL, NULL),
(106, '127.0.0.1', NULL, NULL),
(107, '127.0.0.1', NULL, NULL),
(108, '127.0.0.1', NULL, NULL),
(109, '127.0.0.1', NULL, NULL),
(110, '127.0.0.1', NULL, NULL),
(111, '127.0.0.1', NULL, NULL),
(112, '127.0.0.1', NULL, NULL),
(113, '127.0.0.1', NULL, NULL),
(114, '127.0.0.1', NULL, NULL),
(115, '127.0.0.1', NULL, NULL),
(116, '127.0.0.1', NULL, NULL),
(117, '127.0.0.1', NULL, NULL),
(118, '127.0.0.1', NULL, NULL),
(119, '127.0.0.1', NULL, NULL),
(120, '127.0.0.1', NULL, NULL),
(121, '127.0.0.1', NULL, NULL),
(122, '127.0.0.1', NULL, NULL),
(123, '127.0.0.1', NULL, NULL),
(124, '127.0.0.1', NULL, NULL),
(125, '127.0.0.1', NULL, NULL),
(126, '127.0.0.1', NULL, NULL),
(127, '127.0.0.1', NULL, NULL),
(128, '127.0.0.1', NULL, NULL),
(129, '127.0.0.1', NULL, NULL),
(130, '127.0.0.1', NULL, NULL),
(131, '127.0.0.1', NULL, NULL),
(132, '127.0.0.1', NULL, NULL),
(133, '127.0.0.1', NULL, NULL),
(134, '127.0.0.1', NULL, NULL),
(135, '127.0.0.1', NULL, NULL),
(136, '127.0.0.1', NULL, NULL),
(137, '127.0.0.1', NULL, NULL),
(138, '127.0.0.1', NULL, NULL),
(139, '127.0.0.1', NULL, NULL),
(140, '127.0.0.1', NULL, NULL),
(141, '127.0.0.1', NULL, NULL),
(142, '127.0.0.1', NULL, NULL),
(143, '127.0.0.1', NULL, NULL),
(144, '127.0.0.1', NULL, NULL),
(145, '127.0.0.1', NULL, NULL),
(146, '127.0.0.1', NULL, NULL),
(147, '127.0.0.1', NULL, NULL),
(148, '127.0.0.1', NULL, NULL),
(149, '127.0.0.1', NULL, NULL),
(150, '127.0.0.1', NULL, NULL),
(151, '127.0.0.1', NULL, NULL),
(152, '127.0.0.1', NULL, NULL),
(153, '127.0.0.1', NULL, NULL),
(154, '127.0.0.1', NULL, NULL),
(155, '127.0.0.1', NULL, NULL),
(156, '127.0.0.1', NULL, NULL),
(157, '127.0.0.1', NULL, NULL),
(158, '127.0.0.1', NULL, NULL),
(159, '127.0.0.1', NULL, NULL),
(160, '127.0.0.1', NULL, NULL),
(161, '127.0.0.1', NULL, NULL),
(162, '127.0.0.1', NULL, NULL),
(163, '127.0.0.1', NULL, NULL),
(164, '127.0.0.1', NULL, NULL),
(165, '127.0.0.1', NULL, NULL),
(166, '127.0.0.1', NULL, NULL),
(167, '127.0.0.1', NULL, NULL),
(168, '127.0.0.1', NULL, NULL),
(169, '127.0.0.1', NULL, NULL),
(170, '127.0.0.1', NULL, NULL),
(171, '127.0.0.1', NULL, NULL),
(172, '127.0.0.1', NULL, NULL),
(173, '127.0.0.1', NULL, NULL),
(174, '127.0.0.1', NULL, NULL),
(175, '127.0.0.1', NULL, NULL),
(176, '127.0.0.1', NULL, NULL),
(177, '127.0.0.1', NULL, NULL),
(178, '127.0.0.1', NULL, NULL),
(179, '127.0.0.1', NULL, NULL),
(180, '127.0.0.1', NULL, NULL),
(181, '127.0.0.1', NULL, NULL),
(182, '127.0.0.1', NULL, NULL),
(183, '127.0.0.1', NULL, NULL),
(184, '127.0.0.1', NULL, NULL),
(185, '127.0.0.1', NULL, NULL),
(186, '127.0.0.1', NULL, NULL),
(187, '127.0.0.1', NULL, NULL),
(188, '127.0.0.1', NULL, NULL),
(189, '127.0.0.1', NULL, NULL),
(190, '127.0.0.1', NULL, NULL),
(191, '127.0.0.1', NULL, NULL),
(192, '127.0.0.1', NULL, NULL),
(193, '127.0.0.1', NULL, NULL),
(194, '127.0.0.1', NULL, NULL),
(195, '127.0.0.1', NULL, NULL),
(196, '127.0.0.1', NULL, NULL),
(197, '127.0.0.1', NULL, NULL),
(198, '127.0.0.1', NULL, NULL),
(199, '127.0.0.1', NULL, NULL),
(200, '127.0.0.1', NULL, NULL),
(201, '127.0.0.1', NULL, NULL),
(202, '127.0.0.1', NULL, NULL),
(203, '127.0.0.1', NULL, NULL),
(204, '127.0.0.1', NULL, NULL),
(205, '127.0.0.1', NULL, NULL),
(206, '127.0.0.1', NULL, NULL),
(207, '127.0.0.1', NULL, NULL),
(208, '127.0.0.1', NULL, NULL),
(209, '127.0.0.1', NULL, NULL),
(210, '127.0.0.1', NULL, NULL),
(211, '127.0.0.1', NULL, NULL),
(212, '127.0.0.1', NULL, NULL),
(213, '127.0.0.1', NULL, NULL),
(214, '127.0.0.1', NULL, NULL),
(215, '127.0.0.1', NULL, NULL),
(216, '127.0.0.1', NULL, NULL),
(217, '127.0.0.1', NULL, NULL),
(218, '127.0.0.1', NULL, NULL),
(219, '127.0.0.1', NULL, NULL),
(220, '127.0.0.1', NULL, NULL),
(221, '127.0.0.1', NULL, NULL),
(222, '127.0.0.1', NULL, NULL),
(223, '127.0.0.1', NULL, NULL),
(224, '127.0.0.1', NULL, NULL),
(225, '127.0.0.1', NULL, NULL),
(226, '127.0.0.1', NULL, NULL),
(227, '127.0.0.1', NULL, NULL),
(228, '127.0.0.1', NULL, NULL),
(229, '127.0.0.1', NULL, NULL),
(230, '127.0.0.1', NULL, NULL),
(231, '127.0.0.1', NULL, NULL),
(232, '127.0.0.1', NULL, NULL),
(233, '127.0.0.1', NULL, NULL),
(234, '127.0.0.1', NULL, NULL),
(235, '127.0.0.1', NULL, NULL),
(236, '127.0.0.1', NULL, NULL),
(237, '127.0.0.1', NULL, NULL),
(238, '127.0.0.1', NULL, NULL),
(239, '127.0.0.1', NULL, NULL),
(240, '127.0.0.1', NULL, NULL),
(241, '127.0.0.1', NULL, NULL),
(242, '127.0.0.1', NULL, NULL),
(243, '127.0.0.1', NULL, NULL),
(244, '127.0.0.1', NULL, NULL),
(245, '127.0.0.1', NULL, NULL),
(246, '127.0.0.1', NULL, NULL),
(247, '127.0.0.1', NULL, NULL),
(248, '127.0.0.1', NULL, NULL),
(249, '127.0.0.1', NULL, NULL),
(250, '127.0.0.1', NULL, NULL),
(251, '127.0.0.1', NULL, NULL),
(252, '127.0.0.1', NULL, NULL),
(253, '127.0.0.1', NULL, NULL),
(254, '127.0.0.1', NULL, NULL),
(255, '127.0.0.1', NULL, NULL),
(256, '127.0.0.1', NULL, NULL),
(257, '127.0.0.1', NULL, NULL),
(258, '127.0.0.1', NULL, NULL),
(259, '127.0.0.1', NULL, NULL),
(260, '127.0.0.1', NULL, NULL),
(261, '127.0.0.1', NULL, NULL),
(262, '127.0.0.1', NULL, NULL),
(263, '127.0.0.1', NULL, NULL),
(264, '127.0.0.1', NULL, NULL),
(265, '127.0.0.1', NULL, NULL),
(266, '127.0.0.1', NULL, NULL),
(267, '127.0.0.1', NULL, NULL),
(268, '127.0.0.1', NULL, NULL),
(269, '127.0.0.1', NULL, NULL),
(270, '127.0.0.1', NULL, NULL),
(271, '127.0.0.1', NULL, NULL),
(272, '127.0.0.1', NULL, NULL),
(273, '127.0.0.1', NULL, NULL),
(274, '127.0.0.1', NULL, NULL),
(275, '127.0.0.1', NULL, NULL),
(276, '127.0.0.1', NULL, NULL),
(277, '127.0.0.1', NULL, NULL),
(278, '127.0.0.1', NULL, NULL),
(279, '127.0.0.1', NULL, NULL),
(280, '127.0.0.1', NULL, NULL),
(281, '127.0.0.1', NULL, NULL),
(282, '127.0.0.1', NULL, NULL),
(283, '127.0.0.1', NULL, NULL),
(284, '127.0.0.1', NULL, NULL),
(285, '127.0.0.1', NULL, NULL),
(286, '127.0.0.1', NULL, NULL),
(287, '127.0.0.1', NULL, NULL),
(288, '127.0.0.1', NULL, NULL),
(289, '127.0.0.1', NULL, NULL),
(290, '127.0.0.1', NULL, NULL),
(291, '127.0.0.1', NULL, NULL),
(292, '127.0.0.1', NULL, NULL),
(293, '127.0.0.1', NULL, NULL),
(294, '127.0.0.1', NULL, NULL),
(295, '127.0.0.1', NULL, NULL),
(296, '127.0.0.1', NULL, NULL),
(297, '127.0.0.1', NULL, NULL),
(298, '127.0.0.1', NULL, NULL),
(299, '127.0.0.1', NULL, NULL),
(300, '127.0.0.1', NULL, NULL),
(301, '127.0.0.1', NULL, NULL),
(302, '127.0.0.1', NULL, NULL),
(303, '127.0.0.1', NULL, NULL),
(304, '127.0.0.1', NULL, NULL),
(305, '127.0.0.1', NULL, NULL),
(306, '127.0.0.1', NULL, NULL),
(307, '127.0.0.1', NULL, NULL),
(308, '127.0.0.1', NULL, NULL),
(309, '127.0.0.1', NULL, NULL),
(310, '127.0.0.1', NULL, NULL),
(311, '127.0.0.1', NULL, NULL),
(312, '127.0.0.1', NULL, NULL),
(313, '127.0.0.1', NULL, NULL),
(314, '127.0.0.1', NULL, NULL),
(315, '127.0.0.1', NULL, NULL),
(316, '127.0.0.1', NULL, NULL),
(317, '127.0.0.1', NULL, NULL),
(318, '127.0.0.1', NULL, NULL),
(319, '127.0.0.1', NULL, NULL),
(320, '127.0.0.1', NULL, NULL),
(321, '127.0.0.1', NULL, NULL),
(322, '127.0.0.1', NULL, NULL),
(323, '127.0.0.1', NULL, NULL),
(324, '127.0.0.1', NULL, NULL),
(325, '127.0.0.1', NULL, NULL),
(326, '127.0.0.1', NULL, NULL),
(327, '127.0.0.1', NULL, NULL),
(328, '127.0.0.1', NULL, NULL),
(329, '127.0.0.1', NULL, NULL),
(330, '127.0.0.1', NULL, NULL),
(331, '127.0.0.1', NULL, NULL),
(332, '127.0.0.1', NULL, NULL),
(333, '127.0.0.1', NULL, NULL),
(334, '127.0.0.1', NULL, NULL),
(335, '127.0.0.1', NULL, NULL),
(336, '127.0.0.1', NULL, NULL),
(337, '127.0.0.1', NULL, NULL),
(338, '127.0.0.1', NULL, NULL),
(339, '127.0.0.1', NULL, NULL),
(340, '127.0.0.1', NULL, NULL),
(341, '127.0.0.1', NULL, NULL),
(342, '127.0.0.1', NULL, NULL),
(343, '127.0.0.1', NULL, NULL),
(344, '127.0.0.1', NULL, NULL),
(345, '127.0.0.1', NULL, NULL),
(346, '127.0.0.1', NULL, NULL),
(347, '127.0.0.1', NULL, NULL),
(348, '127.0.0.1', NULL, NULL),
(349, '127.0.0.1', NULL, NULL),
(350, '127.0.0.1', NULL, NULL),
(351, '127.0.0.1', NULL, NULL),
(352, '127.0.0.1', NULL, NULL),
(353, '127.0.0.1', NULL, NULL),
(354, '127.0.0.1', NULL, NULL),
(355, '127.0.0.1', NULL, NULL),
(356, '127.0.0.1', NULL, NULL),
(357, '127.0.0.1', NULL, NULL),
(358, '127.0.0.1', NULL, NULL),
(359, '127.0.0.1', NULL, NULL),
(360, '127.0.0.1', NULL, NULL),
(361, '127.0.0.1', NULL, NULL),
(362, '127.0.0.1', NULL, NULL),
(363, '127.0.0.1', NULL, NULL),
(364, '127.0.0.1', NULL, NULL),
(365, '127.0.0.1', NULL, NULL),
(366, '127.0.0.1', NULL, NULL),
(367, '127.0.0.1', NULL, NULL),
(368, '127.0.0.1', NULL, NULL),
(369, '127.0.0.1', NULL, NULL),
(370, '127.0.0.1', NULL, NULL),
(371, '127.0.0.1', NULL, NULL),
(372, '127.0.0.1', NULL, NULL),
(373, '127.0.0.1', NULL, NULL),
(374, '127.0.0.1', NULL, NULL),
(375, '127.0.0.1', NULL, NULL),
(376, '127.0.0.1', NULL, NULL),
(377, '127.0.0.1', NULL, NULL),
(378, '127.0.0.1', NULL, NULL),
(379, '127.0.0.1', NULL, NULL),
(380, '127.0.0.1', NULL, NULL),
(381, '127.0.0.1', NULL, NULL),
(382, '127.0.0.1', NULL, NULL),
(383, '127.0.0.1', NULL, NULL),
(384, '127.0.0.1', NULL, NULL),
(385, '127.0.0.1', NULL, NULL),
(386, '127.0.0.1', NULL, NULL),
(387, '127.0.0.1', NULL, NULL),
(388, '127.0.0.1', NULL, NULL),
(389, '127.0.0.1', NULL, NULL),
(390, '127.0.0.1', NULL, NULL),
(391, '127.0.0.1', NULL, NULL),
(392, '127.0.0.1', NULL, NULL),
(393, '127.0.0.1', NULL, NULL),
(394, '127.0.0.1', NULL, NULL),
(395, '127.0.0.1', NULL, NULL),
(396, '127.0.0.1', NULL, NULL),
(397, '127.0.0.1', NULL, NULL),
(398, '127.0.0.1', NULL, NULL),
(399, '127.0.0.1', NULL, NULL),
(400, '127.0.0.1', NULL, NULL),
(401, '127.0.0.1', NULL, NULL),
(402, '127.0.0.1', NULL, NULL),
(403, '127.0.0.1', NULL, NULL),
(404, '127.0.0.1', NULL, NULL),
(405, '127.0.0.1', NULL, NULL),
(406, '127.0.0.1', NULL, NULL),
(407, '127.0.0.1', NULL, NULL),
(408, '127.0.0.1', NULL, NULL),
(409, '127.0.0.1', NULL, NULL),
(410, '127.0.0.1', NULL, NULL),
(411, '127.0.0.1', NULL, NULL),
(412, '127.0.0.1', NULL, NULL),
(413, '127.0.0.1', NULL, NULL),
(414, '127.0.0.1', NULL, NULL),
(415, '127.0.0.1', NULL, NULL),
(416, '127.0.0.1', NULL, NULL),
(417, '127.0.0.1', NULL, NULL),
(418, '127.0.0.1', NULL, NULL),
(419, '127.0.0.1', NULL, NULL),
(420, '127.0.0.1', NULL, NULL),
(421, '127.0.0.1', NULL, NULL),
(422, '127.0.0.1', NULL, NULL),
(423, '127.0.0.1', NULL, NULL),
(424, '127.0.0.1', NULL, NULL),
(425, '127.0.0.1', NULL, NULL),
(426, '127.0.0.1', NULL, NULL),
(427, '127.0.0.1', NULL, NULL),
(428, '127.0.0.1', NULL, NULL),
(429, '127.0.0.1', NULL, NULL),
(430, '127.0.0.1', NULL, NULL),
(431, '127.0.0.1', NULL, NULL),
(432, '127.0.0.1', NULL, NULL),
(433, '127.0.0.1', NULL, NULL),
(434, '127.0.0.1', NULL, NULL),
(435, '127.0.0.1', NULL, NULL),
(436, '127.0.0.1', NULL, NULL),
(437, '127.0.0.1', NULL, NULL),
(438, '127.0.0.1', NULL, NULL),
(439, '127.0.0.1', NULL, NULL),
(440, '127.0.0.1', NULL, NULL),
(441, '127.0.0.1', NULL, NULL),
(442, '127.0.0.1', NULL, NULL),
(443, '127.0.0.1', NULL, NULL),
(444, '127.0.0.1', NULL, NULL),
(445, '127.0.0.1', NULL, NULL),
(446, '127.0.0.1', NULL, NULL),
(447, '127.0.0.1', NULL, NULL),
(448, '127.0.0.1', NULL, NULL),
(449, '127.0.0.1', NULL, NULL),
(450, '127.0.0.1', NULL, NULL),
(451, '127.0.0.1', NULL, NULL),
(452, '127.0.0.1', NULL, NULL),
(453, '127.0.0.1', NULL, NULL),
(454, '127.0.0.1', NULL, NULL),
(455, '127.0.0.1', NULL, NULL),
(456, '127.0.0.1', NULL, NULL),
(457, '127.0.0.1', NULL, NULL),
(458, '127.0.0.1', NULL, NULL),
(459, '127.0.0.1', NULL, NULL),
(460, '127.0.0.1', NULL, NULL),
(461, '127.0.0.1', NULL, NULL),
(462, '127.0.0.1', NULL, NULL),
(463, '127.0.0.1', NULL, NULL),
(464, '127.0.0.1', NULL, NULL),
(465, '127.0.0.1', NULL, NULL),
(466, '127.0.0.1', NULL, NULL),
(467, '127.0.0.1', NULL, NULL),
(468, '127.0.0.1', NULL, NULL),
(469, '127.0.0.1', NULL, NULL),
(470, '127.0.0.1', NULL, NULL),
(471, '127.0.0.1', NULL, NULL),
(472, '127.0.0.1', NULL, NULL),
(473, '127.0.0.1', NULL, NULL),
(474, '127.0.0.1', NULL, NULL),
(475, '127.0.0.1', NULL, NULL),
(476, '127.0.0.1', NULL, NULL),
(477, '127.0.0.1', NULL, NULL),
(478, '127.0.0.1', NULL, NULL),
(479, '127.0.0.1', NULL, NULL),
(480, '127.0.0.1', NULL, NULL),
(481, '127.0.0.1', NULL, NULL),
(482, '127.0.0.1', NULL, NULL),
(483, '127.0.0.1', NULL, NULL),
(484, '127.0.0.1', NULL, NULL),
(485, '127.0.0.1', NULL, NULL),
(486, '127.0.0.1', NULL, NULL),
(487, '127.0.0.1', NULL, NULL),
(488, '127.0.0.1', NULL, NULL),
(489, '127.0.0.1', NULL, NULL),
(490, '127.0.0.1', NULL, NULL),
(491, '127.0.0.1', NULL, NULL),
(492, '127.0.0.1', NULL, NULL),
(493, '127.0.0.1', NULL, NULL),
(494, '127.0.0.1', NULL, NULL),
(495, '127.0.0.1', NULL, NULL),
(496, '127.0.0.1', NULL, NULL),
(497, '127.0.0.1', NULL, NULL),
(498, '127.0.0.1', NULL, NULL),
(499, '127.0.0.1', NULL, NULL),
(500, '127.0.0.1', NULL, NULL),
(501, '127.0.0.1', NULL, NULL),
(502, '127.0.0.1', NULL, NULL),
(503, '127.0.0.1', NULL, NULL),
(504, '127.0.0.1', NULL, NULL),
(505, '127.0.0.1', NULL, NULL),
(506, '127.0.0.1', NULL, NULL),
(507, '127.0.0.1', NULL, NULL),
(508, '127.0.0.1', NULL, NULL),
(509, '127.0.0.1', NULL, NULL),
(510, '127.0.0.1', NULL, NULL),
(511, '127.0.0.1', NULL, NULL),
(512, '127.0.0.1', NULL, NULL),
(513, '127.0.0.1', NULL, NULL),
(514, '127.0.0.1', NULL, NULL),
(515, '127.0.0.1', NULL, NULL),
(516, '127.0.0.1', NULL, NULL),
(517, '127.0.0.1', NULL, NULL),
(518, '127.0.0.1', NULL, NULL),
(519, '127.0.0.1', NULL, NULL),
(520, '127.0.0.1', NULL, NULL),
(521, '127.0.0.1', NULL, NULL),
(522, '127.0.0.1', NULL, NULL),
(523, '127.0.0.1', NULL, NULL),
(524, '127.0.0.1', NULL, NULL),
(525, '127.0.0.1', NULL, NULL),
(526, '127.0.0.1', NULL, NULL),
(527, '127.0.0.1', NULL, NULL),
(528, '127.0.0.1', NULL, NULL),
(529, '127.0.0.1', NULL, NULL),
(530, '127.0.0.1', NULL, NULL),
(531, '127.0.0.1', NULL, NULL),
(532, '127.0.0.1', NULL, NULL),
(533, '127.0.0.1', NULL, NULL),
(534, '127.0.0.1', NULL, NULL),
(535, '127.0.0.1', NULL, NULL),
(536, '127.0.0.1', NULL, NULL),
(537, '127.0.0.1', NULL, NULL),
(538, '127.0.0.1', NULL, NULL),
(539, '127.0.0.1', NULL, NULL),
(540, '127.0.0.1', NULL, NULL),
(541, '127.0.0.1', NULL, NULL),
(542, '127.0.0.1', NULL, NULL),
(543, '127.0.0.1', NULL, NULL),
(544, '127.0.0.1', NULL, NULL),
(545, '127.0.0.1', NULL, NULL),
(546, '127.0.0.1', NULL, NULL),
(547, '127.0.0.1', NULL, NULL),
(548, '127.0.0.1', NULL, NULL),
(549, '127.0.0.1', NULL, NULL),
(550, '127.0.0.1', NULL, NULL),
(551, '127.0.0.1', NULL, NULL),
(552, '127.0.0.1', NULL, NULL),
(553, '127.0.0.1', NULL, NULL),
(554, '127.0.0.1', NULL, NULL),
(555, '127.0.0.1', NULL, NULL),
(556, '127.0.0.1', NULL, NULL),
(557, '127.0.0.1', NULL, NULL),
(558, '127.0.0.1', NULL, NULL),
(559, '127.0.0.1', NULL, NULL),
(560, '127.0.0.1', NULL, NULL),
(561, '127.0.0.1', NULL, NULL),
(562, '127.0.0.1', NULL, NULL),
(563, '127.0.0.1', NULL, NULL),
(564, '127.0.0.1', NULL, NULL),
(565, '127.0.0.1', NULL, NULL),
(566, '127.0.0.1', NULL, NULL),
(567, '127.0.0.1', NULL, NULL),
(568, '127.0.0.1', NULL, NULL),
(569, '127.0.0.1', NULL, NULL),
(570, '127.0.0.1', NULL, NULL),
(571, '127.0.0.1', NULL, NULL),
(572, '127.0.0.1', NULL, NULL),
(573, '127.0.0.1', NULL, NULL),
(574, '127.0.0.1', NULL, NULL),
(575, '127.0.0.1', NULL, NULL),
(576, '127.0.0.1', NULL, NULL),
(577, '127.0.0.1', NULL, NULL),
(578, '127.0.0.1', NULL, NULL),
(579, '127.0.0.1', NULL, NULL),
(580, '127.0.0.1', NULL, NULL),
(581, '127.0.0.1', NULL, NULL),
(582, '127.0.0.1', NULL, NULL),
(583, '127.0.0.1', NULL, NULL),
(584, '127.0.0.1', NULL, NULL),
(585, '127.0.0.1', NULL, NULL),
(586, '127.0.0.1', NULL, NULL),
(587, '127.0.0.1', NULL, NULL),
(588, '127.0.0.1', NULL, NULL),
(589, '127.0.0.1', NULL, NULL),
(590, '127.0.0.1', NULL, NULL),
(591, '127.0.0.1', NULL, NULL),
(592, '127.0.0.1', NULL, NULL),
(593, '127.0.0.1', NULL, NULL),
(594, '127.0.0.1', NULL, NULL),
(595, '127.0.0.1', NULL, NULL),
(596, '127.0.0.1', NULL, NULL),
(597, '127.0.0.1', NULL, NULL),
(598, '127.0.0.1', NULL, NULL),
(599, '127.0.0.1', NULL, NULL),
(600, '127.0.0.1', NULL, NULL),
(601, '127.0.0.1', NULL, NULL),
(602, '127.0.0.1', NULL, NULL),
(603, '127.0.0.1', NULL, NULL),
(604, '127.0.0.1', NULL, NULL),
(605, '127.0.0.1', NULL, NULL),
(606, '127.0.0.1', NULL, NULL),
(607, '127.0.0.1', NULL, NULL),
(608, '127.0.0.1', NULL, NULL),
(609, '127.0.0.1', NULL, NULL),
(610, '127.0.0.1', NULL, NULL),
(611, '127.0.0.1', NULL, NULL),
(612, '127.0.0.1', NULL, NULL),
(613, '127.0.0.1', NULL, NULL),
(614, '127.0.0.1', NULL, NULL),
(615, '127.0.0.1', NULL, NULL),
(616, '127.0.0.1', NULL, NULL),
(617, '127.0.0.1', NULL, NULL),
(618, '127.0.0.1', NULL, NULL),
(619, '127.0.0.1', NULL, NULL),
(620, '127.0.0.1', NULL, NULL),
(621, '127.0.0.1', NULL, NULL),
(622, '127.0.0.1', NULL, NULL),
(623, '127.0.0.1', NULL, NULL),
(624, '127.0.0.1', NULL, NULL),
(625, '127.0.0.1', NULL, NULL),
(626, '127.0.0.1', NULL, NULL),
(627, '127.0.0.1', NULL, NULL),
(628, '127.0.0.1', NULL, NULL),
(629, '127.0.0.1', NULL, NULL),
(630, '127.0.0.1', NULL, NULL),
(631, '127.0.0.1', NULL, NULL),
(632, '127.0.0.1', NULL, NULL),
(633, '127.0.0.1', NULL, NULL),
(634, '127.0.0.1', NULL, NULL),
(635, '127.0.0.1', NULL, NULL),
(636, '127.0.0.1', NULL, NULL),
(637, '127.0.0.1', NULL, NULL),
(638, '127.0.0.1', NULL, NULL),
(639, '127.0.0.1', NULL, NULL),
(640, '127.0.0.1', NULL, NULL),
(641, '127.0.0.1', NULL, NULL),
(642, '127.0.0.1', NULL, NULL),
(643, '127.0.0.1', NULL, NULL),
(644, '127.0.0.1', NULL, NULL),
(645, '127.0.0.1', NULL, NULL),
(646, '127.0.0.1', NULL, NULL),
(647, '127.0.0.1', NULL, NULL),
(648, '127.0.0.1', NULL, NULL),
(649, '127.0.0.1', NULL, NULL),
(650, '127.0.0.1', NULL, NULL),
(651, '127.0.0.1', NULL, NULL),
(652, '127.0.0.1', NULL, NULL),
(653, '127.0.0.1', NULL, NULL),
(654, '127.0.0.1', NULL, NULL),
(655, '127.0.0.1', NULL, NULL),
(656, '127.0.0.1', NULL, NULL),
(657, '127.0.0.1', NULL, NULL),
(658, '127.0.0.1', NULL, NULL),
(659, '127.0.0.1', NULL, NULL),
(660, '127.0.0.1', NULL, NULL),
(661, '127.0.0.1', NULL, NULL),
(662, '127.0.0.1', NULL, NULL),
(663, '127.0.0.1', NULL, NULL),
(664, '127.0.0.1', NULL, NULL),
(665, '127.0.0.1', NULL, NULL),
(666, '127.0.0.1', NULL, NULL),
(667, '127.0.0.1', NULL, NULL),
(668, '127.0.0.1', NULL, NULL),
(669, '127.0.0.1', NULL, NULL),
(670, '127.0.0.1', NULL, NULL),
(671, '127.0.0.1', NULL, NULL),
(672, '127.0.0.1', NULL, NULL),
(673, '127.0.0.1', NULL, NULL),
(674, '127.0.0.1', NULL, NULL),
(675, '127.0.0.1', NULL, NULL),
(676, '127.0.0.1', NULL, NULL),
(677, '127.0.0.1', NULL, NULL),
(678, '127.0.0.1', NULL, NULL),
(679, '127.0.0.1', NULL, NULL),
(680, '127.0.0.1', NULL, NULL),
(681, '127.0.0.1', NULL, NULL),
(682, '127.0.0.1', NULL, NULL),
(683, '127.0.0.1', NULL, NULL),
(684, '127.0.0.1', NULL, NULL),
(685, '127.0.0.1', NULL, NULL),
(686, '127.0.0.1', NULL, NULL),
(687, '127.0.0.1', NULL, NULL),
(688, '127.0.0.1', NULL, NULL),
(689, '127.0.0.1', NULL, NULL),
(690, '127.0.0.1', NULL, NULL),
(691, '127.0.0.1', NULL, NULL),
(692, '127.0.0.1', NULL, NULL),
(693, '127.0.0.1', NULL, NULL),
(694, '127.0.0.1', NULL, NULL),
(695, '127.0.0.1', NULL, NULL),
(696, '127.0.0.1', NULL, NULL),
(697, '127.0.0.1', NULL, NULL),
(698, '127.0.0.1', NULL, NULL),
(699, '127.0.0.1', NULL, NULL),
(700, '127.0.0.1', NULL, NULL),
(701, '127.0.0.1', NULL, NULL),
(702, '127.0.0.1', NULL, NULL),
(703, '127.0.0.1', NULL, NULL),
(704, '127.0.0.1', NULL, NULL),
(705, '127.0.0.1', NULL, NULL),
(706, '127.0.0.1', NULL, NULL),
(707, '127.0.0.1', NULL, NULL),
(708, '127.0.0.1', NULL, NULL),
(709, '127.0.0.1', NULL, NULL),
(710, '127.0.0.1', NULL, NULL),
(711, '127.0.0.1', NULL, NULL),
(712, '127.0.0.1', NULL, NULL),
(713, '127.0.0.1', NULL, NULL),
(714, '127.0.0.1', NULL, NULL),
(715, '127.0.0.1', NULL, NULL),
(716, '127.0.0.1', NULL, NULL),
(717, '127.0.0.1', NULL, NULL),
(718, '127.0.0.1', NULL, NULL),
(719, '127.0.0.1', NULL, NULL),
(720, '127.0.0.1', NULL, NULL),
(721, '127.0.0.1', NULL, NULL),
(722, '127.0.0.1', NULL, NULL),
(723, '127.0.0.1', NULL, NULL),
(724, '127.0.0.1', NULL, NULL),
(725, '127.0.0.1', NULL, NULL),
(726, '127.0.0.1', NULL, NULL),
(727, '127.0.0.1', NULL, NULL),
(728, '127.0.0.1', NULL, NULL),
(729, '127.0.0.1', NULL, NULL),
(730, '127.0.0.1', NULL, NULL),
(731, '127.0.0.1', NULL, NULL),
(732, '127.0.0.1', NULL, NULL),
(733, '127.0.0.1', NULL, NULL),
(734, '127.0.0.1', NULL, NULL),
(735, '127.0.0.1', NULL, NULL),
(736, '127.0.0.1', NULL, NULL),
(737, '127.0.0.1', NULL, NULL),
(738, '127.0.0.1', NULL, NULL),
(739, '127.0.0.1', NULL, NULL),
(740, '127.0.0.1', NULL, NULL),
(741, '127.0.0.1', NULL, NULL),
(742, '127.0.0.1', NULL, NULL),
(743, '127.0.0.1', NULL, NULL),
(744, '127.0.0.1', NULL, NULL),
(745, '127.0.0.1', NULL, NULL),
(746, '127.0.0.1', NULL, NULL),
(747, '127.0.0.1', NULL, NULL),
(748, '127.0.0.1', NULL, NULL),
(749, '127.0.0.1', NULL, NULL),
(750, '127.0.0.1', NULL, NULL),
(751, '127.0.0.1', NULL, NULL),
(752, '127.0.0.1', NULL, NULL),
(753, '127.0.0.1', NULL, NULL),
(754, '127.0.0.1', NULL, NULL),
(755, '127.0.0.1', NULL, NULL),
(756, '127.0.0.1', NULL, NULL),
(757, '127.0.0.1', NULL, NULL),
(758, '127.0.0.1', NULL, NULL),
(759, '127.0.0.1', NULL, NULL),
(760, '127.0.0.1', NULL, NULL),
(761, '127.0.0.1', NULL, NULL),
(762, '127.0.0.1', NULL, NULL),
(763, '127.0.0.1', NULL, NULL),
(764, '127.0.0.1', NULL, NULL),
(765, '127.0.0.1', NULL, NULL),
(766, '127.0.0.1', NULL, NULL),
(767, '127.0.0.1', NULL, NULL),
(768, '127.0.0.1', NULL, NULL),
(769, '127.0.0.1', NULL, NULL),
(770, '127.0.0.1', NULL, NULL),
(771, '127.0.0.1', NULL, NULL),
(772, '127.0.0.1', NULL, NULL),
(773, '127.0.0.1', NULL, NULL),
(774, '127.0.0.1', NULL, NULL),
(775, '127.0.0.1', NULL, NULL),
(776, '127.0.0.1', NULL, NULL),
(777, '127.0.0.1', NULL, NULL),
(778, '127.0.0.1', NULL, NULL),
(779, '127.0.0.1', NULL, NULL),
(780, '127.0.0.1', NULL, NULL),
(781, '127.0.0.1', NULL, NULL),
(782, '127.0.0.1', NULL, NULL),
(783, '127.0.0.1', NULL, NULL),
(784, '127.0.0.1', NULL, NULL),
(785, '127.0.0.1', NULL, NULL),
(786, '127.0.0.1', NULL, NULL),
(787, '127.0.0.1', NULL, NULL),
(788, '127.0.0.1', NULL, NULL),
(789, '127.0.0.1', NULL, NULL),
(790, '127.0.0.1', NULL, NULL),
(791, '127.0.0.1', NULL, NULL),
(792, '127.0.0.1', NULL, NULL),
(793, '127.0.0.1', NULL, NULL),
(794, '127.0.0.1', NULL, NULL),
(795, '127.0.0.1', NULL, NULL),
(796, '127.0.0.1', NULL, NULL),
(797, '127.0.0.1', NULL, NULL),
(798, '127.0.0.1', NULL, NULL),
(799, '127.0.0.1', NULL, NULL),
(800, '127.0.0.1', NULL, NULL),
(801, '127.0.0.1', NULL, NULL),
(802, '127.0.0.1', NULL, NULL),
(803, '127.0.0.1', NULL, NULL),
(804, '127.0.0.1', NULL, NULL),
(805, '127.0.0.1', NULL, NULL),
(806, '127.0.0.1', NULL, NULL),
(807, '127.0.0.1', NULL, NULL),
(808, '127.0.0.1', NULL, NULL),
(809, '127.0.0.1', NULL, NULL),
(810, '127.0.0.1', NULL, NULL),
(811, '127.0.0.1', NULL, NULL),
(812, '127.0.0.1', NULL, NULL),
(813, '127.0.0.1', NULL, NULL),
(814, '127.0.0.1', NULL, NULL),
(815, '127.0.0.1', NULL, NULL),
(816, '127.0.0.1', NULL, NULL),
(817, '127.0.0.1', NULL, NULL),
(818, '127.0.0.1', NULL, NULL),
(819, '127.0.0.1', NULL, NULL),
(820, '127.0.0.1', NULL, NULL),
(821, '127.0.0.1', NULL, NULL),
(822, '127.0.0.1', NULL, NULL),
(823, '127.0.0.1', NULL, NULL),
(824, '127.0.0.1', NULL, NULL),
(825, '127.0.0.1', NULL, NULL),
(826, '127.0.0.1', NULL, NULL),
(827, '127.0.0.1', NULL, NULL),
(828, '127.0.0.1', NULL, NULL),
(829, '127.0.0.1', NULL, NULL),
(830, '127.0.0.1', NULL, NULL),
(831, '127.0.0.1', NULL, NULL),
(832, '127.0.0.1', NULL, NULL),
(833, '127.0.0.1', NULL, NULL),
(834, '127.0.0.1', NULL, NULL),
(835, '127.0.0.1', NULL, NULL),
(836, '127.0.0.1', NULL, NULL),
(837, '127.0.0.1', NULL, NULL),
(838, '127.0.0.1', NULL, NULL),
(839, '127.0.0.1', NULL, NULL),
(840, '127.0.0.1', NULL, NULL),
(841, '127.0.0.1', NULL, NULL),
(842, '127.0.0.1', NULL, NULL),
(843, '127.0.0.1', NULL, NULL),
(844, '127.0.0.1', NULL, NULL),
(845, '127.0.0.1', NULL, NULL),
(846, '127.0.0.1', NULL, NULL),
(847, '127.0.0.1', NULL, NULL),
(848, '127.0.0.1', NULL, NULL),
(849, '127.0.0.1', NULL, NULL),
(850, '127.0.0.1', NULL, NULL),
(851, '127.0.0.1', NULL, NULL),
(852, '127.0.0.1', NULL, NULL),
(853, '127.0.0.1', NULL, NULL),
(854, '127.0.0.1', NULL, NULL),
(855, '127.0.0.1', NULL, NULL),
(856, '127.0.0.1', NULL, NULL),
(857, '127.0.0.1', NULL, NULL),
(858, '127.0.0.1', NULL, NULL),
(859, '127.0.0.1', NULL, NULL),
(860, '127.0.0.1', NULL, NULL),
(861, '127.0.0.1', NULL, NULL),
(862, '127.0.0.1', NULL, NULL),
(863, '127.0.0.1', NULL, NULL),
(864, '127.0.0.1', NULL, NULL),
(865, '127.0.0.1', NULL, NULL),
(866, '127.0.0.1', NULL, NULL),
(867, '127.0.0.1', NULL, NULL),
(868, '127.0.0.1', NULL, NULL),
(869, '127.0.0.1', NULL, NULL),
(870, '127.0.0.1', NULL, NULL),
(871, '127.0.0.1', NULL, NULL),
(872, '127.0.0.1', NULL, NULL),
(873, '127.0.0.1', NULL, NULL),
(874, '127.0.0.1', NULL, NULL),
(875, '127.0.0.1', NULL, NULL),
(876, '127.0.0.1', NULL, NULL),
(877, '127.0.0.1', NULL, NULL),
(878, '127.0.0.1', NULL, NULL),
(879, '127.0.0.1', NULL, NULL),
(880, '127.0.0.1', NULL, NULL),
(881, '127.0.0.1', NULL, NULL),
(882, '127.0.0.1', NULL, NULL),
(883, '127.0.0.1', NULL, NULL),
(884, '127.0.0.1', NULL, NULL),
(885, '127.0.0.1', NULL, NULL),
(886, '127.0.0.1', NULL, NULL),
(887, '127.0.0.1', NULL, NULL),
(888, '127.0.0.1', NULL, NULL),
(889, '127.0.0.1', NULL, NULL),
(890, '127.0.0.1', NULL, NULL),
(891, '127.0.0.1', NULL, NULL),
(892, '127.0.0.1', NULL, NULL),
(893, '127.0.0.1', NULL, NULL),
(894, '127.0.0.1', NULL, NULL),
(895, '127.0.0.1', NULL, NULL),
(896, '127.0.0.1', NULL, NULL),
(897, '127.0.0.1', NULL, NULL),
(898, '127.0.0.1', NULL, NULL),
(899, '127.0.0.1', NULL, NULL),
(900, '127.0.0.1', NULL, NULL),
(901, '127.0.0.1', NULL, NULL),
(902, '127.0.0.1', NULL, NULL),
(903, '127.0.0.1', NULL, NULL),
(904, '127.0.0.1', NULL, NULL),
(905, '127.0.0.1', NULL, NULL),
(906, '127.0.0.1', NULL, NULL),
(907, '127.0.0.1', NULL, NULL),
(908, '127.0.0.1', NULL, NULL),
(909, '127.0.0.1', NULL, NULL),
(910, '127.0.0.1', NULL, NULL),
(911, '127.0.0.1', NULL, NULL),
(912, '127.0.0.1', NULL, NULL),
(913, '127.0.0.1', NULL, NULL),
(914, '127.0.0.1', NULL, NULL),
(915, '127.0.0.1', NULL, NULL),
(916, '127.0.0.1', NULL, NULL),
(917, '127.0.0.1', NULL, NULL),
(918, '127.0.0.1', NULL, NULL),
(919, '127.0.0.1', NULL, NULL),
(920, '127.0.0.1', NULL, NULL),
(921, '127.0.0.1', NULL, NULL),
(922, '127.0.0.1', NULL, NULL),
(923, '127.0.0.1', NULL, NULL),
(924, '127.0.0.1', NULL, NULL),
(925, '127.0.0.1', NULL, NULL),
(926, '127.0.0.1', NULL, NULL),
(927, '127.0.0.1', NULL, NULL),
(928, '127.0.0.1', NULL, NULL),
(929, '127.0.0.1', NULL, NULL),
(930, '127.0.0.1', NULL, NULL),
(931, '127.0.0.1', NULL, NULL),
(932, '127.0.0.1', NULL, NULL),
(933, '127.0.0.1', NULL, NULL),
(934, '127.0.0.1', NULL, NULL),
(935, '127.0.0.1', NULL, NULL),
(936, '127.0.0.1', NULL, NULL),
(937, '127.0.0.1', NULL, NULL),
(938, '127.0.0.1', NULL, NULL),
(939, '127.0.0.1', NULL, NULL),
(940, '127.0.0.1', NULL, NULL),
(941, '127.0.0.1', NULL, NULL),
(942, '127.0.0.1', NULL, NULL),
(943, '127.0.0.1', NULL, NULL),
(944, '127.0.0.1', NULL, NULL),
(945, '127.0.0.1', NULL, NULL),
(946, '127.0.0.1', NULL, NULL),
(947, '127.0.0.1', NULL, NULL),
(948, '127.0.0.1', NULL, NULL),
(949, '127.0.0.1', NULL, NULL),
(950, '127.0.0.1', NULL, NULL),
(951, '127.0.0.1', NULL, NULL),
(952, '127.0.0.1', NULL, NULL),
(953, '127.0.0.1', NULL, NULL),
(954, '127.0.0.1', NULL, NULL),
(955, '127.0.0.1', NULL, NULL),
(956, '127.0.0.1', NULL, NULL),
(957, '127.0.0.1', NULL, NULL),
(958, '127.0.0.1', NULL, NULL),
(959, '127.0.0.1', NULL, NULL),
(960, '127.0.0.1', NULL, NULL),
(961, '127.0.0.1', NULL, NULL),
(962, '127.0.0.1', NULL, NULL),
(963, '127.0.0.1', NULL, NULL),
(964, '127.0.0.1', NULL, NULL),
(965, '127.0.0.1', NULL, NULL),
(966, '127.0.0.1', NULL, NULL),
(967, '127.0.0.1', NULL, NULL),
(968, '127.0.0.1', NULL, NULL),
(969, '127.0.0.1', NULL, NULL),
(970, '127.0.0.1', NULL, NULL),
(971, '127.0.0.1', NULL, NULL),
(972, '127.0.0.1', NULL, NULL),
(973, '127.0.0.1', NULL, NULL),
(974, '127.0.0.1', NULL, NULL),
(975, '127.0.0.1', NULL, NULL),
(976, '127.0.0.1', NULL, NULL),
(977, '127.0.0.1', NULL, NULL),
(978, '127.0.0.1', NULL, NULL),
(979, '127.0.0.1', NULL, NULL),
(980, '127.0.0.1', NULL, NULL),
(981, '127.0.0.1', NULL, NULL),
(982, '127.0.0.1', NULL, NULL),
(983, '127.0.0.1', NULL, NULL),
(984, '127.0.0.1', NULL, NULL),
(985, '127.0.0.1', NULL, NULL),
(986, '127.0.0.1', NULL, NULL),
(987, '127.0.0.1', NULL, NULL),
(988, '127.0.0.1', NULL, NULL),
(989, '127.0.0.1', NULL, NULL),
(990, '127.0.0.1', NULL, NULL),
(991, '127.0.0.1', NULL, NULL),
(992, '127.0.0.1', NULL, NULL),
(993, '127.0.0.1', NULL, NULL),
(994, '127.0.0.1', NULL, NULL),
(995, '127.0.0.1', NULL, NULL),
(996, '127.0.0.1', NULL, NULL),
(997, '127.0.0.1', NULL, NULL),
(998, '127.0.0.1', NULL, NULL),
(999, '127.0.0.1', NULL, NULL),
(1000, '127.0.0.1', NULL, NULL),
(1001, '127.0.0.1', NULL, NULL),
(1002, '127.0.0.1', NULL, NULL),
(1003, '127.0.0.1', NULL, NULL),
(1004, '127.0.0.1', NULL, NULL),
(1005, '127.0.0.1', NULL, NULL),
(1006, '127.0.0.1', NULL, NULL),
(1007, '127.0.0.1', NULL, NULL),
(1008, '127.0.0.1', NULL, NULL),
(1009, '127.0.0.1', NULL, NULL),
(1010, '127.0.0.1', NULL, NULL),
(1011, '127.0.0.1', NULL, NULL),
(1012, '127.0.0.1', NULL, NULL),
(1013, '127.0.0.1', NULL, NULL),
(1014, '127.0.0.1', NULL, NULL),
(1015, '127.0.0.1', NULL, NULL),
(1016, '127.0.0.1', NULL, NULL),
(1017, '127.0.0.1', NULL, NULL),
(1018, '127.0.0.1', NULL, NULL),
(1019, '127.0.0.1', NULL, NULL),
(1020, '127.0.0.1', NULL, NULL),
(1021, '127.0.0.1', NULL, NULL),
(1022, '127.0.0.1', NULL, NULL),
(1023, '127.0.0.1', NULL, NULL),
(1024, '127.0.0.1', NULL, NULL),
(1025, '127.0.0.1', NULL, NULL),
(1026, '127.0.0.1', NULL, NULL),
(1027, '127.0.0.1', NULL, NULL),
(1028, '127.0.0.1', NULL, NULL),
(1029, '127.0.0.1', NULL, NULL),
(1030, '127.0.0.1', NULL, NULL),
(1031, '127.0.0.1', NULL, NULL),
(1032, '127.0.0.1', NULL, NULL),
(1033, '127.0.0.1', NULL, NULL),
(1034, '127.0.0.1', NULL, NULL),
(1035, '127.0.0.1', NULL, NULL),
(1036, '127.0.0.1', NULL, NULL),
(1037, '127.0.0.1', NULL, NULL),
(1038, '127.0.0.1', NULL, NULL),
(1039, '127.0.0.1', NULL, NULL),
(1040, '127.0.0.1', NULL, NULL),
(1041, '127.0.0.1', NULL, NULL),
(1042, '127.0.0.1', NULL, NULL),
(1043, '127.0.0.1', NULL, NULL),
(1044, '127.0.0.1', NULL, NULL),
(1045, '127.0.0.1', NULL, NULL),
(1046, '127.0.0.1', NULL, NULL),
(1047, '127.0.0.1', NULL, NULL),
(1048, '127.0.0.1', NULL, NULL),
(1049, '127.0.0.1', NULL, NULL),
(1050, '127.0.0.1', NULL, NULL),
(1051, '127.0.0.1', NULL, NULL),
(1052, '127.0.0.1', NULL, NULL),
(1053, '127.0.0.1', NULL, NULL),
(1054, '127.0.0.1', NULL, NULL),
(1055, '127.0.0.1', NULL, NULL),
(1056, '127.0.0.1', NULL, NULL),
(1057, '127.0.0.1', NULL, NULL),
(1058, '127.0.0.1', NULL, NULL),
(1059, '127.0.0.1', NULL, NULL),
(1060, '127.0.0.1', NULL, NULL),
(1061, '127.0.0.1', NULL, NULL),
(1062, '127.0.0.1', NULL, NULL),
(1063, '127.0.0.1', NULL, NULL),
(1064, '127.0.0.1', NULL, NULL),
(1065, '127.0.0.1', NULL, NULL),
(1066, '127.0.0.1', NULL, NULL),
(1067, '127.0.0.1', NULL, NULL),
(1068, '127.0.0.1', NULL, NULL),
(1069, '127.0.0.1', NULL, NULL),
(1070, '127.0.0.1', NULL, NULL),
(1071, '127.0.0.1', NULL, NULL),
(1072, '127.0.0.1', NULL, NULL),
(1073, '127.0.0.1', NULL, NULL),
(1074, '127.0.0.1', NULL, NULL),
(1075, '127.0.0.1', NULL, NULL),
(1076, '127.0.0.1', NULL, NULL),
(1077, '127.0.0.1', NULL, NULL),
(1078, '127.0.0.1', NULL, NULL),
(1079, '127.0.0.1', NULL, NULL),
(1080, '127.0.0.1', NULL, NULL),
(1081, '127.0.0.1', NULL, NULL),
(1082, '127.0.0.1', NULL, NULL),
(1083, '127.0.0.1', NULL, NULL),
(1084, '127.0.0.1', NULL, NULL),
(1085, '127.0.0.1', NULL, NULL),
(1086, '127.0.0.1', NULL, NULL),
(1087, '127.0.0.1', NULL, NULL),
(1088, '127.0.0.1', NULL, NULL),
(1089, '127.0.0.1', NULL, NULL),
(1090, '127.0.0.1', NULL, NULL),
(1091, '127.0.0.1', NULL, NULL),
(1092, '127.0.0.1', NULL, NULL),
(1093, '127.0.0.1', NULL, NULL),
(1094, '127.0.0.1', NULL, NULL),
(1095, '127.0.0.1', NULL, NULL),
(1096, '127.0.0.1', NULL, NULL),
(1097, '127.0.0.1', NULL, NULL),
(1098, '127.0.0.1', NULL, NULL),
(1099, '127.0.0.1', NULL, NULL),
(1100, '127.0.0.1', NULL, NULL),
(1101, '127.0.0.1', NULL, NULL),
(1102, '127.0.0.1', NULL, NULL),
(1103, '127.0.0.1', NULL, NULL),
(1104, '127.0.0.1', NULL, NULL),
(1105, '127.0.0.1', NULL, NULL),
(1106, '127.0.0.1', NULL, NULL),
(1107, '127.0.0.1', NULL, NULL),
(1108, '127.0.0.1', NULL, NULL),
(1109, '127.0.0.1', NULL, NULL),
(1110, '127.0.0.1', NULL, NULL),
(1111, '127.0.0.1', NULL, NULL),
(1112, '127.0.0.1', NULL, NULL),
(1113, '127.0.0.1', NULL, NULL),
(1114, '127.0.0.1', NULL, NULL),
(1115, '127.0.0.1', NULL, NULL),
(1116, '127.0.0.1', NULL, NULL),
(1117, '127.0.0.1', NULL, NULL),
(1118, '127.0.0.1', NULL, NULL),
(1119, '127.0.0.1', NULL, NULL),
(1120, '127.0.0.1', NULL, NULL),
(1121, '127.0.0.1', NULL, NULL),
(1122, '127.0.0.1', NULL, NULL),
(1123, '127.0.0.1', NULL, NULL),
(1124, '127.0.0.1', NULL, NULL),
(1125, '127.0.0.1', NULL, NULL),
(1126, '127.0.0.1', NULL, NULL),
(1127, '127.0.0.1', NULL, NULL),
(1128, '127.0.0.1', NULL, NULL),
(1129, '127.0.0.1', NULL, NULL),
(1130, '127.0.0.1', NULL, NULL),
(1131, '127.0.0.1', NULL, NULL),
(1132, '127.0.0.1', NULL, NULL),
(1133, '127.0.0.1', NULL, NULL),
(1134, '127.0.0.1', NULL, NULL),
(1135, '127.0.0.1', NULL, NULL),
(1136, '127.0.0.1', NULL, NULL),
(1137, '127.0.0.1', NULL, NULL),
(1138, '127.0.0.1', NULL, NULL),
(1139, '127.0.0.1', NULL, NULL),
(1140, '127.0.0.1', NULL, NULL),
(1141, '127.0.0.1', NULL, NULL),
(1142, '127.0.0.1', NULL, NULL),
(1143, '127.0.0.1', NULL, NULL),
(1144, '127.0.0.1', NULL, NULL),
(1145, '127.0.0.1', NULL, NULL),
(1146, '127.0.0.1', NULL, NULL),
(1147, '127.0.0.1', NULL, NULL),
(1148, '127.0.0.1', NULL, NULL),
(1149, '127.0.0.1', NULL, NULL),
(1150, '127.0.0.1', NULL, NULL),
(1151, '127.0.0.1', NULL, NULL),
(1152, '127.0.0.1', NULL, NULL),
(1153, '127.0.0.1', NULL, NULL),
(1154, '127.0.0.1', NULL, NULL),
(1155, '127.0.0.1', NULL, NULL),
(1156, '127.0.0.1', NULL, NULL),
(1157, '127.0.0.1', NULL, NULL),
(1158, '127.0.0.1', NULL, NULL),
(1159, '127.0.0.1', NULL, NULL),
(1160, '127.0.0.1', NULL, NULL),
(1161, '127.0.0.1', NULL, NULL),
(1162, '127.0.0.1', NULL, NULL),
(1163, '127.0.0.1', NULL, NULL),
(1164, '127.0.0.1', NULL, NULL),
(1165, '127.0.0.1', NULL, NULL),
(1166, '127.0.0.1', NULL, NULL),
(1167, '127.0.0.1', NULL, NULL),
(1168, '127.0.0.1', NULL, NULL),
(1169, '127.0.0.1', NULL, NULL),
(1170, '127.0.0.1', NULL, NULL),
(1171, '127.0.0.1', NULL, NULL),
(1172, '127.0.0.1', NULL, NULL),
(1173, '127.0.0.1', NULL, NULL),
(1174, '127.0.0.1', NULL, NULL),
(1175, '127.0.0.1', NULL, NULL),
(1176, '127.0.0.1', NULL, NULL),
(1177, '127.0.0.1', NULL, NULL),
(1178, '127.0.0.1', NULL, NULL),
(1179, '127.0.0.1', NULL, NULL),
(1180, '127.0.0.1', NULL, NULL),
(1181, '127.0.0.1', NULL, NULL),
(1182, '127.0.0.1', NULL, NULL),
(1183, '127.0.0.1', NULL, NULL),
(1184, '127.0.0.1', NULL, NULL),
(1185, '127.0.0.1', NULL, NULL),
(1186, '127.0.0.1', NULL, NULL),
(1187, '127.0.0.1', NULL, NULL),
(1188, '127.0.0.1', NULL, NULL),
(1189, '127.0.0.1', NULL, NULL),
(1190, '127.0.0.1', NULL, NULL),
(1191, '127.0.0.1', NULL, NULL),
(1192, '127.0.0.1', NULL, NULL),
(1193, '127.0.0.1', NULL, NULL),
(1194, '127.0.0.1', NULL, NULL),
(1195, '127.0.0.1', NULL, NULL),
(1196, '127.0.0.1', NULL, NULL),
(1197, '127.0.0.1', NULL, NULL),
(1198, '127.0.0.1', NULL, NULL),
(1199, '127.0.0.1', NULL, NULL),
(1200, '127.0.0.1', NULL, NULL),
(1201, '127.0.0.1', NULL, NULL),
(1202, '127.0.0.1', NULL, NULL),
(1203, '127.0.0.1', NULL, NULL),
(1204, '127.0.0.1', NULL, NULL),
(1205, '127.0.0.1', NULL, NULL),
(1206, '127.0.0.1', NULL, NULL),
(1207, '127.0.0.1', NULL, NULL),
(1208, '127.0.0.1', NULL, NULL),
(1209, '127.0.0.1', NULL, NULL),
(1210, '127.0.0.1', NULL, NULL),
(1211, '127.0.0.1', NULL, NULL),
(1212, '127.0.0.1', NULL, NULL),
(1213, '127.0.0.1', NULL, NULL),
(1214, '127.0.0.1', NULL, NULL),
(1215, '127.0.0.1', NULL, NULL),
(1216, '127.0.0.1', NULL, NULL),
(1217, '127.0.0.1', NULL, NULL),
(1218, '127.0.0.1', NULL, NULL),
(1219, '127.0.0.1', NULL, NULL),
(1220, '127.0.0.1', NULL, NULL),
(1221, '127.0.0.1', NULL, NULL),
(1222, '127.0.0.1', NULL, NULL),
(1223, '127.0.0.1', NULL, NULL),
(1224, '127.0.0.1', NULL, NULL),
(1225, '127.0.0.1', NULL, NULL),
(1226, '127.0.0.1', NULL, NULL),
(1227, '127.0.0.1', NULL, NULL),
(1228, '127.0.0.1', NULL, NULL),
(1229, '127.0.0.1', NULL, NULL),
(1230, '127.0.0.1', NULL, NULL),
(1231, '127.0.0.1', NULL, NULL),
(1232, '127.0.0.1', NULL, NULL),
(1233, '127.0.0.1', NULL, NULL),
(1234, '127.0.0.1', NULL, NULL),
(1235, '127.0.0.1', NULL, NULL),
(1236, '127.0.0.1', NULL, NULL),
(1237, '127.0.0.1', NULL, NULL),
(1238, '127.0.0.1', NULL, NULL),
(1239, '127.0.0.1', NULL, NULL),
(1240, '127.0.0.1', NULL, NULL),
(1241, '127.0.0.1', NULL, NULL),
(1242, '127.0.0.1', NULL, NULL),
(1243, '127.0.0.1', NULL, NULL),
(1244, '127.0.0.1', NULL, NULL),
(1245, '127.0.0.1', NULL, NULL),
(1246, '127.0.0.1', NULL, NULL),
(1247, '127.0.0.1', NULL, NULL),
(1248, '127.0.0.1', NULL, NULL),
(1249, '127.0.0.1', NULL, NULL),
(1250, '127.0.0.1', NULL, NULL),
(1251, '127.0.0.1', NULL, NULL),
(1252, '127.0.0.1', NULL, NULL),
(1253, '127.0.0.1', NULL, NULL),
(1254, '127.0.0.1', NULL, NULL),
(1255, '127.0.0.1', NULL, NULL),
(1256, '127.0.0.1', NULL, NULL),
(1257, '127.0.0.1', NULL, NULL),
(1258, '127.0.0.1', NULL, NULL),
(1259, '127.0.0.1', NULL, NULL),
(1260, '127.0.0.1', NULL, NULL),
(1261, '127.0.0.1', NULL, NULL),
(1262, '127.0.0.1', NULL, NULL),
(1263, '127.0.0.1', NULL, NULL),
(1264, '127.0.0.1', NULL, NULL),
(1265, '127.0.0.1', NULL, NULL),
(1266, '127.0.0.1', NULL, NULL),
(1267, '127.0.0.1', NULL, NULL),
(1268, '127.0.0.1', NULL, NULL),
(1269, '127.0.0.1', NULL, NULL),
(1270, '127.0.0.1', NULL, NULL),
(1271, '127.0.0.1', NULL, NULL),
(1272, '127.0.0.1', NULL, NULL),
(1273, '127.0.0.1', NULL, NULL),
(1274, '127.0.0.1', NULL, NULL),
(1275, '127.0.0.1', NULL, NULL),
(1276, '127.0.0.1', NULL, NULL),
(1277, '127.0.0.1', NULL, NULL),
(1278, '127.0.0.1', NULL, NULL),
(1279, '127.0.0.1', NULL, NULL),
(1280, '127.0.0.1', NULL, NULL),
(1281, '127.0.0.1', NULL, NULL),
(1282, '127.0.0.1', NULL, NULL),
(1283, '127.0.0.1', NULL, NULL),
(1284, '127.0.0.1', NULL, NULL),
(1285, '127.0.0.1', NULL, NULL),
(1286, '127.0.0.1', NULL, NULL),
(1287, '127.0.0.1', NULL, NULL),
(1288, '127.0.0.1', NULL, NULL),
(1289, '127.0.0.1', NULL, NULL),
(1290, '127.0.0.1', NULL, NULL),
(1291, '127.0.0.1', NULL, NULL),
(1292, '127.0.0.1', NULL, NULL),
(1293, '127.0.0.1', NULL, NULL),
(1294, '127.0.0.1', NULL, NULL),
(1295, '127.0.0.1', NULL, NULL),
(1296, '127.0.0.1', NULL, NULL),
(1297, '127.0.0.1', NULL, NULL),
(1298, '127.0.0.1', NULL, NULL),
(1299, '127.0.0.1', NULL, NULL),
(1300, '127.0.0.1', NULL, NULL),
(1301, '127.0.0.1', NULL, NULL),
(1302, '127.0.0.1', NULL, NULL),
(1303, '127.0.0.1', NULL, NULL),
(1304, '127.0.0.1', NULL, NULL),
(1305, '127.0.0.1', NULL, NULL),
(1306, '127.0.0.1', NULL, NULL),
(1307, '127.0.0.1', NULL, NULL),
(1308, '127.0.0.1', NULL, NULL),
(1309, '127.0.0.1', NULL, NULL),
(1310, '127.0.0.1', NULL, NULL),
(1311, '127.0.0.1', NULL, NULL),
(1312, '127.0.0.1', NULL, NULL),
(1313, '127.0.0.1', NULL, NULL),
(1314, '127.0.0.1', NULL, NULL),
(1315, '127.0.0.1', NULL, NULL),
(1316, '127.0.0.1', NULL, NULL),
(1317, '127.0.0.1', NULL, NULL),
(1318, '127.0.0.1', NULL, NULL),
(1319, '127.0.0.1', NULL, NULL),
(1320, '127.0.0.1', NULL, NULL),
(1321, '127.0.0.1', NULL, NULL),
(1322, '127.0.0.1', NULL, NULL),
(1323, '127.0.0.1', NULL, NULL),
(1324, '127.0.0.1', NULL, NULL),
(1325, '127.0.0.1', NULL, NULL),
(1326, '127.0.0.1', NULL, NULL),
(1327, '127.0.0.1', NULL, NULL),
(1328, '127.0.0.1', NULL, NULL),
(1329, '127.0.0.1', NULL, NULL),
(1330, '127.0.0.1', NULL, NULL),
(1331, '127.0.0.1', NULL, NULL),
(1332, '127.0.0.1', NULL, NULL),
(1333, '127.0.0.1', NULL, NULL),
(1334, '127.0.0.1', NULL, NULL),
(1335, '127.0.0.1', NULL, NULL),
(1336, '127.0.0.1', NULL, NULL),
(1337, '127.0.0.1', NULL, NULL),
(1338, '127.0.0.1', NULL, NULL),
(1339, '127.0.0.1', NULL, NULL),
(1340, '127.0.0.1', NULL, NULL),
(1341, '127.0.0.1', NULL, NULL),
(1342, '127.0.0.1', NULL, NULL),
(1343, '127.0.0.1', NULL, NULL),
(1344, '127.0.0.1', NULL, NULL),
(1345, '127.0.0.1', NULL, NULL),
(1346, '127.0.0.1', NULL, NULL),
(1347, '127.0.0.1', NULL, NULL),
(1348, '127.0.0.1', NULL, NULL),
(1349, '127.0.0.1', NULL, NULL),
(1350, '127.0.0.1', NULL, NULL),
(1351, '127.0.0.1', NULL, NULL),
(1352, '127.0.0.1', NULL, NULL),
(1353, '127.0.0.1', NULL, NULL),
(1354, '127.0.0.1', NULL, NULL),
(1355, '127.0.0.1', NULL, NULL),
(1356, '127.0.0.1', NULL, NULL),
(1357, '127.0.0.1', NULL, NULL),
(1358, '127.0.0.1', NULL, NULL),
(1359, '127.0.0.1', NULL, NULL),
(1360, '127.0.0.1', NULL, NULL),
(1361, '127.0.0.1', NULL, NULL),
(1362, '127.0.0.1', NULL, NULL),
(1363, '127.0.0.1', NULL, NULL),
(1364, '127.0.0.1', NULL, NULL),
(1365, '127.0.0.1', NULL, NULL),
(1366, '127.0.0.1', NULL, NULL),
(1367, '127.0.0.1', NULL, NULL),
(1368, '127.0.0.1', NULL, NULL),
(1369, '127.0.0.1', NULL, NULL),
(1370, '127.0.0.1', NULL, NULL),
(1371, '127.0.0.1', NULL, NULL),
(1372, '127.0.0.1', NULL, NULL),
(1373, '127.0.0.1', NULL, NULL),
(1374, '127.0.0.1', NULL, NULL),
(1375, '127.0.0.1', NULL, NULL),
(1376, '127.0.0.1', NULL, NULL),
(1377, '127.0.0.1', NULL, NULL),
(1378, '127.0.0.1', NULL, NULL),
(1379, '127.0.0.1', NULL, NULL),
(1380, '127.0.0.1', NULL, NULL),
(1381, '127.0.0.1', NULL, NULL),
(1382, '127.0.0.1', NULL, NULL),
(1383, '127.0.0.1', NULL, NULL),
(1384, '127.0.0.1', NULL, NULL),
(1385, '127.0.0.1', NULL, NULL),
(1386, '127.0.0.1', NULL, NULL),
(1387, '127.0.0.1', NULL, NULL),
(1388, '127.0.0.1', NULL, NULL),
(1389, '127.0.0.1', NULL, NULL),
(1390, '127.0.0.1', NULL, NULL),
(1391, '127.0.0.1', NULL, NULL),
(1392, '127.0.0.1', NULL, NULL),
(1393, '127.0.0.1', NULL, NULL),
(1394, '127.0.0.1', NULL, NULL),
(1395, '127.0.0.1', NULL, NULL),
(1396, '127.0.0.1', NULL, NULL),
(1397, '127.0.0.1', NULL, NULL),
(1398, '127.0.0.1', NULL, NULL),
(1399, '127.0.0.1', NULL, NULL),
(1400, '127.0.0.1', NULL, NULL),
(1401, '127.0.0.1', NULL, NULL),
(1402, '127.0.0.1', NULL, NULL),
(1403, '127.0.0.1', NULL, NULL),
(1404, '127.0.0.1', NULL, NULL),
(1405, '127.0.0.1', NULL, NULL),
(1406, '127.0.0.1', NULL, NULL),
(1407, '127.0.0.1', NULL, NULL),
(1408, '127.0.0.1', NULL, NULL),
(1409, '127.0.0.1', NULL, NULL),
(1410, '127.0.0.1', NULL, NULL),
(1411, '127.0.0.1', NULL, NULL),
(1412, '127.0.0.1', NULL, NULL),
(1413, '127.0.0.1', NULL, NULL),
(1414, '127.0.0.1', NULL, NULL),
(1415, '127.0.0.1', NULL, NULL),
(1416, '127.0.0.1', NULL, NULL),
(1417, '127.0.0.1', NULL, NULL),
(1418, '127.0.0.1', NULL, NULL),
(1419, '127.0.0.1', NULL, NULL),
(1420, '127.0.0.1', NULL, NULL),
(1421, '127.0.0.1', NULL, NULL),
(1422, '127.0.0.1', NULL, NULL),
(1423, '127.0.0.1', NULL, NULL),
(1424, '127.0.0.1', NULL, NULL),
(1425, '127.0.0.1', NULL, NULL),
(1426, '127.0.0.1', NULL, NULL),
(1427, '127.0.0.1', NULL, NULL),
(1428, '127.0.0.1', NULL, NULL),
(1429, '127.0.0.1', NULL, NULL),
(1430, '127.0.0.1', NULL, NULL),
(1431, '127.0.0.1', NULL, NULL),
(1432, '127.0.0.1', NULL, NULL),
(1433, '127.0.0.1', NULL, NULL),
(1434, '127.0.0.1', NULL, NULL),
(1435, '127.0.0.1', NULL, NULL),
(1436, '127.0.0.1', NULL, NULL),
(1437, '127.0.0.1', NULL, NULL),
(1438, '127.0.0.1', NULL, NULL),
(1439, '127.0.0.1', NULL, NULL),
(1440, '127.0.0.1', NULL, NULL),
(1441, '127.0.0.1', NULL, NULL),
(1442, '127.0.0.1', NULL, NULL),
(1443, '127.0.0.1', NULL, NULL),
(1444, '127.0.0.1', NULL, NULL),
(1445, '127.0.0.1', NULL, NULL),
(1446, '127.0.0.1', NULL, NULL),
(1447, '127.0.0.1', NULL, NULL),
(1448, '127.0.0.1', NULL, NULL),
(1449, '127.0.0.1', NULL, NULL),
(1450, '127.0.0.1', NULL, NULL),
(1451, '127.0.0.1', NULL, NULL),
(1452, '127.0.0.1', NULL, NULL),
(1453, '127.0.0.1', NULL, NULL),
(1454, '127.0.0.1', NULL, NULL),
(1455, '127.0.0.1', NULL, NULL),
(1456, '127.0.0.1', NULL, NULL),
(1457, '127.0.0.1', NULL, NULL),
(1458, '127.0.0.1', NULL, NULL),
(1459, '127.0.0.1', NULL, NULL),
(1460, '127.0.0.1', NULL, NULL),
(1461, '127.0.0.1', NULL, NULL),
(1462, '127.0.0.1', NULL, NULL),
(1463, '127.0.0.1', NULL, NULL),
(1464, '127.0.0.1', NULL, NULL),
(1465, '127.0.0.1', NULL, NULL),
(1466, '127.0.0.1', NULL, NULL),
(1467, '127.0.0.1', NULL, NULL),
(1468, '127.0.0.1', NULL, NULL),
(1469, '127.0.0.1', NULL, NULL),
(1470, '127.0.0.1', NULL, NULL),
(1471, '::1', NULL, NULL),
(1472, '::1', NULL, NULL),
(1473, '::1', NULL, NULL),
(1474, '::1', NULL, NULL),
(1475, '::1', NULL, NULL),
(1476, '::1', NULL, NULL),
(1477, '::1', NULL, NULL),
(1478, '::1', NULL, NULL),
(1479, '::1', NULL, NULL),
(1480, '::1', NULL, NULL),
(1481, '::1', NULL, NULL),
(1482, '::1', NULL, NULL),
(1483, '127.0.0.1', NULL, NULL),
(1484, '127.0.0.1', NULL, NULL),
(1485, '127.0.0.1', NULL, NULL),
(1486, '127.0.0.1', NULL, NULL),
(1487, '127.0.0.1', NULL, NULL),
(1488, '127.0.0.1', NULL, NULL),
(1489, '127.0.0.1', NULL, NULL),
(1490, '127.0.0.1', NULL, NULL),
(1491, '127.0.0.1', NULL, NULL),
(1492, '127.0.0.1', NULL, NULL),
(1493, '127.0.0.1', NULL, NULL),
(1494, '127.0.0.1', NULL, NULL),
(1495, '127.0.0.1', NULL, NULL),
(1496, '127.0.0.1', NULL, NULL),
(1497, '127.0.0.1', NULL, NULL),
(1498, '127.0.0.1', NULL, NULL),
(1499, '127.0.0.1', NULL, NULL),
(1500, '127.0.0.1', NULL, NULL),
(1501, '127.0.0.1', NULL, NULL),
(1502, '127.0.0.1', NULL, NULL),
(1503, '127.0.0.1', NULL, NULL),
(1504, '127.0.0.1', NULL, NULL),
(1505, '127.0.0.1', NULL, NULL),
(1506, '127.0.0.1', NULL, NULL),
(1507, '127.0.0.1', NULL, NULL),
(1508, '127.0.0.1', NULL, NULL),
(1509, '127.0.0.1', NULL, NULL),
(1510, '127.0.0.1', NULL, NULL),
(1511, '127.0.0.1', NULL, NULL),
(1512, '127.0.0.1', NULL, NULL),
(1513, '127.0.0.1', NULL, NULL),
(1514, '127.0.0.1', NULL, NULL),
(1515, '127.0.0.1', NULL, NULL),
(1516, '127.0.0.1', NULL, NULL),
(1517, '127.0.0.1', NULL, NULL),
(1518, '127.0.0.1', NULL, NULL),
(1519, '127.0.0.1', NULL, NULL),
(1520, '127.0.0.1', NULL, NULL),
(1521, '127.0.0.1', NULL, NULL),
(1522, '127.0.0.1', NULL, NULL),
(1523, '127.0.0.1', NULL, NULL),
(1524, '127.0.0.1', NULL, NULL),
(1525, '127.0.0.1', NULL, NULL),
(1526, '127.0.0.1', NULL, NULL),
(1527, '127.0.0.1', NULL, NULL),
(1528, '127.0.0.1', NULL, NULL),
(1529, '127.0.0.1', NULL, NULL),
(1530, '127.0.0.1', NULL, NULL),
(1531, '127.0.0.1', NULL, NULL),
(1532, '127.0.0.1', NULL, NULL),
(1533, '127.0.0.1', NULL, NULL),
(1534, '127.0.0.1', NULL, NULL),
(1535, '127.0.0.1', NULL, NULL),
(1536, '127.0.0.1', NULL, NULL),
(1537, '127.0.0.1', NULL, NULL),
(1538, '127.0.0.1', NULL, NULL),
(1539, '127.0.0.1', NULL, NULL),
(1540, '127.0.0.1', NULL, NULL),
(1541, '127.0.0.1', NULL, NULL),
(1542, '127.0.0.1', NULL, NULL),
(1543, '127.0.0.1', NULL, NULL),
(1544, '127.0.0.1', NULL, NULL),
(1545, '127.0.0.1', NULL, NULL),
(1546, '127.0.0.1', NULL, NULL),
(1547, '127.0.0.1', NULL, NULL),
(1548, '127.0.0.1', NULL, NULL),
(1549, '127.0.0.1', NULL, NULL),
(1550, '127.0.0.1', NULL, NULL),
(1551, '127.0.0.1', NULL, NULL),
(1552, '127.0.0.1', NULL, NULL),
(1553, '127.0.0.1', NULL, NULL),
(1554, '127.0.0.1', NULL, NULL),
(1555, '127.0.0.1', NULL, NULL),
(1556, '127.0.0.1', NULL, NULL),
(1557, '127.0.0.1', NULL, NULL),
(1558, '127.0.0.1', NULL, NULL),
(1559, '127.0.0.1', NULL, NULL),
(1560, '98.65.32.2', NULL, NULL),
(1561, '127.0.0.1', NULL, NULL),
(1562, '127.0.0.1', NULL, NULL),
(1563, '127.0.0.1', NULL, NULL),
(1564, '127.0.0.1', NULL, NULL),
(1565, '127.0.0.1', NULL, NULL),
(1566, '127.0.0.1', NULL, NULL),
(1567, '98.65.32.2', NULL, NULL),
(1568, '98.65.32.2', NULL, NULL),
(1569, '98.65.32.2', NULL, NULL),
(1570, '127.0.0.1', NULL, NULL),
(1571, '127.0.0.1', NULL, NULL),
(1572, '127.0.0.1', NULL, NULL),
(1573, '127.0.0.1', NULL, NULL),
(1574, '127.0.0.1', NULL, NULL),
(1575, '127.0.0.1', NULL, NULL),
(1576, '127.0.0.1', NULL, NULL),
(1577, '98.65.32.2', NULL, NULL),
(1578, '98.65.32.2', NULL, NULL),
(1579, '98.65.32.2', NULL, NULL),
(1580, '98.65.32.2', NULL, NULL),
(1581, '98.65.32.2', NULL, NULL),
(1582, '98.65.32.2', NULL, NULL),
(1583, '127.0.0.1', NULL, NULL),
(1584, '127.0.0.1', NULL, NULL),
(1585, '127.0.0.1', NULL, NULL),
(1586, '127.0.0.1', NULL, NULL),
(1587, '127.0.0.1', NULL, NULL),
(1588, '127.0.0.1', NULL, NULL),
(1589, '127.0.0.1', NULL, NULL),
(1590, '127.0.0.1', NULL, NULL),
(1591, '127.0.0.1', NULL, NULL),
(1592, '127.0.0.1', NULL, NULL),
(1593, '127.0.0.1', NULL, NULL),
(1594, '127.0.0.1', NULL, NULL),
(1595, '127.0.0.1', NULL, NULL),
(1596, '127.0.0.1', NULL, NULL),
(1597, '127.0.0.1', NULL, NULL),
(1598, '127.0.0.1', NULL, NULL),
(1599, '127.0.0.1', NULL, NULL),
(1600, '127.0.0.1', NULL, NULL),
(1601, '127.0.0.1', NULL, NULL),
(1602, '127.0.0.1', NULL, NULL),
(1603, '127.0.0.1', NULL, NULL),
(1604, '127.0.0.1', NULL, NULL),
(1605, '127.0.0.1', NULL, NULL),
(1606, '127.0.0.1', NULL, NULL),
(1607, '127.0.0.1', NULL, NULL),
(1608, '127.0.0.1', NULL, NULL),
(1609, '127.0.0.1', NULL, NULL),
(1610, '98.65.32.8', NULL, NULL),
(1611, '98.65.32.5', NULL, NULL),
(1612, '98.65.32.5', NULL, NULL),
(1613, '98.65.32.5', NULL, NULL),
(1614, '98.65.32.5', NULL, NULL),
(1615, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(1616, '98.65.32.5', NULL, NULL),
(1617, '98.65.32.5', NULL, NULL),
(1618, '98.65.32.5', NULL, NULL),
(1619, '98.65.32.5', NULL, NULL),
(1620, '98.65.32.5', NULL, NULL),
(1621, '98.65.32.5', NULL, NULL),
(1622, '98.65.32.5', NULL, NULL),
(1623, '127.0.0.1', NULL, NULL),
(1624, '127.0.0.1', NULL, NULL),
(1625, '127.0.0.1', NULL, NULL),
(1626, '127.0.0.1', NULL, NULL),
(1627, '127.0.0.1', NULL, NULL),
(1628, '127.0.0.1', NULL, NULL),
(1629, '127.0.0.1', NULL, NULL),
(1630, '127.0.0.1', NULL, NULL),
(1631, '127.0.0.1', NULL, NULL),
(1632, '127.0.0.1', NULL, NULL),
(1633, '127.0.0.1', NULL, NULL),
(1634, '127.0.0.1', NULL, NULL),
(1635, '127.0.0.1', NULL, NULL),
(1636, '127.0.0.1', NULL, NULL),
(1637, '127.0.0.1', NULL, NULL),
(1638, '127.0.0.1', NULL, NULL),
(1639, '127.0.0.1', NULL, NULL),
(1640, '127.0.0.1', NULL, NULL),
(1641, '127.0.0.1', NULL, NULL),
(1642, '127.0.0.1', NULL, NULL),
(1643, '127.0.0.1', NULL, NULL),
(1644, '127.0.0.1', NULL, NULL),
(1645, '127.0.0.1', NULL, NULL),
(1646, '127.0.0.1', NULL, NULL),
(1647, '127.0.0.1', NULL, NULL),
(1648, '127.0.0.1', NULL, NULL),
(1649, '127.0.0.1', NULL, NULL),
(1650, '127.0.0.1', NULL, NULL),
(1651, '127.0.0.1', NULL, NULL);
INSERT INTO `ip_addresses` (`id`, `ip_address`, `created_at`, `updated_at`) VALUES
(1652, '127.0.0.1', NULL, NULL),
(1653, '127.0.0.1', NULL, NULL),
(1654, '127.0.0.1', NULL, NULL),
(1655, '127.0.0.1', NULL, NULL),
(1656, '127.0.0.1', NULL, NULL),
(1657, '127.0.0.1', NULL, NULL),
(1658, '127.0.0.1', NULL, NULL),
(1659, '127.0.0.1', NULL, NULL),
(1660, '127.0.0.1', NULL, NULL),
(1661, '127.0.0.1', NULL, NULL),
(1662, '127.0.0.1', NULL, NULL),
(1663, '127.0.0.1', NULL, NULL),
(1664, '127.0.0.1', NULL, NULL),
(1665, '127.0.0.1', NULL, NULL),
(1666, '127.0.0.1', NULL, NULL),
(1667, '127.0.0.1', NULL, NULL),
(1668, '127.0.0.1', NULL, NULL),
(1669, '127.0.0.1', NULL, NULL),
(1670, '127.0.0.1', NULL, NULL),
(1671, '127.0.0.1', NULL, NULL),
(1672, '127.0.0.1', NULL, NULL),
(1673, '127.0.0.1', NULL, NULL),
(1674, '127.0.0.1', NULL, NULL),
(1675, '127.0.0.1', NULL, NULL),
(1676, '127.0.0.1', NULL, NULL),
(1677, '127.0.0.1', NULL, NULL),
(1678, '127.0.0.1', NULL, NULL),
(1679, '127.0.0.1', NULL, NULL),
(1680, '127.0.0.1', NULL, NULL),
(1681, '127.0.0.1', NULL, NULL),
(1682, '127.0.0.1', NULL, NULL),
(1683, '127.0.0.1', NULL, NULL),
(1684, '127.0.0.1', NULL, NULL),
(1685, '127.0.0.1', NULL, NULL),
(1686, '127.0.0.1', NULL, NULL),
(1687, '127.0.0.1', NULL, NULL),
(1688, '127.0.0.1', NULL, NULL),
(1689, '127.0.0.1', NULL, NULL),
(1690, '127.0.0.1', NULL, NULL),
(1691, '127.0.0.1', NULL, NULL),
(1692, '127.0.0.1', NULL, NULL),
(1693, '127.0.0.1', NULL, NULL),
(1694, '127.0.0.1', NULL, NULL),
(1695, '127.0.0.1', NULL, NULL),
(1696, '127.0.0.1', NULL, NULL),
(1697, '127.0.0.1', NULL, NULL),
(1698, '127.0.0.1', NULL, NULL),
(1699, '127.0.0.1', NULL, NULL),
(1700, '127.0.0.1', NULL, NULL),
(1701, '127.0.0.1', NULL, NULL),
(1702, '127.0.0.1', NULL, NULL),
(1703, '127.0.0.1', NULL, NULL),
(1704, '127.0.0.1', NULL, NULL),
(1705, '127.0.0.1', NULL, NULL),
(1706, '127.0.0.1', NULL, NULL),
(1707, '127.0.0.1', NULL, NULL),
(1708, '127.0.0.1', NULL, NULL),
(1709, '98.65.32.5', NULL, NULL),
(1710, '98.65.32.5', NULL, NULL),
(1711, '98.65.32.5', NULL, NULL),
(1712, '98.65.32.5', NULL, NULL),
(1713, '127.0.0.1', NULL, NULL),
(1714, '127.0.0.1', NULL, NULL),
(1715, '127.0.0.1', NULL, NULL),
(1716, '127.0.0.1', NULL, NULL),
(1717, '127.0.0.1', NULL, NULL),
(1718, '127.0.0.1', NULL, NULL),
(1719, '127.0.0.1', NULL, NULL),
(1720, '127.0.0.1', NULL, NULL),
(1721, '127.0.0.1', NULL, NULL),
(1722, '127.0.0.1', NULL, NULL),
(1723, '127.0.0.1', NULL, NULL),
(1724, '98.65.32.5', NULL, NULL),
(1725, '98.65.32.5', NULL, NULL),
(1726, '98.65.32.5', NULL, NULL),
(1727, '98.65.32.5', NULL, NULL),
(1728, '98.65.32.5', NULL, NULL),
(1729, '98.65.32.5', NULL, NULL),
(1730, '98.65.32.5', NULL, NULL),
(1731, '98.65.32.5', NULL, NULL),
(1732, '98.65.32.5', NULL, NULL),
(1733, '98.65.32.5', NULL, NULL),
(1734, '98.65.32.5', NULL, NULL),
(1735, '98.65.32.5', NULL, NULL),
(1736, '98.65.32.5', NULL, NULL),
(1737, '98.65.32.5', NULL, NULL),
(1738, '98.65.32.5', NULL, NULL),
(1739, '98.65.32.5', NULL, NULL),
(1740, '98.65.32.5', NULL, NULL),
(1741, '98.65.32.5', NULL, NULL),
(1742, '98.65.32.5', NULL, NULL),
(1743, '98.65.32.5', NULL, NULL),
(1744, '98.65.32.5', NULL, NULL),
(1745, '98.65.32.5', NULL, NULL),
(1746, '98.65.32.5', NULL, NULL),
(1747, '98.65.32.5', NULL, NULL),
(1748, '98.65.32.5', NULL, NULL),
(1749, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(1750, '98.65.32.5', NULL, NULL),
(1751, '98.65.32.5', NULL, NULL),
(1752, '98.65.32.5', NULL, NULL),
(1753, '98.65.32.5', NULL, NULL),
(1754, '98.65.32.5', NULL, NULL),
(1755, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(1756, '98.65.32.5', NULL, NULL),
(1757, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(1758, '98.65.32.5', NULL, NULL),
(1759, '98.65.32.5', NULL, NULL),
(1760, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(1761, '98.65.32.5', NULL, NULL),
(1762, '98.65.32.5', NULL, NULL),
(1763, '98.65.32.5', NULL, NULL),
(1764, '98.65.32.5', NULL, NULL),
(1765, '127.0.0.1', NULL, NULL),
(1766, '98.65.32.5', NULL, NULL),
(1767, '98.65.32.5', NULL, NULL),
(1768, '98.65.32.5', NULL, NULL),
(1769, '98.65.32.5', NULL, NULL),
(1770, '98.65.32.5', NULL, NULL),
(1771, '98.65.32.5', NULL, NULL),
(1772, '98.65.32.5', NULL, NULL),
(1773, '98.65.32.5', NULL, NULL),
(1774, '98.65.32.5', NULL, NULL),
(1775, '98.65.32.5', NULL, NULL),
(1776, '98.65.32.5', NULL, NULL),
(1777, '98.65.32.5', NULL, NULL),
(1778, '98.65.32.5', NULL, NULL),
(1779, '98.65.32.5', NULL, NULL),
(1780, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(1781, '98.65.32.5', NULL, NULL),
(1782, '98.65.32.5', NULL, NULL),
(1783, '98.65.32.5', NULL, NULL),
(1784, '98.65.32.5', NULL, NULL),
(1785, '98.65.32.5', NULL, NULL),
(1786, '98.65.32.5', NULL, NULL),
(1787, '98.65.32.5', NULL, NULL),
(1788, '98.65.32.5', NULL, NULL),
(1789, '98.65.32.5', NULL, NULL),
(1790, '98.65.32.5', NULL, NULL),
(1791, '98.65.32.5', NULL, NULL),
(1792, '98.65.32.5', NULL, NULL),
(1793, '127.0.0.1', NULL, NULL),
(1794, '127.0.0.1', NULL, NULL),
(1795, '127.0.0.1', NULL, NULL),
(1796, '127.0.0.1', NULL, NULL),
(1797, '127.0.0.1', NULL, NULL),
(1798, '127.0.0.1', NULL, NULL),
(1799, '127.0.0.1', NULL, NULL),
(1800, '127.0.0.1', NULL, NULL),
(1801, '127.0.0.1', NULL, NULL),
(1802, '127.0.0.1', NULL, NULL),
(1803, '127.0.0.1', NULL, NULL),
(1804, '127.0.0.1', NULL, NULL),
(1805, '127.0.0.1', NULL, NULL),
(1806, '127.0.0.1', NULL, NULL),
(1807, '127.0.0.1', NULL, NULL),
(1808, '127.0.0.1', NULL, NULL),
(1809, '127.0.0.1', NULL, NULL),
(1810, '127.0.0.1', NULL, NULL),
(1811, '127.0.0.1', NULL, NULL),
(1812, '127.0.0.1', NULL, NULL),
(1813, '127.0.0.1', NULL, NULL),
(1814, '127.0.0.1', NULL, NULL),
(1815, '127.0.0.1', NULL, NULL),
(1816, '127.0.0.1', NULL, NULL),
(1817, '127.0.0.1', NULL, NULL),
(1818, '127.0.0.1', NULL, NULL),
(1819, '127.0.0.1', NULL, NULL),
(1820, '98.65.32.5', NULL, NULL),
(1821, '98.65.32.5', NULL, NULL),
(1822, '98.65.32.5', NULL, NULL),
(1823, '98.65.32.5', NULL, NULL),
(1824, '127.0.0.1', NULL, NULL),
(1825, '127.0.0.1', NULL, NULL),
(1826, '127.0.0.1', NULL, NULL),
(1827, '127.0.0.1', NULL, NULL),
(1828, '127.0.0.1', NULL, NULL),
(1829, '127.0.0.1', NULL, NULL),
(1830, '127.0.0.1', NULL, NULL),
(1831, '127.0.0.1', NULL, NULL),
(1832, '127.0.0.1', NULL, NULL),
(1833, '127.0.0.1', NULL, NULL),
(1834, '127.0.0.1', NULL, NULL),
(1835, '127.0.0.1', NULL, NULL),
(1836, '127.0.0.1', NULL, NULL),
(1837, '127.0.0.1', NULL, NULL),
(1838, '127.0.0.1', NULL, NULL),
(1839, '127.0.0.1', NULL, NULL),
(1840, '98.65.32.5', NULL, NULL),
(1841, '127.0.0.1', NULL, NULL),
(1842, '127.0.0.1', NULL, NULL),
(1843, '127.0.0.1', NULL, NULL),
(1844, '127.0.0.1', NULL, NULL),
(1845, '127.0.0.1', NULL, NULL),
(1846, '127.0.0.1', NULL, NULL),
(1847, '127.0.0.1', NULL, NULL),
(1848, '127.0.0.1', NULL, NULL),
(1849, '127.0.0.1', NULL, NULL),
(1850, '127.0.0.1', NULL, NULL),
(1851, '127.0.0.1', NULL, NULL),
(1852, '127.0.0.1', NULL, NULL),
(1853, '127.0.0.1', NULL, NULL),
(1854, '127.0.0.1', NULL, NULL),
(1855, '127.0.0.1', NULL, NULL),
(1856, '127.0.0.1', NULL, NULL),
(1857, '127.0.0.1', NULL, NULL),
(1858, '127.0.0.1', NULL, NULL),
(1859, '127.0.0.1', NULL, NULL),
(1860, '127.0.0.1', NULL, NULL),
(1861, '127.0.0.1', NULL, NULL),
(1862, '127.0.0.1', NULL, NULL),
(1863, '127.0.0.1', NULL, NULL),
(1864, '127.0.0.1', NULL, NULL),
(1865, '127.0.0.1', NULL, NULL),
(1866, '127.0.0.1', NULL, NULL),
(1867, '127.0.0.1', NULL, NULL),
(1868, '127.0.0.1', NULL, NULL),
(1869, '127.0.0.1', NULL, NULL),
(1870, '127.0.0.1', NULL, NULL),
(1871, '127.0.0.1', NULL, NULL),
(1872, '127.0.0.1', NULL, NULL),
(1873, '127.0.0.1', NULL, NULL),
(1874, '127.0.0.1', NULL, NULL),
(1875, '98.65.32.5', NULL, NULL),
(1876, '98.65.32.5', NULL, NULL),
(1877, '98.65.32.5', NULL, NULL),
(1878, '98.65.32.5', NULL, NULL),
(1879, '98.65.32.5', NULL, NULL),
(1880, '98.65.32.5', NULL, NULL),
(1881, '98.65.32.5', NULL, NULL),
(1882, '98.65.32.5', NULL, NULL),
(1883, '98.65.32.5', NULL, NULL),
(1884, '98.65.32.5', NULL, NULL),
(1885, '98.65.32.5', NULL, NULL),
(1886, '127.0.0.1', NULL, NULL),
(1887, '127.0.0.1', NULL, NULL),
(1888, '127.0.0.1', NULL, NULL),
(1889, '127.0.0.1', NULL, NULL),
(1890, '98.65.32.5', NULL, NULL),
(1891, '98.65.32.5', NULL, NULL),
(1892, '98.65.32.5', NULL, NULL),
(1893, '98.65.32.5', NULL, NULL),
(1894, '98.65.32.5', NULL, NULL),
(1895, '98.65.32.5', NULL, NULL),
(1896, '98.65.32.5', NULL, NULL),
(1897, '127.0.0.1', NULL, NULL),
(1898, '127.0.0.1', NULL, NULL),
(1899, '127.0.0.1', NULL, NULL),
(1900, '127.0.0.1', NULL, NULL),
(1901, '98.65.32.4', NULL, NULL),
(1902, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(1903, '98.65.32.4', NULL, NULL),
(1904, '98.65.32.4', NULL, NULL),
(1905, '98.65.32.4', NULL, NULL),
(1906, '98.65.32.4', NULL, NULL),
(1907, '98.65.32.4', NULL, NULL),
(1908, '98.65.32.4', NULL, NULL),
(1909, '98.65.32.4', NULL, NULL),
(1910, '98.65.32.4', NULL, NULL),
(1911, '98.65.32.4', NULL, NULL),
(1912, '98.65.32.4', NULL, NULL),
(1913, '98.65.32.4', NULL, NULL),
(1914, '98.65.32.4', NULL, NULL),
(1915, '98.65.32.4', NULL, NULL),
(1916, '98.65.32.4', NULL, NULL),
(1917, '98.65.32.4', NULL, NULL),
(1918, '98.65.32.4', NULL, NULL),
(1919, '98.65.32.2', NULL, NULL),
(1920, '98.65.32.2', NULL, NULL),
(1921, '98.65.32.2', NULL, NULL),
(1922, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(1923, '98.65.32.2', NULL, NULL),
(1924, '98.65.32.2', NULL, NULL),
(1925, '98.65.32.2', NULL, NULL),
(1926, '98.65.32.2', NULL, NULL),
(1927, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(1928, '98.65.32.2', NULL, NULL),
(1929, '98.65.32.2', NULL, NULL),
(1930, '98.65.32.2', NULL, NULL),
(1931, '98.65.32.2', NULL, NULL),
(1932, '98.65.32.2', NULL, NULL),
(1933, '98.65.32.2', NULL, NULL),
(1934, '98.65.32.2', NULL, NULL),
(1935, '98.65.32.2', NULL, NULL),
(1936, '98.65.32.2', NULL, NULL),
(1937, '127.0.0.1', NULL, NULL),
(1938, '127.0.0.1', NULL, NULL),
(1939, '127.0.0.1', NULL, NULL),
(1940, '127.0.0.1', NULL, NULL),
(1941, '127.0.0.1', NULL, NULL),
(1942, '127.0.0.1', NULL, NULL),
(1943, '127.0.0.1', NULL, NULL),
(1944, '127.0.0.1', NULL, NULL),
(1945, '127.0.0.1', NULL, NULL),
(1946, '127.0.0.1', NULL, NULL),
(1947, '98.65.32.2', NULL, NULL),
(1948, '98.65.32.2', NULL, NULL),
(1949, '98.65.32.2', NULL, NULL),
(1950, '98.65.32.2', NULL, NULL),
(1951, '98.65.32.2', NULL, NULL),
(1952, '98.65.32.2', NULL, NULL),
(1953, '98.65.32.2', NULL, NULL),
(1954, '98.65.32.8', NULL, NULL),
(1955, '98.65.32.8', NULL, NULL),
(1956, '98.65.32.8', NULL, NULL),
(1957, '98.65.32.8', NULL, NULL),
(1958, '98.65.32.8', NULL, NULL),
(1959, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(1960, '98.65.32.8', NULL, NULL),
(1961, '98.65.32.8', NULL, NULL),
(1962, '98.65.32.8', NULL, NULL),
(1963, '98.65.32.8', NULL, NULL),
(1964, '98.65.32.8', NULL, NULL),
(1965, '98.65.32.8', NULL, NULL),
(1966, '98.65.32.8', NULL, NULL),
(1967, '98.65.32.8', NULL, NULL),
(1968, '98.65.32.8', NULL, NULL),
(1969, '98.65.32.8', NULL, NULL),
(1970, '98.65.32.8', NULL, NULL),
(1971, '98.65.32.8', NULL, NULL),
(1972, '98.65.32.8', NULL, NULL),
(1973, '98.65.32.8', NULL, NULL),
(1974, '98.65.32.8', NULL, NULL),
(1975, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(1976, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(1977, '98.65.32.8', NULL, NULL),
(1978, '98.65.32.8', NULL, NULL),
(1979, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(1980, '127.0.0.1', NULL, NULL),
(1981, '127.0.0.1', NULL, NULL),
(1982, '127.0.0.1', NULL, NULL),
(1983, '127.0.0.1', NULL, NULL),
(1984, '127.0.0.1', NULL, NULL),
(1985, '127.0.0.1', NULL, NULL),
(1986, '127.0.0.1', NULL, NULL),
(1987, '127.0.0.1', NULL, NULL),
(1988, '98.65.32.7', NULL, NULL),
(1989, '98.65.32.2', NULL, NULL),
(1990, '98.65.32.2', NULL, NULL),
(1991, '98.65.32.2', NULL, NULL),
(1992, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(1993, '98.65.32.2', NULL, NULL),
(1994, '98.65.32.2', NULL, NULL),
(1995, '98.65.32.2', NULL, NULL),
(1996, '98.65.32.2', NULL, NULL),
(1997, '98.65.32.2', NULL, NULL),
(1998, '98.65.32.2', NULL, NULL),
(1999, '98.65.32.2', NULL, NULL),
(2000, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2001, '98.65.32.2', NULL, NULL),
(2002, '98.65.32.2', NULL, NULL),
(2003, '98.65.32.2', NULL, NULL),
(2004, '98.65.32.2', NULL, NULL),
(2005, '127.0.0.1', NULL, NULL),
(2006, '127.0.0.1', NULL, NULL),
(2007, '98.65.32.2', NULL, NULL),
(2008, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2009, '98.65.32.2', NULL, NULL),
(2010, '98.65.32.2', NULL, NULL),
(2011, '98.65.32.2', NULL, NULL),
(2012, '98.65.32.2', NULL, NULL),
(2013, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2014, '98.65.32.2', NULL, NULL),
(2015, '98.65.32.2', NULL, NULL),
(2016, '98.65.32.4', NULL, NULL),
(2017, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2018, '98.65.32.4', NULL, NULL),
(2019, '98.65.32.4', NULL, NULL),
(2020, '98.65.32.4', NULL, NULL),
(2021, '98.65.32.4', NULL, NULL),
(2022, '98.65.32.4', NULL, NULL),
(2023, '98.65.32.4', NULL, NULL),
(2024, '98.65.32.4', NULL, NULL),
(2025, '98.65.32.4', NULL, NULL),
(2026, '98.65.32.4', NULL, NULL),
(2027, '98.65.32.4', NULL, NULL),
(2028, '98.65.32.4', NULL, NULL),
(2029, '98.65.32.4', NULL, NULL),
(2030, '98.65.32.4', NULL, NULL),
(2031, '98.65.32.2', NULL, NULL),
(2032, '98.65.32.2', NULL, NULL),
(2033, '98.65.32.2', NULL, NULL),
(2034, '98.65.32.2', NULL, NULL),
(2035, '98.65.32.2', NULL, NULL),
(2036, '98.65.32.4', NULL, NULL),
(2037, '98.65.32.4', NULL, NULL),
(2038, '98.65.32.4', NULL, NULL),
(2039, '98.65.32.4', NULL, NULL),
(2040, '98.65.32.4', NULL, NULL),
(2041, '98.65.32.4', NULL, NULL),
(2042, '98.65.32.4', NULL, NULL),
(2043, '98.65.32.4', NULL, NULL),
(2044, '98.65.32.4', NULL, NULL),
(2045, '98.65.32.4', NULL, NULL),
(2046, '98.65.32.4', NULL, NULL),
(2047, '98.65.32.4', NULL, NULL),
(2048, '98.65.32.4', NULL, NULL),
(2049, '98.65.32.4', NULL, NULL),
(2050, '98.65.32.4', NULL, NULL),
(2051, '98.65.32.4', NULL, NULL),
(2052, '98.65.32.4', NULL, NULL),
(2053, '98.65.32.4', NULL, NULL),
(2054, '98.65.32.4', NULL, NULL),
(2055, '98.65.32.4', NULL, NULL),
(2056, '98.65.32.4', NULL, NULL),
(2057, '127.0.0.1', NULL, NULL),
(2058, '127.0.0.1', NULL, NULL),
(2059, '127.0.0.1', NULL, NULL),
(2060, '127.0.0.1', NULL, NULL),
(2061, '127.0.0.1', NULL, NULL),
(2062, '127.0.0.1', NULL, NULL),
(2063, '127.0.0.1', NULL, NULL),
(2064, '127.0.0.1', NULL, NULL),
(2065, '127.0.0.1', NULL, NULL),
(2066, '127.0.0.1', NULL, NULL),
(2067, '127.0.0.1', NULL, NULL),
(2068, '127.0.0.1', NULL, NULL),
(2069, '127.0.0.1', NULL, NULL),
(2070, '127.0.0.1', NULL, NULL),
(2071, '127.0.0.1', NULL, NULL),
(2072, '127.0.0.1', NULL, NULL),
(2073, '127.0.0.1', NULL, NULL),
(2074, '127.0.0.1', NULL, NULL),
(2075, '127.0.0.1', NULL, NULL),
(2076, '127.0.0.1', NULL, NULL),
(2077, '127.0.0.1', NULL, NULL),
(2078, '127.0.0.1', NULL, NULL),
(2079, '127.0.0.1', NULL, NULL),
(2080, '127.0.0.1', NULL, NULL),
(2081, '98.65.32.2', NULL, NULL),
(2082, '98.65.32.2', NULL, NULL),
(2083, '98.65.32.2', NULL, NULL),
(2084, '98.65.32.2', NULL, NULL),
(2085, '98.65.32.2', NULL, NULL),
(2086, '98.65.32.2', NULL, NULL),
(2087, '98.65.32.2', NULL, NULL),
(2088, '98.65.32.2', NULL, NULL),
(2089, '98.65.32.2', NULL, NULL),
(2090, '98.65.32.2', NULL, NULL),
(2091, '98.65.32.2', NULL, NULL),
(2092, '98.65.32.2', NULL, NULL),
(2093, '98.65.32.2', NULL, NULL),
(2094, '98.65.32.2', NULL, NULL),
(2095, '98.65.32.2', NULL, NULL),
(2096, '98.65.32.2', NULL, NULL),
(2097, '98.65.32.2', NULL, NULL),
(2098, '98.65.32.2', NULL, NULL),
(2099, '98.65.32.2', NULL, NULL),
(2100, '98.65.32.2', NULL, NULL),
(2101, '98.65.32.2', NULL, NULL),
(2102, '98.65.32.2', NULL, NULL),
(2103, '98.65.32.2', NULL, NULL),
(2104, '98.65.32.2', NULL, NULL),
(2105, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2106, '98.65.32.2', NULL, NULL),
(2107, '98.65.32.2', NULL, NULL),
(2108, '98.65.32.2', NULL, NULL),
(2109, '98.65.32.2', NULL, NULL),
(2110, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2111, '98.65.32.2', NULL, NULL),
(2112, '98.65.32.2', NULL, NULL),
(2113, '98.65.32.2', NULL, NULL),
(2114, '98.65.32.2', NULL, NULL),
(2115, '98.65.32.2', NULL, NULL),
(2116, '98.65.32.2', NULL, NULL),
(2117, '98.65.32.2', NULL, NULL),
(2118, '98.65.32.2', NULL, NULL),
(2119, '98.65.32.2', NULL, NULL),
(2120, '98.65.32.2', NULL, NULL),
(2121, '98.65.32.2', NULL, NULL),
(2122, '98.65.32.2', NULL, NULL),
(2123, '98.65.32.2', NULL, NULL),
(2124, '98.65.32.2', NULL, NULL),
(2125, '98.65.32.2', NULL, NULL),
(2126, '98.65.32.2', NULL, NULL),
(2127, '98.65.32.2', NULL, NULL),
(2128, '98.65.32.2', NULL, NULL),
(2129, '98.65.32.2', NULL, NULL),
(2130, '98.65.32.2', NULL, NULL),
(2131, '98.65.32.2', NULL, NULL),
(2132, '98.65.32.2', NULL, NULL),
(2133, '98.65.32.2', NULL, NULL),
(2134, '98.65.32.2', NULL, NULL),
(2135, '98.65.32.2', NULL, NULL),
(2136, '98.65.32.2', NULL, NULL),
(2137, '98.65.32.2', NULL, NULL),
(2138, '98.65.32.2', NULL, NULL),
(2139, '98.65.32.2', NULL, NULL),
(2140, '98.65.32.2', NULL, NULL),
(2141, '98.65.32.2', NULL, NULL),
(2142, '98.65.32.2', NULL, NULL),
(2143, '98.65.32.2', NULL, NULL),
(2144, '98.65.32.2', NULL, NULL),
(2145, '98.65.32.2', NULL, NULL),
(2146, '98.65.32.2', NULL, NULL),
(2147, '98.65.32.2', NULL, NULL),
(2148, '98.65.32.2', NULL, NULL),
(2149, '98.65.32.2', NULL, NULL),
(2150, '98.65.32.2', NULL, NULL),
(2151, '98.65.32.2', NULL, NULL),
(2152, '98.65.32.2', NULL, NULL),
(2153, '98.65.32.2', NULL, NULL),
(2154, '98.65.32.2', NULL, NULL),
(2155, '98.65.32.2', NULL, NULL),
(2156, '98.65.32.2', NULL, NULL),
(2157, '98.65.32.2', NULL, NULL),
(2158, '98.65.32.2', NULL, NULL),
(2159, '98.65.32.2', NULL, NULL),
(2160, '98.65.32.2', NULL, NULL),
(2161, '98.65.32.2', NULL, NULL),
(2162, '98.65.32.2', NULL, NULL),
(2163, '98.65.32.2', NULL, NULL),
(2164, '98.65.32.2', NULL, NULL),
(2165, '98.65.32.2', NULL, NULL),
(2166, '98.65.32.2', NULL, NULL),
(2167, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2168, '98.65.32.2', NULL, NULL),
(2169, '98.65.32.2', NULL, NULL),
(2170, '98.65.32.2', NULL, NULL),
(2171, '98.65.32.2', NULL, NULL),
(2172, '98.65.32.2', NULL, NULL),
(2173, '98.65.32.2', NULL, NULL),
(2174, '98.65.32.2', NULL, NULL),
(2175, '98.65.32.2', NULL, NULL),
(2176, '98.65.32.2', NULL, NULL),
(2177, '98.65.32.2', NULL, NULL),
(2178, '98.65.32.2', NULL, NULL),
(2179, '127.0.0.1', NULL, NULL),
(2180, '127.0.0.1', NULL, NULL),
(2181, '127.0.0.1', NULL, NULL),
(2182, '127.0.0.1', NULL, NULL),
(2183, '127.0.0.1', NULL, NULL),
(2184, '98.65.32.2', NULL, NULL),
(2185, '98.65.32.2', NULL, NULL),
(2186, '98.65.32.2', NULL, NULL),
(2187, '98.65.32.2', NULL, NULL),
(2188, '98.65.32.2', NULL, NULL),
(2189, '98.65.32.2', NULL, NULL),
(2190, '98.65.32.2', NULL, NULL),
(2191, '98.65.32.2', NULL, NULL),
(2192, '98.65.32.2', NULL, NULL),
(2193, '98.65.32.2', NULL, NULL),
(2194, '98.65.32.2', NULL, NULL),
(2195, '98.65.32.2', NULL, NULL),
(2196, '98.65.32.2', NULL, NULL),
(2197, '98.65.32.2', NULL, NULL),
(2198, '98.65.32.2', NULL, NULL),
(2199, '98.65.32.2', NULL, NULL),
(2200, '98.65.32.2', NULL, NULL),
(2201, '98.65.32.2', NULL, NULL),
(2202, '98.65.32.2', NULL, NULL),
(2203, '98.65.32.2', NULL, NULL),
(2204, '98.65.32.2', NULL, NULL),
(2205, '98.65.32.2', NULL, NULL),
(2206, '98.65.32.2', NULL, NULL),
(2207, '98.65.32.2', NULL, NULL),
(2208, '98.65.32.2', NULL, NULL),
(2209, '98.65.32.2', NULL, NULL),
(2210, '98.65.32.2', NULL, NULL),
(2211, '98.65.32.2', NULL, NULL),
(2212, '98.65.32.2', NULL, NULL),
(2213, '98.65.32.2', NULL, NULL),
(2214, '98.65.32.2', NULL, NULL),
(2215, '98.65.32.2', NULL, NULL),
(2216, '98.65.32.2', NULL, NULL),
(2217, '98.65.32.2', NULL, NULL),
(2218, '98.65.32.2', NULL, NULL),
(2219, '98.65.32.2', NULL, NULL),
(2220, '98.65.32.2', NULL, NULL),
(2221, '98.65.32.2', NULL, NULL),
(2222, '98.65.32.2', NULL, NULL),
(2223, '98.65.32.2', NULL, NULL),
(2224, '98.65.32.2', NULL, NULL),
(2225, '98.65.32.2', NULL, NULL),
(2226, '98.65.32.2', NULL, NULL),
(2227, '98.65.32.2', NULL, NULL),
(2228, '98.65.32.2', NULL, NULL),
(2229, '98.65.32.2', NULL, NULL),
(2230, '98.65.32.2', NULL, NULL),
(2231, '98.65.32.2', NULL, NULL),
(2232, '98.65.32.2', NULL, NULL),
(2233, '98.65.32.2', NULL, NULL),
(2234, '98.65.32.2', NULL, NULL),
(2235, '98.65.32.2', NULL, NULL),
(2236, '127.0.0.1', NULL, NULL),
(2237, '127.0.0.1', NULL, NULL),
(2238, '98.65.32.2', NULL, NULL),
(2239, '98.65.32.2', NULL, NULL),
(2240, '98.65.32.2', NULL, NULL),
(2241, '98.65.32.2', NULL, NULL),
(2242, '98.65.32.2', NULL, NULL),
(2243, '98.65.32.2', NULL, NULL),
(2244, '98.65.32.2', NULL, NULL),
(2245, '98.65.32.2', NULL, NULL),
(2246, '98.65.32.2', NULL, NULL),
(2247, '98.65.32.2', NULL, NULL),
(2248, '98.65.32.2', NULL, NULL),
(2249, '98.65.32.2', NULL, NULL),
(2250, '98.65.32.2', NULL, NULL),
(2251, '98.65.32.2', NULL, NULL),
(2252, '98.65.32.2', NULL, NULL),
(2253, '98.65.32.2', NULL, NULL),
(2254, '98.65.32.2', NULL, NULL),
(2255, '98.65.32.2', NULL, NULL),
(2256, '98.65.32.2', NULL, NULL),
(2257, '98.65.32.2', NULL, NULL),
(2258, '98.65.32.2', NULL, NULL),
(2259, '98.65.32.2', NULL, NULL),
(2260, '98.65.32.2', NULL, NULL),
(2261, '98.65.32.2', NULL, NULL),
(2262, '98.65.32.2', NULL, NULL),
(2263, '98.65.32.2', NULL, NULL),
(2264, '98.65.32.2', NULL, NULL),
(2265, '98.65.32.2', NULL, NULL),
(2266, '98.65.32.2', NULL, NULL),
(2267, '98.65.32.2', NULL, NULL),
(2268, '98.65.32.2', NULL, NULL),
(2269, '98.65.32.2', NULL, NULL),
(2270, '98.65.32.2', NULL, NULL),
(2271, '98.65.32.2', NULL, NULL),
(2272, '98.65.32.2', NULL, NULL),
(2273, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2274, '98.65.32.2', NULL, NULL),
(2275, '98.65.32.2', NULL, NULL),
(2276, '98.65.32.2', NULL, NULL),
(2277, '98.65.32.2', NULL, NULL),
(2278, '98.65.32.2', NULL, NULL),
(2279, '98.65.32.2', NULL, NULL),
(2280, '98.65.32.2', NULL, NULL),
(2281, '98.65.32.2', NULL, NULL),
(2282, '98.65.32.2', NULL, NULL),
(2283, '98.65.32.2', NULL, NULL),
(2284, '98.65.32.2', NULL, NULL),
(2285, '98.65.32.2', NULL, NULL),
(2286, '98.65.32.2', NULL, NULL),
(2287, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2288, '98.65.32.2', NULL, NULL),
(2289, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2290, '98.65.32.2', NULL, NULL),
(2291, '98.65.32.2', NULL, NULL),
(2292, '98.65.32.2', NULL, NULL),
(2293, '98.65.32.2', NULL, NULL),
(2294, '98.65.32.2', NULL, NULL),
(2295, '98.65.32.2', NULL, NULL),
(2296, '98.65.32.2', NULL, NULL),
(2297, '98.65.32.2', NULL, NULL),
(2298, '98.65.32.2', NULL, NULL),
(2299, '98.65.32.2', NULL, NULL),
(2300, '127.0.0.1', NULL, NULL),
(2301, '127.0.0.1', NULL, NULL),
(2302, '127.0.0.1', NULL, NULL),
(2303, '127.0.0.1', NULL, NULL),
(2304, '127.0.0.1', NULL, NULL),
(2305, '127.0.0.1', NULL, NULL),
(2306, '127.0.0.1', NULL, NULL),
(2307, '127.0.0.1', NULL, NULL),
(2308, '127.0.0.1', NULL, NULL),
(2309, '127.0.0.1', NULL, NULL),
(2310, '127.0.0.1', NULL, NULL),
(2311, '127.0.0.1', NULL, NULL),
(2312, '127.0.0.1', NULL, NULL),
(2313, '127.0.0.1', NULL, NULL),
(2314, '127.0.0.1', NULL, NULL),
(2315, '127.0.0.1', NULL, NULL),
(2316, '127.0.0.1', NULL, NULL),
(2317, '127.0.0.1', NULL, NULL),
(2318, '127.0.0.1', NULL, NULL),
(2319, '127.0.0.1', NULL, NULL),
(2320, '127.0.0.1', NULL, NULL),
(2321, '127.0.0.1', NULL, NULL),
(2322, '127.0.0.1', NULL, NULL),
(2323, '127.0.0.1', NULL, NULL),
(2324, '127.0.0.1', NULL, NULL),
(2325, '127.0.0.1', NULL, NULL),
(2326, '127.0.0.1', NULL, NULL),
(2327, '127.0.0.1', NULL, NULL),
(2328, '127.0.0.1', NULL, NULL),
(2329, '127.0.0.1', NULL, NULL),
(2330, '127.0.0.1', NULL, NULL),
(2331, '127.0.0.1', NULL, NULL),
(2332, '127.0.0.1', NULL, NULL),
(2333, '127.0.0.1', NULL, NULL),
(2334, '127.0.0.1', NULL, NULL),
(2335, '127.0.0.1', NULL, NULL),
(2336, '127.0.0.1', NULL, NULL),
(2337, '127.0.0.1', NULL, NULL),
(2338, '127.0.0.1', NULL, NULL),
(2339, '127.0.0.1', NULL, NULL),
(2340, '127.0.0.1', NULL, NULL),
(2341, '127.0.0.1', NULL, NULL),
(2342, '127.0.0.1', NULL, NULL),
(2343, '127.0.0.1', NULL, NULL),
(2344, '127.0.0.1', NULL, NULL),
(2345, '127.0.0.1', NULL, NULL),
(2346, '127.0.0.1', NULL, NULL),
(2347, '127.0.0.1', NULL, NULL),
(2348, '127.0.0.1', NULL, NULL),
(2349, '127.0.0.1', NULL, NULL),
(2350, '127.0.0.1', NULL, NULL),
(2351, '127.0.0.1', NULL, NULL),
(2352, '127.0.0.1', NULL, NULL),
(2353, '127.0.0.1', NULL, NULL),
(2354, '127.0.0.1', NULL, NULL),
(2355, '127.0.0.1', NULL, NULL),
(2356, '127.0.0.1', NULL, NULL),
(2357, '127.0.0.1', NULL, NULL),
(2358, '127.0.0.1', NULL, NULL),
(2359, '127.0.0.1', NULL, NULL),
(2360, '127.0.0.1', NULL, NULL),
(2361, '127.0.0.1', NULL, NULL),
(2362, '127.0.0.1', NULL, NULL),
(2363, '127.0.0.1', NULL, NULL),
(2364, '127.0.0.1', NULL, NULL),
(2365, '127.0.0.1', NULL, NULL),
(2366, '127.0.0.1', NULL, NULL),
(2367, '127.0.0.1', NULL, NULL),
(2368, '127.0.0.1', NULL, NULL),
(2369, '127.0.0.1', NULL, NULL),
(2370, '127.0.0.1', NULL, NULL),
(2371, '127.0.0.1', NULL, NULL),
(2372, '127.0.0.1', NULL, NULL),
(2373, '127.0.0.1', NULL, NULL),
(2374, '127.0.0.1', NULL, NULL),
(2375, '127.0.0.1', NULL, NULL),
(2376, '127.0.0.1', NULL, NULL),
(2377, '127.0.0.1', NULL, NULL),
(2378, '127.0.0.1', NULL, NULL),
(2379, '127.0.0.1', NULL, NULL),
(2380, '127.0.0.1', NULL, NULL),
(2381, '127.0.0.1', NULL, NULL),
(2382, '98.65.32.2', NULL, NULL),
(2383, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2384, '98.65.32.2', NULL, NULL),
(2385, '98.65.32.2', NULL, NULL),
(2386, '98.65.32.2', NULL, NULL),
(2387, '98.65.32.2', NULL, NULL),
(2388, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2389, '98.65.32.2', NULL, NULL),
(2390, '98.65.32.2', NULL, NULL),
(2391, '98.65.32.2', NULL, NULL),
(2392, '98.65.32.2', NULL, NULL),
(2393, '98.65.32.2', NULL, NULL),
(2394, '98.65.32.2', NULL, NULL),
(2395, '98.65.32.2', NULL, NULL),
(2396, '98.65.32.2', NULL, NULL),
(2397, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2398, '98.65.32.2', NULL, NULL),
(2399, '98.65.32.2', NULL, NULL),
(2400, '98.65.32.2', NULL, NULL),
(2401, '98.65.32.2', NULL, NULL),
(2402, '98.65.32.2', NULL, NULL),
(2403, '98.65.32.2', NULL, NULL),
(2404, '98.65.32.2', NULL, NULL),
(2405, '98.65.32.2', NULL, NULL),
(2406, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2407, '98.65.32.2', NULL, NULL),
(2408, '98.65.32.2', NULL, NULL),
(2409, '98.65.32.2', NULL, NULL),
(2410, '98.65.32.2', NULL, NULL),
(2411, '98.65.32.2', NULL, NULL),
(2412, '98.65.32.2', NULL, NULL),
(2413, '98.65.32.2', NULL, NULL),
(2414, '98.65.32.2', NULL, NULL),
(2415, '98.65.32.2', NULL, NULL),
(2416, '98.65.32.2', NULL, NULL),
(2417, '98.65.32.2', NULL, NULL),
(2418, '98.65.32.2', NULL, NULL),
(2419, '98.65.32.2', NULL, NULL),
(2420, '98.65.32.2', NULL, NULL),
(2421, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2422, '98.65.32.2', NULL, NULL),
(2423, '98.65.32.2', NULL, NULL),
(2424, '98.65.32.2', NULL, NULL),
(2425, '98.65.32.2', NULL, NULL),
(2426, '98.65.32.2', NULL, NULL),
(2427, '98.65.32.2', NULL, NULL),
(2428, '98.65.32.2', NULL, NULL),
(2429, '98.65.32.2', NULL, NULL),
(2430, '98.65.32.2', NULL, NULL),
(2431, '98.65.32.2', NULL, NULL),
(2432, '98.65.32.2', NULL, NULL),
(2433, '98.65.32.2', NULL, NULL),
(2434, '98.65.32.2', NULL, NULL),
(2435, '98.65.32.2', NULL, NULL),
(2436, '98.65.32.2', NULL, NULL),
(2437, '98.65.32.2', NULL, NULL),
(2438, '98.65.32.2', NULL, NULL),
(2439, '98.65.32.2', NULL, NULL),
(2440, '98.65.32.2', NULL, NULL),
(2441, '98.65.32.2', NULL, NULL),
(2442, '98.65.32.2', NULL, NULL),
(2443, '98.65.32.2', NULL, NULL),
(2444, '98.65.32.2', NULL, NULL),
(2445, '98.65.32.2', NULL, NULL),
(2446, '98.65.32.2', NULL, NULL),
(2447, '98.65.32.2', NULL, NULL),
(2448, '98.65.32.2', NULL, NULL),
(2449, '98.65.32.2', NULL, NULL),
(2450, '98.65.32.2', NULL, NULL),
(2451, '98.65.32.2', NULL, NULL),
(2452, '98.65.32.2', NULL, NULL),
(2453, '98.65.32.2', NULL, NULL),
(2454, '98.65.32.2', NULL, NULL),
(2455, '127.0.0.1', NULL, NULL),
(2456, '127.0.0.1', NULL, NULL),
(2457, '127.0.0.1', NULL, NULL),
(2458, '127.0.0.1', NULL, NULL),
(2459, '127.0.0.1', NULL, NULL),
(2460, '98.65.32.2', NULL, NULL),
(2461, '98.65.32.2', NULL, NULL),
(2462, '98.65.32.2', NULL, NULL),
(2463, '98.65.32.2', NULL, NULL),
(2464, '98.65.32.2', NULL, NULL),
(2465, '98.65.32.2', NULL, NULL),
(2466, '98.65.32.2', NULL, NULL),
(2467, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2468, '98.65.32.2', NULL, NULL),
(2469, '98.65.32.2', NULL, NULL),
(2470, '98.65.32.2', NULL, NULL),
(2471, '98.65.32.2', NULL, NULL),
(2472, '98.65.32.2', NULL, NULL),
(2473, '98.65.32.2', NULL, NULL),
(2474, '98.65.32.2', NULL, NULL),
(2475, '98.65.32.2', NULL, NULL),
(2476, '98.65.32.2', NULL, NULL),
(2477, '98.65.32.2', NULL, NULL),
(2478, '98.65.32.2', NULL, NULL),
(2479, '98.65.32.2', NULL, NULL),
(2480, '98.65.32.2', NULL, NULL),
(2481, '98.65.32.2', NULL, NULL),
(2482, '98.65.32.2', NULL, NULL),
(2483, '98.65.32.2', NULL, NULL),
(2484, '98.65.32.2', NULL, NULL),
(2485, '98.65.32.2', NULL, NULL),
(2486, '98.65.32.2', NULL, NULL),
(2487, '98.65.32.2', NULL, NULL),
(2488, '98.65.32.2', NULL, NULL),
(2489, '98.65.32.2', NULL, NULL),
(2490, '98.65.32.2', NULL, NULL),
(2491, '98.65.32.2', NULL, NULL),
(2492, '98.65.32.2', NULL, NULL),
(2493, '98.65.32.2', NULL, NULL),
(2494, '98.65.32.2', NULL, NULL),
(2495, '98.65.32.2', NULL, NULL),
(2496, '98.65.32.2', NULL, NULL),
(2497, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2498, '98.65.32.2', NULL, NULL),
(2499, '127.0.0.1', NULL, NULL),
(2500, '127.0.0.1', NULL, NULL),
(2501, '98.65.32.2', NULL, NULL),
(2502, '98.65.32.2', NULL, NULL),
(2503, '98.65.32.2', NULL, NULL),
(2504, '169.254.2.11', NULL, NULL),
(2505, '98.65.32.2', NULL, NULL),
(2506, '98.65.32.2', NULL, NULL),
(2507, '98.65.32.2', NULL, NULL),
(2508, '98.65.32.2', NULL, NULL),
(2509, '98.65.32.2', NULL, NULL),
(2510, '98.65.32.2', NULL, NULL),
(2511, '98.65.32.2', NULL, NULL),
(2512, '98.65.32.6', NULL, NULL),
(2513, '98.65.32.6', NULL, NULL),
(2514, '98.65.32.6', NULL, NULL),
(2515, '98.65.32.6', NULL, NULL),
(2516, '98.65.32.6', NULL, NULL),
(2517, '98.65.32.6', NULL, NULL),
(2518, '98.65.32.6', NULL, NULL),
(2519, '98.65.32.6', NULL, NULL),
(2520, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2521, '98.65.32.6', NULL, NULL),
(2522, '98.65.32.6', NULL, NULL),
(2523, '98.65.32.6', NULL, NULL),
(2524, '98.65.32.6', NULL, NULL),
(2525, '98.65.32.6', NULL, NULL),
(2526, '98.65.32.6', NULL, NULL),
(2527, '98.65.32.6', NULL, NULL),
(2528, '98.65.32.6', NULL, NULL),
(2529, '98.65.32.6', NULL, NULL),
(2530, '98.65.32.6', NULL, NULL),
(2531, '98.65.32.6', NULL, NULL),
(2532, '98.65.32.6', NULL, NULL),
(2533, '98.65.32.6', NULL, NULL),
(2534, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2535, '98.65.32.6', NULL, NULL),
(2536, '98.65.32.6', NULL, NULL),
(2537, '98.65.32.6', NULL, NULL),
(2538, '98.65.32.6', NULL, NULL),
(2539, '98.65.32.6', NULL, NULL),
(2540, '98.65.32.6', NULL, NULL),
(2541, '98.65.32.6', NULL, NULL),
(2542, '98.65.32.6', NULL, NULL),
(2543, '98.65.32.6', NULL, NULL),
(2544, '98.65.32.6', NULL, NULL),
(2545, '98.65.32.6', NULL, NULL),
(2546, '98.65.32.6', NULL, NULL),
(2547, '98.65.32.6', NULL, NULL),
(2548, '98.65.32.6', NULL, NULL),
(2549, '98.65.32.6', NULL, NULL),
(2550, '98.65.32.6', NULL, NULL),
(2551, '98.65.32.6', NULL, NULL),
(2552, '98.65.32.6', NULL, NULL),
(2553, '98.65.32.6', NULL, NULL),
(2554, '98.65.32.6', NULL, NULL),
(2555, '98.65.32.6', NULL, NULL),
(2556, '98.65.32.6', NULL, NULL),
(2557, '98.65.32.6', NULL, NULL),
(2558, '98.65.32.6', NULL, NULL),
(2559, '98.65.32.6', NULL, NULL),
(2560, '98.65.32.6', NULL, NULL),
(2561, '98.65.32.6', NULL, NULL),
(2562, '98.65.32.6', NULL, NULL),
(2563, '98.65.32.6', NULL, NULL),
(2564, '98.65.32.6', NULL, NULL),
(2565, '98.65.32.6', NULL, NULL),
(2566, '98.65.32.6', NULL, NULL),
(2567, '98.65.32.6', NULL, NULL),
(2568, '98.65.32.6', NULL, NULL),
(2569, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2570, '98.65.32.6', NULL, NULL),
(2571, '98.65.32.6', NULL, NULL),
(2572, '98.65.32.6', NULL, NULL),
(2573, '98.65.32.6', NULL, NULL),
(2574, '98.65.32.6', NULL, NULL),
(2575, '98.65.32.6', NULL, NULL),
(2576, '98.65.32.6', NULL, NULL),
(2577, '98.65.32.6', NULL, NULL),
(2578, '98.65.32.6', NULL, NULL),
(2579, '98.65.32.6', NULL, NULL),
(2580, '98.65.32.6', NULL, NULL),
(2581, '98.65.32.6', NULL, NULL),
(2582, '98.65.32.6', NULL, NULL),
(2583, '98.65.32.6', NULL, NULL),
(2584, '98.65.32.6', NULL, NULL),
(2585, '98.65.32.6', NULL, NULL),
(2586, '98.65.32.6', NULL, NULL),
(2587, '98.65.32.6', NULL, NULL),
(2588, '98.65.32.6', NULL, NULL),
(2589, '98.65.32.6', NULL, NULL),
(2590, '98.65.32.6', NULL, NULL),
(2591, '98.65.32.6', NULL, NULL),
(2592, '98.65.32.6', NULL, NULL),
(2593, '98.65.32.6', NULL, NULL),
(2594, '98.65.32.6', NULL, NULL),
(2595, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2596, '98.65.32.6', NULL, NULL),
(2597, '98.65.32.6', NULL, NULL),
(2598, '98.65.32.6', NULL, NULL),
(2599, '98.65.32.6', NULL, NULL),
(2600, '98.65.32.6', NULL, NULL),
(2601, '98.65.32.6', NULL, NULL),
(2602, '98.65.32.6', NULL, NULL),
(2603, '98.65.32.6', NULL, NULL),
(2604, '98.65.32.6', NULL, NULL),
(2605, '100.127.255.250', NULL, NULL),
(2606, '98.65.32.6', NULL, NULL),
(2607, '98.65.32.6', NULL, NULL),
(2608, '98.65.32.6', NULL, NULL),
(2609, '98.65.32.6', NULL, NULL),
(2610, '98.65.32.6', NULL, NULL),
(2611, '98.65.32.6', NULL, NULL),
(2612, '98.65.32.6', NULL, NULL),
(2613, '98.65.32.6', NULL, NULL),
(2614, '98.65.32.6', NULL, NULL),
(2615, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2616, '98.65.32.6', NULL, NULL),
(2617, '98.65.32.6', NULL, NULL),
(2618, '98.65.32.6', NULL, NULL),
(2619, '100.127.255.250', NULL, NULL),
(2620, '98.65.32.6', NULL, NULL),
(2621, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2622, '98.65.32.6', NULL, NULL),
(2623, '98.65.32.6', NULL, NULL),
(2624, '98.65.32.6', NULL, NULL),
(2625, '98.65.32.6', NULL, NULL),
(2626, '98.65.32.6', NULL, NULL),
(2627, '98.65.32.6', NULL, NULL),
(2628, '98.65.32.6', NULL, NULL),
(2629, '98.65.32.6', NULL, NULL),
(2630, 'fe80::7d66:62dd:ea04:20b', NULL, NULL),
(2631, '98.65.32.6', NULL, NULL),
(2632, '98.65.32.6', NULL, NULL),
(2633, '98.65.32.6', NULL, NULL),
(2634, '98.65.32.6', NULL, NULL),
(2635, '98.65.32.6', NULL, NULL),
(2636, '98.65.32.6', NULL, NULL),
(2637, '98.65.32.6', NULL, NULL),
(2638, '98.65.32.6', NULL, NULL),
(2639, '98.65.32.6', NULL, NULL),
(2640, '98.65.32.6', NULL, NULL),
(2641, '98.65.32.6', NULL, NULL),
(2642, '98.65.32.6', NULL, NULL),
(2643, '98.65.32.6', NULL, NULL),
(2644, '98.65.32.6', NULL, NULL),
(2645, '98.65.32.6', NULL, NULL),
(2646, '98.65.32.6', NULL, NULL),
(2647, '98.65.32.6', NULL, NULL),
(2648, '98.65.32.6', NULL, NULL),
(2649, '98.65.32.6', NULL, NULL),
(2650, '98.65.32.6', NULL, NULL),
(2651, '98.65.32.6', NULL, NULL),
(2652, '127.0.0.1', NULL, NULL),
(2653, '127.0.0.1', NULL, NULL),
(2654, '127.0.0.1', NULL, NULL),
(2655, '127.0.0.1', NULL, NULL),
(2656, '127.0.0.1', NULL, NULL),
(2657, '127.0.0.1', NULL, NULL),
(2658, '127.0.0.1', NULL, NULL),
(2659, '127.0.0.1', NULL, NULL),
(2660, '127.0.0.1', NULL, NULL),
(2661, '127.0.0.1', NULL, NULL),
(2662, '127.0.0.1', NULL, NULL),
(2663, '127.0.0.1', NULL, NULL),
(2664, '127.0.0.1', NULL, NULL),
(2665, '127.0.0.1', NULL, NULL),
(2666, '127.0.0.1', NULL, NULL),
(2667, '127.0.0.1', NULL, NULL),
(2668, '127.0.0.1', NULL, NULL),
(2669, '127.0.0.1', NULL, NULL),
(2670, '127.0.0.1', NULL, NULL),
(2671, '127.0.0.1', NULL, NULL),
(2672, '127.0.0.1', NULL, NULL),
(2673, '127.0.0.1', NULL, NULL),
(2674, '127.0.0.1', NULL, NULL),
(2675, '127.0.0.1', NULL, NULL),
(2676, '127.0.0.1', NULL, NULL),
(2677, '127.0.0.1', NULL, NULL),
(2678, '127.0.0.1', NULL, NULL),
(2679, '127.0.0.1', NULL, NULL),
(2680, '127.0.0.1', NULL, NULL),
(2681, '127.0.0.1', NULL, NULL),
(2682, '127.0.0.1', NULL, NULL),
(2683, '127.0.0.1', NULL, NULL),
(2684, '127.0.0.1', NULL, NULL),
(2685, '127.0.0.1', NULL, NULL),
(2686, '127.0.0.1', NULL, NULL),
(2687, '127.0.0.1', NULL, NULL),
(2688, '127.0.0.1', NULL, NULL),
(2689, '127.0.0.1', NULL, NULL),
(2690, '127.0.0.1', NULL, NULL),
(2691, '127.0.0.1', NULL, NULL),
(2692, '127.0.0.1', NULL, NULL),
(2693, '127.0.0.1', NULL, NULL),
(2694, '127.0.0.1', NULL, NULL),
(2695, '127.0.0.1', NULL, NULL),
(2696, '127.0.0.1', NULL, NULL),
(2697, '127.0.0.1', NULL, NULL),
(2698, '127.0.0.1', NULL, NULL),
(2699, '127.0.0.1', NULL, NULL),
(2700, '127.0.0.1', NULL, NULL),
(2701, '127.0.0.1', NULL, NULL),
(2702, '127.0.0.1', NULL, NULL),
(2703, '127.0.0.1', NULL, NULL),
(2704, '127.0.0.1', NULL, NULL),
(2705, '127.0.0.1', NULL, NULL),
(2706, '127.0.0.1', NULL, NULL),
(2707, '127.0.0.1', NULL, NULL),
(2708, '127.0.0.1', NULL, NULL),
(2709, '127.0.0.1', NULL, NULL),
(2710, '127.0.0.1', NULL, NULL),
(2711, '127.0.0.1', NULL, NULL),
(2712, '127.0.0.1', NULL, NULL),
(2713, '127.0.0.1', NULL, NULL),
(2714, '127.0.0.1', NULL, NULL),
(2715, '127.0.0.1', NULL, NULL),
(2716, '127.0.0.1', NULL, NULL),
(2717, '127.0.0.1', NULL, NULL),
(2718, '127.0.0.1', NULL, NULL),
(2719, '127.0.0.1', NULL, NULL),
(2720, '127.0.0.1', NULL, NULL),
(2721, '127.0.0.1', NULL, NULL),
(2722, '127.0.0.1', NULL, NULL),
(2723, '127.0.0.1', NULL, NULL),
(2724, '127.0.0.1', NULL, NULL),
(2725, '127.0.0.1', NULL, NULL),
(2726, '127.0.0.1', NULL, NULL),
(2727, '127.0.0.1', NULL, NULL),
(2728, '127.0.0.1', NULL, NULL),
(2729, '127.0.0.1', NULL, NULL),
(2730, '127.0.0.1', NULL, NULL),
(2731, '127.0.0.1', NULL, NULL),
(2732, '127.0.0.1', NULL, NULL),
(2733, '127.0.0.1', NULL, NULL),
(2734, '127.0.0.1', NULL, NULL),
(2735, '127.0.0.1', NULL, NULL),
(2736, '127.0.0.1', NULL, NULL),
(2737, '127.0.0.1', NULL, NULL),
(2738, '127.0.0.1', NULL, NULL),
(2739, '127.0.0.1', NULL, NULL),
(2740, '127.0.0.1', NULL, NULL),
(2741, '127.0.0.1', NULL, NULL),
(2742, '127.0.0.1', NULL, NULL),
(2743, '127.0.0.1', NULL, NULL),
(2744, '127.0.0.1', NULL, NULL),
(2745, '127.0.0.1', NULL, NULL),
(2746, '127.0.0.1', NULL, NULL),
(2747, '127.0.0.1', NULL, NULL),
(2748, '127.0.0.1', NULL, NULL),
(2749, '127.0.0.1', NULL, NULL),
(2750, '127.0.0.1', NULL, NULL),
(2751, '127.0.0.1', NULL, NULL),
(2752, '127.0.0.1', NULL, NULL),
(2753, '127.0.0.1', NULL, NULL),
(2754, '127.0.0.1', NULL, NULL),
(2755, '127.0.0.1', NULL, NULL),
(2756, '127.0.0.1', NULL, NULL),
(2757, '127.0.0.1', NULL, NULL),
(2758, '127.0.0.1', NULL, NULL),
(2759, '127.0.0.1', NULL, NULL),
(2760, '127.0.0.1', NULL, NULL),
(2761, '127.0.0.1', NULL, NULL),
(2762, '127.0.0.1', NULL, NULL),
(2763, '127.0.0.1', NULL, NULL),
(2764, '127.0.0.1', NULL, NULL),
(2765, '127.0.0.1', NULL, NULL),
(2766, '127.0.0.1', NULL, NULL),
(2767, '127.0.0.1', NULL, NULL),
(2768, '127.0.0.1', NULL, NULL),
(2769, '127.0.0.1', NULL, NULL),
(2770, '127.0.0.1', NULL, NULL),
(2771, '127.0.0.1', NULL, NULL),
(2772, '127.0.0.1', NULL, NULL),
(2773, '127.0.0.1', NULL, NULL),
(2774, '127.0.0.1', NULL, NULL),
(2775, '127.0.0.1', NULL, NULL),
(2776, '127.0.0.1', NULL, NULL),
(2777, '127.0.0.1', NULL, NULL),
(2778, '127.0.0.1', NULL, NULL),
(2779, '127.0.0.1', NULL, NULL),
(2780, '127.0.0.1', NULL, NULL),
(2781, '127.0.0.1', NULL, NULL),
(2782, '127.0.0.1', NULL, NULL),
(2783, '127.0.0.1', NULL, NULL),
(2784, '127.0.0.1', NULL, NULL),
(2785, '127.0.0.1', NULL, NULL),
(2786, '127.0.0.1', NULL, NULL),
(2787, '127.0.0.1', NULL, NULL),
(2788, '127.0.0.1', NULL, NULL),
(2789, '127.0.0.1', NULL, NULL),
(2790, '127.0.0.1', NULL, NULL),
(2791, '127.0.0.1', NULL, NULL),
(2792, '127.0.0.1', NULL, NULL),
(2793, '127.0.0.1', NULL, NULL),
(2794, '127.0.0.1', NULL, NULL),
(2795, '127.0.0.1', NULL, NULL),
(2796, '127.0.0.1', NULL, NULL),
(2797, '127.0.0.1', NULL, NULL),
(2798, '127.0.0.1', NULL, NULL),
(2799, '127.0.0.1', NULL, NULL),
(2800, '127.0.0.1', NULL, NULL),
(2801, '127.0.0.1', NULL, NULL),
(2802, '127.0.0.1', NULL, NULL),
(2803, '127.0.0.1', NULL, NULL),
(2804, '127.0.0.1', NULL, NULL),
(2805, '127.0.0.1', NULL, NULL),
(2806, '127.0.0.1', NULL, NULL),
(2807, '127.0.0.1', NULL, NULL),
(2808, '127.0.0.1', NULL, NULL),
(2809, '127.0.0.1', NULL, NULL),
(2810, '127.0.0.1', NULL, NULL),
(2811, '127.0.0.1', NULL, NULL),
(2812, '127.0.0.1', NULL, NULL),
(2813, '127.0.0.1', NULL, NULL),
(2814, '127.0.0.1', NULL, NULL),
(2815, '127.0.0.1', NULL, NULL),
(2816, '127.0.0.1', NULL, NULL),
(2817, '127.0.0.1', NULL, NULL),
(2818, '127.0.0.1', NULL, NULL),
(2819, '127.0.0.1', NULL, NULL),
(2820, '127.0.0.1', NULL, NULL),
(2821, '127.0.0.1', NULL, NULL),
(2822, '127.0.0.1', NULL, NULL),
(2823, '127.0.0.1', NULL, NULL),
(2824, '127.0.0.1', NULL, NULL),
(2825, '127.0.0.1', NULL, NULL),
(2826, '127.0.0.1', NULL, NULL),
(2827, '127.0.0.1', NULL, NULL),
(2828, '127.0.0.1', NULL, NULL),
(2829, '127.0.0.1', NULL, NULL),
(2830, '127.0.0.1', NULL, NULL),
(2831, '127.0.0.1', NULL, NULL),
(2832, '127.0.0.1', NULL, NULL),
(2833, '127.0.0.1', NULL, NULL),
(2834, '127.0.0.1', NULL, NULL),
(2835, '127.0.0.1', NULL, NULL),
(2836, '127.0.0.1', NULL, NULL),
(2837, '127.0.0.1', NULL, NULL),
(2838, '127.0.0.1', NULL, NULL),
(2839, '127.0.0.1', NULL, NULL),
(2840, '127.0.0.1', NULL, NULL),
(2841, '127.0.0.1', NULL, NULL),
(2842, '127.0.0.1', NULL, NULL),
(2843, '127.0.0.1', NULL, NULL),
(2844, '127.0.0.1', NULL, NULL),
(2845, '127.0.0.1', NULL, NULL),
(2846, '127.0.0.1', NULL, NULL),
(2847, '127.0.0.1', NULL, NULL),
(2848, '127.0.0.1', NULL, NULL),
(2849, '127.0.0.1', NULL, NULL),
(2850, '127.0.0.1', NULL, NULL),
(2851, '127.0.0.1', NULL, NULL),
(2852, '127.0.0.1', NULL, NULL),
(2853, '127.0.0.1', NULL, NULL),
(2854, '127.0.0.1', NULL, NULL),
(2855, '127.0.0.1', NULL, NULL),
(2856, '127.0.0.1', NULL, NULL),
(2857, '127.0.0.1', NULL, NULL),
(2858, '127.0.0.1', NULL, NULL),
(2859, '127.0.0.1', NULL, NULL),
(2860, '127.0.0.1', NULL, NULL),
(2861, '127.0.0.1', NULL, NULL),
(2862, '127.0.0.1', NULL, NULL),
(2863, '127.0.0.1', NULL, NULL),
(2864, '127.0.0.1', NULL, NULL),
(2865, '127.0.0.1', NULL, NULL),
(2866, '127.0.0.1', NULL, NULL),
(2867, '127.0.0.1', NULL, NULL),
(2868, '127.0.0.1', NULL, NULL),
(2869, '127.0.0.1', NULL, NULL),
(2870, '127.0.0.1', NULL, NULL),
(2871, '127.0.0.1', NULL, NULL),
(2872, '127.0.0.1', NULL, NULL),
(2873, '127.0.0.1', NULL, NULL),
(2874, '127.0.0.1', NULL, NULL),
(2875, '127.0.0.1', NULL, NULL),
(2876, '127.0.0.1', NULL, NULL),
(2877, '127.0.0.1', NULL, NULL),
(2878, '127.0.0.1', NULL, NULL),
(2879, '127.0.0.1', NULL, NULL),
(2880, '127.0.0.1', NULL, NULL),
(2881, '127.0.0.1', NULL, NULL),
(2882, '127.0.0.1', NULL, NULL),
(2883, '127.0.0.1', NULL, NULL),
(2884, '127.0.0.1', NULL, NULL),
(2885, '127.0.0.1', NULL, NULL),
(2886, '127.0.0.1', NULL, NULL),
(2887, '127.0.0.1', NULL, NULL),
(2888, '127.0.0.1', NULL, NULL),
(2889, '127.0.0.1', NULL, NULL),
(2890, '127.0.0.1', NULL, NULL),
(2891, '127.0.0.1', NULL, NULL),
(2892, '127.0.0.1', NULL, NULL),
(2893, '127.0.0.1', NULL, NULL),
(2894, '127.0.0.1', NULL, NULL),
(2895, '127.0.0.1', NULL, NULL),
(2896, '127.0.0.1', NULL, NULL),
(2897, '127.0.0.1', NULL, NULL),
(2898, '127.0.0.1', NULL, NULL),
(2899, '127.0.0.1', NULL, NULL),
(2900, '127.0.0.1', NULL, NULL),
(2901, '127.0.0.1', NULL, NULL),
(2902, '127.0.0.1', NULL, NULL),
(2903, '127.0.0.1', NULL, NULL),
(2904, '127.0.0.1', NULL, NULL),
(2905, '127.0.0.1', NULL, NULL),
(2906, '127.0.0.1', NULL, NULL),
(2907, '127.0.0.1', NULL, NULL),
(2908, '127.0.0.1', NULL, NULL),
(2909, '127.0.0.1', NULL, NULL),
(2910, '127.0.0.1', NULL, NULL),
(2911, '127.0.0.1', NULL, NULL),
(2912, '127.0.0.1', NULL, NULL),
(2913, '127.0.0.1', NULL, NULL),
(2914, '127.0.0.1', NULL, NULL),
(2915, '127.0.0.1', NULL, NULL),
(2916, '127.0.0.1', NULL, NULL),
(2917, '127.0.0.1', NULL, NULL),
(2918, '127.0.0.1', NULL, NULL),
(2919, '127.0.0.1', NULL, NULL),
(2920, '127.0.0.1', NULL, NULL),
(2921, '127.0.0.1', NULL, NULL),
(2922, '127.0.0.1', NULL, NULL),
(2923, '127.0.0.1', NULL, NULL),
(2924, '127.0.0.1', NULL, NULL),
(2925, '127.0.0.1', NULL, NULL),
(2926, '127.0.0.1', NULL, NULL),
(2927, '127.0.0.1', NULL, NULL),
(2928, '127.0.0.1', NULL, NULL),
(2929, '127.0.0.1', NULL, NULL),
(2930, '127.0.0.1', NULL, NULL),
(2931, '127.0.0.1', NULL, NULL),
(2932, '127.0.0.1', NULL, NULL),
(2933, '127.0.0.1', NULL, NULL),
(2934, '127.0.0.1', NULL, NULL),
(2935, '127.0.0.1', NULL, NULL),
(2936, '127.0.0.1', NULL, NULL),
(2937, '127.0.0.1', NULL, NULL),
(2938, '127.0.0.1', NULL, NULL),
(2939, '127.0.0.1', NULL, NULL),
(2940, '127.0.0.1', NULL, NULL),
(2941, '127.0.0.1', NULL, NULL),
(2942, '127.0.0.1', NULL, NULL),
(2943, '127.0.0.1', NULL, NULL),
(2944, '127.0.0.1', NULL, NULL),
(2945, '127.0.0.1', NULL, NULL),
(2946, '127.0.0.1', NULL, NULL),
(2947, '127.0.0.1', NULL, NULL),
(2948, '127.0.0.1', NULL, NULL),
(2949, '127.0.0.1', NULL, NULL),
(2950, '127.0.0.1', NULL, NULL),
(2951, '127.0.0.1', NULL, NULL),
(2952, '127.0.0.1', NULL, NULL),
(2953, '127.0.0.1', NULL, NULL),
(2954, '127.0.0.1', NULL, NULL),
(2955, '127.0.0.1', NULL, NULL),
(2956, '127.0.0.1', NULL, NULL),
(2957, '127.0.0.1', NULL, NULL),
(2958, '127.0.0.1', NULL, NULL),
(2959, '127.0.0.1', NULL, NULL),
(2960, '127.0.0.1', NULL, NULL),
(2961, '127.0.0.1', NULL, NULL),
(2962, '127.0.0.1', NULL, NULL),
(2963, '127.0.0.1', NULL, NULL),
(2964, '127.0.0.1', NULL, NULL),
(2965, '127.0.0.1', NULL, NULL),
(2966, '127.0.0.1', NULL, NULL),
(2967, '127.0.0.1', NULL, NULL),
(2968, '127.0.0.1', NULL, NULL),
(2969, '127.0.0.1', NULL, NULL),
(2970, '127.0.0.1', NULL, NULL),
(2971, '127.0.0.1', NULL, NULL),
(2972, '127.0.0.1', NULL, NULL),
(2973, '127.0.0.1', NULL, NULL),
(2974, '127.0.0.1', NULL, NULL),
(2975, '127.0.0.1', NULL, NULL),
(2976, '127.0.0.1', NULL, NULL),
(2977, '127.0.0.1', NULL, NULL),
(2978, '127.0.0.1', NULL, NULL),
(2979, '127.0.0.1', NULL, NULL),
(2980, '127.0.0.1', NULL, NULL),
(2981, '127.0.0.1', NULL, NULL),
(2982, '127.0.0.1', NULL, NULL),
(2983, '127.0.0.1', NULL, NULL),
(2984, '127.0.0.1', NULL, NULL),
(2985, '127.0.0.1', NULL, NULL),
(2986, '127.0.0.1', NULL, NULL),
(2987, '127.0.0.1', NULL, NULL),
(2988, '127.0.0.1', NULL, NULL),
(2989, '127.0.0.1', NULL, NULL),
(2990, '127.0.0.1', NULL, NULL),
(2991, '127.0.0.1', NULL, NULL),
(2992, '127.0.0.1', NULL, NULL),
(2993, '127.0.0.1', NULL, NULL),
(2994, '127.0.0.1', NULL, NULL),
(2995, '127.0.0.1', NULL, NULL),
(2996, '127.0.0.1', NULL, NULL),
(2997, '127.0.0.1', NULL, NULL),
(2998, '127.0.0.1', NULL, NULL),
(2999, '127.0.0.1', NULL, NULL),
(3000, '127.0.0.1', NULL, NULL),
(3001, '127.0.0.1', NULL, NULL),
(3002, '127.0.0.1', NULL, NULL),
(3003, '127.0.0.1', NULL, NULL),
(3004, '127.0.0.1', NULL, NULL),
(3005, '127.0.0.1', NULL, NULL),
(3006, '127.0.0.1', NULL, NULL),
(3007, '127.0.0.1', NULL, NULL),
(3008, '127.0.0.1', NULL, NULL),
(3009, '127.0.0.1', NULL, NULL),
(3010, '127.0.0.1', NULL, NULL),
(3011, '127.0.0.1', NULL, NULL),
(3012, '127.0.0.1', NULL, NULL),
(3013, '127.0.0.1', NULL, NULL),
(3014, '127.0.0.1', NULL, NULL),
(3015, '127.0.0.1', NULL, NULL),
(3016, '127.0.0.1', NULL, NULL),
(3017, '127.0.0.1', NULL, NULL),
(3018, '127.0.0.1', NULL, NULL),
(3019, '127.0.0.1', NULL, NULL),
(3020, '127.0.0.1', NULL, NULL),
(3021, '127.0.0.1', NULL, NULL),
(3022, '127.0.0.1', NULL, NULL),
(3023, '127.0.0.1', NULL, NULL),
(3024, '127.0.0.1', NULL, NULL),
(3025, '127.0.0.1', NULL, NULL),
(3026, '127.0.0.1', NULL, NULL),
(3027, '127.0.0.1', NULL, NULL),
(3028, '127.0.0.1', NULL, NULL),
(3029, '127.0.0.1', NULL, NULL),
(3030, '127.0.0.1', NULL, NULL),
(3031, '127.0.0.1', NULL, NULL),
(3032, '127.0.0.1', NULL, NULL),
(3033, '127.0.0.1', NULL, NULL),
(3034, '127.0.0.1', NULL, NULL),
(3035, '127.0.0.1', NULL, NULL),
(3036, '127.0.0.1', NULL, NULL),
(3037, '127.0.0.1', NULL, NULL),
(3038, '127.0.0.1', NULL, NULL),
(3039, '127.0.0.1', NULL, NULL),
(3040, '127.0.0.1', NULL, NULL),
(3041, '127.0.0.1', NULL, NULL),
(3042, '127.0.0.1', NULL, NULL),
(3043, '127.0.0.1', NULL, NULL),
(3044, '127.0.0.1', NULL, NULL),
(3045, '127.0.0.1', NULL, NULL),
(3046, '127.0.0.1', NULL, NULL),
(3047, '127.0.0.1', NULL, NULL),
(3048, '127.0.0.1', NULL, NULL),
(3049, '127.0.0.1', NULL, NULL),
(3050, '127.0.0.1', NULL, NULL),
(3051, '127.0.0.1', NULL, NULL),
(3052, '127.0.0.1', NULL, NULL),
(3053, '127.0.0.1', NULL, NULL),
(3054, '127.0.0.1', NULL, NULL),
(3055, '127.0.0.1', NULL, NULL),
(3056, '127.0.0.1', NULL, NULL),
(3057, '127.0.0.1', NULL, NULL),
(3058, '127.0.0.1', NULL, NULL),
(3059, '127.0.0.1', NULL, NULL),
(3060, '127.0.0.1', NULL, NULL),
(3061, '127.0.0.1', NULL, NULL),
(3062, '127.0.0.1', NULL, NULL),
(3063, '127.0.0.1', NULL, NULL),
(3064, '127.0.0.1', NULL, NULL),
(3065, '127.0.0.1', NULL, NULL),
(3066, '127.0.0.1', NULL, NULL),
(3067, '127.0.0.1', NULL, NULL),
(3068, '127.0.0.1', NULL, NULL),
(3069, '127.0.0.1', NULL, NULL),
(3070, '127.0.0.1', NULL, NULL),
(3071, '127.0.0.1', NULL, NULL),
(3072, '127.0.0.1', NULL, NULL),
(3073, '127.0.0.1', NULL, NULL),
(3074, '127.0.0.1', NULL, NULL),
(3075, '127.0.0.1', NULL, NULL),
(3076, '127.0.0.1', NULL, NULL),
(3077, '127.0.0.1', NULL, NULL),
(3078, '127.0.0.1', NULL, NULL),
(3079, '127.0.0.1', NULL, NULL),
(3080, '127.0.0.1', NULL, NULL),
(3081, '127.0.0.1', NULL, NULL),
(3082, '127.0.0.1', NULL, NULL),
(3083, '127.0.0.1', NULL, NULL),
(3084, '127.0.0.1', NULL, NULL),
(3085, '127.0.0.1', NULL, NULL),
(3086, '127.0.0.1', NULL, NULL),
(3087, '127.0.0.1', NULL, NULL),
(3088, '127.0.0.1', NULL, NULL),
(3089, '127.0.0.1', NULL, NULL),
(3090, '127.0.0.1', NULL, NULL),
(3091, '127.0.0.1', NULL, NULL),
(3092, '127.0.0.1', NULL, NULL),
(3093, '127.0.0.1', NULL, NULL),
(3094, '127.0.0.1', NULL, NULL),
(3095, '127.0.0.1', NULL, NULL),
(3096, '127.0.0.1', NULL, NULL),
(3097, '127.0.0.1', NULL, NULL),
(3098, '127.0.0.1', NULL, NULL),
(3099, '127.0.0.1', NULL, NULL),
(3100, '127.0.0.1', NULL, NULL),
(3101, '127.0.0.1', NULL, NULL),
(3102, '127.0.0.1', NULL, NULL),
(3103, '127.0.0.1', NULL, NULL),
(3104, '127.0.0.1', NULL, NULL),
(3105, '127.0.0.1', NULL, NULL),
(3106, '127.0.0.1', NULL, NULL),
(3107, '127.0.0.1', NULL, NULL),
(3108, '127.0.0.1', NULL, NULL),
(3109, '127.0.0.1', NULL, NULL),
(3110, '127.0.0.1', NULL, NULL),
(3111, '127.0.0.1', NULL, NULL),
(3112, '127.0.0.1', NULL, NULL),
(3113, '127.0.0.1', NULL, NULL),
(3114, '127.0.0.1', NULL, NULL),
(3115, '127.0.0.1', NULL, NULL),
(3116, '127.0.0.1', NULL, NULL),
(3117, '127.0.0.1', NULL, NULL),
(3118, '127.0.0.1', NULL, NULL),
(3119, '127.0.0.1', NULL, NULL),
(3120, '127.0.0.1', NULL, NULL),
(3121, '127.0.0.1', NULL, NULL),
(3122, '127.0.0.1', NULL, NULL),
(3123, '127.0.0.1', NULL, NULL),
(3124, '127.0.0.1', NULL, NULL),
(3125, '127.0.0.1', NULL, NULL),
(3126, '127.0.0.1', NULL, NULL),
(3127, '127.0.0.1', NULL, NULL),
(3128, '127.0.0.1', NULL, NULL),
(3129, '127.0.0.1', NULL, NULL),
(3130, '127.0.0.1', NULL, NULL),
(3131, '127.0.0.1', NULL, NULL),
(3132, '127.0.0.1', NULL, NULL),
(3133, '127.0.0.1', NULL, NULL),
(3134, '127.0.0.1', NULL, NULL),
(3135, '127.0.0.1', NULL, NULL),
(3136, '127.0.0.1', NULL, NULL),
(3137, '127.0.0.1', NULL, NULL),
(3138, '127.0.0.1', NULL, NULL),
(3139, '127.0.0.1', NULL, NULL),
(3140, '127.0.0.1', NULL, NULL),
(3141, '127.0.0.1', NULL, NULL),
(3142, '127.0.0.1', NULL, NULL),
(3143, '127.0.0.1', NULL, NULL),
(3144, '127.0.0.1', NULL, NULL),
(3145, '127.0.0.1', NULL, NULL),
(3146, '127.0.0.1', NULL, NULL),
(3147, '127.0.0.1', NULL, NULL),
(3148, '127.0.0.1', NULL, NULL),
(3149, '127.0.0.1', NULL, NULL),
(3150, '127.0.0.1', NULL, NULL),
(3151, '127.0.0.1', NULL, NULL),
(3152, '127.0.0.1', NULL, NULL),
(3153, '127.0.0.1', NULL, NULL),
(3154, '127.0.0.1', NULL, NULL),
(3155, '127.0.0.1', NULL, NULL),
(3156, '127.0.0.1', NULL, NULL),
(3157, '127.0.0.1', NULL, NULL),
(3158, '127.0.0.1', NULL, NULL),
(3159, '127.0.0.1', NULL, NULL),
(3160, '127.0.0.1', NULL, NULL),
(3161, '127.0.0.1', NULL, NULL),
(3162, '127.0.0.1', NULL, NULL),
(3163, '127.0.0.1', NULL, NULL),
(3164, '127.0.0.1', NULL, NULL),
(3165, '127.0.0.1', NULL, NULL),
(3166, '127.0.0.1', NULL, NULL),
(3167, '127.0.0.1', NULL, NULL),
(3168, '127.0.0.1', NULL, NULL),
(3169, '127.0.0.1', NULL, NULL),
(3170, '127.0.0.1', NULL, NULL),
(3171, '127.0.0.1', NULL, NULL),
(3172, '127.0.0.1', NULL, NULL),
(3173, '127.0.0.1', NULL, NULL),
(3174, '127.0.0.1', NULL, NULL),
(3175, '127.0.0.1', NULL, NULL),
(3176, '127.0.0.1', NULL, NULL),
(3177, '127.0.0.1', NULL, NULL),
(3178, '127.0.0.1', NULL, NULL),
(3179, '127.0.0.1', NULL, NULL),
(3180, '127.0.0.1', NULL, NULL),
(3181, '127.0.0.1', NULL, NULL),
(3182, '127.0.0.1', NULL, NULL),
(3183, '127.0.0.1', NULL, NULL),
(3184, '127.0.0.1', NULL, NULL),
(3185, '127.0.0.1', NULL, NULL),
(3186, '127.0.0.1', NULL, NULL),
(3187, '127.0.0.1', NULL, NULL),
(3188, '127.0.0.1', NULL, NULL),
(3189, '127.0.0.1', NULL, NULL),
(3190, '127.0.0.1', NULL, NULL),
(3191, '127.0.0.1', NULL, NULL),
(3192, '127.0.0.1', NULL, NULL),
(3193, '127.0.0.1', NULL, NULL),
(3194, '127.0.0.1', NULL, NULL),
(3195, '127.0.0.1', NULL, NULL),
(3196, '127.0.0.1', NULL, NULL),
(3197, '127.0.0.1', NULL, NULL),
(3198, '127.0.0.1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `student_id`, `language`, `created_at`, `updated_at`) VALUES
(2, 3, 'en', NULL, NULL),
(3, 1, 'en', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lecs_schedule`
--

CREATE TABLE `lecs_schedule` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecs_schedules_id` bigint(20) UNSIGNED NOT NULL,
  `instructor_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `professor_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lecs_schedule`
--

INSERT INTO `lecs_schedule` (`id`, `course_name`, `lecs_schedules_id`, `instructor_name`, `professor_name`, `day`, `time_from`, `time_to`, `created_at`, `updated_at`) VALUES
(1, 'Accounting 1', 4, NULL, 'Omar Ahmed', 'Saturday', '9:00', '11:00', '2020-07-24 15:53:49', '2020-07-24 15:53:49'),
(2, 'Accounting 2', 4, NULL, 'Omar Ahmed', 'Sunday', '11:30', '1:30', '2020-07-24 15:53:49', '2020-07-24 15:53:49'),
(3, 'Programming 1', 4, NULL, 'Gamal Mohamed', 'Monday', '2:00', '4:00', '2020-07-24 15:53:49', '2020-07-24 15:53:49'),
(4, 'Programming 2', 4, NULL, 'Gamal Mohamed', 'Wednesday', '11:30', '1:30', '2020-07-24 15:53:49', '2020-07-24 15:53:49'),
(5, 'Database 1', 4, NULL, 'Ahmed Mostafa', 'Wednesday', '9:00', '11:00', '2020-07-24 15:53:49', '2020-07-24 15:53:49'),
(6, 'Database 2', 4, NULL, 'Ahmed Mostafa', 'Wednesday', '2:00', '4:00', '2020-07-24 15:53:49', '2020-07-24 15:53:49');

-- --------------------------------------------------------

--
-- Table structure for table `lecs_schedules`
--

CREATE TABLE `lecs_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester_no` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lecs_schedules`
--

INSERT INTO `lecs_schedules` (`id`, `semester_no`, `created_at`, `updated_at`) VALUES
(4, 2, '2020-07-24 15:53:49', '2020-07-24 15:53:49');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `phone`, `email`, `content`, `created_at`, `updated_at`) VALUES
(2, 'محمد قرباوي', '01141209801', 'mohamedkarabawy@hotmail.com', 'مرحباً، هذه رسالة اختبار!.', '2020-07-27 11:20:14', '2020-07-27 11:20:14'),
(3, 'Moahmed', '1111', 'test@email.com', 'test message', '2021-06-17 16:45:28', '2021-06-17 16:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(39, '2014_10_12_000000_create_users_table', 1),
(40, '2014_10_12_100000_create_password_resets_table', 1),
(41, '2020_02_29_125940_create_articles_table', 1),
(42, '2020_02_29_131257_categories', 1),
(43, '2020_03_06_122943_admin_users_table', 1),
(44, '2020_03_06_123034_admin_password_rests_table', 1),
(45, '2020_03_10_143149_create_colleges_table', 1),
(46, '2020_03_10_210859_create_departments_table', 1),
(47, '2020_03_11_053706_student_data', 1),
(48, '2020_03_11_060434_student_id', 1),
(49, '2020_03_17_190003_create_course_groups_table', 1),
(50, '2020_03_17_190019_create_course_orders_table', 1),
(51, '2020_03_17_201452_courses', 1),
(52, '2020_03_17_230208_create_article_category', 2),
(53, '2020_03_17_231904_create_article_category', 3),
(54, '2020_03_18_213246_courses', 4),
(55, '2020_03_21_035214_courses', 5),
(57, '2020_03_23_001513_create_student_courses_table', 6),
(103, '2020_03_23_001019_create_student_data_table', 7),
(104, '2020_03_28_194159_create_student_courses_table', 7),
(105, '2020_04_18_164036_create_exams_schedules_table', 7),
(106, '2020_04_18_164129_create_lecs_schedules_table', 7),
(107, '2020_04_18_165029_create_exam_schedule', 7),
(108, '2020_04_18_165129_create_lecs_schedule', 7),
(109, '2020_06_13_173736_course_name', 7),
(110, '2020_06_15_221734_course_status', 8),
(111, '2020_07_02_084214_student_status', 9),
(112, '2020_07_23_040724_page_views', 10),
(113, '2020_07_23_045157_unique_vistors', 11),
(115, '2020_07_23_050135_ip_address', 12),
(116, '2020_07_25_211536_create_articles', 13),
(117, '2020_07_25_214205_create_pages_table', 14),
(118, '2020_07_26_070459_create_languages', 15),
(120, '2020_07_26_215911_create_messages_table', 16),
(151, '2020_07_27_153005_create_nav__multi_links_table', 17),
(152, '2020_07_27_153038_create_college__briefs_table', 17),
(153, '2020_07_27_153111_create_dean__shes_table', 17),
(154, '2020_07_27_153137_create_goals_table', 17),
(155, '2020_07_27_153207_create_the__messages_table', 17),
(156, '2020_07_27_153232_create_future__visions_table', 17),
(157, '2020_07_27_192010_create_navbars', 17),
(158, '2020_07_28_020255_create_briefs_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `navbars`
--

CREATE TABLE `navbars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nav_id` bigint(20) UNSIGNED DEFAULT NULL,
  `page_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navbars`
--

INSERT INTO `navbars` (`id`, `nav_id`, `page_title`, `link`, `type`, `language`, `created_at`, `updated_at`) VALUES
(8, NULL, 'Academic Advising', '#', NULL, 'en', '2020-07-28 07:18:38', '2020-07-28 07:18:38'),
(9, 3, 'Management Information Systems', 'http://universityapp.net/pages/4', 'multi', 'en', '2020-07-28 07:22:23', '2021-04-11 18:20:13'),
(10, 3, 'Banking', 'http://universityapp.net/pages/5', 'multi', 'en', '2020-07-28 07:22:23', '2021-04-11 18:19:33'),
(11, 3, 'Accounting', 'http://universityapp.net/pages/6', 'multi', 'en', '2020-07-28 07:22:23', '2021-04-11 18:19:33'),
(12, 3, 'Business adminstration and marketing', '#', 'multi', 'en', '2020-07-28 07:22:23', '2020-07-28 07:22:23'),
(13, NULL, 'About', '#', NULL, 'en', '2020-07-28 07:23:08', '2020-07-28 07:23:08'),
(14, NULL, 'الأنشطة الاكاديمية', '#', NULL, 'ar', '2021-05-04 04:00:01', '2021-05-04 04:00:01'),
(21, 5, 'نظم معلومات إدارية', '#', 'multi', 'ar', '2021-06-16 21:57:07', '2021-06-23 16:09:54'),
(22, 5, 'علوم مصرفية', '#', 'multi', 'ar', '2021-06-16 21:57:07', '2021-06-23 16:09:54'),
(23, 5, 'محاسبة', '#', 'multi', 'ar', '2021-06-16 21:57:07', '2021-06-23 16:09:54'),
(24, 5, 'تسويق وتجارة وإدارة', '#', 'multi', 'ar', '2021-06-16 21:57:07', '2021-06-23 16:09:54'),
(25, NULL, 'معلومات عنا', '#', NULL, 'ar', '2021-06-16 21:58:27', '2021-06-16 21:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `nav__multi_links`
--

CREATE TABLE `nav__multi_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nav__multi_links`
--

INSERT INTO `nav__multi_links` (`id`, `title`, `created_at`, `updated_at`) VALUES
(3, 'Departments', '2020-07-28 07:22:23', '2020-07-28 07:22:23'),
(5, 'الأقسام', '2021-06-16 21:57:07', '2021-06-16 21:57:07');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(2, 'Page 1', '<p style=\"text-align: center;\"><strong>Page 1</strong></p>', '2020-07-25 20:10:45', '2020-07-25 20:10:45'),
(3, 'Page 2', '<p style=\"text-align: center;\"><strong>Page 2</strong></p>', '2020-07-25 20:11:05', '2020-07-25 20:11:05'),
(4, 'Management Information Systems', '<h1>High Valley Institute</h1>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<p>The High Valley Institute for Information Systems was established by Ministerial Resolution No 929 on June 17, 2006</p>\r\n\r\n<hr />\r\n<h3 style=\"text-align:left\">:First : Conditions for admission to the Information Systems Department</h3>\r\n\r\n<p>General secondary school and its equivalent and the equivalent of Arab and foreign certificates<br />\r\nCommercial secondary system 3 - 5 years<br />\r\nIndustrial Secondary 3-5 years<br />\r\nTechnical secondary for administration and services<br />\r\nDiploma in industrial technical institutes<br />\r\nDiploma of management and secretarial institutes<br />\r\nDiploma of commercial technical institutes</p>\r\n\r\n<p>Students holding a diploma in commercial technical institutes are admitted to the second year of the Department of Management Information Systems only, with the student downloading the general management course courses, the basics of structural programming and the insurance course portion of the mathematics and insurance course</p>\r\n\r\n<hr />\r\n<p>Academic degree awarded by the Institute: Bachelor&#39;s degree in Information Systems<br />\r\nConstruction Resolution: (929) on June 17, 2006<br />\r\nEquivalent Decision: - The Supreme Council of Universities Resolution No. (159) was issued on 3/6/2013 equivalent to the bachelor&rsquo;s degree granted by the Institute in Information Systems ..(study in Arabic)<br />\r\nNote: - Studying in the institute with credit hours system<br />\r\nWith regard to studying in English: - Graduates from general secondary schools (languages and languages other than) and their equivalent Arab and foreign certificates shall accept a minimum of 75% in the English language.</p>', '2020-07-28 07:15:43', '2020-07-28 07:15:43'),
(5, 'Banking', '<h1>High Valley Institute</h1>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<p>The High Valley Institute was established by Ministerial Resolution No 929 on June 17, 2006</p>\r\n\r\n<hr />\r\n<h3 style=\"text-align:left\">First : Conditions for admission to Banking Sciences Department:</h3>\r\n\r\n<p>General secondary school and its equivalent and the equivalent of Arab and foreign certificates<br />\r\nCommercial secondary system 3 - 5 years<br />\r\nIndustrial Secondary 3-5 years<br />\r\nTechnical secondary for administration and services<br />\r\nDiploma in industrial technical institutes<br />\r\nDiploma of management and secretarial institutes<br />\r\nDiploma of commercial technical institutes</p>\r\n\r\n<hr />\r\n<p>Academic degree awarded by the Institute: Bachelor&#39;s degree in Banking Sciences<br />\r\nConstruction Resolution: (929) on June 17, 2006<br />\r\nEquivalent Decision: - The Supreme Council of Universities Resolution No. (159) was issued on 3/6/2013 equivalent to the bachelor&rsquo;s degree granted by the Institute in Banking Sciences.(study in Arabic)<br />\r\nNote: - Studying in the institute with credit hours system<br />\r\nWith regard to studying in English: - Graduates from general secondary schools (languages and languages other than) and their equivalent Arab and foreign certificates shall accept a minimum of 75% in the English language.</p>', '2020-07-28 07:16:26', '2020-07-28 07:16:26'),
(6, 'Accounting', '<h1>High Valley Institute</h1>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<p>The High Valley Institute was established by Ministerial Resolution No 929 on June 17, 2006</p>\r\n\r\n<hr />\r\n<h3 style=\"text-align:left\">First : Conditions for admission to Accounting Department:</h3>\r\n\r\n<p>General secondary school and its equivalent and the equivalent of Arab and foreign certificates<br />\r\nCommercial secondary system 3 - 5 years<br />\r\nIndustrial Secondary 3-5 years<br />\r\nTechnical secondary for administration and services<br />\r\nDiploma in industrial technical institutes<br />\r\nDiploma of management and secretarial institutes<br />\r\nDiploma of commercial technical institutes</p>\r\n\r\n<hr />\r\n<p>Academic degree awarded by the Institute: Bachelor&#39;s degree in Accounting<br />\r\nConstruction Resolution: (929) on June 17, 2006<br />\r\nEquivalent Decision: - The Supreme Council of Universities Resolution No. (159) was issued on 3/6/2013 equivalent to the bachelor&rsquo;s degree granted by the Institute in Accounting.(study in Arabic)<br />\r\nNote: - Studying in the institute with credit hours system<br />\r\nWith regard to studying in English: - Graduates from general secondary schools (languages and languages other than) and their equivalent Arab and foreign certificates shall accept a minimum of 75% in the English language.</p>', '2020-07-28 07:17:20', '2020-07-28 07:17:20');

-- --------------------------------------------------------

--
-- Table structure for table `page_views`
--

CREATE TABLE `page_views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `views` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_views`
--

INSERT INTO `page_views` (`id`, `views`, `created_at`, `updated_at`) VALUES
(1, 3240, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('emad.ahmed@yahoo.com', '$2y$10$D35ZV6NIWYxCyMNS9JbiQ.iHo0r5KMgQd53FFN/XSXjZ2lguSn6IC', '2020-07-23 00:02:38'),
('college40002@gmail.com', '$2y$10$0TFaUd1gdvIMRQG5onnbueRNu1jVCkyIhSYYxgZ3eEmH39lcYO0C.', '2020-07-23 01:02:08');

-- --------------------------------------------------------

--
-- Table structure for table `student_courses`
--

CREATE TABLE `student_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_data_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `mid_term_grade` double(8,2) DEFAULT NULL,
  `grade` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `course_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_courses`
--

INSERT INTO `student_courses` (`id`, `student_data_id`, `course_id`, `mid_term_grade`, `grade`, `created_at`, `updated_at`, `course_name`, `course_status`) VALUES
(11, 3, 29, 25.00, 4.00, '2020-07-01 21:32:18', '2020-07-02 07:33:22', 'Programming 1', NULL),
(12, 3, 30, 22.00, 3.70, '2020-07-01 21:32:18', '2020-07-02 07:31:06', 'Programming 2', NULL),
(13, 3, 31, 24.00, 4.00, '2020-07-01 21:32:18', '2020-07-02 07:33:22', 'Programming 3', NULL),
(14, 3, 32, 20.00, 3.30, '2020-07-01 21:32:18', '2020-07-02 07:31:06', 'Database 1', NULL),
(15, 3, 33, 19.00, 3.00, '2020-07-01 21:32:18', '2020-07-02 07:33:22', 'Database 2', NULL),
(16, 3, 34, 18.00, 2.70, '2020-07-01 21:32:18', '2020-07-02 07:31:06', 'Accounting 1', NULL),
(17, 4, 29, NULL, NULL, '2020-07-02 15:43:51', '2020-07-02 15:43:51', 'Programming 1', NULL),
(18, 4, 30, NULL, NULL, '2020-07-02 15:43:52', '2020-07-02 15:43:52', 'Programming 2', NULL),
(19, 4, 34, NULL, NULL, '2020-07-02 15:43:52', '2020-07-02 15:43:52', 'Accounting 1', NULL),
(20, 4, 35, NULL, NULL, '2020-07-02 15:43:52', '2020-07-02 15:43:52', 'Accounting 2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `level` bigint(20) NOT NULL,
  `college` bigint(20) UNSIGNED NOT NULL,
  `department` bigint(20) UNSIGNED NOT NULL,
  `gpa` double(9,3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `student_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`id`, `student_id`, `level`, `college`, `department`, `gpa`, `created_at`, `updated_at`, `student_status`) VALUES
(3, 1, 4, 2, 2, 3.450, '2020-07-01 21:32:18', '2020-07-02 07:33:22', NULL),
(4, 3, 2, 2, 2, 0.000, '2020-07-02 15:43:50', '2020-07-02 15:43:52', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `the__messages`
--

CREATE TABLE `the__messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `the__messages`
--

INSERT INTO `the__messages` (`id`, `content`, `language`, `created_at`, `updated_at`) VALUES
(6, 'يسعى المعهد إلى إعداد خريج متميز قادر على المنافسة في سوق العمل وخدمة المجتمع.', 'ar', '2020-07-28 04:55:09', '2020-07-28 04:55:09'),
(7, '- The college seeks to prepare a distinguished graduate who is able to compete in the labor market and community service.', 'en', '2020-07-28 05:08:10', '2020-07-28 05:08:10');

-- --------------------------------------------------------

--
-- Table structure for table `unique_vistors`
--

CREATE TABLE `unique_vistors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vistors` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unique_vistors`
--

INSERT INTO `unique_vistors` (`id`, `vistors`, `created_at`, `updated_at`) VALUES
(1, 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `student_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `student_id`) VALUES
(1, 'Ahmed Mahmoud Gamal', 'college40002@gmail.com', NULL, '$2y$10$TW2j6TUtek2XIetz5W1fWu7G/zxUqLJ7IFr/UtSPAMOTWl0L49A2O', 'jafm4J1cfw6uZntdETPHoU2X8owggzpTj9yJf8f1mnS3K1zxVewEqNLk4zKn', '2020-03-22 22:32:15', '2021-06-17 16:31:00', '20160205'),
(2, 'Mahmoud Mohamed Ahmed', 'mahmoud.mohamed@gmail.com', NULL, '$2y$10$rk/GKJ0wv2g/V0dfOQdob.FCfiSJBrne37XMyHfMc7VrZEXTnsVsi', 'XqNvHYOPYl9BGf0SBzNvKLyJrm7wNKaye7P2SmPpDWu244FjTIDwtZ7rUYDC', '2020-03-28 19:35:21', '2020-03-28 19:35:21', '20150215'),
(3, 'Emad Ahmed Mohamed', 'emad.ahmed@yahoo.com', NULL, '$2y$10$q1YQjHIhGcNopGfr2bmaWeNJ5MCPiZJonpTaFvl0ylaD1AwHfSIFS', 'rBShhMH2RggWaTgWG2G1QpyV7ewJXyWiYyGBWcEWFmyRMZmjdUkcgDbGHv2Y', '2020-03-29 04:19:51', '2020-03-29 04:19:51', '20170169');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_username_unique` (`userName`),
  ADD UNIQUE KEY `admin_users_email_unique` (`email`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `briefs`
--
ALTER TABLE `briefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college__briefs`
--
ALTER TABLE `college__briefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_department_id_foreign` (`department_id`),
  ADD KEY `courses_course_group_foreign` (`course_group`),
  ADD KEY `courses_course_order_foreign` (`course_order`);

--
-- Indexes for table `course_groups`
--
ALTER TABLE `course_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_orders`
--
ALTER TABLE `course_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dean__shes`
--
ALTER TABLE `dean__shes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departments_college_id_foreign` (`college_id`);

--
-- Indexes for table `exams_schedules`
--
ALTER TABLE `exams_schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_schedule`
--
ALTER TABLE `exam_schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_schedule_exams_schedules_id_foreign` (`exams_schedules_id`);

--
-- Indexes for table `future__visions`
--
ALTER TABLE `future__visions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ip_addresses`
--
ALTER TABLE `ip_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `languages_student_id_foreign` (`student_id`);

--
-- Indexes for table `lecs_schedule`
--
ALTER TABLE `lecs_schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lecs_schedule_lecs_schedules_id_foreign` (`lecs_schedules_id`);

--
-- Indexes for table `lecs_schedules`
--
ALTER TABLE `lecs_schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbars`
--
ALTER TABLE `navbars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `navbars_nav_id_foreign` (`nav_id`);

--
-- Indexes for table `nav__multi_links`
--
ALTER TABLE `nav__multi_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_views`
--
ALTER TABLE `page_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `student_courses`
--
ALTER TABLE `student_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_courses_student_data_id_foreign` (`student_data_id`),
  ADD KEY `student_courses_course_id_foreign` (`course_id`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_data_student_id_foreign` (`student_id`),
  ADD KEY `student_data_college_foreign` (`college`),
  ADD KEY `student_data_department_foreign` (`department`);

--
-- Indexes for table `the__messages`
--
ALTER TABLE `the__messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unique_vistors`
--
ALTER TABLE `unique_vistors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `briefs`
--
ALTER TABLE `briefs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `college__briefs`
--
ALTER TABLE `college__briefs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `course_groups`
--
ALTER TABLE `course_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `course_orders`
--
ALTER TABLE `course_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `dean__shes`
--
ALTER TABLE `dean__shes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `exams_schedules`
--
ALTER TABLE `exams_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exam_schedule`
--
ALTER TABLE `exam_schedule`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `future__visions`
--
ALTER TABLE `future__visions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ip_addresses`
--
ALTER TABLE `ip_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3199;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lecs_schedule`
--
ALTER TABLE `lecs_schedule`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lecs_schedules`
--
ALTER TABLE `lecs_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `navbars`
--
ALTER TABLE `navbars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `nav__multi_links`
--
ALTER TABLE `nav__multi_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `page_views`
--
ALTER TABLE `page_views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_courses`
--
ALTER TABLE `student_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `the__messages`
--
ALTER TABLE `the__messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `unique_vistors`
--
ALTER TABLE `unique_vistors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_course_group_foreign` FOREIGN KEY (`course_group`) REFERENCES `course_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `courses_course_order_foreign` FOREIGN KEY (`course_order`) REFERENCES `course_orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `courses_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`id`);

--
-- Constraints for table `exam_schedule`
--
ALTER TABLE `exam_schedule`
  ADD CONSTRAINT `exam_schedule_exams_schedules_id_foreign` FOREIGN KEY (`exams_schedules_id`) REFERENCES `exams_schedules` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `languages`
--
ALTER TABLE `languages`
  ADD CONSTRAINT `languages_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lecs_schedule`
--
ALTER TABLE `lecs_schedule`
  ADD CONSTRAINT `lecs_schedule_lecs_schedules_id_foreign` FOREIGN KEY (`lecs_schedules_id`) REFERENCES `lecs_schedules` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `navbars`
--
ALTER TABLE `navbars`
  ADD CONSTRAINT `navbars_nav_id_foreign` FOREIGN KEY (`nav_id`) REFERENCES `nav__multi_links` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_courses`
--
ALTER TABLE `student_courses`
  ADD CONSTRAINT `student_courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_courses_student_data_id_foreign` FOREIGN KEY (`student_data_id`) REFERENCES `student_data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_data`
--
ALTER TABLE `student_data`
  ADD CONSTRAINT `student_data_college_foreign` FOREIGN KEY (`college`) REFERENCES `colleges` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_data_department_foreign` FOREIGN KEY (`department`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_data_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
