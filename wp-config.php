<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ayah' );

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
define( 'AUTH_KEY',         'h}U&g^$cX{kPj0hH=`^f&{T{)m:_tMB!L,E//AGIKf_W2 -_LBYQ>Y+ZYi4Wj,nH' );
define( 'SECURE_AUTH_KEY',  'SjCb}f+S{~We?(}F&Le`X0K&L1[VvhX TQ}K+-nvD}haZTxx}N`Pa,1JbdB{Da4U' );
define( 'LOGGED_IN_KEY',    'O@rD}/$)v3<`h:3#KrhYWY0*gLF-|nI*_X.%?Oqg8<p)rcUm+zyT*f>b/UgjtDi3' );
define( 'NONCE_KEY',        'c;ZFDrq:}-{!zduAq{SJmavkK^y4t3k,X@yzg;&}/=Wx~kdStwjs)eld]>eWKZ7g' );
define( 'AUTH_SALT',        '*MuC$!OjQ4j2!A!&@@0b0*t;c_KrTB#Y{VZtHYCCAgxQTQ!$X|C>%~t*!cUWb-Eu' );
define( 'SECURE_AUTH_SALT', 'SVYJ ZfQs&aZ[[&(Nag~MY7o2a[ag%iYt7Codog^JmCYc_<c6Q+Mc)1@KfQ<,cr.' );
define( 'LOGGED_IN_SALT',   'YMydSD93@V3G?D>$NLr=bZ{B&^tq>g}D}BA:k.,~zqwfX@vf$o]6xx:Q8A~+d=~&' );
define( 'NONCE_SALT',       'zaA?:(o/K_#ZO(8E B*#tr>ymgxSv#>T&J]cZ9~>(jL{}4+@LxJ.S^&T`ygK$V:L' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
