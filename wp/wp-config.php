<?php
 // Added by SpeedyCache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jjshousi_wp707' );

/** Database username */
define( 'DB_USER', 'jjshousi_wp707' );

/** Database password */
define( 'DB_PASSWORD', '@0[p2o5QSh' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'iupiureijainoh6v8xrmgx4ligkh6p4qfpp73sbjmbgsyflo3xs5rvr8sr7ar7db' );
define( 'SECURE_AUTH_KEY',  'fhbc28rspleiagh6yqs2xeyr8fhi82zuedzbgxgztuoqn1tt5lsquxbmlujydije' );
define( 'LOGGED_IN_KEY',    'v59dfcft4eug2aafah3qls9asjx6htrmy983smib3zwuhcnitbyh24myhsejvp8l' );
define( 'NONCE_KEY',        'u4ubldqqrpzwohzezzmvowhw1fua1u7uuxtthmtwzhjgiktaddhz1lnzpwa3gtzl' );
define( 'AUTH_SALT',        'njm5pc3xfmrol2tv58tmngrq6jbvxwrh8jhftyavcwfmtzeg3vlqtenosq5jaqsw' );
define( 'SECURE_AUTH_SALT', 'jknz3igcemakjt9lewf76ebyw2oca8qabpviqg7maqatjafnnj2ip149vsgcwzts' );
define( 'LOGGED_IN_SALT',   'nmpn82tnw0hvxzdiuyw8aj2sq2gi09w1i7bsgf1m7ksav86tzjuxdsb1orit8j5s' );
define( 'NONCE_SALT',       'obu2u9qghhdck2sisikgrkhhnxmslyl8qy4vie92retimomlh48zmrmyga3vzthq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp6o_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
