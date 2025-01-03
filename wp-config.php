<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', "lntxn049_WP_endeavour" );

/** Database username */
define( 'DB_USER', "lntxn049_agroot2" );

/** Database password */
define( 'DB_PASSWORD', "Potatopicker7" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'latin1' );

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
define('AUTH_KEY',         '**Y2dU6F5Hi6_)%Z~]3DL4$p<.Q2KrZ4ya<Hv!~Ont`r1yLv+<-#FZ1Ur*:*Dj_<');
define('SECURE_AUTH_KEY',  '5hC0 M|JK$lg|#H_t@(!t6bt%ObOWX&`Odmn?5=<LThO<J9dr82A $.zcS=pF9-i');
define('LOGGED_IN_KEY',    '/:~<fZ3Qa_#@DgEqudBtdrSVC,spG>T/8O**#~VC|XFFe2D]saMzk(;H-trie4:,');
define('NONCE_KEY',        '7|xsTb>I[{?WbLd`OzWl2}mq@|O&G~$;/f7jM6?fEC+nuV|Zlvtbn9j5-kQ76Q:}');
define('AUTH_SALT',        'Ow~{-ELx8a=Lk+HO/-.}VD#/58>+bd920t,adi1fE~y^>1ZXfGUmODG@ZB9]i:1^');
define('SECURE_AUTH_SALT', 'm*-w^E`P9T^E{yPWK&Ro1WwcyMJ6v{{zi!J$+:WN|r^2Ji={y9w~3fT m+Qs;<>g');
define('LOGGED_IN_SALT',   '=jsCP.0<}oV(<+g@YQ/B&&Xt|e_kA&E1IJ+cMgk|3&=(J^u%N^%hlDvd+B@cj!D(');
define('NONCE_SALT',       'C`Y&}c;:9gb+QI+HeJ5v}=xBq1Y|Go~w|^Z,wFDMoV-`u0:z8h+$`o%QO|``IM8&');

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
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
