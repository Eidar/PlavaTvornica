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
define('DB_NAME', 'plavatvornica');

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
define('AUTH_KEY',         'A2z6u1pd[P&OQZL!S<:J7b>N!%m4~;:j<_rR4y<lN3jO[zuQw#E7-;~z4NlOM,xC');
define('SECURE_AUTH_KEY',  'o%;j^uy8_*p|@to X!BY#}<YaByp~1Vs,&pn*PH`5OJ[>k4q2Z%Il55DId4kVNo!');
define('LOGGED_IN_KEY',    ')OESw!)_xRSPj5_F/Ac@ zEm:1sCM {tx|8pBH_3WZ%LvY}0).`Zn_rxdlg%@r,#');
define('NONCE_KEY',        '34m%PT.~}DU&@!MWr>s O$i+3P<B5h~yg5Z**`1c!+o9X#geeE,Kx1P/eqc{KrAg');
define('AUTH_SALT',        'Uln?oLB}sDB:I%$<Ypuop<|5|gZx#&xld}l$l>dxpu7>OAG9m+o7cELxT7&:F<X ');
define('SECURE_AUTH_SALT', '?.2^28ZbgKSw.$309 gX2fh73%-cSOP`E)3Ji5>udLR1]_C4/E+C;@u;x<+&:U<m');
define('LOGGED_IN_SALT',   '^O3>sXZ4%xFJWYk([T%>P|po/`5No,Hzik:w1n`H,lH<eWDS7Ka*L!wCqzRAQ-Sg');
define('NONCE_SALT',       'aJ#r~{F$nI[AVCsPV%%8Y`hyAEqkcieE2FpD>6T1xeFp5[0/0YxUh1ntFz[yrYc)');

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
