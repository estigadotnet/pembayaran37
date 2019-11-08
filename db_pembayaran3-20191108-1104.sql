-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 08, 2019 at 05:03 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pembayaran3`
--

-- --------------------------------------------------------

--
-- Table structure for table `t001_tahun_ajaran`
--

CREATE TABLE `t001_tahun_ajaran` (
  `id` int(11) NOT NULL,
  `Mulai` varchar(4) NOT NULL,
  `Selesai` varchar(4) NOT NULL,
  `Aktif` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t001_tahun_ajaran`
--

INSERT INTO `t001_tahun_ajaran` (`id`, `Mulai`, `Selesai`, `Aktif`) VALUES
(1, '2019', '2020', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t002_sekolah`
--

CREATE TABLE `t002_sekolah` (
  `id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Alamat` text NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t002_sekolah`
--

INSERT INTO `t002_sekolah` (`id`, `Nama`, `Alamat`) VALUES
(1, 'MINU KARAKTER', '-'),
(2, 'MINU UNGGULAN', '-'),
(3, 'KB NURUL ULUM', '-');

-- --------------------------------------------------------

--
-- Table structure for table `t003_kelas`
--

CREATE TABLE `t003_kelas` (
  `id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t003_kelas`
--

INSERT INTO `t003_kelas` (`id`, `Nama`) VALUES
(1, 'I - KH. BISRI SYANSURI'),
(2, 'I - KH. WACHID HASYIM'),
(3, 'II - KH. ILYAS RUCHIYAT'),
(4, 'II - KH. R. ASNAWI'),
(5, 'III - KH. IDHAM CHOLID'),
(6, 'III - KH. ZAENAL ARIFIN'),
(7, 'IV - KH. ZAENUL MUSTHOFA'),
(8, 'IV - KH.HASYIM ASYARI'),
(9, 'I - IBNU ABAS'),
(10, 'I - IBNU UMAR'),
(11, 'II - IBNU HIBBAN'),
(12, 'II - IBNU KHUZAIMAH'),
(13, 'III - ABU DAWUD'),
(14, 'III - ATTIRMIDZI'),
(15, 'IV - IBNU MAJAH'),
(16, 'IV - MUSLIM'),
(17, 'V - AL BUKHORI'),
(18, 'V - AN NASAI'),
(19, 'VI - AHMAD BIN HANBAL A'),
(20, 'VI - AHMAD BIN HANBAL B'),
(21, 'KELOMPOK BERMAIN');

-- --------------------------------------------------------

--
-- Table structure for table `t004_siswa`
--

CREATE TABLE `t004_siswa` (
  `id` int(11) NOT NULL,
  `NomorInduk` varchar(25) NOT NULL,
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t004_siswa`
--

INSERT INTO `t004_siswa` (`id`, `NomorInduk`, `Nama`) VALUES
(1, '0001', 'Ahmad Ziyad Alfahri'),
(2, '0002', 'Ainun Maulidia Azzahra'),
(3, '0003', 'Aira Aisyah Benny '),
(4, '0004', 'Alif Firman Saputra'),
(5, '0005', 'Althaf  Haedar Al Hisyam H'),
(6, '0006', 'Arjuna Novandra Januar'),
(7, '0007', 'Arzhivan Fareyza Batara'),
(8, '0008', 'Asyraf Naufal Mahardika Al - Aziz'),
(9, '0009', 'Azka Raditya Alfiandra'),
(10, '0010', 'Berlian Amy Shinta Q.W.'),
(11, '0011', 'Fachri Ahmad Husaini'),
(12, '0012', 'Fathan Zakwan A'),
(13, '0013', 'Fathurizky'),
(14, '0014', 'Faza Nazifa Rachman'),
(15, '0015', 'Filzah Zalfa Azzahra'),
(16, '0016', 'Herdhianti Ainun Rakhima'),
(17, '0017', 'Iftinah Haura Dzakiyah'),
(18, '0018', 'Lailia Izzatul Muna'),
(19, '0019', 'M. Azzam Adabi'),
(20, '0020', 'Muhammad Banu  M. N'),
(21, '0021', 'Naufal Yusfi Al Aufa'),
(22, '0022', 'Prawira Yudhawidiono'),
(23, '0023', 'Salman Al-Farisi'),
(24, '0024', 'Tania Maulida Hapsari'),
(32, '0025', 'Abdurrahman Faris Nur F'),
(33, '0026', 'Afika Cahya Reybina'),
(34, '0027', 'Ahmad Atmam Asyakiri'),
(35, '0028', 'Ahza Kotaro Naraya'),
(36, '0029', 'Akihiko Ahmad A.'),
(37, '0030', 'Arzhavin Fareyza Batara'),
(38, '0031', 'Attiyatul Azizah'),
(39, '0032', 'Averous Fakhrie Z. A.'),
(40, '0033', 'Azyan Hisyam Naufal A'),
(41, '0034', 'Azzalea Batrisya Queensy'),
(42, '0035', 'Cetrine Clowwi Saryoto'),
(43, '0036', 'Danisya Fahma Al Husna'),
(44, '0037', 'Firdaus Ahmad F.'),
(45, '0038', 'Hadfina Ayu Althafunisa'),
(46, '0039', 'Herdhianti Ainun Rahma'),
(47, '0040', 'Jauharul Hikam Alwari F'),
(48, '0041', 'M. Morgan Budiono'),
(49, '0042', 'Moch Nabil Syahroni'),
(50, '0043', 'Mouzazora Syamara S'),
(51, '0044', 'Mufidathul Ainun Syifa'),
(52, '0045', 'Muhammad Asyrofun N'),
(53, '0046', 'Renanta Lona Laila K'),
(54, '0047', 'Roziq Jamaludin'),
(55, '0048', 'Sindu Prawoko'),
(63, '2952', 'Ahda Gusti Nuril Muhammad'),
(64, '2953', 'Al - Rasya Ilham Putra'),
(65, '2954', 'Anindito Radja Prasetio'),
(66, '2955', 'Annada Muhaddiatul Qolby'),
(67, '2956', 'Arya Mahendra Samudra Pratama'),
(68, '2957', 'Athira Nadhiva'),
(69, '2958', 'Attala Nur Raiesha Firdha'),
(70, '2959', 'Chaira Zalfa Adlha Putri Septiawan'),
(71, '2960', 'Garnetta Afifah Alfina'),
(72, '2961', 'Ianabigh'),
(73, '2962', 'Kayla Hafizatun Nisa\''),
(74, '2963', 'Malva Novreliza Rizwa Cytotecia'),
(75, '2964', 'Mohammad Fahmi Rosyid'),
(76, '2965', 'M. Haikal Luthfi Al - Abqori'),
(77, '2966', 'M. Nasik Ulwan'),
(78, '2967', 'M. Nurul Abiyan'),
(79, '2968', 'Nabila Rizky Syakina'),
(80, '2969', 'Qory Nerando Hutama'),
(81, '2970', 'Rafiida Hasna Cinta Alnarissa'),
(82, '2971', 'Suryo Bahy Nugroho'),
(83, '2972', 'Syahnaya Latifatuz Zayyan'),
(84, '2973', 'Theona Cyma Maritza'),
(85, '2974', 'Zahira Asy - Syifa'),
(86, '2975', 'Zifara Puan Prastika'),
(94, '2976', 'Abizar Syathir Rifiansyah'),
(95, '2977', 'Aisyah Alya Maritza Zain'),
(96, '2978', 'Akilla Apta Fineza'),
(97, '2979', 'Alisha Queena Arifin'),
(98, '2980', 'Arva Akilla Nuraini'),
(99, '2981', 'Berlian Syauqila Quinara Puteri'),
(100, '2982', 'Daffi Alnizarda Akbar'),
(101, '2983', 'Devandryan Syathir Fahriza'),
(102, '2984', 'Dinda Alifa Ramadhania'),
(103, '2985', 'Dzaky Hakim Arvana'),
(104, '2986', 'Fadhil Rahman'),
(105, '2987', 'Hazda Huda Ahmad Sholeh'),
(106, '2988', 'Jovan Adrah Belva Anggra'),
(107, '2989', 'Nabila Althounisa'),
(108, '2990', 'Naila Zafira'),
(109, '2991', 'Nando Baslovan'),
(110, '2992', 'Nouvan Dzaki Taufiqurrohman'),
(111, '2993', 'Muhammad Dastan Leon Hart'),
(112, '2994', 'M. Naufal Firdaus Fadli'),
(113, '2995', 'Qiyla Armilda Megan'),
(114, '2996', 'Raghib Attabik Ni\'amuk'),
(115, '2997', 'Rumasiha Naura Azahra'),
(116, '2998', 'Shema Hasna Al-Hawarismi'),
(117, '2999', 'Viola Phalosa Choir'),
(125, '2859', 'Afiqah Aura Sya\'bana'),
(126, '2860', 'Almira Hasna Humayroh Cahyono'),
(127, '2861', 'Alvina Essa Aprila Kamelia'),
(128, '2862', 'Andini Khansa Nabila Saputri'),
(129, '2863', 'Ardhani Putri Bening Hati'),
(130, '2864', 'Asyif\'fathir Reditya Baskara'),
(131, '2865', 'Batrisya Ahza Mamuro'),
(132, '2838', 'Bintang Eka Putra'),
(133, '2866', 'Claudia Apriliani'),
(134, '2867', 'Daniel Rasya Putra Wardhana'),
(135, '2869', 'Hafizh Nauval Zulfikar Azzam'),
(136, '2870', 'Keysha Anindhita Rubiyanto'),
(137, '2845', 'Labib Ahmad Ashvan Nujaba'),
(138, '2872', 'Muhammad Naafi\' Ridwan'),
(139, '2873', 'Muhammad Wildan Ardas'),
(140, '2849', 'Mochammad Wisnu Irawan'),
(141, '2874', 'Moch. Zakariya  Al-Ghifari'),
(142, '2875', 'Nabila Zahra Ramadhani'),
(143, '2876', 'Nur Aisyah Naraya Angraeni'),
(144, '2877', 'Raffa Achmad Herdana'),
(145, '2868', 'Raisa Adly Irawan'),
(146, '2880', 'Ravego Braja Pungga Wibawa'),
(147, '2878', 'Rajendra Riu Audrey Pratama'),
(148, '2879', 'Syauqy Nura Rabbana'),
(156, '2833', 'Adam Hakiim Saputra'),
(157, '2858', 'Abdhur Rhahmad Yusuf Berlian'),
(158, '2857', 'Abdillah Faqih'),
(159, '2834', 'Afifatus Syi\'bi'),
(160, '2835', 'Aini Millatuz Zuhriyah'),
(161, '2836', 'Alifa Muthia Rahma'),
(162, '2837', 'Aulia Zahra'),
(163, '2839', 'Chaira Nadzifa Althaf Ridwan'),
(164, '2840', 'Dzaky Ustman Pratama'),
(165, '2841', 'Elysia Azeeza Celine Adefa'),
(166, '2842', 'Faizal Akbar Ibna Lisfa'),
(167, '2843', 'Fatima Puspanagara'),
(168, '2844', 'Kenzie Faeyza Hartanto'),
(169, '2846', 'Muhammad Al Fatih'),
(170, '2847', 'Muhammad Fahri Febian'),
(171, '2848', 'Muhammad Farid Al Hafi'),
(172, '2871', 'Muhammad Humam Tsaqiful Ali'),
(173, '2850', 'Naisya Aura Hunafa'),
(174, '2851', 'Richa Zahra Faradis'),
(175, '2852', 'Shalahhudin Mustofa'),
(176, '2853', 'Teduh Galih Akbar'),
(177, '2855', 'Zalfa Almira Salsabilla Putri'),
(178, '2856', 'Zharifah Nur Syarif'),
(187, '2753', 'Achmad Nabil Muzakki'),
(188, '2754', 'Aji Bagus Wibowo'),
(189, '2755', 'Asfa Kamila Ridwan'),
(190, '2756', 'Ananda Faizal Muzakki'),
(191, '2757', 'Aviza Nathania Carisa Susila'),
(192, '2730', 'Alief Surya Syaputra'),
(193, '2760', 'El- Bairuni Ahmad Herjuno'),
(194, '2761', 'Fairuzzaidaan Aziven Isnain S.'),
(195, '2762', 'Jauzaa Tabriz Rajwa Syarif'),
(196, '2763', 'Mirza Lutfi Arfa Fahlam'),
(197, '2764', 'Muhammad Radiyan Rafka P.Y.'),
(198, '2765', 'M. Alif Assidiqi'),
(199, '2766', 'M. Azzam Arinal Haq'),
(200, '2767', 'Muhammad Aufal Majid'),
(201, '2768', 'Nizar Bariq Hany Syahputra'),
(202, '2769', 'Orlen Akbar Satya Al-Azmi'),
(203, '2770', 'Saheva Roziqin Attala'),
(204, '2771', 'Rizqa Umi Maulida'),
(205, '2773', 'Revalina Agustin'),
(206, '2774', 'Quinsha Aulia Ramadhani'),
(207, '2775', 'Viola Maritza Dewi Laksono'),
(208, '3001', 'BRIAN ALVIN P'),
(209, '2776', 'Ziyadatul  Faiza'),
(218, '2729', 'Ali Nur Fauzi'),
(219, '2731', 'Aufi Kayla Tsabitha'),
(220, '2732', 'Bagas Arya Nur Saputra'),
(221, '2733', 'Egi Ubaidillah Dhani Ahmad'),
(222, '2734', 'Fyreen Syarifah Nur Aini'),
(223, '2735', 'Filza Amaluna Maya Rosyida'),
(224, '2736', 'Hanif Aqilla Tsabita Ariqoh'),
(225, '2737', 'Jelita Mafaza'),
(226, '2738', 'Khaizuran Nawwara Albafa'),
(227, '2739', 'Moch Afnan Prasetya'),
(228, '2740', 'Muhammad Andra Al-Ghifari'),
(229, '2741', 'Muhammad Ravell Ardhiansyah'),
(230, '2742', 'Much. Irfan Bustanul Abidin'),
(231, '2743', 'M. Fikri  Ghifani'),
(232, '2744', 'Muhamad Syafrazaq Samhadi'),
(233, '2745', 'Najma Effati Octodhery'),
(234, '2746', 'Novita Fitri Ambarsari'),
(235, '2747', 'Raira Nidia Risti Dewi'),
(236, '2748', 'Raga Fadlillah'),
(237, '2749', 'Syafa Fatania Azzahra'),
(238, '2750', 'Qudzia Nayla Altafunisa'),
(239, '2751', 'Yudistira Rizky Firmansyah'),
(240, '2752', 'Zakiyal Hafidz El Masyhuri'),
(241, '2777', 'Muhamamad Ashar Firas'),
(242, '3005', 'Abdul Hamid Kafabih'),
(243, '3006', 'Adli Haidar Andhika Yahya'),
(244, '3007', 'Aizalia Nida Nafisah'),
(245, '3008', 'Alfina Ayu Ramadhani'),
(246, '3009', 'Alvaro El Ghina Wahid'),
(247, '3010', 'Aly Akbar Rafsanjani'),
(248, '3011', 'Fatih AlFannajah'),
(249, '3012', 'Gendis Kartika Ayu'),
(250, '3013', 'Hadafi Muhammad Agni'),
(251, '3014', 'Haiva Haiyun Calya'),
(252, '3015', 'Istna Athiyah Haibah'),
(253, '3016', 'Khalila Yasmin Ashila'),
(254, '3017', 'Mochamad Rafa Dwi Okta Arianto'),
(255, '3018', 'Muhammad Al Fatih Masyhudi'),
(256, '3019', 'Muhammad Azril eka Putra Suwanto'),
(257, '3020', 'Muhammad Hisyam Robani Ananta'),
(258, '3021', 'Muhammad Rafly Hilman Natja'),
(259, '3022', 'Muhammad Wafiq Izzatul Islam'),
(260, '3023', 'Naura Farras Haidar'),
(261, '3024', 'Nayla Shafa Azzahra'),
(262, '3025', 'Nazzilah Rizqotur Rohmah '),
(263, '3026', 'Ryre Valentina Azary'),
(264, '3027', 'Salsabila Eka Putri Manggaraina'),
(265, '3028', 'Shakila Pandita Ashalina Anggara'),
(266, '3029', 'Shaquilie Putra Nafa Aam M'),
(267, '3030', 'Zahra Nadya A'),
(268, '3031', 'Zia Rizkya El-siddi'),
(269, '3032', 'Aditya Naufal Dary Abiyyu'),
(270, '3033', 'Amara Choirunnisa'),
(271, '3034', 'Ardian Rachma Nugraha'),
(272, '3035', 'Bahtiar Mahardika'),
(273, '3036', 'Danantra Helga Khurmadi'),
(274, '3037', 'Faiza Zakyla Al Fajrin'),
(275, '3038', 'Fasya Aprillia Azzahra'),
(276, '3039', 'Fauzi Akram Razin'),
(277, '3040', 'Faza Zulfa Nabila'),
(278, '3041', 'Githa Khansa Putri Hartoyo'),
(279, '3042', 'Hafiz Naufal Alfaridzi'),
(280, '3043', 'Kayla Dynu Nafiezha Ayu'),
(281, '3044', 'Kheila Irvana Putri'),
(282, '3045', 'Lexa Aqilla Viero'),
(283, '3046', 'M. Jalaluddin Rumi'),
(284, '3047', 'Moch. Rendy Septian Sugiarto'),
(285, '3048', 'Mochamad Bagaskara Arstianto'),
(286, '3049', 'Muhammad Abiy Nabil Athaya'),
(287, '3050', 'Muhammad Alvino Bastian'),
(288, '3051', 'Muhammad Asyam Anwar Husain'),
(289, '3052', 'Muhammad Saiful Barry'),
(290, '3053', 'Nadhifa El Fawwaz'),
(291, '3054', 'Nanda Adhiyaksa Sulistyo'),
(292, '3055', 'Prayodya Pijar Damarlangit'),
(293, '3056', 'Rafifatu Firda Yudianto'),
(294, '3057', 'Rulitania Vinci Violita Hermawan'),
(295, '3058', 'Violla Aqilla Khairina'),
(296, '2919', 'Annisa Josalynn Bharurasmi Putri Arimbi'),
(297, '2920', 'Achmad Nur Fathoni'),
(298, '2921', 'Afifah Nur Aliyah'),
(299, '2922', 'Ahmad Muizzur Rohim'),
(300, '2923', 'Alfina Nur Ida Roselani'),
(301, '2924', 'Allan Griffith Satria Judah'),
(302, '2925', 'Annisa Zahirotus Syarifah'),
(303, '2926', 'Astana Hilman Muzaki'),
(304, '2927', 'Aurega Raqilla Halfizhano'),
(305, '2928', 'Ayuning Dewi Praban Ndari'),
(306, '2929', 'Azza Zahra Pramono'),
(307, '2930', 'Badriyah Farah Nazhifah Salsabila'),
(308, '2931', 'Dewi Adiratna Agustina'),
(309, '2932', 'Erland Syafiq Al Ziqri Hermawan'),
(310, '2933', 'Fuad Ahmad Rasikh'),
(311, '2934', 'Kanza Kanaya Radisti'),
(312, '2935', 'Keysha Aqila Zahrani'),
(313, '2936', 'Mahyana Bimuhammadin K'),
(314, '2937', 'Moch. Agil Restu Putra'),
(315, '2938', 'Moch. Akmal Rafie'),
(316, '2939', 'Nabilla Raihana Ghazzani Wahyu Putri'),
(317, '2940', 'Nayla Varisha Artika Putri'),
(318, '2941', 'Queena Dzakira Praswandini'),
(319, '2942', 'Raafi Hayyu Pratama'),
(320, '2943', 'Rafael Duta Pratama'),
(321, '2944', 'Shofa Meida Saputri'),
(322, '2945', 'Wildan Kabir Aqiel Harianto'),
(323, '2946', 'Zulfikar Maulana'),
(324, '2891', 'Aisyah Swarnindya Bryanesia'),
(325, '2892', 'Anugerah Dimas Setiawan'),
(326, '2893', 'Arifah Nur Aliyah'),
(327, '2894', 'Aqela Rasendriya Purnomo'),
(328, '2895', 'Besema Ni\'amil Ilah'),
(329, '2896', 'Canova Dzaki Azizi'),
(330, '2897', 'Carrissa Putri Chova'),
(331, '2898', 'Daffa Ramadhoni'),
(332, '2899', 'Dira Kaniya Sari'),
(333, '2901', 'Jauhara Zahrani'),
(334, '2902', 'Keyren Fellinanta Widya Purnama'),
(335, '2903', 'Khalisa Syifa Nibbana Nilnalmuna'),
(336, '2904', 'Lutfiana Najwa Kamila'),
(337, '2905', 'Mezzaluna Syaffa Sunjava'),
(338, '2906', 'Muhammad Davi Nashiful Aziz'),
(339, '2907', 'Muhammad Dzaki Pratama'),
(340, '2908', 'Muhammad Iqbaal Rafiqi Sumantri'),
(341, '2909', 'Muhammad Syafiq Rosyad'),
(342, '2910', 'Muhammad Yoni Arseva'),
(343, '2911', 'Najid Dwi Septiyananda'),
(344, '2912', 'Nuzulis Sakhinah'),
(345, '2913', 'Pramudya Revalthaf Hadiana Hadiana'),
(346, '2914', 'Sabrina Jaziilatur Rahmah'),
(347, '2915', 'Samudra Syandana Dwika Poetra'),
(348, '2916', 'Shafa Nur Ramadhani'),
(349, '2917', 'Whisnu Dharma Putra'),
(350, '3002', 'REDIKA ALEGRA ANDRIANSYAH'),
(351, '2918', 'Yolanda Jeslina Heystek'),
(352, '2778', 'Achmad Zaki Al Hakim'),
(353, '2779', 'Ahmad Delvin Syabana'),
(354, '2781', 'Ahsania Mutiara Syifa'),
(355, '2782', 'Alfrezzi Khaufinda'),
(356, '2783', 'Anindya Qhaleesya Putri'),
(357, '2784', 'Avrilita Naswa Ardina'),
(358, '2785', 'Calingga Nur Alifiansa'),
(359, '2786', 'Deanalova Zahra Zhafira Putri'),
(360, '2787', 'Fajar Galih Nur Widya'),
(361, '2788', 'Ferdinand Nanda Pratama'),
(362, '2789', 'Grecia Putri Yuanda Syifa'),
(363, '2790', 'Hilda Junifa Az Zahra'),
(364, '2791', 'Lingga Ardiona'),
(365, '2792', 'M. Abdika Ramadhan Al Muhlis'),
(366, '2793', 'Mikayla Fariqlitha Qudsi Al Husna'),
(367, '2794', 'Mochammad Nizam Firdaus'),
(368, '2795', 'Muh. Abdul Maliq'),
(369, '2796', 'Muhammad Evan Sakha Azka'),
(370, '2797', 'Muhammad Fakhri Nukman'),
(371, '2798', 'Muhammad Fauzul Mufaizin'),
(372, '2799', 'Naila Regina Aulia Rahma'),
(373, '2800', 'Naufal Alifatur Rohman'),
(374, '2801', 'Naufal Azriel Abidin'),
(375, '2802', 'Nur Fatimatus Saadah'),
(376, '2803', 'Panji Senapati Adhiatma Purwanto'),
(377, '2804', 'Raihan Beryl Halfizhano'),
(378, '2805', 'Rihadatul Aisy Maitsarofa'),
(379, '2806', 'A. Syafiq Wildan Maulana'),
(380, '2807', 'Achmad Fesza Kholid'),
(381, '2809', 'Achmad Saleh Ibrahim Al Azar'),
(382, '2810', 'Afifatuz Zahro\''),
(383, '2811', 'Ahmad Azka Mahardika Ramadhan'),
(384, '2812', 'Ahmad Hafiz Novario'),
(385, '2813', 'Ahmad Roiyya Izzul Haq'),
(386, '2814', 'Ahmad Zakka Mafaza'),
(387, '2815', 'Aina Linailil Atthiya'),
(388, '2816', 'Akma Aryastya Luffi R'),
(389, '2818', 'Anaya Suci Althafunnisa'),
(390, '2819', 'Aurora Ro\'ikhanatul Aina\' Maulida'),
(391, '2820', 'Farhat Hasani Fuad'),
(392, '2821', 'Icha Abia Malaika'),
(393, '2822', 'Jihan Makaila Azzahra'),
(394, '2823', 'Luthfia Zahra Talitha'),
(395, '2824', 'M. Najih Nasril Maulana'),
(396, '2825', 'Muhammad Ajril'),
(397, '2826', 'Quraineisha Nabilla Kalia'),
(398, '2827', 'Rahil Najihan El-Sidqi'),
(399, '2828', 'Rifqi Aulia Asshiddiqi'),
(400, '2829', 'Saskia Najwa Fajria'),
(401, '2830', 'Siti Khoirotun Nisa\''),
(402, '2831', 'Umi Lailatull Maghfiroh'),
(403, '2832', 'Yusuf Nur Ismail'),
(404, '2888', 'Zahra Naila Amalina Yahya'),
(405, '2889', 'Abdillah Ferhan Ariyanto'),
(406, '2681', 'Achmad Nur Fauzi'),
(407, '2682', 'Adzra Nindia Aji Kaneesha'),
(408, '2683', 'Ahmad Ashfi Fakhri Azizi'),
(409, '2684', 'Ahmad Bagus Nur Rohman'),
(410, '2685', 'Andyaksa Zaky Rasyid Gifani'),
(411, '2686', 'Anisa Paramesti Rehita Cahyani'),
(412, '2687', 'Azka Dzakira Arro\'ufi'),
(413, '2688', 'Dimas Alvian Nur Rohman'),
(414, '2689', 'Diyanah Fakhira Salsabila'),
(415, '2690', 'Elmira Maftuha Salsabila'),
(416, '2691', 'Farzana Arumia Queen'),
(417, '2692', 'Galang Putra Deztrawan'),
(418, '2693', 'Hanania Farhatun Nisa\''),
(419, '2694', 'Haura Khansa Azzahra'),
(420, '2695', 'Laely Ayu Fitria'),
(421, '2696', 'Maulida Gadis Febriana'),
(422, '2697', 'Moch. Bahal Arvan Maulana'),
(423, '2698', 'Muhammad Aidil Wildi Sulthon'),
(424, '2700', 'Nazhifa Cira Bintany'),
(425, '2701', 'Rendra Arya Saputra'),
(426, '2702', 'Ridlo Akmal Fikri'),
(427, '2703', 'Shafarani Puspaningrum'),
(428, '2704', 'Siti Hanifah'),
(429, '2705', 'Tsania Nuraulia Adaudi'),
(430, '2706', 'Afissa Nathania Hazima'),
(431, '2707', 'Ahmad Khoiru Nizom'),
(432, '2708', 'Aisy Attiyatul A\'la'),
(433, '2709', 'Alexa Safwana Mohga'),
(434, '2710', 'Atiya Refa Kalila Fathoni'),
(435, '2711', 'Aufa Sheila Putri Clarissa'),
(436, '2713', 'Azra Adila'),
(437, '2714', 'Dhini Amelia Az-Zahra'),
(438, '2715', 'Dzakira Iftinah Zalfa'),
(439, '2716', 'Edi Kurniawan Saputra'),
(440, '2717', 'Felta Almaira Anindita Arif'),
(441, '2718', 'Habib Misbakhul Umam'),
(442, '2719', 'M. Zidan Rifqi Agha Giza'),
(443, '2720', 'Mochamad Khadzieq Kanzul Al-Fikry'),
(444, '2721', 'Mochammad Zaenal Muttaqin'),
(445, '2722', 'Muhammad Burhanuddin'),
(446, '2723', 'Muhammad Syaifur Rosyidi'),
(447, '2724', 'Muhammad Zabir Habibullah'),
(448, '2725', 'Nabilla Eiprelia Yudistira'),
(449, '2726', 'Nurul Maulidiah'),
(450, '2728', 'Zidna Rochmatun Nazilah'),
(451, '2886', 'Jessica Bunga Dianatasya'),
(452, '2887', 'Rahmano Harzulfa Rizky Adha'),
(453, '2647', 'Achmad Caesar Rozi Putra'),
(454, '2648', 'Achmad Zandy Rahadinata'),
(455, '2650', 'Agan Al Hfiy Wahid'),
(456, '2651', 'Aizar Rifqi Ubaidillah'),
(457, '2652', 'Alfaiq Dzaki Imadudin'),
(458, '2653', 'Alfan Aulia Rahman'),
(459, '2654', 'Anggrea Putri Hermansyah'),
(460, '2951', 'Almira Dzakiyah Azizah Ramadhani'),
(461, '2655', 'Balqiis Azifah Hayyuni'),
(462, '2656', 'Dennise Althafunnisa'),
(463, '2657', 'Dewi Zahra Azizah'),
(464, '2658', 'Fakhira Haida Putri'),
(465, '2659', 'Ganes Raisya Putri'),
(466, '2660', 'In\'aam Fawwaz Hakim'),
(467, '2661', 'Jaziratul Khikmiyah Az-zahro'),
(468, '2662', 'M. Irsyada Kurnia. P'),
(469, '2663', 'M. Rizki Ibrahim Ofiq'),
(470, '2665', 'M. Robit Irham Alawy'),
(471, '2666', 'Marissa Maulida Azzahrani'),
(472, '2667', 'Muchamad Irfan Andreansyah'),
(473, '2668', 'Nahdah Risni Raihana'),
(474, '2669', 'Shabrina Nadya Sofwah'),
(475, '2672', 'Syarifa Amelia Mudhofar'),
(476, '2673', 'Syauqi Abdillah Syahab'),
(477, '2674', 'Nafiis Zakky Athalla'),
(478, '2679', 'Syifa Ardiansyah Prasetyo'),
(479, '2680', 'Fitriahatty Permata Chairil'),
(480, '2890', 'Fitria Hadzami Annadizah Salsabilla'),
(481, '3003', 'Sherly Zarlinda A\'ardiani'),
(482, '2621', 'Adilla Salwa Salzabil'),
(483, '2622', 'Adinda Bilqist Ainiya Furha'),
(484, '2623', 'Adinda Fuadila Al-Khumaira\''),
(485, '2624', 'Ahmad Aminuddin Hidayatullah'),
(486, '2625', 'Arimbi Prameswari'),
(487, '2626', 'Assyifa Nur Ramadhani'),
(488, '2631', 'Atha Nabila Cahyani'),
(489, '2627', 'Fadhila \'Arsya Sabila'),
(490, '2628', 'Farros Danyansyah'),
(491, '2629', 'Hafizh Nadif Al Rauf'),
(492, '2630', 'Imtiyas Fayyadl Hikam'),
(493, '2634', 'M. Manhalul Ma\'arif Al-Azkhor'),
(494, '2635', 'M. Raffi Atmaja'),
(495, '2670', 'Mohammad Amirulhaq Al Musthofa'),
(496, '2636', 'Muhammad Firdaus Al-Javier'),
(497, '2637', 'Naufal Farras Fredella'),
(498, '2639', 'Nur Laila Abida Rahmah'),
(499, '2641', 'Rifad Imdad Akmali'),
(500, '2642', 'Sayyidati Rofidatul Amalia'),
(501, '2643', 'Zahda Almira Barik'),
(502, '2644', 'Zakiyatul Fakhiroh Salsabila Wahda'),
(503, '2645', 'Zidan Fadli Ahmad'),
(504, '2646', 'Zidni Faza Aunila'),
(505, '2671', 'Raka Ramadhan Wisnu Darmawan'),
(506, '2881', 'Azzah Jinan Zaizafun  Hermawan'),
(507, '3004', 'TEGAR HUMAM REVANA NAUVAL'),
(508, '2560', 'A. Asrori Zuhdi Al-Ghifari'),
(509, '2588', 'Ahmad Miftahul Huda'),
(510, '2561', 'Ahmad Milal Dzunuren'),
(511, '2562', 'Ahmad Taqiyuddin Al Kais'),
(512, 'FFFF', 'Athifa Kinda Fatma Dewi'),
(513, '2587', 'Aufaza Rifitra Manggarai'),
(514, '2566', 'Bilqis Putri Hafina Sofin Nada'),
(515, '2590', 'Chintya Ibnati'),
(516, '2592', 'Dyena Fitra Shefryany'),
(517, '2593', 'Faich Zahir'),
(518, '2596', 'Galang Akhmad Kurniawan'),
(519, '2571', 'Hero Satya Innova'),
(520, '2598', 'Ivan Izza Asshiddiqi'),
(521, '2575', 'Meiya Faizatun Ni\'mah'),
(522, '2604', 'Mochammad Robbany Arfa Tsany'),
(523, '2577', 'Mohammad Habib Amrulloh Al Hadiansyah'),
(524, '2578', 'Muhammad Fadhil Suqru Bachtiar'),
(525, '2579', 'Mukhammad Ghonial Aziz'),
(526, '2607', 'Naura Amanda Sholeha'),
(527, '2617', 'Rafhael Aditya Wardani'),
(528, '2583', 'Ridho Maulana Asmara'),
(529, '2610', 'Siti Revina Diyaul Auliya\''),
(530, '2611', 'Tsalsa Rizqi Ramadhani'),
(531, '2883', 'Zaskia Nurvyla Putri Az-Zahra'),
(532, '2586', 'Zidni Fawaida Junaidi'),
(533, '2563', 'Aqila Putri Manggali'),
(534, '2565', 'Atyyan Praditya Putra'),
(535, '2589', 'Bilqis Fitriatuz Zahro'),
(536, '2567', 'Bunga Nur Lifiawati'),
(537, '2568', 'Dava Bintang Pratama'),
(538, '2569', 'Dinara Alena Dzurriyaturrosyida'),
(539, '2570', 'Faithryan Bintan Aradana'),
(540, '2594', 'Farchan Afnani Faizi'),
(541, '2595', 'Farouq Afnan Ibrahim Arroya'),
(542, '2572', 'Kailla Nasywa Bilbina'),
(543, '2573', 'Khaura Nurul Azkiya'),
(544, '2599', 'Kireina  Fitria Asyhary'),
(545, '2574', 'Laila Shatila Zahra Ni\'matullah'),
(546, '2601', 'M. Zidan Kamal Asyrafi'),
(547, '2602', 'Maya Kholida Az Zahra'),
(548, '2576', 'Moh. Afsyal Medika Pratama'),
(549, '2605', 'Muhammad Chivalry Najma Al Bassya'),
(550, '2580', 'Nabila Nurrahma Ayuningtyas'),
(551, '2606', 'Nadya Halwa Azmina'),
(552, '2581', 'Naufal Hafiz Firdiansyah'),
(553, '2608', 'Rizka Febriana Putri'),
(554, '2584', 'Selma Zaafarani'),
(555, '2609', 'Shofiyyatin Alfina Nur Azizah'),
(556, '2585', 'Tsamia Khanifatus Sholeha'),
(557, '2612', 'Tsania Khanifatus Sholeha'),
(558, '2613', 'Zahrotun Naila Fitriani'),
(559, '3059', 'Sakha Pandya Aththabarani Anggara'),
(560, '3061', 'Shlahuddin Ibnudera'),
(561, '3063', 'Praba Bintang Ridho Pratama Putra');

-- --------------------------------------------------------

--
-- Table structure for table `t005_iuran`
--

CREATE TABLE `t005_iuran` (
  `id` int(11) NOT NULL,
  `Nama` varchar(25) NOT NULL,
  `Jenis` enum('Rutin','Non-Rutin') NOT NULL DEFAULT 'Rutin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t005_iuran`
--

INSERT INTO `t005_iuran` (`id`, `Nama`, `Jenis`) VALUES
(1, 'SPP', 'Rutin'),
(2, 'Catering', 'Rutin'),
(3, 'Worksheet', 'Rutin'),
(4, 'Beasiswa', 'Rutin'),
(5, 'Dana SPM BP3MNU', 'Non-Rutin'),
(6, 'Daftar Ulang', 'Non-Rutin');

-- --------------------------------------------------------

--
-- Table structure for table `t101_daf_kelas`
--

CREATE TABLE `t101_daf_kelas` (
  `id` int(11) NOT NULL,
  `tahun_ajaran_id` int(11) NOT NULL,
  `sekolah_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t101_daf_kelas`
--

INSERT INTO `t101_daf_kelas` (`id`, `tahun_ajaran_id`, `sekolah_id`, `kelas_id`) VALUES
(1, 1, 1, 1),
(2, 1, 1, 2),
(3, 1, 1, 3),
(4, 1, 1, 4),
(5, 1, 1, 5),
(6, 1, 1, 6),
(7, 1, 1, 7),
(8, 1, 1, 8),
(9, 1, 2, 9),
(10, 1, 2, 10),
(11, 1, 2, 11),
(12, 1, 2, 12),
(13, 1, 2, 13),
(14, 1, 2, 14),
(15, 1, 2, 15),
(16, 1, 2, 16),
(17, 1, 2, 17),
(18, 1, 2, 18),
(19, 1, 2, 19),
(20, 1, 2, 20);

-- --------------------------------------------------------

--
-- Table structure for table `t102_daf_kelas_siswa`
--

CREATE TABLE `t102_daf_kelas_siswa` (
  `id` int(11) NOT NULL,
  `daf_kelas_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t102_daf_kelas_siswa`
--

INSERT INTO `t102_daf_kelas_siswa` (`id`, `daf_kelas_id`, `siswa_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 1, 12),
(13, 1, 13),
(14, 1, 14),
(15, 1, 15),
(16, 1, 16),
(17, 1, 17),
(18, 1, 18),
(19, 1, 19),
(20, 1, 20),
(21, 1, 21),
(22, 1, 22),
(23, 1, 23),
(24, 1, 24),
(32, 2, 32),
(33, 2, 33),
(34, 2, 34),
(35, 2, 35),
(36, 2, 36),
(37, 2, 37),
(38, 2, 38),
(39, 2, 39),
(40, 2, 40),
(41, 2, 41),
(42, 2, 42),
(43, 2, 43),
(44, 2, 44),
(45, 2, 45),
(46, 2, 46),
(47, 2, 47),
(48, 2, 48),
(49, 2, 49),
(50, 2, 50),
(51, 2, 51),
(52, 2, 52),
(53, 2, 53),
(54, 2, 54),
(55, 2, 55),
(63, 3, 63),
(64, 3, 64),
(65, 3, 65),
(66, 3, 66),
(67, 3, 67),
(68, 3, 68),
(69, 3, 69),
(70, 3, 70),
(71, 3, 71),
(72, 3, 72),
(73, 3, 73),
(74, 3, 74),
(75, 3, 75),
(76, 3, 76),
(77, 3, 77),
(78, 3, 78),
(79, 3, 79),
(80, 3, 80),
(81, 3, 81),
(82, 3, 82),
(83, 3, 83),
(84, 3, 84),
(85, 3, 85),
(86, 3, 86),
(94, 4, 94),
(95, 4, 95),
(96, 4, 96),
(97, 4, 97),
(98, 4, 98),
(99, 4, 99),
(100, 4, 100),
(101, 4, 101),
(102, 4, 102),
(103, 4, 103),
(104, 4, 104),
(105, 4, 105),
(106, 4, 106),
(107, 4, 107),
(108, 4, 108),
(109, 4, 109),
(110, 4, 110),
(111, 4, 111),
(112, 4, 112),
(113, 4, 113),
(114, 4, 114),
(115, 4, 115),
(116, 4, 116),
(117, 4, 117),
(125, 5, 125),
(126, 5, 126),
(127, 5, 127),
(128, 5, 128),
(129, 5, 129),
(130, 5, 130),
(131, 5, 131),
(132, 5, 132),
(133, 5, 133),
(134, 5, 134),
(135, 5, 135),
(136, 5, 136),
(137, 5, 137),
(138, 5, 138),
(139, 5, 139),
(140, 5, 140),
(141, 5, 141),
(142, 5, 142),
(143, 5, 143),
(144, 5, 144),
(145, 5, 145),
(146, 5, 146),
(147, 5, 147),
(148, 5, 148),
(156, 6, 156),
(157, 6, 157),
(158, 6, 158),
(159, 6, 159),
(160, 6, 160),
(161, 6, 161),
(162, 6, 162),
(163, 6, 163),
(164, 6, 164),
(165, 6, 165),
(166, 6, 166),
(167, 6, 167),
(168, 6, 168),
(169, 6, 169),
(170, 6, 170),
(171, 6, 171),
(172, 6, 172),
(173, 6, 173),
(174, 6, 174),
(175, 6, 175),
(176, 6, 176),
(177, 6, 177),
(178, 6, 178),
(187, 7, 187),
(188, 7, 188),
(189, 7, 189),
(190, 7, 190),
(191, 7, 191),
(192, 7, 192),
(193, 7, 193),
(194, 7, 194),
(195, 7, 195),
(196, 7, 196),
(197, 7, 197),
(198, 7, 198),
(199, 7, 199),
(200, 7, 200),
(201, 7, 201),
(202, 7, 202),
(203, 7, 203),
(204, 7, 204),
(205, 7, 205),
(206, 7, 206),
(207, 7, 207),
(208, 7, 208),
(209, 7, 209),
(218, 8, 218),
(219, 8, 219),
(220, 8, 220),
(221, 8, 221),
(222, 8, 222),
(223, 8, 223),
(224, 8, 224),
(225, 8, 225),
(226, 8, 226),
(227, 8, 227),
(228, 8, 228),
(229, 8, 229),
(230, 8, 230),
(231, 8, 231),
(232, 8, 232),
(233, 8, 233),
(234, 8, 234),
(235, 8, 235),
(236, 8, 236),
(237, 8, 237),
(238, 8, 238),
(239, 8, 239),
(240, 8, 240),
(241, 8, 241),
(242, 9, 242),
(243, 9, 243),
(244, 9, 244),
(245, 9, 245),
(246, 9, 246),
(247, 9, 247),
(248, 9, 248),
(249, 9, 249),
(250, 9, 250),
(251, 9, 251),
(252, 9, 252),
(253, 9, 253),
(254, 9, 254),
(255, 9, 255),
(256, 9, 256),
(257, 9, 257),
(258, 9, 258),
(259, 9, 259),
(260, 9, 260),
(261, 9, 261),
(262, 9, 262),
(263, 9, 263),
(264, 9, 264),
(265, 9, 265),
(266, 9, 266),
(267, 9, 267),
(268, 9, 268),
(640, 9, 560),
(641, 9, 561),
(304, 10, 269),
(305, 10, 270),
(306, 10, 271),
(307, 10, 272),
(308, 10, 273),
(309, 10, 274),
(310, 10, 275),
(311, 10, 276),
(312, 10, 277),
(313, 10, 278),
(314, 10, 279),
(315, 10, 280),
(316, 10, 281),
(317, 10, 282),
(318, 10, 283),
(319, 10, 284),
(320, 10, 285),
(321, 10, 286),
(322, 10, 287),
(323, 10, 288),
(324, 10, 289),
(325, 10, 290),
(326, 10, 291),
(327, 10, 292),
(328, 10, 293),
(329, 10, 294),
(330, 10, 295),
(335, 11, 324),
(336, 11, 325),
(337, 11, 326),
(338, 11, 327),
(339, 11, 328),
(340, 11, 329),
(341, 11, 330),
(342, 11, 331),
(343, 11, 332),
(344, 11, 333),
(345, 11, 334),
(346, 11, 335),
(347, 11, 336),
(348, 11, 337),
(349, 11, 338),
(350, 11, 339),
(351, 11, 340),
(352, 11, 341),
(353, 11, 342),
(354, 11, 343),
(355, 11, 344),
(356, 11, 345),
(357, 11, 346),
(358, 11, 347),
(359, 11, 348),
(360, 11, 349),
(361, 11, 350),
(362, 11, 351),
(366, 12, 296),
(367, 12, 297),
(368, 12, 298),
(369, 12, 299),
(370, 12, 300),
(371, 12, 301),
(372, 12, 302),
(373, 12, 303),
(374, 12, 304),
(375, 12, 305),
(376, 12, 306),
(377, 12, 307),
(378, 12, 308),
(379, 12, 309),
(380, 12, 310),
(381, 12, 311),
(382, 12, 312),
(383, 12, 313),
(384, 12, 314),
(385, 12, 315),
(386, 12, 316),
(387, 12, 317),
(388, 12, 318),
(389, 12, 319),
(390, 12, 320),
(391, 12, 321),
(392, 12, 322),
(393, 12, 323),
(397, 13, 352),
(398, 13, 353),
(399, 13, 354),
(400, 13, 355),
(401, 13, 356),
(402, 13, 357),
(403, 13, 358),
(404, 13, 359),
(405, 13, 360),
(406, 13, 361),
(407, 13, 362),
(408, 13, 363),
(409, 13, 364),
(410, 13, 365),
(411, 13, 366),
(412, 13, 367),
(413, 13, 368),
(414, 13, 369),
(415, 13, 370),
(416, 13, 371),
(417, 13, 372),
(418, 13, 373),
(419, 13, 374),
(420, 13, 375),
(421, 13, 376),
(422, 13, 377),
(423, 13, 378),
(428, 14, 379),
(429, 14, 380),
(430, 14, 381),
(431, 14, 382),
(432, 14, 383),
(433, 14, 384),
(434, 14, 385),
(435, 14, 386),
(436, 14, 387),
(437, 14, 388),
(438, 14, 389),
(439, 14, 390),
(440, 14, 391),
(441, 14, 392),
(442, 14, 393),
(443, 14, 394),
(444, 14, 395),
(445, 14, 396),
(446, 14, 397),
(447, 14, 398),
(448, 14, 399),
(449, 14, 400),
(450, 14, 401),
(451, 14, 402),
(452, 14, 403),
(453, 14, 404),
(454, 14, 405),
(455, 14, 559),
(459, 15, 406),
(460, 15, 407),
(461, 15, 408),
(462, 15, 409),
(463, 15, 410),
(464, 15, 411),
(465, 15, 412),
(466, 15, 413),
(467, 15, 414),
(468, 15, 415),
(469, 15, 416),
(470, 15, 417),
(471, 15, 418),
(472, 15, 419),
(473, 15, 420),
(474, 15, 421),
(475, 15, 422),
(476, 15, 423),
(477, 15, 424),
(478, 15, 425),
(479, 15, 426),
(480, 15, 427),
(481, 15, 428),
(482, 15, 429),
(490, 16, 430),
(491, 16, 431),
(492, 16, 432),
(493, 16, 433),
(494, 16, 434),
(495, 16, 435),
(496, 16, 436),
(497, 16, 437),
(498, 16, 438),
(499, 16, 439),
(500, 16, 440),
(501, 16, 441),
(502, 16, 442),
(503, 16, 443),
(504, 16, 444),
(505, 16, 445),
(506, 16, 446),
(507, 16, 447),
(508, 16, 448),
(509, 16, 449),
(510, 16, 450),
(511, 16, 451),
(512, 16, 452),
(521, 17, 481),
(522, 17, 482),
(523, 17, 483),
(524, 17, 484),
(525, 17, 485),
(526, 17, 486),
(527, 17, 487),
(528, 17, 488),
(529, 17, 489),
(530, 17, 490),
(531, 17, 491),
(532, 17, 492),
(533, 17, 493),
(534, 17, 494),
(535, 17, 495),
(536, 17, 496),
(537, 17, 497),
(538, 17, 498),
(539, 17, 499),
(540, 17, 500),
(541, 17, 501),
(542, 17, 502),
(543, 17, 503),
(544, 17, 504),
(545, 17, 505),
(546, 17, 506),
(547, 17, 507),
(552, 18, 453),
(553, 18, 454),
(554, 18, 455),
(555, 18, 456),
(556, 18, 457),
(557, 18, 458),
(558, 18, 459),
(559, 18, 460),
(560, 18, 461),
(561, 18, 462),
(562, 18, 463),
(563, 18, 464),
(564, 18, 465),
(565, 18, 466),
(566, 18, 467),
(567, 18, 468),
(568, 18, 469),
(569, 18, 470),
(570, 18, 471),
(571, 18, 472),
(572, 18, 473),
(573, 18, 474),
(574, 18, 475),
(575, 18, 476),
(576, 18, 477),
(577, 18, 478),
(578, 18, 479),
(579, 18, 480),
(583, 19, 508),
(584, 19, 509),
(585, 19, 510),
(586, 19, 511),
(587, 19, 512),
(588, 19, 513),
(589, 19, 514),
(590, 19, 515),
(591, 19, 516),
(592, 19, 517),
(593, 19, 518),
(594, 19, 519),
(595, 19, 520),
(596, 19, 521),
(597, 19, 522),
(598, 19, 523),
(599, 19, 524),
(600, 19, 525),
(601, 19, 526),
(602, 19, 527),
(603, 19, 528),
(604, 19, 529),
(605, 19, 530),
(606, 19, 531),
(607, 19, 532),
(614, 20, 533),
(615, 20, 534),
(616, 20, 535),
(617, 20, 536),
(618, 20, 537),
(619, 20, 538),
(620, 20, 539),
(621, 20, 540),
(622, 20, 541),
(623, 20, 542),
(624, 20, 543),
(625, 20, 544),
(626, 20, 545),
(627, 20, 546),
(628, 20, 547),
(629, 20, 548),
(630, 20, 549),
(631, 20, 550),
(632, 20, 551),
(633, 20, 552),
(634, 20, 553),
(635, 20, 554),
(636, 20, 555),
(637, 20, 556),
(638, 20, 557),
(639, 20, 558);

-- --------------------------------------------------------

--
-- Table structure for table `t103_daf_kelas_siswa_iuran`
--

CREATE TABLE `t103_daf_kelas_siswa_iuran` (
  `id` int(11) NOT NULL,
  `daf_kelas_siswa_id` int(11) NOT NULL,
  `iuran_id` int(11) NOT NULL,
  `Jumlah` float(14,2) NOT NULL,
  `byr01` enum('0','1') NOT NULL DEFAULT '0',
  `jml01` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl01` date DEFAULT NULL,
  `byr02` enum('0','1') NOT NULL DEFAULT '0',
  `jml02` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl02` date DEFAULT NULL,
  `byr03` enum('0','1') NOT NULL DEFAULT '0',
  `jml03` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl03` date DEFAULT NULL,
  `byr04` enum('0','1') NOT NULL DEFAULT '0',
  `jml04` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl04` date DEFAULT NULL,
  `byr05` enum('0','1') NOT NULL DEFAULT '0',
  `jml05` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl05` date DEFAULT NULL,
  `byr06` enum('0','1') NOT NULL DEFAULT '0',
  `jml06` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl06` date DEFAULT NULL,
  `byr07` enum('0','1') NOT NULL DEFAULT '0',
  `jml07` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl07` date DEFAULT NULL,
  `byr08` enum('0','1') NOT NULL DEFAULT '0',
  `jml08` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl08` date DEFAULT NULL,
  `byr09` enum('0','1') NOT NULL DEFAULT '0',
  `jml09` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl09` date DEFAULT NULL,
  `byr10` enum('0','1') NOT NULL DEFAULT '0',
  `jml10` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl10` date DEFAULT NULL,
  `byr11` enum('0','1') NOT NULL DEFAULT '0',
  `jml11` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl11` date DEFAULT NULL,
  `byr12` enum('0','1') NOT NULL DEFAULT '0',
  `jml12` float(14,2) NOT NULL DEFAULT 0.00,
  `tgl12` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t103_daf_kelas_siswa_iuran`
--

INSERT INTO `t103_daf_kelas_siswa_iuran` (`id`, `daf_kelas_siswa_id`, `iuran_id`, `Jumlah`, `byr01`, `jml01`, `tgl01`, `byr02`, `jml02`, `tgl02`, `byr03`, `jml03`, `tgl03`, `byr04`, `jml04`, `tgl04`, `byr05`, `jml05`, `tgl05`, `byr06`, `jml06`, `tgl06`, `byr07`, `jml07`, `tgl07`, `byr08`, `jml08`, `tgl08`, `byr09`, `jml09`, `tgl09`, `byr10`, `jml10`, `tgl10`, `byr11`, `jml11`, `tgl11`, `byr12`, `jml12`, `tgl12`) VALUES
(1, 1, 1, 170000.00, '1', 170000.00, '2019-08-15', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(2, 1, 2, 145000.00, '1', 145000.00, '2019-08-15', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(3, 1, 3, 45000.00, '1', 45000.00, '2019-08-15', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(4, 2, 1, 170000.00, '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(5, 2, 2, 145000.00, '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(6, 2, 3, 45000.00, '1', 45000.00, '2019-09-14', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(7, 3, 1, 170000.00, '1', 170000.00, '2019-11-01', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(8, 3, 2, 145000.00, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(9, 3, 3, 45000.00, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(10, 4, 1, 170000.00, '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(11, 4, 2, 145000.00, '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(12, 4, 3, 45000.00, '1', 45000.00, '2019-09-14', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(13, 5, 1, 170000.00, '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(14, 5, 2, 145000.00, '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(15, 5, 3, 45000.00, '1', 45000.00, '2019-08-09', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(16, 6, 1, 170000.00, '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(17, 6, 2, 145000.00, '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(18, 6, 3, 45000.00, '1', 45000.00, '2019-08-09', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(19, 7, 1, 170000.00, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(20, 7, 2, 145000.00, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(21, 7, 3, 45000.00, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(22, 8, 1, 170000.00, '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(23, 8, 2, 145000.00, '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(24, 8, 3, 45000.00, '1', 45000.00, '2019-08-09', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(25, 9, 1, 170000.00, '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(26, 9, 2, 145000.00, '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(27, 9, 3, 45000.00, '1', 45000.00, '2019-08-09', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(28, 10, 1, 170000.00, '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(29, 10, 2, 145000.00, '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(30, 10, 3, 45000.00, '1', 45000.00, '2019-08-09', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(31, 11, 1, 170000.00, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(32, 11, 2, 145000.00, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(33, 11, 3, 45000.00, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(34, 12, 1, 170000.00, '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(35, 12, 2, 145000.00, '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(36, 12, 3, 45000.00, '1', 45000.00, '2019-09-14', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(37, 13, 1, 170000.00, '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(38, 13, 2, 145000.00, '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(39, 13, 3, 45000.00, '1', 45000.00, '2019-08-09', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(40, 14, 1, 170000.00, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(41, 14, 2, 145000.00, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(42, 14, 3, 45000.00, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(43, 15, 1, 170000.00, '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(44, 15, 2, 145000.00, '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(45, 15, 3, 45000.00, '1', 45000.00, '2019-08-09', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(46, 16, 1, 170000.00, '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(47, 16, 2, 145000.00, '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(48, 16, 3, 45000.00, '1', 45000.00, '2019-08-09', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(49, 17, 1, 170000.00, '0', 170000.00, NULL, '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(50, 17, 2, 145000.00, '0', 145000.00, NULL, '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(51, 17, 3, 45000.00, '0', 45000.00, NULL, '1', 45000.00, '2019-08-09', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(52, 18, 1, 170000.00, '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(53, 18, 2, 145000.00, '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(54, 18, 3, 45000.00, '1', 45000.00, '2019-09-14', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(55, 19, 1, 170000.00, '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(56, 19, 2, 145000.00, '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(57, 19, 3, 45000.00, '1', 45000.00, '2019-09-14', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(58, 20, 1, 170000.00, '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(59, 20, 2, 145000.00, '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(60, 20, 3, 45000.00, '1', 45000.00, '2019-09-14', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(61, 21, 1, 170000.00, '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(62, 21, 2, 145000.00, '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(63, 21, 3, 45000.00, '1', 45000.00, '2019-09-14', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(64, 22, 1, 170000.00, '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(65, 22, 2, 145000.00, '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(66, 22, 3, 45000.00, '1', 45000.00, '2019-09-14', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(67, 23, 1, 170000.00, '1', 170000.00, '2019-08-15', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(68, 23, 2, 145000.00, '1', 145000.00, '2019-08-15', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(69, 23, 3, 45000.00, '1', 45000.00, '2019-08-15', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(70, 24, 1, 170000.00, '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(71, 24, 2, 145000.00, '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(72, 24, 3, 45000.00, '1', 45000.00, '2019-09-14', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(73, 32, 1, 170000.00, '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(74, 32, 2, 145000.00, '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(75, 32, 3, 45000.00, '1', 45000.00, '2019-08-09', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(76, 33, 1, 170000.00, '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(77, 33, 2, 145000.00, '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(78, 33, 3, 45000.00, '1', 45000.00, '2019-08-09', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(79, 34, 1, 170000.00, '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(80, 34, 2, 145000.00, '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(81, 34, 3, 45000.00, '1', 45000.00, '2019-09-14', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(82, 35, 1, 170000.00, '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(83, 35, 2, 145000.00, '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(84, 35, 3, 45000.00, '1', 45000.00, '2019-08-09', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(85, 36, 1, 170000.00, '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(86, 36, 2, 145000.00, '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(87, 36, 3, 45000.00, '1', 45000.00, '2019-09-14', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(88, 37, 1, 170000.00, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(89, 37, 2, 145000.00, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(90, 37, 3, 45000.00, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(91, 38, 1, 170000.00, '1', 170000.00, '2019-08-15', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(92, 38, 2, 145000.00, '1', 145000.00, '2019-08-15', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(93, 38, 3, 45000.00, '1', 45000.00, '2019-08-15', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(94, 39, 1, 170000.00, '1', 170000.00, '2019-09-14', '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(95, 39, 2, 145000.00, '1', 145000.00, '2019-09-14', '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(96, 39, 3, 45000.00, '1', 45000.00, '2019-09-14', '1', 45000.00, '2019-09-14', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(97, 40, 1, 170000.00, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(98, 40, 2, 145000.00, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(99, 40, 3, 45000.00, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(100, 41, 1, 170000.00, '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(101, 41, 2, 145000.00, '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(102, 41, 3, 45000.00, '1', 45000.00, '2019-09-14', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(103, 42, 1, 170000.00, '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(104, 42, 2, 145000.00, '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(105, 42, 3, 45000.00, '1', 45000.00, '2019-09-14', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(106, 43, 1, 170000.00, '1', 170000.00, '2019-08-15', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(107, 43, 2, 145000.00, '1', 145000.00, '2019-08-15', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(108, 43, 3, 45000.00, '1', 45000.00, '2019-08-15', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(109, 44, 1, 170000.00, '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(110, 44, 2, 145000.00, '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(111, 44, 3, 45000.00, '1', 45000.00, '2019-09-14', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(112, 45, 1, 170000.00, '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(113, 45, 2, 145000.00, '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(114, 45, 3, 45000.00, '1', 45000.00, '2019-09-14', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(115, 46, 1, 170000.00, '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(116, 46, 2, 145000.00, '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(117, 46, 3, 45000.00, '1', 45000.00, '2019-08-09', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(118, 47, 1, 170000.00, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(119, 47, 2, 145000.00, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(120, 47, 3, 45000.00, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(121, 48, 1, 170000.00, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(122, 48, 2, 145000.00, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(123, 48, 3, 45000.00, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(124, 49, 1, 170000.00, '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(125, 49, 2, 145000.00, '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(126, 49, 3, 45000.00, '1', 45000.00, '2019-08-09', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(127, 50, 1, 170000.00, '1', 170000.00, '2019-09-14', '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(128, 50, 2, 145000.00, '1', 145000.00, '2019-09-14', '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(129, 50, 3, 45000.00, '1', 45000.00, '2019-09-14', '1', 45000.00, '2019-09-14', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(130, 51, 1, 170000.00, '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(131, 51, 2, 145000.00, '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(132, 51, 3, 45000.00, '1', 45000.00, '2019-09-14', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(133, 52, 1, 170000.00, '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(134, 52, 2, 145000.00, '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(135, 52, 3, 45000.00, '1', 45000.00, '2019-08-09', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(136, 53, 1, 170000.00, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(137, 53, 2, 145000.00, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(138, 53, 3, 45000.00, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(139, 54, 1, 170000.00, '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(140, 54, 2, 145000.00, '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(141, 54, 3, 45000.00, '1', 45000.00, '2019-08-09', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(142, 55, 1, 170000.00, '1', 170000.00, '2019-08-15', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(143, 55, 2, 145000.00, '1', 145000.00, '2019-08-15', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(144, 55, 3, 45000.00, '1', 45000.00, '2019-08-15', '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL, '0', 45000.00, NULL),
(145, 63, 1, 170000.00, '1', 170000.00, '2019-07-31', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(146, 63, 2, 145000.00, '1', 145000.00, '2019-07-31', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(147, 63, 3, 25000.00, '1', 25000.00, '2019-07-31', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(148, 64, 1, 170000.00, '1', 170000.00, '2019-07-29', '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(149, 64, 2, 145000.00, '1', 145000.00, '2019-07-29', '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(150, 64, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(151, 65, 1, 170000.00, '1', 170000.00, '2019-07-29', '1', 170000.00, '2019-08-15', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(152, 65, 2, 145000.00, '1', 145000.00, '2019-07-29', '1', 145000.00, '2019-08-15', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(153, 65, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-15', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(154, 66, 1, 170000.00, '1', 170000.00, '2019-07-29', '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(155, 66, 2, 145000.00, '1', 145000.00, '2019-07-29', '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(156, 66, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(157, 67, 1, 170000.00, '1', 170000.00, '2019-07-29', '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(158, 67, 2, 145000.00, '1', 145000.00, '2019-07-29', '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(159, 67, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(160, 68, 1, 170000.00, '1', 170000.00, '2019-07-31', '1', 170000.00, '2019-08-15', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(161, 68, 2, 145000.00, '1', 145000.00, '2019-07-31', '1', 145000.00, '2019-08-15', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(162, 68, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-08-15', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(163, 69, 1, 170000.00, '1', 170000.00, '2019-08-09', '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(164, 69, 2, 145000.00, '1', 145000.00, '2019-08-09', '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(165, 69, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(166, 70, 1, 170000.00, '1', 170000.00, '2019-07-29', '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(167, 70, 2, 145000.00, '1', 145000.00, '2019-07-29', '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(168, 70, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(169, 71, 1, 170000.00, '1', 170000.00, '2019-08-09', '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(170, 71, 2, 145000.00, '1', 145000.00, '2019-08-09', '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL);
INSERT INTO `t103_daf_kelas_siswa_iuran` (`id`, `daf_kelas_siswa_id`, `iuran_id`, `Jumlah`, `byr01`, `jml01`, `tgl01`, `byr02`, `jml02`, `tgl02`, `byr03`, `jml03`, `tgl03`, `byr04`, `jml04`, `tgl04`, `byr05`, `jml05`, `tgl05`, `byr06`, `jml06`, `tgl06`, `byr07`, `jml07`, `tgl07`, `byr08`, `jml08`, `tgl08`, `byr09`, `jml09`, `tgl09`, `byr10`, `jml10`, `tgl10`, `byr11`, `jml11`, `tgl11`, `byr12`, `jml12`, `tgl12`) VALUES
(171, 71, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(172, 72, 1, 170000.00, '1', 170000.00, '2019-07-31', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(173, 72, 2, 145000.00, '1', 145000.00, '2019-07-31', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(174, 72, 3, 25000.00, '1', 25000.00, '2019-07-31', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(175, 73, 1, 170000.00, '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(176, 73, 2, 145000.00, '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(177, 73, 3, 25000.00, '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(178, 74, 1, 170000.00, '1', 170000.00, '2019-07-31', '1', 170000.00, '2019-08-15', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(179, 74, 2, 145000.00, '1', 145000.00, '2019-07-31', '1', 145000.00, '2019-08-15', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(180, 74, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-08-15', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(181, 75, 1, 170000.00, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(182, 75, 2, 145000.00, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(183, 75, 3, 25000.00, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(184, 76, 1, 170000.00, '1', 170000.00, '2019-07-29', '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(185, 76, 2, 145000.00, '1', 145000.00, '2019-07-29', '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(186, 76, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(187, 77, 1, 170000.00, '1', 170000.00, '2019-07-31', '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(188, 77, 2, 145000.00, '1', 145000.00, '2019-07-31', '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(189, 77, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(190, 78, 1, 170000.00, '1', 170000.00, '2019-07-31', '1', 170000.00, '2019-07-31', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(191, 78, 2, 145000.00, '1', 145000.00, '2019-07-31', '1', 145000.00, '2019-07-31', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(192, 78, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-07-31', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(193, 79, 1, 170000.00, '1', 170000.00, '2019-08-09', '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(194, 79, 2, 145000.00, '1', 145000.00, '2019-08-09', '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(195, 79, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(196, 80, 1, 170000.00, '1', 170000.00, '2019-07-29', '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(197, 80, 2, 145000.00, '1', 145000.00, '2019-07-29', '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(198, 80, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(199, 81, 1, 170000.00, '1', 170000.00, '2019-07-31', '1', 170000.00, '2019-08-15', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(200, 81, 2, 145000.00, '1', 145000.00, '2019-07-31', '1', 145000.00, '2019-08-15', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(201, 81, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-08-15', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(202, 82, 1, 170000.00, '1', 170000.00, '2019-08-09', '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(203, 82, 2, 145000.00, '1', 145000.00, '2019-08-09', '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(204, 82, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(205, 83, 1, 170000.00, '1', 170000.00, '2019-08-09', '1', 170000.00, '2019-09-14', '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(206, 83, 2, 145000.00, '1', 145000.00, '2019-08-09', '1', 145000.00, '2019-09-14', '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(207, 83, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-09-14', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(208, 84, 1, 170000.00, '1', 170000.00, '2019-07-29', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(209, 84, 2, 145000.00, '1', 145000.00, '2019-07-29', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(210, 84, 3, 25000.00, '1', 25000.00, '2019-07-29', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(211, 85, 1, 170000.00, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(212, 85, 2, 145000.00, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(213, 85, 3, 25000.00, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(214, 86, 1, 170000.00, '1', 170000.00, '2019-08-09', '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(215, 86, 2, 145000.00, '1', 145000.00, '2019-08-09', '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(216, 86, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(217, 94, 1, 170000.00, '1', 170000.00, '2019-07-31', '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(218, 94, 2, 145000.00, '1', 145000.00, '2019-07-31', '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(219, 94, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(220, 95, 1, 170000.00, '1', 170000.00, '2019-08-09', '1', 170000.00, '2019-08-15', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(221, 95, 2, 145000.00, '1', 145000.00, '2019-08-09', '1', 145000.00, '2019-08-15', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(222, 95, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-08-15', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(223, 96, 1, 170000.00, '1', 170000.00, '2019-07-29', '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(224, 96, 2, 145000.00, '1', 145000.00, '2019-07-29', '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(225, 96, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(226, 97, 1, 170000.00, '1', 170000.00, '2019-07-31', '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(227, 97, 2, 145000.00, '1', 145000.00, '2019-07-31', '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(228, 97, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(229, 98, 1, 170000.00, '1', 170000.00, '2019-08-09', '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(230, 98, 2, 145000.00, '1', 145000.00, '2019-08-09', '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(231, 98, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(232, 99, 1, 170000.00, '1', 170000.00, '2019-07-31', '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(233, 99, 2, 145000.00, '1', 145000.00, '2019-07-31', '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(234, 99, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(235, 100, 1, 170000.00, '1', 170000.00, '2019-07-31', '1', 170000.00, '2019-08-09', '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(236, 100, 2, 145000.00, '1', 145000.00, '2019-07-31', '1', 145000.00, '2019-08-09', '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(237, 100, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(238, 101, 1, 170000.00, '1', 170000.00, '2019-07-31', '1', 170000.00, '2019-07-31', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(239, 101, 2, 145000.00, '1', 145000.00, '2019-07-31', '1', 145000.00, '2019-07-31', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(240, 101, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-07-31', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(241, 102, 1, 170000.00, '1', 170000.00, '2019-07-29', '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(242, 102, 2, 145000.00, '1', 145000.00, '2019-07-29', '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(243, 102, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(244, 103, 1, 170000.00, '1', 170000.00, '2019-08-15', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(245, 103, 2, 145000.00, '1', 145000.00, '2019-08-15', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(246, 103, 3, 25000.00, '1', 25000.00, '2019-08-15', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(247, 104, 1, 170000.00, '1', 170000.00, '2019-07-31', '1', 170000.00, '2019-08-15', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(248, 104, 2, 145000.00, '1', 145000.00, '2019-07-31', '1', 145000.00, '2019-08-15', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(249, 104, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-08-15', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(250, 105, 1, 170000.00, '1', 170000.00, '2019-08-09', '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(251, 105, 2, 145000.00, '1', 145000.00, '2019-08-09', '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(252, 105, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(253, 106, 1, 170000.00, '1', 170000.00, '2019-08-01', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(254, 106, 2, 145000.00, '1', 145000.00, '2019-08-01', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(255, 106, 3, 25000.00, '1', 25000.00, '2019-08-01', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(256, 107, 1, 170000.00, '1', 170000.00, '2019-07-31', '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(257, 107, 2, 145000.00, '1', 145000.00, '2019-07-31', '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(258, 107, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(259, 108, 1, 170000.00, '1', 170000.00, '2019-09-14', '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(260, 108, 2, 145000.00, '1', 145000.00, '2019-09-14', '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(261, 108, 3, 25000.00, '1', 25000.00, '2019-09-14', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(262, 109, 1, 170000.00, '1', 170000.00, '2019-07-29', '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(263, 109, 2, 145000.00, '1', 145000.00, '2019-07-29', '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(264, 109, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(265, 110, 1, 170000.00, '1', 170000.00, '2019-09-14', '1', 170000.00, '2019-09-14', '1', 170000.00, '2019-09-14', '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(266, 110, 2, 145000.00, '1', 145000.00, '2019-09-14', '1', 145000.00, '2019-09-14', '1', 145000.00, '2019-09-14', '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(267, 110, 3, 25000.00, '1', 25000.00, '2019-09-14', '1', 25000.00, '2019-09-14', '1', 25000.00, '2019-09-14', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(268, 111, 1, 170000.00, '1', 170000.00, '2019-07-29', '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(269, 111, 2, 145000.00, '1', 145000.00, '2019-07-29', '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(270, 111, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(271, 112, 1, 170000.00, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(272, 112, 2, 145000.00, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(273, 112, 3, 25000.00, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(274, 113, 1, 170000.00, '1', 170000.00, '2019-07-29', '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(275, 113, 2, 145000.00, '1', 145000.00, '2019-07-29', '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(276, 113, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(277, 114, 1, 170000.00, '1', 170000.00, '2019-07-31', '1', 170000.00, '2019-07-31', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(278, 114, 2, 145000.00, '1', 145000.00, '2019-07-31', '1', 145000.00, '2019-07-31', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(279, 114, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-07-31', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(280, 115, 1, 170000.00, '1', 170000.00, '2019-07-29', '1', 170000.00, '2019-08-09', '1', 170000.00, '2019-09-14', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(281, 115, 2, 145000.00, '1', 145000.00, '2019-07-29', '1', 145000.00, '2019-08-09', '1', 145000.00, '2019-09-14', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(282, 115, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(283, 116, 1, 170000.00, '1', 170000.00, '2019-08-09', '1', 170000.00, '2019-08-09', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(284, 116, 2, 145000.00, '1', 145000.00, '2019-08-09', '1', 145000.00, '2019-08-09', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(285, 116, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(286, 117, 1, 170000.00, '1', 170000.00, '2019-07-29', '1', 170000.00, '2019-08-15', '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL, '0', 170000.00, NULL),
(287, 117, 2, 145000.00, '1', 145000.00, '2019-07-29', '1', 145000.00, '2019-08-15', '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL, '0', 145000.00, NULL),
(288, 117, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-15', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(289, 125, 1, 172000.00, '1', 172000.00, '2019-08-09', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(290, 125, 2, 165000.00, '1', 165000.00, '2019-08-09', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(291, 125, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(292, 126, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-08-09', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(293, 126, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-08-09', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(294, 126, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(295, 127, 1, 172000.00, '1', 172000.00, '2019-07-31', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(296, 127, 2, 165000.00, '1', 165000.00, '2019-07-31', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(297, 127, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(298, 128, 1, 172000.00, '1', 172000.00, '2019-07-31', '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(299, 128, 2, 165000.00, '1', 165000.00, '2019-07-31', '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(300, 128, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(301, 129, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(302, 129, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(303, 129, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(304, 130, 1, 172000.00, '1', 172000.00, '2019-08-09', '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(305, 130, 2, 165000.00, '1', 165000.00, '2019-08-09', '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(306, 130, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(307, 131, 1, 172000.00, '1', 172000.00, '2019-07-31', '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(308, 131, 2, 165000.00, '1', 165000.00, '2019-07-31', '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(309, 131, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(310, 132, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(311, 132, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(312, 132, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(313, 133, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-08-15', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(314, 133, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-08-15', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(315, 133, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-15', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(316, 134, 1, 172000.00, '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(317, 134, 2, 165000.00, '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(318, 134, 3, 25000.00, '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(319, 135, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-09-25', '1', 172000.00, '2019-09-25', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(320, 135, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-09-25', '1', 165000.00, '2019-09-25', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(321, 135, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-09-25', '1', 25000.00, '2019-09-25', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(322, 136, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-07-29', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(323, 136, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-07-29', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(324, 136, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-07-29', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(325, 137, 1, 172000.00, '1', 172000.00, '2019-08-09', '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(326, 137, 2, 165000.00, '1', 165000.00, '2019-08-09', '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(327, 137, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(328, 138, 1, 172000.00, '1', 172000.00, '2019-09-25', '1', 172000.00, '2019-09-25', '1', 172000.00, '2019-09-25', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(329, 138, 2, 165000.00, '1', 165000.00, '2019-09-25', '1', 165000.00, '2019-09-25', '1', 165000.00, '2019-09-25', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(330, 138, 3, 25000.00, '1', 25000.00, '2019-09-25', '1', 25000.00, '2019-09-25', '1', 25000.00, '2019-09-25', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(331, 139, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-08-15', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(332, 139, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-08-15', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(333, 139, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-15', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(334, 140, 1, 172000.00, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(335, 140, 2, 165000.00, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(336, 140, 3, 25000.00, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL);
INSERT INTO `t103_daf_kelas_siswa_iuran` (`id`, `daf_kelas_siswa_id`, `iuran_id`, `Jumlah`, `byr01`, `jml01`, `tgl01`, `byr02`, `jml02`, `tgl02`, `byr03`, `jml03`, `tgl03`, `byr04`, `jml04`, `tgl04`, `byr05`, `jml05`, `tgl05`, `byr06`, `jml06`, `tgl06`, `byr07`, `jml07`, `tgl07`, `byr08`, `jml08`, `tgl08`, `byr09`, `jml09`, `tgl09`, `byr10`, `jml10`, `tgl10`, `byr11`, `jml11`, `tgl11`, `byr12`, `jml12`, `tgl12`) VALUES
(337, 141, 1, 172000.00, '1', 172000.00, '2019-08-09', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(338, 141, 2, 165000.00, '1', 165000.00, '2019-08-09', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(339, 141, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(340, 142, 1, 172000.00, '1', 172000.00, '2019-08-09', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(341, 142, 2, 165000.00, '1', 165000.00, '2019-08-09', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(342, 142, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(343, 143, 1, 172000.00, '1', 172000.00, '2019-07-31', '1', 172000.00, '2019-09-14', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(344, 143, 2, 165000.00, '1', 165000.00, '2019-07-31', '1', 165000.00, '2019-09-14', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(345, 143, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-09-14', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(346, 144, 1, 172000.00, '1', 172000.00, '2019-07-31', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(347, 144, 2, 165000.00, '1', 165000.00, '2019-07-31', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(348, 144, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(349, 145, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(350, 145, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(351, 145, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(352, 146, 1, 172000.00, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(353, 146, 2, 165000.00, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(354, 146, 3, 25000.00, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(355, 147, 1, 172000.00, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(356, 147, 2, 165000.00, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(357, 147, 3, 25000.00, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(358, 148, 1, 172000.00, '1', 172000.00, '2019-07-31', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(359, 148, 2, 165000.00, '1', 165000.00, '2019-07-31', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(360, 148, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(361, 156, 1, 172000.00, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(362, 156, 2, 165000.00, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(363, 156, 3, 25000.00, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(364, 157, 1, 172000.00, '1', 172000.00, '2019-07-31', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(365, 157, 2, 165000.00, '1', 165000.00, '2019-07-31', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(366, 157, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(367, 158, 1, 172000.00, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(368, 158, 2, 165000.00, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(369, 158, 3, 25000.00, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(370, 159, 1, 172000.00, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(371, 159, 2, 165000.00, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(372, 159, 3, 25000.00, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(373, 160, 1, 172000.00, '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(374, 160, 2, 165000.00, '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(375, 160, 3, 25000.00, '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(376, 161, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(377, 161, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(378, 161, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(379, 162, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-08-15', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(380, 162, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-08-15', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(381, 162, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-15', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(382, 163, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(383, 163, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(384, 163, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(385, 164, 1, 172000.00, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(386, 164, 2, 165000.00, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(387, 164, 3, 25000.00, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(388, 165, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-08-15', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(389, 165, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-08-15', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(390, 165, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-15', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(391, 166, 1, 172000.00, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(392, 166, 2, 165000.00, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(393, 166, 3, 25000.00, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(394, 167, 1, 172000.00, '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(395, 167, 2, 165000.00, '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(396, 167, 3, 25000.00, '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(397, 168, 1, 172000.00, '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(398, 168, 2, 165000.00, '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(399, 168, 3, 25000.00, '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(400, 169, 1, 172000.00, '1', 172000.00, '2019-08-09', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(401, 169, 2, 165000.00, '1', 165000.00, '2019-08-09', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(402, 169, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(403, 170, 1, 172000.00, '1', 172000.00, '2019-08-09', '1', 172000.00, '2019-08-09', '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(404, 170, 2, 165000.00, '1', 165000.00, '2019-08-09', '1', 165000.00, '2019-08-09', '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(405, 170, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(406, 171, 1, 172000.00, '1', 172000.00, '2019-09-14', '1', 172000.00, '2019-09-14', '1', 172000.00, '2019-09-14', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(407, 171, 2, 165000.00, '1', 165000.00, '2019-09-14', '1', 165000.00, '2019-09-14', '1', 165000.00, '2019-09-14', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(408, 171, 3, 25000.00, '1', 25000.00, '2019-09-14', '1', 25000.00, '2019-09-14', '1', 25000.00, '2019-09-14', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(409, 172, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-08-15', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(410, 172, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-08-15', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(411, 172, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-15', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(412, 173, 1, 172000.00, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(413, 173, 2, 165000.00, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(414, 173, 3, 25000.00, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(415, 174, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(416, 174, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(417, 174, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(418, 175, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(419, 175, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(420, 175, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(421, 176, 1, 172000.00, '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(422, 176, 2, 165000.00, '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(423, 176, 3, 25000.00, '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(424, 177, 1, 172000.00, '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(425, 177, 2, 165000.00, '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(426, 177, 3, 25000.00, '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(427, 178, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(428, 178, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(429, 178, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(430, 187, 1, 172000.00, '1', 172000.00, '2019-08-09', '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(431, 187, 2, 165000.00, '1', 165000.00, '2019-08-09', '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(432, 187, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(433, 188, 1, 172000.00, '1', 172000.00, '2019-08-01', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(434, 188, 2, 165000.00, '1', 165000.00, '2019-08-01', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(435, 188, 3, 25000.00, '1', 25000.00, '2019-08-01', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(436, 189, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(437, 189, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(438, 189, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(439, 190, 1, 172000.00, '1', 172000.00, '2019-08-09', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(440, 190, 2, 165000.00, '1', 165000.00, '2019-08-09', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(441, 190, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(442, 191, 1, 172000.00, '1', 172000.00, '2019-08-15', '1', 172000.00, '2019-09-14', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(443, 191, 2, 165000.00, '1', 165000.00, '2019-08-15', '1', 165000.00, '2019-09-14', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(444, 191, 3, 25000.00, '1', 25000.00, '2019-08-15', '1', 25000.00, '2019-09-14', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(445, 192, 1, 172000.00, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(446, 192, 2, 165000.00, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(447, 192, 3, 25000.00, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(448, 193, 1, 172000.00, '1', 172000.00, '2019-08-01', '1', 172000.00, '2019-08-01', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(449, 193, 2, 165000.00, '1', 165000.00, '2019-08-01', '1', 165000.00, '2019-08-01', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(450, 193, 3, 25000.00, '1', 25000.00, '2019-08-01', '1', 25000.00, '2019-08-01', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(451, 194, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(452, 194, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(453, 194, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(454, 195, 1, 172000.00, '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(455, 195, 2, 165000.00, '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(456, 195, 3, 25000.00, '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(457, 196, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-07-31', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(458, 196, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-07-31', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(459, 196, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(460, 197, 1, 172000.00, '1', 172000.00, '2019-08-09', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(461, 197, 2, 165000.00, '1', 165000.00, '2019-08-09', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(462, 197, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(463, 198, 1, 172000.00, '1', 172000.00, '2019-09-14', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(464, 198, 2, 165000.00, '1', 165000.00, '2019-09-14', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(465, 198, 3, 25000.00, '1', 25000.00, '2019-09-14', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(466, 199, 1, 172000.00, '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(467, 199, 2, 165000.00, '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(468, 199, 3, 25000.00, '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(469, 200, 1, 172000.00, '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(470, 200, 2, 165000.00, '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(471, 200, 3, 25000.00, '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(472, 201, 1, 172000.00, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(473, 201, 2, 165000.00, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(474, 201, 3, 25000.00, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(475, 202, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-09-14', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(476, 202, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-09-14', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(477, 202, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-09-14', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(478, 203, 1, 172000.00, '1', 172000.00, '2019-07-31', '1', 172000.00, '2019-08-15', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(479, 203, 2, 165000.00, '1', 165000.00, '2019-07-31', '1', 165000.00, '2019-08-15', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(480, 203, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-08-15', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(481, 204, 1, 172000.00, '1', 172000.00, '2019-09-25', '1', 172000.00, '2019-09-25', '1', 172000.00, '2019-09-25', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(482, 204, 2, 165000.00, '1', 165000.00, '2019-09-25', '1', 165000.00, '2019-09-25', '1', 165000.00, '2019-09-25', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(483, 204, 3, 25000.00, '1', 25000.00, '2019-09-25', '1', 25000.00, '2019-09-25', '1', 25000.00, '2019-09-25', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(484, 205, 1, 172000.00, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(485, 205, 2, 165000.00, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(486, 205, 3, 25000.00, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(487, 206, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(488, 206, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(489, 206, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(490, 207, 1, 172000.00, '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(491, 207, 2, 165000.00, '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(492, 207, 3, 25000.00, '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(493, 208, 1, 172000.00, '1', 172000.00, '2019-08-09', '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(494, 208, 2, 165000.00, '1', 165000.00, '2019-08-09', '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(495, 208, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(496, 209, 1, 172000.00, '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(497, 209, 2, 165000.00, '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(498, 209, 3, 25000.00, '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(499, 218, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-08-01', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(500, 218, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-08-01', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(501, 218, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-01', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(502, 219, 1, 172000.00, '1', 172000.00, '2019-08-01', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(503, 219, 2, 165000.00, '1', 165000.00, '2019-08-01', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL);
INSERT INTO `t103_daf_kelas_siswa_iuran` (`id`, `daf_kelas_siswa_id`, `iuran_id`, `Jumlah`, `byr01`, `jml01`, `tgl01`, `byr02`, `jml02`, `tgl02`, `byr03`, `jml03`, `tgl03`, `byr04`, `jml04`, `tgl04`, `byr05`, `jml05`, `tgl05`, `byr06`, `jml06`, `tgl06`, `byr07`, `jml07`, `tgl07`, `byr08`, `jml08`, `tgl08`, `byr09`, `jml09`, `tgl09`, `byr10`, `jml10`, `tgl10`, `byr11`, `jml11`, `tgl11`, `byr12`, `jml12`, `tgl12`) VALUES
(504, 219, 3, 25000.00, '1', 25000.00, '2019-08-01', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(505, 220, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-09-14', '1', 172000.00, '2019-09-14', '1', 172000.00, '2019-09-14', '1', 172000.00, '2019-09-14', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(506, 220, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-09-14', '1', 165000.00, '2019-09-14', '1', 165000.00, '2019-09-14', '1', 165000.00, '2019-09-14', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(507, 220, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-09-14', '1', 25000.00, '2019-09-14', '1', 25000.00, '2019-09-14', '1', 25000.00, '2019-09-14', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(508, 221, 1, 172000.00, '1', 172000.00, '2019-07-31', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(509, 221, 2, 165000.00, '1', 165000.00, '2019-07-31', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(510, 221, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(511, 222, 1, 172000.00, '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(512, 222, 2, 165000.00, '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(513, 222, 3, 25000.00, '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(514, 223, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(515, 223, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(516, 223, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(517, 224, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-09-25', '1', 172000.00, '2019-09-25', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(518, 224, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-09-25', '1', 165000.00, '2019-09-25', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(519, 224, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-09-25', '1', 25000.00, '2019-09-25', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(520, 225, 1, 172000.00, '1', 172000.00, '2019-07-31', '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(521, 225, 2, 165000.00, '1', 165000.00, '2019-07-31', '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(522, 225, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(523, 226, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-08-09', '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(524, 226, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-08-09', '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(525, 226, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(526, 227, 1, 172000.00, '1', 172000.00, '2019-07-29', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(527, 227, 2, 165000.00, '1', 165000.00, '2019-07-29', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(528, 227, 3, 25000.00, '1', 25000.00, '2019-07-29', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(529, 228, 1, 172000.00, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(530, 228, 2, 165000.00, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(531, 228, 3, 25000.00, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(532, 229, 1, 172000.00, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(533, 229, 2, 165000.00, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(534, 229, 3, 25000.00, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(535, 230, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(536, 230, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(537, 230, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(538, 231, 1, 172000.00, '1', 172000.00, '2019-08-09', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(539, 231, 2, 165000.00, '1', 165000.00, '2019-08-09', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(540, 231, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(541, 232, 1, 172000.00, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(542, 232, 2, 165000.00, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(543, 232, 3, 25000.00, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(544, 233, 1, 172000.00, '1', 172000.00, '2019-08-09', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(545, 233, 2, 165000.00, '1', 165000.00, '2019-08-09', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(546, 233, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(547, 234, 1, 172000.00, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(548, 234, 2, 165000.00, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(549, 234, 3, 25000.00, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(550, 235, 1, 172000.00, '1', 172000.00, '2019-07-31', '1', 172000.00, '2019-07-31', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(551, 235, 2, 165000.00, '1', 165000.00, '2019-07-31', '1', 165000.00, '2019-07-31', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(552, 235, 3, 25000.00, '1', 25000.00, '2019-07-31', '1', 25000.00, '2019-07-31', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(553, 236, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(554, 236, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(555, 236, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(556, 237, 1, 172000.00, '1', 172000.00, '2019-08-09', '1', 172000.00, '2019-09-14', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(557, 237, 2, 165000.00, '1', 165000.00, '2019-08-09', '1', 165000.00, '2019-09-14', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(558, 237, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-09-14', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(559, 238, 1, 172000.00, '1', 172000.00, '2019-08-09', '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(560, 238, 2, 165000.00, '1', 165000.00, '2019-08-09', '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(561, 238, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(562, 239, 1, 172000.00, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(563, 239, 2, 165000.00, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(564, 239, 3, 25000.00, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(565, 240, 1, 172000.00, '1', 172000.00, '2019-08-09', '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(566, 240, 2, 165000.00, '1', 165000.00, '2019-08-09', '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(567, 240, 3, 25000.00, '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(568, 241, 1, 172000.00, '1', 172000.00, '2019-07-29', '1', 172000.00, '2019-08-09', '1', 172000.00, '2019-08-09', '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL, '0', 172000.00, NULL),
(569, 241, 2, 165000.00, '1', 165000.00, '2019-07-29', '1', 165000.00, '2019-08-09', '1', 165000.00, '2019-08-09', '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL, '0', 165000.00, NULL),
(570, 241, 3, 25000.00, '1', 25000.00, '2019-07-29', '1', 25000.00, '2019-08-09', '1', 25000.00, '2019-08-09', '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL, '0', 25000.00, NULL),
(571, 242, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-07-25', '1', 135000.00, '2019-08-05', '1', 135000.00, '2019-09-03', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(572, 242, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-03', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(573, 242, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-03', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(574, 243, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-14', '1', 135000.00, '2019-09-17', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(575, 243, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-14', '1', 75000.00, '2019-09-17', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(576, 243, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-14', '1', 0.00, '2019-09-17', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(577, 244, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-08', '1', 135000.00, '2019-09-05', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(578, 244, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-08', '1', 75000.00, '2019-09-05', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(579, 244, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-08', '1', 0.00, '2019-09-05', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(580, 245, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-03', '1', 135000.00, '2019-09-09', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(581, 245, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-09-09', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(582, 245, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-03', '1', 0.00, '2019-09-09', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(583, 246, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-06', '1', 135000.00, '2019-09-05', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(584, 246, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-09-05', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(585, 246, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-06', '1', 0.00, '2019-09-05', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(586, 247, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-09', '1', 135000.00, '2019-09-07', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(587, 247, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-09', '1', 75000.00, '2019-09-07', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(588, 247, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-09', '1', 0.00, '2019-09-07', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(589, 248, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-09-13', '1', 135000.00, '2019-09-13', '1', 135000.00, '2019-09-13', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(590, 248, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-09-13', '1', 75000.00, '2019-09-13', '1', 75000.00, '2019-09-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(591, 248, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-09-13', '1', 0.00, '2019-09-13', '1', 0.00, '2019-09-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(592, 249, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-09', '1', 135000.00, '2019-09-16', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(593, 249, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-09', '1', 75000.00, '2019-09-16', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(594, 249, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-09', '1', 0.00, '2019-09-16', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(595, 250, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-05', '1', 135000.00, '2019-09-11', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(596, 250, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-11', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(597, 250, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-11', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(598, 251, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-22', '1', 135000.00, '2019-09-10', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(599, 251, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-22', '1', 75000.00, '2019-09-10', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(600, 251, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-22', '1', 0.00, '2019-09-10', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(601, 252, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-06', '1', 135000.00, '2019-09-05', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(602, 252, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-09-05', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(603, 252, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-06', '1', 0.00, '2019-09-05', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(604, 253, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-07', '1', 135000.00, '2019-09-17', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(605, 253, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-07', '1', 75000.00, '2019-09-17', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(606, 253, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-07', '1', 0.00, '2019-09-17', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(607, 254, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-19', '1', 135000.00, '2019-09-09', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(608, 254, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-19', '1', 75000.00, '2019-09-09', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(609, 254, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-19', '1', 0.00, '2019-09-09', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(610, 255, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-13', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(611, 255, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(612, 255, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(613, 256, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-26', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(614, 256, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-26', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(615, 256, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-26', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(616, 257, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-07', '1', 135000.00, '2019-09-02', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(617, 257, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-07', '1', 75000.00, '2019-09-02', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(618, 257, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-07', '1', 0.00, '2019-09-02', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(619, 258, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-09', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(620, 258, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-09', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(621, 258, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-09', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(622, 259, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-09', '1', 135000.00, '2019-09-04', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(623, 259, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-09', '1', 75000.00, '2019-09-04', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(624, 259, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-09', '1', 0.00, '2019-09-04', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(625, 260, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-26', '1', 135000.00, '2019-09-19', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(626, 260, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-26', '1', 75000.00, '2019-09-19', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(627, 260, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-26', '1', 0.00, '2019-09-19', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(628, 261, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-09', '1', 135000.00, '2019-09-06', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(629, 261, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-09', '1', 75000.00, '2019-09-06', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(630, 261, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-09', '1', 0.00, '2019-09-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(631, 262, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-13', '1', 135000.00, '2019-09-13', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(632, 262, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-13', '1', 75000.00, '2019-09-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(633, 262, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-13', '1', 0.00, '2019-09-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(634, 263, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-26', '1', 135000.00, '2019-08-26', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(635, 263, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-26', '1', 75000.00, '2019-08-26', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(636, 263, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-26', '1', 0.00, '2019-08-26', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(637, 264, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-21', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(638, 264, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-21', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(639, 264, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-21', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(640, 265, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-02', '1', 135000.00, '2019-09-02', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(641, 265, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-02', '1', 75000.00, '2019-09-02', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(642, 265, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-02', '1', 0.00, '2019-09-02', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(643, 266, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-06', '1', 135000.00, '2019-09-07', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(644, 266, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-09-07', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(645, 266, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-06', '1', 0.00, '2019-09-07', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(646, 267, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-26', '1', 135000.00, '2019-08-26', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(647, 267, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-26', '1', 75000.00, '2019-08-26', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(648, 267, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-26', '1', 0.00, '2019-08-26', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(649, 268, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-22', '1', 135000.00, '2019-09-20', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(650, 268, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-22', '1', 75000.00, '2019-09-20', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(651, 268, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-22', '1', 0.00, '2019-09-20', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(652, 304, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-08', '1', 135000.00, '2019-09-03', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(653, 304, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-08', '1', 75000.00, '2019-09-03', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(654, 304, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-08', '1', 0.00, '2019-09-03', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(655, 305, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-07', '1', 135000.00, '2019-09-03', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(656, 305, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-07', '1', 75000.00, '2019-09-03', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(657, 305, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-07', '1', 0.00, '2019-09-03', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(658, 306, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-24', '1', 135000.00, '2019-09-16', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(659, 306, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-24', '1', 75000.00, '2019-09-16', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(660, 306, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-24', '1', 0.00, '2019-09-16', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(661, 307, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-05', '1', 135000.00, '2019-09-10', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(662, 307, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-10', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(663, 307, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-10', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(664, 308, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-30', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(665, 308, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-30', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(666, 308, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-30', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(667, 309, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-06', '1', 135000.00, '2019-09-13', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(668, 309, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-09-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(669, 309, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-06', '1', 0.00, '2019-09-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(670, 310, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-12', '1', 135000.00, '2019-09-11', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(671, 310, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-12', '1', 75000.00, '2019-09-11', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(672, 310, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-12', '1', 0.00, '2019-09-11', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(673, 311, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-05', '1', 135000.00, '2019-09-10', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(674, 311, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-10', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(675, 311, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-10', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(676, 312, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-09-04', '1', 135000.00, '2019-09-04', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL);
INSERT INTO `t103_daf_kelas_siswa_iuran` (`id`, `daf_kelas_siswa_id`, `iuran_id`, `Jumlah`, `byr01`, `jml01`, `tgl01`, `byr02`, `jml02`, `tgl02`, `byr03`, `jml03`, `tgl03`, `byr04`, `jml04`, `tgl04`, `byr05`, `jml05`, `tgl05`, `byr06`, `jml06`, `tgl06`, `byr07`, `jml07`, `tgl07`, `byr08`, `jml08`, `tgl08`, `byr09`, `jml09`, `tgl09`, `byr10`, `jml10`, `tgl10`, `byr11`, `jml11`, `tgl11`, `byr12`, `jml12`, `tgl12`) VALUES
(677, 312, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-09-04', '1', 75000.00, '2019-09-04', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(678, 312, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-09-04', '1', 0.00, '2019-09-04', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(679, 313, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-19', '1', 135000.00, '2019-09-06', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(680, 313, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-19', '1', 75000.00, '2019-09-06', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(681, 313, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-19', '1', 0.00, '2019-09-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(682, 314, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-08', '1', 135000.00, '2019-09-05', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(683, 314, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-08', '1', 75000.00, '2019-09-05', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(684, 314, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-08', '1', 0.00, '2019-09-05', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(685, 315, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-06', '1', 135000.00, '2019-09-11', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(686, 315, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-09-11', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(687, 315, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-06', '1', 0.00, '2019-09-11', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(688, 316, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-30', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(689, 316, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-30', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(690, 316, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-30', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(691, 317, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-03', '1', 135000.00, '2019-09-05', '1', 135000.00, '2019-09-11', '1', 135000.00, '2019-09-11', '1', 135000.00, '2019-09-11', '1', 135000.00, '2019-09-11', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(692, 317, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-09-05', '1', 75000.00, '2019-09-11', '1', 75000.00, '2019-09-11', '1', 75000.00, '2019-09-11', '1', 75000.00, '2019-09-11', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(693, 317, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-03', '1', 0.00, '2019-09-05', '1', 0.00, '2019-09-11', '1', 0.00, '2019-09-11', '1', 0.00, '2019-09-11', '1', 0.00, '2019-09-11', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(694, 318, 1, 135000.00, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(695, 318, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(696, 318, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(697, 319, 1, 135000.00, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(698, 319, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(699, 319, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(700, 320, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-13', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(701, 320, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(702, 320, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(703, 321, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-10', '1', 135000.00, '2019-09-13', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(704, 321, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-10', '1', 75000.00, '2019-09-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(705, 321, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-10', '1', 0.00, '2019-09-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(706, 322, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-06', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(707, 322, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-06', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(708, 322, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(709, 323, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-05', '1', 135000.00, '2019-09-13', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(710, 323, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(711, 323, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(712, 324, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-07', '1', 135000.00, '2019-09-04', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(713, 324, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-07', '1', 75000.00, '2019-09-04', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(714, 324, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-07', '1', 0.00, '2019-09-04', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(715, 325, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-05', '1', 135000.00, '2019-09-10', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(716, 325, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-10', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(717, 325, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-10', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(718, 326, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-06', '1', 135000.00, '2019-09-07', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(719, 326, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-09-07', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(720, 326, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-06', '1', 0.00, '2019-09-07', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(721, 327, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-05', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(722, 327, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-05', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(723, 327, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-05', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(724, 328, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-28', '1', 135000.00, '2019-09-23', '1', 135000.00, '2019-09-23', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(725, 328, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-28', '1', 75000.00, '2019-09-23', '1', 75000.00, '2019-09-23', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(726, 328, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-28', '1', 0.00, '2019-09-23', '1', 0.00, '2019-09-23', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(727, 329, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-05', '1', 135000.00, '2019-09-07', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(728, 329, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-07', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(729, 329, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-07', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(730, 330, 1, 135000.00, '0', 135000.00, NULL, '1', 135000.00, '2019-08-29', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(731, 330, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-29', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(732, 330, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-29', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(733, 335, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-06', '1', 125000.00, '2019-09-05', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(734, 335, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-09-05', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(735, 335, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-06', '1', 0.00, '2019-09-05', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(736, 336, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-05', '1', 125000.00, '2019-09-10', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(737, 336, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-10', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(738, 336, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-10', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(739, 337, 1, 125000.00, '1', 125000.00, '2019-09-07', '1', 125000.00, '2019-09-07', '1', 125000.00, '2019-09-07', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(740, 337, 2, 75000.00, '1', 75000.00, '2019-09-07', '1', 75000.00, '2019-09-07', '1', 75000.00, '2019-09-07', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(741, 337, 3, 0.00, '1', 0.00, '2019-09-07', '1', 0.00, '2019-09-07', '1', 0.00, '2019-09-07', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(742, 338, 1, 125000.00, '1', 125000.00, '2019-07-26', '1', 125000.00, '2019-08-24', '1', 125000.00, '2019-09-26', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(743, 338, 2, 75000.00, '1', 75000.00, '2019-07-26', '1', 75000.00, '2019-08-24', '1', 75000.00, '2019-09-26', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(744, 338, 3, 0.00, '1', 0.00, '2019-07-26', '1', 0.00, '2019-08-24', '1', 0.00, '2019-09-26', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(745, 339, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-07', '1', 125000.00, '2019-09-13', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(746, 339, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-07', '1', 75000.00, '2019-09-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(747, 339, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-07', '1', 0.00, '2019-09-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(748, 340, 1, 125000.00, '1', 125000.00, '2019-09-16', '1', 125000.00, '2019-09-16', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(749, 340, 2, 75000.00, '1', 75000.00, '2019-09-16', '1', 75000.00, '2019-09-16', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(750, 340, 3, 0.00, '1', 0.00, '2019-09-16', '1', 0.00, '2019-09-16', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(751, 341, 1, 125000.00, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(752, 341, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(753, 341, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(754, 342, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-06', '1', 125000.00, '2019-09-07', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(755, 342, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-09-07', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(756, 342, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-06', '1', 0.00, '2019-09-07', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(757, 343, 1, 125000.00, '1', 125000.00, '2019-08-19', '1', 125000.00, '2019-08-19', '1', 125000.00, '2019-09-18', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(758, 343, 2, 75000.00, '1', 75000.00, '2019-08-19', '1', 75000.00, '2019-08-19', '1', 75000.00, '2019-09-18', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(759, 343, 3, 0.00, '1', 0.00, '2019-08-19', '1', 0.00, '2019-08-19', '1', 0.00, '2019-09-18', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(760, 344, 1, 125000.00, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(761, 344, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(762, 344, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(763, 345, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-09', '1', 125000.00, '2019-09-10', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(764, 345, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-09', '1', 75000.00, '2019-09-10', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(765, 345, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-09', '1', 0.00, '2019-09-10', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(766, 346, 1, 125000.00, '1', 125000.00, '2019-07-31', '1', 125000.00, '2019-09-02', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(767, 346, 2, 75000.00, '1', 75000.00, '2019-07-31', '1', 75000.00, '2019-09-02', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(768, 346, 3, 0.00, '1', 0.00, '2019-07-31', '1', 0.00, '2019-09-02', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(769, 347, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-03', '1', 125000.00, '2019-09-07', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(770, 347, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-09-07', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(771, 347, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-03', '1', 0.00, '2019-09-07', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(772, 348, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-06', '1', 125000.00, '2019-09-02', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(773, 348, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-09-02', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(774, 348, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-06', '1', 0.00, '2019-09-02', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(775, 349, 1, 125000.00, '1', 125000.00, '2019-07-30', '1', 125000.00, '2019-07-30', '1', 125000.00, '2019-09-06', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(776, 349, 2, 75000.00, '1', 75000.00, '2019-07-30', '1', 75000.00, '2019-07-30', '1', 75000.00, '2019-09-06', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(777, 349, 3, 0.00, '1', 0.00, '2019-07-30', '1', 0.00, '2019-07-30', '1', 0.00, '2019-09-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(778, 350, 1, 125000.00, '1', 125000.00, '2019-08-03', '1', 125000.00, '2019-08-03', '1', 125000.00, '2019-09-19', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(779, 350, 2, 75000.00, '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-09-19', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(780, 350, 3, 0.00, '1', 0.00, '2019-08-03', '1', 0.00, '2019-08-03', '1', 0.00, '2019-09-19', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(781, 351, 1, 125000.00, '1', 125000.00, '2019-08-26', '1', 125000.00, '2019-08-26', '1', 125000.00, '2019-08-26', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(782, 351, 2, 75000.00, '1', 75000.00, '2019-08-26', '1', 75000.00, '2019-08-26', '1', 75000.00, '2019-08-26', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(783, 351, 3, 0.00, '1', 0.00, '2019-08-26', '1', 0.00, '2019-08-26', '1', 0.00, '2019-08-26', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(784, 352, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-06', '1', 125000.00, '2019-09-07', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(785, 352, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-09-07', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(786, 352, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-06', '1', 0.00, '2019-09-07', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(787, 353, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-05', '1', 125000.00, '2019-09-14', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(788, 353, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-14', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(789, 353, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-14', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(790, 354, 1, 125000.00, '1', 125000.00, '2019-08-05', '1', 125000.00, '2019-08-05', '1', 125000.00, '2019-09-06', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(791, 354, 2, 75000.00, '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-06', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(792, 354, 3, 0.00, '1', 0.00, '2019-08-05', '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(793, 355, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-05', '1', 125000.00, '2019-09-11', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(794, 355, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-11', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(795, 355, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-11', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(796, 356, 1, 125000.00, '1', 125000.00, '2019-08-06', '1', 125000.00, '2019-08-06', '1', 125000.00, '2019-08-06', '1', 125000.00, '2019-08-06', '1', 125000.00, '2019-08-06', '1', 125000.00, '2019-08-06', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(797, 356, 2, 75000.00, '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-08-06', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(798, 356, 3, 0.00, '1', 0.00, '2019-08-06', '1', 0.00, '2019-08-06', '1', 0.00, '2019-08-06', '1', 0.00, '2019-08-06', '1', 0.00, '2019-08-06', '1', 0.00, '2019-08-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(799, 357, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-09-18', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(800, 357, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-09-18', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(801, 357, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-09-18', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(802, 358, 1, 125000.00, '1', 125000.00, '2019-07-26', '1', 125000.00, '2019-08-06', '1', 125000.00, '2019-09-09', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(803, 358, 2, 75000.00, '1', 75000.00, '2019-07-26', '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-09-09', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(804, 358, 3, 0.00, '1', 0.00, '2019-07-26', '1', 0.00, '2019-08-06', '1', 0.00, '2019-09-09', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(805, 359, 1, 125000.00, '1', 125000.00, '2019-08-19', '1', 125000.00, '2019-08-19', '1', 125000.00, '2019-09-11', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(806, 359, 2, 75000.00, '1', 75000.00, '2019-08-19', '1', 75000.00, '2019-08-19', '1', 75000.00, '2019-09-11', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(807, 359, 3, 0.00, '1', 0.00, '2019-08-19', '1', 0.00, '2019-08-19', '1', 0.00, '2019-09-11', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(808, 360, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-05', '1', 125000.00, '2019-09-03', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(809, 360, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-03', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(810, 360, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-03', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(811, 361, 1, 125000.00, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(812, 361, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(813, 361, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(814, 362, 1, 125000.00, '1', 125000.00, '2019-08-02', '1', 125000.00, '2019-08-02', '1', 125000.00, '2019-08-15', '1', 125000.00, '2019-09-03', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(815, 362, 2, 75000.00, '1', 75000.00, '2019-08-02', '1', 75000.00, '2019-08-02', '1', 75000.00, '2019-08-15', '1', 75000.00, '2019-09-03', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(816, 362, 3, 0.00, '1', 0.00, '2019-08-02', '1', 0.00, '2019-08-02', '1', 0.00, '2019-08-15', '1', 0.00, '2019-09-03', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(817, 366, 1, 125000.00, '1', 125000.00, '2019-08-03', '1', 125000.00, '2019-08-03', '1', 125000.00, '2019-08-03', '1', 125000.00, '2019-08-03', '1', 125000.00, '2019-08-03', '1', 125000.00, '2019-08-03', '1', 125000.00, '2019-08-03', '1', 125000.00, '2019-08-03', '1', 125000.00, '2019-08-03', '1', 125000.00, '2019-08-03', '0', 125000.00, NULL, '0', 125000.00, NULL),
(818, 366, 2, 75000.00, '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-08-03', '0', 75000.00, NULL, '0', 75000.00, NULL),
(819, 366, 3, 0.00, '1', 0.00, '2019-08-03', '1', 0.00, '2019-08-03', '1', 0.00, '2019-08-03', '1', 0.00, '2019-08-03', '1', 0.00, '2019-08-03', '1', 0.00, '2019-08-03', '1', 0.00, '2019-08-03', '1', 0.00, '2019-08-03', '1', 0.00, '2019-08-03', '1', 0.00, '2019-08-03', '0', 0.00, NULL, '0', 0.00, NULL),
(820, 367, 1, 125000.00, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(821, 367, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(822, 367, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(823, 368, 1, 125000.00, '1', 125000.00, '2019-09-07', '1', 125000.00, '2019-09-07', '1', 125000.00, '2019-09-07', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(824, 368, 2, 75000.00, '1', 75000.00, '2019-09-07', '1', 75000.00, '2019-09-07', '1', 75000.00, '2019-09-07', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(825, 368, 3, 0.00, '1', 0.00, '2019-09-07', '1', 0.00, '2019-09-07', '1', 0.00, '2019-09-07', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(826, 369, 1, 125000.00, '1', 125000.00, '2019-09-27', '1', 125000.00, '2019-09-27', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(827, 369, 2, 75000.00, '1', 75000.00, '2019-09-27', '1', 75000.00, '2019-09-27', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(828, 369, 3, 0.00, '1', 0.00, '2019-09-27', '1', 0.00, '2019-09-27', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(829, 370, 1, 125000.00, '1', 125000.00, '2019-08-14', '1', 125000.00, '2019-08-14', '1', 125000.00, '2019-09-18', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(830, 370, 2, 75000.00, '1', 75000.00, '2019-08-14', '1', 75000.00, '2019-08-14', '1', 75000.00, '2019-09-18', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(831, 370, 3, 0.00, '1', 0.00, '2019-08-14', '1', 0.00, '2019-08-14', '1', 0.00, '2019-09-18', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(832, 371, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-06', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(833, 371, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-06', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(834, 371, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(835, 372, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-05', '1', 125000.00, '2019-09-04', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(836, 372, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-04', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(837, 372, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-04', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(838, 373, 1, 125000.00, '1', 125000.00, '2019-08-05', '1', 125000.00, '2019-08-05', '1', 125000.00, '2019-09-04', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(839, 373, 2, 75000.00, '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-04', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(840, 373, 3, 0.00, '1', 0.00, '2019-08-05', '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-04', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(841, 374, 1, 125000.00, '1', 125000.00, '2019-08-13', '1', 125000.00, '2019-08-13', '1', 125000.00, '2019-09-27', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(842, 374, 2, 75000.00, '1', 75000.00, '2019-08-13', '1', 75000.00, '2019-08-13', '1', 75000.00, '2019-09-27', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(843, 374, 3, 0.00, '1', 0.00, '2019-08-13', '1', 0.00, '2019-08-13', '1', 0.00, '2019-09-27', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(844, 375, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-21', '1', 125000.00, '2019-09-16', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(845, 375, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-21', '1', 75000.00, '2019-09-16', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(846, 375, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-21', '1', 0.00, '2019-09-16', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(847, 376, 1, 125000.00, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(848, 376, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(849, 376, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(850, 377, 1, 125000.00, '1', 125000.00, '2019-09-16', '1', 125000.00, '2019-09-16', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(851, 377, 2, 75000.00, '1', 75000.00, '2019-09-16', '1', 75000.00, '2019-09-16', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(852, 377, 3, 0.00, '1', 0.00, '2019-09-16', '1', 0.00, '2019-09-16', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL);
INSERT INTO `t103_daf_kelas_siswa_iuran` (`id`, `daf_kelas_siswa_id`, `iuran_id`, `Jumlah`, `byr01`, `jml01`, `tgl01`, `byr02`, `jml02`, `tgl02`, `byr03`, `jml03`, `tgl03`, `byr04`, `jml04`, `tgl04`, `byr05`, `jml05`, `tgl05`, `byr06`, `jml06`, `tgl06`, `byr07`, `jml07`, `tgl07`, `byr08`, `jml08`, `tgl08`, `byr09`, `jml09`, `tgl09`, `byr10`, `jml10`, `tgl10`, `byr11`, `jml11`, `tgl11`, `byr12`, `jml12`, `tgl12`) VALUES
(853, 378, 1, 125000.00, '1', 125000.00, '2019-07-31', '1', 125000.00, '2019-08-09', '1', 125000.00, '2019-09-27', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(854, 378, 2, 75000.00, '1', 75000.00, '2019-07-31', '1', 75000.00, '2019-08-09', '1', 75000.00, '2019-09-27', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(855, 378, 3, 0.00, '1', 0.00, '2019-07-31', '1', 0.00, '2019-08-09', '1', 0.00, '2019-09-27', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(856, 379, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-07', '1', 125000.00, '2019-09-20', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(857, 379, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-07', '1', 75000.00, '2019-09-20', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(858, 379, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-07', '1', 0.00, '2019-09-20', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(859, 380, 1, 125000.00, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(860, 380, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(861, 380, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(862, 381, 1, 125000.00, '1', 125000.00, '2019-08-03', '1', 125000.00, '2019-08-03', '1', 125000.00, '2019-09-09', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(863, 381, 2, 75000.00, '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-09-09', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(864, 381, 3, 0.00, '1', 0.00, '2019-08-03', '1', 0.00, '2019-08-03', '1', 0.00, '2019-09-09', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(865, 382, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-12', '1', 125000.00, '2019-09-03', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(866, 382, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-12', '1', 75000.00, '2019-09-03', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(867, 382, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-12', '1', 0.00, '2019-09-03', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(868, 383, 1, 125000.00, '1', 125000.00, '2019-07-27', '1', 125000.00, '2019-08-02', '1', 125000.00, '2019-09-21', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(869, 383, 2, 75000.00, '1', 75000.00, '2019-07-27', '1', 75000.00, '2019-08-02', '1', 75000.00, '2019-09-21', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(870, 383, 3, 0.00, '1', 0.00, '2019-07-27', '1', 0.00, '2019-08-02', '1', 0.00, '2019-09-21', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(871, 384, 1, 125000.00, '1', 125000.00, '2019-07-27', '1', 125000.00, '2019-08-14', '1', 125000.00, '2019-09-20', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(872, 384, 2, 75000.00, '1', 75000.00, '2019-07-27', '1', 75000.00, '2019-08-14', '1', 75000.00, '2019-09-20', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(873, 384, 3, 0.00, '1', 0.00, '2019-07-27', '1', 0.00, '2019-08-14', '1', 0.00, '2019-09-20', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(874, 385, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-09-03', '1', 125000.00, '2019-09-03', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(875, 385, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-09-03', '1', 75000.00, '2019-09-03', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(876, 385, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-09-03', '1', 0.00, '2019-09-03', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(877, 386, 1, 125000.00, '1', 125000.00, '2019-07-27', '1', 125000.00, '2019-08-03', '1', 125000.00, '2019-09-04', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(878, 386, 2, 75000.00, '1', 75000.00, '2019-07-27', '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-09-04', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(879, 386, 3, 0.00, '1', 0.00, '2019-07-27', '1', 0.00, '2019-08-03', '1', 0.00, '2019-09-04', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(880, 387, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-09-02', '1', 125000.00, '2019-09-23', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(881, 387, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-09-02', '1', 75000.00, '2019-09-23', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(882, 387, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-09-02', '1', 0.00, '2019-09-23', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(883, 388, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-03', '1', 125000.00, '2019-09-03', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(884, 388, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-09-03', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(885, 388, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-03', '1', 0.00, '2019-09-03', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(886, 389, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-19', '1', 125000.00, '2019-09-16', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(887, 389, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-19', '1', 75000.00, '2019-09-16', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(888, 389, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-19', '1', 0.00, '2019-09-16', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(889, 390, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-07', '1', 125000.00, '2019-09-06', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(890, 390, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-07', '1', 75000.00, '2019-09-06', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(891, 390, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-07', '1', 0.00, '2019-09-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(892, 391, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-01', '1', 125000.00, '2019-09-11', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(893, 391, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-01', '1', 75000.00, '2019-09-11', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(894, 391, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-01', '1', 0.00, '2019-09-11', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(895, 392, 1, 125000.00, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(896, 392, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(897, 392, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(898, 393, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-10', '1', 125000.00, '2019-09-13', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(899, 393, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-10', '1', 75000.00, '2019-09-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(900, 393, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-10', '1', 0.00, '2019-09-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(901, 397, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-07', '1', 125000.00, '2019-09-04', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(902, 397, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-07', '1', 75000.00, '2019-09-04', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(903, 397, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-07', '1', 0.00, '2019-09-04', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(904, 398, 1, 125000.00, '1', 125000.00, '2019-09-19', '1', 125000.00, '2019-09-19', '1', 125000.00, '2019-09-19', '1', 125000.00, '2019-09-19', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(905, 398, 2, 75000.00, '1', 75000.00, '2019-09-19', '1', 75000.00, '2019-09-19', '1', 75000.00, '2019-09-19', '1', 75000.00, '2019-09-19', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(906, 398, 3, 0.00, '1', 0.00, '2019-09-19', '1', 0.00, '2019-09-19', '1', 0.00, '2019-09-19', '1', 0.00, '2019-09-19', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(907, 399, 1, 125000.00, '1', 125000.00, '2019-09-11', '1', 125000.00, '2019-09-11', '1', 125000.00, '2019-09-11', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(908, 399, 2, 75000.00, '1', 75000.00, '2019-09-11', '1', 75000.00, '2019-09-11', '1', 75000.00, '2019-09-11', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(909, 399, 3, 0.00, '1', 0.00, '2019-09-11', '1', 0.00, '2019-09-11', '1', 0.00, '2019-09-11', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(910, 400, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-08', '1', 125000.00, '2019-09-13', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(911, 400, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-08', '1', 75000.00, '2019-09-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(912, 400, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-08', '1', 0.00, '2019-09-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(913, 401, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-20', '1', 125000.00, '2019-09-24', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(914, 401, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-20', '1', 75000.00, '2019-09-24', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(915, 401, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-20', '1', 0.00, '2019-09-24', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(916, 402, 1, 125000.00, '1', 125000.00, '2019-08-30', '1', 125000.00, '2019-08-30', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(917, 402, 2, 75000.00, '1', 75000.00, '2019-08-30', '1', 75000.00, '2019-08-30', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(918, 402, 3, 0.00, '1', 0.00, '2019-08-30', '1', 0.00, '2019-08-30', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(919, 403, 1, 125000.00, '1', 125000.00, '2019-08-07', '1', 125000.00, '2019-08-07', '1', 125000.00, '2019-09-07', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(920, 403, 2, 75000.00, '1', 75000.00, '2019-08-07', '1', 75000.00, '2019-08-07', '1', 75000.00, '2019-09-07', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(921, 403, 3, 0.00, '1', 0.00, '2019-08-07', '1', 0.00, '2019-08-07', '1', 0.00, '2019-09-07', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(922, 404, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-05', '1', 125000.00, '2019-09-04', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(923, 404, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-04', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(924, 404, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-04', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(925, 405, 1, 125000.00, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(926, 405, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(927, 405, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(928, 406, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-07', '1', 125000.00, '2019-09-06', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(929, 406, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-07', '1', 75000.00, '2019-09-06', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(930, 406, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-07', '1', 0.00, '2019-09-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(931, 407, 1, 125000.00, '1', 125000.00, '2019-09-18', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(932, 407, 2, 75000.00, '1', 75000.00, '2019-09-18', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(933, 407, 3, 0.00, '1', 0.00, '2019-09-18', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(934, 408, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-20', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(935, 408, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-20', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(936, 408, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-20', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(937, 409, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-07', '1', 125000.00, '2019-09-09', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(938, 409, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-07', '1', 75000.00, '2019-09-09', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(939, 409, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-07', '1', 0.00, '2019-09-09', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(940, 410, 1, 125000.00, '1', 125000.00, '2019-07-25', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(941, 410, 2, 75000.00, '1', 75000.00, '2019-07-25', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(942, 410, 3, 0.00, '1', 0.00, '2019-07-25', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(943, 411, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-09-04', '1', 125000.00, '2019-09-04', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(944, 411, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-09-04', '1', 75000.00, '2019-09-04', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(945, 411, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-09-04', '1', 0.00, '2019-09-04', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(946, 412, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-08', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(947, 412, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-08', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(948, 412, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-08', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(949, 413, 1, 125000.00, '1', 125000.00, '2019-09-05', '1', 125000.00, '2019-09-05', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(950, 413, 2, 75000.00, '1', 75000.00, '2019-09-05', '1', 75000.00, '2019-09-05', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(951, 413, 3, 0.00, '1', 0.00, '2019-09-05', '1', 0.00, '2019-09-05', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(952, 414, 1, 125000.00, '1', 125000.00, '2019-08-01', '1', 125000.00, '2019-08-01', '1', 125000.00, '2019-09-07', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(953, 414, 2, 75000.00, '1', 75000.00, '2019-08-01', '1', 75000.00, '2019-08-01', '1', 75000.00, '2019-09-07', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(954, 414, 3, 0.00, '1', 0.00, '2019-08-01', '1', 0.00, '2019-08-01', '1', 0.00, '2019-09-07', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(955, 415, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-08', '1', 125000.00, '2019-09-05', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(956, 415, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-08', '1', 75000.00, '2019-09-05', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(957, 415, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-08', '1', 0.00, '2019-09-05', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(958, 416, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-07', '1', 125000.00, '2019-09-07', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(959, 416, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-07', '1', 75000.00, '2019-09-07', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(960, 416, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-07', '1', 0.00, '2019-09-07', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(961, 417, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-10', '1', 125000.00, '2019-09-17', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(962, 417, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-10', '1', 75000.00, '2019-09-17', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(963, 417, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-10', '1', 0.00, '2019-09-17', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(964, 418, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-14', '1', 125000.00, '2019-09-13', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(965, 418, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-14', '1', 75000.00, '2019-09-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(966, 418, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-14', '1', 0.00, '2019-09-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(967, 419, 1, 125000.00, '1', 125000.00, '2019-08-05', '1', 125000.00, '2019-08-05', '1', 125000.00, '2019-09-10', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(968, 419, 2, 75000.00, '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-10', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(969, 419, 3, 0.00, '1', 0.00, '2019-08-05', '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-10', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(970, 420, 1, 125000.00, '1', 125000.00, '2019-08-12', '1', 125000.00, '2019-08-12', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(971, 420, 2, 75000.00, '1', 75000.00, '2019-08-12', '1', 75000.00, '2019-08-12', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(972, 420, 3, 0.00, '1', 0.00, '2019-08-12', '1', 0.00, '2019-08-12', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(973, 421, 1, 125000.00, '1', 125000.00, '2019-08-07', '1', 125000.00, '2019-08-07', '1', 125000.00, '2019-08-07', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(974, 421, 2, 75000.00, '1', 75000.00, '2019-08-07', '1', 75000.00, '2019-08-07', '1', 75000.00, '2019-08-07', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(975, 421, 3, 0.00, '1', 0.00, '2019-08-07', '1', 0.00, '2019-08-07', '1', 0.00, '2019-08-07', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(976, 422, 1, 125000.00, '1', 125000.00, '2019-08-23', '1', 125000.00, '2019-08-23', '1', 125000.00, '2019-09-27', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(977, 422, 2, 75000.00, '1', 75000.00, '2019-08-23', '1', 75000.00, '2019-08-23', '1', 75000.00, '2019-09-27', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(978, 422, 3, 0.00, '1', 0.00, '2019-08-23', '1', 0.00, '2019-08-23', '1', 0.00, '2019-09-27', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(979, 423, 1, 125000.00, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(980, 423, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(981, 423, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(982, 428, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-06', '1', 125000.00, '2019-09-18', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(983, 429, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-07', '1', 75000.00, '2019-09-09', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(984, 430, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(985, 431, 1, 125000.00, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(986, 432, 2, 75000.00, '1', 75000.00, '2019-08-13', '1', 75000.00, '2019-08-13', '1', 75000.00, '2019-09-20', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(987, 433, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(988, 434, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-05', '1', 125000.00, '2019-09-06', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(989, 435, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-13', '1', 75000.00, '2019-09-24', '1', 75000.00, '2019-09-24', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(990, 436, 3, 0.00, '1', 0.00, '2019-08-03', '1', 0.00, '2019-09-04', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(991, 437, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-01', '1', 125000.00, '2019-09-26', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(992, 438, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-19', '1', 75000.00, '2019-09-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(993, 439, 3, 0.00, '1', 0.00, '2019-07-31', '1', 0.00, '2019-08-06', '1', 0.00, '2019-09-20', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(994, 440, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-30', '1', 125000.00, '2019-09-16', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(995, 441, 2, 75000.00, '1', 75000.00, '2019-07-26', '1', 75000.00, '2019-09-18', '1', 75000.00, '2019-09-18', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(996, 442, 3, 0.00, '1', 0.00, '2019-07-27', '1', 0.00, '2019-08-28', '1', 0.00, '2019-09-27', '1', 0.00, '2019-09-27', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(997, 443, 1, 125000.00, '1', 125000.00, '2019-08-05', '1', 125000.00, '2019-09-16', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(998, 444, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-22', '1', 75000.00, '2019-09-06', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(999, 445, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1000, 446, 1, 125000.00, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(1001, 447, 2, 75000.00, '1', 75000.00, '2019-07-30', '1', 75000.00, '2019-08-22', '1', 75000.00, '2019-09-20', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1002, 448, 3, 0.00, '1', 0.00, '2019-09-12', '1', 0.00, '2019-09-12', '1', 0.00, '2019-09-12', '1', 0.00, '2019-09-12', '1', 0.00, '2019-09-12', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1003, 449, 1, 125000.00, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(1004, 450, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1005, 451, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-22', '1', 0.00, '2019-09-17', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1006, 452, 1, 125000.00, '1', 125000.00, '2019-08-05', '1', 125000.00, '2019-08-05', '1', 125000.00, '2019-09-18', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(1007, 453, 2, 75000.00, '1', 75000.00, '2019-07-29', '1', 75000.00, '2019-08-14', '1', 75000.00, '2019-09-17', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1008, 454, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-27', '1', 0.00, '2019-09-11', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1009, 455, 1, 125000.00, '0', 125000.00, NULL, '1', 125000.00, '2019-08-02', '1', 125000.00, '2019-09-02', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(1010, 428, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-09-18', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1011, 429, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-07', '1', 0.00, '2019-09-09', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1012, 430, 1, 125000.00, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(1013, 431, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1014, 432, 3, 0.00, '1', 0.00, '2019-08-13', '1', 0.00, '2019-08-13', '1', 0.00, '2019-09-20', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1015, 433, 1, 125000.00, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(1016, 434, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-06', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1017, 435, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-13', '1', 0.00, '2019-09-24', '1', 0.00, '2019-09-24', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1018, 436, 1, 125000.00, '1', 125000.00, '2019-08-03', '1', 125000.00, '2019-09-04', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(1019, 437, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-01', '1', 75000.00, '2019-09-26', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1020, 438, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-19', '1', 0.00, '2019-09-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1021, 439, 1, 125000.00, '1', 125000.00, '2019-07-31', '1', 125000.00, '2019-08-06', '1', 125000.00, '2019-09-20', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(1022, 440, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-30', '1', 75000.00, '2019-09-16', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1023, 441, 3, 0.00, '1', 0.00, '2019-07-26', '1', 0.00, '2019-09-18', '1', 0.00, '2019-09-18', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1024, 442, 1, 125000.00, '1', 125000.00, '2019-07-27', '1', 125000.00, '2019-08-28', '1', 125000.00, '2019-09-27', '1', 125000.00, '2019-09-27', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(1025, 443, 2, 75000.00, '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-16', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1026, 444, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-22', '1', 0.00, '2019-09-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1027, 445, 1, 125000.00, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL);
INSERT INTO `t103_daf_kelas_siswa_iuran` (`id`, `daf_kelas_siswa_id`, `iuran_id`, `Jumlah`, `byr01`, `jml01`, `tgl01`, `byr02`, `jml02`, `tgl02`, `byr03`, `jml03`, `tgl03`, `byr04`, `jml04`, `tgl04`, `byr05`, `jml05`, `tgl05`, `byr06`, `jml06`, `tgl06`, `byr07`, `jml07`, `tgl07`, `byr08`, `jml08`, `tgl08`, `byr09`, `jml09`, `tgl09`, `byr10`, `jml10`, `tgl10`, `byr11`, `jml11`, `tgl11`, `byr12`, `jml12`, `tgl12`) VALUES
(1028, 446, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1029, 447, 3, 0.00, '1', 0.00, '2019-07-30', '1', 0.00, '2019-08-22', '1', 0.00, '2019-09-20', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1030, 448, 1, 125000.00, '1', 125000.00, '2019-09-12', '1', 125000.00, '2019-09-12', '1', 125000.00, '2019-09-12', '1', 125000.00, '2019-09-12', '1', 125000.00, '2019-09-12', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(1031, 449, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1032, 450, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1033, 451, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-22', '1', 125000.00, '2019-09-17', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(1034, 452, 2, 75000.00, '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-18', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1035, 453, 3, 0.00, '1', 0.00, '2019-07-29', '1', 0.00, '2019-08-14', '1', 0.00, '2019-09-17', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1036, 454, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-27', '1', 125000.00, '2019-09-11', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(1037, 455, 2, 75000.00, '0', 75000.00, NULL, '1', 75000.00, '2019-08-02', '1', 75000.00, '2019-09-02', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1038, 428, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-06', '1', 0.00, '2019-09-18', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1039, 429, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-07', '1', 125000.00, '2019-09-09', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(1040, 430, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1041, 431, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1042, 432, 1, 125000.00, '1', 125000.00, '2019-08-13', '1', 125000.00, '2019-08-13', '1', 125000.00, '2019-09-20', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(1043, 433, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1044, 434, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1045, 435, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-13', '1', 125000.00, '2019-09-24', '1', 125000.00, '2019-09-24', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(1046, 436, 2, 75000.00, '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-09-04', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1047, 437, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-01', '1', 0.00, '2019-09-26', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1048, 438, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-19', '1', 125000.00, '2019-09-13', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(1049, 439, 2, 75000.00, '1', 75000.00, '2019-07-31', '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-09-20', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1050, 440, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-30', '1', 0.00, '2019-09-16', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1051, 441, 1, 125000.00, '1', 125000.00, '2019-07-26', '1', 125000.00, '2019-09-18', '1', 125000.00, '2019-09-18', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(1052, 442, 2, 75000.00, '1', 75000.00, '2019-07-27', '1', 75000.00, '2019-08-28', '1', 75000.00, '2019-09-27', '1', 75000.00, '2019-09-27', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1053, 443, 3, 0.00, '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-16', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1054, 444, 1, 125000.00, '1', 125000.00, '2019-07-25', '1', 125000.00, '2019-08-22', '1', 125000.00, '2019-09-06', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(1055, 445, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1056, 446, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1057, 447, 1, 125000.00, '1', 125000.00, '2019-07-30', '1', 125000.00, '2019-08-22', '1', 125000.00, '2019-09-20', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(1058, 448, 2, 75000.00, '1', 75000.00, '2019-09-12', '1', 75000.00, '2019-09-12', '1', 75000.00, '2019-09-12', '1', 75000.00, '2019-09-12', '1', 75000.00, '2019-09-12', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1059, 449, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1060, 450, 1, 125000.00, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(1061, 451, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-22', '1', 75000.00, '2019-09-17', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1062, 452, 3, 0.00, '1', 0.00, '2019-08-05', '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-18', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1063, 453, 1, 125000.00, '1', 125000.00, '2019-07-29', '1', 125000.00, '2019-08-14', '1', 125000.00, '2019-09-17', '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL, '0', 125000.00, NULL),
(1064, 454, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-27', '1', 75000.00, '2019-09-11', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1065, 455, 3, 0.00, '0', 0.00, NULL, '1', 0.00, '2019-08-02', '1', 0.00, '2019-09-02', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1066, 459, 1, 120000.00, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1067, 460, 2, 75000.00, '1', 75000.00, '2019-08-28', '1', 75000.00, '2019-08-28', '1', 75000.00, '2019-09-28', '1', 75000.00, '2019-09-28', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1068, 461, 3, 0.00, '1', 0.00, '2019-09-04', '1', 0.00, '2019-09-04', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1069, 462, 1, 120000.00, '1', 120000.00, '2019-08-03', '1', 120000.00, '2019-08-03', '1', 120000.00, '2019-09-16', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1070, 463, 2, 75000.00, '1', 75000.00, '2019-07-26', '1', 75000.00, '2019-08-30', '1', 75000.00, '2019-09-19', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1071, 464, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-12', '1', 0.00, '2019-09-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1072, 465, 1, 120000.00, '1', 120000.00, '2019-07-26', '1', 120000.00, '2019-09-07', '1', 120000.00, '2019-09-20', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1073, 466, 2, 75000.00, '1', 75000.00, '2019-07-27', '1', 75000.00, '2019-08-27', '1', 75000.00, '2019-09-28', '1', 75000.00, '2019-09-28', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1074, 467, 3, 0.00, '1', 0.00, '2019-09-16', '1', 0.00, '2019-09-16', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1075, 468, 1, 120000.00, '1', 120000.00, '2019-07-25', '1', 120000.00, '2019-07-25', '1', 120000.00, '2019-08-05', '1', 120000.00, '2019-09-03', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1076, 469, 2, 75000.00, '1', 75000.00, '2019-08-19', '1', 75000.00, '2019-08-19', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1077, 470, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1078, 471, 1, 120000.00, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1079, 472, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1080, 473, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1081, 474, 1, 120000.00, '1', 120000.00, '2019-08-22', '1', 120000.00, '2019-09-03', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1082, 475, 2, 75000.00, '1', 75000.00, '2019-09-18', '1', 75000.00, '2019-09-18', '1', 75000.00, '2019-09-18', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1083, 476, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-09-10', '1', 0.00, '2019-09-10', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1084, 477, 1, 120000.00, '1', 120000.00, '2019-07-25', '1', 120000.00, '2019-08-27', '1', 120000.00, '2019-09-07', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1085, 478, 2, 75000.00, '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1086, 479, 3, 0.00, '1', 0.00, '2019-07-26', '1', 0.00, '2019-08-09', '1', 0.00, '2019-09-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1087, 480, 1, 120000.00, '1', 120000.00, '2019-09-03', '1', 120000.00, '2019-09-03', '1', 120000.00, '2019-09-23', '1', 120000.00, '2019-09-23', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1088, 481, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-09-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1089, 482, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1090, 459, 1, 120000.00, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1091, 460, 2, 75000.00, '1', 75000.00, '2019-08-28', '1', 75000.00, '2019-08-28', '1', 75000.00, '2019-09-28', '1', 75000.00, '2019-09-28', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1092, 461, 3, 0.00, '1', 0.00, '2019-09-04', '1', 0.00, '2019-09-04', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1093, 462, 1, 120000.00, '1', 120000.00, '2019-08-03', '1', 120000.00, '2019-08-03', '1', 120000.00, '2019-09-16', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1094, 463, 2, 75000.00, '1', 75000.00, '2019-07-26', '1', 75000.00, '2019-08-30', '1', 75000.00, '2019-09-19', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1095, 464, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-12', '1', 0.00, '2019-09-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1096, 465, 1, 120000.00, '1', 120000.00, '2019-07-26', '1', 120000.00, '2019-09-07', '1', 120000.00, '2019-09-20', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1097, 466, 2, 75000.00, '1', 75000.00, '2019-07-27', '1', 75000.00, '2019-08-27', '1', 75000.00, '2019-09-28', '1', 75000.00, '2019-09-28', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1098, 467, 3, 0.00, '1', 0.00, '2019-09-16', '1', 0.00, '2019-09-16', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1099, 468, 1, 120000.00, '1', 120000.00, '2019-07-25', '1', 120000.00, '2019-07-25', '1', 120000.00, '2019-08-05', '1', 120000.00, '2019-09-03', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1100, 469, 2, 75000.00, '1', 75000.00, '2019-08-19', '1', 75000.00, '2019-08-19', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1101, 470, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1102, 471, 1, 120000.00, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1103, 472, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1104, 473, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1105, 474, 1, 120000.00, '1', 120000.00, '2019-08-22', '1', 120000.00, '2019-09-03', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1106, 475, 2, 75000.00, '1', 75000.00, '2019-09-18', '1', 75000.00, '2019-09-18', '1', 75000.00, '2019-09-18', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1107, 476, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-09-10', '1', 0.00, '2019-09-10', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1108, 477, 1, 120000.00, '1', 120000.00, '2019-07-25', '1', 120000.00, '2019-08-27', '1', 120000.00, '2019-09-07', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1109, 478, 2, 75000.00, '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1110, 479, 3, 0.00, '1', 0.00, '2019-07-26', '1', 0.00, '2019-08-09', '1', 0.00, '2019-09-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1111, 480, 1, 120000.00, '1', 120000.00, '2019-09-03', '1', 120000.00, '2019-09-03', '1', 120000.00, '2019-09-23', '1', 120000.00, '2019-09-23', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1112, 481, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-09-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1113, 482, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1114, 459, 1, 120000.00, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1115, 460, 2, 75000.00, '1', 75000.00, '2019-08-28', '1', 75000.00, '2019-08-28', '1', 75000.00, '2019-09-28', '1', 75000.00, '2019-09-28', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1116, 461, 3, 0.00, '1', 0.00, '2019-09-04', '1', 0.00, '2019-09-04', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1117, 462, 1, 120000.00, '1', 120000.00, '2019-08-03', '1', 120000.00, '2019-08-03', '1', 120000.00, '2019-09-16', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1118, 463, 2, 75000.00, '1', 75000.00, '2019-07-26', '1', 75000.00, '2019-08-30', '1', 75000.00, '2019-09-19', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1119, 464, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-12', '1', 0.00, '2019-09-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1120, 465, 1, 120000.00, '1', 120000.00, '2019-07-26', '1', 120000.00, '2019-09-07', '1', 120000.00, '2019-09-20', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1121, 466, 2, 75000.00, '1', 75000.00, '2019-07-27', '1', 75000.00, '2019-08-27', '1', 75000.00, '2019-09-28', '1', 75000.00, '2019-09-28', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1122, 467, 3, 0.00, '1', 0.00, '2019-09-16', '1', 0.00, '2019-09-16', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1123, 468, 1, 120000.00, '1', 120000.00, '2019-07-25', '1', 120000.00, '2019-07-25', '1', 120000.00, '2019-08-05', '1', 120000.00, '2019-09-03', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1124, 469, 2, 75000.00, '1', 75000.00, '2019-08-19', '1', 75000.00, '2019-08-19', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1125, 470, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1126, 471, 1, 120000.00, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1127, 472, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1128, 473, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1129, 474, 1, 120000.00, '1', 120000.00, '2019-08-22', '1', 120000.00, '2019-09-03', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1130, 475, 2, 75000.00, '1', 75000.00, '2019-09-18', '1', 75000.00, '2019-09-18', '1', 75000.00, '2019-09-18', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1131, 476, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-09-10', '1', 0.00, '2019-09-10', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1132, 477, 1, 120000.00, '1', 120000.00, '2019-07-25', '1', 120000.00, '2019-08-27', '1', 120000.00, '2019-09-07', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1133, 478, 2, 75000.00, '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1134, 479, 3, 0.00, '1', 0.00, '2019-07-26', '1', 0.00, '2019-08-09', '1', 0.00, '2019-09-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1135, 480, 1, 120000.00, '1', 120000.00, '2019-09-03', '1', 120000.00, '2019-09-03', '1', 120000.00, '2019-09-23', '1', 120000.00, '2019-09-23', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1136, 481, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-09-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1137, 482, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1138, 490, 1, 120000.00, '1', 120000.00, '2019-07-25', '1', 120000.00, '2019-08-19', '1', 120000.00, '2019-09-16', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1139, 491, 2, 75000.00, '1', 75000.00, '2019-08-30', '1', 75000.00, '2019-08-30', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1140, 492, 3, 0.00, '1', 0.00, '2019-08-28', '1', 0.00, '2019-08-28', '1', 0.00, '2019-08-28', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1141, 493, 1, 120000.00, '1', 120000.00, '2019-07-25', '1', 120000.00, '2019-08-12', '1', 120000.00, '2019-09-06', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1142, 494, 2, 75000.00, '1', 75000.00, '2019-07-26', '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-09-06', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1143, 495, 3, 0.00, '1', 0.00, '2019-08-05', '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-04', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1144, 496, 1, 120000.00, '1', 120000.00, '2019-07-31', '1', 120000.00, '2019-07-31', '1', 120000.00, '2019-09-06', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1145, 497, 2, 75000.00, '1', 75000.00, '2019-07-27', '1', 75000.00, '2019-08-31', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1146, 498, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-12', '1', 0.00, '2019-09-18', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1147, 499, 1, 120000.00, '1', 120000.00, '2019-07-25', '1', 120000.00, '2019-08-22', '1', 120000.00, '2019-09-13', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1148, 500, 2, 75000.00, '1', 75000.00, '2019-09-12', '1', 75000.00, '2019-09-12', '1', 75000.00, '2019-09-12', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1149, 501, 3, 0.00, '1', 0.00, '2019-07-27', '1', 0.00, '2019-08-23', '1', 0.00, '2019-09-19', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1150, 502, 1, 120000.00, '1', 120000.00, '2019-07-25', '1', 120000.00, '2019-08-06', '1', 120000.00, '2019-09-13', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1151, 503, 2, 75000.00, '1', 75000.00, '2019-08-22', '1', 75000.00, '2019-08-22', '1', 75000.00, '2019-09-16', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1152, 504, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-12', '1', 0.00, '2019-09-05', '1', 0.00, '2019-09-27', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1153, 505, 1, 120000.00, '1', 120000.00, '2019-08-03', '1', 120000.00, '2019-08-03', '1', 120000.00, '2019-09-17', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1154, 506, 2, 75000.00, '1', 75000.00, '2019-09-03', '1', 75000.00, '2019-09-03', '1', 75000.00, '2019-09-03', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1155, 507, 3, 0.00, '1', 0.00, '2019-08-12', '1', 0.00, '2019-08-27', '1', 0.00, '2019-09-26', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1156, 508, 1, 120000.00, '1', 120000.00, '2019-08-26', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1157, 509, 2, 75000.00, '1', 75000.00, '2019-09-24', '1', 75000.00, '2019-09-24', '1', 75000.00, '2019-09-24', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1158, 510, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-09', '1', 0.00, '2019-09-10', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1159, 511, 1, 120000.00, '1', 120000.00, '2019-08-26', '1', 120000.00, '2019-09-10', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1160, 512, 2, 75000.00, '1', 75000.00, '2019-09-11', '1', 75000.00, '2019-09-11', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1161, 490, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-19', '1', 0.00, '2019-09-16', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1162, 491, 1, 120000.00, '1', 120000.00, '2019-08-30', '1', 120000.00, '2019-08-30', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1163, 492, 2, 75000.00, '1', 75000.00, '2019-08-28', '1', 75000.00, '2019-08-28', '1', 75000.00, '2019-08-28', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1164, 493, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-12', '1', 0.00, '2019-09-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1165, 494, 1, 120000.00, '1', 120000.00, '2019-07-26', '1', 120000.00, '2019-08-03', '1', 120000.00, '2019-09-06', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1166, 495, 2, 75000.00, '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-04', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1167, 496, 3, 0.00, '1', 0.00, '2019-07-31', '1', 0.00, '2019-07-31', '1', 0.00, '2019-09-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1168, 497, 1, 120000.00, '1', 120000.00, '2019-07-27', '1', 120000.00, '2019-08-31', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1169, 498, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-12', '1', 75000.00, '2019-09-18', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1170, 499, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-22', '1', 0.00, '2019-09-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1171, 500, 1, 120000.00, '1', 120000.00, '2019-09-12', '1', 120000.00, '2019-09-12', '1', 120000.00, '2019-09-12', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1172, 501, 2, 75000.00, '1', 75000.00, '2019-07-27', '1', 75000.00, '2019-08-23', '1', 75000.00, '2019-09-19', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1173, 502, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-06', '1', 0.00, '2019-09-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1174, 503, 1, 120000.00, '1', 120000.00, '2019-08-22', '1', 120000.00, '2019-08-22', '1', 120000.00, '2019-09-16', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1175, 504, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-12', '1', 75000.00, '2019-09-05', '1', 75000.00, '2019-09-27', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1176, 505, 3, 0.00, '1', 0.00, '2019-08-03', '1', 0.00, '2019-08-03', '1', 0.00, '2019-09-17', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1177, 506, 1, 120000.00, '1', 120000.00, '2019-09-03', '1', 120000.00, '2019-09-03', '1', 120000.00, '2019-09-03', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1178, 507, 2, 75000.00, '1', 75000.00, '2019-08-12', '1', 75000.00, '2019-08-27', '1', 75000.00, '2019-09-26', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1179, 508, 3, 0.00, '1', 0.00, '2019-08-26', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1180, 509, 1, 120000.00, '1', 120000.00, '2019-09-24', '1', 120000.00, '2019-09-24', '1', 120000.00, '2019-09-24', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1181, 510, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-09', '1', 75000.00, '2019-09-10', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1182, 511, 3, 0.00, '1', 0.00, '2019-08-26', '1', 0.00, '2019-09-10', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1183, 512, 1, 120000.00, '1', 120000.00, '2019-09-11', '1', 120000.00, '2019-09-11', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1184, 490, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-19', '1', 75000.00, '2019-09-16', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1185, 491, 3, 0.00, '1', 0.00, '2019-08-30', '1', 0.00, '2019-08-30', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1186, 492, 1, 120000.00, '1', 120000.00, '2019-08-28', '1', 120000.00, '2019-08-28', '1', 120000.00, '2019-08-28', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1187, 493, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-12', '1', 75000.00, '2019-09-06', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1188, 494, 3, 0.00, '1', 0.00, '2019-07-26', '1', 0.00, '2019-08-03', '1', 0.00, '2019-09-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1189, 495, 1, 120000.00, '1', 120000.00, '2019-08-05', '1', 120000.00, '2019-08-05', '1', 120000.00, '2019-09-04', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1190, 496, 2, 75000.00, '1', 75000.00, '2019-07-31', '1', 75000.00, '2019-07-31', '1', 75000.00, '2019-09-06', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1191, 497, 3, 0.00, '1', 0.00, '2019-07-27', '1', 0.00, '2019-08-31', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1192, 498, 1, 120000.00, '1', 120000.00, '2019-07-25', '1', 120000.00, '2019-08-12', '1', 120000.00, '2019-09-18', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1193, 499, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-22', '1', 75000.00, '2019-09-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1194, 500, 3, 0.00, '1', 0.00, '2019-09-12', '1', 0.00, '2019-09-12', '1', 0.00, '2019-09-12', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1195, 501, 1, 120000.00, '1', 120000.00, '2019-07-27', '1', 120000.00, '2019-08-23', '1', 120000.00, '2019-09-19', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1196, 502, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-09-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1197, 503, 3, 0.00, '1', 0.00, '2019-08-22', '1', 0.00, '2019-08-22', '1', 0.00, '2019-09-16', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1198, 504, 1, 120000.00, '1', 120000.00, '2019-07-25', '1', 120000.00, '2019-08-12', '1', 120000.00, '2019-09-05', '1', 120000.00, '2019-09-27', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1199, 505, 2, 75000.00, '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-09-17', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1200, 506, 3, 0.00, '1', 0.00, '2019-09-03', '1', 0.00, '2019-09-03', '1', 0.00, '2019-09-03', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1201, 507, 1, 120000.00, '1', 120000.00, '2019-08-12', '1', 120000.00, '2019-08-27', '1', 120000.00, '2019-09-26', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1202, 508, 2, 75000.00, '1', 75000.00, '2019-08-26', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL);
INSERT INTO `t103_daf_kelas_siswa_iuran` (`id`, `daf_kelas_siswa_id`, `iuran_id`, `Jumlah`, `byr01`, `jml01`, `tgl01`, `byr02`, `jml02`, `tgl02`, `byr03`, `jml03`, `tgl03`, `byr04`, `jml04`, `tgl04`, `byr05`, `jml05`, `tgl05`, `byr06`, `jml06`, `tgl06`, `byr07`, `jml07`, `tgl07`, `byr08`, `jml08`, `tgl08`, `byr09`, `jml09`, `tgl09`, `byr10`, `jml10`, `tgl10`, `byr11`, `jml11`, `tgl11`, `byr12`, `jml12`, `tgl12`) VALUES
(1203, 509, 3, 0.00, '1', 0.00, '2019-09-24', '1', 0.00, '2019-09-24', '1', 0.00, '2019-09-24', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1204, 510, 1, 120000.00, '1', 120000.00, '2019-07-25', '1', 120000.00, '2019-08-09', '1', 120000.00, '2019-09-10', '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL, '0', 120000.00, NULL),
(1205, 511, 2, 75000.00, '1', 75000.00, '2019-08-26', '1', 75000.00, '2019-09-10', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1206, 512, 3, 0.00, '1', 0.00, '2019-09-11', '1', 0.00, '2019-09-11', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1288, 521, 1, 100000.00, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1289, 521, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1290, 521, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1291, 522, 1, 100000.00, '1', 100000.00, '2019-08-05', '1', 100000.00, '2019-09-05', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1292, 522, 2, 75000.00, '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-05', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1293, 522, 3, 0.00, '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-05', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1294, 523, 1, 100000.00, '1', 100000.00, '2019-07-25', '1', 100000.00, '2019-08-08', '1', 100000.00, '2019-09-13', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1295, 523, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-08', '1', 75000.00, '2019-09-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1296, 523, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-08', '1', 0.00, '2019-09-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1297, 524, 1, 100000.00, '1', 100000.00, '2019-08-13', '1', 100000.00, '2019-08-13', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1298, 524, 2, 75000.00, '1', 75000.00, '2019-08-13', '1', 75000.00, '2019-08-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1299, 524, 3, 0.00, '1', 0.00, '2019-08-13', '1', 0.00, '2019-08-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1300, 525, 1, 100000.00, '1', 100000.00, '2019-07-25', '1', 100000.00, '2019-08-12', '1', 100000.00, '2019-09-06', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1301, 525, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-12', '1', 75000.00, '2019-09-06', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1302, 525, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-12', '1', 0.00, '2019-09-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1303, 526, 1, 100000.00, '1', 100000.00, '2019-07-25', '1', 100000.00, '2019-08-12', '1', 100000.00, '2019-09-16', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1304, 526, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-12', '1', 75000.00, '2019-09-16', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1305, 526, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-12', '1', 0.00, '2019-09-16', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1306, 527, 1, 100000.00, '1', 100000.00, '2019-08-19', '1', 100000.00, '2019-08-19', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1307, 527, 2, 75000.00, '1', 75000.00, '2019-08-19', '1', 75000.00, '2019-08-19', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1308, 527, 3, 0.00, '1', 0.00, '2019-08-19', '1', 0.00, '2019-08-19', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1309, 528, 1, 100000.00, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1310, 528, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1311, 528, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1312, 529, 1, 100000.00, '1', 100000.00, '2019-07-25', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1313, 529, 2, 75000.00, '1', 75000.00, '2019-07-25', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1314, 529, 3, 0.00, '1', 0.00, '2019-07-25', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1315, 530, 1, 100000.00, '1', 100000.00, '2019-09-16', '1', 100000.00, '2019-09-16', '1', 100000.00, '2019-09-16', '1', 100000.00, '2019-09-16', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1316, 530, 2, 75000.00, '1', 75000.00, '2019-09-16', '1', 75000.00, '2019-09-16', '1', 75000.00, '2019-09-16', '1', 75000.00, '2019-09-16', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1317, 530, 3, 0.00, '1', 0.00, '2019-09-16', '1', 0.00, '2019-09-16', '1', 0.00, '2019-09-16', '1', 0.00, '2019-09-16', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1318, 531, 1, 100000.00, '1', 100000.00, '2019-08-08', '1', 100000.00, '2019-08-08', '1', 100000.00, '2019-09-02', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1319, 531, 2, 75000.00, '1', 75000.00, '2019-08-08', '1', 75000.00, '2019-08-08', '1', 75000.00, '2019-09-02', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1320, 531, 3, 0.00, '1', 0.00, '2019-08-08', '1', 0.00, '2019-08-08', '1', 0.00, '2019-09-02', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1321, 532, 1, 100000.00, '1', 100000.00, '2019-08-13', '1', 100000.00, '2019-08-13', '1', 100000.00, '2019-09-07', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1322, 532, 2, 75000.00, '1', 75000.00, '2019-08-13', '1', 75000.00, '2019-08-13', '1', 75000.00, '2019-09-07', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1323, 532, 3, 0.00, '1', 0.00, '2019-08-13', '1', 0.00, '2019-08-13', '1', 0.00, '2019-09-07', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1324, 533, 1, 100000.00, '1', 100000.00, '2019-07-25', '1', 100000.00, '2019-08-19', '1', 100000.00, '2019-09-12', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1325, 533, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-19', '1', 75000.00, '2019-09-12', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1326, 533, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-19', '1', 0.00, '2019-09-12', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1327, 534, 1, 100000.00, '1', 100000.00, '2019-07-31', '1', 100000.00, '2019-07-31', '1', 100000.00, '2019-09-06', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1328, 534, 2, 75000.00, '1', 75000.00, '2019-07-31', '1', 75000.00, '2019-07-31', '1', 75000.00, '2019-09-06', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1329, 534, 3, 0.00, '1', 0.00, '2019-07-31', '1', 0.00, '2019-07-31', '1', 0.00, '2019-09-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1330, 535, 1, 100000.00, '1', 100000.00, '2019-07-25', '1', 100000.00, '2019-08-05', '1', 100000.00, '2019-09-04', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1331, 535, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-04', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1332, 535, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-04', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1333, 536, 1, 100000.00, '1', 100000.00, '2019-08-02', '1', 100000.00, '2019-08-02', '1', 100000.00, '2019-09-21', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1334, 536, 2, 75000.00, '1', 75000.00, '2019-08-02', '1', 75000.00, '2019-08-02', '1', 75000.00, '2019-09-21', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1335, 536, 3, 0.00, '1', 0.00, '2019-08-02', '1', 0.00, '2019-08-02', '1', 0.00, '2019-09-21', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1336, 537, 1, 100000.00, '1', 100000.00, '2019-07-26', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1337, 537, 2, 75000.00, '1', 75000.00, '2019-07-26', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1338, 537, 3, 0.00, '1', 0.00, '2019-07-26', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1339, 538, 1, 100000.00, '1', 100000.00, '2019-09-12', '1', 100000.00, '2019-09-12', '1', 100000.00, '2019-09-12', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1340, 538, 2, 75000.00, '1', 75000.00, '2019-09-12', '1', 75000.00, '2019-09-12', '1', 75000.00, '2019-09-12', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1341, 538, 3, 0.00, '1', 0.00, '2019-09-12', '1', 0.00, '2019-09-12', '1', 0.00, '2019-09-12', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1342, 539, 1, 100000.00, '1', 100000.00, '2019-07-25', '1', 100000.00, '2019-08-30', '1', 100000.00, '2019-09-16', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1343, 539, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-30', '1', 75000.00, '2019-09-16', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1344, 539, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-30', '1', 0.00, '2019-09-16', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1345, 540, 1, 100000.00, '1', 100000.00, '2019-08-27', '1', 100000.00, '2019-08-27', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1346, 540, 2, 75000.00, '1', 75000.00, '2019-08-27', '1', 75000.00, '2019-08-27', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1347, 540, 3, 0.00, '1', 0.00, '2019-08-27', '1', 0.00, '2019-08-27', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1348, 541, 1, 100000.00, '1', 100000.00, '2019-09-02', '1', 100000.00, '2019-09-02', '1', 100000.00, '2019-09-17', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1349, 541, 2, 75000.00, '1', 75000.00, '2019-09-02', '1', 75000.00, '2019-09-02', '1', 75000.00, '2019-09-17', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1350, 541, 3, 0.00, '1', 0.00, '2019-09-02', '1', 0.00, '2019-09-02', '1', 0.00, '2019-09-17', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1351, 542, 1, 100000.00, '1', 100000.00, '2019-08-06', '1', 100000.00, '2019-08-06', '1', 100000.00, '2019-09-05', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1352, 542, 2, 75000.00, '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-09-05', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1353, 542, 3, 0.00, '1', 0.00, '2019-08-06', '1', 0.00, '2019-08-06', '1', 0.00, '2019-09-05', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1354, 543, 1, 100000.00, '1', 100000.00, '2019-08-01', '1', 100000.00, '2019-09-06', '1', 100000.00, '2019-09-10', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1355, 543, 2, 75000.00, '1', 75000.00, '2019-08-01', '1', 75000.00, '2019-09-06', '1', 75000.00, '2019-09-10', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1356, 543, 3, 0.00, '1', 0.00, '2019-08-01', '1', 0.00, '2019-09-06', '1', 0.00, '2019-09-10', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1357, 544, 1, 100000.00, '1', 100000.00, '2019-08-22', '1', 100000.00, '2019-09-25', '1', 100000.00, '2019-09-25', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1358, 544, 2, 75000.00, '1', 75000.00, '2019-08-22', '1', 75000.00, '2019-09-25', '1', 75000.00, '2019-09-25', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1359, 544, 3, 0.00, '1', 0.00, '2019-08-22', '1', 0.00, '2019-09-25', '1', 0.00, '2019-09-25', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1360, 545, 1, 100000.00, '1', 100000.00, '2019-07-27', '1', 100000.00, '2019-09-28', '1', 100000.00, '2019-09-28', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1361, 545, 2, 75000.00, '1', 75000.00, '2019-07-27', '1', 75000.00, '2019-09-28', '1', 75000.00, '2019-09-28', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1362, 545, 3, 0.00, '1', 0.00, '2019-07-27', '1', 0.00, '2019-09-28', '1', 0.00, '2019-09-28', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1363, 546, 1, 100000.00, '1', 100000.00, '2019-09-07', '1', 100000.00, '2019-09-13', '1', 100000.00, '2019-09-13', '1', 100000.00, '2019-09-13', '1', 100000.00, '2019-09-13', '1', 100000.00, '2019-09-13', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1364, 546, 2, 75000.00, '1', 75000.00, '2019-09-07', '1', 75000.00, '2019-09-13', '1', 75000.00, '2019-09-13', '1', 75000.00, '2019-09-13', '1', 75000.00, '2019-09-13', '1', 75000.00, '2019-09-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1365, 546, 3, 0.00, '1', 0.00, '2019-09-07', '1', 0.00, '2019-09-13', '1', 0.00, '2019-09-13', '1', 0.00, '2019-09-13', '1', 0.00, '2019-09-13', '1', 0.00, '2019-09-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1366, 547, 1, 100000.00, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1367, 547, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1368, 547, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1369, 552, 1, 100000.00, '1', 100000.00, '2019-07-25', '1', 100000.00, '2019-08-01', '1', 100000.00, '2019-09-09', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1370, 552, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-01', '1', 75000.00, '2019-09-09', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1371, 552, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-01', '1', 0.00, '2019-09-09', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1372, 553, 1, 100000.00, '1', 100000.00, '2019-07-27', '1', 100000.00, '2019-08-31', '1', 100000.00, '2019-09-28', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1373, 553, 2, 75000.00, '1', 75000.00, '2019-07-27', '1', 75000.00, '2019-08-31', '1', 75000.00, '2019-09-28', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1374, 553, 3, 0.00, '1', 0.00, '2019-07-27', '1', 0.00, '2019-08-31', '1', 0.00, '2019-09-28', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1375, 554, 1, 100000.00, '1', 100000.00, '2019-07-25', '1', 100000.00, '2019-08-06', '1', 100000.00, '2019-09-05', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1376, 554, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-09-05', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1377, 554, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-06', '1', 0.00, '2019-09-05', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1378, 555, 1, 100000.00, '1', 100000.00, '2019-07-25', '1', 100000.00, '2019-08-08', '1', 100000.00, '2019-09-05', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1379, 555, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-08', '1', 75000.00, '2019-09-05', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1380, 555, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-08', '1', 0.00, '2019-09-05', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1381, 556, 1, 100000.00, '1', 100000.00, '2019-07-25', '1', 100000.00, '2019-08-06', '1', 100000.00, '2019-09-16', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1382, 556, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-09-16', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1383, 556, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-06', '1', 0.00, '2019-09-16', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1384, 557, 1, 100000.00, '1', 100000.00, '2019-07-25', '1', 100000.00, '2019-08-09', '1', 100000.00, '2019-09-11', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1385, 557, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-09', '1', 75000.00, '2019-09-11', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1386, 557, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-09', '1', 0.00, '2019-09-11', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1387, 558, 1, 100000.00, '1', 100000.00, '2019-07-26', '1', 100000.00, '2019-08-26', '1', 100000.00, '2019-09-26', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1388, 558, 2, 75000.00, '1', 75000.00, '2019-07-26', '1', 75000.00, '2019-08-26', '1', 75000.00, '2019-09-26', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1389, 558, 3, 0.00, '1', 0.00, '2019-07-26', '1', 0.00, '2019-08-26', '1', 0.00, '2019-09-26', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1390, 559, 1, 100000.00, '1', 100000.00, '2019-09-28', '1', 100000.00, '2019-09-28', '1', 100000.00, '2019-09-28', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1391, 559, 2, 75000.00, '1', 75000.00, '2019-09-28', '1', 75000.00, '2019-09-28', '1', 75000.00, '2019-09-28', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1392, 559, 3, 0.00, '1', 0.00, '2019-09-28', '1', 0.00, '2019-09-28', '1', 0.00, '2019-09-28', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1393, 560, 1, 100000.00, '1', 100000.00, '2019-08-05', '1', 100000.00, '2019-08-05', '1', 100000.00, '2019-09-18', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1394, 560, 2, 75000.00, '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-18', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1395, 560, 3, 0.00, '1', 0.00, '2019-08-05', '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-18', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1396, 561, 1, 100000.00, '1', 100000.00, '2019-07-25', '1', 100000.00, '2019-08-05', '1', 100000.00, '2019-09-03', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1397, 561, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-03', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1398, 561, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-03', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1399, 562, 1, 100000.00, '1', 100000.00, '2019-08-12', '1', 100000.00, '2019-08-12', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1400, 562, 2, 75000.00, '1', 75000.00, '2019-08-12', '1', 75000.00, '2019-08-12', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1401, 562, 3, 0.00, '1', 0.00, '2019-08-12', '1', 0.00, '2019-08-12', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1402, 563, 1, 100000.00, '1', 100000.00, '2019-08-07', '1', 100000.00, '2019-08-07', '1', 100000.00, '2019-09-06', '1', 100000.00, '2019-09-23', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1403, 563, 2, 75000.00, '1', 75000.00, '2019-08-07', '1', 75000.00, '2019-08-07', '1', 75000.00, '2019-09-06', '1', 75000.00, '2019-09-23', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1404, 563, 3, 0.00, '1', 0.00, '2019-08-07', '1', 0.00, '2019-08-07', '1', 0.00, '2019-09-06', '1', 0.00, '2019-09-23', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1405, 564, 1, 100000.00, '1', 100000.00, '2019-09-06', '1', 100000.00, '2019-09-06', '1', 100000.00, '2019-09-06', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1406, 564, 2, 75000.00, '1', 75000.00, '2019-09-06', '1', 75000.00, '2019-09-06', '1', 75000.00, '2019-09-06', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1407, 564, 3, 0.00, '1', 0.00, '2019-09-06', '1', 0.00, '2019-09-06', '1', 0.00, '2019-09-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1408, 565, 1, 100000.00, '1', 100000.00, '2019-08-13', '1', 100000.00, '2019-08-13', '1', 100000.00, '2019-09-07', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1409, 565, 2, 75000.00, '1', 75000.00, '2019-08-13', '1', 75000.00, '2019-08-13', '1', 75000.00, '2019-09-07', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1410, 565, 3, 0.00, '1', 0.00, '2019-08-13', '1', 0.00, '2019-08-13', '1', 0.00, '2019-09-07', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1411, 566, 1, 100000.00, '1', 100000.00, '2019-07-25', '1', 100000.00, '2019-08-24', '1', 100000.00, '2019-09-25', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1412, 566, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-24', '1', 75000.00, '2019-09-25', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1413, 566, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-24', '1', 0.00, '2019-09-25', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1414, 567, 1, 100000.00, '1', 100000.00, '2019-07-26', '1', 100000.00, '2019-08-28', '1', 100000.00, '2019-09-27', '1', 100000.00, '2019-09-27', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1415, 567, 2, 75000.00, '1', 75000.00, '2019-07-26', '1', 75000.00, '2019-08-28', '1', 75000.00, '2019-09-27', '1', 75000.00, '2019-09-27', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1416, 567, 3, 0.00, '1', 0.00, '2019-07-26', '1', 0.00, '2019-08-28', '1', 0.00, '2019-09-27', '1', 0.00, '2019-09-27', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1417, 568, 1, 100000.00, '1', 100000.00, '2019-07-25', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1418, 568, 2, 75000.00, '1', 75000.00, '2019-07-25', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1419, 568, 3, 0.00, '1', 0.00, '2019-07-25', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1420, 569, 1, 100000.00, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1421, 569, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1422, 569, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1423, 570, 1, 100000.00, '1', 100000.00, '2019-07-25', '1', 100000.00, '2019-08-09', '1', 100000.00, '2019-09-07', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1424, 570, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-09', '1', 75000.00, '2019-09-07', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1425, 570, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-09', '1', 0.00, '2019-09-07', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1426, 571, 1, 100000.00, '1', 100000.00, '2019-07-25', '1', 100000.00, '2019-09-10', '1', 100000.00, '2019-09-10', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1427, 571, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-09-10', '1', 75000.00, '2019-09-10', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1428, 571, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-09-10', '1', 0.00, '2019-09-10', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1429, 572, 1, 100000.00, '1', 100000.00, '2019-07-25', '1', 100000.00, '2019-08-20', '1', 100000.00, '2019-09-06', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1430, 572, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-20', '1', 75000.00, '2019-09-06', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1431, 572, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-20', '1', 0.00, '2019-09-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1432, 573, 1, 100000.00, '1', 100000.00, '2019-07-31', '1', 100000.00, '2019-08-19', '1', 100000.00, '2019-09-10', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1433, 573, 2, 75000.00, '1', 75000.00, '2019-07-31', '1', 75000.00, '2019-08-19', '1', 75000.00, '2019-09-10', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1434, 573, 3, 0.00, '1', 0.00, '2019-07-31', '1', 0.00, '2019-08-19', '1', 0.00, '2019-09-10', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1435, 574, 1, 100000.00, '1', 100000.00, '2019-08-19', '1', 100000.00, '2019-08-19', '1', 100000.00, '2019-09-17', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1436, 574, 2, 75000.00, '1', 75000.00, '2019-08-19', '1', 75000.00, '2019-08-19', '1', 75000.00, '2019-09-17', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1437, 574, 3, 0.00, '1', 0.00, '2019-08-19', '1', 0.00, '2019-08-19', '1', 0.00, '2019-09-17', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1438, 575, 1, 100000.00, '1', 100000.00, '2019-09-06', '1', 100000.00, '2019-09-06', '1', 100000.00, '2019-09-06', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1439, 575, 2, 75000.00, '1', 75000.00, '2019-09-06', '1', 75000.00, '2019-09-06', '1', 75000.00, '2019-09-06', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1440, 575, 3, 0.00, '1', 0.00, '2019-09-06', '1', 0.00, '2019-09-06', '1', 0.00, '2019-09-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1441, 576, 1, 100000.00, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1442, 576, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1443, 576, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1444, 577, 1, 100000.00, '1', 100000.00, '2019-08-08', '1', 100000.00, '2019-08-08', '1', 100000.00, '2019-09-23', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1445, 577, 2, 75000.00, '1', 75000.00, '2019-08-08', '1', 75000.00, '2019-08-08', '1', 75000.00, '2019-09-23', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1446, 577, 3, 0.00, '1', 0.00, '2019-08-08', '1', 0.00, '2019-08-08', '1', 0.00, '2019-09-23', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1447, 578, 1, 100000.00, '1', 100000.00, '2019-07-25', '1', 100000.00, '2019-08-07', '1', 100000.00, '2019-09-07', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1448, 578, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-07', '1', 75000.00, '2019-09-07', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1449, 578, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-07', '1', 0.00, '2019-09-07', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1450, 579, 1, 100000.00, '1', 100000.00, '2019-08-30', '1', 100000.00, '2019-08-30', '1', 100000.00, '2019-09-17', '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL, '0', 100000.00, NULL),
(1451, 579, 2, 75000.00, '1', 75000.00, '2019-08-30', '1', 75000.00, '2019-08-30', '1', 75000.00, '2019-09-17', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1452, 579, 3, 0.00, '1', 0.00, '2019-08-30', '1', 0.00, '2019-08-30', '1', 0.00, '2019-09-17', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1453, 583, 1, 160000.00, '1', 160000.00, '2019-07-26', '1', 160000.00, '2019-08-07', '1', 160000.00, '2019-09-11', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1454, 583, 2, 75000.00, '1', 75000.00, '2019-07-26', '1', 75000.00, '2019-08-07', '1', 75000.00, '2019-09-11', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1455, 583, 3, 0.00, '1', 0.00, '2019-07-26', '1', 0.00, '2019-08-07', '1', 0.00, '2019-09-11', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1456, 584, 1, 160000.00, '1', 160000.00, '2019-07-25', '1', 160000.00, '2019-08-09', '1', 160000.00, '2019-09-09', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1457, 584, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-09', '1', 75000.00, '2019-09-09', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL);
INSERT INTO `t103_daf_kelas_siswa_iuran` (`id`, `daf_kelas_siswa_id`, `iuran_id`, `Jumlah`, `byr01`, `jml01`, `tgl01`, `byr02`, `jml02`, `tgl02`, `byr03`, `jml03`, `tgl03`, `byr04`, `jml04`, `tgl04`, `byr05`, `jml05`, `tgl05`, `byr06`, `jml06`, `tgl06`, `byr07`, `jml07`, `tgl07`, `byr08`, `jml08`, `tgl08`, `byr09`, `jml09`, `tgl09`, `byr10`, `jml10`, `tgl10`, `byr11`, `jml11`, `tgl11`, `byr12`, `jml12`, `tgl12`) VALUES
(1458, 584, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-09', '1', 0.00, '2019-09-09', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1459, 585, 1, 160000.00, '1', 160000.00, '2019-07-25', '1', 160000.00, '2019-08-06', '1', 160000.00, '2019-09-05', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1460, 585, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-09-05', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1461, 585, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-06', '1', 0.00, '2019-09-05', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1462, 586, 1, 160000.00, '1', 160000.00, '2019-08-12', '1', 160000.00, '2019-08-12', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1463, 586, 2, 75000.00, '1', 75000.00, '2019-08-12', '1', 75000.00, '2019-08-12', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1464, 586, 3, 0.00, '1', 0.00, '2019-08-12', '1', 0.00, '2019-08-12', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1465, 587, 1, 160000.00, '1', 160000.00, '2019-07-25', '1', 160000.00, '2019-08-01', '1', 160000.00, '2019-09-26', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1466, 587, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-01', '1', 75000.00, '2019-09-26', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1467, 587, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-01', '1', 0.00, '2019-09-26', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1468, 588, 1, 160000.00, '1', 160000.00, '2019-08-01', '1', 160000.00, '2019-08-01', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1469, 588, 2, 75000.00, '1', 75000.00, '2019-08-01', '1', 75000.00, '2019-08-01', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1470, 588, 3, 0.00, '1', 0.00, '2019-08-01', '1', 0.00, '2019-08-01', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1471, 589, 1, 160000.00, '1', 160000.00, '2019-08-06', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1472, 589, 2, 75000.00, '1', 75000.00, '2019-08-06', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1473, 589, 3, 0.00, '1', 0.00, '2019-08-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1474, 590, 1, 160000.00, '1', 160000.00, '2019-07-25', '1', 160000.00, '2019-08-23', '1', 160000.00, '2019-09-12', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1475, 590, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-23', '1', 75000.00, '2019-09-12', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1476, 590, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-23', '1', 0.00, '2019-09-12', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1477, 591, 1, 160000.00, '1', 160000.00, '2019-07-25', '1', 160000.00, '2019-08-02', '1', 160000.00, '2019-09-10', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1478, 591, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-02', '1', 75000.00, '2019-09-10', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1479, 591, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-02', '1', 0.00, '2019-09-10', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1480, 592, 1, 160000.00, '1', 160000.00, '2019-08-31', '1', 160000.00, '2019-08-31', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1481, 592, 2, 75000.00, '1', 75000.00, '2019-08-31', '1', 75000.00, '2019-08-31', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1482, 592, 3, 0.00, '1', 0.00, '2019-08-31', '1', 0.00, '2019-08-31', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1483, 593, 1, 160000.00, '1', 160000.00, '2019-07-25', '1', 160000.00, '2019-08-06', '1', 160000.00, '2019-09-11', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1484, 593, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-09-11', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1485, 593, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-06', '1', 0.00, '2019-09-11', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1486, 594, 1, 160000.00, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1487, 594, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1488, 594, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1489, 595, 1, 160000.00, '1', 160000.00, '2019-09-12', '1', 160000.00, '2019-09-12', '1', 160000.00, '2019-09-12', '1', 160000.00, '2019-09-12', '1', 160000.00, '2019-09-12', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1490, 595, 2, 75000.00, '1', 75000.00, '2019-09-12', '1', 75000.00, '2019-09-12', '1', 75000.00, '2019-09-12', '1', 75000.00, '2019-09-12', '1', 75000.00, '2019-09-12', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1491, 595, 3, 0.00, '1', 0.00, '2019-09-12', '1', 0.00, '2019-09-12', '1', 0.00, '2019-09-12', '1', 0.00, '2019-09-12', '1', 0.00, '2019-09-12', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1492, 596, 1, 160000.00, '1', 160000.00, '2019-07-25', '1', 160000.00, '2019-08-05', '1', 160000.00, '2019-09-02', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1493, 596, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-02', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1494, 596, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-02', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1495, 597, 1, 160000.00, '1', 160000.00, '2019-07-25', '1', 160000.00, '2019-08-20', '1', 160000.00, '2019-09-11', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1496, 597, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-20', '1', 75000.00, '2019-09-11', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1497, 597, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-20', '1', 0.00, '2019-09-11', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1498, 598, 1, 160000.00, '1', 160000.00, '2019-08-12', '1', 160000.00, '2019-09-12', '1', 160000.00, '2019-09-12', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1499, 598, 2, 75000.00, '1', 75000.00, '2019-08-12', '1', 75000.00, '2019-09-12', '1', 75000.00, '2019-09-12', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1500, 598, 3, 0.00, '1', 0.00, '2019-08-12', '1', 0.00, '2019-09-12', '1', 0.00, '2019-09-12', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1501, 599, 1, 160000.00, '1', 160000.00, '2019-08-03', '1', 160000.00, '2019-08-03', '1', 160000.00, '2019-09-12', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1502, 599, 2, 75000.00, '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-09-12', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1503, 599, 3, 0.00, '1', 0.00, '2019-08-03', '1', 0.00, '2019-08-03', '1', 0.00, '2019-09-12', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1504, 600, 1, 160000.00, '1', 160000.00, '2019-07-25', '1', 160000.00, '2019-08-02', '1', 160000.00, '2019-09-21', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1505, 600, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-02', '1', 75000.00, '2019-09-21', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1506, 600, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-02', '1', 0.00, '2019-09-21', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1507, 601, 1, 160000.00, '1', 160000.00, '2019-07-25', '1', 160000.00, '2019-09-11', '1', 160000.00, '2019-09-20', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1508, 601, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-09-11', '1', 75000.00, '2019-09-20', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1509, 601, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-09-11', '1', 0.00, '2019-09-20', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1510, 602, 1, 160000.00, '1', 160000.00, '2019-08-31', '1', 160000.00, '2019-08-31', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1511, 602, 2, 75000.00, '1', 75000.00, '2019-08-31', '1', 75000.00, '2019-08-31', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1512, 602, 3, 0.00, '1', 0.00, '2019-08-31', '1', 0.00, '2019-08-31', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1513, 603, 1, 160000.00, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1514, 603, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1515, 603, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1516, 604, 1, 160000.00, '1', 160000.00, '2019-07-25', '1', 160000.00, '2019-08-15', '1', 160000.00, '2019-09-12', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1517, 604, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-15', '1', 75000.00, '2019-09-12', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1518, 604, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-15', '1', 0.00, '2019-09-12', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1519, 605, 1, 160000.00, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1520, 605, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1521, 605, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1522, 606, 1, 160000.00, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1523, 606, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1524, 606, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1525, 607, 1, 160000.00, '1', 160000.00, '2019-08-13', '1', 160000.00, '2019-08-13', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1526, 607, 2, 75000.00, '1', 75000.00, '2019-08-13', '1', 75000.00, '2019-08-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1527, 607, 3, 0.00, '1', 0.00, '2019-08-13', '1', 0.00, '2019-08-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1528, 614, 1, 160000.00, '1', 160000.00, '2019-07-31', '1', 160000.00, '2019-07-31', '1', 160000.00, '2019-09-06', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1529, 614, 2, 75000.00, '1', 75000.00, '2019-07-31', '1', 75000.00, '2019-07-31', '1', 75000.00, '2019-09-06', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1530, 614, 3, 0.00, '1', 0.00, '2019-07-31', '1', 0.00, '2019-07-31', '1', 0.00, '2019-09-06', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1531, 615, 1, 160000.00, '1', 160000.00, '2019-07-26', '1', 160000.00, '2019-08-09', '1', 160000.00, '2019-09-21', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1532, 615, 2, 75000.00, '1', 75000.00, '2019-07-26', '1', 75000.00, '2019-08-09', '1', 75000.00, '2019-09-21', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1533, 615, 3, 0.00, '1', 0.00, '2019-07-26', '1', 0.00, '2019-08-09', '1', 0.00, '2019-09-21', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1534, 616, 1, 160000.00, '1', 160000.00, '2019-09-10', '1', 160000.00, '2019-09-10', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1535, 616, 2, 75000.00, '1', 75000.00, '2019-09-10', '1', 75000.00, '2019-09-10', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1536, 616, 3, 0.00, '1', 0.00, '2019-09-10', '1', 0.00, '2019-09-10', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1537, 617, 1, 160000.00, '1', 160000.00, '2019-08-07', '1', 160000.00, '2019-08-07', '1', 160000.00, '2019-09-07', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1538, 617, 2, 75000.00, '1', 75000.00, '2019-08-07', '1', 75000.00, '2019-08-07', '1', 75000.00, '2019-09-07', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1539, 617, 3, 0.00, '1', 0.00, '2019-08-07', '1', 0.00, '2019-08-07', '1', 0.00, '2019-09-07', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1540, 618, 1, 160000.00, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1541, 618, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1542, 618, 3, 0.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1543, 619, 1, 160000.00, '1', 160000.00, '2019-08-26', '1', 160000.00, '2019-09-16', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1544, 619, 2, 75000.00, '1', 75000.00, '2019-08-26', '1', 75000.00, '2019-09-16', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1545, 619, 3, 0.00, '1', 0.00, '2019-08-26', '1', 0.00, '2019-09-16', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1546, 620, 1, 160000.00, '1', 160000.00, '2019-07-25', '1', 160000.00, '2019-08-08', '1', 160000.00, '2019-09-13', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1547, 620, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-08', '1', 75000.00, '2019-09-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1548, 620, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-08', '1', 0.00, '2019-09-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1549, 621, 1, 160000.00, '1', 160000.00, '2019-07-27', '1', 160000.00, '2019-09-16', '1', 160000.00, '2019-09-16', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1550, 621, 2, 75000.00, '1', 75000.00, '2019-07-27', '1', 75000.00, '2019-09-16', '1', 75000.00, '2019-09-16', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1551, 621, 3, 0.00, '1', 0.00, '2019-07-27', '1', 0.00, '2019-09-16', '1', 0.00, '2019-09-16', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1552, 622, 1, 160000.00, '1', 160000.00, '2019-08-03', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1553, 622, 2, 75000.00, '1', 75000.00, '2019-08-03', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1554, 622, 3, 0.00, '1', 0.00, '2019-08-03', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1555, 623, 1, 160000.00, '1', 160000.00, '2019-07-25', '1', 160000.00, '2019-08-12', '1', 160000.00, '2019-09-03', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1556, 623, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-12', '1', 75000.00, '2019-09-03', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1557, 623, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-12', '1', 0.00, '2019-09-03', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1558, 624, 1, 160000.00, '1', 160000.00, '2019-07-25', '1', 160000.00, '2019-08-15', '1', 160000.00, '2019-09-10', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1559, 624, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-15', '1', 75000.00, '2019-09-10', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1560, 624, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-15', '1', 0.00, '2019-09-10', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1561, 625, 1, 160000.00, '1', 160000.00, '2019-07-25', '1', 160000.00, '2019-08-13', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1562, 625, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1563, 625, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1564, 626, 1, 160000.00, '1', 160000.00, '2019-07-26', '1', 160000.00, '2019-08-21', '1', 160000.00, '2019-09-17', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1565, 626, 2, 75000.00, '1', 75000.00, '2019-07-26', '1', 75000.00, '2019-08-21', '1', 75000.00, '2019-09-17', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1566, 626, 3, 0.00, '1', 0.00, '2019-07-26', '1', 0.00, '2019-08-21', '1', 0.00, '2019-09-17', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1567, 627, 1, 160000.00, '1', 160000.00, '2019-07-25', '1', 160000.00, '2019-08-05', '1', 160000.00, '2019-09-05', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1568, 627, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-05', '1', 75000.00, '2019-09-05', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1569, 627, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-05', '1', 0.00, '2019-09-05', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1570, 628, 1, 160000.00, '1', 160000.00, '2019-07-25', '1', 160000.00, '2019-08-06', '1', 160000.00, '2019-09-02', '1', 160000.00, '2019-09-02', '1', 160000.00, '2019-09-02', '1', 160000.00, '2019-09-02', '1', 160000.00, '2019-09-02', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1571, 628, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-06', '1', 75000.00, '2019-09-02', '1', 75000.00, '2019-09-02', '1', 75000.00, '2019-09-02', '1', 75000.00, '2019-09-02', '1', 75000.00, '2019-09-02', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1572, 628, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-06', '1', 0.00, '2019-09-02', '1', 0.00, '2019-09-02', '1', 0.00, '2019-09-02', '1', 0.00, '2019-09-02', '1', 0.00, '2019-09-02', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1573, 629, 1, 160000.00, '1', 160000.00, '2019-07-27', '1', 160000.00, '2019-08-26', '1', 160000.00, '2019-09-24', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1574, 629, 2, 75000.00, '1', 75000.00, '2019-07-27', '1', 75000.00, '2019-08-26', '1', 75000.00, '2019-09-24', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1575, 629, 3, 0.00, '1', 0.00, '2019-07-27', '1', 0.00, '2019-08-26', '1', 0.00, '2019-09-24', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1576, 630, 1, 160000.00, '1', 160000.00, '2019-07-30', '1', 160000.00, '2019-09-20', '1', 160000.00, '2019-09-20', '1', 160000.00, '2019-09-23', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1577, 630, 2, 75000.00, '1', 75000.00, '2019-07-30', '1', 75000.00, '2019-09-20', '1', 75000.00, '2019-09-20', '1', 75000.00, '2019-09-23', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1578, 630, 3, 0.00, '1', 0.00, '2019-07-30', '1', 0.00, '2019-09-20', '1', 0.00, '2019-09-20', '1', 0.00, '2019-09-23', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1579, 631, 1, 160000.00, '1', 160000.00, '2019-08-02', '1', 160000.00, '2019-08-02', '1', 160000.00, '2019-09-10', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1580, 631, 2, 75000.00, '1', 75000.00, '2019-08-02', '1', 75000.00, '2019-08-02', '1', 75000.00, '2019-09-10', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1581, 631, 3, 0.00, '1', 0.00, '2019-08-02', '1', 0.00, '2019-08-02', '1', 0.00, '2019-09-10', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1582, 632, 1, 160000.00, '1', 160000.00, '2019-07-25', '1', 160000.00, '2019-08-03', '1', 160000.00, '2019-09-03', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1583, 632, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-03', '1', 75000.00, '2019-09-03', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1584, 632, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-03', '1', 0.00, '2019-09-03', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1585, 633, 1, 160000.00, '1', 160000.00, '2019-08-08', '1', 160000.00, '2019-08-08', '1', 160000.00, '2019-09-12', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1586, 633, 2, 75000.00, '1', 75000.00, '2019-08-08', '1', 75000.00, '2019-08-08', '1', 75000.00, '2019-09-12', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1587, 633, 3, 0.00, '1', 0.00, '2019-08-08', '1', 0.00, '2019-08-08', '1', 0.00, '2019-09-12', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1588, 634, 1, 160000.00, '1', 160000.00, '2019-07-25', '1', 160000.00, '2019-09-16', '1', 160000.00, '2019-09-16', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1589, 634, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-09-16', '1', 75000.00, '2019-09-16', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1590, 634, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-09-16', '1', 0.00, '2019-09-16', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1591, 635, 1, 160000.00, '1', 160000.00, '2019-07-31', '1', 160000.00, '2019-07-31', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1592, 635, 2, 75000.00, '1', 75000.00, '2019-07-31', '1', 75000.00, '2019-07-31', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1593, 635, 3, 0.00, '1', 0.00, '2019-07-31', '1', 0.00, '2019-07-31', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1594, 636, 1, 160000.00, '1', 160000.00, '2019-07-25', '1', 160000.00, '2019-08-08', '1', 160000.00, '2019-09-02', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1595, 636, 2, 75000.00, '1', 75000.00, '2019-07-25', '1', 75000.00, '2019-08-08', '1', 75000.00, '2019-09-02', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1596, 636, 3, 0.00, '1', 0.00, '2019-07-25', '1', 0.00, '2019-08-08', '1', 0.00, '2019-09-02', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1597, 637, 1, 160000.00, '1', 160000.00, '2019-08-22', '1', 160000.00, '2019-08-22', '1', 160000.00, '2019-09-16', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1598, 637, 2, 75000.00, '1', 75000.00, '2019-08-22', '1', 75000.00, '2019-08-22', '1', 75000.00, '2019-09-16', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1599, 637, 3, 0.00, '1', 0.00, '2019-08-22', '1', 0.00, '2019-08-22', '1', 0.00, '2019-09-16', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1600, 638, 1, 160000.00, '1', 160000.00, '2019-08-22', '1', 160000.00, '2019-08-22', '1', 160000.00, '2019-09-16', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1601, 638, 2, 75000.00, '1', 75000.00, '2019-08-22', '1', 75000.00, '2019-08-22', '1', 75000.00, '2019-09-16', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1602, 638, 3, 0.00, '1', 0.00, '2019-08-22', '1', 0.00, '2019-08-22', '1', 0.00, '2019-09-16', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1603, 639, 1, 160000.00, '1', 160000.00, '2019-07-27', '1', 160000.00, '2019-08-10', '1', 160000.00, '2019-09-13', '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL, '0', 160000.00, NULL),
(1604, 639, 2, 75000.00, '1', 75000.00, '2019-07-27', '1', 75000.00, '2019-08-10', '1', 75000.00, '2019-09-13', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1605, 639, 3, 0.00, '1', 0.00, '2019-07-27', '1', 0.00, '2019-08-10', '1', 0.00, '2019-09-13', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1606, 1, 6, 100000.00, '1', 25000.00, '2019-10-03', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1607, 2, 6, 125000.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1608, 3, 6, 135000.00, '1', 25000.00, '2019-10-03', '1', 35000.00, '2019-10-04', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1609, 78, 6, 175000.00, '1', 45000.00, '2019-07-30', '1', 25000.00, '2019-07-31', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1610, 4, 6, 185000.00, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1611, 5, 6, 200000.00, '1', 75000.00, '2019-10-05', '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL, '0', 0.00, NULL),
(1613, 6, 6, 250000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1614, 7, 6, 350000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1615, 8, 6, 400000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1616, 9, 6, 400000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1617, 11, 6, 402000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1618, 12, 6, 402000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1619, 13, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1620, 14, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1621, 15, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1622, 16, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1623, 17, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1624, 18, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1625, 19, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1626, 20, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1627, 32, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1628, 33, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1629, 34, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1630, 35, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1631, 36, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00');
INSERT INTO `t103_daf_kelas_siswa_iuran` (`id`, `daf_kelas_siswa_id`, `iuran_id`, `Jumlah`, `byr01`, `jml01`, `tgl01`, `byr02`, `jml02`, `tgl02`, `byr03`, `jml03`, `tgl03`, `byr04`, `jml04`, `tgl04`, `byr05`, `jml05`, `tgl05`, `byr06`, `jml06`, `tgl06`, `byr07`, `jml07`, `tgl07`, `byr08`, `jml08`, `tgl08`, `byr09`, `jml09`, `tgl09`, `byr10`, `jml10`, `tgl10`, `byr11`, `jml11`, `tgl11`, `byr12`, `jml12`, `tgl12`) VALUES
(1632, 37, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1633, 38, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1634, 39, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1635, 40, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1636, 41, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1637, 42, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1638, 43, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1639, 44, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1640, 45, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1641, 46, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1642, 47, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1643, 48, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1644, 49, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1645, 50, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1646, 51, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1647, 52, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1648, 53, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1649, 54, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1650, 55, 6, 403000.00, '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00', '0', 0.00, '0000-00-00'),
(1651, 640, 1, 135000.00, '1', 135000.00, '2019-07-01', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(1652, 640, 2, 75000.00, '1', 75000.00, '2019-07-01', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL),
(1653, 641, 1, 135000.00, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '1', 135000.00, '2019-10-01', '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL, '0', 135000.00, NULL),
(1654, 641, 2, 75000.00, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '1', 75000.00, '2019-10-01', '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL, '0', 75000.00, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t301_employees`
--

CREATE TABLE `t301_employees` (
  `EmployeeID` int(11) NOT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `FirstName` varchar(10) DEFAULT NULL,
  `Title` varchar(30) DEFAULT NULL,
  `TitleOfCourtesy` varchar(25) DEFAULT NULL,
  `BirthDate` datetime DEFAULT NULL,
  `HireDate` datetime DEFAULT NULL,
  `Address` varchar(60) DEFAULT NULL,
  `City` varchar(15) DEFAULT NULL,
  `Region` varchar(15) DEFAULT NULL,
  `PostalCode` varchar(10) DEFAULT NULL,
  `Country` varchar(15) DEFAULT NULL,
  `HomePhone` varchar(24) DEFAULT NULL,
  `Extension` varchar(4) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `Notes` longtext DEFAULT NULL,
  `ReportsTo` int(11) DEFAULT NULL,
  `Password` varchar(50) NOT NULL DEFAULT '',
  `UserLevel` int(11) DEFAULT NULL,
  `Username` varchar(20) NOT NULL DEFAULT '',
  `Activated` enum('Y','N') NOT NULL DEFAULT 'N',
  `Profile` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t301_employees`
--

INSERT INTO `t301_employees` (`EmployeeID`, `LastName`, `FirstName`, `Title`, `TitleOfCourtesy`, `BirthDate`, `HireDate`, `Address`, `City`, `Region`, `PostalCode`, `Country`, `HomePhone`, `Extension`, `Email`, `Photo`, `Notes`, `ReportsTo`, `Password`, `UserLevel`, `Username`, `Activated`, `Profile`) VALUES
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21232f297a57a5a743894a0e4a801fc3', -1, 'admin', 'Y', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t302_userlevels`
--

CREATE TABLE `t302_userlevels` (
  `userlevelid` int(11) NOT NULL,
  `userlevelname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t302_userlevels`
--

INSERT INTO `t302_userlevels` (`userlevelid`, `userlevelname`) VALUES
(-2, 'Anonymous'),
(-1, 'Administrator'),
(0, 'Default');

-- --------------------------------------------------------

--
-- Table structure for table `t303_userlevelpermissions`
--

CREATE TABLE `t303_userlevelpermissions` (
  `userlevelid` int(11) NOT NULL,
  `tablename` varchar(255) NOT NULL,
  `permission` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t303_userlevelpermissions`
--

INSERT INTO `t303_userlevelpermissions` (`userlevelid`, `tablename`, `permission`) VALUES
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}c301_home.php', 72),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t001_tahun_ajaran', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t002_sekolah', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t003_kelas', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t004_siswa', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t005_iuran', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t101_daf_kelas', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t102_daf_kelas_siswa', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t103_daf_kelas_siswa_iuran', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t104_daf_kelas_siswa_bayar', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t301_employees', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t302_userlevels', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t303_userlevelpermissions', 0),
(-2, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t304_audittrail', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}c301_home.php', 72),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t001_tahun_ajaran', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t002_sekolah', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t003_kelas', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t004_siswa', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t005_iuran', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t101_daf_kelas', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t102_daf_kelas_siswa', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t103_daf_kelas_siswa_iuran', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t104_daf_kelas_siswa_bayar', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t301_employees', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t302_userlevels', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t303_userlevelpermissions', 0),
(-2, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t304_audittrail', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}c301_home.php', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t001_tahun_ajaran', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t002_sekolah', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t003_kelas', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t004_siswa', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t005_iuran', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t101_daftar_absen', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t102_daftar_iuran', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t103_daftar_pembayaran', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t301_employees', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t302_userlevels', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t303_userlevelpermissions', 0),
(-2, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t304_audittrail', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}c301_home.php', 111),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t001_tahun_ajaran', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t002_sekolah', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t003_kelas', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t004_siswa', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t005_iuran', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t101_daf_kelas', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t102_daf_kelas_siswa', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t103_daf_kelas_siswa_iuran', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t301_employees', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t302_userlevels', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t303_userlevelpermissions', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t304_audit_trail', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v101_daf_kelas', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v102_daf_kelas_siswa', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v103_daf_kelas_siswa_iuran', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v104_pembayaran', 0),
(-2, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v105_lap_bayar', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t001_tahun_ajaran', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t002_sekolah', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t003_kelas', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t004_siswa', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t005_iuran', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t101_daf_kelas', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t102_daf_kelas_siswa', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t103_daf_kelas_siswa_iuran', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t301_employees', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t302_userlevels', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t303_userlevelpermissions', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t304_audit_trail', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v101_daf_kelas', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v102_daf_kelas_siswa', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v103_daf_kelas_siswa_iuran', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v104_pembayaran', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v105_lap_bayar', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v106_tunggakan', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v107_lap_tunggak', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v108_lap_um', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v109_lap_pum', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v110_bukti_master', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v111_daf_kelas_iuran', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v112_daf_kelas_siswa_iuran', 0),
(-2, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v113_export_siswa_iuran', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}c301_home.php', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t001_tahun_ajaran', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t002_sekolah', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t003_kelas', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t004_siswa', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t005_iuran', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t101_daf_kelas', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t102_daf_kelas_siswa', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t103_daf_kelas_siswa_iuran', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t104_daf_kelas_siswa_bayar', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t301_employees', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t302_userlevels', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t303_userlevelpermissions', 0),
(0, '{1409A40E-D003-4D1D-B732-9DF53640D0A4}t304_audittrail', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}c301_home.php', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t001_tahun_ajaran', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t002_sekolah', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t003_kelas', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t004_siswa', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t005_iuran', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t101_daf_kelas', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t102_daf_kelas_siswa', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t103_daf_kelas_siswa_iuran', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t104_daf_kelas_siswa_bayar', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t301_employees', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t302_userlevels', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t303_userlevelpermissions', 0),
(0, '{33D50CE9-E46C-4B88-9A98-C65A13619DFB}t304_audittrail', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}c301_home.php', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t001_tahun_ajaran', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t002_sekolah', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t003_kelas', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t004_siswa', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t005_iuran', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t101_daftar_absen', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t102_daftar_iuran', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t103_daftar_pembayaran', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t301_employees', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t302_userlevels', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t303_userlevelpermissions', 0),
(0, '{4D0E795E-2F5E-4DF8-A743-62AFF2B67E32}t304_audittrail', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}c301_home.php', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t001_tahun_ajaran', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t002_sekolah', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t003_kelas', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t004_siswa', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t005_iuran', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t101_daf_kelas', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t102_daf_kelas_siswa', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t103_daf_kelas_siswa_iuran', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t301_employees', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t302_userlevels', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t303_userlevelpermissions', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}t304_audit_trail', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v101_daf_kelas', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v102_daf_kelas_siswa', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v103_daf_kelas_siswa_iuran', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v104_pembayaran', 0),
(0, '{D97AB052-DD0F-4E43-8766-C499FD89B1B8}v105_lap_bayar', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t001_tahun_ajaran', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t002_sekolah', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t003_kelas', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t004_siswa', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t005_iuran', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t101_daf_kelas', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t102_daf_kelas_siswa', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t103_daf_kelas_siswa_iuran', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t301_employees', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t302_userlevels', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t303_userlevelpermissions', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}t304_audit_trail', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v101_daf_kelas', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v102_daf_kelas_siswa', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v103_daf_kelas_siswa_iuran', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v104_pembayaran', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v105_lap_bayar', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v106_tunggakan', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v107_lap_tunggak', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v108_lap_um', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v109_lap_pum', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v110_bukti_master', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v111_daf_kelas_iuran', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v112_daf_kelas_siswa_iuran', 0),
(0, '{E35313A1-BDC4-466C-B9BC-088D7A329967}v113_export_siswa_iuran', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t304_audit_trail`
--

CREATE TABLE `t304_audit_trail` (
  `id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `script` varchar(80) DEFAULT NULL,
  `user` varchar(80) DEFAULT NULL,
  `action` varchar(80) DEFAULT NULL,
  `table` varchar(80) DEFAULT NULL,
  `field` varchar(80) DEFAULT NULL,
  `keyvalue` longtext DEFAULT NULL,
  `oldvalue` longtext DEFAULT NULL,
  `newvalue` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t304_audit_trail`
--

INSERT INTO `t304_audit_trail` (`id`, `datetime`, `script`, `user`, `action`, `table`, `field`, `keyvalue`, `oldvalue`, `newvalue`) VALUES
(1, '2019-11-08 10:27:57', '/pembayaran37/login.php', 'admin', 'login', '::1', '', '', '', ''),
(2, '2019-11-08 10:29:05', '/pembayaran37/t002_sekolahadd.php', '11', 'A', 't002_sekolah', 'Nama', '3', '', 'KB NURUL ULUM'),
(3, '2019-11-08 10:29:05', '/pembayaran37/t002_sekolahadd.php', '11', 'A', 't002_sekolah', 'Alamat', '3', '', '-'),
(4, '2019-11-08 10:29:05', '/pembayaran37/t002_sekolahadd.php', '11', 'A', 't002_sekolah', 'id', '3', '', '3'),
(5, '2019-11-08 10:29:27', '/pembayaran37/t003_kelasadd.php', '11', 'A', 't003_kelas', 'Nama', '21', '', 'KELOMPOK BERMAIN'),
(6, '2019-11-08 10:29:27', '/pembayaran37/t003_kelasadd.php', '11', 'A', 't003_kelas', 'id', '21', '', '21'),
(7, '2019-11-08 10:39:50', '/pembayaran37/t004_siswaadd.php', '11', 'A', 't004_siswa', 'NomorInduk', '560', '', '3061'),
(8, '2019-11-08 10:39:50', '/pembayaran37/t004_siswaadd.php', '11', 'A', 't004_siswa', 'Nama', '560', '', 'Shlahuddin Ibnudera'),
(9, '2019-11-08 10:39:50', '/pembayaran37/t004_siswaadd.php', '11', 'A', 't004_siswa', 'id', '560', '', '560'),
(10, '2019-11-08 10:40:48', '/pembayaran37/t102_daf_kelas_siswalist.php', '11', '*** Batch insert begin ***', 't102_daf_kelas_siswa', '', '', '', ''),
(11, '2019-11-08 10:40:48', '/pembayaran37/t102_daf_kelas_siswalist.php', '11', 'A', 't102_daf_kelas_siswa', 'siswa_id', '640', '', '560'),
(12, '2019-11-08 10:40:48', '/pembayaran37/t102_daf_kelas_siswalist.php', '11', 'A', 't102_daf_kelas_siswa', 'daf_kelas_id', '640', '', '9'),
(13, '2019-11-08 10:40:48', '/pembayaran37/t102_daf_kelas_siswalist.php', '11', 'A', 't102_daf_kelas_siswa', 'id', '640', '', '640'),
(14, '2019-11-08 10:40:48', '/pembayaran37/t102_daf_kelas_siswalist.php', '11', '*** Batch insert successful ***', 't102_daf_kelas_siswa', '', '', '', ''),
(15, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', '*** Batch insert begin ***', 't103_daf_kelas_siswa_iuran', '', '', '', ''),
(16, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'iuran_id', '1651', '', '1'),
(17, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'Jumlah', '1651', '', '135000'),
(18, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml01', '1651', '', '135000'),
(19, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl01', '1651', '', NULL),
(20, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml02', '1651', '', '135000'),
(21, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl02', '1651', '', NULL),
(22, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml03', '1651', '', '135000'),
(23, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl03', '1651', '', NULL),
(24, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml04', '1651', '', '135000'),
(25, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl04', '1651', '', NULL),
(26, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml05', '1651', '', '135000'),
(27, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl05', '1651', '', NULL),
(28, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml06', '1651', '', '135000'),
(29, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl06', '1651', '', NULL),
(30, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml07', '1651', '', '135000'),
(31, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl07', '1651', '', NULL),
(32, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml08', '1651', '', '135000'),
(33, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl08', '1651', '', NULL),
(34, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml09', '1651', '', '135000'),
(35, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl09', '1651', '', NULL),
(36, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml10', '1651', '', '135000'),
(37, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl10', '1651', '', NULL),
(38, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml11', '1651', '', '135000'),
(39, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl11', '1651', '', NULL),
(40, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml12', '1651', '', '135000'),
(41, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl12', '1651', '', NULL),
(42, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'daf_kelas_siswa_id', '1651', '', '640'),
(43, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'id', '1651', '', '1651'),
(44, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'iuran_id', '1652', '', '2'),
(45, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'Jumlah', '1652', '', '75000'),
(46, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml01', '1652', '', '75000'),
(47, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl01', '1652', '', NULL),
(48, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml02', '1652', '', '75000'),
(49, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl02', '1652', '', NULL),
(50, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml03', '1652', '', '75000'),
(51, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl03', '1652', '', NULL),
(52, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml04', '1652', '', '75000'),
(53, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl04', '1652', '', NULL),
(54, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml05', '1652', '', '75000'),
(55, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl05', '1652', '', NULL),
(56, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml06', '1652', '', '75000'),
(57, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl06', '1652', '', NULL),
(58, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml07', '1652', '', '75000'),
(59, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl07', '1652', '', NULL),
(60, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml08', '1652', '', '75000'),
(61, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl08', '1652', '', NULL),
(62, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml09', '1652', '', '75000'),
(63, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl09', '1652', '', NULL),
(64, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml10', '1652', '', '75000'),
(65, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl10', '1652', '', NULL),
(66, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml11', '1652', '', '75000'),
(67, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl11', '1652', '', NULL),
(68, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml12', '1652', '', '75000'),
(69, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl12', '1652', '', NULL),
(70, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'daf_kelas_siswa_id', '1652', '', '640'),
(71, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'id', '1652', '', '1652'),
(72, '2019-11-08 10:55:08', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', '*** Batch insert successful ***', 't103_daf_kelas_siswa_iuran', '', '', '', ''),
(73, '2019-11-08 10:55:44', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', '*** Batch update begin ***', 't103_daf_kelas_siswa_iuran', '', '', '', ''),
(74, '2019-11-08 10:55:44', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'U', 't103_daf_kelas_siswa_iuran', 'byr01', '1651', '0', '1'),
(75, '2019-11-08 10:55:44', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'U', 't103_daf_kelas_siswa_iuran', 'tgl01', '1651', NULL, '2019-07-01'),
(76, '2019-11-08 10:55:44', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'U', 't103_daf_kelas_siswa_iuran', 'byr01', '1652', '0', '1'),
(77, '2019-11-08 10:55:44', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'U', 't103_daf_kelas_siswa_iuran', 'tgl01', '1652', NULL, '2019-07-01'),
(78, '2019-11-08 10:55:44', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', '*** Batch update successful ***', 't103_daf_kelas_siswa_iuran', '', '', '', ''),
(79, '2019-11-08 10:57:54', '/pembayaran37/t004_siswaadd.php', '11', 'A', 't004_siswa', 'NomorInduk', '561', '', '3063'),
(80, '2019-11-08 10:57:54', '/pembayaran37/t004_siswaadd.php', '11', 'A', 't004_siswa', 'Nama', '561', '', 'Praba Bintang Ridho Pratama Putra'),
(81, '2019-11-08 10:57:54', '/pembayaran37/t004_siswaadd.php', '11', 'A', 't004_siswa', 'id', '561', '', '561'),
(82, '2019-11-08 10:58:19', '/pembayaran37/t102_daf_kelas_siswalist.php', '11', '*** Batch insert begin ***', 't102_daf_kelas_siswa', '', '', '', ''),
(83, '2019-11-08 10:58:19', '/pembayaran37/t102_daf_kelas_siswalist.php', '11', 'A', 't102_daf_kelas_siswa', 'siswa_id', '641', '', '561'),
(84, '2019-11-08 10:58:19', '/pembayaran37/t102_daf_kelas_siswalist.php', '11', 'A', 't102_daf_kelas_siswa', 'daf_kelas_id', '641', '', '9'),
(85, '2019-11-08 10:58:19', '/pembayaran37/t102_daf_kelas_siswalist.php', '11', 'A', 't102_daf_kelas_siswa', 'id', '641', '', '641'),
(86, '2019-11-08 10:58:19', '/pembayaran37/t102_daf_kelas_siswalist.php', '11', '*** Batch insert successful ***', 't102_daf_kelas_siswa', '', '', '', ''),
(87, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', '*** Batch insert begin ***', 't103_daf_kelas_siswa_iuran', '', '', '', ''),
(88, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'iuran_id', '1653', '', '1'),
(89, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'Jumlah', '1653', '', '135000'),
(90, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml01', '1653', '', '135000'),
(91, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl01', '1653', '', NULL),
(92, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml02', '1653', '', '135000'),
(93, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl02', '1653', '', NULL),
(94, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml03', '1653', '', '135000'),
(95, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl03', '1653', '', NULL),
(96, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml04', '1653', '', '135000'),
(97, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl04', '1653', '', NULL),
(98, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml05', '1653', '', '135000'),
(99, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl05', '1653', '', NULL),
(100, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml06', '1653', '', '135000'),
(101, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl06', '1653', '', NULL),
(102, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml07', '1653', '', '135000'),
(103, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl07', '1653', '', NULL),
(104, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml08', '1653', '', '135000'),
(105, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl08', '1653', '', NULL),
(106, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml09', '1653', '', '135000'),
(107, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl09', '1653', '', NULL),
(108, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml10', '1653', '', '135000'),
(109, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl10', '1653', '', NULL),
(110, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml11', '1653', '', '135000'),
(111, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl11', '1653', '', NULL),
(112, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml12', '1653', '', '135000'),
(113, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl12', '1653', '', NULL),
(114, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'daf_kelas_siswa_id', '1653', '', '641'),
(115, '2019-11-08 10:58:59', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'id', '1653', '', '1653'),
(116, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'iuran_id', '1654', '', '2'),
(117, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'Jumlah', '1654', '', '75000'),
(118, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml01', '1654', '', '75000'),
(119, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl01', '1654', '', NULL),
(120, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml02', '1654', '', '75000'),
(121, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl02', '1654', '', NULL),
(122, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml03', '1654', '', '75000'),
(123, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl03', '1654', '', NULL),
(124, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml04', '1654', '', '75000'),
(125, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl04', '1654', '', NULL),
(126, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml05', '1654', '', '75000'),
(127, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl05', '1654', '', NULL),
(128, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml06', '1654', '', '75000'),
(129, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl06', '1654', '', NULL),
(130, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml07', '1654', '', '75000'),
(131, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl07', '1654', '', NULL),
(132, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml08', '1654', '', '75000'),
(133, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl08', '1654', '', NULL),
(134, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml09', '1654', '', '75000'),
(135, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl09', '1654', '', NULL),
(136, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml10', '1654', '', '75000'),
(137, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl10', '1654', '', NULL),
(138, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml11', '1654', '', '75000'),
(139, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl11', '1654', '', NULL),
(140, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'jml12', '1654', '', '75000'),
(141, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'tgl12', '1654', '', NULL),
(142, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'daf_kelas_siswa_id', '1654', '', '641'),
(143, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'A', 't103_daf_kelas_siswa_iuran', 'id', '1654', '', '1654'),
(144, '2019-11-08 10:59:00', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', '*** Batch insert successful ***', 't103_daf_kelas_siswa_iuran', '', '', '', ''),
(145, '2019-11-08 10:59:32', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', '*** Batch update begin ***', 't103_daf_kelas_siswa_iuran', '', '', '', ''),
(146, '2019-11-08 10:59:32', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'U', 't103_daf_kelas_siswa_iuran', 'byr04', '1653', '0', '1'),
(147, '2019-11-08 10:59:32', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'U', 't103_daf_kelas_siswa_iuran', 'tgl04', '1653', NULL, '2019-10-01'),
(148, '2019-11-08 10:59:32', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'U', 't103_daf_kelas_siswa_iuran', 'byr04', '1654', '0', '1'),
(149, '2019-11-08 10:59:32', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', 'U', 't103_daf_kelas_siswa_iuran', 'tgl04', '1654', NULL, '2019-10-01'),
(150, '2019-11-08 10:59:32', '/pembayaran37/t103_daf_kelas_siswa_iuranlist.php', '11', '*** Batch update successful ***', 't103_daf_kelas_siswa_iuran', '', '', '', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v101_daf_kelas`
-- (See below for the actual view)
--
CREATE TABLE `v101_daf_kelas` (
`id` int(11)
,`tahun_ajaran_id` int(11)
,`sekolah_id` int(11)
,`kelas_id` int(11)
,`tsk` varchar(113)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v102_daf_kelas_siswa`
-- (See below for the actual view)
--
CREATE TABLE `v102_daf_kelas_siswa` (
`id` int(11)
,`daf_kelas_id` int(11)
,`siswa_id` int(11)
,`tsk` varchar(113)
,`siswa` varchar(94)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v103_daf_kelas_siswa_iuran`
-- (See below for the actual view)
--
CREATE TABLE `v103_daf_kelas_siswa_iuran` (
`siswa_id` int(11)
,`NomorInduk` varchar(25)
,`Nama` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v104_pembayaran`
-- (See below for the actual view)
--
CREATE TABLE `v104_pembayaran` (
`id` int(11)
,`daf_kelas_siswa_id` int(11)
,`iuran_id` int(11)
,`Jumlah` float(14,2)
,`Periode` int(2)
,`PeriodeBulan` varchar(9)
,`StatusBayar` varchar(1)
,`JumlahBayar` float(14,2)
,`TglBayar` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v105_lap_bayar`
-- (See below for the actual view)
--
CREATE TABLE `v105_lap_bayar` (
`daf_kelas_siswa_id` int(11)
,`iuran_id` int(11)
,`Jumlah` float(14,2)
,`Periode` int(2)
,`PeriodeBulan` varchar(9)
,`StatusBayar` varchar(1)
,`JumlahBayar` float(14,2)
,`TglBayar` date
,`siswa_id` int(11)
,`NomorInduk` varchar(25)
,`SiswaNama` varchar(50)
,`dk_id` int(11)
,`kelas_id` int(11)
,`KelasNama` varchar(50)
,`sekolah_id` int(11)
,`SekolahNama` varchar(50)
,`tahun_ajaran_id` int(11)
,`TahunAjaran` varchar(9)
,`IuranNama` varchar(25)
,`keterangan` varchar(193)
,`IuranNama2` varchar(39)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v106_tunggakan`
-- (See below for the actual view)
--
CREATE TABLE `v106_tunggakan` (
`id` int(11)
,`daf_kelas_siswa_id` int(11)
,`iuran_id` int(11)
,`Jumlah` float(14,2)
,`Periode` int(2)
,`PeriodeBulan` varchar(9)
,`StatusBayar` varchar(1)
,`JumlahBayar` double(19,2)
,`TglBayar` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v107_lap_tunggak`
-- (See below for the actual view)
--
CREATE TABLE `v107_lap_tunggak` (
`daf_kelas_siswa_id` int(11)
,`iuran_id` int(11)
,`Jumlah` float(14,2)
,`Periode` int(2)
,`PeriodeBulan` varchar(9)
,`StatusBayar` varchar(1)
,`JumlahBayar` double(19,2)
,`TglBayar` date
,`siswa_id` int(11)
,`NomorInduk` varchar(25)
,`SiswaNama` varchar(50)
,`dk_id` int(11)
,`kelas_id` int(11)
,`KelasNama` varchar(50)
,`sekolah_id` int(11)
,`SekolahNama` varchar(50)
,`tahun_ajaran_id` int(11)
,`TahunAjaran` varchar(9)
,`IuranNama` varchar(25)
,`PeriodeNow` int(2)
,`keterangan` varchar(193)
,`IuranNama2` varchar(39)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v108_lap_um`
-- (See below for the actual view)
--
CREATE TABLE `v108_lap_um` (
`tahunajaran` varchar(9)
,`sekolahnama` varchar(50)
,`kelasnama` varchar(50)
,`iurannama` varchar(25)
,`iuran_id` int(11)
,`nomorinduk` varchar(25)
,`siswanama` varchar(50)
,`periodebayar` int(2)
,`jumlah_total` double(19,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v109_lap_pum`
-- (See below for the actual view)
--
CREATE TABLE `v109_lap_pum` (
`tahunajaran` varchar(9)
,`sekolahnama` varchar(50)
,`kelasnama` varchar(50)
,`iuran_id` int(11)
,`iurannama` varchar(25)
,`nomorinduk` varchar(25)
,`siswanama` varchar(50)
,`periode` int(2)
,`jumlah_total` double(19,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v110_bukti_master`
-- (See below for the actual view)
--
CREATE TABLE `v110_bukti_master` (
`id` int(11)
,`daf_kelas_siswa_id` int(11)
,`periode` int(2)
,`periodebulan` varchar(9)
,`tglbayar` date
,`totalbayar` double(19,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v111_daf_kelas_iuran`
-- (See below for the actual view)
--
CREATE TABLE `v111_daf_kelas_iuran` (
`dk_id` int(11)
,`tsk` varchar(113)
,`iuran_id` int(11)
,`nama` varchar(25)
,`jumlah` float(14,2)
,`jumlah_siswa` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v112_daf_kelas_siswa_iuran`
-- (See below for the actual view)
--
CREATE TABLE `v112_daf_kelas_siswa_iuran` (
`tabel_kelas_id` int(11)
,`tahun_ajaran_id` int(11)
,`tahun_ajaran` varchar(9)
,`sekolah_id` int(11)
,`sekolah_nama` varchar(50)
,`kelas_id` int(11)
,`kelas_nama` varchar(50)
,`tabel_siswa_id` int(11)
,`siswa_id` int(11)
,`nomorinduk` varchar(25)
,`siswa_nama` varchar(50)
,`tabel_iuran_id` int(11)
,`iuran_id` int(11)
,`iuran_nama` varchar(25)
,`jumlah` float(14,2)
,`tsk` varchar(113)
,`ns` varchar(92)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v113_export_siswa_iuran`
-- (See below for the actual view)
--
CREATE TABLE `v113_export_siswa_iuran` (
`id` int(11)
,`daf_kelas_siswa_id` int(11)
,`iuran_id` int(11)
,`Jumlah` float(14,2)
,`byr01` enum('0','1')
,`jml01` float(14,2)
,`tgl01` date
,`byr02` enum('0','1')
,`jml02` float(14,2)
,`tgl02` date
,`byr03` enum('0','1')
,`jml03` float(14,2)
,`tgl03` date
,`byr04` enum('0','1')
,`jml04` float(14,2)
,`tgl04` date
,`byr05` enum('0','1')
,`jml05` float(14,2)
,`tgl05` date
,`byr06` enum('0','1')
,`jml06` float(14,2)
,`tgl06` date
,`byr07` enum('0','1')
,`jml07` float(14,2)
,`tgl07` date
,`byr08` enum('0','1')
,`jml08` float(14,2)
,`tgl08` date
,`byr09` enum('0','1')
,`jml09` float(14,2)
,`tgl09` date
,`byr10` enum('0','1')
,`jml10` float(14,2)
,`tgl10` date
,`byr11` enum('0','1')
,`jml11` float(14,2)
,`tgl11` date
,`byr12` enum('0','1')
,`jml12` float(14,2)
,`tgl12` date
);

-- --------------------------------------------------------

--
-- Structure for view `v101_daf_kelas`
--
DROP TABLE IF EXISTS `v101_daf_kelas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v101_daf_kelas`  AS  select `dk`.`id` AS `id`,`dk`.`tahun_ajaran_id` AS `tahun_ajaran_id`,`dk`.`sekolah_id` AS `sekolah_id`,`dk`.`kelas_id` AS `kelas_id`,concat(`kls`.`Nama`,', ',`sklh`.`Nama`,', ',`ta`.`Mulai`,'/',`ta`.`Selesai`) AS `tsk` from (((`t101_daf_kelas` `dk` left join `t001_tahun_ajaran` `ta` on(`dk`.`tahun_ajaran_id` = `ta`.`id`)) left join `t002_sekolah` `sklh` on(`dk`.`sekolah_id` = `sklh`.`id`)) left join `t003_kelas` `kls` on(`dk`.`kelas_id` = `kls`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v102_daf_kelas_siswa`
--
DROP TABLE IF EXISTS `v102_daf_kelas_siswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v102_daf_kelas_siswa`  AS  select `dks`.`id` AS `id`,`dks`.`daf_kelas_id` AS `daf_kelas_id`,`dks`.`siswa_id` AS `siswa_id`,concat(`ta`.`Mulai`,'/',`ta`.`Selesai`,', ',`sklh`.`Nama`,', ',`kls`.`Nama`) AS `tsk`,concat('[',`dks`.`id`,'] [',`sis`.`NomorInduk`,'] [',`sis`.`Nama`,']') AS `siswa` from (((((`t102_daf_kelas_siswa` `dks` left join `t101_daf_kelas` `dk` on(`dks`.`daf_kelas_id` = `dk`.`id`)) left join `t001_tahun_ajaran` `ta` on(`dk`.`tahun_ajaran_id` = `ta`.`id`)) left join `t002_sekolah` `sklh` on(`dk`.`sekolah_id` = `sklh`.`id`)) left join `t004_siswa` `sis` on(`dks`.`siswa_id` = `sis`.`id`)) left join `t003_kelas` `kls` on(`dk`.`kelas_id` = `kls`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v103_daf_kelas_siswa_iuran`
--
DROP TABLE IF EXISTS `v103_daf_kelas_siswa_iuran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v103_daf_kelas_siswa_iuran`  AS  select `dks`.`id` AS `siswa_id`,`siswa`.`NomorInduk` AS `NomorInduk`,`siswa`.`Nama` AS `Nama` from (`t102_daf_kelas_siswa` `dks` left join `t004_siswa` `siswa` on(`dks`.`siswa_id` = `siswa`.`id`)) where `dks`.`id` in (select `t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` from `t103_daf_kelas_siswa_iuran`) ;

-- --------------------------------------------------------

--
-- Structure for view `v104_pembayaran`
--
DROP TABLE IF EXISTS `v104_pembayaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v104_pembayaran`  AS  select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,1 AS `Periode`,'Juli     ' AS `PeriodeBulan`,`dksi`.`byr01` AS `StatusBayar`,`dksi`.`jml01` AS `JumlahBayar`,`dksi`.`tgl01` AS `TglBayar` from `t103_daf_kelas_siswa_iuran` `dksi` where `dksi`.`byr01` = '1' union select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,2 AS `2`,'Agustus  ' AS `Name_exp_6`,`dksi`.`byr02` AS `byr02`,`dksi`.`jml02` AS `jml02`,`dksi`.`tgl02` AS `tgl02` from `t103_daf_kelas_siswa_iuran` `dksi` where `dksi`.`byr02` = '1' union select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,3 AS `3`,'September' AS `Name_exp_6`,`dksi`.`byr03` AS `byr03`,`dksi`.`jml03` AS `jml03`,`dksi`.`tgl03` AS `tgl03` from `t103_daf_kelas_siswa_iuran` `dksi` where `dksi`.`byr03` = '1' union select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,4 AS `4`,'Oktober  ' AS `Name_exp_6`,`dksi`.`byr04` AS `byr04`,`dksi`.`jml04` AS `jml04`,`dksi`.`tgl04` AS `tgl04` from `t103_daf_kelas_siswa_iuran` `dksi` where `dksi`.`byr04` = '1' union select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,5 AS `5`,'November ' AS `Name_exp_6`,`dksi`.`byr05` AS `byr05`,`dksi`.`jml05` AS `jml05`,`dksi`.`tgl05` AS `tgl05` from `t103_daf_kelas_siswa_iuran` `dksi` where `dksi`.`byr05` = '1' union select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,6 AS `6`,'Desember ' AS `Name_exp_6`,`dksi`.`byr06` AS `byr06`,`dksi`.`jml06` AS `jml06`,`dksi`.`tgl06` AS `tgl06` from `t103_daf_kelas_siswa_iuran` `dksi` where `dksi`.`byr06` = '1' union select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,7 AS `7`,'Januari  ' AS `Name_exp_6`,`dksi`.`byr07` AS `byr06`,`dksi`.`jml07` AS `jml06`,`dksi`.`tgl07` AS `tgl06` from `t103_daf_kelas_siswa_iuran` `dksi` where `dksi`.`byr07` = '1' union select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,8 AS `8`,'Februari ' AS `Name_exp_6`,`dksi`.`byr08` AS `byr06`,`dksi`.`jml08` AS `jml06`,`dksi`.`tgl08` AS `tgl06` from `t103_daf_kelas_siswa_iuran` `dksi` where `dksi`.`byr08` = '1' union select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,9 AS `9`,'Maret    ' AS `Name_exp_6`,`dksi`.`byr09` AS `byr06`,`dksi`.`jml09` AS `jml06`,`dksi`.`tgl09` AS `tgl06` from `t103_daf_kelas_siswa_iuran` `dksi` where `dksi`.`byr09` = '1' union select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,10 AS `10`,'April    ' AS `Name_exp_6`,`dksi`.`byr10` AS `byr06`,`dksi`.`jml10` AS `jml06`,`dksi`.`tgl10` AS `tgl06` from `t103_daf_kelas_siswa_iuran` `dksi` where `dksi`.`byr10` = '1' union select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,11 AS `11`,'Mei      ' AS `Name_exp_6`,`dksi`.`byr11` AS `byr06`,`dksi`.`jml11` AS `jml06`,`dksi`.`tgl11` AS `tgl06` from `t103_daf_kelas_siswa_iuran` `dksi` where `dksi`.`byr11` = '1' union select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,12 AS `12`,'Juni     ' AS `Name_exp_6`,`dksi`.`byr12` AS `byr06`,`dksi`.`jml12` AS `jml06`,`dksi`.`tgl12` AS `tgl06` from `t103_daf_kelas_siswa_iuran` `dksi` where `dksi`.`byr12` = '1' order by `id`,`daf_kelas_siswa_id`,`iuran_id`,`Periode` ;

-- --------------------------------------------------------

--
-- Structure for view `v105_lap_bayar`
--
DROP TABLE IF EXISTS `v105_lap_bayar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v105_lap_bayar`  AS  select `byr`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`byr`.`iuran_id` AS `iuran_id`,`byr`.`Jumlah` AS `Jumlah`,`byr`.`Periode` AS `Periode`,`byr`.`PeriodeBulan` AS `PeriodeBulan`,`byr`.`StatusBayar` AS `StatusBayar`,`byr`.`JumlahBayar` AS `JumlahBayar`,`byr`.`TglBayar` AS `TglBayar`,`dks`.`siswa_id` AS `siswa_id`,`sis`.`NomorInduk` AS `NomorInduk`,`sis`.`Nama` AS `SiswaNama`,`dk`.`id` AS `dk_id`,`dk`.`kelas_id` AS `kelas_id`,`kls`.`Nama` AS `KelasNama`,`dk`.`sekolah_id` AS `sekolah_id`,`sklh`.`Nama` AS `SekolahNama`,`dk`.`tahun_ajaran_id` AS `tahun_ajaran_id`,concat(`ta`.`Mulai`,'/',`ta`.`Selesai`) AS `TahunAjaran`,`iu`.`Nama` AS `IuranNama`,concat(`ta`.`Mulai`,'/',`ta`.`Selesai`,', ',`sklh`.`Nama`,', ',`kls`.`Nama`,', ',`sis`.`NomorInduk`,' - ',`sis`.`Nama`) AS `keterangan`,concat(`iu`.`id`,' - ',`iu`.`Nama`) AS `IuranNama2` from (((((((`v104_pembayaran` `byr` left join `t102_daf_kelas_siswa` `dks` on(`byr`.`daf_kelas_siswa_id` = `dks`.`id`)) left join `t101_daf_kelas` `dk` on(`dks`.`daf_kelas_id` = `dk`.`id`)) left join `t004_siswa` `sis` on(`dks`.`siswa_id` = `sis`.`id`)) left join `t003_kelas` `kls` on(`dk`.`kelas_id` = `kls`.`id`)) left join `t002_sekolah` `sklh` on(`dk`.`sekolah_id` = `sklh`.`id`)) left join `t001_tahun_ajaran` `ta` on(`dk`.`tahun_ajaran_id` = `ta`.`id`)) left join `t005_iuran` `iu` on(`byr`.`iuran_id` = `iu`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v106_tunggakan`
--
DROP TABLE IF EXISTS `v106_tunggakan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v106_tunggakan`  AS  select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,1 AS `Periode`,'Juli     ' AS `PeriodeBulan`,`dksi`.`byr01` AS `StatusBayar`,case when `iur`.`Jenis` = 'Rutin' then `dksi`.`jml01` else `dksi`.`Jumlah` - (`dksi`.`jml01` + `dksi`.`jml02` + `dksi`.`jml03` + `dksi`.`jml04` + `dksi`.`jml05` + `dksi`.`jml06` + `dksi`.`jml07` + `dksi`.`jml08` + `dksi`.`jml09` + `dksi`.`jml10` + `dksi`.`jml11` + `dksi`.`jml12`) end AS `JumlahBayar`,`dksi`.`tgl01` AS `TglBayar` from (`t103_daf_kelas_siswa_iuran` `dksi` left join `t005_iuran` `iur` on(`dksi`.`iuran_id` = `iur`.`id`)) where case when `iur`.`Jenis` = 'Rutin' then `dksi`.`byr01` = '0' else `dksi`.`Jumlah` > `dksi`.`jml01` + `dksi`.`jml02` + `dksi`.`jml03` + `dksi`.`jml04` + `dksi`.`jml05` + `dksi`.`jml06` + `dksi`.`jml07` + `dksi`.`jml08` + `dksi`.`jml09` + `dksi`.`jml10` + `dksi`.`jml11` + `dksi`.`jml12` end union select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,2 AS `2`,'Agustus  ' AS `Name_exp_6`,`dksi`.`byr02` AS `byr02`,`dksi`.`jml02` AS `jml02`,`dksi`.`tgl02` AS `tgl02` from (`t103_daf_kelas_siswa_iuran` `dksi` left join `t005_iuran` `iur` on(`dksi`.`iuran_id` = `iur`.`id`)) where `dksi`.`byr02` = '0' and `iur`.`Jenis` = 'Rutin' union select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,3 AS `3`,'September' AS `Name_exp_6`,`dksi`.`byr03` AS `byr03`,`dksi`.`jml03` AS `jml03`,`dksi`.`tgl03` AS `tgl03` from (`t103_daf_kelas_siswa_iuran` `dksi` left join `t005_iuran` `iur` on(`dksi`.`iuran_id` = `iur`.`id`)) where `dksi`.`byr03` = '0' and `iur`.`Jenis` = 'Rutin' union select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,4 AS `4`,'Oktober  ' AS `Name_exp_6`,`dksi`.`byr04` AS `byr04`,`dksi`.`jml04` AS `jml04`,`dksi`.`tgl04` AS `tgl04` from (`t103_daf_kelas_siswa_iuran` `dksi` left join `t005_iuran` `iur` on(`dksi`.`iuran_id` = `iur`.`id`)) where `dksi`.`byr04` = '0' and `iur`.`Jenis` = 'Rutin' union select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,5 AS `5`,'November ' AS `Name_exp_6`,`dksi`.`byr05` AS `byr05`,`dksi`.`jml05` AS `jml05`,`dksi`.`tgl05` AS `tgl05` from (`t103_daf_kelas_siswa_iuran` `dksi` left join `t005_iuran` `iur` on(`dksi`.`iuran_id` = `iur`.`id`)) where `dksi`.`byr05` = '0' and `iur`.`Jenis` = 'Rutin' union select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,6 AS `6`,'Desember ' AS `Name_exp_6`,`dksi`.`byr06` AS `byr06`,`dksi`.`jml06` AS `jml06`,`dksi`.`tgl06` AS `tgl06` from (`t103_daf_kelas_siswa_iuran` `dksi` left join `t005_iuran` `iur` on(`dksi`.`iuran_id` = `iur`.`id`)) where `dksi`.`byr06` = '0' and `iur`.`Jenis` = 'Rutin' union select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,7 AS `7`,'Januari  ' AS `Name_exp_6`,`dksi`.`byr07` AS `byr06`,`dksi`.`jml07` AS `jml06`,`dksi`.`tgl07` AS `tgl06` from (`t103_daf_kelas_siswa_iuran` `dksi` left join `t005_iuran` `iur` on(`dksi`.`iuran_id` = `iur`.`id`)) where `dksi`.`byr07` = '0' and `iur`.`Jenis` = 'Rutin' union select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,8 AS `8`,'Februari ' AS `Name_exp_6`,`dksi`.`byr08` AS `byr06`,`dksi`.`jml08` AS `jml06`,`dksi`.`tgl08` AS `tgl06` from (`t103_daf_kelas_siswa_iuran` `dksi` left join `t005_iuran` `iur` on(`dksi`.`iuran_id` = `iur`.`id`)) where `dksi`.`byr08` = '0' and `iur`.`Jenis` = 'Rutin' union select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,9 AS `9`,'Maret    ' AS `Name_exp_6`,`dksi`.`byr09` AS `byr06`,`dksi`.`jml09` AS `jml06`,`dksi`.`tgl09` AS `tgl06` from (`t103_daf_kelas_siswa_iuran` `dksi` left join `t005_iuran` `iur` on(`dksi`.`iuran_id` = `iur`.`id`)) where `dksi`.`byr09` = '0' and `iur`.`Jenis` = 'Rutin' union select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,10 AS `10`,'April    ' AS `Name_exp_6`,`dksi`.`byr10` AS `byr06`,`dksi`.`jml10` AS `jml06`,`dksi`.`tgl10` AS `tgl06` from (`t103_daf_kelas_siswa_iuran` `dksi` left join `t005_iuran` `iur` on(`dksi`.`iuran_id` = `iur`.`id`)) where `dksi`.`byr10` = '0' and `iur`.`Jenis` = 'Rutin' union select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,11 AS `11`,'Mei      ' AS `Name_exp_6`,`dksi`.`byr11` AS `byr06`,`dksi`.`jml11` AS `jml06`,`dksi`.`tgl11` AS `tgl06` from (`t103_daf_kelas_siswa_iuran` `dksi` left join `t005_iuran` `iur` on(`dksi`.`iuran_id` = `iur`.`id`)) where `dksi`.`byr11` = '0' and `iur`.`Jenis` = 'Rutin' union select `dksi`.`id` AS `id`,`dksi`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`dksi`.`iuran_id` AS `iuran_id`,`dksi`.`Jumlah` AS `Jumlah`,12 AS `12`,'Juni     ' AS `Name_exp_6`,`dksi`.`byr12` AS `byr06`,`dksi`.`jml12` AS `jml06`,`dksi`.`tgl12` AS `tgl06` from (`t103_daf_kelas_siswa_iuran` `dksi` left join `t005_iuran` `iur` on(`dksi`.`iuran_id` = `iur`.`id`)) where `dksi`.`byr12` = '0' and `iur`.`Jenis` = 'Rutin' order by `id`,`daf_kelas_siswa_id`,`iuran_id`,`Periode` ;

-- --------------------------------------------------------

--
-- Structure for view `v107_lap_tunggak`
--
DROP TABLE IF EXISTS `v107_lap_tunggak`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v107_lap_tunggak`  AS  select `byr`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`byr`.`iuran_id` AS `iuran_id`,`byr`.`Jumlah` AS `Jumlah`,`byr`.`Periode` AS `Periode`,`byr`.`PeriodeBulan` AS `PeriodeBulan`,`byr`.`StatusBayar` AS `StatusBayar`,`byr`.`JumlahBayar` AS `JumlahBayar`,`byr`.`TglBayar` AS `TglBayar`,`dks`.`siswa_id` AS `siswa_id`,`sis`.`NomorInduk` AS `NomorInduk`,`sis`.`Nama` AS `SiswaNama`,`dk`.`id` AS `dk_id`,`dk`.`kelas_id` AS `kelas_id`,`kls`.`Nama` AS `KelasNama`,`dk`.`sekolah_id` AS `sekolah_id`,`sklh`.`Nama` AS `SekolahNama`,`dk`.`tahun_ajaran_id` AS `tahun_ajaran_id`,concat(`ta`.`Mulai`,'/',`ta`.`Selesai`) AS `TahunAjaran`,`iu`.`Nama` AS `IuranNama`,case when month(current_timestamp()) = 7 then 1 when month(current_timestamp()) = 8 then 2 when month(current_timestamp()) = 9 then 3 when month(current_timestamp()) = 10 then 4 when month(current_timestamp()) = 11 then 5 when month(current_timestamp()) = 12 then 6 when month(current_timestamp()) = 1 then 7 when month(current_timestamp()) = 2 then 8 when month(current_timestamp()) = 3 then 9 when month(current_timestamp()) = 4 then 10 when month(current_timestamp()) = 5 then 11 when month(current_timestamp()) = 6 then 12 end AS `PeriodeNow`,concat(`ta`.`Mulai`,'/',`ta`.`Selesai`,', ',`sklh`.`Nama`,', ',`kls`.`Nama`,', ',`sis`.`NomorInduk`,' - ',`sis`.`Nama`) AS `keterangan`,concat(`iu`.`id`,' - ',`iu`.`Nama`) AS `IuranNama2` from (((((((`v106_tunggakan` `byr` left join `t102_daf_kelas_siswa` `dks` on(`byr`.`daf_kelas_siswa_id` = `dks`.`id`)) left join `t101_daf_kelas` `dk` on(`dks`.`daf_kelas_id` = `dk`.`id`)) left join `t004_siswa` `sis` on(`dks`.`siswa_id` = `sis`.`id`)) left join `t003_kelas` `kls` on(`dk`.`kelas_id` = `kls`.`id`)) left join `t002_sekolah` `sklh` on(`dk`.`sekolah_id` = `sklh`.`id`)) left join `t001_tahun_ajaran` `ta` on(`dk`.`tahun_ajaran_id` = `ta`.`id`)) left join `t005_iuran` `iu` on(`byr`.`iuran_id` = `iu`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v108_lap_um`
--
DROP TABLE IF EXISTS `v108_lap_um`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v108_lap_um`  AS  select `v105_lap_bayar`.`TahunAjaran` AS `tahunajaran`,`v105_lap_bayar`.`SekolahNama` AS `sekolahnama`,`v105_lap_bayar`.`KelasNama` AS `kelasnama`,`v105_lap_bayar`.`IuranNama` AS `iurannama`,`v105_lap_bayar`.`iuran_id` AS `iuran_id`,`v105_lap_bayar`.`NomorInduk` AS `nomorinduk`,`v105_lap_bayar`.`SiswaNama` AS `siswanama`,case when month(`v105_lap_bayar`.`TglBayar`) = 7 then 1 when month(`v105_lap_bayar`.`TglBayar`) = 8 then 2 when month(`v105_lap_bayar`.`TglBayar`) = 9 then 3 when month(`v105_lap_bayar`.`TglBayar`) = 10 then 4 when month(`v105_lap_bayar`.`TglBayar`) = 11 then 5 when month(`v105_lap_bayar`.`TglBayar`) = 12 then 6 when month(`v105_lap_bayar`.`TglBayar`) = 1 then 7 when month(`v105_lap_bayar`.`TglBayar`) = 2 then 8 when month(`v105_lap_bayar`.`TglBayar`) = 3 then 9 when month(`v105_lap_bayar`.`TglBayar`) = 4 then 10 when month(`v105_lap_bayar`.`TglBayar`) = 5 then 11 when month(`v105_lap_bayar`.`TglBayar`) = 6 then 12 end AS `periodebayar`,sum(`v105_lap_bayar`.`JumlahBayar`) AS `jumlah_total` from `v105_lap_bayar` group by `v105_lap_bayar`.`TahunAjaran`,`v105_lap_bayar`.`SekolahNama`,`v105_lap_bayar`.`KelasNama`,`v105_lap_bayar`.`iuran_id`,`v105_lap_bayar`.`IuranNama`,`v105_lap_bayar`.`NomorInduk`,`v105_lap_bayar`.`SiswaNama`,month(`v105_lap_bayar`.`TglBayar`) ;

-- --------------------------------------------------------

--
-- Structure for view `v109_lap_pum`
--
DROP TABLE IF EXISTS `v109_lap_pum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v109_lap_pum`  AS  select `v107_lap_tunggak`.`TahunAjaran` AS `tahunajaran`,`v107_lap_tunggak`.`SekolahNama` AS `sekolahnama`,`v107_lap_tunggak`.`KelasNama` AS `kelasnama`,`v107_lap_tunggak`.`iuran_id` AS `iuran_id`,`v107_lap_tunggak`.`IuranNama` AS `iurannama`,`v107_lap_tunggak`.`NomorInduk` AS `nomorinduk`,`v107_lap_tunggak`.`SiswaNama` AS `siswanama`,`v107_lap_tunggak`.`Periode` AS `periode`,sum(`v107_lap_tunggak`.`JumlahBayar`) AS `jumlah_total` from `v107_lap_tunggak` group by `v107_lap_tunggak`.`TahunAjaran`,`v107_lap_tunggak`.`SekolahNama`,`v107_lap_tunggak`.`KelasNama`,`v107_lap_tunggak`.`iuran_id`,`v107_lap_tunggak`.`IuranNama`,`v107_lap_tunggak`.`NomorInduk`,`v107_lap_tunggak`.`SiswaNama`,`v107_lap_tunggak`.`Periode` ;

-- --------------------------------------------------------

--
-- Structure for view `v110_bukti_master`
--
DROP TABLE IF EXISTS `v110_bukti_master`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v110_bukti_master`  AS  select `v104_pembayaran`.`id` AS `id`,`v104_pembayaran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`v104_pembayaran`.`Periode` AS `periode`,`v104_pembayaran`.`PeriodeBulan` AS `periodebulan`,`v104_pembayaran`.`TglBayar` AS `tglbayar`,sum(`v104_pembayaran`.`JumlahBayar`) AS `totalbayar` from `v104_pembayaran` group by `v104_pembayaran`.`daf_kelas_siswa_id`,`v104_pembayaran`.`Periode` ;

-- --------------------------------------------------------

--
-- Structure for view `v111_daf_kelas_iuran`
--
DROP TABLE IF EXISTS `v111_daf_kelas_iuran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v111_daf_kelas_iuran`  AS  select `dk`.`id` AS `dk_id`,concat(`ta`.`Mulai`,'/',`ta`.`Selesai`,', ',`sklh`.`Nama`,', ',`kls`.`Nama`) AS `tsk`,`dksi`.`iuran_id` AS `iuran_id`,`iur`.`Nama` AS `nama`,`dksi`.`Jumlah` AS `jumlah`,count(`dksi`.`iuran_id`) AS `jumlah_siswa` from (((((((`t101_daf_kelas` `dk` left join `t001_tahun_ajaran` `ta` on(`dk`.`tahun_ajaran_id` = `ta`.`id`)) left join `t002_sekolah` `sklh` on(`dk`.`sekolah_id` = `sklh`.`id`)) left join `t003_kelas` `kls` on(`dk`.`kelas_id` = `kls`.`id`)) left join `t102_daf_kelas_siswa` `dks` on(`dk`.`id` = `dks`.`daf_kelas_id`)) left join `t004_siswa` `sis` on(`dks`.`siswa_id` = `sis`.`id`)) left join `t103_daf_kelas_siswa_iuran` `dksi` on(`dks`.`id` = `dksi`.`daf_kelas_siswa_id`)) left join `t005_iuran` `iur` on(`dksi`.`iuran_id` = `iur`.`id`)) group by `dk`.`id`,`dksi`.`iuran_id` ;

-- --------------------------------------------------------

--
-- Structure for view `v112_daf_kelas_siswa_iuran`
--
DROP TABLE IF EXISTS `v112_daf_kelas_siswa_iuran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v112_daf_kelas_siswa_iuran`  AS  select `kelas`.`id` AS `tabel_kelas_id`,`kelas`.`tahun_ajaran_id` AS `tahun_ajaran_id`,concat(`ta`.`Mulai`,'/',`ta`.`Selesai`) AS `tahun_ajaran`,`kelas`.`sekolah_id` AS `sekolah_id`,`sklh`.`Nama` AS `sekolah_nama`,`kelas`.`kelas_id` AS `kelas_id`,`kls`.`Nama` AS `kelas_nama`,`siswa`.`id` AS `tabel_siswa_id`,`siswa`.`siswa_id` AS `siswa_id`,`sis`.`NomorInduk` AS `nomorinduk`,`sis`.`Nama` AS `siswa_nama`,`iuran`.`id` AS `tabel_iuran_id`,`iuran`.`iuran_id` AS `iuran_id`,`iur`.`Nama` AS `iuran_nama`,`iuran`.`Jumlah` AS `jumlah`,concat(`ta`.`Mulai`,'/',`ta`.`Selesai`,', ',`sklh`.`Nama`,', ',`kls`.`Nama`) AS `tsk`,concat(`siswa`.`id`,' - ',`sis`.`NomorInduk`,' - ',`sis`.`Nama`) AS `ns` from (((((((`t101_daf_kelas` `kelas` left join `t102_daf_kelas_siswa` `siswa` on(`kelas`.`id` = `siswa`.`daf_kelas_id`)) left join `t103_daf_kelas_siswa_iuran` `iuran` on(`siswa`.`id` = `iuran`.`daf_kelas_siswa_id`)) left join `t001_tahun_ajaran` `ta` on(`kelas`.`tahun_ajaran_id` = `ta`.`id`)) left join `t002_sekolah` `sklh` on(`kelas`.`sekolah_id` = `sklh`.`id`)) left join `t003_kelas` `kls` on(`kelas`.`kelas_id` = `kls`.`id`)) left join `t004_siswa` `sis` on(`siswa`.`siswa_id` = `sis`.`id`)) left join `t005_iuran` `iur` on(`iuran`.`iuran_id` = `iur`.`id`)) order by `kelas`.`tahun_ajaran_id`,`kelas`.`sekolah_id`,`kelas`.`kelas_id`,`siswa`.`daf_kelas_id`,`siswa`.`siswa_id`,`iuran`.`daf_kelas_siswa_id`,`iuran`.`iuran_id` ;

-- --------------------------------------------------------

--
-- Structure for view `v113_export_siswa_iuran`
--
DROP TABLE IF EXISTS `v113_export_siswa_iuran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v113_export_siswa_iuran`  AS  select `t103_daf_kelas_siswa_iuran`.`id` AS `id`,`t103_daf_kelas_siswa_iuran`.`daf_kelas_siswa_id` AS `daf_kelas_siswa_id`,`t103_daf_kelas_siswa_iuran`.`iuran_id` AS `iuran_id`,`t103_daf_kelas_siswa_iuran`.`Jumlah` AS `Jumlah`,`t103_daf_kelas_siswa_iuran`.`byr01` AS `byr01`,`t103_daf_kelas_siswa_iuran`.`jml01` AS `jml01`,`t103_daf_kelas_siswa_iuran`.`tgl01` AS `tgl01`,`t103_daf_kelas_siswa_iuran`.`byr02` AS `byr02`,`t103_daf_kelas_siswa_iuran`.`jml02` AS `jml02`,`t103_daf_kelas_siswa_iuran`.`tgl02` AS `tgl02`,`t103_daf_kelas_siswa_iuran`.`byr03` AS `byr03`,`t103_daf_kelas_siswa_iuran`.`jml03` AS `jml03`,`t103_daf_kelas_siswa_iuran`.`tgl03` AS `tgl03`,`t103_daf_kelas_siswa_iuran`.`byr04` AS `byr04`,`t103_daf_kelas_siswa_iuran`.`jml04` AS `jml04`,`t103_daf_kelas_siswa_iuran`.`tgl04` AS `tgl04`,`t103_daf_kelas_siswa_iuran`.`byr05` AS `byr05`,`t103_daf_kelas_siswa_iuran`.`jml05` AS `jml05`,`t103_daf_kelas_siswa_iuran`.`tgl05` AS `tgl05`,`t103_daf_kelas_siswa_iuran`.`byr06` AS `byr06`,`t103_daf_kelas_siswa_iuran`.`jml06` AS `jml06`,`t103_daf_kelas_siswa_iuran`.`tgl06` AS `tgl06`,`t103_daf_kelas_siswa_iuran`.`byr07` AS `byr07`,`t103_daf_kelas_siswa_iuran`.`jml07` AS `jml07`,`t103_daf_kelas_siswa_iuran`.`tgl07` AS `tgl07`,`t103_daf_kelas_siswa_iuran`.`byr08` AS `byr08`,`t103_daf_kelas_siswa_iuran`.`jml08` AS `jml08`,`t103_daf_kelas_siswa_iuran`.`tgl08` AS `tgl08`,`t103_daf_kelas_siswa_iuran`.`byr09` AS `byr09`,`t103_daf_kelas_siswa_iuran`.`jml09` AS `jml09`,`t103_daf_kelas_siswa_iuran`.`tgl09` AS `tgl09`,`t103_daf_kelas_siswa_iuran`.`byr10` AS `byr10`,`t103_daf_kelas_siswa_iuran`.`jml10` AS `jml10`,`t103_daf_kelas_siswa_iuran`.`tgl10` AS `tgl10`,`t103_daf_kelas_siswa_iuran`.`byr11` AS `byr11`,`t103_daf_kelas_siswa_iuran`.`jml11` AS `jml11`,`t103_daf_kelas_siswa_iuran`.`tgl11` AS `tgl11`,`t103_daf_kelas_siswa_iuran`.`byr12` AS `byr12`,`t103_daf_kelas_siswa_iuran`.`jml12` AS `jml12`,`t103_daf_kelas_siswa_iuran`.`tgl12` AS `tgl12` from `t103_daf_kelas_siswa_iuran` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t001_tahun_ajaran`
--
ALTER TABLE `t001_tahun_ajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t002_sekolah`
--
ALTER TABLE `t002_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t003_kelas`
--
ALTER TABLE `t003_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t004_siswa`
--
ALTER TABLE `t004_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t005_iuran`
--
ALTER TABLE `t005_iuran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t101_daf_kelas`
--
ALTER TABLE `t101_daf_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t102_daf_kelas_siswa`
--
ALTER TABLE `t102_daf_kelas_siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dafkel_sis` (`daf_kelas_id`,`siswa_id`);

--
-- Indexes for table `t103_daf_kelas_siswa_iuran`
--
ALTER TABLE `t103_daf_kelas_siswa_iuran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t301_employees`
--
ALTER TABLE `t301_employees`
  ADD PRIMARY KEY (`EmployeeID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `t302_userlevels`
--
ALTER TABLE `t302_userlevels`
  ADD PRIMARY KEY (`userlevelid`);

--
-- Indexes for table `t303_userlevelpermissions`
--
ALTER TABLE `t303_userlevelpermissions`
  ADD PRIMARY KEY (`userlevelid`,`tablename`);

--
-- Indexes for table `t304_audit_trail`
--
ALTER TABLE `t304_audit_trail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t001_tahun_ajaran`
--
ALTER TABLE `t001_tahun_ajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t002_sekolah`
--
ALTER TABLE `t002_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t003_kelas`
--
ALTER TABLE `t003_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `t004_siswa`
--
ALTER TABLE `t004_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=562;

--
-- AUTO_INCREMENT for table `t005_iuran`
--
ALTER TABLE `t005_iuran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t101_daf_kelas`
--
ALTER TABLE `t101_daf_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `t102_daf_kelas_siswa`
--
ALTER TABLE `t102_daf_kelas_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=642;

--
-- AUTO_INCREMENT for table `t103_daf_kelas_siswa_iuran`
--
ALTER TABLE `t103_daf_kelas_siswa_iuran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1655;

--
-- AUTO_INCREMENT for table `t301_employees`
--
ALTER TABLE `t301_employees`
  MODIFY `EmployeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `t304_audit_trail`
--
ALTER TABLE `t304_audit_trail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
