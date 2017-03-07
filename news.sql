-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 07 2017 г., 15:50
-- Версия сервера: 5.5.48
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testtask`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `date`) VALUES
(1, 'Gotthard Base Tunnel Becomes World’s Longest Railway Tunnel', 'The world’s longest railway tunnel, the Gotthard Base Tunnel, was opened after many years of construction. Trains can travel at speeds of up to 250 km an hour through the 57 km long tunnel. It took 17 years to complete and cost $12 billion. The engineering milestone will bring southern Germany and northern Italy closer together.\r\n\r\nThe new Gotthard Base Tunnel is also the world’s deepest tunnel, located 2300 metres below Swiss mountain peaks. A total of 2600 workers involved in building the tunnel had to excavate more than 28 million tonnes of rock.\r\n\r\nGottardino shuttle trains will be running between the two endpoints of the tunnel and make a stop at Sedrun, a mountain station in the middle. 65 passenger  and 240 freight trains are expected to travel through the tunnel every day. The Gotthard Base Tunnel  will reduce the time it takes trains to pass through the Alps. A journey from Zurich to Milan, for example,  will be reduced by an hour.\r\n\r\nThe new tunnel is part of a larger European transportation project that includes two other tunnels in the Alps. Ultimately, the EU plans a high-speed rail connection between its two major harbours, Rotterdam and Genoa.\r\n\r\nDuring the course of history  the Alps have been a natural barrier to travel. In the past traders and merchants had to use mountain passes to travel from north to south. The first Gotthard rail tunnel opened in 1882, but as time went on it could not handle the growing traffic.\r\n\r\nIn the 1990s, Swiss citizens approved of a government plan to build a new tunnel. How hard such a construction feat would be soon became obvious . In places where there was hard rock boring was extremely slow. Workers could only advance only about half a metre every day.\r\n\r\nThe new tunnel is expected to reduce road traffic crossing the Alps as more and more lorries and cargo companies will put their freight on Swiss trains.', '2017-03-07 08:43:15'),
(2, 'Barack Obama First American President to Visit Hiroshima', 'Barack Obama has become the first American president  to visit Hiroshima.  During his recent visit to Japan he visited the city which was destroyed by the first atomic bomb.\r\n\r\nTogether with Japan’s Prime Minister Shinzo Abe, Obama laid a wreath at the Hiroshima Peace Memorial. In an emotional speech, Obama did not apologize to the Japanese people, but called the dropping of the first atomic bomb the biggest crime in human history. The American president demanded a world without nuclear weapons. The United States would also continue to stand by Japan, which turned from an enemy into an important ally in Asia. After the ceremony, Obama signed the guest book  and spoke with survivors.\r\n\r\nAbout 140,000 people were killed on August 6, 1945 when in the first atomic bomb exploded over the city. An additional 70000 died when the second bomb was dropped over Nagasaki. Nine days later Japan surrendered and World War II ended. Tens of thousands died from radiation illnesses in the decades that followed.\r\n\r\nObama did not mention the 20 000 Korean victims, who were forced to work for the Japanese in Hiroshima at the time of the bombing.\r\n\r\nAlthough visiting Hiroshima has been a very sensitive issue for past American presidents, polls revealed that most Japanese wanted Obama to visit the city.', '2017-03-07 12:20:22');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
