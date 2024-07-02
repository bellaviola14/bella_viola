-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Mar 2024 pada 22.38
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_pendataan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_cuti` bigint(20) UNSIGNED NOT NULL,
  `feedback_sekretaris` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback_pimpinan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `id_cuti`, `feedback_sekretaris`, `feedback_pimpinan`, `created_at`, `updated_at`) VALUES
(1, 9, NULL, NULL, '2023-06-20 21:40:32', '2023-06-20 21:40:32'),
(2, 10, NULL, NULL, '2023-06-25 02:44:26', '2023-06-25 02:44:26'),
(3, 11, NULL, NULL, '2024-02-26 15:46:28', '2024-02-26 15:46:28'),
(4, 12, NULL, NULL, '2024-02-26 15:51:16', '2024-02-26 15:51:16'),
(5, 13, NULL, NULL, '2024-03-04 00:20:32', '2024-03-04 00:20:32'),
(6, 14, NULL, NULL, '2024-03-04 00:21:20', '2024-03-04 00:21:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_mahasiswas`
--

CREATE TABLE `kelas_mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `angkatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas_mahasiswas`
--

INSERT INTO `kelas_mahasiswas` (`id`, `nama_kelas`, `angkatan`, `created_at`, `updated_at`) VALUES
(1, 'tess', '2024', '2024-03-20 17:15:39', '2024-03-20 17:20:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kelas` bigint(20) UNSIGNED DEFAULT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_mahasiswa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ttl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_masuk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_lainnya` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jalur_masuk` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `id_kelas`, `nim`, `nama_mahasiswa`, `jenis_kelamin`, `ttl`, `no_telp`, `email`, `tahun_masuk`, `alamat`, `foto`, `data_lainnya`, `created_at`, `updated_at`, `jalur_masuk`) VALUES
(1, 1, '1234', 'testt', 'Laki-Laki', 'ttl', 'notelp', 'test@gmail.com', '2024', 'loremsaaa', '1710992223273.logouser.png', '123', '2024-03-20 19:37:03', '2024-03-21 07:19:55', 'SMBPTN'),
(294, 1, '18210006', 'Ni Nyoman Triani', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(295, 1, '18210010', 'Prisilia Tesalonika Ropa', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(296, 1, '18210024', 'Elizabeth Sarmawati', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(297, 1, '18210027', 'Meysi Mamonto', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(298, 1, '18210015', 'Yohanes Hanni', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(299, 1, '18210008', 'Abimanyu Marvie Dwisuprapto', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(300, 1, '18210002', 'Okshyanli Loveqdeo Lembong', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(301, 1, '18210003', 'Shella mardefina Nirwana Wagania', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(302, 1, '18210030', 'Fransiskus Santosa Russel', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(303, 1, '18210029', 'Melania Umbas', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(304, 1, '18210026', 'Ferbriansyah Dirgantara Amu', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(305, 1, '18210028', 'Gloria Irene Komi', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(306, 1, '18210083', 'Sandra Keren Lumanauw', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(307, 1, '18210067', 'Abednego Patras Mellianto Horoni', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(308, 1, '18210092', 'Sidney Christian Momuat', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(309, 1, '18210078', 'Chrismes Immanuel Fritsi Mandolang', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(310, 1, '18210001', 'Kartika Aprilyontana', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(311, 1, '18210032', 'Wendi Davis Morin', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(312, 1, '18210039', 'Sultan Fajri Rambega', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(313, 1, '18210035', 'Grevito Pinontoan', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(314, 1, '18210052', 'Yoel Kandou Onibala', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(315, 1, '18210043', 'Sarah Raudatul Aulia Makalalag', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(316, 1, '18210041', 'Estevan Rivani Ruru', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(317, 1, '18210045', 'Blessing Christy Tuela', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(318, 1, '18210031', 'Cindy J. V. Banari', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(319, 1, '18210005', 'Yunita Friani ', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(320, 1, '18210046', 'Al Munajat', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(321, 1, '18210038', 'Bramy Gilbert Maki', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(322, 1, '18210051', 'Christopher Alessandro Mantilen Supit', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(323, 1, '18210047', 'Yungdo Yafet Daniel Dolot', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(324, 1, '18210059', 'Putri Meliana Hutasoit', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(325, 1, '18210056', 'Nanda Harsel Carla Pangkey', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(326, 1, '18210060', 'Hendri Michael Marthin Worang', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(327, 1, '18210068', 'Greity Julieta Rau', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(328, 1, '16210048', 'Mariano Joseph Tendean', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(329, 1, '18210034', 'Riando Pakasi Wongkar', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(330, 1, '18210050', 'Steward Rudolfo Yohanes Lumowa', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(331, 1, '18210009', 'Yofita Mulyaningsih', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(332, 1, '18210079', 'Indriani Fidelia Maki', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(333, 1, '18210097', 'Martinus Manjiken Patrick Larira', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(334, 1, '18210101', 'Fernandes Lemeng', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(335, 1, '18210099', 'Apricko Toar Faldiano Eman', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(336, 1, '18210107', 'Moh. Oktaf Sanusi', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(337, 1, '18210062', 'Kristin Nasca Ngala', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(338, 1, '18210072', 'Nasrania Imaniar Rumagit', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(339, 1, '18210087', 'Muhammad Rivav Samangka', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(340, 1, '18210076', 'Teofani Josua Kuhon', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(341, 1, '18210022', 'Cornelia Mayun', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(342, 1, '18210065', 'Hariyani Sonokarso', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(343, 1, '18210075', 'Miracle Joseph Jefta Supit', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(344, 1, '18210044', 'Jilbert Joy Polii', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(345, 1, '18210023', 'Gabriella Natasya Karungu', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(346, 1, '18210053', 'Jire Stefanus Pajow', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(347, 1, '18210081', 'Cannavaro Angga Rendy Tumundo', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(348, 1, '18210080', 'Mikhael Christian Masyiakh Wuatan', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(349, 1, '18210054', 'Yosua Surya Koagouw', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(350, 1, '18210011', 'Lucky Valentino Wuntu', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(351, 1, '18210086', 'Gerald Lumentut', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(352, 1, '18210094', 'Geraldi Mokodompit', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(353, 1, '18210069', 'Valdy Palita', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(354, 1, '18210061', 'Timothy David Jovani Sumual', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(355, 1, '18210091', 'Evan Sepryanta Bangun', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(356, 1, '18210090', 'Grasella Pandey', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(357, 1, '18210089', 'Hana Alvionita Manikome', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(358, 1, '18210018', 'Resni Manggopa', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(359, 1, '18210074', 'Clifford Enrico Christianovich Korengkeng', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(360, 1, '18210012', 'Daniel Denny Rumokoy', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(361, 1, '18210106', 'Exel Alvarenza Immanuel Sambow', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(362, 1, '18210077', 'Jianfi Andersen Tahulending', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(363, 1, '18210102', 'Lenni Puspita', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(364, 1, '18210014', 'Glendy Koleangan', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(365, 1, '18210085', 'Resi Manalu', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(366, 1, '18210007', 'Novelia Pratama Sahay', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(367, 1, '18210020', 'Kevin Epafras Sasombo', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(368, 1, '18210021', 'Juan Eungelion Endoh', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(369, 1, '18210019', 'Aldinata Saulu', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(370, 1, '18210016', 'Jeike Velycia Saul', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(371, 1, '18210093', 'Gianfranco David Hendry Senduk', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(372, 1, '18210004', 'Mister Noven Manik', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(373, 1, '18210048', 'Gilbert Jeanlee Mailangkay', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(374, 1, '18210066', 'Maldini Genaro Mogot', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(375, 1, '18210110', 'Nelson M. Togatorop', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(376, 1, '18210082', 'Topan Pasaribu', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(377, 1, '18210105', 'I Gusti Ngurah Wiranata', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(378, 1, '18210100', 'Ridwan Damar Yudha Adhitya', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(379, 1, '18210113', 'Maleakhi Genesis Panungkelan', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(380, 1, '18210112', 'Mita Sulistia Mokobombang', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(381, 1, '18210114', 'Stevanus Alfius Falentino Kembuan', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(382, 1, '18210042', 'Mohamad Alparizi Sahadan', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(383, 1, '18210033', 'Lorida Julensa Holiba Saknohsiwy', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(384, 1, '18210036', 'Billy Josua Pangemanan', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(385, 1, '18210096', 'Jeremy Egner Lantu', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(386, 1, '18210109', 'Chrysilia Omega Rimbing', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(387, 1, '18210115', 'Rafly Fikly Sumajaw', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(388, 1, '18210120', 'Yobel Fredy Nayoan', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(389, 1, '18210116', 'Jien Michelle Pisona Rumimpunu', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(390, 1, '18210063', 'Akmal Simbala', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(391, 1, '18210058', 'Frankley Jaynemark Mawuntu', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(392, 1, '18210111', 'Julivan Cornelius Runtulalo', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(393, 1, '18210073', 'Andre Renaldi Pijoh', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(394, 1, '18210117', 'Novel Christin Sepang', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(395, 1, '18210129', 'Sherina Glorian Punuh', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(396, 1, '18210070', 'Darol G. Kowureng', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(397, 1, '18210119', 'Juanda Hizkia Winerungan', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(398, 1, '18210040', 'Millennia Gabriela Najoan', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(399, 1, '18210118', 'Aditya Pratama Malah', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(400, 1, '18210123', 'Ebenheazer Giroth', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(401, 1, '18210131', 'Clara Idi', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(402, 1, '18210128', 'Clara Resita Tulenan', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(403, 1, '18210049', 'Keithney Saylent Pungus', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(404, 1, '18210125', 'Patrisya Falentina Friane Paath', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(405, 1, '18210124', 'Retno Ambarwati Waluyo', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(406, 1, '18210122', 'Gabriel Ovriando Palit', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(407, 1, '18210108', 'Kian Filipi Ginta Polii', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(408, 1, '18210017', 'Rizal Gunawan Herefa', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SNMPTN'),
(409, 1, '18210135', 'Meisi A. Korompot', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(410, 1, '18210130', 'Kyrie Eleison Notarius Polii', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(411, 1, '18210139', 'Vergyna Hermina Glorya Adam', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(412, 1, '18210133', 'Tesalonika Gracia Palilingan', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(413, 1, '18210142', 'Sherena Gabriella Olivia Lontoh', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(414, 1, '18210126', 'Millentri Sumanti', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(415, 1, '18210138', ' Renaldo Teofani Sakul', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(416, 1, '18210104', 'Sukma Arya Putra Walalangi', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(417, 1, '18210132', 'Rivaldo Refly Mamoto', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(418, 1, '18210134', 'Reynaldi Yeheskiel Rumenser', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(419, 1, '18210146', 'Vithiaz Yakobus Gustaf Montolalu', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(420, 1, '18210121', 'Vario Israely Kerap', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(421, 1, '18210143', 'Rizky Muhammad Revansyah Mertosono', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(422, 1, '18210140', 'Selly Annabella Jeinny Wessok', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(423, 1, '18210103', 'Gusmon Agus Jama', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(424, 1, '18210141', 'Yeheskiel Korengkeng', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(425, 1, '18210150', 'Tiara P. Biringpasemba', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(426, 1, '18210149', 'Josua Marcelino Rumajar', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(427, 1, '18210145', 'Aldi', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(428, 1, '18210152', 'Fredrik John Sanger', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(429, 1, '18210095', 'Jessica Tiffani Veronika Rumondor', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(430, 1, '18210136', 'Verel Kambey Lantang', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(431, 1, '18210057', 'Junaedi Monoarfa', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(432, 1, '18210137', 'Violetta Windira Kuhu', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(433, 1, '18210151', 'Jovan Axel Kuhu', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(434, 1, '18210147', 'Micraikel Jouke Maramis', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(435, 1, '18210148', 'Fadli Fransesko Wilar', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(436, 1, '18210144', 'Ligaya Cornelia Putri Dotulung', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'B2P'),
(437, 1, '18210098', 'Graciela Rebecca Gloria Turambi', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(438, 1, '18210153', 'Chrisna D. Mamuaja', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN'),
(439, 1, '18210037', 'Made Prayogi Reza Natha', NULL, NULL, NULL, NULL, NULL, NULL, '1710992223273.logouser.png', NULL, NULL, NULL, 'SBMPTN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `gender` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` bigint(20) DEFAULT NULL,
  `status_karyawan` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `tempat_lahir`, `tgl_lahir`, `gender`, `telp`, `alamat`, `jabatan`, `status_karyawan`, `level`, `foto`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$jZ25YtCQXhPfDkd3yGUaf.u22ImFcp1V4kxMrHncpzP5LesdEGdR.', NULL, '2023-06-19 08:39:16', '2023-06-19 08:39:16', NULL, NULL, NULL, NULL, NULL, NULL, 'aktif', 'admin', 'logo.png', 'Terverifikasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cuti` (`id_cuti`);

--
-- Indeks untuk tabel `kelas_mahasiswas`
--
ALTER TABLE `kelas_mahasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kelas_mahasiswas`
--
ALTER TABLE `kelas_mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=440;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedbacks_ibfk_1` FOREIGN KEY (`id_cuti`) REFERENCES `cutis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD CONSTRAINT `mahasiswas_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas_mahasiswas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
