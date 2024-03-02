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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '|`TWK>|. c`&V*c%=Sr fAGtb_X9POeIV):xS<:Tk3@aC4m2rQy5}i~dVv_l6`N8' );
define( 'SECURE_AUTH_KEY',   '#*q/mjr(QVc0$MvEoU15tIn(Cu.$SdlD 9Dr]9Btw)j?C<KQmdu.GfKk>Px;Cj;-' );
define( 'LOGGED_IN_KEY',     '_1C6.~/6L|1Y?q^w/uNsx[Duc}90=8+fKK5M4o[:dmnWv)aFfg3L&:3=[Yv$.A/C' );
define( 'NONCE_KEY',         'z)~ QL8[7!S<b(kT=/|QLPA{nBmNhmvdp*@<q2D=>qj@ukH|MQ/`@Np-P7n<]*2?' );
define( 'AUTH_SALT',         'F7)&FN(VGDlKPAL*}^Y%ui]J}6FL<WQ0%lVWqI26Xr,8z8UHlm,?+H3.?y-5mS!}' );
define( 'SECURE_AUTH_SALT',  '5Pz-4bJ=Keuhwkj[XaSJY4Z875 *92s.5C{dE)Jr,(m#q4nr=@0ErQlB&PlgHYhl' );
define( 'LOGGED_IN_SALT',    '><)A5wY:0xXvwk@xQip&/%!ocX{zO.;VZv7 ]( K@1<Ca}&DFz5ll%u?O9nm|*B|' );
define( 'NONCE_SALT',        'vw-NJcMsJ@k~w%|hSQ/npAd{pH_Q/Abp4gF_VH&?^@M77E9tb.zzBM8hW:V*9i}n' );
define( 'WP_CACHE_KEY_SALT', 'TMAp00Z_60vY7pDRqo?~`HtGYXn{lPV`aDql6>Kc]Zi]Dvy}w$7$-!pubV+,pOAt' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}



define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'localhost:10010' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
