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
define( 'DB_NAME', 'bw' );

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
define( 'AUTH_KEY',         'Q/p5:H[PU;pg>SqI~QM b@y1q2Y`Vo@s83nnyJ=4(d-4}T!~Vb;[bsQ9,>V|Lr*.' );
define( 'SECURE_AUTH_KEY',  'SqQRZ))_mbW p.aF~6jc3ej@xK`@AfTQQ<9|jZ1Ng/$tUmt?DK_(&^fswr^*~A- ' );
define( 'LOGGED_IN_KEY',    'pYLmUa4._b$!fUekrPPCsJ+Td:L-f|L1f,K~@ksng]KkxwR5XkrbSNa&B$3icp22' );
define( 'NONCE_KEY',        '>G.>zf!)<35zJI.Y9o>qRPh2Dt@zL2*`(*ROQANEIoFF,~x+T|*GPc{D$4,Umob;' );
define( 'AUTH_SALT',        '#^#;MMAoU&[&n.)&?-R>yd7gq}YJ(Ij1m`V)@/u:xD])2gnTbvq[<}f!W]>seUV`' );
define( 'SECURE_AUTH_SALT', 'dM[(I0 hG3b+VX<%5jR9p=R{9 zSkU*Gh;;y$NW[9m!^W()9-rCRX<=87IeqAvUt' );
define( 'LOGGED_IN_SALT',   '5g4O|df_)X rn&RAwZV[j%s~}vN+Bc,Dnl{;{6tE~=#).7ac<VSG`*juox1-XTpw' );
define( 'NONCE_SALT',       '/X63Nq~:Z[Gx!G$HlgY jtB<C]o1tY7 NsDn00OH%Zt5;Kft4a~1H5].i+%ymHr]' );

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
