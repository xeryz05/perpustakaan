-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 23, 2022 at 12:42 AM
-- Server version: 8.0.30-0ubuntu0.22.04.1
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_id` int NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `categories_id`, `description`, `photo`, `pdf`, `deleted_at`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'Et exercitationem dolores nisi porro.', 'Denesik Group', 9, 'Et ut nulla aut nesciunt ducimus. Est similique et voluptas eligendi rem eius voluptas. Ratione officiis dolore numquam cupiditate perspiciatis. Est quia et et ad. Qui esse quis dolorem aut quod dolores. Id occaecati enim quis sequi accusantium. Ipsam maiores dolor sequi impedit quae repudiandae.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'aperiam-aut-voluptas-eum-tempora-atque-maxime-animi'),
(2, 'Inventore molestiae quo.', 'Lowe-Wolf', 5, 'Reprehenderit voluptas velit labore quo perferendis nostrum. Est ut eaque provident sit laboriosam et laborum incidunt. Et molestiae veniam quia veritatis voluptate. Sed molestias consequatur corporis vel corporis aut veritatis quo. Sapiente eius ut maxime vel quibusdam. Ipsum consectetur et molestiae suscipit eaque. Aut sunt consequatur eos aut saepe mollitia. Ab nobis exercitationem id facilis harum praesentium.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'aut-sed-sapiente-voluptas-esse'),
(3, 'Adipisci rerum earum itaque.', 'VonRueden-Paucek', 1, 'Veritatis harum reprehenderit expedita debitis. Qui modi et molestiae reprehenderit voluptas ut. Dolorem ut omnis fuga quo modi fuga reiciendis. Et distinctio quae qui unde nemo exercitationem et. Voluptate quis molestiae minus nesciunt. Porro odio in autem sit vero eum iure aut. Non dolor saepe quasi sit molestiae. Quia delectus sint inventore minima optio.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'voluptatum-tempora-odio-voluptate-necessitatibus-autem'),
(4, 'Deleniti fugiat vitae nostrum et sint neque.', 'Lebsack-Bednar', 2, 'Rerum alias fugiat delectus et. Necessitatibus eaque et ducimus sed sed. Ut repudiandae quos necessitatibus repellat laudantium aut. Animi velit numquam veritatis est ex. Illum et omnis aperiam hic odit labore. Ut fugit cupiditate natus fugiat quae quis.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'eos-nesciunt-qui-laborum-impedit-est'),
(5, 'Illo aspernatur commodi.', 'Smith, Nicolas and Carroll', 3, 'Quis dignissimos dolores soluta eveniet corporis. Quia quibusdam deleniti ut asperiores et. Repellat unde atque velit ut eligendi consequatur corporis maxime. Sit quod hic illo tempora. Et modi vel neque iusto. Iure minus voluptas et et.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'porro-aliquid-in-laborum-quo-molestiae'),
(6, 'Voluptatem eius temporibus a sapiente.', 'Haley, Bergstrom and Borer', 2, 'Maxime itaque et molestiae modi similique. Ut quo voluptatem fugit sunt saepe. Pariatur quo aliquam ut consequatur eum voluptatem laudantium. Adipisci esse illum qui dolorem ab et dolorum distinctio. Rerum ea cumque aut recusandae rerum.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'laudantium-inventore-deleniti-ut-eveniet-illo'),
(7, 'Recusandae illum vel molestiae deserunt dolorem minima quam.', 'Hills, Conroy and Pfeffer', 4, 'Sint id eos animi iure. Omnis sint nihil placeat vel odio sapiente. Rerum autem similique quod illum inventore. Odio pariatur aut doloribus ab doloremque vel. Non asperiores ut voluptatibus dolorem autem fugit. Sunt voluptate qui vel tempore. Ad voluptates consequatur non necessitatibus ea hic. Impedit et adipisci excepturi eligendi dolores totam eos distinctio.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'dolorem-velit-excepturi-qui-facilis-quaerat-perspiciatis'),
(8, 'Deserunt voluptatem excepturi tempora quo corrupti.', 'Hartmann-Frami', 2, 'Necessitatibus eos reprehenderit aut corrupti. Ab sint labore fugit est eos dolores cum. Eveniet natus quo earum enim voluptate rerum. Voluptatem est molestiae vitae tenetur culpa voluptatum nam. Et odio voluptate hic aut. Quia qui eum dignissimos. Consectetur ut cumque consequatur praesentium molestiae commodi culpa. Corrupti tempora inventore deserunt quia odio dicta. Molestiae dolor saepe aut rerum dolores. Nobis et dolor tenetur voluptatem. Molestiae tempora quisquam quo deserunt nesciunt. Numquam modi aut qui ex corporis ex consequatur. Nam ratione sed iste quam est.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'accusantium-accusamus-sint-omnis-odio'),
(9, 'Eos possimus deleniti nihil dolores odit ad nam rerum et.', 'Haag-Doyle', 2, 'Error ab quia cupiditate dolorum molestiae. Eos et aperiam omnis delectus. Numquam vitae voluptatum consequuntur perspiciatis voluptatem sed. Quia eligendi error quam voluptas nesciunt. Qui velit sed labore aperiam blanditiis veniam maxime. Consequuntur ab deserunt quo amet mollitia enim incidunt. Consequatur magni et beatae velit harum rem.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'sed-corrupti-eius-rerum-alias-fugit-natus'),
(10, 'Et autem sapiente molestiae.', 'Bednar-Thiel', 1, 'Nemo facilis optio illum. Eum neque delectus consequuntur. Adipisci omnis eaque ut nostrum natus. Est tempora vitae fugiat quia hic voluptas numquam. In eaque amet vitae placeat ex numquam. Eum non est exercitationem rem. Neque similique nulla aspernatur dignissimos. Magni ad consequatur accusamus sapiente sed nihil.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'id-quia-vitae-aspernatur-id-dolores'),
(11, 'Sint debitis.', 'Yost LLC', 7, 'Totam velit provident qui ullam officia similique ut. Soluta est officia qui ut accusantium dolorem laboriosam. Voluptatem quis soluta accusamus non nobis pariatur sed aperiam. Velit et nihil placeat consequatur. Explicabo occaecati veritatis omnis magni nihil est consequatur voluptas. Saepe sunt vel totam omnis commodi voluptas. Dolores sed est molestiae fugit aut et delectus. Ratione voluptatum aut et blanditiis voluptas. Nihil reprehenderit occaecati eos similique.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'reiciendis-et-sed-porro-vel-necessitatibus-sint-non'),
(12, 'Veniam recusandae praesentium inventore illo ut in sit sit.', 'Nikolaus Ltd', 9, 'Ullam molestiae perspiciatis dolore at rerum. Non sed accusantium quia occaecati saepe. Et in neque aliquam itaque tempora expedita. Iusto hic id nam quo. Voluptatem deserunt rerum omnis quia. Sit saepe fugiat consequatur et cupiditate molestiae. Consequuntur est exercitationem iste omnis asperiores consequatur esse. Voluptatibus qui unde provident ut nemo. Aliquam architecto culpa reprehenderit dolore. Sed odit et qui quia facilis cum quia quisquam.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'iusto-aspernatur-neque-qui-voluptatem-mollitia-maiores-unde-laudantium'),
(13, 'Voluptatem atque voluptatem nobis assumenda tempora ea consequatur.', 'Parker-Gleichner', 5, 'Molestias eius facilis non tempore atque itaque veritatis. Esse suscipit tenetur maxime ullam. Labore ipsum sunt eaque labore quam consequatur. Et unde illo est et culpa facere consequatur et. Ut molestias illum doloribus dolorum. Veniam ullam totam excepturi officia. Cum nulla non omnis ducimus ex natus. Suscipit cupiditate velit accusantium non ut quas. Est aut quis beatae ut voluptas est vero autem.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'ipsam-sequi-libero-dolorem-corporis-qui'),
(14, 'Quia impedit voluptates.', 'Davis, Witting and Runte', 3, 'Eveniet quidem delectus dolor fugit nemo. Rem aspernatur non est unde labore sed qui. Qui corrupti incidunt voluptas neque fuga dolor voluptas. Provident voluptas sit placeat rerum quaerat aut. Maxime debitis ipsa unde non.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'aperiam-earum-sunt-qui'),
(15, 'Natus officia commodi nobis et fuga.', 'Champlin, Hermann and O\'Connell', 3, 'Quaerat ea vitae numquam voluptatem rem et. Aut eos dolores distinctio dolorem ipsa. Nesciunt in ut vel nobis. Et aspernatur necessitatibus placeat. Dolorem nobis perspiciatis adipisci ut ad maiores perspiciatis. Nam nesciunt earum minus voluptatem illum quos totam illum. Omnis nemo illo qui distinctio.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'necessitatibus-aut-et-est-distinctio-explicabo-inventore'),
(16, 'Magni officiis porro assumenda ullam doloribus.', 'O\'Reilly-Senger', 4, 'Et mollitia magnam quia quas facere. Possimus non blanditiis porro fuga ut magni et. Voluptatibus accusamus sunt voluptatem quod. Quia aut possimus expedita.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'magni-et-atque-blanditiis-deleniti-ipsa'),
(17, 'Labore molestiae quibusdam sit eveniet ipsa.', 'Schulist, Treutel and Gulgowski', 7, 'Dolorem laboriosam rerum consequuntur unde est tempore. Officia quos sunt consequatur. Et autem autem dolor maiores magnam est quasi quis. Impedit consequatur sit et et et ea sunt. Dolorem rerum quidem occaecati aliquam non voluptatum placeat.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'est-inventore-nisi-sit-magnam-ut-sed'),
(18, 'Excepturi repellendus saepe praesentium.', 'Ledner PLC', 2, 'Nesciunt provident cupiditate optio omnis quo eaque aut perspiciatis. Incidunt doloremque repellendus facilis. Id nobis eos consequatur commodi ut. Ratione sed placeat non id distinctio. Sequi aspernatur corporis voluptate debitis pariatur reiciendis vel. Deserunt ipsam enim occaecati quo aut eaque. Consequatur voluptatum error autem quia qui ullam. Officiis porro ut qui. A debitis repellendus adipisci aut. Dolorem magnam voluptatem error nihil illo.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'repellendus-quam-non-aut-hic-velit-et-cum'),
(19, 'Omnis molestias voluptate vero iure quo quam.', 'Crooks-Davis', 6, 'Quibusdam nostrum minus vel itaque maiores quas fuga. In autem sit voluptatem voluptatem esse. Ipsam soluta quibusdam at. Ut nisi nemo blanditiis sit. Et odio consequatur nostrum placeat. Numquam velit quis debitis qui reiciendis facilis.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'voluptates-et-dolore-suscipit-rerum-a'),
(20, 'Fugiat ut enim voluptatem eos consequatur ea.', 'Lockman-Aufderhar', 8, 'Eligendi repellendus consectetur consequatur eius sint. Dolore necessitatibus dolor harum doloribus autem quia architecto. Nobis nam laudantium ducimus quas quae quia voluptatem. Deserunt sit minus dolor veritatis sit qui occaecati. Rem reprehenderit sit quis facilis. Quaerat non enim omnis eveniet. Laudantium ut rerum dolores. Minima laborum incidunt nesciunt reprehenderit consequatur. Aperiam aliquam aliquid voluptas.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'voluptas-placeat-quo-aspernatur-delectus-assumenda-aut-voluptas-magni'),
(21, 'Consequatur minus dolor.', 'Gorczany-Greenfelder', 6, 'Doloremque nemo quos cupiditate qui natus placeat. Voluptas eos iusto sit ratione a tempora sunt. Pariatur eaque vitae voluptatem dolor. Molestiae in accusantium et ut laudantium quam repellendus. Exercitationem eaque ullam reprehenderit ipsum. Natus consequatur ad rem impedit quos aut. Non saepe iusto suscipit qui quis amet.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'laudantium-nesciunt-aliquid-excepturi-et-nisi-rerum-qui-vero'),
(22, 'Consequuntur temporibus mollitia nihil expedita eveniet.', 'Reichert Inc', 7, 'Velit veniam quaerat eos minus quis quas. Accusamus sed quam quia qui laudantium quae. Nemo voluptatum ab consectetur ut. Quaerat rerum libero quasi sint omnis. Quia quis laborum aperiam animi temporibus impedit totam. Amet nostrum nesciunt non quis. Quasi et sint minus.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'deleniti-magnam-vero-consequatur-dolor-quia-repellat-molestiae'),
(23, 'Eius eveniet consectetur.', 'Leannon-Towne', 5, 'Cupiditate eligendi quod soluta nihil dignissimos qui. Assumenda illum explicabo nam unde. Nemo a qui voluptas nihil aut. Nihil et nihil cum nemo. Sunt architecto hic autem sapiente. Esse reiciendis enim deserunt ducimus totam. Vel unde quibusdam ad harum.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'hic-cupiditate-omnis-aut'),
(24, 'Possimus sed sunt labore porro eos nisi.', 'Kling PLC', 6, 'Rerum non rem alias veniam aut. Enim deserunt voluptate dolorem. Tempore molestias totam qui id. Sed cum repellendus molestias molestias. Quae omnis in exercitationem sunt placeat repellat sed necessitatibus. Sunt voluptatem labore veritatis. Aliquid architecto est ut nisi minus. Et non et error sequi enim.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'voluptas-cupiditate-voluptatem-voluptas-consequatur-reiciendis-voluptas'),
(25, 'Vero et sit.', 'Mueller and Sons', 2, 'Illo modi reiciendis exercitationem ad quas qui. Nesciunt repudiandae aut voluptatem aperiam pariatur dolor vel. Aliquam est quo ut deserunt minus eos. Numquam quia nostrum aut voluptas porro tempora vitae. Praesentium cumque aut cupiditate eos. Neque nihil voluptatem similique impedit ut suscipit ratione. Natus velit sunt consequatur asperiores natus magni. Unde ducimus totam minima.', 'https://source.unsplash.com/random', NULL, NULL, '2022-09-21 07:53:52', '2022-09-21 07:53:52', 'tenetur-id-voluptas-commodi-molestiae-autem-excepturi');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `photo`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Ben Predovic', 'https://source.unsplash.com/random', 'Miss Emmalee Wisoky DVM', NULL, '2022-09-21 07:58:12', '2022-09-21 07:58:12'),
(2, 'Dr. Charlie Blick PhD', 'https://source.unsplash.com/random', 'Marilou Weissnat', NULL, '2022-09-21 07:58:12', '2022-09-21 07:58:12'),
(3, 'Evangeline Boyle', 'https://source.unsplash.com/random', 'Nadia Powlowski IV', NULL, '2022-09-21 07:58:12', '2022-09-21 07:58:12'),
(4, 'Rylan Mitchell', 'https://source.unsplash.com/random', 'Marianne Wyman', NULL, '2022-09-21 07:58:12', '2022-09-21 07:58:12'),
(5, 'Romaine Mertz', 'https://source.unsplash.com/random', 'Santina Bruen', NULL, '2022-09-21 07:58:12', '2022-09-21 07:58:12'),
(6, 'Mr. Bradford Sporer Jr.', 'https://source.unsplash.com/random', 'Torrance Brown', NULL, '2022-09-21 07:58:12', '2022-09-21 07:58:12'),
(7, 'Prof. Oleta Jacobs', 'https://source.unsplash.com/random', 'Karlie Kutch', NULL, '2022-09-21 07:58:12', '2022-09-21 07:58:12'),
(8, 'Miss Claire Prosacco', 'https://source.unsplash.com/random', 'Americo Jones', NULL, '2022-09-21 07:58:12', '2022-09-21 07:58:12'),
(9, 'Bobby Rice', 'https://source.unsplash.com/random', 'Riley Hodkiewicz', NULL, '2022-09-21 07:58:12', '2022-09-21 07:58:12'),
(10, 'Prof. Aryanna Parisian Sr.', 'https://source.unsplash.com/random', 'Dr. Darwin Price II', NULL, '2022-09-21 07:58:12', '2022-09-21 07:58:12'),
(11, 'Prof. Carole Konopelski DDS', 'https://source.unsplash.com/random', 'Giovanna Hermann', NULL, '2022-09-21 07:58:12', '2022-09-21 07:58:12'),
(12, 'Tillman Simonis I', 'https://source.unsplash.com/random', 'Fabian Hirthe', NULL, '2022-09-21 07:58:12', '2022-09-21 07:58:12'),
(13, 'Onie Kerluke', 'https://source.unsplash.com/random', 'Dr. Orville Osinski', NULL, '2022-09-21 07:58:12', '2022-09-21 07:58:12'),
(14, 'Lera Wehner', 'https://source.unsplash.com/random', 'Immanuel Barton', NULL, '2022-09-21 07:58:12', '2022-09-21 07:58:12'),
(15, 'Mrs. Albina Kub PhD', 'https://source.unsplash.com/random', 'Prof. Loma Grimes II', NULL, '2022-09-21 07:58:12', '2022-09-21 07:58:12');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `users_id` int NOT NULL,
  `books_id` int NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_buku`
