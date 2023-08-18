-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 18, 2023 lúc 12:05 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `faketube`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `channels`
--

CREATE TABLE `channels` (
  `ChannelID` bigint(20) UNSIGNED NOT NULL,
  `ChannelName` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `SubscribersCount` int(11) DEFAULT NULL,
  `URL` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `channels`
--

INSERT INTO `channels` (`ChannelID`, `ChannelName`, `Description`, `SubscribersCount`, `URL`, `created_at`, `updated_at`) VALUES
(2, 'Darius Bode', 'Occaecati quod sed saepe asperiores.', 7881, 'http://www.jacobson.org/ut-minima-magnam-est-doloribus-eos-ut', '2023-08-18 02:40:16', '2023-08-18 02:40:16'),
(3, 'Hans Rutherford DDS', 'Repudiandae consequatur harum fugit id accusamus maiores quidem est.', 6828, 'http://www.kirlin.com/recusandae-qui-hic-magnam-repellendus-occaecati', '2023-08-18 02:40:16', '2023-08-18 02:40:16'),
(4, 'Turner Goldner', 'Vitae est nostrum inventore.', 9395, 'http://barrows.com/unde-repellat-libero-vel-mollitia-sunt-dignissimos-quaerat.html', '2023-08-18 02:40:16', '2023-08-18 02:40:16'),
(5, 'Yvonne Quigley', 'Eveniet et non tempora minima.', 5209, 'http://kling.com/', '2023-08-18 02:40:16', '2023-08-18 02:40:16'),
(6, 'Conor Jast', 'Similique ut error molestias quas aut occaecati.', 4946, 'http://stamm.biz/est-atque-porro-rerum-qui', '2023-08-18 02:40:16', '2023-08-18 02:40:16'),
(7, 'Ray Swift', 'Eveniet quidem eos incidunt.', 1069, 'http://www.wolf.com/dolor-voluptas-saepe-ad-est-eos.html', '2023-08-18 02:40:16', '2023-08-18 02:40:16'),
(8, 'Magali Bashirian', 'Perspiciatis consectetur vitae atque ipsa excepturi.', 5084, 'http://oconnell.com/quia-quaerat-cumque-nemo-unde-nihil-iusto-aut', '2023-08-18 02:40:16', '2023-08-18 02:40:16'),
(9, 'Herman Smith', 'Voluptas aliquam molestiae quos et.', 7401, 'http://quitzon.com/dolorem-deleniti-nulla-porro-rem-debitis-facere-non.html', '2023-08-18 02:40:16', '2023-08-18 02:40:16'),
(10, 'Eriberto Heaney', 'Quam pariatur ea saepe minus quasi.', 5189, 'http://fisher.com/', '2023-08-18 02:40:16', '2023-08-18 02:40:16'),
(11, 'Brenda Donnelly', 'Dolores occaecati facere omnis error.', 4160, 'https://www.rutherford.com/odio-sint-quae-non-qui-exercitationem', '2023-08-18 02:40:16', '2023-08-18 02:40:16'),
(12, 'Brown O\'Reilly', 'Voluptas possimus dolor dolores modi deserunt quaerat voluptates.', 4785, 'http://hettinger.net/deserunt-amet-earum-commodi-sint-quo-et', '2023-08-18 02:40:16', '2023-08-18 02:40:16'),
(13, 'Lucious Franecki', 'Consequuntur sed nulla et.', 8484, 'http://hickle.com/cumque-officiis-fugiat-earum-eos-ea-non-dicta', '2023-08-18 02:40:16', '2023-08-18 02:40:16'),
(14, 'Nicola Koepp', 'Est similique debitis veritatis ducimus ullam beatae harum.', 4769, 'http://hintz.com/aut-et-pariatur-et-laboriosam-et-blanditiis.html', '2023-08-18 02:40:16', '2023-08-18 02:40:16'),
(15, 'Dr. Lenny Hermann', 'Eos accusamus necessitatibus consequatur incidunt.', 6500, 'http://www.rippin.org/', '2023-08-18 02:40:16', '2023-08-18 02:40:16'),
(16, 'Shayna Stokes', 'Expedita repudiandae ex rerum alias praesentium.', 9315, 'http://franecki.net/', '2023-08-18 02:40:16', '2023-08-18 02:40:16'),
(17, 'Lucius Hoeger', 'Et aut sapiente ab.', 2273, 'http://torp.info/unde-et-dolores-aut-autem-iusto', '2023-08-18 02:40:16', '2023-08-18 02:40:16'),
(18, 'Carmella Monahan PhD', 'Ea est vero nobis voluptates rem amet.', 9932, 'http://collins.com/maiores-placeat-facere-odio-et-qui-hic', '2023-08-18 02:40:16', '2023-08-18 02:40:16'),
(19, 'Prof. Dayne Heller DDS', 'Dicta repellendus est nemo ea dolorem.', 3402, 'http://casper.org/et-excepturi-quibusdam-magni-reiciendis-harum-tenetur-molestiae.html', '2023-08-18 02:40:16', '2023-08-18 02:40:16'),
(20, 'Guadalupe Haley', 'Deserunt sit autem molestias cupiditate.', 5299, 'http://gerhold.com/', '2023-08-18 02:40:16', '2023-08-18 02:40:16'),
(21, 'nguyen', 'la nguoi', NULL, 'https://getbootstrap.com/', '2023-08-18 02:40:26', '2023-08-18 02:40:26');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`ChannelID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `channels`
--
ALTER TABLE `channels`
  MODIFY `ChannelID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
