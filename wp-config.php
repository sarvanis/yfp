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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'NFi;0]OmnA=jiO]pNfa_:E@p!p6rUU(,KcYLi7OYja;)lKgJf:r-@QaRa5u8H$$a' );
define( 'SECURE_AUTH_KEY',  'Jegu5Ht|=;`GOMa{i3N?Hckx!zp) oRGF*~#oF4<7vASM1ik3S$bW^3Vn}X^00<M' );
define( 'LOGGED_IN_KEY',    ',g862TGr+WDSRN,p=ZRKp5PCo]:}ll5I]{-LuEN#w/mHn4;J(11[&5v@;MM=g)/s' );
define( 'NONCE_KEY',        '_D1(<2:0Nm,:4y_[QQT4_:UV_Z5HE*3JFo^QqE?9H#3o$}.w~HmD^Zenp.`-osc(' );
define( 'AUTH_SALT',        'QEWPy@G|TvibX:rOQnYdy?3zWWh zc?4t!yVc2.@!s[iL8zd5QoTIcHG?xzqT4jT' );
define( 'SECURE_AUTH_SALT', 'm K|S R5%?q~E9<{7nn-%6t&B`gb}h^)9[yEYJ892@2i)hhUdoE+by+rhZS$Z.D4' );
define( 'LOGGED_IN_SALT',   'b4I@7AJ5S+>y}Q*Ax-3pJ%B3Ni!NH?N|VO$#JZn&&W^c>VlV^a}KQiw[&nIKc?1>' );
define( 'NONCE_SALT',       'S1J/2jnYj,[N= Mc*$2_mrEb[#pZ8tZSRT3P2r4A>ln;Nw9r%/j q`V+raW`$0xO' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_plants';

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
	define( 'UPLOADS', 'wp-content/uploads' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
define('FS_METHOD', 'direct');
