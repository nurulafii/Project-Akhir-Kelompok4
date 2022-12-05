-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2022 pada 08.41
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nurvalbiky`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `nama` varchar(68) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `harga` int(12) NOT NULL,
  `quantity` int(12) NOT NULL,
  `total` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`id`, `nama`, `gambar`, `harga`, `quantity`, `total`) VALUES
(42, 'Chicken Kabuli', 'Rectangle 14.png', 45000, 1, 0),
(43, 'Lamb Kabuli', 'order1.png', 50000, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `harga` int(16) NOT NULL,
  `kategori` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `nama`, `keterangan`, `gambar`, `harga`, `kategori`) VALUES
(1, 'Lamb Kabuli', 'Nasi yang dimasak bersama kaldu daging kambing, susu kambing, dan minyak samin, disajikan dengan daging kambing.', 'order1.png', 50000, 'makanan'),
(2, 'Chicken Kabuli', 'Nasi yang dimasak bersama kaldu daging kambing, susu kambing, dan minyak samin, disajikan dengan daging ayam.', 'Rectangle 14.png', 45000, 'makanan'),
(3, 'Lamb Mandhi', 'Nasi yang dimasak dengan oven logam sehingga ber aroma smokey, dengan rempah-rempah berkualitas dan disajikan dengan daging kambing.', 'Lamb Mandhi.png', 60000, 'makanan'),
(4, 'Chicken Mandhi', 'Nasi yang dimasak dengan oven logam sehingga ber aroma smokey, dengan rempah-rempah berkualitas dan disajikan dengan daging ayam.', 'Chicken Mandhi.png', 50000, 'makanan'),
(5, 'Shawarma', 'Roti pita/tortilla dengan isian daging dan sayuran dengan saus hummus dan tahini.', 'Shawarma.png', 35000, 'makanan'),
(6, 'Tabbouleh', 'Hidangan dari tomat, potongan paterseli, mint, bulgur, daun bawang, dan dibumbui dengan minyak zaitun & perasan lemon.', 'Tabbouleh.png', 40000, 'makanan'),
(7, 'Lamb Curry', 'Makanan berkuah santan dengan potongan daging kambing dan rempah-rempah pilihan sehingga membuat kaya rasa.', 'Lamb Curry.png', 50000, 'makanan'),
(8, 'Canay Bread', 'Makanan yang berbahan dasar tepung gandum berbentuk tipis bundar, berlapis dan memiliki tekstur. disajikan bersama saus curry.', 'Canay Bread.png', 35000, 'makanan'),
(9, 'Ayran', 'Minuman berbahan dasar yogurt asam dingin, Bahan-bahan utamanya adalah yogurt, air dan garam.', 'ayran.png', 30000, 'minuman'),
(10, 'Arabian coffee', 'Kopi yang diseduh dari biji kopi arabika. Dengan rempah-rempah seperti kapulaga, jahe, serai, cengkih, kayu manis.', 'arabian coffe.png', 25000, 'minuman'),
(11, 'Saffron Milk', 'Susu unta dengan helaian saffron. Dengan ditaburi buah-buahan & kacang-kacangan kering diatas nya.', 'saffron milk.png', 20000, 'minuman'),
(12, 'Tamer Hindi', 'Perpaduan antara asam jawa dan cairan gula. Sehingga menghasilkan rasa asam segar.', 'tamer hindi.png', 30000, 'minuman'),
(13, 'Qishr', 'Minuman hangat yang terbuat dari kopi, jahe, kapulaga, dan kayu manis.', 'qishr.png', 35000, 'minuman'),
(14, 'Sahlab', 'Terbuat dari susu, gula, dan bubuk yang terbuat dari umbi-umbian, yang membuatnya lebih creamy.\r\n\r\n', 'sahlab.png', 35000, 'minuman'),
(15, 'Haleeb Ma\' Hal', 'Susu yang terbuat dari campuran kapulaga dan bermanfaat untuk menghangatkan perut.', 'Haleeb Ma\' Hal.png', 25000, 'minuman'),
(16, 'Karkadeh', 'Terbuat dari sejenis bunga yang disebut dengan Hibiscus Sabdariffa. ditambahkan cranberry, gula, dan madu.', 'karkadeh.png', 20000, 'minuman');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
