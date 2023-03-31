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
define( 'AUTH_KEY',         '8eow/Cn$}yc4;m3.b&V[w[cK+5/8(8rY*7!5&y=b0PF%Jq9ks+%Ks$^g $ciDJ]+' );
define( 'SECURE_AUTH_KEY',  ',1)dc;)]OI4;85exg=iR]n:{C|rGe,D^5qjG;I?Z]V1/}7*Ro$A<xTma]e4qKw(4' );
define( 'LOGGED_IN_KEY',    'k9+10$5(Plt^FTA>/x=[KY2(qID2FGH7IgIVvY}bU(`H;-XM[n|x1 s jtk!c1d9' );
define( 'NONCE_KEY',        'Fi%TpK{ACJU9yg,xf:|OwR=Cn@g[>wZN2Eql29VtwK!O:>Fl [wKG*b(_rUjrn5n' );
define( 'AUTH_SALT',        '?H|x=D<emBMXdU8PC<&pw_oYE=3g;}po7Sc.9D<iKZ**i~@`^s`u;u=kz-gvatJ;' );
define( 'SECURE_AUTH_SALT', 'MX(^!hdUV:bOBs7#!OK-Zk)M0B_WSdq?<8(F?:f7J7H$VT^kVPuJn^l!ICp|3VY;' );
define( 'LOGGED_IN_SALT',   'F FC$1XWcO&u93JvFZJ6huV%04Sv6e;y,E)^n[~<{7z~VfRRe|[0adWP9L4CSMFA' );
define( 'NONCE_SALT',       'f(3vy3K,%(5hxAz(n_%AAP$?P*DZr}.T4aB8C[RL7:o;F6?-EYUV^H!q+E;X&}ZG' );

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
