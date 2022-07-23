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
define( 'DB_NAME', 'vanquyen' );

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
define( 'AUTH_KEY',         '_s~g4&S,QR*xxM9SHAl1]GH<>Q[iFuRsMgtIh&Ez=WJ@Q|k(1]<1C`+)?}#M%W:,' );
define( 'SECURE_AUTH_KEY',  'D`7Flkonx7b6ax8,cY5}ST?SD[TJ+5Qzy:(f#B+$PpWS]g0JUD/I5he-#n[}I;@ ' );
define( 'LOGGED_IN_KEY',    'lOHRyGO$F|%XA6-=:> Jih0vS4qkMS3<r#khM0JN5}./D)#.gh8p-AW`>15uVd4k' );
define( 'NONCE_KEY',        'rjG7yiYN1)Hsrf7Fs7t>XZ`/vFNr1DxAig]v=/}.hm?c5(cpMY#b^8ThweTrRn(=' );
define( 'AUTH_SALT',        '/fGU5T=lZ~rfORO,B>%3,%[^F|A8W$}Y5vV[K.~uZJrB+!_Qw=4.%MBt{cq&F!4q' );
define( 'SECURE_AUTH_SALT', 'C4#8z:X=ImJ8_^}p<DtZo[ai,fnj/~/bP03)3G?8<Wbm]Fca{SFb07Q(8!*B]+bt' );
define( 'LOGGED_IN_SALT',   'cpx{JlsZ0nBPzwjP~Gaxz Ta?Q(Tz]v6bvah6:roZZWHBmINI9jp~y?);u!{0Xf}' );
define( 'NONCE_SALT',       '6MchuAGZ>-mGdLH^EfFIQurzQg9t/k3-@DbS=3sXw#:p*8S:a]9C?t*$~,w?XP{a' );

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
