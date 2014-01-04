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
define('DB_NAME', 'testwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ajay');

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
define('AUTH_KEY',         'zc`->&`udQu`(3Y~rp:8kpw(K|GD*4`,0-N_}@zcOGMBSlymohSNbj-r)t.^-Scw');
define('SECURE_AUTH_KEY',  'W~qcq<QEQ%Yq4)sNjonPAxcd#NP.2*HEp/1-Fjw80yZ-,X`C@=t$.a9IVuLjh;}n');
define('LOGGED_IN_KEY',    'a[kZn^C4/Mr$JvkfL-fCxWPA8I!q?Qua3I7wG:YtEDtx*3+H.Q6^.9NP}Mv/&^u-');
define('NONCE_KEY',        '8$4MoO*a2V=*-xx<[?BW+e;,U(q6E5r,jAp++(iW-p7je~&0^Ps+X Q+Wym=+nP4');
define('AUTH_SALT',        'WkBe0[EW!@keOMb(XY-jU?@v-[4u)+|E@JG}%7VlTv=Eu,)+eb)|2c%&UQEn_1/_');
define('SECURE_AUTH_SALT', 'W~V%8+/whErr#bHPY++*vST(m#XK^x:d&/`Y=SO5$9zgZ.-T<~3xkR!@,a(ovo0&');
define('LOGGED_IN_SALT',   'D@nJP4K/-wX:R:@BDd_Q1R9xh !9TwZx1N=H[w*aZDHb)H,s?]v|I-7n@87|`!Pp');
define('NONCE_SALT',       'NM*}my}-1t@;qfh!fM/L^%zg0F@8h}!Awo[PUc.pI+Z;E3QZ*n*_F*l4mO;/riZ ');

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

