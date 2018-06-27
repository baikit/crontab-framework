<?php

abstract class JobAbstract{

    public $config;

    public $log;

    public $db;

    public $memcache;

    public $redis;

    public function __construct()
    {

        $this->init();
        $this->initLog();
    }

    public function init(){}

    public function initComment()
    {

    }

    public function initDb(){}

    public function initMemcache(){}

    public function initRedis(){}

    public function initLog(){}


    public function writeLog($message,$level){
        if (!$this->_log) {
            return;
        }

        try {
            $this->_log->log($message, $level);
        } catch (Exception $e) {
            trigger_error("{$e->getCode()}\t{$e->getMessage()}", E_USER_WARNING);
        }
    }

    abstract public function run();

}