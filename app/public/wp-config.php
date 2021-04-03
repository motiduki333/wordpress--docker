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
define('AUTH_KEY',         'O1nhFMo25j1p7SWlv0+6LsP/3ty7Y9IndBFrGjrUnjzs7RfjFC2Szg+GSu4v+YtBKYyIXZcTnk2KJkreLfCUjQ==');
define('SECURE_AUTH_KEY',  'cLrD0Ku9HiOj6Qr2urwcAiqUE595BhQ8tzxb+JZsL46X/XF1my2fLPvE1OPIUoZdD19idfI0/ChpKv/IelcQ2A==');
define('LOGGED_IN_KEY',    'v0sozPRB6LLHR5U4t2pG8WbljEP7nAd1RhUgqjexXauZzjjj89310yuLoQL0lX7qY48thtPw1wr1aC2BNracqA==');
define('NONCE_KEY',        'gcRo7HNIV/NLVuy6Ey442BHlu7MWWqWZSND+6itzWXVH9aQnEhZQaESw7kxvBJZEmzDmLKCpasbvxJ/4q/8LiQ==');
define('AUTH_SALT',        'cRfem85MaihZSmvyPPGq1cR4JkoIuWCCa39TDEwC0UyqWBcJ/Zvgny8YyXQldkkrGwJpMyMjN1evVgt100jUHg==');
define('SECURE_AUTH_SALT', '+TDiy2VguICqhGUrLwyw36sz3h1YTS7Lu0OO5U+RnHVwCauw3QaIqx+MhVyOBz4sS9wdiHpO1NOZhrPmm0Sq6A==');
define('LOGGED_IN_SALT',   '8NqoI8ATWCeNKnQWHxIufWKhp5/6vUrm08XDAmOFVEoi9pQaMdr3W/2qL8vDhqRJlGiihBz746bb78iBk6uLMA==');
define('NONCE_SALT',       'Wh2MV71MB9Lnfbjbs67z46LJDwZZhbLHAHmtukqTqSUGWX6ImsLhOrGWl/91cMlFbgxfRe5p+Sr1DkzPs8wu+g==');

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
