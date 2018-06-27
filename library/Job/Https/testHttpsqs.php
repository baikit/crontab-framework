<?php

namespace Job\Https;

use Base\JobBase;
use Yaf\Application;

class testHttpsqs extends JobBase {

    public $a = '111';

    public function getRecord(){

        print_r("my");

    }

    public function run()
    {
        $this->getRecord();
    }

    public static function main($config = null){


        if (null === self::$instanct){
            self::$instanct = new self($config);
        }

        return self::$instanct;

    }

}