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
define('DB_NAME', 'aline_portfolio');

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
define('AUTH_KEY',         'd(T<j+OpedE[EDPpI_arvxw=RsI<N!l!ZYDQt.n }>-.Ql >()|OB$:ZB?<~Z=0c');
define('SECURE_AUTH_KEY',  'H!`+8NERI).7hUW9XTbF h>g nIJso=Mu;0q~1L&,2527Nq^+hg_nqNn/Hc-[Dki');
define('LOGGED_IN_KEY',    'lJzuF+qmU?d||*^%IrH3|[u9_u.|A,f49Upn[4|oARzwa!&g?;9.^uaxOd@RxGz1');
define('NONCE_KEY',        '0!+~JjsQ.vqb*b[K19_vSbP<@~-pWu[2d<]4UH]UdU!j$Tw|vb2>j/NZV2]cI_|K');
define('AUTH_SALT',        '{MNi-X DLo;)+RN_|=&#zou:ivv<I%?<c#x8JTA#^BDN*1F|sy< vS[1S-(i9o(+');
define('SECURE_AUTH_SALT', 'np-t/%XVdoC+PpvLxJPs6Yy54Z^ZPf-iqln}n^g75mcR[fZ3I)knr4uU]!~%38N=');
define('LOGGED_IN_SALT',   '&NuJm<J`g)}b]+Vvi=Wic.MCu-X4d&2Ukh|DE;&xo#/p+=|hMv{i}CKOkSn,5WA-');
define('NONCE_SALT',       '|:AlK3EQm{f;JJ(`^+>i_AI;Jm qZF7;b1{`$g68RYL&D,W|,2.SQc=po$n5-DU$');

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
