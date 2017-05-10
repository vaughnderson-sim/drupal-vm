<?php

/**
 * Settings file for local development environments. Use this to store local
 * database credentials, API keys, and debugging settings. This file should
 * never be committed to version control.
 */

$conf['pub_site_shortname'] = 'sprout'; // <--- This should match the folder name under sites

ini_set('error_reporting', E_ALL);
ini_set('memory_limit','512M');

// Set some default conf settings.
$conf['pub_utilities_git_bin'] = '/usr/bin/git'; // <--- This may be different for you
$conf['pub_utilities_drush_bin'] = '/usr/local/bin/drush'; // <--- This may be different for you

$conf['file_twigcache_path'] = 'files/twig_cache';
$conf['file_temporary_path'] = '/tmp';

$conf['stage_file_proxy_origin'] = '//www.sproutonline.com';
$conf['stage_file_proxy_hotlink'] = TRUE;


// Define the current environment.
$_ENV['AH_SITE_ENVIRONMENT'] = 'local';

$databases['default'] = array ('default' =>
  array (
    'database' => 'drupal',  // <--- Local database name (required)
    'username' => 'drupal',  // <--- Local database username (required)
    'password' => 'drupal',  // <--- Local database password (not required)
    'host' => 'localhost',
    'port' => '',
    'driver' => 'mysql',
    'prefix' => '',
  ),
);

$base_url = '//local.sproutonline.com';
