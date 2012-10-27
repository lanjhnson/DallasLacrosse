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
define('DB_NAME', 'MYSQL5_899596_bravolima101');

/** MySQL database username */
define('DB_USER', 'limanovember12');

/** MySQL database password */
define('DB_PASSWORD', 'dallasgive');

/** MySQL hostname */
define('DB_HOST', 'mysql502.discountasp.net');

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
define('AUTH_KEY',         '@)1>g8hZ|Ft~1J46F$fO-U|K0YCY44UCimn6,7gdSA);f|zsf(>M,b+@nTdix3y$');
define('SECURE_AUTH_KEY',  'z/O)T`e1H33mOV@H6b._7a>,)dv^TO#F~#7Eo,)HS[jsevR^x3lBM8gA.$.A.^Q~');
define('LOGGED_IN_KEY',    '2c!}zY.Mxf&>Z.|rrjn@%YshHgcyW3%B6j<R|!&FfFm<44DO5/j*Q6h82RM.Gul|');
define('NONCE_KEY',        'eJloe)any1/@XO4YiPxf)L13ZCev<Ssuu?p$#|`x<c|N,I`==h&0HdC<4xN}NtKR');
define('AUTH_SALT',        'fD9ner$E^U6BimSKVnq<y;KRwTdr wGID1[$fx{xO0Us%_>;AJTBlW,_<DqqYs R');
define('SECURE_AUTH_SALT', 'HFQLirx%)$&wv<sk>FL#jAKw).iy_lnR-R*$^)cB(L&6.s$`%X_qK Y,F%UAF-2F');
define('LOGGED_IN_SALT',   '-qmyAXdIGEjf5zz5Orps^dGO8?PT;m5rAp>4Rl#lCP5^.DA7UmF^sTA/.hRVNm+P');
define('NONCE_SALT',       'pe$sXe>bbfj-OzwSjERGOy-nq;E*OsDZ#N*abO4xE7Xii#*AjpMM;U:*R.j}2J{(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'deltagolf_';

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
