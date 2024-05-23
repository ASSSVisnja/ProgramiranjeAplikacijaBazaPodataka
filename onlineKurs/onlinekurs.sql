-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 05:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinekurs`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(255) NOT NULL,
  `ime` text NOT NULL,
  `prezime` text NOT NULL,
  `email` text NOT NULL,
  `sifra` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `ime`, `prezime`, `email`, `sifra`) VALUES
(0, 'a', 'a', 'a@gmail.com', '0cc175b9c0f1b6a831c399e269772661'),
(0, '3', '3', '3@gmail.com', 'eccbc87e4b5ce2fe28308fd9f2a7baf3'),
(0, 'Visnja', 'Maksimovic', 'visnjamaksimovic@gmail.com', '43b6125a374ff61b65922430a17ca410');

-- --------------------------------------------------------

--
-- Table structure for table `kursevi`
--

CREATE TABLE `kursevi` (
  `KursID` int(11) NOT NULL,
  `Naziv` varchar(255) DEFAULT NULL,
  `Opis` text DEFAULT NULL,
  `Trajanje` int(11) DEFAULT NULL,
  `Cena` int(11) DEFAULT NULL,
  `PredavacID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kursevi`
--

INSERT INTO `kursevi` (`KursID`, `Naziv`, `Opis`, `Trajanje`, `Cena`, `PredavacID`) VALUES
(1, 'Engleski', 'Kurs Engleskog jezika', 12, 2000, 1),
(2, 'PHP Programiranje', 'PHP je popularan skriptni jezik koji se često koristi za izradu dinamičkih web stranica i web aplikacija.', 48, 5000, 2),
(3, 'Pevanje', 'Kurs pevanja pruža polaznicima priliku da razviju svoj glas, tehniku i muzičko razumevanje kroz strukturirane vežbe, pesme i individualnu podršku instruktora.', 24, 3000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `materijali`
--

CREATE TABLE `materijali` (
  `MaterijalID` int(11) NOT NULL,
  `Naziv` varchar(255) DEFAULT NULL,
  `KursID` int(11) DEFAULT NULL,
  `PredavacID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materijali`
--

INSERT INTO `materijali` (`MaterijalID`, `Naziv`, `KursID`, `PredavacID`) VALUES
(1, 'Video Materijal', 1, 1),
(2, 'Video i PDF Materijal', 2, 2),
(3, 'Video materijal, predavanje', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `polaznici`
--

CREATE TABLE `polaznici` (
  `PolaznikID` int(11) NOT NULL,
  `Ime` varchar(50) DEFAULT NULL,
  `Prezime` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `KursID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `polaznici`
--

INSERT INTO `polaznici` (`PolaznikID`, `Ime`, `Prezime`, `Email`, `KursID`) VALUES
(1, 'Nikola', 'Nikolic', 'DzoniMakaroni@gmail.com', 1),
(3, 'Milos', 'Milakovic', 'milosM@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `predavaci`
--

CREATE TABLE `predavaci` (
  `PredavacID` int(11) NOT NULL,
  `Ime` varchar(50) DEFAULT NULL,
  `Prezime` varchar(50) DEFAULT NULL,
  `Kontakt` varchar(100) DEFAULT NULL,
  `Email` text NOT NULL,
  `Slika` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `predavaci`
--

INSERT INTO `predavaci` (`PredavacID`, `Ime`, `Prezime`, `Kontakt`, `Email`, `Slika`) VALUES
(1, 'Dragan', 'Nikolic', '0637856321', 'dragan97@gmail.com', '1.jpg'),
(2, 'Lazar', 'Mihajlovic', '0628769021', 'Mihajlovic33@gmail.com', '2.jpg'),
(3, 'Jelena', 'Petrovic', '0605553330', 'Jeca@gmail.com', '3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kursevi`
--
ALTER TABLE `kursevi`
  ADD PRIMARY KEY (`KursID`);

--
-- Indexes for table `materijali`
--
ALTER TABLE `materijali`
  ADD PRIMARY KEY (`MaterijalID`),
  ADD KEY `KursID` (`KursID`);

--
-- Indexes for table `polaznici`
--
ALTER TABLE `polaznici`
  ADD PRIMARY KEY (`PolaznikID`);

--
-- Indexes for table `predavaci`
--
ALTER TABLE `predavaci`
  ADD PRIMARY KEY (`PredavacID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kursevi`
--
ALTER TABLE `kursevi`
  MODIFY `KursID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `materijali`
--
ALTER TABLE `materijali`
  MODIFY `MaterijalID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `polaznici`
--
ALTER TABLE `polaznici`
  MODIFY `PolaznikID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `predavaci`
--
ALTER TABLE `predavaci`
  MODIFY `PredavacID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `materijali`
--
ALTER TABLE `materijali`
  ADD CONSTRAINT `materijali_ibfk_1` FOREIGN KEY (`KursID`) REFERENCES `kursevi` (`KursID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
