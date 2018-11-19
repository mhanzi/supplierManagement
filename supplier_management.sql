-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2018 at 02:07 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supplier_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_seats`
--

CREATE TABLE `assign_seats` (
  `seat_id` int(11) NOT NULL,
  `article` text NOT NULL,
  `img_seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_seats`
--

INSERT INTO `assign_seats` (`seat_id`, `article`, `img_seat`) VALUES
(1, 'Articolo: Pullman 1\r\n                                <br> Fornitore : Colombo\r\n                                <br> Posti max : 35\r\n                                <br> Posti assegnati :20', 2);

-- --------------------------------------------------------

--
-- Table structure for table `supplier_detail`
--

CREATE TABLE `supplier_detail` (
  `detail_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `sup_tipologie` varchar(50) NOT NULL,
  `sup_descrizione` text NOT NULL,
  `sup_inizio` date NOT NULL,
  `sup_fine` date NOT NULL,
  `sup_listino` varchar(50) NOT NULL,
  `sup_sconto` varchar(100) NOT NULL,
  `sup_stato` varchar(50) NOT NULL,
  `sup_added_by` int(11) NOT NULL,
  `sup_added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_detail`
--

INSERT INTO `supplier_detail` (`detail_id`, `supplier_id`, `sup_tipologie`, `sup_descrizione`, `sup_inizio`, `sup_fine`, `sup_listino`, `sup_sconto`, `sup_stato`, `sup_added_by`, `sup_added_on`) VALUES
(1, 1, 'Taucil', 'disponsible', '2018-11-08', '2018-11-19', '$ 40 ', '10%', 'Attivo', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file_uploader`
--

CREATE TABLE `tbl_file_uploader` (
  `file_id` int(11) NOT NULL,
  `file_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_file_uploader`
--

INSERT INTO `tbl_file_uploader` (`file_id`, `file_name`) VALUES
(1, '1.jpg'),
(2, '35_5.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menus`
--

CREATE TABLE `tbl_menus` (
  `tbl_menu_id` int(11) NOT NULL,
  `tbl_menu_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suppliers_details`
--

CREATE TABLE `tbl_suppliers_details` (
  `tbl_sup_id` int(11) NOT NULL,
  `tbl_supplier_name` varchar(50) NOT NULL,
  `marchio` int(11) NOT NULL,
  `descrizione` text NOT NULL,
  `sup_tel` int(11) NOT NULL,
  `indirizzo` text NOT NULL,
  `referente` text NOT NULL,
  `inizio_fornitura` date NOT NULL,
  `fine_fornitura` date NOT NULL,
  `partita_IVA` int(11) NOT NULL,
  `tipologia` varchar(50) NOT NULL,
  `stato` varchar(50) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_suppliers_details`
--

INSERT INTO `tbl_suppliers_details` (`tbl_sup_id`, `tbl_supplier_name`, `marchio`, `descrizione`, `sup_tel`, `indirizzo`, `referente`, `inizio_fornitura`, `fine_fornitura`, `partita_IVA`, `tipologia`, `stato`, `added_by`, `added_on`) VALUES
(1, 'Marina', 1, 'ristorante di pesce siyuato sul mar timenoa ostia\r\n', 0, '', '', '2018-11-14', '2018-11-23', 956435645, 'Cibo', 'Ativo', 1, '2018-11-10 06:24:20'),
(2, 'Marina', 1, 'ristorante di pesce siyuato sul mar timenoa ostia\r\n', 0, '', '', '2018-11-14', '2018-11-23', 956435645, 'Cibo', 'Ativo', 1, '2018-11-10 06:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `user_psw` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_level` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `Name`, `user_name`, `user_psw`, `user_email`, `user_level`, `created_by`, `created_on`) VALUES
(1, 'Admin', 'admin', '123', 'admin@test.com', 1, 1, '2018-11-01 05:31:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_level`
--

CREATE TABLE `tbl_user_level` (
  `user_level_id` int(11) NOT NULL,
  `user_level_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_permission`
--

CREATE TABLE `tbl_user_permission` (
  `tbl_permission_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `permission_given_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_seats`
--
ALTER TABLE `assign_seats`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `supplier_detail`
--
ALTER TABLE `supplier_detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `tbl_file_uploader`
--
ALTER TABLE `tbl_file_uploader`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `tbl_suppliers_details`
--
ALTER TABLE `tbl_suppliers_details`
  ADD PRIMARY KEY (`tbl_sup_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  ADD PRIMARY KEY (`user_level_id`);

--
-- Indexes for table `tbl_user_permission`
--
ALTER TABLE `tbl_user_permission`
  ADD PRIMARY KEY (`tbl_permission_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_seats`
--
ALTER TABLE `assign_seats`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplier_detail`
--
ALTER TABLE `supplier_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_file_uploader`
--
ALTER TABLE `tbl_file_uploader`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_suppliers_details`
--
ALTER TABLE `tbl_suppliers_details`
  MODIFY `tbl_sup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  MODIFY `user_level_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user_permission`
--
ALTER TABLE `tbl_user_permission`
  MODIFY `tbl_permission_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
