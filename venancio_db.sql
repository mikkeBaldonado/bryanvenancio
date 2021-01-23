-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 09:09 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `venancio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `more_images` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `more_images`, `location`, `blog_date`, `author`, `description`, `description_2`, `tags`, `created_at`, `updated_at`) VALUES
(1, 'Taking pictures is savoring life intensely, every hundredth of a second. 1', 'image-010521102552ok79b.jpg', '[\"more-010421064103VO3Ci.jpg\",\"more-010421064103QWIOh.jpg\",\"more-010421064103YGL2J.jpg\"]', 'Metro Manila 1', '2020-06-02', 'Jane Doe 1', '<p>Photographers tend not to photograph what they can&rsquo;t see, which is the very reason one should try to attempt it. Otherwise we&rsquo;re going to go on forever just photographing more faces and more rooms and more places. Photography has to transcend description. It has to go beyond description to bring insight into the subject, or reveal the subject, not as it looks, but how does it feel. The camera would miss it all. There are no bad pictures; that&#39;s just how your face looks sometimes. A picture is a secret about a secrets, the more it tells you the less you know, and feel.</p>\r\n\r\n<p>He was right. John Loengard, the picture editor at Life, always used to tell me, &rdquo;If you want something to look interesting, don&rsquo;t light all of it.Taking pictures is savoring life intensely, every hundredth of a second. For me, the camera is a sketch book, an instrument of the best intuitions.</p>\r\n\r\n<p>Photography is a magical kind of art that allows people to preserve time and moments, and to describe the world the way they see it and loves.</p>\r\n\r\n<p>For me, the subject of the picture is always more important than the picture. A photograph is a click away. A good photographer is a hundred clicks away and a better one, a thousand clicks away for photography love photos and we make.</p>\r\n\r\n<p>I am a professional photographer by trade and an amateur photographer by vocation. If only I had thought of a Kodak! I could have flashed that glimpse of the Under-world in a second, and examined for more best and nice photographers.</p>\r\n\r\n<p>Women that can work a camera with ease often work men just as effortlessly for both require the same commitment to vanity and manipulations.</p>', '<p>It is a cruel, ironical art, photography. The dragging of captured moments into the future; moments that should have been allowed to be evaporate into the past; should exist only in memories, glimpsed through the fog of events that came after. Photographs force us to see people before their future weighed them down... A portrait is not a likeness. The moment an emotion or fact is transformed into a photograph it is no longer a fact but an opinion. There is no such thing as inaccuracy in a photograph. All photographs are accurate. None of them is the truth. No matter how much crap you gotta plow through to stay alive as a photographer, no matter how many bad assignments, bad days, bad clients, snotty subjects, obnoxious handlers, wigged-out art directors, technical disasters, failures of the mind, body, and will, all the shouldas, couldas, and wouldas that befuddle our brains and creep into our dreams, always remember to make room to shoot what you love. It&rsquo;s the only way to keep your heart beating as a photographer.</p>\r\n\r\n<p>For me the noise of Time is not sad: I love bells, clocks, watches &mdash; and I recall that at first photographic implements were related to techniques of cabinetmaking and the machinery of precision: cameras, in short, were clocks for seeing, and perhaps in me someone very old still hears in the photographic mechanism the living sound of the wood. I don&#39;t just look at the thing itself or at the reality itself; I look around the edges for those little askew moments-kind of like what makes up our lives-those slightly awkward, lovely moments.</p>\r\n\r\n<p>In an initial period, Photography, in order to surprise, photographs the notable; but soon, by a familiar reversal, it decrees notable whatever it photographs. The &#39;anything whatever&#39; then becomes the sophisticated acme of value.</p>\r\n\r\n<p>You only have to start saying of something : &#39;Ah, how beautiful ! We must photograph it !&#39; and you are already close to the view of the person who thinks that everything that is not photographed is lost, as if it never existed, and therefore in order to really live you must photograph as much as you can, and to photograph as much as you can you must either live in the most photographable way possible, or else consider photographable every moment of your life.</p>', '[\"1\",\"5\"]', '2021-01-03 22:41:03', '2021-01-05 02:33:55'),
(2, 'Taking pictures is savoring life intensely', 'image-0107211507357Qiet.jpg', '[\"more-010721150735fRLxO.jpg\",\"more-010721150735D3fB5.jpg\",\"more-010721150735oJDeD.jpg\",\"more-010721150735YVKmL.jpg\"]', 'Location', '2020-01-01', 'Jane Doe', '<p>Photographers tend not to photograph what they can&rsquo;t see, which is the very reason one should try to attempt it. Otherwise we&rsquo;re going to go on forever just photographing more faces and more rooms and more places. Photography has to transcend description. It has to go beyond description to bring insight into the subject, or reveal the subject, not as it looks, but how does it feel. The camera would miss it all. There are no bad pictures; that&#39;s just how your face looks sometimes. A picture is a secret about a secrets, the more it tells you the less you know, and feel.</p>', '<p>It is a cruel, ironical art, photography. The dragging of captured moments into the future; moments that should have been allowed to be evaporate into the past; should exist only in memories, glimpsed through the fog of events that came after. Photographs force us to see people before their future weighed them down... A portrait is not a likeness. The moment an emotion or fact is transformed into a photograph it is no longer a fact but an opinion. There is no such thing as inaccuracy in a photograph. All photographs are accurate. None of them is the truth. No matter how much crap you gotta plow through to stay alive as a photographer, no matter how many bad assignments, bad days, bad clients, snotty subjects, obnoxious handlers, wigged-out art directors, technical disasters, failures of the mind, body, and will, all the shouldas, couldas, and wouldas that befuddle our brains and creep into our dreams, always remember to make room to shoot what you love. It&rsquo;s the only way to keep your heart beating as a photographer.</p>\r\n\r\n<p>For me the noise of Time is not sad: I love bells, clocks, watches &mdash; and I recall that at first photographic implements were related to techniques of cabinetmaking and the machinery of precision: cameras, in short, were clocks for seeing, and perhaps in me someone very old still hears in the photographic mechanism the living sound of the wood. I don&#39;t just look at the thing itself or at the reality itself; I look around the edges for those little askew moments-kind of like what makes up our lives-those slightly awkward, lovely moments.</p>', '[\"2\"]', '2021-01-07 07:07:35', '2021-01-07 07:07:35'),
(3, 'Sample', 'image-010721151031r3LZn.jpg', '[\"more-010721151031KV1nK.jpg\",\"more-010721151031OKlPu.jpg\",\"more-010721151031LcDSs.jpg\"]', 'Location', '2019-03-03', 'Jane Doe', '<p>Photographers tend not to photograph what they can&rsquo;t see, which is the very reason one should try to attempt it. Otherwise we&rsquo;re going to go on forever just photographing more faces and more rooms and more places. Photography has to transcend description. It has to go beyond description to bring insight into the subject, or reveal the subject, not as it looks, but how does it feel. The camera would miss it all. There are no bad pictures; that&#39;s just how your face looks sometimes. A picture is a secret about a secrets, the more it tells you the less you know, and feel.</p>\r\n\r\n<p>He was right. John Loengard, the picture editor at Life, always used to tell me, &rdquo;If you want something to look interesting, don&rsquo;t light all of it.Taking pictures is savoring life intensely, every hundredth of a second. For me, the camera is a sketch book, an instrument of the best intuitions.</p>\r\n\r\n<p>Photography is a magical kind of art that allows people to preserve time and moments, and to describe the world the way they see it and loves.</p>\r\n\r\n<p>For me, the subject of the picture is always more important than the picture. A photograph is a click away. A good photographer is a hundred clicks away and a better one, a thousand clicks away for photography love photos and we make.</p>', '<p>Photographers tend not to photograph what they can&rsquo;t see, which is the very reason one should try to attempt it. Otherwise we&rsquo;re going to go on forever just photographing more faces and more rooms and more places. Photography has to transcend description. It has to go beyond description to bring insight into the subject, or reveal the subject, not as it looks, but how does it feel. The camera would miss it all. There are no bad pictures; that&#39;s just how your face looks sometimes. A picture is a secret about a secrets, the more it tells you the less you know, and feel.</p>\r\n\r\n<p>He was right. John Loengard, the picture editor at Life, always used to tell me, &rdquo;If you want something to look interesting, don&rsquo;t light all of it.Taking pictures is savoring life intensely, every hundredth of a second. For me, the camera is a sketch book, an instrument of the best intuitions.</p>\r\n\r\n<p>&nbsp;</p>', '[\"5\"]', '2021-01-07 07:10:31', '2021-01-07 07:10:31'),
(5, 'Sample 1', 'image-011621072510zGZSR.jpg', '[\"more-011621074856GoMX5.jpg\",\"more-01162107485646LN2.jpg\"]', 'Location 1', '2020-02-01', 'Author 1', '<p>description 1</p>', '<p>description 2</p>', '[\"3\"]', '2021-01-09 06:51:55', '2021-01-15 23:48:56'),
(6, 'Sample 2', 'image-010921145257dR2tw.jpg', '[\"more-010921145257X9kbV.jpg\",\"more-010921145257BMjsN.jpg\",\"more-0109211452579leuQ.jpg\"]', 'Location 2', '2020-03-03', 'Author 2', '<p>bend and kris</p>', '<p>bend and kris</p>', '[\"5\"]', '2021-01-09 06:52:57', '2021-01-09 06:52:57');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'photography', '2021-01-03 22:21:07', '2021-01-03 22:21:07'),
(2, 'lifestyle', '2021-01-03 22:21:35', '2021-01-03 22:21:35'),
(3, 'wedding', '2021-01-03 22:21:43', '2021-01-03 22:25:20'),
(5, 'sample', '2021-01-03 22:25:58', '2021-01-03 22:25:58');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `name`, `email`, `comment`, `created_at`, `updated_at`) VALUES
(1, 3, 'Jane Doe', 'doe@gmail.com', 'We love brush lettering but it seems so difficult but we like your article. It is very interesting and the optic is fantastic. Many greetings from Germany, Designagentur Karlsruhe!', '2021-01-09 05:28:26', '2021-01-09 05:28:26'),
(2, 3, 'John Doe', 'doe_john@gmail.com', 'I am using the Fudenosuke and the Tombow markers. You will find links to both on the first part of the article published last week.:-)', '2021-01-09 05:28:52', '2021-01-09 05:28:52');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `comment`, `created_at`, `updated_at`) VALUES
(2, 'test', 'test@gmail.com', 'comment', '2021-01-07 06:42:08', '2021-01-07 06:42:08');

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
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Logo', 'image-010921124825OfI5F.jpg', '2021-01-08 23:00:47', '2021-01-09 04:48:25');

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
(4, '2020_12_29_100503_create_contacts_table', 2),
(5, '2021_01_04_052908_create_blogs_table', 3),
(6, '2021_01_04_060558_create_blog_categories_table', 4),
(7, '2021_01_05_105639_create_portfolio_categories_table', 5),
(8, '2021_01_05_110103_create_portfolios_table', 6),
(9, '2021_01_09_062635_create_sliders_table', 7),
(10, '2021_01_09_065136_create_logos_table', 8),
(11, '2021_01_09_131501_create_comments_table', 9);

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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `category_id`, `title`, `image`, `tags`, `caption`, `location`, `created_at`, `updated_at`) VALUES
(1, 1, 'Benedict and Kristine', 'image-010721144008ydcNA.jpg', '[\"2\",\"3\"]', 'Caption Here', 'Philippines', '2021-01-07 06:38:55', '2021-01-09 19:00:38'),
(2, 1, 'JOHN & NOELLE', 'image-010721144033HfjgE.jpg', '[\"2\"]', 'Caption Here', 'Philippines', '2021-01-07 06:40:33', '2021-01-08 04:25:23'),
(3, 1, 'Nico and Trina', 'image-010721145138nUM9s.jpg', '[\"3\"]', 'Sample Caption', 'Philippines', '2021-01-07 06:41:00', '2021-01-08 04:25:11'),
(4, 1, 'PRANDEE AND JANINA', 'image-010721144121uaD3s.jpg', '[\"2\"]', 'Sample Caption', 'Philippines', '2021-01-07 06:41:21', '2021-01-09 19:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_categories`
--

