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
define( 'DB_NAME', 'form' );

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
define( 'AUTH_KEY',         'TrI_?LMnwAEqHAK+Ruw9Ew*Qwx]f8Hn[MCwY=(~Akk1;RR$@|,(xK.r+N#$0rc)b' );
define( 'SECURE_AUTH_KEY',  'LF?K{mPIUXsP80k7kw3:]:}pHrh|739Iz%n3%)0~I0f_68g.Fa`y`Nonxm=YS|s}' );
define( 'LOGGED_IN_KEY',    'vD`pzngkY4=d!KRmu~9ZD.kg2;sM(6xc5Xkl(%XH(#~ ^CtAm]ZpJ9V,[`,sp{9G' );
define( 'NONCE_KEY',        'w1x5(uQ`lMjdx(KYLKk`o%G$@3N}5/G>@|Js:GN(0/EB#<u.psmw|_ST[FPmF-t:' );
define( 'AUTH_SALT',        'NSQm<Q?_I%{I_Dt|$JT%*,PQC91BX197t-i[^h=G9j7lKl;9 QaYt!;{qa^%#q,]' );
define( 'SECURE_AUTH_SALT', 't<7h:qXkQ~GSok0rr/8yIB8QZQk@sp2?/(q;[(aGJ!j@7}$Nm1k>Z2>3~O82n1@I' );
define( 'LOGGED_IN_SALT',   '`tv~p<] =W 8NW2JLO?47J%+quceLxJ%aD6)8dLX=H.(CeK3fqK1N`%l[Wc08,Z8' );
define( 'NONCE_SALT',       'fk}?(8k5kYZNCPWLwa-7) >)TD9>%+8P9kR%<E$,iTXK@YU9T{R`^?eM&|6=wZYh' );

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
