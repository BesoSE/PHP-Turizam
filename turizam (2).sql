-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2020 at 06:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turizam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `USERID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `USERID`) VALUES
(1, 28);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `describes` longtext DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `describes`, `photo`) VALUES
(1, '      Sarajevo      ', 'Povijest Sarajeva u velikoj je mjeri uvjetovana zemljopisnim položajem grada. Plodna ravnica uz obale rijeka Miljacke, Željeznice, Bosne i pritoka, okružena s tri strane visokim i do modernih vremena praktično neprohodnim planinama, bila je idealno mjesto', 'https://live.staticflickr.com/223/31494445212_8653153571_b.jpg'),
(2, ' Mostar            ', 'Mostar ima umjerenu sredozemnu klimu s blažim, ali hladnim zimama (uz malo ili nimalo snijega), te u vrućim ljetima temperature u hladu mogu iznositi i do 45°C. Mostar je bio najtopliji grad u bivšoj Jugoslaviji, a danas u Bosni i Hercegovini, te je uz At', 'https://s27363.pcdn.co/wp-content/uploads/2017/05/Best-View-of-Stari-Most-1129x752.jpg.optimal.jpg'),
(3, '     Vlašić     ', 'Vlašić je planina u srednjoj Bosni. Prostire se u općini Travnik. Njegov je najveći vrh Paljenik (Opaljenik[1]) (1.933 m). Vlašićka visoravan je visoka 1.300 m, a poznata je po glasovitoj tradiciji spravljanja vlašićkog sira, kao i turizmu na Babanovcu, g', 'https://www.visitmycountry.net/bosnia_herzegovina/bh/images/stories/turizam/zimski/vlasic/vlasic.jpg'),
(5, ' Bjelašnica ', 'Prostorno se masiv Bjelašnice može podijeliti na tri dijela. Prvi je centralni masiv sa najvišim istoimenim vrhom (lokalni naziv Opservatorij) (2067 m) na kojem se nalazi i meteorološka stanica izgrađena 1894, prva u Bosni i Hercegovini. To je i najviša stalno nastanjena tačka u Bosni i Hercegovini. Sa tog mjest počinjao je i start olimpijskog spusta. U neposrednoj blizini je vrh Vlahinja (2057 m). Na južnom dijelu je Krvavac (2061 m). Na zapadu je Hranisava (1964 m).Visoravan omeđena planinama, Bjelašnicom sa sjevera, Treskavicom sa istoka, Visočicom sa juga i planinom Obalj sa zapada, naziva se bjelašnički plato.Najveći dio Bjelašnice građen je od srednjih i gornjih trijaskih krečnjaka i dolomita. Krečnjačko dolomitske mase ispucale su brojnim pukotinama, koje su predisponirale jake kraške procese, zbog kojih se padavine brzo gube u podzemlju, pa je planina skoro bezvodna. Za vrijeme diluvijalne glacijacije na Bjelašnici su bili glečeri, najviše razvijeni na njenoj sjevernoj strani. I danas ima trgova djelovanja tih glečera.Pećina Megara, poznata još i pod nazivom Kuvija, nalazi se u zapadnom dijelu planinskog sklopa Bjelašnice (Preslici planina, na sjeverozapadnoj padini brda Orlovca). Pećina Klokočevica ili Klokotnica nalazi se na istočnim padinama Bjelašnice, u blizini Babinog dola.', 'https://i1.wp.com/privrednastampa.ba/wp-content/uploads/2016/06/bjelasnica_ljeti.jpg?fit=660%2C351'),
(6, '  Bihać ', 'Geografski položaj i pogodni klimatski uslovi su od pradavnih vremena pogodovali naseljavanju ljudi na bihaćko područje. Iako nedavno istraženo, na osnovu iskopina i brojnih ostataka, ustanovljeno je prisustvo čovjeka u starijem kamenom, kasnom bronzanom, te starijem i mlađem željeznom dobu. U Račiću, deset kilometara jugoistočno od Bihaća, zajedno sa kostima mamuta, pronađena su dva kremena novčića.Prisustvo dijelova plemena Japoda na ovom području sigurno je dokazano. Počevši od 8. vijeka p. n. e. oni, pored dijela Slavonije, Gorskog Kotara i Like, naseljavaju i Bihaćko polje. Japodska kultura obilježila je Bihać izuzetnim vrijednostima dalekog naslijeđa, od konstrukcionih rješenja sojenica, preko nakita od bronze, željeza i srebra, do ', 'https://www.visitmycountry.net/bosnia_herzegovina/bh/images/stories/destinacije/fbih/bihac/bihac.jpg'),
(7, ' Boračko jezero ', 'Leži na sjeveroistočnom podnožju planine Prenj, na nadmorskoj visini 397 m. Sa zapada ga okružuju strmi i šumoviti visovi Crne gore (1343 m), a sa istoka Tranjine (1055 m). Bazen jezera je nastao u Boračkoj dragi procesom glacijalne erozije.Jezero ima eliptičan oblik. Dugačko je 786, a široko 402 m. Površina mu iznosi 0,26 km². Dužina jezerske obale je 2,4 km. Jezero je najdublje u jugoistočnom užem dijelu oko 17 m, a sadrži približno 2,5 mil.m³ vode, koja je zbog bistrozelene boje prozirna i do 8,3 m. Voda je najtoplija u kolovozu (oko 25°C), a najhladnija u veljači (0°C).Boračko jezero dobija vodu od Boračkog potoka i brojnih okolnih izvora, kojih ima i po dnu jezera. Iz jezera ističe Šištica, koja se poslije kratkog toka klisurom dugom 6 km i dubokom 60 m ruši 30 m visokim vodopadom u rijeku Neretvu.', 'http://furaj.ba/wp-content/uploads/2018/05/20160528_173353.jpg'),
(8, 'Jajce', 'Najstariji pisani spomen imena Jajce potječe iz 1396., a nalazi se u naslovu Hrvoja Vukčića Hrvatinića, koji se nazivao conte de Jajce (grof od Jajca).[2]\r\n\r\nO samom podrijetlu imena ima više predaja. Prema jednoj od njih, ime proizlazi iz zemljopisnog smještaja grada na jajolikoj stijeni, prema kojoj je i dobio ime. Druge predaje oslanjaju se na mjesne legende, od kojih se ističe ona o „vojvodi kaštela Grmuše (na lijevoj obali Une u Bihaćkom kotaru) Jajice”.[2]\r\n\r\nNajpoznatija predaja također je vezana uz Hrvoja Vukčića Hrvatinića, koji je izgradnju grada povjerio nekom Luculli, koji ga je sagradio po uzoru na napuljski Castello del Uovo (hrv. Dvorac Jajce). Prema toj predaji, Hrvoje Vukčić bio je vazal napuljskog kralja te je stoga spomenuti Castello del Uovo odabran kao model za novi grad.[2]', 'https://www.agencija-jajce.ba/wp-content/uploads/2017/04/plivsko-jezero-jajce.jpg'),
(9, 'Travnik', 'Travnik je grad u središnjem dijelu Bosne i Hercegovine, u središnjoj Bosni, 90 km sjeverozapadno od Sarajeva, te je ujedno glavni grad Županije Središnja Bosna. Poznat je po tome što je bio prijestolnica bosanskih kraljeva u srednjem vijeku, a kasnije i osmanskih vezira od 1686. do 1850. godine, pa i velik dio njegovog kulturnog nasljeđa datira iz tog perioda.\r\n\r\nOpćina Travnik omeđena je s devet općina: na jugu Bugojnom, Novim Travnikom i Vitezom, na istoku Zenicom, na sjeveru Teslićem, Kotor Varoši, Skender Vakufom, na zapadu Jajcem i Donjim Vakufom.\r\n\r\nTravnik se nalazi vrlo blizu zemljopisnog središta Bosne i Hercegovine. Rijeka Lašva protječe kroz grad, od zapada prema istoku, prije svoga ušća u rijeku Bosnu. Grad Travnik se nalazi u velikoj Lašvanskoj dolini, koja povezuje dolinu rijeke Bosne na istoku s dolinom rijeke Vrbas na zapadu.\r\n\r\nTravnik leži na nadmorskoj visini od 514 metara. Njegovo najistaknutije zemljopisno obilježje su planine Vilenica i Vlašić, koja je dobila ime po Vlasima. Vlašić je jedna od najviših planina u Bosni i Hercegovini, s nadmorskom visinom od 1943 metra.', 'https://tntportal.ba/wp-content/uploads/2017/05/Plava-voda-Travnik.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ponuda`
--

