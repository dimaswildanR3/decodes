-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 08:28 AM
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
-- Database: `decodes`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` longtext NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `publikasi` date NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `penulis`, `publikasi`, `cover`, `created_at`, `updated_at`) VALUES
(2, 'Cara Cepat Bikin Titik-Titik Di Daftar Isi!', '<p>sdfpokpokfposkdfposkdfsiweimewpomdepodkopposdalkdmlaskmdlaskmdsahnvffmsf\neflkwemflkewmf\nwefelkwemflkwmfe\nwfmfewklmfw\nwfelwmfewlkfm\n</p>', 'Administrator', '2023-10-06', 'Screenshot (185).png', '2023-10-04 17:39:10', '2023-10-04 17:39:10'),
(3, 'Cara Cepat Bikin Titik-Titik Di Daftar Isi!', '<p>sdfpokpokfposkdfposkdfsiweimewpomdepodkopposdalkdmlaskmdlaskmdsahnvffmsf\neflkwemflkewmf\nwefelkwemflkwmfe\nwfmfewklmfw\nwfelwmfewlkfm\n</p>', 'Administrator', '2023-10-06', 'Screenshot (185).png', '2023-10-04 17:39:10', '2023-10-04 17:39:10'),
(5, 'Cara Cepat Bikin Titik-Titik Di Daftar Isi!', '<p>sdfpokpokfposkdfposkdfsiweimewpomdepodkopposdalkdmlaskmdlaskmdsahnvffmsf\r\neflkwemflkewmf\r\nwefelkwemflkwmfe\r\nwfmfewklmfw\r\nwfelwmfewlkfm\r\n</p>', 'Administrator', '2023-10-06', 'Screenshot (185).png', '2023-10-04 17:39:10', '2023-10-04 17:39:10'),
(6, 'Cara Cepat Bikin Titik-Titik Di Daftar Isi!', '<p>sdfpokpokfposkdfposkdfsiweimewpomdepodkopposdalkdmlaskmdlaskmdsahnvffmsf\r\neflkwemflkewmf\r\nwefelkwemflkwmfe\r\nwfmfewklmfw\r\nwfelwmfewlkfm\r\n</p>', 'Administrator', '2023-10-06', 'Screenshot (185).png', '2023-10-04 17:39:10', '2023-10-04 17:39:10'),
(7, 'Cara Cepat Bikin Titik-Titik Di Daftar Isi!', '<p>sdfpokpokfposkdfposkdfsiweimewpomdepodkopposdalkdmlaskmdlaskmdsahnvffmsf\r\neflkwemflkewmf\r\nwefelkwemflkwmfe\r\nwfmfewklmfw\r\nwfelwmfewlkfm\r\n</p>', 'Administrator', '2023-10-06', 'Screenshot (185).png', '2023-10-04 17:39:10', '2023-10-04 17:39:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(2, 'Administrator', 'admin@gmail.com', NULL, '$2y$10$LGUiPv0H59KHpRK/m4IOgeopNVZVOLVRLWIneDGmkXFYZTb4.9Rzq', 'MEEjbFejWqUY7xZ3SW340A5XVZ4vJkQw1WTMDeqgH1y3kaIKl9f2EnQ1KSyv', 'admin', '2023-10-04 08:55:31', '2023-10-04 08:55:31'),
(3, 'Perpus', 'perpus1@gmail.com', NULL, '$2y$10$rRhdcUiTkqEs7nkbo..TFeyMlYgt8waY91ctEvZadJEWBQTe4Kv.C', NULL, 'PetugasPerpus', '2023-10-04 08:55:31', '2023-10-04 17:11:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
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
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
