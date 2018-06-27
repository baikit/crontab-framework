<?php

error_reporting(E_ALL);
set_time_limit(0);

// Define path to application directory
define('APPLICATION_PATH', realpath(dirname(__FILE__)) . '/../../');

defined('APPLICATION_ENV') || define('APPLICATION_ENV', 'common');

$config = new \Yaf\Config\Ini(APPLICATION_PATH . 'configs/common.ini',APPLICATION_ENV);

$application = new \Yaf\Application($config->toArray());

$application->bootstrap();

print($application->environ());