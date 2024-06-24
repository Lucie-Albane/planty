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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         '^7Q6]h[/)_RGL9:t1RjD-lWN wZncGRWD(AF}s-+`>uQhU9mfmsc!l]cb:v=:78r' );
define( 'SECURE_AUTH_KEY',  '9XiKmqvWy</!]1=%R<Of!e8oEje][m,w>6Z ]mb/v_*]MX9YpG)xFn.s%&IDmsUX' );
define( 'LOGGED_IN_KEY',    'i<@g2{]Gd%s#}bTr[GE*_rXX:#;U#97.G(^7=pEV|n|@4;qJdbG5@jR$:v?q=/tm' );
define( 'NONCE_KEY',        '6$QN(x|0GXLe,W4?`Ojgg)g-tqe;$}U>*MjOV:hG?TgO~(s.EXVDHdkiM>#?JeAd' );
define( 'AUTH_SALT',        'FrWdUz;cWn1hFVF?EkfK7;h0V34.KX`zl_wAD+P={RP<%1j85;9CTw^R92sn U#i' );
define( 'SECURE_AUTH_SALT', '|%!@PbS^E#{j|;4&& =q}T)9U`cSilVOo0RMD_FO974$O3dBI2+]W.kkO#q]w]8&' );
define( 'LOGGED_IN_SALT',   '&lF+y^uI-zA%ysTBiJF>5pHfz]Igi`n /1QiWQ1EIWYhlVda!i?$5y,/O;&FW55k' );
define( 'NONCE_SALT',       'xw+`$!BaxTFa;7OI0qM 6* H_A7Z-Ad]vCZSR}9X,HiL$7DiV >zt:D!UX`+5AK0' );

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
