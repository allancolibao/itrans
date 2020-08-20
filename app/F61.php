<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class F61 extends Model
{
    protected $table = "f61";


    /**
     *  Array of table coloumns
     * 
     * 
     */
    protected $columns = [
        'id',
        'eacode',
        'hcn',
        'shsn',
        'MP',
        'MEMBER_CODE',
        'SURNAME',
        'GIVENNAME',
        'AGE',
        'SEX',
        'PSC',
        'BF',
        'AMSNCK',
        'LUNCH',
        'PMSNCK',
        'SUPPER',
        'LATESNCK',
        'LOCKED',
        'INTERVIEW_STATUS',
        'DATE_ENC',
        'DATE_EDIT',
        'VISITOR'
    ]; 
    
    
     /**
     *  Exclude scope method
     * 
     * 
     */
    public function scopeExclude($query,$value = array())
    {

        return $query->select( array_diff( $this->columns,(array) $value) );

    }


    public function getTheForm61($eacode, $hcn, $shsn){

        return $this->where('eacode', $eacode)
                ->where('hcn', $hcn)
                ->where('shsn', $shsn)
                ->exclude('id')
                ->get()
                ->toArray();

    } 


    public function getTheForm61Count($eacode, $hcn, $shsn){

        return $this->where('eacode', $eacode)
                ->where('hcn', $hcn)
                ->where('shsn', $shsn)
                ->get()
                ->count();

    } 

    
}
