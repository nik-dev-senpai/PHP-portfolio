-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 11 2019 г., 14:56
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tasks`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `task id` int(11) NOT NULL,
  `text` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`task id`, `text`) VALUES
(3, 'Lorem ipsum dolor sit amet'),
(3, 'Lorem ipsum dolor sit amet'),
(3, 'Lorem ipsum dolor sit amet'),
(3, 'Lorem ipsum dolor sit amet'),
(1, 'Lorem ipsum dolor sit amet'),
(14, 'Some text...');

-- --------------------------------------------------------

--
-- Структура таблицы `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `task` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `list`
--

INSERT INTO `list` (`id`, `task`, `status`, `date`) VALUES
(1, 'Finish a book', 'TODO', '2019-12-08 19:19:55'),
(2, 'Confirm details of the Sales Agreement', 'TODO', '2019-12-08 19:19:55'),
(3, 'Ensure that the Corporate Identity is available and clearly defined', 'TODO', '2019-12-08 19:19:55'),
(4, 'Required system availability', 'TODO', '2019-12-08 19:19:55'),
(5, 'Project Planning', 'TODO', '2019-12-08 19:19:55'),
(6, 'Scheduling of regular (intermediate) releases for customer testing and assessment', 'TODO', '2019-12-08 19:19:55'),
(7, 'Feasibility Analysis', 'TODO', '2019-12-08 19:19:55'),
(8, 'Organizational responsibilities', 'DONE', '2019-12-08 19:19:55'),
(9, 'Second opinion. Use as opportunity for knowledge transfer', 'TODO', '2019-12-08 19:19:55'),
(10, 'Target Metrics (e.g. visitors, hits, data volume, etc)', 'TODO', '2019-12-08 19:19:55'),
(11, 'Classification of data, and any access requirements', 'DONE', '2019-12-08 19:19:55'),
(12, 'Centralize data storage', 'TODO', '2019-12-08 19:19:55'),
(13, 'Confirm products and versions to be used; for example, Sites, Assets, Communities, Commerce', 'TODO', '2019-12-08 19:19:55'),
(14, 'Technically review the Proof of Concept', 'DOING', '2019-12-08 19:19:55'),
(18, 'Check mail', 'TODO', '2019-12-09 15:53:23'),
(24, 'New task', 'DOING', '2019-12-09 16:35:28'),
(25, 'Some task', 'DONE', '2019-12-09 17:36:17');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `list`
--
ALTER TABLE `list`
  ADD UNIQUE KEY `UNIQUE` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
