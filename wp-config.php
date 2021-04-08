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
 * @link    https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// Project root path
$root = dirname(__DIR__);

// Composer autoloader
require_once $root.'/../vendor/autoload.php';

// dotenv
$dotenv = new Dotenv\Dotenv($root.'/../');
$dotenv->load();

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_DATABASE'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_SERVER'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME', getenv('SITE_URL'));
define('WP_SITEURL', getenv('SITE_URL').'/wordpress');

define('DISALLOW_FILE_EDIT', true);

define('WP_AUTO_UPDATE_CORE', true);

define('DISABLE_WP_CRON', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Qk^}4L7NAI4F<-U^jM)TNCu/qD$|+ B&-^p&T?jqaNuqjw7bl3.s-8W+z94QQjw`');
define('SECURE_AUTH_KEY',  '@-i2dL>+0Y~vkLWHh)25m t[||jtMgfyZXRMH|K9u*-#8L#s>q}p0$&:B;_Vd4>i');
define('LOGGED_IN_KEY',    'P,^hc!+sz<n01#/sc$)O@Y4uV49ys<EcC|~^(6ZAzx!&&0HM3(GjWe_MdR!{NMhK');
define('NONCE_KEY',        'y/n .lg{3f<Goso#OOXR>glob5D=xWr<iZ+w&9*p`8QS}$(A7=]78!!nvS<kmixn');
define('AUTH_SALT',        'LJ]jh3Pv%g*h^p9V-B)]$?Z-|JU ^zQ[-T7F/BY,JQbGZ7f%F%`27|3Zw)DCk-5e');
define('SECURE_AUTH_SALT', '&]-;viu%NSKU28D]2kG&+u|K[I!y`ShI2V5-tRVnF~8}461Ym;O.|=sO3:<5c{Ax');
define('LOGGED_IN_SALT',   'e|K7*;jIf?uIoXT}V #|ydKK,ovQPv6| b!:j{s`(A1T+FpoJJG2]  Tv %)qM2;');
define('NONCE_SALT',       'sff,A}jL3}#)L2+fLn:BCZ>=BCmJB)K: WA+N8./kCGxb(lG5EI2(en^+AQygMV=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv('DB_TABLE_PREFIX');

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
define('WP_DEBUG', filter_var(getenv('DEV_MODE'), FILTER_VALIDATE_BOOLEAN));

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__).'/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH.'wp-settings.php');
