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
define('DB_NAME', 'difficultes-de-traduction');

/** MySQL database username */
define('DB_USER', 'RogWilcoJunior');

/** MySQL database password */
define('DB_PASSWORD', 'P0n0m4r3nk0_s+4+_*');

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
define('AUTH_KEY',         '><tHqy[SblWVnY{`hDI!7uB{yQM?!4z5Suz)2;5yfE0Z p+Sq.=b^NV|kg/[2zY1');
define('SECURE_AUTH_KEY',  'tER&`U|@|Q6cZvY0+Zu@3ytWRC]+ft0P&1&pK;0)OUXO+qFbYWs#UH]!b:[ha4v@');
define('LOGGED_IN_KEY',    ']oSrD]f5A*9/DE6n2lYS9F(,qH%|DTrhYD/9g#!u(6@Kf7G[1BZR1+xWv7a>Jl`{');
define('NONCE_KEY',        'NYcU60O-Mu}V(52g8HR&m^UJlDS400Oc!X{*!M/A[^H^R2`[4]O|Ge|9W#r[3DM?');
define('AUTH_SALT',        ',e_EA>5]{tP92GBkl(=PNeI2{ZOjAETMQ}(+|9qIt1i$73jV@*53h yJlqiDY/=7');
define('SECURE_AUTH_SALT', 'B_XUJ9^*#lTl=haC&qn}WAiA(Wa9|a@HA`SW&TSQ5(:GKqG:a?P:+[rSBLF~p1uS');
define('LOGGED_IN_SALT',   'jwl5FtYKcwqmqu_VR(CnsB*uDAB/oEt!3KCVg/<xhlVHB4va4Kb{0^e&HYzn+m#G');
define('NONCE_SALT',       'i-0C1m-0VsK7b[V6K#AbN k7BIGkM]Ri$-diX.-Dpa/znQ3Jx rJ{qW4m/.]ClSz');

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
