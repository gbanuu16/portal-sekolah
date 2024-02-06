-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2024 at 04:05 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_portalsekolahv3`
--
CREATE DATABASE IF NOT EXISTS `db_portalsekolahv3` DEFAULT CHARACTER SET utf8mb4;
USE `db_portalsekolahv3`;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `berita_id` int NOT NULL AUTO_INCREMENT,
  `judul_berita` varchar(150) DEFAULT NULL,
  `slug_berita` varchar(150) DEFAULT NULL,
  `isi` longtext,
  `gambar` varchar(150) DEFAULT NULL,
  `tgl_berita` date DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `kategori_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`berita_id`),
  KEY `kategori_id` (`kategori_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`berita_id`, `judul_berita`, `slug_berita`, `isi`, `gambar`, `tgl_berita`, `status`, `kategori_id`, `user_id`) VALUES
(29, 'Prestasi dan Inovasi Terbaru dari Jurusan Teknik Sepeda Motor di SMK Bina Taruna Jalan Cagak', 'Prestasi-dan-Inovasi-Terbaru-dari-Jurusan-Teknik-Sepeda-Motor-di-SMK-Bina-Taruna-Jalan-Cagak', ' <p>SMK Bina Taruna Jalan Cagak, Subang - Jurusan Teknik Sepeda Motor di SMK Bina Taruna Jalan Cagak terus menunjukkan prestasi dan inovasi dalam pendidikan otomotif. Dengan komitmen untuk memberikan pendidikan berkualitas tinggi, para siswa dan instruktur terlibat aktif dalam pengembangan keterampilan teknis dan pengetahuan mendalam di bidang sepeda motor.</p><p>Pada awal semester ini, para siswa dari jurusan Teknik Sepeda Motor berhasil menyelesaikan proyek kolaboratif yang mengesankan. Mereka merancang dan merakit sepeda motor dengan teknologi terkini, menggabungkan keahlian mereka dalam mekanika, kelistrikan, dan desain.</p><p>Proyek ini tidak hanya menekankan pada aspek teknis, tetapi juga memperhatikan efisiensi bahan bakar, keamanan, dan keberlanjutan lingkungan. Siswa bekerja sama dengan instruktur dan ahli industri untuk menghadirkan inovasi yang dapat diterapkan dalam perkembangan sepeda motor masa depan.</p><p>\"Kami bangga melihat semangat dan dedikasi siswa kami dalam mengejar keunggulan di bidang Teknik Sepeda Motor. Proyek kolaboratif ini mencerminkan daya kreativitas dan kemampuan teknis yang dimiliki oleh para siswa kami,\" ujar Kepala Sekolah, [Nama Kepala Sekolah].</p><p>Selain itu, para siswa juga terlibat dalam kegiatan praktek di bengkel-bengkel otomotif terkemuka di Jakarta. Ini memberikan mereka pengalaman langsung dalam menghadapi tantangan di lapangan dan memahami dinamika industri sepeda motor.</p><p>Program magang ini memberikan kesempatan kepada siswa untuk berinteraksi dengan profesional industri, membangun jejaring, dan mendapatkan pemahaman yang lebih baik tentang tuntutan industri otomotif.</p><p>\"Kami berusaha memberikan pengalaman belajar yang komprehensif kepada siswa kami. Melalui magang ini, mereka dapat mengaplikasikan pengetahuan teoritis mereka dalam situasi praktis dan mempersiapkan diri untuk karir di dunia otomotif,\" tambah [Nama Instruktur Jurusan].</p><p>Jurusan Teknik Sepeda Motor di SMK Bina Taruna Jalan Cagak terus berupaya menjadikan siswa-siswanya sebagai profesional yang siap pakai dan terampil dalam memahami, merawat, dan memperbaiki sepeda motor. Prestasi dan inisiatif siswa mencerminkan semangat keunggulan yang ditanamkan dalam setiap aspek pembelajaran di sekolah ini.</p><p></p>', 'whatsapp-image-20231128-at-1414-3@2x.png', '2024-01-11', 'published', 11, 1),
(30, 'Teknik Kendaraan Ringan menorehkan prestasi dan memberikan kontribusi inovatif dalam dunia otomotif', 'Teknik-Kendaraan-Ringan-menorehkan-prestasi-dan-memberikan-kontribusi-inovatif-dalam-dunia-otomotif', '<p>SMK Bina Taruna Jalan Cagak, Subang - Jurusan Teknik Kendaraan Ringan di SMK Bina Taruna Jalan Cagak terus menorehkan prestasi dan memberikan kontribusi inovatif dalam dunia otomotif. Pada semester ini, para siswa dan instruktur telah berhasil mencapai sejumlah prestasi luar biasa serta menghadirkan proyek-proyek yang menarik perhatian.</p><p>Salah satu prestasi yang baru-baru ini dicapai oleh para siswa adalah dalam ajang kompetisi otomotif tingkat nasional. Tim dari jurusan Teknik Kendaraan Ringan meraih juara pertama dalam kategori perakitan mesin. Mereka berhasil menghadirkan mesin yang presisi dan inovatif, menggabungkan keahlian dalam mekanika, teknologi otomotif, dan desain.</p><p>\"Ini adalah pencapaian luar biasa bagi siswa-siswa kami yang telah bekerja keras untuk mencapai standar tertinggi dalam kompetisi ini. Mereka bukan hanya mengasah keterampilan teknis, tetapi juga menunjukkan kolaborasi tim yang sangat baik,\" ungkap Kepala Jurusan Teknik Kendaraan Ringan, [Nama Kepala Jurusan].</p><p>Selain itu, jurusan ini juga meresmikan laboratorium baru yang dilengkapi dengan peralatan terkini untuk mendukung pembelajaran praktis. Fasilitas ini dirancang untuk menciptakan lingkungan belajar yang memadai dan memberikan pengalaman langsung kepada siswa dalam menerapkan pengetahuan teoritis.</p><p>\"Investasi dalam fasilitas ini bertujuan untuk memastikan bahwa siswa kami memiliki akses ke teknologi terbaru dan peralatan modern yang relevan dengan perkembangan industri otomotif saat ini. Ini juga akan membantu mereka menjadi lebih siap menghadapi tuntutan di dunia kerja,\" tambah [Nama Instruktur Jurusan].</p><p>Para siswa juga terlibat dalam program magang di bengkel-bengkel otomotif terkemuka di kota, memberikan mereka kesempatan untuk mendapatkan wawasan praktis tentang pemeliharaan dan perbaikan kendaraan ringan. Hal ini tidak hanya memperkaya pengalaman mereka tetapi juga membantu membentuk perspektif mereka terhadap dinamika industri otomotif.</p><p>Dengan prestasi dan inovasi terbaru dari Jurusan Teknik Kendaraan Ringan, SMK Bina Taruna Jalan Cagak terus meneguhkan posisinya sebagai lembaga pendidikan yang berkomitmen untuk menghasilkan para profesional otomotif yang unggul dan siap pakai.</p>', 'whatsapp-image-20231128-at-1414-4@2x.png', '2024-01-11', 'published', 11, 1),
(31, 'Prestasi Gemilang Eskul Futsal SMK Bina Taruna Jalan Cagak', 'Prestasi-Gemilang-Eskul-Futsal-SMK-Bina-Taruna-Jalan-Cagak', '<p>SMK Bina Taruna Jalan Cagak, Subang - Eskul Futsal sekolah terus menorehkan prestasi gemilang dalam berbagai kompetisi regional dan nasional. Pada minggu ini, tim futsal dari SMK Bina Taruna Jalan Cagak meraih keberhasilan luar biasa dalam turnamen futsal antar-SMK se-Jakarta Raya.</p><p>Tim futsal sekolah berhasil mencapai posisi juara pertama setelah melalui serangkaian pertandingan yang penuh semangat dan persaingan ketat. Pemain-pemain handal dari eskul futsal ini menunjukkan keterampilan teknis, kerjasama tim yang solid, dan semangat pantang menyerah yang memukau para penonton.</p><p>\"Kami sangat bangga dengan prestasi yang diraih oleh tim futsal sekolah kami. Mereka bukan hanya atlet yang berbakat, tetapi juga mewakili semangat kebersamaan dan sportivitas yang kami tanamkan di SMK Bina Taruna Jalan Cagak,\" kata [Nama Kepala Sekolah].</p><p>Selain meraih gelar juara, beberapa pemain dari eskul futsal ini juga mendapatkan penghargaan individu atas penampilan luar biasa mereka di lapangan. Ini mencakup gelar \"Top Scorer\" untuk pemain yang berhasil mencetak gol terbanyak, serta penghargaan \"Best Goalkeeper\" untuk penjaga gawang yang tampil cemerlang.</p><p>\"Kami ingin memberikan apresiasi yang tinggi kepada pelatih dan seluruh anggota tim futsal sekolah atas dedikasi mereka dalam mencapai prestasi ini. Mereka adalah contoh nyata dari kerja keras, disiplin, dan semangat juang yang kami upayakan untuk tanamkan di setiap siswa kami,\" tambah [Nama Kepala Sekolah].</p><p>Prestasi gemilang ini bukan hanya membanggakan sekolah, tetapi juga menjadi motivasi bagi para siswa lain untuk berpartisipasi dalam eskul dan mengeksplorasi potensi olahraga di luar kelas. Eskul futsal di SMK Bina Taruna Jalan Cagak terus berkomitmen untuk memberikan peluang bagi siswa untuk mengembangkan bakat olahraga mereka sambil menjunjung tinggi nilai-nilai kebersamaan dan sportivitas.</p><p>Semoga prestasi eskul futsal ini dapat memberikan inspirasi dan semangat baru bagi seluruh siswa SMK Bina Taruna Jalan Cagak untuk meraih keberhasilan di berbagai bidang. Selamat kepada tim futsal sekolah atas pencapaian luar biasa ini!</p>', 'whatsapp-image-20231130-at-0130-1@2x.png', '2024-01-11', 'published', 10, 1),
(32, 'SMK Bina Taruna Jalan Cagak Memimpin di Ajang Kompetisi Siswa Berprestasi', 'SMK-Bina-Taruna-Jalan-Cagak-Memimpin-di-Ajang-Kompetisi-Siswa-Berprestasi', '<p>SMK Bina Taruna Jalan Cagak, Subang - Prestasi akademik gemilang kembali dicapai oleh para siswa SMK Bina Taruna Jalan Cagak dalam berbagai kompetisi tingkat nasional. Kali ini, sekolah merayakan keberhasilan luar biasa siswa-siswinya yang berhasil memenangkan beberapa kompetisi bergengsi, menunjukkan komitmen tinggi mereka terhadap pembelajaran dan prestasi akademik.</p><p>Beberapa siswa yang terlibat dalam berbagai kompetisi, mulai dari ilmu pengetahuan, matematika, hingga bahasa, berhasil meraih prestasi tingkat nasional. Salah satu penghargaan tertinggi yang diraih adalah juara umum dalam Olimpiade Sains Nasional, di mana para siswa SMK Bina Taruna Jalan Cagak menunjukkan keunggulan mereka dalam berbagai mata pelajaran sains.</p><p>\"Kami sangat bangga dengan pencapaian gemilang siswa-siswa kami. Keberhasilan mereka dalam berbagai kompetisi nasional adalah hasil dari kerja keras, dedikasi, dan semangat belajar yang tinggi. Ini juga mencerminkan kualitas pendidikan yang kami tawarkan di SMK Bina Taruna Jalan Cagak,\" kata [Nama Kepala Sekolah].</p><p>Para siswa tidak hanya menonjol dalam kompetisi akademik tetapi juga dalam bidang keilmuan lainnya. Beberapa siswa terlibat aktif dalam kegiatan penelitian dan pengembangan proyek-proyek inovatif yang mendapatkan pengakuan dari para juri.</p><p>\"Kami berupaya menciptakan lingkungan belajar yang merangsang kreativitas dan semangat penelitian. Prestasi akademik ini adalah bukti bahwa pendidikan di SMK Bina Taruna Jalan Cagak tidak hanya fokus pada teori tetapi juga mendorong siswa untuk menjadi pemikir kritis dan inovatif,\" tambah [Nama Kepala Sekolah].</p><p>Pencapaian ini tidak hanya mengukir sejarah dalam dunia akademik sekolah, tetapi juga menjadi motivasi bagi siswa-siswa lainnya untuk mengejar keunggulan dalam berbagai bidang. SMK Bina Taruna Jalan Cagak berkomitmen untuk terus mendukung dan memberdayakan siswa-siswanya agar dapat meraih prestasi akademik yang lebih tinggi dan berkembang menjadi individu yang berkontribusi positif dalam masyarakat.</p><p>Selamat kepada para siswa SMK Bina Taruna Jalan Cagak atas prestasi akademik yang luar biasa ini! Semoga prestasi ini menjadi inspirasi bagi semua siswa untuk terus mengejar mimpi dan mencapai keberhasilan di masa depan.</p>', 'whatsapp-image-20231128-at-1414-2@2x.png', '2024-01-11', 'published', 9, 1),
(33, 'Prestasi Kepala Sekolah: SMK Bina Taruna Jalan Cagak Menyambut Penghargaan Bergengsi', 'Prestasi-Kepala-Sekolah-SMK-Bina-Taruna-Jalan-Cagak-Menyambut-Penghargaan-Bergengsi', '<p>SMK Bina Taruna Jalan Cagak, Subang - Kepala Sekolah SMK Bina Taruna Jalan Cagak, Bapak [Nama Kepala Sekolah], meraih penghargaan prestasi kepala sekolah terbaik dalam acara \"Penghargaan Pendidikan Unggulan\" yang diselenggarakan oleh Kementerian Pendidikan dan Kebudayaan Republik Indonesia. Penghargaan ini menjadi bukti pengakuan atas dedikasi, kepemimpinan, dan pencapaian luar biasa beliau dalam mengembangkan pendidikan di sekolah ini.</p><p>Bapak [Nama Kepala Sekolah] menerima penghargaan tersebut dalam sebuah acara penghargaan yang dihadiri oleh para pejabat pemerintah, tokoh pendidikan, serta kepala sekolah dari berbagai lembaga pendidikan di Indonesia. Penghargaan ini diberikan sebagai bentuk apresiasi atas kontribusi Bapak [Nama Kepala Sekolah] dalam meningkatkan mutu pendidikan, pembinaan karakter siswa, dan pengembangan program-program inovatif di SMK Bina Taruna Jalan Cagak.</p><p>Dalam pidatonya, Bapak [Nama Kepala Sekolah] menyampaikan rasa syukur dan dedikasinya untuk memberikan yang terbaik bagi kemajuan pendidikan di SMK Bina Taruna Jalan Cagak. \"Saya menerima penghargaan ini bukan hanya sebagai prestasi pribadi, tetapi juga sebagai hasil kerjasama yang erat antara seluruh staf, guru, dan siswa sekolah ini. Kami berkomitmen untuk terus berinovasi dan meningkatkan standar pendidikan agar menciptakan generasi yang siap menghadapi masa depan,\" ujarnya.</p><p>Prestasi ini tidak hanya memberikan kebanggaan bagi SMK Bina Taruna Jalan Cagak tetapi juga menjadi inspirasi bagi sekolah-sekolah lain di Indonesia. Kementerian Pendidikan dan Kebudayaan berharap agar keberhasilan Bapak [Nama Kepala Sekolah] dapat menjadi motivasi bagi para kepala sekolah lainnya untuk terus berupaya meningkatkan kualitas pendidikan di tanah air.</p><p>Para staf, guru, dan siswa SMK Bina Taruna Jalan Cagak merayakan prestasi luar biasa kepala sekolah mereka. Semua pihak berharap bahwa prestasi ini akan memberikan dampak positif dan mendorong semangat keunggulan dalam dunia pendidikan di sekolah ini.</p>', 'whatsapp-image-20231129-at-2224-1@2x.png', '2024-01-11', 'published', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `foto_id` int NOT NULL AUTO_INCREMENT,
  `ket_foto` varchar(150) DEFAULT NULL,
  `nama_foto` varchar(150) DEFAULT NULL,
  `kompetensi_id` int NOT NULL,
  PRIMARY KEY (`foto_id`),
  KEY `foto_ibfk_1` (`kompetensi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`foto_id`, `ket_foto`, `nama_foto`, `kompetensi_id`) VALUES
