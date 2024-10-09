-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Gegenereerd op: 09 okt 2024 om 13:39
-- Serverversie: 11.1.2-MariaDB-1:11.1.2+maria~ubu2204
-- PHP-versie: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Projects`
--

CREATE TABLE `Projects` (
  `name` varchar(255) NOT NULL,
  `smallText` varchar(1000) NOT NULL,
  `bigText` varchar(5000) NOT NULL,
  `infoText` varchar(1000) NOT NULL,
  `categoryText` varchar(1000) NOT NULL,
  `clientText` varchar(1000) NOT NULL,
  `teamsText` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(1000) NOT NULL,
  `gitLink` varchar(1000) NOT NULL,
  `liveLink` varchar(1000) NOT NULL,
  `phpTag` tinyint(1) NOT NULL,
  `cssTag` tinyint(1) NOT NULL,
  `jsTag` tinyint(1) NOT NULL,
  `sqlTag` tinyint(1) NOT NULL,
  `pythonTag` tinyint(1) NOT NULL,
  `wordpressTag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `Projects`
--

INSERT INTO `Projects` (`name`, `smallText`, `bigText`, `infoText`, `categoryText`, `clientText`, `teamsText`, `date`, `image`, `gitLink`, `liveLink`, `phpTag`, `cssTag`, `jsTag`, `sqlTag`, `pythonTag`, `wordpressTag`) VALUES
('api', '...', '...', '...', 'JS/CSS', 'School', 'Solo', '2023-02-27', 'api.png', 'https://github.com/lars34932/api', 'https://34932.hosts1.ma-cloud.nl/projecten/pokemon-api/0', 0, 1, 1, 0, 0, 0),
('Boardgame', '...', '...', '...', 'JS', 'School', 'Solo', '2023-12-11', 'boardgame.png', 'https://github.com/lars34932/boardgame', 'https://34932.hosts1.ma-cloud.nl/projecten/boardgame/', 0, 0, 1, 0, 0, 0),
('Css art', '...', '...', '..', 'CSS/JS', 'School', 'Solo', '2023-05-08', 'cssArt.png', 'https://github.com/lars34932/css-art', 'https://34932.hosts1.ma-cloud.nl/projecten/css-art/', 0, 1, 1, 0, 0, 0),
('Duurzaam huis', '...', '...', '...', 'JS/PHP/C', 'School', 'Teams', '2023-02-13', 'duurzaamhuis.png', 'https://github.com/lars34932/Duurzaam-huis', 'https://34932.hosts1.ma-cloud.nl/projecten/duurzaamhuis/', 1, 1, 1, 0, 0, 0),
('Infinite scroller', 'Infinite Scroller is een website die gebruikmaakt van een oneindige scrollfunctie. Het project werd ontwikkeld met JavaScript als onderdeel van een opdracht van mijn docent.', 'Infinite Scroller is een solo-project waarin ik een website heb gebouwd met een oneindige scrollfunctie. Het project had als doel mijn JavaScript-vaardigheden te verbeteren, specifiek in het manipuleren van de DOM. Het project duurde 4 weken en was een opdracht van mijn docent.', 'Infinite Scroller was een solo-project waarbij ik de functionaliteit van oneindig scrollen heb geïmplementeerd in een website. Gedurende 4 weken werkte ik aan dit project, waarbij ik mijn kennis van JavaScript en de manipulatie van de DOM verder ontwikkelde. Het bouwen van de oneindig scroller zelf was het meest interessante deel van het project. Er waren geen grote uitdagingen, maar het was een waardevolle oefening in het creëren van interactieve webfunctionaliteiten. Dit project werd uitgevoerd als onderdeel van een opdracht van mijn docent.', 'JavaScript', 'School', 'Solo', '2024-03-11', 'scroller.png', 'https://github.com/lars34932/socialmedia', 'https://34932.hosts1.ma-cloud.nl/projecten/scroller/', 0, 0, 1, 0, 0, 0),
('Japan musea', '...', '...', '...', 'Css', 'School', 'Solo', '2023-02-20', 'japan-musea.png', 'https://github.com/lars34932/japan-musea', 'https://34932.hosts1.ma-cloud.nl/projecten/japan-musea/', 0, 1, 1, 0, 0, 0),
('Jellyfish', '...', '...', '...', 'C/PHP/JS', 'The Upside Down Amsterdam', 'Teams', '2023-11-27', 'jellyfish.png', 'https://github.com/D0nnyy/JellyFish', 'https://34932.hosts1.ma-cloud.nl/projecten/jellyfish/', 1, 0, 1, 1, 0, 0),
('Kalender', 'Kalender is een website waarmee ik mijn JavaScript-vaardigheden verder heb ontwikkeld door een kalenderfunctie te maken. Het project was een opdracht van mijn docent.', 'Kalender is een solo-project waarbij ik een website heb gemaakt om meer te leren over JavaScript. Het doel was om een functie te ontwikkelen die de huidige dag weergeeft. Dit project duurde 4 weken en was onderdeel van een opdracht van mijn docent.', 'Kalender was een project waarin ik mijn kennis van JavaScript kon verdiepen. Gedurende 4 weken werkte ik solo aan een website met een kalenderfunctie, die de huidige dag toont. Het leukste aan dit project was het bouwen van de functie zelf, waarbij ik de DOM in JavaScript heb leren manipuleren. Er waren geen grote uitdagingen, maar het was een goede oefening in het werken met JavaScript en het begrijpen van de basisprincipes. Dit project werd uitgevoerd als een opdracht voor mijn docent.', 'JavaScript', 'School', 'Solo', '2024-03-18', 'kalender.png', 'https://github.com/lars34932/kalender', 'https://34932.hosts1.ma-cloud.nl/projecten/kalender/', 0, 0, 1, 0, 0, 0),
('Muse', 'Muse is een interactieve website, ontwikkeld voor het Amsterdam Museum, die informatie biedt over het Wampum-item. De website combineert tekst en 3D-modellen, gebouwd met HTML, CSS, JavaScript en Three.js, om bezoekers een boeiende en leerzame ervaring te geven.', 'Muse is een project voor het Amsterdam Museum dat informatie biedt over het Wampum-item. De website maakt gebruik van 3D-modellen met Three.js, gecombineerd met tekst, om bezoekers op een visueel rijke manier te betrekken. Het project duurde 10 weken en werd in teamverband uitgevoerd, met als doel een innovatieve presentatie van het museumstuk.', 'Het Muse-project was een samenwerkingsopdracht voor het Amsterdam Museum, waarbij ons team een website ontwierp om het museumstuk Wampum op een interessante en visueel aantrekkelijke manier te presenteren. Gedurende de 10 weken dat we aan het project werkten, lag de focus op het integreren van 3D-modellen met Three.js om bezoekers een interactieve ervaring te bieden. Naast het gebruik van Three.js hebben we ook onze vaardigheden in HTML, CSS, en JavaScript verder ontwikkeld. Een van de grootste uitdagingen was het correct weergeven van de 3D-modellen, zodat deze soepel werkten in verschillende browsers. Ondanks de technische eisen en het werken in teamverband, was het vooral het leren van nieuwe technieken en het effectief combineren van tekst en visuals dat het project voor mij echt interessant maakte. Het eindresultaat voldeed aan de verwachtingen, en ik ben trots op wat we als team hebben bereikt.', 'Web/3D', 'Amsterdam museum', 'Team', '2024-05-13', 'muse.png', 'https://github.com/lars34932/Muse', 'https://34932.hosts1.ma-cloud.nl/projecten/muse/', 0, 1, 1, 0, 0, 0),
('Museum online', '...', '...', '...', 'Web/JS', 'Nationaal Videogame Museum', 'Teams', '2022-11-28', 'museumOnline.png', 'https://github.com/lars34932/P2-museum-online', 'https://34932.hosts1.ma-cloud.nl/projecten/P2-museum-online/', 0, 1, 1, 0, 0, 0),
('Muziek lib', '...', '...', '...', 'PHP/SQL', 'School', 'Solo', '2023-10-02', 'muziekLib.png', 'https://github.com/lars34932/muzieklib', 'https://34932.hosts1.ma-cloud.nl/projecten/muziek-lib/public/index.php', 1, 1, 1, 1, 0, 0),
('Private dining', '...', '...', '...', 'Wordpress', 'School', 'Solo', '2024-05-13', 'private-dining.png', 'https://github.com/lars34932/M8PROG-wordpress', 'https://34932.hosts1.ma-cloud.nl/m8prog/', 1, 1, 0, 1, 0, 1),
('Sdg\'s', 'Sdg\'s is een website ontwikkeld in samenwerking met de VN om jonge mensen te informeren over de Sustainable Development Goals. Het project is gebouwd met PHP en CSS.', 'Sdg\'s is een teamproject waarbij we een website hebben ontwikkeld om informatie te geven over de Sustainable Development Goals (SDG\'s). Het project, in opdracht van de VN, werd uitgevoerd met PHP en CSS en richtte zich op het informeren van jonge mensen.', 'Het Sdg\'s-project was een samenwerking met de VN om een informatieve website te bouwen over de Sustainable Development Goals. Gedurende de 10 weken dat we eraan werkten, gebruikte ik voornamelijk PHP en CSS. Het was vooral interessant om te leren hoe ik data effectief uit een database kon halen met PHP. Het werken met PHP was het leukste deel van het project. Hoewel we geen grote uitdagingen tegenkwamen, was het een waardevolle ervaring om in een team te werken en een website te ontwikkelen die gericht was op het informeren van jongeren', 'Web/PHP/SQL', 'VN', 'Teams', '2023-09-04', 'sdg.png', 'https://github.com/lars34932/sd2-periode-1', 'https://34932.hosts1.ma-cloud.nl/projecten/sdg/public/index.php', 1, 1, 0, 1, 0, 0),
('Skills heroes', '...', '...', '...', 'Web/JS', 'WorldSkills', 'Solo', '2024-09-05', 'skills-heroes.png', 'https://github.com/lars34932/skills-heroes', 'https://34932.hosts1.ma-cloud.nl/projecten/skills-heroes/', 0, 1, 1, 0, 0, 0),
('Tekenen', '...', '...', '...', 'Webvr', 'School', 'solo', '2023-03-13', 'tekenen.png', 'https://github.com/lars34932/Tekenen', 'https://34932.hosts1.ma-cloud.nl/projecten/tekenen/', 0, 0, 1, 0, 0, 0),
('Tulpenreizen', '...', '...', '...', 'Web/Scss', 'School', 'Solo', '2023-10-23', 'tulpenreizen.png', 'https://github.com/lars34932/tulpenreizen', 'https://34932.hosts1.ma-cloud.nl/projecten/tulpreizen/', 0, 1, 0, 0, 0, 0),
('Webshop', '...', '...', '...', 'Web/JS', 'School', 'Solo', '2023-05-08', 'webshop.png', 'https://github.com/lars34932/webshop', 'https://34932.hosts1.ma-cloud.nl/projecten/webshop/', 0, 1, 1, 0, 0, 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `Projects`
--
ALTER TABLE `Projects`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
