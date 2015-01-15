-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 15 jan 2015 om 14:37
-- Serverversie: 5.6.21
-- PHP-versie: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `dbsonario`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `sonario`
--

CREATE TABLE IF NOT EXISTS `sonario` (
`idSonario` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `longit` decimal(9,6) NOT NULL,
  `lat` decimal(9,6) NOT NULL,
  `radius` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `sonario`
--

INSERT INTO `sonario` (`idSonario`, `name`, `longit`, `lat`, `radius`) VALUES
(4, 'myplace', '4.446376', '51.171532', '10.00'),
(20, 'somewhere', '-65.096977', '-14.844741', '80.00'),
(21, 'testcase', '2.000000', '1.000000', '3.00'),
(22, 'jaja', '6.000000', '5.000000', '8.00');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `sonario`
--
ALTER TABLE `sonario`
 ADD PRIMARY KEY (`idSonario`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `sonario`
--
ALTER TABLE `sonario`
MODIFY `idSonario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
