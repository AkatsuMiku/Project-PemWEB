-- CREATE DATABASE IF NOT EXISTS `digitara_ijen`;
-- USE `digitara_ijen`;

-- --------------------------------------------------------
-- Table structure for table `users`
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(100) UNIQUE NOT NULL,
  `email` VARCHAR(255) UNIQUE NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Table structure for table `wisata`
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `wisata` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `slug` VARCHAR(100) UNIQUE NOT NULL,
  `title` VARCHAR(255) NOT NULL,
  `deskripsi` TEXT NOT NULL,
  `img` VARCHAR(255) NOT NULL,
  `popup_title` VARCHAR(255) NOT NULL,
  `popup_content` TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Table structure for table `wisata_tips`
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `wisata_tips` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `wisata_id` INT NOT NULL,
  `tip` TEXT NOT NULL,
  FOREIGN KEY (`wisata_id`) REFERENCES `wisata` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Table structure for table `tiket`
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `tiket` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `kategori` VARCHAR(100) NOT NULL,
  `kelas` VARCHAR(50) NOT NULL,
  `harga` DECIMAL(10, 2) NOT NULL,
  `status` ENUM('tersedia', 'habis') DEFAULT 'tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Table structure for table `pemesanan`
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `tiket_id` INT NOT NULL,
  `nama` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `tanggal_kunjungan` DATE NOT NULL,
  `jumlah_tiket` INT NOT NULL,
  `total_harga` DECIMAL(10, 2) NOT NULL,
  `tanggal_pemesanan` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`tiket_id`) REFERENCES `tiket` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Dumping data for table `wisata`
-- --------------------------------------------------------
INSERT INTO `wisata` (`id`, `slug`, `title`, `deskripsi`, `img`, `popup_title`, `popup_content`) VALUES
(1, 'keindahan-kawah-ijen', 'Melihat Keindahan kawah ijen', 'Nikmati pemandangan kawah vulkanik dengan danau asam berwarna toska yang memukau.', '/PHOTO/ijen_volcano.jpg', 'Detail: Keindahan & Geologi Kawah Ijen', 'Kawah Ijen merupakan salah satu keajaiban geologi Indonesia yang berupa danau kawah bersifat asam terbesar di dunia. Terletak di ketinggian 2.386 mdpl, danau ini memiliki diameter sekitar 951 meter dengan kedalaman mencapai 200 meter. Keunikan utamanya terletak pada warna airnya yang hijau toska pekat yang sangat memukau, yang terjadi akibat tingginya konsentrasi asam sulfat, air raksa, dan berbagai material vulkanik terlarut di dalamnya. Selain menikmati pemandangan danau yang megah dari bibir kaldera, pengunjung juga dapat menyaksikan langsung aktivitas luar biasa dari para penambang belerang tradisional yang naik-turun kawah sambil memikul beban hingga 80-100 kg batu belerang murni.'),
(2, 'exploring-the-blue-fire', 'Exploring the Blue Fire', 'Saksikan fenomena langka api biru yang hanya ada dua di dunia saat malam hari.', '/PHOTO/ijen_night_sky.png', 'Detail: Eksplorasi Fenomena Langka Blue Fire', 'Fenomena Api Biru atau \"Blue Fire\" di Kawah Ijen adalah daya tarik kelas dunia yang sangat langka, karena hanya dapat ditemukan di dua lokasi di seluruh planet Bumi—yaitu di Islandia dan di Gunung Ijen, Indonesia. Banyak orang salah mengira bahwa ini adalah lava berwarna biru, namun secara ilmiah fenomena ini terjadi karena adanya gas belerang bertekanan tinggi yang keluar dari retakan tanah dengan suhu ekstrem mencapai 600°C. Ketika gas super panas ini bertemu dan bereaksi langsung dengan oksigen di udara bebas, gas tersebut memicu percikan api berwarna biru elektrik yang menyala di kegelapan malam. Fenomena magis ini berangsur-angsur memudar dan hilang seiring munculnya cahaya matahari pagi.'),
(3, 'experience-the-sunrise', 'Experience the Sunrise', 'Sambut pagi dengan pemandangan matahari terbit yang spektakuler dari puncak Ijen.', '/PHOTO/ijen_trail.png', 'Detail: Menyambut Sunrise Spektakuler di Puncak Ijen', 'Momen matahari terbit (sunrise) di puncak Gunung Ijen menyajikan salah satu panorama fajar paling dramatis di Indonesia. Setelah melewati dinginnya malam, pengunjung akan disuguhkan perubahan warna langit yang luar biasa, mulai dari biru gelap, ungu, hingga gradasi oranye dan kuning keemasan yang hangat. Sinar matahari pagi yang perlahan menyentuh permukaan Kawah Ijen akan mempertegas warna hijau toska air danau dan memunculkan siluet megah dari gunung-gunung di sekitarnya, seperti Gunung Raung, Gunung Suket, dan Gunung Baluran. Menyaksikan kabut tipis yang melayang di atas permukaan kawah berlatar belakang matahari terbit memberikan sensasi kedamaian yang tidak terlupakan.'),
(4, 'enjoy-the-night-view', 'Enjoy the Night View', 'Rasakan suasana malam yang magis dengan langit penuh bintang di atas kawah.', '/PHOTO/kawah_ijen_premium.png', 'Detail: Pesona Langit Malam & Astrofotografi Ijen', 'Selain pesona kawahnya, Gunung Ijen adalah surga tersembunyi bagi para pencinta keindahan langit malam (stargazing). Karena letaknya yang jauh dari polusi cahaya perkotaan besar dan berada di dataran tinggi, langit di sekitar kawasan Ijen sangat bersih dan jernih pada malam hari yang cerah. Pengunjung yang melakukan pendakian dini hari dapat menyaksikan hamparan miliaran bintang yang membentuk galaksi Bima Sakti (Milky Way) membentang luas tepat di atas kaldera. Kombinasi antara siluet pegunungan yang kokoh, kepulan asap solfatara yang samar, dan gemerlap bintang di langit menciptakan atmosfer yang sangat magis, puitis, dan fotogenik.');

