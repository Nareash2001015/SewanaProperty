-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2021 at 05:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewana_property_renters`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertise`
--

CREATE TABLE `advertise` (
  `Newspaper_ID` varchar(6) NOT NULL,
  `Property_no` varchar(6) NOT NULL,
  `Advertise_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertise`
--

INSERT INTO `advertise` (`Newspaper_ID`, `Property_no`, `Advertise_date`) VALUES
('NP_01', 'PR_01', '2021-09-01'),
('NP_02', 'PR_02', '2021-09-23'),
('NP_03', 'PR_03', '2021-09-10'),
('NP_04', 'PR_04', '2021-09-17'),
('NP_05', 'PR_05', '2021-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `assistant`
--

CREATE TABLE `assistant` (
  `Emp_ID` varchar(6) NOT NULL,
  `Supervisor_ID` varchar(6) NOT NULL,
  `Appoint_date` date NOT NULL,
  `Emp_start_date` date NOT NULL,
  `Staff_type` varchar(20) NOT NULL,
  `Emp_DOB` date NOT NULL,
  `Emp_NIC` varchar(12) NOT NULL,
  `Emp_Name` varchar(20) NOT NULL,
  `Emp_salary` int(11) NOT NULL,
  `Emp_Gender` varchar(6) NOT NULL,
  `Emp_contact_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assistant`
--

INSERT INTO `assistant` (`Emp_ID`, `Supervisor_ID`, `Appoint_date`, `Emp_start_date`, `Staff_type`, `Emp_DOB`, `Emp_NIC`, `Emp_Name`, `Emp_salary`, `Emp_Gender`, `Emp_contact_no`) VALUES
('EM_16', 'EM_01', '2021-09-27', '2020-12-01', 'Manager', '2000-08-01', '2002111', 'Dilan', 50000, 'Male', 781111111),
('EM_17', 'EM_02', '2021-10-08', '2021-08-01', 'Supervisor', '1997-12-12', '2002222', 'Shan', 45000, 'Female', 782222222),
('EM_18', 'EM_03', '2021-09-07', '2021-03-07', 'Lawyer', '2000-01-03', '2002333', 'Dinuka', 60000, 'Male', 783333333),
('EM_19', 'EM_04', '2021-09-01', '2020-06-07', 'Manager', '2000-07-12', '2002444', 'Nilu', 50000, 'Female', 784444444),
('EM_20', 'EM_05', '2021-09-01', '2021-04-12', 'Designer', '2001-02-01', '2000555', 'Ahamad', 65000, 'Male', 785555555);

-- --------------------------------------------------------

--
-- Stand-in structure for view `assistants`
-- (See below for the actual view)
--
CREATE TABLE `assistants` (
`Emp_ID` varchar(6)
,`Emp_Name` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `Branch_no` varchar(6) NOT NULL,
  `Manager_ID` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`Branch_no`, `Manager_ID`) VALUES
('BR01', 'EM_11'),
('BR02', 'EM_12'),
('BR03', 'EM_13'),
('BR04', 'EM_14'),
('BR05', 'EM_15');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `Client_no` varchar(6) NOT NULL,
  `Client_email` text NOT NULL,
  `Client_NIC` varchar(12) NOT NULL,
  `Client_full_name` text NOT NULL,
  `Emp_ID` varchar(6) NOT NULL,
  `Branch_no` varchar(6) NOT NULL,
  `Registered_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Client_no`, `Client_email`, `Client_NIC`, `Client_full_name`, `Emp_ID`, `Branch_no`, `Registered_date`) VALUES
('CL_01', 'abc@gmail.com', 'CL_01', 'John Kay', 'EM_06', 'BR01', '2021-09-01'),
('CL_02', 'abd@gmail.com', 'CL_02', 'Mike Richie', 'EM_07', 'BR03', '2021-09-02'),
('CL_03', 'abe@gmail.com', 'CL_03', 'Mary Sanaya', 'EM_08', 'BR03', '2021-09-03'),
('CL_04', 'abf@gmail.com', 'CL_04', 'Rizi Perera', 'EM_09', 'BR04', '2021-09-04'),
('CL_05', 'abg@gmail.com', 'CL_05', 'Nisaf Mohomad ', 'EM_10', 'BR05', '2021-09-05');

-- --------------------------------------------------------

--
-- Stand-in structure for view `clients`
-- (See below for the actual view)
--
CREATE TABLE `clients` (
`Client_no` varchar(6)
,`Client_full_name` text
);

-- --------------------------------------------------------

--
-- Table structure for table `client_property_req`
--

CREATE TABLE `client_property_req` (
  `Client_no` varchar(6) NOT NULL,
  `Requirement_no` varchar(6) NOT NULL,
  `Requirement_type` varchar(20) NOT NULL,
  `Area_willing_to_rent` varchar(20) NOT NULL,
  `Max_rent` int(10) NOT NULL,
  `Property_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_property_req`
--

INSERT INTO `client_property_req` (`Client_no`, `Requirement_no`, `Requirement_type`, `Area_willing_to_rent`, `Max_rent`, `Property_type`) VALUES
('CL_01', 'RE_01', 'Rent', 'Colombo', 5000, 'Annex'),
('CL_02', 'RE_02', 'Rent', 'Negombo', 2000, 'Annex'),
('CL_03', 'RE_03', 'sale', 'Gampaha', 3000, 'Flat'),
('CL_03', 'RE_04', 'Rent', 'Colombo', 4000, 'Rent house'),
('CL_05', 'RE_05', 'sale', 'Gampaha', 2000, 'Flat');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Company_ID` varchar(6) NOT NULL,
  `Company_contact_no` int(10) NOT NULL,
  `Company_email` varchar(20) NOT NULL,
  `Company_name` varchar(20) NOT NULL,
  `Company_address` varchar(50) NOT NULL,
  `Owner_ID` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Company_ID`, `Company_contact_no`, `Company_email`, `Company_name`, `Company_address`, `Owner_ID`) VALUES
('CM_01', 411111111, 'company1@gmail.com', 'company_1', 'No122, Negombo.', 'OW_01'),
('CM_02', 412222222, 'company2@gmail.com', 'company_2', 'No133, Negombo.', 'OW_02'),
('CM_03', 413333333, 'company3@gmail.com', 'company_3', 'No144, Negombo.', 'OW_03'),
('CM_04', 414444444, 'company4@gmail.com', 'company_4', 'No155, Negombo.', 'OW_04'),
('CM_05', 415555555, 'company5@gmail.com', 'company_5', 'No166, Negombo.', 'OW_05');

-- --------------------------------------------------------

--
-- Table structure for table `lease`
--

CREATE TABLE `lease` (
  `property_no` varchar(6) NOT NULL,
  `Client_no` varchar(6) NOT NULL,
  `Payment_method` varchar(20) NOT NULL,
  `Rent_start_date` date NOT NULL,
  `Rent_finish_date` date NOT NULL,
  `Monthly_rent` int(10) NOT NULL,
  `Duration` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lease`
--

INSERT INTO `lease` (`property_no`, `Client_no`, `Payment_method`, `Rent_start_date`, `Rent_finish_date`, `Monthly_rent`, `Duration`) VALUES
('PR_01', 'CL_01', 'Cash', '2021-08-01', '2021-09-01', 12000, 1),
('PR_02', 'CL_02', 'Cash', '2021-09-01', '2021-10-01', 15000, 1),
('PR_03', 'CL_03', 'Credit_card', '2021-07-01', '2021-11-01', 13000, 2),
('PR_04', 'CL_04', 'Cash', '2021-09-01', '2022-01-01', 10000, 4),
('PR_05', 'CL_05', 'Debit_card', '2021-06-02', '2021-12-03', 12000, 6);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `Emp_ID` varchar(6) NOT NULL,
  `Manager_no` int(11) NOT NULL,
  `Appoint_date` date NOT NULL,
  `Emp_start_date` date NOT NULL,
  `Staff_type` text NOT NULL,
  `Emp_NIC` varchar(11) NOT NULL,
  `Emp_DOB` date NOT NULL,
  `Emp_Name` text NOT NULL,
  `Emp_Gender` text NOT NULL,
  `Emp_salary` int(11) NOT NULL,
  `Emp_contact_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`Emp_ID`, `Manager_no`, `Appoint_date`, `Emp_start_date`, `Staff_type`, `Emp_NIC`, `Emp_DOB`, `Emp_Name`, `Emp_Gender`, `Emp_salary`, `Emp_contact_no`) VALUES
('EM_11', 1, '2021-08-01', '2021-06-06', 'Management ', '2000555', '2000-12-02', 'Kanchana', 'Female', 80000, 76444447),
('EM_12', 2, '2021-09-01', '2021-07-11', 'IT', '2000111', '2000-01-01', 'Niki', 'Male', 75000, 76444443),
('EM_13', 3, '2021-09-05', '2021-05-09', 'Low', '2000222', '2000-04-02', 'Shehani', 'Female', 75000, 76444448),
('EM_14', 4, '2021-09-01', '2021-05-02', 'IT', '2000444', '2001-09-20', 'Sandun', 'Male', 80500, 76444445),
('EM_15', 5, '2021-09-06', '2021-03-07', 'Buissness', '2000333', '1999-02-02', 'Rushdha', 'Female', 70000, 76444449);

-- --------------------------------------------------------

--
-- Table structure for table `newspaper`
--

CREATE TABLE `newspaper` (
  `Newspaper_ID` varchar(6) NOT NULL,
  `Newspaper_email` varchar(20) NOT NULL,
  `Newspaper_contact_no` int(10) NOT NULL,
  `Newspaper_address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newspaper`
--

INSERT INTO `newspaper` (`Newspaper_ID`, `Newspaper_email`, `Newspaper_contact_no`, `Newspaper_address`) VALUES
('NP_01', 'news1@gmail.com', 111111111, 'No121,Colombo07.'),
('NP_02', 'news2@gmail.com', 222222222, 'No122,Colombo07.'),
('NP_03', 'news3@gmail.com', 333333333, 'No123,Colombo07.'),
('NP_04', 'news4@gmail.com', 444444444, 'No124,Colombo07.'),
('NP_05', 'news5@gmail.com', 555555555, 'No125,Colombo07.');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `Owner_ID` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`Owner_ID`) VALUES
('OW_01'),
('OW_02'),
('OW_03'),
('OW_04'),
('OW_05');

-- --------------------------------------------------------

--
-- Table structure for table `owner_property_branch`
--

CREATE TABLE `owner_property_branch` (
  `property_no` varchar(6) NOT NULL,
  `Owner_ID` varchar(6) NOT NULL,
  `Client_no` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner_property_branch`
--

INSERT INTO `owner_property_branch` (`property_no`, `Owner_ID`, `Client_no`) VALUES
('PR_01', 'OW_01', 'CL_01'),
('PR_02', 'OW_02', 'CL_02'),
('PR_03', 'OW_03', 'CL_03'),
('PR_04', 'OW_04', 'CL_04'),
('PR_05', 'OW_05', 'CL_05');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `NIC` varchar(12) NOT NULL,
  `Per_name` varchar(20) NOT NULL,
  `Per_email` varchar(20) NOT NULL,
  `Per_address` varchar(20) NOT NULL,
  `Per_contact_no` int(10) NOT NULL,
  `Owner_ID` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`NIC`, `Per_name`, `Per_email`, `Per_address`, `Per_contact_no`, `Owner_ID`) VALUES
('2001111', 'Sahan', 'sahan@gmail.com', 'No11,Colombo.', 711111111, 'OW_01'),
('2002222', 'Saduni', 'saduni@gmail.com', 'No12,Colombo.', 722222222, 'OW_02'),
('2003333', 'Kivi', 'kivi@gmail.com', 'No13,Colombo.', 733333333, 'OW_03'),
('2004444', 'Rizi', 'rizi@gmail.com', 'No14,Colombo.', 744444444, 'OW_04'),
('2005555', 'Nishi', 'nishi@gmail.com', 'No15,Colombo.', 755555555, 'OW_05');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `property_no` varchar(6) NOT NULL,
  `Proposed_rental` int(6) NOT NULL,
  `Property_address` varchar(50) NOT NULL,
  `No_of_rooms` int(6) NOT NULL,
  `Property_type` varchar(20) NOT NULL,
  `Owner_ID` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_no`, `Proposed_rental`, `Property_address`, `No_of_rooms`, `Property_type`, `Owner_ID`) VALUES
('PR_01', 5000, 'No01,Main root, colombo03.', 2, 'Annex', 'OW_01'),
('PR_02', 6000, 'No02,Main root, colombo03.', 3, 'Annex', 'OW_02'),
('PR_03', 7000, 'No03,Main root, colombo03.', 4, 'Rent house', 'OW_03'),
('PR_04', 5000, 'No04,Main root, colombo03.', 2, 'Rent house', 'OW_04'),
('PR_05', 6500, 'No04,Main root, colombo03.', 3, 'Annex', 'OW_05');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Emp_ID` varchar(6) NOT NULL,
  `Emp_start_date` date NOT NULL,
  `Staff_type` text NOT NULL,
  `Emp_DOB` date NOT NULL,
  `Emp_NIC` varchar(12) NOT NULL,
  `Emp_Name` text NOT NULL,
  `Emp_Gender` text NOT NULL,
  `Emp_contact_no` int(10) NOT NULL,
  `Job_type` text NOT NULL,
  `Emp_salary` int(10) NOT NULL,
  `Branch_no` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Emp_ID`, `Emp_start_date`, `Staff_type`, `Emp_DOB`, `Emp_NIC`, `Emp_Name`, `Emp_Gender`, `Emp_contact_no`, `Job_type`, `Emp_salary`, `Branch_no`) VALUES
('EM_06', '2021-08-01', 'Officer', '2000-01-03', '2000333', 'Senali', 'Female', 76444448, 'Management', 65000, 'BR02'),
('EM_07', '2021-09-01', 'Lawyer ', '2000-07-11', '2000112', 'Saneru', 'Male', 76444445, 'Low', 60000, 'BR01'),
('EM_08', '2021-08-05', 'Production_manager', '2000-02-02', '2000113', 'Nemesha', 'Female', 76444446, 'Manager', 50000, 'BR03'),
('EM_09', '2021-07-04', 'Manager', '2000-01-02', '2000888', 'Scahin', 'Male', 76444441, 'IT', 80000, 'BR01'),
('EM_10', '2021-02-02', 'Designer', '1998-02-14', '2000999', 'Thisara', 'Male', 76444447, 'IT', 80000, 'BR04');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `Emp_ID` varchar(6) NOT NULL,
  `supervisor_no` varchar(6) NOT NULL,
  `Emp_start_date` date NOT NULL,
  `Staff_type` text NOT NULL,
  `Emp_DOB` date NOT NULL,
  `Emp_NIC` varchar(12) NOT NULL,
  `Emp_Name` text NOT NULL,
  `Emp_Gender` text NOT NULL,
  `Emp_contact_no` int(10) NOT NULL,
  `Emp_salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`Emp_ID`, `supervisor_no`, `Emp_start_date`, `Staff_type`, `Emp_DOB`, `Emp_NIC`, `Emp_Name`, `Emp_Gender`, `Emp_contact_no`, `Emp_salary`) VALUES
('EM_01', 'SU_01', '2021-08-01', 'Supervisor', '2000-01-01', '2000111', 'Berlin', 'Male', 771111111, 45000),
('EM_02', 'SU_02', '2021-08-01', 'Supervisor', '2000-01-02', '2000777', 'John', 'Male', 772222222, 45500),
('EM_03', 'SU_03', '2021-08-02', 'Supervisor', '1999-04-04', '1999666', 'Joshep', 'Male', 773333333, 45000),
('EM_04', 'SU_04', '2021-07-01', 'Supervisor', '2000-07-10', '2000555', 'Aleena ', 'Female', 774444444, 50000),
('EM_05', 'SU_05', '2021-08-05', 'Supervisor', '2000-12-01', '2000222', 'Belinda', 'Female', 775555555, 55000);

-- --------------------------------------------------------

--
-- Structure for view `assistants`
--
DROP TABLE IF EXISTS `assistants`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `assistants`  AS SELECT `assistant`.`Emp_ID` AS `Emp_ID`, `assistant`.`Emp_Name` AS `Emp_Name` FROM `assistant` ;

-- --------------------------------------------------------

--
-- Structure for view `clients`
--
DROP TABLE IF EXISTS `clients`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `clients`  AS SELECT `client`.`Client_no` AS `Client_no`, `client`.`Client_full_name` AS `Client_full_name` FROM `client` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertise`
--
ALTER TABLE `advertise`
  ADD PRIMARY KEY (`Newspaper_ID`,`Property_no`),
  ADD KEY `Property_no` (`Property_no`);

--
-- Indexes for table `assistant`
--
ALTER TABLE `assistant`
  ADD PRIMARY KEY (`Emp_ID`),
  ADD KEY `Supervisor_ID` (`Supervisor_ID`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`Branch_no`),
  ADD KEY `Manager_ID` (`Manager_ID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Client_no`),
  ADD KEY `Emp_ID` (`Emp_ID`),
  ADD KEY `Emp_ID_2` (`Emp_ID`),
  ADD KEY `Branch_no` (`Branch_no`);

--
-- Indexes for table `client_property_req`
--
ALTER TABLE `client_property_req`
  ADD PRIMARY KEY (`Requirement_no`,`Client_no`),
  ADD KEY `Client_no` (`Client_no`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Company_ID`),
  ADD KEY `Owner_ID` (`Owner_ID`);

--
-- Indexes for table `lease`
--
ALTER TABLE `lease`
  ADD PRIMARY KEY (`property_no`,`Client_no`),
  ADD KEY `Client_no` (`Client_no`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`Emp_ID`);

--
-- Indexes for table `newspaper`
--
ALTER TABLE `newspaper`
  ADD PRIMARY KEY (`Newspaper_ID`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`Owner_ID`);

--
-- Indexes for table `owner_property_branch`
--
ALTER TABLE `owner_property_branch`
  ADD PRIMARY KEY (`Owner_ID`,`property_no`),
  ADD KEY `property_no` (`property_no`),
  ADD KEY `Owner_ID` (`Owner_ID`),
  ADD KEY `Client_no` (`Client_no`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`NIC`),
  ADD KEY `Owner_ID` (`Owner_ID`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_no`),
  ADD KEY `Owner_ID` (`Owner_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Emp_ID`),
  ADD KEY `Branch_no` (`Branch_no`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`Emp_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advertise`
--
ALTER TABLE `advertise`
  ADD CONSTRAINT `advertise_ibfk_1` FOREIGN KEY (`Newspaper_ID`) REFERENCES `newspaper` (`Newspaper_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `advertise_ibfk_2` FOREIGN KEY (`Property_no`) REFERENCES `property` (`property_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `assistant`
--
ALTER TABLE `assistant`
  ADD CONSTRAINT `assistant_ibfk_1` FOREIGN KEY (`Supervisor_ID`) REFERENCES `supervisor` (`Emp_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `branch`
--
ALTER TABLE `branch`
  ADD CONSTRAINT `branch_ibfk_1` FOREIGN KEY (`Manager_ID`) REFERENCES `manager` (`Emp_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`Emp_ID`) REFERENCES `staff` (`Emp_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `client_ibfk_2` FOREIGN KEY (`Branch_no`) REFERENCES `branch` (`Branch_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `client_property_req`
--
ALTER TABLE `client_property_req`
  ADD CONSTRAINT `client_property_req_ibfk_1` FOREIGN KEY (`Client_no`) REFERENCES `client` (`Client_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`Owner_ID`) REFERENCES `owner` (`Owner_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lease`
--
ALTER TABLE `lease`
  ADD CONSTRAINT `lease_ibfk_1` FOREIGN KEY (`Client_no`) REFERENCES `client` (`Client_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lease_ibfk_2` FOREIGN KEY (`property_no`) REFERENCES `property` (`property_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `owner_property_branch`
--
ALTER TABLE `owner_property_branch`
  ADD CONSTRAINT `owner_property_branch_ibfk_1` FOREIGN KEY (`Client_no`) REFERENCES `client` (`Client_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `owner_property_branch_ibfk_2` FOREIGN KEY (`property_no`) REFERENCES `property` (`property_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `owner_property_branch_ibfk_3` FOREIGN KEY (`Owner_ID`) REFERENCES `owner` (`Owner_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`Owner_ID`) REFERENCES `owner` (`Owner_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `property_ibfk_1` FOREIGN KEY (`Owner_ID`) REFERENCES `owner` (`Owner_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`Branch_no`) REFERENCES `branch` (`Branch_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
