-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2024 at 08:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birth` date NOT NULL,
  `web_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `gender`, `birth`, `web_id`) VALUES
(1, 'John Doe', 'Male', '2005-04-01', 1),
(2, 'Sarah Johnson', 'female', '1995-04-10', 2),
(3, 'Michael Smith', 'Male', '1985-10-20', 3),
(4, 'Emily Brown', 'Female', '1988-03-25', 4),
(5, 'David Wilson', 'Male', '1982-07-12', 5),
(6, 'Jessica Martinez', 'Female', '1992-11-08', 6),
(7, 'Christopher Lee', 'Male', '1989-09-03', 7),
(8, 'Olivia Taylor', 'Female', '1995-04-30', 8);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(100) DEFAULT NULL,
  `alamat_member` text DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `telp_member` varchar(15) DEFAULT NULL,
  `no_ktp` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `alamat_member`, `jenis_kelamin`, `telp_member`, `no_ktp`) VALUES
(5, 'Abang Fikri', 'Ciamis', 'L', '0821340411', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `full_name`, `email`, `city`, `phone_number`, `order_date`) VALUES
(5, 1, 3, 'abc', 'abc@gmail.com', 'acbdadg', '08123456789', '2024-03-27 01:07:58'),
(6, 1, 3, 'abc', 'abc@gmail.com', 'acbdadg', '08123456789', '2024-03-27 01:07:58'),
(7, 1, 3, 'abc', 'abc@gmail.com', 'acbdadg', '08123456789', '2024-03-27 01:07:58'),
(8, 1, 3, 'abc', 'abc@gmail.com', 'acbdadg', '08123456789', '2024-03-27 01:07:59'),
(15, 1, 3, 'abc', 'abc@gmail.com', 'acbdadg', '08123456789', '2024-03-27 02:01:56'),
(16, 1, 8, 'abc', 'abc@gmail.com', 'acbdadg', '08123456789', '2024-03-27 02:03:55'),
(17, 1, 6, 'abc', 'abc@gmail.com', 'acbdadg', '08123456789', '2024-03-27 02:05:05'),
(18, 1, 2, 'abc', 'abc@gmail.com', 'acbdadg', '08123456789', '2024-03-27 02:07:50'),
(19, 1, 2, 'abc', 'abc@gmail.com', 'acbdadg', '08123456789', '2024-03-27 02:10:15'),
(20, 1, 4, 'abc', 'abc@gmail.com', 'acbdadg', '08123456789', '2024-03-27 02:10:32'),
(21, 1, 1, 'abc', 'abc@gmail.com', 'acbdadg', '08123456789', '2024-03-27 03:47:44'),
(22, 2, 7, 'abc', 'abc@gmail.com', 'acbdadg', '08123456789', '2024-03-27 08:05:55'),
(23, 3, 1, 'abc', 'abc@gmail.com', 'acbdadg', '08123456789', '2024-03-27 08:31:20'),
(24, 3, 1, 'abc', '', 'cikarang', '+62822654987', '2024-03-27 08:32:26'),
(25, 1, 1, 'sini', 'abc@gmail.com', 'cikarang', '+62822654987', '2024-04-13 07:22:43');

-- --------------------------------------------------------

--
-- Table structure for table `outlet`
--

CREATE TABLE `outlet` (
  `id_outlet` int(11) NOT NULL,
  `nama_outlet` varchar(100) DEFAULT NULL,
  `alamat_outlet` text DEFAULT NULL,
  `telp_outlet` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outlet`
--

INSERT INTO `outlet` (`id_outlet`, `nama_outlet`, `alamat_outlet`, `telp_outlet`) VALUES
(26, 'Outlet Mawar', 'Jalan Mawar', '081243555656');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `jenis_paket` enum('kiloan','selimut','bedcover','kaos','lain') DEFAULT NULL,
  `nama_paket` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `outlet_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `jenis_paket`, `nama_paket`, `harga`, `outlet_id`) VALUES
(4, 'kiloan', 'Paket Kering Wangi', 15000, 26);

-- --------------------------------------------------------

--
-- Table structure for table `revenue_records`
--

