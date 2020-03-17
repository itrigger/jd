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
define( 'DB_NAME', 'jd' );

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
define( 'AUTH_KEY',         '96AI71vet8|X-I@@F>8^Nm)N_to4~OJ:D8-jdLH#4Ajqg=QeXuh++kG/``}.mb ,' );
define( 'SECURE_AUTH_KEY',  '=jf7&!;hn4zX^$0H9A8#0(7hA&d}r+>:kq.[Je5*Ww05YRBEFc/Qp275`kf4B|-u' );
define( 'LOGGED_IN_KEY',    '?YeUW.Eogx:-8h9|nl;@+#JVLR9>Jlf|{Pm}S}u!@ ]!12Co>x&E44+ErQ 9raP}' );
define( 'NONCE_KEY',        ']-m.C-9:}o1JwUy;zbpj>lS}sBm5EOoc)0<?VB)(~,ckcc`H~e}>O0&S>P~jtIMT' );
define( 'AUTH_SALT',        '_N~t(56b|E{,-};;~,T<N}L2JA%0$@6,?P^>M!.K~*|WkQJfYU!0.!JqhT+*e=|+' );
define( 'SECURE_AUTH_SALT', 'zL*)I9QD*E,_H@Z*yGuC,(ijV:*Ni/HJ,sugbysD`DJG2BtCV> DLi!=L%QNq,fg' );
define( 'LOGGED_IN_SALT',   'y_RxJQmgq]0nq)@zXy6>tw.9vZ@{XtNTbpqsJA.2S_U<f+RMiBXtfFGpKO-k3_6y' );
define( 'NONCE_SALT',       '7#@_G.c!`x9GI6(>pkx}Vz};}9E;vk3>xl+~!8sb^z2%a#<pP*o~?WSC(|AFELW9' );

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
