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
define( 'DB_NAME', 'touch1ey_wp215' );

/** MySQL database username */
define( 'DB_USER', 'touch1ey_wp215' );

/** MySQL database password */
define( 'DB_PASSWORD', '!33S6arp-u' );

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
define( 'AUTH_KEY',         'qpxelnriipfqryt5epsfzyljyfvhmv4ygwfmr5qdhmgyyxfnsi75sh2p4hygwkqn' );
define( 'SECURE_AUTH_KEY',  '2kh7mwdccanoslcc41arneptdzt7ertdqopwoo8rmbpd1o6thek1wpvv7wrqfizj' );
define( 'LOGGED_IN_KEY',    'onaormfbvbv7lklryc0ijis9fzqb9zmbnnbmw3rdyrnz8ktulf0zvzuc6tbsbkl3' );
define( 'NONCE_KEY',        'wodaeooh9k0wwuxheligj7zwvqilbwvmfdqbwbmh4jd5xbzjrmxss6vmr3ziwl8j' );
define( 'AUTH_SALT',        'yw8j0ngv8nhtwkcdcu52teanaubjiwzwvgm1itpr7hi34wsalmnd8xmvouyeqfcc' );
define( 'SECURE_AUTH_SALT', 'vfliea1k30n7u0fx1dh4dvx5hergckpm5d7sxhjpagcvt2x32su0677zf8uthovl' );
define( 'LOGGED_IN_SALT',   'szuxg0rcavohls5oz5wz0n5nq4pgtwn1ctjkbk7huadl409ro3jfe9chzpzu5aqq' );
define( 'NONCE_SALT',       'eykub8dzzrfx38wjssdytwcq45g1uhaqfu5wx63jlghnukuduit4tksdz0jzpfn4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpm5_';

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
