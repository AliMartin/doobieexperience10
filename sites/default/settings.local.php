<?php

$settings['update_free_access'] = FALSE;
$settings['file_private_path'] = DRUPAL_ROOT . '/private-files';
$settings['file_temp_path'] = DRUPAL_ROOT . '/tmp';
$settings['config_sync_directory'] = DRUPAL_ROOT . '/sync';
#$settings['file_assets_path'] = 'sites/default/files';
#$settings['file_public_base_url'] = 'https://doobieexperience10.ddev.site/files';


$settings['trusted_host_patterns'] = [
  '^doobieexperience\.com$',
  '^.+\.doobieexperience\.com$',
  '^doobieexperience10\.ddev\.site$',
  '^.+\.doobieexperience10\.ddev\.site$',
];


