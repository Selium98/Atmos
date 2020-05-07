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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'atmogit_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '7{LYldS_Z&B/X#NQaKNEb*rJu1`Grdqx;WCw:A&JHw1_d^Jz&-|0wlxrEFRTI3f)' );
define( 'SECURE_AUTH_KEY',  'kzA:A*008eLTDTuo&Ii}Ys_wb~QCVw5xFCzJq}Og]Uc#P6z~Xg! FNw@r*z#zC?B' );
define( 'LOGGED_IN_KEY',    'vm*V{3&}2D?T1<ai%pw}u_dYdmBjnG1R!OFmE!J[9<4r {@854Z-zWD*i<;M`Y(%' );
define( 'NONCE_KEY',        'Q%&U#?>x*9|1N31hEX77ao-!Dg3_1[xgjJ:RZSd:#$>+`&JDx 1g5x$nM}2,Q</N' );
define( 'AUTH_SALT',        'iBDsf)<s>YiQATGB8ZxXe!Xg)~PE{NSn3N(7O#4_6FbC`__XyDjw^++aC4APe3AN' );
define( 'SECURE_AUTH_SALT', 'tN(kM{NqJiWJTMm/FtO(2@n>&b{,T)wcH5.fqP6ptyyN9[GqMt%`nfQ-lx8*gm/-' );
define( 'LOGGED_IN_SALT',   'y<3pS7r5DM%dJ*F9xy-0]8#0f3TPoCeq7rXvsOI8_sWqixY|_+Clu.4m)OMx@/|S' );
define( 'NONCE_SALT',       'ck(Cq$kIs`$qpVQa(KdsAg>$t5=No|6c_~]m@i|$&}4XN`3u&epQz4-g $L T)rv' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
