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
define( 'DB_NAME', 'achaka_conseils' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '`~;z(~8}xH#i_%_@]jbaD.! vrFR~UmW_L0f=NO/u2sSw0wQjV+To|y&~N+<w0bH' );
define( 'SECURE_AUTH_KEY',  's2duJ:FP(W.fTh`)u/GFmumCsS.L7PXOeVGjL5Q>6gfcq@I74>cklXJE7a0Ru)CO' );
define( 'LOGGED_IN_KEY',    'B]HJjgcB#k(KlCmpf@fc5.v,?tC]`UkoLnhLLdCYW$-QKQfj>lj_!VO4USzxU136' );
define( 'NONCE_KEY',        '?U<&Y(&6.uZwJoMX./d%mf(c^mJddc) <:auupRUcjB ,wl]E(&b`F7p@~8YCR^h' );
define( 'AUTH_SALT',        'GRR_vIW!Sy(=q:P?Aj)&`#g?yvUJ* qyl@K9-xHH]pGm!tV;MPRug|P?ef<8]*nG' );
define( 'SECURE_AUTH_SALT', 'xxv[FSF!i(#^O>sG7%A^-EinEK?;%GR#+r~[K5Ku2krnZl]g~_@~+^|>MtLW%~:?' );
define( 'LOGGED_IN_SALT',   '{|(h)DN_s.Ls0$NVe,<&Eu|v.]|3Q+}VC_2cpT@uBk>>qEV0zg#uX6Y/!:pj=b^S' );
define( 'NONCE_SALT',       '-/T3a[C,bq|RG4J>g-Re%[M9%#gVb7?dT7`0ERoMJp%-);DU-28,mRjOJ0k.j[LT' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'BCHSbibcisninOCNs';

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
