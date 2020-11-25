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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'U>3H7Lyqj}.uL!u]Q,:kg$E3Uya!eR.D)1(O-1.P-Yx2517&4niXz +PB`6ME*;0' );
define( 'SECURE_AUTH_KEY',  'fN&$o@ ~[oUko0]inR %l-/Bt]E;1KMIC<W~CkMO7=Re@ttExhaPbA Mr`*P!{DH' );
define( 'LOGGED_IN_KEY',    'XN5OzJcy}^;{Y!9dP,sDCvd-Rj]|>J~&YnGjN[+hN[`*_lGu]J:hW}{ERI:}EPJJ' );
define( 'NONCE_KEY',        'soLopthH}N+z*mtF6[se324idN069WG]MsMKs$,Ka|EE=hwzrT:gfaA3$T)>Q2(5' );
define( 'AUTH_SALT',        'Nu[e%lyI2Lky/KP,AM-Nd1kilP0CYn~ 7?~{p >Xfy|&N}f%^vnk#e%Wj>80f@Mh' );
define( 'SECURE_AUTH_SALT', '-9Q1xm@BPo8+uD$)& 6`+Xzdy-MI62%[1Z{..mcqx{lfv> iFwUZrB`Nsrns K!$' );
define( 'LOGGED_IN_SALT',   'OabZwKSEPsg8,,Bqp64wgs;T+2W9;>;tt -E5I-oIX%;?eRE1+K%?C`V<vyt )BC' );
define( 'NONCE_SALT',       '~P?:jKW]Y:WEJK0M+1^?ww|=#[,O$$%LV^@WO)r]rvnghBg@X4VU33Y>Bxu=}JB1' );

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
