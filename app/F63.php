<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class F63 extends Model
{
    protected $table = "f63";


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
        'LINENO',
        'MEALCD',
        'WRCODE',
        'RFCODE',
        'FOODCODE',
        'FOODEX',
        'FOODDESC',
        'FOODWEIGHT',
        'RCC',
        'CMC',
        'SUPCODE',
        'SRCCODE',
        'OTH_SRC',
        'PW_WGT',
        'PW_RCC',
        'PW_CMC',
        'PURCODE',
        'GO_WGT',
        'GO_RCC',
        'GO_CMC',
        'LO_WGT',
        'LO_RCC',
        'LO_CMC',
        'UNITCOST',
        'UNITWGT',
        'APWT',
        'EPWT',
        'NETEP',
        'ENERGY',
        'PROTEIN',
        'FAT',
        'CARBOHYDRATES',
        'CALCIUM',
        'IRON',
        'THIAMIN',
        'RIBOFLAVIN',
        'NIACIN',
        'VITAMIN_A',
        'VITAMIN_C',
        'PHOSPHORUS',
        'FOODGROUP',
        'PW_APWT',
        'PW_EPWT',
        'PW_ENERGY',
        'PW_PROTEIN',
        'PW_FAT',
        'PW_CARBOHYDRATES',
        'PW_CALCIUM',
        'PW_IRON',
        'PW_THIAMIN',
        'PW_RIBOFLAVIN',
        'PW_NIACIN',
        'PW_VITAMIN_A',
        'PW_VITAMIN_C',
        'PW_PHOSPHORUS',
        'CLEAN',
        'DATEENC',
        'status',
        'BRANDNAME',
        'MAINIGNT',
        'BRANDCODE',
        'FOOD_ITEM',
        'FOODITEM',
        'DESCRIPTION',
        'DATE_EDIT',
        'UNIT',
        'FOOITEM'
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


    public function getTheForm63($eacode, $hcn, $shsn){

        return $this->where('eacode', $eacode)
                ->where('hcn', $hcn)
                ->where('shsn', $shsn)
                ->exclude('id')
                ->get()
                ->toArray();

    }

    public function getTheForm63Count($eacode, $hcn, $shsn){

        return $this->where('eacode', $eacode)
                ->where('hcn', $hcn)
                ->where('shsn', $shsn)
                ->get()
                ->count();

    } 


    public function getTheForm63PerEacode($eacode, $hcn, $shsn){

        $hasData = $this->where('eacode', $eacode)
                ->where('hcn', $hcn)
                ->where('shsn', $shsn)
                ->first();

        if($hasData) {
            return 1;
        }

        return 0;
    }
}
