<?php

define( 'DB_NAME', 'wordpress' );

define( 'DB_USER', 'atourret' );

define( 'DB_PASSWORD', 'pass' );

define( 'DB_HOST', 'localhost' );

define( 'DB_CHARSET', 'utf8' );

define( 'DB_COLLATE', '' );

define('AUTH_KEY',         'FG}9yLE]c1xM8Tau9w|@5:U#*,5rkm|K|*Z~v104]p$$P31?+9~j-@wFwzd]wQ%M');
define('SECURE_AUTH_KEY',  'Z^ tP+U2;qr?CltQIv+2,V5:<SeJt3ogTNMM%6W$[!h&=65wi_WxFh0Tn:) v1m<');
define('LOGGED_IN_KEY',    '7RX&W_ge->FRvildA/*Ux.c|s&GgbV70Ly(w5 DMlli4wUK$fsm;Sw)2JelT*r@,');
define('NONCE_KEY',        '^<T-ji+PI#T{[Egq%69nFkjXdhk2-zQhb-~8=h`#|hti-I|OdT6v$S|s2M8iL!?g');
define('AUTH_SALT',        '<xH-ZUKDv`cgAdU>9Ui+3-CF-7|2x|[9:5?$8%T1]D`+@,Ajz@[t@y;s54G&$,EI');
define('SECURE_AUTH_SALT', '-3=U$`X<,Yt7j%*/r7d4U@%)wH8_~l&]QU=pfTB6WLs#jRS; U^DUaey%}>kK, R');
define('LOGGED_IN_SALT',   '>ch|zS=7AYdx3&0?4F  Pdhm|gC7b7h,b  P:k}*;=]J`Xxje$&|qE%J6+fRE>#A');
define('NONCE_SALT',       'Wo%[cIe_;Ao;D-bb?-gEiZ{F8g C9NB&e`Z/($&@q`Iv]; sr-`j:5x$t$GB7xs-');

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';