

CREATE TABLE `aliran_dana` (
  `id` INT(10) UNSIGNED NOT NULL,
  `penyimpanan_id` INT(10) UNSIGNED NOT NULL,
  `kas_id` INT(10) UNSIGNED NOT NULL,
  `jumlah` DOUBLE NOT NULL,
  `jenis_dana` VARCHAR(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` VARCHAR(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` DATE NOT NULL,
  `remember_token` VARCHAR(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aliran_dana`
--

INSERT INTO `aliran_dana` (`id`, `penyimpanan_id`, `kas_id`, `jumlah`, `jenis_dana`, `keterangan`, `tanggal`, `remember_token`, `created_at`, `updated_at`) VALUES
(21, 8, 1, 540000, 'Keluar', 'Peminjaman Dana (Gadai)', '2020-08-25', NULL, '2020-08-25 07:49:32', '2020-08-25 07:49:32'),
(22, 8, 1, 15000, 'Masuk', 'Biaya Administrasi', '2020-08-25', NULL, '2020-08-25 07:49:32', '2020-08-25 07:49:32'),
(23, 8, 1, 60000, 'Masuk', 'Bunga', '2020-08-25', NULL, '2020-08-25 07:49:32', '2020-08-25 07:49:32'),
(24, 8, 1, 60000, 'Masuk', 'Bunga per Bulan', '2020-08-25', NULL, '2020-08-25 07:57:01', '2020-08-25 07:57:01'),
(26, 8, 1, 540000, 'Lunas', 'Pembayaran Lunas Barang', '2020-08-25', NULL, '2020-08-25 08:36:51', '2020-08-25 08:36:51'),
(27, 10, 1, 380000, 'Keluar', 'Peminjaman Dana (Gadai)', '2020-09-03', NULL, '2020-09-03 03:31:28', '2020-09-03 03:31:28'),
(28, 10, 1, 15000, 'Masuk', 'Biaya Administrasi', '2020-09-03', NULL, '2020-09-03 03:31:28', '2020-09-03 03:31:28'),
(29, 10, 1, 20000, 'Masuk', 'Bunga', '2020-09-03', NULL, '2020-09-03 03:31:28', '2020-09-03 03:31:28'),
(30, 9, 1, 450000, 'Keluar', 'Peminjaman Dana (Gadai)', '2020-09-03', NULL, '2020-09-03 03:50:32', '2020-09-03 03:50:32'),
(31, 9, 1, 15000, 'Masuk', 'Biaya Administrasi', '2020-09-03', NULL, '2020-09-03 03:50:32', '2020-09-03 03:50:32'),
(32, 9, 1, 50000, 'Masuk', 'Bunga', '2020-09-03', NULL, '2020-09-03 03:50:32', '2020-09-03 03:50:32'),
(33, 14, 1, 1170000, 'Keluar', 'Peminjaman Dana (Gadai)', '2020-09-03', NULL, '2020-09-03 03:56:35', '2020-09-03 03:56:35'),
(34, 14, 1, 15000, 'Masuk', 'Biaya Administrasi', '2020-09-03', NULL, '2020-09-03 03:56:35', '2020-09-03 03:56:35'),
(35, 14, 1, 130000, 'Masuk', 'Bunga', '2020-09-03', NULL, '2020-09-03 03:56:35', '2020-09-03 03:56:35'),
(36, 14, 1, 130000, 'Masuk', 'Bunga per Bulan', '2020-09-03', NULL, '2020-09-03 04:26:33', '2020-09-03 04:26:33'),
(37, 15, 1, 810000, 'Keluar', 'Peminjaman Dana (Gadai)', '2020-09-05', NULL, '2020-09-04 21:59:38', '2020-09-04 21:59:38'),
(38, 15, 1, 15000, 'Masuk', 'Biaya Administrasi', '2020-09-05', NULL, '2020-09-04 21:59:38', '2020-09-04 21:59:38'),
(39, 15, 1, 90000, 'Masuk', 'Bunga', '2020-09-05', NULL, '2020-09-04 21:59:38', '2020-09-04 21:59:38'),
(40, 16, 1, 760000, 'Keluar', 'Peminjaman Dana (Gadai)', '2020-09-05', NULL, '2020-09-04 22:11:01', '2020-09-04 22:11:01'),
(41, 16, 1, 15000, 'Masuk', 'Biaya Administrasi', '2020-09-05', NULL, '2020-09-04 22:11:01', '2020-09-04 22:11:01'),
(42, 16, 1, 40000, 'Masuk', 'Bunga', '2020-09-05', NULL, '2020-09-04 22:11:01', '2020-09-04 22:11:01'),
(43, 17, 1, 360000, 'Keluar', 'Peminjaman Dana (Gadai)', '2020-09-05', NULL, '2020-09-04 22:19:55', '2020-09-04 22:19:55'),
(44, 17, 1, 15000, 'Masuk', 'Biaya Administrasi', '2020-09-05', NULL, '2020-09-04 22:19:55', '2020-09-04 22:19:55'),
(45, 17, 1, 40000, 'Masuk', 'Bunga', '2020-09-05', NULL, '2020-09-04 22:19:56', '2020-09-04 22:19:56'),
(46, 18, 1, 950000, 'Keluar', 'Peminjaman Dana (Gadai)', '2020-09-05', NULL, '2020-09-04 22:34:54', '2020-09-04 22:34:54'),
(47, 18, 1, 15000, 'Masuk', 'Biaya Administrasi', '2020-09-05', NULL, '2020-09-04 22:34:54', '2020-09-04 22:34:54'),
(48, 18, 1, 50000, 'Masuk', 'Bunga', '2020-09-05', NULL, '2020-09-04 22:34:54', '2020-09-04 22:34:54'),
(49, 20, 1, 900000, 'Keluar', 'Peminjaman Dana (Gadai)', '2020-09-05', NULL, '2020-09-04 22:42:17', '2020-09-04 22:42:17'),
(50, 20, 1, 15000, 'Masuk', 'Biaya Administrasi', '2020-09-05', NULL, '2020-09-04 22:42:17', '2020-09-04 22:42:17'),
(51, 20, 1, 100000, 'Masuk', 'Bunga', '2020-09-05', NULL, '2020-09-04 22:42:17', '2020-09-04 22:42:17'),
(52, 14, 1, 1300000, 'Lunas', 'Pembayaran Lunas Barang', '2020-09-05', NULL, '2020-09-04 23:24:07', '2020-09-04 23:24:07'),
(53, 15, 1, 300000, 'Lunas', 'Pembayaran Lunas Barang', '2020-09-05', NULL, '2020-09-04 23:52:22', '2020-09-04 23:52:22'),
(54, 16, 1, 1300000, 'Lunas', 'Pembayaran Lunas Barang', '2020-09-05', NULL, '2020-09-04 23:54:57', '2020-09-04 23:54:57'),
(55, 17, 1, 1000000, 'Lunas', 'Pembayaran Lunas Barang', '2020-09-05', NULL, '2020-09-04 23:55:50', '2020-09-04 23:55:50'),
(56, 18, 1, 10000, 'Masuk', 'Bunga per Bulan', '2020-09-05', NULL, '2020-09-05 00:00:19', '2020-09-05 00:00:19'),
(57, 18, 1, 10000, 'Masuk', 'Bunga per Bulan', '2020-09-05', NULL, '2020-09-05 00:01:01', '2020-09-05 00:01:01'),
(58, 21, 1, 1800000, 'Keluar', 'Peminjaman Dana (Gadai)', '2020-09-05', NULL, '2020-09-05 03:14:54', '2020-09-05 03:14:54'),
(59, 21, 1, 15000, 'Masuk', 'Biaya Administrasi', '2020-09-05', NULL, '2020-09-05 03:14:54', '2020-09-05 03:14:54'),
(60, 21, 1, 200000, 'Masuk', 'Bunga', '2020-09-05', NULL, '2020-09-05 03:14:54', '2020-09-05 03:14:54'),
(61, 21, 1, 1800000, 'Lunas', 'Pembayaran Lunas Barang', '2020-09-05', NULL, '2020-09-05 03:21:58', '2020-09-05 03:21:58'),
(62, 22, 1, 950000, 'Keluar', 'Peminjaman Dana (Gadai)', '2020-09-05', NULL, '2020-09-05 03:25:12', '2020-09-05 03:25:12'),
(63, 22, 1, 15000, 'Masuk', 'Biaya Administrasi', '2020-09-05', NULL, '2020-09-05 03:25:12', '2020-09-05 03:25:12'),
(64, 22, 1, 50000, 'Masuk', 'Bunga', '2020-09-05', NULL, '2020-09-05 03:25:12', '2020-09-05 03:25:12'),
(65, 22, 1, 950000, 'Lunas', 'Pembayaran Lunas Barang', '2020-09-05', NULL, '2020-09-05 03:28:15', '2020-09-05 03:28:15'),
(66, 11, 1, 4050000, 'Keluar', 'Peminjaman Dana (Gadai)', '2020-09-05', NULL, '2020-09-05 03:48:49', '2020-09-05 03:48:49'),
(67, 11, 1, 15000, 'Masuk', 'Biaya Administrasi', '2020-09-05', NULL, '2020-09-05 03:48:49', '2020-09-05 03:48:49'),
(68, 11, 1, 450000, 'Masuk', 'Bunga', '2020-09-05', NULL, '2020-09-05 03:48:49', '2020-09-05 03:48:49'),
(69, 13, 1, 4050000, 'Keluar', 'Peminjaman Dana (Gadai)', '2020-09-05', NULL, '2020-09-05 03:57:42', '2020-09-05 03:57:42'),
(70, 13, 1, 15000, 'Masuk', 'Biaya Administrasi', '2020-09-05', NULL, '2020-09-05 03:57:42', '2020-09-05 03:57:42'),
(71, 13, 1, 450000, 'Masuk', 'Bunga', '2020-09-05', NULL, '2020-09-05 03:57:42', '2020-09-05 03:57:42'),
(72, 13, 1, 450000, 'Masuk', 'Bunga per Bulan', '2020-09-06', NULL, '2020-09-06 01:00:29', '2020-09-06 01:00:29'),
(73, 23, 1, 760000, 'Keluar', 'Peminjaman Dana (Gadai)', '2020-09-06', NULL, '2020-09-06 08:21:56', '2020-09-06 08:21:56'),
(74, 23, 1, 15000, 'Masuk', 'Biaya Administrasi', '2020-09-06', NULL, '2020-09-06 08:21:56', '2020-09-06 08:21:56'),
(75, 23, 1, 40000, 'Masuk', 'Bunga', '2020-09-06', NULL, '2020-09-06 08:21:56', '2020-09-06 08:21:56'),
(76, 23, 1, 50000, 'Masuk', 'Bunga per Bulan', '2020-09-06', NULL, '2020-09-06 08:24:01', '2020-09-06 08:24:01'),
(77, 23, 1, 760000, 'Lunas', 'Pembayaran Lunas Barang', '2020-09-06', NULL, '2020-09-06 08:27:30', '2020-09-06 08:27:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_perusahaan`
--

CREATE TABLE `data_perusahaan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya_admin` double NOT NULL,
  `denda_per_hari` double NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_perusahaan`
--

INSERT INTO `data_perusahaan` (`id`, `nama_perusahaan`, `logo_perusahaan`, `biaya_admin`, `denda_per_hari`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ayo Gadai', 'test.jpg', 15000, 10000, '2IFqulRfUmdqPJKlWFntumaDGpXJh2mG7cRcwiItJwA5OKtQbzViUugJ2mMC', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_gadai`
--

CREATE TABLE `detail_gadai` (
  `id` int(10) UNSIGNED NOT NULL,
  `penyimpanan_id` int(10) UNSIGNED NOT NULL,
  `biaya_administrasi` int(10) UNSIGNED NOT NULL,
  `tanggal_gadai` date NOT NULL,
  `tanggal_jatuh_tempo` date NOT NULL,
  `tanggal_jatuh_tempo_tenggang` date NOT NULL,
  `tanggal_pelunasan` date NOT NULL,
  `tanggal_lelang` date NOT NULL,
  `perpanjangan_ke` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_gadai`
--

INSERT INTO `detail_gadai` (`id`, `penyimpanan_id`, `biaya_administrasi`, `tanggal_gadai`, `tanggal_jatuh_tempo`, `tanggal_jatuh_tempo_tenggang`, `tanggal_pelunasan`, `tanggal_lelang`, `perpanjangan_ke`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 8, 1, '2020-08-25', '2020-08-11', '0000-00-00', '2020-08-25', '2020-08-25', 1, 'tidak_ditebus', NULL, '2020-08-25 07:49:32', '2020-09-06 05:39:47'),
(11, 14, 1, '2020-09-03', '2020-09-03', '2020-11-13', '2020-09-05', '2020-09-03', 1, 'jatuh_tempo', NULL, '2020-09-03 03:56:35', '2020-09-06 05:34:48'),
(12, 15, 1, '2020-09-05', '2020-10-05', '2020-10-15', '2020-09-05', '2020-09-05', 0, 'Selesai', NULL, '2020-09-04 21:59:37', '2020-09-04 23:52:22'),
(13, 16, 1, '2020-09-05', '2020-10-05', '2020-10-10', '2020-09-05', '2020-09-05', 0, 'Selesai', NULL, '2020-09-04 22:11:01', '2020-09-04 23:54:57'),
(14, 17, 1, '2020-09-05', '2020-10-05', '2020-10-15', '2020-09-05', '2020-09-05', 0, 'Selesai', NULL, '2020-09-04 22:19:55', '2020-09-04 23:55:50'),
(15, 18, 1, '2020-09-05', '2020-01-05', '2021-01-10', '2020-10-05', '2020-09-05', 3, 'jatuh_tempo', NULL, '2020-09-04 22:34:54', '2020-09-06 05:37:45'),
(16, 20, 1, '2020-09-05', '2020-10-05', '2020-10-15', '2020-10-05', '2020-09-05', 0, 'aktif', NULL, '2020-09-04 22:42:17', '2020-09-04 22:42:17'),
(17, 21, 1, '2020-09-05', '2020-12-05', '2020-12-15', '2020-09-05', '2020-09-05', 2, 'Selesai', NULL, '2020-09-05 03:14:53', '2020-09-06 00:53:10'),
(18, 22, 1, '2020-09-05', '2020-10-05', '2020-10-10', '2020-09-05', '2020-09-05', 0, 'Selesai', NULL, '2020-09-05 03:25:12', '2020-09-05 03:28:15'),
(19, 11, 1, '2020-09-05', '2020-12-05', '2020-08-15', '2020-10-05', '2020-09-05', 2, 'lelang', NULL, '2020-09-05 03:48:49', '2020-09-06 05:40:58'),
(20, 13, 1, '2020-09-05', '2020-01-05', '2020-01-15', '2020-10-05', '2020-09-05', 3, 'lelang', NULL, '2020-09-05 03:57:42', '2020-09-06 05:40:48'),
(21, 23, 1, '2020-09-06', '2020-11-06', '2020-11-11', '2020-09-06', '2020-09-06', 1, 'Selesai', NULL, '2020-09-06 08:21:56', '2020-09-06 08:27:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kategori_barang`
--

CREATE TABLE `jenis_kategori_barang` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `nama_jenis_kategori_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bunga` int(11) NOT NULL,
  `waktu_tenggang` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis_kategori_barang`
--

INSERT INTO `jenis_kategori_barang` (`id`, `kategori_id`, `nama_jenis_kategori_barang`, `bunga`, `waktu_tenggang`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kulkas', 10, 10, NULL, '2020-08-24 07:51:40', '2020-08-24 07:51:40'),
(2, 2, 'Android', 5, 5, NULL, '2020-08-27 01:50:59', '2020-08-27 01:59:52'),
(3, 3, 'Asus ROG', 10, 10, NULL, '2020-08-27 01:51:10', '2020-08-27 01:51:10'),
(4, 4, 'Emas', 5, 5, NULL, '2020-08-27 01:51:24', '2020-08-27 01:51:24'),
(5, 5, 'Honda Beat', 10, 10, NULL, '2020-08-27 01:51:53', '2020-08-27 01:51:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas`
--

CREATE TABLE `kas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rekening` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pemilik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo_awal` double NOT NULL,
  `saldo_akhir` double NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kas`
--

INSERT INTO `kas` (`id`, `nama_kas`, `bank`, `no_rekening`, `nama_pemilik`, `saldo_awal`, `saldo_akhir`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ayo Gadai', 'BNI', '01230123', 'Ayo Gadai', 10000000, 100000, NULL, '2020-08-24 07:51:05', '2020-09-07 02:46:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_barang`
--

CREATE TABLE `kategori_barang` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori_barang`
--

INSERT INTO `kategori_barang` (`id`, `nama_kategori_barang`, `foto_barang`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Elektronik', '56.jpg', NULL, '2020-08-24 07:51:31', '2020-08-24 07:51:31'),
(2, 'Handphone', '123.jpg', NULL, '2020-08-27 01:48:13', '2020-08-27 01:48:13'),
(3, 'Laptop', '1111.jpg', NULL, '2020-08-27 01:48:33', '2020-08-27 01:48:34'),
(4, 'Perhiasan', 'cek7.png', NULL, '2020-08-27 01:50:08', '2020-08-27 01:50:10'),
(5, 'Kendaraan', 'telepon.png', NULL, '2020-08-27 01:50:26', '2020-08-27 01:50:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_file_pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `metode_pembayaran`
--

INSERT INTO `metode_pembayaran` (`id`, `nama_pembayaran`, `jenis`, `foto_file_pembayaran`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Transfer', 'BNI (01230421)', '123.jpg', NULL, '2020-08-24 08:02:18', '2020-08-24 08:02:18'),
(2, 'Manual', 'Datang ke kantor', '1111.jpg', NULL, '2020-08-24 08:02:34', '2020-08-24 08:02:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_07_31_172901_create_profile_table', 1),
(4, '2020_08_01_110306_create_kas_table', 1),
(5, '2020_08_03_051715_create_data_perusahaan_table', 1),
(6, '2020_08_07_045416_create_kategori_barang_table', 1),
(7, '2020_08_07_045417_create_jenis_jenis_kategori_table', 1),
(8, '2020_08_07_045445_create_penyimpanan_table', 1),
(9, '2020_08_07_045446_create_detail_gadai_table', 1),
(10, '2020_08_21_091417_create_aliran_dana_table', 1),
(11, '2020_08_24_092533_create_metode_pembayaran_table', 1),
(12, '2020_08_24_092534_create_pembayaran_bunga_table', 1),
(13, '2020_08_24_092550_create_pembayaran_lunas_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_bunga`
--

CREATE TABLE `pembayaran_bunga` (
  `id` int(10) UNSIGNED NOT NULL,
  `gadai_id` int(10) UNSIGNED NOT NULL,
  `metode_id` int(10) UNSIGNED NOT NULL,
  `jumlah` double NOT NULL,
  `tanggal_pembayaran_bunga` date NOT NULL,
  `foto_file_pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembayaran_bunga`
--

INSERT INTO `pembayaran_bunga` (`id`, `gadai_id`, `metode_id`, `jumlah`, `tanggal_pembayaran_bunga`, `foto_file_pembayaran`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 7, 1, 60000, '2020-08-25', 'telepon.png', 'Terima', NULL, '2020-08-25 07:55:38', '2020-08-25 07:57:01'),
(3, 11, 1, 130000, '2020-09-03', '56.jpg', 'Terima', NULL, '2020-09-03 04:05:25', '2020-09-03 04:26:33'),
(4, 15, 2, 10000, '2020-09-05', '1212.png', 'Terima', NULL, '2020-09-05 00:01:02', '2020-09-05 00:01:02'),
(5, 17, 2, 2000000, '2020-09-05', 'cek3.jpg', 'Terima', NULL, '2020-09-05 03:17:07', '2020-09-06 00:53:09'),
(6, 17, 2, 2000000, '2020-09-05', '1212.png', 'Terima', NULL, '2020-09-05 03:18:38', '2020-09-05 03:41:43'),
(7, 7, 1, 60000, '2020-09-05', '1213.png', 'Terima', NULL, '2020-09-05 03:34:09', '2020-09-05 03:35:05'),
(8, 7, 1, 60000, '2020-09-05', '1212.png', 'Terima', NULL, '2020-09-05 03:40:07', '2020-09-05 03:40:40'),
(9, 19, 1, 450000, '2020-09-05', '1212.png', 'Terima', NULL, '2020-09-05 03:49:40', '2020-09-05 03:51:16'),
(10, 20, 1, 450000, '2020-09-05', '1212.png', 'Menunggu', NULL, '2020-09-05 03:58:29', '2020-09-06 01:00:29'),
(11, 7, 1, 60000, '2020-09-06', '1212.png', 'Terima', NULL, '2020-09-06 00:55:00', '2020-09-06 00:59:41'),
(12, 21, 1, 50000, '2020-09-06', '5453.jpg', 'Terima', NULL, '2020-09-06 08:23:21', '2020-09-06 08:24:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_lunas`
--

CREATE TABLE `pembayaran_lunas` (
  `id` int(10) UNSIGNED NOT NULL,
  `gadai_id` int(10) UNSIGNED NOT NULL,
  `metode_id` int(10) UNSIGNED NOT NULL,
  `jumlah` double NOT NULL,
  `tanggal_pembayaran_lunas` date NOT NULL,
  `foto_file_pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembayaran_lunas`
--

INSERT INTO `pembayaran_lunas` (`id`, `gadai_id`, `metode_id`, `jumlah`, `tanggal_pembayaran_lunas`, `foto_file_pembayaran`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 7, 1, 540000, '2020-08-25', '123.jpg', 'Lunas', NULL, '2020-08-25 08:02:22', '2020-08-25 08:36:51'),
(2, 12, 2, 300000, '2020-09-05', '1212.png', 'Lunas', NULL, '2020-09-04 23:52:22', '2020-09-04 23:52:22'),
(3, 13, 2, 1300000, '2020-09-05', '1212.png', 'Lunas', NULL, '2020-09-04 23:54:57', '2020-09-04 23:54:57'),
(4, 14, 2, 1000000, '2020-09-05', '1212.png', 'Lunas', NULL, '2020-09-04 23:55:50', '2020-09-04 23:55:50'),
(5, 17, 1, 1800000, '2020-09-05', '1212.png', 'Lunas', NULL, '2020-09-05 03:21:59', '2020-09-05 03:21:59'),
(6, 18, 1, 950000, '2020-09-05', '1212.png', 'Lunas', NULL, '2020-09-05 03:26:50', '2020-09-05 03:28:14'),
(7, 21, 1, 760000, '2020-09-06', '1212.png', 'Lunas', NULL, '2020-09-06 08:25:27', '2020-09-06 08:27:30'),
(8, 21, 1, 760000, '2020-09-06', '1213.png', 'Menunggu', NULL, '2020-09-06 08:26:19', '2020-09-06 08:26:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyimpanan`
--

CREATE TABLE `penyimpanan` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `jenis_kategori_id` int(10) UNSIGNED NOT NULL,
  `berat` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `foto_file_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk_tipe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_pembelian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_jual_saat_ini` double NOT NULL,
  `jumlah_pinjaman` double NOT NULL,
  `kelengkapan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penyimpanan`
--

INSERT INTO `penyimpanan` (`id`, `user_id`, `jenis_kategori_id`, `berat`, `total`, `foto_file_barang`, `merk_tipe`, `kondisi`, `tahun_pembelian`, `harga_jual_saat_ini`, `jumlah_pinjaman`, `kelengkapan`, `status`, `keterangan`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 4, 1, 0, 0, '1111.jpg', 'wdawd', 'awdawd', '2020-08-25', 700000, 600000, '', 'Aktif', '', NULL, '2020-08-25 07:48:38', '2020-08-25 07:49:32'),
(9, 4, 1, 0, 0, 'telepon.png', 'dawawd', 'awdawdawd', '2020-08-25', 1200000, 500000, '', 'Aktif', '', NULL, '2020-08-25 09:07:19', '2020-09-03 03:50:32'),
(10, 4, 2, 0, 0, '1111.jpg', 'awdawd', 'awdwaddwa', '2020-08-27', 700000, 400000, '', 'Aktif', '', NULL, '2020-08-27 02:12:05', '2020-09-03 03:31:28'),
(11, 4, 3, 0, 0, 'logo-alamat-png-6.png', 'awdawd', 'awdawdaw', '2020-08-27', 5000000, 4500000, '', 'Aktif', '', NULL, '2020-08-27 02:15:36', '2020-09-05 03:48:49'),
(12, 4, 4, 21, 21, '1212.png', '-', 'awdawd', '2020-08-27', 0, 2000000, 'awdawd', 'Menunggu', 'awdawd', NULL, '2020-08-27 02:46:05', '2020-08-27 02:46:05'),
(13, 4, 5, 0, 0, 'test.jpg', 'dawdwa', 'awdawd', '2020-08-27', 5000000, 4500000, 'sdasdas', 'Aktif', 'dawawdwad', NULL, '2020-08-27 02:54:39', '2020-09-05 03:57:42'),
(14, 4, 1, 0, 0, 'test1.jpg', 'awdawd', 'awdawdaw', '2020-08-27', 2000000, 1300000, '', 'Lunas', '', NULL, '2020-08-27 02:56:14', '2020-09-04 23:24:07'),
(15, 4, 1, 0, 0, '1212.png', 'adwadw', 'awdawd', '2020-09-03', 1000000, 900000, '', 'Lunas', '', NULL, '2020-09-03 06:04:34', '2020-09-04 23:52:22'),
(16, 4, 2, 0, 0, '1212.png', 'awdawd', 'awdwadadw', '2020-09-05', 1000000, 800000, '', 'Lunas', '', NULL, '2020-09-04 22:10:43', '2020-09-04 23:54:57'),
(17, 4, 3, 0, 0, '1212.png', 'wadawd', 'awdwadadw', '2020-09-05', 500000, 400000, '', 'Lunas', '', NULL, '2020-09-04 22:19:21', '2020-09-04 23:55:50'),
(18, 4, 4, 12, 11, '123.jpg', '-', 'daw12', '2020-09-05', 0, 1000000, 'adw12', 'Aktif', 'awdawd', NULL, '2020-09-04 22:34:00', '2020-09-04 22:34:54'),
(19, 4, 5, 0, 0, '1212.png', 'awddaw', 'wadadwwda', '2020-09-05', 1000000, 999999, 'dawwad123', 'Menunggu', 'tidak ada', NULL, '2020-09-04 22:41:09', '2020-09-04 22:41:09'),
(20, 4, 5, 0, 0, '5453.jpg', 'awdwda', 'awdawddwa', '2020-09-05', 1000000, 1000000, 'adawd', 'Aktif', 'awdawd', NULL, '2020-09-04 22:42:09', '2020-09-04 22:42:17'),
(21, 4, 1, 0, 0, 'a.jpg', 'dfghjk', 'baik', '2020-02-05', 4000000, 2000000, '', 'Lunas', '', NULL, '2020-09-05 03:13:40', '2020-09-05 03:21:58'),
(22, 4, 2, 0, 0, 'telepon.png', 'Xiaomi', 'Baik', '2020-06-05', 2000000, 1000000, '', 'Aktif', '', NULL, '2020-09-05 03:24:39', '2020-09-05 03:25:12'),
(23, 14, 4, 2, 1, '123.jpg', '-', 'baik', '2015-03-04', 0, 800000, 'lengkap', 'Aktif', 'murni', NULL, '2020-09-06 08:12:06', '2020-09-06 08:21:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_identitas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_profile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_kartu_identitas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domisili` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `nama`, `jenis_kelamin`, `nomor_hp`, `nomor_identitas`, `foto_profile`, `foto_kartu_identitas`, `domisili`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 8, 'karyawan2', 'L', '12312412', 'test123123', 'a.jpg', '1212.png', 'fawd', 'wadwdawaw', 'dawdawdaw', '2020-09-06', NULL, '2020-09-06 03:29:06', '2020-09-06 04:55:20'),
(2, 9, 'nasabah2', 'L', '12312312', 'awdq2aq2', '912c0fd3-94be-4a28-a327-172aabe36e35.jpg', 'cek7.png', 'edwzwaxd', 'awdxawd', 'awdawd', '2020-09-06', NULL, '2020-09-06 05:27:38', '2020-09-06 05:27:38'),
(3, 10, 'kurir2', 'L', '023123123', 'rd12qdwa', 'b.jpg', '56.jpg', 'wdwadaw', 'dawdaw', 'dawdaw', '2020-09-06', NULL, '2020-09-06 05:28:52', '2020-09-06 05:28:52'),
(4, 13, 'NASABAHBARU', 'L', 'awdawd', 'wdawd', '912c0fd3-94be-4a28-a327-172aabe36e35.jpg', 'felix cover - indonesia top best song vocal 2019 (full album).mp4[2019-12-27 08-44-23.992].jpg', 'sefsef', 'sefse', 'sefsef', '2020-09-06', NULL, '2020-09-06 07:05:24', '2020-09-06 07:56:19'),
(5, 14, 'Hernael G Sihombing', 'P', '082275961155', '1234567890', '1111.jpg', '123.jpg', 'Humbang', 'Lintongnihuta', 'Lintonginihuta', '2010-03-10', NULL, '2020-09-06 08:02:24', '2020-09-06 08:12:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'David Muliadi Butarbutar', 'muliadibutarbutar13@gmail.com', '$2y$10$zv1HKFVl0oA1g79URQCkHuX8JtuGQigGIWQsAKpl3WxfFC5vz9TwW', 'Admin', 'aktif', 'gH726ISQEKH0HxVsnOfTHIyE5duyHVsBPEB1MKfiQtndJmEFJKrgExuZN8QE', NULL, NULL),
(2, 'Karyawan', 'karyawan@gmail.com', '$2y$10$8aenboK8Yok0NFfS9w2sx.Qv1CKuSBIECboh4oAJ70CaKgHSgwPDe', 'Karyawan', 'aktif', 'msfAYmlvpPQsKMYQa0fYW1juo1DBnLVrBeJ82igxPjivzt5bB3GPPUjbGKnL', NULL, NULL),
(3, 'Kurir', 'kurir@gmail.com', '$2y$10$IHqwuWo9nk4JXuUoTsFSUuoRRr8EhPMh2LLFwLMi2.jvgete1XdBu', 'Kurir', 'aktif', 'k1aVXmkvCJLMNWMirXyuDjzZJxMM5cQ3JzkFMdD4RcvZH9jlR2TGalzDxmOf', NULL, NULL),
(4, 'Nasabah', 'nasabah@gmail.com', '$2y$10$oeuAtATKfy7VZ24M.bGfjuwrIX9awwp8wtPhnYQ1cTOOysXpYlWfm', 'Nasabah', 'aktif', 'i9nOIYZlRNKguGWjxRAEr4rTGzPYvTOkdENkboMIQkVRfvzbxRRvCTFaNYev', NULL, NULL),
(8, 'karyawan2', 'karyawan2@gmail.com', '$2y$10$SF8pr/gKN42iG89D21JqOOroJXpGnI52xDvn9hnFqp/K3g0z4BBt.', 'Karyawan', 'aktif', '2scpG3e4wsRZIoNiga3YvPw4GjgGXLpJUTrG0Z4zhm07Q03OKQZn2aYKIgXL', '2020-09-06 03:29:06', '2020-09-06 03:29:06'),
(9, 'nasabah2', 'nasabah2@gmail.com', '$2y$10$gV5.vWYAoskXg1Ngfex9Ju4mKn4V0zWBvOw/m16sPKhf6BjvtYT8q', 'Nasabah', 'aktif', NULL, '2020-09-06 05:27:38', '2020-09-06 05:27:38'),
(10, 'kurir2', 'kurir2@gmail.com', '$2y$10$mTL30YdxlE3iwhN6g0Y3UuAAkNcxivqusUId7ebLJ.7d/H9EOWkmO', 'Kurir', 'aktif', NULL, '2020-09-06 05:28:51', '2020-09-06 05:28:51'),
(13, 'nasabahtest', 'nasabahtest@gmail.com', '$2y$10$dvocojpBEthmFPCBUana.OAusxsxuvdiZi6yQmJRSVv/jtEtEMWD6', 'Nasabah', 'aktif', 'Jkp3ClVew71C69sIx5Ye3lCt8CO7e2yeNl3xItB28tnqWwBUJugjkmeyznBG', '2020-09-06 07:05:24', '2020-09-06 07:28:53'),
(14, 'Hernael Sihombing', 'nael@gmail.com', '$2y$10$wkuQ43fAW2o3HR8atskxaucGzw9LVYfihPbgrlykDcFtZZYvfi.Cy', 'Nasabah', 'aktif', 'IXrZUcgtEAJPDvvGuGeVIh2rqIoPKsBCQG9ppPT0jSjrv71NZSvosGS3SDNt', '2020-09-06 08:02:24', '2020-09-06 08:13:41');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aliran_dana`
--
ALTER TABLE `aliran_dana`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aliran_dana_penyimpanan_id_foreign` (`penyimpanan_id`),
  ADD KEY `aliran_dana_kas_id_foreign` (`kas_id`);

--
-- Indeks untuk tabel `data_perusahaan`
--
ALTER TABLE `data_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_gadai`
--
ALTER TABLE `detail_gadai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_gadai_penyimpanan_id_foreign` (`penyimpanan_id`),
  ADD KEY `detail_gadai_biaya_administrasi_foreign` (`biaya_administrasi`);

--
-- Indeks untuk tabel `jenis_kategori_barang`
--
ALTER TABLE `jenis_kategori_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis_kategori_barang_kategori_id_foreign` (`kategori_id`);

--
-- Indeks untuk tabel `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `pembayaran_bunga`
--
ALTER TABLE `pembayaran_bunga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembayaran_bunga_gadai_id_foreign` (`gadai_id`),
  ADD KEY `pembayaran_bunga_metode_id_foreign` (`metode_id`);

--
-- Indeks untuk tabel `pembayaran_lunas`
--
ALTER TABLE `pembayaran_lunas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembayaran_lunas_gadai_id_foreign` (`gadai_id`),
  ADD KEY `pembayaran_lunas_metode_id_foreign` (`metode_id`);

--
-- Indeks untuk tabel `penyimpanan`
--
ALTER TABLE `penyimpanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penyimpanan_user_id_foreign` (`user_id`),
  ADD KEY `penyimpanan_jenis_kategori_id_foreign` (`jenis_kategori_id`);

--
-- Indeks untuk tabel `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aliran_dana`
--
ALTER TABLE `aliran_dana`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `data_perusahaan`
--
ALTER TABLE `data_perusahaan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `detail_gadai`
--
ALTER TABLE `detail_gadai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `jenis_kategori_barang`
--
ALTER TABLE `jenis_kategori_barang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kas`
--
ALTER TABLE `kas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori_barang`
--
ALTER TABLE `kategori_barang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pembayaran_bunga`
--
ALTER TABLE `pembayaran_bunga`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pembayaran_lunas`
--
ALTER TABLE `pembayaran_lunas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `penyimpanan`
--
ALTER TABLE `penyimpanan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aliran_dana`
--
ALTER TABLE `aliran_dana`
  ADD CONSTRAINT `aliran_dana_kas_id_foreign` FOREIGN KEY (`kas_id`) REFERENCES `kas` (`id`),
  ADD CONSTRAINT `aliran_dana_penyimpanan_id_foreign` FOREIGN KEY (`penyimpanan_id`) REFERENCES `penyimpanan` (`id`);

--
-- Ketidakleluasaan untuk tabel `detail_gadai`
--
ALTER TABLE `detail_gadai`
  ADD CONSTRAINT `detail_gadai_biaya_administrasi_foreign` FOREIGN KEY (`biaya_administrasi`) REFERENCES `data_perusahaan` (`id`),
  ADD CONSTRAINT `detail_gadai_penyimpanan_id_foreign` FOREIGN KEY (`penyimpanan_id`) REFERENCES `penyimpanan` (`id`);

--
-- Ketidakleluasaan untuk tabel `jenis_kategori_barang`
--
ALTER TABLE `jenis_kategori_barang`
  ADD CONSTRAINT `jenis_kategori_barang_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori_barang` (`id`);

--
-- Ketidakleluasaan untuk tabel `pembayaran_bunga`
--
ALTER TABLE `pembayaran_bunga`
  ADD CONSTRAINT `pembayaran_bunga_gadai_id_foreign` FOREIGN KEY (`gadai_id`) REFERENCES `detail_gadai` (`id`),
  ADD CONSTRAINT `pembayaran_bunga_metode_id_foreign` FOREIGN KEY (`metode_id`) REFERENCES `metode_pembayaran` (`id`);

--
-- Ketidakleluasaan untuk tabel `pembayaran_lunas`
--
ALTER TABLE `pembayaran_lunas`
  ADD CONSTRAINT `pembayaran_lunas_gadai_id_foreign` FOREIGN KEY (`gadai_id`) REFERENCES `detail_gadai` (`id`),
  ADD CONSTRAINT `pembayaran_lunas_metode_id_foreign` FOREIGN KEY (`metode_id`) REFERENCES `metode_pembayaran` (`id`);

--
-- Ketidakleluasaan untuk tabel `penyimpanan`
--
ALTER TABLE `penyimpanan`
  ADD CONSTRAINT `penyimpanan_jenis_kategori_id_foreign` FOREIGN KEY (`jenis_kategori_id`) REFERENCES `jenis_kategori_barang` (`id`),
  ADD CONSTRAINT `penyimpanan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
