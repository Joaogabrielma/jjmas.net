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
define( 'WPCACHEHOME', '/home2/mrjjmas/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'mrjjmas_wrdp9');

/** MySQL database username */
define('DB_USER', 'mrjjmas_wrdp9');

/** MySQL database password */
define('DB_PASSWORD', 'ZFwV5C7BwVnAfr');

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
define('AUTH_KEY',         '7X!8jEdNdz02C=^qDisHH945l_LUJ:YGKv\`O$el^!fjOwdAl812?PRG)d-VYwLAB$9');
define('SECURE_AUTH_KEY',  'ihCl#_|fy)SFC?ZBY4A@*iK>K1~_gCZOV_8zn-33>ajw9J<Ynu\`QiIn|_UN#jH:E$t7ZrM9');
define('LOGGED_IN_KEY',    'zQe8rls53=7fU96L\`oB#I#JNeWzx>P)$=J6urArLw0^ROB@7<$Q2/Vu7^1O8KZ5HjPT1=~E;YIE/m:');
define('NONCE_KEY',        'F-eTH)Q4wTTn)@aRNQKo$8>RTevChSroSK:Ch1bvHNq4HNL?L?H;F=bIBFIfGa!UoQg\`J/pODV');
define('AUTH_SALT',        '22SwTf/@Uo-|L:JJ03H1A:0OS(lH3NA9Vq8hEILmO8B>G->>|viBS>aC30@Z*Po?O<k*/trk7!J');
define('SECURE_AUTH_SALT', 'x)FWDa@;$vOHU468llfL!cKB1k*4akk5th_qoXaN9z5OG#(auGA2sdESb?m|ss~t^;^B3*vL');
define('LOGGED_IN_SALT',   '$X|nM(DDP~O:~?ljX?E!SSIU<AHg<aHvR3Fkc?y95z3ba)n4Y9fM;TGMs');
define('NONCE_SALT',       '-FK-C>)@mpHmi3^<7EAq)j929lr*BEeuOAa-7|i;#Pzkc;:1y\`@toYzx3RP>y_<_Ydg@');

/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
