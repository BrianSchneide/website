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
define('DB_NAME', 'brian-portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'O>K]&Iu-%.a/tqDvkwfY[;IAw/<?QzoCL#5,Bfm@E-8k9@[2_0^Lf`RAQ..#.nsK');
define('SECURE_AUTH_KEY',  'n^I`@ZD[-t_P(#:=Zp9isuCs.3;8T?[B_h!`bN;4va3U%LdUBrZYI+&Cs+fN>s:]');
define('LOGGED_IN_KEY',    '^y/S3zpOE]h&I$>[dn63vYAu*IRN6kX*[t-7)rs3s5mSRz*i5L%rwi{cAO<4h~8&');
define('NONCE_KEY',        'A6{lN5QFfmX9EFEh5BqkPnS(yZ~Kum*3Tsj5..~G THS5!NStWsO,{7Nply/p4qY');
define('AUTH_SALT',        '6+,: D2R..q7U`WACZLPc!b39![VZNG?ApHui9;BCe*t_@ya7G[L,mGjFsh(5/v(');
define('SECURE_AUTH_SALT', ':LNn=Q>BGi^;rGItRfzDT_EQPP~h3ejmD-<6%IWR!ao:&0ar1(-dia&qL/b3mj0U');
define('LOGGED_IN_SALT',   '`g_R6eJ}n5vF$$_(O5eeLpm53C)r!_7JC$z&#asCN<KtRxh>d!ti=dT!463ePUio');
define('NONCE_SALT',       'tY 4mxU/Yj4QI$BI4;g_+JAC_260m--{MDQV|T%yBs4mu8vf;lA,TI&R?);F+.<3');

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

/* disable FTP authorization **/

define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
