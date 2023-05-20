-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 20, 2023 at 07:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iam_myanmar`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `description_eng` text DEFAULT NULL,
  `description_jp` text DEFAULT NULL,
  `images` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `password` text DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_logs`
--

INSERT INTO `app_logs` (`id`, `app_logs`, `Timestamp`, `Action`, `TableName`, `SqlQuery`, `UserID`, `ServerIP`, `RequestUrl`, `RequestData`, `RequestCompleted`) VALUES
(1, NULL, '2023-03-30 04:13:38', 'userlogin', 'admins', 'SELECT   * FROM admins WHERE  email = ?  LIMIT 1', '1', '::1', 'index/login/', '{\"username\":\"admin@gmail.com\",\"password\":\"$2y$10$qeaImO84wEN2JOUKTE4R.esl7Qwap\\/.U2eaqFE.VIMyfng.oCkavK\"}', 'true'),
(2, NULL, '2023-03-31 16:51:21', 'userlogin', 'admins', 'SELECT   * FROM admins WHERE  email = ?  LIMIT 1', '1', '::1', 'index/login/', '{\"username\":\"admin@gmail.com\",\"password\":\"$2y$10$qeaImO84wEN2JOUKTE4R.esl7Qwap\\/.U2eaqFE.VIMyfng.oCkavK\"}', 'true'),
(3, NULL, '2023-04-01 06:42:16', 'userlogin', 'admins', 'SELECT   * FROM admins WHERE  email = ?  LIMIT 1', '1', '::1', 'index/login/', '{\"username\":\"admin@gmail.com\",\"password\":\"$2y$10$qeaImO84wEN2JOUKTE4R.esl7Qwap\\/.U2eaqFE.VIMyfng.oCkavK\"}', 'true'),
(4, NULL, '2023-04-01 01:52:06', 'userlogin', 'admins', 'SELECT   * FROM admins WHERE  email = ?  LIMIT 1', '1', '104.28.219.151', 'index/login/', '{\"username\":\"admin@gmail.com\",\"password\":\"$2y$10$qeaImO84wEN2JOUKTE4R.esl7Qwap\\/.U2eaqFE.VIMyfng.oCkavK\"}', 'true'),
(5, NULL, '2023-04-01 02:05:01', 'userlogin', 'admins', 'SELECT   * FROM admins WHERE  email = ?  LIMIT 1', '1', '69.160.27.92', 'index/login/', '{\"username\":\"admin@gmail.com\",\"password\":\"$2y$10$qeaImO84wEN2JOUKTE4R.esl7Qwap\\/.U2eaqFE.VIMyfng.oCkavK\"}', 'true'),
(6, NULL, '2023-05-03 23:07:44', 'userlogin', 'admins', 'SELECT   * FROM admins WHERE  email = ?  LIMIT 1', '1', '104.28.219.152', 'index/login/', '{\"username\":\"admin@gmail.com\",\"password\":\"$2y$10$qeaImO84wEN2JOUKTE4R.esl7Qwap\\/.U2eaqFE.VIMyfng.oCkavK\"}', 'true'),
(7, NULL, '2023-05-04 00:17:50', 'userlogin', 'admins', 'SELECT   * FROM admins WHERE  email = ?  LIMIT 1', '1', '69.160.14.26', 'index/login/', '{\"username\":\"admin@gmail.com\",\"password\":\"$2y$10$qeaImO84wEN2JOUKTE4R.esl7Qwap\\/.U2eaqFE.VIMyfng.oCkavK\"}', 'true'),
(8, NULL, '2023-05-04 03:31:23', 'userlogin', 'admins', 'SELECT   * FROM admins WHERE  email = ?  LIMIT 1', '1', '69.160.14.26', 'index/login/', '{\"username\":\"admin@gmail.com\",\"password\":\"$2y$10$qeaImO84wEN2JOUKTE4R.esl7Qwap\\/.U2eaqFE.VIMyfng.oCkavK\"}', 'true'),
(9, NULL, '2023-05-04 03:31:36', 'userlogin', 'admins', 'SELECT   * FROM admins WHERE  email = ?  LIMIT 1', '1', '69.160.14.26', 'index/login/', '{\"username\":\"admin@gmail.com\",\"password\":\"$2y$10$qeaImO84wEN2JOUKTE4R.esl7Qwap\\/.U2eaqFE.VIMyfng.oCkavK\"}', 'true'),
(10, NULL, '2023-05-11 06:28:38', 'userlogin', 'admins', 'SELECT   * FROM admins WHERE  email = ?  LIMIT 1', '1', '45.125.5.5', 'index/login/', '{\"username\":\"admin@gmail.com\",\"password\":\"$2y$10$qeaImO84wEN2JOUKTE4R.esl7Qwap\\/.U2eaqFE.VIMyfng.oCkavK\"}', 'true'),
(11, NULL, '2023-05-11 06:50:15', 'userlogin', 'admins', 'SELECT   * FROM admins WHERE  email = ?  LIMIT 1', '1', '45.125.5.5', 'index/login/', '{\"username\":\"admin@gmail.com\",\"password\":\"$2y$10$qeaImO84wEN2JOUKTE4R.esl7Qwap\\/.U2eaqFE.VIMyfng.oCkavK\"}', 'true'),
(12, NULL, '2023-05-11 07:45:32', 'userlogin', 'admins', 'SELECT   * FROM admins WHERE  email = ?  LIMIT 1', '1', '45.125.5.5', 'index/login/', '{\"username\":\"admin@gmail.com\",\"password\":\"$2y$10$qeaImO84wEN2JOUKTE4R.esl7Qwap\\/.U2eaqFE.VIMyfng.oCkavK\"}', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` text DEFAULT NULL,
  `account_type` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `address`, `phone`, `email`, `email_verified_at`, `password`, `is_active`, `account_type`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Company Name 1', 'Japan Tokyo', '09777181775', 'company@gmail.com', NULL, '$2y$10$A.oqDFaqpvWwOAsEoVROu.8xnDGGDBt3lqdrGopCRxgX3uHhX58Iq', 'active', 'company', '2023-05-19 12:37:13', '2023-05-19 22:43:40', 3);

-- --------------------------------------------------------

--
-- Table structure for table `company_user_lists`
--

CREATE TABLE `company_user_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_list_id` text DEFAULT NULL,
  `user_id` text DEFAULT NULL,
  `choose_date` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_user_lists`
--

INSERT INTO `company_user_lists` (`id`, `user_list_id`, `user_id`, `choose_date`, `created_at`, `updated_at`) VALUES
(1, '6', '3', '2023-05-20', '2023-05-19 21:04:48', '2023-05-19 21:04:48');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `message_date` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `message_date`, `created_at`, `updated_at`) VALUES
(2, 'RobertSkilt', 'a.l.bert.ha.nsh.in49@gmail.com', '83323131365', 'Mfheifjewfehrgierjfe hfewhwfuehguirhhfewfu hueefwhufihewugherihe hewuihfiuerhguierhgierhg', '<html><a href=\"https://google.com\"><img src=\"https://blogger.googleusercontent.com/img/a/AVvXsEgXM4xrSRAnQQOLZImSaLdACcB-BosbLfsYEsXB-lLBl71Ma4AFA4xbB22ruqkub9W8nQCJVUXuXvJQeNLG2yoUL-OxTbhSvuyduxRSQI5RsQSu6DbfkMCVMuCuRB1uzs4KNkp3gZjcKQeubD_3RZ6p3xDAEpOwy6LnNnGhSa3h4V04dq3zc3oZajp_=s16000\"></a></br> iam-myanmar.com ugerufeijdjefejdjiefjeofkoefjegjefdwifjefgeijdfiewgjiejdwsfhefrgerreytr</html>', '2023-04-01', '2023-04-01 23:57:02', '2023-04-01 23:57:02'),
(3, 'Alfonsoviope', 'amiguel@lestudiodynamic.com', '81884486628', 'ELITE SMM SERVICES - THE KEY TO SUCCESSFUL SOCIAL MEDIA MARKETING', 'UNLOCK THE POWER OF SOCIAL MEDIA AND BUILD AN ELITE BRAND WITH OUR SMM SERVICES https://smmeliteservice.viacrimgeexfite.tk/invite-5929', '2023-04-15', '2023-04-16 04:28:50', '2023-04-16 04:28:50'),
(4, 'Mike WifKinson', 'no-replyFLINK@gmail.com', '83725845835', 'AI Monthly SEO plans', 'Good Day \r\n \r\nI have just checked  iam-myanmar.com for its SEO metrics and saw that your website could use a push. \r\n \r\nWe will increase your ranks organically and safely, using state of the art AI and whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nMore info: \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nRegards \r\nMike WifKinson', '2023-04-17', '2023-04-17 18:13:59', '2023-04-17 18:13:59'),
(5, 'Waheed Mohammed', 'ujn2esbgakah@opayq.com', '86493888273', 'Financing Opportunity', 'Hello, \r\n \r\nWe provide funding through our venture capital company to both start-up and existing companies either looking for funding for expansion or to accelerate growth in their company. We have a structured joint venture investment plan in which we are interested in an annual return on investment not more than 10% ROI. We are also currently structuring a convertible debt and loan financing of 3% interest repayable annually with no early repayment penalties. If you have a business plan or executive summary, I can review to \r\nunderstand a much better idea of your business and what you are looking to do, this will assist in determining the best possible investment structure we can pursue and discuss more extensively. If you are interested in any of the above, kindly respond to us via this email. waheed@almarisinvestmentgroup.com \r\nWaheedalgore22@gmail.com \r\nSincerely \r\nEngineer Waheed Mohammed \r\nChief Financial Officer \r\nAl-Maris Investment Group', '2023-04-24', '2023-04-24 18:33:08', '2023-04-24 18:33:08'),
(6, 'Kevin Johnso', 'aarilyaseen@gmail.com', '81279397885', 'Reminder. Be careful.', 'Be careful, it\'s dangerous to work with them. These are scammers, neither one, they do not fulfill their obligations. \r\n \r\nGeorge - helloprofectmedia@gmail.com - http://www.profectmedia.uk/ \r\nKevin Johnson -  tbformleads@gmail.com  - myaafva@gmail.com \r\nSusan Gilroy - susangilroy.haftoo@gmail.com -  https://globalbrands.clickfunnels.com/optin1hnqzip6g \r\nhttp://www.tungstenbody.com/ \r\nMichael - hivemailers@gmail.com - https://calendly.com/msinclair-myaa/myaa-overview \r\nJeremy - teammyaa2022@gmail.com - https://calendly.com/jeremymyaa/30min?month=2023-05 \r\nMichael - teammyaa2022@gmail.com - https://calendly.com/msinclair-myaa/myaa-overview?month=2023-05 \r\nTiara - tiara.promo2022@gmail.com - https://calendly.com/tiara-82/30min?month=2023-05 \r\nJeffery Brown - jefferybrown.betatester1@gmail.com - https://funding.thenationalsmallbusinessdirectory.com/dac-funding \r\nMichael - tbformleads@gmail.com -  http://www.erpgoldgroup.com/appointments/ \r\nApril Yaseen - aarilyaseen@gmail.com', '2023-05-01', '2023-05-01 09:50:12', '2023-05-01 09:50:12'),
(7, 'Megan Atkinson', 'meganatkinson352@gmail.com', '27-68-84-36', 'Instagram Promotion: Grow your followers by 400-1200 each month', 'Hi there,\r\n\r\nWe run an Instagram growth service, which increases your number of followers both safely and practically. \r\n\r\n- We guarantee to gain you 400-1000+ followers per month.\r\n- People follow you because they are interested in you, increasing likes, comments and interaction.\r\n- All actions are made manually by our team. We do not use any \'bots\'.\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately.\r\n\r\nIf you\'d like to see some of our previous work, let me know, and we can discuss it further.\r\n\r\nKind Regards,\r\nMegan', '2023-05-02', '2023-05-02 22:14:35', '2023-05-02 22:14:35'),
(8, 'Kate Trilly', 'katytrilly9@gmail.com', '907-293-2789', 'Explainer Video for iam-myanmar.com', 'Hi,\r\n\r\nWe\'d like to introduce to you our explainer video service, which we feel can benefit your site iam-myanmar.com.\r\n\r\nCheck out some of our existing videos here:\r\nhttps://www.youtube.com/watch?v=zvGF7uRfH04\r\nhttps://www.youtube.com/watch?v=cZPsp217Iik\r\nhttps://www.youtube.com/watch?v=JHfnqS2zpU8\r\n\r\nAll of our videos are in a similar animated format as the above examples, and we have voice over artists with US/UK/Australian accents.\r\nWe can also produce voice overs in languages other than English.\r\n\r\nThey can show a solution to a problem or simply promote one of your products or services. They are concise, can be uploaded to video sites such as YouTube, and can be embedded into your website or featured on landing pages.\r\n\r\nOur prices are as follows depending on video length:\r\nUp to 1 minute = $259\r\n1-2 minutes = $379\r\n2-3 minutes = $489\r\n\r\n*All prices above are in USD and include a full script, voice-over and video.\r\n\r\nIf this is something you would like to discuss further, don\'t hesitate to reply.\r\n\r\nKind Regards,\r\nKaty T', '2023-05-02', '2023-05-02 23:33:00', '2023-05-02 23:33:00'),
(9, 'Mike Laird', 'no-replyFLINK@gmail.com', '89569269493', 'NEW: Semrush Backlinks', 'Hi there \r\n \r\nThis is Mike Laird\r\n \r\nLet me introduce to you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your iam-myanmar.com SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Laird\r\n \r\nmike@strictlydigital.net', '2023-05-06', '2023-05-06 13:52:13', '2023-05-06 13:52:13'),
(10, 'Josephmip', 'no.reply.HorstBertrand@gmail.com', '87149837722', 'Are you in the market for cost-effective and imaginative advertising for a minimal cost?', 'Howdy-doody! iam-myanmar.com \r\n \r\nDid you know that it is possible to send messages wholly authorized? We suggest a novel way of sending messages through contact forms. These kinds of feedback forms can be found on a plethora of webpages. \r\nWhen such requests are sent, no personal data is used, and messages are sent to forms specifically designed to receive messages and appeals securely. Since Feedback Forms messages are deemed important, they won\'t be labeled as junk. \r\nWe give you a chance to experience our service for free. \r\nWe can deliver up to 50,000 messages on your instruction. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis letter is automatically generated. \r\nPlease use the contact details below to get in touch with us. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nSkype  live:feedbackform2019 \r\nWhatsApp  +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\n \r\nWe only use chat for communication.', '2023-05-08', '2023-05-08 07:42:29', '2023-05-08 07:42:29'),
(11, 'Mike Pearcy', 'no-replyFLINK@gmail.com', '89667216581', 'Improve local visibility for iam-myanmar.com', 'If you have a local business and want to rank it on google maps in a specific area then this service is for you. \r\n \r\nGoogle Map Stacking is one of the best ways to rank your GMB in a specific mile radius. \r\n \r\nMore info: \r\nhttps://www.speed-seo.net/product/google-maps-pointers/ \r\n \r\nThanks and Regards \r\nMike Pearcy\r\n \r\n \r\nPS: Want an all in one Local Plan that includes everything? \r\nhttps://www.speed-seo.net/product/local-seo-package/', '2023-05-09', '2023-05-10 04:20:16', '2023-05-10 04:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `course_schedules`
--

CREATE TABLE `course_schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `level` text DEFAULT NULL,
  `start_date` text DEFAULT NULL,
  `date_time` text DEFAULT NULL,
  `duration` text DEFAULT NULL,
  `location` text DEFAULT NULL,
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
  `company_name` text DEFAULT NULL,
  `type_of_company` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `website` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `job_category` text DEFAULT NULL,
  `age_limit` text DEFAULT NULL,
  `educational_requirement` text DEFAULT NULL,
  `working_experience_requirement` text DEFAULT NULL,
  `other_additional_requirement` text DEFAULT NULL,
  `estimate_salary_offer` text DEFAULT NULL,
  `other_allowance` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `interview_type` text DEFAULT NULL,
  `apply_date` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
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
  `title` text DEFAULT NULL,
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
  `migration` varchar(255) NOT NULL,
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
(16, '2023_03_02_112726_add_account_type_to_users_table', 12),
(17, '2023_03_02_132650_create_admins_table', 13),
(18, '2023_03_02_133345_add_photo_to_users_table', 14),
(21, '2023_03_31_172043_create_company_user_lists_table', 16),
(22, '2023_03_31_175407_add_select_status_to_user_lists_table', 17),
(24, '2023_04_01_014327_add_status_fields_to_user_lists_table', 18),
(25, '2023_04_01_020124_create_student_docs_table', 19),
(29, '2014_10_12_000000_create_users_table', 20),
(31, '2023_05_19_152315_create_companies_table', 21),
(32, '2023_05_19_184122_add_japan_certificate_to_users_table', 22),
(33, '2023_05_19_190551_add_user_id_to_companies_table', 23),
(34, '2023_05_20_043417_add_v1_to_users_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_eng` text DEFAULT NULL,
  `title_jp` text DEFAULT NULL,
  `description_eng` text DEFAULT NULL,
  `description_jp` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `gallery` text DEFAULT NULL,
  `upload_date` text DEFAULT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_docs`
--

CREATE TABLE `student_docs` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_path` text DEFAULT NULL,
  `upload_date` text DEFAULT NULL,
  `user_id` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_docs`
--

INSERT INTO `student_docs` (`id`, `file_path`, `upload_date`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'http://localhost/projects/iammyanmar/storage/student_docs/bNqX4SHPDSMImiIfsyAr3N9M5DKjohgOBBuVVzKj.png', '2023-05-19', '1', '2023-05-19 12:14:42', '2023-05-19 12:14:42');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'U Mg Mg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLe5PABjXc17cjIMOibECLM7ppDwMmiDg6Dw&usqp=CAU', NULL, NULL),
(2, 'Ma Hpoo Ngone Kyaw', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJ6MS5qDGZc270wmWqpwRdp8ozoksf11Ro-s1WKcdwtDprV7ofCIcuCMaC6hmnjzZzQog&usqp=CAU', NULL, NULL),
(3, 'Daw Moh Moh	', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQY0haCmjRyHmjjD-NdQmBYA0_2uqJOs_GZ-qRNWkB3p5Rl-gr9pMLblPqW7yR5iu7VJMk&usqp=CAU', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `position` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `position`, `photo`, `created_at`, `updated_at`) VALUES
(1, '-', 'Manager', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLe5PABjXc17cjIMOibECLM7ppDwMmiDg6Dw&usqp=CAU', NULL, NULL),
(2, '-', 'Admin', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJ6MS5qDGZc270wmWqpwRdp8ozoksf11Ro-s1WKcdwtDprV7ofCIcuCMaC6hmnjzZzQog&usqp=CAU', NULL, NULL),
(3, '-', 'HR', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQY0haCmjRyHmjjD-NdQmBYA0_2uqJOs_GZ-qRNWkB3p5Rl-gr9pMLblPqW7yR5iu7VJMk&usqp=CAU', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tokuteis`
--

CREATE TABLE `tokuteis` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
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
(5, ' ဆောက်လုပ်ရေးလုပ်ငန်း', 'https://iam-myanmar.com/admin/uploads/files/a4knsr3gzd2xuqe.png', NULL, NULL),
(6, 'သင်္ဘောဆောက်လုပ်ခြင်းနှင့်သင်္ဘောစက်ရုံလုပ်ငန်း', 'https://iam-myanmar.com/admin/uploads/files/mkfh85g3yd_xvr7.png', NULL, NULL),
(7, 'လျှပ်စစ်၊ အီလက်ထရောနစ်နှင့် သတင်းအချက်အလက်လုပ်ငန်း', 'https://iam-myanmar.com/admin/uploads/files/uyzvkr7jpbg_iwq.png', NULL, NULL),
(8, 'ကားပြုပြင်ထိန်းသိမ်းရေးလုပ်ငန်း', 'https://iam-myanmar.com/admin/uploads/files/u3le0zk_mt4hfyg.png', NULL, NULL),
(9, ' ဟိုတယ်လုပ်ငန်း', 'https://iam-myanmar.com/admin/uploads/files/5p0dz629toyvjk_.png', NULL, NULL),
(11, 'စားသောက်ကုန်ထုတ်လုပ်မှုလုပ်ငန်း', 'https://iam-myanmar.com/admin/uploads/files/7uysbjg26x43wt1.png', NULL, NULL),
(12, 'ရေလုပ်ငန်း', 'https://iam-myanmar.com/admin/uploads/files/6a_gify7w0uk9e8.png', NULL, NULL),
(13, 'အစားအသောက်ဝန်ဆောင်မှုလုပ်ငန်း', 'https://iam-myanmar.com/admin/uploads/files/638rdgj5p0aibos.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_of_birth` text DEFAULT NULL,
  `age` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `height` text DEFAULT NULL,
  `weight` text DEFAULT NULL,
  `language_level_id` text DEFAULT NULL,
  `education` text DEFAULT NULL,
  `foreign_experience` text DEFAULT NULL,
  `other_qualification` text DEFAULT NULL,
  `marital_status` text DEFAULT NULL,
  `blood_type` text DEFAULT NULL,
  `wearing_glasses_or_not` text DEFAULT NULL,
  `birth_place` text DEFAULT NULL,
  `nationality` text DEFAULT NULL,
  `religion` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone_no` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `nrc_photo_back` text DEFAULT NULL,
  `nrc_photo_front` text DEFAULT NULL,
  `household_members` text DEFAULT NULL,
  `is_active` text DEFAULT NULL,
  `account_type` text DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `japan_certificate` text DEFAULT NULL,
  `companie_id` text DEFAULT NULL,
  `first_status` text DEFAULT NULL,
  `first_select_date` text DEFAULT NULL,
  `second_status` text DEFAULT NULL,
  `second_select_date` text DEFAULT NULL,
  `third_status` text DEFAULT NULL,
  `third_select_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `date_of_birth`, `age`, `gender`, `height`, `weight`, `language_level_id`, `education`, `foreign_experience`, `other_qualification`, `marital_status`, `blood_type`, `wearing_glasses_or_not`, `birth_place`, `nationality`, `religion`, `address`, `phone_no`, `photo`, `nrc_photo_back`, `nrc_photo_front`, `household_members`, `is_active`, `account_type`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `japan_certificate`, `companie_id`, `first_status`, `first_select_date`, `second_status`, `second_select_date`, `third_status`, `third_select_date`) VALUES
(1, 'Mg Mg', '2023-05-20', '24', 'Male', '20', '20', '1', 'Universty', '5 Years', 'Yes', 'Single', 'B', 'No', 'Yangon', 'Burmese', 'Buddhis', 'Yangon', '09555161554', 'public/photo/l00POAkSS9qoUz7rOA3bThwcUzANTpQXIhkFAokm.png', 'public/photo/ORI21quqDQRlW1aIeOOMq3w9IJYt9BDjD5MjZNaZ.png', 'public/photo/19drghIT6drNdox2ZpExQiuN2DDPTUlosWRXt2NL.png', 'public/photo/g8fdqlqBWaoYFc1Bn6BexDD5UiyGgiDXYmmF26Dv.png', 'active', 'student', 'mgmg@gmail.com', NULL, '$2y$10$K/AKyk1iHW79JuF00XmnLunsdZmulfu0jxo5YLulsWXdZKJASQ.Da', NULL, '2023-05-19 09:29:52', '2023-05-19 22:31:58', 'public/photo/urUyBhvfHqekvDuMe6FyqQfofsqJwr8yknTwe0lq.webp', '3', 'selected', '2023-05-20', 'selected', '2023-05-20', 'selected', '2023-05-20'),
(3, 'Company Name 1', NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Japan Tokyo', '09777181775', NULL, NULL, NULL, NULL, 'active', 'company', 'company@gmail.com', NULL, '$2y$10$m8RS1v4R3y/N2DquTB0kOOuFfmdArTDpx8Cupm9j.AAss/ArW48Ge', NULL, '2023-05-19 12:37:13', '2023-05-19 22:43:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Soe Soe', '2023-05-20', '30', 'Male', '20', '20', '2', 'no', 'no', 'no', 'no', 'no', 'n', 'no', 'no', 'no', 'no', 'no', 'public/photo/l00POAkSS9qoUz7rOA3bThwcUzANTpQXIhkFAokm.png', 'public/photo/ORI21quqDQRlW1aIeOOMq3w9IJYt9BDjD5MjZNaZ.png', 'public/photo/19drghIT6drNdox2ZpExQiuN2DDPTUlosWRXt2NL.png', 'public/photo/g8fdqlqBWaoYFc1Bn6BexDD5UiyGgiDXYmmF26Dv.png', 'active', 'student', 'mgmgss@gmail.com', NULL, '$2y$10$K/AKyk1iHW79JuF00XmnLunsdZmulfu0jxo5YLulsWXdZKJASQ.Da', NULL, '2023-05-19 09:29:52', '2023-05-19 22:37:45', 'public/photo/urUyBhvfHqekvDuMe6FyqQfofsqJwr8yknTwe0lq.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Tun Tun', '2023-05-20', '40', 'Female', '20', '20', '3', 'no', 'no', 'no', 'no', 'no', 'n', 'no', 'no', 'no', 'no', 'no', 'public/photo/l00POAkSS9qoUz7rOA3bThwcUzANTpQXIhkFAokm.png', 'public/photo/ORI21quqDQRlW1aIeOOMq3w9IJYt9BDjD5MjZNaZ.png', 'public/photo/19drghIT6drNdox2ZpExQiuN2DDPTUlosWRXt2NL.png', 'public/photo/g8fdqlqBWaoYFc1Bn6BexDD5UiyGgiDXYmmF26Dv.png', 'active', 'student', 'mgmgsss@gmail.com', NULL, '$2y$10$K/AKyk1iHW79JuF00XmnLunsdZmulfu0jxo5YLulsWXdZKJASQ.Da', NULL, '2023-05-19 09:29:52', '2023-05-19 22:37:34', 'public/photo/urUyBhvfHqekvDuMe6FyqQfofsqJwr8yknTwe0lq.webp', NULL, NULL, '2023-05-20', NULL, NULL, NULL, NULL);

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
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_email_unique` (`email`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_logs`
--
ALTER TABLE `app_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_user_lists`
--
ALTER TABLE `company_user_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
