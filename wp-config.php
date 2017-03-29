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
define('DB_NAME', 'demo_wp');

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
define('AUTH_KEY',         'BS![#RK[3H{_#M;]&VlPi@_t,e>1!)=~*:7dm-gSI%7HK2TTMfokg4bQRolnM=(Y');
define('SECURE_AUTH_KEY',  '^?1Ve#DO|3#^c[q-qW>X}%K%Nb)^b~ZVZ<@X7ZP3to]No(l~o;{oD4;ZGZm[gG<S');
define('LOGGED_IN_KEY',    '10Cqf:m5zK/[Ne/&SGs(Fw{l$Qcu;@POyy 0mvjex`^yhN#_sz_bwT@gHck/Rj$L');
define('NONCE_KEY',        'trlr_Uk1g`Mc{*_o+v.{</xZQc&mj2-G.0]v>!i}F9}1=k,,ZMF``<gY^-HCtdC#');
define('AUTH_SALT',        '~Ck&I~?Ei#[~_!*Dfg)j?f8eNTF}l<~/x~P9d]}@Z2EVP>u*y.wg/XXIFuwAnY#:');
define('SECURE_AUTH_SALT', 'W0GV-OI(|dCZ>b:Oj7P+,6WkS-s98u<p!J>`uuG1LY{Er)=.l0v)%U?HXS,DH4iT');
define('LOGGED_IN_SALT',   '8yS6k?C;/4I(|[}J lw>Tt_uxMVutq?$JEmuzf0qG;0:0wf*x%_3r0`(a~V4v52v');
define('NONCE_SALT',       '<l;3Eg6Kju/OU$;PTBvm*CP)TDQwm)G9x^#a?]*4W_47U@-3|51{3i.?pA[sI51.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'stv_';

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
