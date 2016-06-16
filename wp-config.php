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
define('DB_NAME', 'jludwa_wordpress');

/** MySQL database username */
define('DB_USER', 'jludwa_wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'zaq12wsx');

/** MySQL hostname */
define('DB_HOST', 'dev-db');

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
define('AUTH_KEY',         '$Cl=z}?WH[4_Mxu?SJ2aV4T E:J^aP@|@^|~J} 8m?5(zBjjgotC4u .}bg K:E+');
define('SECURE_AUTH_KEY',  '<7nd<<8?9z`D _e}1< buQ{{/ Z]KW0P85^YJz~^~T|r[.Y[~pI_@N8j#cY[Z|Ce');
define('LOGGED_IN_KEY',    '@30Op3A`Nzslq4zP>Ct)KUMWkD2XJGAYUVnT$IYLAtM)n{ev?%kgB3zRn+c;AnXq');
define('NONCE_KEY',        'Uqtn{vzd#-$eKjmA~<k_D^E2QeEY!tgcm;f|Ww4*|AQ%1zIAbotV#(i&V8e 1m0q');
define('AUTH_SALT',        '-PmD~ :f+.R(@iSxrIIez#06,rX?#TR{[8JJR&?<%O*x3!ow>D,3V{r!~Qav9sbA');
define('SECURE_AUTH_SALT', '<l^Y8M4}%AydTdFJi+ek=035XGi(B_hq7?`/X@1wHjuLt=>jf|P~+o!Tr%Z8$j/m');
define('LOGGED_IN_SALT',   'b{_71FmoI_FT?k:c$Tz9Q*W?]cp{!eA+I{a|hcvj(W$b?M}< {u;yE6S_J7C>`G}');
define('NONCE_SALT',       'Jf}TF|)VE</%qHC(?qS2B!YP7#e/ulT#t.-Gu)%@?uf}.!ml~JR4`&U;Zu0$Am.U');

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
