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
define( 'DB_NAME', 'giangiao' );

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
define( 'AUTH_KEY',         'EHH4IuG|1Y%@2G*#pzC5?*P:T~[D^ `;:sdoErudNWt.Zdr-+nBBh*zb BKd+1fs' );
define( 'SECURE_AUTH_KEY',  'JkcVuFL^=~<ed/8zxntbj>+1X[t)P7~HtS+ZjI/>d}}fWbG3Jk-6Lb9kby~qi~.g' );
define( 'LOGGED_IN_KEY',    'Z 4?TRd9/kaEyswd?uhy.sOeLAv]R1#30Ct6mIRa6sFy%n~{WlSR?&5eb%#@!F._' );
define( 'NONCE_KEY',        '+g_*CTFgP_4,A?*o=SJ@~-Q&?Y#`dsLS,Fi]cvPcydk.UE*jB:zq!`}jSziu +7i' );
define( 'AUTH_SALT',        'tSSuxQ>cM>6#oW|R5fHjJ#5Tp^hIjB!6OG0/aqKS*FWO{g#oJaU/EdjmSGS|8+H ' );
define( 'SECURE_AUTH_SALT', 'OqqjO9QAAaW;9+=d,t8Rj<^+GI?bH$c?vRp/Nf{TY].>$0e}qnZaHSoLyT-I+a!K' );
define( 'LOGGED_IN_SALT',   '<`I}ppOx}=7*xh]0,iLuv-k^J/6u$qxJD1DuugD1H7MLI)b`m;:fmt5yUgiGA3h_' );
define( 'NONCE_SALT',       'rP^ZwUmrB[Yf>>6mzUrMY`($7u6}{T;KPdD<I^N%7B&[=j{,[<kcV&=?8+)yd-.;' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
