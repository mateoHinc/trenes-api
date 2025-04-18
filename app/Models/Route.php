<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = ['train_id', 'origin_station_id', 'destination_station_id'];

    public function train()
    {
        return $this->belongsTo(Train::class);
    }

    public function origin()
    {
        return $this->belongsTo(Station::class, 'origin_station_id');
    }

    public function destination()
    {
        return $this->belongsTo(Station::class, 'destination_station_id');
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
