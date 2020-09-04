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
define( 'DB_NAME', 'ssb' );

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
define( 'AUTH_KEY',         'm?>FB&__;;pxv:e(POGh3lqD;{xR>ZOJyI?zG9)MRZ}=0Gn%7#@7f9*7sdvzm$dl' );
define( 'SECURE_AUTH_KEY',  'zA@MjOu5[gpGI*zE,xl>t6i+;v=_!.@dO%A.<L*^[S$)!o@/)_bcI~Po(z+4c|n_' );
define( 'LOGGED_IN_KEY',    '#[I4XbKI<;7HidzzIOlo%wBUcAhSAa;`M0]}=AYBc%J~&$c7%)K6qe~haD@J=c3|' );
define( 'NONCE_KEY',        '9&S$@m2=?HgpLEICmmynJq=c(HZf/:b*=Ks3(o/7du)l?UkCZNU%+*qJCW6T*m/l' );
define( 'AUTH_SALT',        'b3T#MSc7Z0&(sW&4n3K![M<E}jDC8Q6I+wE{A%K^Wt7xey+VV:CN;amFP9+4$u,l' );
define( 'SECURE_AUTH_SALT', 'j>?gCSU!=!9#b Ww#|GJ-0R]WeGRaP}{5A1*]# mg_K$G[w&aWC_b!|dj6Q$hw|~' );
define( 'LOGGED_IN_SALT',   'RiJT.HlW&*3^nwh1q<*`hOsJgvCJ*QxC/OkW `Iv{BJ$8?eQqp >n_eyhA({povC' );
define( 'NONCE_SALT',       'Ibe@N=6GO$vMl;{CjsnL`NrHD=gytiTgJ!+CV^`CY,[F4*D{yZWA<fY(o@}RKzY ' );

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
