-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2023 at 06:31 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iammyanmar`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `description_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_jp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `description_eng`, `description_jp`, `images`, `created_at`, `updated_at`) VALUES
(1, 'Can any foreigner work in Japan?', '外国人は日本で働くことができますか？', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLe5PABjXc17cjIMOibECLM7ppDwMmiDg6Dw&usqp=CAU,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJ6MS5qDGZc270wmWqpwRdp8ozoksf11Ro-s1WKcdwtDprV7ofCIcuCMaC6hmnjzZzQog&usqp=CAU,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQY0haCmjRyHmjjD-NdQmBYA0_2uqJOs_GZ-qRNWkB3p5Rl-gr9pMLblPqW7yR5iu7VJMk&usqp=CAU,https://media.licdn.com/dms/image/C4E03AQFiWFJzzG2pMg/profile-displayphoto-shrink_200_200/0/1517022555956?e=1681344000&v=beta&t=y38A69pjoppYYzjeZvdWavTO_OzTQWB4FtgV5hVYLK4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '09123123123', '$2y$10$qeaImO84wEN2JOUKTE4R.esl7Qwap/.U2eaqFE.VIMyfng.oCkavK', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `app_logs`
--

CREATE TABLE `app_logs` (
  `id` int(11) NOT NULL,
  `app_logs` text DEFAULT NULL,
  `Timestamp` varchar(255) NOT NULL,
  `Action` text DEFAULT NULL,
  `TableName` text DEFAULT NULL,
  `SqlQuery` text DEFAULT NULL,
  `UserID` text DEFAULT NULL,
  `ServerIP` text DEFAULT NULL,
  `RequestUrl` text DEFAULT NULL,
  `RequestData` text DEFAULT NULL,
  `RequestCompleted` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_logs`
--

INSERT INTO `app_logs` (`id`, `app_logs`, `Timestamp`, `Action`, `TableName`, `SqlQuery`, `UserID`, `ServerIP`, `RequestUrl`, `RequestData`, `RequestCompleted`) VALUES
(1, NULL, '2023-03-30 04:13:38', 'userlogin', 'admins', 'SELECT   * FROM admins WHERE  email = ?  LIMIT 1', '1', '::1', 'index/login/', '{\"username\":\"admin@gmail.com\",\"password\":\"$2y$10$qeaImO84wEN2JOUKTE4R.esl7Qwap\\/.U2eaqFE.VIMyfng.oCkavK\"}', 'true'),
(2, NULL, '2023-03-31 16:51:21', 'userlogin', 'admins', 'SELECT   * FROM admins WHERE  email = ?  LIMIT 1', '1', '::1', 'index/login/', '{\"username\":\"admin@gmail.com\",\"password\":\"$2y$10$qeaImO84wEN2JOUKTE4R.esl7Qwap\\/.U2eaqFE.VIMyfng.oCkavK\"}', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `company_user_lists`
--

CREATE TABLE `company_user_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_list_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_user_lists`
--

INSERT INTO `company_user_lists` (`id`, `user_list_id`, `user_id`, `choose_date`, `created_at`, `updated_at`) VALUES
(8, '8', '2', '2023-04-01', '2023-03-31 18:30:25', '2023-03-31 18:30:25'),
(9, '8', '2', '2023-04-01', '2023-03-31 18:30:25', '2023-03-31 18:30:25'),
(10, '1', '2', '2023-04-01', '2023-03-31 18:56:08', '2023-03-31 18:56:08');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `message_date`, `created_at`, `updated_at`) VALUES
(1, 'Zin Min Tun', 'zin@gmail.com', '09444161554', 'Hello I Am Myanmar', 'Hello', '2023-02-23', '2023-02-23 08:15:35', '2023-02-23 08:15:35');

-- --------------------------------------------------------

--
-- Table structure for table `course_schedules`
--

CREATE TABLE `course_schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `level` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_schedules`
--

INSERT INTO `course_schedules` (`id`, `level`, `start_date`, `date_time`, `duration`, `location`, `created_at`, `updated_at`) VALUES
(1, 'N5 + N4', '1.4.2023', 'Mon to Thur 1:00 PM - 3:00 PM', '6 Months', 'Yangon', NULL, NULL),
(2, 'N5 + N4', '1.4.2023', 'Sat & Sun 8:30 AM - 12:30 AM\r\n6 ', '6 Months', 'Yangon', NULL, NULL),
(3, 'N4', '1.4.2023', 'Sat & Sun 1:30 PM - 5:30 PM\r\n3 ', '3 Months', 'Yangon', NULL, NULL),
(4, 'N5 + N4', '1.4.2023', 'Mon to Thur 8:00 AM - 10:00 AM', '6 Months', 'Yangon', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_company` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_category` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_limit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educational_requirement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_experience_requirement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_additional_requirement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimate_salary_offer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_allowance` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interview_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apply_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'CONSTRUCTION', 'https://www.accountancyage.com/wp-content/uploads/2019/03/shutterstock_426500653.jpg', NULL, NULL),
(2, 'AGRICULTURE', 'https://static.dw.com/image/64115429_905.jpg', NULL, NULL),
(3, 'CARE WORKER', 'https://jobacle.com/wp-content/uploads/2022/05/cr-wrk-22.jpg', NULL, NULL),
(4, 'FOOD INDUSTRY', 'https://pmt.com.lb/wp-content/uploads/2021/05/istock-1205125547.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `language_levels`
--

CREATE TABLE `language_levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `language_levels`
--

INSERT INTO `language_levels` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'N5', NULL, NULL),
(2, 'N4', NULL, NULL),
(3, 'N3', NULL, NULL),
(4, 'N2', NULL, NULL),
(5, 'N2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_23_141030_create_contacts_table', 1),
(6, '2023_02_23_145750_create_activities_table', 2),
(7, '2023_02_27_045144_create_news_table', 3),
(8, '2023_02_27_113727_create_employers_table', 4),
(9, '2023_02_28_015307_create_tokuteis_table', 5),
(10, '2023_02_28_022003_create_teachers_table', 6),
(11, '2023_02_28_022655_create_course_schedules_table', 7),
(12, '2023_02_28_035211_create_jobs_table', 8),
(13, '2023_02_28_043148_create_teams_table', 9),
(14, '2023_02_28_070639_create_language_levels_table', 10),
(15, '2014_10_12_000000_create_users_table', 11),
(16, '2023_03_02_112726_add_account_type_to_users_table', 12),
(17, '2023_03_02_132650_create_admins_table', 13),
(18, '2023_03_02_133345_add_photo_to_users_table', 14),
(20, '2023_03_02_140439_create_user_lists_table', 15),
(21, '2023_03_31_172043_create_company_user_lists_table', 16),
(22, '2023_03_31_175407_add_select_status_to_user_lists_table', 17),
(24, '2023_04_01_014327_add_status_fields_to_user_lists_table', 18),
(25, '2023_04_01_020124_create_student_docs_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_jp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_jp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title_eng`, `title_jp`, `description_eng`, `description_jp`, `photo`, `gallery`, `upload_date`, `created_at`, `updated_at`) VALUES
(1, 'Can any foreigner work in Japan?', '外国人は日本で働くことができますか？\r\n', 'Foreigners must have a workable status of residence in order to work in Japan. This status of residence can be confirmed with your passport or residence card. Status of residence that allows you to work regardless of occupation or industry Japanese spouse, permanent resident, permanent resident spouse, long- term resident ・ Persons with the above qualifications must work in any occupation Is possible.\n\n', '外国人が日本で働くためには、就労可能な在留資格が必要です。この在留資格は、パスポートや在留カードで確認できます。職種や業種を問わず就労できる在留資格日本人配偶者、永住者、永住者配偶者、定住者・上記の資格をお持ちの方は、職種を問わず就労可能です。', 'https://cdn.audleytravel.com/1050/750/79/1326821-shwedagon-pagoda-yangon.webp', 'https://cdn.audleytravel.com/1050/750/79/1326821-shwedagon-pagoda-yangon.webp,https://cdn.audleytravel.com/1050/750/79/1326821-shwedagon-pagoda-yangon.webp,https://cdn.audleytravel.com/1050/750/79/1326821-shwedagon-pagoda-yangon.webp', 'Jan 1, 2023', NULL, NULL),
(2, 'Can any foreigner work in Japan?', '外国人は日本で働くことができますか？\r\n', 'Foreigners must have a workable status of residence in order to work in Japan. This status of residence can be confirmed with your passport or residence card. Status of residence that allows you to work regardless of occupation or industry Japanese spouse, permanent resident, permanent resident spouse, long- term resident ・ Persons with the above qualifications must work in any occupation Is possible.\r\n\r\n', '外国人が日本で働くためには、就労可能な在留資格が必要です。この在留資格は、パスポートや在留カードで確認できます。職種や業種を問わず就労できる在留資格日本人配偶者、永住者、永住者配偶者、定住者・上記の資格をお持ちの方は、職種を問わず就労可能です。', 'https://theplanetd.com/images/Best-Things-to-do-in-Tokyo-Japan-1.jpg', 'https://cdn.audleytravel.com/1050/750/79/1326821-shwedagon-pagoda-yangon.webp,https://cdn.audleytravel.com/1050/750/79/1326821-shwedagon-pagoda-yangon.webp,https://cdn.audleytravel.com/1050/750/79/1326821-shwedagon-pagoda-yangon.webp', 'Jan 1, 2023', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_docs`
--

CREATE TABLE `student_docs` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'U Mg Mg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLe5PABjXc17cjIMOibECLM7ppDwMmiDg6Dw&usqp=CAU', NULL, NULL),
(2, 'Ma Hpoo Ngone Kyaw', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJ6MS5qDGZc270wmWqpwRdp8ozoksf11Ro-s1WKcdwtDprV7ofCIcuCMaC6hmnjzZzQog&usqp=CAU', NULL, NULL),
(3, 'Daw Moh Moh	', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQY0haCmjRyHmjjD-NdQmBYA0_2uqJOs_GZ-qRNWkB3p5Rl-gr9pMLblPqW7yR5iu7VJMk&usqp=CAU', NULL, NULL),
(4, 'U Soe Moe Aung	', 'https://media.licdn.com/dms/image/C4E03AQFiWFJzzG2pMg/profile-displayphoto-shrink_200_200/0/1517022555956?e=1681344000&v=beta&t=y38A69pjoppYYzjeZvdWavTO_OzTQWB4FtgV5hVYLK4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `position`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'U Mg Mg', 'Manager', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLe5PABjXc17cjIMOibECLM7ppDwMmiDg6Dw&usqp=CAU', NULL, NULL),
(2, 'Ma Hpoo Ngone Kyaw', 'Admin', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJ6MS5qDGZc270wmWqpwRdp8ozoksf11Ro-s1WKcdwtDprV7ofCIcuCMaC6hmnjzZzQog&usqp=CAU', NULL, NULL),
(3, 'Daw Moh Moh	', 'HR', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQY0haCmjRyHmjjD-NdQmBYA0_2uqJOs_GZ-qRNWkB3p5Rl-gr9pMLblPqW7yR5iu7VJMk&usqp=CAU', NULL, NULL),
(4, 'U Soe Moe Aung	', 'Office Staff', 'https://media.licdn.com/dms/image/C4E03AQFiWFJzzG2pMg/profile-displayphoto-shrink_200_200/0/1517022555956?e=1681344000&v=beta&t=y38A69pjoppYYzjeZvdWavTO_OzTQWB4FtgV5hVYLK4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tokuteis`
--

CREATE TABLE `tokuteis` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tokuteis`
--

INSERT INTO `tokuteis` (`id`, `title`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'သူနာပြုစောင့်ရှောက်မှုလုပ်ငန်း', 'https://www.hopkinsmedicine.org/sebin/l/m/C2C-what_is_a_caregiver_mini.jpg', NULL, NULL),
(2, 'အဆောက်အအုံ သန့်ရှင်းရေးလုပ်ငန်း', 'https://i0.wp.com/askmigration.com/wp-content/uploads/2018/07/Commercial-Window-Cleaning1.jpg?fit=1024%2C683&ssl=1', NULL, NULL),
(3, 'စက်အစိတ်အပိုင်းနှင့် စက်ကိရိယာလုပ်ငန်း', 'https://www.gtc.edu/sites/default/files/styles/open_framework_flexslider/public/slider-images/Machine-Repair-640x300.jpg?itok=_lDQBeOn', NULL, NULL),
(4, 'စက်မှုလက်မှုလုပ်ငန်း', 'https://m.holzherasia.com/fileadmin/_processed_/1/7/csm_img_09261_6aef26bbfa.jpg', NULL, NULL),
(5, 'လျှပ်စစ်၊ အီလက်ထရောနစ် သတင်းအချက်အလက်လုပ်ငန်း', 'https://www.asteelflash.com/wp-content/uploads/2017/09/Asteelflash-box-build-assembly_header.jpg', NULL, NULL),
(6, 'အဆောက်အအုံ သန့်ရှင်းရေးလုပ်ငန်း', 'https://i0.wp.com/askmigration.com/wp-content/uploads/2018/07/Commercial-Window-Cleaning1.jpg?fit=1024%2C683&ssl=1', NULL, NULL),
(7, 'စက်အစိတ်အပိုင်းနှင့် စက်ကိရိယာလုပ်ငန်း', 'https://www.gtc.edu/sites/default/files/styles/open_framework_flexslider/public/slider-images/Machine-Repair-640x300.jpg?itok=_lDQBeOn', NULL, NULL),
(8, 'စက်မှုလက်မှုလုပ်ငန်း', 'https://m.holzherasia.com/fileadmin/_processed_/1/7/csm_img_09261_6aef26bbfa.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_level_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `professional_career` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_skills` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visited` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sibling` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visited_sibling` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `account_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `gender`, `age`, `language_level_id`, `professional_career`, `height`, `weight`, `qualification`, `special_skills`, `visited`, `nrc`, `date_of_birth`, `address`, `phone`, `sibling`, `visited_sibling`, `remember_token`, `created_at`, `updated_at`, `account_type`, `photo`) VALUES
(1, 'student', 'student@gmail.com', NULL, '$2y$10$62pwwmSPSPfOiRdYFDTrKOTTBIY92e0Qcs/VlpDBPfFO39ZAb0w.2', 'Male', '20', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-30', 'Yangon', '0966617187', NULL, NULL, NULL, '2023-03-29 19:48:01', '2023-03-29 19:48:01', 'student', NULL),
(2, 'Company 1', 'company@gmail.com', NULL, '$2y$10$F5tYbV4XJH6l3bAxcxsxLeVBPp8fehbbtNe7yLG62PKRqt1yL0gM6', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Japan', '098888171665', NULL, NULL, NULL, '2023-03-31 08:24:24', '2023-03-31 11:58:21', 'company', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_lists`
--

CREATE TABLE `user_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_level_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `professional_career` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_skills` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visited` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sibling` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visited_sibling` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `select_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `third_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `third_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_lists`
--

INSERT INTO `user_lists` (`id`, `name`, `email`, `password`, `gender`, `age`, `language_level_id`, `professional_career`, `height`, `weight`, `qualification`, `special_skills`, `visited`, `nrc`, `date_of_birth`, `address`, `phone`, `sibling`, `visited_sibling`, `account_type`, `photo`, `created_at`, `updated_at`, `select_status`, `second_status`, `second_date`, `third_status`, `third_date`) VALUES
(1, 'Mg Mg', 'student@gmail.com', '$2y$10$bYigKWMNHu96EDjcIlT2HOOYWMhK9J2ApSv2K8hGmXJmp2GFWdy7q', 'Female', '20', '3', 'Web', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-30', 'Yangon', '0966617187', NULL, NULL, 'student', NULL, '2023-03-29 19:48:00', '2023-03-31 18:56:08', 'selected', NULL, NULL, NULL, NULL),
(2, 'Company 1', 'company@gmail.com', '$2y$10$n1oHcXM0NZprwpF9vOvAM.SLgCD6A21Wti4umHGjkfXuxwU52o1ji', 'Male', NULL, NULL, 'Software', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Japan', '098888171665', NULL, NULL, 'company', NULL, '2023-03-31 08:24:23', '2023-03-31 11:58:51', NULL, NULL, NULL, NULL, NULL),
(6, 'Aung Aung', 'student1@gmail.com', '$2y$10$bYigKWMNHu96EDjcIlT2HOOYWMhK9J2ApSv2K8hGmXJmp2GFWdy7q', 'Male', '25', '2', 'Mobile', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-30', 'Yangon', '0966617187', NULL, NULL, 'student', NULL, '2023-03-29 19:48:00', '2023-03-31 11:38:30', NULL, NULL, NULL, NULL, NULL),
(7, 'Soe Moe', 'student3@gmail.com', '$2y$10$bYigKWMNHu96EDjcIlT2HOOYWMhK9J2ApSv2K8hGmXJmp2GFWdy7q', 'Male', '30', '1', 'Web Developer', '20', '20', '10', 'No', 'No', NULL, '2023-03-30', 'Yangon', '0966617187', NULL, NULL, 'student', NULL, '2023-03-29 19:48:00', '2023-03-31 11:37:37', NULL, NULL, NULL, NULL, NULL),
(8, 'Mg Mg', 'student5@gmail.com', '$2y$10$bYigKWMNHu96EDjcIlT2HOOYWMhK9J2ApSv2K8hGmXJmp2GFWdy7q', 'Female', '35', '3', 'Web', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-30', 'Yangon', '0966617187', NULL, NULL, 'student', NULL, '2023-03-29 19:48:00', '2023-03-31 18:30:25', 'selected', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_logs`
--
ALTER TABLE `app_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_user_lists`
--
ALTER TABLE `company_user_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_schedules`
--
ALTER TABLE `course_schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language_levels`
--
ALTER TABLE `language_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `student_docs`
--
ALTER TABLE `student_docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokuteis`
--
ALTER TABLE `tokuteis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_lists`
--
ALTER TABLE `user_lists`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_lists_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_logs`
--
ALTER TABLE `app_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company_user_lists`
--
ALTER TABLE `company_user_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_schedules`
--
ALTER TABLE `course_schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `language_levels`
--
ALTER TABLE `language_levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_docs`
--
ALTER TABLE `student_docs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tokuteis`
--
ALTER TABLE `tokuteis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_lists`
--
ALTER TABLE `user_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
