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
define( 'DB_NAME', 'jcciboav_wp390' );

/** Database username */
define( 'DB_USER', 'jcciboav_wp390' );

/** Database password */
define( 'DB_PASSWORD', 'I8S-p3]AI2' );

/** Database hostname */
define( 'DB_HOST', '10.0.10.69' );

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
define( 'AUTH_KEY',         'idwhhykauju1ekgn7treod14ovq280l5qhziwdv9ozyi2sgenog0jcskjd9noshs' );
define( 'SECURE_AUTH_KEY',  'tif4othfhffrkl4l9vuue39irw2ogkdwlncwdo9xd5pdoeatuh9jxlll78chawdp' );
define( 'LOGGED_IN_KEY',    'ysrlstvenonknsislgj6einovysurvvvb3vomgtvmzngtdiysdutdvpq49erh65b' );
define( 'NONCE_KEY',        'mkpsgiuv1tvdnktoebwrtv7knpoabxs1sdqi07p4n4e3x6ywanewspjxjqndtstr' );
define( 'AUTH_SALT',        'mxhmpzgcruedrjcykn7u6iv75cw48wugxqmcjnmvkqb3ct3iyirwif59wektpoy8' );
define( 'SECURE_AUTH_SALT', 'mi81l1otdioh7psl6udmbx0cvaiqmt8pcieic65ypqhy3kozoegv1x49jr159uuy' );
define( 'LOGGED_IN_SALT',   '8kjzo9ylydmkzjfhklu5t8k5lvhtjtomojxtqzwpkgbxncdewnly6mdsgl1sxy83' );
define( 'NONCE_SALT',       'ki2mfh58izb7ii2fme8bwewdczggnwkqjg9gyzfvidosfymhksjw2nz4fmxfntcu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wppj_';

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
