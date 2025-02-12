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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '33wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'FNa=XgP9euozB>:l:UCfv/z|g*Iuz>87+3<L.:vD@r0n3!V3l>=.V];@Tc|+%BuT' );
define( 'SECURE_AUTH_KEY',  'C3DOT:5-8SQ4L<|r8M>h5NDw^0I&NTm:#As-#IgQ.h;r%{>wq*//*gGp}lqC6xF/' );
define( 'LOGGED_IN_KEY',    '9I+-Z[,i_TTi}BEsw.bv]i.fa]{F?&&ndO$w~#tZWA|R7tNgHbn(#6HP^qRec6..' );
define( 'NONCE_KEY',        'ss0.$%;}^i/5c.~&YK316I{l2y`jE(Fo@`XDPNMCn<tbbn0opt,j=^!>SP!EaXHU' );
define( 'AUTH_SALT',        'w]&83sv16T{XJ9W_fMtl<bM}vC y}Noosl00GbRk!+?m)=6p_3+5SJRuJhIX~!kF' );
define( 'SECURE_AUTH_SALT', ')+pZ%I}9+|9MWF]6J9mz8lh.^v wT/i:_rj >mYBy]-WFkWAQkOKGO780xKpx$3I' );
define( 'LOGGED_IN_SALT',   'pE%#xwU-8j;uQFMCHK<]6zhp+NJk>8Sy+n?j)as#!YU%_Euidhi%~hY2h .E$7~0' );
define( 'NONCE_SALT',       '@_YxDH]Miow![p!t(:UgZ9eJE!GZcllidjRJB5,a,)nU-v?.a>$x1Iw|pa7^(&Gf' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