(8, 'Logo Teknik Sepeda Motor', 'WhatsApp Image 2024-01-09 at 10.27.16 PM.jpeg', 58),
(9, 'Logo Teknik Komputer dan Jaringan', 'WhatsApp Image 2024-01-09 at 10.27.16 PM(1).jpeg', 59),
(10, 'Logo Akomodasi Perhotelan', 'WhatsApp Image 2024-01-09 at 10.27.17 PM.jpeg', 60),
(11, 'Logo Teknik Kendaraan Ringan', 'WhatsApp Image 2024-01-09 at 10.27.17 PM(1).jpeg', 61),
(12, 'Logo Jasa Boga', 'WhatsApp Image 2024-01-09 at 10.27.17 PM(2).jpeg', 62);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_id` int NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) DEFAULT NULL,
  `slug_kategori` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `nama_kategori`, `slug_kategori`) VALUES
(8, 'Pengumuman', 'Pengumuman'),
(9, 'Akademik', 'Akademik'),
(10, 'Ekstrakulikuler', 'Ekstrakulikuler'),
(11, 'Jurusan', 'Jurusan');

-- --------------------------------------------------------

--
-- Table structure for table `kompetensi`
--

CREATE TABLE IF NOT EXISTS `kompetensi` (
  `kompetensi_id` int NOT NULL AUTO_INCREMENT,
  `nama_kompetensi` varchar(150) CHARACTER SET utf8mb4 DEFAULT NULL,
  `deskripsi_kompetensi` text CHARACTER SET utf8mb4,
  `slug_kompetensi` varchar(150) CHARACTER SET utf8mb4 DEFAULT NULL,
  `tgl_kompetensi` date DEFAULT NULL,
  `sampul` varchar(150) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`kompetensi_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kompetensi`
--

INSERT INTO `kompetensi` (`kompetensi_id`, `nama_kompetensi`, `deskripsi_kompetensi`, `slug_kompetensi`, `tgl_kompetensi`, `sampul`, `user_id`) VALUES
(58, 'Teknik Sepeda Motor', '<h4>Selamat datang di Program Keahlian Teknik Sepeda Motor di SMK Bina \nTaruna Jalan Cagak! </h4><p>Kami bangga memperkenalkan jurusan ini sebagai \nbagian integral dari kurikulum pendidikan teknik kami. Program ini \ndidesain untuk memberikan pemahaman mendalam dan keterampilan praktis \nkepada para siswa dalam dunia teknik sepeda motor. </p><h5>Apa yang anda dapatkan dari Program \nKeahlian Teknik Sepeda Motor kami?</h5><ol><li><p><strong>Kurikulum Berbasis Keterampilan:</strong>\nKami menawarkan kurikulum yang berfokus pada pengembangan keterampilan praktis dalam teknologi mesin sepeda motor, sistem kelistrikan, pemeliharaan, dan perbaikan. Para siswa akan terlibat dalam pembelajaran teori yang kuat, sekaligus mendapatkan pengalaman langsung melalui proyek-proyek praktis.</p></li><li><p><strong>Instruktur Berpengalaman:</strong>\nInstruktur kami adalah para profesional berpengalaman dalam industri sepeda motor. Mereka akan memandu Anda melalui setiap aspek pembelajaran, berbagi pengetahuan praktis, dan memberikan wawasan industri yang berharga.</p></li><li><p><strong>Fasilitas Modern:</strong>\nKami memiliki fasilitas laboratorium dan workshop yang dilengkapi dengan peralatan terkini untuk mendukung pembelajaran praktis. Ini mencakup mesin sepeda motor, perangkat elektronik, dan peralatan lainnya yang dibutuhkan untuk mendukung pemahaman dan keterampilan teknis Anda.</p></li><li><p><strong>Proyek Kolaboratif:</strong>\nPara siswa akan terlibat dalam proyek-proyek kolaboratif yang meniru lingkungan kerja sebenarnya. Ini memberikan kesempatan untuk mengembangkan keterampilan tim, pemecahan masalah, dan komunikasi yang penting dalam dunia kerja.</p></li><li><p><strong>Sertifikasi Industri:</strong>\nSelama program, Anda akan memiliki kesempatan untuk mendapatkan sertifikasi industri yang diakui. Ini akan memberikan nilai tambah pada kredensial Anda dan mempersiapkan Anda untuk memasuki pasar kerja sepeda motor dengan kepercayaan diri.</p></li><li><p><strong>Peluang Magang:</strong>\nKami berusaha menyediakan peluang magang di bengkel-bengkel sepeda motor lokal atau perusahaan otomotif terkemuka. Ini membantu siswa untuk mendapatkan pengalaman praktis yang berharga dan membangun jaringan dalam industri.</p></li><li><p><strong>Mentorship dan Bimbingan Karir:</strong>\nKami menawarkan program mentorship dan bimbingan karir untuk membantu Anda merencanakan karir Anda setelah lulus. Dengan dukungan dari staf dan instruktur kami, Anda dapat menjelajahi peluang karir yang sesuai dengan minat dan bakat Anda.</p></li></ol><p>Program Keahlian Teknik Sepeda Motor di SMK Bina Taruna Jalan Cagak \nbertujuan untuk menciptakan lulusan yang siap kerja dan memiliki \nketerampilan yang relevan dengan kebutuhan industri. Bergabunglah dengan\n kami untuk memulai perjalanan pendidikan dan karir Anda dalam dunia \nmenarik teknik sepeda motor!<br></p>', 'Teknik-Sepeda-Motor', '2024-01-11', 'WhatsApp Image 2024-01-09 at 10.27.16 PM.jpeg', 1),
(59, 'Teknik Komputer dan Jaringan', '<h5 align=\"justify\">Selamat datang di Program Keahlian Teknik Komputer &amp; Jaringan di SMK Bina Taruna Jalan Cagak!</h5><p>Kami dengan bangga memperkenalkan jurusan ini sebagai bagian dari \nkurikulum pendidikan teknologi informasi yang inovatif dan relevan.</p><h6>Berikut adalah gambaran singkat tentang Program Keahlian Teknik Komputer &amp; Jaringan kami:</h6><ol><li><p><strong>Kurikulum Terkini:</strong>\nProgram kami dirancang dengan kurikulum yang selalu diperbarui sesuai dengan perkembangan terkini di bidang teknologi komputer dan jaringan. Para siswa akan mendapatkan pemahaman yang kuat tentang perangkat keras, perangkat lunak, dan konsep jaringan yang mendasar.</p></li><li><p><strong>Pengajaran oleh Para Profesional:</strong>\nInstruktur kami adalah para profesional berpengalaman dalam industri teknologi informasi. Mereka membawa pengetahuan praktis dan wawasan industri yang mendalam, memastikan bahwa setiap siswa siap untuk menghadapi tuntutan dunia kerja.</p></li><li><p><strong>Laboratorium Teknologi Modern:</strong>\nKami menyediakan fasilitas laboratorium yang dilengkapi dengan perangkat keras dan perangkat lunak terkini. Ini memungkinkan para siswa untuk mengembangkan keterampilan praktis dalam mengelola perangkat keras, menginstal perangkat lunak, dan menangani masalah jaringan.</p></li><li><p><strong>Proyek Praktis dan Simulasi:</strong>\nPara siswa akan terlibat dalam proyek-proyek praktis yang mencakup instalasi, konfigurasi, dan pemecahan masalah jaringan. Simulasi keadaan nyata membantu mereka mengasah keterampilan teknis dan pemecahan masalah.</p></li><li><p><strong>Sertifikasi Industri:</strong>\nSelama program, siswa akan dipersiapkan untuk mendapatkan sertifikasi industri yang diakui, seperti Cisco CCNA atau CompTIA A+. Sertifikasi ini meningkatkan daya saing mereka di pasar kerja dan memberikan bukti keterampilan yang diakui secara global.</p></li><li><p><strong>Peluang Magang:</strong>\nUntuk memberikan pengalaman dunia nyata, kami menyediakan peluang magang di perusahaan teknologi informasi terkemuka. Ini memungkinkan siswa untuk menerapkan pengetahuan mereka dalam situasi kerja sebenarnya dan membangun jaringan profesional.</p></li><li><p><strong>Pengembangan Soft Skills:</strong>\nSelain keterampilan teknis, kami juga memberikan perhatian pada pengembangan soft skills, seperti kemampuan komunikasi, kerja tim, dan kepemimpinan. Ini membantu siswa untuk menjadi profesional yang tanggap dan efektif di lingkungan kerja.</p></li><li><p><strong>Mentorship dan Bimbingan Karir:</strong>\nProgram kami menyertakan program mentorship dan bimbingan karir, yang membantu siswa merencanakan jalur karir mereka. Dengan dukungan staf dan instruktur, siswa dapat menjelajahi berbagai peluang karir dalam industri teknologi informasi.</p></li></ol><p>Bergabunglah dengan Program Keahlian Teknik Komputer &amp; Jaringan di \nSMK Bina Taruna Jalan Cagak untuk memulai perjalanan Anda dalam dunia \nteknologi informasi yang dinamis dan menantang!<br></p>', 'Teknik-Komputer-dan-Jaringan', '2024-01-11', 'WhatsApp Image 2024-01-09 at 10.27.16 PM(1).jpeg', 1),
(60, 'Akomodasi Perhotelan', '<div class=\"flex flex-grow flex-col max-w-full\"><div data-message-author-role=\"assistant\" data-message-id=\"165226d4-bc0f-4653-8130-0d492e048c0a\" class=\"min-h-[20px] text-message flex flex-col items-start gap-3 whitespace-pre-wrap break-words [.text-message+&amp;]:mt-5 overflow-x-auto\"><div class=\"markdown prose w-full break-words dark:prose-invert dark\"><p>Selamat datang di Program Keahlian Akomodasi Perhotelan di SMK Bina Taruna Jalan Cagak! Kami dengan bangga memperkenalkan jurusan ini sebagai bagian integral dari kurikulum pendidikan kami yang bertujuan untuk mempersiapkan siswa menjadi profesional dalam industri perhotelan. Berikut adalah gambaran singkat tentang Program Keahlian Akomodasi Perhotelan kami:</p><ol><li><p><strong>Kurikulum Berstandar Industri:</strong>\nProgram keahlian Akomodasi Perhotelan kami menawarkan kurikulum yang dirancang dengan memperhatikan standar industri perhotelan. Kami memadukan teori dengan praktik langsung untuk memastikan bahwa para siswa kami siap menghadapi tantangan dunia kerja.</p></li><li><p><strong>Pengajaran oleh Profesional Berpengalaman:</strong>\nInstruktur kami adalah para profesional berpengalaman dalam industri perhotelan. Mereka membawa pengetahuan langsung tentang tren terkini dan tuntutan industri, memberikan wawasan berharga kepada siswa.</p></li><li><p><strong>Praktik Kerja di Industri:</strong>\nKami menawarkan kesempatan praktik kerja di berbagai hotel dan resor terkemuka. Ini memberikan siswa pengalaman langsung di lapangan dan membantu mereka memahami berbagai aspek operasional dalam dunia perhotelan.</p></li><li><p><strong>Fokus pada Pelayanan Pelanggan:</strong>\nProgram kami menekankan pentingnya pelayanan pelanggan dalam industri perhotelan. Para siswa diajarkan untuk mengembangkan keterampilan interpersonal, keramahan, dan etika kerja yang akan membantu mereka menjadi profesional perhotelan yang unggul.</p></li><li><p><strong>Manajemen Acara dan Pemesanan:</strong>\nKami menyediakan pelajaran tentang manajemen acara dan pemesanan untuk memberikan siswa pemahaman yang komprehensif tentang bagaimana merencanakan dan mengelola berbagai acara, mulai dari pertemuan bisnis hingga acara pernikahan.</p></li><li><p><strong>Pelatihan dalam Kebersihan dan Tata Boga:</strong>\nPara siswa kami akan mendapatkan pemahaman mendalam tentang standar kebersihan dan tata boga yang diperlukan dalam operasional hotel dan restoran. Ini mencakup pelatihan dalam penyajian makanan dan minuman dengan standar tinggi.</p></li><li><p><strong>Penggunaan Teknologi dalam Perhotelan:</strong>\nDalam era digital, kami mengajarkan penggunaan teknologi terkini yang digunakan dalam manajemen hotel, pemesanan online, dan sistem lainnya yang mendukung operasional perhotelan.</p></li><li><p><strong>Peluang Karir yang Luas:</strong>\nLulusan Program Keahlian Akomodasi Perhotelan kami memiliki peluang karir yang luas, termasuk menjadi manajer hotel, koordinator acara, resepsionis, chef, dan berbagai peran lainnya dalam industri perhotelan.</p></li></ol><p>Bergabunglah dengan kami di SMK Bina Taruna Jalan Cagak dan jelajahi dunia menarik perhotelan melalui Program Keahlian Akomodasi Perhotelan kami. Kami berkomitmen untuk membantu Anda membangun fondasi yang kuat untuk karir sukses Anda di industri ini!</p></div></div></div>', 'Akomodasi-Perhotelan', '2024-01-11', 'WhatsApp Image 2024-01-09 at 10.27.17 PM.jpeg', 1),
(61, 'Teknik Kendaraan Ringan', '<div data-message-author-role=\"assistant\" data-message-id=\"89ac2df2-e502-4fa4-8514-e9a53acd6747\" class=\"min-h-[20px] text-message flex flex-col items-start gap-3 whitespace-pre-wrap break-words [.text-message+&amp;]:mt-5 overflow-x-auto\"><div class=\"markdown prose w-full break-words dark:prose-invert dark\"><p>Selamat datang di Program Keahlian Teknik Kendaraan Ringan di SMK Bina Taruna Jalan Cagak! Kami dengan bangga memperkenalkan jurusan ini sebagai bagian penting dari kurikulum pendidikan teknik kami yang inovatif. Berikut adalah gambaran singkat tentang Program Keahlian Teknik Kendaraan Ringan kami:</p><ol><li><p><strong>Kurikulum Berkualitas:</strong>\nProgram kami menawarkan kurikulum yang berfokus pada pemahaman mendalam tentang teknologi kendaraan ringan, termasuk sistem mesin, kelistrikan, dan komponen lainnya. Kami menyediakan kombinasi teori dan praktik untuk memastikan siswa siap menghadapi tantangan di industri otomotif.</p></li><li><p><strong>Instruktur Berpengalaman:</strong>\nInstruktur kami adalah para profesional berpengalaman dalam industri otomotif. Mereka membawa pengetahuan praktis yang mendalam serta wawasan industri yang terkini, mempersiapkan siswa untuk menjadi teknisi kendaraan yang kompeten.</p></li><li><p><strong>Fasilitas Modern:</strong>\nFasilitas laboratorium dan workshop kami dilengkapi dengan peralatan terkini untuk mendukung pembelajaran praktis. Para siswa memiliki kesempatan untuk bekerja dengan perangkat dan alat teknologi tinggi yang digunakan dalam dunia otomotif.</p></li><li><p><strong>Pemeliharaan dan Perbaikan:</strong>\nSiswa akan mempelajari keterampilan pemeliharaan dan perbaikan kendaraan ringan, termasuk diagnosis masalah, perawatan rutin, dan perbaikan komponen. Hal ini memungkinkan mereka untuk menjadi ahli yang dapat diandalkan dalam menjaga dan memperbaiki berbagai jenis kendaraan.</p></li><li><p><strong>Teknologi Terkini:</strong>\nKami mengajarkan penggunaan teknologi terkini dalam otomotif, seperti sistem kontrol elektronik, sensor-sensor pintar, dan perangkat lunak diagnosis. Siswa akan memiliki pemahaman yang kuat tentang perkembangan terbaru di industri ini.</p></li><li><p><strong>Proyek Praktis:</strong>\nProgram kami menyertakan proyek-proyek praktis yang memungkinkan siswa menerapkan pengetahuan teoritis mereka dalam situasi nyata. Ini mencakup perakitan kendaraan, analisis kerusakan, dan proyek-proyek inovatif lainnya.</p></li><li><p><strong>Sertifikasi Industri:</strong>\nSelama program, siswa akan dipersiapkan untuk mendapatkan sertifikasi industri yang diakui. Sertifikasi ini memberikan validasi terhadap keterampilan siswa dan meningkatkan daya saing mereka di pasar kerja.</p></li><li><p><strong>Pendidikan Karir yang Komprehensif:</strong>\nKami tidak hanya memberikan keterampilan teknis, tetapi juga menyediakan panduan karir dan pembelajaran keterampilan lunak seperti kerja tim, komunikasi, dan kepemimpinan, yang diperlukan dalam lingkungan kerja.</p></li></ol><p>Bergabunglah dengan Program Keahlian Teknik Kendaraan Ringan di SMK Bina Taruna Jalan Cagak dan raihlah kesempatan untuk merancang masa depan Anda dalam industri otomotif yang dinamis!</p></div></div>', 'Teknik-Kendaraan-Ringan', '2024-01-11', 'WhatsApp Image 2024-01-09 at 10.27.17 PM(1).jpeg', 1),
(62, 'Jasa Boga', '<div class=\"flex flex-grow flex-col max-w-full\"><div data-message-author-role=\"assistant\" data-message-id=\"b82e1468-e41e-48f1-a721-6cae834def0a\" class=\"min-h-[20px] text-message flex flex-col items-start gap-3 whitespace-pre-wrap break-words [.text-message+&amp;]:mt-5 overflow-x-auto\"><div class=\"markdown prose w-full break-words dark:prose-invert dark\"><p>Selamat datang di Program Keahlian Jasa Boga di SMK Bina Taruna Jalan Cagak! Kami dengan bangga memperkenalkan jurusan ini sebagai bagian penting dari kurikulum kami yang dirancang untuk menumbuhkan bakat kuliner dan keterampilan seni memasak. Berikut adalah gambaran singkat tentang Program Keahlian Jasa Boga kami:</p><ol><li><p><strong>Kurikulum Kreatif:</strong>\nProgram kami menawarkan kurikulum yang kreatif dan komprehensif, memberikan pemahaman mendalam tentang seni memasak, teknik kulinari, dan manajemen dapur. Kami berusaha untuk membentuk siswa menjadi koki profesional yang kreatif dan berbakat.</p></li><li><p><strong>Instruktur Ahli:</strong>\nInstruktur kami adalah para ahli dalam industri kuliner, membawa pengalaman praktis dan pengetahuan mendalam. Mereka akan membimbing siswa dalam memahami berbagai teknik memasak, kombinasi rasa, dan presentasi hidangan yang memukau.</p></li><li><p><strong>Fasilitas Modern:</strong>\nLaboratorium kuliner dan dapur kami dilengkapi dengan peralatan modern, memastikan bahwa siswa memiliki akses ke fasilitas terbaik untuk mengasah keterampilan mereka. Lingkungan ini menciptakan suasana belajar yang mendukung dan inspiratif.</p></li><li><p><strong>Diversifikasi Kuliner:</strong>\nSiswa kami akan belajar tentang berbagai masakan dari seluruh dunia, mencakup teknik memasak dan presentasi hidangan dari berbagai budaya. Ini membuka peluang bagi mereka untuk menjadi koki yang berpengetahuan luas dan berwawasan global.</p></li><li><p><strong>Manajemen Dapur:</strong>\nProgram kami mencakup aspek manajemen dapur, termasuk perencanaan menu, pengelolaan persediaan, dan pengaturan operasional dapur. Ini membantu siswa untuk mendapatkan pemahaman menyeluruh tentang pengelolaan sebuah dapur yang efisien.</p></li><li><p><strong>Penggunaan Bahan Berkualitas:</strong>\nSiswa diajarkan untuk mengenali, memilih, dan mengolah bahan makanan berkualitas tinggi. Mereka akan belajar tentang ketersediaan dan penggunaan bahan lokal dan internasional untuk menciptakan hidangan yang lezat dan inovatif.</p></li><li><p><strong>Pelatihan Keterampilan Kuliner dan Presentasi:</strong>\nSiswa akan mendapatkan pelatihan keterampilan kuliner seperti memotong, mencincang, dan memasak, serta keterampilan presentasi untuk menata hidangan secara estetis dan memikat selera.</p></li><li><p><strong>Pengalaman Praktis melalui Event Kuliner:</strong>\nPara siswa akan terlibat dalam penyelenggaraan event kuliner di sekolah, memberikan mereka kesempatan untuk merancang, memasak, dan menyajikan hidangan untuk komunitas sekolah dan masyarakat sekitar.</p></li></ol><p>Bergabunglah dengan Program Keahlian Jasa Boga di SMK Bina Taruna Jalan Cagak dan nikmatilah pengalaman kuliner yang mendalam dan menarik. Kami berkomitmen untuk membantu siswa kami mengejar karir yang sukses dan memuaskan di dunia kuliner yang dinamis!</p></div></div></div>', 'Jasa-Boga', '2024-01-11', 'WhatsApp Image 2024-01-09 at 10.27.17 PM(2).jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE IF NOT EXISTS `konfigurasi` (
  `konfigurasi_id` int NOT NULL AUTO_INCREMENT,
  `nama_web` varchar(50) DEFAULT NULL,
  `deskripsi` text,
  `visi` text,
  `misi` text,
  `instagram` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `whatsapp` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`konfigurasi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`konfigurasi_id`, `nama_web`, `deskripsi`, `visi`, `misi`, `instagram`, `facebook`, `whatsapp`, `email`, `alamat`, `logo`, `icon`) VALUES
