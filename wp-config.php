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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gsmwp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tiger' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'gmk@M2)m;^#GK#Tl6@.pl1V}zKxym%peGi>gNeD}`>^2*2T+zRayg?)Y<;4(f:?@' );
define( 'SECURE_AUTH_KEY',  'l+`I_R/f{oF`ZbU%Tv_@S;?} lDvhAc`,E6My2)#H@<VZSEw!`D&xgu<S39#OLjX' );
define( 'LOGGED_IN_KEY',    'kbZM3*-XF)U(!Kw.3b|_p6EAF$.2N!OrPD;#]sy,]tU_e,bLXA6K)Jr5lWn+7s.~' );
define( 'NONCE_KEY',        'D`1eX~7YB^i~SkRb]Uj900x#g%8-<he_W8XGxoqz6azB1d@(=*{0@x3:|L^ J%%r' );
define( 'AUTH_SALT',        'B*XF5(#|zf! *&7aBS4+#Vievp~00ymAwNqOCZp!U2D@dN<Lwqs5#ywctCFd5WM(' );
define( 'SECURE_AUTH_SALT', '/9HqQ;uY,gEIl06ZULMG2<gWOYja_El~c)h[O%FJWc~Zd8e~m;.u0!m{1ZwF_28p' );
define( 'LOGGED_IN_SALT',   'PA;St<E|!l;Ra&7A=rltEs%6 0vPT/CV?7 {&iM1v11,w_+6LS/%kB0h%3I:c_ss' );
define( 'NONCE_SALT',       'RWRgtqfxf=W-Rd`NH4KZ&7AUz6I:CjPyu)?9sDaHlEq@~SXq,O-_H1k%qas`Af]j' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gsm_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

define('FS_METHOD','direct');

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
