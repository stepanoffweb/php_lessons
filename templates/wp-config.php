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
define('DB_NAME', 'templates');

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
define('AUTH_KEY',         'xk>F7-fT|,=M~)a^TpQ>;{=g3+D|nc+!~YSy#>w7WU4}pCuy{0`dh6`5aANh}IC*');
define('SECURE_AUTH_KEY',  '<=|9s5A_!l;cXn.y}c*87Nn<7GKgg~_8-QQNYwb-oRZ)Ur^_IIG mj6S+_h}`u)X');
define('LOGGED_IN_KEY',    'zGth;uUY4m Z37|G7!8hY-],aRU+!l?p@S_=rF&]|4{2|@$Pu$BAVUr!LE-C6sK@');
define('NONCE_KEY',        'O.dT8W>tp@_]sn*!},x6Ga&0-DHm8BmE-dJ/#8yKc =p|=}+$Wkb+WecY}m(Bj+V');
define('AUTH_SALT',        'VhiNWQD=DDE-!DZ_[Hs*Q}U(t`gW-(.a1c?~2c5|^n8 leR0C3m-< L]~Z`|[dIE');
define('SECURE_AUTH_SALT', 'Xp;#C=zY|b(C@m4rf~#8&8FnlYPY.X}U+w7f0QdIPoU6O8T>5rc3vf}fye!2Dc6+');
define('LOGGED_IN_SALT',   '+wVzdK51!J@6O@YmGi$`9*oBeO>CsI|;PQfa(wWqH(?6TjFgI/2blnP4,rpzn-]K');
define('NONCE_SALT',       'H1Y2+p!Q:j vnF:__A]vbC|ls8VC-4qD?#o3AF:;JB10,Lb=~GZZOIC@aRLu`ZmL');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
