<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WordPress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>=)D(Z?ZBT,`U~Lm&-lx@#bBlJTT5LHc7l(^!*AwH/6L,vaa|0kEfej70-{Fa`^@' );
define( 'SECURE_AUTH_KEY',  'i7!c@Op-=w6BJ~Nl$h|H]{E[7}nxd^nPlhrON19-bh*[eY!4RLW;F_tF5cx3)RkD' );
define( 'LOGGED_IN_KEY',    ',;SUd3S]fYzbrFz@@6{|s5I`y](/FTVN|Pq%=M8BZ<o6,~yW8fL+_s(nZoH&:Q~D' );
define( 'NONCE_KEY',        'MJ]gZ-}O6jB&,}4ce7l|G:;[1qA+0:=u=|oMM? s5XWWkF2DjxK)?fdNl0ad2VHC' );
define( 'AUTH_SALT',        'IRO)3_fk[G$@Au`q_tT8gqX/j(6sLM_?a1^LoXZ;}1|IO_=ml.O@: ,0X%UA{t%@' );
define( 'SECURE_AUTH_SALT', '+LH%)kecI-zmkI6L}[nKsDz5U0XH/ZH%P-3+Yc0L`wsUq=_nK3fS5z2M+c>Rzo[^' );
define( 'LOGGED_IN_SALT',   'cwzJx:RaRQF<1qYtNmfAqBZ40>k%Ez4z[(@ARD/OJg>$Ne%gTQ_+~Bw~d{186`uW' );
define( 'NONCE_SALT',       'p+<1:A$m?7Wx*8F0Sz84=a{<3nax0g~6(!19_j}4U)LP~7$Fp=0(|m{uYJVqP6?Q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
