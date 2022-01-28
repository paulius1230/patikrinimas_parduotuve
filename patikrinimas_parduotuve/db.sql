-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2022 m. Sau 27 d. 19:54
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
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `cart_userid`
--

CREATE TABLE `cart_userid` (
  `prekes_id` int(11) NOT NULL,
  `vartotojo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `prekes`
--

CREATE TABLE `prekes` (
  `id` int(11) NOT NULL,
  `pavadinimas` varchar(255) NOT NULL,
  `kaina` float NOT NULL,
  `nuotrauka` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `prekes`
--

INSERT INTO `prekes` (`id`, `pavadinimas`, `kaina`, `nuotrauka`) VALUES
(1, 'Bananai', 0.99, 'https://cdn.barbora.lt/products/1d747537-6760-4098-ab24-8c658d1f9491_m.png'),
(2, 'Baltosios pupelės', 1.69, 'https://cdn.barbora.lt/products/e74634ca-a0b0-4f3a-a044-4571a26d59de_m.png'),
(3, 'Žalieji smidrai', 4.99, 'https://cdn.barbora.lt/products/539c5f1c-ecc6-4149-a475-6ec370f3fb4c_m.png'),
(4, 'Melionai', 1.7, 'https://cdn.barbora.lt/products/af78450e-be25-4c91-8337-ce81eca2854a_m.png'),
(5, ' Krepšinio kamuolys', 15.49, 'https://www.varle.lt/static/uploads/products/23/kre/krepsinio-kamuolys-training-b3g2000-guminis.jpg'),
(6, 'Meškerė', 47.4, 'https://ksd-images.lt/display/aikido/store/df70c73b9a69f1e639ab84b5ad9871ec.jpg'),
(7, 'Glaistas', 29.99, 'https://www.ermitazas.lt/out/pictures/generated/product/1/700_700_90/131494.jpg'),
(8, 'Tašas', 4.99, 'https://www.ermitazas.lt/out/pictures/generated/product/1/700_700_90/270364.jpg');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `vartotojai`
--

CREATE TABLE `vartotojai` (
  `id` int(11) NOT NULL,
  `vardas` varchar(255) NOT NULL,
  `pavarde` varchar(255) NOT NULL,
  `slaptazodis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `vartotojai`
--

INSERT INTO `vartotojai` (`id`, `vardas`, `pavarde`, `slaptazodis`) VALUES
(1, 'jonas', 'jonaitis', 'jonas123'),
(2, 'kestas', 'kestaitis', 'kestas123');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `vertinimas`
--

CREATE TABLE `vertinimas` (
  `vartotojo_id` int(11) NOT NULL,
  `vidurkis` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `vertinimas`
--

INSERT INTO `vertinimas` (`vartotojo_id`, `vidurkis`) VALUES
(1, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
