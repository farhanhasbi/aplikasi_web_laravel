-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2019 at 01:28 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `murni`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul`, `id_kategori`, `desc`, `author`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'tokyo drift', 2, 'I wonder if you know how they live in Tokyo (はい)\r\nIf you see me, then you mean it, then you know you have to go\r\nFast and Furious (キタ、Drift)\r\nFast and Furious (キタ、Drift)\r\nWonder if you know how they live in Tokyo (はい)\r\nIf you see me, then you mean it, then you know you have to go\r\nFast and Furious (キタ、Drift)\r\nFast and Furious (キタ、Drift, hey、らっしゃい)\r\n\r\n[Verse 1: Wise]\r\nおまちどうさま\r\n喧騒まみれこの街の演奏\r\n黙ったまま一度ついておいで\r\n世界中魅了するほどに豪華な\r\nJapan—what?—、一番 (what?)\r\nJump around、さぁうちらの出番 (what?)\r\nテリヤキ・ボーイズ in the place to be\r\n見せてやる—はい—、got a VIP (はい)\r\n\r\n[Verse 2: Verbal]\r\nMany, many diamonds danglin\'\r\nBag full of money we stranglin\'\r\nHate me, fry me, bake me, try me\r\nAll the above, \'cause you can\'t get in\r\nI don\'t want no プロブレム (ah)\r\nBecause me、プロフェッショナル (ah)\r\nMake you shake your ケツ (thank you)\r\nHaters take it パーソナル\r\n\r\n[Verse 3: Nigo]\r\nLike a 金田対鉄雄\r\nNeo Tokyo、滅亡、無くなっちまう前に\r\n熱を発散しきっちまおうぜ、let\'s go、熱望\r\nズヒル木六本ラボからエスコート (ええ、すごい)\r\n二十六号じゃない、Nigo\r\n入力、「SOL!」、私のピンポイント\r\n\r\n[Chorus]\r\nI wonder if you know how they live in Tokyo (はい)\r\nIf you see me, then you mean it, then you know you have to go\r\nFast and Furious (キタ、Drift)\r\nFast and Furious (キタ、Drift, [beep])\r\n\r\n[Verse 4: Ilmari]\r\nはい、わたし、テリヤキ・ボーイズ\r\nあっという間吹き飛ばす、ノイズ\r\n邁進してますんでゲとる\r\nファンの数も増えてます\r\nベーシックはサプライズで\r\nまじ毎日が危ないぜ\r\n忍者風、賢者風だけど、芸者\r\nBAPEの惑星からの使者\r\n\r\n[Verse 5: Wise]\r\nYou should see me in the parking lot (ah)\r\n7-ELEVEn is the spot (ah)\r\nFights with wings and shiny things\r\nAnd lions, tigers, bears, oh, my ride\r\nWe\'re Furious and Fast\r\nSupersonic like J. J. Fad, and we ride till the wheels are flat\r\nCan\'t beat that with a baseball bat (uh, [whirr])', 'Teriyaki Boyz', 'drift.jpg', '2019-04-12 03:22:29', '2019-04-12 03:53:54'),
(2, 'Terror In The WhiteChaple', 1, '\"Jack the Ripper\" (Indonesian: \"Jack the Shredder\") is the most famous nickname given to an unknown serial killer active in a poor area around the Whitechapel district, London, in 1888. This nickname comes from a letter written by someone who claims to be a murderer, who is then disseminated in the media. The letter is widely believed to be a hoax, and probably written by a journalist who sought to increase public interest in the mystery. Other nicknames used for the killer at the time were \"Whitechapel Killer\" and the \"Apron Skin\".\r\n\r\nThe killings carried out by Ripper generally involve immoral women from slum areas by cutting the throat and mutilating their stomachs. The loss of internal organs from the three Ripper victims raises the suspicion that the perpetrators have anatomical or surgical knowledge. Rumors stating that these killings were interconnected broke out in September and October 1888, and several letters sent by someone claiming to be a murderer were accepted by the media and Scotland Yard. The \"From Hell\" letter, received by George Lusk from the Whitechapel Vigilance Committee, also contained half of the human kidney that was preserved, presumably the kidney belonged to one of the victims. Because of the extremely brutal killing techniques, and because of the media\'s high interpretation of this mystery, the public increasingly believes that this murder is a single serial murder carried out by \"Jack the Ripper\"', 'ninja', 'ripper.jpg', '2019-04-12 03:31:10', '2019-04-12 03:52:32');

-- --------------------------------------------------------

--
-- Table structure for table `data_member`
--

CREATE TABLE `data_member` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_member` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_member` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(10) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Education', NULL, NULL),
(2, 'Sport', NULL, NULL),
(3, 'Animation', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `komen` text COLLATE utf8_unicode_ci NOT NULL,
  `komenid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `komen`, `komenid`, `created_at`, `updated_at`) VALUES
(1, 'sid', 'hei', 1, '2019-04-12 04:04:56', '2019-04-12 04:04:56');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(10) UNSIGNED NOT NULL,
  `jenis_member` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_15_070325_create_kategori_table', 1),
(4, '2019_02_08_074509_create_blog_table', 1),
(5, '2019_02_16_094249_create_member_table', 1),
(6, '2019_02_16_094432_create_data_member_table', 1),
(7, '2019_04_12_064148_create_komentar_table', 1),
(8, '2019_04_12_074550_create_galeri_table', 1),
(9, '2019_04_12_101006_create_tag_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sid', 'nv@gmail.com', NULL, '$2y$10$3cwhvnjuPW/Wdf6I8fN9m.Btm4ZZGzUGGiACzsuxOI4cywK.QQ8rG', NULL, '2019-04-12 03:19:51', '2019-04-12 03:19:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `data_member`
--
ALTER TABLE `data_member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_member_email_unique` (`email`),
  ADD KEY `data_member_jenis_member_foreign` (`jenis_member`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `komentar_komenid_foreign` (`komenid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
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
-- Indexes for table `tag`
--
ALTER TABLE `tag`
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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_member`
--
ALTER TABLE `data_member`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`);

--
-- Constraints for table `data_member`
--
ALTER TABLE `data_member`
  ADD CONSTRAINT `data_member_jenis_member_foreign` FOREIGN KEY (`jenis_member`) REFERENCES `member` (`id`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_komenid_foreign` FOREIGN KEY (`komenid`) REFERENCES `blog` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
