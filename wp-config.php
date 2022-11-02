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
define( 'DB_NAME', 'candyfandy' );

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
define( 'AUTH_KEY',         'QGB^tIF%cV/v2-Kj 9YG;Tl+;4GW-ak f%Gem|D#n%Uj>d}0Av{Q_a<5`j1R6nBh' );
define( 'SECURE_AUTH_KEY',  'a./`T94DCt.^s&;lYL=sIq|hlW/IvGgorl4~279*2XAGamM/lbWd R>DxlyF?Q=M' );
define( 'LOGGED_IN_KEY',    '82]<m|vc7yl:_ux|wWm<.JfWeq#R_Vw7}>[}pTG.G6Nz_JJd[Cg1}B|uF8rV6c3^' );
define( 'NONCE_KEY',        'iKi&d[#R>SB-6|jh6IZvgPM*c*a{V#LwRg&!shzMXj.xDJtFhseH4qA2Ui!y-$D*' );
define( 'AUTH_SALT',        'h#[V^Q&DD5L=^.>w3y=d2T9L3bdK1E0?E5L8:ou3]yri.Zur~HFIWn)HZ=;$GoR-' );
define( 'SECURE_AUTH_SALT', 'b*2<d^(?@m]8Xt[IL4ipcVZwTtA*N38Ab9B46{X~C[w!N/8NGVg+Ka~>G!@{FV@c' );
define( 'LOGGED_IN_SALT',   '|qT.[KRY`h/:T0IyIhG3*`?ef!&SH/y]:mU|A:E|!4)+(l<#6Ix#k=Yh8=f,r4g ' );
define( 'NONCE_SALT',       '7lo3;H$Xw^dLh1@!T.Pd <%BiiC{kZ[V8h$x^MKa)r9l.qK<^JboB2|&@$M|/_jq' );

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