--

CREATE TABLE `daftar_buku` (
  `id` bigint UNSIGNED NOT NULL,
  `users_id` int NOT NULL,
  `books_id` int NOT NULL,
  `read_status` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint UNSIGNED NOT NULL,
  `books_id` int NOT NULL,
  `users_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `indoregion_districts`
--

CREATE TABLE `indoregion_districts` (
  `id` char(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regency_id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `indoregion_provinces`
--

CREATE TABLE `indoregion_provinces` (
  `id` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `indoregion_regencies`
--

CREATE TABLE `indoregion_regencies` (
  `id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_id` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `indoregion_villages`
--

CREATE TABLE `indoregion_villages` (
  `id` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` char(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_05_02_140432_create_provinces_tables', 1),
(4, '2017_05_02_140444_create_regencies_tables', 1),
(5, '2017_05_02_140454_create_villages_tables', 1),
(6, '2017_05_02_142019_create_districts_tables', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2022_06_27_012515_create_categories_table', 1),
(9, '2022_06_27_013511_create_books_table', 1),
(10, '2022_06_27_015905_create_daftar_buku_table', 1),
(11, '2022_06_27_033534_add_slug_to_books_table', 1),
(12, '2022_06_27_055050_add_roles_field_to_users_table', 1),
(13, '2022_06_28_222253_change_nullable_field_at_users_table', 1),
(14, '2022_07_08_121514_create_comments_table', 1),
(15, '2022_07_15_212208_create_favorites_table', 1),
(16, '2022_07_24_103557_add_avatar_to_users_table', 1),
(17, '2022_08_27_003735_create_tamus_table', 1),
(18, '2022_09_22_075321_create_pengunjung_table', 2);

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
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` bigint UNSIGNED NOT NULL,
  `user_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `user_agent`, `created_at`, `updated_at`) VALUES
(1, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', '2022-09-22 01:00:39', '2022-09-22 01:00:39'),
(2, 'Mozilla/5.0 (Linux; Android 4.4.2; Nexus 4 Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.114 Mobile Safari/537.36', '2022-09-22 01:07:03', '2022-09-22 01:07:03');

-- --------------------------------------------------------

--
-- Table structure for table `tamus`
--

CREATE TABLE `tamus` (
  `id` bigint UNSIGNED NOT NULL,
  `status_absen` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_absen` date NOT NULL,
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tamus`
--

INSERT INTO `tamus` (`id`, `status_absen`, `tgl_absen`, `users_id`, `created_at`, `updated_at`) VALUES
(1, '1', '2022-09-21', 1, '2022-09-21 09:05:08', '2022-09-21 09:05:08'),
(2, '1', '2022-09-21', 2, '2022-09-21 09:09:55', '2022-09-21 09:09:55'),
(3, '1', '2022-09-20', 1, '2022-09-20 09:05:08', '2022-09-21 09:05:08'),
(4, '1', '2022-09-22', 1, '2022-09-21 21:27:25', '2022-09-21 21:27:25'),
(5, '1', '2022-09-22', 2, '2022-09-22 10:15:43', '2022-09-22 10:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIS` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_one` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `address_two` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `provinces_id` int DEFAULT NULL,
  `regencies_id` int DEFAULT NULL,
  `zip_code` int DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories_id` int DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `NIS`, `email`, `email_verified_at`, `gender`, `password`, `address_one`, `address_two`, `provinces_id`, `regencies_id`, `zip_code`, `country`, `phone_number`, `categories_id`, `deleted_at`, `remember_token`, `created_at`, `updated_at`, `roles`, `avatar`) VALUES
(1, 'daffa', 'root', '123', 'admin@gmail.com', '2022-08-25 20:56:41', 'PEREMPUAN', '$2y$10$PXMI.V02JNeBpV.tobiWneB0OzamMO7mQjzj4./uCabzLOzbYpxTe', 'villa tangerang elok b23/03 rt6 rw12, kuta jaya, pasar kemis', NULL, NULL, NULL, NULL, 'Indonesia', NULL, NULL, NULL, NULL, '2022-08-25 20:56:41', '2022-09-20 18:39:50', 'ADMIN', 'assets/user/l9qvsV0By2RMrkJWVqFSakK24SQiZVhcV7LN0N7L.jpg'),
(2, 'Dika', 'dikaaa', '1234', 'dika@gmail.com', NULL, 'laki-laki', '$2y$10$PXMI.V02JNeBpV.tobiWneB0OzamMO7mQjzj4./uCabzLOzbYpxTe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-20 18:38:40', '2022-09-20 18:38:40', 'USER', 'assets/user/GnaEuANImtKow20RA8LIMN7XX5wVXZjK3NkVG1D6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_buku`
--
ALTER TABLE `daftar_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indoregion_districts`
--
ALTER TABLE `indoregion_districts`
  ADD KEY `indoregion_districts_id_index` (`id`);

--
-- Indexes for table `indoregion_provinces`
--
ALTER TABLE `indoregion_provinces`
  ADD KEY `indoregion_provinces_id_index` (`id`);

--
-- Indexes for table `indoregion_regencies`
--
ALTER TABLE `indoregion_regencies`
  ADD KEY `indoregion_regencies_id_index` (`id`);

--
-- Indexes for table `indoregion_villages`
--
ALTER TABLE `indoregion_villages`
  ADD KEY `indoregion_villages_id_index` (`id`);

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
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tamus`
--
ALTER TABLE `tamus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tamus_users_id_foreign` (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_nis_unique` (`NIS`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daftar_buku`
--
ALTER TABLE `daftar_buku`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tamus`
--
ALTER TABLE `tamus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tamus`
--
ALTER TABLE `tamus`
  ADD CONSTRAINT `tamus_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
