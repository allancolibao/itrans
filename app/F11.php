<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class F11 extends Model
{
    
    protected $table = "f11";


    public function getAllTheMembers(){

        return $this->first();

    } 
}
