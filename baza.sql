-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Maj 2020, 11:21
-- Wersja serwera: 10.4.8-MariaDB
-- Wersja PHP: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `baza`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pilkarze`
--

CREATE TABLE `pilkarze` (
  `imie` text DEFAULT NULL,
  `nazwisko` text DEFAULT NULL,
  `wiek` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `pilkarze`
--

INSERT INTO `pilkarze` (`imie`, `nazwisko`, `wiek`) VALUES
('Kamil', 'Ryba', 28),
('Patryk', 'Witecki', 21),
('Karol', 'Stefanski', 24),
('Marcin', 'Damiencki', 19),
('Kamil', 'Urbaniak', 18),
('Krzysztof', 'Nowak', 31),
('Adrian', 'Wawrzyniarek', 30),
('Patryk', 'Nowacki', 28),
('Lionel', 'Messi', 22),
('Krystian', 'Adamczyk', 21),
('Adam', 'Barok', 29),
('Maciej', 'Kolka', 35),
('Dimitry', 'Kargol', 19),
('Zenon', 'Koral', 20)
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
