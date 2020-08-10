<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encoder extends Model
{

    public function getAllTheEncoders(){

        $path = storage_path() . "\app\public\json\Encoders.json";

        $encoders = json_decode(file_get_contents($path), true); 

        return $encoders;

    } 
}
