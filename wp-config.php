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
define( 'DB_NAME', 'manuelbase' );

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
define( 'AUTH_KEY',         'Uvuf#&*ae/X|T084*-yke$NAc~VS-NYh$`/K>usNZO.f%f!;4c|k{sB8K.5c7`>t' );
define( 'SECURE_AUTH_KEY',  '+pLU(c=nc:_j-G3=`!4C_VCW%CiqfQf0hlYS/2$tV!%~p>?l^A!,4X]L~uQ>A-6^' );
define( 'LOGGED_IN_KEY',    'n]w0&]z>3guxygnCwVqM%55<T/os@d!Q#fG`sNn=s:y$|Q%WrD|MB!Ktg!0w[uJq' );
define( 'NONCE_KEY',        'dU=Tig=J@h-dH;kakj**e3AL0Yh;:%eH@94Mh`2$@/d8%oXIQ6U|<^)ZOb7*hDLO' );
define( 'AUTH_SALT',        'HhY!ODw+58?R{[.*}M/s)M xKE{-V8AAN1Vi0zP:&9){0P[PA|S29^15# %cIY@r' );
define( 'SECURE_AUTH_SALT', 'Ky8#A0xHx8#$RKyhzja6Xc3R</z$y~6).gSx44]SR%|.qyWuQT>$bNmW&;2_oLj!' );
define( 'LOGGED_IN_SALT',   'xG5h.Gl4S6`x:q}qT5u1>c}|M3$~J8 RTGR(_%f{]ytP6u9j7Bh@&mW`6vrc-r5^' );
define( 'NONCE_SALT',       'XuC0v#%i;p<u$Y|? H.S~V-HOI SnQ!n,Q;~[@=oo#GB0T:6:-L>ZwOo%0]Uf2u`' );

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
