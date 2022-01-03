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
define( 'DB_NAME', 'agromart' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'RD0AH/(!-%LDyu>+L8NQ<TntKkIZ %ll?_?apcx78>y:?6W,Ht@PQ9^}VKY&C/8P' );
define( 'SECURE_AUTH_KEY',  'CgHPoAJbCn`U^uZR-~faU]8FKWJ%Jw;l;whW_CoS`fDRS&+Ob?a2*b1IYsv0bv@g' );
define( 'LOGGED_IN_KEY',    ';On=mjT}]c|-nSYObWNot-8$)Q[QgI[V6O2iL!4sWS]q&#]5NtA;}@dh?x$Cs4B-' );
define( 'NONCE_KEY',        'DGA :uxXp[QU8p Q W!kKF60VlmYnSR^|>[gl&x%/gvG-Z?94bd&7Bq]*W@#QLCH' );
define( 'AUTH_SALT',        '2_NFAw<Bw3^@DIKBTWm~@hZggP]{FhZbe4QJ;S)yd@6aco3Hm!Li2VZO$^ LXRFT' );
define( 'SECURE_AUTH_SALT', '_&UHQx-bM)E>:.Mu)=[5yeIkul&%S]_8>N=a`t`zGJA,u R.#psYYb$JEv<V,Iuu' );
define( 'LOGGED_IN_SALT',   '/v.VS#,yLF3+~#!G:Y%n/B$OO8yM+3TPke:Llm(WU-4w`s-pa,P~{*xwiI)f_k)?' );
define( 'NONCE_SALT',       'jWhc5xXVTxF^)mw%if&xwu=8Y, }F?_:5Pw<.(`Roa3-fypiIi#:;ks}M&U^QGh]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'agromart_';

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
