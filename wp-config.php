<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'varag' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '@C]Q|u,iX$ Q]1Mf6:kJQ;z}NFK|8]=Qq}egnD#Ohh7J^??vNn)vf<wtV[c:7L(d' );
define( 'SECURE_AUTH_KEY',  '7eJmb(u9#P?jgm38-iv@oh`(`aG7;G;T6V<6hRg0A-6UXZ9%mLwGioR#F1/5t8rI' );
define( 'LOGGED_IN_KEY',    'L/R#arT&pM#tIodw4a2V(e:fQpxVq9]NrkOyoWQx !3H]T&Hz8iYv7`0|a=VJpB2' );
define( 'NONCE_KEY',        '~NF*GKBCx[fHDmCp:|CII&>Qb4EJxV6|JSjEr`J-@YrNFC9E>[E{9sqy{*|x-Ssa' );
define( 'AUTH_SALT',        'v_ZSkL[0w_^/mhj>7?b>+%z|Yl./Cpv4=Uuxq&D2SyhW|_%ev4OT=_&O#:#6|]W2' );
define( 'SECURE_AUTH_SALT', '}5Lmr^pJGYq@M*!0fz7$hJOzda 2<(:1n)QZx*9UOu/Ve8lPv+U?q+u&?0L1WB,X' );
define( 'LOGGED_IN_SALT',   '(J5~t|a:H7B{s.gHYL?kl9h>Cjx@$G%TkF@Aq^KM^*W;ar3n+05Sg*VpM_:+o[#.' );
define( 'NONCE_SALT',       '@HmX>`J}m#Rz4*kF<O[^i,9 Hk#J8M?(#3l}-4,!.l9` ~KG`o,5z|4`MT|&H8j&' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
