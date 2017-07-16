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
define('DB_NAME', 'paesjulianadb');

/** MySQL database username */
define('DB_USER', 'mss');

/** MySQL database password */
define('DB_PASSWORD', 'mssmss');

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
define('AUTH_KEY',         'Gm(15b@-p0<e&6Wdf&Qb*VB9Z%(2+|1Xc Og/!J6xLZaC(:3z#m50CqX~[0hHj!L');
define('SECURE_AUTH_KEY',  'XHS$ua@J{P4QkhyTIn.msx4+StbP6&gS|NB/gPHOp?u5^6}DKJfKN`1n[C]N./=i');
define('LOGGED_IN_KEY',    '.BP,n&3OQ%Twd6xVl7o*g+Rf?b|T8N8bW_[xsXEVwbxQc3[0s|(vEIi~>7Sh)-NY');
define('NONCE_KEY',        '~*Zd(fACJF;JgwN8WM<di.Sd8>A1U(nUZjX%^/ukaN%4=j0D4~=)lU?=.T^4o_|b');
define('AUTH_SALT',        '+E|83]z|S[j:S>o,a)%Er!]xaK?0 b32KDnw?j&_q`OgTd^]Qkt<NGJH~g2`8:Y@');
define('SECURE_AUTH_SALT', 'a9V e iT_DSCsY>I]6H!zpRt(&k`ld-t3T, zG;GpVO7M&s)!7gx7k`bsHJ.;:Cs');
define('LOGGED_IN_SALT',   '^IH%T@2!ln^wX+Gdu:b5t?%$eUM1!NB9+W`S9O{~ooDI:)5dXA3*~w4D, 3,&Gn+');
define('NONCE_SALT',       'P^v~@tFi^Zmv^uM@D46`L0akBanROH<=`,<^x*hS2;Jb$0G4:p.I|`9kfl8Q,8xb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pj_';

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
