<?php

define( 'WP_HOME', getenv('SITEHOME') );
define( 'WP_SITEURL', getenv('SITEURL') );

define( 'DB_NAME', getenv('MYSQL_DB') );
define( 'DB_USER', getenv('MYSQL_USER') );
define( 'DB_PASSWORD', getenv('MYSQL_PASS') );
define( 'DB_HOST', getenv('MYSQL_HOST') );
define( 'DB_CHARSET', getenv('MYSQL_CHARSET') );
define( 'DB_COLLATE', getenv('MYSQL_COLLATE') );
$table_prefix = getenv('MYSQL_PREFIX');

define( 'WP_CONTENT_DIR', getenv('CONTENTDIR') );
define( 'WP_CONTENT_URL', getenv('CONTENTURL') );

define( 'WP_PLUGIN_DIR', getenv('PLUGINDIR') );
define( 'WP_PLUGIN_URL', getenv('PLUGINURL') );

define( 'UPLOADS', getenv('UPLOADSDIR') );

define( 'WP_ENVIRONMENT_TYPE', getenv('ENVIRONMENT') );

define( 'AUTH_KEY',         getenv('AUTH_KEY') );
define( 'SECURE_AUTH_KEY',  getenv('SECURE_AUTH_KEY') );
define( 'LOGGED_IN_KEY',    getenv('LOGGED_IN_KEY') );
define( 'NONCE_KEY',        getenv('NONCE_KEY') );
define( 'AUTH_SALT',        getenv('AUTH_SALT') );
define( 'SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT') );
define( 'LOGGED_IN_SALT',   getenv('LOGGED_IN_SALT') );
define( 'NONCE_SALT',       getenv('NONCE_SALT') );

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

define( 'WP_MEMORY_LIMIT', getenv('MEMORYLIMIT') ?: '64M' )

require_once ABSPATH . 'wp-settings.php';
