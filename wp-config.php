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
define('DB_NAME', 'thepromisecenter');

/** MySQL database username */
define('DB_USER', 'thepromisecenter');

/** MySQL database password */
define('DB_PASSWORD', 'oe7MRavoHB4mmj!');

/** MySQL hostname */
define('DB_HOST', 'thepromisecenter.db.11896704.ba7.hostedresource.net');

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
define('AUTH_KEY',         '${N0G}Siz(F-`s:?eaLkPL@mc,.XrRLmzKOkN~O,vnmNa*Q[y$;4Oq<@jeI~_4_{');
define('SECURE_AUTH_KEY',  'JTvh_!WqV:G[E`DjQsUON:VV)$JL!yrxp8 K]<.yEU4nK7_.R1+iL/(8Bh9DW6]b');
define('LOGGED_IN_KEY',    'WTHg11[L/`(IPKvG)[Zp7Ruj?WLNSk$0x%Ugbe#@t0PKNJG/f++%?/>uqhZ~zHF]');
define('NONCE_KEY',        '%yQ`:Q-*=lLfq4o05LN``qv<k[D6p(9knC1Tr.do}HJuR$irCmoSfJ6f!]^uXo2:');
define('AUTH_SALT',        '0,?;2%`Yi#J#k>H;t.8umI0F9GFpqQgg1@),L8N&c,ggxW#~Kb%g<tc,^AYQ[DP|');
define('SECURE_AUTH_SALT', 'pF 4^A~M{{!mxn/$=-PUTrYkTN3eR{rpi1xRoBY*[%Q*0l0M`q{*5#_2x3&457?7');
define('LOGGED_IN_SALT',   '>zMA^0*Oam^&FpO:GG svLk[[,[yMnrRG5BPm{c#4BDpl/6;7$D5w&q}kbA}kH2G');
define('NONCE_SALT',       '|hLDv-h3*)NY>%:NRecVH1|=i^:*<ewNJzFzN=~4O+_/HNWoB40XW/>E%nwe83%z');

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
