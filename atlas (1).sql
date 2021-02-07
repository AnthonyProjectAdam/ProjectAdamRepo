-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2021 at 06:11 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atlas`
--

-- --------------------------------------------------------

--
-- Table structure for table `anchor inspection`
--

CREATE TABLE `anchor inspection` (
  `Anchor_ID` int(5) NOT NULL,
  `Anchor_No` int(5) NOT NULL,
  `Anchor_Description` varchar(15) NOT NULL,
  `Inspection_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `anchor photo`
--

CREATE TABLE `anchor photo` (
  `AnchorPhoto_ID` int(5) NOT NULL,
  `AnchorPhoto_Name` varchar(15) NOT NULL,
  `Anchor_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `beam inspection`
--

CREATE TABLE `beam inspection` (
  `Beam_ID` int(5) NOT NULL,
  `Beam_SerialNo` varchar(10) NOT NULL,
  `Inspection_ID` int(5) NOT NULL,
  `Beam_Description` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `beam photo`
--

CREATE TABLE `beam photo` (
  `BeamPhoto_ID` int(5) NOT NULL,
  `BeamPhoto_Name` varchar(15) NOT NULL,
  `Beam_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Contact_ID` int(5) NOT NULL,
  `Contact_LName` varchar(20) NOT NULL,
  `Contact_FName` varchar(20) NOT NULL,
  `Contact_Title` varchar(10) NOT NULL,
  `Contact_JobTitle` varchar(15) NOT NULL,
  `Contact_TelNo` int(20) NOT NULL,
  `Contact_ExtNo` int(15) NOT NULL,
  `Contact_FaxNo` int(15) NOT NULL,
  `Contact_CellNo` int(20) NOT NULL,
  `Contact_Email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_ID` int(5) NOT NULL,
  `Employee_LName` varchar(30) NOT NULL,
  `Empoloyee_FName` varchar(30) NOT NULL,
  `Employee_StreetAdd` varchar(30) NOT NULL,
  `Employee_City` varchar(30) NOT NULL,
  `Employee_Prov` varchar(30) NOT NULL,
  `Employee_PCode` varchar(10) NOT NULL,
  `Employee_TelNo` int(20) NOT NULL,
  `Employee_Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_ID`, `Employee_LName`, `Empoloyee_FName`, `Employee_StreetAdd`, `Employee_City`, `Employee_Prov`, `Employee_PCode`, `Employee_TelNo`, `Employee_Email`) VALUES
(1, 'Smith', 'Bryan', '27th Ave. ', 'Lethbridge', 'Alberta', 'T1G4E7', 587237123, 'prestige@gmail.com'),
(3, 'Morris', 'Marcus', '26th St.', 'Calgary', 'Alberta', 'T1G4T5', 587346123, 'atlas.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee type`
--

CREATE TABLE `employee type` (
  `EmployeeType_ID` int(5) NOT NULL,
  `EmployeeType_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fall protection`
--

CREATE TABLE `fall protection` (
  `FallProtection_ID` int(5) NOT NULL,
  `FallProtection_Date` date NOT NULL,
  `FallProtection_Status` varchar(20) NOT NULL,
  `Inspection_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hazard assessment`
--

CREATE TABLE `hazard assessment` (
  `HazardAssess_ID` int(5) NOT NULL,
  `HazardAssess_Date` date NOT NULL,
  `HazardAssess_Status` varchar(20) NOT NULL,
  `Inspection_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inspection`
--

CREATE TABLE `inspection` (
  `Inspection_ID` int(5) NOT NULL,
  `Inspection_Date` date NOT NULL,
  `Inspection_Status` varchar(15) NOT NULL,
  `Project_ID` int(5) NOT NULL,
  `Beam_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inspection checklist`
--

CREATE TABLE `inspection checklist` (
  `InspectionChecklist_ID` int(5) NOT NULL,
  `InspectionChecklist_Date` date NOT NULL,
  `Inspection_Status` varchar(20) NOT NULL,
  `Inspection_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inspection report`
--

CREATE TABLE `inspection report` (
  `InspectionReport_ID` int(5) NOT NULL,
  `InspectioReport_Date` date NOT NULL,
  `InspectionReport_Status` varchar(20) NOT NULL,
  `Inspection_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `Job_ID` int(5) NOT NULL,
  `Job_No` varchar(10) NOT NULL,
  `Project_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `Project_ID` int(5) NOT NULL,
  `Project_Name` varchar(20) NOT NULL,
  `Project_BuildingNo` int(5) NOT NULL,
  `Project_StreetAdd` varchar(20) NOT NULL,
  `Project_City` varchar(20) NOT NULL,
  `Project_Prov` varchar(20) NOT NULL,
  `Project_PCode` varchar(10) NOT NULL,
  `Project_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project contact`
--

CREATE TABLE `project contact` (
  `ProjectContact_ID` int(5) NOT NULL,
  `Contact_ID` int(5) NOT NULL,
  `Project_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project employee`
--

CREATE TABLE `project employee` (
  `ProjectEmployee_ID` int(5) NOT NULL,
  `Project_ID` int(5) NOT NULL,
  `Employee_ID` int(5) NOT NULL,
  `EmployeeType_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pull test`
--

CREATE TABLE `pull test` (
  `PullTest_ID` int(5) NOT NULL,
  `PullTest_Date` date NOT NULL,
  `PullTest_Status` varchar(20) NOT NULL,
  `Inspection_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anchor inspection`
--
ALTER TABLE `anchor inspection`
  ADD PRIMARY KEY (`Anchor_ID`),
  ADD UNIQUE KEY `Inspection_ID` (`Inspection_ID`);

--
-- Indexes for table `anchor photo`
--
ALTER TABLE `anchor photo`
  ADD PRIMARY KEY (`AnchorPhoto_ID`),
  ADD UNIQUE KEY `Anchor_ID` (`Anchor_ID`);

--
-- Indexes for table `beam inspection`
--
ALTER TABLE `beam inspection`
  ADD PRIMARY KEY (`Beam_ID`),
  ADD UNIQUE KEY `Inspection_ID` (`Inspection_ID`);

--
-- Indexes for table `beam photo`
--
ALTER TABLE `beam photo`
  ADD PRIMARY KEY (`BeamPhoto_ID`),
  ADD UNIQUE KEY `Beam_ID` (`Beam_ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Contact_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `employee type`
--
ALTER TABLE `employee type`
  ADD PRIMARY KEY (`EmployeeType_ID`);

--
-- Indexes for table `fall protection`
--
ALTER TABLE `fall protection`
  ADD PRIMARY KEY (`FallProtection_ID`),
  ADD KEY `Inspection_ID` (`Inspection_ID`);

--
-- Indexes for table `hazard assessment`
--
ALTER TABLE `hazard assessment`
  ADD PRIMARY KEY (`HazardAssess_ID`),
  ADD KEY `Inspection_ID` (`Inspection_ID`);

--
-- Indexes for table `inspection`
--
ALTER TABLE `inspection`
  ADD PRIMARY KEY (`Inspection_ID`),
  ADD KEY `Project_ID` (`Project_ID`),
  ADD KEY `Beam_ID` (`Beam_ID`);

--
-- Indexes for table `inspection checklist`
--
ALTER TABLE `inspection checklist`
  ADD PRIMARY KEY (`InspectionChecklist_ID`),
  ADD KEY `Inspection_ID` (`Inspection_ID`);

--
-- Indexes for table `inspection report`
--
ALTER TABLE `inspection report`
  ADD PRIMARY KEY (`InspectionReport_ID`),
  ADD KEY `Inspection_ID` (`Inspection_ID`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`Job_ID`),
  ADD UNIQUE KEY `Job_ID` (`Job_ID`),
  ADD KEY `Project_ID` (`Project_ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`Project_ID`);

--
-- Indexes for table `project contact`
--
ALTER TABLE `project contact`
  ADD PRIMARY KEY (`ProjectContact_ID`),
  ADD KEY `Contact_ID` (`Contact_ID`),
  ADD KEY `Project_ID` (`Project_ID`);

--
-- Indexes for table `project employee`
--
ALTER TABLE `project employee`
  ADD PRIMARY KEY (`ProjectEmployee_ID`),
  ADD UNIQUE KEY `Project_ID` (`Project_ID`,`EmployeeType_ID`),
  ADD KEY `Employee_ID` (`Employee_ID`),
  ADD KEY `EmployeeType_ID` (`EmployeeType_ID`);

--
-- Indexes for table `pull test`
--
ALTER TABLE `pull test`
  ADD PRIMARY KEY (`PullTest_ID`),
  ADD KEY `Inspection_ID` (`Inspection_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anchor inspection`
--
ALTER TABLE `anchor inspection`
  MODIFY `Anchor_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `anchor photo`
--
ALTER TABLE `anchor photo`
  MODIFY `AnchorPhoto_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beam inspection`
--
ALTER TABLE `beam inspection`
  MODIFY `Beam_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beam photo`
--
ALTER TABLE `beam photo`
  MODIFY `BeamPhoto_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Contact_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Employee_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee type`
--
ALTER TABLE `employee type`
  MODIFY `EmployeeType_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fall protection`
--
ALTER TABLE `fall protection`
  MODIFY `FallProtection_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hazard assessment`
--
ALTER TABLE `hazard assessment`
  MODIFY `HazardAssess_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inspection`
--
ALTER TABLE `inspection`
  MODIFY `Inspection_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inspection checklist`
--
ALTER TABLE `inspection checklist`
  MODIFY `InspectionChecklist_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inspection report`
--
ALTER TABLE `inspection report`
  MODIFY `InspectionReport_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `Job_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `Project_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project contact`
--
ALTER TABLE `project contact`
  MODIFY `ProjectContact_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project employee`
--
ALTER TABLE `project employee`
  MODIFY `ProjectEmployee_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pull test`
--
ALTER TABLE `pull test`
  MODIFY `PullTest_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anchor inspection`
--
ALTER TABLE `anchor inspection`
  ADD CONSTRAINT `anchor inspection_ibfk_1` FOREIGN KEY (`Anchor_ID`) REFERENCES `anchor photo` (`Anchor_ID`);

--
-- Constraints for table `beam inspection`
--
ALTER TABLE `beam inspection`
  ADD CONSTRAINT `beam inspection_ibfk_1` FOREIGN KEY (`Beam_ID`) REFERENCES `beam photo` (`Beam_ID`);

--
-- Constraints for table `fall protection`
--
ALTER TABLE `fall protection`
  ADD CONSTRAINT `fall protection_ibfk_1` FOREIGN KEY (`Inspection_ID`) REFERENCES `inspection` (`Inspection_ID`);

--
-- Constraints for table `hazard assessment`
--
ALTER TABLE `hazard assessment`
  ADD CONSTRAINT `hazard assessment_ibfk_1` FOREIGN KEY (`Inspection_ID`) REFERENCES `inspection` (`Inspection_ID`);

--
-- Constraints for table `inspection`
--
ALTER TABLE `inspection`
  ADD CONSTRAINT `inspection_ibfk_2` FOREIGN KEY (`Inspection_ID`) REFERENCES `anchor inspection` (`Inspection_ID`),
  ADD CONSTRAINT `inspection_ibfk_3` FOREIGN KEY (`Beam_ID`) REFERENCES `beam inspection` (`Beam_ID`),
  ADD CONSTRAINT `inspection_ibfk_4` FOREIGN KEY (`Project_ID`) REFERENCES `project` (`Project_ID`);

--
-- Constraints for table `inspection checklist`
--
ALTER TABLE `inspection checklist`
  ADD CONSTRAINT `inspection checklist_ibfk_1` FOREIGN KEY (`Inspection_ID`) REFERENCES `inspection` (`Inspection_ID`);

--
-- Constraints for table `inspection report`
--
ALTER TABLE `inspection report`
  ADD CONSTRAINT `inspection report_ibfk_1` FOREIGN KEY (`Inspection_ID`) REFERENCES `inspection` (`Inspection_ID`);

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`Project_ID`) REFERENCES `project` (`Project_ID`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`Project_ID`) REFERENCES `project employee` (`Project_ID`);

--
-- Constraints for table `project contact`
--
ALTER TABLE `project contact`
  ADD CONSTRAINT `project contact_ibfk_1` FOREIGN KEY (`Contact_ID`) REFERENCES `contact` (`Contact_ID`),
  ADD CONSTRAINT `project contact_ibfk_2` FOREIGN KEY (`Project_ID`) REFERENCES `project` (`Project_ID`);

--
-- Constraints for table `project employee`
--
ALTER TABLE `project employee`
  ADD CONSTRAINT `project employee_ibfk_2` FOREIGN KEY (`EmployeeType_ID`) REFERENCES `employee type` (`EmployeeType_ID`),
  ADD CONSTRAINT `project employee_ibfk_3` FOREIGN KEY (`Employee_ID`) REFERENCES `employee` (`Employee_ID`);

--
-- Constraints for table `pull test`
--
ALTER TABLE `pull test`
  ADD CONSTRAINT `pull test_ibfk_1` FOREIGN KEY (`Inspection_ID`) REFERENCES `inspection` (`Inspection_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
