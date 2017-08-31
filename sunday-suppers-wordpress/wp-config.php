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
define('DB_NAME', 'sundaysuppers');

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
define('AUTH_KEY',         'Zb[LI2Q2/.MbVD7)z[H2n5Fd_a?0$HIlc/m5!I[RsfJ.01=l:ZX2U|6t}+KrWCrr');
define('SECURE_AUTH_KEY',  '-Uj/?X$CjB.B1A7AsT5N!z_9DBN(XFT70}d%.BNwOR{G.CDctEE],1t8N2ZpswPm');
define('LOGGED_IN_KEY',    'WF%%wl;G/nv}wWsnuDB&AC83P:$`rcf-IEJwT2-K$&A:sEVoSQ,+i]y8L*C&=< c');
define('NONCE_KEY',        'Q(NO4$]_Xhby3*B~N|^6S?4OyiRlv5HJ[-NfZ_f{O-9zbxCpEK~7F{a+}es5?G2_');
define('AUTH_SALT',        'YLYzLC&|,2JC;fa2I%}QDhZ}=89ArFZs899/}qHzlD`^|#+?2u@^hD-ScJ}v6s*$');
define('SECURE_AUTH_SALT', 'qsngzvYf5xp:?cZy^-!z#`i$j5d),Iu2<jn+#M-O4%(.y:/0aL;1CRe$;;v!{P0C');
define('LOGGED_IN_SALT',   'lK+)IfbF2~0+TevT?YR2p]sXq|s!{ej`oRy5W@8R<.&c^&-zO^>1+/L@NcKJ{YsE');
define('NONCE_SALT',       '}*rqm{/uJ?1r[&|xbBSfjVv2|#5~]-],0#GvKi/GO8nOZz[q>*+94w] X$wvx=uy');

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
