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
define('DB_NAME', 'icops_wpdb_18');

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
define('AUTH_KEY',         '6U)Io3O4;,]Ar3x`>aT*xf@40#%:Y&VwF1Z7zgmq{h-`Q.6^/=%qJxR8v[}, #Zv');
define('SECURE_AUTH_KEY',  'I:9ddO&l{$#OC@cNUWKov>OOR=EnX=u9>y.m>`Ogew=*N%1u/~)O1.c!b=+il,{5');
define('LOGGED_IN_KEY',    'xaB;[qfBUlNfD(Tg2W{p`}|xl}+hFJiaC/VZk^{:p#xB1iSR8hkaG0LIm_<sWPZ>');
define('NONCE_KEY',        ':w/vF%Db3mHzz^Qw+t8dLn[8J@lr8uYn~5q.l4{q@fh2Qyjn6U~z`uWQe5/M+T6F');
define('AUTH_SALT',        '{TQ#6zX-*s/jQ4qzoJxv_kx#m`nZ&j`A@9olkIJFZHXuV~zImyHU^T(0:Hr&Z%nF');
define('SECURE_AUTH_SALT', 'Rz;(XaTKr:xP1KV~arepvH]u[(t)_,L[B+B`S].3NJvA.Y-[ mC93mmI/fzd-?c?');
define('LOGGED_IN_SALT',   'zwntqX9]T.zbfyQhQ),xmLjylbGfrx7RU,tl^BkOS8Qa?ZS,H)s>nI_Fdy7bW<dP');
define('NONCE_SALT',       'D;<<wD(uAw#XN!4N]]Cq4NiQLA,@pF1??B[[J}v1Zs!-==x2s+-[i`j~hhkUQ40W');

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
