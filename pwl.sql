-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Des 2016 pada 04.50
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_grup` int(11) DEFAULT NULL,
  `id_userl` int(11) DEFAULT NULL,
  `pesan` varchar(255) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`id_chat`, `id_user`, `id_grup`, `id_userl`, `pesan`, `waktu`) VALUES
(41, 2, NULL, 1, 'Halo bongkrel', '2016-12-23 11:39:41'),
(42, 2, NULL, 1, 'ku', '2016-12-23 11:39:46'),
(43, 1, NULL, 2, 'Suparnodi', '2016-12-23 11:39:55'),
(44, 1, NULL, 2, 'Hai cung...', '2016-12-23 12:31:44'),
(45, 1, NULL, 3, 'Turmu', '2016-12-23 12:32:23'),
(46, 1, NULL, 2, 'sdf', '2016-12-23 13:01:50'),
(47, 1, NULL, 2, 'wer', '2016-12-23 13:02:00'),
(48, 1, NULL, 2, 'zxczxc', '2016-12-23 13:02:03'),
(49, 1, NULL, 3, 'Hai cung', '2016-12-23 13:02:10'),
(50, 1, NULL, 3, 'Hanya kau', '2016-12-23 13:04:58'),
(51, 1, NULL, 3, 'asd', '2016-12-23 13:08:19'),
(52, 1, NULL, 4, 'dfg', '2016-12-23 13:11:37'),
(53, 1, NULL, 4, 'dfg', '2016-12-23 13:11:49'),
(54, 2, NULL, 1, 'Hai jho', '2016-12-23 13:40:39'),
(55, 1, NULL, 2, 'Po Turmujal?', '2016-12-23 13:41:09'),
(56, 1, NULL, 2, 'Bar ngentut koe?', '2016-12-23 13:41:22'),
(57, 2, NULL, 1, 'Yo lagene?', '2016-12-23 13:43:32'),
(58, 1, NULL, 2, 'Ngentutan cen koe kok....', '2016-12-23 13:43:55'),
(59, 2, NULL, 1, 'La ben toh.', '2016-12-23 13:44:17'),
(60, 1, NULL, 8, 'Hai Seth....', '2016-12-23 13:48:34'),
(61, 1, NULL, 8, 'Why are you so stupid and ugly?', '2016-12-23 13:48:51'),
(62, 1, NULL, 8, 'I think you are the ugliest and stupidest man alive....', '2016-12-23 13:49:12'),
(63, 1, NULL, 8, 'You are like the ugliest monkey...', '2016-12-23 13:49:36'),
(64, 1, NULL, 8, 'Saya bukan apa-apa tapi bisa saja kami melakukak sesuatu yang menanyakan adanya sebuah perbuatan yang terjadi gila aja sih lhu karena akulan semua orang yang ada', '2016-12-23 13:50:34'),
(65, 2, NULL, 8, 'booh', '2016-12-23 15:45:11'),
(66, 6, NULL, 12, 'hai bang', '2016-12-23 21:03:24'),
(67, 12, NULL, 6, 'Po we.. jamal nok', '2016-12-23 21:03:48'),
(68, 6, NULL, 12, 'asj,dhsjafh', '2016-12-23 21:03:50'),
(69, 6, NULL, 12, 'dvmndsv', '2016-12-23 21:03:51'),
(70, 12, NULL, 13, 'Piye tong?', '2016-12-23 21:04:26'),
(71, 13, NULL, 12, 'mboh bang', '2016-12-23 21:04:31'),
(72, 12, NULL, 13, 'Bangtur', '2016-12-23 21:04:47'),
(73, 13, NULL, 12, 'jamal', '2016-12-23 21:04:52'),
(74, 12, NULL, 6, 'Kosssss', '2016-12-23 21:05:22'),
(75, 12, NULL, 6, 'po', '2016-12-23 21:07:55'),
(76, 12, NULL, 6, 'jlijhl', '2016-12-23 21:08:02'),
(77, 12, NULL, 6, 'hjuhj', '2016-12-23 21:08:04'),
(78, 12, NULL, 6, 'jjuihju', '2016-12-23 21:08:06'),
(79, 6, NULL, 12, ':)', '2016-12-23 21:12:33'),
(80, 6, NULL, 13, 'tong', '2016-12-23 21:14:13'),
(81, 13, NULL, 6, 'opo', '2016-12-23 21:15:25'),
(82, 12, NULL, 6, 'TT', '2016-12-23 21:16:29'),
(83, 6, NULL, 12, 'EEK', '2016-12-23 21:16:49'),
(84, 16, NULL, 15, 'tes', '2016-12-24 09:04:11'),
(85, 16, NULL, 14, 'tes', '2016-12-24 09:05:59'),
(86, 16, NULL, 14, 'halo', '2016-12-24 09:06:03'),
(87, 16, NULL, 14, 'mba pesen samyang', '2016-12-24 09:24:17'),
(88, 14, NULL, 16, 'samyang', '2016-12-24 09:25:05'),
(89, 16, NULL, 14, 'halooo', '2016-12-24 09:25:22'),
(90, 13, NULL, 16, 'hello', '2016-12-24 09:25:23'),
(91, 16, NULL, 14, 'salam kenal', '2016-12-24 09:25:26'),
(92, 14, NULL, 16, 'samyang 4', '2016-12-24 09:25:30'),
(93, 16, NULL, 13, 'hallo', '2016-12-24 09:26:36'),
(94, 16, NULL, 13, 'tes', '2016-12-24 09:27:27'),
(95, 13, NULL, 16, 'hi', '2016-12-24 09:27:27'),
(96, 16, NULL, 13, 'hallo', '2016-12-24 09:27:32'),
(97, 14, NULL, 13, 'hy', '2016-12-24 09:27:52'),
(98, 13, NULL, 14, 'dasc', '2016-12-24 09:27:54'),
(99, 13, NULL, 14, 'casd', '2016-12-24 09:27:56'),
(100, 13, NULL, 14, 'acsd', '2016-12-24 09:27:56'),
(101, 13, NULL, 14, 'adc', '2016-12-24 09:27:56'),
(102, 13, NULL, 14, 'asc', '2016-12-24 09:27:56'),
(103, 13, NULL, 14, 'sac', '2016-12-24 09:27:57'),
(104, 14, NULL, 13, 'ðŸ˜', '2016-12-24 09:28:15'),
(105, 14, NULL, 13, 'ðŸˆðŸ±', '2016-12-24 09:28:35'),
(106, 16, NULL, 14, 'tes', '2016-12-24 09:28:35'),
(107, 16, NULL, 14, 'ðŸ·ðŸ½ðŸ»', '2016-12-24 09:28:44'),
(108, 17, NULL, 13, 'assalmu alikum', '2016-12-24 10:35:29'),
(109, 13, NULL, 17, 'sd', '2016-12-24 10:36:03'),
(110, 13, NULL, 17, 'dfev', '2016-12-24 10:36:07'),
(111, 13, NULL, 17, 'svd', '2016-12-24 10:36:09'),
(112, 9, NULL, 13, 'jhlnlsdvkehvnewsd', '2016-12-26 15:50:52'),
(113, 9, NULL, 13, 'vsd', '2016-12-26 15:50:54'),
(114, 9, NULL, 13, 'vsde', '2016-12-26 15:50:54'),
(115, 9, NULL, 13, 'svd', '2016-12-26 15:50:55'),
(116, 9, NULL, 13, 'svd', '2016-12-26 15:50:55'),
(117, 13, NULL, 9, 'khklhjklj', '2016-12-26 15:51:00'),
(118, 12, NULL, 13, 'bgnbgngn', '2016-12-26 15:59:35'),
(119, 12, NULL, 13, 'hytgrf', '2016-12-26 15:59:40'),
(120, 12, NULL, 13, 'weer', '2016-12-26 16:00:52'),
(121, 12, NULL, 13, 'de', '2016-12-26 16:02:48'),
(122, 12, NULL, 13, 'poop', '2016-12-26 16:05:10'),
(123, 12, NULL, 13, 'jhgadjhwef', '2016-12-27 11:19:04'),
(124, 12, NULL, 13, 'vwewevew', '2016-12-27 11:19:06'),
(125, 1, NULL, 13, 'hai', '2016-12-27 11:19:34'),
(126, 13, NULL, 1, 'oi cuk bayar hutangmu besok ya', '2016-12-27 11:19:38'),
(127, 13, NULL, 1, 'oi', '2016-12-27 11:19:44'),
(128, 13, NULL, 1, 'hoi', '2016-12-27 11:19:55'),
(129, 13, NULL, 1, 'odas', '2016-12-27 11:19:56'),
(130, 13, NULL, 1, 'asdasd', '2016-12-27 11:20:01'),
(131, 13, NULL, 1, 'asd', '2016-12-27 11:20:02'),
(132, 13, NULL, 1, 'asd', '2016-12-27 11:20:04'),
(133, 13, NULL, 1, 'asd', '2016-12-27 11:20:05'),
(134, 13, NULL, 1, 'asd', '2016-12-27 11:20:05'),
(135, 13, NULL, 17, 'bal', '2016-12-27 11:20:13'),
(136, 13, NULL, 17, 'bal', '2016-12-27 11:20:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `grup`
--

CREATE TABLE `grup` (
  `id_grup` int(11) NOT NULL,
  `nama_group` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_group` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `teman`
