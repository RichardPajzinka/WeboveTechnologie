-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1:3306
-- Čas generovania: Út 14.Dec 2021, 22:36
-- Verzia serveru: 5.7.36
-- Verzia PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `rodinny_prislusnici`
--
CREATE DATABASE `rodinny_prislusnici`;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `prislusnici`
--
USE `rodinny_prislusnici`;

CREATE TABLE `prislusnici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meno` varchar(255) NOT NULL,
  `priezvisko` varchar(255) NOT NULL,
  `vek` varchar(100) NOT NULL,
  `pribuzenstvo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Sťahujem dáta pre tabuľku `prislusnici`
--

INSERT INTO `prislusnici` (`id`, `meno`, `priezvisko`, `vek`, `pribuzenstvo`, `email`) VALUES
(1, 'Richard', 'Pajzinka', '21', 'slobodny', 'rpajzinka@gmail.com'),
(2, 'Peter', 'Pajzinka', '31', 'Slobodny', 'peter@gmail.com'),
(19, 'richard', 'pajzinka', '45', 'brat', 'asdas@gmail.com'),
(14, 'richard', 'Pajzinka', '98', 'slobodny', 'rpajzinka@gmail.com'),
(15, 'richard', 'pajzinka', '45', 'slobodny', 'asdas@gmail.com'),
(16, 'richard', 'pajzinka', '45', 'slobodny', 'asdas@gmail.com'),
(17, 'richard', 'pajzinka', '45', 'slobodny', 'asd@gmail.com'),
(18, 'aaaaa', 'pajzinka', '98', 'asd', 'asd@gmail.com'),
(20, 'richard', 'aaaaaaaa', '45', 'brat', 'asd@gmail.com'),
(21, 'arichard', 'apajzinka', '99', 'slobodny', 'rpajzinka@gmail.com'),
(22, 'richard', 'pajzinka', '78', 'slobodny', 'asd@gmail.com'),
(23, 'richard', 'slobodny', '78', 'brat', 'asdas@gmail.com'),
(24, 'richard', 'pajzinka', '45', 'brat', 'asd@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
