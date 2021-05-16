-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 04:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppinstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_name`, `password`, `email`, `phone`, `admin_img`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$Z8i95bVFeSU/GeqBkfGekeMnlFOh2IbbIq/gTK0Gw4TqpeNyyy1cq', 'admin@gmail.com', '123123', '1.jpg', NULL, NULL, '2021-05-13 10:38:01'),
(6, 'Khanhhhh', '$2y$10$DqKLH/wwaYjzUC7WaKz9TO8GwklRt.KBLGAtwmI9fWMRV2JyfCyj.', 'kimphung11499@gmail.com', '123456', 'about.png', 1, '2021-05-13 01:11:59', '2021-05-13 01:40:42'),
(7, 'khanh', '$2y$10$R8SyqESrRAtm6Vz3NBEJLeR08eljGo/dRutPvleWMcvviMa9yu7qu', 'Khanhnguyenkt102@gmai.com', '132154', 'b3.jpg', 1, '2021-05-13 01:36:00', '2021-05-13 01:36:00'),
(8, 'abc', '$2y$10$kClK2mwp0wiC6USxk5/xeucCe3.GKPUXMbE6dsuAGVxCXjUgzbRJ.', 'admin1@gmail.com', '1231', 'b5.jpg', 1, '2021-05-13 01:37:20', '2021-05-13 01:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_desc`, `brand_status`, `created_at`, `updated_at`) VALUES
(2, 'Pháp', 'Pháp', '1', '2021-03-21 06:41:10', '2021-05-13 07:11:47'),
(4, 'Hàn Quốc', 'Hàn Quốc', '1', '2021-03-22 09:03:25', '2021-05-04 05:53:49'),
(5, 'Nhật Bản', 'Thành phố hoa anh đào', '1', '2021-03-22 09:03:29', '2021-05-13 07:13:38'),
(6, 'Mỹ', 'Mỹ', '1', '2021-03-22 09:03:33', '2021-03-24 06:49:13'),
(8, 'Phungggg', '0', '0', '2021-05-13 07:09:31', '2021-05-13 07:09:34'),
(9, 'Phung', '0', '0', '2021-05-13 07:09:50', '2021-05-13 07:09:53');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cart_status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `session_id`, `customer_id`, `product_id`, `quantity`, `cart_status`, `created_at`, `updated_at`) VALUES
(1, ' ', 102, 9, 2, 0, '2021-05-13 04:16:57', '2021-05-13 04:22:37'),
(2, ' ', 102, 24, 3, 0, '2021-05-13 04:17:23', '2021-05-13 04:22:37'),
(3, ' ', 102, 17, 3, 0, '2021-05-13 04:47:51', '2021-05-13 06:51:55'),
(4, ' ', 102, 0, 3, 0, '2021-05-13 05:56:43', '2021-05-13 06:51:57'),
(5, ' ', 102, 18, 5, 0, '2021-05-13 05:56:59', '2021-05-13 06:51:57'),
(6, ' ', 102, 17, 4, 0, '2021-05-13 06:42:48', '2021-05-13 06:52:01'),
(7, ' ', 102, 22, 6, 0, '2021-05-13 06:43:03', '2021-05-13 06:52:01'),
(8, ' ', 102, 26, 3, 2, '2021-05-13 08:36:33', '2021-05-13 08:45:45'),
(9, 'XcWGYuSlFoQLmMAOMea7RXvfvajswzM4E1znG3lv', NULL, 19, 5, 2, '2021-05-13 17:52:37', '2021-05-13 17:57:56'),
(10, ' ', 104, 12, 5, 0, '2021-05-13 18:09:25', '2021-05-13 18:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_discount` double(8,2) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_discount`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Face', 0.00, 1, '2021-04-05 21:35:46', '2021-05-13 07:01:45'),
(4, 'Eye', 0.00, 1, '2021-04-05 22:15:35', '2021-05-04 05:53:10'),
(5, 'Mask', 10.00, 1, '2021-04-05 22:17:11', '2021-05-04 05:53:20'),
(6, 'Lip', 0.00, 1, '2021-04-05 22:18:27', '2021-05-04 05:52:42'),
(7, 'Body', 0.00, 1, '2021-05-04 04:54:51', '2021-05-04 05:52:53'),
(8, 'Phụngggg', 0.00, 0, '2021-05-13 07:02:02', '2021-05-13 09:53:57'),
(9, '123', 0.00, 0, '2021-05-13 07:22:27', '2021-05-13 07:28:10'),
(10, 'ád', 12.00, 0, '2021-05-13 10:04:04', '2021-05-13 10:05:32'),
(11, 'áda', 12.00, 0, '2021-05-13 10:05:39', '2021-05-13 10:05:50'),
(12, '34234', 22.00, 0, '2021-05-13 10:05:45', '2021-05-13 10:05:50'),
(13, 'abc', 12.00, 0, '2021-05-13 10:24:27', '2021-05-13 10:24:43'),
(14, 'eqweqw', 2.00, 0, '2021-05-13 10:24:34', '2021-05-13 10:24:39'),
(15, 'ada', 12.00, 0, '2021-05-13 10:25:40', '2021-05-13 10:25:45');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cus_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `cmt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `cus_id`, `pro_id`, `rating`, `cmt`, `status`, `created_at`, `updated_at`) VALUES
(1, 102, 9, NULL, 'Chất son mịn , màu lên chuẩn sẽ ủng hộ shop dài daiiiii.', 0, '2021-05-13 04:23:44', '2021-05-13 04:23:44'),
(2, 102, 24, NULL, 'Sản phẩm tốt, giá ok.', 0, '2021-05-13 04:24:03', '2021-05-13 04:24:03'),
(3, 102, 22, NULL, 'Sản phẩm chất lượng, đáng đồng tiền.', 0, '2021-05-13 06:52:59', '2021-05-13 06:52:59'),
(4, 102, 17, NULL, 'Sản phẩm chất lượng, sẽ mua lại', 0, '2021-05-13 06:53:24', '2021-05-13 06:53:24'),
(5, 102, 18, NULL, 'Sản phẩm ok', 0, '2021-05-13 06:53:39', '2021-05-13 06:53:39'),
(6, 102, 0, NULL, 'Chất lượng', 0, '2021-05-13 06:53:50', '2021-05-13 06:53:50'),
(7, 104, 12, NULL, 'Sản phẩm tốt', 0, '2021-05-13 18:13:24', '2021-05-13 18:13:24');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_brithday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_phone`, `customer_password`, `customer_gender`, `customer_address`, `customer_brithday`, `created_at`, `updated_at`) VALUES
(1, 'khanh', 'dum@gmail.com', '0976517102', 'fcea920f7412b5da7be0cf42b8c93759', '1', 'Binh Duong', '2021-04-01', '2021-04-02 00:52:53', '2021-05-07 05:28:35'),
(2, 'Prof. Meghan Crist', 'sienna79@example.net', NULL, 'eyJpdiI6Imp0MFlEQ3cxdjdPZDBmczFNOGh0ZHc9PSIsInZhbHVlIjoiWW9sVGkySFFTcFBnUHZ3VjNwTDJrZz09IiwibWFjIjoiYTA0NDBmZjJkMWYxMjZiYjg4MjQ4OGI4ZWQzZDM2NTM2OGNhOTZkYWI4MGM5MzBhM2UwOTBjZDhlZTliZWI5NCJ9', NULL, '50210 Justen Springs Suite 472\nNovaport, NE 81196', NULL, '2021-01-09 06:38:41', NULL),
(3, 'Wilfred McKenzie', 'temard@example.org', NULL, 'eyJpdiI6Ino0ZWx5Mi9aSEI3Z25reTBCbHNkQ2c9PSIsInZhbHVlIjoiUmExN1BVdjBueTVHNXQ3ZVZrK0pPQT09IiwibWFjIjoiMDhhYWI3MGQ1NTE4M2FiZjQxN2FiOTU2MDQ4Y2QzMTY3MjAzZDRjYmE2NmE1YjM2OTdmMWRlYTUxOTJlNGQ4MSJ9', NULL, '832 Ziemann Roads Apt. 954\nLake Friedrichhaven, KY 27813', NULL, '2021-04-05 17:58:57', NULL),
(4, 'Hadley Mills', 'bonita.harris@example.org', NULL, 'eyJpdiI6ImpHd3hBOWd6aXhDVktwaUpPV1hCQUE9PSIsInZhbHVlIjoiMjBzdkxPMU9Ca1JmaEZaeng5SENYQT09IiwibWFjIjoiODk3MDM4MGQ0ZDQ2NzI2MDU3NWNkYzkyZTExYzIxOTY2ZmU1ODJiYTdjOTMxYTAzZjI0YTZlODk0NWQwZTA3ZSJ9', NULL, '5252 Lubowitz Place Suite 013\nSouth Bobbie, UT 70583-1235', NULL, '2021-01-15 14:33:03', NULL),
(5, 'Ms. Everette Connelly', 'guy.ortiz@example.com', NULL, 'eyJpdiI6IlU2akwrdU1KUGQ2ZGZHSmV0ektvWEE9PSIsInZhbHVlIjoiRnAvNkdDRVFEcWNVMWxWaC96RlNPQT09IiwibWFjIjoiYmEwODAyNjU5MWYzYmViMGNlNmExYjI4OWQzYTg5ZjQxZmQxZjc4ZjlmN2RhMDQ5NjFiMjRlNGJhMWMzMjM1OSJ9', NULL, '284 Pasquale Springs\nNew Bartview, MD 36103-2237', NULL, '2021-02-10 06:50:34', NULL),
(6, 'Myrtis Hane', 'terry.marcellus@example.org', NULL, 'eyJpdiI6Imh0cFJFMHQ0QUtSeWkvT2c4RzYrSFE9PSIsInZhbHVlIjoicjRrcVNqUnlsa3R3bm1MSTJ3aTFqdz09IiwibWFjIjoiODEyMjBkZWFkNjVkNTVhZWFlM2NjYjBlYjY4NzY1MWVkOWVjNjg4MDU5ZDNjMjFjNjlmZmVlNjY0N2RiOTIyYyJ9', NULL, '702 Abelardo Hollow\nMoenmouth, MN 57840-8598', NULL, '2021-03-10 16:33:14', NULL),
(7, 'Aryanna Bruen', 'kacey.kreiger@example.org', NULL, 'eyJpdiI6Iks5U2Rub2hTaGZaVUJxc2F4REV0dWc9PSIsInZhbHVlIjoiRG9ObklYZzdESW0vZmFkdW9oRGk0Zz09IiwibWFjIjoiOWE0N2E5NGFlNjliN2M2OThmMTE0YTNjMjVkNmYyYjdhM2VjN2RmYThhMTA1YjllOTFhYTM5OGQ5NTY3N2I4YiJ9', NULL, '9299 Huel Fields\nEast Anyaton, IN 28549-9022', NULL, '2021-01-06 09:10:30', NULL),
(8, 'Paula Hessel', 'qwhite@example.net', NULL, 'eyJpdiI6IkJOWHlKUjRQVXNuYTFkSThyWlhEYkE9PSIsInZhbHVlIjoicFcvbHErM0JORkZmWkxxUm1MTFVwQT09IiwibWFjIjoiN2JiZGM5ZWIzODE2OWQyYzMwOTM4MzA0NzhjOGI5YzRlNzk4MjgwNTk5OTRjOGY1OTNiNTg0NzAwZjQyM2FmNyJ9', NULL, '7946 Gerard Mount\nSouth Earlenebury, MD 16315', NULL, '2021-05-03 23:41:22', NULL),
(9, 'Kattie Stark', 'orn.mazie@example.com', NULL, 'eyJpdiI6IklYK2lIMXRhVWNDQ2UvMjNnV2p3WWc9PSIsInZhbHVlIjoieGJBMHo5aVF4YnNONkJjam9xNXF6Zz09IiwibWFjIjoiMzZiNDM2YjliYWNjYjkzMzcwNGRlODM4NDAxMzRlMjVkNTNlNWYzZjc5OWQ3ODc1MzdmY2NhYTRlMDhlMTA5NCJ9', NULL, '8444 Klein Mountains\nBeerhaven, CO 58752-9752', NULL, '2021-06-05 21:44:19', NULL),
(10, 'Prof. Aiyana Gulgowski I', 'oconner.augustine@example.com', NULL, 'eyJpdiI6InFFOVRQMFVRYlNESGlvV2xrN2dMQWc9PSIsInZhbHVlIjoiMktBUk1Yb2JkQVVXeUY0T0pmNW9vQT09IiwibWFjIjoiMDk2ODkzNTc0Zjc5ZDI5NWVhNGI1ZDJhZjFiMjdiM2ZiMWFiOTgzNjY4YjUwNGIyZjg3MzAzMWE4ZGZkYzRmNyJ9', NULL, '9553 Jones Club\nStammville, OH 90038', NULL, '2021-01-01 07:26:12', NULL),
(11, 'Lavada Lynch', 'reichel.sheila@example.net', NULL, 'eyJpdiI6InpWWmxiWUwvUmJwNzFrZVFxdTlvZWc9PSIsInZhbHVlIjoiYm5UbTQ4QitOYlJGZkhFVXo0cCtTUT09IiwibWFjIjoiNzFiZDUwNWEyOGNiNjYwNjgxNmIwOGFmYTk3ZDFlNTk2Y2Y1YmZlYzgxNTQzMzNjZjBlNWRjYTc5ODQyZmM1YiJ9', NULL, '528 Shields Fork Apt. 379\nNorth Easton, OK 37662', NULL, '2021-05-11 04:36:00', NULL),
(12, 'Ms. Aleen Bogan PhD', 'baby.feeney@example.com', NULL, 'eyJpdiI6Ikd6b1EyK1BZOVVOSEFsZHE0SjZzZ1E9PSIsInZhbHVlIjoiVmlsMXRhdm55VGsvQnROL3hWb1JTQT09IiwibWFjIjoiMzgyNDJhNDhhNzM2NDkxMjU1M2UwZDA4ZDJiZjBmNDRhZjQ4YjQ3MzRkYmU5MjNjOWUxM2I1MzhkMzE1MjBmOSJ9', NULL, '617 Arnoldo River\nJeanieburgh, RI 81490', NULL, '2020-12-09 10:39:40', NULL),
(13, 'Jenifer Auer DVM', 'qfahey@example.net', NULL, 'eyJpdiI6IjJFbmV3QlJEQWhJcGJ5L1ErT1FUelE9PSIsInZhbHVlIjoiSXlSUDdzL1h1UlVnMG5NZ3NoOFlWdz09IiwibWFjIjoiNDNkMjM5NWVlYmNmM2ZlYTMyMTdmMGEwMDJmMmFkNDhiOWZlNjFiZmY5OWZjNmVjNmM5YWI1OTU2MWUwN2E1MiJ9', NULL, '60844 Jamison Forks Apt. 450\nTrishaport, SD 37434-6133', NULL, '2021-05-31 16:05:14', NULL),
(14, 'Declan Glover', 'nicholaus81@example.net', NULL, 'eyJpdiI6Ikk1Mi9QWmlRQzFKdTdTNEFubXZTbFE9PSIsInZhbHVlIjoiZ2M5UjJWYU5hUWFkc2w4SjV2SlpaQT09IiwibWFjIjoiNDY3MzRlMjFiY2RlYzdiY2MzNjJkOGM2ODg3NDFhZWFhMmIwY2JhOGRiYTU4YWZhZDQyNTk2MzQ1NjgyMjgxOSJ9', NULL, '1269 Kenya Mountain Apt. 327\nNew Laronmouth, WI 63085', NULL, '2021-01-22 10:43:33', NULL),
(15, 'Mr. Anderson Daugherty Sr.', 'carlie27@example.org', NULL, 'eyJpdiI6IlQrV1p0RmdoWnFlbnh3VUNlVXhSZGc9PSIsInZhbHVlIjoiS1lFVmtMdFhvdWhjUFdWdEh4WFRXUT09IiwibWFjIjoiNmM2ODNjNGIwNzU5NzMyMmY4MzBjMjY3MjFlMTBlYjdjNDhlYTI2MGIyMTUxYjZlYjMzMGY4OWFmMjNiMzcwZiJ9', NULL, '883 Hintz Expressway\nEast Nils, ID 97112', NULL, '2021-01-07 20:56:19', NULL),
(16, 'Jada Boyer', 'litzy91@example.net', NULL, 'eyJpdiI6IjNLUXcxYzlXOXcwL1J2TzE3QUdVRXc9PSIsInZhbHVlIjoiUEFDZHdTb1JXSTM4a1pDREh6cmJNUT09IiwibWFjIjoiYmQyNWY0ZmI1ZWM3YWFlNzAxYTZkNzE4Y2JkMjQ2YjFmZjM5NTFmYmExZGEwNzk2NzJmNTBjMWRmMzUwOTVjYyJ9', NULL, '9278 Johnson Shoal Apt. 207\nBeerport, AZ 95702', NULL, '2021-05-02 17:13:12', NULL),
(17, 'Katrine Larson II', 'roslyn68@example.net', NULL, 'eyJpdiI6IktZVWdUZlF2SUZ1eThmTG5GNitSTEE9PSIsInZhbHVlIjoiVDZrNUxFZGNLR1V4TThSVGtNZEgzZz09IiwibWFjIjoiYzllNzk3MWExMDExNzgwZDgxYzc1ZWFjYmM2MDMxZjFkZWYxYzI1NTM4NGUwOTNhODQxZmY3ZWQ5MTQ4ZWIzOCJ9', NULL, '415 Ollie Ferry Suite 237\nMaudiestad, MD 37275', NULL, '2020-11-09 15:59:11', NULL),
(18, 'Dawn Roob', 'wdeckow@example.org', NULL, 'eyJpdiI6IjBWM3BMVkMvVWJBbUkvbHlQUU9oN1E9PSIsInZhbHVlIjoiNU5SZGRUT2ZuRThCVTBUV0xCS2VWUT09IiwibWFjIjoiOWI4Zjc1ZjdhYTIyNmM5OWQyYWI3YmZkYjc4ZTI3YTZiZWE0OTcxYTBkMjEyYWY3NWE0YjdhZDNkNGYzNmVmZSJ9', NULL, '82701 Heaven Haven\nNorth Estebanview, LA 13121-6568', NULL, '2021-03-06 16:04:34', NULL),
(19, 'Mrs. Elinor Skiles', 'madison24@example.net', NULL, 'eyJpdiI6InIzTlN2eHdLYWU3R0EwNW55WkpSb1E9PSIsInZhbHVlIjoiQzVyd1ZhNElUV2JyTUFjblpacU5yZz09IiwibWFjIjoiMWNiMWI5MGRiNTVmM2Y4NTViNmYyNzZmODRiNmI1YTMzMWEwY2IyNGMyMDg2ZjgzODJhMTA2MTM4MWNjYzRjNiJ9', NULL, '695 Grady Creek Apt. 923\nSouth Marcellaton, VT 10544-4320', NULL, '2020-11-28 12:34:48', NULL),
(20, 'Jasmin Buckridge V', 'willow82@example.net', NULL, 'eyJpdiI6IjlSMmtDWG5UbE85WXAzVGJRSWFmQ0E9PSIsInZhbHVlIjoiUUxxTExGSUZnTEJPWGN6RUlHdXFqUT09IiwibWFjIjoiNTk0MTJhYWQ4ZTYxNmJiMjA1NjViZWVkMDgyMjcwZTljMWE4ZjBkNjMxODkzYjhiZmE5ZDJmMjMxZjNmZWY1MiJ9', NULL, '78866 Casandra Dam Suite 393\nPort Graciela, WA 44719-7381', NULL, '2021-01-19 22:09:24', NULL),
(21, 'Darryl Harber IV', 'tara.mohr@example.net', NULL, 'eyJpdiI6ImUxYWU2VXQ5WDRxczJoaGdLZ1EzWGc9PSIsInZhbHVlIjoiMWg5UW9FRjJrd1grR1JIR3NtbENpZz09IiwibWFjIjoiNzg3ZDkwNDc5ZjZlZWVmOWFkNTkwNGZhNTQwZTI0NmVlZDk4MjhhMGZlZTI2MjRmOTc0ZjE5ODY3ZDRkNzVkNyJ9', NULL, '5733 Ebert Road Apt. 261\nMadelynnview, KY 61305-6376', NULL, '2021-01-05 08:29:39', NULL),
(22, 'Manley Erdman', 'ppredovic@example.net', NULL, 'eyJpdiI6Ik1ST3lYaURUNmgvTU5jaG50MGYzWnc9PSIsInZhbHVlIjoiYnJsRmVaT3l2cU16cUVyNy9PTjJBUT09IiwibWFjIjoiN2MyM2FmYmJmNDg3OTdjNWFkMThkYmUxNWUzOTc2ODRkMjA1ZmIwMGIyNTdhY2I5OTg2ZDVmM2M1ZmIzN2Q0MSJ9', NULL, '1446 Dora Creek\nWest Ernestinashire, TN 53494-7983', NULL, '2021-01-07 23:04:00', NULL),
(23, 'Mohamed Rice', 'lonny.larson@example.com', NULL, 'eyJpdiI6Im45R0o5bjFIUnptSWRrb3ZseXUzK2c9PSIsInZhbHVlIjoiZWRocDl0NnBCVU9Fd0R0TmNQTENaUT09IiwibWFjIjoiZGQxZDJjZjc5NzQ2NmYzYWJjZGQwYjE3YjlmNGQxY2NhMWQ1ZjczYTkwZThiYTBkYTIxYjZmZDcxZjYxYjYxZCJ9', NULL, '4612 Tromp Crossroad\nNew Nakia, WA 23005-3761', NULL, '2021-02-14 08:43:59', NULL),
(24, 'Earnestine Leffler', 'asatterfield@example.org', NULL, 'eyJpdiI6InhkRTZPYU9Ra2hOTy83R3dLWDBZaUE9PSIsInZhbHVlIjoiMFZBVFdNMFNmdXBaYm1ZWFBGYTlnQT09IiwibWFjIjoiNjZlYjJlMmE4ZDllNGQzMGY3Y2ZhNzllMWI2OWNkYjdlNmJiZGRiYjY1ODJkZDZhNjcwYjBjNzZmMDEwZjVhYyJ9', NULL, '9582 Queenie Locks Suite 927\nWest Lydia, DE 86874-6293', NULL, '2021-05-17 22:36:47', NULL),
(25, 'Hershel Prosacco MD', 'timmothy.towne@example.net', NULL, 'eyJpdiI6Ik12bHB6VWVnMEE4QU0xY0JVYUtDcFE9PSIsInZhbHVlIjoiSEp3KzBRM1RkQTdlT0NUOTFHbkNOUT09IiwibWFjIjoiNjIwNjAwOTIxZjFjMmU2N2QxMzUyYzhlZWNlZmZmMGE3MDIyOTI4MTg4ODg5NmE4MzJjY2UxNTBhZTVmNDFiMyJ9', NULL, '286 Muller Branch Suite 072\nNew Adrien, ME 11947', NULL, '2021-02-18 23:57:24', NULL),
(26, 'Elenora Tromp', 'ryan.garfield@example.net', NULL, 'eyJpdiI6IjBUdFBhd0NWcnpSdmxua3dndkFJVkE9PSIsInZhbHVlIjoiclp5YlpiOTBVNGw4T2hkMmtCZTd1dz09IiwibWFjIjoiMTU5ZDMwN2ZjOGE4ZjQ4MDZjNzg3YTVmMDM1M2M2MTEzNjgzMDhiZjVkYjM4OTE5MjY3NTM3NDQzYjlkNWE5MCJ9', NULL, '5204 Prosacco Corners Suite 224\nLuellamouth, NV 21034-5634', NULL, '2021-01-27 18:59:55', NULL),
(27, 'Ms. Novella Eichmann', 'liliana.gleichner@example.com', NULL, 'eyJpdiI6ImkzeFI4b3ZjNTQrWFBHN2IrQzNUWlE9PSIsInZhbHVlIjoiVkp1cHYwOGhxNGZOZ1A3TjQrWkYxdz09IiwibWFjIjoiNTJmMzE0YjhiMmE5NzMwMjY3Zjk2ZTE5NWQ0MzMwZjMyZTZmN2VmOTc2YmQ4NTE5NGViNDI3NmIwMjlmZDQ1OCJ9', NULL, '91111 Schmidt Key\nCareymouth, OK 80103', NULL, '2021-01-11 21:18:07', NULL),
(28, 'Torrance Senger', 'kiera80@example.org', NULL, 'eyJpdiI6IkVGM3VROU85bS8wUmM4TmYvL2RvMGc9PSIsInZhbHVlIjoiRkl1MlUvUXErVWdoTDNoWkN0ZTl1Zz09IiwibWFjIjoiYzNiMTg0ODgyZmM5MzRhNGYzMmQyNzE2YWQwYzFkNWQzYThjZTcwZThiYWNkMDc5NzJjNDRlMDQwNjNmZDdkOCJ9', NULL, '92258 Gottlieb Walks\nNorth Kelli, OK 91551', NULL, '2020-12-29 20:50:01', NULL),
(29, 'Cornell Sporer', 'emma25@example.org', NULL, 'eyJpdiI6ImFnSkh2UFg2TVFGNUpvV2RlYW96T1E9PSIsInZhbHVlIjoiSTF0aWIxSy96SWs1NEk2TFljdzdEdz09IiwibWFjIjoiOTA1NDRiZTFmYzM3MWI1NTBlZjY5ZGRmMzlhOTNkNjM5MjUyOWU5YWFlMDc5YWQwYzlmY2ViYjY5NTVkYzM2NCJ9', NULL, '3241 Lehner Isle\nWest Ben, MO 65632', NULL, '2021-04-10 00:06:56', NULL),
(30, 'Mrs. Bert Konopelski III', 'wilfredo.watsica@example.net', NULL, 'eyJpdiI6IlJMUEVUbjIybHNieVAwZXlCcHhrelE9PSIsInZhbHVlIjoiWHNwclcwR3pZQy82aklZVkNOQi8wQT09IiwibWFjIjoiYmUxYzUzNmRmYWZiNmU4YjMzNDZlNmVkZjcwMDYwMWU0ZmFkOTc3YThjZjkzMDc3ZmIwNmFjNzZhYTcwMTg4NSJ9', NULL, '647 Kory Groves Suite 239\nMargarettview, DE 39085-6572', NULL, '2020-12-01 01:12:12', NULL),
(31, 'Keaton Torp', 'htoy@example.org', NULL, 'eyJpdiI6ImpPV1YxZ3JNSXE5Y05rTzRqcU5waVE9PSIsInZhbHVlIjoiMWpmR2VYaUROUzNwMXhlR1Y4eFR4dz09IiwibWFjIjoiYzdhZmViMDI0MGQzMWMyZDk4YjNmYTg4YTUwZDQzYmJiYTM2MjJiYzRjNGMzNmQwZDA0MDkyNjI1ZGY0MzE3NSJ9', NULL, '9668 Spencer Common Suite 850\nEast Keithland, HI 58014-0812', NULL, '2021-05-07 00:45:02', NULL),
(32, 'Shawna Mann', 'gkub@example.org', NULL, 'eyJpdiI6IjVRRkVIL2tyT09ZOVhXdTdMbnU3MFE9PSIsInZhbHVlIjoicnNrZFFpSXNWQXlkOTkzUkZJbjJmQT09IiwibWFjIjoiNTNhMTY4ZDFlZDQxNjVhMDY1NTRmMjc4YjMzOTA5MDQyYmM0ODY0MjI4NjQzMmMxZmRlZGZiMTNhYzFlZWMzZCJ9', NULL, '25793 Stokes Hill Apt. 566\nLake Jessikaton, NY 57701', NULL, '2020-12-11 11:03:38', NULL),
(33, 'Terrill Hessel Jr.', 'keichmann@example.net', NULL, 'eyJpdiI6Ik1ycHdYY3NqbVhGSlpFOGluanhXL0E9PSIsInZhbHVlIjoidDNNNlVmK0t0aXk4MGloeTZaNnQ0Zz09IiwibWFjIjoiM2ZhNjhlYTQ0NDU3NzRlZjgyNGQ1YTViMzcwYTFiOWFlYzRlZTg3OTczNDJkY2Y5MGFhZjgyY2ZhOTYyMTNhYyJ9', NULL, '65387 Hirthe Bypass\nPort Juniorland, UT 83505', NULL, '2021-01-15 10:08:37', NULL),
(34, 'Dayton Skiles', 'mariane03@example.com', NULL, 'eyJpdiI6IitNT1V3bGxacVJtdjBBMW9ISWZjYVE9PSIsInZhbHVlIjoiUTNPbUIvQkxka1drTE53ZncwMERwZz09IiwibWFjIjoiYWYwMjA3MzJhOTUzMWMxYjIwOGQ0MGExYmM5OGQzYTc5MTRkYTQ0Yjc5MTI4NDI0N2U0ZDlkMWYzOWM0YmI3MCJ9', NULL, '876 Wilfrid Alley Suite 990\nMatildeside, ID 48791-8297', NULL, '2021-06-05 09:59:21', NULL),
(35, 'Jaeden Smitham', 'lourdes.collier@example.net', NULL, 'eyJpdiI6IjFXQkxCVjNKdzlpMzRSM2JsNEpTQXc9PSIsInZhbHVlIjoiaVFqTkhPMTlNSTNMd0ZVWWRoNzhkUT09IiwibWFjIjoiYTg3ZmU2M2RlNDFhNTEzZTM4NTdjOTlkNTVkNzMzNTcyNjNmZGI3YTg3Njc4OTZhODhmYWY0OTQ3MjdlODY1ZSJ9', NULL, '110 Roberts Isle\nHoegerview, OK 97368', NULL, '2021-04-28 13:10:33', NULL),
(36, 'Laurie Mayert', 'hill.theresa@example.com', NULL, 'eyJpdiI6IjlROXJLU0Q0azdPd0FObGExRzhFUEE9PSIsInZhbHVlIjoiQUw0SC9yYk5PSE9mV1luN1RRK2Zrdz09IiwibWFjIjoiZmUxZmNjZWQyZmEyMWNlODc0Y2IzOWJmMTMxZTk5NjMyNGZhZmE1N2JmM2I5MzY0ODg4ZWIxYWY4YTljZWY4YiJ9', NULL, '3210 Grant Forks\nPort Hertha, ID 61980-8424', NULL, '2021-05-21 02:59:59', NULL),
(37, 'Prof. Emanuel Skiles', 'dayton.predovic@example.org', NULL, 'eyJpdiI6IjBsU3dKYTZRQnl3ak9wZmVHUWNSVnc9PSIsInZhbHVlIjoiNTN1WFdsdStDRG9XUUpEMkdRVmdpQT09IiwibWFjIjoiZTFkODIyNjE0NGY1Y2VmMTIxOWY5ZTE2MTU4MGY3YjVkYjQ0NWVkMjI3MTRhMTBlOTkxMzcyODk5ZTM3ZGIxNyJ9', NULL, '91101 Schneider Ridges\nSouth Jamie, DC 08607-3724', NULL, '2021-06-07 09:46:30', NULL),
(38, 'Mr. Nico Eichmann', 'bradly69@example.com', NULL, 'eyJpdiI6Inl5TnJOVmR6MHJBV29xWHpTdDJ5WlE9PSIsInZhbHVlIjoibzg0SG5qUGltNWNvNFNIRDJ6RUFyUT09IiwibWFjIjoiNmJlNWQxMWMyMzUyMTJjMjAzMjIxNzYzOTViYTUxZTkyZDg3MzkwOWU1ZmRkODRmZWVlNDNmZmFmNzE2MWMxYSJ9', NULL, '194 Smith Road\nDickinsonmouth, FL 20870', NULL, '2021-02-01 18:04:26', NULL),
(39, 'Miss Ima Emard I', 'vincenza95@example.net', NULL, 'eyJpdiI6InF2cHRrMmFxUFEzVFp3ZUI4SUwrNXc9PSIsInZhbHVlIjoiL3VHczRzQXIrYVNpOWtkK2ZtMFhwZz09IiwibWFjIjoiZmVmM2EwYTdjNzQwMTAxM2M1MDlkZTliZTRjYWFmMjk2MjEyMGRkMGNmODQ1YTJiMTIxZjliYjM0YTcyNjI4YyJ9', NULL, '623 Rod Inlet\nSouth Julien, MD 13322-9846', NULL, '2020-11-25 14:08:00', NULL),
(40, 'Deven Borer III', 'lehner.erna@example.com', NULL, 'eyJpdiI6IjNsZ1RuRWVBNFhsT0xjNFdNeDl1ZXc9PSIsInZhbHVlIjoibmtIbzJWTGp3U2ZXcVZuajBKZzVldz09IiwibWFjIjoiZjQ5NTc5NTUwZTY5NDUyNjRiYjY1MDVlNWQ4NzI2ZjZkYWY2ZDBiOWM2OWNmZTI3YmI0NDVlMzBiYmFmMjM1MSJ9', NULL, '82213 Shields Bypass\nEast Lane, KS 39538-5110', NULL, '2021-02-15 06:00:01', NULL),
(41, 'Queen Mueller', 'zachariah93@example.org', NULL, 'eyJpdiI6Ikw1ZjJQWldUMTYwcHVUbFNHbGUrT0E9PSIsInZhbHVlIjoidkM2MkQzc0dqT3FEZEdRK0RoZHFkdz09IiwibWFjIjoiYTVkZjY2OWEwMmQ3MTAxN2ViNTJiMTYwNmQzZWIzYjVhNjVkZDdjMjYzZGQ5NTRhNzkzZTA0ZWUwYmJjMDlhNCJ9', NULL, '589 Gorczany Fords\nEast Jenniferport, ME 57928', NULL, '2021-04-10 06:47:15', NULL),
(42, 'Jaiden Renner DDS', 'vweimann@example.org', NULL, 'eyJpdiI6IlFQUTZIRW1WNmtTRFNvNDdjakc5UXc9PSIsInZhbHVlIjoiNEFqNUJXczRUb3BVaWJxckNzR2xCQT09IiwibWFjIjoiYjI2OTA2M2FkMzA5YWNiZjMyMDgwZjBiNDQ1MTkyZjQ1MGRkZDEzYjZkYmU3NjJkZDZjNjk1NTYxMjI1YzIxNiJ9', NULL, '4632 Fadel Mission\nNew Shanonstad, OH 14589', NULL, '2021-05-16 16:13:16', NULL),
(43, 'Dr. Maritza Price DVM', 'walker.keeley@example.com', NULL, 'eyJpdiI6InVHZWRCVVl2bVJiSmtWdmZObGljM1E9PSIsInZhbHVlIjoiZGVQS2cxeHZiYUFFYzhtcUxEVXI0dz09IiwibWFjIjoiYmE5ODQzMTQyYWQ2NTU3NDUxOGUwZTRiNzM1MTFjN2MyZDQ3NjRlMjMzYWIxNmY3ODcxMDhlZDkyMjM1YWEzMyJ9', NULL, '310 Weber Cove Apt. 566\nSouth Andersonville, AZ 28582-4739', NULL, '2021-01-03 11:05:26', NULL),
(44, 'Keon Littel', 'lawson.wiza@example.com', NULL, 'eyJpdiI6IjBYcW1VaWgyeHRyUGtyNS91N0Fhb0E9PSIsInZhbHVlIjoiYnQrSzVpdklxVSsxTlFGNU13U25ndz09IiwibWFjIjoiOTEzNjYxNzY1OWYzYmFhYTFmM2I0MGViNzI2ZTU5OTRkZjQ5NWVmY2QxNTIwZjRlNTJjNDE5MDdmYjkzMTBjMiJ9', NULL, '85694 Triston Drive\nWest Berta, MD 04160-4027', NULL, '2021-05-25 17:30:30', NULL),
(45, 'Alejandra Kling II', 'buckridge.jordane@example.com', NULL, 'eyJpdiI6InpmL2JzaVgwYjBFaVRlQ3JQNDh1Z0E9PSIsInZhbHVlIjoiV0hyekp1QW50TUs4SmgzVm9oMWlDdz09IiwibWFjIjoiZTI3MWEzMjVjNWQxNmMxMDIxYzgzZjY3YWMzYzM0OWQxZjRiYjc2YTRjOTkxNDZmNmQ3MGI1ZWNjM2RmZTQ5MCJ9', NULL, '6377 Immanuel Mills Suite 470\nEast Selenaview, UT 40302-5740', NULL, '2021-03-28 23:04:01', NULL),
(46, 'Karolann Kertzmann V', 'jdickinson@example.com', NULL, 'eyJpdiI6IkkraTN3N2kzdU90a1NrVXBIcjZraFE9PSIsInZhbHVlIjoib1NKTXY4bU54dFkwV0d6TE9iRm5DQT09IiwibWFjIjoiMzJlNDRhZTk5MmZmNWYwYTc3MTI3MmZhYzdhZGRmYzY0ZTllYTg1ODQzZjYxZWYzZTI3ZGQ2NWQ0MGIyNWI1NSJ9', NULL, '1732 Kerluke Crescent\nSouth Johnathonmouth, WA 72094-6728', NULL, '2021-06-01 02:33:53', NULL),
(47, 'Wallace Carroll', 'schmidt.amanda@example.com', NULL, 'eyJpdiI6IkdOOWVwTnhyNHkzaGRaaTB6Uk0raXc9PSIsInZhbHVlIjoialFTejRtRG5xM2NEKzhheE9nQ0N1dz09IiwibWFjIjoiNGZmMWFhOTA1MWZiNDc5YmYxOWYzMzJhMmM1NTMxODBiNGYxMzkzY2JkMDg4MDkzMDMzNTRmZDhlNmZlMzI4NCJ9', NULL, '716 Lincoln Ports Suite 071\nEast Keeleyport, TN 69121', NULL, '2021-03-10 13:26:09', NULL),
(48, 'Mr. Felipe Steuber V', 'rickie35@example.com', NULL, 'eyJpdiI6IkY4YXQ2SlMvbTc4WklPdWFVd1l2Ymc9PSIsInZhbHVlIjoicWdhMlp2Vm9ack1rNHNCMFZoV0lQQT09IiwibWFjIjoiZDAxMDhkYjk2MjZhZjg4YWFlZTdiMzdjMGQ0NzEzMDMwMTg3ZmU4ZTgwZjA0N2QyYzIwNjNmODc2MzI2M2JmYiJ9', NULL, '583 Jamil Estates\nNew Gennaro, OK 93635', NULL, '2021-01-23 19:41:29', NULL),
(49, 'Esther Stracke', 'purdy.tatyana@example.net', NULL, 'eyJpdiI6IjliM0RIV1JVL3o2Wkt6YndFQTJEclE9PSIsInZhbHVlIjoiTUY5eGxDcDBYOThZOG01S2VGNVBOZz09IiwibWFjIjoiMjBkZTk5ODNhNDcyNjhjYjQ0OWUzY2Y3MTFiMjk5OTMzOTQ1MTQzM2Q2ZDJlMmFlZGY0N2RmYjdlNGNlNDA0YyJ9', NULL, '6697 Lynch Station\nNorth Bufordview, WI 35026', NULL, '2021-01-23 23:08:34', NULL),
(50, 'Carrie Mante', 'jane94@example.org', NULL, 'eyJpdiI6ImZNU2p2WW94S1VQNVJ6K1crWFJGalE9PSIsInZhbHVlIjoiV2RXV1FtMmE5YXZ4OVN0M2dVWE1hZz09IiwibWFjIjoiMjM5NTdkODkyYWRkOTVlYjdlYmYwNTcxNjhlZWJkYjIzNDEyYzZhODNmYzMwN2I4MmIxYTRkMWZkYmFiMDc1MSJ9', NULL, '577 Willy Canyon\nEast Jan, NY 94295', NULL, '2021-01-13 08:00:57', NULL),
(51, 'Angelina Doyle', 'tillman.earlene@example.com', NULL, 'eyJpdiI6IndZVEkwbHhlZ0N2ZGZSVE80Z0MxZ1E9PSIsInZhbHVlIjoic0hlT0cyUFNMUHV0VW5DcnZMcDB3QT09IiwibWFjIjoiODIwMzJjMDcyOTJkNzdiZDkyYjZmZTdmY2M2MzYwMDhiZTVhN2E2NTk0ZmM3MmIzZTU3NTRiMzMxN2MyYjhiNyJ9', NULL, '90358 Janis Ranch Apt. 067\nSouth Nathenview, GA 12262-2351', NULL, '2021-05-29 08:52:08', NULL),
(52, 'Florence Legros Jr.', 'jarod.reilly@example.org', NULL, 'eyJpdiI6ImNlYTJvV0JKMDdhbSt5TFRYU3pGUUE9PSIsInZhbHVlIjoiMVNPdzlIajJmeDlsdGtFNHYremo2Zz09IiwibWFjIjoiMDVmYzdhZDVmZjI2ZDE2OGY4MmQzMGE3ZWRhYzQ4OTBlZTdjY2I0ZDUzYjcwODJmZTY0ODAzMDAzODQwYmNiNCJ9', NULL, '77725 Metz Walk Apt. 141\nLake Caraport, VT 88608-8390', NULL, '2021-04-11 03:02:28', NULL),
(53, 'Waylon Bergstrom Sr.', 'jane.kilback@example.com', NULL, 'eyJpdiI6ImdmYjZZSjhKK3YwN3h1N25KbUdnVnc9PSIsInZhbHVlIjoiRlVDaVZtNzk5dEdDbU5aTVpuUjZvdz09IiwibWFjIjoiZTc5ZTA2ZmQwN2Q5NDhjZTE1MWY3MmJmNGYyMDIyMzhhNmUxOWFhYWQ1N2I4NWM2MjJlNGUyZmQ3ZDU2MWFkMyJ9', NULL, '75786 Marcella Lock\nSouth Sofiahaven, NE 82707', NULL, '2020-12-03 14:34:25', NULL),
(54, 'Dr. Sasha Schamberger V', 'katrina13@example.org', NULL, 'eyJpdiI6ImlVRERCeFYrb0VDSU56NWdUTCtncWc9PSIsInZhbHVlIjoiK3dRWk1HL0Z1VWVCbzd5MWdrYTlIQT09IiwibWFjIjoiYzI2NjZhMTc3MWJlZTZmYThhMjhjMmIyNGRlYzM4ZTFmMDhhMWE2MTczYzM3MDE0MjczYmNlYjczZWVlZjVlNCJ9', NULL, '55649 Dietrich Springs\nTheresemouth, CT 24830-7446', NULL, '2020-11-17 16:15:29', NULL),
(55, 'Darwin Medhurst', 'umurphy@example.org', NULL, 'eyJpdiI6IkVjNXZHbytGbWlDOXBRaVdiVHZ6Z1E9PSIsInZhbHVlIjoieXhuQkpNbkxMamdIYmhQc0txRnAvQT09IiwibWFjIjoiMzk1ODZlNWUxMWFhYTIyYTFiZGY2NmRiMjg3OTZjODU1OTlkZDQ0M2Q3YTU3N2M0Y2QzN2M3ZDNiNzQ0ODFiNiJ9', NULL, '7776 Cummings Spurs Apt. 147\nAltheamouth, ND 41664-6002', NULL, '2021-02-03 14:14:30', NULL),
(56, 'Yasmine Dicki III', 'walker.emma@example.com', NULL, 'eyJpdiI6ImNFUndSanFmTUI4ZkJlbXFubFhJUkE9PSIsInZhbHVlIjoibFNaUDBMcGlxdVZHMWVTYWRJSlhTZz09IiwibWFjIjoiOTI4Y2RmM2U2ZmE0NmE1ZmJkODM5Y2YxODM1NjRkMjkxNTMzYTkyNDI0NzNiY2Y5NTg2NmIwYjdmYjgwMjExOCJ9', NULL, '407 Camylle View\nWelchville, TN 88062-6025', NULL, '2021-05-04 06:42:27', NULL),
(57, 'Ms. Lola Russel Sr.', 'heathcote.willis@example.net', NULL, 'eyJpdiI6IlZycjVCU1I2VDlnQWFKeUpObnRVQ3c9PSIsInZhbHVlIjoiSUQ2ZUY1VkpnTnErNnZ3dGJ0Ukcxdz09IiwibWFjIjoiZWEwYjU5MDAxMzAwMTVkMjc5MDJlOTUxOGExYzFjMmMxNzc0YTMwOTRlZWViZTVjNjg3YzQ3ZTI4NzBhYjIxZSJ9', NULL, '195 Anibal Valleys Apt. 307\nWest Iva, MN 00435', NULL, '2020-12-14 03:35:09', NULL),
(58, 'Alaina Anderson PhD', 'ebecker@example.org', NULL, 'eyJpdiI6ImNVdWVvOFpHcTJFUWQrTnFRbU9jNkE9PSIsInZhbHVlIjoib01hWXFFOE8rMVBPUzRud0J5RjFxQT09IiwibWFjIjoiOTljYmRmODg1MmYyYTc3Mjc1NWY2NjNmMjU1MzY4MzNkM2U3MjFmNjQxMGUyMzFlMDQ5N2U2OTBhMzZhOTA2OCJ9', NULL, '6922 Haag Square Suite 519\nPowlowskiside, NC 27463', NULL, '2020-12-18 03:40:22', NULL),
(59, 'Prof. Deion Trantow', 'ukilback@example.com', NULL, 'eyJpdiI6IlVlZTYvV0ZoMkpzdUpZbE83blMzSXc9PSIsInZhbHVlIjoiUXZBTkZZcnpwenlZdld6bXZsSHlHZz09IiwibWFjIjoiM2RkMmJlNjlmNmZjYTU2YzIyYmE1MjQ3ZTM5MzI1ZDE2ZDNhY2VlOGMwZDBlOWRiYjA0ZDg2ZjEzYTc4YWU4ZiJ9', NULL, '192 Jay Parkways\nForrestville, AK 55967', NULL, '2021-05-12 07:48:09', NULL),
(60, 'Lacy Abshire', 'wsatterfield@example.org', NULL, 'eyJpdiI6ImZxZDUybkEvaDNWNzFsTzhFWFVZUUE9PSIsInZhbHVlIjoiT0pRL3NqWCtHRlRvcEQzSy9kL2pHZz09IiwibWFjIjoiOTFjNmM3NTQwYTk2N2FkZWZmMDJmYTAwYWY1YjkzZTU4NmQ4ZjM1ZmUwNGIxYWIzNzE4NjVkNTJiNDMwMWFkNSJ9', NULL, '3408 Ashlynn Ferry\nMarjolainestad, MN 48866-8645', NULL, '2021-05-12 14:12:14', NULL),
(61, 'Jadyn Parker', 'lromaguera@example.org', NULL, 'eyJpdiI6IktIaU1oSlNod25YOUs1MHpHL1JxZlE9PSIsInZhbHVlIjoidG9ucTR2NjhmaWI3VE5PM2RhL1M5UT09IiwibWFjIjoiNTMxNThjODRiMjRiNGYwZjYzNTVjYzUxMzliNmViOGFlOTQzNjI1MzRjZTc5Zjg4N2NlZmViODMwYThmYjYwYSJ9', NULL, '2373 Reuben Gateway\nGrimesland, MA 76523-6626', NULL, '2020-11-09 01:08:34', NULL),
(62, 'Alexandrine Kling', 'deborah88@example.org', NULL, 'eyJpdiI6ImNmU0NqWUlrWmhySkFnenFDTHYwYkE9PSIsInZhbHVlIjoiSzBYTUdLZXRocEZrclVJbnloemtSQT09IiwibWFjIjoiOTI1YTY4MzAyODJhYWU5ODhmMWQzNzMxNmE2NWVlNDVhMjI1MWU2MmQxZTYwMWE3N2I2OTc2YThlYzIxODQ3MSJ9', NULL, '7309 Hamill Track Suite 302\nEast Lacy, VT 49237', NULL, '2021-05-20 17:49:52', NULL),
(63, 'Nicole Towne', 'alfreda33@example.net', NULL, 'eyJpdiI6ImhFd2xGcElGbTdwNEVDRzc4UFFlMUE9PSIsInZhbHVlIjoiMXNqZ0ZoMnBscTNxQ212MmRNZzVhZz09IiwibWFjIjoiODgzNDY3M2M4MWM1YzYzMGFmYzFhNDVhZDMwMmMzMDA0OGY0ZjA2ZmQ4YzljN2Y4NjYxYzI0ZjQ1OGY3NDNhNyJ9', NULL, '603 Hassie Parkways\nLake Clementinaview, KY 15603', NULL, '2021-03-07 06:27:00', NULL),
(64, 'Mrs. Janice O\'Connell', 'maddison.schimmel@example.org', NULL, 'eyJpdiI6InJIRC9sZThBOTg5WWJqYUxkRU1PNXc9PSIsInZhbHVlIjoieXc3alZlS01pSVh2WFZoZ05NM2hXQT09IiwibWFjIjoiOGUyNTU3YWZiNTc1MGQxNmQzNjA2MmI3MDRiYjJhODI5MzQwNWY5YmM5YTkyZGYzNDdmOTJlMGQyNzY0MDgxMCJ9', NULL, '889 Muller Junctions\nQuitzonborough, WV 30364', NULL, '2021-05-10 01:08:56', NULL),
(65, 'Gregory DuBuque V', 'aditya.kuhn@example.com', NULL, 'eyJpdiI6Ikgxb0o2NlpBTmUrMWpSaU1YK0JOTmc9PSIsInZhbHVlIjoiRE51RnFjVmV1MlBlSGYvY1pnQVREdz09IiwibWFjIjoiMmY1YmI1NjMwMDI1ZjJjYThmYWU4M2VlMGU3ODBjYjljNjE1MWMzOTBlNTA3NmRkZTYxYTJjMzNmNjU5YTIxNyJ9', NULL, '561 Nolan Keys\nPort Viola, PA 26905-3381', NULL, '2021-01-30 11:38:50', NULL),
(66, 'Aryanna Willms', 'nwhite@example.net', NULL, 'eyJpdiI6ImVBOXdWQzJQZ0wyT01WZ0dDOTlSeEE9PSIsInZhbHVlIjoienFQeUx6blU5S3BBN2M0dmJzN1dtUT09IiwibWFjIjoiMDgyZGJmMTFjNmVjZTc4ZThmNmM2NzQ2OTZlYmE4Y2NjYTgwYTAxMGExOWJhMTNmYjBjMmExOGY4YjgwZjhmYyJ9', NULL, '7320 Huel Course\nSouth Shanafort, WI 06322-3070', NULL, '2020-12-06 15:31:38', NULL),
(67, 'Sonia Hackett', 'qwaelchi@example.com', NULL, 'eyJpdiI6IkZudWQxdEFEUGp6a2wvS2ZOYzhzTVE9PSIsInZhbHVlIjoiWnZ1N2ZpS3pJdXFZSndRbDdRRWcxZz09IiwibWFjIjoiYTAxYmI2MmYyNjQ5ZDIwNDg1MDUyNjJjZDI4YmViMWIyYjBjYjczNzU2MDU5YTc2ZTM2ZGE3YjE3MjliMWRiNCJ9', NULL, '510 Witting Courts\nLake Remington, NC 47207-1829', NULL, '2021-06-05 09:43:42', NULL),
(68, 'Dane Kunze', 'gleichner.camille@example.net', NULL, 'eyJpdiI6ImQvdFdGd0wxQnN1cGNLM2ZXNThFY0E9PSIsInZhbHVlIjoibUcrdHprL2hURk0renJyU2ZLMWpMQT09IiwibWFjIjoiYjQ2OGEyYThlMmJhYmUwMWY5ZjVjZWU2MTE0ZTJmYWM4Nzk3NjZlZDcwZmMxZWViNTU4NjZjNTExZDY0YWRlZiJ9', NULL, '1439 Carter Station\nBoehmberg, MO 91268', NULL, '2021-05-01 20:24:06', NULL),
(69, 'Mr. Rosario Murray III', 'mwalsh@example.net', NULL, 'eyJpdiI6InM2dTJYQSt5MllJNVc0a2RBSklDa1E9PSIsInZhbHVlIjoiU0lnNTB5YzBwR0NOZllaNW9FeTJWdz09IiwibWFjIjoiNjc1OTMxZTNmM2VjYjQyYmZhZjRhYjM5YWRjYjdmZWM1MDI2NGViMTQ3YjVmMTNiYWViZjcyMWVlZjE3N2IzYSJ9', NULL, '4670 Beier Path\nGulgowskiburgh, IL 23028', NULL, '2021-04-20 14:28:25', NULL),
(70, 'Mr. Jarret Kiehn', 'herbert.ratke@example.net', NULL, 'eyJpdiI6IjJlSy9JLzZhS09TLytCTTFJMHR2MEE9PSIsInZhbHVlIjoiUWhyVUZQMSsvTTV1TUFjcG9wVkxSdz09IiwibWFjIjoiZjFmMzc0M2EzNjFmMDcyY2QxNWQ5ODNkYTFlZjgyNTBmNmY1ODU5YzdhZmQ5MjQ2YmRiYTBjYWZjNjZlZDI4MSJ9', NULL, '431 Dana Fords\nAmeliechester, AK 00041', NULL, '2021-01-09 00:41:25', NULL),
(71, 'Dianna Reynolds', 'hazel.fay@example.org', NULL, 'eyJpdiI6ImJpRXlsZzVPS1h0Snc4Qyt0VTNSclE9PSIsInZhbHVlIjoiWlNzakNmOEZjdEs2UThsNERjTUdTdz09IiwibWFjIjoiZGUxMTQ5ODA5MDNlZDM5MTQxODE4ZmQ2ODI3ZjQyNWQ0MzNhOWI1MmI4ZTE1YjBiYzVmNWUzNDZkYjk3Zjk0ZSJ9', NULL, '3321 Stark Lakes\nEast Alice, FL 02428', NULL, '2020-11-21 16:19:55', NULL),
(72, 'Prof. Jessie Effertz', 'tommie.schneider@example.net', NULL, 'eyJpdiI6IkJIaEllaHlnK2czRmJMYWt2YUt0Smc9PSIsInZhbHVlIjoiRnFoTktORThiTTlUclVVYVBLT0w4UT09IiwibWFjIjoiNzMwZWRkY2E1YWVkYTY0NDAyZTI4M2Y3ZDBjNmIyZWM0ZjYwMGVmMGRjNjg4ODQ4YzFlMzQxZjQyZWY5MDNiZCJ9', NULL, '9030 Pfannerstill Hill Apt. 711\nKubbury, GA 92368', NULL, '2021-02-12 09:36:30', NULL),
(73, 'Dr. Nathaniel Senger I', 'nspencer@example.org', NULL, 'eyJpdiI6IkR5aDMrS1RJVVlZOUM2SVRuTDliN0E9PSIsInZhbHVlIjoiZ0JBRlIrT3M0SC8wNG1rcUNVYi9qQT09IiwibWFjIjoiNzEzOWU0MGVkZDM5MGRkZGJlMzNkNzNjNWZjNzZjM2U4YTE0NzlhZTNhNTc0MTQxNjdhZDIyMTExYTQ5OTU2MSJ9', NULL, '78879 Marilyne Cove Apt. 690\nBergnaumside, TX 04263', NULL, '2021-03-27 17:39:20', NULL),
(74, 'Mr. Sedrick Thompson II', 'lisa34@example.org', NULL, 'eyJpdiI6IlRJNnJLUitlaUNsSzFvWjY1SnllUFE9PSIsInZhbHVlIjoia3VqQ2VyT0tuYjZRdU9rU2pMQkMxdz09IiwibWFjIjoiMDUwOWM1ZDU2NzQ3MDMwMmRhMmQzYmMyYzMwNjVmYmRlZDlmMjg4MzQyMWE3MDZiMzQ5M2E2ZTdmYjg2ZDM1MCJ9', NULL, '6340 Derrick Path Suite 386\nSchaeferville, CA 58654-7598', NULL, '2021-04-14 13:46:48', NULL),
(75, 'Chaim Ullrich', 'marvin.rhea@example.com', NULL, 'eyJpdiI6IjY4aHdOQXliNktvaVFTQ1c0dWdrcVE9PSIsInZhbHVlIjoieDNDZDg2TVhVdzB0VHVDeWVIcUNTQT09IiwibWFjIjoiMTBmZTU3Mzc3NTVlN2RjMjgzNjMwYTAxNmE2ZjM2MWUzZmE3MjY1ZDM4YWQ2YWViZDkyZDJjM2VjNzg0NDk2NyJ9', NULL, '1659 Zboncak Stream\nJacobichester, AZ 07174-3444', NULL, '2021-05-21 22:17:20', NULL),
(76, 'Golda Kulas', 'mable.carroll@example.net', NULL, 'eyJpdiI6InN1RGZrcFZpaW96Unlwb1A0b29zdHc9PSIsInZhbHVlIjoieGtRcE1tYU5xOFhpT1o1YUl2aTI1Zz09IiwibWFjIjoiMDcwMTdhOTQ5NjZhNzg3ZmIxOWFlMjdlMTliZDhhZTZlZTYzYTlkMGM4NGQ5MWNiZTM5MzliZDQ4MDUwODg0MSJ9', NULL, '59847 Karina Island Apt. 545\nMargaritaland, SC 98004', NULL, '2021-03-12 23:45:37', NULL),
(77, 'Miss Jodie Hodkiewicz', 'patience.labadie@example.org', NULL, 'eyJpdiI6Im5jcDNoMVVkNkZvOXh6MmQ4RUxMQVE9PSIsInZhbHVlIjoieHhnaDI0eDZaempVYzVFUmw3dFgxUT09IiwibWFjIjoiNzljNWUzY2ZlNGM5ZGE3NTZlNzY2NzQwNTIwZGZlOGFjMDViMjZiMTUwYTNlZWUwNWUxYjgxZjFiNzVkNzZiMiJ9', NULL, '3491 Ayden Villages Suite 159\nVolkmanhaven, LA 68297', NULL, '2021-01-21 23:49:11', NULL),
(78, 'Destiny Predovic I', 'kellen47@example.net', NULL, 'eyJpdiI6IlNLc3FaQjdlVWw0YVQ5MlFiMit4UVE9PSIsInZhbHVlIjoidkZpMk83dnR2UnQ3TDJCY1IvVzUydz09IiwibWFjIjoiNDAyYTkyYjc5MjEwN2U2MjdjZWZlMjI2ZmJiY2YwMDBjOGEwZDdkM2VlNTNkOTZlOTE4Y2Q5MjBkOTY5ODE2OCJ9', NULL, '52226 Edyth Falls Apt. 190\nSchusterberg, NM 81311', NULL, '2021-01-05 21:41:53', NULL),
(79, 'Brittany Hessel', 'jarrod.kling@example.com', NULL, 'eyJpdiI6Im9LSGJBamZVQXBtQ1RYSHBNQ0c2Wnc9PSIsInZhbHVlIjoiV0VBWXJyZHZtQnVZWkE5ZDBlVEt0QT09IiwibWFjIjoiYjY5YTUzMDRkMDc1OTk4MDgzYjFkNjQ0MzExZjU0NjZmZWI2NGQzZDhjNTJmYjFmNDQzMWRjNDYwMjY0MGQxNSJ9', NULL, '7205 McClure Point\nLake Andrewville, SD 09304-3116', NULL, '2020-12-09 04:33:21', NULL),
(80, 'Prof. Cody Kuhic', 'blanda.carolyn@example.net', NULL, 'eyJpdiI6IkhSM1RvNFRJUHNvL002am14V2RPeGc9PSIsInZhbHVlIjoicGpyQ0Jmalc2NWkzL3lKL2F4ZmFBQT09IiwibWFjIjoiMThmMDI0MTUyYTBjMzUyZTQ3M2IyZmQ0NWM3MDcwYTgyZWJmZWVlNGM1YTk2MzNiNTg5MDkzNjIwMThhZDhiMiJ9', NULL, '7376 Hickle Mills\nWest Janafurt, WA 62888-3281', NULL, '2021-03-30 11:26:04', NULL),
(81, 'Ms. Jammie Howell Jr.', 'aliza97@example.com', NULL, 'eyJpdiI6IjNHWlJocnFmTGl1ZURRSzh3YXVranc9PSIsInZhbHVlIjoiK3Q1RE85TjliSzR3bHkxZkJIS0JPZz09IiwibWFjIjoiMjUyMDZhOTU4NTU0YjM1NzBmN2Q1MWI2NDBlMjJhMWY3YTkwM2E4MjVjOGExNmJhN2NjNzU1ZWI2NjdlM2QwOCJ9', NULL, '213 Ryley Pines Suite 708\nEast Diana, MI 33033-3672', NULL, '2020-12-16 04:09:55', NULL),
(82, 'Mr. Johathan Schowalter DDS', 'kelsi.schulist@example.org', NULL, 'eyJpdiI6ImJ6Nk1xdU1mdFhnNFRJNExPQTdQUEE9PSIsInZhbHVlIjoiaUdZRWhNZGtvbE9jZ2hDOXlVdXNsdz09IiwibWFjIjoiYWI2ZTJiNDE2YzkyNjA3MzA1YzAyMTQ1YTBkNzNkOWRkN2I4YjI4YTg5NjdhYTljYWM4NTE2NGJiNjI5MDMyMyJ9', NULL, '70265 Dickens Plaza Suite 166\nPort Lucile, OR 71384-3709', NULL, '2021-04-15 03:49:48', NULL),
(83, 'Colleen Schmeler', 'hartmann.stephen@example.com', NULL, 'eyJpdiI6InE4VmU1aXR5bTBya1hEWEhWS2RibFE9PSIsInZhbHVlIjoiRmd0Q3VvSElXZ3BDclo0eDJqM05LZz09IiwibWFjIjoiY2Y2YjI0YjcyZDE5MTFmOTE4MmRjNzk2YTJjZmE4MDZmMmMyMmQxMGI5YjEzMDAzZmMyZmE3MzdiODgxM2ViMyJ9', NULL, '955 Keeling Meadow Suite 234\nSouth Taraport, NH 42156-1010', NULL, '2021-04-19 21:17:41', NULL),
(84, 'Albin Nader', 'schoen.laurine@example.org', NULL, 'eyJpdiI6IjJNUVpFaFVyVWptTktFMjROQVBEbFE9PSIsInZhbHVlIjoiaUZ1ZldNS0VSUFlhMXB1TmtJQnpudz09IiwibWFjIjoiOGMyMGM0MzJlNWFiMjJjM2U2OGFmNGUxMzE4NjliNmFhNmUyZmEwYWE1NTcxNTVhYzUxYjYwOThmMDU2YzFmYSJ9', NULL, '736 Karianne Wall Suite 023\nNew Zitatown, MI 92158-3390', NULL, '2021-05-05 20:46:25', NULL),
(85, 'Geraldine Runolfsson DDS', 'owilderman@example.org', NULL, 'eyJpdiI6IjFlSEJPNHJoQUdDWktrUjZDRWVRUHc9PSIsInZhbHVlIjoiNzVBdUovZldPQXlET2o5dkxJbmt0Zz09IiwibWFjIjoiODFlOTQwODYwZWIyN2I2ODg2Zjc2ZDlmNzU2ZTFmNjE2ZDMyMzUwMGZkZDhiN2U5ZGI5NmZjNTMyYzEwYmQ2MiJ9', NULL, '38524 Jast Ports Apt. 391\nSchummview, MN 94652-9294', NULL, '2021-02-02 16:11:12', NULL),
(86, 'Heather Abshire', 'cronin.kellie@example.org', NULL, 'eyJpdiI6IkJ6VmdSNExKRzVINXI3UmllUExqR2c9PSIsInZhbHVlIjoiNUxPMVRiVHM3RnJsVjFBSSsvdjFVQT09IiwibWFjIjoiNjkyNzdmOGE0OTMxY2FlMzYyNjY3Mjg3OTg3MzNhYmE3NTc3NDZkZWQ0ZDlkMTdiMGI0MjQ2YmQ2ODMyMmI1NCJ9', NULL, '6524 Wilderman Mountain Suite 905\nPort Ramona, SC 38559', NULL, '2021-01-06 21:15:25', NULL),
(87, 'Jarrett Bruen', 'ronaldo59@example.com', NULL, 'eyJpdiI6Im10MzVFSmFWR2xZbWQvYXF0UnN1eHc9PSIsInZhbHVlIjoibUc4TW5hbDE3VTY1QnhobldZKzFZZz09IiwibWFjIjoiMDE2ZGZiN2Y0OGY5ZDk1OWIyNjhiYzhlZGEwYzFjMjZkYWQ3NzE2Yzg4ZWNmMGU5ZDA4ODU5ZTQ1ZDAyMDIzNCJ9', NULL, '4102 Carroll Dale\nSchummport, PA 01399-1108', NULL, '2021-06-04 23:42:01', NULL),
(88, 'Cordell Weissnat', 'rene76@example.com', NULL, 'eyJpdiI6ImUwcDFxdk9XSmFhd2VtL2Zhc0xnMlE9PSIsInZhbHVlIjoidVVaZnFjeHZ5Q3JnWUZ2TEovQXlEdz09IiwibWFjIjoiYzJkZDg4NmI0YzgxM2QwZGYzNTU3NjRjOGZjMTgxMzUwYjBlMWQ5ZTlhMzdmY2IxNWZiNWFlMjFiMjJlMjhhYyJ9', NULL, '54947 Giovanni Point Apt. 862\nJoannieville, CT 46201-7645', NULL, '2021-03-12 11:36:39', NULL),
(89, 'Adell Klocko', 'breanna63@example.org', NULL, 'eyJpdiI6IlJ5Tkd0NjdLN1VUK2NqY1Q2NWJLelE9PSIsInZhbHVlIjoiQis3RGxINzdwS0UvOSs4bjN4U2VUQT09IiwibWFjIjoiOWJmYWMyM2FmMTZmYzZjN2ZlOWFiMmFiZGFkMjMwYWYwMmE2MTUxZGZmZDFhZDk2ODQ5NWY4OGQ0OWNlZjdhNSJ9', NULL, '13170 Connelly Pines\nPort Herbert, AK 91098-4810', NULL, '2020-11-19 23:29:06', NULL),
(90, 'Briana Skiles', 'nicolas.clement@example.com', NULL, 'eyJpdiI6Im5lRVlCQldsZFNZWm9uM0x5bEhiakE9PSIsInZhbHVlIjoiaWFJNGpaVnVvTGZOSHU1SkFSK256Zz09IiwibWFjIjoiNmUzNGJjNWI3YTg2YjE5ODhhMWRiYTA3ZjQzOWMxZWIyOTkzMDJmMjJkMDY5YjdiMjk2ODVkY2NkMjcyNzkzZSJ9', NULL, '2092 Laney Pine Suite 234\nJacobiberg, DE 34634-5013', NULL, '2020-12-01 10:14:28', NULL),
(91, 'Eugene Buckridge I', 'emard.fay@example.com', NULL, 'eyJpdiI6ImM0NmV3QTVHUmdmRVFUQ2tRQXY0SXc9PSIsInZhbHVlIjoicXdHbFZmTmVTekxCYnp4dUtjQU41QT09IiwibWFjIjoiYTlhZGZmZmFiNmFiMjhjMGJkYzc1NmYzZGIzY2U2NGY5ZDI1ODZjN2FmODU5OTdlZjNkNjEyZGY2NWNhMGQ4OCJ9', NULL, '5897 Runte Port\nGrimestown, GA 77420-2965', NULL, '2021-02-24 22:35:12', NULL),
(92, 'Clemens Hackett', 'nwhite@example.org', NULL, 'eyJpdiI6IjR6TkNIMW8wWjRMbU11eWlNN1hVZkE9PSIsInZhbHVlIjoiWlBTTDUySTVIZmowMHY2TGg4SHlqUT09IiwibWFjIjoiNzY2NzRhMmI0NmMyZDI3YWMwNGNiZDk5YzYyMWE4NzM3MzVjYzFkMGQ1ZTU5MmZjZWJkZmUxNDk0NjZmNTYxNCJ9', NULL, '96648 Wava Drive Suite 720\nBlairhaven, OR 37808-2182', NULL, '2021-05-02 05:04:47', NULL),
(93, 'Mittie Gorczany', 'kblanda@example.com', NULL, 'eyJpdiI6IlR3aG1rNUNhZS9RZUdzZ0V0OU1RRlE9PSIsInZhbHVlIjoiQ3VUVE83K0craGVUaTBZV2RJdHBCQT09IiwibWFjIjoiOWQ4NDViZTViZDI2OGNmMDZmMmUwMmJlN2E0MzRiNzM0MWY5YTMzNmVjZDU0ZTc1MTljZmU4NDY1MjI2NTc3ZSJ9', NULL, '72817 McKenzie Mountain\nPort Javier, CA 76464', NULL, '2021-05-26 14:47:29', NULL),
(94, 'Bertrand Konopelski', 'cormier.hans@example.com', NULL, 'eyJpdiI6IitJTFVqTmlVbXpBekNtYmJZY0hWeHc9PSIsInZhbHVlIjoibUJkOHZTS0xuYWFQYURGSU5GZSsyUT09IiwibWFjIjoiZjgzYjhhOTY0NmUzZTRkOTUxM2JlNjEwMmQ5ZTFjYWE1OWQ4N2RjNTI3MjM4MzkxNWFhYjk0NGE2ZWJmNjcwNiJ9', NULL, '247 Reggie Road\nLake Ceasar, RI 99492', NULL, '2021-03-23 16:40:04', NULL),
(95, 'Berneice Bradtke', 'lilly13@example.org', NULL, 'eyJpdiI6IkJhNUYrd1hLYXVaUlVaK0dqOVVzcnc9PSIsInZhbHVlIjoiRmdNTWc3dlZPNUU1VWVhWVRKSVlYdz09IiwibWFjIjoiNzljYzY5ODAzNzA1YWFhMzE4OTAxNmZlZTlhNTA3MWY3ZGU1NzE2YmY3ZTQyYjFjMzhkMmI3MGUxZjkxM2JkZCJ9', NULL, '763 Trycia Street Suite 514\nPort Doug, KY 07052', NULL, '2021-03-27 20:45:36', NULL),
(96, 'Janick Schroeder', 'ojerde@example.org', NULL, 'eyJpdiI6IlNNU1JqT1pydE93cU0rVHhvd0Jsc2c9PSIsInZhbHVlIjoiV3dpZUF6MHpqSnptVXdyTzF1L3pqdz09IiwibWFjIjoiMzhkYzM0Zjc1OTc2OWUxMzViZGY3YmVlYjAxMGU2ZDM5ZThkM2Q0MDk4YjQyNjUxMjZkNDMwMWMwMzQ0ZWE0MSJ9', NULL, '13468 Corine Points Apt. 847\nKrisborough, RI 79288', NULL, '2021-06-04 04:34:39', NULL),
(97, 'Wilson Roberts MD', 'verdie66@example.net', NULL, 'eyJpdiI6Im13MGlieGY5WjkvL1pmM0lUOXp4Z0E9PSIsInZhbHVlIjoic3R2dEpNMXc4NEl6VlVoQUdzdVc0UT09IiwibWFjIjoiZDJiMzhjM2ZlZjM2MDE4ZDE5ZGViNmEwMmZhOTVkNzc3NDA2NDgxNGFiMDNlODdmODU4NDI5OTFmN2ZlOWY5YyJ9', NULL, '18095 Auer Camp\nPagacside, MT 37657-2915', NULL, '2021-01-22 19:15:29', NULL),
(98, 'Braulio Reilly I', 'umaggio@example.com', NULL, 'eyJpdiI6IlJlSm5JQlAzSEFNcjBGN3kydTRMT2c9PSIsInZhbHVlIjoianBLUDJudHVDMkxGTWhKZEVYK2c2UT09IiwibWFjIjoiODQ5NTYyZjc2YzM1OTFiNTkxOGFkNDhiNzk0ZTNhZWRlYjVkMmIwZDEzNTFlNjU0NzkxZGZlOTMwMzkxYTU3YiJ9', NULL, '9788 Tessie Corners Apt. 530\nEast Rachelle, MO 31611-2454', NULL, '2020-12-22 15:50:24', NULL),
(99, 'Joel Pollich MD', 'enrique72@example.net', NULL, 'eyJpdiI6InZOaFo0RENoMmhoeUxseWZBMmhlaWc9PSIsInZhbHVlIjoiUjFIR09nc3VFajhlUlltT2F6c0JoQT09IiwibWFjIjoiMzBmYWRjYjBkMmYzMjc1YmFkYzY5N2E0OTMxZmExMDlhZjY4Y2E5OGVhNDMwNzMxNTYyYjJmMzU3NmYzYWNiZCJ9', NULL, '7692 Gulgowski Island Suite 653\nKrisview, AR 44634', NULL, '2021-02-27 03:44:49', NULL),
(100, 'Mrs. Jewell Lowe DVM', 'zeffertz@example.com', NULL, 'eyJpdiI6IlJsQWh0R2dVaUhrdG5uNkVEWXFzV0E9PSIsInZhbHVlIjoiNVIySnM0ZDR2eVJxK0srckJFNi9HZz09IiwibWFjIjoiOGYyMzU3YjAxNDQ4ZmY5YzI0YTI5Y2E4NGQ5YzZkZDhlNDYwN2FkMjVhOTk0N2U2MjgwMjgwNTg4MjlhZWNmYiJ9', NULL, '2564 DuBuque Passage Suite 299\nEast Iliana, MT 00884-3842', NULL, '2020-11-22 17:56:31', NULL),
(101, 'khanh', 'khanh@gmail.com', '0976517102', '827ccb0eea8a706c4c34a16891f84e7b', '0', 'Binh Duong', '2021-05-05', '2021-05-09 01:40:48', '2021-05-09 01:40:48'),
(102, 'Kim Phụng', 'kimphung11499@gmail.com', '0582023920', 'd18bf44c9423d3bdbefa5fcca5b32271', '0', 'Chánh Nghĩa', NULL, '2021-05-13 04:16:07', '2021-05-13 06:54:33'),
(104, 'Phụng', '1724801030101@student.tdmu.edu.vn', '123456', '827ccb0eea8a706c4c34a16891f84e7b', '0', 'Chánh Nghĩa', '11/04/1999', '2021-05-13 18:08:26', '2021-05-13 18:08:26');

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
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_price` double DEFAULT NULL,
  `payment` int(11) NOT NULL,
  `status_payment` int(11) NOT NULL,
  `status_ship` int(11) NOT NULL,
  `dataExpired` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `customer_name`, `phone`, `email`, `address`, `product_id`, `quantity`, `price`, `invoice_price`, `payment`, `status_payment`, `status_ship`, `dataExpired`, `admin_id`, `created_at`, `updated_at`) VALUES
(3, 'Kim Phụng', '0582023920', 'kimphung11499@gmail.com', 'Chánh Nghĩa', '24,9', '3,2', '30000,250000', 590000, 1, 1, 1, '2021-05-13', 1, '2021-05-13 04:22:25', '2021-05-13 04:22:25'),
(4, 'Kim Phụng', '0582023920', 'kimphung11499@gmail.com', 'Chánh Nghĩa', '17', '3', '500000', 1500000, 1, 1, 1, '2021-05-13', 1, '2021-05-13 06:37:36', '2021-05-13 06:37:36'),
(5, 'Kim Phụng', '0582023920', 'kimphung11499@gmail.com', 'Chánh Nghĩa', '17', '3', '500000', 1500000, 1, 1, 1, '2021-05-13', 1, '2021-05-13 06:37:54', '2021-05-13 06:37:54'),
(6, 'Kim Phụng', '0582023920', 'kimphung11499@gmail.com', 'Chánh Nghĩa', '17', '3', '500000', 1500000, 1, 1, 1, '2021-05-13', 1, '2021-05-13 06:38:11', '2021-05-13 06:38:11'),
(7, 'Kim Phụng', '0582023920', 'kimphung11499@gmail.com', 'Chánh Nghĩa', '17', '3', '500000', 1500000, 1, 1, 1, '2021-05-22', 1, '2021-05-13 06:38:38', '2021-05-13 06:38:38'),
(8, 'Kim Phụng', '0582023920', 'kimphung11499@gmail.com', 'Chánh Nghĩa', '18,0', '5,3', '900000,150000', 4950000, 1, 1, 1, '2021-05-11', 1, '2021-05-13 06:38:59', '2021-05-13 06:38:59'),
(9, 'Kim Phụng', '0582023920', 'kimphung11499@gmail.com', 'Chánh Nghĩa', '22,17', '6,4', '300000,500000', 3800000, 1, 1, 1, '2021-05-13', 1, '2021-05-13 06:43:57', '2021-05-13 06:43:57'),
(10, 'Phượng', '123456', '1724801030101@student.tdmu.edu.vn', 'Chánh Nghĩa', '19', '5', '250000', 1250000, 1, 2, 3, '2021-05-21', 1, '2021-05-13 17:58:32', '2021-05-13 17:58:32'),
(11, 'Kim Phụng', '0582023920', 'kimphung11499@gmail.com', 'Chánh Nghĩa', '17', '3', '500000', 1500000, 1, 1, 1, '2021-05-15', 1, '2021-05-13 18:11:53', '2021-05-13 18:11:53'),
(12, 'Phụng', '123456', '1724801030101@student.tdmu.edu.vn', 'Chánh Nghĩa', '12', '5', '200000', 1000000, 1, 1, 1, '2021-05-14', 1, '2021-05-13 18:12:55', '2021-05-13 18:12:55');

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
(4, '2021_03_13_092738_create_admins_table', 1),
(5, '2021_03_13_093859_create_categories_table', 2),
(6, '2021_03_13_094434_create_categories_table', 3),
(7, '2021_03_13_094712_create_brands_table', 4),
(8, '2021_03_13_094932_create_customers_table', 5),
(9, '2021_03_13_095506_create_products_table', 6),
(10, '2021_03_13_100147_create_carts_table', 7),
(11, '2021_03_13_100449_create_orders_table', 8),
(12, '2021_03_13_101006_create_orders_table', 9),
(13, '2021_03_13_101348_create_admins_table', 10),
(14, '2021_03_21_120442_create_brands_table', 11),
(15, '2021_03_22_074130_create_categories_table', 12),
(16, '2021_03_22_141725_create_products_table', 13),
(17, '2021_04_02_095255_create_carts_table', 14),
(18, '2021_04_05_034657_create_carts_table', 15),
(19, '2021_04_05_043349_create_categories_table', 16),
(20, '2021_04_13_094207_create_sale_codes_table', 17),
(21, '2021_04_30_095432_create_orders_table', 18),
(22, '2021_05_01_152551_create_invoices_table', 19),
(23, '2021_05_10_181033_create_comments_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` int(11) NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cart` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment` int(11) NOT NULL,
  `price_order` float DEFAULT NULL,
  `code_discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `new` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `session_id`, `name`, `address`, `province`, `phone`, `email`, `product`, `quantity`, `price`, `id_cart`, `note`, `payment`, `price_order`, `code_discount`, `status`, `new`, `created_at`, `updated_at`) VALUES
(2, 102, NULL, 'Kim Phụng', 'Chánh Nghĩa', 1, '0582023920', 'kimphung11499@gmail.com', '17', '3', '500000', '3', NULL, 1, 1500000, NULL, 3, NULL, '2021-05-13 04:54:19', '2021-05-13 18:11:53'),
(3, 102, NULL, 'Kim Phụng', 'Chánh Nghĩa', 1, '0582023920', 'kimphung11499@gmail.com', '18,0', '5,3', '900000,150000', '5,4', 'Giao nhanh nhất có thể', 1, 4950000, NULL, 0, NULL, '2021-05-13 06:30:15', '2021-05-13 06:51:57'),
(4, 102, NULL, 'Kim Phụng', 'Chánh Nghĩa', 1, '0582023920', 'kimphung11499@gmail.com', '22,17', '6,4', '300000,500000', '7,6', 'Đủm', 1, 3800000, NULL, 0, NULL, '2021-05-13 06:43:23', '2021-05-13 06:52:01'),
(5, 102, NULL, 'Kim Phụng', 'Chánh Nghĩa', 1, '0582023920', 'kimphung11499@gmail.com', '26', '3', '50000', '8', NULL, 1, 150000, NULL, 1, NULL, '2021-05-13 08:45:45', '2021-05-13 08:45:45'),
(6, NULL, 'XcWGYuSlFoQLmMAOMea7RXvfvajswzM4E1znG3lv', 'Phượng', 'Chánh Nghĩa', 1, '123456', '1724801030101@student.tdmu.edu.vn', '19', '5', '250000', '9', 'Giao nhanh', 1, 1250000, NULL, 2, NULL, '2021-05-13 17:57:56', '2021-05-13 17:58:32'),
(7, 104, 'XcWGYuSlFoQLmMAOMea7RXvfvajswzM4E1znG3lv', 'Phụng', 'Chánh Nghĩa', 1, '123456', '1724801030101@student.tdmu.edu.vn', '12', '5', '200000', '10', 'Giao hàng', 1, 1000000, NULL, 0, NULL, '2021-05-13 18:09:49', '2021-05-13 18:13:07');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` double NOT NULL,
  `product_discount` float NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_sale` int(11) NOT NULL,
  `product_stock` int(11) DEFAULT NULL,
  `product_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `brand_id`, `product_name`, `product_code`, `product_img`, `product_img_1`, `product_img_2`, `product_img_3`, `product_price`, `product_discount`, `product_desc`, `product_qty`, `product_sale`, `product_stock`, `product_status`, `created_at`, `updated_at`) VALUES
