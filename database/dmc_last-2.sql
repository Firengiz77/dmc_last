-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 24, 2023 at 10:12 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmc_last`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `program` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor_1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `project` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `news` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_keyw` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_keyw` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `register_title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `register_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `register_keyw` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor_title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor_keyw` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `content_1`, `content_2`, `image`, `video`, `date`, `created_at`, `updated_at`, `program`, `sponsor`, `icon1`, `icon2`, `program_1`, `sponsor_1`, `project`, `news`, `home_title`, `home_desc`, `home_keyw`, `blog_title`, `blog_desc`, `blog_keyw`, `register_title`, `register_desc`, `register_keyw`, `sponsor_title`, `pdf`, `sponsor_desc`, `sponsor_keyw`) VALUES
(4, '{\"az\":\"<h1><strong>&quot;Rəqəmsal Minimalizm&quot; konsept mesajı ilə<\\/strong><\\/h1>\\r\\n\\r\\n<p>&nbsp;<\\/p>\",\"en\":\"<h1>It&#39;s our Choices that build<\\/h1>\\r\\n\\r\\n<h1>the Future.<\\/h1>\\r\\n\\r\\n<p>&nbsp;<\\/p>\"}', '{\"az\":\"<p>Bu il VI dəfə &quot;Facemark&quot; MMC təşkilat&ccedil;ılığı və &quot;Code Academy&quot; baş sponsorluğu ilə ke&ccedil;iriləcək&nbsp;&ldquo;Digital Marketing Conference&rdquo;<strong>&nbsp;<\\/strong>11 iyun 2023-c&uuml; il tarixində &ldquo;Four Seasons Hotel Baku&rdquo;da baş tutacaq!<\\/p>\\r\\n\\r\\n<p>Rəqəmsallaşaraq b&ouml;y&uuml;yən, qloballaşaraq b&uuml;t&uuml;nləşən m&uuml;asir biznes modeli ilə gələcəyin marketoloquna &ccedil;ağırış edən konfransın ana devizi <strong>&ldquo;<\\/strong><strong>Rəqəmsal Minimalizm<\\/strong><strong>&rdquo;<\\/strong>dir.<\\/p>\\r\\n\\r\\n<p><strong>Konfransın <\\/strong><strong>məqsədi<\\/strong> rəqəmsal marketinqin qloballaşan d&uuml;nyanın strukturunda yerinin, rəqəmsallaşmanın və yeni normalın yaratdığı qeyri-m&uuml;əyyənlik halında bu sahəyə tələbin m&uuml;zakirə olunduğu platforma rolunu oynamaqdır.<\\/p>\\r\\n\\r\\n<p>Yeniliyin innovativ həlləri diktə etdiyi, paralel olaraq qanunların yeniliyi izlədiyi d&ouml;vr&uuml;m&uuml;zdə şirkətlər artıq internet &uuml;zərindən m&uuml;xtəlif strategiyalarla m&uuml;ştərilər cəlb edirlər. Bu səbəbdən bu sahə &uuml;zrə m&uuml;təxəssislərə tələbat getdikcə artır. Konfransın hədəfi rəqəmsal d&uuml;nyaya daha asan ke&ccedil;id almaqdır.<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\",\"en\":\"<p>Azerbaijan&#39;s HR forum &quot;IR Summit&quot; is organized by Facemark. The forum, which is planned to be held once a year, is aimed at making a permanent contribution to the development of the field of human resources management in our country.<\\/p>\\r\\n\\r\\n<p>The first forum held in 2020 is organized by the speeches of the heads of human resources management and CEOs of high-status companies, both local and foreign.<\\/p>\\r\\n\\r\\n<p>The forum&#39;s target group of participants are managers and specialists in human resource management, as well as those interested in this field and company managers. Participants of the HR Agenda forum will have the opportunity to follow discussions of new trends, different approaches and international practices in the field of human resources management, learn new knowledge that they can apply in their professional activities, and gain a new vision.<\\/p>\"}', 'uploads/about/1764418968591464.jpg', 'videos/zlWH7wj8SqLV2XASPXJu0pmThUVlVZBoaKIyXPpH.mov', '2023-06-11 09:00:00.000000', '2022-11-03 04:19:53', '2023-05-01 08:07:49', '{\"en\":\"Don\'t let appearances influence our choices.\",\"az\":\"T\\u0259dbirin Moderator v\\u0259 Spikerl\\u0259ri\"}', '{\"az\":\"D\\u0259st\\u0259yiniz \\u00fc\\u00e7\\u00fcn t\\u0259\\u015f\\u0259kk\\u00fcr edirik!\",\"en\":\"Your support is one of the important factors that keep us going.\"}', 'uploads/about/1764418920288351.png', 'uploads/about/1764418920288761.png', '{\"en\":\"proqram eng text Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\",\"az\":\"proqram text Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\"}', '{\"en\":\"sponsor eng text Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\",\"az\":\"Sponsor text Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\"}', '{\"en\":\"Projects we have organized\",\"az\":\"T\\u0259\\u015fkilat\\u00e7\\u0131 oldu\\u011fumuz dig\\u0259r layih\\u0259l\\u0259r\"}', '{\"en\":\"STAY TUNED FOR NEWS\",\"az\":\"X\\u0259b\\u0259rl\\u0259r \\u00fc\\u00e7\\u00fcn izl\\u0259m\\u0259d\\u0259 qal\\u0131n\"}', '{\"en\":\"wertg\",\"az\":\"Ana S\\u0259hif\\u0259\"}', '{\"en\":\"qwertyui\",\"az\":\"\\u0130nsan Resurslar\\u0131 Zirv\\u0259sin\\u0259 xo\\u015f g\\u0259lmisiniz\"}', '{\"en\":\"qwertyuk\",\"az\":\"insan resurslar\\u0131, HR, \\u0130R\"}', '{\"en\":\"wertyui\",\"az\":\"\\u0130nsan Resurslar\\u0131 Zirv\\u0259si\"}', '{\"en\":\"wertyui\",\"az\":\"\\u0130nsan Resurslar\\u0131 Zirv\\u0259sin\\u0259 xo\\u015f g\\u0259lmisiniz\"}', '{\"en\":\"qwertyu\",\"az\":\"insan resurslar\\u0131, HR, \\u0130R, HR blog\"}', '{\"en\":\"qwe4567\",\"az\":\"\\u0130nsan Resurslar\\u0131 Zirv\\u0259si Qeydiyyat\"}', '{\"en\":\"sdfgyu\",\"az\":\"\\u0130nsan Resurslar\\u0131 Zirv\\u0259sin\\u0259 xo\\u015f g\\u0259lmisiniz\"}', '{\"en\":\"asertyu\",\"az\":\"insan resurslar\\u0131, HR, \\u0130R, HR blog\"}', '{\"en\":\"wertyu\",\"az\":\"\\u0130nsan Resurslar\\u0131 Zirv\\u0259si Sponsorlar \\u00fc\\u00e7\\u00fcn qeydiyyat\"}', 'uploads/about/1764678403284972.pptx', '{\"en\":\"wer567u\",\"az\":\"\\u0130nsan Resurslar\\u0131 Zirv\\u0259sin\\u0259 xo\\u015f g\\u0259lmisiniz\"}', '{\"en\":\"werty\",\"az\":\"insan resurslar\\u0131, HR, \\u0130R, HR blog\"}');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linked` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `phone_1`, `phone_2`, `fb`, `instagram`, `linked`, `youtube`, `address`, `email`, `image`, `created_at`, `updated_at`) VALUES
(1, '{\"az\":\"Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\",\"en\":\"title en Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\"}', '+994 55 201 66 66', '+994 51 233 47 73', 'https://www.facebook.com/dmcbaku.az/', 'https://instagram.com/dmcbaku.az?igshid=YmMyMTA2M2Y=', 'https://www.linkedin.com/company/76116754/admin/', 'https://www.youtube.com/playlist?list=PLNAQ8xBu6-NPlbCdsY0x9oXq4rkMfdfVF', '{\"az\":\"Four Seasons Hotel Baku, 1 Neftchilar Ave, Baku 1095\",\"en\":\"Baku Marriott Hotel Boulevard, Khagani Rustamov Street, 4C, Khatai District, Baku 1010\"}', 'info@dmcbaku.az', 'uploads/contact/1764407468603394.jpg', '2022-11-04 03:35:22', '2023-04-28 11:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

CREATE TABLE `dates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dates`
--

INSERT INTO `dates` (`id`, `date`, `created_at`, `updated_at`) VALUES
(1, '2024-06-11', NULL, '2023-04-28 11:00:38');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `date`, `hour`, `active`, `created_at`, `updated_at`) VALUES
(5, '{\"az\":\"Qeydiyyat I Coffee-Netv\\u00f6rkinq 09:00 - 10:00\",\"en\":\"Registration I Coffee-Networking 09:00 - 10:00\"}', '1', '09:00 - 10:00', 0, '2022-11-11 02:23:54', '2022-12-27 13:37:02'),
(6, '{\"en\":\"The opening part\",\"az\":\"A\\u00e7\\u0131l\\u0131\\u015f hiss\\u0259si\"}', '1', '10:00 - 10:30', 1, '2022-11-11 02:32:25', '2022-12-27 13:37:19'),
(7, '{\"en\":\"Accounting and digitization\",\"az\":\"Yaradıcı kontent və Müştəri cəlbi\"}', '1', '10:35 - 12:30', 1, '2022-11-11 02:32:35', '2023-04-28 12:00:15'),
(10, '{\"az\":\"Qeydiyyat\"}', '2', '9:00-10:00', 0, '2022-11-12 09:19:47', '2022-11-14 13:54:41'),
(12, '{\"az\":\"I Panel \\u0130nvestisiya Strategiyalar\\u0131 2\"}', '2', '12:00-13:05', 1, '2022-11-12 09:20:14', '2022-11-12 09:22:09'),
(14, '{\"az\":\"II Panel Vergi v\\u0259 Hesabatl\\u0131l\\u0131q 2\"}', '2', '10:40-12:05', 1, '2022-11-12 09:21:22', '2022-11-12 09:22:14'),
(19, '{\"az\":\"Nahar Fasiləsi 12:30 - 14:00\",\"en\":\"Lunch Break 13:00 - 14:00\"}', '1', '12:30- 14:00', 0, '2022-12-16 14:13:18', '2023-02-28 07:42:09'),
(27, '{\"az\":\"Rəqəmsal Strategiyalar və ROI Optimizasiyası\"}', '1', '14:00 - 15:30', 1, '2023-02-28 07:45:18', '2023-04-28 12:01:27'),
(29, '{\"az\":\"Çay \\/ Kofe Fasiləsi 15:30-16:00\"}', '1', '15:30 - 16:00', NULL, '2023-02-28 07:46:10', '2023-02-28 07:46:10'),
(31, '{\"az\":\"Müştəri Davranışına Data-əsaslı Yanaşma\"}', '1', '16:00 - 17:30', 1, '2023-02-28 07:47:04', '2023-04-28 12:02:36'),
(32, '{\"az\":\"Bağlanış hissəsi 17:30 - 18:00\"}', '1', '17:30 - 18:00', 0, '2023-02-28 07:47:39', '2023-02-28 07:47:52');

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
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Az', 'az', '2022-11-01 02:25:07', '2022-11-01 02:34:52'),
(2, 'En', 'en', '2022-11-01 02:34:47', '2022-11-01 02:34:47');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` text NOT NULL,
  `qeyd` text NOT NULL,
  `media_qurum` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `name`, `surname`, `email`, `tel`, `qeyd`, `media_qurum`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test media', 'testmedia@gmail.com', '(12) 121-21-21', 'test media qurum', 'test media qurum', '2023-01-12 07:30:42', '2023-01-12 07:30:42'),
