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
define( 'DB_NAME', 'gilox' );

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
define( 'AUTH_KEY',         '$!HN.V5oKxIejEibDL$GEv>R*UV}`eRCc8_1A4/`L_uU%wP<r[^KvO}^{Dr4&)cw' );
define( 'SECURE_AUTH_KEY',  ')hm.1<,.TlMa4hL/9,p=}rhEFkrGb6V%Q6QJ4COr1LPL$.B3gwe`=FsRBOxyJAPW' );
define( 'LOGGED_IN_KEY',    'YYeyRpCczpzt=.?r^zH5zJ_%Q_EJEXS+x&]RQwRck w0eGuVDaWsL)PB7k83!A1,' );
define( 'NONCE_KEY',        '|4l~5Cha*TvX,iuyN9S[9it$fWt/#F9_SLO+Sr^=,YbFTF9.3|Q(03<s%9cqO{RF' );
define( 'AUTH_SALT',        '/>IpGBd$W@7T1$RsEaBnj%8vA{m?l;P)M5BUwIJ]agR!b5MY@A>qzirV4/P^Y~q+' );
define( 'SECURE_AUTH_SALT', 'DW_KJm4r2<Li?m$F~kPMrwB/qyKIH3QWK@njba80A?lH%Qtm:_>kIk6SvsKG.nLG' );
define( 'LOGGED_IN_SALT',   '{R3J-IWdf$#Xl/fn1=~Jn{*Jb@|-a8t]S/RNoJ.|)|/hkxu#l&,@1IVnW3kU6y3}' );
define( 'NONCE_SALT',       'd1wpG>sqdo(K8$7MU<9{CI4i[j9u3K6T~[.;#oE`[o;*z$K[-A5:+dG|*ebVGN8O' );

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
