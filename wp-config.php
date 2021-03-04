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
define( 'DB_NAME', 'rocketdesign' );

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
define( 'AUTH_KEY',         'BC.E@U>o$gm%(es;RUA%~>$s:%WHQ;K/u7*r--`F!w>71vbcT n6<}: 46MJJ<(t' );
define( 'SECURE_AUTH_KEY',  ']MR rJGIcPA4](:K3_-k0zHa2Qxjz@n{VI>z p&xf9R!-}2O?AGops!f~/X4@V[f' );
define( 'LOGGED_IN_KEY',    '8oB>b`X,8OTT88}>S6`|:|L0mgf?DN,D7juM.02^ZU(+I9%:+|v|z)m9453CW.[v' );
define( 'NONCE_KEY',        ' Kx#|_+1~4X2pgZQ7qws7DO=IZkZ?MI8r]NT+N4L}}Lp0kekexNsSY?SgQ!;&dZj' );
define( 'AUTH_SALT',        ',8cMu4{I?Gu>>;/>mlZU2(iz_o#;_IO*2Lje~W)8zAX`k^Nru<<hHbfP>|}l-~l~' );
define( 'SECURE_AUTH_SALT', '{ilddR#w=xB$PYdKFl%qO=Z^<{<bhi3Vc_PYsp-hy1BR|3xC]kk|,j8_D24CJIr7' );
define( 'LOGGED_IN_SALT',   'muYn=;[<^]P|nLz}*J *344CHTDV8[+%8jyP3x{&7rZD>*x/c5rQXFj,7Uo~[<.+' );
define( 'NONCE_SALT',       'p>vxT#2#S 1q)IJ%{n4wpGnNvLPm!8*:L7;<lXe?F.r[J(escR <kQ`MlK()1c$H' );

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
