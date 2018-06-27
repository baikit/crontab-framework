<?php

//\Yaf\Loader::import("Common.load.php");

\Yaf\Loader::getInstance(__dir__ . '/../library')->autoload('Job\testRunJob');

//require "Common/Common.load.php";

\Job\testRunJob::getInstanct();

//$application->execute(array('\Job\testRunJob','getInstanct'));





