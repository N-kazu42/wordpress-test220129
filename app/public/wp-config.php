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
define('AUTH_KEY',         'wsEQQMGSSddzgAPulXZpoy9vHPNH2mDyf5OoUSFpmejeDN/sIAHp4t6s5+elxH0eSHtfa3m+F6qn9K1RB2G/jA==');
define('SECURE_AUTH_KEY',  'qiyxfotMkbADWHFS5clUZjNchTbu+Zco6p4yPmZq0/0zDPYMcHaMUgLMBpb2MhBiIkfdDK1MLulVCpK0XyQtaw==');
define('LOGGED_IN_KEY',    '6yhByE8s5dEu+/gRf+G/6jpUV+9+/OF3J71IgqpU2PLGmAh0qeTPheMAKJYuZBTuerQ7F2Q/y9sG6lWSc4ea8Q==');
define('NONCE_KEY',        'yHqyJK4vyBxGtcvgMBWcgNI6cH1Rmq8xGjUH1KOdyMsBEBiv5l4jXPZPcghv/Cd+yd+1wUhfiPQAFxPKlvZZAg==');
define('AUTH_SALT',        '3/6R8+OhIwDPISbtLOGbT3G8bQsIQlG7olr9WZWVDwoLmknfTlCWpYeZFySpWB5IjE7fgokjoJ79p7yU1rPhzA==');
define('SECURE_AUTH_SALT', 'EzYhUmv5yXcej+M79Njb/pyFBRVYVD3iIVL6h20yBiah68iHWXzLo2LFFz22JTR8rFZgymK2u/75D43cF2LXyw==');
define('LOGGED_IN_SALT',   'ENYs50nO/iPo/i5TZlczsq5amDOQ2zasie1fviZYHtLoa6h2gkwnBnZ0C8+4lmF1KTVpW6iYCXfYcr32bGNw5A==');
define('NONCE_SALT',       'zSCrS5Jt5XsQO3ofDpHJ5G6YF7mGAeyQqr4EbuLD7Ofn/4+olZCOUtQTCbYWfrpVGkCpozfs22BwLYi8Dc/kAw==');

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
