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
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         '%=I:$@@zls@HT6=x)ay3@8xE@MdwNL=3!oFv.&uj#;!U~R%{QY-dLfvO{im7*h2y');
define('SECURE_AUTH_KEY',  'M5cZQYI,3X%.1?i@%s:wVk_Vusf+6@mmX*,(A[Qg#A>FA`u_ao%E2iiXr{[AE1{{');
define('LOGGED_IN_KEY',    'HL*cPakh|aG}h}8~2ho]W*sCT<vD6q|Kh[vg`kF#wFJP(IAo54s!aoRocMm8s?[E');
define('NONCE_KEY',        'D)fr|e*@S*0)&(O6QT`RQK$Feiu2.&F(If_1r/onj]19k8tx1}Mc*+Sh3*ea$GuD');
define('AUTH_SALT',        '%KN[uXH`j,ss8VOk`d[MEN?{D`9O^);87Qz<I?H05c5]^Td7:LYjnAu^N$Ws/BYg');
define('SECURE_AUTH_SALT', 'zcwVW/O+Gy{OXjqVlI+PZv2~nnVpr;9pUXU=<7r5 3&E=4We.R6T z E)tgkcmu@');
define('LOGGED_IN_SALT',   'R-SE5K|h8ZHCAu38R8]E|!O29Y/~Lw}T>-[[esLp j[bqa=~+y9gKD&+-{a.fgI2');
define('NONCE_SALT',       'gPy-U3{OhDy=E:q1V_+r~q=eBE<27m({DfVX+:t{/)+?@``)xOUM+3|[dhn+<C~1');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'll_';

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
