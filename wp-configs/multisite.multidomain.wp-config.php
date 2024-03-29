<?php
/**
 * MULTISITE MULTIDOMAIN WP-CONFIG
 *
 * Example Configuration for a Wordpress 5+
 * Multisite Installation with multiple toplevel
 * domains ( Domain Mapping )
 *
 * includes fixes for wp-admin and network admin
 *
 * just insert above
 *
 * That's all, stop editing! Happy publishing
 *
 * as usual
 *
**/

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'mytoplevel.domain');
define( 'WP_HOME', 'https://' . $_SERVER['HTTP_HOST'] );
define( 'WP_SITEURL', 'https://' . $_SERVER['HTTP_HOST'] );
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
define( 'WP_ALLOW_MULTISITE', true );
define('COOKIE_DOMAIN', $_SERVER['HTTP_HOST']);
