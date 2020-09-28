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
define( 'DB_NAME', 'girlcode' );

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
define( 'AUTH_KEY',         '[)AVX7j>?XeyhWR^#-p6p*IVjk`jY!^Lo3dDB:}okqcYdkL8[>}JkHhI}Jqjf!IG' );
define( 'SECURE_AUTH_KEY',  '1ICDNT5B5zRE>*|AQ@}5{;1JB3Y!H^?&CX~W_hLMfa1#sr{2)N@D*=o6-/ f&K>b' );
define( 'LOGGED_IN_KEY',    '=W#:QrDj>x1,{k,6SNzNk<?n@bF16x&Wz$Oe-`$w-:VUZazy3?5a@kGks`.^34vB' );
define( 'NONCE_KEY',        'ttbY6oUg[lGc0LI{dXFWq8?+?(<%am0:FmlRB9`i+Z#8SjC>dqv:62Ic #Y!uT<F' );
define( 'AUTH_SALT',        '~X5Nb/.E3j[-{3v%N#3Mlj+:dTpg30:2JM!g(t$i*KfG[]-}:5%1Z0|!(w9(@p1!' );
define( 'SECURE_AUTH_SALT', '=kHa)$jRW8Q4(XVsCXI5vNEp=wr;G:V|<Pd2LN{<02U.;*Q!tWP:2cKqvsE6s4vq' );
define( 'LOGGED_IN_SALT',   'XNo|KJUnB.g{kHiKe%0tq&utwQc+0eF,_x;CHf*>Y6=J[xwB$PadDK+d;`Hd80zk' );
define( 'NONCE_SALT',       'TxSg$,Gz$ /a5/lt~Z2A8C%l~U(@MlqhlFCE[A.=?8kDE;q.O~N#(CH{8snk4lN ' );

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
