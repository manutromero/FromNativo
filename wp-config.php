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
define('DB_NAME', 'fromnativo_new');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'HDOk+!o228p6T2|7N~yb%Hw(!T),xaaWPs(-.#F4#%9ed{0OWVjZh @Nhd&IyKz1');
define('SECURE_AUTH_KEY',  'b0IvBY[Cuw{=%ONs:XiVr0nm=,(WX.KhT=j*- ;tLs8*==Vw$2vJ9|-uwD91d7p_');
define('LOGGED_IN_KEY',    '_ ON@*KEAsPIUEwA[[{Mx,?(&N(YmWzLtFI%1,4JoarP}~zh^,i%~#ws%&*vI%,.');
define('NONCE_KEY',        'y:Q?^&omhAUZ&p5sjv|B@t$fB:QUzsz>Gh^`jbEVyD{$g~!W>3I%Ik/b|])VjX<K');
define('AUTH_SALT',        '{kg;T63nFY<lV=&BXf(;vTtLy{^rtC}z{nVFIC0|=2IY5$S+%Goi@XVS/xc3R+RM');
define('SECURE_AUTH_SALT', '6<-}cWC#w&yPR&Xty${o5E@IN#e3^1:jJ54N0w]AFi&C?n<WkDhg30Bkx:ha+KY.');
define('LOGGED_IN_SALT',   '*!z|fb,XXs<|}y`{5v^q:?i[u!bMR_>%>~_Q`gQ;rxr.M`x>Eq]CvA-u@L.@q^#:');
define('NONCE_SALT',       '!0)ZY_CX/|>KRSVF6w+uI/(cjN&WM:sbU6KYm;z)Sw0jLsQPtl&)e__~?4i:_hx%');

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
