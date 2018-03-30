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

/*Fictionsoft_demo*/
/*define('DB_NAME', 'fictions_gadget_bd');
define('DB_USER', 'fictions_mamun');
define('DB_PASSWORD', 'tKmH6mg0X90o');
define('DB_HOST', 'fictionsoft.com');*/

/*Local*/
define('DB_NAME', 'gadget_bd');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');


/*Online Choton mama*/
/*define('DB_NAME', 'gadggrki_gadget_bd');
define('DB_USER', 'gadggrki_choton');
define('DB_PASSWORD', 'ewx07T4_75,8');
define('DB_HOST', 'www.gadget-bd.com');*/

/** Database Charset to use in creating database tables. /**/
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
define('AUTH_KEY',         'D9+OUQPTf:Q8JtQ:Xkk1F1?H8rr+ZcUm twE%sY<xGxlQKo!nfiu.|1(@2~ZA~Fk');
define('SECURE_AUTH_KEY',  '8yp4~o9~mU<}5bp&MsRHOuKxVmQQ$c1]pp2:L*=7w~SXSg]31gSqeTi6-cMEUqs8');
define('LOGGED_IN_KEY',    'HLt0X>S4q3Y_<;q;jrlBpK?T~2u!zP7JLwnC<j]ZtXR`0cbU52VgW@=PZhvyG3CM');
define('NONCE_KEY',        'vY~|f4!$2_Wo<GrA((DSOepe&nA46E0Fs9a>fx8WAlN9w6DA!aI7iNft LO5}P&B');
define('AUTH_SALT',        '}&JBqXhd8VsS)p)exERSFy]pw`PR!peVZ)En16JKwtIE$fey,D1CR*B#$})L Sq.');
define('SECURE_AUTH_SALT', 'XN1pIVI4x9?v&?Md+FV4S=AIcZ,-(ON@Ln=a3$t-g,[S?*GaF$.RF8m/D;BN:+&o');
define('LOGGED_IN_SALT',   ' U30B*[JaLs@!ED.V._{X&Z)22tu0V331R2h}4 R4!kD()my@1vTvLaC;dR:1BKD');
define('NONCE_SALT',       'c>BvCK8,vpftNL_hPWxg($g!jiB52`RVAwB-MT*e,F|b9.[;k=^r,S?<Xn7{H{df');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fsbw_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
