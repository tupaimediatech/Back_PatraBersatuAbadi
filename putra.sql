-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2021 pada 17.50
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `putra`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(250) NOT NULL,
  `isi` text NOT NULL,
  `img` varchar(200) NOT NULL,
  `tanggal` datetime NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi`, `img`, `tanggal`, `link`) VALUES
(1, 'News Title Here', '<p><strong>Surakata</strong> - Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto consequuntur explicabo sequi officia sunt architecto saepe placeat nostrum aliquam at reiciendis maxime, rem optio, ipsa mollitia et delectus aperiam animi. ?? Lorem ipsum dolor sit amet consectetur adipisicing elit. Error a dolor obcaecati est, voluptate optio architecto nobis. Suscipit molestias earum possimus fuga fugit iste delectus nisi optio recusandae cumque officia dicta, aliquam repellat amet enim nulla pariatur dignissimos! Voluptatibus, libero nostrum. Ab in atque eius asperiores sit ut ex consectetur quis accusamus reprehenderit praesentium soluta ipsum, qui nesciunt dolorem, quaerat error magnam eveniet commodi saepe ipsa reiciendis veniam laboriosam minima.</p>\r\n\r\n<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam veniam velit enim, illum quos consequatur quis ratione eligendi dignissimos laudantium ea soluta facilis hic, exercitationem explicabo magnam nam adipisci sint eos, pariatur voluptate porro earum? Dicta quae et officia fuga non dolore sit ratione veritatis voluptas. Nesciunt architecto maiores similique, quidem consequatur iste impedit officiis magni optio numquam natus odit? Nemo architecto velit quo harum accusamus corporis ut cumque eum eveniet a. Ipsam minima velit, exercitationem et fugit eveniet aperiam doloremque corporis voluptatem necessitatibus beatae sit labore. Soluta, sunt rerum amet deserunt harum obcaecati minima repudiandae autem, dolorem quam mollitia.</p>\r\n', 'mbr-6.jpg', '2021-03-27 00:00:00', 'news-title-here'),
(2, 'Berita Untuk Percobaan', '<p>Isi Beita test percobaan</p>\r\n', 'features3.jpg', '2021-04-07 00:00:00', 'berita-untuk-percobaan'),
(3, 'Pemberitahuan Tentang Berita', '<p>Berita yang akan di tampilkan di halaman berita . maka harus di coba</p>\r\n', 'features4.jpg', '2021-04-07 00:00:00', 'pemberitahuan-tentang-berita'),
(4, 'Pembuatan berita harus sesuai dengan judul', '<p>pembuatan berita harus sesuai dengan judul</p>\r\n', 'features2.jpg', '2021-04-07 00:00:00', 'pembuatan-berita-harus-sesuai-dengan-judul');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `caption` text NOT NULL,
  `kategory` varchar(200) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `foto`, `caption`, `kategory`, `tanggal`) VALUES
(1, 'features1.jpg', 'Image Caption and Link', '1', '2021-03-28'),
(6, 'features2.jpg', 'Interaktif ', '3', '2021-04-02'),
(7, 'features3.jpg', 'Pembangunan', '3', '2021-04-02'),
(8, 'features4.jpg', 'Foodish', '2', '2021-04-02'),
(9, 'mbr-1.jpg', 'Treveling', '1', '2021-04-02'),
(10, 'mbr-1.png', 'Makan makan', '2', '2021-04-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `nama_service` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `service`
--

INSERT INTO `service` (`id_service`, `nama_service`, `img`, `deskripsi`, `link`) VALUES
(1, 'Travel', 'mbr-1.jpg', 'Lorep ipsum dolor sit amet.Lorep ipsum dolor sit amet.Lorep ipsum dolor sit amet.Lorep ipsum dolor sit', 'travel'),
(2, 'Food & Beverages', 'mbr-1.png', 'Lorep ipsum dolor sit amet Lorep ipsum dolor sit amet Lorep ipsum dolor sit amet', 'food_beverages'),
(3, 'Construction', 'mbr-3.jpg', 'Lorep ipsum dolor sit amet Lorep ipsum dolor sit amet Lorep ipsum dolor sit amet', 'construction'),
(4, 'Technical Consulting', 'mbr-2.png', 'Lorep ipsum dolor sit amet Lorep ipsum dolor sit amet Lorep ipsum dolor sit amet', 'technical_consulting');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur`
--

