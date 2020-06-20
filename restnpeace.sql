-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 20 2020 г., 13:41
-- Версия сервера: 5.7.24
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `restnpeace`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE cp1251_general_cs NOT NULL,
  `sort_order` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_cs;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `sort_order`, `status`) VALUES
(1, 'Основные блюда', 1, 1),
(2, 'Гарниры и закуски', 5, 1),
(3, 'Салаты', 3, 1),
(4, 'Супы', 4, 1),
(5, 'Напитки', 2, 1),
(7, 'Десерты', 7, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `ingredient`
--

DROP TABLE IF EXISTS `ingredient`;
CREATE TABLE IF NOT EXISTS `ingredient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE cp1251_general_cs NOT NULL,
  `kol` int(11) NOT NULL,
  `date` timestamp NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_cs;

--
-- Дамп данных таблицы `ingredient`
--

INSERT INTO `ingredient` (`id`, `name`, `kol`, `date`, `price`) VALUES
(1, 'лук', 7, '2019-03-31 21:00:00', 40),
(2, 'укроп', 9, '2019-04-01 21:00:00', 10),
(3, 'телятина', 6, '2019-04-01 21:00:00', 70),
(4, 'сыр чедер', 7, '2019-04-01 21:00:00', 90),
(5, 'помидоры', 5, '2019-04-01 21:00:00', 45),
(6, 'картофель', 7, '2019-04-01 21:00:00', 40),
(7, 'морковь', 10, '2019-04-01 21:00:00', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE cp1251_general_cs NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `weight` int(11) NOT NULL,
  `ingredients` text COLLATE cp1251_general_cs NOT NULL,
  `availability` int(11) NOT NULL,
  `description` text COLLATE cp1251_general_cs NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT '0',
  `is_recommended` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_cs;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `price`, `weight`, `ingredients`, `availability`, `description`, `is_new`, `is_recommended`, `status`) VALUES
(44, 'Пицца ', 1, 40, 0, '0', 1, 'Пицца (итал. Pizza от итал. Pizzicare - быть острым [1]) - итальянское национальное блюдо в виде круглой открытой дрожжевой лепёшки, покрытой в классическом варианте томатным соусом и расплавленным сыром. Сыр (как правило, моцарелла) является главным ингредиент начинки пиццы. Одно из самых популярных блюд в мире, как в домашней кухне, так и в ресторанах, кафе и фастфуде.', 0, 1, 1),
(4, 'Шашлык', 1, 100, 0, '0', 1, 'шашлычок', 0, 0, 1),
(5, 'Овощной', 4, 40, 0, '0', 1, 'супец', 0, 0, 1),
(6, 'Бургер', 1, 30, 0, '0', 1, 'очень вкусный бургер', 0, 0, 1),
(9, 'гречневая каша', 1, 20, 0, '0', 1, 'гречка', 1, 0, 1),
(10, 'сьомга на гриле', 1, 300, 0, '0', 1, 'мтш', 0, 0, 1),
(13, 'Пюре', 1, 40, 0, '0', 1, 'dfghj', 1, 1, 1),
(14, 'Харчо', 4, 45, 0, '0', 1, 'Самый вкусный суп харчо в вашей жизни', 1, 1, 1),
(15, 'Маргарита с манго', 5, 20, 0, '0', 1, 'желтенько', 1, 1, 1),
(16, 'Голубая маргарита', 5, 34, 0, '0', 1, 'голубая', 1, 1, 1),
(17, 'Апероль', 5, 20, 0, '0', 1, 'Апероль', 1, 1, 1),
(18, 'белый русский', 5, 50, 0, '0', 1, 'белый', 1, 1, 1),
(19, 'Кровая мери', 5, 45, 0, '0', 1, 'кровавая', 1, 1, 1),
(20, 'лонг айленд', 5, 50, 0, '0', 1, 'лонг', 1, 1, 1),
(21, 'Мохито', 5, 30, 0, '0', 1, 'мохито', 1, 1, 1),
(22, 'Каштановые кинтоны', 7, 44, 0, '0', 1, '', 1, 1, 1),
(23, 'Пахлава', 7, 40, 0, '0', 1, 'медовая', 0, 1, 1),
(24, 'Сапопицяс', 7, 70, 0, '0', 1, 'что-то непонятное', 0, 1, 1),
(25, 'Тирамису', 7, 50, 0, '0', 1, '', 1, 1, 1),
(26, 'Фруктовый салат', 7, 66, 0, '0', 1, '', 1, 1, 1),
(27, 'Чуррос', 7, 59, 0, '0', 1, '', 1, 1, 1),
(28, 'Гречиский', 3, 13, 0, '0', 1, '', 1, 1, 1),
(29, 'Крабовый', 3, 11, 0, '0', 1, '', 1, 1, 1),
(30, 'Овощной', 3, 40, 0, '0', 1, '', 1, 1, 1),
(31, 'Оливье', 3, 66, 0, '0', 1, '', 1, 1, 1),
(32, 'Селедка под шубой', 3, 34, 0, '0', 1, '', 1, 1, 1),
(33, 'Цезарь', 3, 55, 0, '0', 1, '', 1, 1, 1),
(34, 'Грибной', 4, 25, 0, '0', 1, '', 1, 1, 1),
(35, 'Окрошка', 4, 66, 0, '0', 1, '', 1, 1, 1),
(36, 'Рассольник', 4, 78, 0, '0', 1, '', 1, 1, 1),
(37, 'Рыбный', 4, 45, 0, '0', 1, '', 1, 1, 1),
(38, 'Гренки с чесноком', 2, 12, 0, '0', 1, '', 1, 1, 1),
(39, 'Конвертики с грибами', 2, 13, 0, '0', 1, '', 1, 1, 1),
(40, 'Минтай в кляре', 2, 14, 0, '0', 1, '', 1, 1, 1),
(41, 'Острый сыр', 2, 66, 0, '0', 1, '', 1, 1, 1),
(42, 'Рулет с сёмгой', 2, 34, 0, '0', 1, '', 1, 1, 1),
(43, 'Рулеты из ветчины', 2, 45, 0, '0', 1, '', 1, 1, 1),
(46, 'тест', 1, 40, 250, '0', 1, '', 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product_order`
--

DROP TABLE IF EXISTS `product_order`;
CREATE TABLE IF NOT EXISTS `product_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_comment` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text NOT NULL,
  `totalprice` float NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_order`
--

INSERT INTO `product_order` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `date`, `products`, `totalprice`, `status`) VALUES
(47, 'david', '0960454915', '', 3, '2019-04-01 09:04:01', '{\"10\":1,\"9\":1}', 0, 1),
(48, 'david', '0960454915', '', 3, '2019-04-02 08:33:40', 'false', 0, 1),
(49, 'david', '0960454915', 'траливали', 3, '2019-04-02 15:25:02', '{\"10\":1,\"9\":1}', 0, 1),
(50, 'TopProfesor', '0960454915', 'choto-tam', 4, '2019-04-03 06:55:20', '{\"10\":1,\"9\":1}', 0, 1),
(51, 'TopProfesor', '0960454915', '', 4, '2019-04-03 08:59:00', '{\"6\":1,\"9\":1}', 0, 1),
(52, 'david', '0960454915', '', 3, '2019-04-03 12:45:35', '{\"10\":1}', 0, 1),
(53, 'david', '0960454915', '', 3, '2019-04-03 12:49:25', '{\"6\":1}', 0, 1),
(54, 'david', '0960454915', '', 3, '2019-04-03 13:20:06', '{\"9\":1}', 0, 1),
(55, 'david', '0960454915', '', 3, '2019-04-11 17:25:50', '{\"6\":1,\"14\":1}', 0, 1),
(56, 'david', '0960454915', '', 3, '2019-04-12 08:55:06', '{\"37\":1}', 0, 1),
(57, 'david', '0960454915', '', 3, '2019-04-22 07:21:54', '{\"44\":2}', 0, 1),
(58, 'david', '0960454915', '', 3, '2019-04-24 12:25:18', '{\"44\":1,\"13\":1,\"10\":1}', 0, 1),
(59, 'david', '0960454915', '', 3, '2019-04-24 12:34:53', '{\"13\":1,\"10\":1}', 0, 1),
(60, 'david', '4545454545454', '', 3, '2019-04-25 06:21:43', '{\"45\":2}', 0, 1),
(61, 'david', '0960454915', '', 3, '2019-04-25 08:51:44', '{\"45\":1,\"44\":1}', 0, 1),
(62, 'david', '0960454915', '', 3, '2019-04-25 09:03:36', '{\"21\":1}', 30, 1),
(63, 'david', '0960454915', '', 3, '2019-04-25 09:04:49', '{\"45\":1,\"44\":1}', 97, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE cp1251_general_cs NOT NULL,
  `email` varchar(255) COLLATE cp1251_general_cs NOT NULL,
  `password` varchar(255) COLLATE cp1251_general_cs NOT NULL,
  `role` varchar(255) COLLATE cp1251_general_cs DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_cs;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(3, 'david', 'd.od@ukr.net', 'qwerty', 'admin'),
(4, 'TopProfesor', 'Top.od@ukr.net', 'qwerty', ''),
(5, 'Проверочный гость', 'kokoitiEmail@ukr.net', 'qwerty', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
