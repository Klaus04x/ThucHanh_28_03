<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thuchanh_28_03' );

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
define( 'AUTH_KEY',         'p;Am5@jYwAQ~x8coq6>Ck=eT46K`kw9H^_5^-sm+:x,Pz;cL:^Y+~uX`rifj~Lu2' );
define( 'SECURE_AUTH_KEY',  'E2yr,Gfv1]mb~Cpa=t:qO{9NS-~H<cDxfJu:^0[uW: ij[$bEoBoD_L]tom,h^;/' );
define( 'LOGGED_IN_KEY',    '@F/O%FAzgV8Js4Y-ea?..tu3:y5Z_s6:PQ+{Z;AbdOb1$FI|&v*&koYTc~hU.`HA' );
define( 'NONCE_KEY',        ';U-AjkXyN/M:4u:%0Sr@%wyF%)%4QxZlNPg)_(_Zbm-z8T&yL=FV<(@^,-dRL*f/' );
define( 'AUTH_SALT',        'SR-(=!RA]oHJbCR]+;gro_hU^2]xpx[7!0Fj!9.7e?]R`?1]CqZQ6cT4Jb6k>$zv' );
define( 'SECURE_AUTH_SALT', 'gwW]*rv[Rw(~_h.K8<Ufk Y65Ok9Y/31j-NqIq{dz@|_&2+kQ -5Z+e?7m4oj%<v' );
define( 'LOGGED_IN_SALT',   '38&eF}R*B7Ia+:Jf]GySDD1(.@>#(y8;Q%Da%{|9F6H~EvD+g-^fwZj:5*Ulzvod' );
define( 'NONCE_SALT',       'J)Wiv>q/shmo*X7/>T<8W7#![m N6^EdNk3<q@e6fw2P>Zl +y%;!u kpImva7U0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
