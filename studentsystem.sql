-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 07:22 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'mujakicx', '123123123');

-- --------------------------------------------------------

--
-- Table structure for table `asistenti`
--

CREATE TABLE `asistenti` (
  `userid` int(11) NOT NULL,
  `ime` text NOT NULL,
  `prezime` text NOT NULL,
  `adresa` text NOT NULL,
  `telefon` varchar(256) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `titula` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asistenti`
--

INSERT INTO `asistenti` (`userid`, `ime`, `prezime`, `adresa`, `telefon`, `email`, `password`, `titula`) VALUES
(3, 'Testno ime22', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(4, 'Testno ime', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(5, 'Testno ime', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(6, 'Testno ime', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(7, 'Testno ime', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(8, 'Testno ime', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(9, 'Testno ime', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(10, 'Testno ime', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(14, 'Testno ime', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(15, 'Testno ime', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(17, 'afsfasfasfa', 'asgsddsasd', 'Konatur bb, Travnik 282382', '4849318513', 'ethcaassadall@gmail.com', 'dsadas', 'Doktorr');

-- --------------------------------------------------------

--
-- Table structure for table `pomocno_osoblje`
--

CREATE TABLE `pomocno_osoblje` (
  `userid` int(11) NOT NULL,
  `ime` text NOT NULL,
  `prezime` text NOT NULL,
  `adresa` text NOT NULL,
  `telefon` varchar(256) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `titula` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pomocno_osoblje`
--

INSERT INTO `pomocno_osoblje` (`userid`, `ime`, `prezime`, `adresa`, `telefon`, `email`, `password`, `titula`) VALUES
(4, 'Testno ime', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(5, 'Testno ime', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(6, 'Testno ime', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(7, 'Testno ime', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(9, 'Testno ime', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(17, 'Ahmed', 'fasafsfs', '51251252sdsadas', '4849318513', 'ethcall@gmail.com', '52151251', 'fasfasfasafs');

-- --------------------------------------------------------

--
-- Table structure for table `profesori`
--

CREATE TABLE `profesori` (
  `userid` int(11) NOT NULL,
  `ime` text NOT NULL,
  `prezime` text NOT NULL,
  `adresa` text NOT NULL,
  `telefon` varchar(256) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `titula` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profesori`
--

INSERT INTO `profesori` (`userid`, `ime`, `prezime`, `adresa`, `telefon`, `email`, `password`, `titula`) VALUES
(35, 'Testno 22', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(36, 'Testno ime', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(37, 'Testno ime', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(42, 'Testno ime', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(43, 'Testno ime', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(44, 'Testno ime', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(45, 'Testno ime', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(46, 'Testno ime', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(47, 'Testno ime', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula'),
(48, 'Testno ime', 'Testno prezime', 'Testna adresa', '52015021', 'TESTNI EMAIL', 'TestnI PW', 'Testna titula');

-- --------------------------------------------------------

--
-- Table structure for table `studenti`
--

CREATE TABLE `studenti` (
  `userid` int(11) NOT NULL,
  `ime` text NOT NULL,
  `prezime` text NOT NULL,
  `ime_roditelja` text NOT NULL,
  `adresa` text NOT NULL,
  `telefon` varchar(256) NOT NULL,
  `jmbg` varchar(256) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `fakultet` text NOT NULL,
  `odsjek` text NOT NULL,
  `broj_indeksa` varchar(256) NOT NULL,
  `studijskiProgram` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studenti`
--

INSERT INTO `studenti` (`userid`, `ime`, `prezime`, `ime_roditelja`, `adresa`, `telefon`, `jmbg`, `email`, `password`, `fakultet`, `odsjek`, `broj_indeksa`, `studijskiProgram`) VALUES
(12, '2142141241', 'Student', 'Stule', 'Konatur bb, Travnik 282382', '2147483647', '2145155151', 'live@gmail.com', '21551512', 'Testni Fax', 'Testni odsjek', '', '0'),
(16, 'Testni', 'Maros', 'Stule', 'Konatur bb, Travnik 282382', '2147483647', '532434', 'ethcall@gmail.com', '123123123', 'FIT', 'sdfaafdsfdsa', 'fasdas', '0'),
(19, 'Testni', 'Student', 'Stule', 'Konatur bb, Travnik 282382', '4849318513', '515215251', 'ethc2312all@gmail.com', '21124124', 'Testni Fax', 'Asdadad', 'f', '0'),
(22, 'Testni', 'Student', 'Stule', 'Bugojno', '4849318513', '52151521', 'et23133131313@gmail.com', '521521512', 'Testni Fax', 'Asdadad', 'gasf', '0'),
(23, 'Testni', 'Studentd', 'Stule', 'Stavanger', '4849318513', '52151251', 'ethcall213123@gmail.com1231', '51251251', 'Testni Fax', 'sdfaafdsfdsa', 'gasf', '0'),
(25, 'Testni', 'Studentd', 'Stule', 'Konatur bb, Travnik 282382', '4849318513', '512512512521', 'ethcall@gmail.com', '5215215', 'Testni Fax', '123', 'gasf', '0'),
(27, 'Testni', 'Student', 'Stule', 'Konatur bb, Travnik 282382', '4849318513', '5125512521', 'ethcall@gmail.com', '52151', 'Testni Fax', 'sdfaafdsfdsa', 'gasf', '0'),
(28, 'RADDDDD', 'Student', 'Ahmo', 'Konatur bb, Travnik 282382', '4849318513', '25151521', 'ethcall@gmail.com', '215152', 'Testni Fax', '123', 'gasf', '0'),
(29, 'RADDDDD', 'Student', 'Ahmo', 'Konatur bb, Travnik 282382', '4849318513', '25151521', 'ethcall@gmail.com', '215152', 'Testni Fax', '123', 'gasf', '0'),
(30, 'Testni', 'Student', 'Stule', 'Bugojno', '4849318513', '2512512521', 'ethca1231231ll@gmail.com', '25125', '535123', 'InfoTeh', 'f', '0'),
(31, 'Testni', 'Student', 'Stule', 'Konatur bb, Travnik 282382', '4849318513', '25152155152', 'ethcall123@gmail.com', '5215125', 'Testni Fax', 'InfoTeh', 'fasdfsad', '0'),
(38, 'Testni', 'Student', 'Stule', 'Konatur bb, Travnik 282382', '51521', '521521', 'ethcaldsal@gmail.com', '21551512', 'Ekonomski fakultet', 'Menadžment u obrazovanju', 'FIT', '4'),
(39, 'Testni', 'Student', 'saffsafsa', 'Bugojno', '251521251', '5215251512522', 'ethcadsadasdll@gmail.com', '21551512', 'Ekološki fakultet', 'Inžinjerstvo zaštite životne sredine', 'FIT-10(1293', '3+2+3'),
(40, 'Testni', 'Student', 'saffsafsa', 'Bugojno', '251521251', '5215251512522', 'ethcadsadasdll@gmail.com', '21551512', 'Ekološki fakultet', 'Inžinjerstvo zaštite životne sredine', 'FIT-10(1293', '3+2+3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `asistenti`
--
ALTER TABLE `asistenti`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `asistenti_userid_uindex` (`userid`);

--
-- Indexes for table `pomocno_osoblje`
--
ALTER TABLE `pomocno_osoblje`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `pomocno_osoblje_userid_uindex` (`userid`);

--
-- Indexes for table `profesori`
--
ALTER TABLE `profesori`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `studentsystem_id_uindex` (`userid`);

--
-- Indexes for table `studenti`
--
ALTER TABLE `studenti`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `studentsystem_id_uindex` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `asistenti`
--
ALTER TABLE `asistenti`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pomocno_osoblje`
--
ALTER TABLE `pomocno_osoblje`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `profesori`
--
ALTER TABLE `profesori`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `studenti`
--
ALTER TABLE `studenti`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
