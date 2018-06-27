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
define('DB_NAME', 'sharina_stubbs');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8888');

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
define('AUTH_KEY',         'V+ !U3-m;}3v=!U#0[N<6%9R,*c#h7^7_hYg*B+_D0mpQyKIU*_KlG(JR5&_/CRt');
define('SECURE_AUTH_KEY',  '6*+MnucS2Y3Ibkulcd**%<Uc*~ACv%9pT~.,XhIKPqK7$OGPWVLyznk&~m6g|pFF');
define('LOGGED_IN_KEY',    'kNEA^PmmLTsh+j9$:j!yCZBBdrfSIDm[ys&TxlJcix{Wzh$<SEM1a:rMl0K0~*=$');
define('NONCE_KEY',        'RW3.E;r&-Qf;;DQZ0UWJ_s!kOVLlwtrPS(}s/%,2n6~Q*UMax3!U%yy6u([&CqIo');
define('AUTH_SALT',        'rQLKsxWa)OKkk{w.;UgR/-}AB+$NDBw3_yf,,bq%Y9e]>@G&n[ImUMmn-Dm{I5:P');
define('SECURE_AUTH_SALT', '&Xu|nJ^vehB@89.w2U*{.I;W-ARp73Mr iN0#Sffl53c1<sRjh768 1U}_g3W9 9');
define('LOGGED_IN_SALT',   'ZW#S2 ZeuREL=ti-:=fuB,TUKoby7=!/fwfx[k2O2msYtW-&3hbujqrk[,uRU|Tt');
define('NONCE_SALT',       '+r|gavXsVq^8QcE0xm;B-tatj9>.n{qkK?vGo]p.MO8?pDn}H^p.5S!J{^4Sgr+e');

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
