-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2018 at 01:40 PM
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
  `img_seat` int(11) NOT NULL,
  `seat_type` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_seats`
--

INSERT INTO `assign_seats` (`seat_id`, `article`, `img_seat`, `seat_type`) VALUES
(1, 'Articolo: Pullman 1\r\n                                <br> Fornitore : Colombo\r\n                                <br> Posti max : 35\r\n                                <br> Posti assegnati :20', 2, 1),
(2, 'Articolo: Pullman 1\r\n                                <br> Fornitore : Colombo\r\n                                <br> Posti max : 35\r\n                                <br> Posti assegnati :13', 11, 1),
(3, 'Articolo: Pullman 1\r\n                                <br> Fornitore : Colombo\r\n                                <br> Posti max : 35\r\n                                <br> Posti assegnati :5', 12, 1),
(4, 'Articolo: Stanza 1\r\n                                <br> Fornitore : B&B\r\n                                <br> Posti max : 10\r\n                                <br> Posti assegnati :6', 7, 2),
(5, 'Articolo: Stanza 1\r\n                                <br> Fornitore : B&B\r\n                                <br> Posti max : 2\r\n                                <br> Posti assegnati :0\r\n\r\n', 8, 2),
(6, 'Articolo: Stanza 1\r\n                                <br> Fornitore : B&B\r\n                                <br> Posti max : 6\r\n                                <br> Posti assegnati :4\r\n\r\n', 9, 2),
(7, 'Articolo: Stanza 1\r\n                                <br> Fornitore : B&B\r\n                                <br> Posti max : 2\r\n                                <br> Posti assegnati :0', 10, 2),
(8, 'Articolo: Tavolo 1\r\n                                <br> Fornitore : Marina\r\n                                <br> Posti max : 10\r\n                                <br> Posti assegnati :6', 13, 3),
(9, 'Articolo: Tavolo 1\r\n                                <br> Fornitore : Marina\r\n                                <br> Posti max : 10\r\n                                <br> Posti assegnati :3', 14, 3),
(10, 'Articolo: Tavolo 1\r\n                                <br> Fornitore : Marina\r\n                                <br> Posti max : 4\r\n                                <br> Posti assegnati :4', 15, 3);

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
  `sup_added_on` datetime NOT NULL,
  `immagine` int(11) NOT NULL,
  `numero_posti` int(11) NOT NULL,
  `dimensioni_h` int(11) NOT NULL,
  `dimensioni_w` int(11) NOT NULL,
  `article_img` int(11) NOT NULL,
  `url_details` varchar(50) NOT NULL,
  `quantita_primi` int(11) NOT NULL,
  `quantita_secondi` int(11) NOT NULL,
  `quantita_contorni` int(11) NOT NULL,
  `quantita_dolci` int(11) NOT NULL,
  `frutta` tinyint(1) NOT NULL COMMENT 'yes - 1 No -0',
  `bevande` int(11) NOT NULL COMMENT 'yes - 1 No -0',
  `min_Prezzo` int(11) NOT NULL,
  `max_Prezzo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_detail`
--

INSERT INTO `supplier_detail` (`detail_id`, `supplier_id`, `sup_tipologie`, `sup_descrizione`, `sup_inizio`, `sup_fine`, `sup_listino`, `sup_sconto`, `sup_stato`, `sup_added_by`, `sup_added_on`, `immagine`, `numero_posti`, `dimensioni_h`, `dimensioni_w`, `article_img`, `url_details`, `quantita_primi`, `quantita_secondi`, `quantita_contorni`, `quantita_dolci`, `frutta`, `bevande`, `min_Prezzo`, `max_Prezzo`) VALUES
(1, 1, 'Taucil', 'disponsible', '2018-11-08', '2018-11-19', '$ 40 ', '10%', 'Attivo', 0, '0000-00-00 00:00:00', 4, 22, 45, 33, 3, 'modific_articolo', 0, 0, 0, 0, 0, 0, 0, 0),
(2, 1, 'menu_fisso', 'menu fisso a scelta tra 2 pirmi 2 sec', '0000-00-00', '0000-00-00', '', '', '', 0, '0000-00-00 00:00:00', 4, 0, 0, 0, 3, 'modific_articolo_temp', 0, 0, 0, 0, 0, 1, 0, 0),
(3, 1, 'Buffet', 'Disponsibili vari', '0000-00-00', '0000-00-00', '', '', '', 0, '0000-00-00 00:00:00', 5, 66, 34, 44, 6, 'modific_articolo_template', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_list`
--

