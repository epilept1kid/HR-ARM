-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 06 2024 г., 19:03
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hr-arm`
--
CREATE DATABASE IF NOT EXISTS `hr-arm` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hr-arm`;

-- --------------------------------------------------------

--
-- Структура таблицы `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `employees`
--

INSERT INTO `employees` (`id`, `full_name`, `position`, `department`, `email`, `phone`) VALUES
(1, 'Иванов Иван Иванович', 'Преподаватель', 'Кафедра информационных систем', 'ivanov@example.com', '+1234567890'),
(2, 'Петров Петр Петрович', 'Декан', 'Факультет экономики и управления', 'petrov@example.com', '+9876543210'),
(3, 'Сидорова Елена Владимировна', 'Ассистент', 'Кафедра финансов и банковского дела', 'sidorova@example.com', '+1122334455'),
(4, 'Козлова Ольга Алексеевна', 'Заместитель декана', 'Факультет экономики и управления', 'kozlova@example.com', '+9988776655'),
(5, 'Никитин Дмитрий Игоревич', 'Старший преподаватель', 'Кафедра маркетинга и рекламы', 'nikitin@example.com', '+1122334466'),
(6, 'Смирнова Анна Сергеевна', 'Ассистент', 'Кафедра управления персоналом', 'smirnova@example.com', '+1122334477'),
(7, 'Морозова Марина Владимировна', 'Преподаватель', 'Кафедра финансов и банковского дела', 'morozova@example.com', '+1122334488'),
(8, 'Кузнецов Владимир Иванович', 'Преподаватель', 'Кафедра информационных систем', 'kuznetsov@example.com', '+1122334499'),
(9, 'Алексеев Виктор Петрович', 'Доцент', 'Кафедра маркетинга и рекламы', 'alekseev@example.com', '+1122334500'),
(10, 'Павлова Екатерина Александровна', 'Ассистент', 'Кафедра управления персоналом', 'pavlova@example.com', '+1122334511');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
