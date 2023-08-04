-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 04, 2023 lúc 12:46 PM
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
-- Cơ sở dữ liệu: `xproject`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`id`, `name`, `gender`, `phone_number`, `address`, `date_of_birth`, `salary`) VALUES
(1, 'Florence Regional Airport', 'Female', '202-856-8628', '368 Mcbride Hill', '0000-00-00', 2027.00),
(2, 'Pukarua Airport', 'Female', '739-123-3287', '4699 Debra Hill', '0000-00-00', 3443.00),
(3, 'San Vito De Java Airport', 'Male', '865-698-5200', '5153 Prentice Parkway', '0000-00-00', 2952.00),
(4, 'Capital International Airport', 'Male', '990-982-9323', '005 Transport Junction', '0000-00-00', 3558.00),
(5, 'In Guezzam Airport', 'Male', '257-141-6868', '75 Upham Place', '0000-00-00', 3312.00),
(6, 'Louisa County Airport/Freeman Field', 'Female', '193-308-2974', '84710 Lien Center', '0000-00-00', 2984.00),
(7, 'Wrangell Airport', 'Female', '175-198-9128', '980 Chive Drive', '0000-00-00', 3005.00),
(8, 'Carnot Airport', 'Female', '648-101-1197', '2 Main Center', '0000-00-00', 3087.00),
(9, 'Dhaalu Atoll Airport', 'Male', '454-606-3520', '47918 Toban Pass', '0000-00-00', 4871.00),
(10, 'Tillamook Airport', 'Male', '603-686-0874', '70672 Morning Park', '0000-00-00', 1008.00),
(11, 'Venice Marco Polo Airport', 'Male', '770-387-9548', '731 1st Hill', '0000-00-00', 4700.00),
(12, 'Wewak International Airport', 'Male', '941-567-2362', '29 Glendale Road', '0000-00-00', 3196.00),
(13, 'São Pedro da Aldeia Airport', 'Male', '617-707-2599', '28073 Westridge Pass', '0000-00-00', 1993.00),
(14, 'Cataratas International Airport', 'Male', '375-266-7101', '17 Ronald Regan Drive', '0000-00-00', 1196.00),
(15, 'Scott AFB/Midamerica Airport', 'Male', '697-877-6759', '7 6th Road', '0000-00-00', 1611.00),
(16, 'Jomo Kenyatta International Airport', 'Male', '980-408-1474', '51 Mockingbird Place', '0000-00-00', 4118.00),
(17, 'Humberside Airport', 'Agender', '551-404-4565', '1 Hermina Way', '0000-00-00', 4034.00),
(18, 'Gladstone Airport', 'Male', '638-866-4633', '5244 Warner Parkway', '0000-00-00', 1629.00),
(19, 'Semporna Airport', 'Polygender', '889-405-4461', '50 Paget Place', '0000-00-00', 3256.00),
(20, 'Taranto-Grottaglie \"Marcello Arlotta\" Airport', 'Female', '182-729-4522', '4 Delladonna Road', '0000-00-00', 2048.00),
(21, 'Kharkiv International Airport', 'Female', '822-393-7321', '36 Manley Hill', '0000-00-00', 3044.00),
(22, 'Tweed New Haven Airport', 'Male', '690-339-8987', '3 Toban Street', '0000-00-00', 4265.00),
(23, 'Rafaï Airport', 'Female', '767-355-7746', '95794 Garrison Place', '0000-00-00', 1885.00),
(24, 'Paso De Los Libres Airport', 'Female', '761-197-2742', '4591 Old Gate Way', '0000-00-00', 3209.00),
(25, 'San Carlos Airport', 'Male', '409-982-9438', '82797 Butterfield Alley', '0000-00-00', 3869.00),
(26, 'Sievierodonetsk Airport', 'Female', '272-734-9959', '949 Nancy Street', '0000-00-00', 3202.00),
(27, 'Oneida County Airport', 'Genderflui', '194-541-0339', '322 Little Fleur Junction', '0000-00-00', 3384.00),
(28, 'Gaua Island Airport', 'Male', '526-625-3481', '0 Waubesa Hill', '0000-00-00', 4046.00),
(29, 'Willmar Municipal -John L Rice Field', 'Female', '229-867-5720', '24191 Roxbury Point', '0000-00-00', 3118.00),
(30, 'Lampedusa Airport', 'Male', '773-237-9995', '3 Schlimgen Road', '0000-00-00', 2023.00),
(31, 'Kasos Airport', 'Female', '805-764-6315', '634 Schurz Street', '0000-00-00', 2221.00),
(32, 'St George Airport', 'Female', '620-852-0216', '0 Pepper Wood Court', '0000-00-00', 4956.00),
(33, 'Vejrø', 'Female', '103-631-0111', '7825 Gulseth Center', '0000-00-00', 3105.00),
(34, 'Rogers Municipal Airport-Carter Field', 'Female', '292-476-6218', '8529 Sachtjen Circle', '0000-00-00', 4852.00),
(35, 'Ilimanaq Heliport', 'Female', '515-942-3708', '191 Gulseth Plaza', '0000-00-00', 4419.00),
(36, 'Tunica Municipal Airport', 'Male', '415-154-0776', '8 Rowland Hill', '0000-00-00', 1301.00),
(37, 'Garbaharey Airport', 'Male', '684-594-3578', '95295 Killdeer Junction', '0000-00-00', 1464.00),
(38, 'Bundaberg Airport', 'Male', '880-514-4881', '5 Redwing Pass', '0000-00-00', 2571.00),
(39, 'Parsabade Moghan Airport', 'Female', '455-564-3652', '1 Clyde Gallagher Street', '0000-00-00', 4077.00),
(40, 'Nordholz Naval Airbase', 'Male', '669-544-2888', '14222 Bellgrove Avenue', '0000-00-00', 2274.00),
(41, 'Kegaska Airport', 'Polygender', '756-448-6183', '89 Magdeline Street', '0000-00-00', 4748.00),
(42, 'Gore Airport', 'Male', '461-775-3915', '6 Cordelia Place', '0000-00-00', 2601.00),
(43, 'Hotel Transamérica Airport', 'Female', '779-905-5225', '194 8th Avenue', '0000-00-00', 4378.00),
(44, 'Hoedspruit Air Force Base Airport', 'Female', '345-315-1672', '1049 Myrtle Park', '0000-00-00', 2422.00),
(45, 'Patreksfjörður Airport', 'Female', '683-197-3222', '2472 Sage Terrace', '0000-00-00', 2859.00),
(46, 'Benbecula Airport', 'Female', '963-628-7435', '766 Union Point', '0000-00-00', 1145.00),
(47, 'Polyarny Airport', 'Female', '996-927-1836', '9748 Summit Street', '0000-00-00', 4226.00),
(48, 'Mayor Buenaventura Vivas International Airport', 'Male', '268-190-6755', '8668 Katie Drive', '0000-00-00', 1100.00),
(49, 'Southdowns Airport', 'Male', '925-816-5645', '96518 Waubesa Hill', '0000-00-00', 1674.00),
(50, 'Hechi Jinchengjiang Airport', 'Female', '490-623-1629', '414 Kingsford Alley', '0000-00-00', 1220.00);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
