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
define( 'DB_NAME', 'jarifwp' );

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
define( 'AUTH_KEY',         'ak,5lG/3RSdr$aS^Kjk4X&K>s&muGA(&= UL&O)m-qI(tl%^TM]SyhfB1A5`eIvl' );
define( 'SECURE_AUTH_KEY',  '*s%ySI;i$ru&g=L-;(QLw),G*_+($}E*@yC#,lW[Oj.*!f/2C[%CUIi@DV,e;OoH' );
define( 'LOGGED_IN_KEY',    'Gy/qx+vACHw9rX].d$9(tmB+6F@V!Gy$EoKp%c/[a6&K9a^Elk.IvT$9 )d_$EQk' );
define( 'NONCE_KEY',        '%NXDZOl0[Y`cFs*xJ@a7wR|+l]8V9]0ko03$R3AA2ZbkL=t}zIkW`@fu~TaSg#S:' );
define( 'AUTH_SALT',        'U8uwP_h&r;*a2s6_:_T<:tcf{g;L^u2EQ@}/sBP4|GTdB~,WLj*G*>`zK>_~d3E:' );
define( 'SECURE_AUTH_SALT', '$P^|-nLZQQh$sr*)rXpo;DPl.K KlX(xiF>IYy}]Rw).VFVPD6nz8K/T`eG}Ah&S' );
define( 'LOGGED_IN_SALT',   ')1*r%b XI5S+t#0FY@` il20Dm#]#^$98L^e.DsEwOa|&4+$Vj16PQ,:.n_eFPnO' );
define( 'NONCE_SALT',       ']K~P6(]bXiYY>_C.n<CSwvEJ6Y,TY?SkW!%iTXs&DF=+f(=kAfo_V@E-5&,,FPex' );

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
