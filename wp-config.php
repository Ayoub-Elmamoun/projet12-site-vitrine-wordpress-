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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'qta+YdyU},U<N&A$Q& 3>U${Dr5tA_|9Fg#$DLT7i;LldVOWGMO/l!n*fg_55tP3' );
define( 'SECURE_AUTH_KEY',  'R`gW#AR@ZBQ[tP1zFKZwGb6`x|cknR<7)[vAO/aCuZ6j?^&A@}RZSVp<+z:bd+s;' );
define( 'LOGGED_IN_KEY',    ')bpG}^UVD-FAXt;eho/vl[diRtj,#&I-A2QKp)oz)!~VB|vH&Bn5}E3f&)e-H$:i' );
define( 'NONCE_KEY',        ')b=;nLNqLv-M>)z`#,(myIr+(-vv/grBT6W=&!:T9]+S[W<G*bJS`([y65{HL=Md' );
define( 'AUTH_SALT',        '2ZHC|7#Ovdv^je*B1]2_?2$xH-s^XE|jtf{LPVajYD9J&/PjY)e`e(9J(5w$^g@g' );
define( 'SECURE_AUTH_SALT', '/^#?-P|=@&?F5bF:jN9^N|I5CA(GXhs88+5o2Y4zI&g[iJ5F{4f[(w)`G}e[L-_,' );
define( 'LOGGED_IN_SALT',   '>MadaN;#pd_&(!o! e-(u&hzvbU$T+Q|?Rp~=;|OD]|>UE8K)C,J~MHcW^&7&b;J' );
define( 'NONCE_SALT',       '+x(S|/XwY2cyc5j)hnf+t^U)C%Bh<*wG4=~q:z%4K((%.y/-|vbrTRuCsu,Yz/yd' );

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
