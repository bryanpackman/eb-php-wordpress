<?php
$_SERVER['HTTPS'] = 'on';

// https://codex.wordpress.org/Create_A_Network#Allow_Multisite
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'bryanpackmansites.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
// https://codex.wordpress.org/WordPress_Multisite_Domain_Mapping
define('COOKIE_DOMAIN', $_SERVER['HTTP_HOST']);

define('DB_NAME', $_SERVER['RDS_DB_NAME']);
define('DB_USER', $_SERVER['RDS_USERNAME']);
define('DB_PASSWORD', $_SERVER['RDS_PASSWORD']);
define('DB_HOST', $_SERVER['RDS_HOSTNAME']);
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('AUTH_KEY',         $_SERVER['AUTH_KEY']);
define('SECURE_AUTH_KEY',  $_SERVER['SECURE_AUTH_KEY']);
define('LOGGED_IN_KEY',    $_SERVER['LOGGED_IN_KEY']);
define('NONCE_KEY',        $_SERVER['NONCE_KEY']);
define('AUTH_SALT',        $_SERVER['AUTH_SALT']);
define('SECURE_AUTH_SALT', $_SERVER['SECURE_AUTH_SALT']);
define('LOGGED_IN_SALT',   $_SERVER['LOGGED_IN_SALT']);
define('NONCE_SALT',       $_SERVER['NONCE_SALT']);

$table_prefix  = 'wp_';
define('WP_DEBUG', false);
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');
