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
define('DB_NAME', "wdpf51_wp_project3");

/** MySQL database username */
define('DB_USER', "root");

/** MySQL database password */
define('DB_PASSWORD', "");

/** MySQL hostname */
define('DB_HOST', "localhost");

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
define('AUTH_KEY',         '032XymW%-1!M; ]Y;Q0kv75gp5MCQvIUIwtRCmMj-~/d0kq7.$`GE@J%Y<+0RXcT');
define('SECURE_AUTH_KEY',  '&^+iH]w_w)o(DDmsFVTiGyLd-Z5fluRQ*@$=}}6RI]p2$~%w0Z%JPKe.wb(b$c;,');
define('LOGGED_IN_KEY',    'W7i=~ao2bpS^yrV1l22ni)a `_)eF~P.MLmUe^2vi+:8;Wjv@x=~u~*Og-)gqyKZ');
define('NONCE_KEY',        '>0E-c|pTAq*FK3hoy1oLJk#_CeHY+s1@ykB5e8sAf%~fIvI2ro9rU)>MX;:MF`*]');
define('AUTH_SALT',        '1J5$+/s|u#]R32{<!MYr6YSFN=Cy-z$Ko~$G%Vh:%1o8{RtFLYi!)rQBk|}1F=3i');
define('SECURE_AUTH_SALT', 'dSSrOI[Ak6Vi-f[S%Yq4$1/N{-,;$/F$Kk^jxa3msQV[p/0v#%(vQER,i[en{wom');
define('LOGGED_IN_SALT',   '|rTsdhya_*vuoR=58O]6Gz19J_3Rw&KtF)lV:xaS%~qkelMuv=T>|eThC>,9!`)!');
define('NONCE_SALT',       'WaDaJ}$]0%$0$C5??&}zXyw_A.Pn%Ra[B6~[Cwa+?:z#bky2b:l/n<xZ75Z/y9VA');

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
define( 'WP_DEBUG', false );

define( 'WP_SITEURL', 'http://localhost/WDPF/wordpress1/mahir/' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
