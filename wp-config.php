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
define('DB_NAME', 'thaleria_wp796');

/** MySQL database username */
define('DB_USER', 'newwp');

/** MySQL database password */
define('DB_PASSWORD', 'newwp');

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
define('AUTH_KEY',         '5/GuC|Gg,@b8k4_NZFMlO+i_xD[>WuPE%]z[+Ju[I[L|EkXOMtgma/frD. )ga;(');
define('SECURE_AUTH_KEY',  '{z/QW2p|88Iz($Wg+xlg<P!m?2{*BdRzY1l#P^-gA]Q<|p$LdUSq4AXDWzn0T9m2');
define('LOGGED_IN_KEY',    'OXOPCZ-!Y4PlSmX.7v4K`C!|gA`tz 8z(ML#8,qG<l)lwa4xZVJN^k#&~IQh)4jf');
define('NONCE_KEY',        '%g-c@5ncoJ$NgN^?9}/Xof(<N*Lnz}&6R)}4xNA1)|]<?vd$Uqkx@6wFX};8 (zS');
define('AUTH_SALT',        'AE[rm-*ZaLdUr0j+ME3Ja`O6*0Q^l8As8s1XJ_*t1E.YTkEJAxltl@*}92)*Ec7a');
define('SECURE_AUTH_SALT', 'NN)vZh(dK9E*MGlP#cMmO1xq;9u?|IU#`ch,{4mi%B$pyY-g10pOCKYjjHC/A!Qv');
define('LOGGED_IN_SALT',   '~{aOa-g]!K&<M^_gj/>*Wq%.:;y{IE9q+$VlENP4V|PMNXm:~gF;m4=b`C`b<vu?');
define('NONCE_SALT',       '<PjE}NM~~[y0L!BQ3pwA,[>+~X8lKK0we7*33-3r#6T&Kfm>K^<qRE`gO`Oeg#S:');

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

define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
