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
define('DB_NAME', 'blognews');

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

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@84ssw!W$QT4=Ns?_?Mj6vcJLGJfxO]!D/KeU0se!-GnwfL2cIFqvYcS$NhT);q{');
define('SECURE_AUTH_KEY',  '))]??>hpIq-|fo5uEEe4-7!+4n*mgV_Q!3(EOWI/`kj(xV,KBM/-R{(OqbH}Bo3_');
define('LOGGED_IN_KEY',    'T[){n!,->LI1#LjV2dm6sKM^[FN$87)1Jz|N7jm. t9TIX+E68W:gwBbcQx`J])M');
define('NONCE_KEY',        'Uz!FiG 4<nX8)CT)w^1i}C!k#lYV1|wPUB(r9,JMjZ3hG6Bpq1W2dzN?_`u[Yh4t');
define('AUTH_SALT',        'q$pi2&l}1.@n3KT=Hkc2p/>-R;*y`Loy6D[>)mm` RwxzqQ-w89xsc9Iy`)N(Ue0');
define('SECURE_AUTH_SALT', 'Lj$])~7qQU>fp4>4Dajnh8k<XR(!MH^u8BNdy.Sy$,&7uqBV5tvXEh{@dG1X-#PK');
define('LOGGED_IN_SALT',   'xVZWj,s]T>pmkwT=[b9LC:*r6;=zu$ 5CE>CdRViV5NX]!KDOcQ~U/LqKuHR!7u]');
define('NONCE_SALT',       '}?1tlP+E1{}CX15Yu*hzxf+<`$xF@6]A:KW>xg+^/4KY$SyDM[$W-P:y$ _;F;t[');

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
