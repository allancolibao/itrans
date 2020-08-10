<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    /**
     * Name of the connection.
     *
     * 
     */
    protected $connection = 'mysql';


    /**
     * Name of the table.
     *
     * 
     */
    protected $table = "logs";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'eacode',
        'hcn',
        'shsn',
        'full_name',
        'f60_count',
        'f61_count',
        'f63_count',
        'f71_count',
        'f76_count',
    ];
}
