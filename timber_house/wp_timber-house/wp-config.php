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
define( 'DB_NAME', 'timber-wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6V~UzwK[t~S>v;(A%E(rw}pi^zB?|,zAml%S 73,gWG |?nLha*-&zUdY]V1$<#a' );
define( 'SECURE_AUTH_KEY',  '@<c|PBFK3X{!JMJ<iYf!J4uJOr+YfgvjzR~ksl/~Kh5+]i`.9PhozlId?5Hw)3.0' );
define( 'LOGGED_IN_KEY',    '+A?Os^bmX,wS]Nj]K*}Iq39XvdR<ko_6(im&T>HB-8&4or=De72-9|Okdo7W5Nzj' );
define( 'NONCE_KEY',        'QTnKEi9AoO)9KI48()L6!;3b,/so-C}G.{ >G`6Fx#7=^1G(GeQo]#2eFEcj0B=G' );
define( 'AUTH_SALT',        'Nz%) ,6e=Wyn!n*`V|m!dR>q=_P-|.t`(^(]((!SQ[cOlY?zv>j^O&zFOCte:gdT' );
define( 'SECURE_AUTH_SALT', '/EFK*q|FC;t`D*K <{`bnL(d@>[/iJY1OV?=`$Hn&KKggwsWK+%q(B0XTj#{d0{?' );
define( 'LOGGED_IN_SALT',   'GpDr(B?MJzYSQdK64fM?jI+UeY#O6dB/*p(W(d<#9-I5>}`W{>JPTsxe;GHWn%36' );
define( 'NONCE_SALT',       '4f8.J@^Q>}y%UsdK`SNTsZ:|n#);.-aJuc[mA;!GTM2h,RTIo.)<?_jMnqQ3-kz`' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
