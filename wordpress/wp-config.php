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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pf_yarianaulatea' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'GA-/1oE&9{D-!-EC%K$O,H9p|nv{)e6~`i*b={3w#19WXQ91wog>Y]e:l_5YL:$;' );
define( 'SECURE_AUTH_KEY',  'M#/YN7BXP1qS/GBB0Sz/>/JPeBXO&)f*dPPF>1sBHk6KsF`E_Vje_$?C;DYF^j/f' );
define( 'LOGGED_IN_KEY',    'W`]rU$?O@cFaT5THp[.nGT)PHwC0*na<$<r]yvW6Q6Vx)/m5I9sCU0Yzfsl5IbXs' );
define( 'NONCE_KEY',        'GZx@VF/}^z?WbhaVhR9~ep0.z45K{Q4/%JbNM;*P<jqg:N<R)U}G@vT8K/aKP Og' );
define( 'AUTH_SALT',        'wQ>Cv]`jvQE[V;*Cw5FA%UhhZ=Mn.#XK;bnl6=ar81A_RWa*8:.#h*Oic=P4=Z,g' );
define( 'SECURE_AUTH_SALT', 'MxgIV7 ?M@d._e/#/.`,dB_`d6SLTfocC3BG(csiX,4+#|=n}t?%N)cx!87W- +:' );
define( 'LOGGED_IN_SALT',   'w+Jy%rf1h9wTuY/[m#},ngw$Xf6nfa/en-nmJR7Z6Ck1vm9G`rmo:tR}5vt!-RL-' );
define( 'NONCE_SALT',       'vbRM_r_XQMIkM:mDc6&1o4H2)v9D7EMdbk3DFA|#GSC &g:|];&x7@dBZBM7VShl' );

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
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
