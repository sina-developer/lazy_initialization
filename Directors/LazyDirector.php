<?php

namespace Directors;

use Entities\Processes\Users;

class LazyDirector{
    private string $type;
    private static array $types = [];
    
    public function __construc(string $type){
        $this->type = $type;
    }

    public static function getUsers(string $type){
        if(!isset(self::$types[$type])){
            self::$types[$type] = (new Users())->heavyProcess();;
        }
        return self::$types[$type];
    }

    public static function toString(){
        // return json_encode(self::$types);
        return json_encode(array_keys(self::$types))."\n";
    }
}