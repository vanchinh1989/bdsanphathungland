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
define('DB_NAME', 'anphathungland');

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
define('AUTH_KEY',         'G5k!sHxv8Jl+A*r7F9@sog4#Cpt1$bxd}ni{PUkvZ+eD}C5Xf;2]iW~IiP%faDB-');
define('SECURE_AUTH_KEY',  'q,}Jr)I%{^#q$CG{vJ(mi4zg7Nes#[6#SQmpLIb(TQyU8di^K`.wll5^%ceV2QI+');
define('LOGGED_IN_KEY',    '^XXIOI5r]>c7IjeJisvlKQC#76Aj4K8sEl$n{rmCo?e8qepKRK7AzB^NU7I6{A@U');
define('NONCE_KEY',        'MS=#h;^6mKO*qmhO;@7]$-_a^$q[3[T)boDAs#1f,:[Ly=4B!X=~<A7~.(I=JOXH');
define('AUTH_SALT',        '-6$zLt0,d<=oba<Ly[}(i|]TH9LU7fEl>GbB472+Ar3ZJ=).CxwJaHEzdSD]p+Z/');
define('SECURE_AUTH_SALT', 'Qj-c5lPL|,]}5e|VU#-uENOaLT6Oayusr7-^x5WPnLmvW2KK.s88-UXn*]o{#^Z+');
define('LOGGED_IN_SALT',   'P-;_/,mB_wBn 5X*0yQRjFV+e8~D6DbL-aXbw^q6o0n@lUPu]^@@d;iSB_bFqMQ&');
define('NONCE_SALT',       '03MuQh2G4!R0-sraw}Fhjn9DoIH?,MmH!lsM$VR9o|gH&+PAF>vn>_Y1Add7#m8E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gi_';

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
