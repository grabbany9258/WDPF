<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wd_project3' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ahx}pQ@Zn)p+Ng$j1`-ErSP_fLC5WvZo6aTG,oa.Ct5A{vi7|V`u?3>*GUzL_6}n' );
define( 'SECURE_AUTH_KEY',  'bp$pzG*.v=yz,Vv5wi[DEOK`m+1]E?=GOhLxQr31S}1?aD5<g$z48_9i!DW|u[pd' );
define( 'LOGGED_IN_KEY',    '0WyNdyZ;JAB.bkDOcYtbk7[N^MxGiN8jGZr}}sg1nh;WGr`ZcvcAjw]hQw.s[lJ ' );
define( 'NONCE_KEY',        '[EKR?e-A:V7gn0F=U+?Nj<WRL?FEJD)>uzDH#iQtueO>jt(5k17g4-6|,.s|DIZx' );
define( 'AUTH_SALT',        'kLL$FaFLZUM%^R+zb(TL@v-V`T)j2$EOjmcQ]PZ34S&E`y[T)pfulkeSq!j/S!W2' );
define( 'SECURE_AUTH_SALT', 'khq{}uwBRYQ E&lGC/@)10mJWv`]K5S>yHp7XEhwNkvGqp~ WmE{gyTO|>r>[@c2' );
define( 'LOGGED_IN_SALT',   'a:1De-hj^0yGLd((lvgpaWWIRq 6A~OY{|OEn$_;8h.:0oCA{OX;}?[$Xu#bM(2+' );
define( 'NONCE_SALT',       'H2kDo(;#*tI8T7OxB@QEfqGnYjD>&4`mkWZiRom*hvEL#0EC*EZ&/4 co8X7ij62' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
