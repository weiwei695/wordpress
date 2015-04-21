<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'iforest');

/** MySQL database password */
define('DB_PASSWORD', 'abc199044MYSQL');

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
define('AUTH_KEY',         'W90n,|R#1T~+G}akqR-@XH&}n/RgMj4?X4;8VLd%+<+5[1M)N+G}F)ioG@O_.J4E');
define('SECURE_AUTH_KEY',  'Ys,{]<2HPwYGu@1pz.Ei6wuvS>NYV?r.br6n{4qXbTDm_ks1IQ4+|-~qoyPx_T-;');
define('LOGGED_IN_KEY',    '*f$JLF5NktD-<o*.%G1+UYAo|%k)--E|IC-e##|cXvTSV^F3||e^y@!Lz?]Xeho%');
define('NONCE_KEY',        '}Gx?D-16G=hkJvJsbpzWDWehfaU[gxj^O+G-PyksKD6>Ldxgd/[p0EJol%OqYy5)');
define('AUTH_SALT',        'XtP0g++WL/2DJJutU;1v*/ut16+!-}p?;SQvIB5,-m o*k) .1E|@=)%hd&,sO+m');
define('SECURE_AUTH_SALT', 'HS>i`kJ5u)!TC*wgKR}IgtHn|@E~v%{lMO@KFra`WQ|?2%5+:Dh|46|IOj3,pph[');
define('LOGGED_IN_SALT',   'K4-CrqY?($X5 I7Kpso{5.$Z[sKMGy@K!{#a~XQ_C{3U&2[ooVer&Zv:#hlw->n ');
define('NONCE_SALT',       's*oBZ+QcF6YjQ,m:mLz>;-Olj.@^%DUV%H%%W54_BW~}@PHSsSLwJ)&e]GXNQ{03');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_iforest';

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
