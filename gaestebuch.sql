-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 12. Jul 2021 um 13:13
-- Server-Version: 10.4.17-MariaDB
-- PHP-Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `gaestebuch`
--
CREATE DATABASE IF NOT EXISTS `gaestebuch` DEFAULT CHARACTER SET utf8 COLLATE utf8_german2_ci;
USE `gaestebuch`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gaestebuch`
--

CREATE TABLE `gaestebuch` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_german2_ci DEFAULT NULL,
  `email` varchar(500) COLLATE utf8_german2_ci DEFAULT NULL,
  `kommentar` text COLLATE utf8_german2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Daten für Tabelle `gaestebuch`
--

INSERT INTO `gaestebuch` (`id`, `name`, `email`, `kommentar`) VALUES
(2, 'Richard Joe', 'richard@roe.com', 'Das Haus ist klein'),
(3, 'Tanja Schneider', 'tanja@schneider.com', 'Preis Leistung sehr gut.'),
(4, 'Pia Mueller', 'pia@mueller.de', 'Mit Abstand der gr&ouml;&szlig;te Saft laden in Bremen! Sushi kommt warm auf den Tisch, Service Versteht kein Deutsch und tr&auml;gt keine Masken.\r\nAbsolut keine Empfehlung !'),
(5, 'Ella Schmidt', 'ella@schmidt.ch', 'Das Lokal sah sehr einladend aus. Der Empfang war durchschnittlich und das Sushi war nicht so überzeugend.'),
(7, 'Elsa Weiss', 'elsa@weiss.fr', 'Elsa update gut gut gut gut gut'),
(20, 'Makus Meier', 'makus@meier.com', 'Das auto ist sch&ouml;n');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `gaestebuch`
--
ALTER TABLE `gaestebuch`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `gaestebuch`
--
ALTER TABLE `gaestebuch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
