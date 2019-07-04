-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2019 at 10:36 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebank_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `jmbg` varchar(13) NOT NULL,
  `ime` varchar(30) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `telefon` varchar(20) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `datum_prijave` date NOT NULL,
  `poslednji_log_in` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `jmbg`, `ime`, `prezime`, `telefon`, `email`, `datum_prijave`, `poslednji_log_in`) VALUES
(1, '1201992190034', 'Milorad', 'Petrovic', '064123324', 'milorad@gmail.com', '2019-03-03', '2019-07-04');

-- --------------------------------------------------------

--
-- Table structure for table `kurs`
--

CREATE TABLE `kurs` (
  `id` int(11) NOT NULL,
  `id_valute` int(11) NOT NULL,
  `datum` date NOT NULL,
  `iznos` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurs`
--

INSERT INTO `kurs` (`id`, `id_valute`, `datum`, `iznos`) VALUES
(1, 1, '2019-07-04', '1.00'),
(2, 2, '2019-07-04', '118.50'),
(3, 3, '2019-07-04', '104.50'),
(4, 4, '2019-07-04', '90.43');

-- --------------------------------------------------------

--
-- Table structure for table `racun`
--

CREATE TABLE `racun` (
  `id` int(11) NOT NULL,
  `korisnicki_id` int(11) NOT NULL,
  `tip_racuna` int(11) NOT NULL,
  `valuta_racuna` int(11) NOT NULL,
  `datum_kreacije` date NOT NULL,
  `broj_racuna` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `racun`
--

INSERT INTO `racun` (`id`, `korisnicki_id`, `tip_racuna`, `valuta_racuna`, `datum_kreacije`, `broj_racuna`) VALUES
(1, 1, 1, 1, '2019-03-20', '205-12345-67'),
(2, 1, 2, 2, '2019-05-01', '170-123533-89');

-- --------------------------------------------------------

--
-- Table structure for table `tip_racuna`
--

CREATE TABLE `tip_racuna` (
  `id` int(11) NOT NULL,
  `opis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tip_racuna`
--

INSERT INTO `tip_racuna` (`id`, `opis`) VALUES
(1, 'Dinarski'),
(2, 'Devizni');

-- --------------------------------------------------------

--
-- Table structure for table `tip_transakcije`
--

CREATE TABLE `tip_transakcije` (
  `id` int(11) NOT NULL,
  `opis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tip_transakcije`
--

INSERT INTO `tip_transakcije` (`id`, `opis`) VALUES
(1, 'Odliv - isplata'),
(2, 'Priliv - uplata'),
(3, 'Odliv - prenos'),
(4, 'Priliv - prenos');

-- --------------------------------------------------------

--
-- Table structure for table `transakcije`
--

CREATE TABLE `transakcije` (
  `id` int(11) NOT NULL,
  `id_racuna` int(11) NOT NULL,
  `iznos_transakcije` decimal(10,2) NOT NULL,
  `opis` varchar(100) NOT NULL,
  `tip_transakcije` int(11) NOT NULL,
  `datum_transakcije` date NOT NULL,
  `id_racuna_prenos` int(11) DEFAULT NULL,
  `vrednost_u_valuti_prenosa` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transakcije`
--

INSERT INTO `transakcije` (`id`, `id_racuna`, `iznos_transakcije`, `opis`, `tip_transakcije`, `datum_transakcije`, `id_racuna_prenos`, `vrednost_u_valuti_prenosa`) VALUES
(1, 1, '10000.00', 'gigatron', 1, '2019-05-17', NULL, NULL),
(2, 2, '42.00', 'interni prenos', 3, '2019-06-12', 1, '5000.00'),
(3, 2, '100.00', 'interni prenos', 3, '2019-06-18', 1, '11850.00'),
(4, 2, '10000.00', 'Priliv iz ino', 2, '2019-05-13', NULL, NULL),
(7, 2, '100.00', 'interni prenos', 3, '2019-07-04', 1, '11850.00'),
(9, 1, '11850.00', 'interni prenos', 3, '2019-07-04', 2, '100.00');

-- --------------------------------------------------------

--
-- Table structure for table `valuta`
--

CREATE TABLE `valuta` (
  `id` int(11) NOT NULL,
  `opis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `valuta`
--

INSERT INTO `valuta` (`id`, `opis`) VALUES
(1, 'DIN'),
(2, 'EUR'),
(3, 'USD'),
(4, 'CHF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurs`
--
ALTER TABLE `kurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Val` (`id_valute`);

--
-- Indexes for table `racun`
--
ALTER TABLE `racun`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_racun_korisnik` (`korisnicki_id`),
  ADD KEY `fk_racun_valuta` (`valuta_racuna`),
  ADD KEY `fk_racun_tip_racuna` (`tip_racuna`);

--
-- Indexes for table `tip_racuna`
--
ALTER TABLE `tip_racuna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tip_transakcije`
--
ALTER TABLE `tip_transakcije`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transakcije`
--
ALTER TABLE `transakcije`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tran_id_racuna` (`id_racuna`),
  ADD KEY `fk_tran_id_racuna_prenos` (`id_racuna_prenos`),
  ADD KEY `fk_tip_transakcije` (`tip_transakcije`);

--
-- Indexes for table `valuta`
--
ALTER TABLE `valuta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kurs`
--
ALTER TABLE `kurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `racun`
--
ALTER TABLE `racun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transakcije`
--
ALTER TABLE `transakcije`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kurs`
--
ALTER TABLE `kurs`
  ADD CONSTRAINT `FK_Val` FOREIGN KEY (`id_valute`) REFERENCES `valuta` (`id`);

--
-- Constraints for table `racun`
--
ALTER TABLE `racun`
  ADD CONSTRAINT `fk_racun_korisnik` FOREIGN KEY (`korisnicki_id`) REFERENCES `korisnik` (`id`),
  ADD CONSTRAINT `fk_racun_tip_racuna` FOREIGN KEY (`tip_racuna`) REFERENCES `tip_racuna` (`id`),
  ADD CONSTRAINT `fk_racun_valuta` FOREIGN KEY (`valuta_racuna`) REFERENCES `valuta` (`id`);

--
-- Constraints for table `transakcije`
--
ALTER TABLE `transakcije`
  ADD CONSTRAINT `fk_tip_transakcije` FOREIGN KEY (`tip_transakcije`) REFERENCES `tip_transakcije` (`id`),
  ADD CONSTRAINT `fk_tran_id_racuna` FOREIGN KEY (`id_racuna`) REFERENCES `racun` (`id`),
  ADD CONSTRAINT `fk_tran_id_racuna_prenos` FOREIGN KEY (`id_racuna_prenos`) REFERENCES `racun` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
