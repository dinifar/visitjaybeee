-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 07:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visitjaybeee`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `adname` text NOT NULL,
  `explaination` text NOT NULL,
  `task` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `adname`, `explaination`, `task`) VALUES
(2, 'Nadia Ainaa', 'Translation for the page', 'Translation'),
(3, 'Fazreen Laila', 'Places in Johor Bahru', 'Places'),
(4, 'Dini Farizah', 'Routes and Transportation update.', 'Routes and Transportation');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(60) NOT NULL,
  `category` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `image`, `category`, `link`) VALUES
(42, 'Danga Bay Funfair', 'funfair.jpeg', 'Entertainment', 'https://shorturl.at/bhtyN'),
(45, 'Legoland', 'legoland.jpg', 'Entertainment', 'https://www.legoland.com.my/'),
(46, 'Skyscape Komtar JBCC', 'sky.jpg', 'Entertainment', 'https://shorturl.at/eELRV'),
(47, 'Blue Ice Skating Rink', 'skating.jpg', 'Entertainment', 'https://shorturl.at/isDY6'),
(48, 'Austin Heights Water & Adventure Park', 'austin.jpg', 'Entertainment', 'https://www.funtime.my/'),
(49, 'X Park Sunway Iskandar', 'xpark.jpg', 'Entertainment', 'https://www.xparkmalaysia.com/Index.aspx'),
(50, 'Jb Lost In The Haunted House', 'lost.jpg', 'Entertainment', 'https://lostinjb.com/en'),
(51, 'Dinosaurs Alive Water Theme Park', 'ksl.jpg', 'Entertainment', 'https://shorturl.at/knsH0'),
(53, 'Bazar Karat', 'bazar.jpg', 'Shopping Place', 'https://sikidang.com/pasar-karat-johor/'),
(55, 'B5 Street Market', 'b5.jpg', 'Shopping Place', 'https://www.damansaraassets.com.my/project/b5-johor-street-market/'),
(56, 'Johor Premium Outlets', 'jpo.jpeg', 'Shopping Place', 'https://shorturl.at/ikpBL'),
(57, 'Paradigm Mall', 'paradigm.jpg', 'Shopping Place', 'https://www.paradigmmall.com.my/jb/'),
(58, 'Mid Valley Southkey', 'midvalley.JPG', 'Shopping Place', 'https://www.midvalleysouthkey.com/shop/directory/'),
(59, 'Angsana Mall', 'angsana.jpg', 'Shopping Place', 'https://www.udamalls.com.my/angsana-johor-bahru-mall'),
(60, 'Pasar Borong Pandan', 'pandan.jpg', 'Shopping Place', 'https://foursquare.com/v/pasar-borong-pandan-city/4b76b55cf964a520d3592ee3'),
(61, 'Dataran Johor Bahru', 'dataran.jpeg', 'Hangout Place', 'https://shorturl.at/ckKX3'),
(62, 'Tebing', 'tebing.jpg', 'Hangout Place', 'https://www.tebing.my/'),
(63, 'Country Garden Danga Bay', 'country.jpg', 'Hangout Place', 'https://dangabaycondo.com/en'),
(64, 'Marina Puteri Harbour', 'puteri.jpg', 'Hangout Place', 'https://www.one15marina.com/puteriharbour/'),
(65, 'Hutan Bandar MBJB', 'hutan.jpg', 'Hangout Place', 'https://shorturl.at/iMNV8'),
(66, 'Jalan Tan Hiok Nee', 'jalan.jpg', 'Hangout Place', 'https://shorturl.at/cKS29'),
(67, 'Masjid Sultan Abu Bakar', 'masjid.jpeg', 'Unique Attraction', 'https://shorturl.at/exDX0'),
(68, 'Istana Bukit Serene', 'istana.jpg', 'Unique Attraction', 'https://www.mbjb.gov.my/ms/destinasi-menarik/laman-mahkota-istana-bukit-serene'),
(69, 'Istana Besar', 'istanalama.jpg', 'Unique Attraction', 'https://aa.johor.gov.my/istana/'),
(70, 'Johor Ancient Temple', 'temple.jpg', 'Unique Attraction', 'https://shorturl.at/dkxO5'),
(71, 'Arulmigu Sri Rajakaliamman Glass Temple', 'glass.jpg', 'Unique Attraction', 'https://shorturl.at/buBDG'),
(72, 'Church Of The Immaculate Conception', 'church.jpg', 'Unique Attraction', 'https://www.cicjb.org/'),
(73, 'Warung Saga', 'saga.jpg', 'Popular Eatery', 'https://shorturl.at/enpFX'),
(74, 'Onn Kitchen', 'onn.jpg', 'Popular Eatery', 'https://saji.my/onn-kitchen/'),
(75, 'Cafe Ikhwan', 'ikhwan.jpg', 'Popular Eatery', 'https://shorturl.at/xDO19'),
(76, 'The Marco Polo Kitchen', 'marco.jpg', 'Popular Eatery', 'http://www.themarcopolokitchen.com.my/'),
(77, 'Murtabak Singapura', 'murtabak.jpg', 'Popular Eatery', 'https://shorturl.at/sKY69'),
(78, 'The Banana Leaf Kitchen', 'banana.jpg', 'Popular Eatery', 'https://shorturl.at/jqB59'),
(79, 'Doña Bakehouse', 'dona.jpg', 'Popular Eatery', 'https://www.donabakehouse.com/'),
(80, 'Lazy Monday', 'monday.jpeg', 'Popular Eatery', 'https://shorturl.at/kEIW6'),
(81, 'Nimmies Pastry Cafe', 'nim.jpg', 'Popular Eatery', 'https://shorturl.at/fpsvP'),
(82, 'Keijometo', 'keijometo.jpg', 'Popular Eatery', 'https://shorturl.at/pCDM8'),
(83, 'The FOUNDERS Cafe', 'founders.jpg', 'Popular Eatery', 'https://thefounderscafemy.com/'),
(84, 'Cafe Takdak Nama', 'takdak.jpg', 'Popular Eatery', 'https://shorturl.at/drxJS'),
(85, 'The Lightwood by Mues', 'light.jpg', 'Popular Eatery', 'https://shorturl.at/kCLSY'),
(86, '3littlechef', 'little.png', 'Popular Eatery', 'https://shorturl.at/GHJK0'),
(87, 'Dusk by Mok Mok', 'dus.jpg', 'Popular Eatery', 'https://shorturl.at/dNX24'),
(88, 'Halaman by Dapur Western', 'halaman.jpg', 'Popular Eatery', 'https://shorturl.at/mKUV7'),
(89, 'Bloom by MokMok', 'bloom.jpg', 'Popular Eatery', 'https://shorturl.at/cdGKT'),
(90, 'SIGNATURE by Nosh', 'signaturen.jpg', 'Popular Eatery', 'https://shorturl.at/uZ238'),
(91, 'Soil', 'soil.jpg', 'Popular Eatery', 'https://soil.storehub.me/'),
(92, 'Dari Korean', 'dari.jpg', 'Popular Eatery', 'https://johorfoodie.com/dari-korean-restaurant-johor-bahru/'),
(93, 'K Fry Urban Korean', 'kfryk.jpg', 'Popular Eatery', 'https://www.kfry.my/location/k-fry-holiday-villa-johor-bahru/'),
(94, 'Dookki', 'dooki.jpg', 'Popular Eatery', 'https://shorturl.at/apT28'),
(95, 'Merah Kitchen & Bar', 'merah.jpg', 'Popular Eatery', 'https://merah-kitchen-bar.business.site/'),
(96, 'Woodfire', 'wood.jpg', 'Popular Eatery', 'https://woodfire.com.my/locate-us/'),
(97, 'Korea House Restaurant', 'korea.jpg', 'Popular Eatery', 'https://shorturl.at/euvyE'),
(98, 'Roast & Coffee - Retro Garden 1968s', 'roast.JPG', 'Popular Eatery', 'https://shorturl.at/aorA6'),
(99, 'Re Patisserie', 're.jpg', 'Popular Eatery', 'https://shorturl.at/yBCEL'),
(100, 'Flowers in the Window', 'flower.jpg', 'Popular Eatery', 'https://shorturl.at/lGPQ6'),
(101, 'TIP, The Ice-Cream Project', 'tip.jpg', 'Popular Eatery', 'https://theicecreamproject.store/'),
(102, 'Sarcasteak Cafe', 'sarcasteak.jpg', 'Popular Eatery', 'https://shorturl.at/JLWY1'),
(103, 'Olive Musicafe', 'olive.jpg', 'Popular Eatery', 'https://shorturl.at/cjrY6'),
(104, 'The Pinggan Cafe', 'piggan.jpg', 'Popular Eatery', 'https://shorturl.at/afkmO'),
(105, 'Bubur Nasi Istimewa No. 1', 'bubur.jpg', 'Popular Eatery', 'https://shorturl.at/lotP5'),
(106, 'Bawal Power Sempoi', 'bawal.jpg', 'Popular Eatery', 'https://bawal-power-sempoi-johor-bahru.business.site/'),
(107, 'Al Mizan Satay House', 'mizan.jpg', 'Popular Eatery', 'https://almizansatayhouse.com/'),
(108, 'Mee Rebus Haji Wahid', 'rebus.jpg', 'Popular Eatery', 'https://shorturl.at/SVZ38'),
(109, 'Pondok Santapan Larkin', 'pondok.jpg', 'Popular Eatery', 'https://shorturl.at/bmHMT'),
(110, 'Warung Soto Perdana Madu 4', 'soto4.jpg', 'Popular Eatery', 'https://jbfoodclub.com/2021/11/02/warung-soto-perdana-madu-4-skudai-kiri/'),
(111, 'Restoran Sup Tulang ZZ', 'zz.jpg', 'Popular Eatery', 'https://saji.my/restoran-z-sup-tulang/'),
(112, 'The Belly Treats bakeshop', 'belly.jpg', 'Popular Eatery', 'http://ppunlimited.blogspot.com/2018/07/the-belly-treats-bakeshop.html'),
(113, 'Jobox Food Truck', 'jobox.jpg', 'Popular Eatery', 'https://shorturl.at/rGNV6'),
(114, 'Big Food F&B', 'bigfood.jpg', 'Popular Eatery', 'http://bigfoodfnb.biz/bigfood/about.php'),
(115, 'Anjung Senibong Restoran', 'senibong.jpg', 'Popular Eatery', 'https://shorturl.at/djDE3'),
(116, 'KopiLoco', 'kopi.JPG', 'Popular Eatery', 'https://shorturl.at/sJKPX'),
(117, 'Menate Steak Hub', 'menate.jpeg', 'Popular Eatery', 'https://menate.com.my/our-menu/');

-- --------------------------------------------------------

--
-- Table structure for table `translation`
--

CREATE TABLE `translation` (
  `id` int(11) NOT NULL,
  `english` varchar(255) NOT NULL,
  `malay` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `translation`
--

INSERT INTO `translation` (`id`, `english`, `malay`) VALUES
(1, 'how much is this?', 'ini berapa?'),
(4, 'How to go to this place?', 'Bagaimana untuk pergi ke tempat ini?'),
(5, 'Thank you very much!', 'Terima kasih!'),
(6, 'How are you?', 'Apa khabar?'),
(11, 'try', 'try');

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE `transportation` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(60) NOT NULL,
  `caption` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transportation`
