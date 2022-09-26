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
define('DB_NAME', 'wdpf51_wp_project1');

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
define('AUTH_KEY',         'i*~PGAZ0T~NJ|y 9Ysu3[:11+?UXvQ3p;4dLk~J`!.T+b$mTD#Vvr8qj!>i?nhB;');
define('SECURE_AUTH_KEY',  'y*iTCK0`sBU#GOynrH.VDtCcX-((Hj!ZVI`xucxj7|D4-?0}757[CRU*`~H3x>Ph');
define('LOGGED_IN_KEY',    'GKmss`8Ly^Q|_oqWr$Qozpt!}.+k;YcpSn53r/E?UP/TP^i{Rh]q3~~#eMX[Pl5^');
define('NONCE_KEY',        'sMt,5e[11|UYD@OXGB/?|olZxj-cQ[7Th):%*<44]Z#HxV $r:{y)l[c]XhQ.|`M');
define('AUTH_SALT',        '(npk~z=TR1{g6tp?XBOK3,Nm#Tf{I-LUkuAq5^3F{e1Zub(>Z4?56q[&{q$xFzof');
define('SECURE_AUTH_SALT', '7Z];%30n<Mb)!`-JmJ8GmtzxjiEd>EwI1%9BaJ2iiTm]vGl,FUrVz|lAhNXA{L&e');
define('LOGGED_IN_SALT',   '9A^3Kz}T(=)v]Ap1/z4$)db>5pRY||U5-{H:AH5TiiQQo(k2TBU8@?{r|F`xMfx]');
define('NONCE_SALT',       '@q!?Y<-{^5H#Fs]dBN!P}@oqhtG1J%#KP~lkNjK$E$v=)Ig=_,gc!c3&##WLry@E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wdpf51_';

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
