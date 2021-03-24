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
define( 'DB_NAME', 'cyb3rt0wn' );

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
define( 'AUTH_KEY',         'AK1j6M5v3PT=*FQe|&7*xR6Y=eZ[~II-zn*paeK7Tr;-kfk~ 54HoZH%&La)HXeA' );
define( 'SECURE_AUTH_KEY',  'PyH@Oy^k)PZQ4e[,zG-lAh6V{3dO,yE}jz%I2jM<8i.D1F}fHa+POPw@M8XWROYR' );
define( 'LOGGED_IN_KEY',    'hFD t5[oLp4=:^DvQjtZ%mvV5a7vau H]%EAM3q[(5&$#bPfb4{woNr_lj5[*!9:' );
define( 'NONCE_KEY',        'M~2^;NR $>tq}i$=lW^4P/j.7&Ewf[ejo--9S/?WYb{^l0};Gi_4AxXoJd{e_aew' );
define( 'AUTH_SALT',        '(`ddNn(#0-;Sq*%{5,J/K&A@*?sU1?F.9ZRGNWA&>!&Rhp:rW(30n$!^w4D`(Iql' );
define( 'SECURE_AUTH_SALT', 't~}FW@AW=?GVQQkL<Zc}@!vpR),9FZg2m(kJ`T&4GWr0`9ZaG!=F0qAeCf{=:.O+' );
define( 'LOGGED_IN_SALT',   'N;5yD6hW$T$a?i*7WrS8cw7#1*lY?Bu1JKylRNDO5[uG#~sWl?r g[)1CLcZCut6' );
define( 'NONCE_SALT',       'cn[dzqI]fqjPEbr| w:4gbGwi%N F=3&`~q`h/t?uX/AZiVuD:T=m;Nv3P3FRW[O' );

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
