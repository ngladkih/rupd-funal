-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 22 2017 г., 08:26
-- Версия сервера: 10.1.10-MariaDB
-- Версия PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `docapp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `competence`
--

CREATE TABLE `competence` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `competence`
--

INSERT INTO `competence` (`id`, `code`, `name`) VALUES
(1, 'ОК-1', 'владение культурой мышления, способность к обобщению, анализу, восприятию информации, постановке цели и выбору путей её достижения, умение логически верно, аргументировано и ясно строить устную и письменную речь.'),
(2, 'ОК-2', 'готовность к кооперации с коллегами, работе в коллективе, знание принципов и методов организации и управления малыми коллективами.'),
(6, 'ОК-4', 'понимание социальной значимости своей будущей профессии, обладание высокой мотивацией к выполнению профессиональной деятельности.'),
(7, 'ОК-5', 'способность научно анализировать социально значимые проблемы и процессы, умение использовать на практике методы гуманитарных, экологических, социальных и экономических наук в различных видах профессиональной и социальной деятельности.'),
(5, 'ОК-3', 'способность находить организационно- управленческие решения в не стандартных ситуациях и готовность нести за них ответственность.'),
(8, 'ОК-6', 'умение применять методы и средства познания, обучения и самоконтроля для интеллектуального развития, повышения культурного уровня, профессиональной компетенции, сохранения своего здоровья, нравственного и физического самосовершенствования.'),
(9, 'ОК-7', 'умение критически оценивать свои достоинства и недостатки, наметить пути и выбрать средства развития достоинств и устранения недостатков.'),
(10, 'ОК-8', 'осознание значения гуманистических ценностей для сохранения и развития современной цивилизации, готовность принять нравственные обязанности по отношению к окружающей природе, обществу, другим людям и самому себе.'),
(11, 'ОК-9', 'использование действующего законодательства, других правовых документов в своей деятельности; демонстрация готовности и стремления к совершенствованию и развитию общества на принципах гуманизма, свободы и демократии.'),
(12, 'ОК-10', 'способность к письменной и устной коммуниткации на государственной языке и необходимое знание иностранного языка.'),
(13, 'ОК-11', 'владеет средствами самостоятельного, методически правильного использования методов физического воспитания, готов к достижению должного уровня физической подготовленности для обеспечения полноценной социальной и профессиональной деятельности.'),
(14, 'ОПК-1', 'владение широкой общей подготовкой (базовыми знаниями) для решения практических задач в области информационных систем и технологий.'),
(15, 'ОПК-2', 'способность использовать основные законы естественнонаучных дисциплин в профессиональной деятельности, применять методы математического анализа и моделирования, теоретического и экспериментального исследования.'),
(16, 'ОПК-3', 'способность применять основные приемы и законы создания и чтения чертежей и документации по аппаратным и программным компонентам информационных систем.'),
(17, 'ОПК-4', 'понимание сущности и значения информации в развитии современного информационного общества, соблюдение основных требований к информационной безопасности, в том числе защите государственной тайны.'),
(18, 'ОПК-5', 'способность использовать современные компьютерные технологии поиска информации для решения поставленной задачи, критического анализа этой информации и обоснования принятых идей и подходов к решению.'),
(19, 'ОПК-6', 'способность выбирать и оценивать способ реализации информационных систем и устройств (программно-, аппаратно- или программно-аппаратно-) для решения поставленной задачи.'),
(20, 'ПК-11', 'способность к проектированию базовых и прикладных информационных технологий.'),
(21, 'ПК-12', 'способность разрабатывать средства реализации информационных технологий (методические, информационные математические, алгоритмические, технические и программные).'),
(22, 'ПК-13', 'способность разрабатывать средства автоматизированного проектирования информационных технологий.'),
(23, 'ПК-14', 'способность использования знаний основных закономерностей функционирования биосферы и принципов рационального природопользования для решения задач профессиональной деятельности.');

-- --------------------------------------------------------

--
-- Структура таблицы `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `abbreviation` varchar(255) NOT NULL,
  `head` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `department`
--

INSERT INTO `department` (`id`, `name`, `abbreviation`, `head`) VALUES
(1, 'информационно-коммуникационных технологий в образовании', 'ИКТО', 'Б.Е. Стариченко');

-- --------------------------------------------------------

--
-- Структура таблицы `discipline_module`
--

CREATE TABLE `discipline_module` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `discipline_module`
--

INSERT INTO `discipline_module` (`id`, `title`) VALUES
(1, 'основной модуль'),
(2, 'модуль вариативных дисциплин');

-- --------------------------------------------------------

--
-- Структура таблицы `form_learn`
--

CREATE TABLE `form_learn` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `form_learn`
--

INSERT INTO `form_learn` (`id`, `name`) VALUES
(1, 'очная'),
(2, 'заочная');

-- --------------------------------------------------------

--
-- Структура таблицы `found`
--

