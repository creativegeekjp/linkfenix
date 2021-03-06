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
define('DB_NAME', 'linkfenix');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'cgeek');

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
define('AUTH_KEY',         '!kor 1m|SuG=C-4v/G/rit>kuY;DL||}W=-q/l%SmM@WONdq;:e*:(1l7|?Q[#N*');
define('SECURE_AUTH_KEY',  ',@R`-Pz0u*{2j(.V00lm?>1q>O$C+r+Ss0<5YG wkg+) |M[$iuEW;-w^JgTge!T');
define('LOGGED_IN_KEY',    '~jvo_^iwMy*RN:e~DftZRMT59>4c35d7|JJ}5kVmXu`PtR%SfjR/|jd8@,r{(n)X');
define('NONCE_KEY',        'OMHl:%}&~b4ILfL1z6r~&WlP4`SfD:AUr!HNp~k5F#kC8TXQu]wLc-[tFYqv|tPy');
define('AUTH_SALT',        'ew}UP/aLl1) fxL5![k6^M0ooEV7(1o0wMR`r+}Yik#awV{lm,=<[jO;$FDm={ui');
define('SECURE_AUTH_SALT', '33S7D9Ji`+;75>b;Z8bQ&#Ga(`PE):I^*e~_xKN*|>XcKbbHK~gG=S%,n8)lzfJ-');
define('LOGGED_IN_SALT',   '!+JnnfQs MHJ fQiu?MVM.0pK?oG@-cBk0A ](q1iF}{IC_4|z,K9%)|=3rXUd<y');
define('NONCE_SALT',       '{xEgJjQ-KV{EJ!JJ{~S,A5I]?!6p|}DObm1Bo<#0n-<+QwoiJfSAIo<ae).!$Hrn');

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
error_reporting(E_ALL); ini_set('display_errors', 0);

define( 'WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
