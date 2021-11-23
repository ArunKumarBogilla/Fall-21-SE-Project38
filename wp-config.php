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
define( 'DB_NAME', 'ecom' );

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
define( 'AUTH_KEY',         'tM=hdAKtz$0%Te!]Ym?2%hQ,E3(%~(oH< }c=wj%[elEYr|LL8U9Urf#8RjDd2Hx' );
define( 'SECURE_AUTH_KEY',  'p]buPMQ^^ZUjS*y|B&6AjK6_op5!z1FD+f1Oz`f/<X/I,=/(6o(%lSV9Sj<NkPF!' );
define( 'LOGGED_IN_KEY',    '4iZ~*sSU*T#&auhr2Fh|)KH@e9[lDYxi#_&X5Y>YTC.Y6AZ26B2ysoa&[NI8ck4>' );
define( 'NONCE_KEY',        '4sjeA>{zN;SU#pB;jD*kjF>m7X]iHJP^zXcyfK]?YOaTD${6dTYrlsX5 =[$4)09' );
define( 'AUTH_SALT',        '8hYYI,JXj1+-.DnB[;Qa>{M^h6{N|]g_5u0A<<W|6|LGt{Odt.F@|*gtQ6^`}a=P' );
define( 'SECURE_AUTH_SALT', 'cK&`c4 _x&n8^!Wi<^hsA8cNQ&v6H [J:qe*7)jm@a1Vj^^llW`Svp)dZ=;[q;p?' );
define( 'LOGGED_IN_SALT',   'q9(WjXBBL(JLw%lV.L=)=l0gVm4G[]tG|G~(w*1BL(Kd8L}C_|$!JB:#Q1R6Sd7Z' );
define( 'NONCE_SALT',       'WRvjsC22xT@T)t,itg{QQf*{7;^1)tUXQ]p]KS-/Zd_ekIFAE0m9ApHIVWX=MJ$-' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ec_';

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
