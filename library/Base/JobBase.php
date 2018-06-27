<?php

namespace Base;

use JobAbstract;

class JobBase extends JobAbstract{


    protected static $instanct;

    public static function getInstanct($config = null){

        if (null === self::$instanct){
            self::$instanct = new self($config);
        }

        return self::$instanct;

    }

    public function init()
    {
        $this->run();
    }

    public function run(){}
}