-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 04, 2024 alle 22:55
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adidas website`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `carrello`
--

CREATE TABLE `carrello` (
  `id` int(11) NOT NULL,
  `id_utente` int(5) NOT NULL,
  `productID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `carrello`
--

INSERT INTO `carrello` (`id`, `id_utente`, `productID`) VALUES
(20, 1, 1),
(21, 1, 2),
(22, 1, 24),
(23, 1, 20),
(24, 1, 18);

-- --------------------------------------------------------

--
-- Struttura della tabella `preferiti`
--

CREATE TABLE `preferiti` (
  `id` int(11) NOT NULL,
  `id_utente` int(5) NOT NULL,
  `productID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `preferiti`
--

INSERT INTO `preferiti` (`id`, `id_utente`, `productID`) VALUES
(11, 3, 23),
(52, 1, 22),
(53, 1, 23),
(54, 1, 24);

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotti`
--

CREATE TABLE `prodotti` (
  `product_id` int(4) NOT NULL,
  `nome_prodotto` varchar(100) NOT NULL,
  `descrizione_prodotto` varchar(255) NOT NULL,
  `url_immagine` varchar(255) NOT NULL,
  `prezzo_prodotto` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `prodotti`
--

INSERT INTO `prodotti` (`product_id`, `nome_prodotto`, `descrizione_prodotto`, `url_immagine`, `prezzo_prodotto`) VALUES
(21, 'Campus 00s Comfort', 'Closure Elastic Lace Shoes', 'images/shoe1.avif', 65),
(22, 'Campus 00s Elastic Lace', 'Shoes Kids', 'images/shoe2.avif', 70),
(23, 'Scarpe Campus 00s', '', 'images/shoe3.avif', 110),
(24, 'Scarpe Samba OG', '', 'images/shoe4.avif', 120),
(25, 'Scarpe Samba OG Dark', '', 'images/shoe5.avif', 120);

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotti_api`
--

CREATE TABLE `prodotti_api` (
  `product_id` int(5) NOT NULL,
  `nome_prodotto` varchar(255) NOT NULL,
  `descrizione_prodotto` varchar(255) NOT NULL,
  `url_immagine` varchar(255) NOT NULL,
  `prezzo_prodotto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `prodotti_api`
--

INSERT INTO `prodotti_api` (`product_id`, `nome_prodotto`, `descrizione_prodotto`, `url_immagine`, `prezzo_prodotto`) VALUES
(1, 'Fjallraven - Foldsack No. 1 Backpack, Fits 15 Laptops', 'men\'s clothing', 'https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg', 109),
(2, 'Mens Casual Premium Slim Fit T-Shirts ', 'men\'s clothing', 'https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg', 22),
(3, 'Mens Cotton Jacket', 'men\'s clothing', 'https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg', 55),
(4, 'Mens Casual Slim Fit', 'men\'s clothing', 'https://fakestoreapi.com/img/71YXzeOuslL._AC_UY879_.jpg', 15),
(5, 'John Hardy Women\'s Legends Naga Gold & Silver Dragon Station Chain Bracelet', 'jewelery', 'https://fakestoreapi.com/img/71pWzhdJNwL._AC_UL640_QL65_ML3_.jpg', 695),
(6, 'Solid Gold Petite Micropave ', 'jewelery', 'https://fakestoreapi.com/img/61sbMiUnoGL._AC_UL640_QL65_ML3_.jpg', 168),
(7, 'White Gold Plated Princess', 'jewelery', 'https://fakestoreapi.com/img/71YAIFU48IL._AC_UL640_QL65_ML3_.jpg', 9),
(8, 'Pierced Owl Rose Gold Plated Stainless Steel Double', 'jewelery', 'https://fakestoreapi.com/img/51UDEzMJVpL._AC_UL640_QL65_ML3_.jpg', 10),
(9, 'WD 2TB Elements Portable External Hard Drive - USB 3.0 ', 'electronics', 'https://fakestoreapi.com/img/61IBBVJvSDL._AC_SY879_.jpg', 64),
(10, 'SanDisk SSD PLUS 1TB Internal SSD - SATA III 6 Gb/s', 'electronics', 'https://fakestoreapi.com/img/61U7T1koQqL._AC_SX679_.jpg', 109),
(11, 'Silicon Power 256GB SSD 3D NAND A55 SLC Cache Performance Boost SATA III 2.5', 'electronics', 'https://fakestoreapi.com/img/71kWymZ+c+L._AC_SX679_.jpg', 109),
(12, 'WD 4TB Gaming Drive Works with Playstation 4 Portable External Hard Drive', 'electronics', 'https://fakestoreapi.com/img/61mtL65D4cL._AC_SX679_.jpg', 114),
(13, 'Acer SB220Q bi 21.5 inches Full HD (1920 x 1080) IPS Ultra-Thin', 'electronics', 'https://fakestoreapi.com/img/81QpkIctqPL._AC_SX679_.jpg', 599),
(14, 'Samsung 49-Inch CHG90 144Hz Curved Gaming Monitor (LC49HG90DMNXZA) – Super Ultrawide Screen QLED ', 'electronics', 'https://fakestoreapi.com/img/81Zt42ioCgL._AC_SX679_.jpg', 999),
(15, 'BIYLACLESEN Women\'s 3-in-1 Snowboard Jacket Winter Coats', 'women\'s clothing', 'https://fakestoreapi.com/img/51Y5NI-I5jL._AC_UX679_.jpg', 56),
(16, 'Lock and Love Women\'s Removable Hooded Faux Leather Moto Biker Jacket', 'women\'s clothing', 'https://fakestoreapi.com/img/81XH0e8fefL._AC_UY879_.jpg', 29),
(17, 'Rain Jacket Women Windbreaker Striped Climbing Raincoats', 'women\'s clothing', 'https://fakestoreapi.com/img/71HblAHs5xL._AC_UY879_-2.jpg', 39),
(18, 'MBJ Women\'s Solid Short Sleeve Boat Neck V ', 'women\'s clothing', 'https://fakestoreapi.com/img/71z3kpMAYsL._AC_UY879_.jpg', 9),
(19, 'Opna Women\'s Short Sleeve Moisture', 'women\'s clothing', 'https://fakestoreapi.com/img/51eg55uWmdL._AC_UX679_.jpg', 7),
(20, 'DANVOUY Womens T Shirt Casual Cotton Short', 'women\'s clothing', 'https://fakestoreapi.com/img/61pHAEJ4NML._AC_UX679_.jpg', 12);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `id_utenti` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id_utenti`, `name`, `email`, `username`, `password`) VALUES
(1, 'Emma Cannavo', 'emmacannavo@gmail.com', 'emmax', '$2y$10$cRvfPS1GeCNhIyJ89MxgmulP2yoVuxdtHeboDKi7XZgmVKAnLyxii'),
(2, 'gabriele aiello', 'gabry02@gmail.com', 'gabry02', '$2y$10$Hem4bc5rqzOytVDxKfgQ2eByU0xp7klq7HfmSPJvN1oNkOzT88L5m'),
(3, 'utente prova', 'emaildiprova@gmail.com', 'utente', '$2y$10$bsmGpdxj4UetzaulaKl8BeHozBLzqRQvGJ/TL3PCtmI3hU.d2AqTy'),
(4, 'giulio rossi', 'giuliorossi@gmail.com', 'giulio', '$2y$10$a15O7kbBilCj2eQ6GBGZHOrGWtm8.6ZkKqnaAmjBBmX5Ip7c2gQHu'),
(5, 'utente prova 2', 'emailprova2@gmail.com', 'utente2', '$2y$10$g4GUY5ht2on9TAPRR1Svju1tj2NZQWxNtzYpu0lHbNMzLtCg3VZB6');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `carrello`
--
ALTER TABLE `carrello`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `preferiti`
--
ALTER TABLE `preferiti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `prodotti`
--
ALTER TABLE `prodotti`
  ADD PRIMARY KEY (`product_id`);

--
-- Indici per le tabelle `prodotti_api`
--
ALTER TABLE `prodotti_api`
  ADD PRIMARY KEY (`product_id`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`id_utenti`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `carrello`
--
ALTER TABLE `carrello`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT per la tabella `preferiti`
--
ALTER TABLE `preferiti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id_utenti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