(0, '4', '6', 'Lăn Dưỡng Mắt Simple Kind To Eyes', NULL, 'Simple.PNG', 'Simple1.PNG', 'Simple2.PNG', 'Simple3.PNG', 150000, 0, 'Lăn dưỡng mắt Simple Kind To Eyes Revitalising Eye Roll-On có dạng nước lỏng nhẹ cung cấp,độ ẩm cho da mắt, kết hợp với massage bằng đầu kim loại giúp ngăn ngừa việc hình thành nếp nhăn.Sản phẩm còn tăng cường lưu thông máu giúp giảm quầng thâm mắt và bọng mắt', 100, 3, 97, '0', '2021-03-24 07:25:03', '2021-05-13 06:30:15'),
(9, '6', '4', '3CE Mood Recipe Matte Lip Co', NULL, '3ce.PNG', '3ce1.PNG', '3ce2.PNG', '3ce3.PNG', 250000, 10, 'Một đôi môi nhợt nhạt, thiếu sắc sẽ khiến bạn trở nên thiếu sức sống, mệt mỏi và kém thu hút trong mắt người đối diện. Chính vì thế, son môi là vũ khí không thể thiếu trong túi xách của bất cứ một người phụ nữ nào, giúp nàng luôn tỏa sáng, tự tin trước đám đông. 3CE là thương hiệu đình đám đến từ Hàn Quốc, những bộ sưu tập son môi đến từ thương hiệu này sở hữu bảng màu đa dạng, các tông màu thời thượng, cá tính cùng những ưu điểm tuyệt vời về chất son đã chinh phục hoàn toàn trái tim của những cô nàng yêu son. Đầu tiên phải kể đến đó chính là bộ sưu tập son 3CE Mood Recipe Matte Lip Color&nbsp;với 5 cây son đầy mê hoặc.&nbsp;', 100, 2, 98, '0', '2021-03-24 07:27:54', '2021-05-13 10:18:35'),
(10, '6', '6', 'Son Dior Addict Lip Glow', NULL, 'Dior.PNG', 'Dior1.PNG', 'Dior2.PNG', 'Dior3.PNG', 500000, 0, 'Một đôi môi nhợt nhạt, thiếu sắc sẽ khiến bạn trở nên thiếu sức sống, mệt mỏi và kém thu hút trong mắt người đối diện. Chính vì thế, son môi là vũ khí không thể thiếu trong túi xách của bất cứ một người phụ nữ nào, giúp nàng luôn tỏa sáng, tự tin trước đám đông. 3CE là thương hiệu đình đám đến từ Hàn Quốc, những bộ sưu tập son môi đến từ thương hiệu này sở hữu bảng màu đa dạng, các tông màu thời thượng, cá tính cùng những ưu điểm tuyệt vời về chất son đã chinh phục hoàn toàn trái tim của những cô nàng yêu son. Đầu tiên phải kể đến đó chính là bộ sưu tập son Son Dior Addict Lip Glow đầy mê hoặc.&nbsp;<br />\r\n&nbsp;', 100, 0, NULL, '1', '2021-03-24 07:30:04', '2021-05-04 06:17:37'),
(11, '6', '2', 'Son Mac Retro Matte Lipstick', NULL, 'Mac.PNG', 'Mac1.PNG', 'Mac2.PNG', 'Mac3.PNG', 500000, 0, 'Một đôi môi nhợt nhạt, thiếu sắc sẽ khiến bạn trở nên thiếu sức sống, mệt mỏi và kém thu hút trong mắt người đối diện. Chính vì thế, son môi là vũ khí không thể thiếu trong túi xách của bất cứ một người phụ nữ nào, giúp nàng luôn tỏa sáng, tự tin trước đám đông. 3CE là thương hiệu đình đám đến từ Hàn Quốc, những bộ sưu tập son môi đến từ thương hiệu này sở hữu bảng màu đa dạng, các tông màu thời thượng, cá tính cùng những ưu điểm tuyệt vời về chất son đã chinh phục hoàn toàn trái tim của những cô nàng yêu son. Đầu tiên phải kể đến đó chính là bộ sưu tập son Mac Retro Matte Lipstick đầy mê hoặc.&nbsp;<br />\r\n&nbsp;', 100, 2, 98, '1', '2021-03-24 07:32:27', '2021-05-10 10:14:27'),
(12, '6', '2', 'Son Merzy The First Velvet Tint', NULL, 'Merzy.PNG', 'Merzy1.PNG', 'Merzy2.PNG', 'Merzy3.PNG', 200000, 0, 'Một đôi môi nhợt nhạt, thiếu sắc sẽ khiến bạn trở nên thiếu sức sống, mệt mỏi và kém thu hút trong mắt người đối diện. Chính vì thế, son môi là vũ khí không thể thiếu trong túi xách của bất cứ một người phụ nữ nào, giúp nàng luôn tỏa sáng, tự tin trước đám đông. 3CE là thương hiệu đình đám đến từ Hàn Quốc, những bộ sưu tập son môi đến từ thương hiệu này sở hữu bảng màu đa dạng, các tông màu thời thượng, cá tính cùng những ưu điểm tuyệt vời về chất son đã chinh phục hoàn toàn trái tim của những cô nàng yêu son. Đầu tiên phải kể đến đó chính là bộ sưu tập sonMerzy The First Velvet Tint đầy mê hoặc.', 100, 5, 95, '1', '2021-03-24 07:34:21', '2021-05-13 18:09:49'),
(14, '6', '6', 'Son YSL Rouge Pur Couture The Slim', NULL, 'YSL.PNG', 'YSL1.PNG', 'YSL2.PNG', 'YSL3.PNG', 900000, 0, 'Một đôi môi nhợt nhạt, thiếu sắc sẽ khiến bạn trở nên thiếu sức sống, mệt mỏi và kém thu hút trong mắt người đối diện. Chính vì thế, son môi là vũ khí không thể thiếu trong túi xách của bất cứ một người phụ nữ nào, giúp nàng luôn tỏa sáng, tự tin trước đám đông. 3CE là thương hiệu đình đám đến từ Hàn Quốc, những bộ sưu tập son môi đến từ thương hiệu này sở hữu bảng màu đa dạng, các tông màu thời thượng, cá tính cùng những ưu điểm tuyệt vời về chất son đã chinh phục hoàn toàn trái tim của những cô nàng yêu son. Đầu tiên phải kể đến đó chính là bộ sưu tập son YSL Rouge Pur Couture The Slim đầy mê hoặc.&nbsp;<br />\r\n&nbsp;', 100, 0, NULL, '1', '2021-03-24 07:43:29', '2021-05-04 06:20:02'),
(17, '3', '2', 'Kem Dưỡng Da JMSolution', NULL, 'JM.PNG', 'JM1.PNG', 'JM2.PNG', 'JM3.PNG', 500000, 0, '&nbsp;<br />\r\nNếu nói về thành phần cấu tạo nên sản phẩm thì đó là cả một list dài mà chắc kể ra thì nhiều bạn cũng không thể biết hết và các chất đó. Vậy nên mình sẽ chỉ liệt kê ra các thành phần, tinh chất chính nằm trong top đầu bảng thành phần của JMSolution. Tinh dầu hạt lê gai và Odeetox là nằm ở đầu bảng giúp tạo hàng rào bảo vệ da khỏi các tác nhân từ môi trường như: khói, bụi, ô nhiễm.<br />\r\n&nbsp;', 100, 4, 96, '1', '2021-03-24 07:49:08', '2021-05-13 06:43:23'),
(18, '3', '2', 'Kem Dưỡng Da Kiehl', NULL, 'Kiehl.PNG', 'Kiehl1.PNG', 'Kiehl2.PNG', 'Kiehl3.PNG', 900000, 0, '<br />\r\nNếu nói về thành phần cấu tạo nên sản phẩm thì đó là cả một list dài mà chắc kể ra thì nhiều bạn cũng không thể biết hết và các chất đó. Vậy nên mình sẽ chỉ liệt kê ra các thành phần, tinh chất chính nằm trong top đầu bảng thành phần của Huxley Cream Glow Awakening. Tinh dầu hạt lê gai và Odeetox là nằm ở đầu bảng giúp tạo hàng rào bảo vệ da khỏi các tác nhân từ môi trường như: khói, bụi, ô nhiễm.<br />\r\n&nbsp;', 100, 5, 95, '1', '2021-03-24 07:49:51', '2021-05-13 06:30:15'),
(19, '3', '2', 'Sữa Rữa Mặt Rau Củ', NULL, 'Rau.PNG', 'Rau1.PNG', 'Rau2.PNG', 'Rau3.PNG', 250000, 0, '&nbsp;<br />\r\nNếu nói về thành phần cấu tạo nên sản phẩm thì đó là cả một list dài mà chắc kể ra thì nhiều bạn cũng không thể biết hết và các chất đó. Vậy nên mình sẽ chỉ liệt kê ra các thành phần, tinh chất chính nằm trong top đầu bảng thành phần . Tinh dầu hạt lê gai và Odeetox là nằm ở đầu bảng giúp tạo hàng rào bảo vệ da khỏi các tác nhân từ môi trường như: khói, bụi, ô nhiễm.<br />\r\n&nbsp;', 100, 5, 95, '1', '2021-03-24 07:50:28', '2021-05-13 17:57:56'),
(21, '3', '5', 'Sữa Rữa Mặt Skin1004', NULL, 'Skin1004.PNG', 'Skin10041.PNG', 'Skin10042.PNG', 'Skin10043.PNG', 500000, 0, '&nbsp;<br />\r\nNếu nói về thành phần cấu tạo nên sản phẩm thì đó là cả một list dài mà chắc kể ra thì nhiều bạn cũng không thể biết hết và các chất đó. Vậy nên mình sẽ chỉ liệt kê ra các thành phần, tinh chất chính nằm trong top đầu bảng thành phần của Skin1004. Tinh dầu hạt lê gai và Odeetox là nằm ở đầu bảng giúp tạo hàng rào bảo vệ da khỏi các tác nhân từ môi trường như: khói, bụi, ô nhiễm.<br />\r\n&nbsp;', 100, 0, NULL, '1', '2021-03-24 07:52:03', '2021-05-04 06:21:47'),
(22, '3', '6', 'Kem Dưỡng Da Vichy', NULL, 'Vichy.PNG', 'Vichy1.PNG', 'Vichy2.PNG', 'Vichy3.PNG', 300000, 0, '&nbsp;<br />\r\nNếu nói về thành phần cấu tạo nên sản phẩm thì đó là cả một list dài mà chắc kể ra thì nhiều bạn cũng không thể biết hết và các chất đó. Vậy nên mình sẽ chỉ liệt kê ra các thành phần, tinh chất chính nằm trong top đầu bảng thành phần . Tinh dầu hạt lê gai và Odeetox là nằm ở đầu bảng giúp tạo hàng rào bảo vệ da khỏi các tác nhân từ môi trường như: khói, bụi, ô nhiễm.<br />\r\n&nbsp;', 100, 6, 94, '1', '2021-03-24 07:52:39', '2021-05-13 06:43:23'),
(23, '5', '4', 'BNBG Vita Genic Jelly Mask', NULL, 'Banobagi.PNG', 'Banobagi1.PNG', 'Banobagi2.PNG', 'Banobagi3.PNG', 25000, 0, 'BNBG Vita Genic Jelly Mask&nbsp;được thiết kế rất bắt mắt và dễ thương. Nhiều bạn còn lầm tưởng mặt nạ này có dạng bột hay hình viên thuốc nữa, nhưng thật ra không phải nhé! Mặt nạ&nbsp;có dạng miếng giấy cotton và kèm theo các loại vitamins và khoáng chất thiết yếu cho làn da&nbsp;với hàm lượng cao lên đến 20000ppm được chiết xuất hoàn toàn từ thiên nhiên.&nbsp;Ngoài ra, mặt nạ&nbsp;còn chứa các tinh chất từ cây, quả thiên nhiên như tinh chất trái cam, lô hội, việt quất... giúp hỗ trợ trong việc tăng sức đề kháng và hỗ trợ trẻ hóa làn da.', 100, 5, 95, '1', '2021-03-24 07:55:03', '2021-05-12 10:02:01'),
(24, '5', '6', 'M-Lab Derma Bamboo Mask', NULL, 'M-lab.PNG', 'M-lab1.PNG', 'M-lab2.PNG', 'M-lab3.PNG', 30000, 0, 'M-Lab Derma Bamboo Mask&nbsp;được thiết kế rất bắt mắt và dễ thương. Nhiều bạn còn lầm tưởng mặt nạ này có dạng bột hay hình viên thuốc nữa, nhưng thật ra không phải nhé! Mặt nạ&nbsp;có dạng miếng giấy cotton và kèm theo các loại vitamins và khoáng chất thiết yếu cho làn da&nbsp;với hàm lượng cao lên đến 20000ppm được chiết xuất hoàn toàn từ thiên nhiên.&nbsp;Ngoài ra, mặt nạ&nbsp;còn chứa các tinh chất từ cây, quả thiên nhiên như tinh chất trái cam, lô hội, việt quất... giúp hỗ trợ trong việc tăng sức đề kháng và hỗ trợ trẻ hóa làn da.', 100, 3, 97, '1', '2021-03-24 07:57:09', '2021-05-13 04:18:20'),
(25, '5', '4', 'SK-II Whitening Source Dẻm Revival Mask', NULL, 'SK-II.PNG', 'SK-II1.PNG', 'SK-II2.PNG', 'SK-II3.PNG', 100000, 0, 'SK-II Whitening Source Dẻm Revival Mask&nbsp;được thiết kế rất bắt mắt và dễ thương. Nhiều bạn còn lầm tưởng mặt nạ này có dạng bột hay hình viên thuốc nữa, nhưng thật ra không phải nhé! Mặt nạ&nbsp;có dạng miếng giấy cotton và kèm theo các loại vitamins và khoáng chất thiết yếu cho làn da&nbsp;với hàm lượng cao lên đến 20000ppm được chiết xuất hoàn toàn từ thiên nhiên.&nbsp;Ngoài ra, mặt nạ&nbsp;còn chứa các tinh chất từ cây, quả thiên nhiên như tinh chất trái cam, lô hội, việt quất... giúp hỗ trợ trong việc tăng sức đề kháng và hỗ trợ trẻ hóa làn da.', 100, 3, 97, '1', '2021-03-24 07:59:35', '2021-05-13 03:06:58'),
(26, '5', '4', 'Madagascar Centella Watergel Sheet Ampoule Mask', NULL, 'Skin1004.PNG', 'Skin10041.PNG', 'Skin10042.PNG', 'Skin10043.PNG', 50000, 0, '<h2>Madagascar Centella Watergel Sheet Ampoule Mask được thiết kế rất bắt mắt và dễ thương. Nhiều bạn còn lầm tưởng mặt nạ này có dạng bột hay hình viên thuốc nữa, nhưng thật ra không phải nhé! Mặt nạ&nbsp;có dạng miếng giấy cotton và kèm theo các loại vitamins và khoáng chất thiết yếu cho làn da&nbsp;với hàm lượng cao lên đến 20000ppm được chiết xuất hoàn toàn từ thiên nhiên.&nbsp;Ngoài ra, mặt nạ&nbsp;còn chứa các tinh chất từ cây, quả thiên nhiên như tinh chất trái cam, lô hội, việt quất... giúp hỗ trợ trong việc tăng sức đề kháng và hỗ trợ trẻ hóa làn da.</h2>', 100, 3, 97, '1', '2021-03-24 08:02:11', '2021-05-13 08:45:45'),
(31, '4', '4', 'Phungggg', NULL, 'Estee.PNG', 'Estee1.PNG', 'Estee2.PNG', 'Estee3.PNG', 1000, 10, '1234', 100, 0, NULL, '0', '2021-05-13 07:15:03', '2021-05-13 07:16:27'),
(32, '3', '2', 'Kem dưỡng mắt', NULL, 'Estee.PNG', 'Estee1.PNG', 'Estee2.PNG', 'Estee3.PNG', 1000, 10, '12345', 1000, 0, NULL, '0', '2021-05-13 07:18:57', '2021-05-13 07:19:08');

-- --------------------------------------------------------

--
-- Table structure for table `sale_codes`
--

CREATE TABLE `sale_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codesale_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_admin_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customers_customer_email_unique` (`customer_email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sale_codes`
--
ALTER TABLE `sale_codes`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `sale_codes`
--
ALTER TABLE `sale_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
