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
define('DB_NAME', 'kvkmotor');

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
define('AUTH_KEY',         ')=l>E8FWCN@:ik_iQX8[-EC3DZ(A]4[Jot@|/E[GEyz7gL=jY9#))b&~@:** JIw');
define('SECURE_AUTH_KEY',  '7wQeNcUX|$vCeAJGPZ%?k4N<!u9hCT 8x~(JjY1$7J.TxO;&v>hT(5!@Y?#bS!1F');
define('LOGGED_IN_KEY',    '(z`.lsi+QZx#vv>ZaiihVHDO5B0({8GdV$*]=DDur,)uLzmUJ,djy/>p0b#45jkh');
define('NONCE_KEY',        'xTp~8ME3HFaHRX|,p;~])S%X!%&$C%%>dO9}gQTe+akZj`aR[FU3H!xpGzGVRJI=');
define('AUTH_SALT',        '=YTTo&1d!]$[yJVwlm/msjJ&/Rh52btB(o;PFSP[_Bt>F]/16]<hwfq,PIw>LzgE');
define('SECURE_AUTH_SALT', 'FBOXQR:Bhb<#nfpR}jBal7d*ow[n>wcz^z9_F;<bDY/lU>l$e[v80!j(Sn1`O2eQ');
define('LOGGED_IN_SALT',   '>j~/.:O|sHJ-bO$/YJO;F*TEK/99Z@nCmC|zNpL-->s)ya68%~#:Z+!N9+.2AJ+p');
define('NONCE_SALT',       '8@emTdxQ4>~{QR9/U$1C<@5Hh02T#X;PL.{.uHz&,nV)f4oz-jzJ:(!h9T?W-{/q');

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
