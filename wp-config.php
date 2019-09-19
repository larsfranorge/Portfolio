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
define( 'DB_NAME', 'larsiversen_nu' );

/** MySQL database username */
define( 'DB_USER', 'larsiversen_nu' );

/** MySQL database password */
define( 'DB_PASSWORD', 'RGUG7XEiGTC32LoYjryyxyRn' );

/** MySQL hostname */
define( 'DB_HOST', 'larsiversen.nu.mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-/uJ}C^HH;{iGF]+ofi#uvKDOA.8G)W+VG-ZY&LxOi)PDAg%Y6DMleY)h)e,-(f-');
define('SECURE_AUTH_KEY',  'fJ&FS)WqDHnBs#BR!+qwZS9E|S<;: ;NDeC#:#^[D|Wo7DfoHV3l0zc?q` =F/P+');
define('LOGGED_IN_KEY',    'J^W?ky a*&+iNCVGj$mf8jV+.v%F2p/c+J}QmoN-7#-7jJ|.Pc*UegN7ld0Fbw,Q');
define('NONCE_KEY',        '-7+V!S{;%#}+<@Kj*.T!usD=MoRodtMa|<}HOHFs!:ZWB(4q]t%PeIvj$o|Em4r~');
define('AUTH_SALT',        'T[C!GJ54@pMd|FdIR.-+RT0g9|Bk- &K2R.UmE5iOTYi4u+TRCg<8v#mv9Eq6Bo$');
define('SECURE_AUTH_SALT', 'p>c~{E: o4Nxu/=w}K+JmB-(r0T@wB-W9hI*|(6m-jr-z9V^N>j<|0B+Ia6F^A`2');
define('LOGGED_IN_SALT',   'o1[;B|%?n]E|614JGK5|-z]c].^.W1mo%,OR5}e45niH8;:V3n-:]-c# 7w1@712');
define('NONCE_SALT',       'R[,yhQbzpm1(,5k<ktT-1+,>+%Dl:6Fq&&H_TXD%Inh|+6,:U(?` :MK)x<(J4L%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'personalportfoliowp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
