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
define( 'DB_NAME', 'real-estate' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '$ojvZe4+NakxaItndLS6Wl5~:&eWR1=i0SjI/(MO9n.WmsFt5iD^x!_/8q0C>Cg]' );
define( 'SECURE_AUTH_KEY',  '7S*ZOTzH()4Gr0WVnLeQ*,d=~j8;6NO(~{DZ*}H#82WXfH6hD>hIaNOjbqhYzJ21' );
define( 'LOGGED_IN_KEY',    '_wLvy#u1e0^?U) e`k~9tjk}$G7[J&?]HG4J-?B=DoMPl)_iMH($=M0U?G29n]q6' );
define( 'NONCE_KEY',        '[>+%XT1kBXA4zt6<Xb$77UFD-b@t^]7oX}&MUcvi+!i~/ @Q~{}Ks~o*w$lK)cal' );
define( 'AUTH_SALT',        '2ZXT;gY4am=|Mo=)-Y%A{%A:&#(2$8FadpAZ<I;{[b)O4jnw}W9J0c/)qi*dc8Ad' );
define( 'SECURE_AUTH_SALT', '<ah!vkSU~;<wAzM/fVjSR)EpUAuj@M?uglJw )[VEDgyM#,+:2O.q@NNIej[Zq.Y' );
define( 'LOGGED_IN_SALT',   'a9lH~.;:tQw-nzj`HI(yD/ns}^AHICVY2/9EJ(R2EaCa5u(^+$$|epzF9RPQ~~4A' );
define( 'NONCE_SALT',       '>VO:E; M$7E`FFKq:0C6koe@3x/q&:H4s,A[2.]v4Od8<|5,e}gqwmcuSPI^#Nw@' );

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
