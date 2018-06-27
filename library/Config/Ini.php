<?php

namespace Config;

class Ini{

    public $data;

    public $loadSection;

    public function __construct($filename, $section = null, $options = false)
    {
        $this->_loadIniFile($filename);

    }

    public function _loadIniFile($filename){

        $iniArray = $this->_parseIniFile($filename);

        print_r($iniArray);

    }

    public function _parseIniFile($filename){

        $iniArray = parse_ini_file($filename, true);

        return $iniArray;
    }

    public function toArray()
    {
        $array = array();
        $data = $this->_data;
        foreach ($data as $key => $value) {
            if ($value instanceof Zend_Config) {
                $array[$key] = $value->toArray();
            } else {
                $array[$key] = $value;
            }
        }
        return $array;
    }

}