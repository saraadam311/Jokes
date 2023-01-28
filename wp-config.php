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
define( 'DB_NAME', 'Jokes' );

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
define( 'AUTH_KEY',         'p5&ge/]4$X&zMg?yj{Eryk2{#+c1U9tSy-]^->{V%dy!j5k:HwYlp3dS.bzUz&b>' );
define( 'SECURE_AUTH_KEY',  'St5%ZuCwQZKi{i`p4t9hWvq)J$TBcaKE$zLA{zh:P2&Hp)+)3-u7VkDY*el CtrK' );
define( 'LOGGED_IN_KEY',    '@o3b:O0q}Kq:YGd>{vj]oE1ezZkig7v>oqF)<VQPG+|pl3JBX{wI?d)4J[&mxv!$' );
define( 'NONCE_KEY',        'o.jqn); _B)L??:%207@D)x3CV>zp5tT0%)/CY(d!TjE25i2`O%!tFnl#2K3Zzm2' );
define( 'AUTH_SALT',        'r(>alFAH4{H+Sc|@aPy;UOJ~_zWgp&s[E[5%SzQO~$V+6:0i8(-@K)bk9QO&`i?.' );
define( 'SECURE_AUTH_SALT', 'BUwGm8;;k(ci?;_R>Q_yaheI>Dtc|AQmj9W1%IR5^-a/t687d_M/@l*qDW_6hhUJ' );
define( 'LOGGED_IN_SALT',   'Q:3t}?3`~vz0%e`aO8StNockLuJL5E9gwva|cs>C1++>zN{&9Xq1qLWr~w.k#v97' );
define( 'NONCE_SALT',       '{Bj8GBuO67~1]7BGcy9is9N?$`OtCW$5aE$_&Q9U7}5GFwi(:+4U#VFmCoTW<fuX' );

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