--

INSERT INTO `transportation` (`id`, `name`, `image`, `caption`) VALUES
(16, 'myBAS Johor Bahru', '1.jpg', 'MyBAS Johor Bahru was implemented since 31 March 2022, replaces existing bus services progressively over several phases, aiming to enhance commuters experience on public transportation with published bus schedules, cashless payment, electric buses, and upgraded passenger facilities. Bus routes operating under this scheme uses buses in a standard myBAS livery.\r\n\r\nTrunk routes are prefixed with \"T\" and feeder routes are short routes prefixed with \"F\".\r\n\r\nJohor Bahru (JB) has several bus operators running local public bus services, providing a wide public transport network coverage around JB. Most of the bus routes would start from the city center of JB, at JB Sentral and Larkin Bus Terminal.\r\n\r\nAs different bus operator uses a different bus route number, several different bus route number serves the same routing as one another. In the bus network map below, bus services plying on a similar routing are denoted in the same colour. Please take note of the bus service number as indicated on the line.\r\n\r\nLaunched in 2010, the Bas Iskandar Malaysia scheme has restored some of the withdrawn bus routes, mainly connecting between towns outside of the city center. By 2012, a total of 27 bus services (\"IM\" Bus Routes) were introduced under this scheme. However, since 2016, Bas Iskandar Malaysia bus routes were gradually withdrawn, with some being re-introduced under the new Bas Muafakat Johor scheme. The last route IM05 introduced under the Bas Iskandar Malaysia scheme has been replaced by myBAS Johor Bahru on 25 April 2022.'),
(20, 'Bas Muafakat Johor Bus Routes', '2.jpg', 'Bas Muafakat Johor is an initiative by the Johor Public Transport Corporation (Perbadanan Pengangkutan Awam Johor / PAJ), in collaboration with City Councils in Johor Bahru (MBJB), Johor Bahru Tengah (MBJPT), Kulai (MPKu) and Pasir Gudang (MPPG). Bas Muafakat Johor bus services are being operated by Causeway Link (7 routes) and Maju (8 routes).\r\n\r\nWith the introduction of Bas Muafakat Johor in April 2016, bus commuters in Johor Bahru will see new connections or reintroduction of bus services in some areas without bus services. In this first phase of introduction, 30 buses will be wrapped with the new Bas Muafakat Johor branding and 15 bus routes will be rolled out.\r\n\r\nJB Di Hatiku free bus service JB1 by Majlis Bandaraya Johor Bahru (MBJB) was rebranded and renumbered as Bas Muafakat Johor bus route P101. \r\n\r\nThe expansion of this initiative was rolled out in April 2017, with an additional 11 new bus routes in Johor Bahru and a total of 20 new bus routes in Johor towns such as Muar, Tangkak, Yong Peng, Segamat, Simpang Renggam, Kluang, Batu Pahat, Pontian, Mersing and Kota Tinggi.\r\n\r\nTo be entitled with free bus ride, users of the Bas Muafakat Johor must register for the Muafakat Johor Card (Kad Muafakat Johor) from the official website here. The free bus services are only available for Malaysian citizens, whom have registered and received their travel card. For enquiries, please visit their website or call PAJ hotline at 1300-22-3700.\r\n\r\n'),
(22, 'Iskandar Puteri Community Shuttle Bus Services', '3.jpg', 'Iskandar Puteri Community Shuttle bus services are provided by UEM Sunrise. These bus services enhance public transport connectivity in Iskandar Puteri in addition to existing Causeway Link buses serving the area. All of these shuttle bus services serve key amenities in Iskandar Puteri, such as offices at Medini 6 / 7 / 9, Gleneagles Hospital, Mall of Medini, Legoland, Educity, residences at East Ledang and Puteri Harbour Ferry Terminal.\r\n\r\nThese shuttle buses are provided free of charge. Passengers are advised to present resident card, staff card, student card, ferry ticket or event flyer upon boarding.\r\n\r\nCurrently, three shuttle bus routes are available and four buses are plying these routes.\r\n\r\nOne shuttle bus route IP01 was introduced on 1 September 2018, serving between Puteri Harbour Ferry Terminal and Larkin. IP01 replaces the free shuttle bus service IP that was operated by Causeway Link.\r\n\r\nTwo more routes, IP02 and IP03 were introduced in early 2019, providing direct connection to AEON Bukit Indah and Rumah Iskandar Malaysia.\r\n\r\nPlease note that IP03 operates on Weekdays only.\r\n\r\n'),
(26, 'Bus Services From Johor Bahru to Singapore', '4.jpg', 'From Larkin\r\nRoutes: SBS Transit 170, Causeway Link CW1, CW2, CWL and Singapore-Johore Express (SJE)\r\n\r\nPassengers travelling with Causeway Link may board either CW1, CW2 or CWL and purchase a ticket to Woodlands Checkpoint, Kranji, Queen Street or Newton Circus on board the buses.\r\n\r\nUnder good traffic condition, the bus journey from Larkin to JB CIQ could be as fast as 15 minutes. However, the entry of the checkpoint are often congested with cars during peak periods. Do allocate extra travel time for this stretch of route when you are planning for your trip to Singapore. \r\n\r\nQR Boarding Pass Collection\r\nPassengers going to Singapore from Larkin Teminal are required to collect the QR Boarding Pass to gain access to the Departure Hall at Gates 1 and 2 for bus services to Singapore. From 15 February 2023, a RM1 facility fee will be imposed during the collection of the QR Pass.\r\n\r\nThe QR Boarding Pass can be purchased at:\r\n\r\nLarkin Sentral ticketing counter\r\nTouch n Go e-wallet\r\nGoLarkin website (https://golarkin.com.my/GoPassSG/Home)\r\nCard Fares\r\nPayment by Ez-Link Card is accepted on SBS Transit bus 170. Fares will be deducted in Singapore Dollars, in accordance to the distance fares as approved by Singapore Public Transport Council.\r\nPayment by Manjalink Card is accepted on Causeway Link CW1, CW2 and CWL. Fares will be deducted in Malaysian Ringgit for trips beginning from Johor Bahru.\r\nCash Fares\r\nTo Queen Street (Bugis): RM4.80 (for Causeway Link buses and SJE), S$2.60 (for SBS Transit 170).\r\nTo Newton Circus: RM4.60 (Causeway Link buses).\r\nTo Kranji MRT: RM2.60 (Causeway Link buses), S$2.30 (SBS Transit 170).\r\n\r\n___________________________________________________________\r\n\r\nFrom JB Sentral\r\nIt is advisable to walk from JB Sentral to Johor Bahru Checkpoint (JB CIQ). Walking into the immigration complex would take about 5 to 10 minutes, which will help you to save some time, as compared to taking a bus from JB Sentral bus terminal. \r\n\r\nNonetheless, there are three routes SBS Transit bus 160, 170X and SMRT bus 950 from JB Sentral Terminal to JB CIQ. Be sure to stand near the road for boarding. These buses will generally pass by the terminal as it is usually packed with buses.\r\n\r\n___________________________________________________________\r\n\r\nFrom Senai Airport\r\nRoute: AA1\r\n\r\nCauseway Link offers a express bus service AA1 from Senai Airport to JB Sentral. \r\n\r\nTickets must be purchased at least 30 minutes before departure at the Causeway Link counter at Senai Airport or online booking at Causeway Link website.\r\n\r\n___________________________________________________________\r\n\r\nFrom Johor Premium Outlets (JPO)\r\nRoute: JPO1\r\n\r\nCauseway Link offers direct bus service JPO1 from JPO to JB Sentral. \r\n\r\nTickets can be purchased on board the bus, and no booking is required.\r\n\r\n'),
(27, 'ETS Routes in Malaysia', 'newroute_ets_2023.jpg', '\r\nShort for ‘Electric Train Service’, the ETS is an inter-city electric rail service that is operated by KTMB. By cutting down significantly on travel time over the previous coaches, the ETS is currently the fastest inter-state train service in Malaysia. Our ETS route map in Malaysia is currently operating from Gemas in Negeri Sembilan to Padang Besar up north in Perlis.\r\n\r\nETS route is the most popular train route in Malaysia due to its connectivity to significant locations such as Kuala Lumpur, Perak and Penang. Passengers can travel in comfort with three different concession classes available ranging from Platinum to Silver. Platinum offers the shortest travel time with the least amount of stops while Silver will have stops at every station along the tracks.\r\n\r\nOur ETS route map in Malaysia covers popular destinations such as KL Sentral, Ipoh, Butterworth and Padang Besar. These are popular sight-seeing and tourist destinations offering various attractions for travellers nationwide. KL Sentral is a known central hub for travellers while Padang Besar is a town located on the Malaysian-Thailand border. With expansion projects ongoing, the ETS service is expected to provide even greater coverage for passengers.');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `id` int(11) NOT NULL,
  `image` varchar(60) NOT NULL,
  `package` varchar(50) NOT NULL,
  `price` int(4) NOT NULL,
  `planning` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`id`, `image`, `package`, `price`, `planning`) VALUES
