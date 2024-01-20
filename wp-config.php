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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'amir-wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '[Q/d8kTx$LyVHaz^lD5<Y?|06)z5#;}FCaFE2~/=u!+MX*`ve,3#H$TI2$,=;kWu' );
define( 'SECURE_AUTH_KEY',  '40O!2}R?#6`2=@W~Ey.x&q>Zvu,Q:p.,YeH8O2~(}|Q?(:CC!.171:=<<&~yK8?$' );
define( 'LOGGED_IN_KEY',    'Q?MP]$&KV%vg=k|MD!y;G%~?E.=&_fhrAJ6t{gh=%i>17wg#AL60GoMRR_JhZ-%t' );
define( 'NONCE_KEY',        '=&vQ.Hr[W0 q6[?CeK!e~66{Hb^*vh#L3/laaqQL`|QR;;X3|1[EA)hMWg<R]g%X' );
define( 'AUTH_SALT',        'rVS} 6)aG)noou)5zG#.025Q*3WF8V}OU}ev-StaQ!MgpA-)ItQw:e`gZ|jHMjF9' );
define( 'SECURE_AUTH_SALT', 'rr$6}<_r{SA4L_DHpt@hwEQ$s67Qa^)w_siq~ 2L6(fa*3Uri*RD7|Udb>B}|ABC' );
define( 'LOGGED_IN_SALT',   'iN6m=p}oQF<f}WPasw=7|Q}?8HXmjTZ}r}YO.IY#/;67*j<]>F.l | G@x`:Nd{,' );
define( 'NONCE_SALT',       '{R`Ztbr5>CNM3{lvl(LG<zMUA}#]lQ*V4b4l3o~]3$XY1.jJ-`2};RTUl20Z}PRD' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
