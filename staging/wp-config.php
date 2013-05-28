<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'engconf_wp1');

/** MySQL database username */
define('DB_USER', 'engconf_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'Iak92*J5Rfe@0');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'qkSPeMQGI8tP9rwQrIqw7RZOMvbWyXwsWjZl9bYCa1XIULcbPGuqbKEBwKjrBM43');
define('SECURE_AUTH_KEY',  'rUhICU6BnIVL8ZU1rCK9xkxUtdBhIaDte0gQc42L1U1YPfqC1P0EWt343ttD8DC4');
define('LOGGED_IN_KEY',    'es0lynUdxIVvRFeFtyQXwzXAEr4apHkcouSR1XOHyG1I2ZzGa9fxqJeHGgH46eO2');
define('NONCE_KEY',        'BUC0okYJ21Qk659LuUiTstglwVkUprwQyAj2ZIOw1GN0QLjDJS9NPav9zF38Gcgi');
define('AUTH_SALT',        'MQa5k8skzbeKdg0mEhIegxuK82KKuuEX00qf0YZoxaJvnBB4JaPwSqLCfImYSj10');
define('SECURE_AUTH_SALT', 'x79rKzPxg8OXMXQmvtqe45Mu2tgQoewtjJaUF3eJhkzuQpO2VbakkeyGOYV7cxM2');
define('LOGGED_IN_SALT',   'cy8NJ5zzRLz1cmcQCpiKaAiH5MvhwRYJzilxQDKBfliR2iy5BsROYsOsnvZQUuAg');
define('NONCE_SALT',       'YGfhzJTGntXUFeKlpgIxfYsW2s7l6aIoGs1jG39jyIEuRYUZstc4nwdok7TYvymk');
define('WP_TEMP_DIR',      '/home/engconf/domains/engconf.org/public_html/staging/wp-content/uploads');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
