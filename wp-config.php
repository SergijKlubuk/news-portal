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
define('DB_NAME', 'test_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '^npypTb<}/eX,NDxI%C{9FiDYHgCVyRS~306;aFFD|91>!j2DdD<=m7S(< 2^E32');
define('SECURE_AUTH_KEY',  '0gHHpx-t{b-P&@-,0S ^*gGPmZ9&7eKHZnax|rnI(x}qO^->GFI86LEx.ANLHZzl');
define('LOGGED_IN_KEY',    ',n5^Yafk1]&B<oc*!C_ ^W5,Ty0wc%q6ct2`3,wKHH:*>TXLlEE!N$}ZKU{?w%HW');
define('NONCE_KEY',        'uU?vDPXw3,D8[ISS}xcBN/i>e2ag?23&V&lH0=s @-q|MF=(}J>_1@MQ/@>4HOF]');
define('AUTH_SALT',        'D]Flm(&|kYC6)n==nYcu+2VNBfR{t&F|P[!5T=6&!Y?;m+m|4Qk i^_@;FoQuvQr');
define('SECURE_AUTH_SALT', '86u3$en)!8?=Wq5jqvlRcTk:({D.v=~cnw`(Sov)ROg]M6aa<&($ULb8>*9<!)Hk');
define('LOGGED_IN_SALT',   '02Yb;5a^KxjpSs|[[=Uy4}#u&w+jp[oe.SP4u epH5o!=ASU~|IlI+^jq1AWR<4k');
define('NONCE_SALT',       'Fu4X6(%[B|p:|?LY4Hv;#2C^]NtSYYYFbB+& ti?qPgfved.YJlm3OW xOK.p+P&');

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
