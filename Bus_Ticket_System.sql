-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 20, 2021 at 09:36 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Bus_Ticket_System`
--

-- --------------------------------------------------------

--
-- Table structure for table `a`
--

CREATE TABLE `a` (
  `aa` varchar(23) DEFAULT NULL,
  `dd` varchar(24) DEFAULT NULL,
  `SideNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `a`
--

INSERT INTO `a` (`aa`, `dd`, `SideNo`) VALUES
('aa', 'bb', '1'),
('aa', 'bb', '2'),
('cc', 'cc', '3');

-- --------------------------------------------------------

--
-- Table structure for table `AccidentTable`
--

CREATE TABLE `AccidentTable` (
  `UserName` varchar(100) DEFAULT NULL,
  `BusName` varchar(100) DEFAULT NULL,
  `PaleteeNo` varchar(100) DEFAULT NULL,
  `Place` varchar(100) DEFAULT NULL,
  `AccidentType` varchar(100) DEFAULT NULL,
  `PhoneNo` varchar(100) DEFAULT NULL,
  `Date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `AccidentTable`
--

INSERT INTO `AccidentTable` (`UserName`, `BusName`, `PaleteeNo`, `Place`, `AccidentType`, `PhoneNo`, `Date`) VALUES
('', '', '', '', '', '', ''),
('jkhjk', 'kjkh', '65432', 'ytytuy', 'uyuy', '', '2021/05/27 06:00'),
('hjkhk', 'kjhjk', '78978', 'jhjkhjkh', 'yuiy', '090909', '2021/05/27 07:00'),
('sjdhjkas', 'sjdhk', '12345', 'djkdfa', 'adjksfh', '0934567890', '2021/05/27 07:00'),
('kjhjk', 'ljhkh', '76543', 'jkhkh', 'jjhg', '0989080986', '2021/05/27 06:00'),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('adom60adfc6ab0025', 'adis', '76197', 'jhgjh', 'jhg', '0902148627', '2021/05/27 20:00'),
('hiluf60ae008ac9e6c', 'aaa', '20847', 'fgfuijefsjk', 'crac', '0902148626', '2021/05/10 13:52');

-- --------------------------------------------------------

--
-- Table structure for table `AccountDriver`
--

CREATE TABLE `AccountDriver` (
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `AccountDriver`
--

INSERT INTO `AccountDriver` (`UserName`, `Password`) VALUES
('hiluf60b6942a1375e', 'd41d8cd98f00b204e9800998ecf8427e'),
('vvvvvvvvvvvvvvvvvv60cec15b940da', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `AccountPassenger`
--

CREATE TABLE `AccountPassenger` (
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `AccountPassenger`
--

INSERT INTO `AccountPassenger` (`UserName`, `Password`) VALUES
('hiluf60b73b53e89fd', '92c4c08586891839bb8b46531f1e13e6'),
('melso60b75d2152b83', '30461d6a23d07d68d0e77a1959592dad'),
('asnake60dc13ec55dc5', 'e5f77352cf31f7a35074006a446fb188'),
('hiluf60f2c81c86597', '7620cd595132053f172ddb5a01c76f39'),
('nnnn60f2cca91b256', '92f20f82069a53ba3a47991099461aa0');

-- --------------------------------------------------------

--
-- Table structure for table `AddBuss`
--

CREATE TABLE `AddBuss` (
  `SideNo` varchar(100) NOT NULL,
  `BusName` varchar(100) DEFAULT NULL,
  `SeatNo` varchar(100) DEFAULT NULL,
  `PaleteeNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `AddBuss`
--

INSERT INTO `AddBuss` (`SideNo`, `BusName`, `SeatNo`, `PaleteeNo`) VALUES
('6154', 'selambus', '80', '85089');

-- --------------------------------------------------------

--
-- Table structure for table `AdminAccount`
--

CREATE TABLE `AdminAccount` (
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `AdminAccount`
--

INSERT INTO `AdminAccount` (`UserName`, `Password`) VALUES
('amare', 'hiluf');

-- --------------------------------------------------------

--
-- Table structure for table `AdminBirr`
--

CREATE TABLE `AdminBirr` (
  `UserName` varchar(100) DEFAULT NULL,
  `Birr` varchar(100) DEFAULT NULL,
  `AccountNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `AdminBirr`
--

INSERT INTO `AdminBirr` (`UserName`, `Birr`, `AccountNo`) VALUES
('amare', '3264', '1000224299722');

-- --------------------------------------------------------

--
-- Table structure for table `AdminTable`
--

CREATE TABLE `AdminTable` (
  `UserName` varchar(100) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `Age` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `PhoneNo` varchar(100) NOT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `AdminTable`
--

INSERT INTO `AdminTable` (`UserName`, `FullName`, `Age`, `Email`, `PhoneNo`, `Address`, `Gender`) VALUES
('amare', 'hiluf', '20', 'meressahiluf', '909090', 'alamata', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `BirrDriver`
--

CREATE TABLE `BirrDriver` (
  `UserName` varchar(100) DEFAULT NULL,
  `Birr` varchar(100) DEFAULT NULL,
  `AccountNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `BirrDriver`
--

INSERT INTO `BirrDriver` (`UserName`, `Birr`, `AccountNo`) VALUES
('hiluf60b6942a1375e', '0', '1000540365600'),
('vvvvvvvvvvvvvvvvvv60cec15b940da', '0', '1000742145040');

-- --------------------------------------------------------

--
-- Table structure for table `BirrPassenger`
--

CREATE TABLE `BirrPassenger` (
  `UserName` varchar(100) DEFAULT NULL,
  `Birr` varchar(100) DEFAULT NULL,
  `AccountNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `BirrPassenger`
--

INSERT INTO `BirrPassenger` (`UserName`, `Birr`, `AccountNo`) VALUES
('hiluf60b73b53e89fd', '800', '1000427988554'),
('melso60b75d2152b83', '767', '1000532855054'),
('asnake60dc13ec55dc5', '10000', '1000831274830'),
('hiluf60f2c81c86597', '10000', '1000245486267'),
('nnnn60f2cca91b256', '9000', '1000261084953');

-- --------------------------------------------------------

--
-- Table structure for table `BookedSeat`
--

CREATE TABLE `BookedSeat` (
  `SideNo` varchar(100) DEFAULT NULL,
  `SeatNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Booking`
--

CREATE TABLE `Booking` (
  `UserName` varchar(100) DEFAULT NULL,
  `Started` varchar(100) DEFAULT NULL,
  `Destination` varchar(100) DEFAULT NULL,
  `SeatNo` varchar(100) DEFAULT NULL,
  `SideNo` varchar(100) DEFAULT NULL,
  `Price` varchar(100) NOT NULL,
  `AccountNo` varchar(100) NOT NULL,
  `Date` varchar(100) DEFAULT NULL,
  `Phone` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Booking`
--

INSERT INTO `Booking` (`UserName`, `Started`, `Destination`, `SeatNo`, `SideNo`, `Price`, `AccountNo`, `Date`, `Phone`) VALUES
('hiluf60b73b53e89fd', 'adis', 'kolegna', '3', '1937', '100', '290', '2021/06/02 08:00', '0977771234'),
('hiluf60b73b53e89fd', 'adis', 'kolegna', '3', '1937', '100', '290', '2021/06/02 08:00', '0912121212');

-- --------------------------------------------------------

--
-- Table structure for table `DriverTable`
--

CREATE TABLE `DriverTable` (
  `UserName` varchar(100) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `Age` varchar(100) DEFAULT NULL,
  `Sex` varchar(100) DEFAULT NULL,
  `PhoneNo` varchar(100) NOT NULL,
  `Address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `DriverTable`
--

INSERT INTO `DriverTable` (`UserName`, `FullName`, `Age`, `Sex`, `PhoneNo`, `Address`) VALUES
('hiluf60b6942a1375e', 'hiluf', '34', 'Female', '0902148627', 'alamata'),
('vvvvvvvvvvvvvvvvvv60cec15b940da', 'vvvvvvvvvvvvvvvvvv', '98', 'Female', '0902148621', 'jjj');

-- --------------------------------------------------------

--
-- Table structure for table `Notification`
--

CREATE TABLE `Notification` (
  `UserName` varchar(100) DEFAULT NULL,
  `id` varchar(100) DEFAULT NULL,
  `Subject` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `PassnegerTable`
--

CREATE TABLE `PassnegerTable` (
  `UserName` varchar(100) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `PhoneNo` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Age` varchar(100) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PassnegerTable`
--

INSERT INTO `PassnegerTable` (`UserName`, `FullName`, `PhoneNo`, `Address`, `Age`, `Gender`) VALUES
('asnake60dc13ec55dc5', 'asnake', '0909099898', 'gojjam', '12', 'Female'),
('hiluf60b73b53e89fd', 'hiluf', '0909900909', 'alamate', '87', 'Female'),
('hiluf60f2c81c86597', 'hiluf', '0919189060', 'alamata', '24', 'Male'),
('melso60b75d2152b83', 'melso', '0989898989', 'nnnnn', '76', 'Female'),
('nnnn60f2cca91b256', 'nnnn', '0909909099', 'nnnnn', '87', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `RouteDetail`
--

CREATE TABLE `RouteDetail` (
  `SideNo` varchar(100) DEFAULT NULL,
  `Start` varchar(100) DEFAULT NULL,
  `Destination` varchar(100) DEFAULT NULL,
  `DepPrice` varchar(100) DEFAULT NULL,
  `ArrivalTime` varchar(100) DEFAULT NULL,
  `Distance` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `RouteDetail`
--

INSERT INTO `RouteDetail` (`SideNo`, `Start`, `Destination`, `DepPrice`, `ArrivalTime`, `Distance`) VALUES
('6154', 'aaa', 'bbb', '200', '2021-07-31', '50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AccountDriver`
--
ALTER TABLE `AccountDriver`
  ADD KEY `UserName` (`UserName`);

--
-- Indexes for table `AccountPassenger`
--
ALTER TABLE `AccountPassenger`
  ADD KEY `UserName` (`UserName`);

--
-- Indexes for table `AddBuss`
--
ALTER TABLE `AddBuss`
  ADD PRIMARY KEY (`SideNo`),
  ADD UNIQUE KEY `BusName` (`BusName`),
  ADD UNIQUE KEY `SeatNo` (`SeatNo`),
  ADD UNIQUE KEY `PaleteeNo` (`PaleteeNo`);

--
-- Indexes for table `AdminAccount`
--
ALTER TABLE `AdminAccount`
  ADD KEY `UserName` (`UserName`);

--
-- Indexes for table `AdminBirr`
--
ALTER TABLE `AdminBirr`
  ADD UNIQUE KEY `AccountNo` (`AccountNo`),
  ADD KEY `UserName` (`UserName`);

--
-- Indexes for table `AdminTable`
--
ALTER TABLE `AdminTable`
  ADD PRIMARY KEY (`UserName`),
  ADD UNIQUE KEY `PhoneNo` (`PhoneNo`);

--
-- Indexes for table `BirrDriver`
--
ALTER TABLE `BirrDriver`
  ADD KEY `UserName` (`UserName`);

--
-- Indexes for table `BirrPassenger`
--
ALTER TABLE `BirrPassenger`
  ADD KEY `UserName` (`UserName`);

--
-- Indexes for table `BookedSeat`
--
ALTER TABLE `BookedSeat`
  ADD KEY `SideNo` (`SideNo`);

--
-- Indexes for table `Booking`
--
ALTER TABLE `Booking`
  ADD UNIQUE KEY `Phone` (`Phone`),
  ADD KEY `UserName` (`UserName`);

--
-- Indexes for table `DriverTable`
--
ALTER TABLE `DriverTable`
  ADD PRIMARY KEY (`UserName`),
  ADD UNIQUE KEY `PhoneNo` (`PhoneNo`);

--
-- Indexes for table `Notification`
--
ALTER TABLE `Notification`
  ADD KEY `UserName` (`UserName`);

--
-- Indexes for table `PassnegerTable`
--
ALTER TABLE `PassnegerTable`
  ADD PRIMARY KEY (`UserName`),
  ADD UNIQUE KEY `PhoneNo` (`PhoneNo`);

--
-- Indexes for table `RouteDetail`
--
ALTER TABLE `RouteDetail`
  ADD KEY `SideNo` (`SideNo`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `AccountDriver`
--
ALTER TABLE `AccountDriver`
  ADD CONSTRAINT `AccountDriver_ibfk_1` FOREIGN KEY (`UserName`) REFERENCES `DriverTable` (`UserName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `AccountPassenger`
--
ALTER TABLE `AccountPassenger`
  ADD CONSTRAINT `AccountPassenger_ibfk_1` FOREIGN KEY (`UserName`) REFERENCES `PassnegerTable` (`UserName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `AdminAccount`
--
ALTER TABLE `AdminAccount`
  ADD CONSTRAINT `AdminAccount_ibfk_1` FOREIGN KEY (`UserName`) REFERENCES `AdminTable` (`UserName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `AdminBirr`
--
ALTER TABLE `AdminBirr`
  ADD CONSTRAINT `AdminBirr_ibfk_1` FOREIGN KEY (`UserName`) REFERENCES `AdminTable` (`UserName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `BirrDriver`
--
ALTER TABLE `BirrDriver`
  ADD CONSTRAINT `BirrDriver_ibfk_1` FOREIGN KEY (`UserName`) REFERENCES `DriverTable` (`UserName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `BirrPassenger`
--
ALTER TABLE `BirrPassenger`
  ADD CONSTRAINT `BirrPassenger_ibfk_1` FOREIGN KEY (`UserName`) REFERENCES `PassnegerTable` (`UserName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `BookedSeat`
--
ALTER TABLE `BookedSeat`
  ADD CONSTRAINT `BookedSeat_ibfk_1` FOREIGN KEY (`SideNo`) REFERENCES `AddBuss` (`SideNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Booking`
--
ALTER TABLE `Booking`
  ADD CONSTRAINT `Booking_ibfk_1` FOREIGN KEY (`UserName`) REFERENCES `PassnegerTable` (`UserName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Notification`
--
ALTER TABLE `Notification`
  ADD CONSTRAINT `Notification_ibfk_1` FOREIGN KEY (`UserName`) REFERENCES `AdminTable` (`UserName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `RouteDetail`
--
ALTER TABLE `RouteDetail`
  ADD CONSTRAINT `RouteDetail_ibfk_1` FOREIGN KEY (`SideNo`) REFERENCES `AddBuss` (`SideNo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
