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
define('DB_NAME', 'local_idm250');

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
define('AUTH_KEY',         '}Q}:`h!=%9=^[u=f+7bqp14B?4e1bRe8z~^u!sxqP8TocxC6P<m|q5-#jS[[,}#(');
define('SECURE_AUTH_KEY',  'gMYaPqnqVf%]~rPaB]N0CQyP?X6g3%w4O]!NSExeX)WKg r=[c?A.(|(KQ]i`%Kf');
define('LOGGED_IN_KEY',    'mOL($o8:;Rp;2J}fO0ND!5@C_2Y0[xRx:$q-L4{&b1SydmmGC7V~_tD~ar{)3w5M');
define('NONCE_KEY',        'lZ6>J&OgoB9=jf};;yB;)6(rd4y/8vkZqI8*!mM-m)v2W,DXbOK;|Z~v2Bw},xX*');
define('AUTH_SALT',        'cA5~m?M[4.%;{,}n#U<k pZ*:[hX` %O1D</v39nN;Z.][$`E%>Xw&34u+P<L#^;');
define('SECURE_AUTH_SALT', 'mKEI9XthK J!;Od%xhPvH=~<f2RD@P&Jp!viXEQstS4*qjkAE@auqb&Mt5o>EF?$');
define('LOGGED_IN_SALT',   'tB]q.Ib`2cQ4cq3M>c8i(=P0~c=T@-*U$1?[fXK#;Fh,,fTbTb}51<~~!eq`IC+_');
define('NONCE_SALT',       '1vbc;8ppX-JG :ty[>dn(no6>UOAI#Kc.!l!{0*yh{ 6rh9A#c@oxvE%uU1pY8|6');

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
