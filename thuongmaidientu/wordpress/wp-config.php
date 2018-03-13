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
define('DB_NAME', 'thuongmaidientu');

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
define('AUTH_KEY',         'B}26!~9H=Eu^j5oTzi#{?f18><XPFPw ^9v)6P./UNZ2EyXzXq*V:{H(LR:=gaS$');
define('SECURE_AUTH_KEY',  'NeONP{~6pg%3Mv<w5VE{!kpMAJceE<pKL`SWni1 [%efH;CZV!r,I%)O~9psU/4=');
define('LOGGED_IN_KEY',    't>;~O(`oj<9|@|3^py<mPFM>eujwyIv=a*044j2ejdX@yTH5i%:0@#ZS=lr( &Iy');
define('NONCE_KEY',        'Ndt`HGuHBL7da#Ph4AR|M>q6{TDY`qFU,W0RH>(GG=Pt#_)mp(Z;J`%s.8Tgi/%(');
define('AUTH_SALT',        's-5((z$v-iB2N</,=^Ji-U0lC(3C!l=`@?=vH/w>lO^XjCt[_G[NrFtCgX>3`YNF');
define('SECURE_AUTH_SALT', 'b.ip!Y9b^%jg@|1Lxx]&+t?_Vpbl~Oq~ Me^3^>1NIY@-TY peqYGWQ/}fZ/ZO>F');
define('LOGGED_IN_SALT',   'eyO4|#e^&2-f,uh;w8*uf-Hx88z00[KPD0Xa@-:wk,=hEKXA!A,S,TpYWCNbM;q4');
define('NONCE_SALT',       '6}z*KZgs~wRXx;be|Zhmc!qd`{t0T+ie.bT[nU@{TzW8]w&SEhaZadp)}+nQZ|/@');

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
