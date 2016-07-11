<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd&hE7k)RF_-pP[xq4;w{t9Vq7 rvzp,IMEQikIBS>5|joC8]X<cjFQ{xAz:mf+$$');
define('SECURE_AUTH_KEY',  '{V-;xZ`2xYU8PWz692!:1A:1Z:uRP^%x4)1%#IjNBT1i_cn.$(rXG*ea&N`cj}C?');
define('LOGGED_IN_KEY',    '+H<q~`32)x8`ss/E8~5Z03)s)Q/e%:m2Ho7|t6AKA/-q@@NOm=MW(pa}dM2W<e@c');
define('NONCE_KEY',        ' U?X ^RjwJU+gCZ5d4&sxev GM~=P{lo+&^uiV8PLhY |a]_M;1/m|=i}P/@:MA^');
define('AUTH_SALT',        'd-(zG BC`OfVq<J-9]Y9b5HyKnw+_]A?>v3a(K#rB$(kU&PG4 NdJ:v6F&CX(2Px');
define('SECURE_AUTH_SALT', 'r10<.uf.v}8DA[zu[}|P9X5<Lyp60+utl;sQ=oFczbFYQ}Uno1BqV+iS&.b5f32t');
define('LOGGED_IN_SALT',   'AQo0aAyMW+%l1VmuV&F7yxht<>buw$kB>5J+SPo;wkn0uG~7B8n9j`NIBjx*{R6|');
define('NONCE_SALT',       '1Yg}=4Q(]J!rw1fp4=BFzL&lV+6eUW@0_7pqU9E5;NIq)N#A*]sqd%*Q!@R+n/@r');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp4_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
