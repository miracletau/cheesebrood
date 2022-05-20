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
define( 'DB_NAME', 'u127476_wp12' );

/** Database username */
define( 'DB_USER', 'u127476_wp12' );

/** Database password */
define( 'DB_PASSWORD', 'J)pb9S[8b1' );

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
define( 'AUTH_KEY',         '5hturslnflbg8nxw281ib2pckiqurdk3o9yhp8rpg8t2rtims12joryhrh8i4tei' );
define( 'SECURE_AUTH_KEY',  '7psji03ts810o6amnmgvtzfoio3kgcxu5wjoox8k0esbs5ipybtnk1xffwrokuhq' );
define( 'LOGGED_IN_KEY',    'ny3the17mrnpdqmqkyza2rwgobrxr5mthou2tqucwftskzg4vvuh1j5s243lo7i1' );
define( 'NONCE_KEY',        'vobemprcy1su6njfdxv9kv8hstefhe57mr2oxlwoyclwyp3wuohlc13ytt3asr4o' );
define( 'AUTH_SALT',        'sghfw5wtumjpmmgwx3vhms2bfwbsygryqgj0slku4exz7fopnerjp0er6wjjcdet' );
define( 'SECURE_AUTH_SALT', '16ftjszgbfidrbzdxdkvix01bq1vquiyisbpqogknvey68mmq6ldlablndl5ilk7' );
define( 'LOGGED_IN_SALT',   '106bu9gxhc08vt8qnaldbbxhucrfyteeyu0boa1i8q2t49jjkagvwbmavrn1hccu' );
define( 'NONCE_SALT',       '9k5o4bpmno4rhlvm7vzfsb4qs3y8oxibalfeqr7n9m4ybklgjy5ingitvhzmxpsu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp12_';

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
