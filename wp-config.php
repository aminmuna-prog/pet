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
define( 'DB_NAME', 'pet' );

/** MySQL database username */
define( 'DB_USER', 'rowshon' );

/** MySQL database password */
define( 'DB_PASSWORD', 'munaamin@10' );

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
define( 'AUTH_KEY',         'N@/Le#sON,2Y5Z3QZ {K/^c4=;i5*O,ENE|xsd:I.l+6{uEvZu )z%WeQ3Rm.hfa' );
define( 'SECURE_AUTH_KEY',  'NgILEdH}~:uxrfkd%eGjn-l5EQd1$$H 8TM2RCx-,A?udKGyM/q^[GDXp3dk#&qt' );
define( 'LOGGED_IN_KEY',    'r|K5F*S*H!PAAud~GU;ER-u5 >92&Ebaa?.?5Q(U9I0^Y5XjC@bn9~q5W0~QA%Q*' );
define( 'NONCE_KEY',        'lK5/$sac_HNA+:vSmnAt}0H@Z;{qnLCGjtZy=~DB.f!&<[iP}A?djZU73FTrdf`m' );
define( 'AUTH_SALT',        'Q!aD,o:R7]0vL?Fw+n$|(/$!Le?nDdKPP.eE<g(V/~Uh8GkQue0Y5pRr!3`UWp]C' );
define( 'SECURE_AUTH_SALT', '&Z~BA(J|pa#241==/K.F!omgp!O4/G4lMfeJ*&fDPf3gOQT~PN/uz]ne|m.Q&_%F' );
define( 'LOGGED_IN_SALT',   'z@$5*$&${jvaou*Uc$8oD0D;8GjwFqPvu~MF=*u @d6]+b26C<gHp/@$GYj)d+.:' );
define( 'NONCE_SALT',       'j_KdP% yR,6EiiKrUVFk$gtS&`(=0/]j5I!{yR0jo+:+%3.N{H^_s?zlSz,+r^fl' );

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
