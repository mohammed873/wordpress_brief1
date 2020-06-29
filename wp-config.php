<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dublicate_website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'w3OAg;9a:5e(}qrN?zAUCK;SU|,ef;|Z]e+9LZq[)g,P@;|XDKI]O!0KsyZO| ,L' );
define( 'SECURE_AUTH_KEY',  'XBSRF(la@m<`W @uU$Qny+Pl1:foIj2knXAK/)-$d.R2?O9ZeIQ@|@pL<^;3kjgD' );
define( 'LOGGED_IN_KEY',    'LGtB67KR9k9!h*{E& 6jy$s0&5nqG*S&lc:Hv><m(l3&6L/MhRTv.RymS0dJ5Y:O' );
define( 'NONCE_KEY',        '@T)l3%!}WTtN|a^,_@JzPkjx+vu6?=Y^1O>kErmAYup*6``^Ft}g$][^YlRhG@GK' );
define( 'AUTH_SALT',        '1LcTP8%,o#L8crhILA$dug8}55L[Ouht#Bhe.~kfE8r6B9|)!Bz_7va|jCb,/:~{' );
define( 'SECURE_AUTH_SALT', 'lZFN$y#m}a_SQ7Xabn6QybX%%EijXh-s,Vdl^g{T=MUu`1`h`IsWX`?}E&z}f0zv' );
define( 'LOGGED_IN_SALT',   '!A42#+!ri<o*FrD|WGUvDN3>oI~4VseF`1c>@%sm/9m&(:Pt$Ov8s<J PCm6XyFH' );
define( 'NONCE_SALT',       'o[k9fk<17PeNs/q;+P%2@>!h:u`HZ{!r-aIk*|,ByT_`j!)*;G$r1fdgur{u+X4^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
