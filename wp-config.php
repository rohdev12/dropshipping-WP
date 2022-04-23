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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'roh' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
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
define( 'AUTH_KEY',         '.{g>*)#~zXdr%OWHgwDF?P<=|Y~R)[A1ch,N!e__o&gB:I)44kRJ[Yx|j08dQe3;' );
define( 'SECURE_AUTH_KEY',  'FxhYE!:}6QL,EOelg0Gg_SfHi]//4y^H6rtokJF}aP2EtmO#GQN,nqL6V;eNCHKa' );
define( 'LOGGED_IN_KEY',    'LnUj2ryhgTGEUH_B*;^/{o+CO]*l2Zl*Jq/[o#Jgl^+O1mk8J3;]hG:SbjWW)/0e' );
define( 'NONCE_KEY',        'IKg,I<1 BKPm:D7RA..}W4%7QTm/Vi-Fm^)3h{tV0G/5wd9:F9XqxC}j{!%>Ju}G' );
define( 'AUTH_SALT',        '6-fj|<+w$u~>(Ln%VQN_O~.A:|zJ2bCe`fXp<zgJ_j_T[y3J;qrk5uiJlK9]eVF0' );
define( 'SECURE_AUTH_SALT', '`2fvHU<Jm.9P+mGu1*-|)@+V=.b+2em%0* Pi8/<l]QWPBs !m/luw?Sj}fN|8U@' );
define( 'LOGGED_IN_SALT',   'aT^ri6d,~*Y+p)VL<KK&F|Pk./VG_^q7:$Y=ROd?317L(Doto%johzy&Yle9(I+A' );
define( 'NONCE_SALT',       'pTyXWiEGO,tf]LKTl9*<C+MM5.6K%;1Bn(|fOo{pnf>Z!u+F-hjSy(:?7a1GGWd1' );

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
