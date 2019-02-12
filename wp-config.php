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
define('DB_NAME', 'brodbeckinteractive');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Im##;)2J9uzR2M/N)16& ?r6%DGylg)Q-QZo]`2?7V-83#?^1>@p,k^dz94[kH=4');
define('SECURE_AUTH_KEY',  '=Q&i<TMrSXqjodhq5=%V<^<$@$wBJYy_N,wX7Jkt*[=JX;9H-B+b)7#8sF)eADO-');
define('LOGGED_IN_KEY',    '_9LS7IRmM9q^W~dvwVc1SVBS0oZ4NMV, `M0L@.J2VkY>z83u+O{OR3wehzUj9>b');
define('NONCE_KEY',        '4^`e;f^uN^X|H,kwq|TE?{S<3FM ,6Ua${CYBGV4&-?h0/#>S#CV^myh9<[spVoA');
define('AUTH_SALT',        'd*R`7g:Ope7+krMI?bkX9]L)5{L4omE,b^jE%g~xP&,Ye+v,&-2u[t*y~!CI*#w`');
define('SECURE_AUTH_SALT', 'D;!f--?DjM<3|]A|]J^aJnh[ vB%I}`4d}L#wx^o7)o(f#pMX1MvPnSV[X!-J0S<');
define('LOGGED_IN_SALT',   'KhFq,r>]z3SJ%AE79:d0CzV,^vyFYBD_`H)NqI38/Ew3ef)S0-KWDBE 6e?l_8P+');
define('NONCE_SALT',       '_bGaQ6|Ky_s, dIUhJQ.#D!1|m2Eqxc)*i!q5[ZGGB^UZ$[ :tzDiKfI`|(pk4 Z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
