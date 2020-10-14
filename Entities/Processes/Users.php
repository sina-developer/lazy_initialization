<?php

namespace Entities\Processes;

use Entities\Process;

class Users implements Process{
    public function heavyProcess(){
        $data = [];
        for ($i=0; $i < 10; $i++) { 
            $data [] = [
                "id" => $i,
                "username" => "user_".rand(0 , 1000000)
            ];
        }
        return $data;
    }
}