--

CREATE TABLE `teman` (
  `id_user` int(11) NOT NULL,
  `id_userl` int(11) NOT NULL,
  `status` enum('Invite','Confirm') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `teman`
--

INSERT INTO `teman` (`id_user`, `id_userl`, `status`) VALUES
(1, 2, 'Confirm'),
(1, 3, 'Confirm'),
(4, 1, 'Confirm'),
(1, 5, 'Confirm'),
(1, 6, 'Confirm'),
(1, 7, 'Confirm'),
(1, 8, 'Confirm'),
(1, 9, 'Confirm'),
(2, 8, 'Confirm'),
(2, 3, 'Confirm'),
(2, 4, 'Confirm'),
(2, 7, 'Confirm'),
(12, 6, 'Confirm'),
(13, 6, 'Confirm'),
(13, 12, 'Confirm'),
(12, 11, 'Confirm'),
(13, 8, 'Confirm'),
(13, 3, 'Confirm'),
(13, 16, 'Confirm'),
(15, 13, 'Confirm'),
(15, 16, 'Confirm'),
(15, 8, 'Confirm'),
(15, 3, 'Confirm'),
(15, 5, 'Confirm'),
(15, 6, 'Confirm'),
(15, 9, 'Confirm'),
(15, 12, 'Confirm'),
(16, 14, 'Confirm'),
(14, 13, 'Confirm'),
(17, 13, 'Confirm'),
(9, 13, 'Confirm'),
(13, 1, 'Confirm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`) VALUES
(1, 'Pak Jho', 'pakjho', 'pakjho'),
(2, 'Turmujal Subaidin', 'turmujal', 'turmujal'),
(3, 'Gordhondamu Saidi', 'gordhon', 'gordhon'),
(4, 'Sakturandi Mail', 'saktu', 'saktu'),
(5, 'Hartono Sumbi', 'hartono', 'hartono'),
(6, 'Jamalika Hana', 'jamal', 'jamal'),
(7, 'Kurdhani Sohibin', 'kurd', 'kurd'),
(8, 'Bohemy Seth', 'seth', 'seth'),
(9, 'Jarkom Bulaikin', 'jarko', 'jarko'),
(12, 'Kondromani Bangtur', 'bang', 'bang'),
(13, 'arif', 'arif', 'arif'),
(14, 'Rita', 'ritamufra', 'opop'),
(15, 'Surbulatin Bikuni', 'bai', 'bai'),
(16, 'Andi', 'asd', '123'),
(17, 'Muhammad iqbal', '14.11.8238', 'ularkokbisa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `grup`
--
ALTER TABLE `grup`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD KEY `id_group` (`id_group`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
--
-- AUTO_INCREMENT for table `grup`
--
ALTER TABLE `grup`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `grup` (`id_grup`),
  ADD CONSTRAINT `pengguna_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
