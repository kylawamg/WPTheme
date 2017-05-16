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
define('DB_NAME', 'qwerty2');

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
define('AUTH_KEY',         'G-V0#E{HqsucbpE+<1$&z?U2]j:lSnsvSxT^?,*a?u<VN|>v<~pn`@0GDu!aohin');
define('SECURE_AUTH_KEY',  ']PSmC*2vUy~Q>93}{VA=*Nv5TG:TGt ($([]6{[=9^DLa<m2&Z8J{)BPP:z568lE');
define('LOGGED_IN_KEY',    'R<[H`<*^lf)f%dK3F7rqycrWD|I0&gOX4ZG]Dq?L1i`RR_H{rH.bqhckl;v kg#[');
define('NONCE_KEY',        'C]4kUBr:M;Mr;OrB:S 1xl8:}{FD]QkFDEA~,j$s%v7,x>^zS6UJ|fgve;yIk..w');
define('AUTH_SALT',        '-j7>$tA%slC.QyD-6tZjHE%G=P7_M$z{CIYLRzGZms-0J:tU}xJon!UKld/o3~]!');
define('SECURE_AUTH_SALT', 'i4<hOT72qh(gQSG4niR.M5vztL.^XBCrP~[xY6qUGC6y#A-e)>^LL<<NtnO!3uvl');
define('LOGGED_IN_SALT',   '6z{WZ|/#d8tT]D,nFk_n%<w9+(T;|N/y`Hy,^X3>Ag1?_$CmQ0e0Cquwq$!OpIvq');
define('NONCE_SALT',       'd#2|0g}vZGUK}eH(};;r#rd|q`Xn#@apvQ3;)}7bd?B*s%Vm%d+:-o/<xj,Dv2<K');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'qw_';

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
