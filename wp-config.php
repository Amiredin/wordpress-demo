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
define( 'DB_NAME', 'wordpress-demo-2' );

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
define( 'AUTH_KEY',         'at:F7ryMJ4a8:4}f;wy-|(f6Ee-Vt W%{Z8EC:Aa-~uq~/{RWo=F!oYb~nDG_m]P' );
define( 'SECURE_AUTH_KEY',  'c#P]AO^Ta _a]{9u}/f67a|xFlDv7:lr+-YOfc,ebGP-ts89rwbzq7U`7Yo>uT$e' );
define( 'LOGGED_IN_KEY',    ')(5rT+XHG7x.VA2OEyr[]8GZ!=PM@0qVF0IUL(2>j)[gbpXUk[YK<X/Hmb A~y!Q' );
define( 'NONCE_KEY',        ':,i#b>F6IzA[E=DSQVRtJ(iSFr#us)p[hz1k.-X=t.TsWLg/NQ/W:3?G4WYm[,UC' );
define( 'AUTH_SALT',        ')E/xa~8*KOzZ(I6S<u#iwwjr[FOyMSD!7Pz+?p$Dq.8H]zL6b.3p|a~Q/*OjAH9r' );
define( 'SECURE_AUTH_SALT', 'RdLp_7`~NNy^|pig?@9Up=k_h[]un(D?{w(rJKY(H3n<8~v#RKiRjB&e`qNzIQ$X' );
define( 'LOGGED_IN_SALT',   '>4tW%!7|3sQaI}yanX7.yjHRwSN D5y_hFyeil}3$ [!^KHI-wS)i9#a=Qc)I{xH' );
define( 'NONCE_SALT',       '7|&]pRRHqs?yQAJruL6FM^=x8t6R)2#BPZ0~2`*7ackSCr*cXpJ(PDyr`*HV8`17' );

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
