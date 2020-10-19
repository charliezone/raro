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
define( 'DB_NAME', 'raro' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '%.FWGhWFarId52h^,b/*e,MkgQ%VU<D?@Sx43P1y <44N`iRN30Z`iqL/ZY@ckR]' );
define( 'SECURE_AUTH_KEY',  'oTeyy>xg^*be=i8=,NCSa(NCx*^)lE~fm+ l8KW%p6>M[qAR_Y#[fZ:?a-~62!]q' );
define( 'LOGGED_IN_KEY',    'TNtE*pZi*cPR>y-|QX^`=| ~5%t@/-(h+!~a=GV#$2vU>,CZipia>QOA4YFL#fDt' );
define( 'NONCE_KEY',        '&6,ZH9]7?y3j2lO=I7S%+y?rrxo*<BnZ|YuE/^]6o9.FUSgHtf7Q?/wS(=Km6a78' );
define( 'AUTH_SALT',        'vBEWC9)3Fj?I/hMHV-d}sF?+az81-Z%]dWnL.mWm)>3feS`%cdbr7[^[$Ecz_Z|D' );
define( 'SECURE_AUTH_SALT', 'Z,o&Ep|phS{H2}?n7(D9}0!=n5G_ex*j<4uU1L0C.o&h_J1^MKj.c/1 E+EViH!i' );
define( 'LOGGED_IN_SALT',   '__XhX0z;qlGpGrsvMc@ljzq8 GxA75eG]K2cjl!D2Y,u9J]B/z1~:o)e}7~pD<cV' );
define( 'NONCE_SALT',       'E.i<}-Wf]gX*R.N(jT=P5QILnM+rs@^5]A&W!E^h*%Y<pmn78kBo3Y*oB]w#1V/5' );

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
