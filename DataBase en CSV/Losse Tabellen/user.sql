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
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`Id`, `Name`, `Password`, `Email`) VALUES
(1, 'Rick', 'test', 'rickdeurloo16@gmail.com'),
(9, 'Marvin', 'test', 'Marvin@email.com'),
(10, 'Marvin2', 'test', 'rickdeurloo16@gmail.com'),
(11, 'Rick2', 'test', 'rickdeurloo16@gmail.com'),
(12, 'test', 'test', 'test@mail'),
(13, 'Luuk', 'luuk', 'Luuk@hotmail.com'),
(14, 'Pietje', 'pietje', 'Pietje@hotmail.com'),
(15, 'sjaakie', 'sjaak', 'sjaakie@hotmail.com'),
(17, 'testtest', 'test', 'test@fmail.com');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Name` (`Name`),
  ADD UNIQUE KEY `Name_2` (`Name`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
