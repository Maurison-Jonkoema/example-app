<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    protected $table = 'planets';  
    protected $fillable = ['name', 'type', 'size', 'distance_from_sun']; 

    
}
