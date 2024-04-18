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
define( 'DB_NAME', 'teabox' );

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
define( 'AUTH_KEY',         ']3Um^.Vsq^.SN~QpC>gO@yH})o7V]1;p`/oRte_U+A</lF06=kPZLQwK4k&^n=9h' );
define( 'SECURE_AUTH_KEY',  '<CRxbC2`r]iuit,1ipD,IbRh]IKxgq8#gA#gHn9$S&cAQP.lG$NU=D.vt>fz$k@p' );
define( 'LOGGED_IN_KEY',    '(CE15:Nd:6n<R|82zI#>f5t@[P8!,13?R]rS CHY*NY9rMDS?pQ&h4(o G>*&sm%' );
define( 'NONCE_KEY',        ':9_($<U1g|.WvL{T8(R8}n7@u)LFFX5XaFif58y(Fp6{[.rD?$IKLQf*SK$?[;`V' );
define( 'AUTH_SALT',        '7x{HzTXaqClKEKG)]:q!,tX8q>j$I?zUi(kqo4FIlAC*r6iq=6(p_OI-!pR1lHp*' );
define( 'SECURE_AUTH_SALT', 'xy_L#[wJ~:Mfj<A^%u$]mdQ])q(aoMTUmle5l;t;]fAi83;rfTRk6*~<sb+pWO`<' );
define( 'LOGGED_IN_SALT',   'qv/Vo7(A,3izx(g.4I#oY]f,BGh9RIQ~W`_r6>[AzGzvv]/Oq|x}F0T?#+96+./a' );
define( 'NONCE_SALT',       'AAwt5lc[qsh$}%.fgwtt-sQ#!i9R#T/`Q2O:|+l#w 2tTLYPNVJhrnnO]cFN;xlq' );

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