(7, 'solotraveler.jpg', 'Solo Traveler', 330, 'SoloTraveler.png'),
(9, 'family.jpg', 'Family Pax', 490, 'SoloTraveler2.png'),
(11, 'student.jpg', 'Student/Group', 470, 'Solo Traveler (3).png'),
(14, 'about-6.jpg', 'try', 80, 'about-1.jpg'),
(18, 'bg_3.jpg', 'try', 456, 'bg_4.jpg'),
(20, 'country.jpg', 'try 87', 800, ''),
(21, 'bigfood.jpg', 'try try', 100, 'bloom.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phoneNum` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `phoneNum`, `type`) VALUES
(1, 'qarin', 'qarin234', 'Nur Qarin Lisa', 1345423565, 1),
(4, 'lalisa@gmail.com', 'lisa01', 'Lalisa Manoban', 1234567891, 0),
(5, 'kimgyu@gmail.com', 'migyu12', 'Kim Mingyu', 1723459603, 0),
(6, 'chennie@gmail.com', 'chenchen', 'Chen', 1110107127, 0),
(7, 'jiminpark@gmail.com', 'jimin07', 'Park Jimin', 1110109127, 0),
(8, 'yeonsang@gmail.com', 'kyeongsa', 'Kang Yeonsang', 1110109876, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translation`
--
ALTER TABLE `translation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `translation`
--
ALTER TABLE `translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transportation`
--
ALTER TABLE `transportation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
