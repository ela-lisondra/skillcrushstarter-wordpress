<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'g+|v^W$/{2 B<w$7G)5w`!Yx$4549/fsNv}rmlbi#0LZ?~eI[NpyhLTl>A!9j+qM' );
define( 'SECURE_AUTH_KEY',  'o$Qg~R8[.3/O>2Qb(}! c7Q^.FIBY}QHMI-{#wM@HnZ? {Ixk!`JR#+DC?)ogUwW' );
define( 'LOGGED_IN_KEY',    'a19F^oAA!_@`TZ[IK1J&_;s06ZH=G09x#`(%!9@R VGrY)cA42)g/31e8KFT1a9F' );
define( 'NONCE_KEY',        ';~wEzKzqYQCUGOb7s_J a [zs41?81JF fZUY]O%;)g`50%aqE@tYC%;`DS$A2(G' );
define( 'AUTH_SALT',        '5K,PI%~=WSq<n!<Rch*>-}sbqk=g.)&ilsj2avM-?9$%@ rZ%+3$W=v;f}C@S,lF' );
define( 'SECURE_AUTH_SALT', 'h9O^n|fh:IL}G[k+5(Y+<Z:/vp+bq!IkybH04[C3w^oH2T#{S,zI-`7>+S0#@fUY' );
define( 'LOGGED_IN_SALT',   'I-x#CGm[Vf6@2?lDZ3OgrP*.Q(A*&oWA<Yt@@%sfdm}JuQQP3?-*bE7;%rz/w~:M' );
define( 'NONCE_SALT',       'wWri+tMx=N;PD^ob`9nA3fid3mUG#&&~h@> gh$c91Zt{zL?.0jyd<X6*$}Z3%6u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
