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
define( 'DB_NAME', 'wdpf51_wp_project2' );

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
define( 'AUTH_KEY',         '-WkOG0+`@&m_$~ZaV5+A}L[DwJc ]?+6&u2Y[ju:vM:Ap^^uJZm+H@@F9Lf<-+/x' );
define( 'SECURE_AUTH_KEY',  '9KeL#^jLXbY(M9T^-g--XKcW]iF0zOnrh@8jGdkE`2r~&sd ;mb03K<r$sqEYvar' );
define( 'LOGGED_IN_KEY',    'jX{vg3W22pcyQ&O:;Hd?H,*K$^|y=IpV1UGY=Y-grh3r@PatD0t$Q]ei4@#,X3;%' );
define( 'NONCE_KEY',        'JNh-$8IN/y0yS$brEACs~+~g4pJS18xyN)(PwN8a3ziA37l}_D9`>~eG~$U%8P:X' );
define( 'AUTH_SALT',        'MYEmDcn}WOa]GV+44;L,c&3VM11@kEfgGW2ytUyo-b9vV$;Oz5?Wi9CQGS@P>kQB' );
define( 'SECURE_AUTH_SALT', '.X|MlHa34Q0srdbl)JohGYDHk+m_I$x6W}NT|AB&dS,`l11[P~EOx`j>V8!RW7f!' );
define( 'LOGGED_IN_SALT',   ':6b?7};Je}hJ>CZHFRJ#U9o@>;<hgpu>(TS[Cc`6X9G5654#DreqtsH^NA&]U)&]' );
define( 'NONCE_SALT',       'chODV)2`3-l=ifR7yzjVJ=,%F%Y-knSprmoMAu?b8vB.gU+XGs/rF:Mn[1)hHV(M' );

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