CREATE TABLE `ponuda` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `describes` longtext NOT NULL,
  `photo` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ponuda`
--

INSERT INTO `ponuda` (`id`, `name`, `describes`, `photo`, `price`) VALUES
(1, '15 days in BiH     ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', 'http://furaj.ba/wp-content/uploads/2019/06/3-kraljevski-grad.jpg', 1299),
(2, '  10 days in BiH  ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', 'https://www.agencija-jajce.ba/wp-content/uploads/2017/04/plivsko-jezero-jajce.jpg', 899),
(3, ' 7 days in BiH ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', 'https://tntportal.ba/wp-content/uploads/2017/05/Plava-voda-Travnik.jpg', 699),
(4, ' 5 days in BiH ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', 'http://nationalpark-una.ba/addPhotos/uploads/nationalparkuna_1437557570798464295.jpg', 479);

-- --------------------------------------------------------

--
-- Table structure for table `ponudacities`
--

CREATE TABLE `ponudacities` (
  `id` int(11) NOT NULL,
  `idPonuda` int(11) DEFAULT NULL,
  `idCities` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ponudacities`
--

INSERT INTO `ponudacities` (`id`, `idPonuda`, `idCities`) VALUES
(10, 2, 6),
(11, 2, 5),
(12, 2, 8),
(13, 3, 1),
(14, 3, 7),
(15, 3, 9),
(16, 4, 1),
(21, 1, 9),
(26, 1, 5),
(27, 1, 6),
(32, 1, 2),
(33, 1, 1),
(34, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `poruka`
--

CREATE TABLE `poruka` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poruka`
--

INSERT INTO `poruka` (`id`, `name`, `email`, `message`) VALUES
(1, 'Neko', 'neko@gmail.com', 'sas'),
(2, 'Neko', 'neko@gmail.com', 'ASDCASD'),
(3, 'Neko', 'neki1928@outlook.com', 'sas'),
(4, 'mustafa', 'musa@gmail.com', 'Odlicna vam je stranica.Sve pohvale'),
(5, 'Neko', 'semsudin.beso2018@size.ba', 'a'),
(6, 'Neko', 'semsudin.beso2018@size.ba', 'a'),
(7, 'Neko', 'semsudin.beso2018@size.ba', 'a'),
(8, 'Neko', 'semsudin.beso2018@size.ba', 'a'),
(9, 'Semso', 'semsudin.beso2018@size.ba', 'odlicna str'),
(10, 'Neko', 'neko@gmail.com', 'ss'),
(11, 'Neko', 'dsdsfdf@asdasd.vdf', 'dsfsdfdfssfdsf');

-- --------------------------------------------------------

--
-- Table structure for table `rezervacije`
--

CREATE TABLE `rezervacije` (
  `id` int(11) NOT NULL,
  `idPonuda` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `datum` date NOT NULL,
  `datumRezervacije` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `year`, `pwd`) VALUES
(26, 'neko', 'nekic', 'neko1', 'neko@gmail.com', 1994, '$2y$10$8.FcUvz..DDjefEb6jlEAeLCxtswOYNnhsdYMed5Mk0AqbKk7mAae'),
(27, 'sad', 'vvdc', 'jn', 'neki1928@outlook.com', 2008, '$2y$10$5igB2ki7wWzYnGkdBYYGV.7tY1LGvG2GnGl3puGgdn42I0Lr/vVNu'),
(28, 'sad', 'vvdc', 'a', 's@ha.com', 1979, '$2y$10$fjSoJu7harJRI5Azs0l2QegBthPi2CUSEpZTIcczv7FuFNHxdebgu'),
(29, 'mustafa', 'drapic', 'musa', 'musa@gmail.com', 2006, '$2y$10$ndVviSPtXI07bBD8fPwdcOBkIVyWRYo9cTOlyammx5e72gXD32ofe'),
(30, 'benjo', 'vvdc', 'benjo', 'sd@ha.com', 1986, '$2y$10$8mfMC9VUyHsckRn//0b61OdxmA11zVn5ojJ1pN7CCczWC8.bFSN/m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `USERID` (`USERID`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ponuda`
--
ALTER TABLE `ponuda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ponudacities`
--
ALTER TABLE `ponudacities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCities` (`idCities`),
  ADD KEY `idPonuda` (`idPonuda`);

--
-- Indexes for table `poruka`
--
ALTER TABLE `poruka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rezervacije`
--
ALTER TABLE `rezervacije`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ponuda` (`idPonuda`),
  ADD KEY `FK_users` (`idUser`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ponuda`
--
ALTER TABLE `ponuda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ponudacities`
--
ALTER TABLE `ponudacities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `poruka`
--
ALTER TABLE `poruka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rezervacije`
--
ALTER TABLE `rezervacije`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`USERID`) REFERENCES `users` (`id`);

--
-- Constraints for table `ponudacities`
--
ALTER TABLE `ponudacities`
  ADD CONSTRAINT `ponudacities_ibfk_1` FOREIGN KEY (`idCities`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `ponudacities_ibfk_2` FOREIGN KEY (`idPonuda`) REFERENCES `ponuda` (`id`);

--
-- Constraints for table `rezervacije`
--
ALTER TABLE `rezervacije`
  ADD CONSTRAINT `FK_ponuda` FOREIGN KEY (`idPonuda`) REFERENCES `ponuda` (`id`),
  ADD CONSTRAINT `FK_users` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
