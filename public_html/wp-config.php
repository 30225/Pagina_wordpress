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
define( 'DB_NAME', 'id19934334_wp_77d7a4bc83d451d240bfcadb5d1c17be' );

/** MySQL database username */
define( 'DB_USER', 'id19934334_wp_77d7a4bc83d451d240bfcadb5d1c17be' );

/** MySQL database password */
define( 'DB_PASSWORD', 'adea2033fbf4b1bf8224390c2bedf6d190747c48' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '[nI;3euU.}Z|Ah[Ws45[n$~0/~j-#rgGmq%$aFV-tw`lZ<yZ348Wf0ds!0S/e-Le' );
define( 'SECURE_AUTH_KEY',   ')2X~]s7jT4Ze:3E[!(=QwK5Hw6q^ &JF 8e=1#4DA7PpzH%g~{}K(o+&`@TDngj)' );
define( 'LOGGED_IN_KEY',     'ABMZ2esVLcOhnS1SA(M~J<!iWij@U7uH%@?&)UNc9xlLPF1D m,;RR<.h31NB|E8' );
define( 'NONCE_KEY',         '~2>XAx(Uarjbp3(1$ylnSh2)Ll4I`,9D)7E3N<e8,=)Ipd`[.M 6rP6@::EC/FP,' );
define( 'AUTH_SALT',         'a![..,/1fO8oi P8GCx5F1v >IVI91+S}A?0jMuwGm)H$*ZSU#`j:,CEn%W>j /)' );
define( 'SECURE_AUTH_SALT',  'N%4u+qiQ!jgv5#)vSx;LsC {s[[`7FsT>#&0(1t2=K2ug2oq^[>(g!~^YNx_W1~x' );
define( 'LOGGED_IN_SALT',    'mV)loKi2m9nxp#;A?W(=L4gjUvMQ|L)iFJ$|zE~NMC|wf~zbb- qz0Z1}l,vrvs4' );
define( 'NONCE_SALT',        'E3Tr}D`Pqa=_e_=Ht,i5vY&9^=1M~Ckg#C<Q6SU1+6M`0[udMQ%N|+)yVVYaM/BC' );
define( 'WP_CACHE_KEY_SALT', 'ni|b[>S!)UrcPZwEve=dixD&9+<FRaZ:a _vG9`9^pN+;0d*l?@>2wO7,vTP[11X' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
