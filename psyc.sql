-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2020 pada 04.07
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
-- Database: `psyc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(255) DEFAULT NULL,
  `bidang` varchar(100) DEFAULT NULL,
  `lulusan` varchar(100) DEFAULT NULL,
  `nomor_izinpraktik` int(11) DEFAULT NULL,
  `lokasi_praktik` varchar(255) DEFAULT NULL,
  `pengalaman_kerja` varchar(255) DEFAULT NULL,
  `foto` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `bidang`, `lulusan`, `nomor_izinpraktik`, `lokasi_praktik`, `pengalaman_kerja`, `foto`) VALUES
(1301, 'dr.Claire Browne, Sp.KJ', 'Spesialis Kedokteran Jiwa', 'Universitas Indonesia', 1213451289, 'Dayeuh Kolot, Bandung', '6 Tahun', 'foto1.jpg'),
(1302, 'dr.Shaun Murphy, Sp.KJ, FAPM', 'Spesialis Kedokteran Jiwa', 'Universitas Indonesia', 1213454123, 'Geger Kalong, Bandung', '7 Tahun', 'foto2.jpg'),
(1303, 'dr.Indah Kusumaningrum, Sp.KJ', 'Spesialis Kedokteran Jiwa', 'Universitas Padjadjaran', 1213459874, 'Buah Batu, Bandung', '5 Tahun', 'foto3.jpg'),
(1304, 'dr.Ratih Pradnyaswari, Sp.KJ', 'Spesialis Kedokteran Jiwa', 'Universitas Udayana', 1213450923, 'Cibiru, Bandung', '4 Tahun', 'foto4.jpg'),
(1305, 'dr.Strange, Sp.KJ, M.Kes', 'Spesialis Kedokteran Jiwa', 'Universitas Airlangga', 1213450981, 'Kopo, Bandung', '12 Tahun', 'foto5.jpg'),
(1306, 'dr.Hannibal Lecter, Sp.KJ, FAPM', 'Spesialis Kedokteran Jiwa', 'Universitas Sumatera Utara', 1213458923, 'Caringin, Bandung', '15 Tahun', 'foto6.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` int(11) NOT NULL,
  `id_dokter` int(11) DEFAULT NULL,
  `id_pasien` int(11) DEFAULT NULL,
  `jadwal_konsultasi` date DEFAULT NULL,
  `waktu` int(255) DEFAULT NULL,
  `harga_jasa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `id_dokter`, `id_pasien`, `jadwal_konsultasi`, `waktu`, `harga_jasa`) VALUES
(1501, 1303, 1401, '2020-03-12', 3, '600000'),
(1502, 1305, 1402, '2020-03-14', 3, '900000'),
(1503, 1302, 1403, '2020-03-17', 1, '250000'),
(1504, 1301, 1404, '2020-03-18', 1, '250000'),
(1505, 1305, 1405, '2020-03-18', 2, '600000'),
(1506, 1304, 1406, '2020-03-22', 2, '400000'),
(1507, 1302, 1407, '2020-03-25', 4, '900000'),
(1508, 1301, 1408, '2020-04-02', 2, '500000'),
(1509, 1304, 1409, '2020-04-05', 1, '200000'),
(15010, 1301, 14010, '2020-04-07', 2, '500000'),
(15011, 1305, 1407, '2020-04-09', 2, '500000'),
(15012, 1304, 1404, '2020-04-10', 3, '600000'),
(15013, 1303, 1401, '2020-04-13', 2, '400000'),
(15014, 1302, 1403, '2020-04-15', 2, '500000'),
(15015, 1306, 1402, '2020-04-19', 1, '300000'),
(15016, 1302, 1408, '2020-04-20', 1, '250000'),
(15017, 1301, 1409, '2020-04-24', 1, '250000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id`, `nama`, `keterangan`) VALUES
(1, 'citalopram (Celexa)', 'Antidepresan, untuk mengobati depresi ringan hingga berat, kegelisahan, dan kadang untuk kondisi lainnya'),
(2, 'fluoxetine (Prozac)', 'Antidepresan, untuk mengobati depresi ringan hingga berat, kegelisahan, dan kadang untuk kondisi lainnya'),
(3, 'antidepresan trisiklik', 'Antidepresan, untuk mengobati depresi ringan hingga berat, kegelisahan, dan kadang untuk kondisi lainnya'),
(4, 'antidepresan SSRI', 'Obat antikecemasan, untuk mengatasi berbagai jenis gangguan kecemasan atau gangguan panik (termasuk mencegah serangannya). Obat ini juga dapat mengendalikan insomnia dan agitasi yang menjadi gejala gangguan.'),
(5, 'benzodiazepine', 'Obat antikecemasan, untuk mengatasi berbagai jenis gangguan kecemasan atau gangguan panik (termasuk mencegah serangannya). Obat ini juga dapat mengendalikan insomnia dan agitasi yang menjadi gejala gangguan.'),
(6, 'carbamazepine (Carbatrol)', 'Obat penstabil mood, paling sering digunakan untuk mengobati gangguan bipolar yang ditandai dengan pergantian fase manik (bahagia luar biasa) dan depresif (putus asa dan nelangsa)'),
(7, 'valpromide', 'Obat penstabil mood, paling sering digunakan untuk mengobati gangguan bipolar yang ditandai dengan pergantian fase manik (bahagia luar biasa) dan depresif (putus asa dan nelangsa)'),
(8, 'clozapine', 'Obat antipsikotik, biasanya digunakan untuk mengobati gangguan psikotik seperti skizofrenia.'),
(9, 'aripiprazole', 'Obat antipsikotik, biasanya digunakan untuk mengobati gangguan psikotik seperti skizofrenia.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(255) DEFAULT NULL,
  `keluhan` varchar(255) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `keluhan`, `pekerjaan`, `alamat`) VALUES
