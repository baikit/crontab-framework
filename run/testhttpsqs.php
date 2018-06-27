<?php

$params = $argv;

require_once "Common/Common.load.php";


print_r($argv);


$application->execute(array($argv[1],"main"));