CREATE TABLE `revenue_records` (
  `id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `revenue_records`
--

INSERT INTO `revenue_records` (`id`, `amount`, `description`, `date`) VALUES
(16, '300000.00', 'E-Commerce Store | Healthy & Beauty', '2024-04-13 07:22:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'abc', 'test1@gmail.com', 'abc'),
(2, 'aaa', 'afas@gmail.com', 'aaa'),
(3, 'qwerty', 'qwerty@gmail.com', 'asd'),
(4, 'admin', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `name`, `description`, `price`) VALUES
(1, 'E-Commerce Store | Healthy & Beauty', 'This website is a fully functional e-commerce platform specializing in products related to health and beauty. It offers a wide range of products including skincare, haircare, supplements, and wellness items. The website features user-friendly navigation, secure checkout, and a variety of payment options.', '300000.00'),
(2, 'Gym Promotional Website', 'This website is designed specifically for gyms and fitness centers to promote their services and attract new members. It includes features such as information about the gym\'s facilities, class schedules, trainer profiles, membership options, and testimonials from satisfied customers. The website is visually appealing, mobile-friendly, and optimized for search engines to ensure maximum visibility online.', '300000.00'),
(3, 'Dogfood Ready-made Website', 'This website is designed for businesses in the pet industry, specifically those focusing on dog food products. It comes pre-built with features tailored to showcase various dog food brands, product details, pricing, and customer testimonials. The website also includes sections for blog posts on dog nutrition, health tips, and customer reviews. It is visually appealing, mobile-responsive, and customizable to suit the branding of different businesses.', '300000.00'),
(4, 'Wedding Website', 'This website is designed for couples planning their wedding. It includes features such as customizable templates for wedding invitations, RSVP management, event details (such as venue location and schedule), photo galleries, and guestbook. The website offers an elegant and romantic design to match the theme of the wedding. It is user-friendly and allows couples to easily share important information with their guests.', '300000.00'),
(5, 'Travel Website', 'This website is designed for travelers looking to explore new destinations and plan their trips. It offers a wide range of features including destination guides, travel itineraries, hotel bookings, flight reservations, and activity recommendations. The website provides users with comprehensive information to help them make informed decisions about their travel plans. It is user-friendly, visually appealing, and optimized for both desktop and mobile devices.', '300000.00'),
(6, 'Restaurant Website', 'This website is designed for restaurants and eateries to showcase their menus, locations, opening hours, and special offers. It includes features such as online reservations, ordering for pickup or delivery, photo galleries of the restaurant and its dishes, customer reviews, and contact information. The website is visually appealing, user-friendly, and optimized for both desktop and mobile devices to attract customers and drive online engagement.', '300000.00'),
(7, 'Charity Website', 'This website is designed for charitable organizations and non-profits to raise awareness and funds for their causes. It includes features such as donation forms, event listings, volunteer opportunities, success stories, and information about the organization\'s mission and impact. The website aims to engage visitors emotionally, educate them about the organization\'s work, and encourage them to support the cause through donations or volunteering. It is user-friendly, accessible, and optimized for storytelling to inspire action and community involvement.', '300000.00'),
(8, 'One Page Website', 'This website is designed to present information concisely and attractively on a single page. It includes sections such as an introduction, services or features offered, portfolio or showcase, testimonials, contact information, and a call-to-action. The website is optimized for simplicity and ease of navigation, providing visitors with a seamless browsing experience without the need to navigate between multiple pages. It is suitable for individuals, small businesses, or projects that require a minimalist and modern online presence.', '300000.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `web_id` (`web_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `outlet`
--
ALTER TABLE `outlet`
  ADD PRIMARY KEY (`id_outlet`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `outlet_id` (`outlet_id`);

--
-- Indexes for table `revenue_records`
--
ALTER TABLE `revenue_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `outlet`
--
ALTER TABLE `outlet`
  MODIFY `id_outlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `revenue_records`
--
ALTER TABLE `revenue_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`web_id`) REFERENCES `websites` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `websites` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `paket_ibfk_1` FOREIGN KEY (`outlet_id`) REFERENCES `outlet` (`id_outlet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
