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
define( 'DB_NAME', 'softgetix_blog_2k23' );

/** Database username */
define( 'DB_USER', 'softgetix-blog-user-2k23' );

/** Database password */
define( 'DB_PASSWORD', '0)5,.MixDIvI' );

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
define( 'AUTH_KEY',         'S~EGL)2LE.oY@Mk^z#2c)2/m`IH-vswNw-$Xurm:!VzL/G3pSgw;@&=Zb_+o_EeU' );
define( 'SECURE_AUTH_KEY',  '-%`Lp}s%.6^eI0I6Q5qJm@Kv!Z4b/&t?KO%{w8&Kp<3R41`pq[1Q,xU[{qBv?AJ(' );
define( 'LOGGED_IN_KEY',    '7pt(I@C*a:Cm1E&<DM9I^1OO1-oUn65qjGY2Pg/(:c3T0dXHTC=@Smp]Gud6[d5Y' );
define( 'NONCE_KEY',        '~1UXU`gv{5NX06<+@P1c9]=LttToj;ac4:cIyV?`@G:+,M$ 9rvW0WnmGuzO703Q' );
define( 'AUTH_SALT',        '-EqTZ`DAb+k9&2=Gzo[a,5he&h`& Wa6$W~Jj[P*8rvJ&odXae+ll!+!_=FEfa@z' );
define( 'SECURE_AUTH_SALT', 'Zg?z[B0-F,j_0F#_T#n=8RiwepSv!V|MVG/R&Rz2Y!)^g345OnSsi!5~!Cuhpc|h' );
define( 'LOGGED_IN_SALT',   'I0%,Dr3%;Pr?tW6p`6fnuCMF&9hFKUE[oyxC}^swsMN8*X0:V(FQ+2U^P#f0K *2' );
define( 'NONCE_SALT',       'TahfI9c+xo_`;^(d>z#fleir<[?HF2Q440Yv;::5c~g/PB>.=aTZ 2Y=KeAx!+]X' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bsoft_';

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
define( 'WP_MEMORY_LIMIT', '256M' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
