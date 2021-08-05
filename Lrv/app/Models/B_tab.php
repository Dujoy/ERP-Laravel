<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B_tab extends Model
{
    //use HasFactory;
    protected $table='new_mmbs';
   // protected $primaryKey='id';
    public $timestamps=false;
 
    // const CREATED_AT='create_time';
    // const UPDATED_AT='update_time';
 
    protected $fillable = [
        'name',
        'uname',
        'password',
        'gmail'
        // 'duration',
        // 'quantity',
                 
    ];
}
