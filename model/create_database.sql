-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 02. Jul 2021 um 10:08
-- Server-Version: 10.4.19-MariaDB
-- PHP-Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `fitbike`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bikes`
--

CREATE TABLE `bikes` (
                         `BikeID` int(11) NOT NULL,
                         `name` varchar(255) NOT NULL,
                         `status` enum('Ausgehliehen','Frei') DEFAULT 'Frei'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `bikes`
--

INSERT INTO `bikes` (`BikeID`, `name`, `status`) VALUES
(1, 'F250', 'Frei'),
(2, 'Dakota Club', 'Frei'),
(3, 'Durango', 'Frei'),
(4, 'LS', 'Frei'),
(5, 'S90', 'Frei'),
(6, 'SL-Class', 'Frei'),
(7, 'Courier', 'Frei'),
(8, 'E-Class', 'Frei'),
(9, 'Envoy', 'Frei'),
(10, 'Town & Country', 'Frei'),
(11, 'Tredia', 'Frei'),
(12, 'Q5', 'Frei'),
(13, 'Tredia', 'Frei'),
(14, 'Ram Van 3500', 'Frei'),
(15, 'Alero', 'Frei'),
(16, 'Sable', 'Frei'),
(17, 'Rodeo Sport', 'Frei'),
(18, 'Sonoma', 'Frei'),
(19, 'Express', 'Frei'),
(20, 'Miata MX-5', 'Frei'),
(21, 'Suburban 1500', 'Frei'),
(22, 'Acadia', 'Frei'),
(23, 'Grand Prix', 'Frei'),
(24, 'S4', 'Frei'),
(25, 'Eclipse', 'Frei'),
(26, '3500 Club Coupe', 'Frei'),
(27, 'Viper', 'Frei'),
(28, 'Regal', 'Frei'),
(29, 'IS', 'Frei'),
(30, 'Town Car', 'Frei'),
(31, 'Crossfire', 'Frei'),
(32, 'Cooper', 'Frei'),
(33, 'Silhouette', 'Frei'),
(34, 'Equinox', 'Frei'),
(35, 'Intrepid', 'Frei'),
(36, 'i-370', 'Frei'),
(37, 'Galant', 'Frei'),
(38, 'Crossfire Roadster', 'Frei'),
(39, 'Land Cruiser', 'Frei'),
(40, 'Outback', 'Frei'),
(41, 'SLK-Class', 'Frei'),
(42, 'IS-F', 'Frei'),
(43, 'CX-9', 'Frei'),
(44, 'Explorer', 'Frei'),
(45, 'Caravan', 'Frei'),
(46, 'Passat', 'Frei'),
(47, 'Carens', 'Frei'),
(48, 'Silhouette', 'Frei'),
(49, 'LeBaron', 'Frei'),
(50, 'F350', 'Frei'),
(51, 'Villager', 'Frei'),
(52, 'Yukon XL 1500', 'Frei'),
(53, '911', 'Frei'),
(54, 'I', 'Frei'),
(55, 'Range Rover Sport', 'Frei'),
(56, 'Bravada', 'Frei'),
(57, 'Canyon', 'Frei'),
(58, 'Vantage', 'Frei'),
(59, 'Cavalier', 'Frei'),
(60, 'Gallardo', 'Frei'),
(61, 'Laser', 'Frei'),
(62, 'S10', 'Frei'),
(63, 'HHR', 'Frei'),
(64, 'Cutlass', 'Frei'),
(65, 'F-Series Super Duty', 'Frei'),
(66, 'Charger', 'Frei'),
(67, '3500', 'Frei'),
(68, 'Ram Van B350', 'Frei'),
(69, 'F350', 'Frei'),
(70, 'A8', 'Frei'),
(71, 'MPV', 'Frei'),
(72, 'CTS', 'Frei'),
(73, 'riolet', 'Frei'),
(74, 'Alpina B7', 'Frei'),
(75, 'Lanos', 'Frei'),
(76, 'LSS', 'Frei'),
(77, 'Ram 2500', 'Frei'),
(78, 'Mustang', 'Frei'),
(79, 'A6', 'Frei'),
(80, 'xB', 'Frei'),
(81, 'F450', 'Frei'),
(82, 'CLS-Class', 'Frei'),
(83, 'Insight', 'Frei'),
(84, 'S10', 'Frei'),
(85, 'Electra', 'Frei'),
(86, 'Thunderbird', 'Frei'),
(87, 'Optima', 'Frei'),
(88, 'B-Series Plus', 'Frei'),
(89, 'E-Series', 'Frei'),
(90, 'E-Series', 'Frei'),
(91, 'Sedona', 'Frei'),
(92, 'Yukon XL 2500', 'Frei'),
(93, 'Thunderbird', 'Frei'),
(94, 'Corvette', 'Frei'),
(95, '4Runner', 'Frei'),
(96, 'Concorde', 'Frei'),
(97, 'Accent', 'Frei'),
(98, 'Express 3500', 'Frei'),
(99, 'Expedition', 'Frei'),
(100, 'RAV4', 'Frei');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `client`
--

CREATE TABLE `client` (
                          `clientID` int(11) NOT NULL,
                          `name` varchar(255) DEFAULT NULL,
                          `email` varchar(255) DEFAULT NULL,
                          `phonenumber` varchar(255) DEFAULT NULL,
                          `membership` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `lending`
--

CREATE TABLE `lending` (
                           `lendingID` int(11) NOT NULL,
                           `client` int(11) NOT NULL,
                           `lendedBike` int(11) NOT NULL,
                           `lendingStartDate` date NOT NULL,
                           `lendingEndDate` date NOT NULL,
                           `LendDuration` int(11) DEFAULT NULL,
                           `Status` enum('Ausgehliehen','Frei') DEFAULT 'Frei'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `membership`
--

CREATE TABLE `membership` (
                              `membershipID` int(11) NOT NULL,
                              `membershipstatus` varchar(255) DEFAULT NULL,
                              `additionalLendingDays` int(11) NOT NULL,
                              `TotalLendingDays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `membership`
