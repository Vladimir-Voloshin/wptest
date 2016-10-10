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
define('DB_NAME', 'wptest');

/** MySQL database username */
define('DB_USER', 'wptest');

/** MySQL database password */
define('DB_PASSWORD', 'wptest');

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
define('AUTH_KEY',         'aSn>}8(k-8.!Gg(a85cg)6g) {*eP`Pf>:cO6Kp+rQjSk!%Ka!Yol<xJiGo>8l)E');
define('SECURE_AUTH_KEY',  'QxOJh(IgbJb@|]MwJ^ial[=@;~F}1fTZ:{T?5Ph)HO<G|%d/bN`h?Bf>HJ^nQ7Ed');
define('LOGGED_IN_KEY',    'Z_Cf-n3vf=<o?Uln[ ~6w<[>J_FTYP3Xdu.pDi)tzT+l<aWzKXxOUk%0g)7sHFoX');
define('NONCE_KEY',        'ilNAoHm.jJ0ge+j+ <Vm rDDoX.o[Us_EhWyTnUHfkV=r1z8yLcJvi xCm~xuik-');
define('AUTH_SALT',        'an|5;(hplS.M(I:^#]8pw%H_T.>,vCTYj]*H=_Yrvf1>Ky~I?BDpoX/fN :!s)p2');
define('SECURE_AUTH_SALT', 'J*6={Y$J&{ud)7#`AZ^F|.lDrShLQ[>dCim1_N;`G?# {olo8F~X158ph3Moye$9');
define('LOGGED_IN_SALT',   'g,&R:,2X#(wjy7ZwIJ9VSKa){:$QhbWcC7{c2%$CJmK<~zxH}5(}G2Xqhvw~#eah');
define('NONCE_SALT',       '6<HH_/L}=2*]5mt3A=8>JNc%r+7A!{EkG:T=glGB0:{CdB&9U2_T:$8wZ8`(Lx#)');

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
