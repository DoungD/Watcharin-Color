<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'color_party');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'r0otP@ss');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '#zAa+[ 3<~;,C?MT/x$UK2ggZ$m=w=yt}0A0|MN(OlvB+u$Vd1_HF4U8kOmnh;o,');
define('SECURE_AUTH_KEY',  'I!&-MY1kc*|Kk>Zg4b!XYUJi_//ZM;JWtYSL8}PdeOe~?PB=7`L{@zd;:a||&?~@');
define('LOGGED_IN_KEY',    '%gXYJh/qLn%Nb&zWLMwlXY=esJFmO5LZA!Xy oKR|BGD[.epTX{[ 3fn6Nb(lf+X');
define('NONCE_KEY',        '5;bG?R,pbZ7$Y;}u9DADUWy/-J3I?rw$,o}q0a(nY gfI MHV9Hoh--CCWwDK VU');
define('AUTH_SALT',        'S9dig3p+(ClW_14nes}!QK&|n[Y_I`xAA|3:>3R ^k3?1r]|VH/-STq5Ej_b_+`G');
define('SECURE_AUTH_SALT', '6=u<7Wy-}X)|+Av{&`B%*/L[|x!4&6xP[vlg0m #^baVqr?O7`6;$8pIlX;AM9M.');
define('LOGGED_IN_SALT',   'vFpv%+qmx,?T!p4A7bIe-R=OTnS+ydlc9drlL.X~7hSC[0-g#L7M7<j@YM36gljS');
define('NONCE_SALT',       'DyTDkT @y;TC=+lJ*Xw-)!0 ^]}f!gU]}=+#5o-VZrd*Z&/c$&en4f|MFN8yd+&s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
