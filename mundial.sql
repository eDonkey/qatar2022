-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 07, 2022 at 03:10 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mundial`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipos`
--

DROP TABLE IF EXISTS `equipos`;
CREATE TABLE IF NOT EXISTS `equipos` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  `grupo` varchar(1) NOT NULL,
  `flag` varchar(256) DEFAULT NULL,
  `pj` int(2) DEFAULT NULL,
  `pg` int(2) DEFAULT NULL,
  `pe` int(2) DEFAULT NULL,
  `pp` int(2) DEFAULT NULL,
  `puntos` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipos`
--

INSERT INTO `equipos` (`id`, `nombre`, `grupo`, `flag`, `pj`, `pg`, `pe`, `pp`, `puntos`) VALUES
(1, 'Qatar', 'A', 'https://flagcdn.com/16x12/qa.webp', 0, 0, 0, 0, 0),
(2, 'Ecuador', 'A', 'https://flagcdn.com/16x12/ec.webp', 0, 0, 0, 0, 0),
(3, 'Senegal', 'A', 'https://flagcdn.com/16x12/sn.webp', 0, 0, 0, 0, 0),
(4, 'Holanda', 'A', 'https://flagcdn.com/16x12/nl.webp', 0, 0, 0, 0, 0),
(5, 'Inglaterra', 'B', 'https://flagcdn.com/16x12/gb-eng.webp', 0, 0, 0, 0, 0),
(6, 'Iran', 'B', 'https://flagcdn.com/16x12/ir.webp', 0, 0, 0, 0, 0),
(7, 'USA', 'B', 'https://flagcdn.com/16x12/us.webp', 0, 0, 0, 0, 0),
(8, 'Euro Play off', 'B', 'https://flagcdn.com/16x12/eu.webp', 0, 0, 0, 0, 0),
(9, 'Argentina', 'C', 'https://flagcdn.com/16x12/ar.webp', 0, 0, 0, 0, 0),
(10, 'Arabia Saudita', 'C', 'https://flagcdn.com/16x12/sa.webp', 0, 0, 0, 0, 0),
(11, 'Mexico', 'C', 'https://flagcdn.com/16x12/mx.webp', 0, 0, 0, 0, 0),
(12, 'Polonia', 'C', 'https://flagcdn.com/16x12/pl.webp', 0, 0, 0, 0, 0),
(13, 'Francia', 'D', 'https://flagcdn.com/16x12/fr.webp', 0, 0, 0, 0, 0),
(14, 'Dinamarca', 'D', 'https://flagcdn.com/16x12/dk.webp', 0, 0, 0, 0, 0),
(15, 'Tunez', 'D', 'https://flagcdn.com/16x12/tn.webp', 0, 0, 0, 0, 0),
(16, 'IC Play Off 1', 'D', NULL, 0, 0, 0, 0, 0),
(17, 'Espa&ntilde;a', 'E', 'https://flagcdn.com/16x12/es.webp', 0, 0, 0, 0, 0),
(18, 'Alemania', 'E', 'https://flagcdn.com/16x12/de.webp', 0, 0, 0, 0, 0),
(19, 'Japon', 'E', 'https://flagcdn.com/16x12/jp.webp', 0, 0, 0, 0, 0),
(20, 'IC Play Off 2', 'E', NULL, 0, 0, 0, 0, 0),
(21, 'Belgica', 'F', 'https://flagcdn.com/16x12/be.webp', 0, 0, 0, 0, 0),
(22, 'Canada', 'F', 'https://flagcdn.com/16x12/ca.webp', 0, 0, 0, 0, 0),
(23, 'Marruecos', 'F', 'https://flagcdn.com/16x12/ma.webp', 0, 0, 0, 0, 0),
(24, 'Croacia', 'F', 'https://flagcdn.com/16x12/hr.webp', 0, 0, 0, 0, 0),
(25, 'Brasil', 'G', 'https://flagcdn.com/16x12/br.webp', 0, 0, 0, 0, 0),
(26, 'Serbia', 'G', 'https://flagcdn.com/16x12/rs.webp', 0, 0, 0, 0, 0),
(27, 'Suiza', 'G', 'https://flagcdn.com/16x12/ch.webp', 0, 0, 0, 0, 0),
(28, 'Camerun', 'G', 'https://flagcdn.com/16x12/cm.webp', 0, 0, 0, 0, 0),
(29, 'Portugal', 'H', 'https://flagcdn.com/16x12/pt.webp', 0, 0, 0, 0, 0),
(30, 'Ghana', 'H', 'https://flagcdn.com/16x12/gh.webp', 0, 0, 0, 0, 0),
(31, 'Uruguay', 'H', 'https://flagcdn.com/16x12/uy.webp', 0, 0, 0, 0, 0),
(32, 'Korea', 'H', 'https://flagcdn.com/16x12/kr.webp', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `estadios`
--

DROP TABLE IF EXISTS `estadios`;
CREATE TABLE IF NOT EXISTS `estadios` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  `detalles` text NOT NULL,
  `mapsurl` text NOT NULL,
  `latitud` decimal(10,8) DEFAULT NULL,
  `longitud` decimal(11,8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estadios`
