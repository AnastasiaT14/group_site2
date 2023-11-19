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

define('AUTH_KEY',         'enOaZKSZkL2eKuCXBOwII2hwJOf1Nula5FllmD+OBNbDcAPz9OpoNPstnLMyIM2edOjH7PB3h3Me1ALpJNB0Dw==');
define('SECURE_AUTH_KEY',  'qv24WGYnNfrHdYGNuzKgT9lmlNSn9GudlYwedAJ9OMy6f3rlrBq5ux+Y012boPglbxpCor9IYZKxtRHdA0ppSw==');
define('LOGGED_IN_KEY',    'tfeMpdFNUEN49BjOFFC3SJ7btqN93LAh+lTkhHR7ysrvNEXm3gJJX4f9wq6Kz8gmuQsVGN8VDG6d169cgavRUQ==');
define('NONCE_KEY',        'qQUhBd1/SrBIlmq3TzLEoVWdWF1x5YdA3C1fzoaugSiaMSYdgWM5NVT7gTJkaaEKfQHN76Rbj/VU/2+mko4OxQ==');
define('AUTH_SALT',        'ntiy61xj8ePG0FEYfnJZvOi90qF9Bh47u9pYCbhFHN6CLd/EVhOUaqX7nOHX+3AzWuqKbiGlnlIxnXB3tF0duQ==');
define('SECURE_AUTH_SALT', 'N/VvgcgsUeKfEen9/UUp7I2AxnehQzlQ4nD2VYzlBQlOhhnlbX43hOYG9XnL84fb0bVw0bZxm9LmdG/XJ7Lmgg==');
define('LOGGED_IN_SALT',   '+WMmbE4A91q3eC7eLt3PaLM+g8IdFwXe6iLcKn+kfmnMPrvCrGcWmmDI6pCSTBS/1o8m9lnI2nO6D4yy/7AVfQ==');
define('NONCE_SALT',       'g3miKlbBvn0tLmsU5bAJp1ErboCzhZJbcmB2vDHETKe4qY2XG/WDLYO0iVfTqdIJEUO6myKkeXTEtCj3yJe2Ww==');