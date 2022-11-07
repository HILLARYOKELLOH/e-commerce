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
define( 'DB_NAME', 'E-commerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );



//THIS IS REMOTE DATABASE

//define('DB_NAME', 'sql10543852');


//define('DB_USER', 'sql10543852');

/** Database password */
//define('DB_PASSWORD', 'YwXyYBi6CF');

/** Database hostname */
//define('DB_HOST', 'sql10.freesqldatabase.com');


/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '/I@2n(n~q+D@AR7wU/Z19pHfS$YRG@@lC!#GH7h>bMmC/ +%0Q&ar7[mF90Fkd?K');
define('SECURE_AUTH_KEY',  '*]w:B9Bnp7rrb&&H3ihC,q&L?hJA=Uv?`(vN6M1!hgM1Lal|ehRY,/|r-e!+{h[i');
define('LOGGED_IN_KEY',    '7.$o7Ji1JI&J(n#Q{qLB]Od=O,nM!p!A%&lPF@yd&p>|14}-;G}*e<mkVoPZCak)');
define('NONCE_KEY',        'E[v&wNhT(Z6M:T,.4.!~G[)cBCQVf&!b+FT ,)t$QY8m[vADXM@%Qe5*jZBE2o~B');
define('AUTH_SALT',        'eo5kdP^9j=R%oaxtSTxo0nds1n#<KK&[T1q,|%|kRwH^?mA6J93+9<R(9+,OR3.6');
define('SECURE_AUTH_SALT', 'hfMmUl%CaL&hi[kg*I+}rABAeuor>7kT_;l~bKG3h?l@hk=$d?hZ<K;8a.6YcP)#');
define('LOGGED_IN_SALT',   '[Fzsl13CQkUk6=7u5zGUYP> ;Z#&i,Q(x1O3>zq0WC:HbDLfh2Z+<&XLMR6Cnc2F');
define('NONCE_SALT',       '-O2kB?ayl(Jum=)1(tUb9s|/PHVq?Oe-lt$!MKaj;G;MugbA~u%sa&&J/5(H6>Pq');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
