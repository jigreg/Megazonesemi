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
define('AUTH_KEY',         'kA[6~k(/TydH=GI~-y6H(V5taCFB!/v;1W,r*d(o(aGDr~H 4hH(Hk=kPv. &194');
define('SECURE_AUTH_KEY',  'Rq}:M#vjigSfP_9>gHAP1qM1]C?Eb&6[&k@8ieTavkN(}XrO-wWH67/kRU?zlq&J');
define('LOGGED_IN_KEY',    '~XvC#CMm^wGC26;k/|p7OP0{fkxg-@oNKyS|)TV6=Z0FDw+zBJ}1eKYUZl.L5k~%');
define('NONCE_KEY',        'aXl(P_cb^,}}H;le_RM,iK&cj7hQd=XTK.666fB)*(d@b,Q,P~p]ey3<!0I/VrD#');
define('AUTH_SALT',        'I%uQNR:N)YLpeEjDN.$L>h3@r3GwSmA8`sjxYY2x<,XW/1Zn!%&qf%3k+0:RW>``');
define('SECURE_AUTH_SALT', 'G|vD5=gqhWE@y;E=Z&`mL{qcw|~DEY$zF#-<~&~y%u{xASQL+Z}hfn:V^%,Rjk`B');
define('LOGGED_IN_SALT',   'Qhx0Od.U2DLiQf75TO*:5{IS98[+TT[XDb&=AS]%A}@<qbz&nF$cqYir9vJMLjG<');
define('NONCE_SALT',       'W{Y5x+G*trk9`K<GB@^(>y!]oXAb}}cKU!X1Jw_7r[+]#o0t*mm)Ux.-nYIJ%p^(');

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
