-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 09 Jan 2020 pada 18.36
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dss`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot`
--

CREATE TABLE `bobot` (
  `id` int(100) NOT NULL,
  `bobot_1` int(100) NOT NULL,
  `bobot_2` int(100) NOT NULL,
  `bobot_3` int(100) NOT NULL,
  `bobot_4` int(100) NOT NULL,
  `bobot_5` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bobot`
--

INSERT INTO `bobot` (`id`, `bobot_1`, `bobot_2`, `bobot_3`, `bobot_4`, `bobot_5`) VALUES
(1, 90, 80, 75, 60, 80);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id` int(100) NOT NULL,
  `id_supplier_konversi` int(100) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id`, `id_supplier_konversi`, `value`) VALUES
(70, 11, '0.712'),
(71, 9, '0.885'),
(72, 8, '1'),
(73, 7, '0.761'),
(74, 6, '0.792'),
(75, 5, '0.615673');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(100) NOT NULL,
  `nama_supplier` varchar(100) DEFAULT NULL,
  `diskon` varchar(100) DEFAULT NULL,
  `pelayanan` varchar(100) DEFAULT NULL,
  `karoseri` varchar(100) DEFAULT NULL,
  `program_servis` varchar(100) DEFAULT NULL,
  `bonus` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suppliers`
--

INSERT INTO `suppliers` (`id`, `nama_supplier`, `diskon`, `pelayanan`, `karoseri`, `program_servis`, `bonus`) VALUES
(28, 'K.I.M Putra', '10', 'Cukup Memuaskan', 'Grade B', '50000', '4 Barang'),
(29, 'Hino', '35', 'Memuaskan', 'Grade A', '60000', '2 Barang'),
(30, 'Remaja Putra', '15', 'Sangat Memuaskan', 'Grade A', '75000', '3 Barang'),
(31, 'DGMI', '30', 'Sangat Memuaskan', 'Grade A', '100000', '5 Barang'),
(32, 'Srikandi', '25', 'Sangat Memuaskan', 'Grade A', '100000', '5 Barang'),
(34, 'Toyota', '30', 'Kurang Memuaskan', 'Grade A', '2000', '4 Barang');

--
-- Trigger `suppliers`
--
DELIMITER $$
CREATE TRIGGER `insert_supplier_konversi` AFTER INSERT ON `suppliers` FOR EACH ROW BEGIN
    INSERT INTO supplier_konversi(konversi_1, konversi_2, konversi_3, konversi_4, konversi_5, id_supplier)
    VALUES(0,0,0,0,0,new.id);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_konversi_bonus` AFTER UPDATE ON `suppliers` FOR EACH ROW BEGIN
    IF NEW.bonus = '1 Barang' THEN
        UPDATE supplier_konversi SET konversi_5='1' WHERE id_supplier = new.id;
    END IF;
    IF NEW.bonus = '2 Barang' THEN
        UPDATE supplier_konversi SET konversi_5='2' WHERE id_supplier = new.id;
    END IF;
    IF NEW.bonus = '3 Barang' THEN
        UPDATE supplier_konversi SET konversi_5='3' WHERE id_supplier = new.id;
    END IF;
    IF NEW.bonus = '4 Barang' THEN
        UPDATE supplier_konversi SET konversi_5='4' WHERE id_supplier = new.id;
    END IF;
    IF NEW.bonus = '5 Barang' THEN
        UPDATE supplier_konversi SET konversi_5='5' WHERE id_supplier = new.id;
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_konversi_diskon` AFTER UPDATE ON `suppliers` FOR EACH ROW BEGIN
    IF NEW.diskon >= 1 THEN
        UPDATE supplier_konversi SET konversi_1='1' WHERE id_supplier = new.id;
    END IF;
    IF NEW.diskon >= 26 THEN
        UPDATE supplier_konversi SET konversi_1='2' WHERE id_supplier = new.id;
    END IF;
    IF NEW.diskon >= 51 THEN
        UPDATE supplier_konversi SET konversi_1='3' WHERE id_supplier = new.id;
    END IF;
    IF NEW.diskon >= 76 THEN
        UPDATE supplier_konversi SET konversi_1='4' WHERE id_supplier = new.id;
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_konversi_karoseri` AFTER UPDATE ON `suppliers` FOR EACH ROW BEGIN
    IF NEW.karoseri = 'Grade C' THEN
        UPDATE supplier_konversi SET konversi_3='1' WHERE id_supplier = new.id;
    END IF;
    IF NEW.karoseri = 'Grade B' THEN
        UPDATE supplier_konversi SET konversi_3='2' WHERE id_supplier = new.id;
    END IF;
    IF NEW.karoseri = 'Grade A' THEN
        UPDATE supplier_konversi SET konversi_3='3' WHERE id_supplier = new.id;
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_konversi_pelayanan` AFTER UPDATE ON `suppliers` FOR EACH ROW BEGIN
    IF NEW.pelayanan = 'Sangat Kurang Memuaskan' THEN
        UPDATE supplier_konversi SET konversi_2='1' WHERE id_supplier = new.id;
    END IF;
    IF NEW.pelayanan = 'Kurang Memuaskan' THEN
        UPDATE supplier_konversi SET konversi_2='2' WHERE id_supplier = new.id;
    END IF;
    IF NEW.pelayanan = 'Cukup Memuaskan' THEN
        UPDATE supplier_konversi SET konversi_2='3' WHERE id_supplier = new.id;
    END IF;
    IF NEW.pelayanan = 'Memuaskan' THEN
        UPDATE supplier_konversi SET konversi_2='4' WHERE id_supplier = new.id;
    END IF;
    IF NEW.pelayanan = 'Sangat Memuaskan' THEN
        UPDATE supplier_konversi SET konversi_2='5' WHERE id_supplier = new.id;
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_konversi_program_service` AFTER UPDATE ON `suppliers` FOR EACH ROW BEGIN
    IF NEW.program_servis >= 0 THEN
        UPDATE supplier_konversi SET konversi_4='1' WHERE id_supplier = new.id;
    END IF;
    IF NEW.program_servis >= 25001 THEN
        UPDATE supplier_konversi SET konversi_4='2' WHERE id_supplier = new.id;
    END IF;
    IF NEW.program_servis >= 50001 THEN
        UPDATE supplier_konversi SET konversi_4='3' WHERE id_supplier = new.id;
    END IF;
    IF NEW.program_servis >= 75001 THEN
        UPDATE supplier_konversi SET konversi_4='4' WHERE id_supplier = new.id;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier_konversi`
--

CREATE TABLE `supplier_konversi` (
  `id` int(100) NOT NULL,
  `konversi_1` int(100) NOT NULL,
  `konversi_2` int(100) NOT NULL,
  `konversi_3` int(100) NOT NULL,
  `konversi_4` int(100) NOT NULL,
  `konversi_5` int(100) NOT NULL,
  `id_supplier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier_konversi`
--

INSERT INTO `supplier_konversi` (`id`, `konversi_1`, `konversi_2`, `konversi_3`, `konversi_4`, `konversi_5`, `id_supplier`) VALUES
(5, 1, 3, 2, 2, 4, 28),
(6, 2, 4, 3, 3, 2, 29),
(7, 1, 5, 3, 3, 3, 30),
(8, 2, 5, 3, 4, 5, 31),
(9, 1, 5, 3, 4, 5, 32),
(11, 2, 2, 3, 1, 4, 34);

--
-- Trigger `supplier_konversi`
--
DELIMITER $$
CREATE TRIGGER `insert_hasil` AFTER INSERT ON `supplier_konversi` FOR EACH ROW BEGIN
    INSERT INTO hasil(id_supplier_konversi, value)
    VALUES(new.id,0);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_supplier_konversi` (`id_supplier_konversi`);

--
-- Indeks untuk tabel `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `supplier_konversi`
--
ALTER TABLE `supplier_konversi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bobot`
--
ALTER TABLE `bobot`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `supplier_konversi`
--
ALTER TABLE `supplier_konversi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `hasil_ibfk_2` FOREIGN KEY (`id_supplier_konversi`) REFERENCES `supplier_konversi` (`id`);

--
-- Ketidakleluasaan untuk tabel `supplier_konversi`
--
ALTER TABLE `supplier_konversi`
  ADD CONSTRAINT `supplier_konversi_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `suppliers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
