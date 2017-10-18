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
define('DB_NAME', 'team_challenge');

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
define('AUTH_KEY',         'Dn*w|(CDwe(Z8DZ|0sA6Oq.X,<E?WL03Y;7Uc^7Z#i/k$i~alR!9SPqgrpK.`&!c');
define('SECURE_AUTH_KEY',  'h_(!?$3;~S6iG{e|L()cKKZMxnOoeoOpA<J@>5*K0UK%z5NCMD~yIfhHE65BNu80');
define('LOGGED_IN_KEY',    'M289DuY5B0v=9e9~R<lDiPM%X_/1[dV?=VL*W}@dGdw_dflMJxSe&vBKt0Nu&|vT');
define('NONCE_KEY',        '>:rZ:C6xS_i54m_k2j](-<dM_]l?a74/ P#o1dzq{$0n|=qpfZc:V8]B4F_}2J#;');
define('AUTH_SALT',        'LR&^Uf!2ebbm[j}`_q_5?1r *s9Qm^7HmQd45|H~TLiwj}3@^kJ&5P7o$,EGLc%K');
define('SECURE_AUTH_SALT', '99pyfH>y#<eEkxEur8O6)UFd}l9LOt y6.xb~en1R!QT4z. (?<*2aCSlE]_Wxip');
define('LOGGED_IN_SALT',   'w$@98C-Mn#MTr6)T:P%xAG&#Rodf]R+h:NvC#pSau rcz7=LakIA:<b_`$Vs[cPC');
define('NONCE_SALT',       '`YWWE6Pm6&LyPxu&(K,zG7Vy42OViQE~~(Eg$t%ZcHjl5IFe:74{9dpG1iS!fh0<');

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
