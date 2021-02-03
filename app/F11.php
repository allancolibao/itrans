<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class F11 extends Model
{
    
    protected $table = "f11";


    public function getAllTheMembers(){

        return $this->first();

    } 

    public function getTheForm11PerEacode($eacode){

        return $this->where('eacode', $eacode)
                ->distinct()
                ->get(['eacode','hcn','shsn'])
                ->toArray();

    }
}
