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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'e2c>v{{: SC1<$m4M}QfL{T%(|*_.G9g<[hdgSn2GT71h+khJjxqVqaZvW44`Z&W' );
define( 'SECURE_AUTH_KEY',  '~-<}tSM]D:B#>JJDXs+8QR(Q2~X8Ipw6ClUF-kdrT9w<+H61(4I1xqX#{4ao[Wc6' );
define( 'LOGGED_IN_KEY',    '<Zo[Q3zED%Dh[.V>A2AXIf1U0Vw#U(ULx69u{r(&lry`)TbXO)2)/l%682w&zlt.' );
define( 'NONCE_KEY',        'nhpJDB#B:CauR)ynCYb^7V+&JJgCS`&2)K4Q(M9IcA1W7?>6r5Z>1r:XLVX[B.bQ' );
define( 'AUTH_SALT',        'cDjE0CDH0C05,^W9+J|~4 u {)NS#|-Os6cW;<2g*!o RwaRJiy;PSh:1[RB!IA{' );
define( 'SECURE_AUTH_SALT', 'Jgp)Kk@2rAo$7 K5c9>$#4GB^GLZ46frsT|GX6x+#FQUcpt/g0vn:EM#h0M|g%] ' );
define( 'LOGGED_IN_SALT',   '_9?}{69~Ug=[``0Q9utS|YZrsLu^?N<U~p5w9D `3(>XG$|$pJqQ@#9{cM(pO,HO' );
define( 'NONCE_SALT',       'kUtCcQ9DtQCeWS(`^`S7YgKMu<$I<#EF!^lw0*FD>m[piFIatZP{g0q!7_my%Fsn' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'table_';

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
