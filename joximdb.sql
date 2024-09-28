-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2024 at 08:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joxim`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `priority` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `complain_form`
--

CREATE TABLE `complain_form` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `dop` varchar(255) NOT NULL,
  `bill` text NOT NULL,
  `bill2` text NOT NULL,
  `message` varchar(255) NOT NULL,
  `warranty` varchar(255) NOT NULL,
  `serial_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain_form`
--

INSERT INTO `complain_form` (`id`, `cname`, `number`, `address`, `pincode`, `city`, `product`, `model`, `dop`, `bill`, `bill2`, `message`, `warranty`, `serial_no`) VALUES
(6, 'test', '56546', 'laxmi park', '8985', 'delhi', 'Stabilizer', 'D Lite AC 90', '2022-07-28', '15.png', 'download.png', 'lodjf', 'In Warranty', 'dfsgfdg'),
(7, 'karunesh Pandey ', '07777053100', '281', '273155', 'LUCKNOW', 'Stabilizer', 'D Lite ML 500', '2022-08-15', '', '', 'Stablizer by pass the electricity, \r\nnot working ', 'Out Warranty', '1905DM500048'),
(8, 'Sameen Fatima', '7905148019', 'Kotiya Mohalla, Near Choti Poorani Masjid, Madanpur, Deoria', '274205', 'Madanpur, Deoria, UP', 'Stabilizer', 'D Lite ML 500', '2022-05-21', '16616024919684401095394783617489.jpg', '16616025232187579749004650963728.jpg', 'Not working from.yesterday night no curent supply to AC by Stablizer', 'In Warranty', '2107DM900007'),
(9, 'DEMO', '9616696979', 'H N 2 Veshnopuram Colony Gas Godam Gali Purdilpur Indralok Cenema Ke Samne Gorakhpur  Gorakhpur', '273001', 'GORAKHPUR', 'Ceiling Fan', 'ERA Series', '2022-04-04', '', '', 'TESTING', 'In Warranty', '2204RAEP0034'),
(10, 'amit tiwari', '7618003366', 'rampur shripal .post notan hathiyagrh', '274206', 'deoria', 'Stabilizer', 'D Lite AC 90', '2022-10-05', '1664936351110-228638388.jpg', '1664936391932340362129.jpg', 'Not working ', 'In Warranty', '2101DM500070'),
(11, 'amit tiwari', '7618003366', 'rampur shripal .post notan hathiyagrh', '274206', 'deoria', 'Stabilizer', 'D Lite AC 90', '2022-10-05', '1664936351110-228638388.jpg', '1664936391932340362129.jpg', 'Not working ', 'In Warranty', '2101DM500070'),
(12, 'Prabhakar Singh', '9651612111', 'Near adarsh balika school saket nagar deoria', '274001', 'Deoria', 'Stabilizer', 'D Lite AC 120', '2022-10-16', 'Screenshot_2022-10-16-10-22-44-22_6012fa4d4ddec268fc5c7112cbb265e7.jpg', '', 'Stabilizer not working', '', '2107DM120021'),
(13, 'manish ranjan', '9085224592', 'babli chowk near amit hospital ', '274304', 'padrauna', 'Air Cooler', 'Reno', '2023-01-01', '16698115087158551546367972493519.jpg', '', 'leakage', 'In Warranty', '2204R75LNM024'),
(14, 'Sidharth kumar', '8795959530', 'Gram Post nasirganj thana khesraha tahsil Bansi jila Siddharth Nagar ', '272152', 'Beloha Bazaar', 'Stabilizer', 'D Lite ML 500', '2023-03-01', '', '', 'Properly not working cut on cut off', 'Out Warranty', '1709510062 P'),
(15, 'Sidharth Kumar ', '8795959530', 'Gram,Post ,nasirganj thana khesraha tahsil Bansi jila Siddharth Nagar ', '272152', 'Beloha Bazar ', 'Stabilizer', 'D Lite ML 500', '2023-03-06', '', '', 'Power outlet problem cut on cut off continue complained first but no one came from your side and neither did you reply anything', 'Out Warranty', '1709510062 P'),
(16, 'demo', '9793892000', 'demo', '273001', 'demo', 'Stabilizer', 'D Lite ML 500', '2023-03-07', '854f164b-4d27-49e5-badc-3644fb25250e.jpg', '6769417f-d700-4949-b707-15e97f2f5abb.jpg', 'demo', 'In Warranty', 'demo');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `available` varchar(255) NOT NULL,
  `water_value` varchar(255) NOT NULL,
  `power_value` varchar(255) NOT NULL,
  `noise_value` varchar(255) NOT NULL,
  `air_distance_value` varchar(255) NOT NULL,
  `dimension_value` varchar(255) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `title`, `des`, `link`, `img`, `alt`, `available`, `water_value`, `power_value`, `noise_value`, `air_distance_value`, `dimension_value`, `priority`) VALUES
(1, 'air-cooler', 'FERO', 'This cooler with exciting features like multiple speed settings and protection from voltage changes and dry run, also comes with energy saving options and most trusted warranty.\n', 'fero', 'fero.png', 'fero', 'Available', '85L', '180W', '70DB', '40-50 FT', '645 X 1150 X 470 MM', 0),
(2, 'air-cooler', 'COOLX', 'This air purifying cooler is not only easy to maintain with auto water filling and water drainage features but also highly efficient in performance and comes with guaranteed durability.', 'coolx', 'coolx.png', 'coolx', 'Available', '80L', '180W', '70DB', '40-50 FT', '645 X 1150 X 470 MM', 0),
(3, 'air-cooler', 'SPEEDO', 'With high speed and instant cooling technology and elegant design, Speedo Cooler is a great summer support for your home or office. ', 'speedo', 'speedo.png', 'speedo', 'Available', '100L', '180W', '70DB', '60-65 FT', '685 X 1147 X 550 MM', 0),
(4, 'air-cooler', 'RENO', 'With higher tank capacity and honeycomb cooling features, this cooler covers even the widest rooms with more air throw distance and multi dimensional cooling facility. ', 'reno', 'reno.png', 'reno', 'Available', '75L', '180W', '70DB', '40-50 FT', '640 X 1160 X 470 MM', 0),
(5, 'air-cooler', 'THUNDER', 'This super powerful air cooler beats even the highest temperature with the lowest noise and easiest portability. And they are exceptionally long lasting.\n', 'thunder', 'thunder.png', 'thunder', 'Available', '100L', '180W', '70DB', '40-50 FT', '645 X 1150 X 470 MM', 0),
(6, 'air-cooler', 'WINDX', 'Windx coolers from Joxim provides ultimate comfort with its ice chamber for insta cooling, speed regulator, swing wings and  three side honeycomb pattern cooling pads. They are ideal for homes and offices.', 'windx', 'windx.png', 'windx', 'Available', '50L', '300W', '70DB', '70-80 FT', '550 X 530 X 580 MM', 0),
(7, 'ceiling-fan', 'ERA DECO 1200 MM', 'The elegant look will be always intact as it is dust resistant. The perfect combination of style and comfort for your home.\r\n\r\n', 'era-deco-1200mm', 'fan-white.png', 'era-deco-1200mm', '1200 MM', '3 PC', '50W', '400 RPM', '3 YEARS', '', 0),
(8, 'ceiling-fan', 'ERA DECO 900 MM', 'Classy look and fine finish, go for it, if you are looking for power and speed.', 'era-deco-900mm', 'fan-black.png', 'era-deco-900mm', '900 MM', '3 PC', '50W', '500 RPM', '3 YEARS', '', 0),
(9, 'ceiling-fan', 'ERA PLAIN 1200 MM\n\n', 'Match your home’s style statement with this amazing addition of beaming brown.', 'era-plain-1200mm', 'fan-brown.png', 'era-plain-1200mm', '1200 MM', '3 PC', '50W', '400 RPM', '3 YEARS', '', 0),
(10, 'stabilizer', 'D LITE AC 90 ', 'This sophisticated digital stabilizer ensures high and low voltage cut off and assures safe performance of all your electrical equipment.', 'd-lite-ac90', 'stabilzer.png', 'd-lite-ac80', 'D LITE AC 90', '1.5 TON ', '90V', 'AIR CONDITION ', '3 YEARS', '', 0),
(11, 'stabilizer', 'D LITE AC 120   ', 'Easy to maintain and easy to operate, this stabilizer protects all your equipment from weather and voltage uncertainties. ', 'd-lite-ac120', 'stabilzer.png', 'd-lite-ac120', 'D LITE AC 120', '1.5 TON ', '120V', 'AIR CONDITION ', '3 YEARS', '', 0),
(12, 'stabilizer', 'D LITE ML 500', 'If you have pets and children at home, safety must be a primary concern for you. Bring Joxim stabilizer and say yes to uncompromised safety.', 'd-lite-ac500', 'satbilizer-mcb.png', 'd-lite-ac500', 'D LITE ML 500', '5 KVA', '80V', 'MAINLINE ', '3 YEARS', '', 0),
(13, 'ceiling-fan', 'ERA PLAIN 900 MM', 'Classy colours and robust build of ERA fans will keep you free from all maintenance worries.', 'era-plain-900mm', 'plain-white.png', 'era-plain-900mm', '900 MM', '3 PC', '50W', '500 RPM', '3 YEARS', '', 0),
(14, 'ceiling-fan', 'BELI DECO 600 MM', 'Compact, powerful and stylish BELI DECO fans offer absolute and instant cooling effects without making much noise.', 'beli-deco-600mm', 'mini-white.png', 'beli-deco-600mm', '600 MM', '4 PC', '50W', '800 RPM', '3 YEARS', '', 0),
(15, 'ceiling-fan', 'BELI PLAIN 600 MM', 'Beat the heat of this season with stylish BELI PLAIN fans with short blades and the widest reach. ', 'beli-plain-600mm', 'mini-black.png', 'beli-plain-600mm', '600 MM', '4 PC', '50W', '800 RPM', '3 YEARS', '', 0),
(16, 'geyser', 'INSTANT GAS WATER HEATER', 'Geysers from Joxim are durable, efficient and offers hot water without much delay.', 'geyser-details', 'geyser.png', 'geyser-details', 'LPG', '1 Pc', '5.1 Kg', '6.1 Kg', '3 YEARS', '', 0),
(17, 'mixer', 'PRIDE2X', 'Geysers from Joxim are durable, efficient and offers hot water without much delay.', 'geyser-details', 'geyser.png', 'geyser-details', 'LPG', '1 Pc', '5.1 Kg', '6.1 Kg', '3 YEARS', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `available` varchar(255) NOT NULL,
  `water_value` varchar(255) NOT NULL,
  `power_value` varchar(255) NOT NULL,
  `noise_value` varchar(255) NOT NULL,
  `air_distance_value` varchar(255) NOT NULL,
  `dimension_value` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `priority` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `category`, `available`, `water_value`, `power_value`, `noise_value`, `air_distance_value`, `dimension_value`, `img`, `priority`) VALUES
(1, 'fero', 'Available', '85L', '180W', '70DB', '40-50 FT', '645 X 1150 X 470 MM', 'fero.png', ''),
(2, 'coolx', 'Available', '80L', '180W', '70DB', '40-50 FT', '645 X 1150 X 470 MM', 'coolx.png', ''),
(3, 'speedo', 'Available', '100L', '180W', '70DB', '60-65 FT', '685 X 1147 X 550 MM', 'speedo.png', ''),
(4, 'reno', 'Available', '75L', '180W', '70DB', '40-50 FT', '640 X 1160 X 470 MM', 'reno.png', ''),
(5, 'thunder', 'Available', '85L', '180W', '70DB', '40-50 FT', '645 X 1150 X 470 MM', 'thunder.png', ''),
(6, 'windx', 'Available', '50L', '300W', '70DB', '70-80 FT', '550 X 530 X 580 MM', 'windx.png', ''),
(7, 'fan1', 'Available', '50L', '300W', '70DB', '70-80 FT', '550 X 530 X 580 MM', 'stabilzer.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `serial_no` varchar(255) NOT NULL,
  `dop` varchar(255) NOT NULL,
  `alternate_mobile` varchar(255) NOT NULL,
  `warranty` varchar(255) NOT NULL,
  `bill1` text NOT NULL,
  `bill2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `cname`, `number`, `address`, `pincode`, `serial_no`, `dop`, `alternate_mobile`, `warranty`, `bill1`, `bill2`) VALUES
(6, 'TEST', '97938920000', 'TEST', '273001', '21025100010', '2022-02-01', '123456789', 'In Warranty', 'black.jpg', ''),
(7, 'Krishna Kumar Singh', '9336548649', 'Rampur tola Dharmpur Post mansoorganj khurd block Paniyara Maharajganj Uttar Pradesh ', '273165', '2211RDRH0225', '2023-01-13', '', 'In Warranty', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `hash`, `active`) VALUES
(1, 'shahid', 'ahmed', 'shahidahmad110041@gmail.com', '$2y$10$dkTnP6zTH3MouVOZYsdTs.Mcf6mEC6duC3h/pJvCdGuLMWcvcRj/S', '2afe4567e1bf64d32a5527244d104cea', 1),
(2, 'Nikhil', 'Agrawal', 'joximho@gmail.com', '$2y$10$7hLhzCfAcXqxvZKpwk/QEOdX9G1IJBvPOSPntLCMjxGSpJPdb6qiq', 'dd458505749b2941217ddd59394240e8', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain_form`
--
ALTER TABLE `complain_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complain_form`
--
ALTER TABLE `complain_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
