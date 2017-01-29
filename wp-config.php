<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ivy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wE$s*E6v>&PDlsp]30{O{gBa1>CtO0>DbR#CW9,N/+;g:8DVbC(-zq(KpwszY7z}');
define('SECURE_AUTH_KEY',  '}&[1x[9~a/Gd.Wa}j,MQM]c5jIVsu@@}dx#9_$j,ih|.xx[!2L5^RgXlML#15:2F');
define('LOGGED_IN_KEY',    '81K_Ez%MBcuM/+wmS^yo%oeh^fs$PF-P?2y+*G%3L_UuVoLMQf:@UQ!i R$o%JV-');
define('NONCE_KEY',        'yKwG@9g`Z/o{F]<+5p352=7pI)B2<*6dU]UYyX<[|AA(V`]?)0%I/Z^ihFK%VWo~');
define('AUTH_SALT',        'v. #&>}9f^9zDTv~/=vP!t_nYgS;Z~hk5h|l$-73Cs2-=!m=45M]Ht$&5]NxTB.H');
define('SECURE_AUTH_SALT', '~D^q-W.$0~zy2KeeitOCSW*(b)){f/L13PG_VZz)g/q9,R!YW6UnN|EH,?UVCh7u');
define('LOGGED_IN_SALT',   '&fR=|I)mdgqiFhlnJ1=0TXC?uB{O{h*g-s1WPb]C*j/fdFH#vd7wAE$vN>cPgP%h');
define('NONCE_SALT',       'K&nLUt5@Jor!&&/^/d<*?M7h[?nzfmjc{9}i)L!}^d1Z:U7SlYB0)VM5&}Npv5cr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
