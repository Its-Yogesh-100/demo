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
define( 'DB_NAME', 'skillupx' );

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
define( 'AUTH_KEY',         ']r-!0+*[}-%OZm@ZY)t1]pSw{wXZ?C+4-tnJxfBn6SSbh &?|@Y>b#e~$gv-4R*b' );
define( 'SECURE_AUTH_KEY',  '=1)Kht3Ux!(+heMCz|=%.s,bTg]8ex13q]KE8yJ<N#8JhL^cH+*%%qa1~&<^o[f2' );
define( 'LOGGED_IN_KEY',    '0UgL.od?XJkGQvg7TRLf/xKP_wTnstVzzJ(J_wAVmr!/,A*jU2AVhgkSOQ859t0v' );
define( 'NONCE_KEY',        'VX(6,7Y<h9zoYA1by3Jq/mZ.afS68r,W}sSfjj4e!Y}[^vqKJ!PvhDeL;{?^<Lu6' );
define( 'AUTH_SALT',        'c,.,RL ey> JYDK@!Rk)R0 XyD(=~+? OJhA6YzXsA2,j.@(@D.q+^Tv?ZumW,#Y' );
define( 'SECURE_AUTH_SALT', 'W4OIvU@k&[pgfS? fj4@-1Q[nkG-!cHV9G,OJ>l?Vno~[2$q#n_M|6K9n0O4%/z5' );
define( 'LOGGED_IN_SALT',   'yl}r~%*]0D_)?gigS#~,1miaCsG!w</Xy(o&5[m4}|stt=8^KM@X#Ow|YyRNK@hQ' );
define( 'NONCE_SALT',       '!?whlpga5.`ATif[28v&cXe?YAc_SU%{`-xOQ6/.}:%V.4^oLl$@[`7R(_XK);/!' );

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
