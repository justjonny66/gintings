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
define('DB_NAME', 'gin');

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
define('AUTH_KEY',         '-,H&C{7}d#tLw3~|{pn7R#&][~SPe^m{KG,ETo{=mbAqh9:G-A2SN^mPM8O+!e]Y');
define('SECURE_AUTH_KEY',  'hV8QPZ2O~pUh;42_]*eZ%65u}zvd7}9WAb LkkRV%$9mtc $,s{loKTl.9|_K[f4');
define('LOGGED_IN_KEY',    'R;W^N`/W@J?p8Ik_p8--[Nc4<x S@jF7YJS^26kR;x94p{E$S5S/UQ,P7|wpx@vN');
define('NONCE_KEY',        '^9agOfM_hbKt+;c4g`z~NeZg`o9%NHDan@S3Dr{oX!^/f^}(&r9/e 0zAJEjR(#6');
define('AUTH_SALT',        'epR>]oMic$}j_$-+-KRj?h)(ihEU]ia[oZG.{,N^2O`_=<puTIy@O}B-4HWA<46t');
define('SECURE_AUTH_SALT', '~Gw(S=Zv=|d+p+E6X0T1G4ebB?.Xk`<V%Q&}tccnwTI]SL0&;yx:}/=GmmYK8MQ>');
define('LOGGED_IN_SALT',   '2&+n~hy^q)JOyE5XFtzjOC(ry?&Xd4ih(qd2+xWl5)|ZL|Qocq$r~Sy]fD<A9muO');
define('NONCE_SALT',       'qAN-Y$)W`:L]e<hMhx+ExlR5jK3z?HF]c9XyS-g)1l8HFk6GWk7nGPz-Rt_Sz%gb');

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