(1, 'SMK BINA TARUNA', '<h2 class=\"display-5 fw-medium text-white\">Selamat datang di <strong> SMK Bina Taruna Jalan Cagak</strong></h2>\n<h5 class=\"text-white fw-medium\">Sebuah lembaga pendidikan yang berdedikasi untuk memberikan pendidikan berkualitas dan persiapan karir bagi para siswa.</h5>', 'SMK Bina Taruna Jalan Cagak memiliki visi untuk menjadi lembaga pendidikan unggul yang mempersiapkan siswa untuk menghadapi tantangan global.', 'Misi kami adalah menyediakan pendidikan berkualitas dengan fokus pada pengembangan keterampilan praktis dan karakter yang kuat.', 'https://www.instagram.com/official_bintar/', 'https://www.facebook.com/Bina.Taruna.Jalancagak/', '+6282266667777', 'smkbinatarunajlcagak@gmail.com', 'Jl. Bunihayu No. 76 Jalan Cagak, Subang', 'mnva6cn44zawzyn1fsxn-6@2x.png', 'mnva6cn44zawzyn1fsxn-6@2x.png');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `pengumuman_id` int NOT NULL AUTO_INCREMENT,
  `judul_pengumuman` varchar(255) DEFAULT NULL,
  `isi_pengumuman` text,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`pengumuman_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`pengumuman_id`, `judul_pengumuman`, `isi_pengumuman`, `tanggal`) VALUES
(7, 'Daftar Ulang Semester', '<p>Kepada seluruh siswa SMK Bina Taruna Jalan Cagak,</p><p>Dengan hormat,</p><p>Kami ingin memberitahukan kepada seluruh siswa bahwa periode daftar ulang untuk semester mendatang telah dimulai. Daftar ulang ini adalah langkah penting dalam persiapan menuju semester yang akan datang. Berikut adalah informasi terkait proses daftar ulang:</p><p><strong>Jadwal Daftar Ulang:</strong></p><ul><li>Tanggal Mulai: [Tanggal Mulai Daftar Ulang]</li><li>Tanggal Akhir: [Tanggal Akhir Daftar Ulang]</li></ul><p><strong>Langkah-langkah Daftar Ulang:</strong></p><ol><li>Silakan kunjungi kantor administrasi sekolah pada jam kerja untuk mengambil formulir daftar ulang.</li><li>Isi formulir dengan lengkap dan benar. Pastikan menyertakan semua dokumen yang diperlukan.</li><li>Setelah mengisi formulir, serahkan kembali ke kantor administrasi bersama dengan bukti pembayaran biaya daftar ulang.</li></ol><p><strong>Dokumen yang Diperlukan:</strong></p><ul><li>Formulir Daftar Ulang yang sudah diisi.</li><li>Fotokopi Kartu Tanda Siswa (KTS) yang masih berlaku.</li><li>Bukti Pembayaran Biaya Daftar Ulang.</li></ul><p><strong>Biaya Daftar Ulang:</strong></p><ul><li>[Jumlah Biaya Daftar Ulang]</li></ul><p><strong>Catatan Penting:</strong></p><ul><li>Daftar ulang harus dilakukan sesuai dengan jadwal yang telah ditentukan. Keterlambatan dalam daftar ulang dapat berdampak pada proses administrasi dan partisipasi siswa dalam kegiatan pembelajaran.</li><li>Untuk informasi lebih lanjut atau pertanyaan terkait daftar ulang, silakan hubungi kantor administrasi.</li></ul><p>Kami mengharapkan kerjasama dari seluruh siswa dan orang tua/wali dalam menjalankan proses daftar ulang ini. Terima kasih atas perhatian dan partisipasinya.</p><p></p>', '2024-01-11'),
(8, 'Masuk Semester Genap', '<p>Kepada seluruh siswa SMK Bina Taruna Jalan Cagak,</p><p>Dengan hormat,</p><p>Kami berharap Anda semua dalam keadaan sehat dan semangat. Seiring dengan berakhirnya semester gasal, kami ingin memberikan pengumuman penting terkait dengan masuknya semester genap. Berikut adalah informasi terkait:</p><p><strong>1. Jadwal Awal Semester Genap:</strong></p><ul><li>Tanggal Awal Semester: [Tanggal Awal Semester Genap]</li><li>Pemberitahuan akan diberikan melalui pesan atau papan pengumuman sekolah.</li></ul><p><strong>2. Pengumuman Kelulusan Semester Gasal:</strong></p><ul><li>Pengumuman kelulusan dan nilai semester gasal akan diumumkan pada: [Tanggal Pengumuman Kelulusan]</li></ul><p><strong>3. Pendaftaran Ulang:</strong></p><ul><li>Proses pendaftaran ulang untuk semester genap dimulai pada: [Tanggal Mulai Pendaftaran Ulang]</li><li>Batas akhir pendaftaran ulang: [Tanggal Batas Akhir Pendaftaran Ulang]</li></ul><p><strong>4. Pembagian Kelas dan Jadwal Pelajaran:</strong></p><ul><li>Informasi tentang pembagian kelas dan jadwal pelajaran akan diumumkan setelah proses pendaftaran ulang selesai.</li></ul><p><strong>5. Pemilihan Mata Pelajaran Tambahan:</strong></p><ul><li>Siswa yang memiliki mata pelajaran tambahan dapat memilih mata pelajaran tersebut selama periode pendaftaran ulang.</li></ul><p><strong>6. Panduan dan Informasi Lainnya:</strong></p><ul><li>Panduan lengkap dan informasi tambahan akan tersedia di kantor administrasi sekolah. Siswa diharapkan untuk membaca dengan teliti.</li></ul><p><strong>Catatan Penting:</strong></p><ul><li>Pastikan untuk membawa dokumen yang diperlukan saat melakukan pendaftaran ulang.</li><li>Siswa yang memiliki tanggungan keuangan dari semester sebelumnya diharapkan untuk menyelesaikan pembayaran agar dapat melanjutkan ke semester genap.</li></ul><p>Untuk pertanyaan lebih lanjut atau klarifikasi, silakan hubungi kantor administrasi sekolah pada jam kerja. Kami menghargai kerjasama dari seluruh siswa dalam menjalani proses administratif ini.</p><p>Semoga semester genap ini membawa keberhasilan dan pengalaman pembelajaran yang positif bagi kita semua. Terima kasih atas perhatian dan kerjasamanya<br></p>', '2024-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `foto` varchar(150) DEFAULT NULL,
  `level` varchar(15) DEFAULT NULL,
  `active` int DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `nama`, `email`, `password`, `foto`, `level`, `active`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '$2y$10$qCQuIY1JiovoKO2ndJCO8.ohnbWGACuCem.P0hYiG.fNhbcgPvPvy', 'mnva6cn44zawzyn1fsxn-6@2x.png', '2', 1),
(23, 'user', 'user', 'user@gmail.com', '$2y$10$VuRT3Dg2DZKpLHpj9WP0t.K1l0T3ZaawyrGPzgtHLHg3cwxv8jTGS', 'mycoding.png', '1', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `berita_ibfk_2` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`kompetensi_id`) REFERENCES `kompetensi` (`kompetensi_id`);

--
-- Constraints for table `kompetensi`
--
ALTER TABLE `kompetensi`
  ADD CONSTRAINT `kompetensi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
