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
define( 'DB_NAME', 'jarif' );

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
define( 'AUTH_KEY',         '`I*[u|#G@=6sku=J|<Q#E(3A !x`MLr!^E$cs6^8s6_DdaF-. b;Z&n$);`?9^P4' );
define( 'SECURE_AUTH_KEY',  ':k5p}-t<5eGs2yi=EuuAe)31N.;<xkT&iQR?H(=<?qrY&33BMO@2Z O0]$CR#+4]' );
define( 'LOGGED_IN_KEY',    '2;iBlK:59>:QJy*fOwgL|<5]|mwGkh/]Iy><80:/p9]M@,+-5c+jm+J$C}6*Jz9$' );
define( 'NONCE_KEY',        'f%eY+!S)_R(s!jdj[ka]qY+,wj=~c>~}}g:(RV$Fm=croF?G+KhSn!eB#}4m;v.#' );
define( 'AUTH_SALT',        'Eb7EBFc@n&G3y@b]}(KIZ3rWdg[-Z$ruXjl37CGos^neQP%hx$[1LCdSaytTt5R|' );
define( 'SECURE_AUTH_SALT', 'MX|Wbl}YU~?N/gT]dVFho3?0lKo?*-YqBmN75x.|kxl08=T&W QW&V<u`4jOOI8!' );
define( 'LOGGED_IN_SALT',   ' UrpzhWVa>(1j6}DsNf%3;?mVl|:(j1Se4Fn^c3,R-cfAGgj7c;Rs&&I_c:n?!Zl' );
define( 'NONCE_SALT',       '9I8G(#E9G}9O~RnXK,U:UwidQfW<7:Q15Z:<g93!~/TS2/xtC@d5[gQ_&$:*|BPM' );

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
