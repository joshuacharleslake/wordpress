<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'FF+yeqM_l(jpD}z7l:+ME,L9E,7c,=TLkR29^4=1+]99mg[J<?o)nH69uQS*@5zZ');
define('SECURE_AUTH_KEY',  ')KFtgW XULF/jV_kVzUr{cN4VgYYKosEB)i7R.4CFpbsUBH?RKg)`]-f5XE{%|UR');
define('LOGGED_IN_KEY',    'G8<zG21@,X-T%$})$qH%o6 NIbZdp`6!--C4ks}u<+3Y1x~i<U<MxM@HDO AfpF|');
define('NONCE_KEY',        'VV4XFBs-H@EsXlWd7OrFJ-_9w[&]wjhG!,$~%q!AJiSco[/5O|oj2b%W^TGqVJK6');
define('AUTH_SALT',        ',!E^uLx9kzS5#JMqn6vKM@t_n;Wo5$#H[@bj=cvKVwxs^v+*#:jB>H;N`M0UwFaa');
define('SECURE_AUTH_SALT', ')k~!DD_aEQHSO>14z;Y|?-cZU31DIV}X1M!dN5s4P[6p+Hnqc4acW 0m*--8WcW!');
define('LOGGED_IN_SALT',   'b/1a;ctAg{cR-)1Trks^i-OWr^xII(X>1G>FD5(e2u5w,$xOsZrp `TiE=j=>dP>');
define('NONCE_SALT',       'AaF(kF/.|r}}b1$g}L}|-iS3rQdCscz)+t8.-(%ds%XyL063 bczqM#|;rh)Z)H;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
