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
define( 'DB_NAME', 'CMS2022' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'lMl`CK?E&}]WMM_Q=CpdYSs3z5@{M]Qz5Zy0p!N4TkzZ>ewRHa5e&*qF|l!domC}' );
define( 'SECURE_AUTH_KEY',  'caM%*vn^CD$AQ%y]QBPhnd8Cw=rSi(j(iZ3_d:FiSYPqGujg$yMHXL]}l9`1)2/B' );
define( 'LOGGED_IN_KEY',    'a4@FV 5G> I2NS#;}(co]-B<4FZa`k=O&m!*,Wc4yfhjkV-xk.,d&?vl!yUQ6L~2' );
define( 'NONCE_KEY',        'rx.f5,3MT}(dNkaOo?bs2aUhb017 S=nx|xj[_UOrw5Af2goCAMudxWa,(inrzEu' );
define( 'AUTH_SALT',        'uw2beCcGklXodB9>mNk[VZH9|lj# y*B_.]fQQ736.6u|_O]vCN+oWkIx!)#YXO#' );
define( 'SECURE_AUTH_SALT', 'mRRpJ^`TcrDET}X {(aorRW,{J%Uf]ujwsQe^#x;rbHl&,.#R}.xj $2.wD2@umb' );
define( 'LOGGED_IN_SALT',   '`z6;J56JaYp.40%>K*:2>,+fdthgvUoM$eLe|QooulB8t>PJ:qki<,il5:vsH#v}' );
define( 'NONCE_SALT',       'E4t8Qitl=tCUNT><OyPHap}L59fFkroEQi{pAe:/SIKltk<!mb{^5g;/=/Z@cG+)' );

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
