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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'LGAwwCNN2NwTZNMdOxyLuOXQygxvM4B+Hr1h+NYI328fRhTJ1aUjpuWTrxuFS3vEfYHzhJZ5zh0DMLMWGFBqjA==');
define('SECURE_AUTH_KEY',  'ghxK5cmkXdAWQgY1FlS6YK3RUg5yITTm/2FC/S0PpkbSkZWgVD6xqnSDTrCeawltUt67hFGlGT5UFUlo17Op4g==');
define('LOGGED_IN_KEY',    'fj3CREsC6TP3LIINWyb0lJIsZLArBlcKSU7uDajITO7KDAJ8djSfSUOxM01I2inVktVxTEtKnq7BeZYaSZTX9w==');
define('NONCE_KEY',        'mnfO8sgJbYD2AfP9g6MLAaQgH/V8fj8KHdr4AcT0Q+e5s81+8NqmTUmiwIqeqt8QMoJtOoX3wroOoqAsL4XMTw==');
define('AUTH_SALT',        'NGTus6ztTEBK++JL4xdXxjI2G0DlbfKSZ13Zze1cA/m4YNtorJLReHtEJYhRFq+kMxu//fJe8EfHhvAbNYJ5xg==');
define('SECURE_AUTH_SALT', 'h4KWEtseYT+Fv1NVLH05YZC1AKOZIWchOKpn+3WdZjbNr21HZiCKIsCY6/ahKhWS0CGB4kKV81QYmyHwPbWHHA==');
define('LOGGED_IN_SALT',   'tGnsObup4I/v7w3Kvr8voRc5sFQj9nr+zk1Xhb0mDRkp0cG7aZo1bnhNHSH7eIvZ7O7TGjTK/DoNa01H6shyiQ==');
define('NONCE_SALT',       'gwtJ8NV/CxStpK3k4/8M7dToXBJTosS+NT+XWO0jHzHOWxx2g9gU7itRZVHpZ5mOTxFoAdpNtwWdWqG7wjbg1Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
