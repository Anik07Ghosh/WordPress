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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'landing_page' );

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
define( 'AUTH_KEY',         'ecd7N1kzLv-~&`<lGeTR<euw6khm,1XCOAl;}h&&})2sde{Bpu:2CMpX5yS|#&.+' );
define( 'SECURE_AUTH_KEY',  '@~is4axxMLU_q=`+j%pcCL@+sI_>OM[s^B;m0%+R;%6sNT7PP*FEY&1<z1y!9/K5' );
define( 'LOGGED_IN_KEY',    'DNq:*TB3Ua/1wtvI8*wc2#bf6Pr02WBwnI0dm =`QQ&kHp=)}1LXn |8kAsCd8 f' );
define( 'NONCE_KEY',        'M=]<~W}]u|z>#57h%?,b9S}r+N1xoDZ,` {fVldB)Y*CAA!s!u=SBJeRUSaI]~Hb' );
define( 'AUTH_SALT',        '+d=G9^bqy@&[m:;nb~DWMZzy(~soTiO.b&FH197y3H.LVtn0.x>nH>|>+]3t7I;R' );
define( 'SECURE_AUTH_SALT', '+:)FzvH6*-;zvf_:,52D-/DI6->S>D8A]5-k49CzmIS~CM7M%wR-7 ^X6 M}%rBL' );
define( 'LOGGED_IN_SALT',   'Jw6O4>=M];rPsk(u]02CMhFc/`Tx}I]/(LPf:u|>YB9t j^qY6jB&jY+PRaDU0K/' );
define( 'NONCE_SALT',       '#};$-pb<N7|De|iFF&C1!q@MhkqCz|CxzF(c)a5L4Tc[7@]<3O,4Hu:WgsqDONxb' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
