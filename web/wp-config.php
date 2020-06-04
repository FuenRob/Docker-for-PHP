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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'serverdb' );

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
define( 'AUTH_KEY',         '89wTZHQ]fU=~U^/yP5|2S?pFC1zm3~76_s;SzMh*J]W9/b-^l>Vh{~ K.?o1zBo3' );
define( 'SECURE_AUTH_KEY',  '<p;!tIioi_u[/6GXQ[Jq;{M;2j>F>$aeIc8W8JivwEC 8Dz]b_kez*ovx([&~M4B' );
define( 'LOGGED_IN_KEY',    '[|`p{;j;U<K&Fa^7r[*fO|{yWy#afN(Mr65h6H=^tpEyB[/li fud7w-D#wqw0cb' );
define( 'NONCE_KEY',        '0$g<}X}ziIS`X[`%rk>@`R1h*=N7EXi?k!#5C>xSFTjCv&AF6&knxZ%d2z+w[V$3' );
define( 'AUTH_SALT',        'waM}UC_X^c}*:}Mg-!s)g1!w@|<lD |DCx6>p#iMxVa6xD/Ls-@N;{#QEqk(R)rr' );
define( 'SECURE_AUTH_SALT', 'GDJ [^f~*X1)7+w_nv6w-rhL!^)>[GYG$K4UCK_Kq;e$55!]Un=mCAvg1w.5xsy|' );
define( 'LOGGED_IN_SALT',   'ZIPM[6aZ!mc.]X),Yqpt;<q+w|o:kn>8rL}[ 6H0Rx#<BsGU5[i+Mh}Oq6`=&F;/' );
define( 'NONCE_SALT',       'ArMf_:b%80E(-5BHuYmO<j7VzMzba;Ei$,5kDG#cwO34s|Nr6|k}}3(/obO92s;@' );

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
