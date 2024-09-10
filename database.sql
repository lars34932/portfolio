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
CREATE DATABASE IF NOT EXISTS `portfolio` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `portfolio`;

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
  `designText` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(1000) NOT NULL,
  `buttonLink` varchar(1000) NOT NULL,
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

INSERT INTO `Projects` (`name`, `smallText`, `bigText`, `infoText`, `categoryText`, `clientText`, `designText`, `date`, `image`, `buttonLink`, `liveLink`, `phpTag`, `cssTag`, `jsTag`, `sqlTag`, `pythonTag`, `wordpressTag`) VALUES
('Test123', 'wdaljwb aodb oauwdh aouwdh bdyw gawdvy d2 yd wdaljwb aodb oauwdh aouwdh bdyw gawdvy d2 yd wdaljwb aodb oauwdh aouwdh bdyw gawdvy d2 yd wdaljwb aodb oauwdh aouwdh bdyw gawdvy d2 yd wdaljwb aodb oauwdh aouwdh bdyw gawdvy d2 yd', 'erg  gerg erg zdfg erg reg rweg dzfb dzfb aervaerv earg erg ', 'test testtest testtest testtest testtest testtest testtest testtest test', 'test test', 'test test', 'test test', '2024-09-01', 'https://fastly.picsum.photos/id/366/200/300.jpg?hmac=DSwBED2NJAjXrxxpoaV9bSb7mk2FlPwa03WwDJ6VcdQ', 'Test123', 'https://34932.hosts1.ma-cloud.nl/m8prog/', 1, 1, 1, 1, 0, 1),
('test2', 'hallo dit is een test', 'awd', '', '', '', '', '0000-00-00', 'https://fastly.picsum.photos/id/677/200/300.jpg?hmac=SY5ivEgZyzceLCwED8Yf6wbKGkh7BZ9JrsxywDxM1m0', 'test', 'test', 0, 1, 1, 0, 1, 0);

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
