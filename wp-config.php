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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'FS_METHOD', 'direct' );

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
define('AUTH_KEY',         '@Qc[h+5iuE%3;l+YK[knjQUaVT0]G4t|hK8+D#Z>9f9hQ,Sx=;vh8u^8ady~!tM{');
define('SECURE_AUTH_KEY',  'WH[~vf*t1fW9FC4|JVRI+|C%Ew?LG8YD} PUSQi9Y$|w-IPpgUG`-L(NiCWPgJ`Y');
define('LOGGED_IN_KEY',    '6f|&>yytbJgnaOKjDJc88-$w/]5-Q>1^_92RJ}|ZTNKG.+7h9tl-{83^}>o8Vh2}');
define('NONCE_KEY',        'Uz<,&bwH5BrI sU|3r+W]kw_[(NKVi$pyr/8*IN]qOzV|eK.+P|64D5jWW|M&ELS');
define('AUTH_SALT',        '4-D2gaDLF_-Kx,q4.T*I/5xz/kY(oSXN|$wAe+p(*>W++{6}&hgTe-G4|%i-_o^K');
define('SECURE_AUTH_SALT', 'd.~X?mLrhDcOZ}$<VT7N4Jy}dY9T|FcGg|YK-g{b1QEHXOt+=4cB-1~h[N!&a^gX');
define('LOGGED_IN_SALT',   'zaO%d.,[m`muA*9?S50D@n/NP2}{f=@`9D|ytVN&W^tFy(!c+aLHb<d+l/5,!rNF');
define('NONCE_SALT',       ')|!NZQG;n7c/+C|s/8bfo?_[&-CAy&*@x@Uy|H?TX]VoSi|)Up2UXD^n=8y<4*uB');

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
