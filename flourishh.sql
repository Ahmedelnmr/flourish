-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 01:43 AM
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
-- Database: `flourishh`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `choose` varchar(50) NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `choose`, `question_id`, `created_at`, `updated_at`) VALUES
(1, 'الحمد لله', 8, NULL, NULL),
(2, 'ملكش دعوه', 8, NULL, NULL),
(3, 'لا', 8, NULL, NULL),
(4, 'كويس', 8, NULL, NULL),
(5, 'ايوا', 9, NULL, NULL),
(6, 'ملكش فيه', 9, NULL, NULL),
(7, 'لا', 9, NULL, NULL),
(8, 'مش عارف', 9, NULL, NULL),
(9, 'بكره', 10, NULL, NULL),
(10, 'الاسبوع الجاي', 10, NULL, NULL),
(11, 'الخميس', 10, NULL, NULL),
(12, 'الله اعلم', 10, NULL, NULL),
(13, 'باريس', 11, NULL, NULL),
(14, 'لندن', 11, NULL, NULL),
(15, 'روما', 11, NULL, NULL),
(16, 'برلين', 11, NULL, NULL),
(17, 'المشتري', 12, NULL, NULL),
(18, 'زحل', 12, NULL, NULL),
(19, 'أورانوس', 12, NULL, NULL),
(20, 'نبتون', 12, NULL, NULL),
(21, 'جون ميلتون', 13, NULL, NULL),
(22, 'جون كيتس', 13, NULL, NULL),
(23, 'شارلوت برونتي', 13, NULL, NULL),
(24, 'ويليام شكسبير', 13, NULL, NULL),
(25, 'H2O', 14, NULL, NULL),
(26, 'CO2', 14, NULL, NULL),
(27, 'O2', 14, NULL, NULL),
(28, 'NH3', 14, NULL, NULL),
(29, 'الصين', 15, NULL, NULL),
(30, 'اليابان', 15, NULL, NULL),
(31, 'كوريا الجنوبية', 15, NULL, NULL),
(32, 'السعودية', 15, NULL, NULL),
(33, 'الأكسجين', 16, NULL, NULL),
(34, 'الهيدروجين', 16, NULL, NULL),
(35, 'النيتروجين', 16, NULL, NULL),
(36, 'الأرجون', 16, NULL, NULL),
(37, 'ليوناردو دا فينشي', 17, NULL, NULL),
(38, 'ميخائيل أنجلو', 17, NULL, NULL),
(39, 'رافائيل', 17, NULL, NULL),
(40, 'بيكاسو', 17, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `descraption` text NOT NULL,
  `ins_name` varchar(255) NOT NULL,
  `num_lec` int(11) NOT NULL,
  `duartion` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `image`, `descraption`, `ins_name`, `num_lec`, `duartion`, `created_at`, `updated_at`) VALUES
