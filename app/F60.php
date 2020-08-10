<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class F60 extends Model
{
    protected $table = "f60";

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
        'REFDATE',
        'PETS',
        'MEALPATTERN',
        'INTERVIEW_STATUS',
        'DATEENC',
        'INTERVIEW_STATUS_IND',
        'DATE_EDIT',
        'refdate_recall',
        'REFDAY',
        'yearref',
        'dayref',
        'monthref'
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


    public function getTheForm60($eacode, $hcn, $shsn){

        return $this->where('eacode', $eacode)
                ->where('hcn', $hcn)
                ->where('shsn', $shsn)
                ->exclude('id')
                ->get()
                ->toArray();

    }
    
    public function getTheForm60Count($eacode, $hcn, $shsn){

        return $this->where('eacode', $eacode)
                ->where('hcn', $hcn)
                ->where('shsn', $shsn)
                ->get()
                ->count();

    } 
}
