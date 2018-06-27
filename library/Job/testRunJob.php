<?php

namespace Job;

use Base\JobBase;
use Yaf\Application;

class testRunJob extends JobBase
{

    public static function getInstanct($config = null){

        if (null === self::$instanct){
            self::$instanct = new self($config);
        }

        return self::$instanct;

    }

    public function run(){


        $config = Application::app();

        var_dump($config);


        print_r(4);
    }

    public function main(){}
}