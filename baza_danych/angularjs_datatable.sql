-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 01 Maj 2019, 11:37
-- Wersja serwera: 10.1.37-MariaDB
-- Wersja PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `angularjs_datatable`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `symbol` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `rodzaj` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `parametry` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `cena` varchar(15) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `user_data`
--

INSERT INTO `user_data` (`id`, `nazwa`, `symbol`, `rodzaj`, `parametry`, `cena`) VALUES
(3, 'rezystor', 'tht', 'weglowy', '0OM', '1,90'),
(4, 'rezystor', '0613', 'drutowy', '100OM', '1,09'),
(5, 'rezystor', '5w', 'ceramiczny', '1500OM', '2,15'),
(6, 'rezystor', '04w', 'metalizowany', '100OM', '0,67'),
(7, 'rezystor', 'drutowy', '5w', '150OM', '2,15'),
(8, 'kondensator', 'smd', 'polimerowy', '150uF', '3,19'),
(9, 'kondensator', 'x1', 'ceramiczny', '250pF', '0,15'),
(10, 'kondensator', 'bipolarny', 'elektrolityczny', '6uF', '3,49'),
(11, 'cewka', '1745', 'indukcyjna', '10uH', '3,68'),
(12, 'mikrokontroler', 'avr', 'flash', '8kB', '6,75'),
(13, 'czujnik', 'a-14', 'ultradzwiekowy', '40kHz', '29,50'),
(14, 'czujnik', 'a-14', 'ultradziekowy', '50kHz', '29,50'),
(15, 'czujnik', 'a-15', 'ultradzwiekowy', '50kHz', '35,50'),
(16, 'czujnik', 'gp2y', 'optyczny', '30cm', '23,20'),
(17, 'czujnik', 'itr', 'fotoelektryczny', '3mm', '1,19'),
(18, 'czujnik', 'lm3', 'temperatury', '0-100C', '1,32'),
(19, 'czujnik', 'mls', 'magnetyczny', '1A', '37,71'),
(20, 'rezystor', '0613', 'drutowy', '300OM', '2,01'),
(21, 'rezystor', '0614', 'drutowy', '300OM', '2,10'),
(22, 'rezystor', 'kh2', 'ceramiczny', '50OM', '1,22'),
(26, 'rezystor', 'mosfet', 'opornik', '10MW', '9,87'),
(27, '', '', '', '', ''),
(28, 'sda', 's', '', '', '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
