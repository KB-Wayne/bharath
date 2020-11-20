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
define( 'DB_NAME', 'bharathdb' );

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
define( 'AUTH_KEY',         'D M@HMFj7`JTb(bvb*RpBl@{!}7)5Fq<}4bn@hH[R3b=5Y,If1~cIDDJ)EWhB|`J' );
define( 'SECURE_AUTH_KEY',  '_5wq;Z/qSEn6Dz<b`3b>&]Ahl0W3X<%1z`]k]RkH!Yif1:@=+SF ]>)X]agf6N7c' );
define( 'LOGGED_IN_KEY',    'WZ_EB=+zYi (Eq.CzPv{vbf7XUUM8;clMZFA]^7gR&OdmdB<e_oM8$Bp$g>*eOL ' );
define( 'NONCE_KEY',        'H?+#LuNV0a0_)XOzj?TnhR&U=D$:m266xeLE{=,c$`<wJo2Q$r][PPO+Q28qdSGN' );
define( 'AUTH_SALT',        'pqq|,7vUA_C&Lb{~]QB;{V(rV]jI3*46lO!UNm!~y{kM;{v%p?T2P_uy9kYan.Rl' );
define( 'SECURE_AUTH_SALT', 'pdplkRJ?@}5n:6w,n^JZ{&?8X-m~|CkM?ju7v%is0ZriGh./kb-i7i4g$s|S3Gi0' );
define( 'LOGGED_IN_SALT',   'yIg51sK(4UOjDC>VlSvs5rN<4FwM8e5*2]vv:hSKY?h{~8^+GAZdX-Q!8o#+W@jO' );
define( 'NONCE_SALT',       'XLX,v=`nkIjr|maIm~3W:f)[fl.1aHkUiAK/%~M1)1Q);02KVqY~8Pf<EA]x9@@M' );

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
