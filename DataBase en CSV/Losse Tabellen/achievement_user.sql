-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 28 okt 2020 om 18:16
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filmatory`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `achievement_user`
--

CREATE TABLE `achievement_user` (
  `AchievementId` int(50) NOT NULL,
  `UserId` int(50) NOT NULL,
  `Done` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `achievement_user`
--

INSERT INTO `achievement_user` (`AchievementId`, `UserId`, `Done`) VALUES
(1, 1, 1),
(2, 1, 1),
(1, 0, 0),
(2, 0, 0),
(1, 0, 0),
(2, 0, 0),
(1, 12, 0),
(2, 12, 0),
(1, 13, 0),
(2, 13, 0),
(1, 14, 0),
(2, 14, 0),
(1, 15, 0),
(2, 15, 0),
(1, 17, 0),
(2, 17, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
