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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '5R}4J&mQKFUB#l/;ltN%}AAf^BA5<0Z2IF<=$4I6G6i6|?g}40-mwJpd=8TFWb#.' );
define( 'SECURE_AUTH_KEY',  'HphDtSni1(r*Hm]||)V.>4(4XfQe?J[:DE_x(v/RmG3;palr,iRmp*#Jzb4-fklg' );
define( 'LOGGED_IN_KEY',    '7d7)R!iWlI-8xB0(klV RVS0K$Y!5_*po2Lv@hK_NP@.O}4[y4jn)PJ-= }3T?]v' );
define( 'NONCE_KEY',        '#kHV!-lJ4A6A];neJ38;}DiEpYd^7q<jcX8qQCe#E[=-ARpkPSF3/WL&YuTx*DxH' );
define( 'AUTH_SALT',        '^$dEG$SXl+xNf?M*ufTzSdLyeyktm3FoE{Z?Sw=%h5<#Y%?FC77H}QN]/EFt(1;H' );
define( 'SECURE_AUTH_SALT', '=ux_/0lg<afz#Zxa _dn#Cha<&)07ze4y<S_w5Mt+nb7)9,ZqLhIZUQ.EHMY+$[:' );
define( 'LOGGED_IN_SALT',   'zk`Q5(B)pUeX`B,/{@e,qMkZWy>NfoK3ue;{l<:|NJTJqjgOE[XD{ww,T6cWx8l3' );
define( 'NONCE_SALT',       'r&Mi#*f/,Ux:G:U}]9^eq{.,B@B>.SlCI{tJ#INK{$O0Y2Z$FVN:9Nm8,:sJlV9b' );

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
