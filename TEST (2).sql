-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Värd: localhost
-- Tid vid skapande: 17 mars 2018 kl 07:28
-- Serverversion: 5.7.21-0ubuntu0.16.04.1
-- PHP-version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `TEST`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `CID_CONOMY`
--

CREATE TABLE `CID_CONOMY` (
  `ID` char(8) NOT NULL,
  `IN1` int(11) NOT NULL,
  `IN2` int(11) NOT NULL,
  `IN3` int(11) NOT NULL,
  `IN4` int(11) NOT NULL,
  `UT1` int(11) NOT NULL,
  `UT2` int(11) NOT NULL,
  `UT3` int(11) NOT NULL,
  `UT4` int(11) NOT NULL,
  `UT5` int(11) NOT NULL,
  `UT6` int(11) NOT NULL,
  `UT7` int(11) NOT NULL,
  `UT8` int(11) NOT NULL,
  `UT9` int(11) NOT NULL,
  `UT10` int(11) NOT NULL,
  `UT11` int(11) NOT NULL,
  `UT12` int(11) NOT NULL,
  `UT13` int(11) NOT NULL,
  `UT14` int(11) NOT NULL,
  `UT15` int(11) NOT NULL,
  `UT16` int(11) NOT NULL,
  `UT17` int(11) NOT NULL,
  `UT18` int(11) NOT NULL,
  `UT19` int(11) NOT NULL,
  `UT20` int(11) NOT NULL,
  `UT21` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `CID_CONOMY`
--

INSERT INTO `CID_CONOMY` (`ID`, `IN1`, `IN2`, `IN3`, `IN4`, `UT1`, `UT2`, `UT3`, `UT4`, `UT5`, `UT6`, `UT7`, `UT8`, `UT9`, `UT10`, `UT11`, `UT12`, `UT13`, `UT14`, `UT15`, `UT16`, `UT17`, `UT18`, `UT19`, `UT20`, `UT21`) VALUES
('2018_Jan', 42000, 33000, 2250, 0, 500, 1000, 700, 800, 3400, 500, 500, 179, 99, 890, 145, 400, 800, 1000, 0, 5000, 1800, 3000, 4000, 6500, 6000),
('2018_Feb', 41000, 32000, 2250, 0, 6000, 1000, 700, 0, 0, 500, 100, 145, 99, 890, 145, 400, 700, 100, 900, 4500, 3000, 500, 4500, 4000, 10000),
('2018_Mar', 41111, 25000, 2250, 0, 4565, 922, 0, 0, 0, 615, 500, 139, 99, 922, 205, 400, 110, 1000, 900, 2730, 0, 1519, 4000, 5000, 6000),
('2018_Apr', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2018_Maj', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2018_Jun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2018_Jul', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2018_Aug', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2018_Sep', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2018_Okt', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2018_Nov', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2018_Dec', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2019_Jan', 42000, 25000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2019_Feb', 42000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2019_Mar', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2019_Apr', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2019_Maj', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2019_Jun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2019_Jul', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2019_Aug', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2019_Sep', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2019_Okt', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2019_Nov', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2019_Dec', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