CREATE TABLE `portfolio_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_categories`
--

INSERT INTO `portfolio_categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Wedding', '2021-01-07 06:18:41', '2021-01-07 06:18:41'),
(2, 'Anniversary', '2021-01-07 06:18:49', '2021-01-07 06:18:49'),
(4, 'Proposal', '2021-01-07 06:18:55', '2021-01-07 06:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `tag`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sample Picture 1', 1, 'image-010921064443zFyAQ.jpg', '2021-01-08 22:39:37', '2021-01-08 22:44:43'),
(2, 'Sample Picture', 3, 'image-010921064500p9buS.jpg', '2021-01-08 22:45:00', '2021-01-08 22:45:07'),
(3, 'Slider 3', 2, 'image-010921064524X9ZaI.jpg', '2021-01-08 22:45:24', '2021-01-08 22:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Administrator', 'admin@gmail.com', NULL, '$2y$10$40dAn4zsgGYSBgbNFqH40OaR40j/DVmc2MyOtuJK0tIGne1Cud0QO', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolios_category_id_foreign` (`category_id`);

--
-- Indexes for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_tag_foreign` (`tag`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD CONSTRAINT `portfolios_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `portfolio_categories` (`id`);

--
-- Constraints for table `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_tag_foreign` FOREIGN KEY (`tag`) REFERENCES `blog_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
