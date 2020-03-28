-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 28. Mrz 2020 um 16:09
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `animals`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `animal`
--

CREATE TABLE `animal` (
  `animal_id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `location_name` varchar(40) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `image_location` varchar(400) DEFAULT NULL,
  `zip_code` varchar(30) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `breed` varchar(30) DEFAULT NULL,
  `type` enum('small','larg','senior') DEFAULT 'small',
  `website` varchar(200) DEFAULT NULL,
  `hobbies` varchar(100) DEFAULT NULL,
  `animal_date` datetime DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `status` enum('available','reserved') NOT NULL DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `animal`
--

INSERT INTO `animal` (`animal_id`, `name`, `image`, `location_name`, `city`, `address`, `image_location`, `zip_code`, `description`, `breed`, `type`, `website`, `hobbies`, `animal_date`, `age`, `status`) VALUES
(1, 'papi', 'https://cdn.pixabay.com/photo/2018/08/12/16/59/ara-3601194_960_720.jpg', 'syria', 'damascus', 'bab thoma 38', 'https://cdn.pixabay.com/photo/2019/03/04/08/13/syria-4033533_960_720.jpg', '+963', 'very colory papagei ,, it can say 49 words', 'papagei', 'small', 'https://cdn.pixabay.com/photo/2019/03/04/08/13/syria-4033533_960_720.jpg', 'flying, coconat eating', '2020-03-25 13:04:34', 2, 'available'),
(3, 'loly', 'https://cdn.pixabay.com/photo/2017/07/25/01/22/cat-2536662_960_720.jpg', 'germany', 'berlin', 'müllerstrasse 37', 'https://cdn.pixabay.com/photo/2017/07/02/00/43/bundestag-2463236_960_720.jpg', '17708', 'very cute caty,, she is very small and need your protect', 'cats', 'small', 'https://cdn.pixabay.com/photo/2017/07/25/01/22/cat-2536662_960_720.jpg', 'ball playing ,trinking milc', '2020-03-31 13:20:35', 1, 'reserved'),
(4, 'phill', 'https://cdn.pixabay.com/photo/2017/06/07/10/47/elephant-2380009_960_720.jpg', 'swizerland', 'bern', 'schneidergasse 103', 'https://cdn.pixabay.com/photo/2017/03/18/22/12/bern-2155080_960_720.jpg', '29904', 'its small elephent lost its mum and need your help if you have good enviroment', 'elephent', 'larg', 'https://cdn.pixabay.com/photo/2017/06/07/10/47/elephant-2380009_960_720.jpg', 'swimming', '2020-03-05 13:20:35', 3, 'available'),
(5, 'herty', 'https://cdn.pixabay.com/photo/2015/08/18/08/17/kids-893431_960_720.jpg', 'lebanon', 'beirut', 'george 23', 'https://cdn.pixabay.com/photo/2016/10/20/18/56/salzburg-1756367_960_720.jpg', '1771', 'its wonderful hourse ,,its owner has to travel and let him alone', 'hourse', 'larg', 'https://cdn.pixabay.com/photo/2015/08/18/08/17/kids-893431_960_720.jpg', 'running , skip barries', '2020-03-30 13:34:02', 3, 'available'),
(6, 'kharoofy', 'https://cdn.pixabay.com/photo/2017/12/17/15/58/mammal-3024471_960_720.jpg', 'egypt', 'cairo', 'sahetsyalsaied 65', 'https://cdn.pixabay.com/photo/2017/07/18/17/32/munich-2516492_960_720.jpg', '10034', 'big lamp need farmer to live with him in love', 'lamps', 'larg', 'https://cdn.pixabay.com/photo/2017/12/17/15/58/mammal-3024471_960_720.jpg', 'grass eating all the day', '2020-03-11 13:34:02', 4, 'available'),
(7, 'sharry', 'https://cdn.pixabay.com/photo/2017/12/26/21/27/mammal-3041446_960_720.jpg', 'germany', 'munich', 'mozartstrasse 23', 'https://cdn.pixabay.com/photo/2017/07/18/17/32/munich-2516492_960_720.jpg', '100045', 'its very old monkey need your love', 'monkey', 'senior', 'https://cdn.pixabay.com/photo/2017/12/26/21/27/mammal-3041446_960_720.jpg', 'playing with cats', '2020-03-24 13:58:21', 8, 'available'),
(8, 'smothy', 'https://cdn.pixabay.com/photo/2015/05/03/21/41/snake-751722_960_720.jpg', 'austria', 'salzburg', 'bäckerstrasse 65', 'https://cdn.pixabay.com/photo/2016/10/20/18/56/salzburg-1756367_960_720.jpg', '16389', '', 'snake', 'senior', 'https://cdn.pixabay.com/photo/2015/05/03/21/41/snake-751722_960_720.jpg', 'frogs eating', '2020-03-12 13:58:21', 104, 'available'),
(9, 'barry', 'https://cdn.pixabay.com/photo/2014/08/20/17/21/bear-422682_960_720.jpg', 'turkey', 'istanbul', 'mohamedgase 42', 'https://cdn.pixabay.com/photo/2016/05/19/05/01/cloud-1402190_960_720.jpg', '18200', 'syrian brown bear ,,threatend with extinction', 'bear', 'senior', 'https://cdn.pixabay.com/photo/2014/08/20/17/21/bear-422682_960_720.jpg', 'swimming, playing', '2020-03-25 14:09:42', 32, 'available'),
(10, 'popy', 'https://cdn.pixabay.com/photo/2016/12/13/05/15/puppy-1903313_960_720.jpg', 'austria', 'vienna', 'springergasse 19', 'https://cdn.pixabay.com/photo/2015/09/09/21/33/vienna-933500_960_720.jpg', '1020', 'white dog', 'dogs', 'small', 'https://cdn.pixabay.com/photo/2016/12/13/05/15/puppy-1903313_960_720.jpg', 'sleeping ,ball playing', '2020-04-17 00:00:00', 2, 'available');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `status` enum('user','admin') NOT NULL DEFAULT 'user',
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`userId`, `status`, `userName`, `userEmail`, `userPass`) VALUES
(1, 'admin', 'zolfi hasan', 'zu_alfikar@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(2, 'user', 'serri', 'serri@gmail.com', '123123');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`animal_id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `animal`
--
ALTER TABLE `animal`
  MODIFY `animal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
