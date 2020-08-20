<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class F76 extends Model
{
    protected $table = "f76";


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
        'RES_NO',
        'RES_NAME',
        'tick_A',
        'tick_B',
        'tick_C',
        'tick_D',
        'tick_E',
        'tick_F',
        'BF_1',
        'BF_1_OTH',
        'LU_1',
        'LU_1_OTH',
        'SU_1',
        'SU_1_OTH',
        'BF_2',
        'BF_2_OTH',
        'LU_2',
        'LU_2_OTH',
        'SU_2',
        'SU_2_OTH',
        'time_3',
        'cost_3',
        'lack_3',
        'vary_3',
        'health_3',
        'safe_3',
        'qual_3',
        'util_3',
        'oth_3',
        'BF_4',
        'BF_4_OTH',
        'LU_4',
        'LU_4_OTH',
        'SU_4',
        'SU_4_OTH',
        'time_5',
        'cost_5',
        'lack_5',
        'vary_5',
        'health_5',
        'safe_5',
        'qual_5',
        'util_5',
        'oth_5',
        'BF_6',
        'BF_6_OTH',
        'LU_6',
        'LU_6_OTH',
        'SU_6',
        'SU_6_OTH',
        'BF_7',
        'BF_7_OTH',
        'LU_7',
        'LU_7_OTH',
        'SU_7',
        'SU_7_OTH',
        'time_8',
        'cost_8',
        'lack_8',
        'vary_8',
        'health_8',
        'safe_8',
        'qual_8',
        'util_8',
        'oth_8',
        'BF_9',
        'BF_9_OTH',
        'LU_9',
        'LU_9_OTH',
        'SU_9',
        'SU_9_OTH',
        'time_10',
        'cost_10',
        'lack_10',
        'vary_10',
        'health_10',
        'safe_10',
        'qual_10',
        'util_10',
        'oth_10',
        'BF_11',
        'BF_11_OTH',
        'LU_11',
        'LU_11_OTH',
        'SU_11',
        'SU_11_OTH',
        'BF_12',
        'BF_12_OTH',
        'LU_12',
        'LU_12_OTH',
        'SU_12',
        'SU_12_OTH',
        'time_13',
        'cost_13',
        'lack_13',
        'vary_13',
        'health_13',
        'safe_13',
        'qual_13',
        'util_13',
        'oth_13',
        'DATEENC',
        'DATE_EDIT',
        'INTERVIEW_STATUS',
        'tick_1'
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


    public function getTheForm76($eacode, $hcn, $shsn){

        return $this->where('eacode', $eacode)
                ->where('hcn', $hcn)
                ->where('shsn', $shsn)
                ->exclude('id')
                ->get()
                ->toArray();

    } 

    public function getTheForm76Count($eacode, $hcn, $shsn){

        return $this->where('eacode', $eacode)
                ->where('hcn', $hcn)
                ->where('shsn', $shsn)
                ->get()
                ->count();

    } 



}