CREATE TABLE `struktur` (
  `id_struk` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `posisi` varchar(250) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `struktur`
--

INSERT INTO `struktur` (`id_struk`, `nama`, `posisi`, `deskripsi`, `img`) VALUES
(1, 'Muhammad Taib Mirza Aditya', 'Direktur Utama', 'labore possimus voluptatibus quo? Quia ab cupiditate ratione molestias, perferendis officia ipsum illo accusantiume dignissimos autem magni aliquam est accusamus, esse minima, corrupti id totam nihil, distinctio commodi laboriosam excepturi. Maiores sunt commodi et vero, esse, in velit fuga quis eos fugiat est alias, ullam reiciendis expedita sequi rem. Itaque quibusdam aperiam vel eos minus earum possimus adipisci veritatis iure, a voluptas culpa quas facilis nihil corporis ducimus?', 'dirut.jpg'),
(2, 'Julian Anggara Putra', 'Direktur Teknik, Operasional, dan Pemasaran', 'labore possimus voluptatibus quo? Quia ab cupiditate ratione molestias, perferendis officia ipsum illo accusantiume dignissimos autem magni aliquam est accusamus, esse minima, corrupti id totam nihil, distinctio commodi laboriosam excepturi. Maiores sunt commodi et vero, esse, in velit fuga quis eos fugiat est alias, ullam reiciendis expedita sequi rem. Itaque quibusdam aperiam vel eos minus earum possimus adipisci veritatis iure, a voluptas culpa quas facilis nihil corporis ducimus?', 'dirteknik.jpg'),
(3, 'Vernanda Lutfi Kurniawan', 'Direktur Keuangan', 'labore possimus voluptatibus quo? Quia ab cupiditate ratione molestias, perferendis officia ipsum illo accusantiume dignissimos autem magni aliquam est accusamus, esse minima, corrupti id totam nihil, distinctio commodi laboriosam excepturi. Maiores sunt commodi et vero, esse, in velit fuga quis eos fugiat est alias, ullam reiciendis expedita sequi rem. Itaque quibusdam aperiam vel eos minus earum possimus adipisci veritatis iure, a voluptas culpa quas facilis nihil corporis ducimus?', 'vernanda.jpg'),
(4, 'Bayu Bintoro Setiawan', 'Direktur Human Capital & General Affair', 'labore possimus voluptatibus quo? Quia ab cupiditate ratione molestias, perferendis officia ipsum illo accusantiume dignissimos autem magni aliquam est accusamus, esse minima, corrupti id totam nihil, distinctio commodi laboriosam excepturi. Maiores sunt commodi et vero, esse, in velit fuga quis eos fugiat est alias, ullam reiciendis expedita sequi rem. Itaque quibusdam aperiam vel eos minus earum possimus adipisci veritatis iure, a voluptas culpa quas facilis nihil corporis ducimus?', 'bayu.jpg'),
(5, 'Yu\'thika Almas', 'Dewan Komisaris', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolorem ipsa libero exercitationem, ipsam, beatae quasi culpa labore possimus voluptatibus quo? Quia ab cupiditate ratione molestias, perferendis officia ipsum illo accusantiume dignissimos autem magni aliquam est accusamus, esse minima, corrupti id totam nihil, distinctio commodi laboriosam excepturi. Maiores sunt commodi et vero, esse, in velit fuga quis eos fugiat est alias, ullam reiciendis expedita sequi rem. Itaque quibusdam aperiam vel eos minus earum possimus adipisci veritatis iure, a voluptas culpa quas facilis nihil corporis ducimus?', 'team5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testi` int(11) NOT NULL,
  `oleh` varchar(250) NOT NULL,
  `posisi` varchar(250) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `img` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id_testi`, `oleh`, `posisi`, `isi`, `tanggal`, `img`) VALUES
(1, 'Alexa', 'DESIGNER', 'Lorep ipsum dolor sit amet Lorep ipsum dolor sit amet Lorep ipsum dolor sit amet ', '2021-03-28', 'team3.jpg'),
(2, 'Linda', 'DEVELOPER ', 'Lorep ipsum dolor sit amet Lorep ipsum dolor sit amet Lorep ipsum dolor sit amet ', '2021-03-28', 'team2.jpg'),
(3, 'Ihsan  budi', 'BACK END', 'Lorep ipsum dolor sit amet Lorep ipsum dolor sit amet Lorep ipsum dolo ...', '2021-03-31', 'bayu.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `posisi` varchar(200) NOT NULL,
  `img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `posisi`, `img`) VALUES
(1, 'admin', 'admin', '$2y$10$9uAKnax9/7HoMVtMFWDUEe6GhtWdq5SIn75AWwHnYboKctXCfybVG', 'Admin', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indeks untuk tabel `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indeks untuk tabel `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id_struk`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id_struk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
