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
define( 'DB_NAME', 'sporttime' );

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
define( 'AUTH_KEY',         ',?hKVcAS^x7gqg2/uiELWE<$9QDh:]4F2Fp16~tziHj(+9<7)h*`kkL)0;aQ3Hc#' );
define( 'SECURE_AUTH_KEY',  '|JcbyHD^Y6othmwZHs;VVihHjSmq1QOg(IH0}|#ECm}U]iem-E4v~O1wM&l$pND*' );
define( 'LOGGED_IN_KEY',    '`<l1kF:<)-+nG?SCF@_[/}e#MI0D.f88Q-Nsag<Bc_/wmcgVAge|@z:rTi%p(2|y' );
define( 'NONCE_KEY',        'i^7?cQ)dnkLx;Rf.H2KejuCB?FJ#bnuB%WDMe-#9F7yA{(Jo~!ywRs-,l:PK*/a4' );
define( 'AUTH_SALT',        '#^e.7Kmspz8/9:(@u[rt7[I21G%eCnPY@7j:2OUxPlbp@tVw?E8Xu<kSc#pGn.x^' );
define( 'SECURE_AUTH_SALT', ')Ts4LgCPQ,Opt)S%T2z0~x,pL51AX>mFd/5c9vTHj_^ze@E=URg*VFTd|+QiTZn|' );
define( 'LOGGED_IN_SALT',   '-^W-H{qSS3Kd:f-zt+%bioy`U4T2{+h2-E}NKU-R.JpO5Jd>l_}2}?9=c]/y7)K ' );
define( 'NONCE_SALT',       'nDW&-5nmOHCua{+deb81=YkhO?:h/+~od:m$N&mEt{of-Tw8$VN;B3Lr)N$I(M,d' );

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