--

INSERT INTO `membership` (`membershipID`, `membershipstatus`, `additionalLendingDays`, `TotalLendingDays`) VALUES
(1, 'Keine', 0, 30),
(2, 'Bronze', 10, 40),
(3, 'Silber', 20, 50),
(4, 'Gold', 40, 70);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `bikes`
--
ALTER TABLE `bikes`
    ADD PRIMARY KEY (`BikeID`);

--
-- Indizes für die Tabelle `client`
--
ALTER TABLE `client`
    ADD PRIMARY KEY (`clientID`),
    ADD KEY `FK_Membership` (`membership`);

--
-- Indizes für die Tabelle `lending`
--
ALTER TABLE `lending`
    ADD PRIMARY KEY (`lendingID`),
    ADD KEY `FK_ClientLend` (`client`),
    ADD KEY `FK_LendedBike` (`lendedBike`),
    ADD KEY `FK_Lendeddays` (`LendDuration`);

--
-- Indizes für die Tabelle `membership`
--
ALTER TABLE `membership`
    ADD PRIMARY KEY (`membershipID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `client`
--
ALTER TABLE `client`
    MODIFY `clientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `client`
--
ALTER TABLE `client`
    ADD CONSTRAINT `FK_Membership` FOREIGN KEY (`membership`) REFERENCES `membership` (`membershipID`) ON UPDATE CASCADE;

--
-- Constraints der Tabelle `lending`
--
ALTER TABLE `lending`
    ADD CONSTRAINT `FK_ClientLend` FOREIGN KEY (`client`) REFERENCES `client` (`clientID`),
    ADD CONSTRAINT `FK_LendedBike` FOREIGN KEY (`lendedBike`) REFERENCES `bikes` (`BikeID`),
    ADD CONSTRAINT `FK_Lendeddays` FOREIGN KEY (`LendDuration`) REFERENCES `membership` (`membershipID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
