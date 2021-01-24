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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sB5CvaqXNLRSXgai' );

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
define( 'AUTH_KEY',         '%;]]GE>A7RkMtdF,rvW;|tFWbmQvVVVa<:v.kYfLuh?Y0/pL;XMCY05+|+jI6FOI' );
define( 'SECURE_AUTH_KEY',  'm+-DRJIAYmzpo*`9a)EJ]`OFt!+@m]6y145cet9yG?&5$|vPT#-hmUOb|BY%>V:A' );
define( 'LOGGED_IN_KEY',    'n(P95gD( ;HWY3%:{^>a8>EQ;g8*r=n;CX$h5VL<=bFlGM?5}kF,]]f XS]-.P>l' );
define( 'NONCE_KEY',        '&vV.w/aPh,ixpLffFB#CnZj<A2RbNJq%Kbc.A{#@$$jy3?M[=rj?6W-zuix]jk2`' );
define( 'AUTH_SALT',        'YNPn?6KTu.4B>b _j)+U/^lyiVv=R8>glW@[1%#/x`&!]B)xw~{b +OcoOkM-U6o' );
define( 'SECURE_AUTH_SALT', 'G9abHL3DB|<3_rXBC^?l4!(r^8`v45)_=vAq~?TeO-$Vhs7tl.g`z,{4@ZjP[!1E' );
define( 'LOGGED_IN_SALT',   'P6E4>3nfdwPw:8ydGM??wTK/AmJv[s);T*[ r#[H{^OJQ>Jf<l_aQ/#,<pdkbwpt' );
define( 'NONCE_SALT',       '{,XrXBA@T4UZW)R-HA~+z[W!9_4F/-KbRcDrDb=deG:CfL+6j|>_rIWm_466Nc@A' );

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
