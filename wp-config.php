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
define( 'DB_NAME', 'ilfontidimodena' );

/** MySQL database username */
define( 'DB_USER', 'aincatoni' );

/** MySQL database password */
define( 'DB_PASSWORD', 'otaking25' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'E9`N-`rgsE<id`( *h?fs|3?zF26<&`5?t+_V7 #%yt{ ^<lc#5 `Ja+lBOUpy^r' );
define( 'SECURE_AUTH_KEY',  'DM@6Av[l($HEY%qem%M.+^Y$0;%SV:5bF/H6SU){5k8U(Xx[GVLk}j#/,HVD2rdG' );
define( 'LOGGED_IN_KEY',    'v^R5Nx(L6%pn[SU+E,vI;PeurE-)D.e-!]#G?O%VrZAY+u]$1,kL)UO{vOKt1<uj' );
define( 'NONCE_KEY',        '5=,ie~iMw9LYNHOXN07UYVOecnYEGZ8hrJTp,z:mqiIF<@;6vJ,#C^,4c~6w{f^i' );
define( 'AUTH_SALT',        'a*w%={:IM2|32-Yr8%!Y(b&X9I@.DVi_x8@0^U!YWfu!aLDTIN7?xE4@0o_y>O&I' );
define( 'SECURE_AUTH_SALT', 'B?]I(gOEa(r*)wbI/k+B,+1*O%Z/|T<O)I|&R#,g70<`vVQ+)@yxD]jp_Qb#a61K' );
define( 'LOGGED_IN_SALT',   'p<M)Q2tsoi_mB^:1p;L<$OTcsExBZ9$d^!5z@R7m9bTK*hd T&zv/)sdSQA`sw<S' );
define( 'NONCE_SALT',       '6srm)/tb<5MxAlbFKr9`OF7h(CD3sBDOpyRUA`3J?1&7y<Xo*xHcR/5HNm@G46HN' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'if_';

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
