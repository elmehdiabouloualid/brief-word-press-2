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
define( 'DB_NAME', 'commerce' );

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
define( 'AUTH_KEY',         'Yw[@woA>{paR)Q 5l{=cl! p*jtAk^HfM!5QtAtx]QHFO 4LQ1v9|).p1$v.0jHC' );
define( 'SECURE_AUTH_KEY',  '@IL~aW8Z{cUx8bb@7);mi,p/d$Rwfn6Y:U(`reoE)(R&K&aOw~$g5?AFyni?eTlB' );
define( 'LOGGED_IN_KEY',    ';V&Cw>AKXq><;s!@E>]kY0yTxgdkRi/6ou=y_s.RAx?lfTHN9T);rTNXa5T3Tobt' );
define( 'NONCE_KEY',        '~[8QE*B8#U9ZF$(zH5~^9bhvkhWYs~x!mF?i@IU^e?%.#g/K@1[(WMUkF1&@^OS}' );
define( 'AUTH_SALT',        't9q<a)XSAxGy4p=~vV=tSTcP|Lg@f*]5GgE<lG](&:zib:YF6hOPAZC?)C(4Q}/y' );
define( 'SECURE_AUTH_SALT', 'V).WUDYq5>u|PY(uLR/4*WNH0/%6+ XH]41JGg(Di@#C)Yfe.,b#a*x[ax-CwE&<' );
define( 'LOGGED_IN_SALT',   'ID{U{:x`J9E4DT|5P=@SScnXu*rG9S:lA{c37Dxh!~poRKDpPe`k}KO1;YgC8qu6' );
define( 'NONCE_SALT',       '0_LFh*D+Fr#cT9,Z?ZfXS>fZuO]*6%PqO6/]X)-d).KxJu<q27Sq<kLDG[AEc$A|' );

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
