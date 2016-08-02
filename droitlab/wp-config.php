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
define('DB_NAME', 'droitlab');

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
define('AUTH_KEY',         'Dq]D*gdjmA;K%&Ic?rB7QQ4RKDDfr$7gA/3&_9p8LfUPi&HQOx$Gua24!{{j$Kh:');
define('SECURE_AUTH_KEY',  '$CoYF357PC3|y[.^jR=eM#fo(shtNa#prAiFA?v4J=@?ZYjgErtOd@B4RGEC)bC6');
define('LOGGED_IN_KEY',    '9~bjR-BA4-=R2aJNftnx-,>T}=U+`o7;W;*7.uReUqK4VM`9?LIM3h~lSFi9zl?w');
define('NONCE_KEY',        'r#,c^Mu3PG[$O(!fFqD0f4!X?Kcg^]|9z0)L5tnG*35o}gUx1}3yy3z69abYI[Pa');
define('AUTH_SALT',        '$wx),L)|:>|M,Qmjv>})<vKO(=YK+[X^l8x}3)*]RQu<qetFqZ&eA7%X0s>0BtRj');
define('SECURE_AUTH_SALT', ';~!NhWE4Zu6L0Td$x05wF}NsX;8aC>>OMVV|dZgWSq0|Ddr);`<6(=ETN;,Y<]Qg');
define('LOGGED_IN_SALT',   'OhBI.lvuPBtZ(QmQCk(n(3k#~Q:7FTvHJ&9ko11?m`G9ImDsf(Q]wQ?]O#GsK&,%');
define('NONCE_SALT',       '`.C UgoUrq.T~ mCE[DUU.*WgXUlVf*`-t1!PXY`d(3nadP:B<vpHBkQ.(G1=T4f');

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
