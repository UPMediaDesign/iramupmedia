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
define("WPLANG", "es_ES");
define('DB_NAME', 'upmediac_iram');

/** MySQL database username */
define('DB_USER', 'upmediac_iram');

/** MySQL database password */
define('DB_PASSWORD', 'E#+qtt7OT}Fz');

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
define('AUTH_KEY',         '%!_H*e>Q|[-peU$K$8m)lQh!kU9Gs9M$Q6n2f:(7.]6bAV+R08D[W91Img*17+cX');
define('SECURE_AUTH_KEY',  'H9S|t[;7-_Z4!GK+)j$lA4R~uQ:&un=KXR+7|3Cq}%+dy(-V7BDFi`@C tM<D^n ');
define('LOGGED_IN_KEY',    'UPvu!)#O-Q5}bq.6oc$2M;-/22;T+o1aKu-sb} cS/<F`h4t6LVOOPXnHBnD6(09');
define('NONCE_KEY',        '|%SMK+;Fk~fHIc9/hS|#h})QcbjOBWI `k_e[_Yt}^,dpkV:{z v1=[G+ +a{`pW');
define('AUTH_SALT',        'izvsjPkGAp{LC`(-REnUl:5ViTz<Y+iLH6xp`1+`gCt(~}JnBm!o0f6nSp^y;rTk');
define('SECURE_AUTH_SALT', 'AeQE3V?`So$#n.1<m^OZg(fhBS!f~V9N(Vq:PSX|ds*3 ]^c-S0K!|9+w.H<~61:');
define('LOGGED_IN_SALT',   'T u&06Bo&_ yeNC5BKX=.G-g~>){j8s@#sJ(35r=WNu^$%d}h}|p&w]LkOBe*INc');
define('NONCE_SALT',       'hQ|P<x(fT;]h`N]qrK9CwZ4_FX7%hj|Ir(Z+Ww<]=`fua^+)ebln~DOy{_E4<)}K');

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
