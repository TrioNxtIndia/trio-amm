<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/** Enable W3 Total Cache */
define( 'WP_CACHE', true ); // Added by W3 Total Cache

define( 'ITSEC_ENCRYPTION_KEY', 'WystPjBDJmRLTG9vTzcsNWlmYlZIMEUjXVptMmJsIDEoTmg/YSFNVG9Ne3xFMzd9bCguMCgzclBDa31VcyFwYQ==' );

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
define( 'DB_NAME', "trio-amm" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'k<G#|#!|D{Jwabu#j?GF8;C$Z9o+f~tJdq?4i7@7UIkiTQR,CBjSUmskFnI4>{i7' );
define( 'SECURE_AUTH_KEY',  '0<4IC@Wy:]Q~}Idt$ZLT{r[Dh$q%4zNJFU<H486(,}<Od0NE*_PPO[rgn?1WI,T_' );
define( 'LOGGED_IN_KEY',    'uiHF#a<,D[*Olt2|z/N6T QJ,V*a:qeUO!aSv|@#.YzlG{#hkPg1=o*fj%[}n@xO' );
define( 'NONCE_KEY',        '_,&Y|cL<l(,?R(*O>>n3j1KrL@!ej$5V6sO|t(1iHA64tMp3b)KTwZ V^[P}JPsp' );
define( 'AUTH_SALT',        'wWf1G(c}gMQeJW`{?:<uL(x+GN}Q=<];v1a/H.{lF%jkCFszW8=R:OS]zx81+|ML' );
define( 'SECURE_AUTH_SALT', 'omoH$t_T(fnz#(u1Fd]F96e>quPk2SoAbwDZ/_$mF@dL#([QMB_xXk^n{XuBMcy8' );
define( 'LOGGED_IN_SALT',   'x>2jYlv:E-JtxIH+ziEx] U8aE1$kg rQQtw&sR/r+5*RIMyZn4+y,b2?u#KN`av' );
define( 'NONCE_SALT',       '2^0Czz]UuB6}MdBu_L<p;#&7wMCZXcCj3|ZHcPBO[G`+f!D8]y ??):Gm3%9Q#ZI' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'edmr1a_';

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



define( 'WP_SITEURL', 'http://localhost/trio-amm/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