(1, 'html', 'assets\\imgs\\ai.jpg', 'الـ HTML هي اللغة الام لاى موقع الكتروني ولا تعتبر الـ HTML لغة برمجة وانما هي لغة ترميز (Markup Language) وتستخدم في بناء البنية التحتية لأي صفحة ويب من حيث بناء عناصرها من قوائم وفقرات وصور وعناوين وغيرها و كلمه HTML هي اختصار لـ HyperText Markup Language وتعمل لغة HTML بنظام الوسوم (tags) وهي لغه سهله جدا يمكن لأي شخص تعلمها بدون سابق خبره.', 'ahmed', 3, 17.30, NULL, NULL),
(2, 'css', 'assets\\imgs\\ai.jpg', '', 'ahmed', 0, 0.00, NULL, NULL),
(3, 'c++', 'assets\\imgs\\ai.jpg', '', 'ahmed', 0, 0.00, NULL, NULL),
(4, 'jave', 'assets\\imgs\\ai.jpg', '', 'ahmed', 0, 0.00, NULL, NULL),
(5, 'core', 'assets\\imgs\\ai.jpg', '', 'ahmed', 0, 0.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `diolmaccourse_pivot`
--

CREATE TABLE `diolmaccourse_pivot` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `diploma_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diolmaccourse_pivot`
--

INSERT INTO `diolmaccourse_pivot` (`id`, `diploma_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 1, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `diplomas`
--

CREATE TABLE `diplomas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diplomas`
--

INSERT INTO `diplomas` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'الذكاء الاصطناعي', 'assets\\imgs\\ai.jpg', NULL, NULL),
(2, 'الذكاء الاصطناعي', 'assets\\imgs\\ai.jpg', NULL, NULL),
(3, 'الذكاء الاصطناعي', 'assets\\imgs\\ai.jpg', NULL, NULL),
(4, 'الذكاء الاصطناعي', 'assets\\imgs\\ai.jpg', NULL, NULL),
(5, 'الذكاء الاصناعي', 'assets\\imgs\\ai.jpg', NULL, NULL),
(6, 'الذكاء الاصطناعي', 'assets\\imgs\\ai.jpg', NULL, NULL),
(7, 'الذكاء الاصطناعي', 'assets\\imgs\\ai.jpg', NULL, NULL),
(8, 'الذكاء الاصناعي', 'assets\\imgs\\ai.jpg', NULL, NULL),
(9, 'الذكاء الاصطناعي', 'assets\\imgs\\ai.jpg', NULL, NULL),
(10, 'الذكاء الاصناعي', 'assets\\imgs\\ai.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `name`, `course_id`, `created_at`, `updated_at`) VALUES
(2, 'html', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `examsdata`
-- (See below for the actual view)
--
CREATE TABLE `examsdata` (
`id` bigint(20) unsigned
,`examName` varchar(255)
,`course_id` bigint(20) unsigned
,`quesId` bigint(20) unsigned
,`ques_num` int(11)
,`questionName` text
,`examId` bigint(20) unsigned
,`correctAns` varchar(20)
,`answerId` bigint(20) unsigned
,`quuesionId` bigint(20) unsigned
,`chose` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `exam_results`
--

CREATE TABLE `exam_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `answer` varchar(50) DEFAULT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `courseId` bigint(20) UNSIGNED NOT NULL,
  `ques_num` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_results`
--

INSERT INTO `exam_results` (`id`, `answer`, `userId`, `courseId`, `ques_num`, `created_at`, `updated_at`) VALUES
(820, 'ملكش دعوه', 9, 1, 1, '2024-05-07 21:27:13', '2024-05-07 21:27:13'),
(821, NULL, 9, 1, 2, '2024-05-07 21:27:13', '2024-05-07 21:27:13'),
(822, 'بكره', 9, 1, 3, '2024-05-07 21:27:13', '2024-05-07 21:27:13'),
(823, NULL, 9, 1, 4, '2024-05-07 21:27:13', '2024-05-07 21:27:13'),
(824, NULL, 9, 1, 5, '2024-05-07 21:27:13', '2024-05-07 21:27:13'),
(825, NULL, 9, 1, 6, '2024-05-07 21:27:13', '2024-05-07 21:27:13'),
(826, NULL, 9, 1, 7, '2024-05-07 21:27:13', '2024-05-07 21:27:13'),
(827, NULL, 9, 1, 8, '2024-05-07 21:27:13', '2024-05-07 21:27:13'),
(828, NULL, 9, 1, 9, '2024-05-07 21:27:13', '2024-05-07 21:27:13'),
(829, NULL, 9, 1, 10, '2024-05-07 21:27:13', '2024-05-07 21:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_04_22_025802_create_tracks_table', 2),
(7, '2024_04_23_042020_create_diplomas_table', 3),
(8, '2024_04_23_143540_create_courses_table', 4),
(9, '2024_04_23_151423_create_traccourse_pivot_table', 4),
(10, '2024_04_23_174056_create_diolmaccourse_pivot_table', 5),
(11, '2024_04_24_051514_create_videos_table', 6),
(12, '2024_04_25_052741_change_duration_column_type_in_videos_table', 7),
(13, '2024_04_25_053233_change_durationn_column_type_in_videos_table', 8),
(14, '2024_04_25_054054_change_durationnn_column_type_in_videos_table', 9),
(15, '2024_04_25_054406_change_durationnnn_column_type_in_videos_table', 10),
(16, '2024_04_26_180049_create_exams_table', 11),
(17, '2024_04_26_180154_create_questions_table', 12),
(18, '2024_04_27_053158_create_answers_table', 12),
(19, '2024_04_27_080134_add_correct_answer_to_questions_table', 13),
(20, '2024_05_04_203646_create_my_courses', 14),
(21, '2024_05_04_212424_create_temp_videos', 15),
(22, '2024_05_05_233102_exams_data', 16),
(23, '2024_05_06_184323_create_exam_results', 17);

-- --------------------------------------------------------

--
-- Table structure for table `my_courses`
--

CREATE TABLE `my_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `exam_status` varchar(20) DEFAULT 'notDone',
  `exam_score` int(11) DEFAULT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `courseId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `my_courses`
--

INSERT INTO `my_courses` (`id`, `name`, `status`, `exam_status`, `exam_score`, `userId`, `courseId`, `created_at`, `updated_at`) VALUES
(5, 'html', 'joind', 'not done', 1, 5, 1, '2024-05-06 21:04:38', '2024-05-06 23:54:47'),
(6, 'html', 'joind', 'done', 1, 6, 1, '2024-05-07 17:20:10', '2024-05-07 19:16:34'),
(7, 'html', 'joind', 'done', 1, 8, 1, '2024-05-07 19:18:08', '2024-05-07 19:25:26'),
(8, 'html', 'joind', 'done', 1, 9, 1, '2024-05-07 20:38:09', '2024-05-07 21:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ques_num` int(11) NOT NULL,
  `question` text NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `courseId` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `correctAns` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `ques_num`, `question`, `exam_id`, `courseId`, `correctAns`, `created_at`, `updated_at`) VALUES
(8, 1, 'كيف حالك يا صحبي ؟', 2, 1, 'الحمد لله', NULL, NULL),
(9, 2, 'رايح تتفرج على النهائي ؟', 2, 1, 'ايوا', NULL, NULL),
(10, 3, 'متى موعد مبارة ريال مدريد ؟', 2, 1, 'بكره', NULL, NULL),
(11, 4, 'ما هي عاصمة فرنسا؟', 2, 1, 'باريس', NULL, NULL),
(12, 5, 'ما هو أكبر كوكب في النظام الشمسي؟', 2, 1, 'المشتري', NULL, NULL),
(13, 6, 'من كتب \"روميو وجولييت\"؟', 2, 1, 'ويليام شكسبير', NULL, NULL),
(14, 7, 'ما هو الرمز الكيميائي للماء؟', 2, 1, 'H2O', NULL, NULL),
(15, 8, 'أي بلد يعرف ببلد الشمس المشرقة؟', 2, 1, 'اليابان', NULL, NULL),
(16, 9, 'ما هو المكون الرئيسي للهواء؟', 2, 1, 'النيتروجين', NULL, NULL),
(17, 10, 'من رسم لوحة الموناليزا؟', 2, 1, 'ليوناردو دا فينشي', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `temp_videos`
--

CREATE TABLE `temp_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `courseId` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `temp_videos`
--

INSERT INTO `temp_videos` (`id`, `name`, `courseId`, `userId`, `created_at`, `updated_at`) VALUES
(7, 'b', 1, 5, '2024-05-06 21:06:30', '2024-05-06 21:06:30'),
(8, 'ahmed', 1, 5, '2024-05-06 21:23:44', '2024-05-06 21:23:44'),
(9, 'mahmoud', 1, 5, '2024-05-06 21:24:00', '2024-05-06 21:24:00'),
(10, 'b', 1, 6, '2024-05-07 17:20:18', '2024-05-07 17:20:18'),
(11, 'ahmed', 1, 6, '2024-05-07 17:20:27', '2024-05-07 17:20:27'),
(12, 'mahmoud', 1, 6, '2024-05-07 17:20:34', '2024-05-07 17:20:34'),
(14, 'ahmed', 1, 8, '2024-05-07 19:18:23', '2024-05-07 19:18:23'),
(20, 'b', 1, 8, '2024-05-07 19:52:19', '2024-05-07 19:52:19'),
(21, 'mahmoud', 1, 8, '2024-05-07 19:53:01', '2024-05-07 19:53:01'),
(22, 'b', 1, 9, '2024-05-07 20:41:39', '2024-05-07 20:41:39'),
(23, 'ahmed', 1, 9, '2024-05-07 20:44:28', '2024-05-07 20:44:28'),
(24, 'mahmoud', 1, 9, '2024-05-07 20:44:46', '2024-05-07 20:44:46');

-- --------------------------------------------------------

--
-- Table structure for table `traccourse_pivot`
--

CREATE TABLE `traccourse_pivot` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `track_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `traccourse_pivot`
--

INSERT INTO `traccourse_pivot` (`id`, `track_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

CREATE TABLE `tracks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tracks`
--

INSERT INTO `tracks` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'فرونت اند', 'assets\\imgs\\frontendSmallBanner.jpg', NULL, NULL),
(2, 'باك اند', 'assets\\imgs\\frontendSmallBanner.jpg', NULL, NULL),
(3, 'شبكات', 'assets\\imgs\\frontendSmallBanner.jpg', NULL, NULL),
(4, 'شبكات', 'assets\\imgs\\frontendSmallBanner.jpg', NULL, NULL),
(5, 'شبكات', 'assets\\imgs\\frontendSmallBanner.jpg', NULL, NULL),
(6, 'شبكات', 'assets\\imgs\\frontendSmallBanner.jpg', NULL, NULL),
(7, 'شبكات', 'assets\\imgs\\frontendSmallBanner.jpg', NULL, NULL),
(8, 'شبكات', 'assets\\imgs\\frontendSmallBanner.jpg', NULL, NULL),
(9, 'شبكات', 'assets\\imgs\\frontendSmallBanner.jpg', NULL, NULL),
(10, 'شبكات', 'assets\\imgs\\frontendSmallBanner.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ahmed', 'mo', 'ahmed@gmail.com', NULL, '$2y$10$49JzHUyuvxidw0YjKlWEtOdWE62qfHU5xVqneoRlQJgGRYcW7iQX6', NULL, '2024-04-21 11:16:54', '2024-04-21 11:16:54'),
(2, 'x', 'dsc', 'ahmded@gmail.com', NULL, '$2y$10$nIXSz3ebc0i22Wx0.rNpKOUenYD/pQoDO4ushbwRmPFerajYBSDKe', NULL, '2024-04-21 22:47:13', '2024-04-21 22:47:13'),
(4, 'x', 'dsc', 'ahmided@gmail.com', NULL, '$2y$10$hVPpraQdEDZs4F4YqGcmD.P038vSFhb5Ow764rD4WV/ZGoxfv.vuS', NULL, '2024-04-21 22:51:39', '2024-04-21 22:51:39'),
(5, 'abdoo', 'ahmed', 'ahmedabdo@gmail.com', NULL, '$2y$10$BJeUyoD/nFxvYrxz579fg.I3zPsYqKVVO9Pb/PbW.ok54PK9.5I2S', NULL, '2024-05-04 16:45:48', '2024-05-04 16:45:48'),
(6, 'ayman', 'mohamed', 'ayman@gmail.com', NULL, '$2y$10$IozDbrvfACasC58ey3SFCu5As37pf2.4FEF3vPl07UVH6HVu/HmjO', NULL, '2024-05-04 23:05:00', '2024-05-04 23:05:00'),
(7, 'mosa', 'ahmed', 'mosa@gmail.com', NULL, '$2y$10$N6Z.MBKjNXlxHSBU10UlOOgtAslM9NFu38BncdnteFr0cNa7bEvau', NULL, '2024-05-04 23:54:42', '2024-05-04 23:54:42'),
(8, 'hani', 'ahmed', 'hani@gmail.com', NULL, '$2y$10$Wcd71C7P7YUwqv.8wL0UTOfX24/k8RjOkhD/EsmqBgERmj9vnW5t.', NULL, '2024-05-05 10:07:11', '2024-05-05 10:07:11'),
(9, 'abdelrahman', 'nasser', 'abdo@gmail.com', NULL, '$2y$10$dQXapdull1UDGNGqrkX7L.krq69WA49DlNs2Hg7QGnPVZQ6MBy29W', NULL, '2024-05-07 20:33:57', '2024-05-07 20:33:57');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  `duration` time DEFAULT '00:00:00',
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `path`, `duration`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'b', 'assets\\videos\\vid.mp4', '12:00:08', 1, NULL, '2024-05-07 20:38:35'),
(2, 'ahmed', 'assets\\videos\\vid.mp4', '00:00:00', 1, NULL, '2024-05-07 20:38:35'),
(3, 'mahmoud', 'mahmou', '00:00:00', 1, NULL, '2024-05-07 20:38:35');

-- --------------------------------------------------------

--
-- Structure for view `examsdata`
--
DROP TABLE IF EXISTS `examsdata`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `examsdata`  AS SELECT `exams`.`id` AS `id`, `exams`.`name` AS `examName`, `exams`.`course_id` AS `course_id`, `questions`.`id` AS `quesId`, `questions`.`ques_num` AS `ques_num`, `questions`.`question` AS `questionName`, `questions`.`exam_id` AS `examId`, `questions`.`correctAns` AS `correctAns`, `answers`.`id` AS `answerId`, `answers`.`question_id` AS `quuesionId`, `answers`.`choose` AS `chose` FROM ((`exams` join `questions`) join `answers` on(`exams`.`id` = `questions`.`exam_id` and `questions`.`id` = `answers`.`question_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_question_id_foreign` (`question_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diolmaccourse_pivot`
--
ALTER TABLE `diolmaccourse_pivot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diplomas`
--
ALTER TABLE `diplomas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exams_course_id_foreign` (`course_id`);

--
-- Indexes for table `exam_results`
--
ALTER TABLE `exam_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_results_userid_foreign` (`userId`),
  ADD KEY `exam_results_courseid_foreign` (`courseId`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_courses`
--
ALTER TABLE `my_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `my_courses_userid_foreign` (`userId`),
  ADD KEY `my_courses_courseid_foreign` (`courseId`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_exam_id_foreign` (`exam_id`),
  ADD KEY `correctAnsId` (`correctAns`),
  ADD KEY `courseId` (`courseId`);

--
-- Indexes for table `temp_videos`
--
ALTER TABLE `temp_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `temp_videos_courseid_foreign` (`courseId`),
  ADD KEY `temp_videos_userid_foreign` (`userId`);

--
-- Indexes for table `traccourse_pivot`
--
ALTER TABLE `traccourse_pivot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_course_id_foreign` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `diolmaccourse_pivot`
--
ALTER TABLE `diolmaccourse_pivot`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `diplomas`
--
ALTER TABLE `diplomas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exam_results`
--
ALTER TABLE `exam_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=830;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `my_courses`
--
ALTER TABLE `my_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `temp_videos`
--
ALTER TABLE `temp_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `traccourse_pivot`
--
ALTER TABLE `traccourse_pivot`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tracks`
--
ALTER TABLE `tracks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exam_results`
--
ALTER TABLE `exam_results`
  ADD CONSTRAINT `exam_results_courseid_foreign` FOREIGN KEY (`courseId`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_results_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `my_courses`
--
ALTER TABLE `my_courses`
  ADD CONSTRAINT `my_courses_courseid_foreign` FOREIGN KEY (`courseId`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `my_courses_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`courseId`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `temp_videos`
--
ALTER TABLE `temp_videos`
  ADD CONSTRAINT `temp_videos_courseid_foreign` FOREIGN KEY (`courseId`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `temp_videos_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
