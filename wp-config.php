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
define( 'DB_NAME', 'devopstest1' );

/** MySQL database username */
define( 'DB_USER', 'devopstest1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'yaUkWXC51k7dsdU' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

define('AUTH_KEY',         'K~w107ai+EFl/[u^aaT;+e}Y8X_+ogIt@Bz?O7fpK9e|b(bXjT7V*IB^s{&4|S}|');
define('SECURE_AUTH_KEY',  '=qs@T<.?.x(LB!:!8besCLnl3/kd]guVT<a8vd{>9km4Kc^JREb 8%ST8@P)*cSC');
define('LOGGED_IN_KEY',    '^&j?Su5l=bDHH{w{&G?8_p*?YByP6&D$z3-sx<?~M)CL}j#6VLuzuplrVJ/N(]0|');
define('NONCE_KEY',        'A3Hy7]8|Ogi2^LF>%lW?{AZm;+c%%/a|>Ra%=3yh_{/l+dQQJedlKd:y!>85o:[|');
define('AUTH_SALT',        '/Y+H.~X<2?j|2/*)|p+|+@8Gs)*=OPat#{R5H3vD|q.;Baca.t(#d5#ugKE-mKM4');
define('SECURE_AUTH_SALT', 'Q+[*d:8p.p-AM[,(4%V|E 5HskAz}/9PsHgynTbng$|9G%,NdpD+*)i>cAAez6</');
define('LOGGED_IN_SALT',   '5]2x$c*6k*x/%`]+?C .RkNG1#}YSi<`pDy hAg|(2IOuD`gs$d{B*~y +4n=tD>');
define('NONCE_SALT',       '}^/(l{X5pXhJ;kDvC{K+BC*|`>MH+x5[+LaO8Qk-vRCZP>Lv0`@HOBW6e/+R*tT(');

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
