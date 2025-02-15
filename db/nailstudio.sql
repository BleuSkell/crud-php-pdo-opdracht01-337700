-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 19 mei 2024 om 08:02
-- Serverversie: 8.0.31
-- PHP-versie: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nailstudio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `afspraak`
--

DROP TABLE IF EXISTS `afspraak`;
CREATE TABLE IF NOT EXISTS `afspraak` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `color1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `color2` varchar(50) NOT NULL,
  `color3` varchar(50) NOT NULL,
  `color4` varchar(50) NOT NULL,
  `phone` int NOT NULL,
  `mail` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `treatment1` varchar(50) NOT NULL,
  `treatment2` varchar(50) NOT NULL,
  `treatment3` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `afspraak`
--

INSERT INTO `afspraak` (`ID`, `color1`, `color2`, `color3`, `color4`, `phone`, `mail`, `date`, `treatment1`, `treatment2`, `treatment3`) VALUES
(123, '#b87a7a', '#ff0000', '#a39999', '#cc9494', 166607, 'BidenTheBest@Bing.com', '2024-05-04', 'option1', 'false', 'false'),
(122, '#b87a7a', '#ff0000', '#a39999', '#cc9494', 166607, 'BidenTheBest@Bing.com', '2024-05-04', 'option1', 'false', 'false'),
(120, '#ff0000', '#aca0a0', '#fb8989', '#000000', 166607, 'BidenTheBest@Bing.com', '2024-05-03', 'option1', 'false', 'false'),
(119, '#ff0000', '#aca0a0', '#fb8989', '#000000', 166607, 'BidenTheBest@Bing.com', '2024-05-03', 'option1', 'false', 'false');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
