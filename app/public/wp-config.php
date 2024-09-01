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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '+C><IL6R]2pzvg^YY8FE3P.UE{OQg;w_VI)D2I^SCBE5/M6B^oVZq1| Ns=-*V:n' );
define( 'SECURE_AUTH_KEY',   'E8tk6WDm&DqzD4>DDxib)GR5ppu-A#@lCP[;u`kiAJhz:<Egv^(-`R(n@9Tjelr-' );
define( 'LOGGED_IN_KEY',     'D,+$_qoy$Jb_xU==*5d<}Y5euLw7y;?|?Vkj]JL.5>HS<M&CH1qZQPvWS5Jf,Tk+' );
define( 'NONCE_KEY',         '!z`v:NIg53BP/R,Y2uz8c|][<N/:Hj&LD@WbA9zAS#[>S~l!zp%-qTr%3O3`UHK4' );
define( 'AUTH_SALT',         'qKYOGeUoi`5PDeMB^-|ll$F9CA(L* [oG2bNf.?]X>Vb%~r4/@F}8.s<khW-c}W!' );
define( 'SECURE_AUTH_SALT',  '#G1J Xy^/-@W;8k@6I5l7yyTB8YDUR{(~;Bo$k:w<9f)q%%=.gnb?4Fdq}ENE&*4' );
define( 'LOGGED_IN_SALT',    '6w;TccGr{qb;+q32,kH)g{%pKom:-,g4y[Zq9JX,niXN2Lu_LZN@f+OzDD<y7`5i' );
define( 'NONCE_SALT',        'j5Ya+kKr1Nzo!N)):=4IEuZD; <`lEzrS<I1/!YkA[N@1zf=wMQ4.v=*:;;B9`.5' );
define( 'WP_CACHE_KEY_SALT', '}h?r:3|l,gX3<6Occsz53Lp`8vX]oq8QGuC$VeSVo_% BA|cC1act7~&D1%$OA&c' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
