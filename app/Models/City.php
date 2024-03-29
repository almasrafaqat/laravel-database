<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public function rooms(){
        return $this->belongsToMany('App\Models\Room', 'city_room', 'city_id', 'room_id')->withPivot('created_at','updated_at')->using('App\Models\CityRoom');  // 1st 2nd 3rd args are optional wherePivot() wherePivotNotIn() or wherePivotIn('priority', [1, 2]);
 
    }
    
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
