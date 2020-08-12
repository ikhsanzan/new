-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 12, 2020 at 03:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(250) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL,
  `id_user` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_price`, `product_image`, `qty`, `total_price`, `product_code`, `id_user`) VALUES
(96, 'Parfum Pria', '90000', 'PAR.jpeg', 1, '90000', '910', 10),
(97, 'Parfum 1', '50000', 'parffum.jpg', 1, '50000', '1212', 0),
(98, 'Parfum Wanita', '60000', 'ppp.jpeg', 1, '60000', '112141', 0),
(99, 'IM Parfum Pria', '40000', 'parfum.jpeg', 1, '40000', '1721921', 0),
(100, 'Parfum Wanita', '50000', 'ppp.jpeg', 1, '50000', '212', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `pmode` varchar(250) NOT NULL,
  `products` varchar(250) NOT NULL,
  `amount_paid` varchar(250) NOT NULL,
  `id_user` int(250) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`, `id_user`, `time`) VALUES
(1, 'Ikhs an', 'mzanzan21@gmail.com', 's', 'Jalan Sei', 'cod', 'batu(10), bunga(5)', '535000', 0, '2020-07-17 14:19:48.000000'),
(2, 'Ikhs an', 'kazan@gmail.com', '2121', 'Jalan Sei', 'netbanking', 'batu(10), bunga(5)', '535000', 0, '2020-07-17 14:19:48.000000'),
(3, 'sada@', 's@gm', 's', 'Jalan Sei', 'netbanking', 'batum(2), Kan(2), Kansas(3), s(4)', '14853', 0, '2020-07-17 14:19:48.000000'),
(4, 'Ikhs an', 'kazan@gmail.com', '2121', 'Jalan Sei', 'cod', 'batum(2), Kan(2), Kansas(3)', '13033', 0, '2020-07-17 14:19:48.000000'),
(5, 'Ikhs an', 'kazan@gmail.com', '6282169953034', 'Jalan Sei', 'cod', 'batum(4), Kan(3), Kansas(4)', '25544', 0, '2020-07-17 14:19:48.000000'),
(6, 'medan', 'kazan@gmail.com', 'user', 's', 'cod', 'batum(1), Kan(1), Kansas(1), s(1)', '6966', 0, '2020-07-17 14:19:48.000000'),
(7, 'Ikhs an', 'kazan@gmail.com', 'user', 'Jalan Sei Musi', 'cod', 'Parfum Wanita(1), Parfum 1(1), IM Parfum Pria(1)', '150000', 0, '2020-07-17 14:19:48.000000'),
(8, 'medan', 's@gm', 'user', 's', 'cod', 'Parfum Wanita(1), Parfum 1(1), IM Parfum Pria(1)', '150000', 0, '2020-07-17 14:19:48.000000'),
(9, 'ikhsa', 'kazan@gmail.com', 'user', 'Jalan Medan', 'netbanking', 'Parfum Wanita(2), IM Parfum Pria(3), Parfum 1(4)', '440000', 0, '2020-07-17 14:19:48.000000'),
(34, 'sam', 'sam', 'sam', 'sam', 'COD', 'Parfum Pria(1), Parfum 1(1), Parfum Wanita(1), IM Parfum Pria(1), Parfum Wanita(1)', '290000', 0, '2020-08-12 11:07:55.956415');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(250) NOT NULL,
  `product_code` text NOT NULL,
  `product_weight` varchar(250) NOT NULL,
  `product_quantity` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_image`, `product_code`, `product_weight`, `product_quantity`) VALUES
(2, 'Parfum Wanita', '60000', 'ppp.jpeg', '112141', '80 ML', 6),
(3, 'Parfum 1', '50000', 'parffum.jpg', '1212', '60 ML', 5),
(4, 'IM Parfum Pria', '40000', 'parfum.jpeg', '1721921', '60 ML', 3),
(5, 'Parfum Wanita', '45500', 'parfum.jpg', 's', '30 ML', 4),
(6, 'Parfum Pria', '90000', 'PAR.jpeg', '910', '90 ML', 2),
(7, 'Parfum Wanita', '50000', 'ppp.jpeg', '212', '30 ML', 3),
(8, 'barusan', '23213', 'ppp.jpeg', '12126655454', '80 ML', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `no_hp` varchar(250) NOT NULL,
  `level` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `alamat`, `no_hp`, `level`) VALUES
(10, 'hellosan', '1', '$2y$10$fSgylUvaPCVpRMFIi4l/0.KNDoQW5AI7wFgCF3LM3MKisMcCMcj9i', 'medan', '010', 'user'),
(17, 'admin', 'admin', '$2y$10$ia.MUxn.cmfH7lb5kpxKTOXY/dzie8W7f6rcc3KvcuROTaDLJtLoG', 'admin', 'admin', 'admin'),
(19, 'aji', 'aji', '$2y$10$P777I5hwffRzyCjeu/vL9uziEGtRQDeJjtTtCamBZYXMev0I6VSZe', 'aji', 'aji', 'user'),
(38, 'user', 'user@user', '$2y$10$KMlXlHo3cts8cn/4XRZZEuZv7tkccP1a8HuVBy6tws4DP8J6K4oqq', 'Medan', '09211', 'user'),
(39, 'v', 'v', '$2y$10$CyUwIIluLC9/sI4MiiHvGevgr8KWs99YA.vfFygEUpUgWsCq5rJiy', 'v', '2', 'user'),
(40, 'z', 'Z', '$2y$10$Uyf9TcyrSRx675S.MPWhH.XmjYUwsiaqwcnWk2vR1HCUBDo04rCKa', 'Z', 'Z', 'user'),
(41, 'y', 'y', '$2y$10$RLwVjhtNaL3WVaAgGcGioOFjAk1hjXQPoKLjMN.udaI0yC9b85mHu', 'y', '21', 'user'),
(42, 'popo', 'popo', '$2y$10$C7NQE9N9Ga0m0mhkJn1NFOo9td.Vt8AZ1sd.lZ99tU1IHT4Ll7lba', 'opop', '002', '<br />\r\n<b>Notice</b>:  Undefined index: admin in <b>/Applications/XAMPP/xamppfiles/htdocs/ecomerce/admin/edit-data-admin.php</b> on line <b>107</b><br />\r\n'),
(43, 'io', 'iok', '$2y$10$CE6/jlW7BmAi/wZs05UWmOw2kRwohqjQ0fWsW3acPzUWdEOvFhQKa', 'iol', '221', '<br />\r\n<b>Notice</b>:  Undefined index: admin in <b>/Applications/XAMPP/xamppfiles/htdocs/ecomerce/admin/edit-data-admin.php</b> on line <b>107</b><br />\r\n'),
(45, 's', 'S', '$2y$10$jkdtd0qt.w8L.VTCDQzHnOKCMJ1SLAO84ImdNfX7svhjqrsGZsj06', 'S', '2', 'admin'),
(46, 'd', 'ddkg', '$2y$10$5lvl42H6XmrasdPTUanNzOuTtdzF4.EF5Ipl3uREPj/NY4FCuXhZK', 'd', '2', '<br />\r\n<b>Notice</b>:  Undefined index: admin in <b>/Applications/XAMPP/xamppfiles/htdocs/ecomerce/admin/edit-profil-admin.php</b> on line <b>135</b><br />\r\n'),
(47, 'c', 'c', '$2y$10$ZL56ofDQ44CNjkEX.nTs/O/WrzJaI3dHzoKXUq7Kp8RDgT4Ywt3r2', 'c', '3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
