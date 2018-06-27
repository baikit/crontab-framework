<?php

error_reporting(E_ALL);
set_time_limit(0);

// Define path to application directory
define('APPLICATION_PATH', realpath(dirname(__FILE__)) . '/../');

defined('APPLICATION_ENV') || define('APPLICATION_ENV', 'common');


$application = new \Yaf\Application(APPLICATION_PATH . 'configs/common.ini');

$application->bootstrap();

//$application->bootstrap();