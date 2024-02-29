-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Feb 2024 pada 07.07
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir_repa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailpenjualan`
--

CREATE TABLE `detailpenjualan` (
  `id_detail` int(11) NOT NULL,
  `id_penjualan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detailpenjualan`
--

INSERT INTO `detailpenjualan` (`id_detail`, `id_penjualan`, `id_produk`, `jumlah_produk`, `subtotal`) VALUES
(1, 0, 2, 2, 10000.00),
(2, 0, 1, 2, 15000.00),
(3, 0, 1, 2, 15000.00),
(4, 0, 1, 2, 15000.00),
(5, 0, 1, 2, 15000.00),
(6, 0, 2, 2, 10000.00),
(7, 0, 4, 2, 15000.00),
(8, 0, 4, 2, 15000.00),
(9, 0, 4, 2, 15000.00),
(10, 0, 4, 2, 15000.00),
(11, 0, 4, 2, 15000.00),
(12, 0, 4, 2, 15000.00),
(13, 0, 4, 2, 15000.00),
(14, 0, 5, 2, 50000.00),
(15, 0, 7, 2, 15000.00),
(16, 0, 7, 2, 15000.00),
(17, 0, 1, 2, 15000.00),
(18, 0, 1, 2, 15000.00),
(19, 0, 1, 2, 15000.00),
(19, 0, 5, 2, 50000.00),
(20, 0, 2, 1, 10000.00),
(21, 0, 2, 2, 10000.00),
(22, 0, 1, 1, 15000.00),
(23, 0, 4, 4, 15000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `no_meja` int(11) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `no_meja`, `nomor_telepon`) VALUES
(1, 'repa', 2, ''),
(2, 'repaa', 3, ''),
(3, 'repaa', 3, ''),
(4, 'repaa', 3, ''),
(5, 'repaa', 3, ''),
(6, 'repaa', 3, ''),
(7, 'repaa', 3, ''),
(8, 'repaa', 3, ''),
(9, 'repaa', 3, ''),
(10, 'repaa', 3, ''),
(11, 'repaa', 3, ''),
(12, 'repaa', 3, ''),
(13, 'repaa', 3, ''),
(14, 'repaa', 3, ''),
(15, 'rere', 3, ''),
(16, 'rere', 3, ''),
(17, 'rere', 3, ''),
(18, 'rere', 3, ''),
(19, 'rere', 3, ''),
(20, 'rere', 3, ''),
(21, 'repa', 2, ''),
(22, 'repa', 3, ''),
(23, 'repa', 4, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `total_harga` decimal(10,2) NOT NULL,
  `id_pelanggan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `tanggal_penjualan`, `total_harga`, `id_pelanggan`) VALUES
(4, '2024-02-27', 0.00, 0),
(5, '2024-02-27', 0.00, 0),
(6, '2024-02-27', 0.00, 0),
(7, '2024-02-27', 0.00, 0),
(8, '2024-02-27', 0.00, 0),
(9, '2024-02-27', 0.00, 0),
(10, '2024-02-27', 0.00, 0),
(11, '2024-02-27', 0.00, 0),
(12, '2024-02-27', 0.00, 0),
(13, '2024-02-27', 0.00, 0),
(14, '2024-02-27', 0.00, 0),
(15, '2024-02-27', 0.00, 0),
(16, '2024-02-27', 0.00, 0),
(17, '2024-02-27', 0.00, 0),
(18, '2024-02-27', 0.00, 0),
(19, '2024-02-27', 0.00, 0),
(20, '2024-02-27', 0.00, 0),
(21, '2024-02-28', 0.00, 0),
(22, '2024-02-28', 0.00, 0),
(23, '2024-02-28', 0.00, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `stok` int(11) NOT NULL,
  `terjual` int(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `stok`, `terjual`, `foto`) VALUES
(2, 'lemon tea', 10000.00, 43, 7, '26022024073738.jpg'),
(4, 'makaroni', 15000.00, 46, 18, '26022024073855.jpg'),
(5, 'iga sapi bakar', 50000.00, 50, 4, '26022024074042.jpg'),
(7, 'jus alpukat', 15000.00, 46, 4, '28022024060253.jpg'),
(12, 'milo', 15000.00, 50, 0, '28022024060050.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'admin'),
(2, 'petugas', '202cb962ac59075b964b07152d234b70', 'petugas'),
(4, 'rere', '202cb962ac59075b964b07152d234b70', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  ADD KEY `id_penjualan` (`id_penjualan`,`id_produk`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
