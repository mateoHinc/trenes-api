<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = ['name', 'capacity'];

    public function routes()
    {
        return $this->hasMany(Route::class);
    }
}
