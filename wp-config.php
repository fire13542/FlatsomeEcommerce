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
define( 'DB_NAME', 'wpdb' );

/** MySQL database username */
define( 'DB_USER', 'dbuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'asd@123' );

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
define( 'AUTH_KEY',         '^Z/-+K3HZrluc?%OL$4Jej]E$It<ON))D-lD8&-9mgZSHxK{o+9MN8Y+{,}h $NP' );
define( 'SECURE_AUTH_KEY',  'N~}Dc,R`zrE8`LR(u&L+=@yCQA}iu/brH7IQ64h7rcc~~/%VDUu!-KjFmm{9s]^h' );
define( 'LOGGED_IN_KEY',    'K5Zx.%jS UN|0]|Xb3RD+<@!ZPjJg5scYn1icYN~m].zqZkH],6I)&9+9$,{,Nk>' );
define( 'NONCE_KEY',        '+NNg135:Z.SpducoK]eLo$q;LHgP~81dne0O};FalLzNC!kN4SNFH+HfD}Pq`QjG' );
define( 'AUTH_SALT',        '0)%a}Fl,_U}PwaJ-8TFE+qMIRkBGdC/<Ts7fW+T->EIb<#g*bH![xN@,!$xyAa:x' );
define( 'SECURE_AUTH_SALT', 'i5b0h.WeZd3|ot7cS96MCanH3moh96rsC$]W?c:0Ey9D;|V@S/qjVd(<=7$dNkzl' );
define( 'LOGGED_IN_SALT',   '8V:-4xt4%]!nDYd0z?<r=F_$x}W7#.96F4Bx)g>!:&Lk:y2,x=!X1K>>V2&E:&5g' );
define( 'NONCE_SALT',       '-Q~xeNKsq7])9O,5 >aXNN:([.hcUXZ}BB<B&-ezb&{3`W0ztD$?x_)tp5N@(eKc' );

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
