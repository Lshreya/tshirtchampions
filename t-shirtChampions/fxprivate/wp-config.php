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
define('DB_NAME', 'champFX16');

/** MySQL database username */
define('DB_USER', 'GoChampDBfx');

/** MySQL database password */
define('DB_PASSWORD', 'GrandOleOpry$1911');

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
define('AUTH_KEY',         '&dLkdIiY?{vD4}M3Z]pTPK-Gu-S=3q8rFDU:vJd%7{z~M>GO=dp^ts^X{a|?f%r ');
define('SECURE_AUTH_KEY',  '}expnHF{r!Xo}w~Q#jxV?v0k7*(5EIS/YXBwYhI7Ni_|H{r6F&EcN[Ez#szQuN)_');
define('LOGGED_IN_KEY',    'M@ 4-8C^.lR.Lnme9teJNCO`KL?{d$h,CYO7MpoSHz9iX*Hh$i!?4 a8q#lRwt!g');
define('NONCE_KEY',        'TT&sD7WA{.kcBj/3QK|S!lkDH[o8]*[LU<-gl2MYTle1/N*z-<YxE#V|pRCU7!;}');
define('AUTH_SALT',        '(l3(CFT/%t:+=&OJ5$Cbn0qEYS)NS-1W2&/J/!X%IYx+6eQESb~/l&6QIL>ZSi~0');
define('SECURE_AUTH_SALT', 'f%|G@SHebepWtP2ipGVAkIoUka&kO**u/8ErYZ%_{ubKc+rG}P{Yi_q-t)bkj(,%');
define('LOGGED_IN_SALT',   '!~u` >}TRkc[)kiD>7.|G3.ukBoq7AK3~=K>*%XWOKA;ThsD776$v**>Fg_-(ug)');
define('NONCE_SALT',       'b#_Zd=*jSeqP1tX6AE3u?{gnarPi_l%b@0b^C+sW?^fUb_/7c $NGrM5M_GX %d#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fx_';

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
