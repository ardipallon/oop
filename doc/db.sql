-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Loomise aeg: Veebr 05, 2018 kell 11:18 EL
-- Serveri versioon: 5.6.38
-- PHP versioon: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Andmebaas: `ardipall_testimine`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `content`
--

CREATE TABLE `content` (
  `content_id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE latin1_general_ci NOT NULL,
  `clean_content` text COLLATE latin1_general_ci NOT NULL,
  `title` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `is_hidden` tinyint(1) NOT NULL DEFAULT '0',
  `show_in_menu` tinyint(1) NOT NULL DEFAULT '0',
  `sort` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created` datetime NOT NULL,
  `is_first_page` tinyint(1) NOT NULL DEFAULT '0',
  `lang_id` varchar(2) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `KASUTAJAD`
--

CREATE TABLE `KASUTAJAD` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Eesnimi` varchar(60) NOT NULL,
  `Perenimi` varchar(60) NOT NULL,
  `Synnikuupaev` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Andmete tõmmistamine tabelile `KASUTAJAD`
--

INSERT INTO `KASUTAJAD` (`ID`, `Eesnimi`, `Perenimi`, `Synnikuupaev`) VALUES
(1, '', '', '0000-00-00'),
(2, 'bvhgjv', 'vhkvhk', '1999-02-10'),
(3, '', '', '0000-00-00'),
(4, '', '', '0000-00-00'),
(5, '', '', '0000-00-00'),
(6, '', '', '0000-00-00'),
(7, '', '', '0000-00-00'),
(8, '', '', '0000-00-00'),
(9, '', '', '0000-00-00'),
(10, '', '', '0000-00-00'),
(11, '', '', '0000-00-00'),
(12, '', '', '0000-00-00'),
(13, '', '', '0000-00-00'),
(14, '', '', '0000-00-00'),
(15, '', '', '0000-00-00'),
(16, '', '', '0000-00-00'),
(17, '', '', '0000-00-00'),
(18, '', '', '0000-00-00'),
(19, '', '', '0000-00-00'),
(20, '', '', '0000-00-00'),
(21, '', '', '0000-00-00'),
(22, '', '', '0000-00-00'),
(23, '', '', '0000-00-00'),
(24, '', '', '0000-00-00'),
(25, '', '', '0000-00-00');

--
-- Indeksid tõmmistatud tabelitele
--

--
-- Indeksid tabelile `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indeksid tabelile `KASUTAJAD`
--
ALTER TABLE `KASUTAJAD`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT tõmmistatud tabelitele
--

--
-- AUTO_INCREMENT tabelile `content`
--
ALTER TABLE `content`
  MODIFY `content_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT tabelile `KASUTAJAD`
--
ALTER TABLE `KASUTAJAD`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Loomise aeg: Veebr 12, 2018 kell 10:46 EL
-- Serveri versioon: 5.6.38
-- PHP versioon: 5.6.30

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Andmebaas: `ardipall_testimine`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `role_id` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `changed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indeksid tõmmistatud tabelitele
--

--
-- Indeksid tabelile `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT tõmmistatud tabelitele
--

--
-- AUTO_INCREMENT tabelile `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;SET FOREIGN_KEY_CHECKS=1;
COMMIT;
