<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hb');


/** MySQL database username */
define('DB_USER', 'root');


/** MySQL database password */
define('DB_PASSWORD', '');


/** MySQL hostname */
define('DB_HOST', 'localhost');


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'lIDZ5>X|Q&{Z+ sXPw./zN(SNb|B^^NUxKRqpl/{z.gB%ve+-|g[,S+mwnarCNLo');

define('SECURE_AUTH_KEY',  '@%}yjR<8.R,PU]9Kq;L/!Wg=y++hT#^+ZSFH&+m=9V.I%-D 0,4ZZ*~=Ae;(gs1;');

define('LOGGED_IN_KEY',    '6i3| D!g}ZgeB$`yn46!;zL+6<p(btVE<^3+6h9bb+5P6Apf24&d}|o`CyJE7(*3');

define('NONCE_KEY',        'GUS^Tz)937%:oa62rf@-JD9v9ST!6FHpn1)K;c=bZV[O>{|![ ATJ]w+%UNcHPkG');

define('AUTH_SALT',        '9GDFkr8M./d!u;!+$)Sn9D18Sqv!u;94j?K/x+ZB9e;hj-c<Y*/JRJhU/Af,Wi&Q');

define('SECURE_AUTH_SALT', '=p>}r]]qeuNgik#LL-PUyS-0z!q] YobiX*yaff%N;S`>aZxN`Q1RE<^Z|daym#]');

define('LOGGED_IN_SALT',   'sg[gY5MN~?L`|jUh[2%8$5v8sY(D73,bX5^*Ir]y$i2>HE|p=?]*bik7x|~]C<jU');

define('NONCE_SALT',       '}c~)Zu&q){whdKK7+>9kw<@]?}0<f8x-8M<6#><*f_yZN:6%3x{4KBE00;rhvpV/');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
