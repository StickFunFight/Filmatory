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
-- Tabelstructuur voor tabel `achievement`
--

CREATE TABLE `achievement` (
  `Id` int(11) NOT NULL,
  `AchievementName` varchar(50) NOT NULL,
  `AchievementDiscription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `achievement`
--

INSERT INTO `achievement` (`Id`, `AchievementName`, `AchievementDiscription`) VALUES
(1, 'Action', 'Krijg je eerste Actioe film aangeboden.'),
(2, 'Comedy', 'Krijg je eerste Comedy film aanbevolen.');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `achievement`
--
ALTER TABLE `achievement`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