(1401, 'Wahyu', 'Kesulitan dalam berkonsentrasi dan Mengingat', 'Supir', 'Ciperna, Bandung'),
(1402, 'Abigail', 'Phobia terhadap ketinggian', 'Pengusaha', 'Ledeng, Bandung'),
(1403, 'Adena', 'Serasa memiliki beberapa kepribadian yang lain', 'Programmer', 'Kebon Kelapa, Bandung'),
(1404, 'Asep', 'Kesulitan dalam berkonsentrasi dan Mengingat', 'Pedagang', 'Margahayu, Bandung'),
(1405, 'Mina', 'Merasa sangat cemas', 'Artis', 'Cikutra, Bandung'),
(1406, 'Berliana', 'Perubahan suasana hati yang drastis', 'Politikus', 'Lembang, Bandung'),
(1407, 'Nana', 'Merasakan nyeri padahal tidak ada luka pada tubuh', 'PNS', 'Ciwidey, Bandung'),
(1408, 'Ujang', 'sering sekali mengalami paranoid', 'PNS', 'Cibaduyut, Bandung'),
(1409, 'Irene', 'Phobia terhadap tempat gelap dan ruangan smepit', 'Model', 'Dago, Bandung'),
(14010, 'Teguh', 'sering sekali mengalami halusinasi yang berlebihan', 'PNS', 'Rancaekek, Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(3) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id`, `nama`, `keterangan`) VALUES
(1, 'Anxiety Disorders', 'keadaan di mana seseorang mengalami gangguan kecemasan saat melakukan respons pada suatu objek atau situasi'),
(2, 'Mood Disorders', 'Seseorang yang merasa sedih terus-menerus atau pernah mengalami rasa bahagia berlebihan'),
(3, 'Psychotic Disorders', 'Gejala paling umum dari gangguan ini adalah penderita sering berhalusinasi terhadap suatu gambaran atau suara yang tidak nyata'),
(4, 'Eating Disorders', 'Sikap dan perilaku ekstrem yang memengaruhi berat badan dan makanan si penderita, merasa selalu kelaparan dimanapun dan kapanpun atau tidak memiliki selera makan sama sekali'),
(5, 'Impulse Control and Addit', 'orang yang mengalami gangguan kejiwaan berupa kecanduan terhadap sesuatu. Penderita gangguan ini tidak dapat menahan dorongan untuk melakukan tindakan yang dapat membahayakan diri sendiri atau orang lain.'),
(6, 'Personality Disorders', 'Memiliki kepribadian yang ekstrem dan tidak fleksibel, seringkali menyusahkan orang lain dan / atau sering menyebabkan masalah di pekerjaan, sekolah maupun hubungan sosial'),
(7, 'Obsessive-Compulsive Diso', 'Pikiran atau ketakutan yang konstan terhadap sesuatu, hal ini menyebabkan mereka melakukan rutinitas atau ritual tertentu. Mereka memiliki obsesi dengan pemikiran yang terganggu dan melakukan ritual dengan kompulsif.'),
(8, 'Post-Traumatic Stress Dis', 'Pikiran dan kenangan yang abadi dan menakutkan dari pengalamannya di masa lalu, penderita gangguan ini cenderung mati rasa secara emosional.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `konsultasi_fk1` (`id_dokter`),
  ADD KEY `konsultasi_fk2` (`id_pasien`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD CONSTRAINT `konsultasi_fk1` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`),
  ADD CONSTRAINT `konsultasi_fk2` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
