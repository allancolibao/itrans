<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class F71 extends Model
{
    protected $table = "f71";


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
        'MEMBER_CODE',
        'RECDAY',
        'LINENO',
        'FIC',
        'FOODITEM',
        'FOODDESC',
        'FOODBRND',
        'FVS',
        'ISFORTIFIED',
        'VITA',
        'IRON',
        'OTHF',
        'FOODMAINING',
        'FOODBRNDCD',
        'AMTSIZEMEAS',
        'MEALCD',
        'RFCODE',
        'FOODCODE',
        'FOODEX',
        'FOODWEIGHT',
        'RCC',
        'CMC',
        'SUPCODE',
        'SRCCODE',
        'OTH_SRC',
        'CPC',
        'UNITCOST',
        'UNITWGT',
        'UNITMEAS',
        'CLEAN',
        'status',
        'refday',
        'memkey',
        'DATEENC',
        'FOOD_ITEM',
        'DATE_EDIT',
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


    public function getTheForm71($eacode, $hcn, $shsn){

        return $this->where('eacode', $eacode)
                ->where('hcn', $hcn)
                ->where('shsn', $shsn)
                ->exclude('id')
                ->get()
                ->toArray();

    } 

    public function getTheForm71Count($eacode, $hcn, $shsn){

        return $this->where('eacode', $eacode)
                ->where('hcn', $hcn)
                ->where('shsn', $shsn)
                ->get()
                ->count();

    } 

    public function getTheForm71PerEacode($eacode, $hcn, $shsn){

        return $this->where('eacode', $eacode)
                ->where('hcn', $hcn)
                ->where('shsn', $shsn)
                ->distinct()
                ->get(['eacode','hcn','shsn', 'MEMBER_CODE'])
                ->count();

    }

   
}
