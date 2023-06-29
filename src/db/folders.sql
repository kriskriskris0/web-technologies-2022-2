-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 29 2023 г., 10:48
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lesson20`
--

-- --------------------------------------------------------

--
-- Структура таблицы `folders`
--

CREATE TABLE `folders` (
                           `id` int NOT NULL,
                           `name` varchar(255) NOT NULL,
                           `parentId` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `folders`
--

INSERT INTO `folders` (`id`, `name`, `parentId`) VALUES
                                                     (1, 'Folder 1', NULL),
                                                     (2, 'Subfolder 1.1', 1),
                                                     (3, 'Subfolder 1.2', 1),
                                                     (4, 'Folder 2', NULL),
                                                     (5, 'Subfolder 2.1', 4),
                                                     (6, 'Subfolder 2.2', 4),
                                                     (7, 'Subfolder 2.3', 4),
                                                     (8, 'Folder 3', NULL),
                                                     (9, 'Subfolder 3.1', 8),
                                                     (10, 'Subfolder 3.2', 8);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `folders`
--
ALTER TABLE `folders`
    ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
