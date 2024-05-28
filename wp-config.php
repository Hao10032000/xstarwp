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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xstarwp' );

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
define( 'AUTH_KEY',         'f}VLV`!{ob,(aJ%lK$b!8:b~g.X+a<U,aXawJldVdd:]=CEh+SPrZ_)z iF&;m%K' );
define( 'SECURE_AUTH_KEY',  '7jSq*83n <Yvq]wNDaKiRbS@-:PZ/9L:dTgyKN>&R,`K;n(B&PCH1;$t1;X:(Jsh' );
define( 'LOGGED_IN_KEY',    '][O|7wG7Q6AXdqr8Ux5uHx Bh%3d@_gtL[D9?r3t4*v4{%^?|Qx0(gYG.* 4dW}Z' );
define( 'NONCE_KEY',        '1*iyEAWSXdh||bJqf-Cm6W=LkCdVj2lMoUmT9Uq^f,AT07,~HEKzi6>Rj[pa{o3a' );
define( 'AUTH_SALT',        'aJL%g,$Z}nxsPF<.P5z5CWbRF`<OCuA}eD)}H9ZK2:vOVVc&- IoRJvB5mtgqp6M' );
define( 'SECURE_AUTH_SALT', '@ET(S^)u92o/B#I4]_WmS8Nf)3*;YY]R1ZCo2eK]7r#*{V4?UCIlA+>U]7,CP^1)' );
define( 'LOGGED_IN_SALT',   '~i4H<V`QuZMHLZxpeL{vKIE,#xg%8hy>Ci.xEA+7n$]oR0WviXS-,ky}6j1s:Cb{' );
define( 'NONCE_SALT',       '[r?]jU5w`a[PLm)EI+=dAXoTM?qqa0uWuKy$L!2K~T{x@KyW2hX,=OA,h a8gZEs' );

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
