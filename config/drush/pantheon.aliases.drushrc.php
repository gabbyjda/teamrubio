<?php
  /**
   * Pantheon drush alias file, to be placed in your ~/.drush directory or the aliases
   * directory of your local Drush home. Once it's in place, clear drush cache:
   *
   * drush cc drush
   *
   * To see all your available aliases:
   *
   * drush sa
   *
   * See http://helpdesk.getpantheon.com/customer/portal/articles/411388 for details.
   */

  $aliases['teamrubio.test'] = array(
    'uri' => 'test-teamrubio.pantheonsite.io',
    'db-url' => 'mysql://pantheon:2293fbe1db6748939355189e304fbee5@dbserver.test.1842b43d-df7a-4ea4-a44c-749e01318388.drush.in:22925/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.1842b43d-df7a-4ea4-a44c-749e01318388.drush.in',
    'remote-user' => 'test.1842b43d-df7a-4ea4-a44c-749e01318388',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['teamrubio.live'] = array(
    'uri' => 'live-teamrubio.pantheonsite.io',
    'db-url' => 'mysql://pantheon:7fdc8cb8df014cb7afa6a7e94beb6bb3@dbserver.live.1842b43d-df7a-4ea4-a44c-749e01318388.drush.in:15969/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.1842b43d-df7a-4ea4-a44c-749e01318388.drush.in',
    'remote-user' => 'live.1842b43d-df7a-4ea4-a44c-749e01318388',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['teamrubio.dev'] = array(
    'uri' => 'dev-teamrubio.pantheonsite.io',
    'db-url' => 'mysql://pantheon:f7327033647041d9b46d77c7da893cb3@dbserver.dev.1842b43d-df7a-4ea4-a44c-749e01318388.drush.in:19003/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.1842b43d-df7a-4ea4-a44c-749e01318388.drush.in',
    'remote-user' => 'dev.1842b43d-df7a-4ea4-a44c-749e01318388',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
