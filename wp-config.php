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
define('DB_NAME', 'dbsecondwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'iPbS5pKi+EXt`RG Ll.&N?eQ2P$(2p2<Emcn[bRVDOvt5jc-XWN@%kh,5/>eA,v;');
define('SECURE_AUTH_KEY',  '!{f={q0aDNs04pmPku[SLoG2hxisNLk-zqF1:P`oM:l$0Gsxx: euVde0OgpjfR{');
define('LOGGED_IN_KEY',    'jx$a0|@_5R{wC}d.nZiquh$=]8t5~lDUV4TJb.EY}WIW.xYFO4GaSH(a$CEl&x],');
define('NONCE_KEY',        'kN{SSJT<0vG81^0=gD2A,#DhQ=LV7NM1!2Q5`JUVu1@yP};!-x3IrqdP*@u?;HVJ');
define('AUTH_SALT',        't=3$Z5,86VL-[^:}oV(IIkyqEnG[X%y_e3}J|?<+5T8H/ee-ds^$yEZ>Rvfs4mHB');
define('SECURE_AUTH_SALT', 'M4t#Jqd*{?3`+[W84Ecd5{r=:z#M<[w%6hx#6Tq/`!Qi+,TCo79@4.Sod*iGH[+Z');
define('LOGGED_IN_SALT',   '=o,v:4g5@?y2_o_03skNP{h,^kXV~|ppd-|mYpQ<|.BU=[+Cl4ZF4,dh,M;oS}a7');
define('NONCE_SALT',       'dW@,D_&HtZ#:h5DC&7_555gSw,mKxFO{hCtAIqfXzKA%QJJ$r(MIQ{U<sX;%%IQ.');

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
