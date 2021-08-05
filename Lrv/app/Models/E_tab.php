<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class E_tab extends Model
{
    protected $table='pro_ls';
    // protected $primaryKey='id';
     public $timestamps=false;
  
     // const CREATED_AT='create_time';
     // const UPDATED_AT='update_time';
  
     protected $fillable = [
         'name',
         'id',
         'uname'
         // 'duration',
         // 'quantity',
                  
     ];
}
