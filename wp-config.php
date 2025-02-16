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
define( 'DB_NAME', 'gotrek' );

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
define( 'AUTH_KEY',         '9j-Ak)4j|s0watj4t+iw*]:Rvh=FQf8^<X_qM=evC.~z.@1PbG(V^|A!+n*T5XRq' );
define( 'SECURE_AUTH_KEY',  '}U#*z&Mab.Xvl=0w@3,mC<-84sQy:fRU>ecu`z8F-tn,sjQwC8$K<DG-;28K~X:.' );
define( 'LOGGED_IN_KEY',    ']z)i3P51#gtu#SG@?Zfh--W#,<$V#jN:=G@1e ;/8v7 )JH#tGCdb]a<=<S46drI' );
define( 'NONCE_KEY',        '6?|[hD*6SI2I`rTaGoJR3Y(&s^ q~i7?zM,Bz?^O//K54P)H~l(P43GqcMj_OLYl' );
define( 'AUTH_SALT',        'A[|^>%p&(WgKY3?TF)9niC7T03bTcB;ed |1TeX1kc!LjkqxAybp,o9[4k>8f[E:' );
define( 'SECURE_AUTH_SALT', ',4hnylg20K1FOZ/P&*:w1>ci|X<MWo(A)=15*Sj)[Z-kZXb[67:rCXcBZ;B9X:aL' );
define( 'LOGGED_IN_SALT',   'xkDuO.Hh!vY,]d,`Ld(Vope-t`W2ns4!ln4K2In-#<s;;>y$,A1IG9IrnIFd2ki[' );
define( 'NONCE_SALT',       'SU7 a#oWMud{yVW1jG1JL-Qli9tZZ{Efj-&(;7L/4F.wezYR-nP$HB73-Av7,RPk' );

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
