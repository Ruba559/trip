<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Available;
use App\Models\Place;


class Room extends Model
{
    use HasFactory;

    
    protected $fillable = [
      'count_people'  ,
      'price'    ,
      'place_id'  ,
      'description' ,
      'is_avalible',
      'created_at',
      'updated_at',
];


    public function available()
    {
       return $this->hasMany(Available::class);
    }



    public function place()
    {
       return $this->belongsTo(Place::class ,'place_id');
    }
}
