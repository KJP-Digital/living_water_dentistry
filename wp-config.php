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
define( 'DB_NAME', 'lwd_new' );

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
define( 'AUTH_KEY',         '3E 85Vw@~}5|)tkw~G[2z9 8H!d=8z$w]6r$S)MPNQi3vy?VU4U=]6@7!FDh:GIA' );
define( 'SECURE_AUTH_KEY',  '@]1!*.`^}.j-u&p4%I8PT<b;)U:g0lB-QHqJ`/X?%[#JpX9dZ#8+9<Ig:kU`Beo`' );
define( 'LOGGED_IN_KEY',    'eD>!*/ U[H:  6~A<s-])(T{23sP*F?PQJ@;p!u%/!,Z;^z:5Rl|C+=Gn(h3yvI4' );
define( 'NONCE_KEY',        '*Jil2!amVe/<CaN:7{/JYX=WxUYo8z)B*-@tRB&DC3K?`g>&XM$.;eS_/@Bxw/{y' );
define( 'AUTH_SALT',        'oDA}:&8.k/ O Y=|ED}D[=NbL|9*TaE8j,|d5n?S8-9p1#^@6O}Z`n[1er|9&~LN' );
define( 'SECURE_AUTH_SALT', 'B@5O`}DW&{OyW%!Gr+ZC`pRm9?XK@8uRHDROz07FWRxV4PpT`K|iRyx]jM{qgY%+' );
define( 'LOGGED_IN_SALT',   'j(<d2+,+$rtU8xw5eUkoV+sanssweSNNq$kT/mTT],(jbZ?xV:5ENJ4!*B/<tTe~' );
define( 'NONCE_SALT',       '9*2MQu;6`+gd.dCxv!^<a=2jRZZs1/cmI!0C_M}vw2,N?yVF $&(?zo^ruD@]DIK' );

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
