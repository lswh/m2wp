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
define('DB_NAME', 'm2wp1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'proot');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'F1pdo7ys>Y<|MZaH|AO/:Xa>`QtNj(,44e+jQA]|QDnq)EJK5V+CX0;q^;W!b=4i');
define('SECURE_AUTH_KEY',  'T!IK[fO!E;W!F5@&a39YBets?#:&eC{IAY+fB#6Tw%sKYv34FJ6QSruZm8-3m5Bn');
define('LOGGED_IN_KEY',    'wR4Scx,nW^+F:0h`LYBnSuKW:R+FO*]42d_i@J{9jZ.iCaP7h::-JkcIv?=Warr:');
define('NONCE_KEY',        '7M0- @y&~ICNwAq,ZC^@-b?9fzL~K<e7@RiV{@Wi,==%PTBk72ibhtKP2#k)}U+B');
define('AUTH_SALT',        'Wk$#QQ#5hw#t^ti(R{iGUl/Gxf3%|vsdRz+_VX<wh|@cqs+7JW2=B +{zbyJx}$i');
define('SECURE_AUTH_SALT', '>iDVT_LH4$W;&gA!!n|+9T/g]I)J|/ oYl2DW@ql<9_%F:~|u4Jy%9+q|@natC@e');
define('LOGGED_IN_SALT',   'T9N t|z:61>N5?_|!MCw5<Hm`9-#?a|Mw |J?VeE#V,52a6Q>^G=6L/>qAS)%<p2');
define('NONCE_SALT',       'kd^(#h=+99`RHn&15$b}&fKVCpzdC_9@V==i(^LK&bsP&R^XMB=x=-G_QhnGXBz(');

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
