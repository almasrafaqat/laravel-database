<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = ['number', 'street', 'country'];
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id'); // 2nd 3rd args optional
    }
}
