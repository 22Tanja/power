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
define( 'DB_NAME', 'power' );

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
define( 'AUTH_KEY',         'kb6fiT+:W~)D;PeD)2Ilywa>;{>+}=Zf/rZ]eHD=h|J kGjg;pFUiAMh`YSKNPoW' );
define( 'SECURE_AUTH_KEY',  'M7ur/:GkSzWkXL[SPr- ~@/{Y$1jo=M2+yfUi}[=+$0o+<xp)|&CV)}O>U^_t] M' );
define( 'LOGGED_IN_KEY',    'C/yE^C/e 1Aa->F45z,qzANI0O)qOLn]DqiM |X)wZ s1$/cig: 4CCLZ+dM`]uM' );
define( 'NONCE_KEY',        'Cf#6II$E#nN;>t.tbf$YhaN}vN9U1/PvzyI3A*v*aS?r[53[c-Vi)(TY`gK%pFp8' );
define( 'AUTH_SALT',        'uLCMcN^j^(UJ0N|OhX|dS+5(N]V9>]s*o6=Uh#mCmTj~+@moxNMauN8!)<eV7M./' );
define( 'SECURE_AUTH_SALT', 'B5^N#Ja)9Zfc-lf6}j28/e[<g7nLG0?Y=S^0QfI}4XHf_ec&P*VQE@?2M:Tk{ZfF' );
define( 'LOGGED_IN_SALT',   'W:aC;!lz-.]4CQ% 4]yY-[-`8`i(OrDxo7#{&x856NqN6u{ZHn@m:!:-{5jj|1O9' );
define( 'NONCE_SALT',       '^>D{>}.%*}U8DzB;C92w8M&WaTNSO7.$W8-wpQl~N3j#C?-d}BvpdVF+N/J,{aE>' );

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