(2, 'test qurum', 'test qurum', 'testqurum@gmail.com', '(12) 121-21-21', 'test media qurum', 'test media qurum', '2023-01-12 11:35:17', '2023-01-12 11:35:17'),
(3, 'Sevinc', 'Əliyeva', 'aliyevaseva861@gmail.com', '(50) 896-66-80', 'qeyd', 'Aid olduğunuz media qrumu', '2023-01-21 14:28:49', '2023-01-21 14:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `metas`
--

CREATE TABLE `metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `home_title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_keyw` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_keyw` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `register_title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `register_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `register_keyw` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor_title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor_keyw` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `metas`
--

INSERT INTO `metas` (`id`, `home_title`, `home_desc`, `home_keyw`, `blog_title`, `blog_desc`, `blog_keyw`, `register_title`, `register_desc`, `register_keyw`, `sponsor_title`, `sponsor_desc`, `sponsor_keyw`, `created_at`, `updated_at`) VALUES
(1, '{\"az\":\"Ana Səhifə - DMC\",\"en\":\"Home page\"}', '{\"az\":\"DMC- Gələcəyə dəyər konsept mesajı ilə\",\"en\":\"Human resources Summit\"}', '{\"az\":\"Digital Marketinq Conferences\",\"en\":\"human resources, HR, IR\"}', '{\"az\":\"Bloglar\",\"en\":\"Blogs\"}', '{\"az\":\"Rəqəmsal MArketinq Konfransına xoş gəlmisiniz\",\"en\":\"Welcome to the Human Resources Summit\"}', '{\"az\":\"Rəqəmsal MArketinq Konfransı\",\"en\":\"human resources, HR, HR, HR blog\"}', '{\"az\":\"Rəqəmsal MArketinq Konfransı Qeydiyyat\",\"en\":\"Human Resources Summit Registration\"}', '{\"az\":\"Rəqəmsal MArketinq Konfransı xoş gəlmisiniz\",\"en\":\"Welcome to the Human Resources Summit\"}', '{\"az\":\"Rəqəmsal MArketinq Konfransı\",\"en\":\"human resources, HR, HR, HR Registration\"}', '{\"az\":\"Rəqəmsal MArketinq Konfransı Sponsorlar üçün qeydiyyat\",\"en\":\"Registration for Human Resources Summit Sponsors\"}', '{\"az\":\"Rəqəmsal MArketinq Konfransına xoş gəlmisiniz\",\"en\":\"Welcome to the Human Resources Summit\"}', '{\"az\":\"Rəqəmsal MArketinq Konfransı\",\"en\":\"human resources, HR, HR, HR Sponsors\"}', '2022-11-14 03:13:08', '2023-04-28 08:22:41');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_01_054806_create_languages_table', 2),
(6, '2022_11_01_072204_create_news_table', 3),
(7, '2022_11_01_074005_create_tags_table', 4),
(8, '2022_11_02_105658_create_programs_table', 5),
(9, '2022_11_02_105730_create_spikers_table', 5),
(10, '2022_11_02_120015_create_sponsors_table', 6),
(11, '2022_11_02_120050_create_supporters_table', 6),
(12, '2022_11_03_051112_create_registrations_table', 7),
(13, '2022_11_03_051325_create_sponsor_forms_table', 8),
(14, '2022_11_03_074423_create_abouts_table', 9),
(15, '2022_11_03_110327_add_table_abouts_table', 10),
(16, '2022_11_04_064536_create_contacts_table', 11),
(17, '2022_11_04_111300_create_photos_table', 12),
(18, '2022_11_04_111314_create_videos_table', 12),
(19, '2022_11_09_074225_add_column_to_videos_table', 13),
(20, '2022_11_09_083640_create_events_table', 14),
(21, '2022_11_09_083744_create_moderators_table', 14),
(22, '2022_11_09_102829_create_projects_table', 15),
(23, '2022_11_11_054708_create_dates_table', 16),
(24, '2022_11_11_084821_add_column_about_table', 17),
(25, '2022_11_11_110043_create_subscribes_table', 18),
(26, '2022_11_14_065515_create_metas_table', 19),
(27, '2022_11_14_070025_add_column_metas_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `moderators`
--

CREATE TABLE `moderators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `events_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `payriff_order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sessionID` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `image`, `year`, `created_at`, `updated_at`) VALUES
(15, '[]', '2023', '2023-11-09 03:40:24', '2023-03-13 11:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `title`, `active`, `created_at`, `updated_at`) VALUES
(6, '{\"az\":\"Açılış nitqi\",\"en\":\"Guests\"}', 1, '2022-12-12 12:31:09', '2023-04-28 08:24:08'),
(7, '{\"az\":\"Moderatorlar\",\"en\":\"Moderators\"}', 0, '2022-12-12 12:31:15', '2023-04-27 18:14:54'),
(8, '{\"az\":\"Spikerl\\u0259r\",\"en\":\"Speakers\"}', 1, '2022-12-12 12:31:19', '2023-04-28 08:23:45');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linked` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `link`, `title`, `desc`, `fb`, `linked`, `twitter`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'uploads/projects/1756822493738912.jpg', 'http://fifbaku.az/', '{\"az\":\"III MAL\\u0130YY\\u018f V\\u018f \\u0130NVEST\\u0130S\\u0130YA FORUMU\"}', '{\"en\":\"<p>wertyui edited en<\\/p>\",\"az\":\"<p>16 noyabr 2022-ci il tarixind\\u0259 &ldquo;Baku Marriott Boulevard&rdquo; oteld\\u0259 &ouml;lk\\u0259mizin apar\\u0131c\\u0131 \\u015firk\\u0259tl\\u0259rinin d\\u0259st\\u0259yi v\\u0259 i\\u015ftirak\\u0131 il\\u0259 III Maliyy\\u0259 v\\u0259 \\u0130nvestisiya Forumu 2022 (FIF2022) &ldquo;G\\u0259l\\u0259c\\u0259k &uuml;&ccedil;&uuml;n Yenil\\u0259n&rdquo; devizi il\\u0259 ke&ccedil;irilib.<\\/p>\\r\\n\\r\\n<p>&nbsp;Az\\u0259rbaycan\\u0131n Maliyy\\u0259 v\\u0259 \\u0130nvestisiya sah\\u0259sind\\u0259 ilk forumu olan &ldquo;Finance and \\u0130nvestment Forum&rdquo; (FIF) &ouml;nc\\u0259ki ill\\u0259rd\\u0259 (2017 v\\u0259 2018) d\\u0259 ke&ccedil;irilmi\\u015f v\\u0259 \\u0259sas m\\u0259qs\\u0259di Az\\u0259rbaycan\\u0131n maliyy\\u0259 bazar\\u0131n\\u0131n m&ouml;vcud v\\u0259ziyy\\u0259tinin t\\u0259hlili, bu sah\\u0259d\\u0259 olan &ccedil;at\\u0131\\u015fmazl\\u0131qlar, onlar\\u0131n aradan qald\\u0131r\\u0131lmas\\u0131 istiqam\\u0259tl\\u0259ri v\\u0259 d&uuml;nyada t\\u0259tbiq edil\\u0259n qabaqc\\u0131l t\\u0259cr&uuml;b\\u0259l\\u0259r haqq\\u0131nda t\\u0259f\\u0259rr&uuml;atl\\u0131 m\\u0259lumat m&uuml;badil\\u0259si, habel\\u0259 maliyy\\u0259 v\\u0259 vergi maarifl\\u0259ndirm\\u0259si sah\\u0259sind\\u0259 d&ouml;vl\\u0259tin h\\u0259yata ke&ccedil;irdiyi geni\\u015fmiqyasl\\u0131 t\\u0259dbirl\\u0259r\\u0259 d\\u0259st\\u0259k olmaqdan ibar\\u0259t olmu\\u015fdur.<\\/p>\"}', 'https://www.facebook.com/fifbaku.az', 'https://www.linkedin.com/company/fifbaku-az/?viewAsMember=true', '#', 'https://www.instagram.com/fifbaku.az/', '2022-11-09 06:44:10', '2023-02-03 15:01:30'),
(3, 'uploads/projects/1749282008640996.png', 'https://conferences.az/', '{\"az\":\"ISCEMR\"}', '{\"az\":\"<p>23-26 iyun tarixl\\u0259rind\\u0259 UNEC Beyn\\u0259lxalq Magistratura v\\u0259 Doktorantura M\\u0259rk\\u0259zinin t\\u0259\\u015fkilat&ccedil;\\u0131l\\u0131\\u011f\\u0131, PA\\u015eA Holdinq \\u015eirk\\u0259tl\\u0259r qrupunun ba\\u015f sponsorlu\\u011fu, Fil Agency-nin t\\u0259\\u015fkilati d\\u0259st\\u0259yi v\\u0259 kreativ t\\u0259r\\u0259fda\\u015fl\\u0131\\u011f\\u0131, Facemark MMC-nin t\\u0259\\u015fkilati d\\u0259st\\u0259yi il\\u0259 IV \\u0130qtisadiyyat v\\u0259 \\u0130dar\\u0259etm\\u0259 Sah\\u0259sind\\u0259 T\\u0259dqiqat&ccedil;\\u0131lar\\u0131n Beyn\\u0259lxalq Elmi Konfrans\\u0131 ke&ccedil;irilib.<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<p>22-25 iyun 2023-c&uuml; il tarixind\\u0259 Heyd\\u0259r \\u018fliyev M\\u0259rk\\u0259zind\\u0259 ke&ccedil;iril\\u0259c\\u0259kdir.<\\/p>\"}', 'https://www.facebook.com/iscemr', 'https://www.linkedin.com/company/iscemr/?viewAsMember=true', '#', 'https://www.instagram.com/iscemr/', '2022-11-12 09:28:43', '2023-01-27 07:45:31'),
(4, 'uploads/projects/1749282060305655.png', 'https://www.unecforum.az/', '{\"az\":\"UNEC \\u0130QT\\u0130SAD\\u0130 FORUMU\"}', '{\"az\":\"<p>1-3 dekabr 2021-ci ild\\u0259 UNEC \\u0130QT\\u0130SAD\\u0130 FORUMU ke&ccedil;irilmi\\u015fdir.<\\/p>\\r\\n\\r\\n<p><br \\/>\\r\\n5 panel &uuml;zr\\u0259 30-d\\u0259k, o c&uuml;ml\\u0259d\\u0259n 20-y\\u0259 q\\u0259d\\u0259r n&uuml;fuzlu xarici spikerl\\u0259rin &ccedil;\\u0131x\\u0131\\u015f etdiyi Forumun ana devizi &ldquo;Z\\u0259f\\u0259r Yolu&rdquo;dur. Eyni zamanda Nobel m&uuml;kafat\\u0131 laureatlar\\u0131, d&uuml;nyan\\u0131n tan\\u0131nm\\u0131\\u015f iqtisad&ccedil;\\u0131lar\\u0131 il\\u0259 x&uuml;susi m&uuml;zakir\\u0259l\\u0259r v\\u0259 g\\u0259nc aliml\\u0259rin v\\u0259 Beyn\\u0259lxalq Elm Olimpiadalar\\u0131n qalibi olan \\u015fagirdl\\u0259rin g&ouml;r&uuml;\\u015fl\\u0259ri, yeni kitablar\\u0131n t\\u0259qdimatlar\\u0131, s\\u0259rgil\\u0259r v\\u0259 ba\\u015fqa maraql\\u0131 t\\u0259dbirl\\u0259r h\\u0259yata ke&ccedil;irilib.<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\"}', 'https://www.facebook.com/uefbaku', 'https://www.linkedin.com/company/unececonomicforumbaku2021/?viewAsMember=true', '#', 'https://www.instagram.com/uefbaku/', '2022-11-12 09:29:33', '2022-12-19 05:52:46'),
(5, 'uploads/projects/1749282149441712.png', 'http://wifbaku.az/', '{\"az\":\"Bak\\u0131 Su \\u0130nnovasiya Forumu\"}', '{\"az\":\"<p>&Ouml;lk\\u0259mizd\\u0259 ilk d\\u0259f\\u0259 Bak\\u0131 Su \\u0130nnovasiya Forumu (Water \\u0130nnovation Forum Baku) 17 may 2022-ci il tarixind\\u0259 Baku Marriott Hotel Boulevard-da ke&ccedil;irilmi\\u015fdir.&nbsp;Bak\\u0131 Su \\u0130nnovasiya Forumu (Water \\u0130nnovation Forum Baku) sudan s\\u0259m\\u0259r\\u0259li istifad\\u0259,&nbsp; bu sah\\u0259d\\u0259 optimal&nbsp; h\\u0259ll yollar\\u0131 v\\u0259 m&uuml;t\\u0259r\\u0259qqi texnologiyalardan istifad\\u0259, &ccedil;irkab (tullant\\u0131) sular\\u0131n idar\\u0259edilm\\u0259si, t\\u0259krar emal\\u0131 v\\u0259 \\u0259traf m&uuml;hit\\u0259 t\\u0259sirl\\u0259ri, suyun keyfiyy\\u0259tinin idar\\u0259edilm\\u0259si, &ouml;l&ccedil;&uuml; v\\u0259 n\\u0259zar\\u0259t texnologiyalar\\u0131 m&ouml;vzular\\u0131na h\\u0259sr edilmi\\u015fdir.&nbsp;<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<p>30-31 may 2023-c&uuml; il tarixind\\u0259 II d\\u0259f\\u0259 ke&ccedil;iril\\u0259c\\u0259kdir.<\\/p>\"}', 'https://www.facebook.com/Water-Innovation-Forum-Baku-112278001445464', 'https://www.linkedin.com/company/wif-baku/?viewAsMember=true', '#', 'https://www.instagram.com/waterinnovationforumbaku/', '2022-11-12 09:30:58', '2023-01-27 07:46:08'),
(6, 'uploads/projects/1749282179201546.png', 'https://www.hragenda.az/', '{\"az\":\"HR Agenda\"}', '{\"az\":\"<p>Az\\u0259rbaycan\\u0131n ilk onlayn HR forumu olan &quot;HR Agenda&quot; 2020-ci ild\\u0259 &quot;Business Management School&quot; MMC t\\u0259r\\u0259find\\u0259n t\\u0259sis edilmi\\u015fdir.&nbsp;3-c&uuml;s&uuml; 10-11 dekabr 2022-ci il tarixind\\u0259 Business Management School, HR Option v\\u0259 Facemark MMC-nin t\\u0259\\u015fkilat&ccedil;\\u0131l\\u0131\\u011f\\u0131 il\\u0259&nbsp;ba\\u015f tutan&nbsp;HR Agenda`22-d\\u0259 yerli v\\u0259 \\u0259cn\\u0259bi olmaqla y&uuml;ks\\u0259k statuslu \\u015firk\\u0259tl\\u0259rin \\u0130nsan resurslar\\u0131 idar\\u0259&ccedil;iliyi &uuml;zr\\u0259 r\\u0259hb\\u0259rl\\u0259rinin v\\u0259 CEO-lar\\u0131n\\u0131n &ccedil;\\u0131x\\u0131\\u015flar\\u0131 il\\u0259 ke&ccedil;irilib.<\\/p>\"}', 'https://www.facebook.com/hragenda.az', 'https://www.linkedin.com/company/hr-agenda/', 'Consequatur labore', 'https://www.instagram.com/hragenda/', '2022-11-12 09:31:26', '2022-12-19 05:57:35'),
(9, 'uploads/projects/1756822500748320.jpg', 'https://millimarketinqforumu.az/', '{\"az\":\"Milli Marketinq Forumu\"}', '{\"az\":\"<p>&Ouml;lk\\u0259mizin biznes sah\\u0259sind\\u0259ki \\u0259n iri h\\u0259cmli v\\u0259 davaml\\u0131, eyni zamanda marketinq sah\\u0259sinin ilk forumu olan Milli Marketinq Forumu 2013-c&uuml; ild\\u0259n etibar\\u0259n ke&ccedil;irilm\\u0259kd\\u0259dir.&nbsp;<\\/p>\\r\\n\\r\\n<p>7 paneld\\u0259n ibar\\u0259t olan v\\u0259 2 g&uuml;n davam ed\\u0259n 8-ci Milli Marketinq Forumu 300-d\\u0259n &ccedil;ox \\u015firk\\u0259td\\u0259n 500-d\\u0259n &ccedil;ox m&uuml;t\\u0259x\\u0259ssis v\\u0259 r\\u0259hb\\u0259rin i\\u015ftirak\\u0131 il\\u0259 10-11 iyun tarixl\\u0259rind\\u0259 Bak\\u0131 Bulvar Marriott oteld\\u0259 ke&ccedil;irilib.<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\"}', 'https://www.facebook.com/MilliMarketinqForumu', 'https://www.linkedin.com/company/milli-marketinq-forumu/?viewAsMember=true', NULL, 'https://www.instagram.com/milli_marketinq_forumu/', '2022-12-19 06:00:26', '2023-02-03 15:01:37'),
(10, 'uploads/projects/1754255501379254.png', 'https://mirf.az/', '{\"az\":\"Milli \\u0130nsan Resurslar\\u0131 Forumu\"}', '{\"az\":\"<p>Milli \\u0130nsan Resurslar\\u0131 Forumunun qar\\u015f\\u0131ya qoydu\\u011fu \\u0259sas h\\u0259d\\u0259fi insan resurslar\\u0131 idar\\u0259&ccedil;iliyi &uuml;zr\\u0259 pe\\u015f\\u0259kar spikerl\\u0259rin &ccedil;\\u0131x\\u0131\\u015f\\u0131 v\\u0259 yarad\\u0131lacaq m&uuml;zakir\\u0259 m&uuml;hiti il\\u0259 bu m&ouml;vzunu g&uuml;nd\\u0259m\\u0259 g\\u0259tirm\\u0259k, \\u0259sas s\\u0259b\\u0259bl\\u0259ri t\\u0259hlil ed\\u0259r\\u0259k h\\u0259ll yollar\\u0131 &uuml;z\\u0259rind\\u0259 fikir m&uuml;badil\\u0259si aparmaqd\\u0131r.&nbsp;<\\/p>\\r\\n\\r\\n<p>2015-ci ild\\u0259n etibar\\u0259n t\\u0259\\u015fkil olunan M\\u0130RF - Milli \\u0130nsan Resurslar\\u0131 Forumu bu il &quot;G\\u0259l\\u0259c\\u0259y\\u0259 d\\u0259y\\u0259r&quot; \\u015f&uuml;ar\\u0131 il\\u0259 6 may 2023-c&uuml; tarixind\\u0259 VI d\\u0259f\\u0259 ke&ccedil;iril\\u0259c\\u0259kdir.<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\"}', 'https://www.facebook.com/mirfaze', 'https://www.linkedin.com/company/mi%CC%87rf/?viewAsMember=true', NULL, 'https://www.instagram.com/mirf.aze/', '2023-01-06 06:55:08', '2023-01-27 07:47:01'),
(11, 'uploads/projects/1755440994165771.jpg', '-', '{\"az\":\"R\\u0259q\\u0259msal Marketinq Konfrans\\u0131\"}', '{\"az\":\"<p>R\\u0259q\\u0259msal Marketinq Konfrans\\u0131 Facemark MMC - media v\\u0259 biznes t\\u0259dbir t\\u0259\\u015fkila&ccedil;\\u0131s\\u0131 \\u015firk\\u0259ti t\\u0259r\\u0259find\\u0259n ke&ccedil;irilir.<\\/p>\\r\\n\\r\\n<p>T\\u0259dbirin m\\u0259qs\\u0259di r\\u0259q\\u0259msal marketinq sah\\u0259sinin&nbsp;inki\\u015faf\\u0131na d\\u0259st\\u0259k olmaqd\\u0131r. H\\u0259r il davaml\\u0131 olaraq ke&ccedil;iril\\u0259c\\u0259k t\\u0259dbird\\u0259 yerli v\\u0259 xarici m&uuml;t\\u0259x\\u0259ssisl\\u0259r r\\u0259q\\u0259msal marketinq keysl\\u0259rini m&uuml;zakir\\u0259 ed\\u0259c\\u0259kl\\u0259r. 2015-ci ild\\u0259n etibar\\u0259n illik \\u0259n\\u0259n\\u0259vi olaraq ke&ccedil;iril\\u0259n konfrans 2023-ci ild\\u0259 6-c\\u0131 d\\u0259f\\u0259 ke&ccedil;iril\\u0259c\\u0259kdir.&nbsp;<\\/p>\"}', 'https://www.facebook.com/dmcbaku.az', 'https://www.linkedin.com/company/76116754/admin/', NULL, 'https://www.instagram.com/dmcbaku.az/', '2023-01-19 08:58:10', '2023-02-16 06:03:20'),
(12, 'uploads/projects/1761515879775188.jpg', 'https://vmz.az/', '{\"az\":\"Vergi və Mühasibatlıq Zirvəsi\"}', '{\"az\":\"<p>&ldquo;Rəqəmlərin ritmi&rdquo; ş&uuml;arı ilə 11 mart 2023-ci il tarixində &ldquo;Baku Marriott Hotel Boulevard&rdquo;da 600 nəfərin iştirakı ilə Vergi və M&uuml;hasibatlıq Zirvəsi ke&ccedil;irilib.<\\/p>\\r\\n\\r\\n<p><strong>&ldquo;Facemark&rdquo; <\\/strong>MMC və <strong>&ldquo;Good Finance&rdquo; <\\/strong>MMC-nin təşkilat&ccedil;ılığı, <strong>&ldquo;Meqa Həyat Sığorta&rdquo;<\\/strong> ASC-nin baş sponsorluğu, <strong>&ldquo;<\\/strong><strong>Business Management School&rdquo; <\\/strong>MMC, <strong>&ldquo;<\\/strong><strong>Başkent&rdquo;<\\/strong> restoranlar şəbəkəsi, <strong>&ldquo;Unilegal Consulting&rdquo;<\\/strong> şirkətinin, <strong>&ldquo;<\\/strong><strong>Balli Bisi&rdquo;<\\/strong> şirniyyat evi və&nbsp; <strong>&quot;Pro Team Consulting &amp; Outsourcing&quot; <\\/strong>şirkətinin,<strong> SİMA rəqəmsal imzanın<\\/strong> şirkətinin dəstəyilə 600 nəfərədək şirkət n&uuml;mayəndələrinin iştirakı ilə baş tutan zirvə &ouml;lkəmizdə vergi və m&uuml;hasibatlıq sahəsinin inkişafına dəstəyi və sahə &uuml;zrə yerli kadrların daha da təkmilləşdirilməsini həyata ke&ccedil;irib.<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\"}', 'https://www.facebook.com/vmzbaku/', 'https://www.linkedin.com/company/91485148/admin/', '-', 'https://www.instagram.com/vmzbaku/', '2023-03-27 10:20:52', '2023-03-27 10:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spikers`
--

CREATE TABLE `spikers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `programs_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linked` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `title`, `created_at`, `updated_at`) VALUES
(3, '{\"az\":\"T\\u0259\\u015fkilat\\u00e7\\u0131lar\",\"en\":\"Organizers\"}', '2022-11-02 08:15:33', '2022-12-27 13:48:06'),
(5, '{\"az\":\"Ba\\u015f Sponsor\",\"en\":\"Sponsors\"}', '2022-11-12 08:58:57', '2022-12-29 10:34:21'),
(6, '{\"az\":\"Sponsor və Dəstəkçilər\",\"en\":\"Supporter\"}', '2022-11-12 09:40:49', '2023-04-26 07:17:06'),
(7, '{\"az\":\"T\\u0259r\\u0259fda\\u015flar\",\"en\":\"Partner\"}', '2022-11-12 10:11:46', '2023-02-16 06:02:20'),
(9, '{\"az\":\"Media T\\u0259r\\u0259fda\\u015flar\\u0131\",\"en\":\"Media Partner\"}', '2022-12-16 14:40:22', '2023-02-16 06:02:25');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor_forms`
--

CREATE TABLE `sponsor_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsor_forms`
--

INSERT INTO `sponsor_forms` (`id`, `name`, `surname`, `email`, `phone`, `work`, `profession`, `experience`, `created_at`, `updated_at`) VALUES
(7, 'Murad', 'Süleymanzadə', 'muuriq@gmail.com', '(50) 876-10-50', 'Ağ Finans', 'Sosial Media Marketinq mütəxəssisi', 'Təşkilatçılar', '2022-12-27 08:45:18', '2022-12-27 08:45:18'),
(8, 'Orkhan', 'Mammadov', 'orkhan.mammadov@omnitech.az', '(51) 207-81-82', 'Omnitech MMC', 'Direktor', 'Tərəfdaş', '2023-01-24 16:06:16', '2023-01-24 16:06:16'),
(9, 'Əfqan', 'Zülfüqarlı', 'afganzulfugarli@gmail.com', '(50) 402-49-47', 'HR DOCUMENT MMC', 'Direktor', 'Tərəfdaşlar', '2023-03-30 17:10:03', '2023-03-30 17:10:03'),
(10, 'Ceyhun', 'Xəlilov', 'ceyhunxelilzade@doydum.az', '(51) 301-24-22', 'Doydum Catering', 'Direktor', 'Baş Sponsor', '2023-04-12 10:54:58', '2023-04-12 10:54:58'),
(11, 'Cəmil', 'Qarəhmədov', 'postpro@tenetaz.com', '(50) 631-61-86', 'TENET Company', 'Təsisçi,CEO', 'Media Tərəfdaşları', '2023-04-12 13:44:18', '2023-04-12 13:44:18'),
(12, 'Cəmil', 'Qarəhmədov', 'postpro@tenetaz.com', '(50) 631-61-86', 'TENET Company', 'Təsisçi,CEO', 'Media Tərəfdaşları', '2023-04-12 13:44:45', '2023-04-12 13:44:45'),
(13, 'Orxan', 'Əhmədov', 'orkhan@bonpara.com', '(77) 277-01-07', 'Bonpara', 'Təsisçi', 'Sponsor və Dəstəkçilər', '2023-05-03 22:40:10', '2023-05-03 22:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'test@gmail.com', '2022-11-11 07:08:58', '2022-11-11 07:08:58'),
(2, 'Vagifibra@gmail.com', '2022-11-14 07:10:10', '2022-11-14 07:10:10'),
(3, 'vagifibra@gmail.com', '2022-11-14 07:40:37', '2022-11-14 07:40:37'),
(4, 'vagifibra@gmail.com', '2022-11-14 07:40:38', '2022-11-14 07:40:38'),
(5, 'vagifibra@gmail.com', '2022-11-14 07:42:24', '2022-11-14 07:42:24'),
(6, 'vagif markup.az', '2022-11-14 14:13:32', '2022-11-14 14:13:32'),
(7, 'yhh', '2022-11-14 14:15:20', '2022-11-14 14:15:20'),
(8, 'Ashraf.h@payriff.com', '2022-12-14 12:07:17', '2022-12-14 12:07:17'),
(9, 'atakishi.bashir@gmail.com', '2022-12-19 09:40:06', '2022-12-19 09:40:06'),
(10, 'nicat.092@hotmail.com', '2022-12-19 13:06:36', '2022-12-19 13:06:36'),
(11, 'hunaltay@gmail.com', '2022-12-21 08:39:22', '2022-12-21 08:39:22'),
(12, 'ayshannuriyeva5@gmail.com', '2022-12-21 08:39:47', '2022-12-21 08:39:47'),
(13, 'hunaltay@gmail.com', '2022-12-21 08:40:00', '2022-12-21 08:40:00'),
(14, 'hunaltay@gmail.com', '2022-12-21 08:40:29', '2022-12-21 08:40:29'),
(15, 'ayshannuriyeva5@gmail.com', '2022-12-21 08:40:43', '2022-12-21 08:40:43'),
(16, 'ayshannuriyeva5@gmail.com', '2022-12-21 08:47:22', '2022-12-21 08:47:22'),
(17, 'nigar.hasanova.97@mail.ru', '2022-12-21 10:03:26', '2022-12-21 10:03:26'),
(18, 'vagif@markup.az', '2022-12-21 10:04:01', '2022-12-21 10:04:01'),
(19, 'nigar.hasanova.97@mail.ru', '2022-12-21 10:37:00', '2022-12-21 10:37:00'),
(20, 'konulaliyeva669@gmail.com', '2022-12-24 19:29:08', '2022-12-24 19:29:08'),
(21, 'konulaliyeva669@gmail.com', '2022-12-24 19:29:08', '2022-12-24 19:29:08'),
(22, 'c.v.mamedov@gmail.com', '2022-12-26 05:13:31', '2022-12-26 05:13:31'),
(23, 'nigar.hasanova@facemark.az', '2022-12-26 06:37:16', '2022-12-26 06:37:16'),
(24, 'narminag@mail.ru', '2022-12-26 08:38:59', '2022-12-26 08:38:59'),
(25, 'narminag@mail.ru', '2022-12-26 08:40:30', '2022-12-26 08:40:30'),
(26, 'iqlim@mail.ru', '2022-12-26 09:03:26', '2022-12-26 09:03:26'),
(27, 'moonlike22ar@gmail.com', '2022-12-26 09:38:00', '2022-12-26 09:38:00'),
(28, 'moonlike22ar@gmail.com', '2022-12-26 09:38:08', '2022-12-26 09:38:08'),
(29, 'nigar.hasanova.97@mail.ru', '2022-12-27 08:26:08', '2022-12-27 08:26:08'),
(30, 'faiq198509@gmail.com', '2023-02-02 03:00:40', '2023-02-02 03:00:40'),
(31, 'ibrahimov.design@gmail.com', '2023-02-03 10:40:38', '2023-02-03 10:40:38'),
(32, 'arazbehbud@gmail.com', '2023-02-03 16:45:09', '2023-02-03 16:45:09'),
(33, 'maftunabdurahmanov@yahoo.com', '2023-02-05 03:15:12', '2023-02-05 03:15:12'),
(34, 'aynaqasimova92@gmail.com', '2023-02-08 08:43:50', '2023-02-08 08:43:50'),
(35, 'cp21f3oibk7pbkgjos@mailfroms.info', '2023-02-10 12:17:28', '2023-02-10 12:17:28'),
(36, 'aygun.safarova@gmail.com', '2023-02-11 11:01:56', '2023-02-11 11:01:56'),
(37, 'zahir.n@mail.ru', '2023-02-14 07:22:51', '2023-02-14 07:22:51'),
(38, 'talehmurselzade92@gmail.com', '2023-02-14 19:43:18', '2023-02-14 19:43:18'),
(39, 'ja.gurbanov@gmail.com', '2023-02-15 07:36:18', '2023-02-15 07:36:18'),
(40, 'ibad.quliyev@taxes.gov.az', '2023-02-15 08:10:28', '2023-02-15 08:10:28'),
(41, 'cabir.sultanov@gmail.com', '2023-02-15 09:27:31', '2023-02-15 09:27:31'),
(42, 'NT_Consulting_Group@outlook.com', '2023-02-15 09:40:11', '2023-02-15 09:40:11'),
(43, 'maliyyemk.naile@gmail.com', '2023-02-15 09:48:28', '2023-02-15 09:48:28'),
(44, 'zia1575@gmail.com', '2023-02-15 10:31:33', '2023-02-15 10:31:33'),
(45, 'muhasibatliq@gmail.com', '2023-02-15 19:31:29', '2023-02-15 19:31:29'),
(46, 'arkerimova1971@yahoo.com', '2023-02-16 08:45:47', '2023-02-16 08:45:47'),
(47, 'ferqanemuxtarova90@gmail.com', '2023-02-16 19:15:35', '2023-02-16 19:15:35'),
(48, 'nailya.babayeva1@gmail.com', '2023-02-18 07:13:29', '2023-02-18 07:13:29'),
(49, 'bademmemmedova3@gmail.com', '2023-02-19 09:32:43', '2023-02-19 09:32:43'),
(50, 'mnsevda@gmsil.com', '2023-02-20 07:12:13', '2023-02-20 07:12:13'),
(51, 'ilham.m@bnffc.net', '2023-02-21 09:28:19', '2023-02-21 09:28:19'),
(52, 'ramila.muradova@mail.ru', '2023-02-23 11:26:48', '2023-02-23 11:26:48'),
(53, 'KND3_generic_b18a5b28_mirf.az@data-backup-store.com', '2023-03-15 01:34:40', '2023-03-15 01:34:40'),
(54, 'Orion_999@mail.ru', '2023-03-17 12:21:53', '2023-03-17 12:21:53'),
(55, 'elvinmurvatov@gmail.com', '2023-03-29 15:21:38', '2023-03-29 15:21:38'),
(56, 'ulviyye.alekberova@gmail.com', '2023-03-31 04:44:52', '2023-03-31 04:44:52'),
(57, 'konul.muxtarova@gmail.com', '2023-03-31 06:46:23', '2023-03-31 06:46:23'),
(58, 'gulshan.aslanova89@gmail.com', '2023-03-31 08:53:40', '2023-03-31 08:53:40'),
(59, 'mirzayevashelale@mail.ru', '2023-04-05 07:18:46', '2023-04-05 07:18:46'),
(60, 'zeynn2@bp.com', '2023-04-06 08:00:00', '2023-04-06 08:00:00'),
(61, 'alidarustamovamamedova@gmail.com', '2023-04-10 08:38:09', '2023-04-10 08:38:09'),
(62, 'xeyale.Azizova.1987@mail.ru', '2023-04-11 13:41:38', '2023-04-11 13:41:38'),
(63, 'xeyale.azizova.1987@mail.ru', '2023-04-11 13:44:39', '2023-04-11 13:44:39'),
(64, 'tracher.1984@mail.ru', '2023-04-12 10:03:13', '2023-04-12 10:03:13'),
(65, 'Vafa.esedova@gmail.com', '2023-04-14 15:24:58', '2023-04-14 15:24:58'),
(66, 'Vafa.esedova@gmail.com', '2023-04-14 15:25:07', '2023-04-14 15:25:07'),
(67, 'mehribaneliyeva02@gmail.com', '2023-04-15 00:19:08', '2023-04-15 00:19:08'),
(68, 'mahmudova.narmin@gmail.com', '2023-04-15 15:51:12', '2023-04-15 15:51:12'),
(69, 'ishasoy41@gmail.com', '2023-04-18 06:59:38', '2023-04-18 06:59:38'),
(70, 'nesrulla88@mail.ru', '2023-04-23 11:29:18', '2023-04-23 11:29:18'),
(71, 'tJjN_generic_b18a5b28_dmcbaku.az@data-backup-store.com', '2023-04-29 10:19:30', '2023-04-29 10:19:30'),
(72, 'XkUm_generic_b18a5b28_dmcbaku.az@data-backup-store.com', '2023-05-05 08:59:25', '2023-05-05 08:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `supporters`
--

CREATE TABLE `supporters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supporters`
--

INSERT INTO `supporters` (`id`, `image`, `link`, `desc`, `title`, `sponsor_id`, `created_at`, `updated_at`) VALUES
(2, 'uploads/support/1749280232412864.png', 'https://bmschool.az/', '{\"az\":\"<p>&quot;Business Management School&quot; f\\u0259aliyy\\u0259tin\\u0259 2015-ci ild\\u0259n etibar\\u0259n ba\\u015flam\\u0131\\u015f v\\u0259 q\\u0131sa zaman \\u0259rzind\\u0259 &ouml;lk\\u0259mizin t\\u0259lim sektorunun qabaqc\\u0131l \\u015firk\\u0259tl\\u0259rind\\u0259n birin\\u0259 &ccedil;evrilmi\\u015fdir. \\u015eirk\\u0259t biznesin idar\\u0259edilm\\u0259sinin m&uuml;xt\\u0259lif istiqam\\u0259tl\\u0259ri &uuml;zr\\u0259 h\\u0259m a&ccedil;\\u0131q qruplar, h\\u0259m d\\u0259 korporativ formada t\\u0259liml\\u0259rin t\\u0259\\u015fkilini h\\u0259yata ke&ccedil;irir. Bundan \\u0259lav\\u0259, indiy\\u0259d\\u0259k &quot;HR Summit Baku&quot; forumunun t\\u0259\\u015fkilati d\\u0259st\\u0259k&ccedil;isi, &ouml;lk\\u0259mizin HR sah\\u0259sind\\u0259ki ilk onlayn forumu &quot;HR Agenda&quot; v\\u0259 t\\u0259chizat z\\u0259nciri idar\\u0259&ccedil;iliyi sah\\u0259sind\\u0259ki ilk forumu &quot;Supply Chain Forum&quot;un t\\u0259skilat&ccedil;\\u0131s\\u0131 olmu\\u015fdur.<\\/p>\",\"en\":\"<p>sdfghjm<\\/p>\"}', '{\"az\":\"Business Management School\"}', '7', '2022-11-02 08:36:39', '2023-04-28 11:08:33'),
(4, 'uploads/support/1749280361479053.png', 'https://filagency.az/', '{\"az\":\"<p>5 illik f\\u0259aliyy\\u0259ti \\u0259rzind\\u0259 pe\\u015f\\u0259karl\\u0131\\u011f\\u0131 il\\u0259 tan\\u0131nan &quot;Fil Agency&quot; q\\u0131sa m&uuml;dd\\u0259t \\u0259rzind\\u0259 b&ouml;y&uuml;k nailiyy\\u0259tl\\u0259r qazanaraq kreativlik, punktuall\\u0131q v\\u0259 h\\u0259r brend\\u0259 x&uuml;susi yana\\u015fmas\\u0131 il\\u0259 h\\u0259r zaman f\\u0259rql\\u0259nm\\u0259yi bacar\\u0131r.<br \\/>\\r\\n<br \\/>\\r\\nMarketinq sah\\u0259sind\\u0259 360 d\\u0259r\\u0259c\\u0259 f\\u0259aliyy\\u0259t g&ouml;st\\u0259r\\u0259n agentliyin xidm\\u0259tl\\u0259ri a\\u015fa\\u011f\\u0131dak\\u0131lard\\u0131r:<br \\/>\\r\\n<br \\/>\\r\\n&bull; R\\u0259q\\u0259msal Marketinq<br \\/>\\r\\n&bull; Sosial Media Marketinq<br \\/>\\r\\n&bull; Marketinq Konsultasiyas<br \\/>\\r\\n&bull; Brendinq v\\u0259 m\\u0259hsul dizayn\\u0131<br \\/>\\r\\n&bull; T\\u0259dbirl\\u0259rin t\\u0259\\u015fkili v\\u0259 PR xidm\\u0259ti<br \\/>\\r\\n&bull; SEO xidm\\u0259ti<br \\/>\\r\\n&bull; Veb sayt v\\u0259 mobil t\\u0259tbiq<br \\/>\\r\\n&bull; Video &ccedil;\\u0259kili\\u015f<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\"}', '{\"az\":\"Fil Agency\"}', '7', '2022-11-12 09:02:32', '2023-01-12 11:56:15'),
(5, 'uploads/support/1758417557013051.jpg', 'https://facemark.az/', '{\"az\":\"<p>&quot;Facemark&quot; MMC f\\u0259aliyyatin\\u0259 2011-ci ild\\u0259 Facemark.az &nbsp;onlayn biznes platformas\\u0131 olaraq ba\\u015flam\\u0131\\u015f, f\\u0259aliyy\\u0259ti &nbsp;d&ouml;vr&uuml;nd\\u0259 20-d\\u0259n art\\u0131q yerli v\\u0259 xarici biznes t\\u0259dbirin &nbsp;media t\\u0259r\\u0259fda\\u015f\\u0131 olmu\\u015f, 30-dan art\\u0131q biznesy&ouml;n&uuml;ml&uuml; &nbsp;konfranslar v\\u0259 forumlar\\u0131n t\\u0259\\u015fkilati d\\u0259st\\u0259k&ccedil;isi olmu\\u015f,&nbsp; biznes idar\\u0259&ccedil;iliyi sah\\u0259sinin pe\\u015fakarlar\\u0131 il\\u0259 canl\\u0131 yay\\u0131mlar &nbsp;h\\u0259yata ke&ccedil;irmi\\u015fdir.2022-ci ild\\u0259 is\\u0259 Facemark.az f\\u0259aliyyatin\\u0259 biznes t\\u0259dbirl\\u0259rin &nbsp;birba\\u015fa t\\u0259\\u015fkili xidm\\u0259tini \\u0259lav\\u0259 ed\\u0259r\\u0259k MMC statusu il\\u0259 &ldquo;Facemark&rdquo; MMC ad\\u0131 alt\\u0131nda&nbsp; davam etm\\u0259y ba\\u015flam\\u0131\\u015f, f\\u0259aliyy\\u0259tinin ilk ilind\\u0259 10-a yax\\u0131n &ouml;lk\\u0259miqyasl\\u0131&nbsp;biznes t\\u0259dbirin t\\u0259\\u015fkilat&ccedil;\\u0131l\\u0131\\u011f\\u0131n\\u0131 planlam\\u0131\\u015fd\\u0131r.<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\"}', '{\"az\":\"Facemark MMC\"}', '3', '2022-11-12 09:03:05', '2023-02-21 05:34:21'),
(42, 'uploads/support/1759063337706605.png', 'https://www.markup.az/', '{\"az\":\"<p>2019-cu ildən fəaliyyət g&ouml;stərən &quot;Markup&quot; agentliyi yenilik və trendləri izləyən şirkətlər &uuml;&ccedil;&uuml;n fərqli yanaşma ilə veb və marketinq xidmətləri təklif edir.<\\/p>\\r\\n\\r\\n<p>- Veb Saytların Hazırlanması,<br \\/>\\r\\n- Dizayn və Brendinq xidmətləri;<br \\/>\\r\\n- SEO \\/ SEM xidmətləri;<br \\/>\\r\\n- Mobil Tətbiqlərin Hazırlanması;<br \\/>\\r\\n- Rəqəmsal Marketinq;<br \\/>\\r\\n- Sosial Medianın İdarə edilməsi;<br \\/>\\r\\n- UX\\/UI Dizayn&nbsp;xidmətlərini həyata ke&ccedil;irir.<\\/p>\"}', '{\"az\":\"Markup Agency\"}', '7', '2023-02-28 08:38:46', '2023-02-28 08:38:46'),
(43, 'uploads/support/1760254186881298.png', 'https://beylimedia.com/', '{\"az\":\"<p>Yayım, PR və Media İstehsalat Agentliyi olan &quot;Beylimedia&quot; şirkəti fəaliyyətinə 2015-ci ildə Moskva şəhərində başlamışdır. Hazırda Rusiya, T&uuml;rkiyə və Azərbaycan ofislərində &ccedil;alışan komandası ilə bir &ccedil;ox uğurlu layihələrə imza ataraq &ouml;zəl şirkətlərin, həm&ccedil;inin d&ouml;vlət qurumlarının Qlobal Media Tərəfdaşı olmağa davam etməkdədir.<\\/p>\"}', '{\"az\":\"Beylimedia\"}', '7', '2023-03-13 12:06:48', '2023-03-13 12:06:48'),
(44, 'uploads/support/1760254264877389.png', 'https://www.brandsmediagroup.com/', '{\"az\":\"<p>10 ildən artıq reklam sahəsində fəaliyyət g&ouml;stərən &ldquo;Brand Media Groups&rdquo; şirkəti y&uuml;zdən artıq yerli və xarici brendlərin xidmətlərinin tanıdılmasına dəstək olaraq reklam yayımını həyata ke&ccedil;irməkdədir. Şirkət davamlı olaraq reklam məkanlarını monitorinq edir və m&uuml;ştərilər &uuml;&ccedil;&uuml;n daha &ccedil;ox fayda gətirən məkanlar &uuml;zrə reklam yerlərini yeniləyir.<\\/p>\"}', '{\"az\":\"BrandMediaGroup\"}', '7', '2023-03-13 12:08:02', '2023-03-13 12:08:02'),
(45, 'uploads/support/1760254316515772.png', 'http://www.creatime.az/', '{\"az\":\"<p>Reklam, poliqrafiya və promo sahəsini əhatə edən &quot;Crea Time&quot; şirkəti sizə y&uuml;ksək keyfiyyət və m&uuml;nasib qiymətə xidmət g&ouml;stərməklə yanaşı biznesinizin tanınmasında və inkişafında dəstək olacaq.<\\/p>\"}', '{\"az\":\"Creatime\"}', '7', '2023-03-13 12:08:52', '2023-03-13 12:08:52'),
(46, 'uploads/support/1760254358594942.png', 'https://admedia.az/az', '{\"az\":\"<p>2009-cu ildən fəaliyyət g&ouml;stərən &quot;Admedia&quot; reklam agentliyi həm Azərbaycanda, həm də beynəlxalq səviyyədə 360 dərəcəli reklam fəaliyyəti ilə məşğuldur. 13 illik təcr&uuml;bəyə malik olan peşəkar &ldquo;Admedia&rdquo; komandası m&uuml;ştərilərə fərdi yanaşır, onları məmnun edir.<\\/p>\"}', '{\"az\":\"Admedia\"}', '7', '2023-03-13 12:09:32', '2023-03-13 12:09:32'),
(47, 'uploads/support/1760254453545117.jpg', 'https://newmedia.az/', '{\"az\":\"<p>2009-cu ildən etibarən fəaliyyətdə olan ilk ixtisaslaşdırılmış media satış şirkəti &ldquo;New Media&rdquo; m&uuml;ştərilərə m&uuml;xtəlif məkanlarda banner və LED reklamlar, Google Ads, sosial media reklamları, rəqəmsal strategiya və vebsaytların hazırlanması xidmətlərini təklif edir.<\\/p>\"}', '{\"az\":\"Newmedia\"}', '7', '2023-03-13 12:11:02', '2023-03-13 12:11:02'),
(49, 'uploads/support/1760257274016776.png', 'https://qmeter.net/', '{\"az\":\"<p>2006-cı ildən m&uuml;ştərilərinə xidmət g&ouml;stərməyə başlayan &ldquo;Logix&rdquo; şirkəti 30-a yaxın modulu ilə 1000-dən &ccedil;ox m&uuml;əssisədə minlərlə istifadə&ccedil;iyə xidmət g&ouml;stərməkdədir. Şirkət vasitəsilə istənilən zaman və istənilən yerdə proqram təminatına qoşularaq m&uuml;əssisənin hazırkı vəziyyəti haqqında məlumat əldə etmək və təhl&uuml;kəsiz olaraq hesabatlara baxmaq m&uuml;mk&uuml;nd&uuml;r.f<\\/p>\"}', '{\"az\":\"Adviad\"}', '7', '2023-03-13 12:55:52', '2023-03-13 12:55:52'),
(50, 'uploads/support/1760257277117789.png', 'https://adviad.com/', '{\"az\":\"<p>&ldquo;Adviad&rdquo; &ndash; cəmi bir ne&ccedil;ə kliklə on m&uuml;xtəlif platformada eyni vaxtda reklam yerləşdirməyə imkan verən &ccedil;oxkanallı reklam platformasıdır. Adviad DSP, Yerli Saytlar, Facebook, Instagram, YouTube, Twitter, LinkedIn, Yandex və s. kimi 10-dan &ccedil;ox reklam kanalını vahid interfeysə inteqrasiya edib ki, bu da sizə reklamları real şəkildə planlaşdırmağa, yerləşdirməyə, optimallaşdırmağa və izləməyə imkan verir. Platforma mərkəzləşdirilmiş yerdə icra, kreativ idarəetmə, hədəfləmə və hesabat vermə də daxil olmaqla əlaqələndirilmiş omnikanal kampaniyalarını idarə etmək &uuml;&ccedil;&uuml;n lazım olan bu imkanların tam dəstini təklif edir ki, bu da marketoloqlara gizli kanal alışını aşmağa və onların marketinqindən b&ouml;y&uuml;k istehlak&ccedil;ı təcr&uuml;bələri və artan biznes nəticələrinə diqqət yetirməyə imkan verir.<\\/p>\"}', '{\"az\":\"Adviad\"}', '7', '2023-03-13 12:55:55', '2023-03-13 13:02:10'),
(53, 'uploads/support/1760257746786098.png', '#', '{\"az\":\"<p>MaxGroupPlus&nbsp;Genclik Mall, 28 Mall, Gence Mall-da reklamlarınızın yerləşməsini təmin edir!<\\/p>\\r\\n\\r\\n<p>Əlaqə:<\\/p>\\r\\n\\r\\n<p>📱050-396-36-96<\\/p>\\r\\n\\r\\n<p>📞 055-396-36-96<\\/p>\"}', '{\"az\":\"MaxGroupPlus\"}', '7', '2023-03-13 13:03:23', '2023-03-13 13:03:23'),
(54, 'uploads/support/1760258173666273.png', 'https://report.az/', '{\"az\":\"<p>&ldquo;Report&rdquo; İnformasiya Agentliyi 2014-c&uuml; ildən fəaliyyətə başlayıb. &ldquo;Global Media Group&rdquo; holdinqin tərkibinə daxildir. &quot;Report&quot; m&uuml;stəqil informasiya agentliyi sayt və g&uuml;ndəlik b&uuml;lletenlər vasitəsi ilə Azərbaycan, rus və ingilis dillərində siyasət, iqtisadiyyat, cəmiyyət, idman, mədəniyyət sahələri &uuml;zrə &ouml;lkədə və d&uuml;nyada baş verən ən vacib hadisələri &ouml;z oxucularına operativ şəkildə &ccedil;atdırır.<\\/p>\"}', '{\"az\":\"Report.az\"}', '9', '2023-03-13 13:10:10', '2023-03-13 13:10:10'),
(55, 'uploads/support/1760258229368485.png', 'https://marja.az/', '{\"az\":\"<p>2012-ci ildə yaradılan Marja biznes və maliyyə xəbərləri agentliyi hər g&uuml;n&nbsp;marja.az domenində ən m&uuml;h&uuml;m iqtisadi xəbərlər və iqtisadiyyata təsir edə biləcək hadisələr barədə məlumatlar yayımlayır.&nbsp; &ccedil;atdırmaqdır.<\\/p>\"}', '{\"az\":\"Marja.az\"}', '9', '2023-03-13 13:11:03', '2023-03-13 13:11:03'),
(56, 'uploads/support/1760258253599377.png', 'https://oxu.az/', '{\"az\":\"<p>&ldquo;Global Media Group&rdquo;a daxil olan<strong>&nbsp;Oxu.Az&nbsp;<\\/strong>xəbər saytı 2013-c&uuml; ilin iyul ayından fəaliyyət g&ouml;stərir. Saytın yaradılmasında məqsəd d&uuml;nyada və &ouml;lkədə baş verən ən vacib və maraqlı xəbərləri geniş auditoriyaya təqdim etməkdir.&nbsp;<strong>Oxu.Az&nbsp;<\\/strong>24 saat ərzində, Azərbaycan və rus dillərində, &ouml;lkədə və d&uuml;nyada baş verən ən aktual və maraqlı hadisələr barədə operativ xəbərlər, oxucuları və cəmiyyəti maraqlandıran suallara cavablar, analitik məqalələr, foto və videohesabatlar hazırlayır.<\\/p>\"}', '{\"az\":\"Oxu.az\"}', '9', '2023-03-13 13:11:26', '2023-03-13 13:11:26'),
(57, 'uploads/support/1760258292802888.png', 'https://1news.az/az', '{\"az\":\"<p>1news.az xəbər saytı 2007-ci il martın 12-də fəaliyyətə başlayıb. Sayt iki dildə - rus və Azərbaycan dillərində ən m&uuml;h&uuml;m yerli və qlobal problemlər haqqında məlumatları təqdim edir.<\\/p>\"}', '{\"az\":\"1news.az\"}', '9', '2023-03-13 13:12:04', '2023-03-13 13:12:04'),
(58, 'uploads/support/1761508254572347.png', 'https://www.bizimyol.info/', '{\"az\":\"<p>Bizim Yol xəbər portalı Azərbaycandan və d&uuml;nyadan b&uuml;t&uuml;n sahələri əhatə edən xəbərləri &ouml;z izləyicilərinə &ccedil;atdırır. G&uuml;ndəmin nəbzini tutan xəbər portalında tərəfsiz araşdırma, təhlil, analiz və k&ouml;şə yazılarını da oxuya bilərsiniz.<\\/p>\"}', '{\"az\":\"Bizimyolinfo.az\"}', '9', '2023-03-27 08:19:40', '2023-03-27 08:19:40'),
(59, 'uploads/support/1761520047900849.png', 'http://logix.az/', '{\"az\":\"<p>2006-cı ildən m&uuml;ştərilərinə xidmət g&ouml;stərməyə başlayan &ldquo;Logix&rdquo; şirkəti 30-a yaxın modulu ilə 1000-dən &ccedil;ox m&uuml;əssisədə minlərlə istifadə&ccedil;iyə xidmət g&ouml;stərməkdədir. Şirkət vasitəsilə istənilən zaman və istənilən yerdə proqram təminatına qoşularaq m&uuml;əssisənin hazırkı vəziyyəti haqqında məlumat əldə etmək və təhl&uuml;kəsiz olaraq hesabatlara baxmaq m&uuml;mk&uuml;nd&uuml;r.<\\/p>\"}', '{\"az\":\"Logix\"}', '7', '2023-03-27 11:27:07', '2023-03-27 11:27:07'),
(60, 'uploads/support/1761528900003978.jpg', 'https://operativmedia.az/', '{\"az\":\"<p>Operativ Media 2020-ci ilin 4 sentyabr tarixində fəaliyyətə başlamışdır. Oxucular burada d&uuml;nyada və &ouml;lkəmizdə baş verən ən son hadisələrdən operativ xəbər ala bilərlər.<\\/p>\"}', '{\"az\":\"Operativ media\"}', '9', '2023-03-27 13:47:49', '2023-03-27 13:47:49'),
(61, 'uploads/support/1761528953456274.jpg', 'https://iqtisadiyyat.az/', '{\"az\":\"<p>İqtisadiyyat.az saytı 2019-c&uuml; il tarixində, Azərbaycanda ixtisaslaşdırılmış iqtisadi xəbər portalı kimi fəaliyyətə başlayıb. Portal banklar, bank olmayan kredit təşkilatları, sığorta, sosium, avto, marketinq, tender, biznes, əmlak, turizm, İKT, kənd təsərr&uuml;fatı, sənaye və nəqliyyat sahələrindəki materialları yayır. İqtisadiyyat.az-ın əhatə dairəsi sosial platforması ilə daha da genişlənib və xəbərlər operativ şəkildə oxuculara &ccedil;atdırılır.<\\/p>\"}', '{\"az\":\"İqtisadiyyat.az\"}', '9', '2023-03-27 13:48:40', '2023-03-27 13:48:40'),
(64, 'uploads/support/1762950185883039.jpg', 'https://www.arazfm.az/', '{\"az\":\"\\\"Biznes Mərkəzi\\\" Araz FM-də həftəiçi 5 gün, saat 12:00 - dan 14:00-dək yayımlanır. İllərin layihəsi olduğundan xeyli dinləyici kütləsinə malikdir. Verilişin müəllifi və aparıcısı Rüfət Nadirlidir. Layihədə bütün biznes sahələrindən danışılır, radio debat formatında olan müzakirələrdə iş adamları və biznes sahələri üzrə mütəxəssislərin fikirləri yer alır.\"}', '{\"az\":\"Biznes Mərkəzi radio veriliş\"}', '9', '2023-04-12 06:18:33', '2023-04-12 11:05:11'),
(70, 'uploads/support/1764418108698617.jpg', 'https://code.edu.az/', '{\"az\":\"<p>2015-ci ildən fəaliyyət g&ouml;stərən Code Academy, informasiya texnologiyaları və qlobal iş d&uuml;nyasının ən &ccedil;ox tələb olunan sahələri &uuml;zrə 6000 nəfərdən &ccedil;ox m&uuml;təxəssis yetişdirən, Təhsil Nazirliyi tərəfindən akkreditasiya olunmuş ilk &ouml;zəl tədris m&uuml;əssisəsidir.&nbsp;<\\/p>\\r\\n\\r\\n<p>Digital Marketinq İnstitutunun Azərbaycanda və Qafqar regionunda ilk və tək rəsmi partnyoru olan Code Academy, həm&ccedil;inin AutoDesk, CompTIA, GitHub, Red Hat, Microsoft kimi beynəlxalq şirkətlərin &ouml;lkədə akademik partnyorudur.<\\/p>\"}', '{\"az\":\"Baş sponsor\"}', '5', '2023-04-28 11:10:33', '2023-05-02 08:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(4, '{\"az\":\"T\\u0259dbirl\\u0259rimizd\\u0259n\",\"en\":\"T\\u0259dbirl\\u0259rimizd\\u0259n\"}', '{\"az\":\"tedbirlerimizden\",\"en\":\"tedbirlerimizden\"}', '2022-11-14 05:18:09', '2022-11-14 05:18:27'),
(5, '{\"en\":\"Insan Resurslar\\u0131\",\"az\":\"Insan Resurslar\\u0131\"}', '{\"en\":\"insan-resurslari\",\"az\":\"insan-resurslari\"}', '2022-11-14 05:18:20', '2022-11-14 05:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `inform` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `date`, `image`, `time`, `title`, `price`, `url`, `inform`, `created_at`, `updated_at`) VALUES
(1, '2023-06-11', 'uploads/tickets/1764672873878722.png', '09:00', '{\"en\":\"Bilet (Nahar daxil)\",\"az\":\"Bilet (Nahar daxil)\"}', '95', '#', '{\"az\":\"\\u0130ki kofe fasil\\u0259si\\/Nahar\"}', '2022-12-12 02:39:07', '2023-05-01 06:39:56'),
(2, '2023-06-11', 'uploads/tickets/1764672860640115.png', '09:00', '{\"az\":\"Online bilet\",\"en\":\"Online bilet\"}', '30', '#', '{\"az\":\"Link vasit\\u0259sil\\u0259 t\\u0259dbiri izl\\u0259m\\u0259k\"}', '2022-12-12 11:17:15', '2023-05-02 15:18:06'),
(3, '2023-06-11', 'uploads/tickets/1764672880822931.png', '09:00', '{\"az\":\"Bilet (Nahar xaric)\",\"en\":\"Bilet (Nahar xaric)\"}', '60', '#', '{\"az\":\"iki kofe fasil\\u0259si\"}', '2022-12-12 11:29:01', '2023-05-02 15:18:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_status` int(10) NOT NULL DEFAULT 1,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `superadmin` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `admin_status`, `image`, `superadmin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Firəngiz', 'firengizsariyeva77@gmail.com', 1, '202211040947admin.jpeg', '1', NULL, '$2y$10$GThiQiIetkhYPoCL.HKPweZ1tRSqjZy5IcpHc2HaFQMdWcQUXGM0.', NULL, '2022-08-17 04:53:45', '2022-11-14 12:03:18'),
(4, 'Firengiz user', 'fuser@gmail.com', 1, '202208311224blog-5.jpg', '3', NULL, '$2y$10$hPLeU1rLPYE7juobgvxPMOMY66rXmomMeQoKdNL99PTp.C9leWcO2', NULL, '2022-08-31 06:52:26', '2022-08-31 08:50:49'),
(7, 'irzadmin', 'irzadmin@irzbaku.az', 1, NULL, '2', NULL, '$2y$10$KaKvJiPIAJColglP/.oK/uLfHiPMm68azvEXMtwVSAap5Q/WyUxKy', NULL, '2022-11-14 12:55:41', '2022-11-14 12:55:41'),
(9, 'Nigar', 'nigar@vmz.az', 1, NULL, '2', NULL, '$2y$10$RNvT83vDz6eA3T3XPSPa/eOOGyri4hgYrfUs3FJVM6SdtrVXyxws6', NULL, '2022-12-26 07:28:06', '2022-12-26 07:28:06');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2023',
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD KEY `blog_tags_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_tags_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metas`
--
ALTER TABLE `metas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moderators`
--
ALTER TABLE `moderators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spikers`
--
ALTER TABLE `spikers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsor_forms`
--
ALTER TABLE `sponsor_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supporters`
--
ALTER TABLE `supporters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dates`
--
ALTER TABLE `dates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `metas`
--
ALTER TABLE `metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `moderators`
--
ALTER TABLE `moderators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=821;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1078;

--
-- AUTO_INCREMENT for table `spikers`
--
ALTER TABLE `spikers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sponsor_forms`
--
ALTER TABLE `sponsor_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `supporters`
--
ALTER TABLE `supporters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
