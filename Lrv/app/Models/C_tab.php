<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C_tab extends Model
{
    protected $table='pro_pms';
   // protected $primaryKey='id';
    public $timestamps=false;
 
    // const CREATED_AT='create_time';
    // const UPDATED_AT='update_time';
 
    protected $fillable = [
        'name',
        'id',
        'payment'
        // 'duration',
        // 'quantity',
                 
    ];
}
