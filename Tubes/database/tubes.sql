-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2022 pada 12.10
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hewan_a`
--

CREATE TABLE `hewan_a` (
  `id` int(11) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `nama_latin` varchar(200) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hewan_a`
--

INSERT INTO `hewan_a` (`id`, `nama`, `nama_latin`, `jenis`, `gambar`) VALUES
(1, 'Alap alap', 'Falconidae', 'Herbivora', '62a0092a10515.jpg'),
(2, 'Angsa', 'Cygnini', 'Herbivora', 'angsa.jpg'),
(3, 'Anjing', 'Canis lupus familiaris', 'Karnivora', 'anjing.jpg'),
(4, 'Anoa', 'Anoa', 'Herbivora', 'anoa.jpg'),
(5, 'Antelop', 'Antilope cervicapra', 'Herbivora', 'antelop.jpg'),
(6, 'Aphid', 'Aphidoidea', 'Herbivora', 'aphid.jpg'),
(7, 'Arwana', 'Scleropages formosus', 'Omnivora', 'arwana.jpg'),
(8, 'Ayam', 'Gallus gallus domesticus', 'Herbivora', 'ayam.png'),
(9, 'Ayam kalkun', 'Meleagris', 'Herbivora', 'ayamkalkun.jpg'),
(10, 'Ayam kate', 'Gallus gallus', 'Herbivora', 'ayamkate.jpg'),
(14, 'Ayam kampung', 'Gallus gallus domesticus', 'Herbivora', 'ayamkampung.jpg'),
(32, 'Babi', 'Sus scrofa domesticus', 'Omnivora', 'babi.jpg'),
(33, 'Badak', 'Rhinocerotidae', 'Herbivora', 'badak.jpg'),
(37, 'Bajing', 'Sciuridae', 'Herbivora', 'bajing.jpg'),
(38, 'Bangau', 'Ciconiidae', 'Karnivora', 'bangau.jpg'),
(39, 'Bangsat', 'Cimex lectularius', 'Omnivora', 'bangsat.jpg'),
(40, 'Banteng', 'Bos javanicus', 'Herbivora', 'banteng.jpg'),
(41, 'Bebek', 'Anas platyrhynchos domesticus', 'Herbivora', 'bebek.jpg'),
(43, 'Bekantan', 'Nasalis larvatus', 'Herbivora', '6297223306789.jpeg'),
(44, 'Bekicot', 'Achatina fulica', 'Omnivora', 'bekicot.jpg'),
(45, 'Belalang', 'Caelifera', 'Omnivora', 'belalang.jpg'),
(46, 'Belatung', 'Hermetia illucens', 'Omnivora', 'belatung.jpg'),
(47, 'Belibis', 'Dendrocygna', 'Herbivora', 'belibis.jpg'),
(48, 'Belut', 'Monopterus albus', 'Karnivora', 'belut.jpg'),
(49, 'Beo', 'Gracula religiosa', 'Herbivora', 'beo.jpg'),
(50, 'Berang Berang', 'Lutrinae', 'Karnivora', 'berangberang.jpg'),
(51, 'Beruang', 'Ursidae', 'Herbivora', 'beruang.jpg'),
(52, 'Beruk', 'Macaca nemestrina', 'Omnivora', 'beruk.jpg'),
(53, 'Betet ', 'Psittacula alexandri', 'Herbivora ', 'betet.jpg'),
(54, 'Betok', 'Anabas testudineus', 'Omnivora', 'betok.jpg'),
(55, 'Biawak ', 'Varanus', 'Karnivora', 'biawak.jpg'),
(56, 'Bintang Laut', 'Asteroidea', 'Omnivora', 'bintanglaut.jpg'),
(57, 'Biri Biri', 'Ovis aries', 'Herbivora', 'biribiri.jpg'),
(58, 'Bison', 'Bison', 'Herbivora', 'bison.jpg'),
(59, 'Buaya ', 'Crocodylidae', 'Karnivora', 'buaya.jpg'),
(60, 'Bunglon', 'Chamaeleonidae', 'Karnivora', 'bunglon.jpg'),
(61, 'Burung', 'Aves', 'Herbivora', 'burung.jpg'),
(64, 'Cacing', 'Lumbricina', 'Omnivora', 'cacing.jpg'),
(75, 'Dinosaurus', 'Dinosauria', 'Karnivora', '62958615e0926.jpg'),
(76, 'Domba ', 'Ovis aries', 'Herbivora', '6295b76b1ddbc.jpg'),
(77, 'Dodo', 'Raphus cucullatus', 'Herbivora', '6295b86438bd9.jpg'),
(78, 'Dugong', 'Dugong dugon', 'Herbivora', '6295b8b22e564.jpg'),
(79, 'Dara ', 'Columbidae', 'Herbivora', '6295b91a7de7c.jpg'),
(80, 'Dingo', 'Canis lupus dingo', 'Karnivora', '6295b961f12b0.jpg'),
(81, 'Dik Dik ', 'Madoqua', 'Herbivora', '6295b9b598bea.jpg'),
(82, 'Douc ', 'Pygathrix nemaeus', 'Omnivora', '6295ba7d56594.jpg'),
(83, 'Derik', 'Crotalus sp &amp; Sistrurus sp', 'Omnivora', '6295bacf3b8aa.jpg'),
(84, 'Elang ', 'Haliaeetus leucogaster', 'Karnivora', '62971fbe6aec3.jpg'),
(85, 'Echidna', 'Tachyglossidae', 'Omnivora', '6297201a27634.jpg'),
(86, 'Entok', 'Anatidae', 'Herbivora', '629720503d7b5.jpg'),
(87, 'Enggang', 'Bucerotidae', 'Omnivora', '629720b637894.jpg'),
(88, 'Emu', 'Dromaius novaehollandiae', 'Karnivora', '629720d76963b.jpg'),
(89, 'Elk', 'Cervus canadensis', 'Herbivora', '629720fb11e73.jpg'),
(90, 'Eland', 'Taurotragus oryx', 'Herbivora', '6297211dcda0f.jpg'),
(91, 'Ermine', 'Mustela erminea', 'Karnivora', '6297215748bc3.jpg'),
(92, 'Egret', 'Ardeidae', 'Karnivora', '6297219fa56b5.jpg'),
(93, 'Eider', 'Somateria', 'Omnivora', '629721c799f0b.jpg'),
(96, 'Falcon ', 'Falconidae', 'Omnivora', '62a00098140e5.jpg'),
(97, 'Flamingo', 'Phoenicopteridae', 'Karnivora', '62a00114695e3.jpg'),
(99, 'Gagak', 'Corvus', 'Omnivora / Karnivora', '62a2e2a8aea51.jpg'),
(100, 'Gajah', 'Elephas maximus', 'Herbivora', '62a2e2dda9a77.jpg'),
(101, 'Gibon', 'Ungka/Nama ilmiah Hylobatidae', 'Omnivora', '62a2e30faa3d1.jpg'),
(102, 'Gorilla', 'Gorilla', 'Omnivora', '62a2e34da2b22.jpg'),
(103, 'Gelatik', 'Padda', 'Herbivora', '62a2e384777dd.jpg'),
(104, 'Gurame ', 'Osphronemus goramy', 'Omnivora', '62a2e3bcb86e1.jpg'),
(105, 'Gerbil', 'Gerbillinae', 'Omnivora', '62a2e4350e2dc.jpg'),
(106, 'Gurita', 'Octopoda', 'Omnivora', '62a2e453b5a0a.jpg'),
(107, 'Guppy', 'Poecilia reticulata', 'Herbivora', '62a2e470adeb0.jpg'),
(108, 'Gelejra', 'Passer domesticus', 'Herbivora', '62a2e49f9cc23.jpg'),
(109, 'Hyrax', 'Hyracoidea', 'Omnivora', '62a2e55f34fe5.jpg'),
(110, 'Hoatzin', 'Ophisthocomus hoazin', 'Herbivora', '62a2e581959b8.jpg'),
(111, 'Hud Hud', 'Upupa', 'Herbivora', '62a2e5a3a0ea9.jpg'),
(112, 'Haring', 'Clupea harengus', 'Omnivora', '62a2e5c478e83.jpg'),
(113, 'Hagfish', 'Myxini', 'Omnivora', '62a2e5db534c4.jpg'),
(114, 'Ikan Kakap', 'Lutjanidae', 'Herbivora', '62a2e6a106aae.jpg'),
(115, 'Ikan Lele', 'Clariidae', 'Omnivora', '62a2e6bece7e2.jpg'),
(116, 'Jangkrik', 'Gryllidae', 'Omnivora', '62a2e81b67150.jpg'),
(117, 'Jerapah', 'Giraffa', 'Herbivora', '62a2e83522010.jpg'),
(118, 'Kalajengking', 'Scorpiones', 'Omnivora / Herbivora', '62a2e8535812a.jpg'),
(119, 'Kalkun', 'Meleagris', 'Herbivora', '62a2e8a2e7b0a.jpg'),
(120, 'Katak', 'Anura', 'Omnivora', '62a2e8d7a019a.jpg'),
(121, 'Kecoa', 'Blattodea', 'Omnivora', '62a2e8f40178d.jpg'),
(122, 'Kelelawar', 'Chiroptera', 'Herbivora', '62a2e9139cfb7.jpg'),
(123, 'Kelinci', 'Oryctolagus cuniculus', 'Herbivora', '62a2e9341fb3f.jpg'),
(124, 'Kepiting', 'Brachyura', 'Omnivora', '62a2e94a0d918.jpg'),
(125, 'Kera', 'Hominoidea', 'Omnivora', '62a2e96a5dd7b.jpg'),
(126, 'Kerang', 'Anadara granosa', 'Omnivora', '62a2e97dd765c.jpg'),
(127, 'Kerbau', 'Bubalus bubalis', 'Herbivora', '62a2e999b7704.jpg'),
(128, 'Koala', 'Phascolarctos cinereus', 'Herbivora', '62a2e9b4bb920.jpg'),
(129, 'Kucing', 'Felis catus', 'Karnivora', '62a2e9de16a1e.jpg'),
(130, 'Kuda', 'Equus caballus', 'Herbivora', '62a2ea259a1bd.jpg'),
(131, 'Kupu-Kupu', 'Rhopalocera', 'Herbivora', '62a2ea45e28ab.jpg'),
(132, 'Laba Laba', 'Araneae', 'Karnivora', '62a2ea63476f4.jpg'),
(133, 'Landak', 'Erinaceinae', 'Herbivora', '62a2ea7f4a7c2.jpg'),
(134, 'Lebah', 'Anthophila', 'Herbivora', '62a2ea9776d71.jpg'),
(135, 'Lintah', 'Hirudinea', 'Omnivora', '62a2eaacdcd95.jpg'),
(136, 'Lumba Lumba', 'Delphinus delphis', 'Karnivora', '62a2eac94b715.jpg'),
(137, 'Marmut', 'Marmota', 'herbivora', '62a2ebc137589.jpg'),
(138, 'Merak', 'Pavo muticus', 'Herbivora', '62a2ebd7b24ef.jpg'),
(139, 'Merpati', 'Columbidae', 'Karnivora', '62a2ebf24b4c7.jpg'),
(140, 'Monyet', 'Hominoidea', 'Omnivora', '62a2ec09e9bd3.jpg'),
(141, 'Musang', 'Paradoxurus hermaphroditus', 'Herbivora', '62a2ec2c67648.jpg'),
(142, 'Nyamuk', 'Culicidae', 'Omnivora', '62a2ec4968884.jpg'),
(143, 'Paus', 'Cetacea', 'Karnivora', '62a2ee5b94e22.jpg'),
(144, 'Penyu', 'Sepiida', 'Herbivora', '62a2ee8a06a9d.jpg'),
(145, 'Puyuh', 'Coturnix coturnix', 'Herbivora', '62a2eea623fe4.jpg'),
(146, 'Rayap', 'Isoptera', 'Omnivora', '62a2eebc6e85e.jpg'),
(147, 'Rubah', 'Vulpes vulpes', 'Karnivora', '62a2eed5d20ec.jpg'),
(148, 'Rusa', 'Cervidae', 'Herbivora', '62a2eeed05c3b.jpg'),
(149, 'Sapi', 'Bos taurus', 'Herbivora', '62a2ef089d00a.jpg'),
(150, 'Sarden', 'Sardina pilchardus', 'Herbivora', '62a2ef286a5f3.jpeg'),
(151, 'Singa', 'Panthera leo', 'Karnivora', '62a2ef4ce9028.jpg'),
(152, 'Simpanse', 'Pan troglodytes', 'Omnivora', '62a2ef6be46ad.jpg'),
(153, 'Siput', 'Gastropoda', 'Herbivora', '62a2ef9329c16.jpg'),
(154, 'Serigala', 'Canis lupus', 'Karnivora', '62a2efad20ad1.jpg'),
(155, 'Sotong', 'Sepiida', 'Herbivora', '62a2efbebb370.jpg'),
(156, 'Tawon', 'Vespinae', 'Herbivora', '62a2f2abe1f61.jpg'),
(157, 'Terwelu', 'Lepus', 'Herbivora', '62a2f2c8a93bd.jpg'),
(158, 'Tikus', 'Muridae', 'Omnivora Edan', '62a2f2dfe418c.jpg'),
(159, 'Tokek', 'Gekko gecko', 'Omnivora', '62a2f2f866b8b.jpg'),
(160, 'Tringgeling', 'Pholidota', 'Karnivora', '62a2f31a9137f.jpg'),
(161, 'Tupai', 'Scandentia', 'Omnivora', '62a2f38b40ac3.jpg'),
(162, 'Ubur - Ubur ', 'Scyphozoa', 'Omnivora', '62a2f3b058ec7.jpg'),
(163, 'Udang', 'Caridea', 'Herbivora', '62a2f3d13a33f.jpg'),
(164, 'Unta', 'Camelus', 'Herbivora', '62a2f3ef0ed14.jpg'),
(165, 'Ular', 'Serpentes', 'Karnivora', '62a2f40eb18c2.jpg'),
(166, 'Ulat', 'Attacus atlas', 'Herbivora', '62a2f43037939.jpeg'),
(167, 'Zebra', 'Equus zebra', 'Herbivora', '62a2f45fa0c59.jpg'),
(168, 'Zebu', 'Bos taurus indicus', 'Herbivora', '62a2f4af8b715.jpg'),
(169, 'Zokor', 'Myospalacinae', 'Karnivora', '62a2f4dc82546.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'alif ', '$2y$10$aIAp2nieewGJLD6VEvBwBeHvoeBP2L.1Sne51k56TDIC/PLbn6LXC'),
(2, 'admin', '$2y$10$aYxXckfLn3DbVmsyxYRcWe/ZVnd1xLeQeZ9V0SSMmsmZdgf95cFu6'),
(3, 'admin2', '$2y$10$RdxdkW2UZimnA4hy9ggJyOOZyeEkapRj54ffNIwdPJxdKj5knHbam');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hewan_a`
--
ALTER TABLE `hewan_a`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hewan_a`
--
ALTER TABLE `hewan_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
