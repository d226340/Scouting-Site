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
define('DB_NAME', 'sct');

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
define('AUTH_KEY',         'o*SaPek,2#^9%>9_UZXTIr XNGK8WC;g+}cm/wjZ*lw6:8,K%`4qI1o%m;`(*>f=');
define('SECURE_AUTH_KEY',  'H={([YTQd^x@``21c/ -vMBm_p9N_44bu?[cS,gyYQP+OP6yr=orocx3P+z{Rnk,');
define('LOGGED_IN_KEY',    'm_+]Cg^wJ>2u]u2,[aaek:eh80<I;qS?d+efN!l-9`Ba>G2Ei**7K^gsVQ9i mEb');
define('NONCE_KEY',        '5;py(&:BM5XLgeC|k{$]t7)${rv-*iz<zMzz?=V%/s[=hDy+MmU@I;kcuiy}*;KR');
define('AUTH_SALT',        'N(=To vnZ$C?p{nv~-X8Zy)p (O5WG&ceig!Vz=Lj6*)`HYzJ(tV=Z|zw]`YXzoD');
define('SECURE_AUTH_SALT', 'o-RHoQZ^2FKq1)@Pjl4uM5m7WSEOFz{ZcZ!H&>z&x?2fI|jrYy}q6o^zFKQvmjF5');
define('LOGGED_IN_SALT',   '%Jdlr?R.M-]GE$ /j)rI:UZ#b1E~#azNKpZLH_3HnM? gybWVFL+`xA!%Qm))wV-');
define('NONCE_SALT',       '&78>ob6adF+*krpzm3_^RxsOT#[;*N2d=Y&KsSAw7A+B@>^#5R(j#w6|}GLkenBt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sct_';

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
