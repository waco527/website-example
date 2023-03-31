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
define( 'DB_NAME', 'wp_example' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '3h+(!X>AH`|+,7>i<[7H3_]&3{bqL#VB;`xGP|dK#+k&Q|X+83x_o) *X~kbf;&F');
define('SECURE_AUTH_KEY',  '-W%3T|8iYAva[9)|Qx1GBfsJ)J|)F2#28kKC*sckRlLJF+~7hY29M3 @}O[Bt5WG');
define('LOGGED_IN_KEY',    '/1yBKX+nw+-bMl0[Djx}:%Va}q<5fzt!2o}MZ6p+pva~7-Ks#mO iI)~@W*.oKd0');
define('NONCE_KEY',        '-|-}FQZ`j#o87_n@:n`)-662%j8w4cD_>J7U+WM2 8Y|[V-Y-~RuFaA.VQ}qkU;j');
define('AUTH_SALT',        'ZOX|Wq[sa7ZcBeLV+zv?/xeZ0V5Lm51)BS<[IV51q9p&uMOX3UbBT3M~83HDluk4');
define('SECURE_AUTH_SALT', 'a2b21#/+:5;Xdd`I~e6dh[EcF?|@3Yb<|+60Q%mb-zGHn/eeOnOrC*!dVOv7jt#]');
define('LOGGED_IN_SALT',   'SCRQH)`-@ jUZ{_gP8`pZ.Db||Fz*jLDs)a TUz@4 &|k){GN4gxf!<a>7-$>OV#');
define('NONCE_SALT',       'hB1%jsx5W:E6:)>t0@@);KMRF/b1x2|8NHIZ;encd}SRZ ww/% xLj&2=;RgqK@r');

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
