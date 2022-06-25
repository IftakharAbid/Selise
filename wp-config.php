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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Boibitan' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '3bQKUOTnpQ5Ar2TlUBqOpUeus5UahdWTRF0zYF2OWzrmGKPaizNI57qtIDbpfPZY' );
define( 'SECURE_AUTH_KEY',  'OoCW3z1PWCUgOil9esVG4Eonvywec17w5w03nzITtKWKGX64P3Sk2qa1I217wZrG' );
define( 'LOGGED_IN_KEY',    '6kV2MYCVDTsqS54VmOzDmp8zSRE3SyAyECTfsrj3Xd812Vk1lVAknXSROvU9NAJl' );
define( 'NONCE_KEY',        'QHm9v6Ta81Uwu8h6fgw9QhGCLduwl96srZHctoO1u37PCmHMWx1toUV3zt72o2Oq' );
define( 'AUTH_SALT',        'bQhBOuapDAPVJlV7GrZE9LqUOaa2qzg05AmX1cZg4DZu9kJOliLDKL5XZE5V1bdr' );
define( 'SECURE_AUTH_SALT', 'Rz2AJjKe1ouPOXG1F6QpkSOflerlZLqB3ZKTeh7ZzKVaTfml4dTPXZJqgK3fdbwg' );
define( 'LOGGED_IN_SALT',   'qvkxPfWXTz0prIYog8awDtGxz9zTfCgmyZQgwEC6aRsQkzvd2VcjHnGOpWlGEpEG' );
define( 'NONCE_SALT',       'AGczKMaW5dHf5BeE1RjO3HTHCgyUCQrHIFhVFPCCJkd7kWhxNA4Cz4GBmxAQ0fKV' );

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
