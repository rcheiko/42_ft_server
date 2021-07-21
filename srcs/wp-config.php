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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'roro' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2y^&ct5z/+YbP2i-0[,q6kHISom67W$0$NZVwY5-2`g@PthI#[l]_^o9N2?a_y!(');
define('SECURE_AUTH_KEY',  '+R(cH45|]00qXi:ZOK1^vlN^no0rFD-2T91Y,|tviH#-V*=zCyf/#Y[}5$GQS^Gt');
define('LOGGED_IN_KEY',    'HP!o$dU~uq@W{AOb!l);-#MP]Skae]7RWjYj8Wdef=PY%goT-qt|rO#:Y}ic$m 6');
define('NONCE_KEY',        '&KF!QKHKeaC8ld$(GC(&O@8n1[,Bn,}o@rNhb+e!1p=fQ%fx36ow[y;u)d+ XXYh');
define('AUTH_SALT',        ' 1pFy/{nm0nl`h)?m>o0:NiHX!Q{x88SldkqY#_}>u:{: R2M|uzx+.tNjA9R0`C');
define('SECURE_AUTH_SALT', '/T-:hI.*@u-IR1~|TJ8+I|x^Kt^RX/iX>)LH4U6L= n:i>|Z$,CLiLiUGx).+<qk');
define('LOGGED_IN_SALT',   '`^5qb$a*q& zpk[`_w&8a3OfTwZ;|h-xxr!@&|x~[BKnMS(Rdv/Nc4}9lli*f3+0');
define('NONCE_SALT',       '^PUj?yWYYoUMT+OWjir[Tp8fvdr9Q0qM8)`K9rOcE,Dd ?>#{ q8&]=tGr9C|@Y ');

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
