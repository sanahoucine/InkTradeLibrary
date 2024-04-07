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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'BooksShop' );

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
define( 'AUTH_KEY',         'mY!s@jX]%]o=KC_*~E65u[ojR8sw(V])U=BvM&eut>6$auLltK/!paw|!:mHCLEM' );
define( 'SECURE_AUTH_KEY',  'T7@cvz41/0s}a+Otw!<i:!u,Jj,)g1lyH.N+Of@Q>TBnjeu!!rW=NH%3=,.H36(h' );
define( 'LOGGED_IN_KEY',    'gh{R<BI.1k[WW_1|;]=>hTd[IC.*6N6PU.n#ve##J^|dXW i]a>akdL?hbSGgQHf' );
define( 'NONCE_KEY',        '*<Jz0mBs.PZNFvG9ACeWrVV$Wvx_1u)vNitXM+=Krj+WQDNpc`aIFZH;@@6}CM)(' );
define( 'AUTH_SALT',        'jgF!xO:Zb;#a+JRf@~wX]O6TnSS_{q [yfd#L*IAI`6?fR,$)@<)fUl[Ol~YD1YM' );
define( 'SECURE_AUTH_SALT', ']))O,4yxQ2[P-Gi*yX9tKYa>G(KO#1|a3x/6&[zia[%u&P*Hnh_8$[~_y7g1V7Qg' );
define( 'LOGGED_IN_SALT',   '{F~R~0!L(HchejD<j*/j4?DlxH4b/*mw)%j$5AV:UC;aDZJ$Wg$bLd>-k]lra-&[' );
define( 'NONCE_SALT',       'lFd?W:WQ63?<-=wPulx/=oW05Tj<+3kX=.vMV)O%^3.mzzm9<Q@tJs)v@Tt1MlW7' );

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
