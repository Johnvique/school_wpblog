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
define( 'DB_NAME', 'jvicwp' );

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
define( 'AUTH_KEY',         'p8~}$Yo+0%=cCjtUKlGk3>M(W.&Kfx>b1]/xPGDhOWC)`wA6uE}NZ7Sx|{:n=$(A' );
define( 'SECURE_AUTH_KEY',  'nmYZsNn 6%EHtywv`2V53G2cPoxveTif_39f)+9BTkb>93tZ,K%|-A)n5>G7hD0c' );
define( 'LOGGED_IN_KEY',    'C5 )C,8DERALA@^n4{-xG%D8]fAvYq~H+>k6H3~w*99yuY3@.nmtcY+pyW,|/_zs' );
define( 'NONCE_KEY',        'wdA)u0HmXWl6.MsX0+@4[RZ%&huoEtqSz>0Fr(]A(c(L0n94Q_Q?s:q_d4pYUIYK' );
define( 'AUTH_SALT',        '~l!$Y[JBq|D/0}Y!1<J:I]z,cWcUvKwJQa$T%#%GO XwJn|8N,DZeVK#e/7I+ZtZ' );
define( 'SECURE_AUTH_SALT', ')B^5rb_S:-i,^itqe/c=:30]*#dEyht+QiX>qk=8nx1~R.?ihy/[j$`&}d(f-?|%' );
define( 'LOGGED_IN_SALT',   '8hJ1/[`,UN<`5v>vU+!m&KA6uw:c%FKO@mSkyZZ~w)C5-I@1Q8AtnT,-TG 57d]9' );
define( 'NONCE_SALT',       '504AJd2/#/3:Y9>wSwF1&9v-O$Y](+=BW2,vVipw.24:!fu,B^AIe>MQ^=2+D/7:' );

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
