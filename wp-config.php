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
$the_website_url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (strpos($the_website_url,'localhost') !== false) { 
	$wp_env = "localhost"; //localhost
} else {
	$wp_env = "livesite"; 
}

if ($wp_env == "localhost") {
define( 'DB_NAME', 'una' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_HOME','http://localhost:8888/una/');
define('WP_SITEURL','http://localhost:8888/una/');
define('WP_DEBUG', true); //for debugging only
define('WP_DEBUG_LOG', false); //for debugging only

} else { 

	define('DB_NAME', 'myunates_una12');
	define('DB_USER', 'myunates_timguy319');
	define('DB_PASSWORD', 'Returnofthejedi1');
	define('DB_HOST', 'localhost');
	define('DB_CHARSET', 'utf8');
	define('DB_COLLATE', '');
	define('WP_HOME','http://myunatest.kimboagency.com/');
	define('WP_SITEURL','http://myunatest.kimboagency.com/');
	define('WP_DEBUG', false); 
	define('WP_DEBUG_LOG', true); 
	
	} //END if wp_env
	
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'atl@hvJ:X.m>(^`n[,d-1@pB&]Y3}dOTv+BmV~SeRra>&Zce%+~yF*zU4g,e`%51');
define('SECURE_AUTH_KEY',  'gg{9Xc!E&z9eQow9a(rcgbDHel0!m^?S3[IfI{-31 5DA8F=..lCOaPf63_2}ZC+');
define('LOGGED_IN_KEY',    'wWkOUO45%Lt3QZ>f;?X|G^AVxDdbrVQ}dqRH~Zj.Icsu~Fq( qWd g{]}WN6 LsK');
define('NONCE_KEY',        '-:-vmuzGx-x|59lnB<TMHK!/ 2zsa&pCBkCGqs^*vI&85j<?GJ+ih7xr(CAD5onv');
define('AUTH_SALT',        '3q0RI;P{S{CIgz$42K>`.|~<@#W`8;Tq}3Oq3!j6t{?z8@R@=BJf_b )+,:AX]+|');
define('SECURE_AUTH_SALT', 'n]^|+UN{Y`Cgp7%QTf]rK9TVVCiTIO Er?tZ+-tJ-rSU|mwquyWT-f-K,!I)7;zh');
define('LOGGED_IN_SALT',   '+H5N-H`4-y=YpA;L9DA4ip|!J+~mtw~g&4Wvw/K4qRFyprcAkGi|/+bS|I(Py:CO');
define('NONCE_SALT',       'O%(-bdtdwVuEI&#^:QnE%O:`Ik^6R#!t)Wt fk}e(C(m.&R|G3G_.^(Rm;N^lPgF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'un2a_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

define ( 'AUTOMATIC_UPDATER_DISABLED', true );
define ( 'DISALLOW_FILE_EDIT',true );
define ( 'WP_POST_REVISIONS', false );
define ( 'AUTOSAVE_INTERVAL', 86400 ); //seconds - an entire day which pretty much disables autosave
define ( 'EMPTY_TRASH_DAYS', 3 ); //empty trash every 3 days
define ( 'WP_CONTENT_FOLDERNAME', 'assets' );
define ( 'WP_CONTENT_DIR', ABSPATH . WP_CONTENT_FOLDERNAME );
define ( 'WP_CONTENT_URL', WP_SITEURL . WP_CONTENT_FOLDERNAME );
define ( 'WP_PLUGIN_DIR', ABSPATH . WP_CONTENT_FOLDERNAME . '/addons' );
define ( 'WP_PLUGIN_URL', WP_SITEURL . WP_CONTENT_FOLDERNAME . '/addons' );
define ( 'UPLOADS', 'assets/media' );

define( 'WP_MEMORY_LIMIT', '256M' );



/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );