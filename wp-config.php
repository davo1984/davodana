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
define( 'DB_NAME', 'davodana' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8888' );

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
define( 'AUTH_KEY',         'j-K_[k2e>_]3S]OjA5wF$BIQ2J?Vsqjx!}6=VfG]#e%K;$T${/{9[@{G$_NlnEIH' );
define( 'SECURE_AUTH_KEY',  'w`g%a`P]=m79o/0J)ZPZr1rQeav]?K&QS,.sE@O<PQxH_/bw`F@)$o_d%^ED(EpT' );
define( 'LOGGED_IN_KEY',    '#m1$%s<`<Q1=r|~5RK*M9B8G]C_(eb]{;aa]NZ42=6X<s<w+M!Q1W5VB#W7$mZ>T' );
define( 'NONCE_KEY',        'E]PUL(W`B/IZ3:5_*eN>Hqf1ZLq*p=:M..(zxl_XWU[l!KAn=[zhglQYyy(/jdeQ' );
define( 'AUTH_SALT',        '[Z ~_C|#QB;vSQc`XG*g=.&7$rmSV_elSGJl164F%LQ<%r>Y(a(msYkv#ods(E8D' );
define( 'SECURE_AUTH_SALT', '12(i3,XkRK)eGB~I:5UN:lFmdWik8Q}r%^|W1iKvOXB^xd_6)9ZfPs]=8[TW!CGY' );
define( 'LOGGED_IN_SALT',   '4~_MTG%vcj4I,&Js$FOJwJ|6fX LfAMSnM7uQ4uG#?Yb`Duggamu*ece:HPW(l-@' );
define( 'NONCE_SALT',       'Vw!|(PNz)jPK~sz8cYM0]pgT*#qY=$g iN`X]ec57~nQOi%xs[mf0| nUpSMW{xs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dd_';

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
