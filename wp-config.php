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
define( 'DB_HOST', '127.0.0.1' );/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'scKyv@I.v}Y)|-V1-46-MfekpS|r-DX~/8 oHP+W@*}}&aCMf~._pI&$<{$%U0eu');
define('SECURE_AUTH_KEY',  'jL=-W*?#(5#|<Od8zjge<Sqdg} @1^{|W+HOZTa& !ObQ6lAYNN!2_!+w2)Z{o</');
define('LOGGED_IN_KEY',    '.veW2H0k(}oR?Dbz..^Xf-w_`{?UAeW@Y@ObAHgSS-4J>P8P*[Q08sAb+%:_|UwK');
define('NONCE_KEY',        'vM:@|E>?)ix97*PtZC]&c-J|XkNt8#d{9H|Zw|{z9)_N &KlFY43coAd+!1:2K6-');
define('AUTH_SALT',        '|0JsM2qB]f}4}L+;ibsQ@2%5z;i2S/ [F=KmlRMW|Q84_,Gb;bAU+evcV<(E$otN');
define('SECURE_AUTH_SALT', 'z3kaP9`+JmWa;3>u<#N]>R7]9v~-|KpCiR}m&|,*cNMmI1:{#r(LB@qa$5<2{oUJ');
define('LOGGED_IN_SALT',   'KR:!b1t<@j`~$WI+mi/QqnW LE(i+q.62|w0&`pp7nc:B1!|1o$Pe& $V7g}IeJM');
define('NONCE_SALT',       'AyKyh`T_HJ+UZ8!=6v++T_sP@AV+SjUcZ+2BPkNBZIoryjxfR71{]J5~FO,@X&z+');

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
