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
define( 'DB_NAME', 'mr_digital' );

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
define( 'AUTH_KEY',         '-`SEH=-U}B95gX=6$mjeYIsj&W$>a1<ex;vh{%o18ZT dI5P|@7=hp~B2T9sG&9V' );
define( 'SECURE_AUTH_KEY',  ':#p?Vn8_h))ZuDzP0$<#D_J>f#rU{UuEVF #!?)~zl#QO[Z+5GfnYLF}C^n$??U>' );
define( 'LOGGED_IN_KEY',    'ufAE98=21$RE=<?81.Zl:_7h/nIfx$L*lp1#:SOk6NH/9iW0ht9} -DJGyQIhRP9' );
define( 'NONCE_KEY',        '>]-G({<FAXW&*R%7wlgdCvrHnPc*q-@~toDVH}1mDSFwO+sFg]N.y?a+q|nDjkN6' );
define( 'AUTH_SALT',        '2e/AY^yzs#$M=axPU$vZ1I1waAgz=3PjS4<UKH%6nghov{P9[f4SZ)wqzIJ4_,$>' );
define( 'SECURE_AUTH_SALT', '50Kt{48xp0P7(u`?1z:g=W$ _}@+moa;0L;%ZeH5w-L [WD%O%)(WC,{U*Htnz_}' );
define( 'LOGGED_IN_SALT',   '!h.9#NUI]9P5I*mp?9Ej&j9virO-aoL:Ax$fI}}f.7;EN(4?Hm>j5,N0F++fq2,h' );
define( 'NONCE_SALT',       'x$$U5bGxk1MM1p+wBC?Z(f$R=uY03g-Z.3sb0GC#UTKv=o]+QtZm9;>-.X$${[)%' );

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
