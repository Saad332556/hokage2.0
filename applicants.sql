-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 04 apr 2022 om 07:12
-- Serverversie: 5.7.31
-- PHP-versie: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hokage-form2`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `applicants`
--

DROP TABLE IF EXISTS `applicants`;
CREATE TABLE IF NOT EXISTS `applicants` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(300) NOT NULL,
  `password` varchar(60) NOT NULL,
  `userrole` enum('root','admin','user','moderator') NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `applicants`
--

INSERT INTO `applicants` (`id`, `email`, `password`, `userrole`) VALUES
(1, 'saad.benaissa2000@gmail.com', 'geheim', 'user'),
(3, 'test@test.com', '', 'user'),
(4, 'test@gmail.com', '$2y$10$eGq8Y2ZkvM16KadkrYn.heO6J/pu2Nftw3UT.HkrktZAWpiS5IAGq', 'user'),
(5, 'test1@gmail.com', '$2y$10$/zAyR7mVCEGUQbq1wGHZf.wcirYyZmpD0TTEdXeFVmOoiCxDZ/Vf.', 'user'),
(7, '332556@student.mboutrecht.nl', '$2y$10$DB43SDBWYFlMHKpFHl89gulBKbdO9Q/Oy5FftJHfzQtlOlTeiE/QK', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
