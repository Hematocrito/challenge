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
define('AUTH_KEY',         'o3feq74B5lXSMhrIak8wcNjC38k3Xbt+GqXNZB/4/IUfEZhBoz0WIn6UZQjOwPHQV1eJmIVTi4/ywygADRnsQw==');
define('SECURE_AUTH_KEY',  'oM2fE7hKXCQTmxwCZjY4G+9GsG2oosUgnCCAC/1nEIqteqVWsAtSzw9jVvIqxlwRCz1p11gN3mPxfmSi4q97tA==');
define('LOGGED_IN_KEY',    '1TgK058xBBNwifQW47qiXF+KMKD2DwvjV4Qs1HkkBJTY+zg2jXplaF2XAq8pDnEusmLugCj3m3iK2NgSZvyM5Q==');
define('NONCE_KEY',        'qBdQftppiRVQKM35iKqQFiAyn+rzMKFlasPgNeDP29oHQbETomUgsgZPRG10QxLSRZwUX711wFziYo3ehBn+iw==');
define('AUTH_SALT',        'zQP+dJhHM8V58+U1tiRSdUwP1F4WAdzvcmHAkt5ZTCLLE9M0ye9Dk3X1VOatH61iTBR999PvDLP01qVikJLaNw==');
define('SECURE_AUTH_SALT', 'YT+ok26uyoLv8OgH96L67TWU++GrXrgp3I1/CWU3FbUVSnA8KYdUnTmJ/p2ybMtAlIvHmYGkEYVuUcMcynNZcQ==');
define('LOGGED_IN_SALT',   'Y21GF1jBrpwbjrkqjNygtIvBwbEbSZg3pjygbE20C5LzqOyHl/gGwfIlUFqJV71ewrmwcYtPIXbz9/Kys3vbUg==');
define('NONCE_SALT',       'R7Ip77Mfj5fd6v+IT0hq29xZAgoE1O0r/4M14xwlU+Y1mrsVcMG2xDpVX0nnzngtsZZ69FyrqFh5Q+IA+S0k4w==');

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
