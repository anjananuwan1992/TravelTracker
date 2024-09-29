-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 29, 2024 at 06:55 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `status`, `first_name`, `name`, `ID_no`, `email`, `address`, `contact`, `password`, `created_at`, `updated_at`) VALUES
(1, 'active', 'Nuwan', 'Anjana', '921380836v', 'anjananuwan19921221@gmail.com', '196/2, Egodawatta, Mahagama. Sri Lanka.', '0772860193', '$2y$10$0eTKzax81bRbm8nBA9Mt7OzaVl/zbbcfyWDUfQ/l9bzLDZEC0wsBm', '2023-10-28 11:38:44', '2023-10-28 11:38:44'),
(5, 'active', 'Achala', 'Madubhashani', '921380836v', 'achala@gmail.com', '196/2, Egodawatta, Mahagama.', '0777492476', '$2y$10$BpMtjmgeS.7zEU40tjZCa.u5Ur/ypsxge3StBLIZXf9r6epTe..IG', '2024-03-01 04:35:37', '2024-03-28 13:15:27');

-- --------------------------------------------------------

--
-- Table structure for table `attractions`
--

DROP TABLE IF EXISTS `attractions`;
CREATE TABLE IF NOT EXISTS `attractions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `business_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attractions`
--

INSERT INTO `attractions` (`id`, `business_id`, `information`, `title`, `introduction`, `latitude`, `longitude`, `email`, `img_one`, `img_two`, `img_three`, `img_four`, `created_at`, `updated_at`) VALUES
(6, '3', 'Access to the mountain is possible by 6 trails: Ratnapura–Palabaddala, Hatton–Nallathanni, Kuruwita–Erathna, Murraywatte, Mookuwatte and Malimboda. The Nallathanni and Palabaddala routes are most favoured by those undertaking the climb, while the Kuruwita–Erathna trail is used less often. These trails are linked to major cities or towns by bus, accounting for their popular use. The Murraywatte, Mookuwatte and Malimboda routes are seldom used but do intersect with the Palabaddala road midway through the ascent. The usual route taken by most pilgrims is ascent via Hatton and descent via Ratnapura. Although the Hatton trail is the steepest, it is also shorter than any of the other trails by approximately five kilometres.\r\n\r\nOnce one of the starting \'nodes\' of Palabadalla, Nallathanni or Erathna is reached, the rest of the ascent is done on foot through the forested mountainside on the steps built into it. The greater part of the track leading from the base to the summit consists of thousands of steps built in cement or rough stones. The trails are illuminated with electric light, making night-time ascent possible and safe to do even when accompanied by children. Rest stops and wayside shops along the trails serve refreshments and supplies.\r\n\r\nWhilst there are many ancient monuments on the mountain, there is an important Peace Pagoda located halfway up, built by Nipponzan Myohoji in 1978.', 'Adams Peak', 'It is well known for the Sri Pada (Sinhala for “Sacred Footprint”), a hollow that is 67 inches (170 cm) long and 18 inches (46 cm) wide and resembles the print of a human foot. The Sri Pada is venerated by Buddhists, Hindus, Christians, and Muslims. Many pilgrims of all faiths visit the peak every year.', '6.809642477712894', '80.4993925409935', 'keerthi@gmail.com', 'storage/attraction_images/img_one65db798b7f5d4.jpg', 'storage/attraction_images/img_two65db798bbfb57.jpg', 'storage/attraction_images/img_three65db798bc2bcf.jpg', 'storage/attraction_images/img_four65db798bcf18a.jpg', '2024-02-25 12:01:56', '2024-02-25 12:01:56'),
(7, '4', 'The story of the Galle Dutch Fort; a UNESCO World Heritage Site reverberates through every traveller’s photos and captions. Initially built by the Portuguese in the 16th century during their conquests, the fort was later fortified and conquered by the Dutch in the 17th century, until it later fell to the might of the British. The old town of Galle was once used as a trading port for spices and other goods for over 200 years. However, today, the fort has been transformed into a place of history, romance and beauty where travellers are warmly welcomed to dive head first into the exotic stories and be a part of this heritage site.\r\n\r\nFifty Lighthouse Street is set within the fort and offers the perfect base for you to explore the charms of Galle. Preserved in its original glory, stroll along the ramparts and admire the imposing structures like the Galle Lighthouse, Galle Clocktower and the Groote Kerk. A Galle Fort Walking Tour with us, will reveal secrets that only a local from within the fort will know. Our walking tour takes you through the backroads of this iconic fort, visiting charming structures, museums, old buildings and more as you hear endless stories, legends and some secrets of the Galle Dutch Fort.', 'Galle Dutch Fort', 'A multi-ethnic population inhabits it, and a tour through the fort is sure to impress you with its majestic age-old architecture. It has managed to survive major tests of time, including the devastating Tsunami of 2004. It has now been declared a World Heritage Site by UNESCO.', '6.025791079429956', '80.21741559375938', 'keerthi@gmail.com', 'storage/attraction_images/img_one65db7c6d25812.jpeg', 'storage/attraction_images/img_two65db7c6d2bfb7.jpg', 'storage/attraction_images/img_three65db7c6d2e0f1.jpg', 'storage/attraction_images/img_four65db7c6d33ec9.jpg', '2024-02-25 12:14:13', '2024-02-25 12:14:13'),
(8, '9', 'Sigiriya, site in central Sri Lanka consisting of the ruins of an ancient stronghold that was built in the late 5th century CE on a remarkable monolithic rock pillar. The rock, which is so steep that its top overhangs the sides, rises to an elevation of 1,144 feet (349 metres) above sea level and is some 600 feet (180 metres) above the surrounding plain.\r\n\r\nSigiriya, Sri Lanka\r\nSigiriya, Sri Lanka\r\nSigiriya, Sri Lanka, designated a World Heritage site in 1982.\r\nThe Sinhalese king Kashyapa I (reigned 477–495) built a palace in the shape of a monumental lion on the several acres of ground at the summit, intending it to be a safeguard against his enemies. However, the king was defeated in 495, and the palace fell into ruin. The site soon became a pilgrimage destination, however, and it is now a popular tourist spot. Visitors begin the final ascent to the top through the open paws of the lion, one of the few remaining portions of the palace that are still intact. Also notable are 21 rock paintings of apsaras (celestial singers and dancers). Sigiriya was designated a UNESCO World Heritage site in 1982.', 'Sigiriya', 'Sigiriya Lion Rock is an ancient rock fortress known for its massive column of rock that reaches nearly 200 meters high. The site dates back to the reign of King Kasyapa (477-495 AD), who chose this site as his new capital. He decorated the walls with frescoes, and built an impressive palace right on top of the rock column, accessible only through the mouth of an enormous carved lion.', '7.957165853964619', '80.75969086745921', 'meril@gmail.com', 'storage/attraction_images/img_one65e097f407555.jpg', 'storage/attraction_images/img_two65e097f4399eb.jpg', 'storage/attraction_images/img_three65e097f43b361.jpg', 'storage/attraction_images/img_four65e097f43cb95.jpg', '2024-02-29 09:13:01', '2024-02-29 09:13:01'),
(9, '11', 'After the Maha parinirvana of Gautama Buddha, according to the legend, the tooth relic was preserved in Kalinga and smuggled to the island by Princess Hemamali and her husband, Prince Dantha on the instructions of her father King Guhasiva.[1] Hemmamali hid the relic in her hair on the way to the island. They landed on the island in Lankapattana during the reign of Sirimeghavanna of Anuradhapura (301-328) and handed over the tooth relic. The king enshrined it in Meghagiri Vihara (present day Isurumuniya) in Anuradhapura. Safeguarding the relic was the responsibility of the monarch from then, therefore over the years, the custodianship of relic came to symbolize the right to rule the island. Therefore, reigning monarchs built the tooth relic temples quite close to their royal residences, as was the case during the times of the Anuradhapura Kingdom, Kingdom of Polonnaruwa, and Kingdom of Dambadeniya. During the era of the Kingdom of Gampola, the relic was housed in Niyamgampaya Vihara. It is reported in the messenger poems such as Hamsa, Gira, and Selalihini that the temple of tooth relic was situated within the city of Sri Jayawardenepura Kotte when the Kingdom of Kotte was established there.[1][2]', 'Temple of the tooth', 'The Temple of the Sacred Tooth Relic, or Sri Dalada Maligawa,[a] (Sinhala: ශ්‍රී දළදා මාළිගාව) is a Buddhist temple in Kandy, Sri Lanka. It is located in the royal palace complex of the former Kingdom of Kandy, which houses the relic of the tooth of the Buddha. Since ancient times, the relic has played an important role in local politics because it is believed that whoever holds the relic holds the governance of the country. The relic was historically held by Sinhalese kings. The temple of the tooth is a World Heritage Site mainly due to the temple and the relic.', '7.293622648212769', '80.6411730595024', 'thusitha@gmail.com', 'storage/attraction_images/img_one65e1b6d26e90e.jpg', 'storage/attraction_images/img_two65e1b6d28739d.jpeg', 'storage/attraction_images/img_three65e1b6d2892f2.jpg', 'storage/attraction_images/img_four65e1b6d28b060.jpg', '2024-03-01 05:36:58', '2024-03-01 05:36:58'),
(10, '12', 'Jaffna Fort (Tamil: யாழ்ப்பாணக் கோட்டை, romanized: Yāḻppāṇak Kōṭṭai; Sinhala: යාපනය බලකොටුව Yapanaya Balakotuwa) is a fort built by the Portuguese at Jaffna, Sri Lanka, in 1618 under Phillippe de Oliveira following the Portuguese invasion of Jaffna. The fort is located near the coastal village of Gurunagar. Owing to numerous miracles attributed to the statue of the Virgin Mary in the church nearby, the fort was named as Fortress of Our Lady of Miracles of Jafanapatão (Fortaleza de Nossa Senhora dos Milagres de Jafanapatão). It was captured by the Dutch under Rijcklof van Goens in 1658, who expanded the structure. In 1795, it was taken over by the British, and remained under the control of a British garrison until 1948. As the only large military fort in the country, because of the presence of only government and military buildings within its ramparts, it was garrisoned by a detachment of the Ceylon Army.[1]', 'Jaffna Fort', 'Jaffna Fort (Tamil: யாழ்ப்பாணக் கோட்டை, romanized: Yāḻppāṇak Kōṭṭai; Sinhala: යාපනය බලකොටුව Yapanaya Balakotuwa) is a fort built by the Portuguese at Jaffna, Sri Lanka, in 1618 under Phillippe de Oliveira following the Portuguese invasion of Jaffna. The fort is located near the coastal village of Gurunagar. Owing to numerous miracles attributed to the statue of the Virgin Mary in the church nearby, the fort was named as Fortress of Our Lady of Miracles of Jafanapatão (Fortaleza de Nossa Senhora dos Milagres de Jafanapatão). It was captured by the Dutch under Rijcklof van Goens in 1658, who expanded the structure. In 1795, it was taken over by the British, and remained under the control of a British garrison until 1948. As the only large military fort in the country, because of the presence of only government and military buildings within its ramparts, it was garrisoned by a detachment of the Ceylon Army.[1]', '9.661846021641226', '80.00836764387863', 'shavindu@gmail.com', 'storage/attraction_images/img_one65fc61b6e1dab.jpg', 'storage/attraction_images/img_two65fc61b70349b.jpeg', 'storage/attraction_images/img_three65fc61b7049cf.jpg', 'storage/attraction_images/img_four65fc61b705e51.jpg', '2024-03-21 11:05:03', '2024-03-21 11:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

DROP TABLE IF EXISTS `businesses`;
CREATE TABLE IF NOT EXISTS `businesses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`id`, `type`, `title`, `introduction`, `address`, `contact`, `email`, `status`, `registration_no`, `latitude`, `longitude`, `cover_img`, `created_at`, `updated_at`) VALUES
(3, 'Attractions', 'Adams Peak', 'It is well known for the Sri Pada (Sinhala for “Sacred Footprint”), a hollow that is 67 inches (170 cm) long and 18 inches (46 cm) wide and resembles the print of a human foot. The Sri Pada is venerated by Buddhists, Hindus, Christians, and Muslims. Many pilgrims of all faiths visit the peak every year.', 'Rathnapura', 'Not Available', 'keerthi@gmail.com', 'active', 'Not Available', '6.809642477712894', '80.4993925409935', 'storage/cover_images/cover_img65db77ee2f645.jpg', '2024-02-25 11:55:03', '2024-03-28 12:53:46'),
(4, 'Attractions', 'Galle Dutch Fort', 'A multi-ethnic population inhabits it, and a tour through the fort is sure to impress you with its majestic age-old architecture. It has managed to survive major tests of time, including the devastating Tsunami of 2004. It has now been declared a World Heritage Site by UNESCO.', 'Galle', 'Not Available', 'keerthi@gmail.com', 'active', 'Not Available', '6.025791079429956', '80.21741559375938', 'storage/cover_images/cover_img65db7c17b19c7.jpg', '2024-02-25 12:12:48', '2024-02-25 12:16:52'),
(5, 'shops', 'Kasun Dress Mart', 'Welcome to Kasun Dress Mart, where style meets affordability! Discover a world of fashion-forward clothing and accessories tailored to suit your unique taste. From trendy outfits to timeless classics, we\'ve got you covered. Step into Kasun Dress Mart and elevate your wardrobe to new heights of elegance and charm.', 'Kandy Road, Kadawatha.', '0772860193', 'kasun@gmail.com', 'active', '2020mit006', '7.007675002409234', '79.96092201992806', 'storage/cover_images/cover_img65db88af07525.png', '2024-02-25 13:06:32', '2024-02-25 13:07:37'),
(6, 'hotels', 'Nalinda Hotel', 'Nalinda Hotel, an exquisite retreat nestled in the heart of lush landscapes, offers a harmonious blend of luxury and tranquility. With unparalleled hospitality, sumptuous cuisine, and elegant accommodations, it promises an unforgettable escape. Discover serenity and indulgence at Nalinda, where every moment is crafted to enchant and rejuvenate the soul.', 'Awissawella road, Hatton.', '0772860193', 'nalinda@gmail.com', 'active', '2020mit000', '6.900170457605894', '80.5903617392184', 'storage/cover_images/cover_img65e01a474bcfe.jpg', '2024-02-29 00:16:47', '2024-02-29 00:18:02'),
(7, 'foods-and-cafe', 'Sandun Food Corner', 'Embark on a culinary adventure at Sandun Food Corner, where authenticity meets innovation. Discover a treasure trove of Sri Lankan flavors expertly crafted with a modern twist. From aromatic curries to tantalizing street food delights, each dish embodies the rich heritage and vibrant spirit of Sri Lankan cuisine.', 'No.47, Talawa road, Anuradhapura.', '0771234564', 'sandun@gmail.com', 'active', '789654f', '8.309411629223959', '80.37419285783898', 'storage/cover_images/cover_img65e0793e76fd3.jpg', '2024-02-29 07:01:59', '2024-02-29 07:03:43'),
(8, 'rental-items', 'Janith Rental Shop', 'Discover convenience and quality at Janith Rental Item Shop, your one-stop destination for all your rental needs. From essential equipment to luxury items, find a wide selection meticulously curated to meet your requirements. Experience seamless transactions, reliable service, and a hassle-free rental experience that ensures your satisfaction every time.', 'No. 28, Maskeliya road, NuwaraEliya.', '0772860193', 'janith@gmail.com', 'active', '00254SA', '6.9555232529818225', '80.77004399309288', 'storage/cover_images/cover_img65e08819331e2.jpg', '2024-02-29 08:05:21', '2024-02-29 08:08:10'),
(9, 'Attractions', 'Sigiriya', 'Sigiriya Lion Rock is an ancient rock fortress known for its massive column of rock that reaches nearly 200 meters high. The site dates back to the reign of King Kasyapa (477-495 AD), who chose this site as his new capital. He decorated the walls with frescoes, and built an impressive palace right on top of the rock column, accessible only through the mouth of an enormous carved lion.', 'Dambulla', 'Not Available', 'meril@gmail.com', 'active', 'Not Available', '7.957165853964619', '80.75969086745921', 'storage/cover_images/cover_img65e097138f174.jpg', '2024-02-29 09:09:16', '2024-02-29 09:21:50'),
(10, 'hotels', 'Chamara Hotel', 'Nestled amidst picturesque landscapes, Chamara Hotel invites you to experience unparalleled hospitality and tranquility. With luxurious accommodations, exquisite dining options, and world-class amenities, every moment promises relaxation and rejuvenation. Discover serenity and elegance in a haven where impeccable service and breathtaking surroundings create unforgettable memories for every guest.', 'No.25, Athulatha road, Monaragala', '0772860193', 'chamara@gmail.com', 'active', '789654Fh', '6.896289162658985', '81.3696228431806', 'storage/cover_images/cover_img65e09d02b2ad2.jpeg', '2024-02-29 09:34:35', '2024-02-29 09:35:55'),
(11, 'Attractions', 'Temple of the tooth', 'The Temple of the Sacred Tooth Relic, or Sri Dalada Maligawa,[a] (Sinhala: ශ්‍රී දළදා මාළිගාව) is a Buddhist temple in Kandy, Sri Lanka. It is located in the royal palace complex of the former Kingdom of Kandy, which houses the relic of the tooth of the Buddha. Since ancient times, the relic has played an important role in local politics because it is believed that whoever holds the relic holds the governance of the country. The relic was historically held by Sinhalese kings. The temple of the tooth is a World Heritage Site mainly due to the temple and the relic.', 'Kandy', 'Not Available', 'thusitha@gmail.com', 'active', 'Not Available', '7.293622648212769', '80.6411730595024', 'storage/cover_images/cover_img65e1b68552175.jpg', '2024-03-01 05:35:42', '2024-03-01 05:39:49'),
(12, 'Attractions', 'Jaffna Fort', 'Jaffna Fort (Tamil: யாழ்ப்பாணக் கோட்டை, romanized: Yāḻppāṇak Kōṭṭai; Sinhala: යාපනය බලකොටුව Yapanaya Balakotuwa) is a fort built by the Portuguese at Jaffna, Sri Lanka, in 1618 under Phillippe de Oliveira following the Portuguese invasion of Jaffna. The fort is located near the coastal village of Gurunagar. Owing to numerous miracles attributed to the statue of the Virgin Mary in the church nearby, the fort was named as Fortress of Our Lady of Miracles of Jafanapatão (Fortaleza de Nossa Senhora dos Milagres de Jafanapatão). It was captured by the Dutch under Rijcklof van Goens in 1658, who expanded the structure. In 1795, it was taken over by the British, and remained under the control of a British garrison until 1948. As the only large military fort in the country, because of the presence of only government and military buildings within its ramparts, it was garrisoned by a detachment of the Ceylon Army.[1]', 'Jaffna', 'Not Available', 'shavindu@gmail.com', 'active', 'Not Available', '9.661846021641226', '80.00836764387863', 'storage/cover_images/cover_img65fc613f75e1f.jpg', '2024-03-21 11:03:05', '2024-03-21 11:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2023_09_12_072700_create_users_table', 6),
(25, '2023_09_18_180929_create_businesses_table', 10),
(21, '2023_10_05_112139_create_packages_table', 8),
(11, '2023_10_28_111524_create_admins_table', 5),
(19, '2024_01_29_094628_create_attractions_table', 7),
(24, '2024_02_09_080536_create_tours_table', 9),
(27, '2024_03_25_164059_create_plans_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
CREATE TABLE IF NOT EXISTS `packages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_five` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `introduction`, `price`, `currency`, `email`, `img_one`, `img_two`, `img_three`, `img_four`, `img_five`, `created_at`, `updated_at`) VALUES
(8, 'Luxury Rooms', 'Indulge in opulence at Nalinda Hotel\'s luxury rooms, where lavish comfort meets timeless elegance. Immerse yourself in plush furnishings, modern amenities, and breathtaking views. From spacious suites to intimate hideaways, each room is meticulously designed to exceed expectations, ensuring a truly unforgettable stay in the lap of luxury.', '45000', 'Rs.', 'nalinda@gmail.com', 'storage/package_images/img_one65e07548bd5b2.jpg', 'storage/package_images/img_two65e07548ea9aa.jpg', 'storage/package_images/img_three65e07548ebdc1.jpg', 'storage/package_images/img_four65e07548ed872.jpg', NULL, '2024-02-29 06:45:05', '2024-02-29 06:45:05'),
(7, 'Trousers for Men', 'Step into style with our impeccably tailored men\'s trousers. From classic cuts to modern silhouettes, our collection offers versatility and sophistication. Crafted from high-quality materials, each pair ensures both comfort and durability. Whether for the office or a special event, these trousers exude confidence and refinement, elevating your look effortlessly.', '3000', 'Rs.', 'kasun@gmail.com', 'storage/package_images/img_one65db9260a2904.jpeg', 'storage/package_images/img_two65db9260a584d.jpg', 'storage/package_images/img_three65db9260a9553.jpeg', 'storage/package_images/img_four65db9260a9b99.jpg', NULL, '2024-02-25 13:47:52', '2024-02-25 13:47:52'),
(6, 'Shirt for Mens', 'Discover timeless elegance with our men\'s dress shirts. Crafted from premium fabrics, these shirts blend sophistication with comfort. With tailored fits and refined details, they are perfect for any formal occasion or professional setting. Elevate your wardrobe with our collection of classic and contemporary designs, available in various colors and sizes.', '3000', 'Rs.', 'kasun@gmail.com', 'storage/package_images/img_one65db91d4306fd.jpg', 'storage/package_images/img_two65db91d49869b.jpeg', 'storage/package_images/img_three65db91d4994b6.jpg', 'storage/package_images/img_four65db91d49a903.jpg', NULL, '2024-02-25 13:45:32', '2024-02-25 13:48:28'),
(9, 'Special Buffet', 'Savor a culinary journey like no other at Nalinda Hotel\'s special buffet. Delight your palate with an array of gourmet delights, from international favorites to locally-inspired delicacies. Experience the artistry of flavors, meticulously curated to tantalize your taste buds and create unforgettable dining memories in an ambiance of elegance and warmth.', '5000', 'Rs.', 'nalinda@gmail.com', 'storage/package_images/img_one65e075ccbdd23.jpg', 'storage/package_images/img_two65e075ccc2f1a.jpg', 'storage/package_images/img_three65e075ccc3992.jpg', 'storage/package_images/img_four65e075ccc4464.jpg', NULL, '2024-02-29 06:47:16', '2024-02-29 06:47:16'),
(10, 'Delicious Breakfast', 'Start your day with a delightful culinary experience at Sandun Food Corner Breakfast. Dive into a feast of flavors featuring traditional Sri Lankan breakfast specialties alongside continental classics. From aromatic hoppers to fluffy pancakes, indulge in a morning spread that promises to awaken your senses and fuel your day ahead with joyous flavors.', '2500', 'Rs.', 'sandun@gmail.com', 'storage/package_images/img_one65e07b73b2377.jpeg', 'storage/package_images/img_two65e07b73d8d21.jpeg', 'storage/package_images/img_three65e07b73d9a34.jpeg', 'storage/package_images/img_four65e07b73da9ea.jpg', NULL, '2024-02-29 07:11:23', '2024-02-29 07:11:23'),
(11, 'Delicious Dessert', 'Experience blissful indulgence at Sandun Food Corner Dessert. Dive into a world of sweet delights where every bite is a celebration of flavor and artistry. From decadent cakes to delicate pastries, savor an exquisite array of desserts meticulously crafted to satisfy your cravings and elevate your dining experience to new heights of delight.', '800', 'Rs.', 'sandun@gmail.com', 'storage/package_images/img_one65e07c24d7d17.jpeg', 'storage/package_images/img_two65e07c24dc233.jpg', 'storage/package_images/img_three65e07c24dcd82.png', 'storage/package_images/img_four65e07c24e409f.jpg', NULL, '2024-02-29 07:14:20', '2024-02-29 07:14:20'),
(12, 'Tuk Tuk Rental', 'Embark on your journey with ease and efficiency with Three Wheel Rental. Offering convenient transportation solutions tailored to your needs, our fleet of well-maintained three-wheelers ensures smooth rides and reliable service. Experience the freedom to explore your destination with comfort and confidence, making every moment of your adventure unforgettable.', '5000', 'Rs.', 'janith@gmail.com', 'storage/package_images/img_one65e08aa997cfe.jpg', 'storage/package_images/img_two65e08aa9bee29.jpg', 'storage/package_images/img_three65e08aa9c07a3.jpg', 'storage/package_images/img_four65e08aa9c21b0.jpg', NULL, '2024-02-29 08:16:17', '2024-02-29 08:16:17'),
(13, 'Tent Rentals', 'Elevate your outdoor experience with Tent Rental services. Whether for a cozy camping trip or a grand outdoor event, our diverse range of tents offers comfort and shelter in any environment. With quality equipment and flexible rental options, we ensure your outdoor escapade or gathering is a memorable success, rain or shine.', '10000', 'Rs.', 'janith@gmail.com', 'storage/package_images/img_one65e08bcd364ca.jpg', 'storage/package_images/img_two65e08bcd3ac8b.jpg', 'storage/package_images/img_three65e08bcd3b62c.jpg', 'storage/package_images/img_four65e08bcd3c0fc.jpg', NULL, '2024-02-29 08:21:09', '2024-02-29 08:21:09'),
(14, 'Luxury Rooms', 'Indulge in opulent serenity at Chamara Hotel\'s luxury rooms, where refined elegance meets contemporary comfort. Immerse yourself in lavish furnishings, breathtaking views, and personalized service. From spacious suites to intimate retreats, each room exudes sophistication and charm, promising an unforgettable stay in the lap of luxury.', '25000', 'Rs.', 'chamara@gmail.com', 'storage/package_images/img_one65e09e7db9a98.jpg', 'storage/package_images/img_two65e09e7e22933.jpg', 'storage/package_images/img_three65e09e7e24be8.jpg', 'storage/package_images/img_four65e09e7e25625.jpg', NULL, '2024-02-29 09:40:54', '2024-02-29 09:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

DROP TABLE IF EXISTS `plans`;
CREATE TABLE IF NOT EXISTS `plans` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `A2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `D2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `E2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `F2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `G2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `H2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `I2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `J2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `K2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `L2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `M2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `N2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `O2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `P2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Q2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `R2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `S2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `T2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `U2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `V2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `W2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `X2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Y2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Z2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `z21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `g21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `j21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `k21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `o21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `w21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `x21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `y21` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `email`, `t_name`, `A2`, `B2`, `C2`, `D2`, `E2`, `F2`, `G2`, `H2`, `I2`, `J2`, `K2`, `L2`, `M2`, `N2`, `O2`, `P2`, `Q2`, `R2`, `S2`, `T2`, `U2`, `V2`, `W2`, `X2`, `Y2`, `Z2`, `a21`, `b21`, `c21`, `d21`, `z21`, `f21`, `g21`, `h21`, `j21`, `k21`, `l21`, `m21`, `n21`, `o21`, `p21`, `q21`, `r21`, `s21`, `t21`, `u21`, `v21`, `w21`, `x21`, `y21`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 'amal@gmail.com', 'Amal tour', '3', '6', '8', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', NULL, NULL, '2024-03-25 12:43:35', '2024-03-25 12:43:35'),
(2, 'travel@gmail.com', 'tour01', '3', '6', '8', '11', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', NULL, NULL, '2024-03-26 07:57:52', '2024-03-26 07:57:52'),
(3, 'travel@gmail.com', 'tour02', '5', '11', '8', '6', '3', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', NULL, NULL, '2024-03-26 08:16:38', '2024-03-26 08:16:38'),
(4, 'travel@gmail.com', 'tour03', '3', '6', '8', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', NULL, NULL, '2024-03-26 11:24:16', '2024-03-26 11:24:16'),
(5, 'travel@gmail.com', 'tour04', '9', '7', '12', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', NULL, NULL, '2024-03-26 23:35:32', '2024-03-26 23:35:32'),
(6, 'travel@gmail.com', 'tour05', '4', '3', '6', '8', '10', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', '11', '5', '9', '7', '12', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', NULL, NULL, '2024-03-27 01:04:39', '2024-03-27 01:04:39'),
(7, 'travel@gmail.com', 'tour06', '4', '3', '6', '8', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', '4', '3', '6', '8', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', '4', '3', '6', '8', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', '4', '3', '6', '8', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', '4', '3', '6', '8', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', NULL, NULL, '2024-03-27 02:03:56', '2024-03-27 02:03:56'),
(8, 'travel@gmail.com', 'tour07', '3', '6', '8', '11', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', '11', '9', '7', '12', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', NULL, NULL, '2024-03-27 12:59:27', '2024-03-27 12:59:27'),
(9, 'travel@gmail.com', 'tour08', '3', '6', '8', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', '4', '5', '11', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', NULL, NULL, '2024-03-28 10:32:27', '2024-03-28 10:32:27');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

DROP TABLE IF EXISTS `tours`;
CREATE TABLE IF NOT EXISTS `tours` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `title`, `details`, `latitude`, `longitude`, `email`, `price`, `contact`, `currency`, `fname`, `lname`, `img_one`, `img_two`, `img_three`, `img_four`, `created_at`, `updated_at`) VALUES
(7, 'Nuwara Eliya Tour', '🌿 Explore the Enchanting Nuwara Eliya with Us! 🌿\r\n\r\nEmbark on a breathtaking journey through the misty landscapes and lush greenery of Nuwara Eliya, Sri Lanka\'s picturesque gem! Join us for an unforgettable tour spanning 10 captivating destinations, all from the comfort of our spacious Toyota KDH, perfect for accommodating up to 11 eager adventurers!\r\n\r\n\r\n🚐 Tour Itinerary:\r\n\r\n1️⃣ Hakgala Botanical Garden: Discover a paradise of exotic flora, stroll through vibrant flower beds, and marvel at the majestic Hakgala Rock.\r\n\r\n2️⃣ Gregory Lake: Relax by the tranquil waters, enjoy a leisurely boat ride, or simply soak in the panoramic views of mist-covered mountains.\r\n\r\n3️⃣ Seetha Amman Temple: Delve into the rich mythology and spirituality of this ancient Hindu temple, surrounded by serene natural beauty.\r\n\r\n4️⃣ Nuwara Eliya Golf Club: Experience the charm of colonial-era architecture and lush green fairways at one of Asia\'s finest golfing destinations.\r\n\r\n5️⃣ Pedro Tea Estate: Immerse yourself in the art of tea-making with a guided tour of this historic plantation, complete with picturesque vistas of rolling hills.\r\n\r\n6️⃣ Lovers Leap Waterfall: Witness the sheer beauty of cascading waters amidst verdant foliage, a perfect spot for nature lovers and photographers alike.\r\n\r\n7️⃣ Adma Agro Farm: Indulge in farm-fresh delights, from strawberries to homemade jams, and enjoy a hands-on experience of rural life in Sri Lanka.\r\n\r\n8️⃣ Victoria Park: Take a leisurely stroll through manicured lawns, vibrant flower beds, and towering trees, a haven for birdwatchers and picnickers.\r\n\r\n9️⃣ Single Tree Hill: Ascend to panoramic heights for breathtaking views of Nuwara Eliya town, surrounded by misty peaks and emerald valleys.\r\n\r\n🔟 Galway\'s Land National Park: Encounter native wildlife, from elusive bird species to playful monkeys, in this pristine sanctuary of biodiversity.\r\n\r\nDon\'t miss out on this unforgettable journey through Nuwara Eliya\'s most captivating attractions! Book your seats now and let the adventure begin! 🌄🌺🌿 #ExploreNuwaraEliya #TravelSriLanka #AdventureAwaits 🇱🇰🚐', '6.966718266762788', '80.76685967468137', 'dilshan@gmail.com', '45000', '0777492476', 'Rs.', 'Dilshan', 'Rajitha', 'storage/tour_images/img_one65e0a29371bea.jpg', 'storage/tour_images/img_two65e0a293a98d6.jpg', 'storage/tour_images/img_three65e0a293ab480.jpg', 'storage/tour_images/img_four65e0a293acb7c.jpg', '2024-02-29 09:58:19', '2024-03-01 06:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `status`, `usertype`, `first_name`, `name`, `ID_no`, `email`, `address`, `contact`, `password`, `created_at`, `updated_at`) VALUES
(39, 'active', 'traveler', 'Travel', 'tracker', '987456321v', 'travel@gmail.com', 'Rathnapura', '0777492476', '$2y$10$61GZ/r6jVCqXGzWB1fVZe.xinNVbr09QEvfQr.AqBj/vxU.loRhcK', '2024-03-26 03:14:12', '2024-03-26 03:14:12'),
(38, 'active', 'explorer', 'Shavindu', 'Srinath', '987456321v', 'shavindu@gmail.com', '14/3, Thimbirigasyaya, Colombo', '0777492476', '$2y$10$HGzWJVK9iBd4Ewljz27DWugj7oCRBBBqyiU2xGgt2qDNAZJwHm1PW', '2024-03-21 10:59:13', '2024-03-28 12:43:04'),
(37, 'active', 'explorer', 'Thusitha', 'Wijewardhane', '921380836v', 'thusitha@gmail.com', 'No 66, Bulathkohupitiya, Kagalle.', '0777777777', '$2y$10$y7HBEoUxlC6uB0Rm7RiwJOHAQ5XGaiQ5zI7p0rGIRYIL68ruKKiZi', '2024-03-01 04:32:10', '2024-03-01 04:34:28'),
(36, 'active', 'guider', 'Dilshan', 'Rajitha', '987456321v', 'dilshan@gmail.com', '12/2, Gongala road, Badulla.', '0777492476', '$2y$10$MM5HsZVz.X5AjZXqMY6DS.TrDMNMfXA.B8W44MAk0n6Bga8DSEMyu', '2024-02-29 09:44:10', '2024-03-03 11:14:31'),
(35, 'active', 'business', 'Chamara', 'Ranawaka', '961234567v', 'chamara@gmail.com', 'No, 24, St.Meris road, Mathugama.', '0777492476', '$2y$10$nh27c6B.B6crxzho2KeZ9eJw44X4lhoNQEXEKJVwMOqXukTDRoSm.', '2024-02-29 09:27:09', '2024-02-29 09:35:39'),
(34, 'active', 'explorer', 'Meril', 'Fernando', '712565235v', 'meril@gmail.com', '197/8, Dabulla road, Kakirawa.', '0702565897', '$2y$10$ne2CWwlilHJr.a7HiWse.OvrukJyQvJiOKUG8EKsDORhMfRB4o/Ce', '2024-02-29 08:59:51', '2024-02-29 09:00:46'),
(33, 'active', 'business', 'Janith', 'Iddamalgoda', '987456321v', 'janith@gmail.com', 'No. 28, Maskeliya road, NuwaraEliya.', '0772860193', '$2y$10$j64hzTVAfYAwA3mbaCw.B.z/tbUf1DDF1K1nzq3cxRSgAiGbxKrea', '2024-02-29 07:59:06', '2024-02-29 08:06:51'),
(32, 'active', 'business', 'Sandun', 'Vithana', '987456321v', 'sandun@gmail.com', '196/2, Egodawatta, Mahagama.', '0777492476', '$2y$10$jwJmIJw8nv65DMfIY47KfOMEyZ8pF/hXtwpHby534BRsRZa66FfU6', '2024-02-29 06:56:30', '2024-02-29 07:03:26'),
(30, 'active', 'business', 'Kasun', 'Mamalgaha', '961234567v', 'kasun@gmail.com', '196/2, Aluth road, Kelaniya', '0777492476', '$2y$10$HVGLB4GT2KqSlv6.6UBui.E2w3QhTQh42.h3N7LZFSxMY7DiFuTVG', '2024-02-25 12:52:18', '2024-02-25 13:07:28'),
(31, 'active', 'business', 'Nalinda', 'Sanjaya', '921380836v', 'nalinda@gmail.com', '43/2, Kadawaka, Dodangoda.', '0772860193', '$2y$10$NJVueupWCJXx7fkU2WhDTuG7JRVgN6IfbM/JAXJRj5bBauxgYw.1C', '2024-02-29 00:11:53', '2024-02-29 00:17:46'),
(29, 'active', 'explorer', 'Keerthi', 'Sanjaya', '987456321v', 'keerthi@gmail.com', '13/2, Kelaniya road, Biyagama.', '0772860193', '$2y$10$/GVWfyMPSpAnzlPOm7JpauSoQzFAERb2WMim6Y1Agph3wOZn3H5j.', '2024-02-25 11:16:01', '2024-02-25 11:18:48');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