CREATE TABLE `found` (
  `id` int(11) NOT NULL,
  `theme_id` int(11) NOT NULL,
  `know` text,
  `can` text,
  `own` text,
  `first_mark` int(11) DEFAULT NULL,
  `second_mark` int(11) DEFAULT NULL,
  `third_mark` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `independent`
--

CREATE TABLE `independent` (
  `id` int(11) NOT NULL,
  `theme_id` int(11) NOT NULL,
  `desctiption` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `institute`
--

CREATE TABLE `institute` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `abbreviation` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `director` varchar(255) CHARACTER SET utf16 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `institute`
--

INSERT INTO `institute` (`id`, `name`, `abbreviation`, `director`) VALUES
(1, 'математики, информатики и информационных технологий', 'ИМИиИТ', 'М.В. Лапенок');

-- --------------------------------------------------------

--
-- Структура таблицы `laboratory`
--

CREATE TABLE `laboratory` (
  `id` int(11) NOT NULL,
  `theme_id` int(11) NOT NULL,
  `desctiption` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `lectures`
--

CREATE TABLE `lectures` (
  `id` int(11) NOT NULL,
  `theme_id` int(11) NOT NULL,
  `desctiption` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `marks`
--

INSERT INTO `marks` (`id`, `name`) VALUES
(1, 'OC-1'),
(2, 'OC-2'),
(3, 'OC-3');

-- --------------------------------------------------------

--
-- Структура таблицы `practical`
--

CREATE TABLE `practical` (
  `id` int(11) NOT NULL,
  `theme_id` int(11) NOT NULL,
  `desctiption` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `protocol`
--

CREATE TABLE `protocol` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `date` date NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `protocol`
--

INSERT INTO `protocol` (`id`, `number`, `date`, `department_id`) VALUES
(1, 10, '2016-12-16', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `source`
--

CREATE TABLE `source` (
  `id` int(11) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `authors` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `basic` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `institute_id` int(10) NOT NULL,
  `department_id` int(10) NOT NULL,
  `teacher_id` int(10) NOT NULL,
  `form_learn_id` int(11) NOT NULL,
  `first_competence` int(10) DEFAULT NULL,
  `second_competence` int(10) DEFAULT NULL,
  `third_competence` int(10) DEFAULT NULL,
  `control_form` varchar(255) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `lect_hours` int(10) NOT NULL,
  `lab_hours` int(10) NOT NULL,
  `pract_hours` int(10) NOT NULL,
  `independent_work` int(10) NOT NULL,
  `control` int(10) NOT NULL,
  `credits` int(10) NOT NULL,
  `target` text NOT NULL,
  `tasks` text NOT NULL,
  `discipline_place` text NOT NULL,
  `know` text NOT NULL,
  `can` text NOT NULL,
  `own` text NOT NULL,
  `features` text NOT NULL,
  `module_id` int(11) NOT NULL,
  `town` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `teacher`
--

INSERT INTO `teacher` (`id`, `fio`, `degree`, `title`, `post`) VALUES
(1, 'Стариченко Борис Евгеньевич', 'доктор педагогических наук', 'профессор', 'заведующий кафедрой'),
(2, 'Кудрявцев Александр Владимирович', 'кандидат педагогических наук', 'доцент', 'доцент кафедры'),
(3, 'Слепухин Александр Владимирович', 'кандидат педагогических наук', 'доцент', 'доцент кафедры'),
(4, 'Сардак Любовь Владимировна', 'кандидат педагогических наук', 'доцент ', 'доцент кафедры'),
(5, 'Грушевская Вероника Юлдашевна', 'кандидат филологических наук', 'доцент', 'доцент кафедры ИКТ в образовании ИМИиИТ'),
(6, 'Мамонтова Марина Юрьевна', 'кандидат физико-математических наук', 'доцент', 'доцент кафедры'),
(7, 'Стариченко Евгений Борисович', 'кандидат педагогических наук', 'доцент', 'доцент кафедры'),
(8, 'Старкова Людмила Николаевна', '-', '-', 'старший преподаватель'),
(9, 'Арбузов Сергей Сергеевич', 'кандидат педагогических наук', '-', 'ассистент'),
(10, 'Волкова Сусанна Борисовна', '-', '-', 'учебный мастер');

-- --------------------------------------------------------

--
-- Структура таблицы `theme`
--

CREATE TABLE `theme` (
  `id` int(11) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `lect` int(11) NOT NULL,
  `pract` int(11) NOT NULL,
  `lab` int(11) NOT NULL,
  `iw` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `competence`
--
ALTER TABLE `competence`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `discipline_module`
--
ALTER TABLE `discipline_module`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `form_learn`
--
ALTER TABLE `form_learn`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `found`
--
ALTER TABLE `found`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theme_id` (`theme_id`);

--
-- Индексы таблицы `independent`
--
ALTER TABLE `independent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theme_id` (`theme_id`);

--
-- Индексы таблицы `institute`
--
ALTER TABLE `institute`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `laboratory`
--
ALTER TABLE `laboratory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theme_id` (`theme_id`);

--
-- Индексы таблицы `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theme_id` (`theme_id`);

--
-- Индексы таблицы `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `practical`
--
ALTER TABLE `practical`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theme_id` (`theme_id`);

--
-- Индексы таблицы `protocol`
--
ALTER TABLE `protocol`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `source`
--
ALTER TABLE `source`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_code` (`subject_code`);

--
-- Индексы таблицы `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `module_id` (`module_id`),
  ADD KEY `institute_id` (`institute_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `form_learn_id` (`form_learn_id`);

--
-- Индексы таблицы `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_code` (`subject_code`(250));

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `competence`
--
ALTER TABLE `competence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT для таблицы `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `discipline_module`
--
ALTER TABLE `discipline_module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `form_learn`
--
ALTER TABLE `form_learn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `found`
--
ALTER TABLE `found`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT для таблицы `independent`
--
ALTER TABLE `independent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `institute`
--
ALTER TABLE `institute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `laboratory`
--
ALTER TABLE `laboratory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT для таблицы `lectures`
--
ALTER TABLE `lectures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT для таблицы `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `practical`
--
ALTER TABLE `practical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `protocol`
--
ALTER TABLE `protocol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `source`
--
ALTER TABLE `source`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT для таблицы `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT для таблицы `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
