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
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '_gxMTlFj5LOeqUj>M.-aN>f^|x_E@c9ylDoZ28^Gu2.V)!$$jZV3;)8HK;jR&s^`' );
define( 'SECURE_AUTH_KEY',  'u>.LwP[_.O#a~v(gm&#6|?`1C;3xMX$yc &u_>A7rz*p*hg2D@8RNiVmEtTt&e^B' );
define( 'LOGGED_IN_KEY',    '*JlDW&lL!.DfGF|9vbdHNF,,k?WyKa1{dJ},.QOyt|u%FY#uc*BL_a+ni)oSrR>^' );
define( 'NONCE_KEY',        'a1`No(~7~wo]?)bV6`YNZ{Dr1%Mz;<QAH]T/1qa{+6*#W}N_jXpAeV8Wz}5%u-?E' );
define( 'AUTH_SALT',        'R(%Cyv*GqviX$34thmQ^$i{@^5N ls[5z;CL]j>uiD)E=:C(vnh]L7:>)U0`=Vn^' );
define( 'SECURE_AUTH_SALT', 'f.JGY<K1.7$m:Et0b0HYWv^P;mHgW;DD9J43Pu=gA>0!0<AhR25?>9T/y*xuI5[4' );
define( 'LOGGED_IN_SALT',   'E>jt{[kPpTlZ|,xSms7}[.|zf4hwGPVg^eiR]sH)Fv=LpQNO>Ha>`K80:xb:ezp}' );
define( 'NONCE_SALT',       '07zz;%T;qRE?WaeQJYbx>J@jJ3W@wR:H&~!s.Gc07vPMJ;h`UyMRt(l+M@9WiE<[' );

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
