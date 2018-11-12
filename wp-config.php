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
define('DB_NAME', 'wp978');

/** MySQL database username */
define('DB_USER', 'wp978');

/** MySQL database password */
define('DB_PASSWORD', 'pu(S7818]7');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'qj8yxgq1aauqovcbc72v32shpqu6atmhuohqqj3ajrk8jt2l4yknw0kz3zct57ac');
define('SECURE_AUTH_KEY',  'ow1ereochsprwloplmpgy8snpn1sh973mjeys80bnzafakzkn9nkbvkdgs3qngpw');
define('LOGGED_IN_KEY',    'wsm48xc6fw98lzt35qivho4fqwn1zbrbufdlrc1puromhgbnhnzd9ueeexl2xgpp');
define('NONCE_KEY',        'qoi93yrlrrhmdnzhr2vxgbu8kfagzumryncyrlqotwauwuoj18mnk2glglu43pdt');
define('AUTH_SALT',        'cnklhxeyhekee62wgrzaev3qdzmioryyvs3pwbbdb4yxdiwxcnoeafe2iu3dc0kp');
define('SECURE_AUTH_SALT', 'dxiihtxqsnvzx1mapkay0a46suiyycb0vnkv6qvy9oqdloua03n6eau9ykaa0cov');
define('LOGGED_IN_SALT',   'knvsvhlkmwoxlepif4eussbs5nzh1hdv3vrsuz0oyvxf1aswthy0bfowdj2rn62t');
define('NONCE_SALT',       'iow09w4h11wb7glpntvnjiyw1ryyfpfoowkzg3g9ixqmacc50np64spf8gq4hqod');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpeq_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