-- --------------------------------------------------------
-- Dumping data for table `wisata_tips`
-- --------------------------------------------------------
INSERT INTO `wisata_tips` (`wisata_id`, `tip`) VALUES
(1, 'Sangat direkomendasikan memakai masker respirator (bukan masker kain biasa) karena embusan angin sering kali membawa gas belerang yang pekat dan menyengat.'),
(1, 'Jaga jarak aman dari bibir kawah and selalu utamakan jalan bagi para penambang belerang yang sedang melintas demi keselamatan bersama.'),
(1, 'Gunakan sepatu gunung atau sepatu olahraga dengan sol yang tidak licin karena jalur trekking menuju bibir kawah didominasi oleh pasir dan batuan kerikil yang cukup curam.'),
(2, 'Untuk menyaksikan atau melihat Blue Fire dengan sempurna, pendakian dari Pos Paltuding harus dimulai sekitar jam 01.00 atau 02.00 dini hari.'),
(2, 'Jika Anda berniat turun ke dasar kawah untuk melihat Blue Fire dari dekat, Anda wajib menyewa pemandu lokal (guide) karena medannya sangat curam, berbatu besar, dan minim pencahayaan.'),
(2, 'Bawa kacamata pelindung (goggles) untuk mencegah mata Anda perih dan berair akibat paparan asap belerang yang tebal di dasar kawah.'),
(3, 'Suhu udara di puncak Ijen menjelang pagi hari bisa sangat ekstrem drops hingga mencapai 5°C sampai 10°C. Pastikan Anda mengenakan jaket windproof tebal, kupluk, masker, dan sarung tangan.'),
(3, 'Cari spot foto terbaik di sekitar area \"Pohon Mati\" (kompleks pepohonan kering eksotis) agak ke sebelah kanan dari jalur utama bibir kawah untuk mendapatkan sudut pandang terbaik berlatar matahari terbit.'),
(3, 'Jangan terburu-buru turun setelah matahari terbit, karena pencahayaan terbaik untuk berfoto dengan latar belakang danau kawah justru terjadi antara jam 06.00 - 07.30 pagi saat sinar matahari menyinari seluruh permukaan air.'),
(4, 'Pastikan Anda membawa headlamp (senter kepala) berkualitas dengan baterai cadangan yang cukup karena sepanjang jalur pendakian sama sekali tidak ada lampu penerangan jalan.'),
(4, 'Bagi pencinta fotografi yang ingin memburu foto Milky Way, waktu terbaik adalah saat musim kemarau (antara bulan Mei hingga September) ketika langit cenderung bersih tanpa awan.'),
(4, 'Gunakan pengaturan kamera manual (Pro Mode) dengan tripod yang sangat kokoh, bukaan lensa terbesar (f/1.8 - f/2.8), ISO tinggi (1600 - 3200), dan shutter speed sekitar 15-25 detik untuk menangkap detail bintang dengan sempurna.');

-- --------------------------------------------------------
-- Dumping data for table `tiket`
-- --------------------------------------------------------
INSERT INTO `tiket` (`id`, `kategori`, `kelas`, `harga`, `status`) VALUES
(1, 'Mancanegara', 'VIP', 2500000.00, 'tersedia'),
(2, 'Lokal', 'VIP', 250000.00, 'habis'),
(3, 'Mancanegara', 'REGULER', 450000.00, 'tersedia'),
(4, 'Lokal', 'REGULER', 50000.00, 'tersedia'),
(5, 'Guide', 'Add-on', 500000.00, 'tersedia');