--

INSERT INTO `estadios` (`id`, `nombre`, `detalles`, `mapsurl`, `latitud`, `longitud`) VALUES
(1, 'Al Bayt Stadium', 'Al-Bayt Stadium is a retractable roof football stadium in Al Khor, Qatar, intended to be used in time for matches in the 2022 FIFA World Cup, scheduled to kick off on November 21, 2022. The stadium\'s construction contract was awarded to Webuild S.p.A. and Cimolai in 2015. In January 2020, the stadium received sustainability certificates of green design, construction management and energy efficiency.\r\n\r\nThe stadium is located about 35 km away of Doha', 'https://en.wikipedia.org/wiki/Al_Bayt_Stadium', '25.65240838', '51.48784750'),
(2, 'Al Thumama Stadium', 'The Al Thumama Stadium is one of eight stadiums, which are built for the FIFA World Cup in Qatar 2022. It is located near Hamad International Airport. A joint venture between Al Jaber Engineering of Qatar and Tekfen Construction of Turkey is significantly involved in the construction work', 'https://en.wikipedia.org/wiki/Al_Thumama_Stadium', '25.23562103', '51.53278523'),
(3, 'Khalifa Int. Stadium', 'Khalifa International Stadium, also known as National Stadium, is a multi-purpose stadium in Doha, Qatar, as part of the Doha Sports City complex, which also includes Aspire Academy, Hamad Aquatic Centre, and the Aspire Tower. It is named after Khalifa bin Hamad Al Thani, Qatar\'s former Emir.', 'https://en.wikipedia.org/wiki/Khalifa_International_Stadium', '25.26382587', '51.44855412'),
(4, 'Ahmed bin Ali Stadium', 'Ahmad bin Ali Stadium popularly known as the Al-Rayyan Stadium, is a multi-purpose stadium in Al Rayyan, Qatar, It is currently used mostly for football matches and it is the home to Al-Rayyan Sports Club and Al-Kharitiyath Sports Club. The stadium is named after Ahmad bin Ali Al Thani, the Emir of Qatar from 1960 to 1972. The former stadium, built in 2003, had a seating capacity of 21,282 and was demolished in 2015. The new Al Rayyan Stadium has a seating capacity of 40,740', 'https://en.wikipedia.org/wiki/Ahmad_bin_Ali_Stadium', '25.33116641', '51.33980390'),
(5, 'Lusail Iconic Stadium', 'Lusail Iconic Stadium or Lusail International Stadium is a football stadium in Lusail, Qatar. The stadium will host the final game of the 2022 FIFA World Cup.\r\nThe Lusail Stadium, owned by the Qatar Football Association, is the biggest stadium in Qatar and one of eight stadiums being converted for the 2022 FIFA World Cup Qatar.\r\nThe stadium is located about 23 km north of Doha.', 'https://en.wikipedia.org/wiki/Lusail_Iconic_Stadium', '25.42091350', '51.49084057'),
(6, 'Stadium 974', 'The concept of the stadium was designed by Fenwick Iribarren Architects.[1][2] The stadium is constructed on a 450,000 square-meter waterfront site and is situated on an artificial promontory. It has a modular design, and incorporates 974 recycled shipping containers in homage to the site\'s industrial history and the international dialing code for Qatar (+974). Some of the containers house stadium amenities such as bathrooms and concessions. The shipping containers and seats used by the stadium are later to be dismantled and provided as assistance to other under-developed countries in the world; it is the first temporary venue in FIFA World Cup history.[4][5]', 'https://en.wikipedia.org/wiki/Stadium_974', '25.28916469', '51.56676505'),
(7, 'Education City Stadium', 'Education City Stadium is a football stadium which is located in Al Rayyan, Qatar, and was built as a venue in time for the upcoming 2022 FIFA World Cup held in Qatar. The stadium is located within several university campuses at the Qatar Foundation\'s Education City', 'https://en.wikipedia.org/wiki/Education_City_Stadium', '25.31098236', '51.42472258'),
(8, 'Al Janoub Stadium', 'Al-Janoub Stadium, is a retractable roof football stadium in Al-Wakrah, Qatar that was inaugurated on 16 May 2019. This is the second among the eight stadiums for the 2022 FIFA World Cup in Qatar, after the renovation of Khalifa International Stadium. It was designed by Iraqi architect Zaha Hadid together with the firm AECOM.\r\nThe stadium features a curvilinear postmodernist and neo-futurist design. The appearance of the roof was inspired by the sails of traditional Dhow boats, used by pearl divers from the region, weaving through currents of the Persian Gulf.\r\nIt will be the official seat of the football club Al-Wakrah SC, where matches for the Qatar Stars League will be held. The capacity of the stadium is 40,000, which is expected to reduce in half to 20,000 after the World Cup.', 'https://en.wikipedia.org/wiki/Al_Janoub_Stadium', '25.16063964', '51.57424548');

