<?php

/**
 * @codingStandardsIgnoreFile
 */

/**
 * Database configurations.
 */
$databases['default']['default'] = array (
  'database' => 'drupal',
  'username' => 'root',
  'password' => 'root',
  'prefix' => '',
  'host' => '127.0.0.1',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

/**
 * Configuration sync directory.
 */
$settings['config_sync_directory'] = '../config/sync';

/**
 * Salt for one-time login links, cancel links, form tokens, etc.
 */
$settings['hash_salt'] = '1PJQK57tJuvUPrWGI9GlzGwq2tpFBgBe9k0PjOCuxI6cleBVy4mXZrP9h6Fc3ommWroUAUg1Lg';
