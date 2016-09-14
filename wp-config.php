<?php

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// sane default for wp-cli etc
if ( ! isset( $_SERVER['HTTP_HOST'] ) ) {
	$_SERVER['HTTP_HOST'] = '';
}

/**
 * Don't edit this file directly, instead, create a local-config.php file and add your database
 * settings and defines in there. This file contains the production settings
 */
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
	include( dirname( __FILE__ ) . '/wp-config-local.php' );
} elseif ( file_exists( dirname( __FILE__ ) . '/wp-config-production.php' ) ) {
	include( dirname( __FILE__ ) . '/wp-config-production.php' );
}

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'QFlzNoy7?2)V*CM)iIG9K6JtE!EZNT(+9+N7TU2o9<mPE+!R,BXFAut~h3MAB3>f' );
define( 'SECURE_AUTH_KEY',  'fIH|g)*2u;XA(VSMT0uCSOzZV#%{7sn(|p9;FAFp RGXyf`<5EfDV9 O7rG7i$Z{' );
define( 'LOGGED_IN_KEY',    'kx(P,?4T0}(~LkUq^k}16r+g[,qN0LyZWktjkAN<~mAGV3(^YsN9]{t:mfvj:$TQ' );
define( 'NONCE_KEY',        'K4tIJ0~h#WY;)@]{+ wsL}p|T|f2@-3P?aH)|=m {F,/fzZV xKhE}R(von$//Qf' );
define( 'AUTH_SALT',        ':}OO/MzKBiQaQiJts*N:|FCy2zj/?}f8W?`1.s&*rh*i-t-)NbXqds--*1 }a!0N' );
define( 'SECURE_AUTH_SALT', '~+e?S]v/Kp`RM:,/h-.u:p_,}VeS_ks<#Gv7q^Ru0_|iA8Qo=#_r^X3ZB^.hDOow' );
define( 'LOGGED_IN_SALT',   '`Y+5+V<pTRr]R/4PPlvM-[kFq(m?QI+|}g22}|dML@~|wxu<6d$t!Ef[T-K1_DZ2' );
define( 'NONCE_SALT',       '$%D6GOax-P~Ae.IUm.W}Fp~L66wg]cQS53;YF|9[)j4&JTTK=#$rrV)2acTo*LW6' );


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define( 'WPLANG', '' );

define( 'DB_CHARSET', 'utf8' );

// Define Site URL: WordPress in a subdirectory.
if ( ! defined( 'WP_SITEURL' ) ) {
	define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
}

// Define Home URL
if ( ! defined( 'WP_HOME' ) ) {
	define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
}

// Common configs
require_once dirname( __FILE__ ) . '../wp-config-common.php';

// Enable Multisite if it hasn't already been set
/*
if ( ! defined( 'WP_ALLOW_MULTISITE' ) ) {
	define( 'WP_ALLOW_MULTISITE', true );
}
*/

// If Multisite is enabled then define the required constants
/*
if ( defined( 'WP_ALLOW_MULTISITE' ) && WP_ALLOW_MULTISITE ) {
	define( 'MULTISITE', true );
	define( 'PATH_CURRENT_SITE', '/' );
	define( 'SITE_ID_CURRENT_SITE', 1 );
	define( 'BLOG_ID_CURRENT_SITE', 1 );
}

defined( 'DOMAIN_CURRENT_SITE' ) or define( 'DOMAIN_CURRENT_SITE', $_SERVER['HTTP_HOST'] );
*/

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/wordpress/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
