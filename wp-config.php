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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'agency' );

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
define( 'AUTH_KEY',         'a3rb{Y(,]72aeME![,e%|mss~,QU^&p4m/:.~tfvmCTk>7YI`H/b8Rv5=L3g^jm!' );
define( 'SECURE_AUTH_KEY',  '5R*3T34mwg;5RQNZwoxz=XKF]gSw9RR7njsBdhT;e9Xxl cYLqh^ X[*2>t1SJXM' );
define( 'LOGGED_IN_KEY',    '>Fl.Mx,]| ^5*F^@:dCxNJ(4<;d^zYo*>X$GktN#mmo4# txO|[A_aP1=/*VUs;e' );
define( 'NONCE_KEY',        '&e&(>t-MG^^yp)0GR*(VdU-wDKAf$s,+;=J(R3NHnBAVn02+}~.ZrfMP~~Am~^J|' );
define( 'AUTH_SALT',        'zH@o7pJfdqv}z{3b7$?ifQ_oLb^9/|8HB5O(WT4YMU^o ?_f;lTwS2$2CC~ {aYW' );
define( 'SECURE_AUTH_SALT', '3,$<-Js+|T=8>A3eZPaTi)8eC3>cwLd=pMp/hEQbMH#lmS(<Td[GWJ:#kGGrHQc0' );
define( 'LOGGED_IN_SALT',   ',~Woq!,}t)=/8{qc~-kj$f%E1a>m4DI|wSyo%`zFssJ;kh1(X@,]#0B[j>.*7O2E' );
define( 'NONCE_SALT',       'tVWX$%B2ozOz%8M?@vf7=<_7%b$a,}a~9omxOBi$$)^;+Zpqcu:GhXx{mZ4@&3(f' );

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
