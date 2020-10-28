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
-- Tabelstructuur voor tabel `userliking`
--

CREATE TABLE `userliking` (
  `Id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `MovieId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `userliking`
--

INSERT INTO `userliking` (`Id`, `UserId`, `MovieId`) VALUES
(25, 13, 1549),
(26, 13, 151455),
(27, 13, 112749),
(34, 1, 151769),
(35, 1, 89427),
(36, 1, 101072),
(37, 1, 152),
(38, 1, 8755),
(39, 14, 59615),
(40, 14, 59615),
(41, 14, 54908),
(42, 14, 46105),
(43, 14, 7305),
(44, 14, 3788),
(45, 14, 2925),
(46, 14, 165843),
(47, 14, 123200),
(48, 13, 6880),
(49, 1, 181139),
(50, 17, 2372),
(51, 17, 65037),
(52, 17, 128968),
(53, 17, 59387),
(54, 17, 44777),
(55, 17, 6993),
(56, 17, 6315);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `userliking`
--
ALTER TABLE `userliking`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `userliking`
--
ALTER TABLE `userliking`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
