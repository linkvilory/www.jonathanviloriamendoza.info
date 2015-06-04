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
define('DB_NAME', 'jvmglobaldata');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '_P;.$MgX_MtLr<<YAC(^HJ/T)`<z->wavZBA:xG,(h&)#z[VTmmW{Lkk>;%[3FOO');
define('SECURE_AUTH_KEY',  ':J$pgL#T-jS-E>h;bx/mX0)@><7FR^|-],)8&n{(37tM9NAJzmmF+o#d-EB[Bk?x');
define('LOGGED_IN_KEY',    ':p~ori&8m:v6+!N]U---WJ!#jm8Lri20beW9F-]e-rZ:HEl+l,8h=CFirCnmzowA');
define('NONCE_KEY',        'p2]HU-4zr+FTTnaI DZ00!TT^P=%fg$CFX(T:HV4X0l.LhT0q;N;%%zY1=?Jc*n2');
define('AUTH_SALT',        '#D@GEGNi-=}!.}CU2|~@MQwHBhy7@!lJ`$enToF-N[Nya{0*6Z*4o$$0xr/g(|0U');
define('SECURE_AUTH_SALT', ')w|>6P%8_gzioq#GM(MUwa9l9x7S,={_ aaw7 Wc2{58=,e7#e^D.W(qpxe}-.Au');
define('LOGGED_IN_SALT',   'kAO?(b|o7==3}Qa`l9Mo4W-RhoT&mwiIOh<GWI)KvzVl]*7&C;:pf@!f]+X@xkFh');
define('NONCE_SALT',       'VU(9q+!L*|kxy6vV>kj,vVCIoH;W [+XBlcRp:n%{<wBp6V2&.iG~|.j1Dvc3jrf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jvm_';

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
