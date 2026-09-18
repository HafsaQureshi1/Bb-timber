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
define( 'DB_NAME', 'bbtimber' );

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
define( 'AUTH_KEY',         '+e;5G.bO+~h>)4T>GpD$a(7Q$*=#o~H1goeY56/z$?:rVoxrKe:%+y0-=qh/F;ey' );
define( 'SECURE_AUTH_KEY',  'XZ4dN^dCZt`G6n/E1<%4hDSkC:r6ldckGA]c^ElJNl~Mi7pn9[r|k;l#KmHwS`9@' );
define( 'LOGGED_IN_KEY',    '>uEaZYyD2#2?-LVR0S.kso}UM"0#G)pR(qQP#RNIwg5AqMW*T9>SP?WFE?NQy[OE' );
define( 'NONCE_KEY',        'Sp*D)<M&Z&YGa6R14+!~EGfe:>)7|mSm!]QxG&9|PA4gBR?,gFSQ>8+=&+Q!X,`H' );
define( 'AUTH_SALT',        ']8L=ch}VqdSOA{PvKNVnNGZ(4<M4[7Q<N_hN8,ARh(_3gU<y3-R[*>4)s*}v+~O&' );
define( 'SECURE_AUTH_SALT', '3b@wO!C%e8&(nql0+HgJejYIu`kQl*%MLBK#nKK&%esZ}WKCV;:a~41Hg=vig,bW' );
define( 'LOGGED_IN_SALT',   'pMCXcO=h=f72`<+}Tiv1^[*7=-$aJRKQ*.+okmPX>^KiYsNVs2He&&erO]$x?wNX' );
define( 'NONCE_SALT',       '<Cdi/m2?zikXwd0P+D#r:a;iO)FW/Qn^2OhjA0jo2}5%-DKid+8>bFJbRO"A^$_z' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
