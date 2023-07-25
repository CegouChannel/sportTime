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
define( 'DB_NAME', 'u146490_sporttime' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'u146490_cegouchannel' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '25122003Nikita' );

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
define( 'AUTH_KEY',         '(ZyQ]9{LO[i=N93sH@I|+9N yzI/Vxhxu^z|?c(HT^I#Pwap0Tm*6->0W/q)E.lQ' );
define( 'SECURE_AUTH_KEY',  '@lW- (-PEO}/i1I!ksZKU#wS5]!)d.BkYGUCy;7Sv2.>oW.DuYH/@9zp?y^!P$NR' );
define( 'LOGGED_IN_KEY',    '=fy=_oG7oa:cfk41e-GbR)>eUGTkr8=9sW0t5 E<PDMrf~,JxFeq<uXk9T=-C4g7' );
define( 'NONCE_KEY',        'M~WumZt1~!eZu*sTO~*wjJUq|~eD,S990NJTQmW2_nSg`QxM?Jj|q diMBLeo?w}' );
define( 'AUTH_SALT',        ', $?T12i&/erG:bKYx5:`=AR>`%ZbbBpA|RiM1$ET*Ar~g&`4JPlP@gypk:/n7s,' );
define( 'SECURE_AUTH_SALT', '}Ul-vww_pRc&7_#m%~Sqp[EN~[9Tvfz=`=#eNz<L}lt2StG}iZ&Ie0W=/Ia..;Ws' );
define( 'LOGGED_IN_SALT',   'rCyzu?QgrwH+m@`]~t1QST)] qLZ*r1dRqOpR`W/K`uafYX&0-=;6?-,%;JpZdBN' );
define( 'NONCE_SALT',       'SVQlp`wO/la8]d|.HTBK@_U2>D_0hE6dOw@e4ge!G/YP]vBP1)To{iIg6b6Jx=!Y' );

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
