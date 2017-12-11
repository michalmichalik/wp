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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'A|yU?{j&L=F]]w$$!2P&S8OK5LnO5l~<DPcS5,qNB|(_r$C#]EtEXOadcX:BH,@t');
define('SECURE_AUTH_KEY',  'gRkWkn26(9UAl|HWCvf+ImErR!aAxs 1(I5fF]s~?!6Z8&I,?AL+W**g:R;rm,6^');
define('LOGGED_IN_KEY',    '{ElKQ8B9/?I0_ksN`h[8Q!()X]A&Ni]ql]5%i*:b;savD( o7dx.HSCNY75dS^If');
define('NONCE_KEY',        '+x]GEL*~8s3kE>UL|2tn(f1`3`_7bW[s?Cljb*i^-lmvgV/.A7{W8; 5p`sAwljx');
define('AUTH_SALT',        '=sc/3s+E=]l4zX&T5%sm*vVbHKMn)az$ytyP7k$`b3og.PVG<w0PHS0Utp3,Q,<t');
define('SECURE_AUTH_SALT', 'j=H@D&_<)pRurQliIJ2Q#I&?#X4#RLyBMG<UT^8]Py*WyqFhw6UKz?,e8Rz:}rcD');
define('LOGGED_IN_SALT',   '8aek;08`-!$jZp?&J/}6UaV~[*yFPw2~u]BF$(>_{Co-KKiysQOx83KLHY=4>U:k');
define('NONCE_SALT',       '%>2pI,uG>RX*U)HL`~3^m=a@#GLgZL`Oh^?z-]E,qAz@O8Lq,;l0~,/uE_$A?Veg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
