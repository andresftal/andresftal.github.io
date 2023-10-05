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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dendrox' );

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
define( 'AUTH_KEY',         '7UZ`-7 ~tb>g?ZO?jD&alNJ@kLCk1A XrI8=MFLsIaDkt*3m[:<=W:.5#Z* }<>#' );
define( 'SECURE_AUTH_KEY',  'K&(#B|:+:ZSRdC7b[5:P!QIUkhO<o:{P^ow!l.;h;v&xi_FW1AU(${hpvkUKGIvj' );
define( 'LOGGED_IN_KEY',    'mw^#Jhj>RB5hz&S6yXKnUYh%s=:a()=3hBd$[+pYngqpP%cz^r;J5Q;4b 9~0^LA' );
define( 'NONCE_KEY',        'fl(47& t#]Vg<v;3c:;5Fz20s7=&M}|]3zYx:6cVV^0~ES^]~iM<###HNVu%e0n>' );
define( 'AUTH_SALT',        'xdyi]|u)nR+M@Zfm,[s*v>3Zv<w3{q*# Xs|LMWsR+TMkse9DaKT=&PY`#c4J:K!' );
define( 'SECURE_AUTH_SALT', 'IpF}nGM)*W$SJbos~DO@KY1;WnmU&-=+Iu; w#8lNG8O7$ITbj>3YS_Y,L[G+%_}' );
define( 'LOGGED_IN_SALT',   'N0]m1,+7FV|sxL|]&6P?oIx>Q6{?tyWY2xGw{~sk@lr;dXKZ,M&;_V}IdHyo&.d2' );
define( 'NONCE_SALT',       '5_*P9jy0QX(=|v{<>,b</8u^FnAH3uEs7$Le@R8wdu-F 5iG&I;`d+7:sQ(65qJg' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
