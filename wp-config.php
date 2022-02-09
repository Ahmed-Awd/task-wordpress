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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '8,=:bP]%E.c-U>%mTvtPVs.#%4j#r9fikaDF<yBqUA:Ij(`YK:TN}w^B#cBk;J45' );
define( 'SECURE_AUTH_KEY',  'tylS>1M/:y/@#3o3u~sxX:x^GP!=YaH&W:/^(&[}0l#vc>=+A0!Ad/5@7];z[iV8' );
define( 'LOGGED_IN_KEY',    '+~n,)%t7i^`G@*%Y2tz$-Z$3+[Faj3N]|Sb*,nVH{Yw,nN|t{hxrTL;v*bK.M;xj' );
define( 'NONCE_KEY',        'k0r]fYre_$R_f3>nF=DyX-#^kO8~n+c,IPY@t!vW,o?@J$m_x^5%TShqp1R1y0t5' );
define( 'AUTH_SALT',        'V)EOf[)~sYjh-yxN2%s|M 9U4_jIJ;~tPu>7 g;3l:qNp>VH{&<$>3>90j=yPzv,' );
define( 'SECURE_AUTH_SALT', '+Deuyt)<./6A(PQ4Tz<V?5Emxf3d8??gt~ jU3PQd%/x{,MDf~9(M|TRG(-(@,O1' );
define( 'LOGGED_IN_SALT',   'ddd#5!OuZ},Q6uqdX,IFs3s&Aj{B.wn:}f`6f }81!xjAz^rhE|j5eAc(Lt]HawO' );
define( 'NONCE_SALT',       'Mv K0fChYJjQ9tje65jRu Db7T77I1ru*lqLSv&KaO`!Q3<}eT0U#BQz1gRqQ*,G' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
