-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2022 at 04:54 PM
-- Server version: 10.5.13-MariaDB-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u9052446_apriori`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama`, `alamat`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'ilyas abdurahman yusuf', 'kudaile Jln imam bonjol GG 20 RT 02 RW 01', 'andrenuryana@gmail.com', '2da121a3d69f9babc691703ab3c55182', '2020-09-23 04:22:57', '2020-09-23 04:22:57'),
(2, 'dwiki', 'asdsad', 'dwiki@gmail.com', 'e91f39dd30ee8d28c0bf895810db1ad3', '2021-04-05 02:46:42', '2021-04-05 02:46:42'),
(3, 'tes', 'tes', 'tes@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-07-21 02:29:02', '2021-07-21 02:29:02'),
(4, 'Ginanjar', 'Brebes', 'anjar.dosen@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2021-08-02 18:28:10', '2021-08-02 18:28:10'),
(5, 'papa', 'kaligangsa', 'papa@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2021-08-02 18:31:08', '2021-08-02 18:31:08'),
(6, 'asep', 'sumedang', 'asep@alias.com', 'f5bb0c8de146c67b44babbf4e6584cc0', '2021-08-02 23:04:41', '2021-08-02 23:04:41');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'makanan', NULL, '2020-09-08 04:20:46'),
(2, 'peralatan mandi', NULL, NULL),
(3, 'minuman', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `frontend`
--

CREATE TABLE `frontend` (
  `id` int(11) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `tentang` varchar(2500) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `instagram` varchar(250) NOT NULL,
  `github` varchar(250) NOT NULL,
  `pagination` int(11) NOT NULL,
  `copyright` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `frontend`
--

INSERT INTO `frontend` (`id`, `logo`, `tentang`, `facebook`, `instagram`, `github`, `pagination`, `copyright`, `created_at`, `updated_at`) VALUES
(1, 'Dwiki Shop', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur urna posuere ex finibus, in molestie sem elementum. Ut mauris diam, blandit quis gravida at, posuere sit amet sem. Fusce vulputate lectus est, ut porta velit vehicula et. Nam', 'https://web.facebook.com/AndaCoegSekalli', '#', 'https://github.com/hikaaam', 8, '™ Dwiki Hernanda ™', '2020-08-29 13:44:23', '2021-04-18 22:18:41');

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
(4, '2020_08_15_163617_create_transactions_table', 1),
(5, '2020_08_15_163640_create_products_table', 1),
(6, '2020_08_15_163719_create_profiles_table', 1),
(7, '2020_08_15_163820_create_categories_table', 1);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_barang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://media.sproutsocial.com/uploads/2017/08/Social-Media-Video-Specs-Feature-Image.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `id_kategori`, `nama_barang`, `harga`, `img`, `created_at`, `updated_at`) VALUES
(16, 1, 'Biskuat biskuit', '5000', 'images\\product\\biskuat.png', '2021-04-23 05:48:22', '2021-04-23 05:48:22'),
(17, 1, 'Cheetos', '6400', 'images\\product\\cheetos.jpg', '2021-04-23 05:48:46', '2021-04-23 05:48:46'),
(18, 1, 'Chitato', '7200', 'images\\product\\chitato.png', '2021-04-23 05:50:30', '2021-04-23 05:50:30'),
(19, 1, 'Nissin Crispy Crackers', '5700', 'images\\product\\crispy crackers.jpg', '2021-04-23 05:51:01', '2021-04-23 05:51:01'),
(20, 1, 'French Fries', '4600', 'images\\product\\french fries.png', '2021-04-23 05:51:56', '2021-04-23 05:51:56'),
(21, 1, 'Gerry Malkist', '6000', 'images\\product\\gery malkist.jpg', '2021-04-23 05:52:25', '2021-04-23 05:52:25'),
(22, 1, 'Good Time', '5900', 'images\\product\\good time.jpg', '2021-04-23 05:52:51', '2021-04-23 05:52:51'),
(23, 1, 'Happy-Tos', '7800', 'images\\product\\happy tos.jpg', '2021-04-23 05:53:32', '2021-04-23 05:53:32'),
(24, 1, 'Indomie Instant', '2500', 'images\\product\\indomie.jpg', '2021-04-23 05:54:26', '2021-04-23 05:54:26'),
(25, 1, 'Lays', '7200', 'images\\product\\Lays.jpg', '2021-04-23 05:54:50', '2021-04-23 05:54:50'),
(26, 1, 'Roma Malkist', '5200', 'images\\product\\malkist.jpg', '2021-04-23 05:55:19', '2021-04-23 05:55:19'),
(27, 1, 'Richeese Nabati', '4255', 'images\\product\\nabati.jpg', '2021-04-23 05:56:37', '2021-04-23 05:56:37'),
(28, 1, 'Nissin Biskuit Kelapa Ijo', '5550', 'images\\product\\nissin kelapa ijo.jpg', '2021-04-23 05:57:18', '2021-04-23 05:57:18'),
(29, 1, 'Nissin Wafer', '5320', 'images\\product\\nissin wafer.jpg', '2021-04-23 05:57:56', '2021-04-23 05:57:56'),
(30, 1, 'Oishi', '6725', 'images\\product\\oishi.jpg', '2021-04-23 05:59:29', '2021-04-23 05:59:29'),
(31, 1, 'Oreo Biskuit', '6780', 'images\\product\\oreo.jpg', '2021-04-23 06:00:00', '2021-04-23 06:00:00'),
(32, 1, 'Pocky-pocky', '8245', 'images\\product\\pocky.jpg', '2021-04-23 06:00:54', '2021-04-23 06:00:54'),
(33, 1, 'Pota Bee', '4489', 'images\\product\\pota bee.jpg', '2021-04-23 06:01:31', '2021-04-23 06:01:31'),
(34, 1, 'Pringles', '12487', 'images\\product\\pringles.jpg', '2021-04-23 06:02:06', '2021-04-23 06:02:06'),
(35, 1, 'Qtela', '8369', 'images\\product\\qtela.jpg', '2021-04-23 06:02:36', '2021-04-23 06:02:36'),
(36, 1, 'Rin-bee', '7659', 'images\\product\\rin bee.png', '2021-04-23 06:03:22', '2021-04-23 06:03:22'),
(37, 1, 'Roma Biskuit Kelapa', '8349', 'images\\product\\roma biskuit kelapa.png', '2021-04-23 06:04:01', '2021-04-23 06:04:01'),
(38, 1, 'Roma Biskuit Sari Gandum', '7858', 'images\\product\\roma sari gandum.jpg', '2021-04-23 06:04:37', '2021-04-23 06:04:37'),
(39, 1, 'Roma Wafello', '7480', 'images\\product\\roma wafello.jpeg', '2021-04-23 06:06:39', '2021-04-23 06:06:39'),
(40, 1, 'Sarimi (Isi 2)', '3480', 'images\\product\\sarimi.jpg', '2021-04-23 06:07:23', '2021-04-23 06:07:23'),
(41, 1, 'SilverQueen', '14320', 'images\\product\\silverqueen.jpg', '2021-04-23 06:09:06', '2021-04-23 06:09:06'),
(42, 1, 'Taro', '4280', 'images\\product\\taro.jpg', '2021-04-23 06:11:31', '2021-04-23 06:11:31'),
(43, 1, 'Togo Biskuit', '6300', 'images\\product\\togo.jpg', '2021-04-23 06:12:12', '2021-04-23 06:12:12'),
(44, 1, 'Twistko', '6499', 'images\\product\\twistko.jpg', '2021-04-23 06:13:09', '2021-04-23 06:13:09'),
(45, 1, 'Tango Wafer', '4568', 'images\\product\\wafer tango.jpg', '2021-04-23 06:14:43', '2021-04-23 06:14:43'),
(46, 3, 'ABC Kopi', '3459', 'images\\product\\abc.jpg', '2021-04-23 06:16:27', '2021-04-23 06:16:27'),
(47, 3, 'Ades', '2349', 'images\\product\\ades.jpg', '2021-04-23 06:16:54', '2021-04-23 06:16:54'),
(48, 3, 'Aqua', '2250', 'images\\product\\aqua.jpg', '2021-04-23 06:17:53', '2021-04-23 06:17:53'),
(49, 3, 'Bear Brand', '8650', 'images\\product\\bear brand.jpg', '2021-04-23 06:18:40', '2021-04-23 06:18:40'),
(50, 3, 'Bintang Zero', '6900', 'images\\product\\bintangzero.jpg', '2021-04-23 06:20:25', '2021-04-23 06:20:25'),
(51, 3, 'Buavita', '21000', 'images\\product\\buavita.jpg', '2021-04-23 06:21:48', '2021-04-23 06:21:48'),
(52, 3, 'Cimory Yogurt Drink', '7550', 'images\\product\\cimory yogurt drink.jpg', '2021-04-23 06:22:49', '2021-04-23 06:22:49'),
(53, 3, 'Coca Cola', '10890', 'images\\product\\coca cola.jpg', '2021-04-23 06:23:35', '2021-04-23 06:23:35'),
(54, 3, 'Fanta', '10890', 'images\\product\\fanta.jpg', '2021-04-23 06:24:48', '2021-04-23 06:24:48'),
(55, 3, 'Frestea', '4550', 'images\\product\\frestea.jpg', '2021-04-23 06:25:23', '2021-04-23 06:25:23'),
(56, 3, 'Frisian Flag', '6400', 'images\\product\\frisian flag.jpg', '2021-04-23 06:26:38', '2021-04-23 06:26:38'),
(57, 3, 'Fruit Tea', '4700', 'images\\product\\fruit tea.jpg', '2021-04-23 06:27:21', '2021-04-23 06:27:21'),
(58, 3, 'Good Day', '6700', 'images\\product\\good day.jpg', '2021-04-23 06:28:48', '2021-04-23 06:28:48'),
(59, 3, 'Green Sands', '5700', 'images\\product\\green sands.jpg', '2021-04-23 06:31:40', '2021-04-23 06:31:40'),
(60, 3, 'Hemaviton Energy', '4900', 'images\\product\\hemaviton energy.jpg', '2021-04-23 06:32:28', '2021-04-23 06:32:28'),
(61, 3, 'Indomilk', '4500', 'images\\product\\indomilk.jpg', '2021-04-23 06:33:15', '2021-04-23 06:33:15'),
(62, 3, 'Kopiko 78C', '5390', 'images\\product\\kopiko.jpg', '2021-04-23 06:34:20', '2021-04-23 06:34:20'),
(63, 3, 'Kratingdaeng', '4500', 'images\\product\\kratingdaeng.jpg', '2021-04-23 06:37:04', '2021-04-23 06:37:04'),
(64, 3, 'Le Mineral', '3200', 'images\\product\\Le mineral.png', '2021-04-23 06:38:47', '2021-04-23 06:38:47'),
(65, 3, 'Mizone', '3500', 'images\\product\\mizone.jpg', '2021-04-23 06:39:51', '2021-04-23 06:39:51'),
(66, 3, 'Pocari Sweat', '6500', 'images\\product\\pocari.jpg', '2021-04-23 06:41:43', '2021-04-23 06:41:43'),
(67, 3, 'Proman', '6000', 'images\\product\\proman.jpg', '2021-04-23 06:42:39', '2021-04-23 06:42:39'),
(68, 3, 'Root Beer', '6400', 'images\\product\\root beer.jpg', '2021-04-23 06:44:33', '2021-04-23 06:44:33'),
(69, 3, 'Minute Maid Pulpy', '12500', 'images\\product\\pulpy.jpeg', '2021-04-23 06:46:25', '2021-04-23 06:46:25'),
(70, 3, 'Teh Botol', '4300', 'images\\product\\teh botol.jpg', '2021-04-23 06:48:13', '2021-04-23 06:48:13'),
(71, 3, 'Teh Pucuk', '3000', 'images\\product\\teh pucuk.jpg', '2021-04-23 06:49:08', '2021-04-23 06:49:08'),
(72, 3, 'Ultra Milk', '5800', 'images\\product\\ultra milk.jpg', '2021-04-23 06:50:33', '2021-04-23 06:50:33'),
(73, 3, 'Vit', '2500', 'images\\product\\vit.jpg', '2021-04-23 06:51:02', '2021-04-23 06:51:02'),
(74, 2, 'Clear Shampoo', '14500', 'images\\product\\clear.JPG', '2021-04-23 06:52:24', '2021-04-23 06:52:59'),
(75, 2, 'Garnier Men', '17900', 'images\\product\\garnier men.jpg', '2021-04-23 06:54:50', '2021-04-23 06:54:50'),
(76, 2, 'Lifebuoy Body Wash', '9835', 'images\\product\\Lifebuoy Body Wash.jpg', '2021-04-23 06:56:26', '2021-04-23 06:56:26'),
(77, 2, 'Ciptadent Pasta Gigi', '6500', 'images\\product\\pasta gigi ciptadent.jpg', '2021-04-23 06:58:51', '2021-04-23 06:58:51'),
(78, 2, 'Close up Pasta Gigi', '6500', 'images\\product\\pasta gigi close up.jpg', '2021-04-23 07:00:08', '2021-04-23 07:00:08'),
(79, 2, 'Formula Pasta Gigi', '6300', 'images\\product\\pasta gigi formula.jpg', '2021-04-23 07:02:06', '2021-04-23 07:02:06'),
(80, 2, 'Pepsodent Pasta Gigi', '6700', 'images\\product\\pepsodent.jpg', '2021-04-23 07:02:43', '2021-04-23 07:02:43'),
(81, 2, 'Ponds Facial Foam', '19950', 'images\\product\\ponds.jpg', '2021-04-23 07:03:43', '2021-04-23 07:03:43'),
(82, 2, 'Sensodyne Pasta Gigi', '6400', 'images\\product\\sensodyne pasta gigi.jpg', '2021-04-23 07:05:54', '2021-04-23 07:05:54'),
(83, 2, 'Ciptadent Sikat Gigi', '2800', 'images\\product\\sikat gigi ciptadent.jpg', '2021-04-23 07:06:58', '2021-04-23 07:09:11'),
(84, 2, 'Formula Sikat Gigi (isi 3)', '10500', 'images\\product\\sikat gigi formula.jpg', '2021-04-23 07:08:06', '2021-04-23 07:08:06'),
(85, 2, 'Pepsodent Sikat Gigi', '9500', 'images\\product\\sikat gigi pepsodent.jpg', '2021-04-23 07:11:31', '2021-04-23 07:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_barang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `img` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images\\product\\no-img.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `id_transaksi`, `id_barang`, `id_user`, `nama_barang`, `status`, `img`, `created_at`, `updated_at`) VALUES
(65, 'lYpbNVh2aUb76f07fMkpdHdHx', 37, 2, 'Roma Biskuit Kelapa', 1, 'images\\product\\no-img.png', '2021-04-25 20:54:57', '2021-04-25 20:57:20'),
(66, 'lYpbNVh2aUb76f07fMkpdHdHx', 22, 2, 'Good Time', 1, 'images\\product\\no-img.png', '2021-04-25 20:55:52', '2021-04-25 20:57:20'),
(67, 'lYpbNVh2aUb76f07fMkpdHdHx', 57, 2, 'Fruit Tea', 1, 'images\\product\\no-img.png', '2021-04-25 20:56:21', '2021-04-25 20:57:20'),
(68, 'lYpbNVh2aUb76f07fMkpdHdHx', 49, 2, 'Bear Brand', 1, 'images\\product\\no-img.png', '2021-04-25 20:56:45', '2021-04-25 20:57:20'),
(69, '4fXLSuEqcsEMrqzwUUutipdew', 81, 2, 'Ponds Facial Foam', 1, 'images\\product\\no-img.png', '2021-04-25 20:58:21', '2021-04-25 21:01:25'),
(70, '4fXLSuEqcsEMrqzwUUutipdew', 84, 2, 'Formula Sikat Gigi (isi 3)', 1, 'images\\product\\no-img.png', '2021-04-25 20:58:40', '2021-04-25 21:01:25'),
(71, '4fXLSuEqcsEMrqzwUUutipdew', 74, 2, 'Clear Shampoo', 1, 'images\\product\\no-img.png', '2021-04-25 20:59:52', '2021-04-25 21:01:25'),
(72, '4fXLSuEqcsEMrqzwUUutipdew', 46, 2, 'ABC Kopi', 1, 'images\\product\\no-img.png', '2021-04-25 21:00:28', '2021-04-25 21:01:25'),
(76, 'G9oeZZH9XRiXZQu0ufW7ODt3C', 23, 2, 'Happy-Tos', 1, 'images\\product\\no-img.png', '2021-04-25 21:20:44', '2021-04-25 21:28:22'),
(77, 'G9oeZZH9XRiXZQu0ufW7ODt3C', 22, 2, 'Good Time', 1, 'images\\product\\no-img.png', '2021-04-25 21:21:02', '2021-04-25 21:28:22'),
(78, 'G9oeZZH9XRiXZQu0ufW7ODt3C', 49, 2, 'Bear Brand', 1, 'images\\product\\no-img.png', '2021-04-25 21:21:23', '2021-04-25 21:28:22'),
(84, 'dXFlXxG8ovgHB9rL1txwFNNKj', 24, 2, 'Indomie Instant', 2, 'images\\transaksi\\1625149460about icon.png', '2021-07-01 07:22:18', '2021-07-01 07:24:39'),
(85, 'dXFlXxG8ovgHB9rL1txwFNNKj', 53, 2, 'Coca Cola', 2, 'images\\transaksi\\1625149460about icon.png', '2021-07-01 07:22:54', '2021-07-01 07:24:39'),
(86, 'dXFlXxG8ovgHB9rL1txwFNNKj', 74, 2, 'Clear Shampoo', 2, 'images\\transaksi\\1625149460about icon.png', '2021-07-01 07:23:33', '2021-07-01 07:24:39'),
(87, 'Z3u1e1fhA9nx1FFHc0vedgQ2D', 16, 2, 'Biskuat biskuit', 0, 'images\\product\\no-img.png', '2021-07-05 08:51:06', '2021-07-05 08:51:06'),
(90, 'Z3u1e1fhA9nx1FFHc0vedgQ2D', 19, 2, 'Nissin Crispy Crackers', 0, 'images\\product\\no-img.png', '2021-07-08 08:42:59', '2021-07-08 08:42:59'),
(91, 'Z3u1e1fhA9nx1FFHc0vedgQ2D', 17, 2, 'Cheetos', 0, 'images\\product\\no-img.png', '2021-07-21 02:56:26', '2021-07-21 02:56:26'),
(92, 'Z3u1e1fhA9nx1FFHc0vedgQ2D', 23, 4, 'Happy-Tos', 0, 'images\\product\\no-img.png', '2021-08-02 18:29:36', '2021-08-02 18:29:36'),
(93, 'Z3u1e1fhA9nx1FFHc0vedgQ2D', 40, 4, 'Sarimi (Isi 2)', 0, 'images\\product\\no-img.png', '2021-08-02 18:29:55', '2021-08-02 18:29:55'),
(94, 'Z3u1e1fhA9nx1FFHc0vedgQ2D', 81, 4, 'Ponds Facial Foam', 0, 'images\\product\\no-img.png', '2021-08-02 18:30:28', '2021-08-02 18:30:28'),
(95, 'Z3u1e1fhA9nx1FFHc0vedgQ2D', 21, 4, 'Gerry Malkist', 0, 'images\\product\\no-img.png', '2021-08-02 18:31:01', '2021-08-02 18:31:01'),
(98, 'Z3u1e1fhA9nx1FFHc0vedgQ2D', 53, 5, 'Coca Cola', 0, 'images\\product\\no-img.png', '2021-08-02 18:40:32', '2021-08-02 18:40:32'),
(99, 'Z3u1e1fhA9nx1FFHc0vedgQ2D', 22, 5, 'Good Time', 0, 'images\\product\\no-img.png', '2021-08-02 18:41:01', '2021-08-02 18:41:01'),
(100, 'Z3u1e1fhA9nx1FFHc0vedgQ2D', 74, 5, 'Clear Shampoo', 0, 'images\\product\\no-img.png', '2021-08-02 18:46:33', '2021-08-02 18:46:33'),
(101, 'Z3u1e1fhA9nx1FFHc0vedgQ2D', 49, 6, 'Bear Brand', 0, 'images\\product\\no-img.png', '2021-08-02 23:05:23', '2021-08-02 23:05:23');

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
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dwiki', 'dwiki@gmail.com', NULL, '$2y$10$7IAcYBpWiWomT8lCMh6ayO2LzteU.5AnringQUqEG8ksIZ7H01KNa', 'admin', NULL, '2020-09-20 02:44:30', '2020-09-20 02:44:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontend`
--
ALTER TABLE `frontend`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frontend`
--
ALTER TABLE `frontend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
