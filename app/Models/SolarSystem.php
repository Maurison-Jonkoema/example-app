<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolarSystem extends Model
{
    use HasFactory;

    protected $fillable = ['name'];  // Hier kun je de velden definiëren die massaal toegewezen mogen worden

    /**
     * Relatie: een zonnestelsel heeft meerdere planeten.
     */
    public function planets()
    {
        return $this->hasMany(Planet::class);  // Het zonnestelsel heeft meerdere planeten
    }
}
