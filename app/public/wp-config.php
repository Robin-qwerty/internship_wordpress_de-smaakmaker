<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'PG$dRg+@I8R& u3[2]eb6wG,+^`LQQbxVHqty0%qiviGX6s{a[ iFC#:p</vN:Fc' );
define( 'SECURE_AUTH_KEY',   'FT!x!F^8?s0aj#H)Z?g7::xQ;F_9P(AtrB4j35exsmO9b J*4JlV%QgTT00LCnc9' );
define( 'LOGGED_IN_KEY',     '#dhuW<Uzjp]o$Twe&KYe<_{u~VjWlDP#>OG$:l+_w{*NP,Am5TTh?qD9z%tM!eN7' );
define( 'NONCE_KEY',         'b$8bn?R6)]639hP!d3sayMHJ(uG&u8|xC m:Wrc+?:aF<K8s:p<@O_rTxT~B:(N]' );
define( 'AUTH_SALT',         'Er0:Wg^>}IAi7e/Xy;~/tS@]d:p%b%cdpFM@ #)#$bwO tb-xs![ZsGCgJ2>^fVL' );
define( 'SECURE_AUTH_SALT',  'BY@Gm 2@ow^A|Wq>K7`{?*iWB8:~Z>1Zyop?o^oKmbIg9:s}`Vm5q2!#&x:}by=9' );
define( 'LOGGED_IN_SALT',    '5 1+FIDy )jWK1M:D1C_|.Bl7M)Kqy./)*^A1V;^N#]m_vrrwB8U}DDjDLZjhw5R' );
define( 'NONCE_SALT',        'J-(C-&VrO`<w2A](9aBao<lGhBcQ:1B.J%1}S53Gee5IE*<X1vx&suM}Zc/DV3al' );
define( 'WP_CACHE_KEY_SALT', 'NIvVm0^%VdarAtJ0sgmv^69|x:,|/3d`v-mr=4My{z0.*Gkc<s^:7F2H_9`$WmP)' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
