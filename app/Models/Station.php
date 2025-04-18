<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $fillable = ['name', 'city'];

    public function routesAsOrigin()
    {
        return $this->hasMany(Route::class, 'origin_station_id');
    }

    public function routesAsDetination()
    {
        return $this->hasMany(Route::class, 'destination_station_id');
    }
}
