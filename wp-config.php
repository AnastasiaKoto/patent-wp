<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'patent' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'D6UJSM,0[bkOCmoA?VK:QmuBAr0%WzRFc:QUUTBl%+8JEHATQU@=s)7_4b.#8)0z' );
define( 'SECURE_AUTH_KEY',  '>Fv[@Yus~xRi?x`M>;!3Gy@vR7R5#ZC3_s5^??eMC):CBS}=p9*mq>X^(lFA4xoe' );
define( 'LOGGED_IN_KEY',    'It >$-d3MZ`>U!>k/A5IB;Xu* Squ@_pVxDqOju/B/P]4cF=c{dv)Rfg  =T~8o(' );
define( 'NONCE_KEY',        ')E<[`O=hm$acu}AqUy*_P;}JHxctkOQg0uPTJDdQuSsu?!A$2!USzvnXexOf6t;S' );
define( 'AUTH_SALT',        'U6KvD@ vtt>uM*ZgnH}u^Y+G_NaavnR&H$bZc.QEpkIGj.[&%y^<K]ZD8~LvlHu/' );
define( 'SECURE_AUTH_SALT', 'd5{{Njr*Wt3HM/+n)746o<r,9$q(-Ze_1f!r[gUI9MR%Me^4ki}!g`g]:YvckW7j' );
define( 'LOGGED_IN_SALT',   'ms|>>RS)@|kDR8E>[vI7z5!:3T7)4:bP4;7>Kq#X_Wz[lP7RL}6+XW` vW}Nk5@_' );
define( 'NONCE_SALT',       '6nkx*WA]dn,_2.&9%?wyXS4b{#1Pg9O7{rdX_(&{+OOI+LJGrackz1K )sy[;*4l' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
