-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 04:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-submission`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Main Course', 'main-course', '2022-09-07 00:10:22', '2022-09-07 00:10:22'),
(2, 'Dessert', 'dessert', '2022-09-07 00:10:35', '2022-09-07 00:10:35'),
(3, 'Tips', 'tips', '2022-09-07 00:11:16', '2022-09-07 00:11:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_05_073235_create_categories_table', 1),
(6, '2022_09_05_095704_create_posts_table', 1),
(7, '2022_09_06_050526_create_tags_table', 1),
(8, '2022_09_06_154407_create_post_tag_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `thumbnail`, `title`, `slug`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'thumbnails/post/ZEBfpMx28Yowt7Mzx8wwZlDYOcMZHJtBrcXuKDsi.jpg', 'Chicken Teriyaki', 'chicken-teriyaki', '<p>Deskripsi :</p>\r\n\r\n<p>Resep chicken teriyaki yang rendah kalori ini dimasak dengan saus lezat yang membuat ayam lebih beraroma dan luar biasa. Kemudian, rasa dari minyak wijen, bawang putih, sayuran segar, kecap, dan banyak lagi digabungkan untuk menciptakan resep ini mudah dibuat dan memiliki rasa yang terbaik. Selamat mencoba!</p>\r\n\r\n<p><strong>Bahan-bahan:</strong></p>\r\n\r\n<ul>\r\n	<li>2 dada ayam tanpa kulit (masing-masing 80 gram)</li>\r\n	<li>3 sdt. gula merah</li>\r\n	<li>2 sdt. minyak</li>\r\n	<li>1 sendok teh jahe cacah</li>\r\n	<li>3 sdm. kecap rendah sodium</li>\r\n	<li>1 sendok teh. saus tiram</li>\r\n	<li>1/2 cangkir air panas</li>\r\n	<li>1 sendok teh. tepung maizena (larutkan dengan 2 sendok makan air)</li>\r\n	<li>biji wijen (untuk hiasan, opsional)</li>\r\n</ul>\r\n\r\n<p><strong>Cara membuat:</strong></p>\r\n\r\n<ul>\r\n	<li>Pertama, tambahkan air, kecap, gula, saus tiram, dan jahe ke dalam mangkuk kemudian campur dengan baik.</li>\r\n	<li>Tambahkan minyak ke wajan yang panas, tambahkan dada ayam dan masak selama 2 menit di setiap sisi dengan api besar.</li>\r\n	<li>Gunakan kertas dapur/handuk untuk menghilangkan minyak berlebih dari wajan.</li>\r\n	<li>Tambahkan saus, biarkan mendidih selama 1 menit, lalu tambahkan campuran tepung maizena dan aduk cepat, jika kental matikan api.</li>\r\n	<li>Potong ayam menjadi irisan dan sajikan di atas nasi, taburi biji wijen di atasnya. Selamat menikmati!</li>\r\n</ul>', '2022-09-07 00:15:58', '2022-09-07 00:15:58'),
(2, 1, 1, 'thumbnails/post/HTT7i8n5PoICxtHSA7AyZcvDYAP7349vMMcDblD1.jpg', 'Sate Ayam', 'sate-ayam', '<p>Deskripsi :</p>\r\n\r\n<p>Untuk Anda yang ingin mengkonsumsi sate ayam ketika diet, lebih baik mengolah sate ayam sendiri di rumah dengan resep sate ayam yang satu ini. Selain terjamin kebersihannya, juga bisa diatur seberapa banyak kalori yang akan di konsumsi. Selamat mencoba!</p>\r\n\r\n<p><strong>Bahan-bahan:</strong></p>\r\n\r\n<ul>\r\n	<li>100 gram&nbsp;dada ayam tanpa kulit, tanpa tulang</li>\r\n	<li>1 sendok makan gula merah</li>\r\n	<li>2 sendok makan kecap atau saus tamari, lebih disukai sodium rendah</li>\r\n	<li>1 siung bawang putih, geprek</li>\r\n	<li>1 sendok teh jahe segar cincang</li>\r\n	<li>1 sendok makan air jeruk nipis segar</li>\r\n	<li>1 sendok makan gula merah</li>\r\n	<li>1 sendok makan kecap atau tamari, lebih disukai sodium rendah</li>\r\n	<li>1 siung bawang putih, geprek</li>\r\n	<li>2 sendok makan selai kacang krim</li>\r\n	<li>2 sendok makan air jeruk nipis segar</li>\r\n</ul>\r\n\r\n<p><strong>Cara membuat:</strong></p>\r\n\r\n<ul>\r\n	<li>Pertama potong dada ayam menjadi 8 bagian. Tempatkan dalam kantong plastik besar yang dapat ditutup kembali potongan ayam dalam kantong plastik</li>\r\n	<li>Dalam mangkuk kecil, campurkan gula merah, kecap asin, bawang putih, jahe, dan air jeruk nipis. Marinasi potongan ayam di kulkas selama 1 jam ayam dan bumbunya dalam kantong plastik</li>\r\n	<li>Rendam 8 tusuk sate bambu selama 30 menit. Panaskan panggangan atau ayam pedaging, dilapisi dengan semprotan memasak tongkat bambu dalam mangkuk dengan air</li>\r\n	<li>Untuk sausnya, campurkan gula merah, kecap, bawang putih, selai kacang, dan air jeruk nipis. Aduk hingga rata dan creamy. Encerkan dengan sedikit air jika suka. gula merah, kecap, bawang putih, selai kacang, dan air jeruk nipis dalam mangkuk</li>\r\n	<li>Masukkan potongan ayam ke tusuk sate yang sudah direndam sebelumnya di atas loyang</li>\r\n	<li>Panggang ayam selama 10 menit, balik sekali ayam di atas loyang</li>\r\n	<li>Sajikan 2 tusuk sate per orang dengan saus kacang di sampingnya.</li>\r\n</ul>', '2022-09-07 00:21:13', '2022-09-07 00:21:13'),
(3, 1, 1, 'thumbnails/post/mPluIII2sHZPZG5TzsYWxGsUrxD3ozJanX3Gu7x1.jpg', 'Steak Tempe', 'steak-tempe', '<p>Deskripsi :</p>\r\n\r\n<p>Selain rasanya yang lezat, tempe menjadi salah satu makanan yang tinggi protein. Tempe dapat menyerap rasa untuk daging yang sempurna untuk dipanggang. Resep yang satu ini cocok untuk Anda yang sedang menjalani diet. Selamat mencoba!</p>\r\n\r\n<p><strong>Bahan-bahan:</strong></p>\r\n\r\n<ul>\r\n	<li>Lada putih bubuk</li>\r\n	<li>1 sdm saus sambal</li>\r\n	<li>100 g saus tiram</li>\r\n	<li>10 g tepung maizena</li>\r\n	<li>1 mangkok, irisan wortel yang sudah direbus</li>\r\n	<li>2 sdm saus tomat</li>\r\n	<li>2 sdm garam himalaya</li>\r\n	<li>2 buah labu siam</li>\r\n	<li>&frac12; bawang Bombay cincang</li>\r\n	<li>4 siung bawang putih</li>\r\n	<li>30 ml air</li>\r\n	<li>100 gram tempe</li>\r\n	<li>Minyak zaitu secukupnya</li>\r\n</ul>\r\n\r\n<p><strong>Cara membuat:</strong></p>\r\n\r\n<ul>\r\n	<li>Potong tempe, lalu kukus hingga matang.</li>\r\n	<li>Haluskan bawang putih hingga halus lalu tambahkan tempe kukus lalu haluskan. Tambahkan tepung terigu, garam dan merica, aduk hingga merata, lalu bentuk adonan bulat pipih.</li>\r\n	<li>Panaskan pan, tambahkan margarin dan minyak zaitun, lalu grill tempe sampai matang, jgn sering2 dibolak balik agar tdk hancur, masak jg pinggirannya.</li>\r\n	<li>Untuk sausnya, lelehkan margarin, lalu tumis bawang bombay sampai layu kmudian masukkan bawang putih tumis sampai harum, lalu masukkan semua bahan saus dan lada, lalu tambahkan air, cek rasa, terakhir masukkan larutan maizena, aduk2 hingga mengental, sajikan. Selamat menikmati!</li>\r\n</ul>', '2022-09-07 00:27:21', '2022-09-07 00:27:21'),
(4, 1, 1, 'thumbnails/post/bkwzhWO16XPp54wXmaTdjzVZ2bKxBJd68NUpG51L.jpg', 'Lasagna', 'lasagna', '<p>Deskripsi :</p>\r\n\r\n<p>Jangan khawatir untuk Anda yang sedang melakukan diet, resep lasagna yang satu ini rendah akan kalori sehingga masih bisa dinikmati tanpa merusak pola diet Anda. Selain rasanya yang lezat, resep ini cukup mudah untuk dibuat.&nbsp;Selamat mencoba!</p>\r\n\r\n<p><strong>Bahan-bahan:</strong></p>\r\n\r\n<ul>\r\n	<li>2 kubis sedang</li>\r\n	<li>2 pon daging giling tanpa lemak</li>\r\n	<li>1 lada Anaheim, cincang</li>\r\n	<li>1 bawang kuning atau putih, cincang halus</li>\r\n	<li>1 siung bawang putih, cincang</li>\r\n	<li>1 sdt oregano</li>\r\n	<li>2 sdt kemangi</li>\r\n	<li>28 oz kaleng tomat yang dihancurkan dengan bumbu Italia</li>\r\n	<li>1 putih telur</li>\r\n	<li>1 cangkir keju Gouda, diparut</li>\r\n	<li>1 cangkir keju mozzarella, diparut</li>\r\n	<li>1 cangkir keju Parmesan, diparut</li>\r\n	<li>Garam himalaya dan merica, secukupnya</li>\r\n	<li>Bubuk paprika merah, untuk taburan</li>\r\n</ul>\r\n\r\n<p><strong>Cara membuat:</strong></p>\r\n\r\n<ul>\r\n	<li>Pertama, panaskan oven hingga 375 derajat.</li>\r\n	<li>Potong kepala kubis menjadi dua dan rebus selama 15-20 menit sampai lunak. Tiriskan air dan potong menjadi 1 &quot;kotak. Kemudian tumis kubis selama 2-3 menit untuk menghilangkan kelebihan air. Biarkan dingin dan bungkus daun kubis dengan serbet, peras sisa airnya.</li>\r\n	<li>Daging sapi coklat dalam wajan. Saat sebagian besar warna merah muda hilang, tambahkan merica dan bawang bombay. Tumis 3 menit lagi sampai benar-benar matang dan bawang bombay melunak. Tambahkan bawang putih, oregano dan basil dan masak 1 menit lagi. Hapus dari panas.</li>\r\n	<li>Dalam mangkuk sedang, kocok putih telur ke dalam tomat yang dihancurkan. Tambahkan ke campuran daging dan bumbui dengan garam dan merica.</li>\r\n	<li>Dalam mangkuk terpisah, campur keju bersama-sama.</li>\r\n	<li>Untuk merakit, lapis ganda kubis, saus daging, dan keju dalam wajan berukuran 9&quot; x 13&quot; yang dilumuri minyak. Taburi dengan serpihan paprika merah jika diinginkan. Panggang 20 menit atau sampai berwarna cokelat keemasan. Selamat menikmati!</li>\r\n</ul>', '2022-09-07 00:29:11', '2022-09-07 00:29:11'),
(5, 1, 2, 'thumbnails/post/EHP5u8nH8BzH6mYGRoAIrpih5HrGJO7P0mbXlzD9.jpg', 'Fruit Nachos', 'fruit-nachos', '<p>Deskripsi :</p>\r\n\r\n<p>Lapisan buah-buahan cantik, keripik gula kayu manis buatan sendiri, dan&nbsp;keju krim yang creamy. Resep Fruit Nachos ini akan menjadi dessert favorit bagi semua orang, terutama untuk Anda yang sedang menjalani diet. Selain lezat, dessert ini memiiki kalori yang rendah.&nbsp;Selamat mencoba!</p>\r\n\r\n<p><strong>Bahan-bahan:</strong></p>\r\n\r\n<ul>\r\n	<li>6 tepung tortilla, (lebar 8 inci)</li>\r\n	<li>1 sendok makan kayu manis</li>\r\n	<li>1 sendok makan gula</li>\r\n	<li>1/2 cangkir mentega, dilelehkan</li>\r\n	<li>4 ons krim keju, suhu kamar</li>\r\n	<li>1/4 cangkir mentega, dilunakkan</li>\r\n	<li>1 sdt vanila</li>\r\n	<li>1 cangkir confectioners gula</li>\r\n	<li>1 cangkir stroberi, potong dadu</li>\r\n	<li>1 cangkir kiwi, potong dadu</li>\r\n	<li>1 cangkir blueberry</li>\r\n	<li>1 cangkir raspberry</li>\r\n</ul>\r\n\r\n<p><strong>Cara membuat:</strong></p>\r\n\r\n<ul>\r\n	<li>Panaskan oven hingga 400 &deg; F.</li>\r\n	<li>Letakkan tortilla di atas talenan dan potong menjadi 8 bagian.</li>\r\n	<li>Dalam mangkuk besar dengan penutup, gabungkan mentega cair, kayu manis, gula, dan irisan tortilla. Letakkan tutup mangkuk dan kocok untuk melapisi semua irisan tortilla dengan campuran mentega.</li>\r\n	<li>Di atas loyang berlapis perkamen, letakkan irisan tortilla satu per satu.</li>\r\n	<li>Panggang selama 10-12 menit atau sampai keripik tortilla berwarna cokelat keemasan. Keripik akan terus renyah di luar oven.</li>\r\n	<li>Dalam mangkuk sedang menggabungkan krim keju, mentega, vanila, dan gula confectioners. Aduk untuk menggabungkan. Glasir harus halus.</li>\r\n	<li>Hangatkan dalam microwave hingga dapat dituang (sekitar 30-50 detik).</li>\r\n	<li>Di piring besar, tambahkan 1/3 keripik, buah, dan glasir keju krim. Ulangi dua kali lagi, akhiri dengan sisa glasir. (Jika ada sisa bisa disimpan di wadah kedap udara selama 2 minggu di kulkas.) Selamat menikmati!</li>\r\n</ul>', '2022-09-07 00:32:47', '2022-09-07 00:32:47'),
(6, 1, 2, 'thumbnails/post/0HgaiaIFGTMcNlwh4PUZlNmCtwbW3pdsRoCdwvkB.jpg', 'Chocolate Pudding', 'chocolate-pudding', '<p>Deskripsi :</p>\r\n\r\n<p>Puding merupakan salah satu pilihan yang tepat dan lezat untuk dijadikan teman santap di saat santai ataupun sedang sibuk beraktivitas. Resep makanan yang satu ini sangat mudah dicari. Kali ini Anda&nbsp;bisa membuat puding dalam waktu yang sangat singkat dan menggunakan bahan makanan yang sehat dan selalu ada di dapur. Selamat mencoba!</p>\r\n\r\n<p><strong>Bahan-bahan:</strong></p>\r\n\r\n<ul>\r\n	<li>3 sendok makan tepung maizena</li>\r\n	<li>1/4 cangkir madu</li>\r\n	<li>2 1/2 cangkir susu skim</li>\r\n	<li>1 cangkir keping coklat semi manis</li>\r\n	<li>1/2 sendok makan mentega tawar</li>\r\n	<li>1 sendok teh ekstrak vanila</li>\r\n</ul>\r\n\r\n<p><strong>Cara membuat:</strong></p>\r\n\r\n<ul>\r\n	<li>Dalam panci, campur tepung maizena dan madu&nbsp;menjadi satu.</li>\r\n	<li>Perlahan kocok dalam 1/2 cangkir susu, sampai halus.</li>\r\n	<li>Kemudian, kocok sisa 2 cangkir susu.</li>\r\n	<li>Didihkan dengan api sedang-tinggi.</li>\r\n	<li>Setelah mendidih, kecilkan api menjadi sedang dan aduk hingga mengental (sekitar 3 menit).</li>\r\n	<li>Angkat dari api dan tambahkan kepingan cokelat, mentega, dan vanila, aduk hingga rata.</li>\r\n	<li>Bagi menjadi 8 gelas.</li>\r\n	<li>Sajikan hangat atau tutup dengan bungkus plastik, di mana bungkusnya menyentuh puding agar kulit tidak terbentuk dan masukkan ke dalam lemari es agar dingin.</li>\r\n	<li>Membuat sekitar 3 cangkir. Selamat menikmati!</li>\r\n</ul>', '2022-09-07 00:35:14', '2022-09-07 00:35:14'),
(7, 1, 2, 'thumbnails/post/pXRv7WMovuphD6JdWXrfT8q27BdYtEcZdzdywr6F.jpg', 'Pudding Silky Mango', 'pudding-silky-mango', '<p>Deskripsi :</p>\r\n\r\n<p>Dengan banyaknya variasi rasa dan tekstur puding yang lembut, silky puding selalu berhasil mengguncang lidah. Dijual dalam kemasan mangkuk plastik, puding bertekstur lembut ini biasanya diberi perasa buah-buahan, cokelat, taro, hingga&nbsp;<em>green tea</em>. Agar&nbsp;lebih ekonomis dan lebih sehat, lebih baik Anda buat sendiri dirumah. Selamat mencoba!</p>\r\n\r\n<p><strong>Bahan-bahan:</strong></p>\r\n\r\n<ul>\r\n	<li>1 bungkus jelly mangga</li>\r\n	<li>750 ml susu UHT plain</li>\r\n	<li>1 sdt agar-agar plain</li>\r\n	<li>2 buah mangga manalagi</li>\r\n	<li>Madu secukupnya</li>\r\n</ul>\r\n\r\n<p><strong>Cara membuat:</strong></p>\r\n\r\n<ul>\r\n	<li>Blender semua bahan jadi satu.</li>\r\n	<li>Jika ingin adonan super silky bisa disaring dulu.</li>\r\n	<li>Panaskan adonan di dalam panci dengan api kecil.</li>\r\n	<li>Masak sampai mendidih.</li>\r\n	<li>Tuang pudding ke dalam cup.</li>\r\n	<li>Dinginkan dan beri potongan mangga di atasnya.</li>\r\n	<li>Pudding siap disajikan.</li>\r\n</ul>', '2022-09-07 00:38:11', '2022-09-07 00:38:11'),
(8, 1, 2, 'thumbnails/post/KxpM9udJclwXCIyYanDegmyU6QA65BHUjOq6V0yP.jpg', 'Choco Banana Pancake', 'choco-banana-pancake', '<p>Deskripsi :</p>\r\n\r\n<p>Siapa yang tidak suka pancake? Teksturnya yang lembut membuat dessert yang satu ini disukai banyak orang. Nah, untuk Anda yang sedang diet tapi mau makan pancake tanpa merasa berdosa, resep ini bisa menjadi solusinya. Selain enak, sehat, juga mengenyangkan. Selamat mencoba!</p>\r\n\r\n<p><strong>Bahan-bahan:</strong></p>\r\n\r\n<ul>\r\n	<li>&frac14; cangkir tepung serbaguna</li>\r\n	<li>&frac14; cangkir tepung gandum utuh</li>\r\n	<li>&frac14; cangkir dedak gandum</li>\r\n	<li>1 sendok teh baking powder</li>\r\n	<li>&frac12; sendok teh garam himalaya</li>\r\n	<li>&frac14; cangkir almond</li>\r\n	<li>&frac12; cangkir pisang, terlalu matang, dihaluskan*</li>\r\n	<li>&frac14; cangkir yogurt tawar</li>\r\n	<li>1 sendok teh ekstrak vanila</li>\r\n	<li>2 sdm susu</li>\r\n	<li>1 butir telur, besar</li>\r\n	<li>2 sendok teh agave nektar</li>\r\n	<li>&frac14; cangkir keping coklat pahit</li>\r\n</ul>\r\n\r\n<p><strong>Cara membuat:</strong></p>\r\n\r\n<ul>\r\n	<li>Dalam mangkuk sedang, kocok kedua tepung, dedak gandum, baking powder, garam, dan tepung almond.</li>\r\n	<li>Dalam mangkuk terpisah, kocok pisang, yogurt, vanila, susu, telur, dan nektar agave.</li>\r\n	<li>Campur bahan basah ke bahan kering sampai rata. Jangan over mix.</li>\r\n	<li>Lipat dalam keping coklat.</li>\r\n	<li>Nyalakan wajan listrik atau panaskan wajan antilengket besar Anda di atas api sedang-tinggi.</li>\r\n	<li>Setelah panas, tuangkan kira-kira cangkir adonan ke wajan atau wajan Anda.</li>\r\n	<li>Masak sampai gelembung kecil terbentuk di pancake, sekitar 3 menit.</li>\r\n	<li>Balikkan pancake dan masak sampai matang, sekitar 3 menit lagi. Selamat menikmati!</li>\r\n</ul>', '2022-09-07 00:41:01', '2022-09-07 00:41:01');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 2, 1, NULL, NULL),
(4, 2, 2, NULL, NULL),
(5, 2, 3, NULL, NULL),
(6, 2, 6, NULL, NULL),
(7, 3, 2, NULL, NULL),
(8, 3, 7, NULL, NULL),
(9, 4, 3, NULL, NULL),
(10, 4, 4, NULL, NULL),
(11, 4, 5, NULL, NULL),
(12, 5, 2, NULL, NULL),
(13, 5, 3, NULL, NULL),
(14, 5, 11, NULL, NULL),
(15, 6, 8, NULL, NULL),
(16, 6, 9, NULL, NULL),
(17, 6, 10, NULL, NULL),
(18, 7, 2, NULL, NULL),
(19, 7, 8, NULL, NULL),
(20, 7, 10, NULL, NULL),
(21, 7, 11, NULL, NULL),
(22, 6, 2, NULL, NULL),
(23, 8, 2, NULL, NULL),
(24, 8, 9, NULL, NULL),
(25, 8, 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'ayam', 'ayam', '2022-09-07 00:11:55', '2022-09-07 00:11:55'),
(2, 'manis', 'manis', '2022-09-07 00:12:08', '2022-09-07 00:12:08'),
(3, 'gurih', 'gurih', '2022-09-07 00:12:17', '2022-09-07 00:12:17'),
(4, 'pedas', 'pedas', '2022-09-07 00:12:23', '2022-09-07 00:12:23'),
(5, 'pasta', 'pasta', '2022-09-07 00:12:35', '2022-09-07 00:12:35'),
(6, 'kacang', 'kacang', '2022-09-07 00:19:59', '2022-09-07 00:19:59'),
(7, 'tempe', 'tempe', '2022-09-07 00:24:40', '2022-09-07 00:24:40'),
(8, 'segar', 'segar', '2022-09-07 00:30:08', '2022-09-07 00:30:08'),
(9, 'coklat', 'coklat', '2022-09-07 00:30:25', '2022-09-07 00:30:25'),
(10, 'pudding', 'pudding', '2022-09-07 00:30:32', '2022-09-07 00:30:32'),
(11, 'buah', 'buah', '2022-09-07 00:30:43', '2022-09-07 00:30:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'zakiaptr', 'zakiahmdni13@gmail.com', NULL, '$2y$10$SUHcxd1pmty0GD74E/BXFu9xnR8MmsRQSh03PzAmPR/C8QTbZ1lBy', NULL, '2022-09-06 23:15:06', '2022-09-06 23:15:06'),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$g.4Q23/DKqIKhKfHn.iwP.mesaXi4EEtyav18gkmevr6cGx79ssV6', NULL, '2022-09-07 00:43:54', '2022-09-07 00:43:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tag_post_id_foreign` (`post_id`),
  ADD KEY `post_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
