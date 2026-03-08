<?php
/*0af04*/



/*0af04*/
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'TS1G89NOD6H' );

/** MySQL database username */
define( 'DB_USER', 'abc' );

/** MySQL database password */
define( 'DB_PASSWORD', 'asfcvdiHIs8w9821####' );

/** MySQL hostname */
define( 'DB_HOST', '159.203.81.46:80' );

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
define( 'AUTH_KEY',         'd@s[w5o8]O9&0n[?-Nhxfd(o}nx}_zp>69t-RTI:i&/vy}RRSL&[r$Rb$s3{NxyE' );
define( 'SECURE_AUTH_KEY',  '=2s@yB;G9/aIUUgX,|n;{Zn}QZlSP{ $2zhQRZ^;G5;-A(J&o)V~fE[!aYTkp$QV' );
define( 'LOGGED_IN_KEY',    'Wwo=4IhBkjY@[Lp0jPjOMy*xMKO$y@IZP2@[+k+1s$[uLW1OR7 P5LyZ.qtfj9_z' );
define( 'NONCE_KEY',        'l>3;^?V{ZZtR51g3h|= :&; ZbpaZ&;^$Pr#G,D7$8wI~_Z^qVxJWc2``B%Re6[ ' );
define( 'AUTH_SALT',        'cNfk,@%ah9K<vXQ.,dG~xyO`I4sqk).59Vd*IY~P-Q!J|~}J^cX##boIYLS^bib5' );
define( 'SECURE_AUTH_SALT', 'h[k99B`5)%wcLFL8]](@WvId.KFX!e xhsJiTeapR:wI|!2ZZqK,%yh$2Z#P&ZEn' );
define( 'LOGGED_IN_SALT',   'J)F8^NrfXkP)&l;?gZG=xFkxy<j%U>Y>AwaIC!ob=1(g3:4 R+(8K;7WvBsMqM&^' );
define( 'NONCE_SALT',       'EL5Pp{lkI(gqTEjc4BGEGFjgL1kFjAGA:2-dsHl*Yp)GRtD?*kgVFwqj^U^?P/En' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