CREATE TABLE `tbl_customer_list` (
  `customer_id` int(11) NOT NULL,
  `customer_nome` varchar(50) NOT NULL,
  `customer_cognome` varchar(50) NOT NULL,
  `customer_nazione` varchar(30) NOT NULL,
  `customer_sesso` varchar(20) NOT NULL,
  `customer_email` varchar(30) NOT NULL,
  `customer_telefono` varchar(20) NOT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer_list`
--

INSERT INTO `tbl_customer_list` (`customer_id`, `customer_nome`, `customer_cognome`, `customer_nazione`, `customer_sesso`, `customer_email`, `customer_telefono`, `user_type`) VALUES
(1, 'Loredana', 'Colombo', 'Italia', 'Femmina', 'loredana@ciao.it', '33392285**', 1),
(2, 'Alession ', 'Speranza ', 'Spagna', 'Maschio', 'Lorendana@ciao.it', '33392285**', 2),
(3, 'Loredana', 'Colombo', 'Italia', 'Femmina', 'loredana@ciao.it', '33392285**', 1),
(4, 'Alession ', 'Speranza ', 'Spagna', 'Maschio', 'Lorendana@ciao.it', '33392285**', 2),
(5, 'Loredana', 'Colombo', 'Italia', 'Femmina', 'loredana@ciao.it', '33392285**', 2),
(6, 'Alession ', 'Speranza ', 'Spagna', 'Maschio', 'Lorendana@ciao.it', '33392285**', 2),
(7, 'Loredana', 'Colombo', 'Italia', 'Femmina', 'loredana@ciao.it', '33392285**', 1),
(8, 'Alession ', 'Speranza ', 'Spagna', 'Maschio', 'Lorendana@ciao.it', '33392285**', 2),
(9, 'Loredana', 'Colombo', 'Italia', 'Femmina', 'loredana@ciao.it', '33392285**', 2),
(10, 'Alession ', 'Speranza ', 'Spagna', 'Maschio', 'Lorendana@ciao.it', '33392285**', 2),
(11, 'Loredana', 'Colombo', 'Italia', 'Femmina', 'loredana@ciao.it', '33392285**', 1),
(12, 'Alession ', 'Speranza ', 'Spagna', 'Maschio', 'Lorendana@ciao.it', '33392285**', 2),
(13, 'Loredana', 'Colombo', 'Italia', 'Femmina', 'loredana@ciao.it', '33392285**', 2),
(14, 'Alession ', 'Speranza ', 'Spagna', 'Maschio', 'Lorendana@ciao.it', '33392285**', 2),
(15, 'Loredana', 'Colombo', 'Italia', 'Femmina', 'loredana@ciao.it', '33392285**', 1),
(16, 'Alession ', 'Speranza ', 'Spagna', 'Maschio', 'Lorendana@ciao.it', '33392285**', 2);

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
(2, '35_13.JPG'),
(3, 'tavolvo.JPG'),
(4, 'tavolvo2.JPG'),
(5, 'sala.JPG'),
(6, 'map.JPG'),
(7, 'seat_1.JPG'),
(8, 'seat_2.JPG'),
(9, 'seat_3.JPG'),
(10, 'seat_4.JPG'),
(11, '35_20.JPG'),
(12, '35_5.JPG'),
(13, 'tavolo1.JPG'),
(14, 'tavolo2.JPG'),
(15, 'tavolo3.JPG');

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_type`
--

CREATE TABLE `tbl_user_type` (
  `tbl_user_type_id` int(11) NOT NULL,
  `user_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_type`
--

INSERT INTO `tbl_user_type` (`tbl_user_type_id`, `user_type`) VALUES
(1, 'Loredana'),
(2, 'Alessio');

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
-- Indexes for table `tbl_customer_list`
--
ALTER TABLE `tbl_customer_list`
  ADD PRIMARY KEY (`customer_id`);

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
-- Indexes for table `tbl_user_type`
--
ALTER TABLE `tbl_user_type`
  ADD PRIMARY KEY (`tbl_user_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_seats`
--
ALTER TABLE `assign_seats`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `supplier_detail`
--
ALTER TABLE `supplier_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_customer_list`
--
ALTER TABLE `tbl_customer_list`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_file_uploader`
--
ALTER TABLE `tbl_file_uploader`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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

--
-- AUTO_INCREMENT for table `tbl_user_type`
--
ALTER TABLE `tbl_user_type`
  MODIFY `tbl_user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
