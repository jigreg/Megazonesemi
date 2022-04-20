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
define('DB_NAME', 'kosadb');

/** MySQL database username */
define('DB_USER', 'kosa');

/** MySQL database password */
define('DB_PASSWORD', 'kosa0401');

/** MySQL hostname */
define('DB_HOST', '172.31.0.106');

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
define('AUTH_KEY',         'TL Z[<!}0S&Kx{M)$o%KW|T-n}V^YZnb<MGKIRB7R(&hnf^2$,aN,[+5TChPM-nL');
define('SECURE_AUTH_KEY',  'O.yCtP<6^E(Fr9o&acL+2s3+Dvx;m8xDx$1Hn(m[MO>U`s,`mCSRrC>mhC(s%]?@');
define('LOGGED_IN_KEY',    'E]cu/cp~C]8Q,w#F;L2t;j=V:G#EZwp0*|@%E`j=Xwz{a.-Urw1+q7m9wy)qBUqV');
define('NONCE_KEY',        'l:>%nz3,F|N6:mq%58?P#Rcm6P7w5tfl&zQ0UvZN)[ME[GBR. M=beT0GsTR;5hQ');
define('AUTH_SALT',        'KLKnyH9fR8HK1Ht5p(dtbFU:8Acs Z4IBE#{DEwuuLNz5{!=ZmZYY{df.uFQd^QT');
define('SECURE_AUTH_SALT', 't8z%aIA)+qT[) rjp5fu.F>dT5$RzQ2j]PutRHK5Zmcg919@Fa`(0P&!kVoER7~u');
define('LOGGED_IN_SALT',   '~vFas4l$Ki%q`6oA/!K/^TN~^%:BDR[7KZx:i4D,~0J;}SFv{tH=18N MHyC,/Uc');
define('NONCE_SALT',       'p<2!LY$#6Vo8;Ref:mwG&4dgZ<^8;SFdgi{G{8#t,/ @lMG#Lm*@qn?6KP`XfG4=');

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
