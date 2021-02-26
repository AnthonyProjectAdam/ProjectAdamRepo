-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 09:00 AM
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
-- Database: `adam`
--

-- --------------------------------------------------------

--
-- Table structure for table `anchor_inspection`
--

CREATE TABLE `anchor_inspection` (
  `Anchor_ID` int(15) NOT NULL,
  `Anchor_No` int(15) NOT NULL,
  `Anchor_Description` varchar(255) NOT NULL,
  `Inspection_ID` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `anchor_photo`
--

CREATE TABLE `anchor_photo` (
  `AnchorPhoto_ID` int(15) NOT NULL,
  `AnchorPhoto_Name` varchar(255) NOT NULL,
  `Anchor_ID` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `beam_inspection`
--

CREATE TABLE `beam_inspection` (
  `Beam_ID` int(15) NOT NULL,
  `Beam_SerialNo` varchar(255) NOT NULL,
  `Inspection_ID` int(15) NOT NULL,
  `Beam_Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `beam_photo`
--

CREATE TABLE `beam_photo` (
  `BeamPhoto_ID` int(15) NOT NULL,
  `BeamPhoto_Name` varchar(255) NOT NULL,
  `Beam_ID` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Contact_ID` int(15) NOT NULL,
  `Contact_FName` varchar(255) NOT NULL,
  `Contact_LName` varchar(255) NOT NULL,
  `Contact_Email` varchar(255) NOT NULL,
  `Contact_Title` varchar(255) NOT NULL,
  `Contact_JobTitle` varchar(255) NOT NULL,
  `Contact_TelNo` varchar(255) NOT NULL,
  `Contact_ExtNo` varchar(255) NOT NULL,
  `Contact_FaxNo` varchar(255) NOT NULL,
  `Contact_CellNo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Contact_ID`, `Contact_FName`, `Contact_LName`, `Contact_Email`, `Contact_Title`, `Contact_JobTitle`, `Contact_TelNo`, `Contact_ExtNo`, `Contact_FaxNo`, `Contact_CellNo`) VALUES
(1, 'Test', 'Person', 'person@gmail.com', '', '', '', '', '', ''),
(2, 'Joseph', 'Baba', 'Baba@gmail.com', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_ID` int(15) NOT NULL,
  `Employee_FName` varchar(255) NOT NULL,
  `Employee_LName` varchar(255) NOT NULL,
  `Employee_Email` varchar(255) NOT NULL,
  `Employee_StreetAdd` varchar(255) NOT NULL,
  `Employee_City` varchar(255) NOT NULL,
  `Employee_Prov` varchar(255) NOT NULL,
  `Employee_PCode` varchar(255) NOT NULL,
  `Employee_TelNo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_ID`, `Employee_FName`, `Employee_LName`, `Employee_Email`, `Employee_StreetAdd`, `Employee_City`, `Employee_Prov`, `Employee_PCode`, `Employee_TelNo`) VALUES
(1, 'Francesca', 'Mariani', 'francescam@atlas-anchor.com', '', '', '', '', ''),
(2, 'Lee', 'Frantz', 'leef@atlas-anchor.com', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee_type`
--

CREATE TABLE `employee_type` (
  `EmployeeType_ID` int(15) NOT NULL,
  `EmployeeType_Name` varchar(255) NOT NULL,
  `EmployeeType_Number` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_type`
--

INSERT INTO `employee_type` (`EmployeeType_ID`, `EmployeeType_Name`, `EmployeeType_Number`) VALUES
(1, 'Administrator', 1),
(2, 'Inspector', 2),
(3, 'Engineer', 3);

-- --------------------------------------------------------

--
-- Table structure for table `fall_protection`
--

CREATE TABLE `fall_protection` (
  `FallProtection_ID` int(15) NOT NULL,
  `FallProtection_Date` date NOT NULL,
  `FallProtection_Status` varchar(255) NOT NULL,
  `Inspection_ID` int(15) NOT NULL,
  `Jobsite_Location` tinyint(1) NOT NULL,
  `Inspection_Date` tinyint(1) NOT NULL,
  `Supervisor` tinyint(1) NOT NULL,
  `Specific_WorkArea` tinyint(1) NOT NULL,
  `Work_Activities` tinyint(1) NOT NULL,
  `Identify_FallHazards` tinyint(1) NOT NULL,
  `Standard_GuardRail` tinyint(1) NOT NULL,
  `Floor_OpeningCover` tinyint(1) NOT NULL,
  `Single_PoleScaffold` tinyint(1) NOT NULL,
  `Boom_Lift` tinyint(1) NOT NULL,
  `Scissor_Lift` tinyint(1) NOT NULL,
  `Swing_Stage` tinyint(1) NOT NULL,
  `Safety_Net` tinyint(1) NOT NULL,
  `Work_Procedures` tinyint(1) NOT NULL,
  `Other_EquipmentSystem` tinyint(1) NOT NULL,
  `Safety_BeltLanyard` tinyint(1) NOT NULL,
  `Harness_Lanyard` tinyint(1) NOT NULL,
  `Fiber_RopeLifelineRopeGuard` tinyint(1) NOT NULL,
  `Restraint_Anchor` tinyint(1) NOT NULL,
  `Arrest_Anchor` tinyint(1) NOT NULL,
  `Horizontal_Lifeline` tinyint(1) NOT NULL,
  `Warning_Lines` tinyint(1) NOT NULL,
  `Safety_Monitor` tinyint(1) NOT NULL,
  `Print_Name` tinyint(1) NOT NULL,
  `Signed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hazard_assessment`
--

CREATE TABLE `hazard_assessment` (
  `HazardAssess_ID` int(15) NOT NULL,
  `HazardAssess_Date` date NOT NULL,
  `HazardAssess_Status` varchar(255) NOT NULL,
  `Inspection_ID` int(15) NOT NULL,
  `Project_Name` varchar(255) NOT NULL,
  `Project_StreetAdd` varchar(255) NOT NULL,
  `Inspector_Name` varchar(255) NOT NULL,
  `Site_Contact` varchar(255) NOT NULL,
  `Inspection_Date` date NOT NULL,
  `Weather` varchar(255) NOT NULL,
  `Time_In` time(6) NOT NULL,
  `Time_Out` time(6) NOT NULL,
  `Lifting_HandlingLoads` tinyint(1) NOT NULL,
  `Repetitive_Motion` tinyint(1) NOT NULL,
  `Slipping_Tripping` tinyint(1) NOT NULL,
  `Moving_PartsOfMachinery` tinyint(1) NOT NULL,
  `Working_Heights` tinyint(1) NOT NULL,
  `Overhead_Hazards` tinyint(1) NOT NULL,
  `Working_HeightLadders` tinyint(1) NOT NULL,
  `Pressurized_Systems` tinyint(1) NOT NULL,
  `Vehicles` tinyint(1) NOT NULL,
  `Fire` tinyint(1) NOT NULL,
  `Electricity` tinyint(1) NOT NULL,
  `Noise` tinyint(1) NOT NULL,
  `Lighting` tinyint(1) NOT NULL,
  `Temperature_HeatCold` tinyint(1) NOT NULL,
  `Vibration` tinyint(1) NOT NULL,
  `Ionizing_Radiation` tinyint(1) NOT NULL,
  `Workplace_Violence` tinyint(1) NOT NULL,
  `Working_Alone` tinyint(1) NOT NULL,
  `Other` tinyint(1) NOT NULL,
  `Viruses` tinyint(1) NOT NULL,
  `Fungi` tinyint(1) NOT NULL,
  `Bacteria` tinyint(1) NOT NULL,
  `Blood_BodyFluids` tinyint(1) NOT NULL,
  `Sewage` tinyint(1) NOT NULL,
  `Chemicals` tinyint(1) NOT NULL,
  `Dust` tinyint(1) NOT NULL,
  `Mist` tinyint(1) NOT NULL,
  `Fume` tinyint(1) NOT NULL,
  `Gas` tinyint(1) NOT NULL,
  `Vapour` tinyint(1) NOT NULL,
  `Smoke` tinyint(1) NOT NULL,
  `Fibers` tinyint(1) NOT NULL,
  `Working_Conditions` tinyint(1) NOT NULL,
  `Fatigue` tinyint(1) NOT NULL,
  `Stress` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inspection`
--

CREATE TABLE `inspection` (
  `Inspection_ID` int(15) NOT NULL,
  `Inspection_Date` date NOT NULL,
  `Inspection_Status` varchar(255) NOT NULL,
  `Project_ID` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inspection`
--

INSERT INTO `inspection` (`Inspection_ID`, `Inspection_Date`, `Inspection_Status`, `Project_ID`) VALUES
(1, '2021-03-01', 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `inspection_checklist`
--

CREATE TABLE `inspection_checklist` (
  `InspectionChecklist_ID` int(15) NOT NULL,
  `InspectionChecklist_Date` date NOT NULL,
  `Inspection_Status` varchar(255) NOT NULL,
  `Inspection_ID` int(15) NOT NULL,
  `Inspection_Address` tinyint(1) NOT NULL,
  `Contact_Name` tinyint(1) NOT NULL,
  `Phone` tinyint(1) NOT NULL,
  `Hazard_AssessmentPerformed` tinyint(1) NOT NULL,
  `Drawing_Posted` tinyint(1) NOT NULL,
  `Logbook_Posted` tinyint(1) NOT NULL,
  `Systems_RequiresUpdate` tinyint(1) NOT NULL,
  `Drawing_CurrentExistingSystem` tinyint(1) NOT NULL,
  `Condition_Roof` tinyint(1) NOT NULL,
  `Nuts_Tightness` tinyint(1) NOT NULL,
  `Caulking_AnchorPlates` tinyint(1) NOT NULL,
  `Welds_Observed` tinyint(1) NOT NULL,
  `Photos_Taken` tinyint(1) NOT NULL,
  `Anchors_RequireReplacement` tinyint(1) NOT NULL,
  `Grommets_Inspected` tinyint(1) NOT NULL,
  `Non_ConformingDevices` tinyint(1) NOT NULL,
  `Main_RoofAccess` tinyint(1) NOT NULL,
  `IMproper_Installation` tinyint(1) NOT NULL,
  `Threads_Deformed` tinyint(1) NOT NULL,
  `Flashing_Condition` tinyint(1) NOT NULL,
  `Anything_Missing` tinyint(1) NOT NULL,
  `Any_Corrosion` tinyint(1) NOT NULL,
  `Any_SpacesElectricalHazards` tinyint(1) NOT NULL,
  `Inspector_Name` tinyint(1) NOT NULL,
  `Inspection_Date` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inspection_report`
--

CREATE TABLE `inspection_report` (
  `InspectionReport_ID` int(15) NOT NULL,
  `InspectioReport_Date` date NOT NULL,
  `InspectionReport_Status` varchar(255) NOT NULL,
  `Inspection_ID` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `Job_ID` int(15) NOT NULL,
  `Job_No` int(15) NOT NULL,
  `Project_ID` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `Project_ID` int(15) NOT NULL,
  `Project_Name` varchar(255) NOT NULL,
  `Project_BuildingNo` varchar(255) NOT NULL,
  `Project_StreetAdd` varchar(255) NOT NULL,
  `Project_City` varchar(255) NOT NULL,
  `Project_Prov` varchar(255) NOT NULL,
  `Project_PCode` varchar(255) NOT NULL,
  `Job_Status` varchar(255) NOT NULL,
  `ProjectEmployee_ID` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Project_ID`, `Project_Name`, `Project_BuildingNo`, `Project_StreetAdd`, `Project_City`, `Project_Prov`, `Project_PCode`, `Job_Status`, `ProjectEmployee_ID`) VALUES
(1, 'SFU - Maggie Benston Building', '8888', 'University Drive', 'Burnaby', 'British Columbia', 'V5A 1S6', 'Active', 0),
(2, 'BC Children\'s Hospital- Ambulatory Care', '4500', 'Oak Street', 'Vancouver', 'British Columbia', 'V6H 3N1', 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `project_contact`
--

CREATE TABLE `project_contact` (
  `ProjectContact_ID` int(15) NOT NULL,
  `Contact_ID` int(15) NOT NULL,
  `Project_ID` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_contact`
--

INSERT INTO `project_contact` (`ProjectContact_ID`, `Contact_ID`, `Project_ID`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_employee`
--

CREATE TABLE `project_employee` (
  `ProjectEmployee_ID` int(15) NOT NULL,
  `Employee_ID` int(15) NOT NULL,
  `EmployeeType_ID` int(15) NOT NULL,
  `Project_ID` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_employee`
--

INSERT INTO `project_employee` (`ProjectEmployee_ID`, `Employee_ID`, `EmployeeType_ID`, `Project_ID`) VALUES
(7, 1, 1, 1),
(8, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pull_test`
--

CREATE TABLE `pull_test` (
  `PullTest_ID` int(15) NOT NULL,
  `PullTest_Date` date NOT NULL,
  `PullTest_Status` varchar(255) NOT NULL,
  `Inspection_ID` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anchor_inspection`
--
ALTER TABLE `anchor_inspection`
  ADD PRIMARY KEY (`Anchor_ID`),
  ADD KEY `Inspection_ID` (`Inspection_ID`);

--
-- Indexes for table `anchor_photo`
--
ALTER TABLE `anchor_photo`
  ADD PRIMARY KEY (`AnchorPhoto_ID`),
  ADD KEY `Anchor_ID` (`Anchor_ID`);

--
-- Indexes for table `beam_inspection`
--
ALTER TABLE `beam_inspection`
  ADD PRIMARY KEY (`Beam_ID`),
  ADD KEY `Inspection_ID` (`Inspection_ID`);

--
-- Indexes for table `beam_photo`
--
ALTER TABLE `beam_photo`
  ADD PRIMARY KEY (`BeamPhoto_ID`),
  ADD KEY `Beam_ID` (`Beam_ID`);

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
-- Indexes for table `employee_type`
--
ALTER TABLE `employee_type`
  ADD PRIMARY KEY (`EmployeeType_ID`);

--
-- Indexes for table `fall_protection`
--
ALTER TABLE `fall_protection`
  ADD PRIMARY KEY (`FallProtection_ID`),
  ADD KEY `Inspection_ID` (`Inspection_ID`);

--
-- Indexes for table `hazard_assessment`
--
ALTER TABLE `hazard_assessment`
  ADD PRIMARY KEY (`HazardAssess_ID`),
  ADD KEY `Inspection_ID` (`Inspection_ID`);

--
-- Indexes for table `inspection`
--
ALTER TABLE `inspection`
  ADD PRIMARY KEY (`Inspection_ID`),
  ADD KEY `Project_ID` (`Project_ID`);

--
-- Indexes for table `inspection_checklist`
--
ALTER TABLE `inspection_checklist`
  ADD PRIMARY KEY (`InspectionChecklist_ID`),
  ADD KEY `Inspection_ID` (`Inspection_ID`);

--
-- Indexes for table `inspection_report`
--
ALTER TABLE `inspection_report`
  ADD PRIMARY KEY (`InspectionReport_ID`),
  ADD KEY `Inspection_ID` (`Inspection_ID`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`Job_ID`),
  ADD KEY `Project_ID` (`Project_ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`Project_ID`),
  ADD KEY `ProjectEmployee_ID` (`ProjectEmployee_ID`);

--
-- Indexes for table `project_contact`
--
ALTER TABLE `project_contact`
  ADD PRIMARY KEY (`ProjectContact_ID`),
  ADD KEY `Contact_ID` (`Contact_ID`),
  ADD KEY `Project_ID` (`Project_ID`);

--
-- Indexes for table `project_employee`
--
ALTER TABLE `project_employee`
  ADD PRIMARY KEY (`ProjectEmployee_ID`),
  ADD KEY `Employee_ID` (`Employee_ID`),
  ADD KEY `Project_ID` (`Project_ID`),
  ADD KEY `EmployeeType_ID` (`EmployeeType_ID`) USING BTREE;

--
-- Indexes for table `pull_test`
--
ALTER TABLE `pull_test`
  ADD PRIMARY KEY (`PullTest_ID`),
  ADD KEY `Inspection_ID` (`Inspection_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anchor_inspection`
--
ALTER TABLE `anchor_inspection`
  MODIFY `Anchor_ID` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `anchor_photo`
--
ALTER TABLE `anchor_photo`
  MODIFY `AnchorPhoto_ID` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beam_inspection`
--
ALTER TABLE `beam_inspection`
  MODIFY `Beam_ID` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beam_photo`
--
ALTER TABLE `beam_photo`
  MODIFY `BeamPhoto_ID` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Contact_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Employee_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_type`
--
ALTER TABLE `employee_type`
  MODIFY `EmployeeType_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fall_protection`
--
ALTER TABLE `fall_protection`
  MODIFY `FallProtection_ID` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hazard_assessment`
--
ALTER TABLE `hazard_assessment`
  MODIFY `HazardAssess_ID` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inspection`
--
ALTER TABLE `inspection`
  MODIFY `Inspection_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inspection_checklist`
--
ALTER TABLE `inspection_checklist`
  MODIFY `InspectionChecklist_ID` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inspection_report`
--
ALTER TABLE `inspection_report`
  MODIFY `InspectionReport_ID` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `Job_ID` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `Project_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_contact`
--
ALTER TABLE `project_contact`
  MODIFY `ProjectContact_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_employee`
--
ALTER TABLE `project_employee`
  MODIFY `ProjectEmployee_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pull_test`
--
ALTER TABLE `pull_test`
  MODIFY `PullTest_ID` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