-- --------------------------------------------------------

--
-- Table structure for table `fasedegrupos`
--

DROP TABLE IF EXISTS `fasedegrupos`;
CREATE TABLE IF NOT EXISTS `fasedegrupos` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `equipoa` int(2) NOT NULL,
  `equipob` int(2) NOT NULL,
  `grupo` varchar(1) NOT NULL,
  `fechayhora` timestamp NULL DEFAULT NULL,
  `place` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasedegrupos`
--

INSERT INTO `fasedegrupos` (`id`, `equipoa`, `equipob`, `grupo`, `fechayhora`, `place`) VALUES
(1, 1, 2, 'A', '2022-11-21 10:00:00', 1),
(2, 3, 4, 'A', '2022-11-21 04:00:00', 2),
(3, 1, 3, 'A', '2022-11-25 13:00:00', 2),
(4, 2, 4, 'A', '2022-11-25 16:00:00', 3),
(5, 1, 4, 'A', '2022-11-29 15:00:00', 1),
(6, 2, 3, 'A', '2022-11-29 15:00:00', 3),
(13, 5, 6, 'B', '2022-11-21 13:00:00', 3),
(14, 7, 8, 'B', '2022-11-21 19:00:00', 4),
(15, 5, 7, 'B', '2022-11-25 19:00:00', 1),
(16, 6, 8, 'B', '2022-11-25 10:00:00', 4),
(17, 5, 8, 'B', '2022-11-29 19:00:00', 4),
(18, 6, 7, 'B', '2022-11-29 19:00:00', 2),
(25, 9, 10, 'C', '2022-11-22 10:00:00', 5),
(26, 11, 12, 'C', '2022-11-22 16:00:00', 6),
(27, 9, 11, 'C', '2022-11-26 19:00:00', 5),
(28, 10, 12, 'C', '2022-11-26 13:00:00', 7),
(29, 9, 12, 'C', '2022-11-30 19:00:00', 6),
(30, 10, 11, 'C', '2022-11-30 19:00:00', 5),
(31, 13, 16, 'D', '2022-11-22 21:00:00', 8),
(32, 14, 15, 'D', '2022-11-22 19:00:00', 7),
(33, 13, 14, 'D', '2022-11-26 16:00:00', 6),
(34, 16, 15, 'D', '2022-11-26 10:00:00', 8),
(35, 13, 15, 'D', '2022-11-30 21:00:00', 7),
(36, 16, 14, 'D', '2022-11-30 15:00:00', 8),
(43, 17, 20, 'E', '2022-11-23 16:00:00', 2),
(44, 18, 19, 'E', '2022-11-23 13:00:00', 3),
(45, 17, 18, 'E', '2022-11-27 19:00:00', 1),
(46, 20, 19, 'E', '2022-11-27 10:00:00', 4),
(47, 17, 19, 'E', '2022-12-01 19:00:00', 3),
(48, 20, 18, 'E', '2022-12-01 19:00:00', 1),
(55, 21, 22, 'F', '2022-11-23 19:00:00', 4),
(56, 23, 24, 'F', '2022-11-23 10:00:00', 1),
(57, 21, 23, 'F', '2022-11-27 13:00:00', 2),
(58, 22, 24, 'F', '2022-11-27 16:00:00', 3),
(59, 21, 24, 'F', '2022-12-01 15:00:00', 4),
(60, 22, 23, 'F', '2022-12-01 15:00:00', 2),
(61, 25, 26, 'G', '2022-11-24 19:00:00', 5),
(62, 27, 28, 'G', '2022-11-24 10:00:00', 8),
(63, 25, 27, 'G', '2022-11-28 16:00:00', 6),
(64, 26, 28, 'G', '2022-11-28 10:00:00', 8),
(65, 25, 28, 'G', '2022-12-02 19:00:00', 5),
(66, 26, 27, 'G', '2022-12-02 21:00:00', 6),
(67, 29, 30, 'H', '2022-11-24 16:00:00', 6),
(68, 31, 32, 'H', '2022-11-24 13:00:00', 7),
(69, 29, 31, 'H', '2022-11-28 19:00:00', 5),
(70, 30, 32, 'H', '2022-11-28 13:00:00', 7),
(71, 29, 32, 'H', '2022-12-02 15:00:00', 7),
(72, 30, 31, 'H', '2022-12-02 15:00:00', 8);

-- --------------------------------------------------------

--
-- Table structure for table `fasedegrupos_resultados`
--

DROP TABLE IF EXISTS `fasedegrupos_resultados`;
CREATE TABLE IF NOT EXISTS `fasedegrupos_resultados` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `userid` int(10) NOT NULL,
  `grupo` varchar(1) NOT NULL,
  `resultados` json NOT NULL,
  `creado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `actualizado` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
