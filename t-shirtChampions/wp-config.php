<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tshirtchampions_wp');


/** MySQL database username */
define('DB_USER', 'root');

/* Disable FTP*/
define('FS_METHOD', 'direct');

/** MySQL database password */
define('DB_PASSWORD', 'ca123');


/** MySQL hostname */
define('DB_HOST', '127.0.0.1:3306');


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');


/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** disabled by paul, 6/7/16  **/
//define('DISALLOW_FILE_EDIT', TRUE); // Sucuri Security: Wed, 11 May 2016 20:38:57 +0000



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<Z*FclL2Z4BOW0A~Ap;HK{Q|^@t,!?xv-@:|N&!a2t83Y-IX2sR8D;je3-koQ@RY');

define('SECURE_AUTH_KEY',  '+SC>hCz))jFbQSF1oZv.u89,6aFeV3.E`H}o56M_Xd~*-{51eIkSown/3%hN/K^Z');

define('LOGGED_IN_KEY',    'Q1+~_Sz` {F]J6*6+|d$4O]X)&ncmBDM[V4utI@eyK-,*OQowGjt0]Lr(!FC}_[L');

define('NONCE_KEY',        'E+,fuz7|N67uCE3/Z&>3XQfYh~c+^Zf]v-dkd]Gri]I5+P;nPMosp7OPM|zYoX(+');

define('AUTH_SALT',        '4@|n_LsAgxWA%7Jc:{r||8FXW-a5|p9-C*N e-]N$JfE,E1F1}iKa4d%!8|b8& b');

define('SECURE_AUTH_SALT', 'Xy_v9j(=2/%6ZUu?iNF:Y))98&9_7Pu53#S/sVyd?J3@ew)Yu#D%|x1F5C!Z|GvN');

define('LOGGED_IN_SALT',   'p3 -hQZ,jWt*l6md|;.`g`Jt|zPOq4-FvFSvvh<;$MWgP;O9Je{y |RjYb@:Q 1J');

define('NONCE_SALT',       'E:?Pz5o.{(9]9UWohH?ywuGu?$es+1}93hHkSGiV04{D(lApY5JV3g?w,PBz.mps');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');



