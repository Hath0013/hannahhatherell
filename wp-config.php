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
define( 'DB_NAME', 'hannahhatherell_db' );

/** MySQL database username */
define( 'DB_USER', 'iamgroot' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Starlord18!!' );

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
define( 'AUTH_KEY',         '34|c{8PI)!*Gv~XsV4(.G0DuE$u$*Ws9?MR@=2e5]CA-8lhJ:;3FzkRFbQ3j?:Uz' );
define( 'SECURE_AUTH_KEY',  'H<diS,{[d*7O9PZPTiw0t$@Q)mnJ,q8{MUfi|c;mx|!7qtA!`:.8#phLyu(NW8Tb' );
define( 'LOGGED_IN_KEY',    '.crqJ;|qW)K~4]]{X.x?9[em${F/6_,rG4sTu^KEWf` ]M!QJ),sY4OdfXE=|zSV' );
define( 'NONCE_KEY',        'WkRkLDR[(Sq0s#(_2K#Nj)[HCZypE!}pC9XEyein3Zwbe%3t;+:anCt[UO#GcPgA' );
define( 'AUTH_SALT',        'uGoLNfL$R2+/*}pP?4pS,%JRwr)<q{I|-.6U&vO=U;;QDoMnb)CJaD`W[BQLTM.a' );
define( 'SECURE_AUTH_SALT', '3,`4;$Os@hCDv&)`4?wWrVjXC1=&Q381>epz*!BgCH`]imvZ1x4lyrjk*GXez5~~' );
define( 'LOGGED_IN_SALT',   '?.,?anl)Y)J XPh9+tfT.^,O@(U%x.WrlH5q$PtM]%7=O/J]87n!*J$DE@fs]BBm' );
define( 'NONCE_SALT',       'b.vh5_GEB;j*,vvvItA7CvW S5XL%&]=#jk$i(u8pP+i@l;}1iEBUP(n7/7S76_1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
