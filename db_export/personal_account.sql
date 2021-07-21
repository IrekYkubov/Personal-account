-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 22 2021 г., 02:44
-- Версия сервера: 5.6.47
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `personal_account`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(150) NOT NULL,
  `intro` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `date` int(11) UNSIGNED NOT NULL,
  `author` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `intro`, `text`, `date`, `author`) VALUES
(1, 'В Польше возмутились стоимостью эксплуатации истребителя пятого поколения F-35', 'Доклад об американских истребителях был подготовлен компанией GAO. Исследование показало, что час полёта F-35 может стоить 33 тысячи долларов. Однако для Польши эта цена может стать ещё выше. В стране', 'С проблемами обслуживания сталкиваются и США. По словам главы комитета по вооружённым силам палаты представителей США Адама Смита, десятки F-35 простаивают на авиабазах из-за сложной системы логистики запасных частей. Порой доходит до смешного: чтобы поменять обыкновенный топливный шланг, приходится ждать по полгода. На данный момент на аэродромах США ждут ремонта 43 истребителя F-35.\nСтоит отметить, что интерес Варшавы к самолётам F-35 на данный момент очень высок. Польша собирается закупить американские истребители пятого поколения для нужд ВВС.\nКомментаторы польских изданий отмечают, что покупка F-35 может окончательно превратить польский бюджет в &#34;беспросветно дефицитный&#34;. Кроме того, один из польских читателей заявил, что &#34;полёты на истребителях F-35 заменят Польше полёты в космос&#34;.', 1626901576, 'Andrey'),
(2, 'Доступ к социальной сети Clubhouse получили все желающие', 'Разработчики Clubhouse открыли доступ в свою социальную сеть всем желающим. Теперь зарегистрировать и использовать платформу может любой владелец смартфона, совместимого с приложением Clubhouse.', 'До этого в сервис можно было попасть исключительно по приглашениям действующих пользователей. Чтобы расширять перечень участников, разработчики периодически выдавали им ограниченное число инвайтов, чтобы те могли позвать своих друзей и знакомых. По словам создателей платформы, периодическое расширение аудитории помогло им расти плавно и избежать проблем с сервисом.\n«Мы всегда хотели, чтобы Clubhouse стал открытым приложением. У каждого должен быть доступ к содержательным беседам и лучшие комнаты это те, в которых вы встречаетесь с людьми, далёкими от вашего круга общения. С разными взглядами и опытом, которые меняют ваш взгляд на мир», — заявили основатели сервиса Пол Дэвидсон (Paul Davison) и Рохан Сет (Rohan Seth).\nЗапуск Clubhouse состоялся в апреле 2020 года исключительно на iOS. Изначально особенность соцсети была в том, что её пользователи могли общаться исключительно в аудиокомнатах. При этом, согласно правилам, запрещено записывать какие-либо отрывки разговоров.&#34;', 1626903476, 'Andrey'),
(3, 'В мессенджер Telegram утекла база данных сервиса SMS-activate о транзакциях клиентов', '16 июля в Telegram-каналах начала распространяться база данных об операциях в «SMS-activate». В текстовом документе содержится 7,8 млн записей о транзакциях по оплате услуг сервиса на 89 млн строк.', 'О распространении базы знают эксперты по кибербезопасности, а также представители крупнейших банков. Номера карт пользователей сервиса хранятся в логах в маскированном виде, поэтому риски проведения несанкционированных финансовых операций не усматриваются, подчеркнул вице-президент банка «Открытие» Илья Сулоев. Он добавил: поскольку полные номера карт не были скомпрометированы, рекомендации перевыпускать «пластик» кредитная организация не даёт.\n«Не исключено, что злоумышленники могут использовать имя, e-mail и информацию о банке-эмитент карты для проведения фишинговых атак. В связи с этим мы рекомендуем внимательнее относитесь к входящим e-mail и не переходить по ссылкам от незнакомых отправителей», — сообщил руководитель службы безопасности Экспобанка Дмитрий Курнявко.\nПо данным на сайте «SMS-activate», он предоставляет виртуальные номера для приема СМС со всего мира. С помощью портала можно создать аккаунт для любого сервиса или приложения.\nПодробнее читайте в эксклюзивном материале «Известий»:&#34;&#34;', 1626904032, 'irek');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `login`, `password`) VALUES
(3, 'Ирек', 'irekya@yandex.ru', 'irek', 'f62f6e5a14d36dbdfbcc050f0ea564b9'),
(5, 'Андрей', 'andrey@yandex.ru', 'Andrey', '1c8b52f251c50de4ca9b3a963aaec298'),
(6, 'Alex', 'Alex@yandex.ru', 'Alex', 'f5f42497de3459a48082ca02fd37dc49'),
(8, 'Aliya', 'Aliya@yandex.ru', 'Aliya', '1b606ec414828f707c2d183f2fff9f8d');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
